@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card flex-fill w-100">
            <div class="card-header">

                @if (isset($edit))
                <h5 class="card-title mb-0">Edit Ekstrakulikuler</h5>
                @else
                <h5 class="card-title mb-0">Create Ekstrakulikuler</h5>
                @endif

            </div>
            <div class="container-fluid">

                @if (isset($edit))
                @include('pages.murid.ekskul.edit')
                @else
                @include('pages.murid.ekskul.create')
                @endif

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">List Ekstrakulikuler</h5>
            </div>
            <table class="table table-hover dataTable zero-configuration my-0">
                <thead>
                    <tr>
                        {{-- <th>No</th> --}}
                        <th class="d-none d-xl-table-cell">Nis</th>
                        <th class="d-none d-xl-table-cell">Name</th>
                        <th>Rombel</th>
                        <th class="d-none d-md-table-cell">Rayon</th>
                        <th class="d-none d-md-table-cell">Ekstrakurikuler</th>
                        {{-- <th class="d-none d-md-table-cell">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ekstrakurikuler as $ekstrakurikuler)
                    <tr>
                        {{-- <td>{{ $loop->iteration }}</td> --}}
                        <td>{{ $ekstrakurikuler->nis }}</td>
                        <td>{{ $ekstrakurikuler->name }}</td>
                        <td>{{ $ekstrakurikuler->rombel->name_rombel }}</td>
                        <td>{{ $ekstrakurikuler->rayon->name_rayon }}</td>
                        <td>{{ $ekstrakurikuler->ekskul->name_ekskul }}</td>
                        {{-- <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('ekstrakurikuler.destroy', $ekstrakurikuler->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('ekstrakurikuler.edit', $ekstrakurikuler->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Hapus
                            </button>
                        </form>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
