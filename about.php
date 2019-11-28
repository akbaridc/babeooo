<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Abot || Forge</title>
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
                             <div class="col-xs-6 col-xs-4">
                                <div class="header-top-left">
                                    <span class="mr-20"><a href="#"><img alt="" src="images/header/search-icon.png"></a></span>
                                    <span><input type="text" class="pl-10" placeholder="Search..."></span>
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
                            <h2 class="breadcrumbs-title text-black m-0">ABOUT BABEO </h2>
                            <ul class="top-page">
                                <li><a href="index.php">Home</a></li>
                                <li>></li>
                                <li>About</li>
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
                            <a href="shop.php">
                                <img src="images/banner/8.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner-two-text left-middle-bottom">
                            <div class="banner-two-opacity-inner">
                                <div class="banner-two-text-inner banner-bottom-text-inner text-uppercase">
                                    <h2 class="bottom-banner-title">NEW COLLECTION</h2>
                                    <h2>hand bag</h2>
                                    <a href="shop.php" class="btn-shop">SHOP NOW</a>
                                </div>
                                <div class="banner-opacity text-center bags text-uppercase">
                                    <h1>BAG’S</h1>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="single-banner-two">
                        <div class="banner-two-img">
                            <a href="shop.php">
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
                            <a href="shop.php">
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
            <!-- Start About Top Area -->            
            <div class="about-top-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-top-img b-img">
                                <img alt="" src="images/about/1.jpg">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-top-text">
                                <h4 class="about-title mb-35"><span class="text-defualt">FORGE</span> THE LARGEST COLLECTION FOR YOU</h4>
                                <p>ge is the best online shop for your online shopping orem ipsum dolor sit amet, consectetur adipiscing elit, </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nia, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comm.</p>
                                <p class="display-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                                <div class="signature">
                                    <img alt="" src="images/about/signature.png">
                                    <h6><a href="#">Arizona Smith</a></h6>
                                    <a href="#">Forge Owner</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About Top Area -->            
            <!-- Start About Middle Area -->     
            <div class="about-middle-area">
               <div class="container">
                   <div class="row">
                       <div class="col-sm-6">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>NEWS FROM THE BLOG</strong></h2>
                                <p class="text-defualt">FROM THE BLOG</p>
                                <img alt="" src="images/section-border.png">
                            </div>
                            <div class="about-middle-inner">
                               <h4 class="text-uppercase mb-20"><strong>NEWS FROM THE BLOG</strong></h4>
                               <div class="about-middle-content">
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm jedo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad inim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquiLorem </p>
                                    <ul class="mission-list">
                                        <li>
                                            <img alt="" src="images/about/check.png">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                                        </li>
                                        <li>
                                            <img alt="" src="images/about/check.png">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                                        </li>
                                    </ul>
                                    <ul class="mission-list">
                                        <li>
                                            <img alt="" src="images/about/check.png">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                                        </li>
                                        <li>
                                            <img alt="" src="images/about/check.png">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                                        </li>
                                    </ul>
                               </div>
                               <div class="news-to-blog display-none">
                                   <h4 class="text-uppercase mb-20"><strong>NEWS FROM THE BLOG</strong></h4>
                                   <div class="about-middle-content">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm jedo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad inim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquiLorem </p>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm jedo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad inim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquiLorem </p>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm jedo tempor incididunt ut labore et dolore magna aliqua enim ad inim </p>
                                   </div>                                   
                               </div> 
                            </div>
                       </div>
                        <div class="col-sm-6">
                            <div class="about-middle-inner-right">
                                <div class="about-middle-inner-right-img b-img">
                                    <img alt="" src="images/about/2.jpg">
                                </div>
                                <ul class="about-middle-inner-right-text pt-15 b-img">
                                    <li><img src="images/about/3.jpg" alt=""></li>
                                    <li><img src="images/about/4.jpg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                   </div>
               </div>
           </div>       
            <!-- End About Middle Area -->  
            <!-- Start Why Choose Us Area -->  
            <div class="why-choose-us-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>WHY CHOOSE US</strong></h2>
                                <p class="text-defualt">WHY CHOOSE US</p>
                                <img src="images/section-border.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul class="about-icon-list">
                                <li class="about-single-icon mb-50">
                                    <div class="about-icon">
                                        <img src="images/about/icon/1.png" alt="">
                                    </div>
                                    <div class="choose-content pl-70">
                                        <h5 class="text-defualt mb-20 text-uppercase"><strong>FREE SHIPPING</strong></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                    </div>
                                </li>
                                <li class="about-single-icon">
                                    <div class="about-icon">
                                        <img src="images/about/icon/2.png" alt="">
                                    </div>
                                    <div class="choose-content pl-70">
                                        <h5 class="text-defualt mb-20 text-uppercase"><strong>SECURE CHECKOUT</strong></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul class="about-icon-list">
                                <li class="about-single-icon mb-50">
                                    <div class="about-icon">
                                        <img src="images/about/icon/3.png" alt="">
                                    </div>
                                    <div class="choose-content pl-70">
                                        <h5 class="text-defualt mb-20 text-uppercase"><strong>OrDER ONLINE</strong></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                    </div>
                                </li>
                                <li class="about-single-icon">
                                    <div class="about-icon">
                                        <img src="images/about/icon/4.png" alt="">
                                    </div>
                                    <div class="choose-content pl-70">
                                        <h5 class="text-defualt mb-20 text-uppercase"><strong>24/7 SUPPORT</strong></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 hidden-sm">
                            <ul class="about-icon-list">
                                <li class="about-single-icon mb-50">
                                    <div class="about-icon">
                                        <img src="images/about/icon/5.png" alt="">
                                    </div>
                                    <div class="choose-content pl-70">
                                        <h5 class="text-defualt mb-20 text-uppercase"><strong>MONEY BACK</strong></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                    </div>
                                </li>
                                <li class="about-single-icon m-0">
                                    <div class="about-icon">
                                        <img src="images/about/icon/6.png" alt="">
                                    </div>
                                    <div class="choose-content pl-70">
                                        <h5 class="text-defualt mb-20 text-uppercase"><strong>GIFT COUPON</strong></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Why Choose Us Area -->  
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