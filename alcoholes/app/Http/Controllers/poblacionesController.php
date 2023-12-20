<?php

namespace App\Http\Controllers;

use App\Models\poblaciones;
use Illuminate\Http\Request;

class poblacionesController extends Controller
{
    public function index($idMunicipio){
        $poblacion_municipio=poblaciones::where('idMunicipio', $idMunicipio)->get();

        return response()->json($poblacion_municipio);
    }

    public function forms()
    {
        return $this->hasMany(forms::class, 'idLocalidad', 'idLocalidad');
    }
}
