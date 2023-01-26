<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Generate 10 Categories
        for($i = 0; $i < 10; $i++){
            \App\Models\Category::create([
                'name' => fake()->word,
            ]);
        }

        for($j = 0; $j < 50; $j++){
            \App\Models\Product::create([
                'name' => fake()->word,
                'description' => fake()->sentence,
                'price' => fake()->randomDigit*100.05,
                'category_id' => fake()->randomDigit+1,
            ]);
        }
        
    }
}
