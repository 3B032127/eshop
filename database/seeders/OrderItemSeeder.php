<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $orders = Order::all();
        $products = Product::all();

        foreach ($orders as $order) {
            for ($i = 0; $i < 3; $i++) {
                $product = $products->random();

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                ]);
            }
        }
    }
}
