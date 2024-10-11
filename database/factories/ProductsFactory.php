<?php

namespace Database\Factories;

use App\Models\Customers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customers_id' => Customers::factory(),
            'type' => fake()->words(3,true),
            'quantity' => fake()->numberBetween(100,6000),
            'recived-date' => fake()->date(),
            'dispatch-date' => fake()->dateTimeBetween('+1 month', '+2 years')
        ];
    }
}
