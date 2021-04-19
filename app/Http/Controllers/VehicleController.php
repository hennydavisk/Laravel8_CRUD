<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index(){
        $vehicles = Vehicle::all();
        return view('products.index',['vehicles'=> $vehicles]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(){

        $vehicle = new Vehicle;
        $vehicle -> car = request('car');
        $vehicle -> code = request('code');
        $vehicle -> country = request('country');
        $vehicle -> save();

        // error_log($vehicle);
        
        return redirect('/');
    }

    public function show($id){

        $vehicle = Vehicle::findOrFail($id);
        // error_log($vehicle);
        return view('products.show',['vehicle'=>$vehicle]);
    }

    public function update($id){

        $vehicle = Vehicle::findOrFail($id);
        $vehicle -> car = request('car');
        $vehicle -> code = request('code');
        $vehicle -> country = request('country');
        $vehicle -> save();
        // error_log($vehicle);
        return redirect('/');
    }

    
}
