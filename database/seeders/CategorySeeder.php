<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
<<<<<<< HEAD
            'name' => '牛乳',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
=======
            'id' => 1,
            'name' => '牛乳',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'id' => 2,
            'name' => '豚バラ肉',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
>>>>>>> origin/master
            ]);
    }
}
