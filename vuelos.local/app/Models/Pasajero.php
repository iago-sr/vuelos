<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    use HasFactory;

    
    protected $table='pasajeros';

    protected $fillable= ['nombre','apellidos','pasaporte','nacionalidad','especial','id_compra','equipaxe'];

    public $timestamps=false;

    public function compra()
    {
        // 1 compra pertenece a un pasajero.
        return $this->belongsTo('App\Models\Compra');
    }
    public function ticket()
    {
        // 1 pasajero tiene un ticket.
        return $this->hasOne('App\Models\Ticket');
    }
}
