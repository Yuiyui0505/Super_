<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
<<<<<<< HEAD
            'name' => '明治おいしい牛乳',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'category_id' => 1,
            'country_id' => 1,
=======
            'id' => 1,
            'name' => '明治おいしい牛乳',
            'category_id' => 1,
            'country_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'id' => 2,
            'name' => '豚バラ500g',
            'category_id' => 2,
            'country_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
>>>>>>> origin/master
            ]);
    }
}
