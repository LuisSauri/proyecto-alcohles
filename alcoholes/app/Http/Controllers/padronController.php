<?php

namespace App\Http\Controllers;
use App\Models\forms;
use App\Models\giros;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PadronExport;
use App\Models\municipios;
use App\Models\poblaciones;

use Illuminate\Http\Request;

class padronController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search') ?? '';
    
        $padrones = forms::query();
    
        if (!empty($search)) {
            $padrones = $padrones->where(function ($query) use ($search) {
                $idGiro = giros::where('giro', 'LIKE', "%$search%")->pluck('idGiro')->first();

                $query->where('fecha_rev', 'LIKE', "%$search%")
                    ->orWhere('fecha_mov', 'LIKE', "%$search%")
                    ->orWhere('idMunicipio', 'LIKE', "%$search%")
                    ->orWhere('idLocalidad', 'LIKE', "%$search%")
                    ->orWhere('colonia', 'LIKE', "%$search%")
                    ->orWhere('calle', 'LIKE', "%$search%")
                    ->orWhere('cruzamiento', 'LIKE', "%$search%")
                    ->orWhere('clave', 'LIKE', "%$search%")
                    ->orWhere('nombreLocal', 'LIKE', "%$search%")
                    ->orWhere('idGiro', '=', $idGiro)
                    ->orWhere('nombreContribuyente', 'LIKE', "%$search%")
                    ->orWhere('rfc', 'LIKE', "%$search%")
                    ->orWhere('licencia', 'LIKE', "%$search%")
                    ->orWhere('horario', 'LIKE', "%$search%")
                    ->orWhere('fol_ant', 'LIKE', "%$search%")
                    ->orWhere('arrendamiento', 'LIKE', "%$search%")
                    ->orWhere('telefono', 'LIKE', "%$search%");
            });
        }
    
        $padronesPaginate = $padrones->paginate(50);
            
        return view('/registros/padron', ['padrones' => $padronesPaginate, 'search' => $search]);
    }
    
    
    public function pdf(){
        $padronesCompleto = forms::all();
        $pdf = Pdf::loadView('/registros/padron_pdf', compact('padronesCompleto'));
        return $pdf->stream('PadronCampeche.pdf');
    }

    public function excel(){
        return Excel::download(new PadronExport, 'PadronCampeche.xlsx');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        return view('/registro/padronAct');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
