<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
<<<<<<< HEAD
            'name' => '日本',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
=======
            'id' => 1,
            'name' => '日本',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'id' => 2,
            'name' => 'メキシコ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
>>>>>>> origin/master
            ]);
    }
}
