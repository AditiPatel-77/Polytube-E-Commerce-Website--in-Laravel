<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
         'name' => 'required|string|max:255',
         'email'   => 'required|email|unique:students,email',
         'phone'   => 'required|digits:10',
         'gender'  => 'required',
        'course'  => 'required',
        'address' => 'required',
        'hobbies' => 'required|array',
        'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $student = new Student();

        $student->name = $request->name;
        $student->email   = $request->email;
        $student->phone   = $request->phone;
        $student->gender  = $request->gender;
        $student->course  = $request->course;
        $student->address = $request->address;
        $student->hobbies = implode(',',$request->hobbies);

        if($request->hasfile('image')){
            $imagename = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/student'),$imagename);
            $student->image = $imagename;
        }
        $student->save();

        return redirect()->route('student.create')->with('sucess','student registration sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
