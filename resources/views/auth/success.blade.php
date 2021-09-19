@extends('layouts.success')

@section('title')
Store Cart Page
@endsection

@section('content')

<div class="page-content page-success">
    <div class="section-success" data-aos="zoom-in">
        <div class="container">
            <div class="row align-items-center row-login justify-content-center">
                <div class="col-lg-6 text-center">
                    <img src="/images/success.svg" alt="" class="mb-4" />
                    <h2>Selamat Datang</h2>
                    <p>
                        Kamu sudah berhasil terdaftar bersama kami. <br />
                        Let’s grow up now.
                    </p>
                    <div>
                        <a href="{{ route('dashboard') }}" class="btn btn-success w-50 mt-4">
                            Ke Dashboard
                        </a>
                        <a href="index.html" class="btn btn-signup w-50 mt-2">
                            Belanja Lagi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
