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
                @include('pages.murid.senibudaya.edit')
                @else
                @include('pages.murid.senibudaya.create')
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
                        {{-- <th>No</th> --}}
                        <th class="d-none d-xl-table-cell">Nis</th>
                        <th class="d-none d-xl-table-cell">Name</th>
                        <th>Rombel</th>
                        <th class="d-none d-md-table-cell">Rayon</th>
                        <th class="d-none d-md-table-cell">Seni Budaya</th>
                        <th class="d-none d-md-table-cell">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($senbud as $data)
                    <tr>
                        {{-- <td>{{ $loop->iteration }}</td> --}}
                        <td>{{ $data->nis }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->rombel->name_rombel }}</td>
                        <td>{{ $data->rayon->name_rayon }}</td>
                        <td>{{ $data->senbud->name_senbud }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('senibudaya.destroy', $data->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('senibudaya.edit', $data->id) }}">Edit</a>
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
