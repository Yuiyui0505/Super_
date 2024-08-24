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
            'name' => '明治おいしい牛乳',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'category_id' => 1,
            'country_id' => 1,
            ]);
    }
}
