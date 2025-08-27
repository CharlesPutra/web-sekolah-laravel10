<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Ekstrakulikuler::paginate(6);
        return view('ekstra_admin.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ekstra_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'name' => 'required',
            'nama_panjang' => 'required'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        }

        Ekstrakulikuler::create([
            'image' => $imagePath,
            'name' => $request->name,
            'nama_panjang' => $request->nama_panjang,
        ]);
        return redirect()->route('ekstrakulikuler.index')->with('success', 'Data jurusan berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Ekstrakulikuler::findOrFail($id);
        return view('ekstra_admin.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Ekstrakulikuler::findOrFail($id);
        return view('ekstra_admin.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'name' => 'required',
            'nama_panjang' => 'required',
        ]);

       $ekstra = Ekstrakulikuler::findOrFail($id);

        if ($ekstra->image && Storage::disk('public')->exists($ekstra->image)) {
            Storage::disk('public')->delete($ekstra->image);
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            $ekstra->image = $imagePath;
        }

        $ekstra->update([
            'name' => $request->name,
            'nama_panjang' => $request->nama_panjang,
        ]);

        return redirect()->route('ekstrakulikuler.index')->with('warning', 'Data jurusan berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $hapus = Ekstrakulikuler::findOrFail($id);

        if ($hapus->image && Storage::disk('public')->exists($hapus->image)) {
            Storage::disk('public')->delete($hapus->image);
        }

        $hapus->delete();

        return redirect()->route('ekstrakulikuler.index')->with('danger', 'Data prestasi berhasil di hapus');
    }
}
