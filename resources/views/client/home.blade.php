@extends('client.layout')

@section('title', 'Home')

@section('content')

<!-- Banner_Slider -->
<div class="container-fluid p-0">
    <div class="banner-slider owl-carousel owl-theme">
        <div class="item bann-img">
            <div class="bg-img bg-img-2">
                <img src="{{ asset('assets/client/images/banners/mainbanner1.jpg') }}" alt="">
            </div>
        </div>
        <div class="item bann-img">
            <div class="bg-img bg-img-3">
                <img src="{{ asset('assets/client/images/banners/mainbanner2.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- .Banner_Slider -->

<!-- Shop_Categories -->
<div class="shop-categories">
    <div class="container">
        <div class="heading-cate page-title">
            <h1 class="text-center">
                Shop By Categories
            </h1>
        </div>
        <div class="main-box owl-carousel owl-theme swiper-pager">
            <div class="item box">
                <div class="shop-card">
                    <img src="{{ asset('assets/client/images/categories/1.png') }}" class="shop-1" alt="...">
                    <div class="card-body plier">
                        <h2 class="card-title">Pliers</h2>
                        <p class="card-text">Shop Laptop feature only the b...</p>
                        <a href="{{ route('category') }}" class="btn plier-btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="item box">
                <div class="shop-card">
                    <img src="{{ asset('assets/client/images/categories/2.png') }}" class="shop-1" alt="...">
                    <div class="card-body plier">
                        <h2 class="card-title">Sanding Tools</h2>
                        <p class="card-text">Shop laptop feature only the b...</p>
                        <a href="{{ route('category') }}" class="btn plier-btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="item box">
                <div class="shop-card">
                    <img src="{{ asset('assets/client/images/categories/3.png') }}" class="shop-1" alt="...">
                    <div class="card-body plier">
                        <h2 class="card-title">Drywall anchors</h2>
                        <p class="card-text">Example of category description...</p>
                        <a href="{{ route('category') }}" class="btn plier-btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row fetura d-flex">
            <div class="free-shipping col-lg-3 col-md-6 col-sm-6">
                <div class="circle">
                    <i class="icon-shipping"></i>
                </div>
                <div class="circ-text">
                    <p>Free shipping</p>
                    <span>On order over $150</span>
                </div>
            </div>
            <div class="free-shipping col-lg-3 col-md-6 col-sm-6">
                <div class="circle">
                    <i class="icon-wallet"></i>
                </div>
                <div class="circ-text">
                    <p>Cash On Delivery</p>
                    <span>100% money back guarantee</span>
                </div>
            </div>
            <div class="free-shipping col-lg-3 col-md-6 col-sm-6">
                <div class="circle">
                    <i class="icon-gift"></i>
                </div>
                <div class="circ-text">
                    <p>Special Gift Card</p>
                    <span>Offer special bonuses with gift</span>
                </div>
            </div>
            <div class="free-shipping col-lg-3 col-md-6 col-sm-6">
                <div class="circle">
                    <i class="icon-customer-service"></i>
                </div>
                <div class="circ-text">
                    <p>24/7 customer service</p>
                    <span>Call us 24/7 at 123-456-789</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .Shop_Categories -->

