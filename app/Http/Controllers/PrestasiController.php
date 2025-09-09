<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Prestasi::with('category')->paginate(6);
        return view('prestasi admin.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('prestasi admin.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,png|max:2048',
            'category_id' => 'required|exists:categories,id',
            'juara' => 'required',
            'deskripsi' => 'required',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        }

        Prestasi::create([
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'juara' => $request->juara,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('prestasi.index')->with('success', 'Data prestasi berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Prestasi::findOrFail($id);
        return view('prestasi admin.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Prestasi::findOrFail($id);
        $categories = Category::all();
        return view('prestasi admin.edit', compact('edit','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,png|max:2048',
            'category_id' => 'required|exists:categories,id',
            'juara' => 'required',
            'deskripsi' => 'required',
        ]);

        $prestasi = Prestasi::findOrFail($id);

         if ($prestasi->image && Storage::disk('public')->exists($prestasi->image)) {
            Storage::disk('public')->delete($prestasi->image);
        }

          if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            $prestasi->image = $imagePath;
        }
        
        $prestasi->update([
            'category_id' => $request->category_id,
            'juara' => $request->juara,
            'deskripsi' => $request->deskripsi,
        ]);
        
        return redirect()->route('prestasi.index')->with('warning','Data prestasi berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = Prestasi::findOrFail($id);

         // Hapus gambar dari storage jika ada
        if ($hapus->image && Storage::disk('public')->exists($hapus->image)) {
            Storage::disk('public')->delete($hapus->image);
        }

        $hapus->delete();

        return redirect()->route('prestasi.index')->with('danger','Data prestasi berhasil di hapus');
    }
}
