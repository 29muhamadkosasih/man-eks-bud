@extends('layout.app')

@section('content')

<h1 class="h3 mb-3"><strong>Teacher</strong> Dashboard</h1>

<div class="row">
    <div class="col-xl-6 col-xxl-5 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title"> Ektrakurikuler</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="truck"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $ekskul }}</h1>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Rombel</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $rombel }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Seni Budaya</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="dollar-sign"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $senbud }}</h1>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Rayon</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="shopping-cart"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $rayon }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-xxl-7">
        <div class="card flex-fill w-100">
            <div class="card-header">

                <h5 class="card-title mb-0">Calender</h5>
            </div>
            <div class="card-body py-3">
                <div class="align-self-center w-100">
                    <div class="chart">
                        <div id="datetimepicker-dashboard"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
