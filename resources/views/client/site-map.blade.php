@extends('client.layout')

@section('title', 'Site Map')

@section('content')

<!-- Banner-Shop  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <h1 class="page-title">Site Map</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('siteMap') }}">Site Map</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- EndBanner-Shop  -->
<!-- Main-Contact  -->
<main>
    <div id="information-sitemap" class="container">
        <div class="row">
            <aside id="column-left" class="col-3">
                <div class="account-content list-group">
                    <div class="box-content">
                        <h3 class="toggled relative">Account <span class="toggle-open toggle-open-1 arrow-down"></span></h3>
                        <ul id="account-info" class="list-unstyled list-group to-show">
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Login</a></li>
                            <li><a href="{{ route('auth.register') }}" class="list-group-item">Register</a></li>
                            <li><a href="{{ route('auth.forgot') }}" class="list-group-item">Forgotten Password</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">My Account</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Address Book</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Wish List</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Order History</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Downloads</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Subscriptions</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Reward Points</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Returns</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Transactions</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Newsletter</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="box-content">
                        <h3 class="toggled relative">Information <span class="toggle-open toggle-open-2 arrow-down"></span></h3>
                        <ul id="info" class="list-unstyled to-show">
                            <li><a href="{{ route('termsConditions') }}" class="list-group-item">Terms &amp; Conditions</a></li>
                            <li><a href="{{ route('deliveryInformation') }}" class="list-group-item">Delivery Information</a></li>
                            <li><a href="{{ route('about') }}" class="list-group-item">About Us</a></li>
                            <li><a href="{{ route('privacyPolicy') }}" class="list-group-item">Privacy Policy</a></li>
                            <li><a href="{{ route('contact') }}" class="list-group-item">Contact Us</a></li>
                            <li><a href="{{ route('siteMap') }}" class="list-group-item">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
            <div id="content" class="col">
                <div class="row">
                    <div class="col-sm-6">
                        <ul>
                            <li><a href="{{ route('product') }}">Drywall
                                    Anchors</a>
                                <ul>
                                    <li><a href="{{ route('product') }}">Fireplace
                                            Tools</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Gardening
                                            Tools</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('product') }}">Accesories</a>
                                <ul>
                                    <li><a href="{{ route('product') }}">Drills</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Ladders</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('product') }}">Chisels</a>
                            </li>
                            <li><a href="{{ route('product') }}">Hammers</a>
                                <ul>
                                    <li><a href="{{ route('product') }}">Axes</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Carpeting
                                            Tools</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Grout
                                            Removal Tools</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Satchel</a>
                                        <ul>
                                            <li><a href="{{ route('product') }}">Wallpapering
                                                    Tools</a></li>
                                            <li><a href="{{ route('product') }}">Wood
                                                    Cutting Tools</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('product') }}">Saws</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('product') }}">Sanding
                                    Tools</a>
                            </li>
                            <li><a href="{{ route('product') }}">Pliers</a>
                            </li>
                            <li><a href="{{ route('product') }}">Sanders</a>
                            </li>
                            <li><a href="{{ route('product') }}">Wrenches</a>
                                <ul>
                                    <li><a href="{{ route('product') }}">Air
                                            Tools</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Chainsaw
                                            tool</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Clamps</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Concrete
                                            Tools</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Cordless
                                            drill</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Diagonal
                                            pliers</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Drywall
                                            Tools</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Lineman’s
                                            pliers</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Measuring
                                            Tools</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Measuring
                                            Tools</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Painting
                                            Tools</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Pipe
                                            wrench</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Plumbing
                                            Tools</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Power
                                            Tools</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Power
                                            Tools</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Tape
                                            measure</a>
                                        <ul>
                                            <li><a href="{{ route('product') }}">Plunger
                                                    tool</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('product') }}">Tool
                                            Belts</a>
                                    </li>
                                    <li><a href="{{ route('product') }}">Wood
                                            Cutting Tools</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul>
                            <li><a href="{{ route('shop') }}">Special Offers</a></li>
                            <li><a href="{{ route('auth.login') }}">My Account</a>
                                <ul>
                                    <li><a href="{{ route('auth.login') }}">Account Information</a></li>
                                    <li><a href="{{ route('auth.login') }}">Password</a></li>
                                    <li><a href="{{ route('auth.login') }}">Address Book</a></li>
                                    <li><a href="{{ route('auth.login') }}">Order History</a></li>
                                    <li><a href="{{ route('auth.login') }}">Downloads</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('cart') }}">Shopping Cart</a></li>
                            <li><a href="{{ route('checkout') }}">Checkout</a></li>
                            <li><a href="#">Search </a></li>
                            <li>Information
                                <ul>
                                    <li><a href="{{ route('termsConditions') }}">Terms &amp; Conditions</a></li>
                                    <li><a href="{{ route('deliveryInformation') }}">Delivery Information</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- .Main-Contact  -->

@endsection
