@extends('layout.main')
@section('title')Dashboard
    
@endsection
@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Jumlah Siswa</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Jumlah Kelas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-chess-rook fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-15 mb-7">
    <!-- Illustrations -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">
            </h6>
        </div>
        <div class="card-body">
            <div style="text-align:justify;">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem; float:left;"
                    src="/undraw_dashboard_nklg.svg">Selamat Datang Di Si<b>SKO</b>. <br>
                Si<b>SKO</b> adalah Sitem Informasi Sekolah yang mana website ini dibuat untuk mempermudah
                administrasi sekolah dalam mengelola data Siswa/i.
            </div>
        </div>
    </div>
</div>
@endsection
