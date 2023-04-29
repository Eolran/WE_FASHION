<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'product_name' => fake()->name(),
            'product_description' => fake()->colorName(),
            'product_price' => rand(15, 80),
            // 'product_image' => "",
            'product_published' => fake()->boolean(),
            'product_state' => rand(0, 100),
            'product_referenceId' => rand(1000000000000000, 9999999999999999),
        ];

    }
}