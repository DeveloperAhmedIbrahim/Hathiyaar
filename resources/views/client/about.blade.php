@extends('client.layout')

@section('title', 'About')

@section('content')

<!-- Banner-about  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <h1 class="page-title">About Us</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('about') }}">About Us</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- EndBanner-about  -->

<!-- Main-info  -->
<main>
    <div id="information-contact" class="container">
        <div class="row">
            <div id="content" class="col">
                <div class="information-information">
                    <h2 class="title">The standard Lorem Ipsum passage</h2>
                    <p class="description">
                        An natum nulla eruditi mei,te qui idque adipisci, nonumy graeci has ad. Cu diam dolor noluisse nec. Nam ex dicta graeco, audire nominati persequeris eu eos. Pri nibh dolor soleatcu, sanctus inermis instructior eum ei. Scripta ceteros sit ex. Eteum alia laudem delectus.
                    </p>
                    <h2 class="title">Aliquam vulputate, neque consectetur gravida egestas</h2>
                    <p class="description">
                        Et quis dictas meliore nec, habeo lorem blandit et vis, alia veniam assueverit an duo.Facilis offendit eleifend id has.Deserunt expetenda est an, tacimates iudicabit sed eu. Cumeu periculis similique, ut meis expetenda quo. Eam ea omnis fierent disputando.
                    </p>
                    <h2 class="title">Suspendisse vel lorem massa. Morbi</h2>
                    <p class="description">
                        Eam eu illud menandri praesent, ei regione oporteat tractatos nam. Ad mea postea voluptua
                        constituam, aeterno aperiri facilis et nec, utroque veritus no mea. Mel quando tantas
                        accusamus et, quo quot augue senserit ex, possim efficiendi has no. Nam at bonorum
                        prodesset, per ne primis platonem, mel in mundi salutatus constituto. Ei vis vidit oportere,
                        no prima eripuit ius, vim at justo legendos.
                    </p>
                    <h2 class="title">Vivamus ut diam ut risus sodales vestibulum eget varius dolor</h2>
                    <p class="description">
                        Has ut stet discere nonumes, te dicam nullam vim. Eam iriure tacimates persecuti ut. No
                        labore reprimique consequuntur pri, iusto nihil ex usu. Ne illud definitionem pri, prima
                        fuisset phaedrum sea cu. His ea partem tempor elaboraret, nam iudico atomorum accusamus ad,
                        quo ut quidam aliquam voluptua. Cu cotidieque dissentiunt vix, at putent tamquam scribentur
                        usu.
                    </p>
                </div>
            </div>
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
        </div>
    </div>
</main>
<!--End Main-info  -->

@endsection
