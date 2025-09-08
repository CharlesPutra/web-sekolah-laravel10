@extends('layouts.main')

@section('content')
<!-- Panggil CSS & JS -->
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<!-- Hero Section -->
<section class="hero d-flex align-items-center justify-content-center text-center text-white"
    style="background: url('{{ asset('images/hero.png') }}') no-repeat center center/cover; min-height: 100vh; position: relative; overflow:hidden;"
    data-aos="fade-in">

    <!-- Overlay gelap -->
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.0);"></div>
</section>

<!-- Garis bawah hero -->
<div class="hero-divider" data-aos="fade-up"></div>

<!-- Section Indonesia -->
<section class="py-5 bg-white">
    <div class="container" style="max-width:100%; overflow-x:hidden;">
        <div class="row align-items-center" style="max-width:100%; overflow-x:hidden;">

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
    <div class="container" style="max-width:100%; overflow-x:hidden;">
        <div class="row align-items-center flex-md-row-reverse" style="max-width:100%; overflow-x:hidden;">
            <!-- Gambar -->
            <div class="col-md-6 text-center mb-4 mb-md-0" data-aos="zoom-in">
                <img src="{{ asset('images/logo80.png') }}" alt="HUT 80 RI" class="img-fluid shadow rounded-4">
            </div>
            <!-- Teks -->
            <div class="col-md-6 text-center mb-4 mb-md-0" data-aos="fade-right"> 
                <h2 class="fw-bold">HUT ke-80 RI</h2>
                <p class="lead text-muted">"Bersatu Berdaulat, Rakyat Sejahtera, Indonesia Maju"</p>
            </div>
        </div>
    </div>
</section>

<div style="line-height:0; transform: scaleY(-1); overflow:hidden;" data-aos="fade-up">
    <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg" style="display:block; width:100%; max-width:100%;">
        <path fill="#800000" fill-opacity="1"
            d="M0,160L48,165.3C96,171,192,181,288,176C384,171,480,149,576,128C672,107,768,85,864,106.7C960,128,1056,192,1152,213.3C1248,235,1344,213,1392,202.7L1440,192L1440,0L0,0Z">
        </path>
    </svg>
</div>

<!-- Section Menu Tengah -->
<section class="py-2" style="background-color:#800000; color:white; overflow-x:hidden;">
    <div class="container" style="max-width:100%; overflow-x:hidden;">
        <div class="d-flex justify-content-center flex-wrap gap-4" style="max-width:100%; overflow-x:hidden;">

            <!-- Item 1 -->
            <a href="#kejuaraan" class="text-decoration-none" data-aos="flip-up">
                <div class="menu-card text-center rounded-4 p-4 bg-white text-dark">
                    <img src="{{ asset('images/icons/piala.png') }}" alt="Kejuaraan" style="width:60px; height:60px;">
                    <h5 class="fw-bold mt-3">Kejuaraan</h5>
                </div>
            </a>

            <!-- Item 2 -->
            <a href="#ekstrakurikuler" class="text-decoration-none" data-aos="flip-up" data-aos-delay="150">
                <div class="menu-card text-center rounded-4 p-4 bg-white text-dark">
                    <img src="{{ asset('images/icons/bola.png') }}" alt="Ekstra" style="width:60px; height:60px;">
                    <h5 class="fw-bold mt-3">Ekstra</h5>
                </div>
            </a>

            <!-- Item 3 -->
            <a href="{{ route('postingan.index') }}" class="text-decoration-none" data-aos="flip-up" data-aos-delay="300">
    <div class="menu-card text-center rounded-4 p-4 bg-white text-dark">
        <img src="{{ asset('images/icons/berita.png') }}" alt="Berita" style="width:60px; height:60px;">
        <h5 class="fw-bold mt-3">Berita</h5>
    </div>
</a>


        </div>
    </div>
</section>


