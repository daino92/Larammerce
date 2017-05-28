<?php

use Illuminate\Database\Seeder;
use App\SubCategories;
class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategories::create(array(
        	'id' => '1',
        	'category' => 'Books',
            'image' => '2.png',
        	'subcategory' => '{"0":"Drama","1":"Horror","3":"Romance","4":"Science fiction", "5":"Fantasy", "6":"Biography", "7":"Action and Adventure"}'
      	));

      	SubCategories::create(array(
        	'id' => '2',
        	'category' => 'Technology',
            'image' => '1.png',
        	'subcategory' => '{"0":"Mobile Phones","1":"Computers","3":"TVs","4":"Camera & Photo","5":"Audio"}'
      	));

      	SubCategories::create(array(
        	'id' => '3',
        	'category' => 'Fashion',
            'image' => '3.png',
        	'subcategory' => '{"0":"T-shirts","1":"Suits","3":"Pants","4":"Shoes","5":"Underwear", "6":"Other Accessories"}'
      	));

      	SubCategories::create(array(
        	'id' => '4',
        	'category' => 'Sports',
            'image' => '4.png',
        	'subcategory' => '{"0":"Sportswear","1":"Fitness Equipment","3":"Cycling","4":"Sports","5":"Camping"}'
      	));

      	SubCategories::create(array(
        	'id' => '5',
        	'category' => 'Health & Beauty',
            'image' => '5.png',
        	'subcategory' => '{"0":"Cosmetics","1":"Health","3":"Baby Care","4":"Fragrance","5":"Personal Care"}'
      	));

      	SubCategories::create(array(
        	'id' => '6',
        	'category' => 'Gaming',
            'image' => '6.png',
        	'subcategory' => '{"0":"PS4","1":"Nintendo Switch","3":"X-BOX ONE","4":"PC-Games","5":"Gaming Peripherals","4":"Character Figures"}'
      	));
    }
}