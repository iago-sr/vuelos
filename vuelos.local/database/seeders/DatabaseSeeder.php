<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Vuelo::factory(10)->create();
         \App\Models\Asiento::factory(10)->create();
         \App\Models\Compra::factory(10)->create();
         \App\Models\Pasajero::factory(10)->create();
         \App\Models\Ticket::factory(10)->create();
    }
}
