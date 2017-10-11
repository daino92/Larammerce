<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Mockery\Exception;
use Session;
use Auth;
use DB;
use Stripe\Stripe;
use Stripe\Charge;

class OrderController extends Controller
{
    public function getCheckout(Request $request){
        if(!Session::has('cart')){ // If we don't have a cart, then don't show nothing.
            return view('shop.shopping-cart');
        }
        $emptyCart = Session::get('cart');
        $cart = new Cart($emptyCart);
        $total = $cart->totalPrice;

        foreach ($cart->products as $product){
            if(isset($shops[$product['user_id']]))
                $shops[$product['user_id']][0] += $product['price'];
            else
                $shops[$product['user_id']][0] = $product['price'];
        }

        $shopID = $request->query('sp');
        $key = DB::select('SELECT stripe_public_key FROM users WHERE id = ?', [$shopID]);

        $shops[$shopID][1] = $key[0]->stripe_public_key; //public key

        $pk_price[$shopID] = $shops[$shopID]; //array of total price and public key

        /*foreach ($shops as $shop_id => $shop) { // Specific query to bring for every shop the correct ID
            $key = DB::select('SELECT stripe_public_key FROM users WHERE id = ?', [$shop_id]);

            //print_r($key[0]->stripe_public_key); //prints public key
            $shops[$shop_id][1] = $key[0]->stripe_public_key;
        }*/
        return view('shop.checkout', ['total' => $pk_price[$shopID][0], 'shops' => $pk_price,'key'=> $key[0]->stripe_public_key,'shop_id'=>$shopID]);
    }

    public function postCheckout(Request $request){
        if(!Session::has('cart')){ // If we don't have a cart, then don't show nothing.
            return redirect()->route('shoppingCart');
        }
        $emptyCart = Session::get('cart');
        $cart = new Cart($emptyCart);

        $shop = NULL;

        $remainingShops = array();
        foreach($cart->products as $item) {
            // We get the product id in order to query the database for it. This will perform N queries where N is the number of products.
            $product_id = $item["item"]->id;
            $product = Product::find($product_id);

            if ($product->user_id == $_REQUEST["sp"]) {
                if (isset($shop[$product->user_id])) {
                    $shop[$product->user_id] += $product->price;
                } else {
                    $shop[$product->user_id] = $product->price;
                }
                $remainingShops[] = $product->id;
            }
        }

        try {
            // We fetch the user(shop) from the product in order to get the proper stripe secret key.
            $stripe_secret_key = $product->user->stripe_api_key;
            Stripe::setApiKey($stripe_secret_key);

            $total_amount = reset($shop);

            $token = $request->input('stripeToken');  //Token received from stripe.js

            // Stripe creates the charge

            $charge = Charge::create(array(
                "amount" => $total_amount * 100,
                "currency" => "usd",
                "source" => $token,
                "description" => "Test Charge"
            ));


            $order = new Order();
            $order->cart = serialize($cart); // Cart serialization in order to insert it as a string in the database
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id;

            Auth::user()->orders()->save($order);
        } catch (\Exception $e){

//            return redirect()->route('checkout', 'sp=' . $_REQUEST["sp"])->with('error', $e->getMessage());
        }

        for($i = 0; $i < count($remainingShops); $i++){
            $cart->RemoveProduct($remainingShops[$i]);
        }
        if(count($cart->products) > 0)
            Session::put('cart', $cart);
        else
            Session::forget('cart');

        //Session::forget('cart'); //forget credit card info after purchase
        return redirect()->route('indexPage')->with('success', 'Successfully purchased products!');
    }
}