<!-- Section Kejuaraan -->
<section id="kejuaraan"  class="py-5 bg-white">
  <div class="container" style="max-width:100%; overflow-x:hidden;">
    <h2 class="text-center fw-bold mb-5" data-aos="fade-up">Kejuaraan</h2>
    <div class="row align-items-center g-2" style="max-width:100%; overflow-x:hidden;">

      <!-- Kolom kiri -->
      <div class="col-md-5 text-center mb-4 mb-md-0" data-aos="fade-right" data-aos-duration="1000">
        <img src="{{ asset('images/kejuaraan.png') }}" 
             alt="Ilustrasi Kejuaraan" 
             class="img-fluid" style="max-width: 300px;">
      </div>

      <!-- Kolom kanan -->
      <div class="col-md-7" data-aos="fade-left" data-aos-duration="1000">
        <div id="prestasiCarousel" class="carousel slide" data-bs-ride="carousel" style="overflow:hidden;">
          <div class="carousel-inner">

            {{-- Looping Data Kejuaraan --}}
            @foreach ($datas as $index => $data)
              <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" data-bs-interval="4000">
                <div class="card shadow-sm border-0 rounded-4 overflow-hidden" 
                     data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                  
                  <!-- Gambar full -->
                  <div class="position-relative">
                    <img src="{{ asset('storage/' . $data->image) }}" 
                         class="d-block w-100" 
                         alt="Prestasi {{ $index+1 }}" 
                         style="height: 200px; object-fit: cover; max-width:100%;">
                    
                    <!-- Badge Viewers -->
                    <span class="badge badge-maroon position-absolute top-0 start-0 m-2 px-3 py-2 shadow-sm">
                      👁️ 10 rb
                    </span>
                  </div>

                  <!-- Body -->
                  <div class="card-body text-center p-3">
                    <h6 class="fw-bold mb-1">{{ $data->juara }}</h6>
                    <p class="mb-0 text-muted small">{{ $data->deskripsi }}</p>
                  </div>
                </div>
              </div>
            @endforeach

          </div>

          <!-- Tombol navigasi -->
          <button class="carousel-control-prev" type="button" data-bs-target="#prestasiCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-2 shadow"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#prestasiCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-2 shadow"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS tambahan -->
<style>
  .carousel .card { max-width: 380px; margin: auto; }
  .badge-maroon { background-color: #800000 !important; color: #fff !important; }
  .carousel-control-prev-icon, .carousel-control-next-icon { background-size: 100% 100%; filter: invert(1); }
</style>

<!-- Ekstrakurikuler Section -->
<section id="ekstrakurikuler" class="py-5 bg-light">
  <div class="container" style="max-width:100%; overflow-x:hidden;">
    <h2 class="text-center fw-bold mb-5">Ekstrakurikuler</h2>
    <div class="row align-items-center" style="max-width:100%; overflow-x:hidden;">
      <!-- Carousel Ekstra -->
      <div class="col-md-6">
        <div id="ekstraCarousel" class="carousel slide" data-bs-ride="carousel" style="overflow:hidden;">
          <div class="carousel-inner text-center">

            @foreach ($ekstra as $e)
              
            <!-- Item 1 -->
            <div class="carousel-item active">
              <img src="{{ asset('storage/' . $e->image) }}" class="mb-3" alt="{{ $e->name }}" style="max-height: 150px; max-width:100%;">
              <h4 class="fw-bold text-maroon">{{ $e->name }}</h4>
              <p>{{ $e->nama_panjang }}</p>
            </div>
            @endforeach
          </div>

          <!-- Controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#ekstraCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#ekstraCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>

      <!-- Ilustrasi -->
      <div class="col-md-6 text-center">
        <img src="images/ekstrakulikuler.png" class="img-fluid" alt="Ilustrasi Ekstrakurikuler" style="max-width: 500px">
      </div>
    </div>
  </div>
</section>

<!-- Section Berita -->
<section id="berita" class="py-5 position-relative" style="background-color:#800000; color:white; overflow-x:hidden;">
    <div class="container" style="max-width:100%; overflow-x:hidden;">
        <h2 class="text-center fw-bold mb-4" data-aos="fade-up">Berita Terbaru</h2>
        <div class="row g-4" style="max-width:100%; overflow-x:hidden;">
            {{-- looping berita --}}
            @foreach ($berita as $b)
            <div class="col-md-4" data-aos="zoom-in">
                <div class="card shadow-sm h-100 border-0">
                    <img src="{{ asset('storage/' . $b->image) }}" class="card-img-top" alt="Berita 1" style="max-width:100%;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $b->judul_berita }}</h5>
                        <p class="card-text">{{ $b->deskripsi_singkat }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<svg class="wave-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 160" preserveAspectRatio="none"
    style="display:block; width:100%; height:80px; max-width:100%; overflow:hidden;">
    <path fill="#800000" fill-opacity="1"
        d="M0,40L48,51.3C96,62,192,84,288,94.7C384,105,480,105,576,97.3C672,89,768,71,864,70.7C960,71,1056,89,1152,89.3C1248,89,1344,71,1392,62.7L1440,54L1440,0L0,0Z">
    </path>
</svg>

<!-- Section Lokasi -->
<section id="lokasi" class="py-3 bg-white">
    <div class="container" style="max-width:100%; overflow-x:hidden;">
        <h2 class="text-center fw-bold mb-4" data-aos="fade-up">Lokasi Sekolah</h2> <br>
        <div class="row g-4 align-items-center" style="max-width:100%; overflow-x:hidden;">
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
                <p>Dusun Krajan, Blambangan, Kec. Muncar, Kabupaten Banyuwangi, Jawa Timur 68472</p>
                <p><i class="bi bi-telephone"></i> +62822-3100-1316</p>
                <p><i class="bi bi-envelope"></i> smk17muncar@gmail.com</p>
            </div>
        </div>
    </div>
</section> <br>
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