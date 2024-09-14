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
        DB::table('notes')->insert(
            [
            'id' => 1,
            'price' => '200',
            'user_id' => 1,
            'supermarket_id' => 1,
            'product_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'id' => 2,
            'price' => '750',
            'user_id' => 1,
            'supermarket_id' => 2,
            'product_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
    }
}
