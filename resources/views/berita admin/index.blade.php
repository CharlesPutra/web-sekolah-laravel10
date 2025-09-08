@extends('layout admin.navbar')

@section('navbar')
<div class="container my-5">
    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">
            <i class="bi bi-newspaper me-2 text-primary"></i> Daftar Berita / Kegiatan
        </h2>
        <a href="{{ route('berita.create') }}" class="btn btn-primary shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Tambah Berita
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

    {{-- Tabel Berita --}}
    <div class="table-responsive shadow-sm">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Judul Berita</th>
                    <th>Deskripsi Singkat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($datas as $data)
                    <tr>
                        <td>{{ $loop->iteration + ($datas->currentPage() - 1) * $datas->perPage() }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $data->image) }}"
                                 alt="{{ $data->judul_berita }}"
                                 class="rounded"
                                 style="width: 60px; height: 60px; object-fit: cover;">
                        </td>
                        <td class="fw-bold">{{ $data->judul_berita }}</td>
                        <td style="max-width: 300px;" class="text-truncate" title="{{ $data->deskripsi_singkat }}">
                            {{ $data->deskripsi_singkat }}
                        </td>
                        <td>
                            <a href="{{ route('berita.edit', $data->id) }}"
                               class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <a href="{{ route('berita.show', $data->id) }}"
                               class="btn btn-sm btn-secondary">
                                <i class="bi bi-pencil-square"></i> Show
                            </a>
                            <form action="{{ route('berita.destroy', $data->id) }}" 
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">
                            <i class="bi bi-folder-x fs-3 d-block mb-2"></i>
                            Tidak ada berita tersedia.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-4 d-flex justify-content-center">
        {{ $datas->links('pagination::bootstrap-5') }}
    </div>
</div>

<!-- Pagination -->
            <div class="d-flex justify-content-center mt-5">
                <nav>
                    <ul class="pagination pagination-sm">
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

@endsection
