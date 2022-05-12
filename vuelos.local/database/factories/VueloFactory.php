<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VueloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            // File::get(__DIR__.'/iata_codes.txt'),
            // File::get(__DIR__.'/iata_codes.txt'),
            'aeropuerto_salida'=>$this->faker->name(),
            'aeropuerto_llegada'=>$this->faker->name(),
            'fecha_salida'=>$this->faker->date($format = 'd-m-Y', $min=now()).' '.$this->faker->time($format = 'H:i', $min=now()), 
            'fecha_llegada'=>$this->faker->date($format = 'd-m-Y',$min=now()).' '.$this->faker->time($format = 'H:i', $min=now()) ,
            'precio'=>$this->faker->numberBetween($min = 20, $max = 900),
            'codigo'=>$this->faker->regexify('[0-9]{5}')
        
        ];
    }
}
