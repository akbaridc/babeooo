<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home 1 || Forge</title>
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
        <!-- Start of slider area -->
        <section class="slider-container">
            <!-- Slider Image -->
            <div id="mainSlider" class="nivoSlider slider-image">
                <img src="images/slider/img_bg_1.jpg" alt="main slider" title="#htmlcaption1"/>
                <img src="images/slider/img_bg_2.jpg" alt="main slider" title="#htmlcaption2"/>
                <img src="images/slider/img_bg_3.jpg" alt="main slider" title="#htmlcaption3"/>
            </div>
            <!-- Slider Caption 1 -->
            <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                <div class="slider-progress"></div> 
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-xs-offset-6 col-xs-6 slider-height">
                            <div class="slide-text">
                                <div class="middle-text">
                                    <div class="cap-dec text-black text-uppercase wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0s">
                                        <h3>TRENDY DRESS COLLETIONS</h3>
                                    </div>  
                                    <div class="cap-title text-black text-uppercase wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                        <h2>FOR WOMEN - 2016</h2>
                                    </div>  
                                    <div class="cap-para wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat  vel illum dolore eu feugiat nulla facilisis at vero eros.</p>
                                    </div>
                                    <div class="cap-shop wow text-uppercase fadeInDown" data-wow-duration="2.5s" data-wow-delay="1.5s">
                                        <a href="#">Shop now</a>
                                    </div>  
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>                      
            </div>
            <!-- Slider Caption 2 -->
            <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                <div class="slider-progress"></div> 
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-xs-offset-5 col-xs-7 slider-height">
                            <div class="slide-text">
                                <div class="middle-text">
                                    <div class="cap-dec text-black text-uppercase wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0s">
                                        <h3>EXCLUSIVE COLLETIONS</h3>
                                    </div>  
                                    <div class="cap-title text-black text-uppercase wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                        <h2>OVER COATS FOR MAN</h2>
                                    </div>  
                                    <div class="cap-para wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat  vel illum dolore eu feugiat nulla facilisis at vero eros.</p>
                                    </div>
                                    <div class="cap-shop wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="1.5s">
                                        <a href="#">Shop now</a>
                                    </div>  
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Slider Caption 3 -->
            <div id="htmlcaption3" class="nivo-html-caption slider-caption-3">
                <div class="slider-progress"></div> 
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-xs-offset-5 col-xs-7 slider-height">
                            <div class="slide-text">
                                <div class="middle-text">
                                    <div class="cap-dec text-black text-uppercase wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0s">
                                        <h3>EXCLUSIVE COLLETIONS</h3>
                                    </div>  
                                    <div class="cap-title text-black text-uppercase wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                        <h2>OVER COATS FOR WOMAN</h2>
                                    </div>  
                                    <div class="cap-para wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat  vel illum dolore eu feugiat nulla facilisis at vero eros.</p>
                                    </div>
                                    <div class="cap-shop wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="1.5s">
                                        <a href="#">Shop now</a>
                                    </div>  
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of slider area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">  
            <!-- Start About us Area -->
            <div class="why-us section-padding text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="why-us-inner">
                                <div class="why-us-icon mb-20">
                                    <img src="images/why-us/1.png" alt="">
                                </div>
                                <h5 class="text-uppercase m-0 text-defualt"><strong>FREE SHIPPING</strong></h5>
                                <p class="why-us-title m-0">Free for all product</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="why-us-inner">
                                <div class="why-us-icon mb-20">
                                    <img src="images/why-us/2.png" alt="">
                                </div>
                                <h5 class="text-uppercase m-0 text-defualt"><strong>ORDER ONLINE</strong></h5>
                                <p class="why-us-title m-0">www.babeo.com</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="why-us-inner">
                                <div class="why-us-icon mb-20">
                                    <img src="images/why-us/3.png" alt="">
                                </div>
                                <h5 class="text-uppercase m-0 text-defualt"><strong>MONEY BACK</strong></h5>
                                <p class="why-us-title m-0">Money back guarantee</p>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm">
                            <div class="why-us-inner m-0">
                                <div class="why-us-icon mb-20">
                                    <img src="images/why-us/4.png" alt="">
                                </div>
                                <h5 class="text-uppercase m-0 text-defualt"><strong>GIFT COUPON</strong></h5>
                                <p class="why-us-title m-0">Surprise gift coupon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About us Area -->
            <!-- Start Banner Area -->
            <div class="banner-area">
                <div class="container">
                    <div class="row rp-style">
                        <div class="col-sm-4 cp-style">
                            <div class="banner-inner">
                                <a class="test-popup-link banner-img" href="images/banner/1.jpg">
                                    <img src="images/banner/1.jpg" alt="">
                                </a>
                                <div class="banner-text banner-text-1">
                                    <a href="shop.php" class="banner-heading text-uppercase text-right">new trend for women's</a>
                                    <h3 class="banner-title text-uppercase text-right">special offer 25% off</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 cp-style">
                            <div class="row rp-style">
                                <div class="col-sm-8 cp-style">
                                    <div class="banner-inner">
                                        <a class="test-popup-link banner-img" href="images/banner/2.jpg">
                                            <img src="images/banner/2.jpg" alt="">
                                        </a>
                                        <div class="banner-text banner-text-2 text-center">
                                            <a href="shop.php" class="banner-heading text-uppercase text-right">man's</a>
                                            <h3 class="banner-title-x text-uppercase">summer</h3>
                                            <h3 class="banner-title text-uppercase text-right">collection</h3>
                                        </div>
                                    </div>                                      
                                </div>
                                <div class="col-sm-4 cp-style">
                                    <div class="banner-inner">
                                        <a class="test-popup-link banner-img" href="images/banner/3.jpg">
                                            <img src="images/banner/3.jpg" alt="">
                                        </a>
                                        <div class="banner-text banner-text-3">
                                            <a href="#" class="banner-heading text-uppercase text-right">Woman</a>
                                            <h3 class="banner-title text-uppercase text-right">35% off</h3>
                                        </div>
                                    </div>                                      
                                </div>
                            </div>
                            <div class="row rp-style mt-8">
                                <div class="col-sm-4 cp-style">
                                    <div class="banner-inner">
                                        <a class="test-popup-link banner-img" href="images/banner/4.jpg">
                                            <img src="images/banner/4.jpg" alt="">
                                        </a>
                                        <div class="banner-text banner-text-4 text-right">
                                            <a href="#" class="banner-heading text-uppercase text-right">bag's</a>
                                            <h3 class="banner-title text-uppercase text-right">promotion</h3>
                                        </div>
                                    </div>                                      
                                </div>
                                <div class="col-sm-8 cp-style">
                                    <div class="banner-inner m-0">
                                        <a class="test-popup-link banner-img" href="images/banner/5.jpg">
                                            <img src="images/banner/5.jpg" alt="">
                                        </a>
                                        <div class="banner-text banner-text-5 text-center">
                                            <a href="#" class="banner-heading text-uppercase text-right">kid's</a>
                                            <h3 class="banner-title text-uppercase text-right">collection</h3>
                                        </div>
                                    </div>                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Area -->
            <!-- Start Featured product Area -->
            <div class="featured-product-area section-padding">
                <div class="container">
                    <div class="row rp-style">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>FEATURED PRODUCTS</strong></h2>
                                <p class="text-defualt">Best Collection for you</p>
                                <img alt="" src="images/section-border.png">
                            </div>
                        </div>
                    </div>
                    <div class="row rp-style">
                        <div class="featured-carousel indicator-style">
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="product-details.php">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/1.jpg">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="product-details.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="wishlist.php"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$150</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Eletria ostma" href="product-details.php">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="product-details.php">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/2.jpg">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase theme-bg">sale</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="product-details.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="wishlist.php"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$130</li>
                                            <li class="text-right p-price">$150</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Tletria postma" href="product-details.php">Tletria postma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="product-details.php">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/3.jpg">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="product-details.php"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="wishlist.php"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$120</li>
                                            <li class="text-right p-price">$130</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Celletria ostma" href="product-details.php">Celletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/4.jpg">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$150</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Eletria ostma" href="#">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/5.jpg">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-25%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$150</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Eletria ostma" href="#">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/1.jpg">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$150</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Eletria ostma" href="#">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/2.jpg">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase theme-bg">sale</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$130</li>
                                            <li class="text-right p-price">$150</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Tletria postma" href="#">Tletria postma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/3.jpg">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$120</li>
                                            <li class="text-right p-price">$130</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Celletria ostma" href="#">Celletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- Start Featured product Area -->
            <!-- Start Offer  Area -->
            <div class="offer-area">
                <div class="offer-banner banner-style-1 pull-left">
                    <a href="#">
                        <img src="images/offer/1.jpg" alt="">
                    </a>
                    <div class="offer-banner-text text-uppercase text-white">
                        <h2>coats</h2>
                        <h3>FOR <span class="text-defualt"> MEN</span></h3>
                    </div>
                </div>
                <div class="offer-inner top-right-sale ">
                    <h3>BIG SALE </h3>
                    <h1>OFFER</h1>
                    <h2>35% <span>off</span></h2>
                    <span class="bottom-border-style"></span>
                </div>
                <div class="offer-banner banner-style-2 pull-right">
                    <a href="#">
                        <img alt="" src="images/offer/2.jpg">
                    </a>
                    <div class="offer-banner-text-2 text-uppercase">
                        <h2 class="text-defualt">WINTER</h2>
                        <h3 class="medium text-white">COLLECTION</h3>
                        <h3 class="blod text-white">FOR <span class="text-defualt">WOMEN</span></h3>
                    </div>
                </div>
            </div>
            <!-- End Offer Area -->
            <!-- Start Upcomming Area -->
            <div class="up-comming-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="single-up-comming ash-bg">
                                <div class="product-cuntdown pull-left">
                                    <div class="timer p-20">
                                        <div data-countdown="2017/06/01"></div>
                                    </div>                                    
                                </div> 
                                <div class="product-inner pull-right">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/cuntdown/akbar.jpg" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                </div>
                                <div class="clear"></div>
                                <div class="product-text white-bg pt-15">
                                    <ul class="pricing list-inline pull-right">
                                        <li class="text-defualt c-price">$130</li>
                                        <li class="text-right p-price">$150</li>
                                    </ul>
                                    <h6 class="product-name">
                                        <a href="#" title="Eletria ostma">Tletria postma</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-up-comming ash-bg">
                                <div class="product-cuntdown pull-left">
                                    <div class="timer p-20">
                                        <div data-countdown="2018/06/01"></div>
                                    </div>                                    
                                </div> 
                                <div class="product-inner pull-right">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/cuntdown/akbar.jpg" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                </div>
                                <div class="clear"></div>
                                <div class="product-text white-bg pt-15">
                                    <ul class="pricing list-inline pull-right">
                                        <li class="text-defualt c-price">$150</li>
                                        <li class="text-right p-price">$180</li>
                                    </ul>
                                    <h6 class="product-name">
                                        <a href="#" title="Restalomen Santiloma">Restalomen Santiloma</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm">
                            <div class="single-up-comming ash-bg m-0">
                                <div class="product-cuntdown pull-left">
                                    <div class="timer p-20">
                                        <div data-countdown="2018/06/01"></div>
                                    </div>                                    
                                </div> 
                                <div class="product-inner pull-right">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/cuntdown/akbar.jpg" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                </div>
                                <div class="clear"></div>
                                <div class="product-text white-bg pt-15">
                                    <ul class="pricing list-inline pull-right">
                                        <li class="text-defualt c-price">$180</li>
                                        <li class="text-right p-price">$200</li>
                                    </ul>
                                    <h6 class="product-name">
                                        <a href="#" title="Eletriaostma Santiloma">Eletriaostma Santiloma</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Upcomming Area -->
            <!-- Start New Arrival Area  -->
            <div class="new-arrival-area">
                <div class="container">
                    <div class="row rp-style-2">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>FRESH NEW ARRIVAL</strong></h2>
                                <p class="text-defualt">ALL NEW ITEAMS</p>
                                <img alt="" src="images/section-border.png">
                            </div>
                        </div>
                    </div>
                    <div class="row rp-style-2">
                        <div class="featured-carousel indicator-style">
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/1.jpg" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Teletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/2.jpg" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/3.jpg" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Wetria postma">Wetria postma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/4.jpg" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/5.jpg" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Kelletria ostma">Kelletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/6.jpg" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/7.jpg" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Celletria ostma">Celletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/8.jpg" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/9.jpg" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Celletria ostma">Celletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/10.jpg" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/1.jpg" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Teletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/2.jpg" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/3.jpg" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Wetria postma">Wetria postma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/4.jpg" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/5.jpg" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Kelletria ostma">Kelletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="images/product/arrival/6.jpg" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of New Arrival Area  -->
            <!-- Start Offer Banner Area -->
            <div class="offer-banner-area section-padding clearfix">
                <figure class="single-offer-banner b-img">
                    <img src="images/offer-banner/1.jpg" alt="">
                    <figcaption>
                        <div class="figcation-text left-top text-uppercase text-left text-white">
                            <h1>new</h1>
                            <h1>Arrival</h1>
                            <h1>20% off</h1>
                        </div>
                        <div class="figcation-text text-uppercase right-bottom text-white">
                            <h1>BAGS</h1>
                        </div>
                    </figcaption>
                </figure>
                <figure class="single-offer-banner b-img">
                    <img src="images/offer-banner/2.jpg" alt="">
                    <figcaption>
                        <div class="figcation-text left-top text-uppercase text-left text-white">
                            <h1>WATCHES</h1>
                        </div>
                        <div class="figcation-text text-uppercase right-bottom text-white text-right">
                            <h1>EXCLUSIVE</h1>
                            <h1>COLLECTIONS</h1>
                        </div>
                    </figcaption>
                </figure>
                <figure class="single-offer-banner b-img m-0">
                    <img src="images/offer-banner/3.jpg" alt="">
                    <figcaption>
                        <div class="figcation-text right-top text-uppercase text-left text-white text-right">
                            <h1>BIG OFFER</h1>
                            <h1>35% OFF</h1>
                        </div>
                        <div class="figcation-text left-bottom text-uppercase text-white">
                            <h1>SHOES</h1>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <!-- End Offer Banner Area -->
            <!-- Start Best Seller Iteams Area -->
            <div class="best-saller-iteam-area pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 cp-style-2">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>BEST SELLER</strong></h2>
                                <p class="text-defualt">TOP COLLECTION</p>
                                <img src="images/section-border.png" alt="">
                            </div>
                            <div class="best-seller-carousel indicator-style-two">
                                <div class="product-container">
                                    <div class="best-product-inner mb-35 row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img b-img">
                                                <a href="#">
                                                    <img src="images/best-seller/2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-product-inner row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="images/best-seller/3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-container">
                                    <div class="best-product-inner mb-35 row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="images/best-seller/4.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-product-inner row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="images/best-seller/1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-container">
                                    <div class="best-product-inner mb-35 row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="images/best-seller/2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-product-inner row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="images/best-seller/1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 cp-style-2">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>TRENDY ITEAMS</strong></h2>
                                <p class="text-defualt">NEW TREND</p>
                                <img src="images/section-border.png" alt="">
                            </div>
                            <div class="best-seller-carousel indicator-style">
                                <div class="product-container">
                                    <div class="best-product-inner mb-35 row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="images/best-seller/4.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-product-inner row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="images/best-seller/1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-container">
                                    <div class="best-product-inner mb-35 row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="images/best-seller/2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-product-inner row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="images/best-seller/3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-container">
                                    <div class="best-product-inner mb-35 row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="images/best-seller/4.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-product-inner row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="images/best-seller/1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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