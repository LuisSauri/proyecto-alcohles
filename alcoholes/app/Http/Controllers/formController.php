<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use App\Models\forms;
use App\Models\giros;
use App\Models\municipios;
use App\Models\poblaciones;
use App\Models\padrones;
use Illuminate\Http\Request;

class formController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        //$direcciones=forms::all();
        $direcciones = forms::with('municipio', 'poblacion')->get();


        $padrones=forms::all();
        $giros=giros::all();
        $municipios=municipios::all();
        $poblaciones=poblaciones::all();
        
        return view('/registros/form', compact('giros', 'municipios', 'poblaciones', 'padrones', 'direcciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $request->validate([
            'fecha_rev'=>'required|date',
            'idMunicipio'=>'required',
            'idLocalidad'=>'required',
            'colonia'=>'required',
            'calle'=>'required',
            'cruzamiento'=>'required',
            'clave'=>'required',
            'nombreLocal'=>'required',
            'idGiro'=>'required',
            'fecha_mov'=>'required|date',
            'nombreContribuyente'=>'required',
            'rfc'=>'required',
            'licencia'=>'required',
            'horario'=>'required',
            'fol_ant'=>'required',
            'arrendamiento'=>'required',
            'telefono'=>'required',
        ]);

        $registro = forms::create($request->all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $listAlcoholes = new forms();
        $listAlcoholes->fecha_rev=$request->input('fecha_rev');
        $listAlcoholes->idMunicipio=$request->input('idMunicipio');
        $listAlcoholes->idLocalidad=$request->input('idLocalidad');
        $listAlcoholes->colonia=$request->input('colonia');
        $listAlcoholes->calle=$request->input('calle');
        $listAlcoholes->cruzamiento=$request->input('cruzamiento');
        $listAlcoholes->clave=$request->input('clave');
        $listAlcoholes->nombreLocal=$request->input('nombreLocal');
        $listAlcoholes->idGiro=$request->input('idGiro');
        $listAlcoholes->fecha_mov=$request->input('fecha_mov');
        $listAlcoholes->nombreContribuyente=$request->input('nombreContribuyente');
        $listAlcoholes->rfc=$request->input('rfc');
        $listAlcoholes->licencia=$request->input('licencia');
        $listAlcoholes->horario=$request->input('horario');
        $listAlcoholes->fol_ant=$request->input('fol_ant');
        $listAlcoholes->arrendamiento=$request->input('arrendamiento');
        $listAlcoholes->telefono=$request->input('telefono');

        $listAlcoholes->save();

        return redirect('/registros/form');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $padron = forms::find($id);
        $giros=giros::all();
        $municipios=municipios::all();
        $poblaciones=poblaciones::all();

                  
        return view('registros.padronAct', compact('padron','giros','municipios','poblaciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'fecha_rev'=>'required|date',
            'idMunicipio'=>'required',
            'idLocalidad'=>'required',
            'colonia'=>'required',
            'calle'=>'required',
            'cruzamiento'=>'required',
            'clave'=>'required',
            'nombreLocal'=>'required',
            'idGiro'=>'required',
            'fecha_mov'=>'required|date',
            'nombreContribuyente'=>'required',
            'rfc'=>'required',
            'licencia'=>'required',
            'horario'=>'required',
            'fol_ant'=>'required',
            'arrendamiento'=>'required',
            'telefono'=>'required',
        ]);

        $padron =forms::find($id);
        $padron->fecha_rev=$request->input('fecha_rev');
        $padron->idMunicipio=$request->input('idMunicipio');
        $padron->idLocalidad=$request->input('idLocalidad');
        $padron->colonia=$request->input('colonia');
        $padron->calle=$request->input('calle');
        $padron->cruzamiento=$request->input('cruzamiento');
        $padron->clave=$request->input('clave');
        $padron->nombreLocal=$request->input('nombreLocal');
        $padron->idGiro=$request->input('idGiro');
        $padron->fecha_mov=$request->input('fecha_mov');
        $padron->nombreContribuyente=$request->input('nombreContribuyente');
        $padron->rfc=$request->input('rfc');
        $padron->licencia=$request->input('licencia');
        $padron->horario=$request->input('horario');
        $padron->fol_ant=$request->input('fol_ant');
        $padron->arrendamiento=$request->input('arrendamiento');
        $padron->telefono=$request->input('telefono');

        $padron->save();

        return redirect('/registros/padron');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $padron=forms::find($id);
        
        $padron->delete();

        return redirect('/registros/padron');
    }


    public function getPoblaciones($idMunicipio)
{
    // Obtén los datos de población basados en $idMunicipio y conviértelos a JSON
    $poblaciones = poblaciones::where('idMunicipio', $idMunicipio)->select('idLocalidad', 'nombrePoblacion')->get();
    return response()->json($poblaciones);
}

}
