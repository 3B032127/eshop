<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CartItem;
use App\Models\User;
use App\Models\Product;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $products = Product::all();

        foreach ($users as $user) {
            for ($i = 0; $i < 3; $i++){
                $product = $products->random();

                CartItem::create([
                    'user_id' => $user->id,
                    'product_id' => $product->id
                ]);
            }
        }
    }
}
