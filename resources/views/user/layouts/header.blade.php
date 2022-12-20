<div id="header" class="row fixed-top-header">
    <!-- Start: Navbar -->
    
    <div class="navbar">
        <ul class="menu" >
            <div style="display:inline-block; ">
            <img src="images/logo/hailua.png" alt="logo-footer" width="150px" hspace="100" a>
            </div>
            <li><a href="{{ route('user/home') }}">HOME</a></li>
            <li><a class="filter" href="{{ route('user/shop') }}" data-filter="all">SHOP</a>
                <ul class="subnav" id="filter_button">
                            <li><a class="filter" data-filter="Apply">Apply</a></li>
                            <li><a href="#" class="filter" data-filter="Samsung" >Samsung</a></li>
                            <li><a href="#" class="filter" data-filter="CLOCK">Clocks</a></li>
                            <li><a href="#" class="filter" data-filter="Stuffed animals" >Stuffed Animal</a></li>
                            <li><a href="#" class="filter" data-filter="Perfume">Perfumes</a></li>
                        </ul>
            </li>
            {{-- tìm kiếm & giỏ hàng --}}
           
            <li><a href="{{ route('user/about') }}"> About US </li>
            <li><a href="{{route('user/contact')}}">Contact US</a></li>
            <li class="cart">
                <a href="item.html" id="cart-shop">
                 
                    <span>ITEM</span>
                    <span class="glyphicon glyphicon-shopping-cart" id="count-item" data-count="0"></span>
                </a>
                <li><a class="filter" href="" data-filter="all">singin</a>
                <li><a class="filter" href="" data-filter="all">login</a>
            </li>
            
        </ul>
    </div>
    <!-- End: Navbar -->
</div>