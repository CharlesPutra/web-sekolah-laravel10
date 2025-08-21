@extends('layout admin.navbar')


@section('navbar')
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white fw-bold">
                        <i class="bi bi-plus-circle"></i> Tambah Menu
                    </div>
                    <div class="card-body">
                        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- Gambar --}}
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar Menu</label>
                                <input type="file" name="image" id="image"
                                    class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- juara --}}
                            <div class="mb-3">
                                <label for="judul_berita" class="form-label">Judul berita</label>
                                <input type="text" name="judul_berita" id="judul_berita"
                                    class="form-control @error('judul_berita') is-invalid @enderror" value="{{ old('judul_berita') }}"
                                    placeholder="Masukkan judul berita">
                                @error('judul_berita')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Deskripsi singkat --}}
                            <div class="mb-3">
                                <label for="deskripsi_singkat" class="form-label">Deskripsi singkat</label>
                                <textarea name="deskripsi_singkat" id="deskripsi_singkat"
                                    class="form-control @error('deskripsi_singkat') is-invalid @enderror" rows="4"
                                    placeholder="Tulis deskripsi_singkat juara">{{ old('deskripsi_singkat') }}</textarea>
                                @error('deskripsi_singkat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Deskripsi --}}
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4"
                                    placeholder="Tulis deskripsi juara">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('berita.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
