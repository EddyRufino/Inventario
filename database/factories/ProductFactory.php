<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'code' => $this->faker->randomNumber(8),
            'name' => $this->faker->company(),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 4, $min = 1, $max = 4),
            'stock' => $this->faker->randomNumber(8),
            'description' => $this->faker->sentence(4),
            'state' => true
        ];
    }
}
