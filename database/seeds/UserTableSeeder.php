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
	    $user->stripe_api_key = "sk_test_sP0hF5aZqhYUT7iSUsFpuaqA";
	    $user->stripe_public_key = "pk_test_sTUTjjJLxwf8amhi1BHUZZWt";
        $user->save();
        $user->roles()->attach(Role::where('name', 'Vendor')->first());

	    $user = new User();
	    $user->username = 'rouxa';
	    $user->email = 'rouxa@gmail.com';
	    $user->password = bcrypt('rouxa');
	    $user->stripe_api_key = "sk_test_vEzeaxJ98d7Iax7MGeo191yP";
        $user->stripe_public_key = "pk_test_gc1IcOaKWuA6WbhQdlMGp6Xn";
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
