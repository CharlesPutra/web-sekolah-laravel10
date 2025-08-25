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
                        <form action="{{ route('tentangsekolah.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            {{-- juara --}}
                            <div class="mb-3">
                                <label for="tentang_sekolah" class="form-label">Tentang Sekolah</label>
                               <textarea name="tentang_sekolah" id="tentang_sekolah" class="form-control @error('tentang_sekolah') is-invalid @enderror" rows="4"
                                    placeholder="Tulis Tentang sekolah">{{ old('tentang_sekolah') }}</textarea>
                                @error('tentang_sekolah')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('tentangsekolah.index') }}" class="btn btn-secondary">
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