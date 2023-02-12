@extends('layout.app')

@section('content')

<h1 class="h3 mb-3"><strong>Student</strong> Dashboard</h1>

<div class="row">
    <div class="col-xl-6">
        <div class="card flex-fill w-100">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title mb-0">Information Seni Budaya</h5>
                </div>
                @foreach ($senbudmaster as $item)
                <div class="card-body h-100">
                    <div class="d-flex align-items-start">
                        <img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2"
                            alt="Charles Hall">
                        <div class="flex-grow-1">
                            <strong class="float-end text-navy">Sisa Kouta {{ $item->kouta }}</strong>
                            <strong>{{ $item->name_senbud }}</strong><br />
                            <p class="text-muted">{{ $item->day }} {{ $item->time }} AM</p>
                            <div class="border text-sm text-muted p-2 mt-0">
                                {{ $item->desc }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card flex-fill w-100">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title mb-0">Information Ektrakurikuler</h5>
                </div>
                @foreach ($ekskulmaster as $item)


                <div class="card-body h-100">
                    <div class="d-flex align-items-start">
                        <img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2"
                            alt="Charles Hall">
                        <div class="flex-grow-1">
                            <strong class="float-end text-navy">Sisa Kouta {{ $item->kouta }}</strong>
                            <strong>{{ $item->name_ekskul }}</strong><br />
                            <p class="text-muted">{{ $item->day }} {{ $item->time }} AM</p>
                            <div class="border text-sm text-muted p-2 mt-0">
                                {{ $item->desc }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
