<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use App\Models\Shape;
use App\Models\Material;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $query = Product::with('category','size','shape','material');

        if ($request->search) {
            $query->where('product_name', 'like', '%' . $request->search . '%');
        }

        $products = $query->orderBy('created_at','desc')->paginate(10);

        return view('admin.products.index', compact('products'));
    }


    public function create()
    {
        return view('admin.products.create', [
            'categories' => Category::all(),
            'sizes' => Size::all(),
            'shapes' => Shape::all(),
            'materials' => Material::all(),
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required',
            'size_id' => 'required',
            'shape_id' => 'required',
            'material_id' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string', // ✅ FIXED
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/products'), $imageName);
        }

        Product::create([
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'size_id' => $request->size_id,
            'shape_id' => $request->shape_id,
            'material_id' => $request->material_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imageName,
            'description' => $request->description, // ✅ ADDED
            'status' => 1,
        ]);

        return redirect()->route('admin.products.index')
            ->with('success', 'Product added successfully');
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.products.edit', [
            'product' => $product,
            'categories' => Category::all(),
            'sizes' => Size::all(),
            'shapes' => Shape::all(),
            'materials' => Material::all(),
        
        ]);
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required',
            'size_id' => 'required',
            'shape_id' => 'required',
            'material_id' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'description' => 'nullable|string', // ✅ ADDED
        ]);

        if ($request->hasFile('image')) {

            if ($product->image && file_exists(public_path('uploads/products/'.$product->image))) {
                unlink(public_path('uploads/products/'.$product->image));
            }

            $file = $request->file('image');
            $imageName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/products'), $imageName);

            $product->image = $imageName;
        }

        $product->update([
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'size_id' => $request->size_id,
            'shape_id' => $request->shape_id,
            'material_id' => $request->material_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description, // ✅ ADDED
        ]);

        return redirect()->route('admin.products.index')
            ->with('success', 'Product updated successfully');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image && file_exists(public_path('uploads/products/'.$product->image))) {
            unlink(public_path('uploads/products/'.$product->image));
        }

        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Product deleted successfully');
    }
}