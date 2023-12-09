<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = Category::all();
        $faker = Faker::create();

        foreach ($categories as $category) {
            Product::factory()->count(5)->create([
               'name' => $faker -> word,
               'category_id' => $category->id,
            ]);
        }
    }
}
