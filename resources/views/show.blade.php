@extends('layouts.main')

@section('content')
<section class="py-5">
  <div class="container">
    <h1 class="fw-bold text-maroon">Judul Postingan {{ $show->judul_berita }}</h1>
    <p class="text-muted">Diposting pada {{ $show->created_at }}</p>

    <img src="{{ asset('storage/' . $show->image) }}" 
         class="img-fluid rounded mb-4" 
         alt="Judul Postingan">

    <div class="content">
      <p>{{ $show->deskripsi }}</p>
    </div>

    <a href="{{ route('postingan.index') }}" class="btn btn-outline-maroon mt-4">← Kembali ke Blog</a>
  </div>
</section>
@endsection
