<?php

namespace Database\Seeders;

use App\Models\municipiosModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class municipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('municipios')->delete();

        $municipios=array(
            array('clave'=>'01', 'nombre'=>'Calkiní'),
            array('clave'=>'02', 'nombre'=>'Campeche'),
            array('clave'=>'03', 'nombre'=>'Carmen'),
            array('clave'=>'04', 'nombre'=>'Champotón'),
            array('clave'=>'05', 'nombre'=>'Hecelchakán'),
            array('clave'=>'06', 'nombre'=>'Hopelchén'),
            array('clave'=>'07', 'nombre'=>'Palizada'),
            array('clave'=>'08', 'nombre'=>'Tenabo'),
            array('clave'=>'09', 'nombre'=>'Escárcega'),
            array('clave'=>'10', 'nombre'=>'Calakmul'),
            array('clave'=>'11', 'nombre'=>'Candelaria'),
            array('clave'=>'12', 'nombre'=>'Seybaplaya'),
            array('clave'=>'13', 'nombre'=>'Dzitbalché'),
        );

        DB::table('municipios')->insert($municipios);

    }
}
