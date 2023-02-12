@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">List Laporan</h5>
            </div>
            <table class="table table-hover dataTable zero-configuration my-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="d-none d-xl-table-cell">Name</th>
                        <th class="d-none d-xl-table-cell">UserName</th>
                        <th>Role</th>
                        <th class="d-none d-md-table-cell">Created At</th>
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
                                <td><span class="badge bg-warning">Murid</span></td>

                                @endswitch
                        <td>{{ $dataadmin->created_at }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
