<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{

    public function cart()
    {
        $carts = Cart::all();

        $total = 0;
        foreach($carts as $cart){
            $total += $cart->quantity * $cart->product->price;
        }

        return view('cart')->with('carts', Cart::all())->with('total', $total);
    }

    public function addtocart($id)
    {
        $cart = Cart::where('product_id', $id)->first();
        if($cart != NULL ){
            $cart->quantity++;
        }else{
            $cart = new Cart;
            $cart->quantity = 1;
            $cart->product_id = $id;
        }

        $cart->save();
        
        return redirect()->route('index');

    }

    public function emptycart(){
        Cart::truncate();
        return redirect()->route('index');
    }
}
