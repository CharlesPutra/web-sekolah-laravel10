{{-- resources/views/partials/hero.blade.php --}}
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/smk.jpg') }}" class="d-block w-100 hero-img" alt="SMK">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="fw-bold">Selamat Datang di SMK 17 Agustus 1945 Muncar</h1>
                <p>Unggul dalam Prestasi, Berkarakter, dan Siap Kerja</p>
                <a href="{{ url('/pendaftaran') }}" class="btn btn-maroon mt-3">Daftar Sekarang</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/guru.jpg') }}" class="d-block w-100 hero-img" alt="Guru">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/upacara.jpg') }}" class="d-block w-100 hero-img" alt="Upacara">
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Sebelumnya</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Berikutnya</span>
    </button>
</div>

@push('styles')
<style>
.hero-img {
    width: 100%;
    height: 100vh;
    object-fit: cover;
}
@media (max-width: 768px) {
    .hero-img {
        height: 60vh;
    }
}
</style>
@endpush
