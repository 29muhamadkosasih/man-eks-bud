@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card flex-fill w-100">
            <div class="card-header">

                @if (isset($edit))
                <h5 class="card-title mb-0">Edit Master Ekstrakulikuler</h5>
                @else
                <h5 class="card-title mb-0">Create Master Ekstrakulikuler</h5>
                @endif

            </div>
            <div class="container-fluid">

                @if (isset($edit))
                @include('pages.guru.master-ekskul.edit')
                @else
                @include('pages.guru.master-ekskul.create')
                @endif

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">List Master Ekstrakulikuler</h5>
            </div>
            <table class="table table-hover dataTable zero-configuration my-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="d-none d-xl-table-cell">Nama Ekskul</th>
                        <th class="d-none d-xl-table-cell">Kouta</th>
                        <th>Day</th>
                        <th>Time</th>
                        <th class="d-none d-md-table-cell">Desc</th>
                        <th class="d-none d-md-table-cell">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ekskulmaster as $ekskulmaster)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ekskulmaster->name_ekskul }}</td>
                        <td>{{ $ekskulmaster->mas_kouta }}</td>
                        <td>{{ $ekskulmaster->day }}</td>
                        <td>{{ $ekskulmaster->time }}</td>
                        <td>{{ $ekskulmaster->desc }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('master-ekskul.destroy', $ekskulmaster->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('master-ekskul.edit', $ekskulmaster->id) }}">Edit</a>
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
