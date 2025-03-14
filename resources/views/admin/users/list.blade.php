@extends('admin.layout')

@section('title', 'Users')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">User /</span> List
</h4>

<div class="card">
    <h5 class="card-header d-flex justify-content-end">
        <a href="{{ route('admin.user.insert', request('role')) }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i>&nbsp;<span>New User</span></a>
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @if (count($users) > 0)
                @foreach ($users as $user)
                    <tr id="user-{{ $user->id }}">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ route('admin.user.update', [request('role'), $user->id]) }}">
                                        <i class="ti ti-pencil me-1"></i> Edit
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0);" onclick="deletetion('user', '{{ route('admin.user.delete', [request('role'), $user->id]) }}', 'user-{{ $user->id }}')">
                                        <i class="ti ti-trash me-1"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="3" class="text-center py-5">Hey! No user found to show. Please add one to see.</td>
            </tr>
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" class="text-center py-2">
                    {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
                </td>
            </tr>
        </tfoot>
      </table>
    </div>
</div>
@csrf
@endsection
