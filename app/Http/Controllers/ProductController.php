<?php

namespace App\Http\Controllers;

use App\Product;
use App\Subcategories;
use Illuminate\Http\Request;
use Session;
use Auth;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function getIndex(){ //get all categories of products
        $SubCategories = SubCategories::all();
        return view('shop.index')->with('SubCategories',$SubCategories);
    }

    public function getResults(Request $request){ //Search results
        //$query = $request->input('query');
	    // Remove leading spaces and . , ! ( ) as a naive input sanitization
	    $query = preg_replace('/[\.\,\!\(\)]/', '', ltrim($request->input('query')));
        if(!$query){
            return redirect()->route('product.index');
        } else{
            $products = Product::where('title', 'LIKE', "%{$query}%")->orWhere('description', 'LIKE', "%{$query}%")->get();
            //dd($products);
            return view('shop.results')->with('products',$products);
        }
    }


    public function preview_product($id){
       $product = Product::find($id);
       return view('shop.preview_product')->withProduct($product);
   }  

    public function getCategories(){
        $cat = Input::get('cat');
        $SubCategories = SubCategories::where('category','=', $cat)->get();
        /*$subset = $SubCategories->map(function ($SubCategory) {
            return collect($SubCategory->toArray())->only(['subcategory'])->all();
        });
        dd($subset);*/
        return view('shop.categories')->with('SubCategories',$SubCategories);
    }
}

