@extends('layouts.main')

@section('content')
<section class="py-5">
    <div class="container">
<h2 class="fw-bold text-center mb-4" style="color: maroon;">Kepala Program Jurusan</h2>
            <!-- Kepala Program -->
        <div class="row justify-content-center">
    <div class="col-md-4 mb-4">
        <div class="card shadow h-100 text-center">
            <img src="{{ asset('images/default.png') }}" class="card-img-top" alt="Foto Kaprog">
            <div class="card-body">
                <h5 class="card-title">Nama Kepala Program</h5>
                <p class="card-text">NIP: 123456789</p>
                <p class="text-muted">Kontak: 0812-3456-7890</p>
            </div>
        </div>
    </div>
</div>

        <h2 class="fw-bold text-center mb-4">Deskripsi Jurusan</h2>

        <div class="card shadow p-4 mb-4">
            <h3>{{ $show->nama_jurusan }}</h3>
            <p>{{ $show->deskripsi }}</p>
        </div>


        <div class="mt-4 text-center">
            <a href="{{ url()->previous() }}" class="btn btn-danger">⬅ Kembali</a>
        </div>
    </div>
</section>
@endsection
