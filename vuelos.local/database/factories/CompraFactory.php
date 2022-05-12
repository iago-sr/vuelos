<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vuelo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
         
            'user_id'=>$this->faker->numberBetween($min=1,$max=User::max('id')),
            'billetera'=>$this->faker->name(),
            'numero_tarjeta'=>$this->faker->regexify('[0-9]{16}'),
            'caducidad_tarjeta'=>$this->faker->date($format='m/Y',$min=now()),
            'ccv_tarjeta'=>$this->faker->regexify('[0-9]{3}'),
            'precio'=>$this->faker->numberBetween($min=30,$max=800),
            'id_vuelo'=>$this->faker->numberBetween($min=1,$max=Vuelo::max('id'))
        ];
    }
}
