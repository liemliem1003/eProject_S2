<div class="section container">
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <!-- Thanh điều chỉnh nút slide -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
            <li data-target="#carousel-id" data-slide-to="2" class=""></li>
        </ol>
        <!-- Start: Slide -->
        <div class="carousel-inner">

            <div class="active item">
                <img src="images/slideshow/slide1.png" style="width: 100%; height: 700px">
                <div class="container">
                    <div class="carousel-caption">
                        <!-- <h1>Example headline.</h1>
                            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p> -->
                        <p><a class="btn1 btn btn-lg btn-primary" href="{{route('user/shop')}}" role="button">Check Now</a></p>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/slideshow/slide2.png" style="width: 100%; height: 900px">
                <div class="container">
                    <div class="carousel-caption">
                        <!-- <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                        <p><a class="btn btn1 btn2 btn-lg btn-primary" href="{{route('user/shop')}}" role="button">BUY NOW</a></p>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/slideshow/slide4.png" style="width: 100%; height: 800px">
                <div class="container">
                    <div class="carousel-caption">
                        <h1></h1>
                        <p></p>
                        
                       
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/slideshow/slide5.png" style="width: 100%; height: 800px">
                <div class="container">
                    <div class="carousel-caption">
                        <h1></h1>
                        <p></p>
                       
                        
                    </div>
                </div>
            </div>
            
        </div>
        <!-- -->
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span
                class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span
                class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>