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
                <!-- Desktop Menu  -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                            <img src="/images/Logo.png" alt="" class="rounded-circle mr-2 profile-picture" />
                            Hi, Nyet
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                            <a href="{{ route('dashboard-products') }}" class="dropdown-item">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="/" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block mt-2">
                            <img src="/images/icon-cart-filled.svg" alt="" />
                            <div class="card-badge">3</div>
                        </a>
                    </li>
                </ul>

                <!-- Mobile  -->
                <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                        <a href="#" class="nav-link"> Hi, Nyet </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block"> Cart </a>
                    </li>
                </ul>
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
