<?php

namespace Database\Factories;

use App\Models\Compra;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasajero>
 */
class PasajeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'apellidos'=>$this->faker->name(),
            'pasaporte'=>$this->faker->regexify('[A-Z]{3}[0-9]{6}'),
            'nacionalidad'=>$this->faker->name(),
            'especial'=>$this->faker->boolean(),
//            'especial'=>$this->faker->randomElement($array=array('Economy','Business','First Class')),
            'id_compra'=>$this->faker->numberBetween($min=1,$max=Compra::max('id')),
            'equipaxe'=>$this->faker->boolean()
        ];
    }
}
