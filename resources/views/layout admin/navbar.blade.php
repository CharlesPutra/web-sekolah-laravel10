<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Navbar Admin</title>
  <link rel="web icon" href="{{ asset('logo.jpg') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <style>
    /* Navbar utama */
    .navbar {
      background-color: #800000 !important;
    }

    .navbar a,
    .navbar-brand,
    .navbar-nav .nav-link {
      color: #ffffff !important;
    }

    .navbar a:hover,
    .navbar-nav .nav-link:hover {
      color: #ffdada !important;
    }

    /* Dropdown */
    .dropdown-menu {
      background-color: #800000 !important;
      border: none;
    }

    .dropdown-item {
      color: #ffffff !important;
    }

    .dropdown-item:hover {
      background-color: #600000 !important;
      color: #ffffff !important;
    }

    /* Rapiin spacing */
    .navbar-nav .nav-link {
      padding: 8px 14px;
      font-size: 15px;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .navbar-brand img {
      margin-right: 6px;
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
        <ul class="navbar-nav ms-auto">

          <!-- Menu Utama -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('prestasi.index') }}"><i class="bi bi-list-ul"></i> Prestasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('berita.index') }}"><i class="bi bi-newspaper"></i> Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('keterampilan.index') }}"><i class="bi bi-mortarboard"></i> Jurusan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ekstrakulikuler.index') }}"><i class="bi bi-dribbble"></i> Ekstrakurikuler</a>
          </li>

          <!-- Dropdown Profil Sekolah -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="bi bi-bank"></i> Profil Sekolah
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profilDropdown">
              <li><a class="dropdown-item" href="{{ route('visimisi.index') }}"><i class="bi bi-flag"></i> Visi Misi</a></li>
              <li><a class="dropdown-item" href="{{ route('tentangsekolah.index') }}"><i class="bi bi-info-circle"></i> Tentang Sekolah</a></li>
              <li><a class="dropdown-item" href="{{ route('kepalasekolah.index') }}"><i class="bi bi-person-badge"></i> Kepala Sekolah</a></li>
              <li><a class="dropdown-item" href="{{ route('infrastruktur.index') }}"><i class="bi bi-building"></i> Infrastruktur</a></li>
            </ul>
          </li>

          <!-- User Dropdown -->
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
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

        </ul>
      </div>
    </div>
  </nav>

  {{-- Content --}}
  <main>
    @yield('navbar')
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
