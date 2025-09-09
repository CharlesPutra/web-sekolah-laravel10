<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Category::orderBy('category', 'asc')->paginate(6);
        return view('category_admin.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required'
        ]);
        Category::create($request->all());
        return redirect()->route('category.index')->with('success', 'category berhasil ditambahkan');
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
        $edit = Category::findOrFail($id);
        return view('category_admin.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Category::findOrFail($id);
        $request->validate([
            'category' => 'required'
        ]);
        $update->update($request->all());
        return redirect()->route('category.index')->with('warning', 'category berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy = Category::findOrFail($id);
        $destroy->delete();
        return redirect()->route('category.index')->with('danger', 'category berhasil dihapus');
    }
}
