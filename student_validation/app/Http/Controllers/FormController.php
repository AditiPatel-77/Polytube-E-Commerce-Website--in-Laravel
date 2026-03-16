<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;   // ✅ IMPORTANT (MODEL IMPORT)

class FormController extends Controller
{
    public function index()
{
    $forms = Form::all();
    return view('index', compact('forms'));
}

    public function create()
    {
        return view('form');   // ✅ must return view
    }

    public function store(Request $request)
    {
        $data = new Form();   // ✅ now Laravel knows the model

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images'), $name);
            $data->path = $name;
        }

        $data->save();   // ✅ must be save()

        return back()->with('success', 'Image uploaded successfully');
    }
}
