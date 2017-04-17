<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Session;
use Auth;
use Stripe\Stripe;
use Stripe\Charge;

class OrderController extends Controller
{
    public function getCheckout(){
        if(!Session::has('cart')){ //if we don't have a cart, then don't show nothing.
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request){
        if(!Session::has('cart')){ //if we don't have a cart, then don't show nothing.
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);


	    // We are going to perform a single API request to stripe for each of the items inside the cart.
        // This is done in order to pay each product separately and support a cart with products from multiple shops.
        foreach($cart->items as $item) {
		    try {
			    // We get the product id in order to query the database for it. This will perform N queries where N is the number of products.
			    $product_id = $item["item"]->id;
			    $product = Product::find($product_id);

			    // We fetch the user(shop) from the product in order to get the proper stripe api key.
			    $api_key = $product->user->stripe_api_key;
			    Stripe::setApiKey($api_key);

			    // We issue an HTTP request to Stripe in order to perform the charge.
			    // This will lead to creating a single order for each Product!!!
			    $charge = Charge::create(array(
				    "amount" => $item["price"] * 100,
				    "currency" => "usd",
				    "source" => $request->input('stripeToken'),
				    "description" => "Test Charge..."
			    ));

			    $order = new Order(); //here we store order in the database, so we make a new order
			    $order->cart = serialize($cart); //we serialize the cart in order to put it as a string in the database
			    $order->address = $request->input('address');
			    $order->name = $request->input('name');
			    $order->payment_id = $charge->id;

			    Auth::user()->orders()->save($order);
		    } catch (\Exception $e){
			    return redirect()->route('checkout')->with('error', $e->getMessage());
		    }
	    }

        /*Stripe::setApiKey('sk_test_aHu2guahO3zRUEmokSKuwujG');  //create a charge
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Test Charge..."
            ));
            $order = new Order(); //here we store order in the database, so we make a new order
            $order->cart = serialize($cart); //we serialize the cart in order to put it as a string in the database
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id;

            Auth::user()->orders()->save($order);
        } catch (\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }*/
        Session::forget('cart');    //forget credit card info after purchase
        return redirect()->route('product.index')->with('success', 'Successfully purchased products!');
    }
}