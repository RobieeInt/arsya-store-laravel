@extends('layouts.dashboard')

@section('title')
Halaman Dashboard
@endsection

@section('content')

<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Dashboard</h2>
            <p class="dashboard-subtitle">Progress hari ini !</p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">Pelanggan</div>
                            <div class="dashboard-card-subtitle">16,209</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">Pendapatan</div>
                            <div class="dashboard-card-subtitle">Rp 11,114,209</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">Transaksi</div>
                            <div class="dashboard-card-subtitle">116,209</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 mt-2">
                    <h5 class="mb-3">Transaksi Terakhir</h5>
                    <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="/images/dashboard-icon-product-1.png" alt="" />
                                </div>
                                <div class="col-md-4">Syrup Simple</div>
                                <div class="col-md-3">Unuy Lady</div>
                                <div class="col-md-3">25 Agustus 2021</div>
                                <div class="col-md-1 d-none d-block">
                                    <img src="/images/dashboard-arrow-right.svg" alt="" />
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="/images/dashboard-icon-product-2.png" alt="" />
                                </div>
                                <div class="col-md-4">Patu Nike</div>
                                <div class="col-md-3">Arsya Herdika</div>
                                <div class="col-md-3">23 Agustus 2021</div>
                                <div class="col-md-1 d-none d-block">
                                    <img src="/images/dashboard-arrow-right.svg" alt="" />
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="/images/dashboard-icon-product-3.png" alt="" />
                                </div>
                                <div class="col-md-4">Sofa Nenek</div>
                                <div class="col-md-3">Auria Hernisa</div>
                                <div class="col-md-3">19 Agustus 2021</div>
                                <div class="col-md-1 d-none d-block">
                                    <img src="/images/dashboard-arrow-right.svg" alt="" />
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
