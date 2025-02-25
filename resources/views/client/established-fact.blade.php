@extends('client.layout')

@section('title', 'Established Fact')

@section('content')

<!-- Banner-about  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <h1 class="page-title">It Is Established Fact</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blogs</a></li>
                <li class="breadcrumb-item"><a href="{{ route('establishedFact') }}">It Is Established Fact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- EndBanner-about  -->

<!-- Main-info  -->
<main>
    <div id="product-category" class="container">
        <div class="row">
            <aside id="column-left" class="col-3">
                <div class="category-content">
                    <div class="box-category">
                        <h3 class="toggled relative">Categories <span class="toggle-open toggle-open-1
                                    arrow-down"></span></h3>
                        <ul class="list-unstyled parent to-show" id="select-category">
                            <li class="has-more-category">
                                <a href="#" class="list-group-item
                                        main-item">
                                    Drywall Anchors
                                    <span class="toggled">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled
                                        child-categories group">
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Fireplace Tools
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Gardening Tools
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-more-category">
                                <a href="#" class="list-group-item
                                        main-item">
                                    Accesories
                                    <span class="toggled">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled
                                        child-categories
                                        group">
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Drills</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Ladders</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#" class="list-group-item ">Chisels</a>
                            </li>
                            <li class="has-more-category">
                                <a href="#" class="list-group-item
                                        main-item">Hammers<span class="toggled">
                                        <i class="fa fa-plus"></i></span>
                                </a>
                                <ul class="list-unstyled
                                        child-categories
                                        group">
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Axes</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Carpeting Tools</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Grout Removal Tools</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Satchel</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Saws</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#" class="list-group-item ">
                                    Sanding Tools
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="list-group-item ">
                                    Pliers
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="list-group-item ">
                                    Sanders
                                </a>
                            </li>
                            <li class="has-more-category">
                                <a href="#" class="list-group-item
                                        main-item">
                                    Wrenches
                                    <span class="toggled">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled
                                        child-categories group">
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Air Tools</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Chainsaw tool</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Clamps</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Concrete Tools</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Cordless drill</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Diagonal pliers</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Drywall Tools</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Lineman’s pliers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Measuring Tools</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Measuring Tools</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Painting Tools</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Pipe wrench</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item
                                                active">
                                            Plumbing Tools</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Power Tools</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Power Tools</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Tape measure</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Tool Belts</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item">
                                            Wood Cutting
                                            Tools</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box mt-50">
                    <div class="container">
                        <div class="box-content">
                            <div class="page-titel toggled">
                                <h3>Bestsellers <span class="toggle-open
                                            toggle-open-2 arrow-down"></span></h3>
                            </div>
                            <div class="block_box to-show">
                                <div id="bestseller-carousel" class="box-product product-carousel" data-items="4">
                                    <div class="col col-12
                                            product-layout">
                                        <div class="product-thumb">
                                            <div class="image">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{ asset('assets/client/images/products/11.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="content
                                                    product-description">
                                                <div class="caption">
                                                    <div class="rating">
                                                        <span class="star-icon">
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <h4 class="product-title">
                                                        <a href="{{ route('product') }}">Impact
                                                            Wrench</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="price-new">$99.01</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12
                                            product-layout">
                                        <div class="product-thumb">
                                            <div class="image">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{ asset('assets/client/images/products/1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="content
                                                    product-description">
                                                <div class="caption">
                                                    <div class="rating">
                                                        <span class="star-icon">
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <h4 class="product-title">
                                                        <a href="{{ route('product') }}">Impact
                                                            Wrench</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="price-new">$99.01</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12
                                            product-layout">
                                        <div class="product-thumb">
                                            <div class="image">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{ asset('assets/client/images/products/15.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="content
                                                    product-description">
                                                <div class="caption">
                                                    <div class="rating">
                                                        <span class="star-icon">
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                            <i class="fa-regular
                                                                    fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <h4 class="product-title">
                                                        <a href="{{ route('product') }}">Impact
                                                            Wrench</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="price-new">$99.01</span>
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
                <div class="container banner_outer mt-20">
                    <div id="carousel-banner-0" class="carousel slide
                            carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center">
                                        <img src="{{ asset('assets/client/images/banners/category_banner2.jpg') }}" alt="Left Banner" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </aside>
            <div id="content" class="col-sm-9  single-blog">
                <div class="article-blog">
                    <div class="blog-image">
                        <img src="{{ asset('assets/client/images/blogs/1.png') }}" alt="Many Publishing Packages" title="Many Publishing Packages" class="img-responsive mw-100">
                    </div>
                    <div class="blog-description">
                        <div class="date-time">
                            <i class="fa-regular fa-calendar-days"></i>
                            <span>22 November, 2022</span>
                        </div>
                        <div class="blog_title">It Is Established Fact </div>
                        <div class="blog-desc">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>

                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                    </div>
                </div>
                <div class="comment-list">
                </div>
                <div class="comment-form">

                    <div class="block-title">
                        <h3>Leave Comment</h3>
                    </div>

                    <div class="" id="add-comment">

                        <h4 class="no-login text-center">You must <a href="{{ route('login') }}">login</a> to add a comment. If you do not have an account, you may <a href="{{ route('register') }}">register</a> for one. Registration is free!</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--End Main-info  -->

@endsection
