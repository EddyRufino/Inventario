<?php

namespace Database\Factories;

use App\Models\Provider;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $voucher = ['Boleta', 'Factura'];

        return [
            'provider_id' => Provider::factory(),
            'user_id' => User::factory(),
            'type_voucher' => $voucher[mt_rand(0,count($voucher)-1)],
            'serie_voucher' => $this->faker->randomNumber(8),
            'num_voucher' => $this->faker->randomNumber(8),
            'date' => $this->faker->dateTime(),
            'tax' => $this->faker->randomFloat($nbMaxDecimals = 4, $min = 2, $max = 4),
            'total_buy' => $this->faker->randomFloat($nbMaxDecimals = 4, $min = 1, $max = 4),
            'state' => true
        ];
    }
}
