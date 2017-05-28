<?php

namespace App\Http\Controllers;

use App\Product;
use App\Subcategories;
use Illuminate\Http\Request;
use Session;
use Auth;

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

    public function getCategories(){
        $SubCategories = SubCategories::all();
        return view('shop.categories')->with('SubCategories',$SubCategories);
    }

    public function getSubCategories($category){
        $SubCategories = SubCategories::find($category);
        return view('shop.subcategories')->with('SubCategories',$SubCategories);
    }

   public function preview_product($id){
       $product = Product::find($id);
       return view('shop.preview_product')->withProduct($product);
   }/*  alternative

    public function getSubCategories($category){
        $SubCategory = SubCategories::find($category); //only this
        return view('shop.categories')->with('SubCategories',$SubCategory);
    }    */
}

