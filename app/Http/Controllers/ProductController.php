<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin/products/products', compact('products'));
    }

    public function create(){
        $categories = Category::pluck('name', 'id_category');
        
        return view('admin/products/create', compact('categories')); 
    }

    public function store(Request $request){

        

        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->old_price = $request->get('old_price');
        $product->discount = $request->get('discount');
        $product->quantity = $request->get('quantity');
        $product->id_category = $request->get('id_category');
        $product->image = $request->get('image');

        $product->save();

        return redirect()->route('products')
                         ->with('success', 'Producto guardado correctamente');
    }
}
