@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section class="hero d-flex align-items-center justify-content-center text-center text-white"
        style="background: url('{{ asset('images/hero.png') }}') no-repeat center center/cover; min-height: 100vh; position: relative;"
        data-aos="fade-in">

        <!-- Overlay gelap -->
        <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.0);"></div>

    </section>

    <!-- Garis bawah hero -->
    <div class="hero-divider" data-aos="fade-up"></div>


    <!-- Section Indonesia -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">

                <!-- Gambar -->
                <div class="col-md-6 text-center mb-4 mb-md-0" data-aos="fade-right">
                    <img src="{{ asset('images/bendera.jpg') }}" alt="Bendera" class="shadow rounded-4"
                        style="max-width: 300px; height: auto;">
                </div>

                <!-- Teks -->
                <div class="col-md-6" data-aos="fade-left">
                    <h2 class="fw-bold">INDONESIA</h2>
                    <p class="lead text-muted">DIRGAHAYU REPUBLIK INDONESIA</p>
                </div>

            </div>
        </div>
    </section>


    <!-- Section HUT -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center flex-md-row-reverse">
                <!-- Gambar -->
                <div class="col-md-6 text-center mb-4 mb-md-0" data-aos="zoom-in">
                    <img src="{{ asset('images/logo80.png') }}" alt="HUT 80 RI" class="img-fluid shadow rounded-4">
                </div>
                <!-- Teks -->
                <div class="col-md-6" data-aos="fade-up">
                    <h2 class="fw-bold">HUT ke-80 RI</h2>
                    <p class="lead text-muted">"Bersatu Berdaulat, Rakyat Sejahtera, Indonesia Maju"</p>
                </div>
            </div>
        </div>
    </section>

    <div style="line-height:0; transform: scaleY(-1);" data-aos="fade-up">
        <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
            <path fill="#800000" fill-opacity="1"
                d="M0,160L48,165.3C96,171,192,181,288,176C384,171,480,149,576,128C672,107,768,85,864,106.7C960,128,1056,192,1152,213.3C1248,235,1344,213,1392,202.7L1440,192L1440,0L0,0Z">
            </path>
        </svg>
    </div>

    <!-- Section Menu Tengah -->
    <section class="py-2" style="background-color:#800000; color:white;">
        <div class="container">
            <div class="d-flex justify-content-center flex-wrap gap-4">

                <!-- Item 1 -->
                <a href="#kejuaraan" class="text-decoration-none" data-aos="flip-up">
                    <div class="menu-card text-center rounded-4 p-4 bg-white text-dark">
                        <img src="{{ asset('images/icons/piala.png') }}" alt="Kejuaraan" style="width:60px; height:60px;">
                        <h5 class="fw-bold mt-3">Kejuaraan</h5>
                    </div>
                </a>

                <!-- Item 2 -->
                <a href="#ekstra" class="text-decoration-none" data-aos="flip-up" data-aos-delay="150">
                    <div class="menu-card text-center rounded-4 p-4 bg-white text-dark">
                        <img src="{{ asset('images/icons/bola.png') }}" alt="Ekstra" style="width:60px; height:60px;">
                        <h5 class="fw-bold mt-3">Ekstra</h5>
                    </div>
                </a>

                <!-- Item 3 -->
                <a href="#berita" class="text-decoration-none" data-aos="flip-up" data-aos-delay="300">
                    <div class="menu-card text-center rounded-4 p-4 bg-white text-dark">
                        <img src="{{ asset('images/icons/berita.png') }}" alt="Berita" style="width:60px; height:60px;">
                        <h5 class="fw-bold mt-3">Berita</h5>
                    </div>
                </a>

            </div>
        </div>
    </section>
    <style>
        .menu-card {
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .menu-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
    </style>


    <!-- Section Prestasi -->
    <section class="py-5 position-relative" style="background-color:#f8f9fa;">
        <!-- Overlay gelap tipis -->
        <div style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.05);"></div>

        <div class="container position-relative">
            <h1 class="text-center fw-bold mb-5" data-aos="fade-up">Kejuaraan</h1>
            <div class="row align-items-center">

                <!-- Kolom Kiri: Gambar -->
                <div class="col-md-6 text-center mb-4 mb-md-0" data-aos="fade-right">
                    <img src="{{ asset('images/kejuaraan.png') }}" alt="Ilustrasi Olahraga" class="img-fluid"
                        style="max-width: 300px;">
                </div>

                <!-- Kolom Kanan: Carousel -->
                <div class="col-md-6" data-aos="fade-left">
                    <div id="prestasiCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            {{-- looping kejuaraan --}}
                            @foreach ($datas as $data)
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <div class="card shadow border-0 rounded-4">
                                        <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top rounded-top-4"
                                            alt="Prestasi 1" style="max-width: 200px; margin:auto;">
                                        <div class="card-body">
                                            <h5 class="fw-bold">{{ $data->juara }}</h5>
                                            <p class="text-muted">{{ $data->deskripsi }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- looping kejuaraan --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Ekstrakurikuler Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" data-aos="fade-up">Ekstrakurikuler</h2>

            <div class="row align-items-center">
                <!-- Kolom kiri: Carousel -->
                <div class="col-md-6 text-center" data-aos="fade-right">
                    <div id="ekstraCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <!-- Item 1 -->
                            <div class="carousel-item active">
                                <div class="card shadow-sm border-0 mx-auto"
                                    style="width: 300px; height: 350px; border-radius: 15px;">
                                    <div
                                        class="card-body d-flex flex-column align-items-center justify-content-center h-100">
                                        <img src="{{ asset('images/ekstra/osis.png') }}" alt="OSIS"
                                            style="max-width:180px; max-height:200px; object-fit:contain;">
                                        <h5 class="fw-semibold mt-3 text-center">OSIS SMK 17</h5>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="carousel-item">
                                <div class="card shadow-sm border-0 mx-auto"
                                    style="width: 300px; height: 350px; border-radius: 15px;">
                                    <div
                                        class="card-body d-flex flex-column align-items-center justify-content-center h-100">
                                        <img src="{{ asset('images/ekstra/Da.png') }}" alt="Pramuka"
                                            style="max-width:180px; max-height:200px; object-fit:contain;">
                                        <h5 class="fw-semibold mt-3 text-center">PRAMUKA</h5>
                                    </div>
                                </div>
                            </div>

                            <!-- dst... -->
                        </div>
                    </div>
                </div>

                <!-- Kolom kanan: Ilustrasi tetap -->
                <div class="col-md-6 text-center" data-aos="fade-left">
                    <img src="{{ asset('images/ekstrakulikuler.png') }}" alt="Ilustrasi" style="max-width:350px;">
                </div>
            </div>
        </div>
    </section>


    <!-- Section Berita -->
    <section id="berita" class="py-5 position-relative" style="background-color:#800000; color:white;">
        <div class="container">
            <h2 class="text-center fw-bold mb-4" data-aos="fade-up">Berita Terbaru</h2>
            <div class="row g-4">

                {{-- looping berita --}}
                @foreach ($berita as $b)
                  
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="card shadow-sm h-100 border-0">
                        <img src="{{ asset('storage/' . $b->image) }}" class="card-img-top" alt="Berita 1">
                        <div class="card-body">
                            <h5 class="card-title">{{ $b->judul_berita }}</h5>
                            <p class="card-text">{{ $b->deskripsi_singkat }}</p>
                            {{-- <a href="#" class="btn btn-sm btn-maroon">Baca Selengkapnya</a> --}}
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- looping berita --}}
                {{-- <!-- Card 2 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card shadow-sm h-100 border-0">
                        <img src="{{ asset('images/berita2.jpg') }}" class="card-img-top" alt="Berita 2">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 2</h5>
                            <p class="card-text">Deskripsi singkat berita kedua yang relevan dengan kegiatan sekolah.</p>
                            <a href="#" class="btn btn-sm btn-maroon">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card shadow-sm h-100 border-0">
                        <img src="{{ asset('images/berita3.jpg') }}" class="card-img-top" alt="Berita 3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 3</h5>
                            <p class="card-text">Deskripsi singkat berita ketiga tentang prestasi atau event sekolah.</p>
                            <a href="#" class="btn btn-sm btn-maroon">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <svg class="wave-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 160" preserveAspectRatio="none"
        style="display:block; width:100%; height:80px;"> <!-- atur tinggi -->
        <path fill="#800000" fill-opacity="1"
            d="M0,40L48,51.3C96,62,192,84,288,94.7C384,105,480,105,576,97.3C672,89,768,71,864,70.7C960,71,1056,89,1152,89.3C1248,89,1344,71,1392,62.7L1440,54L1440,0L0,0Z">
        </path>
    </svg>


    <!-- Section Lokasi -->
    <section id="lokasi" class="py-3 bg-white">
        <div class="container">
            <h2 class="text-center fw-bold mb-4" data-aos="fade-up">Lokasi Sekolah</h2> <br>
            <div class="row g-4 align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="ratio ratio-16x9 shadow rounded">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3946.7153556803073!2d114.3042818!3d-8.429589!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3fce1b12f870f%3A0x534d1a151bd9cf90!2sSMK%2017%20AGUSTUS%201945%20MUNCAR!5e0!3m2!1sid!2sid!4v1755656660123!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h5 class="fw-bold">Alamat</h5>
                    <p>Jln Cincin Kota No. 8, Muncar, Banyuwangi 68472</p>
                    <p><i class="bi bi-telephone"></i> 0333-123456</p>
                    <p><i class="bi bi-envelope"></i> smk17muncar@gmail.com</p>
                </div>
            </div>
        </div>
    </section> <br>

    <p>tes</p>
@endsection

<!-- Panggil CSS & JS -->
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<script src="{{ asset('js/script.js') }}"></script>

<!-- Tambah AOS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
