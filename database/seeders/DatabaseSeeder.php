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
            ArticleSeeder::class, UserSeeder::class, CharitySeeder::class,
            DonorSeeder::class, DonationSeeder::class,
            HomeSeeder::class, MessageSeeder::class
        ]);
    }
}
