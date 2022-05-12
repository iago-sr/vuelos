<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    protected $table='vuelos';

    protected $fillable= ['aeropuerto_salida','aeropuerto_llegada','fecha_salida','fecha_llegada','precio','codigo'];

    public $timestamps=false;

}