<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return $students;
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        Student::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('/students');
    }
}