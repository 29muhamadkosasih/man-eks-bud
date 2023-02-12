@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card flex-fill w-100">
            <div class="card-header">

                @if (isset($edit))
                <h5 class="card-title mb-0">Edit Data</h5>
                @else
                <h5 class="card-title mb-0">Create Data</h5>
                @endif

            </div>
            <div class="container-fluid">

                @if (isset($edit))
                @include('pages.guru.master-senbud.edit')
                @else
                @include('pages.guru.master-senbud.create')
                @endif

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">List Data Master Seni Budaya</h5>
            </div>
            <table class="table table-hover dataTable zero-configuration my-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="d-none d-xl-table-cell">Nama Seni Budaya</th>
                        <th class="d-none d-xl-table-cell">Kouta</th>
                        <th>Day</th>
                        <th>Time</th>
                        <th class="d-none d-md-table-cell">Desc</th>
                        <th class="d-none d-md-table-cell">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($senbudlmaster as $senbudlmaster)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $senbudlmaster->name_senbud }}</td>
                        <td>{{ $senbudlmaster->kouta }}</td>
                        <td>{{ $senbudlmaster->day }}</td>
                        <td>{{ $senbudlmaster->time }}</td>
                        <td>{{ $senbudlmaster->desc }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('master-senbud.destroy', $senbudlmaster->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('master-senbud.edit', $senbudlmaster->id) }}">Edit</a>
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
