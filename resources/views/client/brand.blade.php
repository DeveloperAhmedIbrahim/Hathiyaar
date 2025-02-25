@extends('client.layout')

@section('title', 'Brand')

@section('content')

<!-- Banner-about  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <h1 class="page-title">Find Your Favorite Brand</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Brand</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- EndBanner-about  -->

<!-- Main  -->
<main>
    <div id="product-manufacturer" class="container">
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
            <div id="content" class="col">
                <p class="manufacturer-tags">
                    <strong>Brand Index:</strong>
                    &nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="#A">A</a>
                    &nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="#C">C</a>
                    &nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="#H">H</a>
                    &nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="#P">P</a>
                    &nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="#S">S</a>
                </p>
                <div class="manufacturer-list">
                    <div class="manufacturer-heading">
                        <h2 id="A">A</h2>
                    </div>
                    <div class="manufacturer-content">
                        <div class="row">
                            <div class="col-sm-12"><a href="{{ route('shop') }}">Apple</a></div>
                        </div>
                    </div>
                </div>
                <div class="manufacturer-list">
                    <div class="manufacturer-heading">
                        <h2 id="C">C</h2>
                    </div>
                    <div class="manufacturer-content">
                        <div class="row">
                            <div class="col-sm-12"><a href="{{ route('shop') }}">Canon</a></div>
                        </div>
                    </div>
                </div>
                <div class="manufacturer-list">
                    <div class="manufacturer-heading">
                        <h2 id="H">H</h2>
                    </div>
                    <div class="manufacturer-content">
                        <div class="row">
                            <div class="col-sm-12"><a href="{{ route('shop') }}">Hewlett-Packard</a></div>
                            <div class="col-sm-12"><a href="{{ route('shop') }}">HTC</a></div>
                        </div>
                    </div>
                </div>
                <div class="manufacturer-list">
                    <div class="manufacturer-heading">
                        <h2 id="P">P</h2>
                    </div>
                    <div class="manufacturer-content">
                        <div class="row">
                            <div class="col-sm-12"><a href="{{ route('shop') }}">Palm</a></div>
                        </div>
                    </div>
                </div>
                <div class="manufacturer-list">
                    <div class="manufacturer-heading">
                        <h2 id="S">S</h2>
                    </div>
                    <div class="manufacturer-content">
                        <div class="row">
                            <div class="col-sm-12"><a href="{{ route('shop') }}">Sony</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--End Main  -->

@endsection
