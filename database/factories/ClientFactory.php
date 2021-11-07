<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
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
            'name' => $this->faker->company(),
            'type_document' => $voucher[mt_rand(0,count($voucher)-1)],
            'num_document' => $this->faker->randomNumber(8),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->email()
        ];
    }
}
