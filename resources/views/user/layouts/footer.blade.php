<section class="white-bg">
    {{-- footer --}}
    <div class="relative">
        {{-- logo lớn --}}
        <div class="footer-big-img">
            <img src="images/logo/hailua.png" alt="">
        </div>
        <div class="middle-footer">
            <div class="container">
                <div class="row mt-30 mb-30">
                    {{-- link --}}
                    <div class="col-lg-8 col-sm-12 mb-40">
                        <div class="row">
                            {{-- sản phẩm --}}
                            <div class="col-lg-3 col-6 mb-20">
                                <div class="fw-600 fz-20">Điện thoại</div>
                                <div class="d-flex flex-column mt-20">
                                    {{-- @foreach ($lst_brand as $key)
                                        <div class="d-inline-flex mb-5"><a href="{{route('user/dien-thoai', ['hang' => $key['brand']])}}" class="gray-1">{{$key['brand']}}</a></div>
                                    @endforeach --}}
                                    <div class="d-inline-flex"><a href="" class="fw-600 text-color">Tra cứu</a></div>
                                </div>
                            </div>

                            {{-- tài khoản --}}
                            <div class="col-lg-3 col-6 mb-20">
                                <div class="fw-600 fz-20">Tài khoản</div>
                                <div class="d-flex flex-column mt-20">
                                    <div class="d-inline-flex mb-5"><a href="" class="gray-1">Quản lý tài khoản</a></div>
                                    <div class="d-inline-flex mb-5"><a href="" class="gray-1">Lịch sử mua hàng</a></div>
                                    <div class="d-inline-flex mb-5"><a href="" class="gray-1">Sản phẩm yêu thích</a></div>
                                </div>
                            </div>

                            {{-- tổng đài hỗ trợ --}}
                            <div class="col-lg-3 col-6 mb-20">
                                <div class="fw-600 fz-20">Tổng đài hỗ trợ</div>
                                <div class="d-flex flex-column mt-20">
                                    <div>Gọi mua:  <b>0902 932589</b></div>
                                    <div>Kỹ thuật: <b>0932103748</b></div>
                                </div>
                            </div>

                            {{-- về chúng tôi --}}
                            <div class="col-lg-3 col-6 mb-20">
                                <div class="fw-600 fz-20">Về chúng tôi</div>
                                <div class="d-flex flex-column mt-20">
                                    <div class="d-inline-flex"><a href="#" class="gray-1">Liên hệ</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- logo --}}
                    <div class="col-lg-4 col-sm-12 mb-40">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex justify-content-center">
                                    <div class='d-flex flex-column align-items-center'>
                                        <img src="images/logo/LDMobile-logo.png" alt="logo-footer" width="100px">
                                        <div class="pt-20 pb-20">Theo dõi chúng tôi</div>
                                        <div class="social-platform margin">
                                            <ul class="social-list">
                                                <li><a href="#facebook"><i class="fb fa-icon fa fa-facebook-f"></i></a></li>
                                                <li><a href="#twitter"><i class="twt fa-icon fa fa-twitter"></i></a></li>
                                                <li><a href="#google"><i class="gg fa-icon fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fz-24 text-center mb-20">Download for</div>
                                
                                <div class="copyright-footer">
                                    Copyright &copy; 2022 HaiLuaMobile. All rights severved.
                       </div>
                                {{-- <a href="images/app-release.apk" download><img src="images/logo/android-logo.png" alt="W3Schools" class="center-img w-80"></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">

                {{-- copyright --}}
                {{-- <div class="copyright-footer">
                             Copyright &copy; 2022 HaiLuaMobile. All rights severved. --}}
                </div>
            </div>
        </div>
    </div>
</section>