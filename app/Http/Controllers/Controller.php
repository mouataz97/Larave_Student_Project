<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;



abstract class Controller
{
    public function update(Request $request, $id)
    {
        $student= Student::findOrFail($id);
        
        $student->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('/students');
    }
}
