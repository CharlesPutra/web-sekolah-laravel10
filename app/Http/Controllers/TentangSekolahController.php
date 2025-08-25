<?php

namespace App\Http\Controllers;

use App\Models\TentangSekolah;
use Illuminate\Http\Request;

class TentangSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = TentangSekolah::paginate(6);
        return view('tentangsekolah_admin.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tentangsekolah_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['tentang_sekolah' => 'required']);
        TentangSekolah::create($request->all());
        return redirect()->route('tentangsekolah.index')->with('success', 'Data Berhasil ditambahkan');
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
        $edit = TentangSekolah::findOrFail($id);
        return view('tentangsekolah_admin.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = TentangSekolah::findOrFail($id);
        $request->validate(['tentang_sekolah' => 'required']);
        $update->update($request->all());
        return redirect()->route('tentangsekolah.index')->with('warning', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = TentangSekolah::findOrFail($id);
        $hapus->delete();
        return redirect()->route('tentangsekolah.index')->with('danger','Data berhasil dihapus');
    }
}
