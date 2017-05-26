<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    protected $table = 'SubCategories';

    protected $fillable = array(
        'id', 'category', 'subcategory', 'image'
    );
}
