<?php

namespace Database\Factories;

use App\Models\Vuelo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AsientoFactory extends Factory
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
            'pasaporte'=>$this->faker->regexify('[A-Z]{3}[0-9]{6}'),
            'nacionalidad'=>$this->faker->name(),
            'especial'=>$this->faker->boolean(),
            'id_vuelo'=>$this->faker->numberBetween($min=1,$max=Vuelo::max('id'))
        ];
    }
}
