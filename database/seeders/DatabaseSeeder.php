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
        $this->call([
            ArticleSeeder::class, CharitySeeder::class, DonationSeeder::class,
            DonorSeeder::class, HomeSeeder::class, MessageSeeder::class,UserSeeder::class
        ]);
    }
}
