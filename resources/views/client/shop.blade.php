@extends('client.layout')

@section('title', 'Shop')

@section('content')

<!-- Banner-Shop  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <h1 class="page-title">Wrenches</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('category') }}">Wrenches</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- EndBanner-Shop  -->

<!-- Main-Shop  -->
<main>
    <div id="product-category" class="container">
        <div class="row">
            <aside id="column-left" class="col-3">
                <div class="category-content">
                    <div class="box-category">
                        <h3 class="toggled relative">Categories <span class="toggle-open toggle-open-1 arrow-down"></span></h3>
                        <ul class="list-unstyled parent to-show" id="select-category">
                            <li class="has-more-category">
                                <a href="#" class="list-group-item main-item">
                                    Drywall Anchors
                                    <span class="toggled">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled child-categories group">
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
                                <a href="#" class="list-group-item main-item">
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
                                <a href="#" class="list-group-item main-item">
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
                                <h3>Bestsellers <span class="toggle-open toggle-open-2 arrow-down"></span></h3>
                            </div>
                            <div class="block_box to-show">
                                <div id="bestseller-carousel" class="box-product   product-carousel" data-items="4">
                                    <div class="col col-12 product-layout">
                                        <div class="product-thumb">
                                            <div class="image">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{ asset('assets/client/images/products/11.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="content product-description">
                                                <div class="caption">
                                                    <div class="rating">
                                                        <span class="star-icon">
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <h4 class="product-title">
                                                        <a href="{{ route('product') }}">Impact Wrench</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="price-new">$99.01</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 product-layout">
                                        <div class="product-thumb">
                                            <div class="image">
                                                <a href="{{ route('product') }}">
                                                    <img class="img-fluid" src="{{ asset('assets/client/images/products/1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="content product-description">
                                                <div class="caption">
                                                    <div class="rating">
                                                        <span class="star-icon">
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <h4 class="product-title">
                                                        <a href="{{ route('product') }}">Impact Wrench</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="price-new">$99.01</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 product-layout">
                                        <div class="product-thumb">
                                            <div class="image">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{ asset('assets/client/images/products/15.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="content product-description">
                                                <div class="caption">
                                                    <div class="rating">
                                                        <span class="star-icon">
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <h4 class="product-title">
                                                        <a href="{{ route('product') }}">Impact Wrench</a>
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

                <div class="card filter">
                    <div class="box-content">
                        <div id="filter">
                            <h3 class="toggled relative"><span class="toggle-open toggle-open-3 arrow-down"></span> Refine Search</h3>
                            <div class="filter_box to-show">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-items">
                                        <a class="list-group-item">color</a>
                                        <div class="list-group-item">
                                            <div id="filter-group-1">
                                                <div class="form-check">
                                                    <input type="checkbox" name="filter[]" value="1" id="input-filter-1" class="form-check-input">
                                                    <label for="input-filter-1" class="form-check-label">black</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="filter[]" value="2" id="input-filter-2" class="form-check-input">
                                                    <label for="input-filter-2" class="form-check-label">white</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-items">
                                        <a class="list-group-item">price</a>
                                        <div class="list-group-item">
                                            <div id="filter-group-2">
                                                <div class="form-check">
                                                    <input type="checkbox" name="filter[]" value="4" id="input-filter-4" class="form-check-input">
                                                    <label for="input-filter-4" class="form-check-label">$150-$250</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="filter[]" value="3" id="input-filter-3" class="form-check-input">
                                                    <label for="input-filter-3" class="form-check-label">$49-$149</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-items">
                                        <a class="list-group-item">size</a>
                                        <div class="list-group-item">
                                            <div id="filter-group-3">
                                                <div class="form-check">
                                                    <input type="checkbox" name="filter[]" value="5" id="input-filter-5" class="form-check-input">
                                                    <label for="input-filter-5" class="form-check-label">large</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="filter[]" value="6" id="input-filter-6" class="form-check-input">
                                                    <label for="input-filter-6" class="form-check-label">medium</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="filter[]" value="7" id="input-filter-7" class="form-check-input">
                                                    <label for="input-filter-7" class="form-check-label">small</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right panel-footer border-0">
                                    <button type="button" id="button-filter" class="btn-primary"><i class="fa-solid fa-filter d-none"></i> Refine</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container banner_outer mt-20">
                    <div id="carousel-banner-0" class="carousel slide carousel-fade" data-bs-ride="carousel">
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
                <div class="row">
                    <div class="category-img col-sm-12"><img src="{{ asset('assets/client/images/banners/category_banner1.jpg') }}" alt="Wrenches" title="Wrenches" class="img-thumbnail"></div>
                    <div class="category-desc col-sm-12">
                        <p>Shop Laptop feature only the best laptop deals on the market. By comparing laptop deals from the likes of PC World, Comet, Dixons, The Link and Carphone Warehouse, Shop Laptop has the most comprehensive selection of laptops on the internet. At Shop Laptop, we pride ourselves on offering customers the very best laptop deals. From refurbished laptops to netbooks, Shop Laptop ensures that every laptop - in every colour, style, size and technical spec - is featured on the site at the lowest possible price.</p>
                    </div>
                </div>
                <div class="category-refine">
                    <h3>Refine Search</h3>
                    <div class="row ">
                        <div class="col">
                            <ul>
                                <li><a href="#">Air Tools</a></li>
                                <li><a href="#">Chainsaw tool</a></li>
                                <li><a href="#">Clamps</a></li>
                                <li><a href="#">Concrete Tools</a></li>
                                <li><a href="#">Cordless drill</a></li>
                                <li><a href="#">Diagonal pliers</a></li>
                            </ul>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="category-info">
                    <div id="display-control" class="row">
                        <div class="col-sm-2 col-xs-5 category-list-grid">
                            <div class="btn-group btn-group-sm">
                                <button type="button" id="grid-view" class="btn btn-default active" data-toggle="tooltip" title="" data-original-title="Grid"><i class="icon-grid"></i></button>
                                <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="" data-original-title="List"><i class="icon-list"></i></button>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-7 category-compare">
                            <div class="">
                                <a href="{{ route('productComparison') }}" id="compare-total" class="btn btn-primary d-block">
                                    <span class="">Product Compare (2)</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 col-xs-12 category-sorting">
                            <div class="sort-cat">
                                <div class="text-category-sort">
                                    <label for="input-sort" class="input-group-text input-group-addon">
                                        Sort By
                                    </label>
                                </div>
                                <div class="select-cat-sort">
                                    <select id="input-sort" class="form-select form-control" onchange="location = this.value;">
                                        <option value="" selected="">Default</option>
                                        <option value="">Name (A - Z)</option>
                                        <option value="">Name (Z - A)</option>
                                        <option value="">Price (Low &gt; High)</option>
                                        <option value="">Price (High &gt; Low)</option>
                                        <option value="">Rating (Highest)</option>
                                        <option value="">Rating (Lowest)</option>
                                        <option value="">Model (A - Z)</option>
                                        <option value="">Model (Z - A)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="limit-cat">
                                <div class="text-category-limit">
                                    <label for="input-limit" class="input-group-text input-group-addon">Show</label>
                                </div>
                                <div class="select-cat-limit">
                                    <select id="input-limit" class="form-select form-control" onchange="location = this.value;">
                                        <option value="#" selected="">
                                            9
                                        </option>
                                        <option value="#">
                                            25
                                        </option>
                                        <option value="#">
                                            50
                                        </option>
                                        <option value="#">
                                            75
                                        </option>
                                        <option value="#">
                                            100
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-layout product-grid row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
                    <div class="col">
                        <div class="single-column">
                            <div class="card product-card h-100 border-0">
                                <a href="{{ route('product') }}">
                                    <img src="{{ asset('assets/client/images/products/13.jpg') }}" class="card-img-top" alt="13">
                                </a>
                                <div class="button-group sp grid-btn">
                                    <button>
                                        <i class="icon-shopping-bag"></i>
                                    </button>
                                    <button>
                                        <i class="icon-like"></i>
                                    </button>
                                    <button>
                                        <i class="icon-eye"></i>
                                    </button>
                                    <button>
                                        <i class="icon-shuffle-arrows"></i>
                                    </button>
                                </div>
                                <div class="card-body product-detail">
                                    <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                    <h6 class="card-text m-0"><a href="{{ route('product') }}">Impact Wrench</a></h6>
                                    <p class="card-text">$122.00 </p>
                                </div>

                            </div>
                            <div class="product-detail-list">
                                <div class="caption">
                                    <a href="{{ route('product') }}">
                                        <h5 class="card-text m-0">Impact Wrench</h5>
                                    </a>
                                    <div class="price">
                                        <p class="mb-0"> $122.00 </p>
                                    </div>
                                    <span class="star-icon">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <p class="description lh-sm">More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go. Cover Flow. Browse through your music collection by flipping through album art. Select ..</p>
                                    <div class="button-group sp pro_list_btn">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="icon-like"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-column">
                            <div class="card product-card h-100 border-0">
                                <a href="{{ route('product') }}">
                                    <img src="{{ asset('assets/client/images/products/1.jpg') }}" class="card-img-top" alt="13">
                                </a>
                                <div class="button-group sp grid-btn">
                                    <button>
                                        <i class="icon-shopping-bag"></i>
                                    </button>
                                    <button>
                                        <i class="icon-like"></i>
                                    </button>
                                    <button>
                                        <i class="icon-eye"></i>
                                    </button>
                                    <button>
                                        <i class="icon-shuffle-arrows"></i>
                                    </button>
                                </div>
                                <div class="card-body product-detail">
                                    <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                    <h6 class="card-text m-0"><a href="{{ route('product') }}"> Paint Thinner </a></h6>
                                    <p class="card-text">$122.00 </p>
                                </div>
                            </div>
                            <div class="product-detail-list">
                                <div class="caption">
                                    <a href="{{ route('product') }}">
                                        <h5 class="card-text m-0">Paint Thinner</h5>
                                    </a>
                                    <div class="price mt-2">
                                        <p class="mb-0"> $122.00 </p>
                                    </div>
                                    <span class="star-icon">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <p class="description lh-sm">HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high definition clarity for a mobile experience you never thought possible. Seductively sleek, the HTC Touch HD provides the next generation of mobile functionality, all at a simple touch. Fully integrated with..</p>
                                    <div class="button-group sp pro_list_btn">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="icon-like"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-column">
                            <div class="card product-card h-100 border-0">
                                <a href="{{ route('product') }}">
                                    <img src="{{ asset('assets/client/images/products/7.jpg') }}" class="card-img-top" alt="13">
                                </a>
                                <div class="button-group sp grid-btn">
                                    <button>
                                        <i class="icon-shopping-bag"></i>
                                    </button>
                                    <button>
                                        <i class="icon-like"></i>
                                    </button>
                                    <button>
                                        <i class="icon-eye"></i>
                                    </button>
                                    <button>
                                        <i class="icon-shuffle-arrows"></i>
                                    </button>
                                </div>
                                <div class="card-body product-detail">
                                    <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                    <h6 class="card-text m-0"><a href="{{ route('product') }}">Screwdriver</a></h6>
                                    <p class="card-text">$122.00 </p>
                                </div>
                            </div>
                            <div class="product-detail-list">
                                <div class="caption">
                                    <a href="{{ route('product') }}">
                                        <h5 class="card-text m-0">Screwdriver</h5>
                                    </a>
                                    <div class="price mt-2">
                                        <p class="mb-0"> $122.00 </p>
                                    </div>
                                    <span class="star-icon">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <p class="description lh-sm">Video in your pocket. Its the small iPod with one very big idea: video. The worlds most popular music player now lets you enjoy movies, TV shows, and more on a two-inch display thats 65% brighter than before. Cover Flow. Browse through your music collection by flipping through album art. Se..</p>
                                    <div class="button-group sp pro_list_btn">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="icon-like"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-column">
                            <div class="card product-card h-100 border-0">
                                <a href="{{ route('product') }}">
                                    <img src="{{ asset('assets/client/images/products/6.jpg') }}" class="card-img-top" alt="13">
                                </a>
                                <div class="button-group sp grid-btn">
                                    <button>
                                        <i class="icon-shopping-bag"></i>
                                    </button>
                                    <button>
                                        <i class="icon-like"></i>
                                    </button>
                                    <button>
                                        <i class="icon-eye"></i>
                                    </button>
                                    <button>
                                        <i class="icon-shuffle-arrows"></i>
                                    </button>
                                </div>
                                <div class="card-body product-detail">
                                    <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                    <h6 class="card-text m-0"><a href="{{ route('product') }}">Spirit Level</a></h6>
                                    <p class="card-text">$122.00 </p>
                                </div>
                            </div>
                            <div class="product-detail-list">
                                <div class="caption">
                                    <a href="{{ route('product') }}">
                                        <h5 class="card-text m-0">Spirit Level</h5>
                                    </a>
                                    <div class="price mt-2">
                                        <p class="mb-0"> $122.00 </p>
                                    </div>
                                    <span class="star-icon">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <p class="description lh-sm">Born to be worn. Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement. Random meets rhythm. With iTunes autofill, iPod shuffle can deliver a new musical experience eve..</p>
                                    <div class="button-group sp pro_list_btn">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="icon-like"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-column">
                            <div class="card product-card h-100 border-0">
                                <a href="{{ route('product') }}">
                                    <img src="{{ asset('assets/client/images/products/5.jpg') }}" class="card-img-top" alt="13">
                                </a>
                                <div class="button-group sp grid-btn">
                                    <button>
                                        <i class="icon-shopping-bag"></i>
                                    </button>
                                    <button>
                                        <i class="icon-like"></i>
                                    </button>
                                    <button>
                                        <i class="icon-eye"></i>
                                    </button>
                                    <button>
                                        <i class="icon-shuffle-arrows"></i>
                                    </button>
                                </div>
                                <div class="card-body product-detail">
                                    <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                    <h6 class="card-text m-0"><a href="{{ route('product') }}">Sterilizers</a></h6>
                                    <p class="card-text">$122.00 </p>
                                </div>
                            </div>
                            <div class="product-detail-list">
                                <div class="caption">
                                    <a href="{{ route('product') }}">
                                        <h5 class="card-text m-0">Sterilizers</h5>
                                    </a>
                                    <div class="price mt-2">
                                        <p class="mb-0"> $122.00 </p>
                                    </div>
                                    <span class="star-icon">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <p class="description lh-sm">Born to be worn. Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement. Random meets rhythm. With iTunes autofill, iPod shuffle can deliver a new musical experience eve..</p>
                                    <div class="button-group sp pro_list_btn">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="icon-like"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-column">
                            <div class="card product-card h-100 border-0">
                                <a href="{{ route('product') }}">
                                    <img src="{{ asset('assets/client/images/products/14.jpg') }}" class="card-img-top" alt="13">
                                </a>
                                <div class="button-group sp grid-btn">
                                    <button>
                                        <i class="icon-shopping-bag"></i>
                                    </button>
                                    <button>
                                        <i class="icon-like"></i>
                                    </button>
                                    <button>
                                        <i class="icon-eye"></i>
                                    </button>
                                    <button>
                                        <i class="icon-shuffle-arrows"></i>
                                    </button>
                                </div>
                                <div class="card-body product-detail">
                                    <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                    <h6 class="card-text m-0"><a href="{{ route('product') }}">Coping Saw</a></h6>
                                    <p class="card-text">$122.00 </p>
                                </div>
                            </div>
                            <div class="product-detail-list">
                                <div class="caption">
                                    <a href="{{ route('product') }}">
                                        <h5 class="card-text m-0">Coping Saw</h5>
                                    </a>
                                    <div class="price mt-2">
                                        <p class="mb-0"> $122.00 </p>
                                    </div>
                                    <span class="star-icon">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <p class="description lh-sm">Born to be worn. Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement. Random meets rhythm. With iTunes autofill, iPod shuffle can deliver a new musical experience eve..</p>
                                    <div class="button-group sp pro_list_btn">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="icon-like"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-column">
                            <div class="card product-card h-100 border-0">
                                <a href="{{ route('product') }}">
                                    <img src="{{ asset('assets/client/images/products/8.jpg') }}" class="card-img-top" alt="13">
                                </a>
                                <div class="button-group sp grid-btn">
                                    <button>
                                        <i class="icon-shopping-bag"></i>
                                    </button>
                                    <button>
                                        <i class="icon-like"></i>
                                    </button>
                                    <button>
                                        <i class="icon-eye"></i>
                                    </button>
                                    <button>
                                        <i class="icon-shuffle-arrows"></i>
                                    </button>
                                </div>
                                <div class="card-body product-detail">
                                    <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                    <h6 class="card-text m-0"><a href="{{ route('product') }}">Soldering Iron</a></h6>
                                    <p class="card-text">$122.00 </p>
                                </div>
                            </div>
                            <div class="product-detail-list">
                                <div class="caption">
                                    <a href="{{ route('product') }}">
                                        <h5 class="card-text m-0">Soldering Iron</h5>
                                    </a>
                                    <div class="price mt-2">
                                        <p class="mb-0"> $122.00 </p>
                                    </div>
                                    <span class="star-icon">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <p class="description lh-sm">Born to be worn. Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement. Random meets rhythm. With iTunes autofill, iPod shuffle can deliver a new musical experience eve..</p>
                                    <div class="button-group sp pro_list_btn">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="icon-like"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-column">
                            <div class="card product-card h-100 border-0">
                                <a href="{{ route('product') }}">
                                    <img src="{{ asset('assets/client/images/products/9.jpg') }}" class="card-img-top" alt="13">
                                </a>
                                <div class="button-group sp grid-btn">
                                    <button>
                                        <i class="icon-shopping-bag"></i>
                                    </button>
                                    <button>
                                        <i class="icon-like"></i>
                                    </button>
                                    <button>
                                        <i class="icon-eye"></i>
                                    </button>
                                    <button>
                                        <i class="icon-shuffle-arrows"></i>
                                    </button>
                                </div>
                                <div class="card-body product-detail">
                                    <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                    <h6 class="card-text m-0"><a href="{{ route('product') }}">Electric Drill</a></h6>
                                    <p class="card-text">$122.00 </p>
                                </div>
                            </div>
                            <div class="product-detail-list">
                                <div class="caption">
                                    <a href="{{ route('product') }}">
                                        <h5 class="card-text m-0">Electric Drill</h5>
                                    </a>
                                    <div class="price mt-2">
                                        <p class="mb-0"> $122.00 </p>
                                    </div>
                                    <span class="star-icon">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <p class="description lh-sm">Born to be worn. Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement. Random meets rhythm. With iTunes autofill, iPod shuffle can deliver a new musical experience eve..</p>
                                    <div class="button-group sp pro_list_btn">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="icon-like"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single-column">
                            <div class="card product-card h-100 border-0">
                                <a href="{{ route('product') }}">
                                    <img src="{{ asset('assets/client/images/products/12.jpg') }}" class="card-img-top" alt="13">
                                </a>
                                <div class="button-group sp grid-btn">
                                    <button>
                                        <i class="icon-shopping-bag"></i>
                                    </button>
                                    <button>
                                        <i class="icon-like"></i>
                                    </button>
                                    <button>
                                        <i class="icon-eye"></i>
                                    </button>
                                    <button>
                                        <i class="icon-shuffle-arrows"></i>
                                    </button>
                                </div>
                                <div class="card-body product-detail">
                                    <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                    <h6 class="card-text m-0"><a href="{{ route('product') }}">Caulking Gun</a></h6>
                                    <p class="card-text">$122.00 </p>
                                </div>
                            </div>
                            <div class="product-detail-list">
                                <div class="caption">
                                    <a href="{{ route('product') }}">
                                        <h5 class="card-text m-0">Caulking Gun</h5>
                                    </a>
                                    <div class="price mt-2">
                                        <p class="mb-0"> $122.00 </p>
                                    </div>
                                    <span class="star-icon">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <p class="description lh-sm">Born to be worn. Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement. Random meets rhythm. With iTunes autofill, iPod shuffle can deliver a new musical experience eve..</p>
                                    <div class="button-group sp pro_list_btn">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="icon-like"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination-main">
                    <div class="row">
                        <div class="col-md-6 pagination_result">Showing 1 to 2 of 2 (1 Pages)</div>
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

@endsection
