<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shape;
use Illuminate\Http\Request;

class ShapeController extends Controller
{
    public function index()
    {
        $shapes = Shape::latest()->get();
        return view('admin.shapes.index', compact('shapes'));
    }

    public function create()
    {
        return view('admin.shapes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Shape::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.shapes.index')
            ->with('success', 'Shape added successfully');
    }

    public function edit(Shape $shape)
    {
        return view('admin.shapes.edit', compact('shape'));
    }

    public function update(Request $request, Shape $shape)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $shape->update([
            'name' => $request->name
        ]);

        return redirect()->route('admin.shapes.index')
            ->with('success', 'Shape updated successfully');
    }

    public function destroy(Shape $shape)
    {
        $shape->delete();
        return back()->with('success', 'Shape deleted');
    }
}
