@extends('layout.app')

@section('content')

<h1 class="h3 mb-3"><strong>Admin</strong> Dashboard</h1>

<div class="row">
    <div class="col-xl-6 col-xxl-5 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Admin </h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $admin }}</h1>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Murid</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $murid }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Guru</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $guru }}</h1>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Total User</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $total }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-xxl-7">
        {{-- <div class="card flex-fill w-100"> --}}
        <div class="card flex-fill w-100">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">List Data User</h5>
                </div>
                <table class="table table-hover dataTable zero-configuration my-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Role</th>
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- </div> --}}
    </div>
</div>
@endsection
