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
                        <form action="{{ route('keterampilan.store') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="nama_jurusan" class="form-label">Nama jurusan</label>
                                <input type="text" name="nama_jurusan" id="nama_jurusan"
                                    class="form-control @error('nama_jurusan') is-invalid @enderror"
                                    value="{{ old('nama_jurusan') }}" placeholder="Masukkan nama_jurusan">
                                @error('nama_jurusan')
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

                              {{-- Gambar --}}
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Kaprog</label>
                                <input type="file" name="foto" id="foto"
                                    class="form-control @error('foto') is-invalid @enderror">
                                @error('foto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                              {{-- juara --}}
                            <div class="mb-3">
                                <label for="nama_kaprog" class="form-label">Nama Kaprog</label>
                                <input type="text" name="nama_kaprog" id="nama_kaprog"
                                    class="form-control @error('nama_kaprog') is-invalid @enderror"
                                    value="{{ old('nama_kaprog') }}" placeholder="Masukkan nama_kaprog">
                                @error('nama_kaprog')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                              {{-- juara --}}
                            <div class="mb-3">
                                <label for="nip" class="form-label">No NIP</label>
                                <input type="number" name="nip" id="nip"
                                    class="form-control @error('nip') is-invalid @enderror"
                                    value="{{ old('nip') }}" placeholder="Masukkan nip">
                                @error('nip')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                              {{-- juara --}}
                            <div class="mb-3">
                                <label for="phone" class="form-label">No Phone</label>
                                <input type="text" name="phone" id="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}" placeholder="Masukkan mulai dari +62 atau 0">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('prestasi.index') }}" class="btn btn-secondary">
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