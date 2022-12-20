@extends('user.layouts.master')

@section('title')
    about
@endsection

@section('user-contents')
   
    <!-- Start: Section 1 -->
<div class="section container">
    <div class="row">
        <div class="col-md-4">
            <div class="ls-img">
                <img src="images/aboutus/aboutus06.png" width="100%" srcset="">
            </div>
        </div>
        <div class="col-md-8">
            <!-- Tiêu đề -->
            <div class="heading">
                <p>ABOUT US</p>
            </div>
            <!-- Tiểu sử -->
            <div class="bio text-justify">
                <p> Two rice shop is our first and most enthusiastic project. Ever since we started learning how to build a website using Laravel technology, Mysql Amin we have been excited and worked hard every day for this project. We have been tasked with creating a website that can provide customers with information about products.

                    The website is designed in a swashbuckling style with sweet, messy colors that are bold, white and black. We hope to be able to give our customers a pleasant and happy look when they visit the website.
                    
                    We can end their confusion about product differences by creating a comparison function so customers can see the differences between other products. Not only that, we also allow users to look up their favorite brands with filters easily. In addition, if customers have difficulty with how to choose a product, we create videos for consumers to watch to make a decision to choose the right product for them.
                    
                    This project was completed in almost a month with the contribution of a dedicated, dedicated and hard-working team of 4. Thank you for watching.
                    two rice shops.</p>
                <div class="text-center margin">
                    <a href="#profile" class="member-btn animated-hover">
                        Meet our members <span class=" arrow glyphicon glyphicon-chevron-down"
                            style="font-weight: 200; font-size: 18px"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Section 2 -->

<!-- Start: Section 2 -->
<div class="margin container">
    <div class="col-md-6">
        <div class="quote">
            <blockquote>Quality is the best business plan</blockquote>
        </div>
    </div>

</div>
<!-- End: Section 2 -->

<!-- Start: Section 3 -->
<div id="profile" class="margin container">
    <div class="text-center member">
        <p>Members</p>
    </div>
    <div class="row member-list">
        <!-- Member 1 -->
        <div class="col-md-4">
            <div class="profile-box">
                <img src="images/aboutus/aboutus05.png" alt="" srcset="">
                <div class="box-overlay"></div>
                <div class="box-content">
                    <div class="hidden-content">
                        <h3 class="fullname">Trần Văn NHi </h3>
                        <p class="job-title">Student</p> <br>
                        <p class="job-title">T12203.E1</p> <br>
                        <p class="job-title">Leader</p>

                        <ul class="icon-member">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Member 2 -->
        <div class="col-md-4">
            <div class="profile-box">
                <img src="Images/aboutus/aboutus0.jpg" alt="" srcset="">
                <div class="box-overlay"></div>
                <div class="box-content">
                    <div class="hidden-content">
                        <h3 class="fullname">Nguyễn Trần Thanh Liêm </h3>
                        <span class="job-title">Student</span> <br>
                        <p class="job-title">T12203.E1</p> <br>
                        <p class="job-title">Member</p>
                        <ul class="icon-member">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Member 3 -->
        <div class="col-md-4">
            <div class="profile-box">
                <img src="Images/aboutus/aboutus03.jpg" alt="" srcset="">
                <div class="box-overlay"></div>
                <div class="box-content">
                    <div class="hidden-content">
                        <h3 class="fullname">Lý Đức Hào</h3>
                        <span class="job-title">Student</span> <br>
                        <p class="job-title">t12203.E1</p> <br>
                        <p class="job-title">feedback</p>

                        <ul class="icon-member">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="profile-box">
                <img src="Images/aboutus/aboutus3.jpg" alt="" srcset="">
                <div class="box-overlay"></div>
                <div class="box-content">
                    <div class="hidden-content">
                        <h3 class="fullname">Nguyễn Hoài Nam</h3>
                        <span class="job-title">ok</span> <br>
                        <p class="job-title">Màu Hồng</p> <br>
                        <p class="job-title">Bao Cao Su</p>

                        <ul class="icon-member">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <!-- Start: Footer -->
<div class="row footer">

    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <img src="Images/logo2.jpg" width="150" height="60">
        </div>

        <!-- Contact Information -->
        <div class="contact">
            <p style="font-size: 20px">
                Vietnam </p>
            <p style="font-size: 20px;"></p>
            <p style="font-size: 20px;"></p>

        </div>
        <!-- Social Media -->
        <div class="social-icons">
            <div class="icons">
                <a href="#"><span class="fa-icon fa fa-facebook"></span></a>
            </div>

            <div class="icons">
                <a href="#"><span class="fa-icon fa fa-instagram"></span></a>
            </div>

            <div class="icons">
                <a href="#"><span class="fa-icon fa fa-twitter"></span></a>
            </div>
        </div>


    </div>
</div> --}}
<!-- End: Footer -->

<!-- Modal Member -->
<div class="modal fade" id="memberModal" role="dialog">
    <div class="modal-dialog modal-lg row">

        <!-- Modal content-->
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header text-center" style="padding:35px 50px; background: #ffe5d8">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="letter-spacing: 1.5px;">MEMBERSHIP</h4>
            </div>

            <!--Start: Modal Body -->
            <!-- Left-Body -->
            <div class="modal-body col-md-6" style="padding:40px 50px; background: #f4f9ff">
                <div class="text-center modal-header">
                    <h3>Log in </h3>
                </div>

                <form role="form" class="margin">

                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
                        <input type="email" onfocus="show(this)" onblur="hide(this)" class="form-control"
                            id="usremail" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="password" onfocus="show(this)" onblur="hide(this)" class="form-control"
                            id="psw" placeholder="">
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>

                    <button type="submit" class="login-btn btn btn-block">Login</button>
                </form>

            </div>
            <!-- Right-Body -->
            <div class="modal-body col-md-6 bg-member" style="padding:40px 50px;">
                <div class="text-center modal-header">
                    <h3>Log in with</h3>
                </div>

                <div class="social-platform margin">
                    <ul class="social-list">
                        <li><a href="#facebook"><i class="fb fa-icon fa fa-facebook-f"></i></a></li>
                        <li><a href="#twitter"><i class="twt fa-icon fa fa-twitter"></i></a></li>
                        <li><a href="#google"><i class="gg fa-icon fa fa-google-plus"></i></a></li>
                    </ul>
                </div>

            </div>
            <!-- End: Modal Body -->
        </div>
    </div>
</div>
{{-- @include('user.content.section.sec-logo') --}}
{{-- @stop --}}
@endsection