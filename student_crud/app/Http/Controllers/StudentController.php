<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
            return view('students.index', compact('students'));
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
        //validation
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|min:10|max:15',
        ]);

        // Insert using Eloquent
        Student::create([
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        //return redirect()->back()->with('success', 'Student added successfully');
        return redirect()->route('students.index')
       ->with('success', 'Student added successfully');

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

    $student = Student::findOrFail($id);
    return view('students.edit', compact('student'));
}

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation
    $request->validate([
        'name'  => 'required|string|max:255',
        'email' => 'required|email|unique:students,email,' . $id,
        'phone' => 'required|min:10|max:15',
    ]);

    // Find student
    $student = Student::findOrFail($id);

    // Update data
    $student->update([
        'name'  => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
    ]);

    // Redirect
    return redirect()->route('students.index')
           ->with('success', 'Student updated successfully');
}
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
    $student->delete();

    return redirect()->route('students.index')
           ->with('success', 'Student deleted successfully');
    }
}
