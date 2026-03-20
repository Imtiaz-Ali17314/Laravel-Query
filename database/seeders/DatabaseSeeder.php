<?php

namespace Database\Seeders;

use COM;
use App\Models\city;
use App\Models\User;
use App\Models\student;
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

            userSeeder::class,
            CitySeeder::class,
            StudentSeeder::class
        ]);

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

}
