@extends('user.layouts.master')

@section('title')
    Shop | HaiLuamobile 
@endsection

@section('user-contents')
        
<div id="filter-data" class="filter-section container-fluid">
    <!--Start: Cột Filter -->
    <div  class="col-sm-4 col-md-4 col-lg-4 ">
        <div class="categories-header">
            <p>Categories <span class="fa fa-filter" style="color: black; font-size: 20px"></span></p>
        </div>
            
        <div class="slide-box" id="filter_button">

            <div class="vertical-menu">
                <ul>
                    <li><a href='#profile' class="filter" data-filter="all">All</a></li>
                    <!-- Mug Item -->
                    <li class='sub-menu'><a class="filter" data-filter="Apply" href='#Apply'>Apply<div class='fa fa-caret-down right'></div></a>
                        <ul>
                            <li><a class="filter-brand pdbrand" data-filter="Clay Craft">Iphone14</a></li>
                            <li><a class="filter-brand pdbrand" data-filter="LaOpala">iphone 13</a></li>
                            <li><a class="filter-brand pdbrand" data-filter="Milton">ipohne 12</a></li>
                        </ul> 
                    </li>
                    <!-- Jewelries Item -->
                    <li class='sub-menu'><a class="filter" data-filter="Jewelry" href='#jewelries'>samsung<div class='fa fa-caret-down right'></div></a>
                        <ul>
                            <li><a class="filter-brand pdbrand" data-filter="Jewels galaxy">1</a></li>
                            <li><a class="filter-brand pdbrand" data-filter="Sukkhi">2</a></li>
                            <li><a class="filter-brand pdbrand" data-filter="Zaveri Pearls">3</a></li>
                        </ul>
                    </li>
                    <!-- Perfume Item -->
                    <li class='sub-menu'><a class="filter" data-filter="Perfume" href='#perfume'>laptop<div class='fa fa-caret-down right'></div></a>
                        <ul>
                            <li><a class="filter-brand pdbrand" data-filter="Axe">MacBook</a></li>
                            <li><a class="filter-brand pdbrand" data-filter="Chanel">Dell</a></li>
                            <li><a class="filter-brand pdbrand" data-filter="Miniso">HP</a></li>
                        </ul>
                    </li>
                    <!-- Clock Item -->
                    <li class='sub-menu'><a class="filter" data-filter="CLOCK" href='#clock'>Keybord<div class='fa fa-caret-down right'></div></a>
                        <ul>
                            <li><a class="filter-brand pdbrand" data-filter="Ajanta">Akko</a></li>
                            <li><a class="filter-brand pdbrand" data-filter="Oreva">ketchoy</a></li>
                            <li><a class="filter-brand pdbrand" data-filter="Solimo">limitet</a></li>
                        </ul>
                    </li>
                    <!-- Stuffed Animal -->
                    <li class='sub-menu'><a class="filter" data-filter="Stuffed animals" href='#animal'>chuot Sống<div class='fa fa-caret-down right'></div></a>
                        <ul>
                            <li><a class="filter-brand pdbrand" data-filter="BTC">Chuột Cơm</a></li>
                            <li><a class="filter-brand pdbrand" data-filter="Click4deal">Chuột cống Heo</a></li>
                            <li><a class="filter-brand pdbrand" data-filter="Webby">Chuôt Hamto</a></li>
                        </ul>
                    </li>
               
                </ul>
            </div>
        </div>
      
    </div>
    <!-- Start: Cột sản phẩm -->
    <div class="col-sm-8 col-md-8">
        <!-- Khối chứa thông tin sản phẩm -->
            <div class="product-layout" id="products">
            </div>
    </div>
    <!-- End: Cột sản phẩm -->

    <!-- Modal Temporary -->
    <div class="modal fade" id="showModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- div.modal-body include json data -->
            <div class="modal-body modal-item">    
            </div>
            <div class="modal-footer">
            </div>
            </div>

        </div>
    </div>

</div>
<div id="id00" class="panel-body row bg-light-pink comparePanle w3-margin-top">
        
    <!--Start: Header -->
    <div class="row w3-margin-top preview-header-panel">
        
        <div class="container">
            <a onclick="document.getElementById('id00').style.display='none'" class="glyphicon glyphicon-remove-circle modal-closeBtn1 pointer-cursor closeBtn"></a>
        </div>
            <p>Added Products for Comparison</p>
        </div>
        <!-- End: Header -->
        
        <!--Start: Added Product Row (Javascript) -->
        <div class="row titleMargin comparePan">
        </div>
        <!-- End: Added Product Row (Javascript) -->

        <!-- Start: Compare Button -->
        <div class="row w3-margin-bottom">  
            <button class="btn cmprBtn" disabled>Compare Products</button>
        </div>
        
        <!-- End: Compare Button -->
</div>
<div id="id01" class="w3-animate-zoom w3-modal modPos">

    <div class="row contentPop w3-margin-top">
        <div class="comparision-header text-center w3-margin-bottom">
        </div>
        
    </div>

    <a onclick="document.getElementById('id01').style.display='none'" class="glyphicon glyphicon-remove-circle modal-closeBtn pointer-cursor closeBtn"></a>

</div>
 
<div class="row background">
    <div class="title-header text-center">
        <p style="letter-spacing: 2px;">Feedbacks</p>
        <p>______</p>
    </div>

    <div class="container" style="margin-bottom: 20px;">
       <!-- Feedback 1-->
        <div class="col-lg-3">
            <div class="img-size img-layer"><img src="#" alt="">
                <div class="img-overlay"></div>
                <!-- Nội dung hiển thị trên ảnh -->
                <div class="img-content">
                    <!-- Tiêu đề -->
                    <h3 class="img-title">Noah Clark</h3>
                    <!-- Description -->
                    <blockquote class="img-quote font-weight-light mb-0">" Quality product, This shop is a must-go place."</blockquote>
                </div>
            </div>
        </div>
       <!-- Feedback 2-->
       <div class="col-lg-3">
        <div class="img-size img-layer"><img src="#" alt="">
            <div class="img-overlay"></div>
            <!-- Nội dung hiển thị trên ảnh -->
            <div class="img-content">
                <!-- Tiêu đề -->
                <h3 class="img-title">Olivia Rodrigo</h3>
                <!-- Description -->
                <blockquote class="img-quote font-weight-light mb-0">" Incredible delivery service, lovely product."</blockquote>
            </div>
        </div>
    </div>
      <!-- Feedback 3-->
      <div class="col-lg-3">
        <div class="img-size img-layer"><img src="#" alt="">
            <div class="img-overlay"></div>
            <!-- Nội dung hiển thị trên ảnh -->
            <div class="img-content">
                <!-- Tiêu đề -->
                <h3 class="img-title">Florence Pugh</h3>
                <!-- Description -->
                <blockquote class="img-quote font-weight-light mb-0">"Very good product as said in description."</blockquote>
            </div>
        </div>
    </div>   
    
    
    <!-- Feedback 4-->
    <div class="col-lg-3">
        <div class="img-size img-layer"><img src="#" alt="">
            <div class="img-overlay"></div>
            <!-- Nội dung hiển thị trên ảnh -->
            <div class="img-content">
                <!-- Tiêu đề -->
                <h3 class="img-title">Rachel McAdams</h3>
                <!-- Description -->
                <blockquote class="img-quote font-weight-light mb-0">"This mug has become my most favourite. "</blockquote>
            </div>
        </div>
    </div> 

    </div>
</div>  
@include('user.pages.shop.modal.chon-mau')
 @include('user.pages.shop.section.sec-logo')
@endsection


