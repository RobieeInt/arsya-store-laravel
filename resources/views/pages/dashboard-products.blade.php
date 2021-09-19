@extends('layouts.dashboard')

@section('title')
Halaman Produk
@endsection

@section('content')

<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
        <div class="container-fluid">
            <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                &laquo; Menu
            </button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            </div>
        </div>
    </nav>

    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Produk saya</h2>
                <p class="dashboard-subtitle">Mau Jual Apa hari ini ?!</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('dashboard-products-create') }}" class="btn btn-success">Tambahkan Produk</a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/product-card-1.png" alt="" class="w-100 mb-2" />
                                <div class="product-title">Syrup Simple</div>
                                <div class="product-category">Foods</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/product-card-2.png" alt="" class="w-100 mb-2" />
                                <div class="product-title">Patu Nike KW</div>
                                <div class="product-category">Sneaker</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/product-card-3.png" alt="" class="w-100 mb-2" />
                                <div class="product-title">Tatakan Gelas</div>
                                <div class="product-category">Peralatan</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="/dashboard-product-details.html" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/product-card-4.png" alt="" class="w-100 mb-2" />
                                <div class="product-title">PATU Adidas KW</div>
                                <div class="product-category">Sneaker</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="/dashboard-product-details.html" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/product-card-5.png" alt="" class="w-100 mb-2" />
                                <div class="product-title">Sofa Nenek</div>
                                <div class="product-category">Furniture</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
