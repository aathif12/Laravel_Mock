<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\_student;
class StudentController extends Controller
{
    public function viewForm()
    {
        $students = _student::all();
        return view('form', compact('students'));
    }
    public function addStudent(Request $request)
    {
        //dd($request->all());
        _student::create($request->all());
        return redirect()->route('form')->with('success', 'Student added successfully!');
    }
}
