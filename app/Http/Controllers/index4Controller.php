<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index4;
class index4Controller extends Controller
{
    public function index()
    {
        $url =url('/index4');
        $title="Register Information";
        $register=New Index4();  
        $data=compact('url','title','register');    
        return view('index4')->with($data);
    }

    public function register(Request $request)
    {
        $request->validate(
            [
             "name" => "required",
             "city" => "required",
             "email" => "required|email",
             "country" => "required",
             "password" => "required",
             
            ]
            );
           
            $register = new Index4;
            $register->name=$request['name'];
            $register->city=$request['city'];
            $register->email=$request['email'];
            $register->country=$request['country'];
            $register->password=$request['password'];
            $register -> save();
            echo "<pre>";
            print_r($request->all());
            return redirect ('/index4/view');


    }
    public function view()
    {
    $registers = Index4::all();
    $data=compact('registers');
    return view('register_view')->with($data);
    }



    public function edit($id)
    {
        $register = Index4::find($id);
        if (is_null($register)){
            return redirect ('index4/view');
           }

           else{
            $url =url('/index4/update')."/".$id;
        $title="Update Information";
       
        $data=compact('url','title','register');    
        return view('editform')->with($data);
           }
    }

    public function update($id,Request $request)
    {
            $register = Index4::find($id);
            $register->name=$request['name'];
            $register->city=$request['city'];
            $register->email=$request['email'];
            $register->country=$request['country'];
            $register->password=$request['password'];
        $register ->save();
        return redirect ('/index4/view');
    }

    public function delete($id)
    {
       $register = Index4::find($id);
       if (!is_null($register)){
        $register->delete();
       }
       return redirect('/index4/view');
    }

public function create()
{
    $url=url('/update');
    $data =compact('url');
    return view('editform')->with($data);

}


}
