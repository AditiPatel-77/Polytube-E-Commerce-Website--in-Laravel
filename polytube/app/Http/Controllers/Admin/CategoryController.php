<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Display Categories
    |--------------------------------------------------------------------------
    */
    public function index(Request $request)
    {
        $search = $request->search;

        $categories = Category::when($search, function ($query) use ($search) {
            $query->where('category_name', 'like', "%$search%");
        })->latest()->get();

        return view('admin.categories.index', compact('categories'));
    }

    /*
    |--------------------------------------------------------------------------
    | Show Create Form
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        return view('admin.categories.create');
    }

    /*
    |--------------------------------------------------------------------------
    | Store Category
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'category_name'  => 'required|string|max:255',
            'category_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;

        // Upload Image
        if ($request->hasFile('category_image')) {

            $image = $request->file('category_image');
            $imageName = time() . '.' . $image->extension();

            $image->move(public_path('uploads/categories'), $imageName);

            $category->category_image = $imageName;
        }

        $category->save();

        return redirect()->route('admin.categories.index')
                         ->with('success', 'Category added successfully.');
    }

    /*
    |--------------------------------------------------------------------------
    | Show Edit Form
    |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /*
    |--------------------------------------------------------------------------
    | Update Category
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name'  => 'required|string|max:255',
            'category_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $category = Category::findOrFail($id);
        $category->category_name = $request->category_name;

        // If new image uploaded
        if ($request->hasFile('category_image')) {

            // Delete old image
            if ($category->category_image &&
                file_exists(public_path('uploads/categories/' . $category->category_image))) {

                unlink(public_path('uploads/categories/' . $category->category_image));
            }

            // Upload new image
            $image = $request->file('category_image');
            $imageName = time() . '.' . $image->extension();

            $image->move(public_path('uploads/categories'), $imageName);

            $category->category_image = $imageName;
        }

        $category->save();

        return redirect()->route('admin.categories.index')
                         ->with('success', 'Category updated successfully.');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete Category
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        // Delete image file
        if ($category->category_image &&
            file_exists(public_path('uploads/categories/' . $category->category_image))) {

            unlink(public_path('uploads/categories/' . $category->category_image));
        }

        $category->delete();

        return redirect()->route('admin.categories.index')
                         ->with('success', 'Category deleted successfully.');
    }
}