<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Ekstrakulikuler;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function kejuaraan() {
        $datas = Prestasi::all();
        $ekstra = Ekstrakulikuler::all();
        $berita = Berita::orderBy('created_at', 'desc')->take(3)->get();
        return view('home',compact('datas','berita','ekstra'));
    }
}
