@extends('layouts.main')

@section('content')
    <section class="py-5" style="background-color: #fff;">
        <div class="container">

            <div class="text-center mb-5">
                <h1 class="fw-bold" style="color:#800000;">Blog & Artikel</h1>
                <p class="text-muted">Temukan informasi terbaru, tips, dan berita menarik.</p>
            </div>

            <div class="row g-4">
                @foreach ($datas as $data)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">

                            <div class="position-relative">
                                <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt="Thumbnail"
                                    style="height:220px; object-fit:cover;">
                                {{-- <span class="badge bg-maroon position-absolute top-0 start-0 m-3 px-3 py-2">Kategori</span> --}}
                            </div>

                            <div class="card-body d-flex flex-column">
                                <h5 class="fw-bold text-maroon">Judul Postingan Halaman {{ $data->judul_berita }}</h5>
                                <p class="text-muted flex-grow-1">{{ $data->deskripsi_singkat }}</p>
                                <a href="{{ route('post.show', $data->id) }}"
                                    class="btn btn-outline-maroon rounded-pill mt-3 align-self-start">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-5">
                <nav>
                    <ul class="pagination pagination-lg">
                        {{-- Tombol Previous --}}
                        <li class="page-item {{ $datas->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link text-maroon" href="{{ $datas->previousPageUrl() ?? '#' }}">&laquo;</a>
                        </li>

                        {{-- Nomor Halaman --}}
                        @for ($p = 1; $p <= $datas->lastPage(); $p++)
                            <li class="page-item {{ $datas->currentPage() == $p ? 'active' : '' }}">
                                <a class="page-link {{ $datas->currentPage() == $p ? '' : 'text-maroon' }}"
                                    href="{{ $datas->url($p) }}"
                                    @if ($datas->currentPage() == $p) style="background:#800000; border-color:#800000;" @endif>
                                    {{ $p }}
                                </a>
                            </li>
                        @endfor

                        {{-- Tombol Next --}}
                        <li class="page-item {{ !$datas->hasMorePages() ? 'disabled' : '' }}">
                            <a class="page-link text-maroon" href="{{ $datas->nextPageUrl() ?? '#' }}">&raquo;</a>
                        </li>
                    </ul>
                </nav>
            </div>


        </div>
    </section>
@endsection

@push('styles')
    <style>
        .text-maroon {
            color: #800000 !important;
        }

        .bg-maroon {
            background-color: #800000 !important;
        }

        .btn-outline-maroon {
            border: 1px solid #800000;
            color: #800000;
            transition: 0.3s;
        }

        .btn-outline-maroon:hover {
            background: #800000;
            color: #fff;
        }
    </style>
@endpush
