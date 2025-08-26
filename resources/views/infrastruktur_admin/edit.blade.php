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
                        <form action="{{ route('infrastruktur.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
            
                            {{-- juara --}}
                            <div class="mb-3">
                                <label for="luas_tanah" class="form-label">Luas tanah</label>
                                <input type="number" step="0.001" min="0" name="luas_tanah" id="luas_tanah"
                                    class="form-control @error('luas_tanah') is-invalid @enderror"
                                    value="{{ old('luas_tanah', $edit->luas_tanah) }}" placeholder="Masukkan luas_tanah">
                                @error('luas_tanah')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- juara --}}
                            <div class="mb-3">
                                <label for="ruang_kelas" class="form-label">Ruang Kelas</label>
                                <input type="number"  name="ruang_kelas" id="ruang_kelas"
                                    class="form-control @error('ruang_kelas') is-invalid @enderror"
                                    value="{{ old('ruang_kelas', $edit->ruang_kelas) }}" placeholder="Masukkan ruang_kelas">
                                @error('ruang_kelas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- juara --}}
                            <div class="mb-3">
                                <label for="lab_komputer" class="form-label">Lab Komputer</label>
                                <input type="number"  name="lab_komputer" id="lab_komputer"
                                    class="form-control @error('lab_komputer') is-invalid @enderror"
                                    value="{{ old('lab_komputer', $edit->lab_komputer) }}" placeholder="Masukkan lab_komputer">
                                @error('lab_komputer')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- juara --}}
                            <div class="mb-3">
                                <label for="perpustakaan" class="form-label">Perpustakaan</label>
                                <input type="number"  name="perpustakaan" id="perpustakaan"
                                    class="form-control @error('perpustakaan') is-invalid @enderror"
                                    value="{{ old('perpustakaan', $edit->perpustakaan) }}" placeholder="Masukkan perpustakaan">
                                @error('perpustakaan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('infrastruktur.index') }}" class="btn btn-secondary">
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