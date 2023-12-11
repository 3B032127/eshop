<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['電子產品','居家用品', '服飾配件', '嬰兒用品', '運動器材'];
        return [
            'name' => $this -> faker -> unique() -> randomElement($categories),
        ];
    }
}
