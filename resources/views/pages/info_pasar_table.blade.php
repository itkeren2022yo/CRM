<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                                <i class="fab fa-laravel" style="color: #f4645f;"></i>
                                <span class="nav-link-text" style="color: #f4645f;">{{ __('Laravel Examples') }}</span>
                            </a>

                            <div class="collapse show" id="navbar-examples">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('profile.edit') }}">
                                            {{ __('User profile') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('user.index') }}">
                                            {{ __('User Management') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('icons') }}">
                                <i class="ni ni-planet text-blue"></i> {{ __('Icons') }}
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('map') }}">
                                <i class="ni ni-pin-3 text-orange"></i> {{ __('Maps') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('table') }}">
                                <i class="ni ni-bullet-list-67 text-default"></i>
                                <span class="nav-link-text">Tables</span>
                            </a>
                        </li>
                        <li class="nav-item mb-5 mr-4 ml-4 pl-1 bg-danger" style="position: absolute; bottom: 0;">
                            <a class="nav-link text-white" href="{{route('upgrade')}}">
                                <i class="ni ni-cloud-download-95"></i> Upgrade to PRO
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Documentation</span>
                    </h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                                <i class="ni ni-spaceship"></i>
                                <span class="nav-link-text">Getting started</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                                <i class="ni ni-palette"></i>
                                <span class="nav-link-text">Foundation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                                <i class="ni ni-ui-04"></i>
                                <span class="nav-link-text">Components</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                                <i class="ni ni-chart-pie-35"></i>
                                <span class="nav-link-text">Plugins</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <i class="ni ni-circle-08 " style="color: #ffffff; font-size: 24px;"></i>
                            <h6 class="h2 text-white d-inline-block mb-0">Informasi Pasar</h6>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <b class='text-white'>Nomor Identitas</b>
                            <p class='text-white'>xxxxxx/xxxxx/xxxxxx</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Data Perusahaan</h3>
                        </div>
                        <!-- 1 Row Option -->
                        <form class="mx-5 mb-4">
                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Pemilik Proyek (Owner)</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <select class="form-control">
                                        <option>PT.A</option>
                                        <option>PT.B</option>
                                        <option>PT.C</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Segmentasi Owner</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <select class="form-control">
                                        <option>BUMN</option>
                                        <option>Swasta</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Nama Paket</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="text" id="owner" placeholder="Nama Paket...">
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Departemen</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <select class="form-control">
                                        <option>Departemen Gedung</option>
                                        <option>Departemen SII</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-lg-between my-3">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Tanggal Informasi</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <div class="span small">9 Agustus 2022</div>
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Alamat</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="text" id="owner" placeholder="Alamat...">
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Fax</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="text" id="owner" placeholder="Fax...">
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Telepon</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="text" id="owner" placeholder="Telepon...">
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Email Perusahaan</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="email" id="owner" placeholder="Email Perusahaan...">
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">NPWP</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="text" id="owner" placeholder="XXX.XXX.XXX.XXX">
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Pengalaman</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <textarea class="form-control" id="penglamanId" rows="3" placeholder="Pengalaman"></textarea>
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Sumber Informasi</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="text" id="sumberinfo" placeholder="Sumber Informasi">
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Rencana Tender / PL</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2020">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Nilai Estimasi Pagu</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" placeholder="Nilai Estimasi" type="text">
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-lg-between my-3">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Sumber Dana</div>
                                </div>
                                <div class="col-lg-9 col-8 px-5">
                                    <div class="row align-items-center justify-content-lg-between ">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">APBN</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">APBD</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">LOAN</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4">BUMN</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label" for="customCheck5">BUMD</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6">Swasta</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label" for="customCheck7">Investasi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-lg-between mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Sub Bidang Pekerjaan</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <select class="form-control">
                                        <option>Gedung</option>
                                        <option>Jembatan</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Data Penanggung Jawab Perusahaan</h3>
                        </div>
                        <form class="mx-5 mb-4">
                            <div class="row align-items-center mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Nama Direktur</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="text" placeholder="Nama Direktur" >
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Jabatan</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="text" placeholder="Jabatan" >
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Data Contact Person</h3>
                        </div>
                        <form class="mx-5 mb-4">
                            <div class="row align-items-center mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Nama</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="text" placeholder="Nama" >
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Jabatan</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="text" placeholder="Jabatan" >
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Nomor Handphone</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="number" placeholder="Nomor Handphone" >
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Data Diri</h3>
                        </div>
                        <form class="mx-5 mb-4">
                            <div class="row align-items-center mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Nama Pengisi</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="text" placeholder="Nama Pengisi" >
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Email</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="email" placeholder="Email" >
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-lg-3 col-4">
                                    <div class="b">Nomor Handphone</div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <input class="form-control" type="number" placeholder="Nomor Handphone" >
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Project</th>
                                    <th scope="col" class="sort" data-sort="budget">Budget</th>
                                    <th scope="col" class="sort" data-sort="status">Status</th>
                                    <th scope="col">Users</th>
                                    <th scope="col" class="sort" data-sort="completion">Completion</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Argon Design System</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $2500 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-warning"></i>
                                            <span class="status">pending</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">60%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/angular.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $1800 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-success"></i>
                                            <span class="status">completed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">100%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/sketch.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Black Dashboard</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $3150 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-danger"></i>
                                            <span class="status">delayed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">72%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/react.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">React Material Dashboard</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $4400 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-info"></i>
                                            <span class="status">on schedule</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">90%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/vue.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Vue Paper UI Kit PRO</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $2200 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-success"></i>
                                            <span class="status">completed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">100%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark table -->
        <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Dark table</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Project</th>
                                    <th scope="col" class="sort" data-sort="budget">Budget</th>
                                    <th scope="col" class="sort" data-sort="status">Status</th>
                                    <th scope="col">Users</th>
                                    <th scope="col" class="sort" data-sort="completion">Completion</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Argon Design System</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $2500 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-warning"></i>
                                            <span class="status">pending</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">60%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/angular.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $1800 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-success"></i>
                                            <span class="status">completed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">100%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/sketch.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Black Dashboard</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $3150 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-danger"></i>
                                            <span class="status">delayed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">72%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/react.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">React Material Dashboard</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $4400 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-info"></i>
                                            <span class="status">on schedule</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">90%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/vue.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Vue Paper UI Kit PRO</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $2200 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-success"></i>
                                            <span class="status">completed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">100%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; {{ now()->year }} <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a> &amp;
                        <a href="https://www.updivision.com" class="font-weight-bold ml-1" target="_blank">Updivision</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.updivision.com" class="nav-link" target="_blank">Updivision</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>