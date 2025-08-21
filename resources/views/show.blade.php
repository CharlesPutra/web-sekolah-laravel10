@extends('layouts.main')

@section('content')
<section class="py-5">
  <div class="container">
    <h1 class="fw-bold text-maroon">Judul Postingan {{ $id }}</h1>
    <p class="text-muted">Diposting pada 21 Agustus 2025</p>

    <img src="{{ asset('images/post-sample.jpg') }}" 
         class="img-fluid rounded mb-4" 
         alt="Judul Postingan">

    <div class="content">
      <p>
        Ini adalah konten dummy untuk postingan dengan ID {{ $id }}.
        Nanti bisa kamu ganti dengan konten asli.
      </p>
    </div>

    <a href="{{ route('postingan.index') }}" class="btn btn-outline-maroon mt-4">← Kembali ke Blog</a>
  </div>
</section>
@endsection
