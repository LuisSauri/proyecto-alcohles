<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poblaciones extends Model
{
    use HasFactory;

    public function municipio(){
        return $this->belongsTo(municipios::class, 'idMunicipio');
    }

}
