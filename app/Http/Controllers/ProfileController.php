<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function keterampilan()
    {
        $datas = Jurusan::all();
        return view('profil', compact('datas'));
    }

    public function deskripsi(string $id)
    {
        $show = Jurusan::findOrFail($id);
        // dd($id, $show); // cek dulu masuk nggak  
        return view('deskripsi_jurusan', compact('show'));
    }
}
