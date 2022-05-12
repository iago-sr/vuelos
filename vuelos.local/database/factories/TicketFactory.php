<?php

namespace Database\Factories;

use App\Models\Asiento;
use App\Models\Pasajero;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codigo_barras'=>$this->faker->isbn10().$this->faker->isbn10().$this->faker->isbn10(),
            'ruta_pdf'=>$this->faker->name(),
            'id_pasajero'=>$this->faker->numberBetween($min=1,$max=Pasajero::max('id')),
            'id_asiento'=>$this->faker->numberBetween($min=1,$max=Asiento::max('id')),
            'clase'=>$this->faker->randomElement($array=array('Economy','Business','First Class'))
        ];
    }
}
