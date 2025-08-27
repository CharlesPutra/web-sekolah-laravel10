<?php

namespace App\Http\Controllers;

use App\Models\KepalaSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KepalaSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = KepalaSekolah::paginate(6);
        return view('kepalasekolah_admin.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kepalasekolah_admin.ceate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'nama' => 'required',
            'ucapan' => 'required'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        }

       KepalaSekolah::create([
            'image' => $imagePath,
            'nama' => $request->nama,
            'ucapan' => $request->ucapan,
        ]);
        return redirect()->route('kepalasekolah.index')->with('success', 'Data jurusan berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = KepalaSekolah::findOrFail($id);
        return view('kepalasekolah_admin.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = KepalaSekolah::findOrFail($id);
        return view('kepalasekolah_admin.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'nama' => 'required',
            'ucapan' => 'required',
        ]);

      $kepalasekolah = KepalaSekolah::findOrFail($id);

        if ($kepalasekolah->image && Storage::disk('public')->exists($kepalasekolah->image)) {
            Storage::disk('public')->delete($kepalasekolah->image);
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
           $kepalasekolah->image = $imagePath;
        }

       $kepalasekolah->update([
            'nama' => $request->nama,
            'ucapan' => $request->ucapan,
        ]);

        return redirect()->route('kepalasekolah.index')->with('warning', 'Data jurusan berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $hapus =KepalaSekolah::findOrFail($id);

        if ($hapus->image && Storage::disk('public')->exists($hapus->image)) {
            Storage::disk('public')->delete($hapus->image);
        }

        $hapus->delete();

        return redirect()->route('kepalasekolah.index')->with('danger', 'Data prestasi berhasil di hapus');
    }
}
