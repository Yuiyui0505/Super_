<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            'price' => '10000',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'supermarket_id' => 1,
            'product_id' => 1,
            'user_id' => 1,
        ]);
    }
}
