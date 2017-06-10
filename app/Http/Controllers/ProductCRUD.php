<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use DB;
use App\Product;
use App\SubCategories;
use Intervention\Image\ImageManagerStatic as Image;
class ProductCRUD extends Controller
{
    public function index(){
        $products = Product::where('user_id', auth()->user()->id)->paginate(5); //pagination
        return view('vendor.allproducts')->withProducts($products);
    }

    public function show($id){
        $product = Product::find($id);
        return view('vendor.showproduct')->withProduct($product);
    }

    public function create(){
        $SubCategories = SubCategories::all();
        return view('vendor.addproducts')->with('SubCategories',$SubCategories);
    }

    public function store(Request $request){
        $product = $request->all();

        $this->validate($request, [
            //   'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $username = Auth::user()->username;
            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
            $destinationPath = public_path('/uploads/products/' . $username);
            $file->move($destinationPath, $extension);
            $thumb->save($destinationPath.'/thumb_'.$extension);
            $product['imagePath'] = '/uploads/products/'. $username . '/' . $extension;
            $product['thumbnail'] = '/uploads/products/'. $username . '/thumb_' . $extension;
        }

        Auth::user()->products()->create($product);
        return redirect()->route('vendor.allproducts');
    }

    public function edit($id){
        $product = Product::find($id);
        $SubCategories = SubCategories::all();
        return view('vendor.editproduct')->withProduct($product)->with('SubCategories',$SubCategories);
    }

    public function update(Request $request, $id){
        $productUpdate = $request->all();
        $product = Product::find($id);

        $this->validate($request, [
            //   'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $username = Auth::user()->username;
            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
            $destinationPath = public_path('/uploads/products/' . $username);
            $file->move($destinationPath, $extension);
            $thumb->save($destinationPath.'/thumb_'.$extension);
            $product['imagePath'] = '/uploads/products/'. $username . '/' . $extension;
            $product['thumbnail'] = '/uploads/products/'. $username . '/thumb_' . $extension;
        }

        $product->update($productUpdate);
        return redirect()->route('vendor.allproducts');
    }

    public function destroy($id){
        Product::destroy($id);
        Session::flash('flash_message', 'Product successfully deleted.');
        return redirect()->back();
    }
}