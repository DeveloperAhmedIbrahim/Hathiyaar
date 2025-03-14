@extends('admin.layout')

@section('title', 'New User')

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">User /</span> New
</h4>

<div class="card">
    <h5 class="card-header d-flex justify-content-start">
        <a href="{{ route('admin.user.list', request('role')) }}" class="btn btn-info waves-effect waves-light btn-sm"><i class="fa-solid fa-backward"></i>&nbsp;<span>Return Categories</span></a>
    </h5>
    <div class="card-body row">
        <form onsubmit="submission(event, '{{ route('admin.user.insert', request('role')) }}')">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="User Name" value="{{ old('name') }}">
                    <span class="text-danger error-field error-name">&nbsp;</span>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
                    <span class="text-danger error-field error-email">&nbsp;</span>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" name="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                    </div>
                    <span class="text-danger error-field error-password">&nbsp;</span>
                </div>
                <div class="form-group">
                    <label for="cofirmation" class="form-label">Confirm Password</label>
                    <div class="input-group input-group-merge">
                        <input type="password" id="cofirmation" name="cofirmation" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                    </div>
                    <span class="text-danger error-field error-cofirmation">&nbsp;</span>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>&nbsp;<span>Save</span></button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
