<?php

namespace App\Http\Controllers;

use App\Product;
use App\Subcategories;
use Illuminate\Http\Request;
use Session;
use Auth;
class ProductController extends Controller
{
    public function getIndex(){
        $SubCategories = SubCategories::all();
        return view('shop.index')->with('SubCategories',$SubCategories);
    }

    public function getResults(Request $request){
	    // Remove leading spaces and . , ! ( ) as a naive input sanitization
	    $query = preg_replace('/[\.\,\!\(\)]/', '', ltrim($request->input('query')));
        if(!$query){
            return redirect()->route('product.index');
        } else {
            $products = Product::where('title', 'LIKE', "%{$query}%")->orWhere('description', 'LIKE', "%{$query}%")->get();
            return view('shop.results')->with('products',$products);
        }
    }

    public function preview_product($id){
       $product = Product::find($id);
       return view('shop.preview_product')->with('product',$product);
   }  

    public function getCategories(Request $request){
        $cat = $request->input('cat');
        $SubCategories = SubCategories::where('category','=', $cat)->get();
        /*$subset = $SubCategories->map(function ($SubCategory) {
            return collect($SubCategory->toArray())->only(['subcategory'])->all();
        });
        dd($subset);*/
        return view('shop.categories')->with('SubCategories',$SubCategories);
    }

    public function Products(Request $request) {
        $subCat = $request->input('subCat');
        $products = Product::where('subcategory','=', $subCat)->get();
        return view('shop.products')->with('products',$products);
    }
}