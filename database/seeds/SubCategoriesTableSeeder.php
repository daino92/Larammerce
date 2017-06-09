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
        'image' => 'books.jpg',
        'subcategory' =>'{
          "0": {"name": "Drama","img": "pictures/Subcategories/Books/drama.jpg"},
          "1": {"name": "Horror","img": "pictures/Subcategories/Books/horror.jpg"},
          "2": {"name": "Romance","img": "pictures/Subcategories/Books/romance.jpg"},
          "3": {"name": "Science fiction","img": "pictures/Subcategories/Books/sciencefiction.jpg"},
          "4": {"name": "Fantasy","img": "pictures/Subcategories/Books/fantasy.jpg"},
          "5": {"name": "Biography","img": "pictures/Subcategories/Books/biography.jpg"},
          "6": {"name": "Adventure","img": "pictures/Subcategories/Books/adventure.jpg"},
          "7": {"name": "Educational","img": "pictures/Subcategories/Books/educational.jpg"}
        }'
      ));

      SubCategories::create(array(
        'id' => '2',
        'category' => 'Technology',
        'image' => 'technology.jpg',
        'subcategory' =>'{
          "0":{"name":"Mobile Phones","img":"pictures/Subcategories/Technology/smartphones.jpg"},
          "1":{"name":"Computers","img":"pictures/Subcategories/Technology/Computers.jpg"},
          "2":{"name":"TVs","img":"pictures/Subcategories/Technology/tv.jpg"},
          "3":{"name":"Camera & Photo","img":"pictures/Subcategories/Technology/camera.jpg"},
          "4":{"name":"Audio","img":"pictures/Subcategories/Technology/audio.jpg"}
        }'
      ));
      
      SubCategories::create(array(
        'id' => '3',
        'category' => 'Fashion',
        'image' => 'fashion.jpg',
        'subcategory' =>'{
          "0":{"name":"T-shirts","img":"pictures/Subcategories/Fashion/tshirts.jpg"},
          "1":{"name":"Suits","img":"pictures/Subcategories/Fashion/suits.jpg"},
          "2":{"name":"Trousers","img":"pictures/Subcategories/Fashion/trousers.jpg"},
          "3":{"name":"Underwear","img":"pictures/Subcategories/Fashion/underwear.jpg"},
          "4":{"name":"Shoes","img":"pictures/Subcategories/Fashion/shoes.jpg"},
          "5":{"name":"Other Accessories","img":"pictures/Subcategories/Fashion/hat.jpg"}
        }'
      ));

      SubCategories::create(array(
        'id' => '4',
        'category' => 'Sports',
        'image' => 'sports.jpg',
        'subcategory' =>'{
          "0":{"name":"Sportswear","img":"pictures/Subcategories/Sports/sportswear.jpg"},
          "1":{"name":"Fitness Equipment","img":"pictures/Subcategories/Sports/fitnessgear.jpg"},
          "2":{"name":"Cycling","img":"pictures/Subcategories/Sports/cycling.jpg"},
          "3":{"name":"Sports","img":"pictures/Subcategories/Sports/sports.jpg"},
          "4":{"name":"Camping","img":"pictures/Subcategories/Sports/camping.jpg"}
        }'
      ));

      SubCategories::create(array(
        'id' => '5',
        'category' => 'Health_Beauty',
        'image' => 'healthbeauty.jpg',
        'subcategory' =>'{
          "0":{"name":"Cosmetics","img":"pictures/Subcategories/Health_Beauty/cosmetics.jpg"},
          "1":{"name":"Health","img":"pictures/Subcategories/Health_Beauty/Health.jpg"},
          "2":{"name":"Baby Care","img":"pictures/Subcategories/Health_Beauty/babycare.jpg"},
          "3":{"name":"Fragrance","img":"pictures/Subcategories/Health_Beauty/fragrance.jpg"},
          "4":{"name":"Personal Care","img":"pictures/Subcategories/Health_Beauty/personal care.jpg"}
        }'
      ));

      SubCategories::create(array(
        'id' => '6',
        'category' => 'Gaming',
        'image' => 'gaming.jpg',
        'subcategory' =>'{
          "0":{"name":"PS4","img":"pictures/Subcategories/Gaming/PS4.png"},
          "1":{"name":"Nintendo Switch","img":"pictures/Subcategories/Gaming/switch.jpg"},
          "2":{"name":"X-Box ONE","img":"pictures/Subcategories/Gaming/xbox1.jpg"},
          "3":{"name":"PC-Games","img":"pictures/Subcategories/Gaming/pcgames.jpg"},
          "4":{"name":"Gaming Peripherals","img":"pictures/Subcategories/Gaming/peripherals.png"},
          "5":{"name":"Character Figures","img":"pictures/Subcategories/Gaming/figures.jpg"}
        }'
      ));
    }
}