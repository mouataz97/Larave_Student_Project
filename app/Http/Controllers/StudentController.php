<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
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

    public function edit($id){
        $student= Student::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student= Student::findOrFail($id);
        
        $student->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('/students');
    }

    public function delete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/students');
    }
}