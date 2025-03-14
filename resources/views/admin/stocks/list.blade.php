@extends('admin.layout')

@section('title', 'Stocks')

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Stocks /</span> List
</h4>

<div class="card">
    <h5 class="card-header d-flex justify-content-end">
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Item</th>
            <th>SKU</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @if (count($stocks) > 0)
                @foreach ($stocks as $stock)
                    <tr id="stock-{{ $stock->id }}">
                        <td>{{ Str::limit($stock->item->name, 20, '...') }}</td>
                        <td>{{ $stock->item->sku }}</td>
                        <td>{{ $stock->quantity }}</td>
                        <td>{{ $stock->price }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ route('admin.stock.update', $stock->id) }}">
                                        <i class="ti ti-pencil me-1"></i> Edit
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="5" class="text-center py-5">Hey! No stock found to show. Please add one to see.</td>
            </tr>
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="text-center py-2">
                    {!! $stocks->withQueryString()->links('pagination::bootstrap-5') !!}
                </td>
            </tr>
        </tfoot>
      </table>
    </div>
</div>
@csrf
@endsection
