<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'product_name' => "Test Product",
            'product_description' => 'Test product_description',
            'product_price' => 154,
            //'product_image' => 'Test Product',
            'product_published' => 1,
            'product_state' => 0,
            'product_referenceId' => '48653465',
        ];

    }
}