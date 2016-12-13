<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;
class Product extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'category', 'price', 'quantity', 'XS', 'S', 'M', 'L', 'XL', 'XXL'];
    use ElasticquentTrait;
    function getIndexName(){
        return 'products';
    }

    public function orders(){
        return $this->belongsToMany('App\Order', 'order_product', 'order_id', 'product_id');
    }

    public function carts(){
        return $this->belongsToMany('App\Cart', 'cart_product', 'cart_id', 'product_id');
    }

    protected $indexSettings = [
        'analysis' => [
            'char_filter' => [
                'replace' => [
                    'type' => 'mapping',
                    'mappings' => [
                        '&=> and '
                    ],
                ],
            ],
            'filter' => [
                'word_delimiter' => [
                    'type' => 'word_delimiter',
                    'split_on_numerics' => false,
                    'split_on_case_change' => true,
                    'generate_word_parts' => true,
                    'generate_number_parts' => true,
                    'catenate_all' => true,
                    'preserve_original' => true,
                    'catenate_numbers' => true,
                ]
            ],
            'analyzer' => [
                'default' => [
                    'type' => 'custom',
                    'char_filter' => [
                        'html_strip',
                        'replace',
                    ],
                    'tokenizer' => 'whitespace',
                    'filter' => [
                        'lowercase',
                        'word_delimiter',
                    ],
                ],
            ],
        ],
    ];
    protected $mappingProperties = array(
        'title' => [
            'type' => 'string',
            "analyzer" => "standard"
        ],
        'description' => [
            'type' => 'string',
            "analyzer" => "standard"
        ],
        'category' => [
            'type' => 'string',
            'analyzer' => 'stop',
            "stopwords" => [","]
        ],
        'price' => [
            'type' => 'integer',
            'include_in_all' => false
        ],
        'XS' => [
            'type' => 'integer',
        ],
        'S' => [
            'type' => 'integer',
        ],
        'M' => [
            'type' => 'integer',
        ],
        'L' => [
            'type' => 'integer',
        ],
        'XL' => [
            'type' => 'integer',
        ],
        'XXL' => [
            'type' => 'integer',
        ],
    );
}