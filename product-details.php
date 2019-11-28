<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Details || Forge</title>
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
                            <h2 class="breadcrumbs-title text-black m-0">Product Details </h2>
                            <ul class="top-page">
                                <li><a href="index.html">Home</a></li>
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
            <!-- Start Product Details -->
            <div class="product-details-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="single-product-image">
                                <div id="my-tab-content" class="tab-content">
                                    <div class="tab-pane active" id="view1">
                                        <a class="venobox" href="images/product/single/1.jpg" data-gall="gallery" title=""><img src="images/product/single/1.jpg" alt=""><span>+</span></a>
                                    </div>
                                    <div class="tab-pane" id="view2">
                                        <a class="venobox" href="images/product/single/1.jpg" data-gall="gallery" title=""><img src="images/product/single/1.jpg" alt=""><span>+</span></a>
                                    </div>
                                    <div class="tab-pane" id="view3">
                                        <a class="venobox" href="images/product/single/1.jpg" data-gall="gallery" title=""><img src="images/product/single/1.jpg" alt=""><span>+</span></a>
                                    </div>
                                </div>
                                <div id="viewproduct" class="nav nav-tabs product-view" data-tabs="tabs">
                                    <div class="pro-view active"><a href="#view1" data-toggle="tab"><img src="images/product/single/b1.jpg" alt=""></a></div>
                                    <div class="pro-view"><a href="#view2" data-toggle="tab"><img src="images/product/single/b2.jpg" alt=""></a></div>
                                    <div class="pro-view"><a href="#view3" data-toggle="tab"><img src="images/product/single/b3.jpg" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-text product-text-list product-details-right">
                                <h5 class="product-name-list">
                                    <a href="#" title="Zelletria ostma"><strong>Zelletria ostma</strong></a>
                                </h5>
                                <ul class="pull-left list-inline ratings rating-list pb-20">
                                    <li><i class="rated fa fa-star"></i></li>
                                    <li><i class="rated fa fa-star"></i></li>
                                    <li><i class="rated fa fa-star"></i></li>
                                    <li><i class="rated fa fa-star"></i></li>
                                    <li><i class="rated fa fa-star"></i></li>
                                    <li class="reviews text-theme"><span>10</span>Review(s)</li>
                                </ul>
                                <div class="pd-quantity-available mb-10">
                                    <p id="product-available">
                                        <span>Available : </span>
                                    </p>
                                    <p id="availability" class="text-defualt">
                                        <span> In stock</span>
                                    </p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidt utore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris    nisi ut aliquip ex ea commodo consequa uis aute irure dolor in reprehenderit </p>
                                <div class="clear"></div>
                                <div class="shop-select-details">
                                    <div class="shop-tab-pill">
                                        <div class="show-label">
                                            <label>Size : </label>
                                            <select>
                                                <option selected="selected" value="position">Select Size</option>
                                                <option value="small">S</option>
                                                <option value="medium">M</option>
                                                <option value="large">L</option>
                                            </select>
                                        </div>
                                        <div class="show-label showing">
                                            <label>Quantity : </label>
                                            <select>
                                                <option selected="selected" value="position">9</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <ul class="pricing pricing-list">
                                    <li class="text-right p-price text-center">$180</li>
                                    <li class="text-right c-price text-defualt text-center">$150</li>
                                </ul>
                                <div class="clear"></div>
                                <ul class="quick-veiw-list">
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="socailsharing-product mt-40">
                                    <label>Share :</label>
                                    <ul>
                                        <li class="icon-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="icon-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="icon-google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="icon-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>                     
                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="p-details-tab gray-ash-bg mt-50">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#more-info" aria-controls="more-info" role="tab" data-toggle="tab">MORE INFO</a></li>
                                    <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">DATA SHEET</a></li>
                                    <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">REVIEWS</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div class="tab-content review gray-ash-bg mt-30">
                                <div role="tabpanel" class="tab-pane active p-30" id="more-info">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea</p>
                                </div>
                                <div role="tabpanel" class="tab-pane p-30" id="data">
                                    <table class="table-data-sheet m-0">
                                        <tbody>
                                            <tr class="odd">
                                                <td>Compositions</td>
                                                <td>Cotton</td>
                                            </tr>
                                            <tr class="even">
                                                <td>Styles</td>
                                                <td>Casual</td>
                                            </tr>
                                            <tr class="odd">
                                                <td>Properties</td>
                                                <td>Short Sleeve</td>
                                            </tr>
                                        </tbody>
                                   </table>
                                </div>
                                <div role="tabpanel" class="tab-pane p-30" id="reviews">
                                    <div id="product-comments-block-tab">
                                        <a href="#" class="comment-btn"><span>Be the first to write your review!</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="offer-img b-img mt-50">
                                <img src="images/offer-banner/7.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Product Details -->
            <!-- Start Related Product -->
            <div class="featured-product-area">
                <div class="container">
                    <div class="row rp-style">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>RELATED PRODUCTS</strong></h2>
                                <p class="text-defualt">Best Collection for you</p>
                                <img alt="" src="images/section-border.png">
                            </div>
                        </div>
                    </div>
                    <div class="row rp-style">
                        <div class="featured-carousel indicator-style">
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
            <!-- End Of Related Product -->
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