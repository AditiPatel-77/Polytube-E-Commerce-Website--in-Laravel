<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function display()
    // {
    //    return view('student',['name1'=>'Ankita','name2'=>'Viyaan','name3'=>'Anaya']);
    // } 

    // public function display($id)
    // {
    //     return view('student1')->with('id',$id);
    // }

    // public function display($name)
    // {
    //     return view('/student1', compact('name'));
    // }

    public function display($id,$name,$password)
    {
        return view('student2', compact('id','name','password'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
