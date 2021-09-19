@extends('layouts.dashboard')

@section('title')
Detail Transaksi
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
                <h2 class="dashboard-title">#ARSYA912</h2>
                <p class="dashboard-subtitle">Detail Transaksi</p>
            </div>
            <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="/images/product-details-dashboard.png" class="w-100 mb-3" alt="" />
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Nama Pelanggan</div>
                                                <div class="product-subtitle">
                                                    Ujang Lesmana
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Nama Produk</div>
                                                <div class="product-subtitle">
                                                    Tatakan Gelas
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Tanggal Transaksi
                                                </div>
                                                <div class="product-subtitle">
                                                    28 Agustus 2021
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Status Pembayaran</div>
                                                <div class="product-subtitle text-danger">
                                                    Pending
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Total</div>
                                                <div class="product-subtitle">Rp. 720.000</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">No Hp</div>
                                                <div class="product-subtitle">
                                                    +628568780192
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <h5>Informasi Pengiriman</h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Alamat</div>
                                                <div class="product-subtitle">
                                                    Jl. Pandan Raya no 26 per
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Provinsi</div>
                                                <div class="product-subtitle">Banten</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Kota</div>
                                                <div class="product-subtitle">Tangerang</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Kode Pos</div>
                                                <div class="product-subtitle">15138</div>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <div class="product-title">Negara</div>
                                                <div class="product-subtitle">Indonesia</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Status Pengiriman</div>
                                                <select name="status" id="status" class="form-control" v-model="status">
                                                    <option value="PENDING">PENDING</option>
                                                    <option value="SHIPPING">SHIPPING</option>
                                                    <option value="SUCCESS">SUCCESS</option>
                                                </select>
                                            </div>
                                            <template v-if="status == 'SHIPPING'">
                                                <div class="col-md-3">
                                                    <div class="product-title">Input Resi</div>
                                                    <input type="text" class="form-control" name="resi"
                                                        v-model="resi" />
                                                </div>
                                                <div class="col-md-2 mt-4">
                                                    <button type="submit" class="btn btn-success">
                                                        Update Resi
                                                    </button>
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-success btn-lg mt-4">
                                            Simpan Data
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
<script src="/vendor/vue/vue.js"></script>
<script>
    var transactionDetails = new Vue({
        el: "#transactionDetails",
        data: {
          status: "SHIPPING",
          resi: "TGR012121213",
        },
      });
</script>
@endpush
