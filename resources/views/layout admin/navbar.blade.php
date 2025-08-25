<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>navbar admin</title>
    <link rel="web icon" href="{{ asset('logo.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        /* Navbar utama */
        .navbar {
            background-color: #800000 !important; /* Merah marun */
        }

        .navbar a,
        .navbar-brand,
        .navbar-nav .nav-link {
            color: #ffffff !important; /* Putih */
        }

        .navbar a:hover,
        .navbar-nav .nav-link:hover {
            color: #ffdada !important; /* Putih lembut saat hover */
        }

        /* Dropdown */
        .dropdown-menu {
            background-color: #800000 !important; /* Merah marun */
            border: none;
            --bs-dropdown-bg: #800000 !important;
            --bs-dropdown-link-color: #ffffff !important;
            --bs-dropdown-link-hover-bg: #600000 !important;
            --bs-dropdown-link-hover-color: #ffffff !important;
        }

        .dropdown-item {
            color: #ffffff !important;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            background-color: #600000 !important; /* Lebih gelap saat hover */
            color: #ffffff !important;
        }

        /* Samakan lebar dropdown dengan tombol */
        .navbar .dropdown-menu {
            min-width: 100% !important;
        }

        /* Tombol dropdown */
        .navbar .dropdown-toggle {
            padding-right: 1rem;
            padding-left: 1rem;
        }

        /* Posisi dropdown agar rapi */
        .navbar .nav-item.dropdown {
            position: relative;
            width: auto;
        }

        /* Item dalam dropdown full */
        .navbar .dropdown-menu .dropdown-item {
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar sticky-top navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-top rounded-circle">
                SMK 17 AGUSTUS 1945 MUNCAR
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prestasi.index') }}"><i class="bi bi-list-ul"></i> Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('berita.index') }}"><i class="bi bi-tags"></i> Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('keterampilan.index') }}"><i class="bi bi-people"></i> Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ekstrakulikuler.index') }}"><i class="bi bi-people"></i> Ekstrakulikuler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('visimisi.index') }}"><i class="bi bi-people"></i> Visi Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentangsekolah.index') }}"><i class="bi bi-people"></i> Tentang Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kepalasekolah.index') }}"><i class="bi bi-people"></i> Kepala Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('infrastruktur.index') }}"><i class="bi bi-people"></i> Infrastruktur</a>
                    </li>

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-right"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth

                    {{-- @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </a>
                        </li>
                    @endguest --}}
                </ul>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main>
        @yield('navbar')
    </main>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
