@extends('user.layouts.master')
@section('title')
Contact Us
@endsection
@section('user-contents')
    <!-- Start: Contact Section-->
<div class="snow-bg section container">
    <div class="col-md-7">
        <div class="contact-heading text-center">
            <h1>Contact Us</h1>
            <p>Feel free to contact us any time. We will get back to you as soon as we can.</p>
        </div>

        <div class="col-md-2"></div>
        <div class="contact-form col-md-8">
            
         
         <form action="" method="POST" id="form1" role="form">
         
             <div class="form-group">
                 <label for="">Name</label>
                 <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" onfocus="show(this)" onblur="hide(this)" required>
             </div>

             <div class="form-group">
                 <label for="">Email</label>
                 <input type="text" class="form-control" id="email" name="email" onfocus="show(this)" onblur="hide(this)" placeholder="abc@gmail.com">
             </div>

             <div class="form-group">
                 <label for="">Message</label>
                 <textarea name="message" id="message" class="form-control" rows="5" onfocus="show(this)" onblur="hide(this)" required="required"></textarea>
             </div>
             
             <div class="text-center form-group">
                 <button type="submit" class="send-btn btn btn-primary">Send</button>
             </div>
         </form>
        </div>
        <div class="col-md-2"></div>

    </div>
    <div class="col-md-5">
        <div class="contact-img">
            <img src="images/aboutus/contact.png" width="100%" srcset="">
        </div>
    </div>
</div>
<!--End: Contact Section  -->

<!-- Start: Map & Info -->
<div class="margin container">
 <div class="col-md-8">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3192813592395!2d106.66408561446792!3d10.786840061951773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed2392c44df%3A0xd2ecb62e0d050fe9!2sFPT-Aptech%20Computer%20Education%20HCM!5e0!3m2!1sen!2s!4v1628272333196!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    </div>
 <div class="info col-md-4">
     <div class="info-heading">
         <h3>Info Contact</h3>
     </div>
     <div class="info-content">
         <a href="mailto:giftshop@gmail.com"><span style="font-size: 30px;" class="glyphicon glyphicon-envelope"></span>
         <p><span style="font-size: 30px;" class="glyphicon glyphicon-phone"></span> fpt Aptech </p>
         <p><span style="font-size: 30px;" class="glyphicon glyphicon-home"></span>  590 CMT8 St, Dist 3, HCMC</p>
         <p><span style="font-size: 30px;" class="glyphicon glyphicon-time"></span> 8:00 - 21:30</p>
     </div>    </div>
</div>
<!-- End: Map -->

@endsection