<!-- Top_Product -->
<div class="product-section mt wow fadeInUp">
    <div class="container">
        <div class="product-hedaing page-title">
            <h1 class="text-center">
                Top Product
            </h1>
            <div class="row">
                <div class="product-btn list-group list-group-horizontal" id="list-tab" role="tablist">
                    <a class="list-group-item-action btn-click active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Featured</a>
                    <a class="list-group-item-action btn-click" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Latest</a>
                    <a class="list-group-item-action btn-click" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Bestseller</a>
                </div>
            </div>
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active " id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="product-items owl-carousel owl-theme swiper-pager">
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/6.jpg') }}" class="card-img-top" alt="..."></a>
                                        <div class="button-group">
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
                                            <span class="star-icon">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Backsaw Tool</h6>
                                            </a>
                                            <p class="card-text">$20.00</p>
                                        </div>
                                    </div>
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/1.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i>
                                            </span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Monykeywrench</h6>
                                            </a>
                                            <p class="card-text">$110.00 <span class="text-decoration-line-through text-muted ms-3">$122.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/12.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon">
                                                <i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Caulking Gun</h6>
                                            </a>
                                            <p class="card-text">$122.00</p>
                                        </div>
                                    </div>
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/9.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Electric Drill</h6>
                                            </a>
                                            <p class="card-text">$1,202.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/16.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Cordless Drill</h6>
                                            </a>
                                            <p class="card-text">$482.00 <span class="text-decoration-line-through text-muted ms-3">$602.00</span></p>
                                        </div>
                                    </div>
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/14.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Coping Saw</h6>
                                            </a>
                                            <p class="card-text">$122.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/17.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Hammer Tool</h6>
                                            </a>
                                            <p class="card-text">$98.00 <span class="text-decoration-line-through text-muted ms-3">$122.00</span></p>
                                        </div>
                                    </div>
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/7.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Screwdriver</h6>
                                            </a>
                                            <p class="card-text">$122.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/8.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Soldering Iron</h6>
                                            </a>
                                            <p class="card-text">$122.00</p>
                                        </div>
                                    </div>
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/6.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Spirit Level</h6>
                                            </a>
                                            <p class="card-text">$122.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/11.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Stepladder Tool</h6>
                                            </a>
                                            <p class="card-text">$1,202.00</p>
                                        </div>
                                    </div>
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/5.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Sterilizers</h6>
                                            </a>
                                            <p class="card-text">$122.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="latest product-items owl-carousel owl-theme swiper-pager">
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/6.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Backsaw Tool</h6>
                                            </a>
                                            <p class="card-text">$20.00</p>
                                        </div>
                                    </div>
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/14.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Plunger Tool</h6>
                                            </a>
                                            <p class="card-text">$241.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/13.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Impact Wrench</h6>
                                            </a>
                                            <p class="card-text">$122.00</p>
                                        </div>
                                    </div>
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/12.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Caulking Gun</h6>
                                            </a>
                                            <p class="card-text">$122.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/11.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Stepladder Tool</h6>
                                            </a>
                                            <p class="card-text">$1,202.00</p>
                                        </div>
                                    </div>
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/10.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Pipe Wrench</h6>
                                            </a>
                                            <p class="card-text">$2,000.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/9.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Electric Drill</h6>
                                            </a>
                                            <p class="card-text">$1,202.00</p>
                                        </div>
                                    </div>
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/16.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Cordless Drill</h6>
                                            </a>
                                            <p class="card-text">$20.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/1.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Monkeywrench</h6>
                                            </a>
                                            <p class="card-text">$110.00</p>
                                        </div>
                                    </div>
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/8.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Soldering Iron</h6>
                                            </a>
                                            <p class="card-text">$122.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="bestseller product-items owl-carousel owl-theme swiper-pager">
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/13.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Impact Wrench</h6>
                                            </a>
                                            <p class="card-text">$122.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/12.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Caulking Gun</h6>
                                            </a>
                                            <p class="card-text">$20.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item product">
                                <div class="col col-xs-12 single-column">
                                    <div class="card product-card h-100 border-0">
                                        <a href="{{ route('product') }}">
                                            <img src="{{ asset('assets/client/images/products/11.jpg') }}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="button-group">
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
                                            <span class="star-icon"><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                            <a href="{{ route('product') }}">
                                                <h6 class="card-text m-0">Stepladder tool</h6>
                                            </a>
                                            <p class="card-text">$1,202.00</p>
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
</div>
<!-- .Top_Product -->

