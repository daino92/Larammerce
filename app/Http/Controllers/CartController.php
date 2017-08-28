<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;
use Auth;

class CartController extends Controller
{
    public function AddToCart(Request $request, $id){
        $product = Product::find($id);
        $emptyCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($emptyCart);
        $cart->addProducts($product, $product->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->back();
    }

    public function DecreaseProduct($id){
        $emptyCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($emptyCart);
        $cart->DecreaseProduct($id);

        if(count($cart->products) > 0)
            Session::put('cart', $cart);
        else
            Session::forget('cart');
        return redirect()->route('shoppingCart');
    }

    public function IncreaseProduct($id){
        $emptyCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($emptyCart);
        $cart->IncreaseProduct($id);

        if(count($cart->products) > 0)
            Session::put('cart', $cart);
        return redirect()->route('shoppingCart');
    }

    public function RemoveProduct($id){
        $emptyCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($emptyCart);
        $cart->RemoveProduct($id);

        if(count($cart->products) > 0)
            Session::put('cart', $cart);
        else
            Session::forget('cart');
        return redirect()->route('shoppingCart');
    }

    public function showCart(){
        if(!Session::has('cart')){ // If we don't have a cart, then don't show nothing.
            return view('shop.shopping-cart');
        }
        $emptyCart = Session::get('cart'); // Or if there is a cart, fetch it.
        $cart = new Cart($emptyCart);

        $shop = null; // Grouped vendors initialized
        foreach($cart->products as $item) { // Foreach loop to get grouped vendors
            // We get the product id in order to query the database for it. This will perform N queries where N is the number of products.
            $product_id = $item["item"]->id;
            $product = Product::find($product_id);

            if(isset($shop[$product->user_id])) {
                $shop[$product->user_id][0][] = $product->id;
                $shop[$product->user_id][1] += $product->price;
            }
            else {
                $shop[$product->user_id][0] = array($product_id);
                $shop[$product->user_id][1] = $product->price;
            }
        }
        //dd($shop);
        return view('shop.shopping-cart', ['products' => $cart->products, 'totalPrice' => $cart->totalPrice, 'shop' => $shop]);
    }
}