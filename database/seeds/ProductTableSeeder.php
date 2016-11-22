<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://www.fabulouslyentertaining.com/wp-content/uploads/2013/02/newcoverhp1-e1361509026655.jpg',
            'title' => 'Harry Potter 1',
            'description' => 'Harry Potter and the Sorcerer\'s Stone',
            'price' => 19,
            'quantity' => 12,
            'tag' => 'book'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_2.jpg',
            'title' => 'Harry Potter 2',
            'description' => 'Harry Potter and the Chamber of Secrets',
            'price' => 15,
            'quantity' => 10,
            'tag' => 'book'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_3.jpeg',
            'title' => 'Harry Potter 3',
            'description' => 'Harry Potter and the Prisoner of Askaban',
            'price' => 20,
            'quantity' => 6,
            'tag' => 'book'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_4.jpg',
            'title' => 'Harry Potter 4',
            'description' => 'Harry Potter and the Goblet of Fire',
            'price' => 15,
            'quantity' => 9,
            'tag' => 'book'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_5.jpg',
            'title' => 'Harry Potter 5',
            'description' => 'Harry Potter and the Order of the Phoenix',
            'price' => 16,
            'quantity' => 10,
            'tag' => 'book'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_6.jpg',
            'title' => 'Harry Potter 6',
            'description' => 'Harry Potter and the Half-Blood Prince',
            'price' => 20,
            'quantity' => 2,
            'tag' => 'book'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_7.jpg',
            'title' => 'Harry Potter 7',
            'description' => 'Harry Potter and the Deathly Hallows',
            'price' => 20,
            'quantity' => 5,
            'tag' => 'book'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://pictures.abebooks.com/isbn/9780545850568-us-300.jpg',
            'title' => 'Harry Potter 8',
            'description' => 'Fantastic Beasts & Where to Find them',
            'price' => 31,
            'quantity' => 15,
            'tag' => 'book'
        ]);
        $product->save();
    }
}