<!-- Testimonial_Section -->
<div class="testimonial-section wow fadeInUp">
    <div class="container">
        <div class="testimonial-content">
            <div class="testimonial-header page-title white-title">
                <h1>Testimonial</h1>
            </div>
            <div class="testimonial-items owl-carousel owl-theme swiper-pager">
                <div class="item">
                    <div class="first-person">
                        <div class="person-face">
                            <img src="{{ asset('assets/client/images/testimonial/1.jpg') }}" alt="">
                        </div>
                        <div class="person-info">
                            <div class="person-name">Mariya Lorem</div>
                            <div class="person-sr-name">Customer</div>
                        </div>
                        <div class="person-content">
                            <i class="fa-solid fa-quote-left"></i>
                            <p>
                                Lorem ipsum dolor sit, amet
                                consectetur adipisicing elit. Ea
                                sunt dolor necessitatibus doloribus, fuga, rem natus earum
                                autem officiis nam voluptatem.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="first-person">
                        <div class="person-face">
                            <img src="{{ asset('assets/client/images/testimonial/3.jpg') }}" alt="">
                        </div>
                        <div class="person-info">
                            <div class="person-name">Noelle Salar</div>
                            <div class="person-sr-name">Customer</div>
                        </div>
                        <div class="person-content">
                            <i class="fa-solid fa-quote-left"></i>
                            <p>
                                Lorem ipsum dolor sit, amet
                                consectetur adipisicing elit. Ea
                                sunt dolor necessitatibus doloribus, fuga, rem natus earum
                                autem officiis nam voluptatem.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="first-person">
                        <div class="person-face">
                            <img src="{{ asset('assets/client/images/testimonial/2.jpg') }}" alt="">
                        </div>
                        <div class="person-info">
                            <div class="person-name">Smith Anthor</div>
                            <div class="person-sr-name">Customer</div>
                        </div>
                        <div class="person-content">
                            <i class="fa-solid fa-quote-left"></i>
                            <p>
                                Lorem ipsum dolor sit, amet
                                consectetur adipisicing elit. Ea
                                sunt dolor necessitatibus doloribus, fuga, rem natus earum
                                autem officiis nam voluptatem.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .Testimonial_Section -->

<!-- Special_Product -->
<div class="special-section wow fadeInUp">
    <div class="container">
        <div class="special-hedaing page-title">
            <h1 class="text-center  ">
                Specials
            </h1>
        </div>
        <div class="special-items owl-carousel owl-theme swiper-pager">
            <div class="item product">
                <div class="single-column">
                    <div class="card product-card h-100 border-0">
                        <a href="{{ route('product') }}">
                            <img src="{{ asset('assets/client/images/products/16.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="button-group sp">
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
                            <span class="star-icon">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"> </i>
                                <i class="fa-regular fa-star"></i><i class="fa-regular
                                    fa-star"></i><i class="fa-regular fa-star"></i></span>
                            <a href="{{ route('product') }}">
                                <h6 class="card-text m-0">Cordless drill</h6>
                            </a>
                            <p class="card-text">$120.00 <span class="text-decoration-line-through text-muted ms-3">$180.00</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item product">
                <div class="single-column">
                    <div class="card product-card h-100 border-0">
                        <a href="{{ route('product') }}">
                            <img src="{{ asset('assets/client/images/products/17.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="button-group sp">
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
                            <a href="{{ route('product') }}">
                                <h6 class="card-text m-0">Hammer tool</h6>
                            </a>
                            <p class="card-text">$100.00 <span class="text-decoration-line-through text-muted ms-3">$130.00</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item product">
                <div class="single-column">
                    <div class="card product-card h-100 border-0">
                        <a href="{{ route('product') }}">
                            <img src="{{ asset('assets/client/images/products/1.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="button-group sp">
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
                            <a href="{{ route('product') }}">
                                <h6 class="card-text m-0">Monkeywrench</h6>
                            </a>
                            <p class="card-text">$80.00 <span class="text-decoration-line-through text-muted ms-3">$110.00</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item product">
                <div class="single-column">
                    <div class="card product-card h-100 border-0">
                        <a href="{{ route('product') }}">
                            <img src="{{ asset('assets/client/images/products/2.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="button-group sp">
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
                            <a href="{{ route('product') }}">
                                <h6 class="card-text m-0">Rotary Hammer</h6>
                            </a>
                            <p class="card-text">$50.00 <span class="text-decoration-line-through text-muted ms-3">$80.00</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item product">
                <div class="single-column">
                    <div class="card product-card h-100 border-0">
                        <a href="{{ route('product') }}">
                            <img src="{{ asset('assets/client/images/products/3.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="button-group sp">
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
                            <a href="{{ route('product') }}">
                                <h6 class="card-text m-0">Tape measure</h6>
                            </a>
                            <p class="card-text">$110.00 <span class="text-decoration-line-through text-muted ms-3">$150.00</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .Special_Product -->

