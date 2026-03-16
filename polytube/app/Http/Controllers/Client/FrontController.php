<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Team;
use App\Models\Category;
use App\Models\Carousel;

class FrontController extends Controller
{
    public function index()
    {
        // $carousels = Carousel::all();
        $products = Product::latest()->limit(6)->get();
        $categories = Category::latest()->get();
        $testimonials = Testimonial::latest()->get();
        $teams = Team::latest()->get();

        return view('client.index', compact(
            'products',
            'categories',
            'testimonials',
            'teams'
        ));
    }

    public function products()
    {
        $products = Product::latest()->get();
        return view('client.products', compact('products'));
    }

    public function about()
    {
        return view('client.about');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function productDetail($id)
{
    $product = Product::with('category','size','shape','material')->findOrFail($id);

    return view('client.product_detail', compact('product'));
}


    // ✅ FIXED CATEGORY PRODUCTS METHOD
    public function categoryProducts($id)
    {
        $category = Category::findOrFail($id);

        $products = Product::where('category_id', $id)->get();

        return view('client.category_products', compact('category', 'products'));
    }
}