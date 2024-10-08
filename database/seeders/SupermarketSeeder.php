<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SupermarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supermarkets')->insert([
            'id' => 1,
            'name' => 'ロピア',
            'place' => 'ミウィ橋本',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'id' => 2,
            'name' => 'ビック',
            'place' => 'なし',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
