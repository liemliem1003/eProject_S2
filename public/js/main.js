$(document).ready(function() {
    $('.active-slider').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="arrow-prev"><span class="glyphicon glyphicon-chevron-left"></span></button>',
        nextArrow: '<button type="button" class="arrow-next"><span class="glyphicon glyphicon-chevron-right"></span></button>',
    });

    $('.active-blog').slick({
        speed: 700,
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="arrow-prev"><span class="glyphicon glyphicon-chevron-left"></span></button>',
        nextArrow: '<button type="button" class="arrow-next"><span class="glyphicon glyphicon-chevron-right"></span></button>',
        responsive: [
            {  breakpoint: 991,   settings: { slidesToShow: 2,  }  },
            {  breakpoint: 767,   settings: { slidesToShow: 1, }   },
            {  breakpoint: 479,   settings: { slidesToShow: 1, }   },
        ]
    });

    $('.active-featured-product').slick({
        speed: 700,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="arrow-prev"><span class="glyphicon glyphicon-chevron-left"></span></button>',
        nextArrow: '<button type="button" class="arrow-next"><span class="glyphicon glyphicon-chevron-right"></span></button>',
        responsive: [
            {  breakpoint: 991,   settings: { slidesToShow: 3,  }  },
            {  breakpoint: 767,   settings: { slidesToShow: 1, }   },
            {  breakpoint: 479,   settings: { slidesToShow: 1, }   },
        ]
    });   

    $('.active-albums-sold').slick({
        speed: 700,
        arrows: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="arrow-prev"><span class="glyphicon glyphicon-chevron-left"></span></button>',
        nextArrow: '<button type="button" class="arrow-next"><span class="glyphicon glyphicon-chevron-right"></span></button>',
        responsive: [
            {  breakpoint: 991,   settings: { slidesToShow: 3,  }  },
            {  breakpoint: 767,   settings: { slidesToShow: 1, }   },
            {  breakpoint: 479,   settings: { slidesToShow: 1, }   },
        ]
    }); 

    $('.active-team-member').slick({
        speed: 700,
        arrows: false,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {  breakpoint: 991,   settings: { slidesToShow: 2,  }  },
            {  breakpoint: 767,   settings: { slidesToShow: 1, }   },
            {  breakpoint: 479,   settings: { slidesToShow: 1, }   },
        ]
    });
    $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
    $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
    $(document).on('click', '.qtybutton', function(){
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } 
        else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } 
            else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    })

    //CART
    displayCart()
    checkAuth()
    jQuery('nav#dropdown').meanmenu({
        meanMenuContainer:'.mobile-menu-area .container',
        meanRevealColour:"#262626",
        meanScreenWidth:"824",

    });
});
function displayCart(){
    var cartDetail = JSON.parse(localStorage.getItem("cartDetail") || `{"cart":[], "subTotal":0, "count":0}`)
    $('#countCart').html(cartDetail.count)
}
function addToCart(product, qty, type='add') {
    let cartDetail = JSON.parse(localStorage.getItem("cartDetail") || `{"cart":[], "subTotal":0, "count":0}`)
    let cart = cartDetail.cart
    const found = cart.find(ele => ele.id == product.id);
    if (typeof found !== "undefined") {
        switch (type) {
            case 'remove':
                cart = cart.filter(ele => ele.id !== product.id)
                break;
        
            default:
                cart.map(function (ele) { if (ele.id == product.id && (ele.qty + qty !== 0) ) return ele.qty +=qty})
                break;
        }
    } else {
        product.qty = qty
        cart.push(product)
    }
    cartDetail.cart = cart
    let subTotal = cart.reduce((sum, i) => {
        return sum + (i.price* i.qty)
    }, 0)
    let count = cart.reduce((sum, i) => {
        return sum + i.qty
    }, 0)
    cartDetail.subTotal = subTotal
    cartDetail.count = count
    localStorage.setItem("cartDetail", JSON.stringify(cartDetail))
}
function postRegister(self){
    event.preventDefault()
    let profile = JSON.parse(localStorage.getItem("profile") || "[]")
    let infor = getFormData($(self))
    infor.point = 0
    const found = profile.find(ele => ele.email == infor.email);
    if (typeof found == "undefined") {
        profile.push(infor)
        localStorage.setItem('profile', JSON.stringify(profile))
        alert('Successfully Register')
        window.location.href = 'login.html'
    }else{
        alert('Email Existed')
    }
}
function postLogin(self){
    event.preventDefault()
    let auth = localStorage.getItem('auth') || ''
    if (auth != 'true') {
        let profile = JSON.parse(localStorage.getItem("profile") || "[]")
        let infor = getFormData($(self))
        const found = profile.find(ele => (ele.email == infor.email && ele.password == infor.password));
        if (typeof found !== "undefined") {
            point = found.point
            localStorage.setItem('auth', true)
            localStorage.setItem('point', point)
            checkAuth()
            alert('Successfully Login')
        }else{
            alert('Invalid Login')
        }
    }else{
        alert('You Logged!!!')
    }
    
}
function checkAuth(){
    let auth = localStorage.getItem('auth') || ''
    let x = ``
    if (auth) {
        x =`
        <a href="javascript:void(0)" onclick="logout()">
            <span class="glyphicon glyphicon-lock"></span>
            Logout
        </a>
        `
    }else{
        x =`
        <a href="login.html">
            <span class="glyphicon glyphicon-lock"></span>
            Login
        </a>
        `
    }
    $('#auth').html(x)
}
function logout(){
    localStorage.removeItem('auth')
    localStorage.removeItem('point')
    checkAuth()
    alert('Successfully Logout')
    location.reload()
}
function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}

