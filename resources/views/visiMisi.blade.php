@extends('layouts.main')

@section('content')

<section id="visi-misi" class="visi-misi-section pt-4 pb-5">
  <div class="container">
    <!-- Judul -->
    <h2 class="section-title">Visi, Misi, dan Tujuan</h2>

    <div class="row g-4">
      <!-- Visi -->
      <div class="col-lg-4 col-md-6">
        <div class="card-visi animate">
          <h4>Visi</h4>
          <p>
            "Menjadi sekolah yang unggul dalam prestasi, berkarakter, berwawasan lingkungan, serta mampu bersaing di era global."
          </p>
        </div>
      </div>

      <!-- Misi -->
      <div class="col-lg-4 col-md-6">
        <div class="card-visi animate">
          <h4>Misi</h4>
          <ol>
            <li>Meningkatkan keimanan dan ketakwaan warga sekolah.</li>
            <li>Melaksanakan penguatan karakter dan akhlak mulia.</li>
            <li>Mengembangkan sikap cinta tanah air.</li>
            <li>Melaksanakan pembelajaran yang efektif, kreatif, inovatif, dan menyenangkan.</li>
            <li>Meningkatkan pemahaman dan penerapan ilmu pengetahuan dan teknologi.</li>
            <li>Memberikan bekal keterampilan bernalar kritis dan literasi.</li>
            <li>Mengembangkan kreativitas dan inovasi.</li>
            <li>Menumbuhkan karakter empati dan gotong royong.</li>
          </ol>
        </div>
      </div>

      <!-- Tujuan -->
      <div class="col-lg-4 col-md-12">
        <div class="card-visi animate">
          <h4>Tujuan</h4>
          <ol>
            <li>Mewujudkan peserta didik yang unggul, beriman, dan bertakwa.</li>
            <li>Merealisasikan pembelajaran bermutu dengan pemanfaatan teknologi informasi.</li>
            <li>Mewujudkan peserta didik yang kritis, kreatif, adaptif, dan mampu berkolaborasi.</li>
            <li>Menanamkan nilai-nilai karakter dan akhlak mulia.</li>
            <li>Mengembangkan potensi diri sesuai bakat dan minat peserta didik.</li>
            <li>Mewujudkan tata kelola manajemen sekolah yang profesional.</li>
            <li>Memberikan pelayanan pendidikan yang bermutu sesuai standar nasional.</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- CSS --}}
<style>
/* Section */
.visi-misi-section {
  background: linear-gradient(135deg, #fdfdfd, #f3f3f3);
  padding: 80px 0;
}

.section-title {
  font-size: 2.2rem;
  color: #222;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;       /* pastiin selalu center */
  margin-bottom: 30px;
  position: relative;
}

.section-title::after {
  content: "";
  display: block;
  width: 80px;              /* garis kecil biar elegan */
  height: 3px;
  background: #800000;      /* warna maroon */
  margin: 12px auto 0;      /* auto biar selalu di tengah */
  border-radius: 5px;
}


/* Card */
.card-visi {
  background: rgba(255, 255, 255, 0.75);
  backdrop-filter: blur(12px);
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
  transition: all 0.35s ease;
  height: 100%;
}

.card-visi:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 35px rgba(128, 0, 0, 0.25);
}

/* Subjudul */
.card-visi h4 {
  font-weight: 700;
  color: #800000;
  margin-bottom: 18px;
  font-size: 1.3rem;
  border-left: 5px solid #800000;
  padding-left: 12px;
}

/* Text */
.card-visi p, 
.card-visi li {
  color: #444;
  line-height: 1.7;
}

/* List */
.card-visi ol {
  padding-left: 20px;
  margin: 0;
}

/* Animasi Fade Up */
.animate {
  opacity: 0;
  transform: translateY(40px);
  animation: fadeUp 0.8s forwards;
}

.animate:nth-child(1) { animation-delay: 0.2s; }
.animate:nth-child(2) { animation-delay: 0.4s; }
.animate:nth-child(3) { animation-delay: 0.6s; }

@keyframes fadeUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>

@endsection
