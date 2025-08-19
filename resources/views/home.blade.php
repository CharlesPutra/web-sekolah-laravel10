@extends('layouts.main')

@section('content')

<!-- Hero Section -->
<section class="hero d-flex align-items-center justify-content-center text-center text-white"
    style="background: url('{{ asset('images/hero.png') }}') no-repeat center center/cover; min-height: 100vh; position: relative;">

    <!-- Overlay gelap -->
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5);"></div>

    <!-- Konten -->
    <div class="container position-relative">
        <h1 class="display-3 fw-bold">Selamat Datang di SMK Kamu</h1>
        <p class="lead">Mewujudkan Generasi Unggul, Berkarakter, dan Berprestasi</p>
        <a href="#jurusan" class="btn btn-lg btn-primary me-2">Lihat Jurusan</a>
        <a href="#profil" class="btn btn-lg btn-outline-light">Profil Sekolah</a>
    </div>
</section>

<!-- Garis bawah hero -->
<div class="hero-divider"></div>


<!-- Section Indonesia -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Gambar -->
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <img src="{{ asset('images/bendera.jpg') }}" 
                     alt="Bendera" 
                     class="shadow rounded-4" 
                     style="max-width: 300px; height: auto;">
            </div>

            <!-- Teks -->
            <div class="col-md-6">
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
      <div class="col-md-6 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/logo80.png') }}" alt="HUT 80 RI" class="img-fluid shadow rounded-4">
      </div>
      <!-- Teks -->
      <div class="col-md-6">
        <h2 class="fw-bold">HUT ke-80 RI</h2>
        <p class="lead text-muted">"Bersatu Berdaulat, Rakyat Sejahtera, Indonesia Maju"</p>
      </div>
    </div>
  </div>
</section>

<div style="line-height:0; transform: scaleY(-1);">
  <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
    <path fill="#800000" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,176C384,171,480,149,576,128C672,107,768,85,864,106.7C960,128,1056,192,1152,213.3C1248,235,1344,213,1392,202.7L1440,192L1440,0L0,0Z"></path>
  </svg>
</div> 

<!-- Section Menu Tengah -->
<section class="py-5" style="background-color:#800000; color:white;">
  <div class="container">
    <div class="d-flex justify-content-center flex-wrap gap-4">

      <!-- Item 1 -->
      <a href="#kejuaraan" class="text-decoration-none">
        <div class="menu-card text-center rounded-4 p-4 bg-white text-dark">
          <img src="{{ asset('images/icons/piala.png') }}" alt="Kejuaraan" style="width:60px; height:60px;">
          <h5 class="fw-bold mt-3">Kejuaraan</h5>
        </div>
      </a>

      <!-- Item 2 -->
      <a href="#ekstra" class="text-decoration-none">
        <div class="menu-card text-center rounded-4 p-4 bg-white text-dark">
          <img src="{{ asset('images/icons/bola.png') }}" alt="Ekstra" style="width:60px; height:60px;">
          <h5 class="fw-bold mt-3">Ekstra</h5>
        </div>
      </a>

      <!-- Item 3 -->
      <a href="#berita" class="text-decoration-none">
        <div class="menu-card text-center rounded-4 p-4 bg-white text-dark">
          <img src="{{ asset('images/icons/berita.png') }}" alt="Berita" style="width:60px; height:60px;">
          <h5 class="fw-bold mt-3">Berita</h5>
        </div>
      </a>

    </div>
  </div>
</section>

              <!-- Wave keluar ke putih -->
<div class="wave" style="line-height:0;">
  <svg viewBox="0 0 1440 100" xmlns="http://www.w3.org/2000/svg">
    <path fill="#800000" d="M0,100 C480,0 960,100 1440,0 L1440,100 L0,100 Z"></path>
  </svg>
</div>

