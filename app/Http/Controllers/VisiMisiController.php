<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = VisiMisi::paginate(6);
        return view('visimisi_admin.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('visimisi_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required',
        ]);

        VisiMisi::create($request->all());
        return redirect()->route('visimisi.index')->with('success',);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = VisiMisi::findOrFail($id);
        return view('visimisi_admin.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = VisiMisi::findOrFail($id);
        return view('visimisi_admin.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = VisiMisi::findOrFail($id);
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required',
        ]);
        $update->update($request->all());
        return redirect()->route('visimisi.index')->with('warning', 'Data jurusan berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = VisiMisi::findOrFail($id);

        $hapus->delete();

        return redirect()->route('visimisi.index')->with('danger', 'Data prestasi berhasil di hapus');
    }
}
