<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table='tickets';

    protected $fillable= ['id_compra','codigo_barras','ruta_pdf','id_pasajero','id_asiento','clase'];

    public $timestamps=false;

    public function pasajero()
    {
        // 1 ticket pertenece a un pasajero.
        return $this->belongsTo('App\Models\Pasajero');
    }

    public function asiento()
    {
        // 1 ticket pertenece a un asiento.
        return $this->belongsTo('App\Models\Asiento');
    }
}
