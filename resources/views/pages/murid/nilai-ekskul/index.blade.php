@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Nilai Ekstrakurikuler</h5>
            </div>
            <table class="table table-hover dataTable zero-configuration my-0">
                <thead>
                    <tr>
                        <th class="d-none d-xl-table-cell">Nis</th>
                        <th class="d-none d-xl-table-cell">Names</th>
                        <th class="d-none d-md-table-cell">Ekstrakurikuler</th>
                        <th class="d-none d-md-table-cell">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nilaiekskul as $data)
                    <tr>
                        <td>{{ $data->ekstrakurikuler->nis }}</td>
                        <td>{{ $data->ekstrakurikuler->name }}</td>
                        <td>{{ $data->ekstrakurikuler->ekskul->name_ekskul }}</td>
                            @switch($data)
                            @case($data->nilai == '0')
                           <td><span class="badge bg-secondary">Belum Di Nilai</span></td>
                            @break
                            @default
                            <td>{{ $data->nilai }}</td>
                             @endswitch</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
