@extends('admin.layout')

@section('title', 'Brands')

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Brands /</span> List
</h4>

<div class="card">
    <h5 class="card-header d-flex justify-content-end">
        <a href="{{ route('admin.brand.insert') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i>&nbsp;<span>New Brand</span></a>
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Logo</th>
            <th>Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @if (count($brands) > 0)
                @foreach ($brands as $brand)
                    <tr id="brand-{{ $brand->id }}">
                        <td><img src="{{ asset("uploads/brands/{$brand->logo}") }}" alt="" width="80" /></td>
                        <td>{{ $brand->name }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ route('admin.brand.update', $brand->id) }}">
                                        <i class="ti ti-pencil me-1"></i> Edit
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0);" onclick="deletetion('brand', '{{ route('admin.brand.delete', $brand->id) }}', 'brand-{{ $brand->id }}')">
                                        <i class="ti ti-trash me-1"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="3" class="text-center py-5">Hey! No brand found to show. Please add one to see.</td>
            </tr>
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" class="text-center py-2">
                    {!! $brands->withQueryString()->links('pagination::bootstrap-5') !!}
                </td>
            </tr>
        </tfoot>
      </table>
    </div>
</div>
@csrf
@endsection
