@extends('client.layout')

@section('title', 'Login')

@section('content')

<!-- Banner-Shop  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item">
                    <a href="{{ route('auth.login') }}">
                        Account
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('auth.login') }}">Login</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- EndBanner-Shop  -->
<!-- Main-Contact  -->
<main>
    <div id="information-contact" class="container">
        <div class="row">
            <aside id="column-left" class="col-3">
                <div class="account-content list-group">
                    <div class="box-content">
                        <h3 class="toggled relative">Account<span class="toggle-open"><i class="fa fa-chevron-down"></i></span></h3>
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
                        <h3 class="toggled relative">Information<span class="toggle-open"><i class="fa fa-chevron-down"></i></span></h3>
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
                        <div class="card mb-3">
                            <div class="card-body acc-lis">
                                <h2>New Customer</h2>
                                <p><strong>Register Account</strong></p>
                                <p>By creating an account you will be
                                    able to shop faster, be up to date
                                    on an order's status, and keep track
                                    of the orders you have previously
                                    made.</p>
                                <a href="{{ route('auth.register') }}" class="btn btn-primary">Continue</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mb-3">
                            <div class="card-body acc-lis">
                                <form id="form-login" action="#" method="post" data-oc-toggle="ajax">
                                    <h2>Returning Customer</h2>
                                    <p><strong>I am a returning customer</strong></p>
                                    <div class="mb-3">
                                        <label for="input-email" class="col-form-label">E-Mail Address</label>
                                        <input type="email" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="input-password" class="col-form-label">Password</label>
                                        <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                                        <a href="{{ route('auth.forgot') }}">Forgotten Password</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- .Main-Contact  -->

@endsection
