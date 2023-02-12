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
                @include('pages.murid.absensi.edit')
                @else
                @include('pages.murid.absensi.create')
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
                        <th class="d-none d-xl-table-cell">Nis</th>
                        <th class="d-none d-xl-table-cell">Name</th>
                        <th class="d-none d-xl-table-cell">Rayon</th>
                        <th class="d-none d-xl-table-cell">Rombel</th>
                        <th class="d-none d-xl-table-cell">Ekstrakurikuler</th>
                        <th class="d-none d-xl-table-cell">Time</th>
                        <th class="d-none d-xl-table-cell">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataabsen as $data)
                    <tr>
                        <td>{{ $data->ekstrakurikuler->nis }}</td>
                        <td>{{ $data->ekstrakurikuler->name }}</td>
                        <td>{{ $data->ekstrakurikuler->rayon->name_rayon }}</td>
                        <td>{{ $data->ekstrakurikuler->rombel->name_rombel }}</td>
                        <td>{{ $data->ekstrakurikuler->ekskul->name_ekskul }}</td>
                        <td>{{ $data->time }}</td>
                        <td>{{ $data->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
