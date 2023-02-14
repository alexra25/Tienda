<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Juego;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request){

        $carrito = Cart::where('user_id',Auth::id())->get();
        $precioTotal= 0 ;
        foreach($carrito as $elemCarrito){
            $precioTotal += $elemCarrito->juego->precio-($elemCarrito->juego->precio*($elemCarrito->juego->descuento/100));
        }
        $precioTotal = number_format($precioTotal,2);

        return view('cart.index',compact('carrito','precioTotal'));
    }

    public function addCart(Request $request){
            Cart::create([
                'juego_id'=>$request->juegoId,
                'user_id'=>Auth::id(),
            ]);
            $countElementsCart = Cart::where('user_id',Auth::id())->count();
            return response()->json(['status'=>'ok','count'=>$countElementsCart],200);
    }

    public function pagar(){

        $precioTotal= 0 ;
        $elementsCart = Cart::where('user_id',Auth::id())->get();
        if(count($elementsCart)==0){
            return redirect()->back();
        }
        foreach($elementsCart as $element){
            $juego = Juego::find($element->juego->id);
            $precioTotal += $element->juego->precio-($element->juego->precio*($element->juego->descuento/100));

            if($juego->stock>0){
                $juego->stock =  $juego->stock - 1;
                $juego->save();
                $element->delete();
            }
        }
        Pedido::create([
            'user_id'=>Auth::id(),
            'precioTotal'=>$precioTotal
        ]);

        return redirect()->route('dashboard');
    }
}
