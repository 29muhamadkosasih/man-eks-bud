@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card flex-fill w-100">
            <div class="card-header">

                @if (isset($edit))
                <h5 class="card-title mb-0">Edit User</h5>
                @else
                <h5 class="card-title mb-0">Create User</h5>
                @endif

            </div>
            <div class="container-fluid">

                @if (isset($edit))
                @include('pages.admin.edit')
                @else
                @include('pages.admin.create')
                @endif

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">List User</h5>
            </div>
            <table class="table table-hover dataTable zero-configuration my-0">
                <thead>
                    <tr>
                        <th class="text-center" width="30">No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th width="100">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataadmin as $dataadmin)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dataadmin->name }}</td>
                        <td>{{ $dataadmin->username }}</td>
                        @switch($dataadmin)
                                @case($dataadmin->role == 'guru')
                                <td><span class="badge bg-success">Guru</span></td>
                                @break

                                    @case($dataadmin->role == 'murid')
                                    <td><span class="badge bg-secondary">Murid</span></td>
                                    @break

                                @default
                                <td><span class="badge bg-warning">Admin</span></td>

                        @endswitch

                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('admin.destroy', $dataadmin->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.edit', $dataadmin->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Hapus
                            </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
