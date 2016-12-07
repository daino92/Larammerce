<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => 'admin',
        ]);
        $user->save();

        $user = new \App\User([
            'email' => 'fro@gmail.com',
            'username' => 'fro',
            'password' => 'fro',
        ]);
        $user->save();

        $user = new \App\User([
            'email' => 'daino@gmail.com',
            'username' => 'daino',
            'password' => 'daino',
        ]);
        $user->save();
    }
}