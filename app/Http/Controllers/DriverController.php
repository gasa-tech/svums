<?php

namespace App\Http\Controllers;

use App\Models\{Driver, User};
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::with('user')->get();
        return view('drivers.index',compact('drivers'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'       => 'required|min:1|max:256',
            'email'      => 'required|email|max:256|unique:users',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make('password');
        $user->save();

        $driver = new Driver;
        $driver->user_id = $user->id;
        $driver->birthdate = $request->birthdate;
        $driver->contact_number = $request->contact_number;
        $driver->emergency_contact_person = $request->emergency_contact_person;
        $driver->emergency_contact_person_relationship = $request->emergency_contact_person_relationship;
        $driver->emergency_contact_person_contact_number = $request->emergency_contact_person_contact_number;
        $driver->save();

        return redirect()->back()->with('success','Driver added successfully!');
    }

    public function show(Driver $driver)
    {
        return view('drivers._show',compact('driver'));
    }

    public function edit(Driver $driver)
    {
        //
    }

    public function update(Request $request, Driver $driver)
    {
        //
    }

    public function destroy(Driver $driver)
    {
        //
    }
}
