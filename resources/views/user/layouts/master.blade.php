@include('user.layouts.head')

    <!-- Start Header (NavBar + Logo) -->
@include('user.layouts.header')
    <!-- End: Header -->

    <!-- Start: Right-side-bar -->
    <div class="right-side-bar">
        <a href="#"><span class="fa-icon fa fa-facebook"></span></a>
        <a href="#"><span class="fa-icon fa fa-instagram"></span></a>
        <a href="#"><span class="fa-icon fa fa-twitter"></span></a>
    </div>
    <!-- End: Right-side-bar -->

    @yield('user-contents')
    

 <!-- Start: Footer -->
@include('user.layouts.footer')
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
                            <input type="email" onfocus="show(this)" onblur="hide(this)" class="form-control" id="usremail" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="password" onfocus="show(this)" onblur="hide(this)"  class="form-control" id="psw" placeholder="">
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

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/main.js')   }}"></script>
</body>

</html>
