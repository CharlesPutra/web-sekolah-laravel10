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
                        <form action="{{ route('kepalasekolah.update', $show->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            {{-- Gambar --}}
                            <div class="mb-3">
                                <label for="image" class="form-label">Foto Kepala Sekolah</label>
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

                            {{-- jurusan --}}
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Kepala Sekolah</label>
                                <input type="text" name="nama" id="nama"
                                    class="form-control @error('nama') is-invalid @enderror"
                                    value="{{ old('nama',$show->nama) }}" placeholder="Masukkan nama" disabled>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Deskripsi --}}
                            <div class="mb-3">
                                <label for="ucapan" class="form-label">Ucapan</label>
                                <textarea name="ucapan" id="ucapan" class="form-control @error('ucapan') is-invalid @enderror" rows="4"
                                    placeholder="Tulis ucapan juara" disabled>{{ old('ucapan',$show->ucapan) }}</textarea>
                                @error('ucapan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('kepalasekolah.index') }}" class="btn btn-secondary">
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
