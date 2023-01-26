<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index($id){
        $products = Category::find($id)->products;
        $categories = Category::all();
        return view('category')->with('products', $products)->with('categories', $categories);
    }
}
