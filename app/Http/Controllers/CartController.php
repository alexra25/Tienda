<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addCart(Request $request){
            Cart::create([
                'juego_id'=>$request->juegoId,
                'user_id'=>Auth::id(),
            ]);
            return response()->json(['status'=>'ok'],200);
    }
}
