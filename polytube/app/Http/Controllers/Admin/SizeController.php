<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        $sizes = Size::latest()->get();
        return view('admin.sizes.index', compact('sizes'));
    }

    public function create()
    {
        return view('admin.sizes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Size::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.sizes.index')
            ->with('success','Size added');
    }

    public function edit(Size $size)
    {
        return view('admin.sizes.edit', compact('size'));
    }

    public function update(Request $request, Size $size)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $size->update([
            'name' => $request->name
        ]);

        return redirect()->route('admin.sizes.index')
            ->with('success','Size updated');
    }

    public function destroy(Size $size)
    {
        $size->delete();
        return back()->with('success','Deleted');
    }
}
