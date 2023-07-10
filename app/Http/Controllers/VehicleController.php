<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class VehicleController extends Controller
{
    public function index()
    {
        return view('Vehicle_Registration');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
             "name" => "required",
             "address" => "required",
             "model" => "required",
             "year" => "required",
             "license_plate" => "required",
            
         
            ]
            );
            echo "<pre>";
            print_r($request->all());
    }
}
