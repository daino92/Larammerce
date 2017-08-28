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

    //complex search functionality
    public function getResults(Request $request) {
        // Remove leading spaces and . , ! ( ) as a naive input sanitization
        $category = $request->input('category');
        $subcategory = $request->input('subcategory');
        $priceFrom = preg_replace('/[^.0-9]/', '', ltrim($request->input('priceFrom')));
        $priceTo = preg_replace('/[^.0-9]/', '', ltrim($request->input('priceTo')));
        $title = preg_replace('/[\.\,\!\(\)]/', '', ltrim($request->input('title')));

        if ($title == "" && $category == "" && $subcategory == "" && $priceFrom == "" && $priceTo == "") {
            return redirect()->route('indexPage');
        } else {
            $conditions = array();
            if ($title != "") {
                $conditions[] = array('title', 'LIKE', "%{$title}%");
            }
            if ($category != "") {
                $conditions[] = array('category', '=', "{$category}");
            }
            if ($subcategory != ""&&$subcategory != "0") {
                $conditions[] = array('subcategory', '=', "{$subcategory}");
            }
            if ($priceFrom != "") {
                $conditions[] = array('price', '>=', "{$priceFrom}");
            }
            if ($priceTo != "") {
                $conditions[] = array('price', '<=', "{$priceTo}");
            }
            if ($title != "") {
                $products = Product::where($conditions)->orWhere('description', 'LIKE', "%{$title}%")->get();
            } else {
                $products = Product::where($conditions)->get();
            }
            return view('shop.results')->with('products', $products);
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