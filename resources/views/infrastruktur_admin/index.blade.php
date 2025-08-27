@extends('layout admin.navbar')

@section('navbar')
<div class="container my-5">
    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">
            <i class="bi bi-list-ul me-2 text-primary"></i> Daftar Infrastruktur
        </h2>
        <a href="{{ route('infrastruktur.create') }}" class="btn btn-primary shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Tambah Infrastruktur
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

    {{-- Tabel Daftar Jurusan --}}
    <div class="table-responsive shadow-sm">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Luas Tanah</th>
                    <th>Ruang Kelas</th>
                    <th>Laboratorium Komputer</th>
                    <th>Perpustakaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($datas as $index => $data)
                    <tr>
                        <td>{{ $loop->iteration + ($datas->currentPage() - 1) * $datas->perPage() }}</td>
                        <td class="fw-bold">{{ $data->luas_tanah }}</td>
                        <td style="max-width: 300px;" class="text-truncate" title="{{ $data->ruang_kelas }}">
                            {{ $data->ruang_kelas }}
                        </td>
                        <td style="max-width: 300px;" class="text-truncate" title="{{ $data->lab_komputer }}">
                            {{ $data->lab_komputer }}
                        </td>
                        <td style="max-width: 300px;" class="text-truncate" title="{{ $data->perpustakaan }}">
                            {{ $data->perpustakaan }}
                        </td>
                        <td>
                            <a href="{{ route('infrastruktur.edit', $data->id) }}" 
                               class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <a href="{{ route('infrastruktur.show', $data->id) }}" 
                               class="btn btn-sm btn-secondary">
                                <i class="bi bi-pencil-square"></i> Show
                            </a>
                            <form action="{{ route('infrastruktur.destroy', $data->id) }}" 
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
                        <td colspan="6" class="text-center py-4">
                            <i class="bi bi-folder-x fs-3 d-block mb-2"></i>
                            Tidak ada data jurusan tersedia.
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
@endsection
