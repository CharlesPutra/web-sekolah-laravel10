@extends('layout admin.navbar')

@section('navbar')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark fw-bold">
                    <i class="bi bi-pencil-square"></i> Edit Menu
                </div>
                <div class="card-body">
                    <form action="{{ route('prestasi.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Gambar --}}
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Menu (Opsional)</label>
                            @if ($edit->image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $edit->image) }}" alt="Gambar Menu"
                                        class="img-thumbnail rounded" style="max-width: 150px;">
                                </div>
                            @endif
                            <input type="file" name="image" id="image"
                                class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- juara --}}
                        <div class="mb-3">
                            <label for="juara" class="form-label">Juara</label>
                            <input type="text" name="juara" id="juara"
                                class="form-control @error('juara') is-invalid @enderror"
                                value="{{ old('juara', $edit->juara) }}">
                            @error('juara')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi"
                                class="form-control @error('deskripsi') is-invalid @enderror"
                                rows="4">{{ old('deskripsi', $edit->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Tombol --}}
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('prestasi.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-warning text-white">
                                <i class="bi bi-save"></i> Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection