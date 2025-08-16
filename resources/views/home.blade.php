@extends('layouts.main')

@section('content')

<!-- Hero Section -->
<section class="hero d-flex align-items-center" style="min-height: 90vh; background: linear-gradient(135deg, #ffbfbf, #800000);">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Teks -->
            <div class="col-lg-6 text-white text-center text-lg-start">
                <h1 class="fw-bold">SMK 17 Agustus 1945 Muncar</h1>
                <h4 class="mt-3">“Mandiri Terampil Siap Kerja!”</h4>
                
                <div class="mt-4">
                    <a href="#jurusan" class="btn btn-light me-2">Lihat Jurusan</a>
                    <a href="#ppdb" class="btn btn-warning me-2">Daftar PPDB Online</a>
                    <a href="#profil" class="btn btn-light">Profil Sekolah</a>
                </div>
                
                <div class="mt-4">
                    <span class="badge bg-success">Akreditasi A</span>
                    <span class="badge bg-info">100+ Lulusan Bekerja di Industri Ternama</span>
                </div>
            </div>

            <!-- Foto -->
            <div class="col-lg-6 text-center mt-4 mt-lg-0">
                <img src="{{ asset('images/smk.jpg') }}" alt="SMK" class="img-fluid rounded-4 shadow-lg">
            </div>
        </div>
    </div>
<!-- Wave -->
<div class="custom-shape-divider-bottom-hero">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
    <path d="M985.66,92.83C906.67,72,823,31,743.05,14.19c-82.52-17.33-168.54-16.11-250.87.36-57.29,11.74-113.2,31.47-172,41.72C241.91,69,166.09,66.72,94.09,52.6,63,46.53,31.48,37.53,0,27.35V120H1200V95.8C1136.54,107.47,1062.54,110.91,985.66,92.83Z"
          class="shape-fill"></path>
  </svg>
</div>
</section>

<!-- Tentang Sekolah -->
<section id="profil" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Tentang Sekolah</h2>
        <p class="lead text-muted">SMK 17 Agustus 1945 Muncar berkomitmen mencetak generasi muda yang terampil, mandiri, dan siap bersaing di dunia kerja maupun melanjutkan pendidikan ke jenjang lebih tinggi.</p>
    </div>
</section>

<!-- Jurusan -->
<section id="jurusan" class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Jurusan Kami</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 rounded-4 hover-card">
                    <img src="/images/rpl.jpg" class="card-img-top rounded-top-4" alt="RPL">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Rekayasa Perangkat Lunak</h5>
                        <p class="text-muted">Belajar membuat aplikasi, website, dan sistem berbasis digital.</p>
                        <a href="{{ url('/jurusan/rpl') }}" class="btn btn-outline-primary rounded-pill">Detail</a>
                    </div>
                </div>
            </div>
            <!-- Tambahkan jurusan lain -->
        </div>
    </div>
</section>

<!-- Berita -->
<section id="berita" class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Berita Terbaru</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 rounded-4 hover-card">
                    <img src="/images/berita1.jpg" class="card-img-top rounded-top-4" alt="Berita 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Judul Berita</h5>
                        <p class="text-muted">Ringkasan singkat berita terbaru sekolah.</p>
                        <a href="{{ url('/berita/1') }}" class="btn btn-outline-primary rounded-pill">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Tambahin berita lain -->
        </div>
        <div class="text-center mt-4">
            <a href="{{ url('/berita') }}" class="btn btn-primary rounded-pill px-4">Lihat Semua Berita</a>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
/* Hero Modern */
.hero {
    min-height: 100vh;
    background: url("{{ asset('images/smk.jpg') }}") center/cover no-repeat;
    position: relative;
}
.hero .overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.55);
}

/* Hover Card */
.hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.hover-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.custom-shape-divider-bottom-hero {
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-bottom-hero svg {
    position: relative;
    display: block;
    width: calc(133% + 1.3px);
    height: 100px;
}

.custom-shape-divider-bottom-hero .shape-fill {
    fill: #f8f9fa; /* warna section berikutnya (putih/abu bg-light) */
}

</style>
@endpush
