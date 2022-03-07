<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function json1(){
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
        ]);
    }

    public function products(){
        $products = Product::all();
        return response()->json($products);
    }

    public function products_list(){
        return view('product_list');
    }

}
