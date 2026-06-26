<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'role'=>'required'
        ]);


        User::create([

            'name'=>$request->name,

            'email'=>$request->email,

            'password'=>Hash::make($request->password),

            'role'=>$request->role

        ]);


        return redirect('/users');

    }

    public function destroy($id)
    {

        User::findOrFail($id)->delete();

        return redirect('/users');

    }

}