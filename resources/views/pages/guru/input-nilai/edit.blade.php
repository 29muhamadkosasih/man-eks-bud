@extends('layout.app')

@section('content')
<div class="row">
    <div class="offset-2 col-md-8">
        <div class="card flex-fill w-100">
            <div class="card-header">
                <h5 class="card-title mb-0">About</h5>
            </div>
            <div class="container-fluid">
                <form action="{{ route('input-nilai.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <h5 class="card-title mb-2" style="text-align: center">{{ $edit->ekstrakurikuler->name }}</h5>
                    <div class="text-muted mb-2" style="text-align: center">{{ $edit->ekstrakurikuler->nis }}</div>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Rombel <a
                                href="#">: &nbsp; {{ $edit->ekstrakurikuler->rombel->name_rombel }}</a></li>

                        <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Rayon <a
                                href="#">: &nbsp; {{ $edit->ekstrakurikuler->rayon->name_rayon }}</a></li>
                        <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Name Ekstrakurikuler <a
                                href="#">: &nbsp; {{ $edit->ekstrakurikuler->ekskul->name_ekskul }}</a></li>
                        <li class="mb-3"><span data-feather="map-pin" class="feather-sm me-1"></span> Jam Kedatangan <a
                                href="#">: &nbsp; {{ $edit->time }}</a></li>
                    </ul>
                    <div class="mb-3 mt-2">
                        <label for="nilai" class="form-label">Input Nilai </label>
                        <input type="text" class="form-control" id="nilai" name="nilai" placeholder="ex. 80" required
                            autofocus autocomplete="off">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                        <a href="{{ route('input-nilai.index') }}" class="btn btn-secondary me-md-">Cancel</a>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @endsection
