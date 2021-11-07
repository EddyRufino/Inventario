<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sale;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailSaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'sale_id' => Sale::factory(),
            'store_id' => Store::factory(),
            'amount' => $this->faker->randomNumber(),
            'price_sale' => $this->faker->randomFloat($nbMaxDecimals = 4, $min = 1, $max = 4),
            'discount' => $this->faker->randomFloat($nbMaxDecimals = 4, $min = 1, $max = 4),
        ];
    }
}
