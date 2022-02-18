<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Articulo;

class LoginController extends Controller
{
    //

    public function autentificar(Request $request){

        $datos = $request->validate([
            "email"=>["required"],
            "password"=>["required"]
        ]);

        if(Auth::attempt($datos)){

            $usuario = Auth::user();
            $articulos = Articulo::all();
            
            return redirect()->route('articulos.index')->with([
                "usuario" => $usuario,
                "articulos" => $articulos
            ]);

        }

        $error = "Login Incorrecto";

        return redirect()->route('/')->with( ['error' => $error] );

    }
}
