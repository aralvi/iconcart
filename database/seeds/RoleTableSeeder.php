<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('roles')->insert(
           [ [
                'name'=>'Admin'
            ],
            [
                'name'=>'Vendor'
            ],
            [
                'name'=>'Customer'
            ],
           ]);
    }
}
