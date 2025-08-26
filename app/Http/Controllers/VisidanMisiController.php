<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;


class VisidanMisiController extends Controller
{
    public function VisiMisiuser()
    {

        // $visimisi = VisiMisi::orderBy('created_at', 'desc')->take(1)->get();
        $visi = VisiMisi::orderBy('created_at', 'desc')->first();
        // dd($visimisi);
        return view('visiMisi',compact('visi'));
    }
}
