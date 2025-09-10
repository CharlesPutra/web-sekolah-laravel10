<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Jurusan::with('category')->paginate(6);
        return view('jurusan_admin.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('jurusan_admin.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'nama_jurusan' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'nama_kaprog' => 'required',
            'nip' => 'required',
            'phone' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'alumfot' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'namaalum' => 'required',
            'desalum' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        }
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('image', 'public');
        }

        $alumFot = null;
        if ($request->hasFile('alumfot')) {
            $alumFot = $request->file('alumfot')->store('image', 'public');
        }

        Jurusan::create([
            'image' => $imagePath,
            'nama_jurusan' => $request->nama_jurusan,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
            'nama_kaprog' => $request->nama_kaprog,
            'nip' => $request->nip,
            'phone' => $request->phone,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'alumfot' => $alumFot,
            'namaalum' => $request->namaalum,
            'desalum' => $request->desalum,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('keterampilan.index')->with('success',);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Jurusan::with('category')->findOrFail($id);
        return view('jurusan_admin.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Jurusan::findOrFail($id);
        $categories = Category::all();
        return view('jurusan_admin.edit', compact('edit','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'nama_jurusan' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'nama_kaprog' => 'required',
            'nip' => 'required',
            'phone' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'alumfot' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'namaalum' => 'required',
            'desalum' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $jurusan = Jurusan::findOrFail($id);

        if ($jurusan->image && Storage::disk('public')->exists($jurusan->image)) {
            Storage::disk('public')->delete($jurusan->image);
        }
        if ($jurusan->foto && Storage::disk('public')->exists($jurusan->foto)) {
            Storage::disk('public')->delete($jurusan->foto);
        }
        if ($jurusan->alumfot && Storage::disk('public')->exists($jurusan->alumfot)) {
            Storage::disk('public')->delete($jurusan->alumfot);
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            $jurusan->image = $imagePath;
        }
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('image', 'public');
            $jurusan->foto = $fotoPath;
        }

        if ($request->hasFile('alumfot')) {
            $alumFot = $request->file('alumfot')->store('image', 'public');
        }

        $jurusan->update([
            'nama_jurusan' => $request->nama_jurusan,
            'deskripsi' => $request->deskripsi,
            'nama_kaprog' => $request->nama_kaprog,
            'nip' => $request->nip,
            'phone' => $request->phone,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'namaalum' => $request->namaalum,
            'desalum' => $request->desalum,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('keterampilan.index')->with('warning', 'Data jurusan berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = Jurusan::findOrFail($id);

        if ($hapus->image && Storage::disk('public')->exists($hapus->image)) {
            Storage::disk('public')->delete($hapus->image);
        }
        if ($hapus->foto && Storage::disk('public')->exists($hapus->foto)) {
            Storage::disk('public')->delete($hapus->foto);
        }

        if ($hapus->alumfot && Storage::disk('public')->exists($hapus->alumfot)) {
            Storage::disk('public')->delete($hapus->alumfot);
        }

        $hapus->delete();

        return redirect()->route('keterampilan.index')->with('danger', 'Data prestasi berhasil di hapus');
    }
}
