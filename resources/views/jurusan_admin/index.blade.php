@extends('layout admin.navbar')

@section('navbar')
    {{-- style --}}
    <style>
        .card-hover {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            border-radius: 10px;
            overflow: hidden;
        }

        .card-hover:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 16px 30px rgba(0, 0, 0, 0.15);
        }

        .card-hover img {
            transition: transform 0.4s ease;
            border-bottom: 1px solid #eee;
        }

        .card-hover:hover img {
            transform: scale(1.05);
        }

        .card-hover .card-body {
            transition: background-color 0.3s ease;
        }

        .card-hover:hover .card-body {
            background-color: #f9f9f9;
        }

        .card-hover .card-title,
        .card-hover .card-text,
        .card-hover .text-primary {
            transition: color 0.3s ease;
        }

        .card-hover:hover .card-title {
            color: #0d6efd;
        }

        .card-hover:hover .card-text {
            color: #333;
        }
    </style>

    {{-- style end --}}


    <div class="container my-5">
        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-dark">
                <i class="bi bi-list-ul me-2 text-primary"></i>Daftar Jurusan
            </h2>
            <a href="{{ route('keterampilan.create') }}" class="btn btn-primary shadow-sm">
                <i class="bi bi-plus-circle me-1"></i> Tambah Jurusan
            </a>
        </div>

        {{-- Alerts --}}
        @foreach (['success' => 'check-circle-fill', 'warning' => 'exclamation-triangle-fill', 'danger' => 'x-circle-fill'] as $type => $icon)
            @if (session($type))
                <div class="alert alert-{{ $type }} alert-dismissible fade show shadow-sm" role="alert">
                    <i class="bi bi-{{ $icon }} me-2"></i>{{ session($type) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        @endforeach

        {{-- List prestasi --}}
        <div class="row">
            @forelse ($datas as $data)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm card-hover">
                        <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top rounded-top"
                            alt="{{ $data->name_data }}" style="object-fit: cover; height: 200px;">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">{{ $data->nama_jurusan }}</h5>
                            <p class="card-text flex-grow-1 text-truncate" title="{{ $data->deskripsi }}">
                                {{ $data->deskripsi }}
                            </p>
                        </div>

                        <div class="card-footer bg-white d-flex justify-content-between border-0">
                            <a href="{{ route('jurusan.edit', $data->id) }}" class="btn btn-sm btn-outline-warning">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('jurusan.destroy', $data->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center py-4">
                        <i class="bi bi-folder-x fs-3 d-block mb-2"></i>
                        Tidak ada berita tersedia.
                    </div>
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-4 d-flex justify-content-center">
            {{ $datas->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
