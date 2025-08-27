{{-- resources/views/profil.blade.php --}}
@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section class="hero text-white d-flex align-items-center justify-content-center"
        style="background: url('{{ asset('images/upacara.jpg') }}') center/cover no-repeat; min-height: 70vh; position: relative;"
        data-aos="fade-down">
        <div class="overlay"
            style="position: absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0,0,0,0.6);"></div>
        <div class="container text-center position-relative">
            <h1 class="display-4 fw-bold">Profil SMK 17 Agustus 1945 Muncar</h1>
            <p class="lead">Mandiri, Terampil Siap KERJA!</p>
        </div>
    </section>

    <!-- Tentang Sekolah -->
    <section class="py-5" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold position-relative d-inline-block" data-aos="fade-up">
                    Tentang Sekolah
                    <span
                        style="display:block; height:3px; width:60px; background:#800000; margin:8px auto 0; border-radius:5px;"></span>
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-lg p-4 rounded-4 text-center"
                        style="background: rgba(255,255,255,0.9);">
                        <div class="mb-3">
                            <i class="bi bi-building-check display-4 text-danger"></i>
                        </div>
                        <p class="fs-5 text-muted">
                            {{ $tentang->tentang_sekolah ?? 'tidak ada data' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Kepala Sekolah -->
    <section class="py-5" style="background: #fff;">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-4 text-center" data-aos="fade-right">
                    @if ($kepala && $kepala->image)
                        <img src="{{ asset('storage/' . $kepala->image) }}" alt="Kepala Sekolah"
                            class="rounded-circle shadow-lg" style="width: 250px; height: 250px; object-fit: cover;">
                    @else
                        <p>Data Kepala Sekolah belum tersedia.</p>
                    @endif

                </div>
                <div class="col-md-8" data-aos="fade-left">
                    <div class="card border-0 shadow-lg rounded-4 p-4 h-100" style="background: #f8f9fa;">
                        <h3 class="fw-bold mb-3 text-dark">Sambutan Kepala Sekolah</h3>
                        <p class="fs-5 text-muted">
                            {{ $kepala->ucapan ?? 'tidak ada data' }}
                        </p>
                        <h5 class="fw-bold mt-3 text-danger">{{ $kepala->nama ?? 'tidak ada data' }}</h5>
                        <p class="text-muted">Kepala Sekolah SMK 17 Agustus 1945 Muncar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Keahlian -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" data-aos="fade-up">Program Keahlian</h2>
            <div class="row g-4">
                @foreach ($datas as $data)
                    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card h-100 border-0 shadow-sm text-center overflow-hidden hover-card">
                            <a href="{{ asset('storage/' . $data->image) }}" target="_blank">
                                <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt="AKL"
                                    style="height:180px; object-fit:cover;">
                            </a>
                            <div class="card-body">
                                <h5 class="fw-semibold">
                                    <a href="{{ route('profil.show', $data->id) }}" class="text-decoration-none text-dark">
                                        {{ $data->nama_jurusan }}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Prestasi -->
    <section class="py-5" style="background: #f9f9f9;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-dark">Prestasi</h2>
                <p class="text-muted">Pencapaian siswa-siswi SMK 17 Agustus 1945 Muncar</p>
                <div class="mx-auto" style="width:80px; height:4px; background:#800000; border-radius:5px;"></div>
            </div>

            <div id="prestasiCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 prestasi-card">
                                    <i class="bi bi-trophy-fill display-4 text-warning mb-3"></i>
                                    <h5 class="fw-bold">Juara 2 LKS Perhotelan</h5>
                                    <p class="text-muted">Meraih Juara 2 LKS bidang Perhotelan tingkat Kabupaten Banyuwangi.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 prestasi-card">
                                    <i class="bi bi-award-fill display-4 text-primary mb-3"></i>
                                    <h5 class="fw-bold">Akreditasi B</h5>
                                    <p class="text-muted">Sekolah terakreditasi B dengan standar mutu pendidikan yang baik.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 prestasi-card">
                                    <i class="bi bi-star-fill display-4 text-success mb-3"></i>
                                    <h5 class="fw-bold">ISO 9001:2008</h5>
                                    <p class="text-muted">Bersertifikat ISO 9001:2008, menjamin kualitas manajemen sekolah.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 prestasi-card">
                                    <i class="bi bi-people-fill display-4 text-danger mb-3"></i>
                                    <h5 class="fw-bold">Tim Olahraga</h5>
                                    <p class="text-muted">Meraih juara di berbagai ajang olahraga tingkat kabupaten.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 prestasi-card">
                                    <i class="bi bi-lightbulb-fill display-4 text-warning mb-3"></i>
                                    <h5 class="fw-bold">Inovasi Siswa</h5>
                                    <p class="text-muted">Siswa menghasilkan karya inovatif di bidang teknologi.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 prestasi-card">
                                    <i class="bi bi-book-fill display-4 text-info mb-3"></i>
                                    <h5 class="fw-bold">Juara Karya Ilmiah</h5>
                                    <p class="text-muted">Menjadi juara lomba karya ilmiah tingkat provinsi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigasi -->
                <button class="carousel-control-prev" type="button" data-bs-target="#prestasiCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#prestasiCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Fasilitas -->
    <section class="py-5" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef);">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-dark">Fasilitas & Infrastruktur</h2>
                <p class="text-muted">Sarana dan prasarana penunjang kegiatan belajar mengajar</p>
                <div class="mx-auto" style="width:90px; height:4px; background:#800000; border-radius:10px;"></div>
            </div>

            <div class="row g-4 text-center">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="fasilitas-card p-4 shadow-sm rounded-4 h-100">
                        <i class="bi bi-building display-5 text-primary mb-3"></i>
                        <h5 class="fw-bold">Luas Tanah</h5>
                        <p class="text-muted">{{ $infra->luas_tanah ?? '0' }} m²</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="fasilitas-card p-4 shadow-sm rounded-4 h-100">
                        <i class="bi bi-door-open-fill display-5 text-success mb-3"></i>
                        <h5 class="fw-bold">Ruang Kelas</h5>
                        <p class="text-muted">{{ $infra->ruang_kelas ?? '0' }} Ruang</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="fasilitas-card p-4 shadow-sm rounded-4 h-100">
                        <i class="bi bi-pc-display display-5 text-danger mb-3"></i>
                        <h5 class="fw-bold">Laboratorium Komputer</h5>
                        <p class="text-muted">{{ $infra->lab_komputer ?? '0' }} Ruang</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="fasilitas-card p-4 shadow-sm rounded-4 h-100">
                        <i class="bi bi-journal-bookmark-fill display-5 text-warning mb-3"></i>
                        <h5 class="fw-bold">Perpustakaan</h5>
                        <p class="text-muted">{{ $infra->perpustakaan ?? '0' }} Ruang</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        section {
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .hover-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 12px;
        }

        .hover-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .hover-card img {
            transition: transform 0.4s ease;
        }

        .hover-card:hover img {
            transform: scale(1.1);
        }

        .hover-card a.text-dark:hover {
            color: #800000 !important;
            text-decoration: underline;
            transition: 0.3s;
        }

        .prestasi-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: #fff;
        }

        .prestasi-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.15);
        }

        .fasilitas-card {
            background: #fff;
            transition: all 0.3s ease;
        }

        .fasilitas-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
        }
    </style>
@endpush

@push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
        });
    </script>
@endpush
