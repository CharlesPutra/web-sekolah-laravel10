<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postingan() {
        $datas = Berita::paginate(6);
        return view('postingan',compact('datas'));
    }

    public function despost($id) {
        $show = Berita::findOrFail($id);
        return view('show',compact('show'));
    }
}
