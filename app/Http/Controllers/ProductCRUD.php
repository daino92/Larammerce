<?php

namespace App\Http\Controllers;

use Request;
use Session;
use DB;
use App\Product;
class ProductCRUD extends Controller
{
    public function index(){
        $products = Product::orderBy('id','ASC')->paginate(5); //pagination
        return view('vendor.allproducts')->withProducts($products);
    }

    public function show($id){
        $product = Product::find($id);
        return view('vendor.showproduct')->withProduct($product);
    }

    public function create(){
        return view('vendor.addproducts');
    }

    public function store(){
        $product = Request::all();
        $product = Product::create($product);
        //$user->products()->attach($role);
        return redirect()->route('vendor.allproducts');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('vendor.editproduct')->withProduct($product);
    }

    public function update($id){
        $productUpdate = Request::all();
        $product = Product::find($id);
        $product->update($productUpdate);
        return redirect()->route('vendor.allproducts');
    }

    public function destroy($id){
        Product::find($id)->delete();
        Session::flash('flash_message', 'Product successfully deleted.');
        return redirect()->back();
    }
}