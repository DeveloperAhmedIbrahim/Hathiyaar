@extends('admin.layout')

@section('title', 'New Category')

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Category /</span> New
</h4>

<div class="card">
    <h5 class="card-header d-flex justify-content-start">
        <a href="{{ route('admin.category.list') }}" class="btn btn-info waves-effect waves-light btn-sm"><i class="fa-solid fa-backward"></i>&nbsp;<span>Return Categories</span></a>
    </h5>
    <div class="card-body row">
        <form onsubmit="submission(event, '{{ route('admin.category.insert') }}')">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="{{ old('name') }}">
                    <span class="text-danger error-field error-name">&nbsp;</span>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>&nbsp;<span>Save</span></button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
