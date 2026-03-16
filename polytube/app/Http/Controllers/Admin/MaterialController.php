<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::latest()->get();
        return view('admin.materials.index', compact('materials'));
    }

    public function create()
    {
        return view('admin.materials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Material::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.materials.index')
            ->with('success', 'Material added successfully');
    }

    public function edit(Material $material)
    {
        return view('admin.materials.edit', compact('material'));
    }

    public function update(Request $request, Material $material)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $material->update([
            'name' => $request->name
        ]);

        return redirect()->route('admin.materials.index')
            ->with('success', 'Material updated successfully');
    }

    public function destroy(Material $material)
    {
        $material->delete();
        return back()->with('success', 'Material deleted');
    }
}
