<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->username = 'book';
        $user->email = 'book@gmail.com';
        $user->password = bcrypt('book');
	    $user->stripe_api_key = "sk_test_aHu2guahO3zRUEmokSKuwujG";
        $user->save();
        $user->roles()->attach(Role::where('name', 'Vendor')->first());

	    $user = new User();
	    $user->username = 'rouxa';
	    $user->email = 'rouxa@gmail.com';
	    $user->password = bcrypt('rouxa');
	    $user->stripe_api_key = "sk_test_bTTnqhKrzDv2Jo9lWgn1sxrC";
	    $user->save();
	    $user->roles()->attach(Role::where('name', 'Vendor')->first());

        $user = new User();
        $user->username = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach(Role::where('name', 'Admin')->first());

        $user = new User();
        $user->username = 'user';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach(Role::where('name', 'User')->first());
    }
}
