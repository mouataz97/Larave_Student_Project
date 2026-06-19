<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request)
{
    $students = Student::where(function ($q) use ($request) {
        if ($request->search) {
            $q->where('name', 'like', "%{$request->search}%")
              ->orWhere('email', 'like', "%{$request->search}%");
        }
    });

    $students = $students->paginate(10);

    return view('students.index', compact('students'));
}

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:students,email'
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('/students')->with('success', 'Student added successfully');
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
        return redirect('/students')->with('success', 'Student is updated');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/students')->with('success', 'Student has been deleted');
    }
}