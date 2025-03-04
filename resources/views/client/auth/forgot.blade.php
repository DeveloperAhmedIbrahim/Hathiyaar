@extends('client.layout')

@section('title', 'Forgot Password')

@section('content')

<!-- Banner-Shop  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <h1 class="page-title">Forgot Your Password?</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item">
                    <a href="{{ route('auth.login') }}">
                        Account
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('auth.forgot') }}">Forgot Password</a></li>
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

                <p>Enter the e-mail address associated with your account. Click submit to have a password reset link e-mailed to you.</p>
                <form id="form-forgotten" method="post" data-oc-toggle="ajax">
                    <fieldset>
                        <legend>Your E-Mail Address</legend>
                        <div class="row mb-3 required">
                            <label for="input-email" class="col-sm-2 col-form-label">E-Mail Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control">
                                <div id="error-email" class="invalid-feedback"></div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="d-inline-block pt-2 pd-2 w-100">
                        <div class="float-start"><a href="{{ route('auth.login') }}" class="btn btn-primary">Back</a></div>
                        <div class="float-end">
                            <button type="submit" class="btn btn-primary">Continue</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- .Main-Contact  -->

@endsection
