<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
use DateTime;
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

    public function storeComment(Request $request){
        $comment = new Comment();
        $dateTime = new DateTime();
        $comment->comment = $request->comment;
        $comment->commenter = $request->commenter;
        $comment->email = $request->email;
        $comment->product_id = $request->id;
        $comment->created_at = $dateTime;
        $comment->updated_at = $dateTime;

        $comment->save();
        return redirect()->route('product_details', $request->id)
                         ->with('success', 'Comentario guardado correctamente');
    }
}
