<?php

namespace App;

class Cart
{
    public $products = null;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($emptyCart){ // Empty cart initialization without products
        if ($emptyCart){
            $this->products = $emptyCart->products;
            $this->totalQuantity = $emptyCart->totalQuantity;
            $this->totalPrice = $emptyCart->totalPrice;
        }
    }

    public function addProducts($item, $id) {  // Function that add products to the cart
        $storedProduct = ['qty' => 0, 'price' => $item->price, 'item' => $item, 'user_id' => $item->user_id];
        if ($this->products) {
            if (array_key_exists($id, $this->products))
                $storedProduct = $this->products[$id];
        }
        $storedProduct['qty']++;
        $storedProduct['price'] = $item->price * $storedProduct['qty'];
        $this->products[$id] = $storedProduct;
        $this->totalQuantity++;
        $this->totalPrice += $item->price;
    }

    public function DecreaseProduct($id) { // Function that decrease products each time by 1
        $this->products[$id]['qty']--;
        $this->products[$id]['price'] -= $this->products[$id]['item']['price'];
        $this->totalQuantity--;
        $this->totalPrice -= $this->products[$id]['item']['price'];

        if ($this->products[$id]['qty'] <= 0)
            unset($this->products[$id]);
    }

    public function IncreaseProduct($id) { // Function that increase products each time by 1
        $this->products[$id]['qty']++;
        $this->products[$id]['price'] += $this->products[$id]['item']['price'];
        $this->totalQuantity++;
        $this->totalPrice += $this->products[$id]['item']['price'];

    }
    public function RemoveProduct($id) { // Function that remove completely the product from the cart
        $this->totalQuantity -= $this->products[$id]['qty'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }

    public function products(){
        return $this->belongsToMany('App\Cart', 'cart_product', 'product_id', 'cart_id')->withTimestamps();
    }
}