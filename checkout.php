<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout || Forge</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- All css files are included here -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">



    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start of header area -->
        <header>
            </div> <div class="header-top gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 hidden-xs">
                            <div class="header-top-left">
                                <ul class="header-top-style text-capitalize mr-25">
                                    <li><a href="#"><span class="mr-10">My Account</span><i class="fa fa-angle-down"></i></a>
                                        <ul class="ul-style my-account box-shadow white-bg">
                                            <li><a href="my-account.php">My Account</a></li>
                                            <li><a href="wishlist.php">My Wishlist</a></li>
                                            <li><a href="cart.php">My Cart</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="header-top-middle">
                                <ul class="header-top-style">
                                    <li>
                                        <a href="login.php">
                                            <span>Login or Register</span>
                                        </a>
                                        <div class="ul-style login-register box-shadow white-bg p-30">
                                            <h6 class="mb-20"><strong>Login</strong></h6>
                                            <input type="text" name="s" class="pl-30" placeholder="user name" id="user-name">
                                            <input type="password" name="d" class="pl-30" placeholder="Password" id="password">
                                            <label class="remmember">
                                                <input type="checkbox">
                                                remember me
                                            </label>
                                            <button value="submit" class="btn-default">Login</button>
                                            <div class="text-center p-t-90">
                                            <span class="txt1">
                                                Don’t have an account?
                                            </span>
                                            <a class="txt2" href="#">
                                                Sign Up
                                            </a>
                                        </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row header-middle-content">
                        <div class="col-md-5 col-sm-4 hidden-xs">
                             <div class="col-md-6 col-xs-4">
                                <div class="header-top-left">
                                    <span class="mr-20"><a href="#"><img alt="" src="images/header/search-icon.png"></a></span>
                                    <span><input type="text" class="pl-20" placeholder="Search..."></span>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="header-logo text-center">
                                    <a href="index.php"><img alt="" src="images/logo.png"></a>
                                </div>
                            </div>
                        <div class="col-md-offset-0 col-md-5 col-sm-offset-0 col-sm-4 col-xs-offset-3 col-xs-6">
                            <div class="shopping-cart">
                                <a href="#">
                                    <span class="shopping-cart-control">
                                        <img alt="" src="images/shop.png">
                                    </span>
                                    <span class="cart-size-value"><strong>Cart(3)</strong><br>$250</span>
                                </a>
                                <ul class="shopping-cart-down box-shadow white-bg">
                                    <li class="media">
                                        <a href="#"><img alt="" src="images/cart/1.jpg"></a>
                                        <div class="cart-item-wrapper">
                                            <a href="#">Zelletria ostma</a>
                                            <span class="quantity">
                                                <span class="amount">$195</span>
                                                 x 2
                                            </span>
                                            <a title="Remove this item" class="remove" href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="#"><img alt="" src="images/cart/2.jpg"></a>
                                        <div class="cart-item-wrapper">
                                            <a href="#">Letria postma</a>
                                            <span class="quantity">
                                                <span class="amount">$145</span>
                                                 x 1
                                            </span>
                                            <a title="Remove this item" class="remove" href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="#"><img alt="" src="images/cart/3.jpg"></a>
                                        <div class="cart-item-wrapper">
                                            <a href="#">Montria jastma</a>
                                            <span class="quantity">
                                                <span class="amount">$155</span>
                                                 x 2
                                            </span>
                                            <a title="Remove this item" class="remove" href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="total-title pull-left">Sub Total</span>
                                        <span class="total pull-right">$845</span>
                                    </li>
                                    <li class="media">
                                        <a class="cart-btn" href="cart.php">VIEW CART</a>
                                        <a class="cart-btn" href="checkout.php">CHECKOUT</a>
                                    </li>
                                </ul>                           
                            </div>
                        </div>
                        <nav class="primary-menu">
                            <ul class="header-top-style text-uppercase">
                                <li>
                                    <a href="index.php">home</a>
                                </li>
                                <li>
                                    <a href="#">Category</a>
                                    <div class="megamenu-area ul-style box-shadow white-bg">
                                        <div class="mega-inner ptb-20">
                                            <h6 class="mega-title text-uppercase"><strong>category</strong></h6>
                                            <ul class="text-capitalize forge-list">
                                                <li><a href="shop.php">men’s collection</a></li>
                                                <li><a href="shop.php">women’s collection</a></li>
                                                <li><a href="shop.php">kid’s collection</a></li>
                                                <li><a href="shop.php">bag’s collection</a></li>
                                                <li><a href="shop.php">shoes collection</a></li>
                                                <li><a href="shop.php">accessories</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Shop</a>
                                    <ul class="ul-style dropdown box-shadow white-bg forge-list text-capitalize">
                                        <li><a href="cart.php">Cart</a></li>
                                        <li><a href="checkout.php">checkout</a></li>
                                        <li><a href="order-complete.php">Order Complete</a></li>
                                        <li><a href="product-details.php">Product Details</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">contact</a></li>
                                <li><a href="about.php">About</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
        </header>
        <!-- End of header area -->
        <!-- Start Breadcrumbs Area -->
        <div class="breadcrumbs-area breadcrumbs-bg ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-inner">
                            <h5 class="breadcrumbs-disc m-0">Best Products for you</h5>
                            <h2 class="breadcrumbs-title text-black m-0">Checkout</h2>
                            <ul class="top-page">
                                <li><a href="index.html">Home</a></li>
                                <li>></li>
                                <li>Shop</li>
                                <li>></li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End Breadcrumbs Area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper pt-10">
            <!-- Banner Area Start -->
            <div class="banner-two-area">
                <div class="banner-two-bottom">
                    <div class="single-banner-two">
                        <div class="banner-two-img">
                            <a href="#">
                                <img src="images/banner/8.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner-two-text left-middle-bottom">
                            <div class="banner-two-opacity-inner">
                                <div class="banner-two-text-inner banner-bottom-text-inner text-uppercase">
                                    <h2 class="bottom-banner-title">NEW COLLECTION</h2>
                                    <h2>hand bag</h2>
                                    <a href="#" class="btn-shop">SHOP NOW</a>
                                </div>
                                <div class="banner-opacity text-center bags text-uppercase">
                                    <h1>BAG’S</h1>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="single-banner-two">
                        <div class="banner-two-img">
                            <a href="#">
                                <img src="images/banner/9.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner-two-text right-middle-bottom">
                            <div class="banner-two-opacity-inner">
                                <div class="banner-two-text-inner banner-bottom-text-inner text-uppercase">
                                    <h2 class="bottom-banner-title">WOMEN’S</h2>
                                    <h2>summer</h2>
                                    <h2>collection</h2>
                                    <a href="#" class="btn-shop">VIEW COLLECTION</a>
                                </div>
                                <div class="banner-opacity text-center summer text-uppercase">
                                    <h1>SUMMER</h1>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="single-banner-two">
                        <div class="banner-two-img">
                            <a href="#">
                                <img src="images/banner/10.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner-two-text middle-middle-bottom">
                            <div class="banner-two-opacity-inner">
                                <div class="banner-two-text-inner banner-bottom-text-inner text-uppercase">
                                    <h2 class="bottom-banner-title">T-SHIRT</h2>
                                    <h2>COLLECTION</h2>
                                    <h2 class="m-0">FOR ALL</h2>
                                    <a href="#" class="btn-shop">SHOP NOW</a>
                                </div>
                                <div class="banner-opacity text-center t-shirt text-uppercase">
                                    <h1>T-SHIRT</h1>
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Area End -->
            <!-- Start Cart Area -->
            <div class="cart-main-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-tab-pill text-center text-uppercase mb-50">
                                <ul>
                                    <li><a data-toggle="pill" href="#cart"><span>1</span> SHOPPING CART</a></li>
                                    <li class="active"><a data-toggle="pill" href="#checkout"><span>2</span> CHECKOUT</a></li>
                                    <li><a data-toggle="pill" href="#order"><span>3</span> ORDER COMPLETE</a></li>
                                </ul>
                            </div>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="product-list tab-content">
                            <div role="tabpanel" class="tab-pane fade in" id="cart">
                                <form action="#">
                                    <div class="table-content table-responsive text-uppercase mb-50">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail text-left">PRODUCT NAME</th>
                                                    <th class="product-name"></th>
                                                    <th class="product-price text-center">UNIT PRICE</th>
                                                    <th class="product-quantity text-center">QUANTITY</th>
                                                    <th class="product-subtotal text-center">Total</th>
                                                    <th class="product-remove"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="#"><img src="images/cart/cart-table/1.jpg" alt=""></a>
                                                    </td>
                                                    <td class="cart-product-name">
                                                        <a href="#"><h6><strong>Zelletria ostma</strong></h6></a>
                                                        <p>Lorem ipsum dolor sit amet <br> consectetur adipiscing </p>
                                                        <label>
                                                            Size :
                                                            <span> L</span>
                                                        </label>
                                                    </td>
                                                    <td class="cart-product-size text-center">
                                                        <h6><strong>$195</strong></h6>
                                                    </td>
                                                    <td class="cart-product-price text-center">
                                                        <span class="quantity-wanted-p pull-left">
                                                            <span class="dec qtybutton">-</span>
                                                            <input type="text" class="cart-plus-minus-box" value="2">
                                                            <span class="inc qtybutton">+</span>    
                                                        </span>
                                                    </td>
                                                    <td class="cart-product-total text-center">
                                                        <h6><strong>$390</strong></h6>
                                                    </td>
                                                    <td class="cart-trash text-center">
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="#"><img src="images/cart/cart-table/2.jpg" alt=""></a>
                                                    </td>
                                                    <td class="cart-product-name">
                                                        <a href="#"><h6><strong>Letria postma</strong></h6></a>
                                                        <p>Lorem ipsum dolor sit amet <br> consectetur adipiscing </p>
                                                        <label>
                                                            Size :
                                                            <span> xl</span>
                                                        </label>
                                                    </td>
                                                    <td class="cart-product-size text-center">
                                                        <h6><strong>$145</strong></h6>
                                                    </td>
                                                    <td class="cart-product-price text-center">
                                                        <span class="quantity-wanted-p pull-left">
                                                            <span class="dec qtybutton">-</span>
                                                            <input type="text" class="cart-plus-minus-box" value="1">
                                                            <span class="inc qtybutton">+</span>    
                                                        </span>
                                                    </td>
                                                    <td class="cart-product-total text-center">
                                                        <h6><strong>$145</strong></h6>
                                                    </td>
                                                    <td class="cart-trash text-center">
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="#"><img src="images/cart/cart-table/3.jpg" alt=""></a>
                                                    </td>
                                                    <td class="cart-product-name">
                                                        <a href="#"><h6><strong>Montria jastma</strong></h6></a>
                                                        <p>Lorem ipsum dolor sit amet <br> consectetur adipiscing </p>
                                                        <label>
                                                            Size :
                                                            <span> xl</span>
                                                        </label>
                                                    </td>
                                                    <td class="cart-product-size text-center">
                                                        <h6><strong>$155</strong></h6>
                                                    </td>
                                                    <td class="cart-product-price text-center">
                                                        <span class="quantity-wanted-p pull-left">
                                                            <span class="dec qtybutton">-</span>
                                                            <input type="text" class="cart-plus-minus-box" value="2">
                                                            <span class="inc qtybutton">+</span>    
                                                        </span>
                                                    </td>
                                                    <td class="cart-product-total text-center">
                                                        <h6><strong>$310</strong></h6>
                                                    </td>
                                                    <td class="cart-trash text-center">
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="cart-calculate">
                                                <h6 class="cart-title text-uppercase mb-30"><strong>CALCULATE SHIPPING</strong></h6>
                                                <select class="mr-25">
                                                    <option>Country</option>
                                                    <option>Bangladesh</option>
                                                    <option>India</option>
                                                    <option>Austrolia</option>
                                                    <option>Spain</option>
                                                    <option>Canada</option>
                                                    <option>Pakistan</option>
                                                </select>
                                                <select>
                                                    <option>State</option>
                                                    <option>Dhaka</option>
                                                    <option>Magura</option>
                                                    <option>Manikgonge</option>
                                                    <option>Kushtia</option>
                                                    <option>Khulna</option>
                                                    <option>Padna</option>
                                                </select>
                                                <select class="mr-25">
                                                    <option>Postcode/Zip</option>
                                                    <option>1200</option>
                                                    <option>1201</option>
                                                    <option>1202</option>
                                                    <option>1203</option>
                                                    <option>1204</option>
                                                    <option>1205</option>
                                                    <option>1206</option>
                                                </select>
                                                <button class="cart-button">Estimate</button>
                                            </div>
                                            <div class="cart-discount">
                                                <h6 class="cart-title text-uppercase mb-30"><strong>DISCOUNT COUPON CODE</strong></h6>
                                                <input type="text">
                                                <button class="cart-button">Apply Code</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="cart-total clearfix">
                                                <h6 class="cart-title text-uppercase mb-30"><strong>CART TOTAL</strong></h6>
                                                <div class="table-content-total table-responsive mb-20">
                                                    <table>
                                                        <tbody>
                                                            <tr class="cart-subtotal">
                                                                <th>Subtotal</th>
                                                                <td>
                                                                    <h6 class="amount"><strong>$8450.00</strong></h6>
                                                                </td>
                                                            </tr>
                                                            <tr class="cart-subtotal">
                                                                <th>Shipping</th>
                                                                <td>
                                                                    <h6 class="amount"><strong>$0.00</strong></h6>
                                                                </td>
                                                            </tr>
                                                            <tr class="cart-grand-total">
                                                                <th>Grand Total</th>
                                                                <td>
                                                                    <h5 class="amount"><strong>$845.00</strong></h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>                                    
                                                </div>
                                                <div class="update-checkout pull-right">
                                                    <a href="#">Update</a>
                                                    <a data-toggle="pill" href="#checkout">CHECKOUT</a>                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in active" id="checkout">
                                <div class="col-sm-6">
                                    <div class="checkbox-form">
                                        <h5 class="text-uppercase mb-40"><strong>BILING ADDRESS</strong></h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="shop-select mb-30">
                                                    <label>
                                                        Country
                                                        <span class="required">*</span>
                                                    </label>
                                                    <select class="">
                                                        <option>Country</option>
                                                        <option>Bangladesh</option>
                                                        <option>India</option>
                                                        <option>Austrolia</option>
                                                        <option>Spain</option>
                                                        <option>Canada</option>
                                                        <option>Pakistan</option>
                                                    </select>
                                                </div>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="shop-select">
                                                    <label>
                                                        First name
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" placeholder="First name">
                                                </div>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="shop-select">
                                                    <label>
                                                        Last name
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" placeholder="Last name">
                                                </div>                                                
                                            </div>
                                            <div class="col-md-12">
                                                <div class="shop-select mtb-30">
                                                    <label>
                                                        Company name
                                                    </label>
                                                    <input type="text" placeholder="Company name">
                                                </div>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="shop-select">
                                                    <label>
                                                        Email address
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="email" placeholder="Email address">
                                                </div>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="shop-select">
                                                    <label>
                                                        Phone no.
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" placeholder="Phone no.">
                                                </div>                                                
                                            </div>
                                            <div class="col-md-12">
                                                <div class="shop-select address-input mtb-30">
                                                    <label>
                                                        Address
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" placeholder="Address line 1">
                                                    <input type="text" placeholder="Address line 2">
                                                </div>                                                
                                            </div>
                                            <div class="col-md-12">
                                                <div class="shop-select mb-30">
                                                    <label>
                                                        Town/City
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" placeholder="Address line 1">
                                                </div>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="shop-select">
                                                    <label>
                                                        State
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="email" placeholder="State">
                                                </div>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="shop-select">
                                                    <label>
                                                        Zip code
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" placeholder="Zip code">
                                                </div>                                                
                                            </div>
                                            <div class="col-md-12">
                                                <div class="shop-radio mt-40 pr-50">
                                                    <label>
                                                        <input type="radio">
                                                        Create an Account?
                                                    </label>
                                                </div> 
                                                <div class="shop-radio mt-40">
                                                    <label>
                                                        <input type="radio">
                                                        Ship to Different Address
                                                    </label>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-offset-1 col-sm-offset-1 col-sm-5">
                                    <div class="checkout-total mb-60">
                                        <h5 class="text-uppercase mb-40"><strong>CART TOTAL</strong></h5>
                                        <form action="#">
                                            <div class="table-content-total table-responsive">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th class="check-product"><strong>Product</strong></th>
                                                            <th class="check-total pull-right"><strong>Total</strong></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="check-product-list">
                                                            <td class="singel-check">
                                                                Zelletria ostma
                                                                <span>X 02</span>
                                                            </td>
                                                            <td class="singel-check pull-right">
                                                                <span>$390.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list">
                                                            <td class="singel-check">
                                                                Letria postma 
                                                                <span>X 01</span>
                                                            </td>
                                                            <td class="singel-check pull-right">
                                                                <span>$145.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list">
                                                            <td class="singel-check last-list">
                                                                Montria jastma
                                                                <span> X 02</span>
                                                            </td>
                                                            <td class="singel-check last-list pull-right">
                                                                <span>$310.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list border-bottom border-top">
                                                            <td class="singel-check total-check">
                                                                Sub total
                                                            </td>
                                                            <td class="singel-check total-check pull-right">
                                                                <span>$845.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list border-bottom">
                                                            <td class="singel-check total-check">
                                                                Shipping
                                                            </td>
                                                            <td class="singel-check total-check pull-right">
                                                                <span>$0.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart-grand-total">
                                                            <th class="pt-15">Grand Total</th>
                                                            <td class="pull-right pt-15">
                                                                <h5 class="amount m-0"><strong>$845.00</strong></h5>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="payment-method">
                                        <h5 class="text-uppercase mb-40"><strong>PAYMENT METHOD</strong></h5>
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h6 class="panel-title">
                                                        <span><input type="radio"></span>
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                           Direct Bank Transfer
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h6 class="panel-title">
                                                        <span><input type="radio"></span>
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                           Check Payment
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h6 class="panel-title">
                                                        <span><input type="radio"></span>
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                           Paypel
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="treams-conditions">
                                                <input type="radio">
                                                <p>I have read and accept the terms & conditions.</p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="order-button-payment mt-30">
                                            <input type="submit" value="Place order">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Cart Area -->
            <!-- Start Brand Area -->
            <div class="brand-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>OUR BRAND</strong></h2>
                                <p class="text-defualt">BRAND</p>
                                <img alt="" src="images/section-border.png">
                            </div>
                            <div class="brand-carousel">
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/1.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/3.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/4.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/5.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/1.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/3.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Brand Area -->
        </section>
        <!-- End page content -->
        <!-- Start footer area -->
        <footer id="footer" class="footer-area">
            <div class="footer-top-area text-center ptb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-top-content">
                                <a href="index.php">
                                    <img src="images/footer/logo.png" alt="">
                                </a>
                                <p class="pb-30">Forge is the best ecommerce site lorem ipsum dolor sit amet, consectetur aiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle-area footer-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="single-footer-inner">
                                <h5 class="footer-title text-white">CONTACT</h5>
                                <ul class="footer-contact">
                                    <li class="contact-icon">
                                        <img alt="" src="images/footer/icon/1.png">
                                    </li>
                                    <li class="footer-text text-ash">
                                        <p>POLITEKNIK NEGERI JEMBER,</p>
                                        <p>Jl. Mastrip 145</p>
                                    </li>
                                </ul>
                                <ul class="footer-contact">
                                    <li class="contact-icon">
                                        <img alt="" src="images/footer/icon/2.png">
                                    </li>
                                    <li class="footer-text text-ash">
                                        <p>Telephone : +6283857293364</p>
                                    </li>
                                </ul>
                                <ul class="footer-contact">
                                    <li class="contact-icon">
                                        <img alt="" src="images/footer/icon/3.png">
                                    </li>
                                    <li class="footer-text text-ash">
                                        <p>Email : akbar@gmail.com</p>
                                        <p>Web : www.babeo.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="single-footer-inner">
                                <h5 class="footer-title text-white">CONTACT</h5>
                                <ul class="footer-menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                                    <li><a href="#">Support centre</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="single-footer-inner">
                                <h5 class="footer-title text-white">SUPPORT</h5>
                                <ul class="footer-menu">
                                    <li><a href="#">Delivery information</a></li>
                                    <li><a href="3">Order tracking</a></li>
                                    <li><a href="#">Return product</a></li>
                                    <li><a href="#">Gift card</a></li>
                                    <li><a href="#">Home delivery</a></li>
                                    <li><a href="#">Online support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>Copyright <i class="fa fa-copyright"></i> 2018 <span><a href="https://freethemescloud.com/">Free Themes Cloud</a></span> . </p>
                            </div>
                        </div>
                        <div class="col-md-5 hidden-sm hidden-xs">
                            <nav>
                                <ul class="footer-bottom-menu">
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="payment-method b-img">
                                <img alt="" src="images/footer/footer-bottom.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->            
    </div>
    <!-- Body main wrapper end -->    

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>