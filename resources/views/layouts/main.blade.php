<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK 17 Agustus 1945 Muncar</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">


    <style>
       /* Warna dasar navbar */
.bg-maroon {
    background-color: #800000;
}

.navbar-nav .nav-link {
    position: relative;
    color: #0d1b2a;
    font-weight: 500;
    transition: color 0.3s ease;
    padding: 8px 12px;
}

/* Navbar sticky */
.navbar {
    position: sticky;
    top: 0;
    z-index: 1030; /* biar di atas konten lain */
}


.navbar.sticky-top {
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.18);
}

/* Garis bawah default (disembunyikan) */
.navbar-nav .nav-link::after {
    content: "";
    position: absolute;
    bottom: 0; /* pas di bawah teks */
    left: 0;
    width: 0;
    height: 2px;
    background-color: #800000; /* warna garis */
    transition: width 0.3s ease;
}

/* Hover → garis muncul */
.navbar-nav .nav-link:hover::after {
    width: 100%;
}

/* Aktif → garis tetap muncul */
.navbar-nav .nav-link.active::after {
    width: 100%;
}

/* Biar teks aktif tetap sama warnanya */
.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {
    color: #0d1b2a;
}

/* Topbar */
.topbar a {
    color: #fff;
    text-decoration: none;
    margin-right: 20px;
}

.topbar i {
    margin-right: 5px;
}

/* Logo sekolah */
.school-logo {
    height: 60px;
    margin-right: 15px;
}

/* Tombol login */
.login-btn {
    background-color: #800000;
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 6px 15px;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.login-btn:hover {
    background-color: #a52a2a;
    transform: scale(1.08); /* Membesar sedikit */
}

/* Tombol search */
.search-btn {
    background-color: #800000;
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 6px 10px;
    margin-right: 10px;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.search-btn:hover {
    background-color: #a52a2a;
    transform: scale(1.08); /* Membesar sedikit */
}

 
    </style>
</head>

<body>

    <!-- Topbar -->
    <div class="topbar bg-maroon text-white py-1">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <a href="#"><i class="bi bi-geo-alt"></i> Jln Cincin Kota No. 8, Muncar, Banyuwangi 68472</a>
                <a href="#"><i class="bi bi-telephone"></i> 0333-123456</a>
                <a href="#"><i class="bi bi-envelope"></i> smk17muncar@gmail.com</a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <!-- Logo -->
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="school-logo">

            <!-- Nama Sekolah -->
            <a class="navbar-brand fw-bold text-dark" href="#">
                SMK 17 Agustus 1945 Muncar
            </a>

            <!-- Button Responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

  <!-- Menu -->
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="bi bi-house-door me-1"></i> Beranda
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('visiMisi') }}">
                    <i class="bi bi-bullseye me-1"></i> Visi dan Misi
                </a>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('profil') }}">
                <i class="bi bi-building me-1"></i> Profil
            </a>
        </li>

        </li>
        <li class="nav-item">
    <a class="nav-link" href="{{ route('postingan') }}">
        <i class="bi bi-journal-text me-1"></i> Postingan
    </a>
</li>
    </ul>
</div>


                <!-- Search & Login -->
                <form class="d-flex">
                    <button class="search-btn"><i class="bi bi-search"></i></button>
                    <button class="login-btn">Login</button>
                </form>
            </div>
        </div>
    </nav>

    

    <main>
        @yield('content')
    </main>

<!-- Footer -->
<footer style="background-color:#800000; color:#fff; padding: 40px 0; font-family: Arial, sans-serif;">
    <div class="container">
        <div class="row">

            <!-- Logo & Deskripsi -->
            <div class="col-md-3 mb-3">
                <h5><strong>SMK 17 Agustus 1945 Muncar</strong></h5>
                <p>Pendidikan berkualitas untuk generasi bangsa yang unggul.</p>
            </div>

            <!-- Menu -->
            <div class="col-md-3 mb-3">
                <h6 class="fw-bold">Menu</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Beranda</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Profil</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Jurusan</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Kontak</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="col-md-3 mb-3">
                <h6 class="fw-bold">Kontak</h6>
                <p><i class="bi bi-geo-alt-fill"></i> Muncar, Banyuwangi</p>
                <p><i class="bi bi-envelope-fill"></i> info@smk17agustus1945.sch.id</p>
                <p><i class="bi bi-telephone-fill"></i> +62 812-3456-7890</p>
            </div>

            <!-- Sosial Media -->
            <div class="col-md-3 mb-3">
                <h6 class="fw-bold">Ikuti Kami</h6>
                <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-tiktok fs-4"></i></a>
                <a href="#" class="text-white"><i class="bi bi-whatsapp fs-4"></i></a>
            </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.3);">

        <div class="text-center">
            <p class="mb-0">© 2025 SMK 17 Agustus 1945 Muncar. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<!-- End Footer -->




<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // durasi animasi 1 detik
    once: true,     // animasi hanya sekali
  });
</script>

</body>

</html>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>