<!-- Section Prestasi -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Kejuaraan</h2>
    <div class="row align-items-center">
      
      <!-- Kolom Kiri: Gambar -->
      <div class="col-md-6 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/kejuaraan.png') }}" 
             alt="Ilustrasi Olahraga" 
             class="img-fluid" 
             style="max-width: 300px;">
      </div>

      <!-- Kolom Kanan: Carousel -->
      <div class="col-md-6">
        <div id="prestasiCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">

            <!-- Item 1 -->
            <div class="carousel-item active" data-bs-interval="2000">
              <div class="card shadow border-0 rounded-4" style="align-items:center; display:flex; justify-content:center; text-align:left; max-width: 500px;">
                <img src="{{ asset('images/prestasi1.png') }}" 
                     class="card-img-top rounded-top-4" 
                     alt="Prestasi 1"
                     style="max-width: 200px;">
                <div class="card-body">
                  <h5 class="fw-bold">Juara 2 Lomba Content Creator Tingkat SMK Swasta Kabupaten Banyuwangi</h5>
                  <p class="text-muted">Selamat kepada HANUM SYAFIRA MURTI siswi XI Akuntansi Keuangan Lembaga SMK 17 Agustus 1945 Muncar yang telah mewakili sekolah dan berjuang.</p>
                </div>
              </div>
            </div>

            <!-- Item 2 -->
            <div class="carousel-item" data-bs-interval="2000">
              <div class="card shadow border-0 rounded-4" style="align-items:center; display:flex; justify-content:center; text-align:left; max-width: 500px;">
                <img src="{{ asset('images/prestasi2.jpg') }}" 
                     class="card-img-top rounded-top-4" 
                     alt="Prestasi 2" style="max-width: 200px; ">
                <div class="card-body">
                  <h5 class="fw-bold">Juara 2 Lomba Content Creator Tingkat SMK Swasta Kabupaten Banyuwangi</h5>
                  <p class="text-muted">Selamat kepada DENIS PRAYOGA siswa XI Perhotelan SMK 17 Agustus 1945 Muncar yang telah mewakili sekolah dan berjuang.</p>
                </div>
              </div>
            </div>

            <!-- Item 3 -->
             <div class="carousel-item"  data-bs-interval="2000">
              <div class="card shadow border-0 rounded-4" style="align-items:center; display:flex; justify-content:center; text-align:left; max-width: 500px;">
                <img src="{{ asset('images/prestasi3.png') }}" 
                     class="card-img-top rounded-top-4" 
                     alt="Prestasi 3"
                     style="max-width: 200px;">
                <div class="card-body">
                  <h5 class="fw-bold">Juara 2 dalam "LKS Rekayasa Perangkat Lunak"</h5>
                  <p class="text-muted">Selamat kepada CHARLES AGUSTIAN PUTRA, siswa XI RPL SMK 17 Agustus 1945 Muncar Tingkat Lomba "LKS Rekayasa Perangkat Lunak" Kabupaten 2025 pada bidang lomba WEB Technologies.</p>
                </div>
              </div>
            </div> 

    </div>
  </div>
</section>

<!-- Ekstrakurikuler Section -->
<section class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Ekstrakurikuler</h2>

        <div class="row align-items-center">
            <!-- Kolom kiri: Carousel untuk logo + nama -->
            <div class="col-md-6 text-center">
                <div id="ekstraCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- Item 1 -->
                        <div class="carousel-item active">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('images/ekstra/basket.png') }}" alt="Basket" style="max-width:220px;">
                                <h5 class="fw-semibold mt-3">Virus SMANDA</h5>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="carousel-item">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('images/ekstra/pramuka.png') }}" alt="Pramuka" style="max-width:220px;">
                                <h5 class="fw-semibold mt-3">Pramuka</h5>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="carousel-item">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('images/ekstra/paskibra.png') }}" alt="Paskibra" style="max-width:220px;">
                                <h5 class="fw-semibold mt-3">Paskibra</h5>
                            </div>
                        </div>

                    </div>

                    <!-- Tombol Panah -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#ekstraCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-success rounded-circle p-3" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#ekstraCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-success rounded-circle p-3" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

            <!-- Kolom kanan: Ilustrasi tetap -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/ekstrakulikuler.png') }}" alt="Ilustrasi" style="max-width:350px;">
            </div>
        </div>
    </div>
</section>



@endsection

<!-- Panggil CSS & JS -->
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<script src="{{ asset('js/script.js') }}"></script>
