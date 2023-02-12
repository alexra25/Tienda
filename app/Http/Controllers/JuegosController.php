<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JuegosController extends Controller
{
    public function juegosFisicosIndex(){
        $juegos = Juego::where('juego_digital',0)->get();
        $juegosF = true;

        return view('juegos.juegosCategoria',compact('juegos','juegosF'));

    }
    public function juegosDigitalesIndex(){
        $juegosF = false;
        $juegos = Juego::where('juego_digital',1)->get();
        return view('juegos.juegosCategoria',compact('juegos','juegosF'));
    }
    public function juegoDetalle($id){
        $juego = Juego::find($id);
        if(!$juego){
            return redirect()->back();
        }

        return view('juegos.juegosDetalle',compact('juego'));
    }
}
