<?php

namespace App\Helpers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartHelper
{

    public static function countCart(){
        return  $countElementsCart = Cart::where('user_id',Auth::id())->count();
    }

}
