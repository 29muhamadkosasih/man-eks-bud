@extends('layout.app')

@section('content')
<div class="row">
 <div class="col-md-12">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">List Nilai</h5>
            </div>
            <table class="table table-hover dataTable zero-configuration my-0">
                <thead>
                    <tr>
                        <th class="d-none d-xl-table-cell">Nis</th>
                        <th class="d-none d-xl-table-cell">Names</th>
                        <th class="d-none d-md-table-cell">Ekstrakurikuler</th>
                        <th class="d-none d-md-table-cell">Nilai</th>
                        <th class="d-none d-md-table-cell">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inputnilai as $data)
                    <tr>
                        <td>{{ $data->ekstrakurikuler->nis }}</td>
                        <td>{{ $data->ekstrakurikuler->name }}</td>
                        <td>{{ $data->ekstrakurikuler->ekskul->name_ekskul }}</td>
                        <td>
                            @switch($data)
                            @case($data->nilai == '0')
                            <span class="badge bg-secondary">Belum Input Nilai</span>
                            @break
                            @default
                            <span>{{ $data->nilai }}</span>
                            @endswitch
                        </td>

                        <td>
                            @switch($data)
                            @case($data->nilai > '0')
                            <span class="badge bg-warning">Nilai Sudah Di Input</span>
                            @break
                            @default
                            <a class="btn btn-primary btn-sm" href="{{ route('input-nilai.edit', $data->id) }}">Input Nilai</a>
                            @endswitch
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
