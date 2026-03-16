<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    // Show all categories on frontend
    public function index()
    {
        $categories = Category::latest()->get();
        return view('client.index', compact('categories'));
    }

    // Show products of specific category (if needed later)
   public function show($id)
{
    $category = Category::findOrFail($id);
    $products = Product::where('category_id', $id)->get();

    return view('client.category_products', compact('category','products'));
}

}