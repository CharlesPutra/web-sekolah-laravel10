@extends('layouts.main')

@section('content')

    <!-- Styling elegan langsung di file -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h2.section-title {
            font-weight: 600;
            color: maroon;
            position: relative;
            display: inline-block;
            padding-bottom: 8px;
        }

        h2.section-title::after {
            content: "";
            position: absolute;
            width: 50%;
            height: 3px;
            background: maroon;
            bottom: 0;
            left: 25%;
            border-radius: 5px;
        }

        .card {
            border: none;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
        }

        .card img {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .btn-danger {
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 600;
        }

        section {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .bg-light-alt {
            background: #fac4c4;
        }

        .section-title-KP {
            display: flex;
            justify-content: center;
            text-align: center;
            width: 100%;
        }

        h2.section-title-KP {
            font-weight: 600;
            color: maroon;
            position: relative;
            display: inline-block;
            padding-bottom: 8px;
        }

        h2.section-title-KP::after {
            content: "";
            position: absolute;
            width: 50%;
            height: 3px;
            background: maroon;
            bottom: 0;
            left: 25%;
            border-radius: 5px;
        }
    </style>

    <section class="py-5">
        <div class="container">

            <!-- Kepala Program -->
            <h2 class="section-title-KP text-center mb-5" data-aos="fade-down">Kepala Program Jurusan</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4" data-aos="zoom-in">
                    <div class="card shadow h-100 text-center">
                        <img src="{{ asset('storage/' . $show->foto) }}" class="card-img-top" alt="Foto Kaprog">
                        <div class="card-body">
                            <h5 class="card-title">{{ $show->nama_kaprog }}</h5>
                            <p class="card-text">{{ $show->nip }}</p>
                            <p class="text-muted">{{ $show->phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deskripsi Jurusan -->
        <h2 class="section-title text-center mb-5" data-aos="fade-up">Deskripsi Jurusan</h2>
        <div class="card shadow p-4 mb-4" data-aos="fade-right">
            <h3>{{ $show->nama_jurusan }}</h3>
            <p>{{ $show->deskripsi }}</p>
        </div>

        <!-- Visi & Misi -->
        <section class="bg-light-alt py-5" data-aos="fade-up">
            <div class="container">
                <h2 class="section-title text-center mb-5">Visi & Misi</h2>
                <div class="card shadow p-4" data-aos="zoom-in">
                    <h4>Visi</h4>
                    <p>{{ $show->visi ?? 'Menjadi jurusan unggul dan berdaya saing.' }}</p>

                    <h4>Misi</h4>
                    <p>{{ $show->misi }}</p>
                </div>
            </div>
        </section>

        <!-- Prestasi -->
        <section class="bg-light-alt py-5 mt-5" data-aos="fade-up">
            <div class="container">
                <h2 class="section-title text-center mb-5">Prestasi Jurusan</h2>

                <!-- Swiper Container -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @if (!empty($show->prestasi))
                            @foreach ($show->prestasi as $prestasi)
                                <div class="swiper-slide">
                                    <div class="card shadow-sm h-100" data-aos="zoom-in">
                                        <!-- Gambar Prestasi -->
                                        @if (!empty($prestasi->image))
                                            <img src="{{ asset('storage/' . $prestasi->image) }}" class="card-img-top"
                                                alt="{{ $prestasi->juara }}" style="height:200px; object-fit:cover;">
                                        @else
                                            <img src="{{ asset('images/no-image.jpg') }}" class="card-img-top"
                                                alt="Tidak ada gambar" style="height:200px; object-fit:cover;">
                                        @endif

                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $prestasi->juara }}</h5>
                                            <p class="card-text text-muted mb-0">
                                                <em>{{ $prestasi->deskripsi }}</em>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide">
                                <div class="card shadow-sm h-100">
                                    <img src="{{ asset('images/no-image.jpg') }}" class="card-img-top"
                                        alt="Belum ada prestasi" style="height:200px; object-fit:cover;">
                                    <div class="card-body text-center text-muted">
                                        Belum ada data prestasi.
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow-sm h-100">
                                    <img src="{{ asset('images/no-image.jpg') }}" class="card-img-top"
                                        alt="Belum ada prestasi" style="height:200px; object-fit:cover;">
                                    <div class="card-body text-center text-muted">
                                        Belum ada data prestasi.
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- SwiperJS CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Swiper Init -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1
                    },
                    768: {
                        slidesPerView: 2
                    },
                    992: {
                        slidesPerView: 3
                    },
                }
            });
        </script>

        <!-- Testimoni Alumni -->
        <section class="py-5 bg-light" data-aos="fade-up">
            <div class="container">
                <h2 class="section-title text-center mb-5" data-aos="fade-down">Testimoni Alumni</h2>
                <div class="row">

                    @foreach ($show->alumni as $alumni)
                        <div class="col-md-4 mb-4" data-aos="zoom-in">
                            <div class="testimonial-card shadow-lg rounded-4 text-center p-4 h-100">
                                <!-- Bagian atas berwarna + foto -->
                                <div class="testimonial-top bg-maroon position-relative rounded-top-4">
                                    <div class="testimonial-img-wrapper mx-auto">
                                        <img src="{{ asset('storage/' . $alumni->fotoalum) }}"
                                            alt="{{ $alumni->namaalum }}" class="rounded-circle shadow" width="90"
                                            height="90" style="object-fit: cover;">

                                    </div>
                                </div> <br>


                                <!-- Nama & Jabatan -->
                                <h5 class="fw-bold mt-4 mb-1">{{ $alumni->namaalum }}</h5>
                                <small class="text-muted d-block mb-3">{{ $alumni->angkatan }}</small>

                                <!-- Isi Testimoni -->
                                <p class="text-muted fst-italic">
                                    "{{ $alumni->deskripsialum }}"
                                </p>

                                <!-- Rating -->
                                <div class="stars mt-3">
                                    <p>
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $alumni->rating)
                                                ⭐
                                            @else
                                                ☆
                                            @endif
                                        @endfor
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!-- CSS -->
        <style>
            .bg-maroon {
                background-color: maroon !important;
                color: #fff;
            }

            .testimonial-card {
                background: #fff;
                border-radius: 20px;
                overflow: hidden;
                position: relative;
            }

            .testimonial-top {
                height: 100px;
            }

            .testimonial-img-wrapper {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                background: #fff;
                padding: 5px;
                position: absolute;
                bottom: -45px;
                left: 50%;
                transform: translateX(-50%);
            }

            .stars i {
                font-size: 18px;
                margin: 0 2px;
            }
        </style>



        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

        <!-- Tombol Kembali -->
        <div class="mt-4 text-center" data-aos="fade-up">
            <a href="{{ url()->previous() }}" class="btn btn-danger">⬅ Kembali</a>
        </div>
        </div>
    </section>

    <!-- Tambahkan FontAwesome jika belum ada -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <!-- Tambah script AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // durasi animasi
            once: true // animasi jalan sekali
        });
    </script>
@endsection
