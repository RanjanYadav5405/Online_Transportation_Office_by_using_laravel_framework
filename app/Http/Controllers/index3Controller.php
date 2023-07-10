<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index3Controller extends Controller
{
    public function index()
    {
     return view('index3');
    }
 
    public function register(Request $request)
    {
 
     $request->validate( 
         [
          
          'email'=> 'required|email',
          'password'=> 'required'
           
          
         ]
     );
     echo  "<pre>"; 
     print_r($request->all()); 
    }
}
