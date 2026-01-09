{{-- ================================================
     FILE: resources/views/home.blade.php
     FUNGSI: Halaman utama website
     ================================================ --}}

@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    {{-- Hero Section --}}
    <section class="guna text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">
                        Belanja Online Mudah & Terpercaya
                    </h1>
                    <p class="lead mb-4">
                        Temukan berbagai sepatu berkualitas dengan harga terbaik.
                        Gratis ongkir untuk pembelian pertama!
                    </p>
                    <a href="{{ route('catalog.index') }}" class="btn btn-light btn-lg">
                        <i class="bi bi-bag me-2"></i>Mulai Belanja
                    </a>
                </div>
                <div class="col-lg-6 d-none d-lg-block text-center">
                    <img src="{{ asset('images/Gemini_Generated_Image_4vufey4vufey4vuf__1_-removebg-preview (1).png') }}"
                         alt="Shopping" class="img-fluid" style="max-height: 600px;">
                </div>
            </div>
        </div>
    </section>

    {{-- Kategori --}}
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Kategori Populer</h2>
            <div class="row g-4">
                @foreach($categories as $category)
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="{{ route('catalog.index', ['category' => $category->slug]) }}"
                           class="text-decoration-none">
                            <div class="card border-0 shadow-sm text-center h-100">
                                <div class="card-body">
                                    <img src="{{ $category->image_url }}"
                                         alt="{{ $category->name }}"
                                         class="rounded-circle mb-3"
                                         width="80" height="80"
                                         style="object-fit: cover;">
                                    <h6 class="card-title mb-0">{{ $category->name }}</h6>
                                    <small class="text-muted">{{ $category->products_count }} produk</small>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Produk Unggulan --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Produk Unggulan</h2>
                <a href="{{ route('catalog.index') }}" class="btn btn-outline-primary">
                    Lihat Semua <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="row g-4">
                @foreach($featuredProducts as $product)
                    <div class="col-6 col-md-4 col-lg-3">
                        @include('partials.product-card', ['product' => $product])
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Promo Banner --}}
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card bg-warning text-dark border-0" style="min-height: 200px;">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h3>Flash Sale!</h3>
                            <p>Diskon hingga 50% untuk produk pilihan</p>
                            <a href="#" class="btn btn-dark" style="width: fit-content;">
                                Lihat Promo
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-info text-white border-0" style="min-height: 200px;">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h3>Member Baru?</h3>
                            <p>Dapatkan voucher Rp 50.000 untuk pembelian pertama</p>
                            <a href="{{ route('register') }}" class="btn btn-light" style="width: fit-content;">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Produk Terbaru --}}
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Produk Terbaru</h2>
            <div class="row g-4">
                @foreach($latestProducts as $product)
                    <div class="col-6 col-md-4 col-lg-3">
                        @include('partials.product-card', ['product' => $product])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
<style>
    /* 1. Hero Section Utama (.guna) - Toko Sepatu Premium */
    .guna {
        /* Menggunakan foto rak sepatu yang padat dengan overlay gradient gelap */
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url('https://images.unsplash.com/photo-1552346154-21d32810aba3?auto=format&fit=crop&w=1500&q=80');
        background-size: cover;
        background-position: center 20%; /* Fokus pada bagian atas rak sepatu */
        background-attachment: fixed; /* Efek Parallax mewah saat scroll */
        
        position: relative;
        overflow: hidden;
        padding: 60px 0 !important; 
        border-bottom: 4px solid #d4af37; /* Aksen Gold tebal di bawah */
    }

    /* Efek kilauan cahaya emas di sudut kiri */
    .guna::before {
        content: "";
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: radial-gradient(circle at 15% 50%, rgba(212, 175, 55, 0.15) 0%, transparent 50%);
        z-index: 0;
    }

    .guna .container {
        position: relative;
        z-index: 1;
        max-width: 1100px;
    }

    /* Judul dengan Shadow agar kontras dengan background rak */
    .guna h1 {
        font-family: 'Playfair Display', serif;
        font-size: 2.2rem; 
        font-weight: 700;
        text-transform: uppercase;
        color: #fff;
        letter-spacing: 2px;
        margin-bottom: 15px !important;
        text-shadow: 3px 3px 8px rgba(0,0,0,0.8);
    }

    /* Deskripsi dengan Border Gold */
    .guna .lead {
        font-size: 1.05rem;
        color: #f8f8f8;
        margin-bottom: 30px !important;
        border-left: 4px solid #d4af37;
        padding-left: 20px;
        max-width: 500px;
        text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
    }

    /* Tombol Butik Mewah */
    .guna .btn-light {
        background: #d4af37;
        border: 2px solid #d4af37;
        color: #000; /* Teks hitam agar lebih 'pop' di atas warna gold */
        font-size: 0.9rem;
        font-weight: 800;
        padding: 12px 35px;
        border-radius: 0; 
        transition: all 0.4s ease;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .guna .btn-light:hover {
        background: transparent;
        color: #d4af37;
        border: 2px solid #d4af37;
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);
    }

    /* Gambar Produk Utama yang melayang di depan rak */
    .guna img {
        max-height: 380px !important; /* Ukuran diperbesar agar lebih menonjol */
        width: auto;
        filter: drop-shadow(0 30px 50px rgba(0,0,0,0.9));
        animation: floatLuxury 6s ease-in-out infinite;
    }

    @keyframes floatLuxury {
        0% { transform: scale(1) translateY(0px) rotate(0deg); }
        50% { transform: scale(1.05) translateY(-20px) rotate(-2deg); }
        100% { transform: scale(1) translateY(0px) rotate(0deg); }
    }

    /* Penyesuaian Mobile */
    @media (max-width: 991px) {
        .guna { padding: 50px 0 !important; background-attachment: scroll; } /* Matikan parallax di HP agar ringan */
        .guna h1 { font-size: 1.8rem; }
        .guna img { max-height: 250px !important; margin-top: 40px; }
    }
</style>