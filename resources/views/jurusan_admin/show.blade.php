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
                        <form action="{{ route('keterampilan.update',$show->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            {{-- Gambar --}}
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar Menu (Opsional)</label>
                                @if ($show->image)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' .$show->image) }}" alt="Gambar Menu"
                                            class="img-thumbnail rounded" style="max-width: 150px;">
                                    </div>
                                @endif
                               
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- jurusan --}}
                            <div class="mb-3">
                                <label for="nama_jurusan" class="form-label">Nama jurusan</label>
                                <input type="text" name="nama_jurusan" id="nama_jurusan"
                                    class="form-control @error('nama_jurusan') is-invalid @enderror"
                                    value="{{ old('nama_jurusan',$show->nama_jurusan) }}" placeholder="Masukkan nama_jurusan" disabled>
                                @error('nama_jurusan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Deskripsi --}}
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4"
                                    placeholder="Tulis deskripsi juara" disabled>{{ old('deskripsi',$show->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                                {{-- Gambar --}}
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Kaprog</label>
                                @if ($show->foto)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' .$show->foto) }}" alt="Gambar Menu"
                                            class="img-thumbnail rounded" style="max-width: 150px;">
                                    </div>
                                @endif
                            
                                @error('foto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                             <div class="mb-3">
                                <label for="nama_kaprog" class="form-label">Nama Kaprog</label>
                                <input type="text" name="nama_kaprog" id="nama_kaprog"
                                    class="form-control @error('nama_kaprog') is-invalid @enderror"
                                    value="{{ old('nama_kaprog',$show->nama_kaprog) }}" placeholder="Masukkan nama_kaprog" disabled>
                                @error('nama_kaprog')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                              {{-- juara --}}
                            <div class="mb-3">
                                <label for="nip" class="form-label">No NIP</label>
                                <input type="number" name="nip" id="nip"
                                    class="form-control @error('nip') is-invalid @enderror"
                                    value="{{ old('nip',$show->nip) }}" placeholder="Masukkan nip" disabled>
                                @error('nip')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                              {{-- juara --}}
                            <div class="mb-3">
                                <label for="phone" class="form-label">No Phone</label>
                                <input type="text" name="phone" id="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone',$show->phone) }}" placeholder="Masukkan mulai dari +62 atau 0" disabled>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('keterampilan.index') }}" class="btn btn-secondary">
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
