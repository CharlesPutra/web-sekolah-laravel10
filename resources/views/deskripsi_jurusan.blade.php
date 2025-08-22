@extends('layouts.main')

@section('content')
    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Deskripsi Jurusan</h2>

            <div class="card shadow p-4">
                <h3>{{ $show->nama_jurusan }}</h3>
                <p>{{ $show->deskripsi }}</p>
            </div>
        {{-- @else
            <div class="alert alert-warning">
                Deskripsi jurusan belum tersedia.
            </div>
            @endif --}}

            <div class="mt-4 text-center">
                <a href="{{ url()->previous() }}" class="btn btn-danger">⬅ Kembali</a>
            </div>
        </div>
    </section>
@endsection
