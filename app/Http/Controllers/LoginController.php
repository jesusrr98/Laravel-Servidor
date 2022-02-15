<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function autentificar(Request $request){

        $datos = $request->validate([
            "email"=>["required"],
            "password"=>["required"]
        ]);

        if(Auth::attempt($datos)){
            
            return redirect("articulos");

        }

        $error = "Login Incorrecto";

        return view("login")->with(compact("error"));

    }
}
