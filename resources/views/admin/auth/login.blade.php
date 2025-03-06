@extends('admin.auth.layout')

@section('title', 'Login')

@section('content')

<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="authentication-wrapper authentication-basic container-p-y">
                <div class="authentication-inner py-4">
                    <!-- Login -->
                    <div class="card">
                        <div class="card-body">
                            <!-- Logo -->
                            <div class="flex-column app-brand justify-content-center mb-4 mt-2 gap-2">
                                <img src="{{ asset('assets/admin/img/logos/logo.png') }}" alt="Logo" width="200">
                                <h4 class="mb-1 pt-2"><b>Admin Access</b></h4>
                            </div>
                            <!-- /Logo -->

                            <p class="mb-3">
                                You have to sign-in in order to access <b>Hathiyaar</b>.
                            </p>

                            <form onsubmit="submission(event, '{{ route('auth.admin.login') }}')" class="mb-3" >
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email address" autofocus />
                                    <span class="text-danger error-field error-email">&nbsp;</span>
                                </div>
                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password">Password</label>
                                        <a href="javascript:void(0)">
                                            <small>Forgot Password?</small>
                                        </a>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                    <span class="text-danger error-field error-password">&nbsp;</span>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember" name="remember" />
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-grid w-100 waves-effect waves-light" type="submit"> Sign in </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /Register -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
