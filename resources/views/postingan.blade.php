@extends('layouts.main')

@section('content')
<section class="py-5" style="background-color: #fff;">
  <div class="container">

    <div class="text-center mb-5">
      <h1 class="fw-bold" style="color:#800000;">Blog & Artikel</h1>
      <p class="text-muted">Temukan informasi terbaru, tips, dan berita menarik.</p>
    </div>

    <div class="row g-4">
      @for ($i = 1; $i <= 6; $i++)
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">

          <div class="position-relative">
            <img src="{{ asset('images/post-sample.jpg') }}" 
                 class="card-img-top" 
                 alt="Thumbnail" 
                 style="height:220px; object-fit:cover;">
            <span class="badge bg-maroon position-absolute top-0 start-0 m-3 px-3 py-2">Kategori</span>
          </div>

          <div class="card-body d-flex flex-column">
            <h5 class="fw-bold text-maroon">Judul Postingan Halaman {{ $page }} - {{ $i }}</h5>
            <p class="text-muted flex-grow-1">
              Cuplikan singkat konten artikel untuk menarik perhatian pembaca.
            </p>
            <a href="{{ route('post.show', $i) }}" 
               class="btn btn-outline-maroon rounded-pill mt-3 align-self-start">
              Baca Selengkapnya →
            </a>
          </div>
        </div>
      </div>
      @endfor
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-5">
      <nav>
        <ul class="pagination pagination-lg">
          <li class="page-item {{ $page == 1 ? 'disabled' : '' }}">
            <a class="page-link text-maroon" href="{{ route('postingan.index', ['page' => $page - 1]) }}">&laquo;</a>
          </li>

          @for ($p = 1; $p <= 3; $p++)
          <li class="page-item {{ $page == $p ? 'active' : '' }}">
            <a class="page-link {{ $page == $p ? '' : 'text-maroon' }}" 
               href="{{ route('postingan.index', ['page' => $p]) }}"
               @if($page == $p) style="background:#800000; border-color:#800000;" @endif>
              {{ $p }}
            </a>
          </li>
          @endfor

          <li class="page-item {{ $page == 3 ? 'disabled' : '' }}">
            <a class="page-link text-maroon" href="{{ route('postingan.index', ['page' => $page + 1]) }}">&raquo;</a>
          </li>
        </ul>
      </nav>
    </div>

  </div>
</section>
@endsection

@push('styles')
<style>
  .text-maroon { color: #800000 !important; }
  .bg-maroon { background-color: #800000 !important; }
  .btn-outline-maroon {
      border: 1px solid #800000;
      color: #800000;
      transition: 0.3s;
  }
  .btn-outline-maroon:hover {
      background: #800000;
      color: #fff;
  }
</style>
@endpush
