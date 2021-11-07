<?php

namespace Database\Factories;

use App\Models\Entry;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailEntryFactory extends Factory
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
            'entry_id' => Entry::factory(),
            'store_id' => Store::factory(),
            'amount' => $this->faker->randomNumber(),
            'price_buy' => $this->faker->randomFloat($nbMaxDecimals = 4, $min = 1, $max = 4)
        ];
    }
}
