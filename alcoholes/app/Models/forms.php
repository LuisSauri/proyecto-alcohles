<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forms extends Model
{
    use HasFactory;

    public function municipio()
    {
        return $this->belongsTo(municipios::class, 'idMunicipio', 'idMunicipio');
    }

    public function poblacion()
    {
        return $this->belongsTo(poblaciones::class, 'idLocalidad', 'idLocalidad');
    }

    public function giro()
    {
        return $this->belongsTo(giros::class, 'idGiro', 'idGiro');
    }
    


public function giros(){
    return $this->hasMany('App\Models\giros');
}

protected $fillable = ['fecha_rev', 'idMunicipio', 'idLocalidad', 'colonia',
'calle', 'cruzamiento', 'clave', 'nombreLocal',
'idGiro', 'fecha_mov', 'nombreContribuyente', 'rfc',
'licencia', 'horario', 'fol_ant', 'arrendamiento', 'telefono'
];

protected $table = 'form';
}
