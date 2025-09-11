<?php

namespace App\Http\Controllers;

use App\Models\Infrastruktur;
use App\Models\Jurusan;
use App\Models\KepalaSekolah;
use App\Models\TentangSekolah;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function keterampilan()
    {
        $datas = Jurusan::all();
        $tentang = TentangSekolah::orderBy('created_at', 'desc')->first();
        $kepala = KepalaSekolah::orderBy('created_at', 'desc')->first();
        $infra = Infrastruktur::orderBy('created_at', 'desc')->first();
        return view('profil', compact('datas','tentang','kepala','infra'));
    }

    public function deskripsi(string $id)
    {
        $show = Jurusan::with(['category','prestasi','alumni'])->findOrFail($id);
        // dd($id, $show); // cek dulu masuk nggak  
        return view('deskripsi_jurusan', compact('show'));
    }
}
