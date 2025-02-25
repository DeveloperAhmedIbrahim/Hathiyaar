<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') - Mectools </title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/client/images/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap.min.css') }}" type="text/css" media="all">
    <!-- Fontawesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Owlcarousel Link -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/owl.theme.default.min.css') }}">
    <!-- Font Family-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- Icon Link -->
    <link rel="stylesheet" href="{{ asset('assets/client/fonts/themability-font.css') }}">
    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}" type="text/css" media="all">
    <!--- Themibility link-->
    <link rel="stylesheet" href="{{ asset('assets/client/css/themability_megamenu.css') }}">

</head>

<body class="home_page">
    <div class="loader"></div>
    <!-- Header_Top-->
    <nav id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 top-left">
                    <div class="contact-info">
                        <a href="tel:+1(123)8425733">
                            <i class="fa fa-phone"></i>
                            <span class="">+1 (123) 8425733</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 top-right">
                    <div class="pull-left">
                    </div>
                    <div class="pull-left">
                        <form method="post" id="form-currency">
                            <div class="dropdown btn-group">
                                <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle btn-link show" aria-expanded="false">

                                    <span class="drop-text">Currency</span>
                                    <span class="symbol">US Dollar</span>

                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu currency-dropdown dropdown-menu-right" data-popper-placement="bottom-start">
                                    <li><a href="#" class="dropdown-item">€ Euro</a></li>
                                    <li><a href="#" class="dropdown-item">£ Pound Sterling</a></li>
                                    <li><a href="#" class="dropdown-item">$ US Dollar</a></li>
                                </ul>
                            </div>
                            <input type="hidden" name="code" value=""> <input type="hidden" name="redirect" value="">
                        </form>

                    </div>
                    <div id="header_ac" class="dropdown">
                        <a href="#" class="dropdown-toggle btn-link show" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="">Login</span><i class="fa-regular fa-circle-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right account-link-toggle">
                            <li><a href="{{ route('register') }}" class="dropdown-item">Register</a></li>
                            <li><a href="{{ route('login') }}" class="dropdown-item">Login</a></li>
                        </ul>
                    </div>

                    <div id="top-links" class="nav pull-right d-none">
                        <ul class="list-inline">
                            <li class="hidden">
                                <a href="#" id="wishlist-total" title="Wish List (2)">
                                    <i class="fa fa-heart"></i>
                                    <span class="hidden-xs hidden-sm hidden-md">Wish List (2)</span>
                                </a>
                            </li>
                            <li class="hidden">
                                <a href="#" title="Shopping Cart">
                                    <i class="fa fa-{{ route('cart') }}"></i>
                                    <span class="hidden-xs hidden-sm hidden-md">Shopping Cart</span>
                                </a>
                            </li>
                            <li class="hidden">
                                <a href="#" title="Checkout">
                                    <i class="fa fa-share"></i>
                                    <span class="hidden-xs hidden-sm hidden-md">Checkout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Header_Top -->

    <!-- Nav_bar -->
    <header class="">
        <div class="container">
            <div class="row header-inner align-items-center sub_sub_menu">
                <div class="col-xl-2 col-md-6 header-left">
                    <div id="logo"> <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/client/images/logo.png') }}" title="Your Store" alt="Your Store" class="img-fluid">
                        </a> </div>
                </div>
                <div class="header-center text-end col-xl-7">
                    <div class="themability_megamenu-style-dev">
                        <div class="responsive themability_default">

                            <nav class="navbar-default">
                                <div class=" container-themability_megamenu horizontal ">
                                    <div class="navbar-header">
                                        <button type="button" id="show-themability_megamenu" data-toggle="collapse" class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="themability_megamenu-wrapper megamenu_typeheader">

                                        <span id="remove-themability_megamenu" class="fa-solid fa-xmark"></span>

                                        <div class="themability_megamenu-pattern">
                                            <div class="container">
                                                <ul class="themability_megamenu" data-megamenuid="31" data-transition="slide" data-animationtime="500">

                                                    <li class="home">
                                                        <a href="{{ route('home') }}">
                                                            <span><strong>Home</strong></span>
                                                        </a>
                                                    </li>
                                                    <li class="with-sub-menu click">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>
                                                                Shop
                                                            </strong>

                                                            <b class="fa fa-angle-down"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 900px; display: none;">
                                                            <div class="content" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="categories hot">
                                                                            <div class="row">
                                                                                <div class="col-sm-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="{{ route('category') }}" class="main-menu">Wrenches</a>
                                                                                                <ul>
                                                                                                    <li><a href="{{ route('category') }}">Plumbing Tools</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Lineman’s pliers</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Tape measure</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Diagonal pliers</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Power Tools</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Measuring Tools</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Clamps</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="{{ route('category') }}" class="main-menu">Sanding Tools</a>
                                                                                                <ul>
                                                                                                    <li><a href="{{ route('category') }}">Air Tools</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Chainsaw tool</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Power Tools</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Tool Belts</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Concrete Tools</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Drywall Tools</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="{{ route('category') }}" class="main-menu">Drywall Anchors</a>
                                                                                                <ul>
                                                                                                    <li><a href="{{ route('category') }}">Gardening Tools</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Fireplace Tools</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="{{ route('category') }}" class="main-menu">Accesories</a>
                                                                                                <ul>
                                                                                                    <li><a href="{{ route('category') }}">Drills</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Ladders</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Plunger tool</a></li>
                                                                                                    <li><a href="{{ route('category') }}">Measuring Tools</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="border"></div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="html ">
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <div class="link"><img alt="" class="img-responsive mw-100" src="{{ asset('assets/client/images/megamenu/1.jpg') }}"></div>
                                                                                </div>

                                                                                <div class="col-sm-6">
                                                                                    <div class="link"><img alt="" class="img-responsive mw-100" src="{{ asset('assets/client/images/megamenu/2.jpg') }}"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="with-sub-menu click">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>
                                                                Categories
                                                            </strong>
                                                            <span class="labeloffer"></span>
                                                            <b class="fa fa-angle-down"></b>
                                                        </a>

                                                        <div class="sub-menu" style="width: 900px; display: none;">
                                                            <div class="content" style="display: none;">
                                                                <div class="row sub_sub_menu">
                                                                    <div class="col-sm-4">
                                                                        <div class="megamenu-product-list">
                                                                            <span class="title-submenu">Special Product</span>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 ">
                                                                                    <div class="menu-product-thumb">
                                                                                        <div class="image">
                                                                                            <a href="#">
                                                                                                <img src="{{ asset('assets/client/images/products/10.jpg') }}" alt="Cordless drill" title="Cordless drill" class="img-responsive mw-100">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="caption">
                                                                                                <h4><a href="{{ route('product') }}">Cordless drill</a></h4>
                                                                                                <div class="rating">
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                </div>

                                                                                                <p class="price">
                                                                                                    <span class="price-new">$482.00</span>
                                                                                                    <span class="price-old">$602.00</span>

                                                                                                    <span class="price-tax">$400.00</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 ">
                                                                                    <div class="menu-product-thumb">
                                                                                        <div class="image">
                                                                                            <a href="#">
                                                                                                <img src="{{ asset('assets/client/images/products/12.jpg') }}" alt="Hammer tool" title="Hammer tool" class="img-responsive mw-100">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="caption">
                                                                                                <h4><a href="{{ route('product') }}">Hammer tool</a></h4>
                                                                                                <div class="rating">
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                </div>

                                                                                                <p class="price">
                                                                                                    <span class="price-new">$98.00</span>
                                                                                                    <span class="price-old">$122.00</span>

                                                                                                    <span class="price-tax">$80.00</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 ">
                                                                                    <div class="menu-product-thumb">
                                                                                        <div class="image">
                                                                                            <a href="{{ route('product') }}">
                                                                                                <img src="{{ asset('assets/client/images/products/14.jpg') }}" alt="Monkeywrench" title="Monkeywrench" class="img-responsive mw-100">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="caption">
                                                                                                <h4><a href="{{ route('product') }}">Monkeywrench</a></h4>
                                                                                                <div class="rating">
                                                                                                    <span class="fa-stack"><i class="fa-solid fa-star fa-stack-1x"></i><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa-stack"><i class="fa-solid fa-star fa-stack-1x"></i><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa-stack"><i class="fa-solid fa-star fa-stack-1x"></i><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa-stack"><i class="fa-solid fa-star fa-stack-1x"></i><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa-stack"><i class="fa-solid fa-star fa-stack-1x"></i><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                </div>

                                                                                                <p class="price">
                                                                                                    <span class="price-new">$110.00</span>
                                                                                                    <span class="price-old">$122.00</span>

                                                                                                    <span class="price-tax">$90.00</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <ul class="subcategory ">
                                                                            <li>
                                                                                <a href="{{ route('category') }}" class="title-submenu ">Hammers</a>
                                                                                <div class="row sub_sub_menu">
                                                                                    <div class="col-sm-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="{{ route('category') }}" class="main-menu">Axes</a></li>
                                                                                                <li><a href="{{ route('category') }}" class="main-menu">Carpeting Tools</a></li>
                                                                                                <li><a href="{{ route('category') }}" class="main-menu">Grout Removal Tools</a></li>
                                                                                                <li><a href="{{ route('category') }}" class="main-menu">Satchel<b class="fa fa-angle-right"></b></a>
                                                                                                    <ul>
                                                                                                        <li><a href="{{ route('category') }}">Wallpapering Tools</a></li>
                                                                                                        <li><a href="{{ route('category') }}">Wood Cutting Tools</a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li><a href="{{ route('category') }}" class="main-menu">Saws</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <img src="{{ asset('assets/client/images/banners/category_banner1.jpg') }}" alt="" class="img-responsive mw-100">
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <ul class="subcategory ">
                                                                            <li>
                                                                                <a href="{{ route('category') }}" class="title-submenu ">Accesories</a>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="{{ route('category') }}" class="main-menu">Drills</a></li>
                                                                                                <li><a href="{{ route('category') }}" class="main-menu">Ladders</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <img src="{{ asset('assets/client/images/banners/category_banner1.jpg') }}" alt="" class="img-responsive mw-100">
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="with-sub-menu click">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>
                                                                Product
                                                            </strong>
                                                            <span class="labelhot"></span>
                                                            <b class="fa fa-angle-down"></b>
                                                        </a>

                                                        <div class="sub-menu" style="display: none; width: 900px;right: auto;left: 0px;">
                                                            <div class="content" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="megamenu-product-list">
                                                                            <span class="title-submenu">Popular Product</span>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 ">
                                                                                    <div class="menu-product-thumb">
                                                                                        <div class="image">
                                                                                            <a href="#">
                                                                                                <img src="{{ asset('assets/client/images/products/12.jpg') }}" alt="Cordless drill" title="Cordless drill" class="img-responsive mw-100">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="caption">
                                                                                                <h4><a href="{{ route('product') }}">Cordless drill</a></h4>
                                                                                                <div class="rating">
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                </div>

                                                                                                <p class="price">
                                                                                                    <span class="price-new">$482.00</span>
                                                                                                    <span class="price-old">$602.00</span>

                                                                                                    <span class="price-tax">$400.00</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 ">
                                                                                    <div class="menu-product-thumb">
                                                                                        <div class="image">
                                                                                            <a href="#">
                                                                                                <img src="{{ asset('assets/client/images/products/14.jpg') }}" alt="Hammer tool" title="Hammer tool" class="img-responsive mw-100">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="caption">
                                                                                                <h4><a href="{{ route('product') }}">Hammer tool</a></h4>
                                                                                                <div class="rating">
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                </div>

                                                                                                <p class="price">
                                                                                                    <span class="price-new">$98.00</span>
                                                                                                    <span class="price-old">$122.00</span>

                                                                                                    <span class="price-tax">$80.00</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 ">
                                                                                    <div class="menu-product-thumb">
                                                                                        <div class="image">
                                                                                            <a href="#">
                                                                                                <img src="{{ asset('assets/client/images/products/15.jpg') }}" alt="Monkeywrench" title="Monkeywrench" class="img-responsive mw-100">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="caption">
                                                                                                <h4><a href="{{ route('product') }}">Monkeywrench</a></h4>
                                                                                                <div class="rating">
                                                                                                    <span class="fa-stack"><i class="fa-solid fa-star fa-stack-1x"></i><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa-stack"><i class="fa-solid fa-star fa-stack-1x"></i><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa-stack"><i class="fa-solid fa-star fa-stack-1x"></i><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa-stack"><i class="fa-solid fa-star fa-stack-1x"></i><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa-stack"><i class="fa-solid fa-star fa-stack-1x"></i><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                </div>

                                                                                                <p class="price">
                                                                                                    <span class="price-new">$110.00</span>
                                                                                                    <span class="price-old">$122.00</span>

                                                                                                    <span class="price-tax">$90.00</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="megamenu-product-list">
                                                                            <span class="title-submenu">Bestseller Product</span>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 ">
                                                                                    <div class="menu-product-thumb">
                                                                                        <div class="image">
                                                                                            <a href="#">
                                                                                                <img src="{{ asset('assets/client/images/products/17.jpg') }}" alt="Impact Wrench" title="Impact Wrench" class="img-responsive mw-100">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="caption">
                                                                                                <h4><a href="{{ route('product') }}">Impact Wrench</a></h4>
                                                                                                <div class="rating">
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                </div>

                                                                                                <p class="price">
                                                                                                    $122.00

                                                                                                    <span class="price-tax">$100.00</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 ">
                                                                                    <div class="menu-product-thumb">
                                                                                        <div class="image">
                                                                                            <a href="#">
                                                                                                <img src="{{ asset('assets/client/images/products/6.jpg') }}" alt="Caulking gun" title="Caulking gun" class="img-responsive mw-100">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="caption">
                                                                                                <h4><a href="{{ route('product') }}">Caulking gun</a></h4>
                                                                                                <div class="rating">
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                </div>

                                                                                                <p class="price">
                                                                                                    $122.00

                                                                                                    <span class="price-tax">$100.00</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 ">
                                                                                    <div class="menu-product-thumb">
                                                                                        <div class="image">
                                                                                            <a href="#">
                                                                                                <img src="{{ asset('assets/client/images/products/2.jpg') }}" alt="Stepladder tool" title="Stepladder tool" class="img-responsive mw-100">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="caption">
                                                                                                <h4><a href="{{ route('product') }}">Stepladder tool</a></h4>
                                                                                                <div class="rating">
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                </div>

                                                                                                <p class="price">
                                                                                                    $1,202.00

                                                                                                    <span class="price-tax">$1,000.00</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="megamenu-product-list">
                                                                            <span class="title-submenu">Latest Product</span>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 ">
                                                                                    <div class="menu-product-thumb">
                                                                                        <div class="image">
                                                                                            <a href="#">
                                                                                                <img src="{{ asset('assets/client/images/products/9.jpg') }}" alt="Backsaw tool" title="Backsaw tool" class="img-responsive mw-100">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="caption">
                                                                                                <h4><a href="{{ route('product') }}">Backsaw tool</a></h4>
                                                                                                <div class="rating">
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                </div>

                                                                                                <p class="price">
                                                                                                    $20.00

                                                                                                    <span class="price-tax">$20.00</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 ">
                                                                                    <div class="menu-product-thumb">
                                                                                        <div class="image">
                                                                                            <a href="#">
                                                                                                <img src="{{ asset('assets/client/images/products/10.jpg') }}" alt="Plunger tool" title="Plunger tool" class="img-responsive mw-100">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="caption">
                                                                                                <h4><a href="{{ route('product') }}">Plunger tool</a></h4>
                                                                                                <div class="rating">
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                </div>

                                                                                                <p class="price">
                                                                                                    $241.99
                                                                                                    <span class="price-tax">$199.99</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 ">
                                                                                    <div class="menu-product-thumb">
                                                                                        <div class="image">
                                                                                            <a href="#">
                                                                                                <img src="{{ asset('assets/client/images/products/13.jpg') }}" alt="Impact Wrench" title="Impact Wrench" class="img-responsive mw-100">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="caption">
                                                                                                <h4><a href="{{ route('product') }}">Impact Wrench</a></h4>
                                                                                                <div class="rating">
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                    <span class="fa fa-stack"><i class="fa-regular fa-star fa-stack-1x"></i></span>
                                                                                                </div>

                                                                                                <p class="price">
                                                                                                    $122.00

                                                                                                    <span class="price-tax">$100.00</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="with-sub-menu click">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>
                                                                Pages
                                                            </strong>

                                                            <b class="fa fa-angle-down"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 250px; display: none;">
                                                            <div class="content" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <ul class="route  html-link">
                                                                            <li><a href="{{ route('about') }}" class="main-menu">About Us</a></li>
                                                                            <li><a href="{{ route('contact') }}" class="main-menu">Contact Us</a></li>
                                                                            <li><a href="{{ route('siteMap') }}" class="main-menu">Site Map</a></li>
                                                                            <li><a href="{{ route('category') }}" class="main-menu">Special</a></li>
                                                                            <li><a href="{{ route('login') }}" class="main-menu">My Account</a></li>
                                                                            <li><a href="{{ route('login') }}" class="main-menu">Order History</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="{{ route('blog') }}" class="clearfix">
                                                            <strong>
                                                                Blog
                                                            </strong>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right col-xl-3 col-md-6">
                    <div class="search-content">
                        <div class="search-btn-outer d-lg-none">
                            <i class="icon-search"></i>
                        </div>
                        <div class="header-search">
                            <div id="themabilitySearch" class="input-group themability-search">
                                <input type="text" name="search" value="" placeholder="Search..." class="form-control input-lg ui-autocomplete-input" autocomplete="off">
                                <span class="btn-search input-group-btn">
                                    <button type="button" class="btn btn-primary btn-lg"><i class="icon-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="header-cart" class="cart-content">
                        <div id="cart" class="dropdown d-grid btn-group btn-block">
                            <button type="button" data-bs-toggle="dropdown" class="btn btn-inverse btn-block dropdown-toggle show">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span id="cart-total" class="new">2<span class="d-none">2</span></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right header-cart-toggle ">
                                <li class="cart-content-product">
                                    <table class="table table-sm table-striped">
                                        <tbody>
                                            <tr>
                                                <td class="text-center product-cart-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/client/images/products/7.jpg') }}" width="90" alt="Backsaw tool" title="Backsaw tool" class="img-thumbnail">
                                                    </a>
                                                </td>
                                                <td class="text-start product-cart-details">
                                                    <a href="{{ route('product') }}" class="product-item-name">Screwdriver</a>
                                                    <div class="product-cart-info">
                                                        <span class="product-cart-qty">1 x </span>
                                                        <span class="product-cart-price">122.00$</span>
                                                    </div>
                                                </td>
                                                <td class="text-end product-cart-close">
                                                    <form method="post" data-oc-toggle="ajax" data-oc-load="" data-oc-target="#header-cart">
                                                        <input type="hidden" name="key" value="10">
                                                        <button type="button" data-bs-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center product-cart-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/client/images/products/9.jpg') }}" width="90" alt="Backsaw tool" title="Backsaw tool" class="img-thumbnail">
                                                    </a>
                                                </td>
                                                <td class="text-start product-cart-details">
                                                    <a href="{{ route('product') }}" class="product-item-name">Electric drill</a>
                                                    <div class="product-cart-info">
                                                        <span class="product-cart-qty">1 x </span>
                                                        <span class="product-cart-price">1,202.00$</span>
                                                    </div>
                                                </td>
                                                <td class="text-end product-cart-close">
                                                    <form method="post" data-oc-toggle="ajax" data-oc-load="" data-oc-target="#header-cart">
                                                        <input type="hidden" name="key" value="10">
                                                        <button type="button" data-bs-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-sm table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="text-start"><strong>Sub-Total</strong></td>
                                                    <td class="text-end">1,100.00$</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start"><strong>Eco Tax (-2.00)</strong></td>
                                                    <td class="text-end">4.00$</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start"><strong>VAT (20%)</strong></td>
                                                    <td class="text-end">220.00$</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start"><strong>Total</strong></td>
                                                    <td class="text-end">1,324.00$</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="text-center product-cart-button">
                                            <a href="{{ route('cart') }}" class="btn-primary cart-btn addtocart-btn"><i class="fa-solid fa-cart-shopping d-none"></i> View Cart</a>
                                            &nbsp;&nbsp;&nbsp;<a href="{{ route('checkout') }}" class="btn-primary cart-btn checkout-btn"><i class="fa-solid fa-share d-none"></i> Checkout</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Nav_bar -->

    @yield('content')

    <!-- Footer_Section -->
    <footer class="bd-footer pt-lg-5 pt-3 mt-5 footer-color">
        <div class="container">
            <div class="row footer-row">
                <div id="contact" class="col-lg-3 mb-lg-3 mb-md-0 mb-sm-0 footer-column">
                    <h4 class="toggled">
                        Contact
                        <span class="toggle-open"><i class="fa fa-chevron-down"></i></span>
                    </h4>
                    <ul class="list-unstyled to-show contact">
                        <li class="map-icon"><i class="fa-solid fa-location-dot"></i>
                            National
                            park,dl 588436,US
                        </li>
                        <li class="phone-icon"><i class="fa-solid fa-phone"></i> +91 123 456
                            789
                        </li>
                        <li class="fax-icon"><i class="fa-solid fa-fax"></i> 0123-456-789</li>
                        <li class="mail-icon"><i class="fas fa-envelope"></i> demo@Yourstore.com </li>
                    </ul>
                </div>
                <div id="information" class="col-lg-3 mb-lg-3 mb-md-0 mb-sm-0 footer-column">
                    <h4 class="toggled">
                        Information
                        <span class="toggle-open"><i class="fa fa-chevron-down"></i></span>
                    </h4>
                    <ul class="list-unstyled text-set to-show information ">
                        <li class=""><a href="{{ route('termsConditions') }}">Terms & Conditions</a></li>
                        <li class=""><a href="{{ route('deliveryInformation') }}">Delivery Information</a></li>
                        <li class=""><a href="{{ route('about') }}">About Us</a></li>
                        <li class=""><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                        <li class=""><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div id="extras" class="col-lg-3 mb-lg-3 mb-md-0 mb-sm-0 footer-column">
                    <h4 class="toggled">
                        Extras
                        <span class="toggle-open"><i class="fa fa-chevron-down"></i></span>
                    </h4>
                    <ul class="list-unstyled text-set to-show extras">
                        <li class=""><a href="{{ route('brand') }}">Brands</a></li>
                        <li class=""><a href="{{ route('giftCirtificate') }}">Gift Certificates</a></li>
                        <li class=""><a href="{{ route('login') }}">Affiliate</a></li>
                        <li class=""><a href="{{ route('category') }}">Specials</a></li>
                        <li class=""><a href="{{ route('siteMap') }}">Site Map</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 footer-column find-us">
                    <div class="position-footer-right">
                        <div class="follow-link">
                            <h4>Find Us On</h4>
                            <div class="media-icon mb-4">
                                <span class="fb"><i class="fab fa-facebook-f"></i></span>
                                <span class="insta"><i class="fab fa-instagram"></i></span>
                                <span class="wh-app"><i class="fab fa-whatsapp"></i></span>
                                <span class="pint"><i class="fab fa-pinterest"></i></span>
                            </div>
                        </div>

                        <div class="payment-link">
                            <h4>Payment</h4>
                            <div class="payment-icon mt-4">
                                <span class="visa"><i class="fab fa-cc-visa"></i></span>
                                <span class="master"><i class="fab fa-cc-mastercard"></i></span>
                                <span class="pay-pal"><i class="fab fa-cc-paypal"></i></span>
                                <span class="discover"><i class="fab fa-cc-discover"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right">
                <span class="last-text">
                    Powered By OpenCart Your Store &#169; {{ date('Y') }}
                </span>
            </div>
        </div>
    </footer>
    <a class="scrollToTop back-to-top" href="#" data-toggle="tooltip" title="" data-original-title="Top" style="display: block;"><i class="fa fa-angle-up"></i></a>
    <!-- .Footer_Section -->


    <!-- Jquery link  -->
    <script src="{{ asset('assets/client/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap Bundle with Popper js -->
    <script src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>
    <!-- Owlcarousel Js Link -->
    <script src="{{ asset('assets/client/js/owl.carousel.min.js') }}"></script>
    <!-- Jquery Js link -->
    <script src="{{ asset('assets/client/js/theme.js') }}"></script>
    <!-- Themability Megamenu Js link -->
    <script src="{{ asset('assets/client/js/themability_megamenu.js') }}"></script>
    <!-- wow javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>new WOW().init();</script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
</body>

</html>
