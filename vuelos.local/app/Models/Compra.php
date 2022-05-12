<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    
    protected $table='compras';

    protected $fillable= ['id_usuario','billetera','numero_tarjeta','caducidad_tarjeta','ccv_tarjeta','precio','id_vuelo'];

    public $timestamps=false;


    public function usuario()
    {
        // 1 compra pertenece a un Fabricante.
        return $this->belongsTo('App\Models\User');
    }

    public function vuelo()
    {
        // 1 compra pertenece a un vuelo.
        return $this->belongsTo('App\Models\Vuelo');
    }


}