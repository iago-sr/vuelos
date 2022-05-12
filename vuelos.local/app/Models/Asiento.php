<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
    use HasFactory;

    protected $table='asientos';

    protected $fillable= ['nombre','id_vuelo','ocupado'];

    public $timestamps=false;

    public function usuario()
    {
        // 1 asiento pertenece a un Fabricante.
        return $this->belongsTo('App\Models\User');
    }
    
    public function vuelo()
    {
        // 1 asiento pertenece a un vuelo.
        return $this->belongsTo('App\Models\Vuelo');
    }

}