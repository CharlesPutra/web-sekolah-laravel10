@extends('layouts.main')

@section('content')
<section class="py-5">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Deskripsi Jurusan</h2>

    @if($slug == 'akl')
      <div class="card shadow p-4">
        <h3>Akuntansi & Keuangan Lembaga (AKL)</h3>
        <p>
          Jurusan AKL membekali siswa dengan keterampilan akuntansi, keuangan, administrasi, dan perpajakan.
          Lulusan AKL siap bekerja di bidang perbankan, kantor akuntan, maupun lembaga keuangan.
        </p>
      </div>

    @elseif($slug == 'bdp')
      <div class="card shadow p-4">
        <h3>Bisnis Daring & Pemasaran (BDP)</h3>
        <p>
          Jurusan BDP berfokus pada pemasaran modern, bisnis online, manajemen penjualan, dan komunikasi bisnis.
          Siswa belajar membuat strategi pemasaran digital sesuai kebutuhan industri.
        </p>
      </div>

    @elseif($slug == 'ph')
      <div class="card shadow p-4">
        <h3>Perhotelan (PH)</h3>
        <p>
          Jurusan Perhotelan melatih siswa di bidang hospitality, tata boga, tata graha, dan layanan tamu.
          Lulusan siap bekerja di hotel, restoran, kapal pesiar, maupun pariwisata.
        </p>
      </div>

    @elseif($slug == 'rpl')
      <div class="card shadow p-4">
        <h3>Rekayasa Perangkat Lunak (RPL)</h3>
        <p>
          Jurusan RPL mengajarkan pemrograman aplikasi, pembuatan website, basis data, serta analisis sistem.
          Lulusan memiliki peluang karier di bidang software engineer, web developer, dan IT support.
        </p>
      </div>

    @elseif($slug == 'tkro')
      <div class="card shadow p-4">
        <h3>Teknik Kendaraan Ringan Otomotif (TKRO)</h3>
        <p>
          Jurusan TKRO membekali siswa dengan keterampilan perawatan, perbaikan, dan perakitan kendaraan ringan.
          Lulusan dapat bekerja di bengkel resmi, perusahaan otomotif, atau membuka usaha sendiri.
        </p>
      </div>

    @elseif($slug == 'tp')
      <div class="card shadow p-4">
        <h3>Teknik Pemesinan (TP)</h3>
        <p>
          Jurusan TP mempelajari teknik pemesinan konvensional dan CNC, fabrikasi logam, serta pengelasan.
          Lulusan siap bekerja di industri manufaktur, permesinan, maupun industri berat.
        </p>
      </div>

    @else
      <div class="alert alert-warning">
        Deskripsi jurusan belum tersedia.
      </div>
    @endif

    <div class="mt-4 text-center">
      <a href="{{ url()->previous() }}" class="btn btn-danger">⬅ Kembali</a>
    </div>
  </div>
</section>
@endsection
