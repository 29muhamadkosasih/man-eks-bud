<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/avatars/wikrama.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>SIM Ekskul & Seni Budaya </title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tables/datatable/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tables/datatable/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tables/datatable/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tables/datatable/rowGroup.bootstrap5.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
@php
    $user =Session::get('name');
@endphp

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">

                    <span class="align-middle"><img src="{{ asset('img/avatars/wikrama.png') }}" alt=""
                            width="35">&nbsp; SIM EKSKUL & SENI BUDAYA</span>
                </a>


                <ul class="sidebar-nav">
                    @if (Session::get('role') == 'admin')
                    <li class="sidebar-header">
                        Pages Admin
                    </li>

                    <li class="sidebar-item {{ (request()->is('dashboard-admin')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('dashboard-admin') }}">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ (request()->is('admin')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.index') }}">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Admin</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ (request()->is('laporan-admin')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/laporan-admin') }}">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Laporan
                                Admin</span>
                        </a>
                    </li>

                    @elseif(Session::get('role') == 'guru')

                    <li class="sidebar-header">
                        Pages Teacher
                    </li>

                    <li class="sidebar-item {{ (request()->is('dashboard-teacher')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('dashboard-teacher') }}">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ (request()->is('master-ekskul')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/master-ekskul') }}">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Ekskul
                                Master</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ (request()->is('master-senbud')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/master-senbud') }}">
                            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Seni Budaya
                                Master</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ (request()->is('master-rayonnn')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/master-rayonnn') }}">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Rayon
                                Master</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ (request()->is('master-rombel')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/master-rombel') }}">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Rombel
                                Master</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ (request()->is('input-nilai')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/input-nilai') }}">
                            <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Input
                                Nilai</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ (request()->is('laporan-guru')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/laporan-guru') }}">
                            <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Laporan
                                guru</span>
                        </a>
                    </li>

                    @else

                    <li class="sidebar-header">
                        Pages Student
                    </li>

                    <li class="sidebar-item {{ (request()->is('dashboard-student')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('dashboard-student') }}">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ (request()->is('ekstrakurikuler')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/ekstrakurikuler') }}">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span
                                class="align-middle">Ekstrakurikuler</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ (request()->is('senibudaya')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/senibudaya') }}">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Seni
                                Budaya</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ (request()->is('absensi')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/absensi') }}">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Absen
                                Ekstrakurikuler</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ (request()->is('absensi-senbud')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/absensi-senbud') }}">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Absen Seni
                                Budaya</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ (request()->is('nilai-ekstrakurikuler')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/nilai-ekstrakurikuler') }}">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Nilai
                                Ekstrakurikuler</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ (request()->is('nilai-seni-budaya')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/nilai-seni-budaya') }}">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Nilai Seni
                                Budaya</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ (request()->is('laporan-murid')) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('/laporan-murid') }}">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Laporan
                                murid</span>
                        </a>
                    </li>
                    @endif
                </ul>

            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <img src="https://ui-avatars.com/api/?name={{ $user }}?background=random"
                                    class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span
                                    class="text-dark">{{ $user }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ url('/logout') }}"><i class="align-middle"
                                        data-feather="log-in"></i>&nbsp; Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    @yield('content')
                </div>
            </main>

        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    {{-- data-table --}}
    <script src="{{ asset('plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('plugins/js/custom.min.js') }}"></script>
    <script src="{{ asset('plugins/js/settings.js') }}"></script>
    <script src="{{ asset('plugins/js/gleek.js') }}"></script>
    <script src="{{ asset('plugins/js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
            var gradient = ctx.createLinearGradient(0, 0, 0, 225);
            gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
            gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
            // Line chart
            new Chart(document.getElementById("chartjs-dashboard-line"), {
                type: "line",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                        "Nov", "Dec"
                    ],
                    datasets: [{
                        label: "Sales ($)",
                        fill: true,
                        backgroundColor: gradient,
                        borderColor: window.theme.primary,
                        data: [
                            2115,
                            1562,
                            1584,
                            1892,
                            1587,
                            1923,
                            2566,
                            2448,
                            2805,
                            3438,
                            2917,
                            3327
                        ]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            reverse: true,
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                stepSize: 1000
                            },
                            display: true,
                            borderDash: [3, 3],
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Pie chart
            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: "pie",
                data: {
                    labels: ["Chrome", "Firefox", "IE"],
                    datasets: [{
                        data: [4306, 3801, 1689],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger
                        ],
                        borderWidth: 5
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 75
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar"), {
                type: "bar",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                        "Nov", "Dec"
                    ],
                    datasets: [{
                        label: "This year",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                        barPercentage: .75,
                        categoryPercentage: .5
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            stacked: false,
                            ticks: {
                                stepSize: 20
                            }
                        }],
                        xAxes: [{
                            stacked: false,
                            gridLines: {
                                color: "transparent"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var markers = [{
                    coords: [31.230391, 121.473701],
                    name: "Shanghai"
                },
                {
                    coords: [28.704060, 77.102493],
                    name: "Delhi"
                },
                {
                    coords: [6.524379, 3.379206],
                    name: "Lagos"
                },
                {
                    coords: [35.689487, 139.691711],
                    name: "Tokyo"
                },
                {
                    coords: [23.129110, 113.264381],
                    name: "Guangzhou"
                },
                {
                    coords: [40.7127837, -74.0059413],
                    name: "New York"
                },
                {
                    coords: [34.052235, -118.243683],
                    name: "Los Angeles"
                },
                {
                    coords: [41.878113, -87.629799],
                    name: "Chicago"
                },
                {
                    coords: [51.507351, -0.127758],
                    name: "London"
                },
                {
                    coords: [40.416775, -3.703790],
                    name: "Madrid "
                }
            ];
            var map = new jsVectorMap({
                map: "world",
                selector: "#world_map",
                zoomButtons: true,
                markers: markers,
                markerStyle: {
                    initial: {
                        r: 9,
                        strokeWidth: 7,
                        stokeOpacity: .4,
                        fill: window.theme.primary
                    },
                    hover: {
                        fill: window.theme.primary,
                        stroke: window.theme.primary
                    }
                },
                zoomOnScroll: false
            });
            window.addEventListener("resize", () => {
                map.updateSize();
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
            document.getElementById("datetimepicker-dashboard").flatpickr({
                inline: true,
                prevArrow: "<span title=\"Previous month\">&laquo;</span>",
                nextArrow: "<span title=\"Next month\">&raquo;</span>",
                defaultDate: defaultDate
            });
        });
    </script>

</body>

</html>
