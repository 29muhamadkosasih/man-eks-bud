@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card flex-fill w-100">
            <div class="card-header">

                @if (isset($edit))
                <h5 class="card-title mb-0">Edit Rayon</h5>
                @else
                <h5 class="card-title mb-0">Create Rayon</h5>
                @endif

            </div>
            <div class="container-fluid">

                @if (isset($edit))
                @include('pages.guru.master-rayon.edit')
                @else
                @include('pages.guru.master-rayon.create')
                @endif

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">List Rayon</h5>
            </div>
            <table class="table table-hover dataTable zero-configuration my-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name Rayon</th>
                        <th class="d-none d-xl-table-cell">Pembimbing</th>
                        <th>Action</th>
                        {{-- <th class="d-none d-md-table-cell">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datarayon as $datarayon)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $datarayon->name_rayon }}</td>
                        <td>{{ $datarayon->pembimbing }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('master-rayonnn.destroy', $datarayon->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('master-rayonnn.edit', $datarayon->id) }}">Edit</a>
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
