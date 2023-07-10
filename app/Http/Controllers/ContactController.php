<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    function index()
    {
        return view('contact');
    }

    function register(Request $request)
    {
        $request->validate(
            [
             "name" => "required",
             "email" => "required|email",
             "message" => "required"
            ]
            );
            // echo "<pre>";
            // print_r($request->all());
    }
}
