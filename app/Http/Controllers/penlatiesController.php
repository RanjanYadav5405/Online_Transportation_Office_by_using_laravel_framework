<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class penlatiesController extends Controller
{
    public function index()
    {
        return view('penlaties');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
             "name" => "required",
             "lastname" => "required",
             "email" => "required|email",
             "DD" => "required",
             "MM" => "required",
             "YY" => "required",
             "VehicleNo" => "required",
             "pay" => "required",
             "Cardnumber" => "required",
             "cvc" => "required",
            ]
            );
            echo "<pre>";
            print_r($request->all());
    }
}
