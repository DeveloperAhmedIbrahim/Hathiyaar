@extends('admin.layout')

@section('title', 'New Item')

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Item /</span> New
</h4>

<div class="card">
    <h5 class="card-header d-flex justify-content-start">
        <a href="{{ route('admin.item.list') }}" class="btn btn-info waves-effect waves-light btn-sm"><i class="fa-solid fa-backward"></i>&nbsp;<span>Return Items</span></a>
    </h5>
    <div class="card-body row">
        <form onsubmit="submission(event, '{{ route('admin.item.insert') }}')">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Item Name" value="{{ old('name') }}">
                    <span class="text-danger error-field error-name">&nbsp;</span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="sku" class="form-label">SKU</label>
                    <input type="text" class="form-control" id="sku" name="sku" placeholder="Item SKU No." value="{{ old('sku') }}">
                    <span class="text-danger error-field error-sku">&nbsp;</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="brand" class="form-label">Brand</label>
                    <select id="brand" class="form-control select-picker w-100" name="brand">
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                    <span class="text-danger error-field error-brand">&nbsp;</span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="category" class="form-label">Category</label>
                    <select id="category" class="form-control select-picker w-100" name="category">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <span class="text-danger error-field error-category">&nbsp;</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="images" class="form-label">Images</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                    <span class="text-danger error-field error-images">&nbsp;</span>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <label for="text-editor" class="form-label">Description</label>
                <div id="text-editor"></div>
                <textarea name="description" id="description" style="display: none;"></textarea>
                <span class="text-danger error-field error-description">&nbsp;</span>
            </div>
            <div class="col-md-6">
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>&nbsp;<span>Save</span></button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
