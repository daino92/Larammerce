<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id'            => 1,
            'name'          => 'Admin',
            'description'   => 'Admin User.'
        ]);
        Role::create([
            'id'            => 2,
            'name'          => 'Vendor',
            'description'   => 'Vendor User.'
        ]);
        Role::create([
            'id'            => 3,
            'name'          => 'User',
            'description'   => 'Simple User.'
        ]);
    }
}
