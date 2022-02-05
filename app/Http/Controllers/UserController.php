<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::get();
        return view('user.index',compact('users'));
    }
    public function store(Request $request)
    {
    	$validatedData = $request->validate([
            'name'       => 'required|min:1|max:256',
            'email'      => 'required|email|max:256|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = \Hash::make($request->input('password'));
        $user->save();

       	return redirect()->back()->with('success','User added successfully!');
    }
}