<!-- Newsletter_Section -->
<div class="news-section wow fadeInUp">
    <div class="container-fluid p-0">
        <div class="news-content ">
            <div class="container">
                <div class="news-info row align-items-center">
                    <div class="col-lg-6 d-flex align-items-center mb-md-3 mb-sm-4">
                        <div class="email-icon">
                            <i class="icon-newslatter"></i>
                        </div>
                        <div class="news-discount">
                            <div class="news-heading">
                                <h3>Subscribe To Newsletter</h3>
                            </div>
                            <div class="news-text">
                                Get free 20% discount for all products on your first order.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="#">
                            <div class=" subscribe input-group mb-3 mb-sm-0">
                                <input type="text" class="form-control" placeholder="Enter Your E-mail..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <button class="btn-primary" id="basic-addon2">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .Newsletter_Section -->

<!-- Blog_Section -->
<div class="blog-section wow fadeInUp">
    <div class="container mt-5">
        <div class="blog-hedaing page-title">
            <h1 class="text-center ">
                Blogs
            </h1>
        </div>
        <div class="blogs-items owl-carousel owl-theme swiper-pager">
            <div class="item">
                <div class="blog-content col-xs-12">
                    <div class="blog-info row d-flex align-items-center">
                        <div class="blog-left col-md-6">
                            <div class="blog-img">
                                <img src="{{ asset('assets/client/images/blogs/2.png') }}" alt="">
                                <div class="blog-day">
                                    <div class="blog-date">22</div>
                                    <div class="blog-month">Nov</div>
                                </div>
                                <div class="post-hover">
                                    <a class="zoom" href="#"><i class="fa-solid
                                            fa-magnifying-glass-plus"></i></a>
                                    <a class="read-link" href="{{ route('getSome') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-right col-md-6">
                            <div class="blog-text">
                                <div class="blog-icon">
                                    <a href="{{ route('getSome') }}">
                                        <i class="fa-solid fa-comment-dots"></i>
                                        <span>0 Comments</span>
                                    </a>
                                </div>
                                <div class="blog-title">
                                    <a href="{{ route('getSome') }}">
                                        <h4>WHERE CAN I GET SOME ?</h4>
                                    </a>
                                    <div class="blog-details">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Laudantium, voluptas dicta! Veritatis beatae cum ....
                                    </div>
                                    <div class="blog-btn btn-primary">
                                        <a href="{{ route('getSome') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="blog-content col-xs-12">
                    <div class="blog-info row d-flex align-items-center">
                        <div class="blog-left col-md-6">
                            <div class="blog-img">
                                <img src="{{ asset('assets/client/images/blogs/3.png') }}" alt="">
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
                        <div class="blog-right col-md-6">
                            <div class="blog-text">
                                <div class="blog-icon">
                                    <a href="{{ route('packages') }}">
                                        <i class="fa-solid fa-comment-dots"></i>
                                        <span>0 Comments</span>
                                    </a>
                                </div>
                                <div class="blog-title">
                                    <a href="{{ route('packages') }}">
                                        <h4>MANY PUBLISHING PACKAGES</h4>
                                    </a>
                                    <div class="blog-details">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Laudantium, voluptas dicta! Veritatis beatae cum ....
                                    </div>
                                    <div class="blog-btn btn-primary">
                                        <a href="{{ route('packages') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="blog-content col-xs-12">
                    <div class="blog-info row d-flex align-items-center">
                        <div class="blog-left col-md-6">
                            <div class="blog-img">
                                <img src="{{ asset('assets/client/images/blogs/1.png') }}" alt="">
                                <div class="blog-day">
                                    <div class="blog-date">22</div>
                                    <div class="blog-month">Nov</div>
                                </div>
                                <div class="post-hover">
                                    <a class="zoom" href="#"><i class="fa-solid
                                            fa-magnifying-glass-plus"></i></a>
                                    <a class="read-link" href="{{ route('variations') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-right col-md-6">
                            <div class="blog-text">
                                <div class="blog-icon">
                                    <a href="{{ route('variations') }}">
                                        <i class="fa-solid fa-comment-dots"></i>
                                        <span>0 Comments</span>
                                    </a>
                                </div>
                                <div class="blog-title">
                                    <a href="{{ route('variations') }}">
                                        <h4>THERE ARE MANY VARIATIONS</h4>
                                    </a>
                                    <div class="blog-details">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Laudantium, voluptas dicta! Veritatis beatae cum ....
                                    </div>
                                    <div class="blog-btn btn-primary">
                                        <a href="{{ route('variations') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="blog-content col-xs-12">
                    <div class="blog-info row d-flex align-items-center">
                        <div class="blog-left col-md-6">
                            <div class="blog-img">
                                <img src="{{ asset('assets/client/images/blogs/5.png') }}" alt="">
                                <div class="blog-day">
                                    <div class="blog-date">22</div>
                                    <div class="blog-month">Nov</div>
                                </div>
                                <div class="post-hover">
                                    <a class="zoom" href="#"><i class="fa-solid
                                            fa-magnifying-glass-plus"></i></a>
                                    <a class="read-link" href="{{ route('standardLorem') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-right col-md-6">
                            <div class="blog-text">
                                <div class="blog-icon">
                                    <a href="{{ route('standardLorem') }}">
                                        <i class="fa-solid fa-comment-dots"></i>
                                        <span>0 Comments</span>
                                    </a>
                                </div>
                                <div class="blog-title">
                                    <a href="{{ route('standardLorem') }}">
                                        <h4>THE STANDARD LOREM</h4>
                                    </a>
                                    <div class="blog-details">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Laudantium, voluptas dicta! Veritatis beatae cum ....
                                    </div>
                                    <div class="blog-btn btn-primary">
                                        <a href="{{ route('standardLorem') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="blog-content col-xs-12">
                    <div class="blog-info row d-flex align-items-center">
                        <div class="blog-left col-md-6">
                            <div class="blog-img">
                                <img src="{{ asset('assets/client/images/blogs/4.png') }}" alt="">
                                <div class="blog-day">
                                    <div class="blog-date">22</div>
                                    <div class="blog-month">Nov</div>
                                </div>
                                <div class="post-hover">
                                    <a class="zoom" href="#"><i class="fa-solid
                                            fa-magnifying-glass-plus"></i></a>
                                    <a class="read-link" href="{{ route('establishedFact') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-right col-md-6">
                            <div class="blog-text">
                                <div class="blog-icon">
                                    <a href="{{ route('establishedFact') }}">
                                        <i class="fa-solid fa-comment-dots"></i>
                                        <span>0 Comments</span>
                                    </a>
                                </div>
                                <div class="blog-title">
                                    <a href="{{ route('establishedFact') }}">
                                        <h4>IT IS ESTABLISHED FACT</h4>
                                    </a>
                                    <div class="blog-details">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Laudantium, voluptas dicta! Veritatis beatae cum ....
                                    </div>
                                    <div class="blog-btn btn-primary">
                                        <a href="{{ route('establishedFact') }}">Read More</a>
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
<!-- .Blog_Section -->

