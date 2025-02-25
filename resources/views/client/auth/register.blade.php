@extends('client.layout')

@section('title', 'Register')

@section('content')

    <!-- Banner-Shop  -->
    <div class="breadcrumb-main">
        <div class="container">
            <div class="breadcrumb-container">
                <h1 class="page-title">Register Account</h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('login') }}">
                            Account
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- EndBanner-Shop  -->
    <!-- Main-Contact  -->
    <main>
        <div id="account-register" class="container">
            <div class="row">
                <aside id="column-left" class="col-3">
                    <div class="account-content list-group">
                        <div class="box-content">
                            <h3 class="toggled relative">Account<span class="toggle-open"><i class="fa fa-chevron-down"></i></span></h3>
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
                    <p>If you already have an account with us, please login at the <a href="{{ route('login') }}">login page</a>.</p>

                    <form id="form-register" method="post" action="#">
                        <fieldset id="account">
                            <legend>Your Personal Details</legend>
                            <div class="row mb-3 required">
                                <label for="input-firstname" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3 required">
                                <label for="input-lastname" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control" required>

                                </div>
                            </div>
                            <div class="row mb-3 required">
                                <label for="input-email" class="col-sm-2 col-form-label">E-Mail</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" required>
                                </div>
                            </div>


                        </fieldset>

                        <fieldset>
                            <legend>Your Password</legend>
                            <div class="row mb-3 required">
                                <label for="input-password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" required>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Newsletter</legend>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Subscribe</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="newsletter" value="1" id="input-newsletter-yes" class="form-check-input">
                                        <label for="input-newsletter-yes" class="form-check-label">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="newsletter" value="0" id="input-newsletter-no" class="form-check-input" checked="">
                                        <label for="input-newsletter-no" class="form-check-label">No</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="col-xs-12 form-message">
                                <div class="submitted" style="display: none;">Your message has been sent successfully</div>
                            </div>
                        </fieldset>


                        <div class="d-inline-block pt-2 pd-2 w-100">
                            <div class="float-end text-right">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">I have read and agree to the <a href="{{ route('privacyPolicy') }}" class="modal-link"><b>Privacy Policy</b></a></label> <input type="checkbox" name="agree" value="1" class="form-check-input">
                                </div>
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
