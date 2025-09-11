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
                        <form action="{{ route('alumni.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- Gambar --}}
                            <div class="mb-3">
                                <label for="fotoalum" class="form-label">Foto Alum (Opsional)</label>
                                @if ($show->fotoalum)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $show->fotoalum) }}" alt="Gambar Menu"
                                            class="img-thumbnail rounded" style="max-width: 150px;">
                                    </div>
                                @endif

                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="namaalum" class="form-label">Nama Alum</label>
                                <input disabled type="text" name="namaalum" id="namaalum"
                                    class="form-control @error('namaalum') is-invalid @enderror"
                                    value="{{ old('namaalum', $show->namaalum) }}" placeholder="Masukkan Kenamaaluman">
                                @error('namaalum')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- <div class="mb-3">
                                <label for="category_id" class="form-label">Pilih Kategori</label>
                                <select name="category_id" id="category_id"
                                    class="form-select @error('category_id') is-invalid @enderror">
                                    <option selected>-- Pilih Kategori --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}

                            {{-- Deskripsi --}}
                            <div class="mb-3">
                                <label for="deskripsialum" class="form-label">Deskripsi Alum</label>
                                <textarea disabled name="deskripsialum" id="deskripsialum"
                                    class="form-control @error('deskripsialum') is-invalid @enderror" rows="4"
                                    placeholder="Tulis deskripsialum juara">{{ old('deskripsialum', $show->deskripsialum) }}</textarea>
                                @error('deskripsialum')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 ">
                                <label for="rating" class="form-label">Rating</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rating"
                                        value="{{ $show->rating }}" id="rating{{ $show->rating }}" disabled>
                                    <label class="form-check-label" for="rating{{ $show->rating }}">⭐
                                        {{ $show->rating }}</label>
                                </div>

                            </div>

                            <div class="mb-3">
                                <label for="angkatan" class="form-label">Angkatan Alum</label>
                                <input type="text" name="angkatan" id="angkatan"
                                    class="form-control @error('angkatan') is-invalid @enderror"
                                    value="{{ old('angkatan', $show->angkatan) }}" placeholder="Masukkan Kenamaaluman"
                                    disabled>
                                @error('angkatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="d-flex justify-content-between">
                                <a href="{{ route('alumni.index') }}" class="btn btn-secondary">
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
