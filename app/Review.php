<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function user(){
        return $this->belongsTo('User');
    }

    public function product(){
        return $this->belongsTo('Product');
    }

    public function scopeApproved($query){
        return $query->where('approved', true);
    }

    public function scopeSpam($query){
        return $query->where('spam', true);
    }

    public function scopeNotSpam($query){
        return $query->where('spam', false);
    }

    // Attribute presenters
    public function getTimeagoAttribute(){
    	$date = \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    	return $date;
    }

    // this function takes in product ID, comment and the rating and attaches the review to the product by its ID, then the average rating for the product is recalculated
    public function storeReviewForProduct($productID, $comment, $rating){
        $product = Product::find($productID);
        $product->user_id = Auth::user()->id;
        $product->comment = $comment;
        $product->rating = $rating;
        $product->reviews()->save($this);
        // recalculate ratings for the specified product
        $product->recalculateRating($rating);
    }

}
