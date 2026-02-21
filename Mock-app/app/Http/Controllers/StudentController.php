<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\_student;
class StudentController extends Controller
{
    public function viewForm()
    {
        return view('form');
    }
    public function addStudent(Request $request)
    {
        //dd($request->all());
        _student::create($request->all());
        ;
    }
}
