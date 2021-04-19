<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index(){


        $vehicles = Vehicle::all();

        error_log ($vehicles);
        return view('products.index',['vehicles'=> $vehicles]);

    }
}
