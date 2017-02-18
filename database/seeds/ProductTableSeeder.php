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
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'description' => 'In Harry Potter and the Sorcerer\'s Stone, Harry, an orphan, lives with the Dursleys, his horrible aunt and uncle, and their abominable son, Dudley.
            One day just before his eleventh birthday, an owl tries to deliver a mysterious letter—the first of a sequence of events that end in Harry meeting a giant man named Hagrid. Hagrid explains Harry\'s history to him: When he was a baby, the Dark wizard, Lord Voldemort, attacked and killed his parents in an attempt to kill Harry; but the only mark on Harry was a mysterious lightning-bolt scar on his forehead.
            Now he has been invited to attend Hogwarts School of Witchcraft and Wizardry, where the headmaster is the great wizard Albus Dumbledore. Harry visits Diagon Alley to get his school supplies, especially his very own wand. To get to school, he takes the Hogwarts Express from platform nine and three-quarters at King\'s Cross Station. On the train, he meets two fellow students who will become his closest friends: Ron Weasley and Hermione Granger.
            Harry is assigned to Gryffindor House at Hogwarts, and soon becomes the youngest-ever Seeker on the House Quidditch team. He also studies Potions with Professor Severus Snape, who displays a deep and abiding dislike for Harry, and Defense Against the Dark Arts with nervous Professor Quirrell; he and his friends defeat a mountain troll, help Hagrid raise a dragon, and explore the wonderful, fascinating world of Hogwarts.
            But all events lead irrevocably toward a second encounter with Lord Voldemort, who seeks an object of legend known as the Sorcerer\'s Stone…',
            'price' => 19,
            'stock' => 12,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_2.jpg',
            'title' => 'Harry Potter and the Chamber of Secrets',
            'description' => 'Harry Potter and the Chamber of Secrets begins when Harry is spending a miserable summer with his only remaining family, the Dursleys. During a dinner party hosted by his uncle and aunt, Harry is visited by Dobby, a house-elf. Dobby warns Harry not to return to Hogwarts, the magical school for wizards that Harry attended the previous year. Harry politely disregards the warning, and Dobby wreaks havoc in the kitchen, infuriating the Dursleys. The Dursleys angrily imprison Harry in his room for the rest of the summer. Luckily, Harry\'s friend Ron Weasley steals Harry away in a flying car, and Harry happily spends the rest of the summer at the Weasley home.
            While shopping for school supplies with the Weasleys, Harry has two unfortunate encounters. He first encounters Lockhart, one of his teachers, who demands to be in a photo shoot with Harry. Harry then encounters Lucius Malfoy, the evil father of one of Harry\'s enemies, who almost starts a fight with Mr. Weasley. As Harry prepares to return to Hogwarts, he finds that he and Ron are unable to enter the magically invisible train platform, so they fly the Weasley car to Hogwarts. They land messily, and both boys are given detentions. Lockhart, who believes Harry flew the car to get attention, lectures Harry.',
                        'price' => 15,
            'stock' => 10,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_3.jpeg',
            'title' => 'Harry Potter 3',
            'description' => 'Harry Potter and the Prisoner of Askaban',
            'price' => 20,
            'stock' => 6,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_4.jpg',
            'title' => 'Harry Potter 4',
            'description' => 'Harry Potter and the Goblet of Fire',
            'price' => 15,
            'stock' => 9,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_5.jpg',
            'title' => 'Harry Potter 5',
            'description' => 'Harry Potter and the Order of the Phoenix',
            'price' => 16,
            'stock' => 10,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_6.jpg',
            'title' => 'Harry Potter 6',
            'description' => 'Harry Potter and the Half-Blood Prince',
            'price' => 20,
            'stock' => 2,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_7.jpg',
            'title' => 'Harry Potter 7',
            'description' => 'Harry Potter and the Deathly Hallows',
            'price' => 20,
            'stock' => 5,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://pictures.abebooks.com/isbn/9780545850568-us-300.jpg',
            'title' => 'Harry Potter 8',
            'description' => 'Fantastic Beasts & Where to Find them',
            'price' => 31,
            'stock' => 15,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();
    }
}
