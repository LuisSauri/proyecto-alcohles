<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    use HasFactory;
    public function poblaciones(){
        return $this->hasMany('App\Models\poblaciones');
    }

    public function forms()
    {
        return $this->hasMany(forms::class, 'idMunicipio');
    }
    


}
