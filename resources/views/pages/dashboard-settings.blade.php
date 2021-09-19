@extends('layouts.dashboard')

@section('title')
Pengaturan Toko
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
                            <a href="/dashboard-account.html" class="dropdown-item">Settings</a>
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
                <h2 class="dashboard-title">Pengaturan Toko</h2>
                <p class="dashboard-subtitle">
                    Perubahahan Kadang Dibutuhkan untuk mencapai Kesuksesan !
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Nama Toko</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Kategori</label>
                                                <select name="category" class="form-control">
                                                    <option value="" disabled>
                                                        Pilih Kategori
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status Toko</label>
                                                <p class="text-muted">Tokonya Buka ga ?</p>
                                                <div class="
                                    custom-control
                                    custom-radio
                                    custom-control-inline
                                  ">
                                                    <input type="radio" class="custom-control-input"
                                                        name="is_store_open" id="openStoreTrue" value="true" />
                                                    <label for="openStoreTrue" class="custom-control-label">
                                                        Buka
                                                    </label>
                                                </div>
                                                <div class="
                                    custom-control
                                    custom-radio
                                    custom-control-inline
                                  ">
                                                    <input type="radio" class="custom-control-input"
                                                        name="is_store_open" id="openStoreFalse" v-model="is_store_open"
                                                        :value="false" />
                                                    <label for="openStoreFalse" class="custom-control-label">
                                                        Sementara Tutup
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-left mt-2">
                                            <button type="submit" class="btn btn-success">
                                                Perbarui Data
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('addon-script')

<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
</script>
@endpush
