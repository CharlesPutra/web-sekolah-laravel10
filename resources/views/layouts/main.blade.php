<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK 17 Agustus 1945 Muncar</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Warna marun */
        .bg-maroon {
            background-color: #800000;
        }

        .navbar-nav .nav-link {
            color: #0d1b2a;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            color: #800000;
        }

        .topbar a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }

        .topbar i {
            margin-right: 5px;
        }

        .school-logo {
            height: 60px;
            margin-right: 15px;
        }

        .login-btn {
            background-color: #800000;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 6px 15px;
        }

        .login-btn:hover {
            background-color: #a52a2a;
        }

        .search-btn {
            background-color: #800000;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 6px 10px;
            margin-right: 10px;
        }

        .search-btn:hover {
            background-color: #a52a2a;
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
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Visi dan Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Postingan</a></li>
                </ul>

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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>
