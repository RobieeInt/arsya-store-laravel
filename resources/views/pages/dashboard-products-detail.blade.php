@extends('layouts.dashboard')

@section('title')
Detail Produk
@endsection

@section('content')

<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Simple Syrup</h2>
            <p class="dashboard-subtitle">Detail Produk</p>
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
                                            <label for="">Nama Produk</label>
                                            <input type="text" class="form-control" value="Simple Syrup" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Harga</label>
                                            <input type="number" class="form-control" value="Rp. 10.000" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Kategori</label>
                                            <select name="category" class="form-control">
                                                <option disabled>Pilih Kategori</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Deskripsi</label>
                                            <textarea name="editor"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <button type="submit" class="btn btn-success btn-block">
                                            Perbarui Produk
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="gallery-container">
                                                        <img src="/images/product-card-1.png" class="w-100" alt="" />
                                                        <a href="#" class="delete-gallery">
                                                            <img src="/images/icon-delete.svg" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="gallery-container">
                                                        <img src="/images/product-card-2.png" class="w-100" alt="" />
                                                        <a href="#" class="delete-gallery">
                                                            <img src="/images/icon-delete.svg" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="gallery-container">
                                                        <img src="/images/product-card-3.png" class="w-100" alt="" />
                                                        <a href="#" class="delete-gallery">
                                                            <img src="/images/icon-delete.svg" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <input type="file" name="" id="file" style="display: none" multiple />

                                                <button class="btn btn-secondary btn-block mt-3"
                                                    onclick="thisFileUpload()">
                                                    Tambahkan Foto
                                                </button>
                                            </div>
                                        </div>
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

@endsection

@push('addon-script')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace("editor");
</script>
<script>
    AOS.init();
</script>
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
</script>
<script>
    function thisFileUpload() {
        document.getElementById("file").click();
      }
</script>
@endpush
