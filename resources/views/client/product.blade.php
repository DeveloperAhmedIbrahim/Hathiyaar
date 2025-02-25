@extends('client.layout')

@section('title', 'Product')

@section('content')

<!-- Banner-Product  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <h1 class="page-title">Impact Wrench</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('product') }}">Impact Wrench</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- EndBanner-Product  -->

<!-- Main-Section  -->
<main>
    <div id="product-info" class="container">
        <div class="row">
            <div id="content" class="col">
                <div class="pro-detail product-content">
                    <div class="row mb-3">
                        <div class="col-md-6 product-left">
                            <div class="thumbnails">
                                <div class="pro-image" id="img-1">
                                    <a class="thumbnail" href="#">
                                        <img class="img-fluid" src="{{ asset('assets/client/images/products/7.jpg') }}" title="Impact Wrench" id="prozoom" alt="Impact Wrench" data-zoom-image="{{ asset('assets/client/images/products/7-570x570.html') }}">
                                    </a>
                                </div>
                                <div id="additional-carousel" class="additional-carousel
                                        owl-carousel swiper-pager">
                                    <div class="category-layout
                                            col-xs-12">
                                        <div class="image-additional">
                                            <a href="#" title="Impact
                                                    Wrench" class="elevatezoom-gallery" data-image="{{ asset('assets/client/images/products/7.jpg') }}" data-zoom-image="{{ asset('assets/client/images/products/7.jpg') }}">
                                                <img src="{{ asset('assets/client/images/products/7.jpg') }}" title="Impact Wrench" alt="Impact Wrench" width="80" height="90">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="category-layout
                                            col-xs-12">
                                        <div class="image-additional">
                                            <a href="#" class="elevatezoom-gallery" title="Impact Wrench" data-image="{{ asset('assets/client/images/products/1.jpg') }}" data-zoom-image="{{ asset('assets/client/images/products/1.jpg') }}">
                                                <img src="{{ asset('assets/client/images/products/1.jpg') }}" title="Impact Wrench" alt="Impact Wrench" width="80" height="90">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="category-layout
                                            col-xs-12">
                                        <div class="image-additional">
                                            <a href="#" class="elevatezoom-gallery" title="Impact Wrench" data-image="{{ asset('assets/client/images/products/10.jpg') }}" data-zoom-image="{{ asset('assets/client/images/products/10.jpg') }}">
                                                <img src="{{ asset('assets/client/images/products/10.jpg') }}" title="Impact Wrench" alt="Impact Wrench" class="w-100" width="80" height="90">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="category-layout
                                            col-xs-12">
                                        <div class="image-additional">
                                            <a href="#" class="elevatezoom-gallery" title="Impact Wrench" data-image="{{ asset('assets/client/images/products/11.jpg') }}" data-zoom-image="{{ asset('assets/client/images/products/11.jpg') }}">
                                                <img src="{{ asset('assets/client/images/products/11.jpg') }}" title="Impact Wrench" alt="Impact Wrench" width="80" height="90">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="category-layout
                                            col-xs-12">
                                        <div class="image-additional">
                                            <a href="#" class="elevatezoom-gallery" title="Impact Wrench" data-image="{{ asset('assets/client/images/products/12.jpg') }}" data-zoom-image="{{ asset('assets/client/images/products/12.jpg') }}">
                                                <img src="{{ asset('assets/client/images/products/12.jpg') }}" title="Impact Wrench" alt="Impact Wrench" width="80" height="90">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="category-layout
                                            col-xs-12">
                                        <div class="image-additional">
                                            <a href="#" class="elevatezoom-gallery" title="Impact Wrench" data-image="{{ asset('assets/client/images/products/13.jpg') }}" data-zoom-image="{{ asset('assets/client/images/products/13.jpg') }}">
                                                <img src="{{ asset('assets/client/images/products/13.jpg') }}" title="Impact Wrench" alt="Impact Wrench" width="80" height="90">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="category-layout
                                            col-xs-12">
                                        <div class="image-additional">
                                            <a href="#" class="elevatezoom-gallery" title="Impact Wrench" data-image="{{ asset('assets/client/images/products/4.jpg') }}" data-zoom-image="{{ asset('assets/client/images/products/4.jpg') }}">
                                                <img src="{{ asset('assets/client/images/products/4.jpg') }}" title="Impact Wrench" alt="Impact Wrench" width="80" height="90">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 product-right">
                            <h1>Impact Wrench</h1>
                            <div class="rating">
                                <div class="product-rating">
                                    <span class="fa-stack"><i class="fa-regular fa-star
                                                fa-stack-1x"></i></span>
                                    <span class="fa-stack"><i class="fa-regular fa-star
                                                fa-stack-1x"></i></span>
                                    <span class="fa-stack"><i class="fa-regular fa-star
                                                fa-stack-1x"></i></span>
                                    <span class="fa-stack"><i class="fa-regular fa-star
                                                fa-stack-1x"></i></span>
                                    <span class="fa-stack"><i class="fa-regular fa-star
                                                fa-stack-1x"></i></span>
                                </div>
                                <a href="#" class="review">0 reviews</a>
                                <a href="#" class="write-review">
                                    <i class="fa-solid fa-pencil"></i>Write a review</a>
                                <p></p>
                            </div>
                            <hr>
                            <ul class="list-unstyled
                                    manufacturer-listpro">
                                <li><span class="disc">Brand:</span> <a class="disc1" href="{{ route('category') }}">Apple</a>
                                </li>
                                <li><span class="disc">Product Code:</span>
                                    <span class="disc1">product 20</span>
                                </li>
                                <li><span class="disc">Availability:</span>
                                    <span class="disc1">In Stock</span>
                                </li>
                            </ul>
                            <hr>
                            <ul class="list-unstyled">
                                <li>
                                    <h2><span class="price-new
                                                pro_price">£99.01</span></h2>
                                </li>
                                <li>Ex Tax: £81.15</li>
                            </ul>
                            <hr>
                            <div id="product" class="product-option">
                                <form id="form-product">
                                    <div class="mb-3">
                                        <div class="quantity-addcart">
                                            <div class="proquantity-detail">
                                                <label for="input-quantity" class="form-label
                                                        quantity-label">Qty</label>
                                                <div class="product-btn-quantity">
                                                    <button class="minus">
                                                        <i class="fa
                                                                fa-minus"></i></button>
                                                    <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control">
                                                    <button class="plus"><i class="fa
                                                                fa-plus"></i></button>
                                                </div>
                                            </div>

                                            <div class="pro-cart">
                                                <button type="submit" id="button-cart" class="btn-primary btn-lg btn-block">
                                                    <i class="icon-shopping-bag"></i>
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <form>
                                <div class="btn-group pro-buttons mb-3">
                                    <button type="submit" class="btn
                                            btn-light pro-wishlist" title="Add to Wish List">
                                        <i class="fa-solid
                                                fa-heart"></i><span class="d-lg-inline-block
                                                d-none">Add to Wish
                                            List</span></button>
                                    <button type="submit" class="btn
                                            btn-light pro-compare" title="Compare this
                                            Product"><i class="fa-solid
                                                fa-arrow-right-arrow-left"></i>
                                        <span class="d-lg-inline-block
                                                d-none">Compare this
                                            Product</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Reviews Section  -->
                <div class="propage-tab mt-5">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#tab-description" data-bs-toggle="tab" class="nav-link
                                    active">Description</a>
                        </li>
                        <li class="nav-item"><a href="#tab-review" data-bs-toggle="tab" class="nav-link">Reviews
                                (0)</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-description" class="tab-pane fade
                                mb-4 active show">
                            <p><strong>More
                                    room to move.</strong></p>

                            <p>With 80GB or 160GB of storage and up to
                                40 hours of battery life,
                                the new iPod classic lets you enjoy up
                                to 40,000 songs or up to
                                200 hours of video or any combination
                                wherever you go.</p>

                            <p><strong>Cover Flow.</strong></p>

                            <p>Browse through your music collection by
                                flipping through album
                                art. Select an album to turn it over and
                                see the track list.</p>
                            <p><strong>Enhanced interface.</strong></p>
                            <p>Experience a whole new way to browse and
                                view your music and
                                video.</p>

                            <p><strong>Sleeker design.</strong></p>

                            <p>Beautiful, durable, and sleeker than
                                ever, iPod classic now
                                features an anodized aluminum and
                                polished stainless steel
                                enclosure with rounded edges.</p>

                        </div>
                        <div id="tab-review" class="tab-pane fade mb-4">
                            <form id="form-review">
                                <div id="review">
                                    <p class="text-center">There are no
                                        reviews
                                        for this product.</p>
                                </div>
                                <div class="write-review-form">
                                    <h2 class="review-title">Write a
                                        review</h2>
                                    <div class="mb-3 required">
                                        <label for="input-name" class="form-label">Your Name</label>
                                        <input type="text" name="name" value="" id="input-name" class="form-control">
                                    </div>
                                    <div class="mb-3 required">
                                        <label for="input-text" class="form-label">Your
                                            Review</label>
                                        <textarea name="text" rows="5" id="input-text" class="form-control"></textarea>
                                        <div id="error-text" class="invalid-feedback"></div>
                                        <div class="invalid-feedback"><span class="text-danger">Note:</span>
                                            HTML is not translated!</div>
                                    </div>
                                    <div class="row mb-3 required">
                                        <label class="form-label">Rating</label>
                                        <div id="input-rating">
                                            Bad&nbsp;
                                            <input type="radio" name="rating" value="1" class="form-check-input">
                                            &nbsp;
                                            <input type="radio" name="rating" value="2" class="form-check-input">
                                            &nbsp;
                                            <input type="radio" name="rating" value="3" class="form-check-input">
                                            &nbsp;
                                            <input type="radio" name="rating" value="4" class="form-check-input">
                                            &nbsp;
                                            <input type="radio" name="rating" value="5" class="form-check-input">
                                            &nbsp;Good
                                        </div>

                                    </div>
                                    <div class="d-inline-block pt-2 pd-2
                                            w-100">
                                        <div class="float-end">
                                            <button type="submit" id="button-review" class="btn
                                                    btn-primary">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- .Reviews Section  -->
            </div>
        </div>
        <!-- Special_Product -->
        <div class="box related-products mt-50">
            <div class="special-section">
                <div class="container">
                    <div class="special-hedaing page-title">
                        <h1 class="text-center ">
                            Related Products
                        </h1>
                    </div>
                    <div class="special-items owl-carousel
                                owl-theme swiper-pager">
                        <div class="item product">
                            <div class="single-column">
                                <div class="card product-card h-100
                                            border-0">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ asset('assets/client/images/products/1.jpg') }}" class="card-img-top" alt="...">
                                    </a>
                                    <div class="button-group sp">
                                        <button>
                                            <i class="fa-solid fa-bag-shopping"></i>
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
                                    <div class="card-body
                                                product-detail">
                                        <span class="star-icon">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular
                                                        fa-star"> </i>
                                            <i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i></span>
                                        <h6 class="card-text m-0">
                                            <a href="{{ route('product') }}">
                                                Monykeywrench
                                            </a>
                                        </h6>
                                        <p class="card-text">$122.00
                                            <span class="text-decoration-line-through
                                                        text-muted ms-3">$180.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item product">
                            <div class="single-column">
                                <div class="card product-card h-100
                                            border-0">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ asset('assets/client/images/products/3.jpg') }}" class="card-img-top" alt="...">
                                    </a>
                                    <div class="button-group sp">
                                        <button>
                                            <i class="fa-solid fa-bag-shopping"></i>
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
                                    <div class="card-body
                                                product-detail">
                                        <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i></span>
                                        <h6 class="card-text m-0">
                                            <a href="{{ route('product') }}">
                                                Tape Measure
                                            </a>
                                        </h6>
                                        <p class="card-text">$100.00
                                            <span class="text-decoration-line-through
                                                        text-muted ms-3">$130.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item product">
                            <div class="single-column">
                                <div class="card product-card h-100
                                            border-0">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ asset('assets/client/images/products/5.jpg') }}" class="card-img-top" alt="...">
                                    </a>
                                    <div class="button-group sp">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="fa-solid
                                                        fa-heart"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                    <div class="card-body
                                                product-detail">
                                        <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i></span>
                                        <h6 class="card-text m-0">
                                            <a href="{{ route('product') }}">
                                                Sterilizers
                                            </a>
                                        </h6>
                                        <p class="card-text">$80.00
                                            <span class="text-decoration-line-through
                                                        text-muted ms-3">$110.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item product">
                            <div class="single-column">
                                <div class="card product-card h-100
                                            border-0">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ asset('assets/client/images/products/7.jpg') }}" class="card-img-top" alt="...">
                                    </a>
                                    <div class="button-group sp">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="fa-solid
                                                        fa-heart"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                    <div class="card-body
                                                product-detail">
                                        <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i></span>
                                        <h6 class="card-text m-0">
                                            <a href="{{ route('product') }}">
                                                Screwdriver
                                            </a>
                                        </h6>
                                        <p class="card-text">$50.00
                                            <span class="text-decoration-line-through
                                                        text-muted ms-3">$80.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item product">
                            <div class="single-column">
                                <div class="card product-card h-100
                                            border-0">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ asset('assets/client/images/products/9.jpg') }}" class="card-img-top" alt="...">
                                    </a>
                                    <div class="button-group sp">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="fa-solid
                                                        fa-heart"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                    <div class="card-body
                                                product-detail">
                                        <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i></span>
                                        <h6 class="card-text m-0">
                                            <a href="{{ route('product') }}">
                                                Electric Drill
                                            </a>
                                        </h6>
                                        <p class="card-text">$110.00
                                            <span class="text-decoration-line-through
                                                        text-muted ms-3">$150.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item product">
                            <div class="single-column">
                                <div class="card product-card h-100
                                            border-0">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ asset('assets/client/images/products/11.jpg') }}" class="card-img-top" alt="...">
                                    </a>
                                    <div class="button-group sp">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="fa-solid
                                                        fa-heart"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                    <div class="card-body
                                                product-detail">
                                        <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i></span>
                                        <h6 class="card-text m-0">
                                            <a href="{{ route('product') }}">
                                                Stepladder Tool
                                            </a>
                                        </h6>
                                        <p class="card-text">$140.00
                                            <span class="text-decoration-line-through
                                                        text-muted ms-3">$170.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item product">
                            <div class="single-column">
                                <div class="card product-card h-100
                                            border-0">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ asset('assets/client/images/products/13.jpg') }}" class="card-img-top" alt="...">
                                    </a>
                                    <div class="button-group sp">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="fa-solid
                                                        fa-heart"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="fa-solid
                                                        fa-arrow-right-arrow-left"></i>
                                        </button>
                                    </div>
                                    <div class="card-body
                                                product-detail">
                                        <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i></span>
                                        <h6 class="card-text m-0">
                                            <a href="{{ route('product') }}">
                                                Impact Wrench
                                            </a>
                                        </h6>
                                        <p class="card-text">$100.00
                                            <span class="text-decoration-line-through
                                                        text-muted ms-3">$180.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item product">
                            <div class="single-column">
                                <div class="card product-card h-100
                                            border-0">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ asset('assets/client/images/products/12.jpg') }}" class="card-img-top" alt="...">
                                    </a>
                                    <div class="button-group sp">
                                        <button>
                                            <i class="icon-shopping-bag"></i>
                                        </button>
                                        <button>
                                            <i class="fa-solid
                                                        fa-heart"></i>
                                        </button>
                                        <button>
                                            <i class="icon-eye"></i>
                                        </button>
                                        <button>
                                            <i class="icon-shuffle-arrows"></i>
                                        </button>
                                    </div>
                                    <div class="card-body
                                                product-detail">
                                        <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular
                                                        fa-star"></i></span>
                                        <h6 class="card-text m-0">
                                            <a href="{{ route('product') }}">
                                                Caulking gun
                                            </a>
                                        </h6>
                                        <p class="card-text">$110.00
                                            <span class="text-decoration-line-through
                                                        text-muted ms-3">$150.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- .Special_Product -->
    </div>


</main>
<!-- .Main-Section  -->

@endsection
