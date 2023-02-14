<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JuegosController extends Controller
{
    public function juegosFisicosIndex(){
        $juegos = Juego::where('juego_digital',0)->orderBy('descuento','desc')->get();
        $juegosF = true;

        return view('juegos.juegosCategoria',compact('juegos','juegosF'));

    }
    public function juegosDigitalesIndex(){
        $juegosF = false;
        $juegos = Juego::where('juego_digital',1)->orderBy('descuento','desc')->get();
        return view('juegos.juegosCategoria',compact('juegos','juegosF'));
    }
    public function juegoDetalle($id){
        $juego = Juego::find($id);
        if(!$juego){
            return redirect()->back();
        }

        return view('juegos.juegosDetalle',compact('juego'));
    }
    public function juegoBuscar(Request $request){
        $juegosF = false;
        if($request->juegosF==1){
            $juegosF = true;
        }
        $juegoDigital = $request->juegosF==1 ? 0 : 1;
        $juegos = Juego::where('titulo','like','%'.$request->patronbusqueda.'%')
            ->orWhere('genero','like','%'.$request->patronbusqueda.'%')
            ->orWhere('edad_recomendada','like','%'.$request->patronbusqueda.'%')
            ->orderBy('descuento','desc')
            ->get();

        return view('juegos.juegosCategoria',compact('juegos','juegosF'));



    }
}
