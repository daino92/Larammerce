<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Aloko\Elasticquent\ElasticquentTrait;

class Post extends Model
{
    use ElasticquentTrait;

    public $fillable = ['title', 'content', 'tags'];

    private $mapProps = array(
        'title' => [
            'type' => 'string',
            "analyzer" => "standard",
        ],
        'content' => [
            'type' => 'string',
            "analyzer" => "standard",
        ],
        'tags' => [
            'type' => 'string',
            "analyzer" => "myAnalyzer",
        ],
    );

    private $customAnalyzer = array(
        'myAnalyzer' => [
            'type' => 'stop',
            "stopwords" => [","]
        ]
    );

    public static function createIndexWithCustomAnalyzer($shards = null, $replicas = null)
    {
        $instance = new static;

        $client = $instance->getElasticSearchClient();

        $params = [
            'index' => 'default',
            'body' => [
                'settings' => [
                    'number_of_shards' => $shards,
                    'number_of_replicas' => $replicas,
                    'analysis' => [
                        'analyzer' => $instance->customAnalyzer,
                    ]
                ],
                'mappings' => [
                    'posts' => [
                        'properties' => $instance->mapProps,
                    ],
                ]
            ]
        ];

        return $client->indices()->create($params);
    }
}