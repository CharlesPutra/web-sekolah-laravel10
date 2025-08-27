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
                        <form action="{{ route('ekstrakulikuler.update', $show->id) }}" method="POST"
                            enctype="multipart/form-data">
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

                            {{-- jurusan --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama jurusan</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name',$show->name) }}" placeholder="Masukkan name" disabled>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Deskripsi --}}
                            <div class="mb-3">
                                <label for="nama_panjang" class="form-label">Deskripsi</label>
                                <textarea name="nama_panjang" id="nama_panjang" class="form-control @error('nama_panjang') is-invalid @enderror" rows="4"
                                    placeholder="Tulis nama_panjang juara" disabled>{{ old('nama_panjang',$show->nama_panjang) }}</textarea>
                                @error('nama_panjang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('ekstrakulikuler.index') }}" class="btn btn-secondary">
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
