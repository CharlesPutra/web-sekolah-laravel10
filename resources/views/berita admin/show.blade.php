@extends('layout admin.navbar')

@section('navbar')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark fw-bold">
                    <i class="bi bi-pencil-square"></i> Edit Berita
                </div>
                <div class="card-body">
                    <form action="{{ route('berita.update', $show->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Gambar --}}
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Menu (Opsional)</label>
                            @if ($show->image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $show->image) }}" alt="Gambar Menu"
                                        class="img-thumbnail rounded" style="max-width: 150px;">
                                </div>
                            @endif
                          
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- judul berita --}}
                        <div class="mb-3">
                            <label for="judul_berita" class="form-label">judul_berita</label>
                            <input type="text" name="judul_berita" id="judul_berita"
                                class="form-control @error('judul_berita') is-invalid @enderror"
                                value="{{ old('judul_berita', $show->judul_berita) }}" disabled>
                            @error('judul_berita')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Deskripsi singkat --}}
                        <div class="mb-3">
                            <label for="deskripsi_singkat" class="form-label">Deskripsi singkat</label>
                            <textarea name="deskripsi_singkat" id="deskripsi_singkat"
                                class="form-control @error('deskripsi_singkat') is-invalid @enderror"
                                rows="4" disabled>{{ old('deskripsi_singkat', $show->deskripsi_singkat) }}</textarea>
                            @error('deskripsi_singkat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi"
                                class="form-control @error('deskripsi') is-invalid @enderror"
                                rows="4" disabled>{{ old('deskripsi', $show->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Tombol --}}
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('berita.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection