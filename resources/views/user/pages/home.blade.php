@extends('user.layouts.master')
@section('title')
    Home
@endsection




@section('user-contents')
  <!-- Start: Carousel/Slide-->
  @include('user.pages.banner.banner')
<!--End: Carousel  -->

<!-- Start: Best Seller -->
<div class="row background">
    <!--Start: Header-->
    <div class="title-header text-center">
        <p style="letter-spacing: 2px;">Best Seller</p>
        <p>______</p>
    </div>
    <!-- End: Header -->
    <div class="container menu-box">
        <!-- Start: Body -->
            <div class="col-md-2">
                <div class="menu-item">
                    <a href="#"><img src="Images/ga04.jpg" width="100%"></a>
                    <div class="detail-item">
                        <h4>Iphone 14 Pro Max</h4>
                        <h5>35.000.000</h5>
                        <p>tim</p>
                    </div>
                </div>
                <div class="menu-overlay"></div>
            </div>

            <div class="col-md-2">
                <div class="menu-item">
                    <a href="#"><img src="Images/gaa05.jpg" width="100%"></a>
                    <div class="detail-item">
                        <h4>Iphone 13 Pro Max</h4>
                        <h5>35.000.000</h5>
                        <p>black</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="menu-item">
                    <a href="#"><img src="Images/item-1.png" width="100%"></a>
                    <div class="detail-item">
                        <h4>samsung </h4>
                        <h5>45.000.000</h5>
                        <p>hong</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="menu-item">
                    <a href="#"><img src="Images/item-2.png" width="100%"></a>
                    <div class="detail-item">
                        <h4>samsung</h4>
                        <h5>24.000.000</h5>
                        <p>black</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="menu-item">
                    <a href="#"><img src="Images/item-3.png" width="100%"></a>
                    <div class="detail-item">
                        <h4>latop</h4>
                        <h5>20.000.000</h5>
                        <p>black</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="menu-item">
                    <a href="#"><img src="Images/item-4.png" width="100%"></a>
                    <div class="detail-item">
                        <h4>Akko</h4>
                        <h5>3. 000.000</h5>
                        <p>ddo</p>
                    </div>
                </div>
            </div>
        <!-- End: Body -->
        <!-- Start: Footer -->
            <div class="menu-footer">
                <a href="{{ route('user/shop')}}">View Our Products</a>
            </div>
        <!-- End: Footer -->
    </div>
</div>
<!-- End: Best Seller -->
<!-- Start: Feedback -->
<div class="row background">
    <div class="title-header text-center">
        <p style="letter-spacing: 2px;">Feedbacks</p>
        <p>______</p>
    </div>

    <div class="container" style="margin-bottom: 20px;">
        <!-- Feedback 1-->
        <div class="col-lg-3">
            <div class="img-size img-layer"><img src="Images/banner/minhtam.jpg" alt="">
                <div class="img-overlay"></div>
                <!-- Nội dung hiển thị trên ảnh -->
                <div class="img-content">
                    <!-- Tiêu đề -->
                    <h3 class="img-title">Noah Clark</h3>
                    <!-- Description -->
                    <blockquote class="img-quote font-weight-light mb-0">" Quality product, This shop is a must-go
                        place."</blockquote>
                </div>
            </div>
        </div>
        <!-- Feedback 2-->
        <div class="col-lg-3">
            <div class="img-size img-layer"><img src="Images/banner/vannhi (2).png" alt="">
                <div class="img-overlay"></div>
                <!-- Nội dung hiển thị trên ảnh -->
                <div class="img-content">
                    <!-- Tiêu đề -->
                    <h3 class="img-title">Olivia Rodrigo</h3>
                    <!-- Description -->
                    <blockquote class="img-quote font-weight-light mb-0">" Incredible delivery service, lovely
                        product."</blockquote>
                </div>
            </div>
        </div>
        <!-- Feedback 3-->
        <div class="col-lg-3">
            <div class="img-size img-layer"><img src="Images/banner/lua.jpg" alt="">
                <div class="img-overlay"></div>
                <!-- Nội dung hiển thị trên ảnh -->
                <div class="img-content">
                    <!-- Tiêu đề -->
                    <h3 class="img-title">Florence Pugh</h3>
                    <!-- Description -->
                    <blockquote class="img-quote font-weight-light mb-0">"Very good product as said in description."
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- Feedback 4-->
        <div class="col-lg-3">
            <div class="img-size img-layer"><img src="Images/banner/banner01.jpg" alt="">
                <div class="img-overlay"></div>
                <!-- Nội dung hiển thị trên ảnh -->
                <div class="img-content">
                    <!-- Tiêu đề -->
                    <h3 class="img-title">Rachel McAdams</h3>
                    <!-- Description -->
                    <blockquote class="img-quote font-weight-light mb-0">"This mug has become my most favourite. "
                    </blockquote>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End: Feedback -->

    
@endsection