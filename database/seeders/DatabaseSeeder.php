<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
<<<<<<< HEAD
        $this->call(ProductSeeder::class);
        $this->call(SupermarketSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CountrySeeder::class);
    }
}
=======
        $this->call(SupermarketSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(NoteSeeder::class);
    }
}
>>>>>>> origin/master