<!-- Clint_Section -->
<div class="client-section wow fadeInUp">
    <div class="container mt">
        <div class="client owl-carousel owl-theme swiper-pager">
            <div class="client-item item">
                <img class="img-fluid client-img" src="{{ asset('assets/client/images/manufacturer/1.png') }}" alt="">
            </div>
            <div class="client-item item">
                <img class="img-fluid client-img" src="{{ asset('assets/client/images/manufacturer/2.png') }}" alt="">
            </div>
            <div class="client-item item">
                <img class="img-fluid client-img" src="{{ asset('assets/client/images/manufacturer/3.png') }}" alt="">
            </div>
            <div class="client-item item">
                <img class="img-fluid client-img" src="{{ asset('assets/client/images/manufacturer/4.png') }}" alt="">
            </div>
            <div class="client-item item">
                <img class="img-fluid client-img" src="{{ asset('assets/client/images/manufacturer/5.png') }}" alt="">
            </div>
            <div class="client-item item">
                <img class="img-fluid client-img" src="{{ asset('assets/client/images/manufacturer/6.png') }}" alt="">
            </div>
            <div class="client-item item">
                <img class="img-fluid client-img" src="{{ asset('assets/client/images/manufacturer/7.png') }}" alt="">
            </div>
            <div class="client-item item">
                <img class="img-fluid client-img" src="{{ asset('assets/client/images/manufacturer/8.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- .Clint_Section -->

@endsection
