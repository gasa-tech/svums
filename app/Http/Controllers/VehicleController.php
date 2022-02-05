<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function index()
    {
        $vehicles = Vehicle::get();
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
        $vehicle = new Vehicle;
        $vehicle->brand = $request->brand;
        $vehicle->model = $request->model;
        $vehicle->type = $request->type;
        $vehicle->color = $request->color;
        $vehicle->plate_number = $request->plate_number;
        $vehicle->cr = $request->cr;
        $vehicle->odometer = $request->odometer;
        $vehicle->save();

        return redirect()->back()->with('success','Vehicle added successfully!');
    }

    public function show(Vehicle $vehicle)
    {
        
    }

    public function edit(Vehicle $vehicle)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles._update',compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
