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
        

        /*DB::table('SubCategories')->delete();
        $json = File::get("database/data/subcategories.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
        	SubCategories::create(array(
            	'id' => $obj->id,
            	'category' => $obj->category,
            	'subcategory' => $obj->subcategory
          	));
        }*/

        SubCategories::create(array(
        	'id' => '1',
        	'category' => 'Book',
          'image' => '2.png',
        	'subcategory' => '{"0":"Action","1":"drama","3":"romance","4":"biography"}'
      	));

      	SubCategories::create(array(
        	'id' => '2',
        	'category' => 'electronics',
          'image' => '1.png',
        	'subcategory' => '{"0":"smartphones","1":"computers","3":"televisions","4":"gadgets"}'
      	));

      	SubCategories::create(array(
        	'id' => '3',
        	'category' => 'fashion',
          'image' => '3.png',
        	'subcategory' => '{"0":"hoodies","1":"t-shirts","3":"pants","4":"underwear"}'
      	));

      	SubCategories::create(array(
        	'id' => '4',
        	'category' => 'sports',
          'image' => '4.png',
        	'subcategory' => '{"0":"snowboards","1":"bikes","3":"tennis","4":"skate"}'
      	));

      	SubCategories::create(array(
        	'id' => '5',
        	'category' => 'toys',
          'image' => '5.png',
        	'subcategory' => '{"0":"babies","1":"kids","3":"adults","4":"newborns"}'
      	));

      	SubCategories::create(array(
        	'id' => '6',
        	'category' => 'games',
          'image' => '6.png',
        	'subcategory' => '{"0":"action","1":"fps","3":"rpg","4":"mmo"}'
      	));
    }
}
/*DB::table('subcategories')->insert([
    $electronics = array(0=>"smartphones",1=>"computers",2=>"televisions",3=> "gadgets"),
    $books = array(0=>"action",1=>"drama",2=>"romance", 3=>"biography"),
    $fashion = array(0=>"hoodies",1=>"t-shirts",2=>"pants",3=> "underwear"),
    $sports = array(0=>"snowboards",1=>"bikes",2=>"tennis",3=> "skate"),
    $toys = array(0=>"babies",1=>"kids",2=>"adults"),
    $games = array(0=>"action",1=>"fps",2=>"rpg",3=> "mmo")
]);*/