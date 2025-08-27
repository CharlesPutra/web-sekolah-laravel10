<?php

namespace App\Http\Controllers;

use App\Models\Infrastruktur;
use Illuminate\Http\Request;

class InfrastrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Infrastruktur::paginate(6);
        return view('infrastruktur_admin.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('infrastruktur_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'luas_tanah' => 'required',
            'ruang_kelas' => 'required',
            'lab_komputer' => 'required',
            'perpustakaan' => 'required',
        ]);

        Infrastruktur::create($request->all());
        return redirect()->route('infrastruktur.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Infrastruktur::findOrFail($id);
        return view('infrastruktur_admin.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Infrastruktur::findOrFail($id);
        return view('infrastruktur_admin.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Infrastruktur::findOrFail($id);

        $request->validate([
            'luas_tanah' => 'required',
            'ruang_kelas' => 'required',
            'lab_komputer' => 'required',
            'perpustakaan' => 'required',
        ]);
        $update->update($request->all());
        return redirect()->route('infrastruktur.index')->with('warning', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = Infrastruktur::findOrFail($id);
        $hapus->delete();
        return redirect()->route('infrastruktur.index')->with('danger','Data berhasil di hapus');
    }
}
