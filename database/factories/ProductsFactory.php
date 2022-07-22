<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->randomNumber(),
            'quantity' => $this->faker->randomDigitNotNull,
            'provitor' => $this->faker->word,
            'characteristic ' => $this->faker->word,
        ];
    }
}
