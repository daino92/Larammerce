<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use Illuminate\Http\Request;
use Session;
use Auth;
use Stripe\Stripe;
use Stripe\Charge;

class ProductController extends Controller
{
    public function getIndex(){ //get all products. now in allproducts.blade.php
        $products = Product::all();
        return view('shop.index', ['products' => $products]);
    }

    public function getResults(Request $request){ //Search results
        $query = $request->input('query');
        if(!$query){
            return redirect()->route('product.index');
        } else{
            $products = Product::where('title', 'LIKE', "%{$query}%")->orWhere('description', 'LIKE', "%{$query}%")->get();
            //dd($products);
            return view('shop.results')->with('products',$products);
        }
    }
}