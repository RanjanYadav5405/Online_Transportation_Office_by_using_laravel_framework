<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index1Controller extends Controller
{
    public function index()
    {
        return view('index1');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
             "number" => "required",
             "date" => "required",

            ]
            );
             echo "<pre>";
             print_r($request->all());
    }
}

