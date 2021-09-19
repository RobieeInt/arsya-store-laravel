@extends('layouts.dashboard')

@section('title')
Halaman Akun
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
                <h2 class="dashboard-title">Akun Saya</h2>
                <p class="dashboard-subtitle">Perbarui data pribadi kamu !</p>
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
                                                <label for="alamat">Nama Pemilik Toko</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="Arsya Herdika" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nama">Email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    value="Arsya@herdika.com" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nama">Alamat</label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                    value="Jalan Pandan Raya No 26 perumnas 1 tangerang" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="provinsi">Provinsi</label>
                                                <select name="provinsi" id="provinsi" class="form-control">
                                                    <option value="Jawa">Banten</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kota">Kota</label>
                                                <select name="kota" id="kota" class="form-control">
                                                    <option value="Tangerang">Tangerang</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kodePos">Kode Pos</label>
                                                <input type="text" class="form-control" id="kodePos" name="kodePos"
                                                    value="15138" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="negara">Negara</label>
                                                <input type="text" class="form-control" id="negara" name="negara"
                                                    value="Indonesia" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="noHP">No Hp</label>
                                                <input type="text" class="form-control" id="noHP" name="noHP"
                                                    value="+628568780192" />
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
