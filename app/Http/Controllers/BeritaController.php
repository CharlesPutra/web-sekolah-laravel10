<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Berita::paginate(6);
        return view('berita admin.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,png|max:2048',
            'judul_berita' => 'required',
            'deskripsi_singkat',
            'deskripsi' => 'required',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        }

        Berita::create([
            'image' => $imagePath,
            'judul_berita' => $request->judul_berita,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('berita.index')->with('success', 'Data berita berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Berita::findOrFail($id);
        return view('berita admin.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,png|max:2048',
            'judul_berita' => 'required',
            'deskripsi_singkat',
            'deskripsi' => 'required',
        ]);

        $berita = Berita::findOrFail($id);

        if ($berita->image && Storage::disk('public')->exists($berita->image)) {
            Storage::disk('public')->delete($berita->image);
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            $berita->image = $imagePath;
        }

        $berita->update([
            'judul_berita' => $request->judul_berita,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('berita.index')->with('warning', 'Data berita berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = Berita::findOrFail($id);

        if ($hapus->image && Storage::disk('public')->exists($hapus->image)) {
            Storage::disk('public')->delete($hapus->image);
        }

        $hapus->delete();

        return redirect()->route('berita.index')->with('danger', 'Data prestasi berhasil di hapus');
    }
}
