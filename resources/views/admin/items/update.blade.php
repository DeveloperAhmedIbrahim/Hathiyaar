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
        <form onsubmit="submission(event, '{{ route('admin.item.update', $item->id) }}')">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Item Name" value="{{ old('name', $item->name) }}">
                    <span class="text-danger error-field error-name">&nbsp;</span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="sku" class="form-label">SKU</label>
                    <input type="text" class="form-control" id="sku" name="sku" placeholder="Item SKU No." value="{{ old('sku', $item->sku) }}">
                    <span class="text-danger error-field error-sku">&nbsp;</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="brand" class="form-label">Brand</label>
                    <select id="brand" class="form-control select-picker w-100" name="brand">
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}" {{ $brand->id === $item->brand->id ? "selected" : "" }}>{{ $brand->name }}</option>
                        @endforeach
                    </select>
                    <span class="text-danger error-field error-brand">&nbsp;</span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="category" class="form-label">Category</label>
                    <select id="category" class="form-control select-picker w-100" name="category">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id === $item->category->id ? "selected" : "" }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <span class="text-danger error-field error-category">&nbsp;</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="images" class="form-label">Add More Images</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                    <span class="text-danger error-field error-images">&nbsp;</span>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <label for="text-editor" class="form-label">Description</label>
                <div id="text-editor">
                    {!! $item->description !!}
                </div>
                <textarea name="description" id="description" style="display: none;">{!! $item->description !!}</textarea>
                <span class="text-danger error-field error-description">&nbsp;</span>
            </div>
            <div class="col-md-6">
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>&nbsp;<span>Save</span></button>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <hr>
                <h4>All Uploaded Images</h4>
                <div class="row">
                    @foreach($item->images as $image)
                        <table class="table table-bordered">
                            <tr id="item-image-{{ $image->id }}">
                                <td class="text-center">
                                    <img src="{{ asset('uploads/items/'.$image->name) }}" alt="{{ $item->name }}" width="100">
                                </td>
                                <td class="text-center">
                                    @if(count($item->images) > 1)
                                        <button type="button" class="btn btn-danger" onclick="deletetion('image', '{{ route('admin.item.delete.image', $image->id) }}', 'item-image-{{ $image->id }}')"><i class="fa-solid fa-trash"></i>&nbsp;<span>Remove</span></button>
                                    @else
                                        <button type="button" class="btn btn-danger" disabled><i class="fa-solid fa-trash"></i>&nbsp;<span>Remove</span></button>
                                        <p class="text-info">You can't delete all images.</p>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    @endforeach
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
