<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', []);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:50'
        ]);

        User::create($validatedData);
        // $request->sessio()->flash('success','Registrasi Berhasil, Silahkan Login');
        return redirect('/login')->with('success','Registrasi Berhasil, Silahkan Login');
    }
}
