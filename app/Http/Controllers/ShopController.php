<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function getShop(){
        return view('user.pages.shop.shop');
    }
    
  public function ChiTiet($name){
        $id = $this->getProductIdByName($name);
        
        if(!$id){
            return redirect()->route('user/shop')->with('toast_message', 'Sản phẩm không hợp lệ');
        }

        $SANPHAM = SANPHAM::find($id);

        $id_msp = $SANPHAM->id_msp;
        $capacity = $SANPHAM->dungluong;
        $ram = $SANPHAM->ram;
        $id_km = $SANPHAM->id_km;
       $model = MAUSP::where('id', $id_msp)->first();
        $user = session('user');

        // các điện thoại cùng mẫu
        $phoneByModel = MAUSP::find($id_msp)->sanpham;

        // các điện thoại cùng mẫu theo dung lượng
        $phoneByCapacity = $this->getProductByCapacity($id_msp);

        // danh sách id_sp cùng dung lượng
        $id_sp_list = $this->getListIdSameCapacity($id);
        
        /*==============================================================================================
                                                       Phone
        ================================================================================================*/

        // điện thoại theo id
        $phone = $this->getProductById($id);

        $phone['id_youtube'] = $model->id_youtube;
        $phone['baohanh'] = MAUSP::where('id', $id_msp)->first()->baohanh;
        $phone['cauhinh'] = $this->getSpecifications($id);
        if($id_km) {
            $phone['khuyenmai'] = $this->getPromotionById($id_km);
        } else {
            $phone['khuyenmai'] = [];
        }

        /*==============================================================================================
                                                  product variation
        ================================================================================================*/

        $lst_variation = [
            'color' => [],
            'image' => [],
        ];

        // lấy màu sắc, hình ảnh biến thể
        $i = 0;
        foreach($phoneByModel as $key){
            if($key['dungluong'] === $capacity && $key['ram'] === $ram){
                $lst_variation['color'][$i] = [
                    'id' => $key['id'],
                    'hinhanh' => $key['hinhanh'],
                    'mausac' => $key['mausac'],
                    'giakhuyenmai' => $phone['giakhuyenmai'],
                    'yeuthich' => 0,
                ];

                array_push($lst_variation['image'], [
                    'id' => $key['id'],
                    'hinhanh' => $key['hinhanh'],
                ]);

                if(session('user')) {
                    // đã thêm màu sắc vào danh sách yêu thích
                    if(SP_YEUTHICH::where('id_tk', session('user')->id)->where('id_sp', $key['id'])->first()){
                        $lst_variation['color'][$i]['yeuthich'] = 'true';
                    } else {
                        $lst_variation['color'][$i]['yeuthich'] = 'false';
                    }
                }
                $i++;
            }
        }

        // danh sách dung lượng không trùng nhau
        $distinctCapacityList = [];
        // danh sách ram không trùng nhau
        $distinctRamList = [];

        foreach($phoneByCapacity as $product) {
            if(array_search($product['dungluong'], array_column($distinctCapacityList, 'dungluong')) === false) {
                array_push($distinctCapacityList, [
                    'dungluong' => $product['dungluong'],
                    'tensp_url' => $product['tensp_url'],
                    'giakhuyenmai' => $product['giakhuyenmai'],
                ]);
            }

            if(array_search($product['ram'], array_column($distinctRamList, 'ram')) === false) {
                array_push($distinctRamList, [
                    'ram' => $product['ram'],
                    'tensp_url' => $product['tensp_url'],
                    'giakhuyenmai' => $product['giakhuyenmai'],
                ]);
            }
        }

        /*==============================================================================================
                                                 Detail Evaluate
        ================================================================================================*/

        // đánh giá theo dung lượng
        $userEvaluate = [];
        $anotherEvaluate = [];

        $user ?
            $lst_evaluate = $this->getEvaluateByCapacity($id_sp_list, $user->id)
            :
            $lst_evaluate = $this->getEvaluateByCapacity($id_sp_list);

        if($user){
            $id_tk = $user->id;
            foreach($lst_evaluate['evaluate'] as $evaluate){
                if($evaluate['taikhoan']['id'] == $id_tk){
                    array_push($userEvaluate, $evaluate);
                } else {
                    array_push($anotherEvaluate, $evaluate);
                }
            }
        }

        // đánh giá sao
        $starRating = [
            'total-rating' => $lst_evaluate['total-rating'],
            'rating' => $lst_evaluate['rating'],
            'total-star' => $lst_evaluate['total-star'],
        ];

        /*==============================================================================================
                                                    supplier
        ================================================================================================*/

        $supplier = $this->getSupplierByModelId($id_msp);

        /*==============================================================================================
                                                     branch
        ================================================================================================*/

        $lst_area = TINHTHANH::all();

        /*==============================================================================================
                                                   slideshow model
        ==============================================================================================*/

        $slide_model = MAUSP::find($id_msp)->slideshow_ctmsp;

        /*==============================================================================================
                                                   same brand
        ==============================================================================================*/

        $lst_proSameBrand = $this->getRandomProductBySupplierId($id, $model->id_ncc);

        /*==============================================================================================
                                                similar product
        ==============================================================================================*/
        
        $lst_similarPro = $this->getProductByPriceRange($id);

        /*==============================================================================================
                                                Have not Evaluated
        ==============================================================================================*/

        // sản phẩm chưa đánh giá
        $haveNotEvaluated = [];

        // đơn hàng của người dùng
        if($user){
            foreach(DONHANG::where('id_tk', $user->id)->get() as $order){
                // đơn hàng thành công
                if($order->trangthaidonhang === 'Thành công'){
                    // chi tiết đơn hàng
                    foreach(DONHANG::find($order['id'])->ctdh as $detail){
                        $product = SANPHAM::find($detail->pivot->id_sp);
                        // sản phẩm cùng id_msp và dung lượng
                        if($product->id_msp === $id_msp && $product->dungluong === $capacity){
                            //thời gian đơn hàng
                            $timeOrder = strtotime(str_replace('/', '-', $order['thoigian']));
                            // đánh giá
                            $evaluate = DANHGIASP::where('id_tk', session('user')->id)->where('id_sp', $product->id)->get();
                            // không có id_sp trong bảng đánh giá
                            if(count($evaluate) == 0){
                                // nếu đã thêm vào mảng chưa đánh giá rồi thì tiếp tục
                                $flag = 0;
                                if(!empty($haveNotEvaluated)){
                                    foreach($haveNotEvaluated as $arr){
                                        if($arr['id'] == $product->id){
                                            $flag = 1;
                                            break;
                                        }
                                    }
                                    if($flag == 0){
                                        array_push($haveNotEvaluated, $this->getProductById($product->id));    
                                    }
                                } else {
                                    array_push($haveNotEvaluated, $this->getProductById($product->id));
                                }
                            }
                            // đã có id_sp trong bảng đánh giá. kiểm tra ngày mua với ngày đánh giá
                            else {
                                // thời gian đánh giá của id_sp mới nhất
                                $timeEvaluate = strtotime(str_replace('/', '-', $evaluate[count($evaluate) - 1]['thoigian']));
                                // nếu thời gian mua mới > thời gian đánh giá => chưa đánh giá
                                if($timeOrder > $timeEvaluate){
                                    // nếu đã thêm vào mảng chưa đánh giá rồi thì tiếp tục
                                    $flag = 0;
                                    if(!empty($haveNotEvaluated)){
                                        foreach($haveNotEvaluated as $arr){
                                            if($arr['id'] == $product->id){
                                                $flag = 1;
                                                break;
                                            }
                                        }
                                        if($flag == 0){
                                            array_push($haveNotEvaluated, $this->getProductById($product->id));    
                                        }
                                    } else {
                                        array_push($haveNotEvaluated, $this->getProductById($product->id));
                                    }
                                }
                            }
                        }
                    }
                }
            }   
        }

        /*==============================================================================================
                                                    data
        ================================================================================================*/

        $data = [
            'phone' => $phone,
            'starRating' => $starRating,
            'lst_variation' => $lst_variation,
            'distinctCapacityList' => $distinctCapacityList,
            'distinctRamList' => $distinctRamList,
            'supplier' => $supplier,
            'lst_area' => $lst_area,
            'slide_model' => $slide_model,
            'lst_proSameBrand' => $lst_proSameBrand,
            'lst_similarPro' => $lst_similarPro,
            'haveNotEvaluated' => $haveNotEvaluated,
            'userEvaluate' => $userEvaluate,
            'anotherEvaluate' => $anotherEvaluate,
        ];

        return view("user.pages.shop.chi-tiet-dien-thoai");
    }
}
