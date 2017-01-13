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
