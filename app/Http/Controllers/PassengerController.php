<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;
class PassengerController extends Controller
{
    public function index()
    {
    	 return view('passenger.index');
    }
}
