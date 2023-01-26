<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        $categories = Category::all();
        $cart = Cart::sum('quantity');
        
        return view('welcome')
            ->with('products', $products)
            ->with('categories', $categories)
            ->with('cart', $cart);
    }

}
