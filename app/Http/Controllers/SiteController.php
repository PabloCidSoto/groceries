<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function shop(){
        $categories = Category::all();
        return view('shop', compact('categories'));
    }

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function product_details($id){
        $product = Product::find($id);
        return view('detailProduct', compact('product'));
    }
}
