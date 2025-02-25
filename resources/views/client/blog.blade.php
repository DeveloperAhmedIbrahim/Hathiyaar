@extends('client.layout')

@section('title', 'Blog')

@section('content')

<!-- Banner-about  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <h1 class="page-title">Blogs</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blogs</a></li>
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
                                                        <a href="{{ asset('product') }}">Impact
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
                                                        <a href="{{ asset('product') }}">Impact
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
                                                        <a href="{{ asset('product') }}">Impact
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
            <div id="content" class="col-sm-9 all-blog">
                <div class="">
                    <div class="blog-content col-sm-12">
                        <div class="blog-info row">
                            <div class="blog-left blog-left-content
                                    col-md-4">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/client/images/blogs/3.png') }}" alt="Blogs" class="img-responsive mw-100">
                                    <div class="blog-day">
                                        <div class="blog-date">22</div>
                                        <div class="blog-month">Nov</div>
                                    </div>
                                    <div class="post-hover">
                                        <a class="zoom" href="#"><i class="fa-solid
                                                    fa-magnifying-glass-plus"></i></a>
                                        <a class="read-link" href="{{ route('packages') }}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-right blog-right-content
                                    col-md-8">
                                <div class="blog-text">
                                    <div class="blog-icon
                                            blog-date-comment">
                                        <a href="{{ route('packages') }}">
                                            <i class="fa-solid
                                                    fa-comment-dots"></i>
                                            <span>0 Comments</span>
                                        </a>
                                    </div>

                                    <div class="blog-title">
                                        <a href="{{ route('packages') }}">
                                            <h4>MANY PUBLISHING PACKAGES</h4>
                                        </a>
                                        <div class="blog-details">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English Many desktop publishing packages and web p...
                                        </div>
                                        <div class="read-more">
                                            <a class="btn-info btn btn-primary " href="{{ route('packages') }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-content col-sm-12">
                        <div class="blog-info row">
                            <div class="blog-left blog-left-content
                                    col-md-4">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/client/images/blogs/1.png') }}" alt="Blogs" class="img-responsive mw-100">
                                    <div class="blog-day">
                                        <div class="blog-date">22</div>
                                        <div class="blog-month">Nov</div>
                                    </div>
                                    <div class="post-hover">
                                        <a class="zoom" href="#"><i class="fa-solid
                                                    fa-magnifying-glass-plus"></i></a>
                                        <a class="read-link" href="{{ asset('variations') }}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-right blog-right-content
                                    col-md-8">
                                <div class="blog-text">
                                    <div class="blog-icon
                                            blog-date-comment">
                                        <a href="{{ asset('variations') }}">
                                            <i class="fa-solid
                                                    fa-comment-dots"></i>
                                            <span>0 Comments</span>
                                        </a>
                                    </div>

                                    <div class="blog-title">
                                        <a href="{{ asset('variations') }}">
                                            <h4>THERE ARE MANY VARIATIONS</h4>
                                        </a>
                                        <div class="blog-details">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English Many desktop publishing packages and web p...
                                        </div>
                                        <div class="read-more">
                                            <a class="btn-info btn btn-primary" href="{{ asset('variations') }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-content col-sm-12">
                        <div class="blog-info row">
                            <div class="blog-left blog-left-content
                                    col-md-4">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/client/images/blogs/5.png') }}" alt="Blogs" class="img-responsive mw-100">
                                    <div class="blog-day">
                                        <div class="blog-date">22</div>
                                        <div class="blog-month">Nov</div>
                                    </div>
                                    <div class="post-hover">
                                        <a class="zoom" href="#"><i class="fa-solid
                                                    fa-magnifying-glass-plus"></i></a>
                                        <a class="read-link" href="{{ asset('standardLorem') }}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-right blog-right-content
                                    col-md-8">
                                <div class="blog-text">
                                    <div class="blog-icon
                                            blog-date-comment">
                                        <a href="{{ asset('standardLorem') }}">
                                            <i class="fa-solid
                                                    fa-comment-dots"></i>
                                            <span>0 Comments</span>
                                        </a>
                                    </div>

                                    <div class="blog-title">
                                        <a href="{{ asset('standardLorem') }}">
                                            <h4>THE STANDARD LOREM</h4>
                                        </a>
                                        <div class="blog-details">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English Many desktop publishing packages and web p...
                                        </div>
                                        <div class="read-more">
                                            <a class="btn-info btn btn-primary" href="{{ asset('standardLorem') }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-content col-sm-12">
                        <div class="blog-info row">
                            <div class="blog-left blog-left-content
                                    col-md-4">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/client/images/blogs/2.png') }}" alt="Blogs" class="img-responsive mw-100">
                                    <div class="blog-day">
                                        <div class="blog-date">22</div>
                                        <div class="blog-month">Nov</div>
                                    </div>
                                    <div class="post-hover">
                                        <a class="zoom" href="#"><i class="fa-solid
                                                    fa-magnifying-glass-plus"></i></a>
                                        <a class="read-link" href="{{ asset('getSome') }}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-right blog-right-content
                                    col-md-8">
                                <div class="blog-text">
                                    <div class="blog-icon
                                            blog-date-comment">
                                        <a href="{{ asset('getSome') }}">
                                            <i class="fa-solid
                                                    fa-comment-dots"></i>
                                            <span>0 Comments</span>
                                        </a>
                                    </div>

                                    <div class="blog-title">
                                        <a href="{{ asset('getSome') }}">
                                            <h4>WHERE CAN I GET SOME ?</h4>
                                        </a>
                                        <div class="blog-details">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English Many desktop publishing packages and web p...
                                        </div>
                                        <div class="read-more">
                                            <a class="btn-info btn btn-primary" href="{{ asset('getSome') }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination-main">
                    <div class="row">
                        <div class="col-md-6 pagination_result">Showing
                            1 to 2 of 2 (1 Pages)</div>

                        <div class="col-md-6 text-md-end">
                            <ul class="pagination">
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item page"><a href="#" class="page-link">2</a></li>
                                <li class="page-item next"><a href="#" class="page-link"> &gt; </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--End Main-info  -->

@endsection
