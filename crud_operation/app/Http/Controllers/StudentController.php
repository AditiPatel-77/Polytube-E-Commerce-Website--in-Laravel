<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // SHOW DATA
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // SHOW FORM
    public function create()
    {
        return view('students.create');
    }

    // STORE DATA
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'email'  => 'required|email|unique:students',
            'gender' => 'required',
            'skills' => 'required',
            'phone'  => 'required'
        ]);

        Student::create([
            'name'   => $request->name,
            'email'  => $request->email,
            'gender' => $request->gender,
            'skills' => implode(',', $request->skills),
            'phone'  => $request->phone
        ]);

        return redirect()->route('students.index')
                         ->with('success','Student Registered Successfully');
    }

    // EDIT FORM
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'   => 'required',
            'email'  => 'required|email|unique:students,email,' . $id,
            'gender' => 'required',
            'skills' => 'required',
            'phone'  => 'required'
        ]);

        $student = Student::findOrFail($id);
        $student->update([
            'name'   => $request->name,
            'email'  => $request->email,
            'gender' => $request->gender,
            'skills' => implode(',', $request->skills),
            'phone'  => $request->phone
        ]);

        return redirect()->route('students.index')
                         ->with('success','Student Updated Successfully');
    }

    // DELETE
    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
        return redirect()->route('students.index')
                         ->with('success','Student Deleted');
    }
}
