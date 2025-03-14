@extends('admin.layout')

@section('title', 'Edit Stock')

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Stock /</span> Edit
</h4>

<div class="card">
    <h5 class="card-header d-flex justify-content-start">
        <a href="{{ route('admin.stock.list') }}" class="btn btn-info waves-effect waves-light btn-sm"><i class="fa-solid fa-backward"></i>&nbsp;<span>Return Users</span></a>
    </h5>
    <div class="card-body row">
        <form onsubmit="submission(event, '{{ route('admin.stock.update', $stock->id) }}')" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="20" value="{{ $stock->quantity }}">
                    <span class="text-danger error-field error-quantity">&nbsp;</span>
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text"><b>Rs</b></span>
                        <input type="text" class="form-control" id="price" name="price" placeholder="252.66" value="{{ $stock->price }}">
                    </div>
                    <span class="text-danger error-field error-price">&nbsp;</span>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>&nbsp;<span>Save</span></button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
