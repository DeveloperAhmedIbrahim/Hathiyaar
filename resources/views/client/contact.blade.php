@extends('client.layout')

@section('title', 'Contact')

@section('content')

<!-- Banner-Shop  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <h1 class="page-title">Contact Us</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('contact') }}">Contact Us</a></li>
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
                        <h3 class="toggled relative">Account <span class="toggle-open toggle-open-1 arrow-down"></span></h3>
                        <ul id="account-info" class="list-unstyled list-group to-show">
                            <li><a href="{{ route('login') }}" class="list-group-item">Login</a></li>
                            <li><a href="{{ route('register') }}" class="list-group-item">Register</a></li>
                            <li><a href="{{ route('forgot') }}" class="list-group-item">Forgotten Password</a></li>
                            <li><a href="{{ route('login') }}" class="list-group-item">My Account</a></li>
                            <li><a href="{{ route('login') }}" class="list-group-item">Address Book</a></li>
                            <li><a href="{{ route('login') }}" class="list-group-item">Wish List</a></li>
                            <li><a href="{{ route('login') }}" class="list-group-item">Order History</a></li>
                            <li><a href="{{ route('login') }}" class="list-group-item">Downloads</a></li>
                            <li><a href="{{ route('login') }}" class="list-group-item">Subscriptions</a></li>
                            <li><a href="{{ route('login') }}" class="list-group-item">Reward Points</a></li>
                            <li><a href="{{ route('login') }}" class="list-group-item">Returns</a></li>
                            <li><a href="{{ route('login') }}" class="list-group-item">Transactions</a></li>
                            <li><a href="{{ route('login') }}" class="list-group-item">Newsletter</a></li>
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
                    <div class="col-lg-4 contact-left">
                        <h3 class="contact-title">Our Locations</h3>
                        <div class="card">
                            <div class="card-body">
                                <div class="store-address">
                                    <i class="fa fa-home"></i>
                                    <div class="store-title">Your Store</div>
                                    <address class="store-detail">
                                        National park,d1 588436,United
                                        States
                                    </address>
                                    <a href="https://www.google.com/maps/search/National+park,d1+588436,United+States/@44.1798476,-161.5892777,3z/data=!3m1!4b1?hl=en-gb" target="_blank" class="btn
                                            btn-primary"><i class="fa-solid
                                                fa-location-dot"></i> View
                                        Google Map</a>
                                </div>
                                <div class="store-telephone">
                                    <i class="fa fa-phone"></i>
                                    <div class="store-title">Telephone</div>
                                    <div class="store-detail">+1 (123)
                                        8425733</div>
                                </div>
                                <div class="store-open">
                                    <i class="fa-regular fa-clock"></i>
                                    <div class="store-title">Opening
                                        Times</div>
                                    <div class="store-detail">8:00 to
                                        4:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 contact-right">
                        <form id="form-contact" action="#" method="post" data-oc-toggle="ajax">
                            <fieldset>
                                <legend class="contact-title">Contact
                                    Form</legend>
                                <div class="row mb-3 required">
                                    <label for="input-name" class="col-sm-2 col-form-label">Your
                                        Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="" id="input-name" class="form-control">
                                        <div id="error-name" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="row mb-3 required">
                                    <label for="input-email" class="col-sm-2 col-form-label">E-Mail
                                        Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" value="" id="input-email" class="form-control">
                                        <div id="error-email" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="row mb-3 required">
                                    <label for="input-enquiry" class="col-sm-2 col-form-label">Enquiry</label>
                                    <div class="col-sm-10">
                                        <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
                                        <div id="error-enquiry" class="invalid-feedback"></div>
                                    </div>
                                </div>

                            </fieldset>
                            <div class="d-inline-block pt-2 pd-2 w-100">
                                <div class="text-end">
                                    <button type="submit" class="btn
                                            btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- .Main-Contact  -->

@endsection
