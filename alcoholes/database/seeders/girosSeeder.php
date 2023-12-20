<?php

namespace Database\Seeders;

use App\Models\girosModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class girosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('giros')->delete();

        $giros = array(
            array('giro'=>'Agencia'),
            array('giro'=>'Bar'),
            array('giro'=>'Bodega'),
            array('giro'=>'Boliche'),
            array('giro'=>'Botanero'),
            array('giro'=>'Cabaret'),
            array('giro'=>'Cantina'),
            array('giro'=>'Centro deportivo'),
            array('giro'=>'Centro nocturno'),
            array('giro'=>'Centro recreativo'),
            array('giro'=>'Cocteleria'),
            array('giro'=>'Deposito'),
            array('giro'=>'Discoteca'),
            array('giro'=>'Distribuidora'),
            array('giro'=>'Expendio'),
            array('giro'=>'Hotel'),
            array('giro'=>'Licoreria'),
            array('giro'=>'Loncheria'),
            array('giro'=>'Minisuper local'),
            array('giro'=>'Minisupers'),
            array('giro'=>'Motel'),
            array('giro'=>'Restaurante'),
            array('giro'=>'Salón cerveza'),
            array('giro'=>'Salón de baile'),
            array('giro'=>'Salón de billar'),
            array('giro'=>'Subagencia'),
            array('giro'=>'Supermercados'),
            array('giro'=>'Tienda de abarrotes'),
            array('giro'=>'Tienda de conveniencia'),
            array('giro'=>'Vinateria'),
            
        );
        
        DB::table('giros')->insert($giros);
    }
}
