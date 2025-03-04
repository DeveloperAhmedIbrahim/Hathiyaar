@extends('client.layout')

@section('title', 'Gift Cirtificate')

@section('content')

<!-- Banner-about  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <h1 class="page-title">Purchase A Gift Certificate</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('auth.login') }}">Account
                    </a></li>
                <li class="breadcrumb-item"><a href="{{ route('giftCirtificate') }}">Gift Certificate
                    </a></li>
            </ul>
        </div>
    </div>
</div>
<!-- EndBanner-about  -->

<!-- Main -->
<main>
    <div id="account-voucher" class="container">
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
                <p>This gift certificate will be emailed to the recipient after your order has been paid for.</p>
                <form id="form-voucher" action="#" method="post" data-oc-toggle="ajax">
                    <div class="row mb-3 required">
                        <label for="input-to-name" class="col-sm-2 col-form-label">Recipient's Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="to_name" value="" placeholder="Recipient's Name" id="input-to-name" class="form-control ">
                        </div>
                    </div>
                    <div class="row mb-3 required">
                        <label for="input-to-email" class="col-sm-2 col-form-label">Recipient's e-mail</label>
                        <div class="col-sm-10">
                            <input type="text" name="to_email" value="" placeholder="Recipient's e-mail" id="input-to-email" class="form-control ">
                        </div>
                    </div>
                    <div class="row mb-3 required">
                        <label for="input-from-name" class="col-sm-2 col-form-label">Your Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="from_name" value="" placeholder="Your Name" id="input-from-name" class="form-control ">
                        </div>
                    </div>
                    <div class="row mb-3 required">
                        <label for="input-from-email" class="col-sm-2 col-form-label">Your e-mail</label>
                        <div class="col-sm-10">
                            <input type="text" name="from_email" value="" placeholder="Your e-mail" id="input-from-email" class="form-control ">
                        </div>
                    </div>
                    <div class="row mb-3 required">
                        <label class="col-sm-2 col-form-label">Gift Certificate Theme</label>
                        <div class="col-sm-10">
                            <div id="input-theme" class="">
                                <div class="form-check">
                                    <input type="radio" name="voucher_theme_id" value="7" id="input-theme-7" class="form-check-input ">
                                    <label for="input-theme-7" class="">Birthday</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="voucher_theme_id" value="6" id="input-theme-6" class="form-check-input ">
                                    <label for="input-theme-6" class="">Christmas</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="voucher_theme_id" value="8" id="input-theme-8" class="form-check-input ">
                                    <label for="input-theme-8" class="">General</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input-message" class="col-sm-2 col-form-label"><span data-bs-toggle="tooltip" title="Optional" class="col-sm-2 col-form-label">Message</span></label>
                        <div class="col-sm-10">
                            <textarea name="message" cols="40" rows="5" placeholder="Message" id="input-message" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3 required">
                        <label for="input-amount" class="col-sm-2 col-form-label"><span data-bs-toggle="tooltip" title="Value must be between $1.00 and $1,000.00">Amount</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="amount" value="1" placeholder="Amount" id="input-amount" class="form-control" size="5">

                        </div>
                    </div>
                    <div class="d-inline-block pt-2 pd-2 w-100">
                        <div class="float-end">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">I understand that gift certificates are non-refundable</label> <input type="checkbox" name="agree" value="1" class="form-check-input">
                                &nbsp;
                            </div>
                            <button type="submit" class="btn btn-primary">Continue</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>
<!--End Main -->

@endsection
