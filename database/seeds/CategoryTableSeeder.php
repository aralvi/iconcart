<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('categories')->insert([
            [
                'name'=>'icon'
            ],
            [
                'name'=>'photo'
            ],
            [
                'name'=>'illustration'
            ]
        ]);
    }
}
