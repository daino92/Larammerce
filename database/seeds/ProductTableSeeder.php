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
            'short_desc' => 'Rescued from the outrageous neglect of his aunt and uncle, a young boy with a great destiny proves his worth while attending Hogwarts School of Witchcraft and Wizardry.',
            'description' => 'In Harry Potter and the Sorcerer\'s Stone, Harry, an orphan, lives with the Dursleys, his horrible aunt and uncle, and their abominable son, Dudley. One day just before his eleventh birthday, an owl tries to deliver a mysterious letter—the first of a sequence of events that end in Harry meeting a giant man named Hagrid. Hagrid explains Harry\'s history to him: When he was a baby, the Dark wizard, Lord Voldemort, attacked and killed his parents in an attempt to kill Harry; but the only mark on Harry was a mysterious lightning-bolt scar on his forehead. Now he has been invited to attend Hogwarts School of Witchcraft and Wizardry, where the headmaster is the great wizard Albus Dumbledore. Harry visits Diagon Alley to get his school supplies, especially his very own wand. To get to school, he takes the Hogwarts Express from platform nine and three-quarters at King\'s Cross Station. On the train, he meets two fellow students who will become his closest friends: Ron Weasley and Hermione Granger. Harry is assigned to Gryffindor House at Hogwarts, and soon becomes the youngest-ever Seeker on the House Quidditch team. He also studies Potions with Professor Severus Snape, who displays a deep and abiding dislike for Harry, and Defense Against the Dark Arts with nervous Professor Quirrell; he and his friends defeat a mountain troll, help Hagrid raise a dragon, and explore the wonderful, fascinating world of Hogwarts. But all events lead irrevocably toward a second encounter with Lord Voldemort, who seeks an object of legend known as the Sorcerer\'s Stone…',
            'price' => 19,
            'stock' => 12,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_2.jpg',
            'title' => 'Harry Potter and the Chamber of Secrets',
            'short_desc' => 'Harry ignores warnings not to return to Hogwarts, only to find the school plagued by a series of mysterious attacks and a strange voice haunting him.',
            'description' => 'Harry Potter and the Chamber of Secrets begins when Harry is spending a miserable summer with his only remaining family, the Dursleys. During a dinner party hosted by his uncle and aunt, Harry is visited by Dobby, a house-elf. Dobby warns Harry not to return to Hogwarts, the magical school for wizards that Harry attended the previous year. Harry politely disregards the warning, and Dobby wreaks havoc in the kitchen, infuriating the Dursleys. The Dursleys angrily imprison Harry in his room for the rest of the summer. Luckily, Harry\'s friend Ron Weasley steals Harry away in a flying car, and Harry happily spends the rest of the summer at the Weasley home. While shopping for school supplies with the Weasleys, Harry has two unfortunate encounters. He first encounters Lockhart, one of his teachers, who demands to be in a photo shoot with Harry. Harry then encounters Lucius Malfoy, the evil father of one of Harry\'s enemies, who almost starts a fight with Mr. Weasley. As Harry prepares to return to Hogwarts, he finds that he and Ron are unable to enter the magically invisible train platform, so they fly the Weasley car to Hogwarts. They land messily, and both boys are given detentions. Lockhart, who believes Harry flew the car to get attention, lectures Harry.',
            'price' => 15,
            'stock' => 10,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_3.jpeg',
            'title' => 'Harry Potter and the Prisoner of Askaban',
            'short_desc' => 'It\'s Harry\'s third year at Hogwarts; not only does he have a new "Defense Against the Dark Arts" teacher, but there is also trouble brewing. Convicted murderer Sirius Black has escaped the Wizards\' Prison and is coming after Harry.',
            'description' => 'Harry Potter is having a tough time with his relatives (yet again). He runs away after using magic to inflate Uncle Vernon\'s sister Marge who was being offensive towards Harry\'s parents. Initially scared for using magic outside the school, he is pleasantly surprised that he won\'t be penalized after all. However, he soon learns that a dangerous criminal and Voldemort\'s trusted aide Sirius Black has escaped from the Azkaban prison and wants to kill Harry to avenge the Dark Lord. To worsen the conditions for Harry, vile creatures called Dementors are appointed to guard the school gates and inexplicably happen to have the most horrible effect on him. Little does Harry know that by the end of this year, many holes in his past (whatever he knows of it) will be filled up and he will have a clearer vision of what the future has in store...',
            'price' => 20,
            'stock' => 6,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_4.jpg',
            'title' => 'Harry Potter and the Goblet of Fire',
            'short_desc' => 'Harry finds himself mysteriously selected as an under-aged competitor in a dangerous tournament between three schools of magic.',
            'description' => 'Harry Potter and the Goblet of Fire takes us deeper into the characters\' minds and the darkness of the Wizarding World. At the Quidditch World Cup, Voldemort\'s followers gather and wreak havoc. Then, at Hogwarts, a legendary event takes place. The Triwizard Tournament! The Goblet of Fire judges who gets in and who doesn\'t. On the fateful night, three champions are selected. But then the Goblet spits out one other. Harry\'s. These two major events point to the return of Lord Voldemort. Dumbledore and the other teachers sense it, but it is inevitable. And Harry is no longer safe at Hogwarts. This fourth installment is the most dramatic, and also the scariest. Let me just say that all does not necessarily end well...',
            'price' => 15,
            'stock' => 9,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_5.jpg',
            'title' => 'Harry Potter and the Order of the Phoenix',
            'short_desc' => 'With their warning about Lord Voldemort\'s return scoffed at, Harry and Dumbledore are targeted by the Wizard authorities as an authoritarian bureaucrat slowly seizes power at Hogwarts.',
            'description' => 'As another year begins for Harry, at Hogwarts school of Witchcraft and Wizardry so does the never-ending articles stating that he and Dumbledore are insane. As the ministry starts to invent new and malicious lies about Harry\'s account on Voldemort\'s return, Hogwarts begins to change for the worse as the ministry sends in their cure for all the insanity, Professor Dolores Jane Umbridge. As she begins to inflict her rules and regulations on the students at Hogwarts they begin to find that with her as their teacher, they\'ll never be ready for the outside world. So Harry along with his friends decides to take things into their own hands and begin to learn magic the real way. As Harry starts having visions of terrible events happening with the Ministries very walls he decides to take action, leading himself and his friends into battle, ultimately teaching them what friendship, loyalty and sacrifice really means.',
            'price' => 16,
            'stock' => 10,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_6.jpg',
            'title' => 'Harry Potter and the Half-Blood Prince',
            'short_desc' => 'As Harry Potter begins his sixth year at Hogwarts, he discovers an old book marked as "the property of the Half-Blood Prince" and begins to learn more about Lord Voldemort\'s dark past.',
            'description' => 'Lord Voldemort\'s forces are causing havoc both in the Wizarding and Muggle societies. Harry Potter is in his 6th year at Hogwarts and taking private lessons with Professor Dumbledore to found out what might be the Dark Lords only weakness. But hormones in Harry\'s body are changing extremely fast as he starts to fall in love with Ginny Weasley. What is Voldemort\'s Weakness? Will Harry Express His Feelings Towards Ginny? And Most Importantly, Who Kills Dumbledore?',
            'price' => 20,
            'stock' => 2,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_7.jpg',
            'title' => 'Harry Potter and the Deathly Hallows',
            'short_desc' => 'As Harry races against time and evil to destroy the Horcruxes, he uncovers the existence of three most powerful objects in the wizarding world: the Deathly Hallows. Harry, Ron and Hermione search for Voldemort\'s remaining Horcruxes in their effort to destroy the Dark Lord as the final battle rages on at Hogwarts.',
            'description' => 'Voldemort\'s power is growing stronger. He now has control over the Ministry of Magic and Hogwarts. Harry, Ron, and Hermione decide to finish Dumbledore\'s work and find the rest of the Horcruxes to defeat the Dark Lord. But little hope remains for the Trio, and the rest of the Wizarding World, so everything they do must go as planned. Harry, Ron, and Hermione continue to find the rest of Voldemort\'s Horecruxes, until Harry discovers that one is at Hogwarts, they flee there as soon as possible but Voldemort instantly finds out about there mission. The battle is drawn at Hogwarts as many people fight to protect Harry Potter. Harry then realises that people are dying constantly for his mistakes and then eventually fights Voldemort for the last time. Along the way, crucial secrets are unraveled, and the mysterious but legendary Deathly Hallows reappear.',
            'price' => 20,
            'stock' => 5,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://pictures.abebooks.com/isbn/9780545850568-us-300.jpg',
            'title' => 'Fantastic Beasts & Where to Find them',
            'short_desc' => 'The adventures of writer Newt Scamander in New York\'s secret community of witches and wizards seventy years before Harry Potter reads his book in school.',
            'description' => 'Holding a mysterious leather suitcase in his hand, Newt Scamander, a young activist wizard from England, visits New York while he is on his way to Arizona. Inside his expanding suitcase hides a wide array of diverse, magical creatures that exist among us, ranging from tiny, twig-like ones, to majestic and humongous ones. It is the middle of the 20s and times are troubled since the already fragile equilibrium of secrecy between the unseen world of wizards and the ordinary or "No-Maj" people that the MACUSA Congress struggles to maintain, is at risk of being unsettled. In the meantime, the voices against wizardry keep growing with daily protests led by Mary Lou Barebone and fuelled by the increasing disasters ascribed to a dark wizard, Gellert Grindelwald. At the same time, by a twist of fate, Newt\'s precious suitcase will be switched with the identical one of an aspiring No-Maj baker, Jacob Kowalski, while demoted Auror, Tina Goldstein, arrests Newt for being an unregistered wizard. To make matters worse, with the suitcase in the wrong hands, several creatures manage to escape to unknown directions. Before long, this situation will catch Senior Auror Percival Graves\' attention who will target both Tina and Newt amid panic caused by an invisible, devastating and utterly unpredictable menace that still wreaks havoc in New York\'s 5th Avenue. Is there a hidden agenda behind Graves\' intentions and ultimately, what will happen to the remaining magical creatures still loose in the streets?',
            'price' => 31,
            'stock' => 15,
            'category' => 'Books',
            'user_id' => '1'
        ]);
        $product->save();
    }
}
