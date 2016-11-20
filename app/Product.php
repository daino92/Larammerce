<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;
class Product extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'price'];
    use ElasticquentTrait;
}
