<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Alumni::with('category')->paginate(6);
        return view('alumni_admin.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('alumni_admin.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'fotoalum' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'namaalum' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'deskripsialum' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'angkatan' => 'required|string|max:50',
        ]);

        $fotoAlum = null;
        if ($request->hasFile('fotoalum')) {
            $fotoAlum = $request->file('fotoalum')->store('image', 'public');
        }

        Alumni::create([
            'fotoalum' => $fotoAlum,
            'namaalum' => $request->namaalum,
            'category_id' => $request->category_id,
            'deskripsialum' => $request->deskripsialum,
            'rating' => $request->rating,
            'angkatan' => $request->angkatan,
        ]);
        return redirect()->route('alumni.index')->with('success', 'data alumni berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Alumni::findOrFail($id);
        return view('alumni_admin.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Alumni::findOrFail($id);
        $categories = Category::all();
        return view('alumni_admin.edit', compact('edit', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumni = Alumni::findOrFail($id);
        $request->validate([
            'fotoalum' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'namaalum' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'deskripsialum' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'angkatan' => 'required|string|max:50',
        ]);

        if ($alumni->fotoalum && Storage::disk('public')->exists($alumni->fotoalum)) {
            Storage::disk('public')->delete($alumni->fotoalum);
        }

        if ($request->hasFile('fotoalum')) {
            $fotoAlum = $request->file('fotoalum')->store('image', 'public');
            $alumni->fotoalum = $fotoAlum;
        }

        $alumni->update([
            'namaalum' => $request->namaalum,
            'category_id' => $request->category_id,
            'deskripsialum' => $request->deskripsialum,
            'rating' => $request->rating,
            'angkatan' => $request->angkatan,
        ]);
        return redirect()->route('alumni.index')->with('warning', 'data alumni berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Alumni::findOrfail($id);
        if ($delete->fotoalum && Storage::disk('public')->exists($delete->fotoalum)) {
            Storage::disk('public')->delete($delete->fotoalum);
        }
        $delete->delete();
        return redirect()->route('alumni.index')->with('danger', 'data alumni berhasil dihapus');
    }
}
