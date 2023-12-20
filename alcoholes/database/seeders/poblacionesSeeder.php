<?php

namespace Database\Seeders;

use App\Models\poblaciones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class poblacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        DB::table('poblaciones')->delete();

        $poblaciones=array(
            //Calkiní
            array('idMunicipio'=>'1', 'nombrePoblacion'=>'Becal'),
            array('idMunicipio'=>'1', 'nombrePoblacion'=>'Calkiní'),
            array('idMunicipio'=>'1', 'nombrePoblacion'=>'Isla Arena'),
            array('idMunicipio'=>'1', 'nombrePoblacion'=>'Nunkini'),
            array('idMunicipio'=>'1', 'nombrePoblacion'=>'Sahcabchen'),
            array('idMunicipio'=>'1', 'nombrePoblacion'=>'Santa María'),
            array('idMunicipio'=>'1', 'nombrePoblacion'=>'Tankunché'),
            
            //Campeche
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Alfredo Vladimir Bonfil'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Castamay'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'China'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Imi'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Imi II'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Imi III'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Kikab'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Lerma'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Melchor Ocampo'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Nilchi'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Pic'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Pocyaxum'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Pueblo Nuevo de Cayal'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Samulá'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'San Francisco de Campeche'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Tixmucuy'),
            array('idMunicipio'=>'2', 'nombrePoblacion'=>'Uayamon'),

            //Carmen
            array('idMunicipio'=>'3', 'nombrePoblacion'=>'Chicbul'),
            array('idMunicipio'=>'3', 'nombrePoblacion'=>'Chivoja'),
            array('idMunicipio'=>'3', 'nombrePoblacion'=>'Ciudad del Carmen'),
            array('idMunicipio'=>'3', 'nombrePoblacion'=>'El Aguacatal'),
            array('idMunicipio'=>'3', 'nombrePoblacion'=>'Isla Aguada'),
            array('idMunicipio'=>'3', 'nombrePoblacion'=>'Lic. Gustavo Díaz Ordaz'),
            array('idMunicipio'=>'3', 'nombrePoblacion'=>'Mamantel'),
            array('idMunicipio'=>'3', 'nombrePoblacion'=>'Mireya'),
            array('idMunicipio'=>'3', 'nombrePoblacion'=>'Nuevo Prgoreso'),
            array('idMunicipio'=>'3', 'nombrePoblacion'=>'Sabancuy'),

            //Champotón
            array('idMunicipio'=>'4', 'nombrePoblacion'=>'Carrillo Puerto'),
            array('idMunicipio'=>'4', 'nombrePoblacion'=>'Champotón'),
            array('idMunicipio'=>'4', 'nombrePoblacion'=>'Cinco de Febrero'),
            array('idMunicipio'=>'4', 'nombrePoblacion'=>'La Joya'),
            array('idMunicipio'=>'4', 'nombrePoblacion'=>'Ley Federal de Reforma Agraria'),
            array('idMunicipio'=>'4', 'nombrePoblacion'=>'Miguel Colorado'),
            array('idMunicipio'=>'4', 'nombrePoblacion'=>'Pixoyal'),
            array('idMunicipio'=>'4', 'nombrePoblacion'=>'Ulumal'),
            array('idMunicipio'=>'4', 'nombrePoblacion'=>'Xbacab'),
            array('idMunicipio'=>'4', 'nombrePoblacion'=>'Yohaltún'),

            //HecelchaKán
            array('idMunicipio'=>'5', 'nombrePoblacion'=>'Campo Menonita Yalnón'),
            array('idMunicipio'=>'5', 'nombrePoblacion'=>'Chunkanán'),
            array('idMunicipio'=>'5', 'nombrePoblacion'=>'Cumpich'),
            array('idMunicipio'=>'5', 'nombrePoblacion'=>'Hecelchakán'),
            array('idMunicipio'=>'5', 'nombrePoblacion'=>'Nohalal'),
            array('idMunicipio'=>'5', 'nombrePoblacion'=>'Pocboc'),
            array('idMunicipio'=>'5', 'nombrePoblacion'=>'Pomuch'),

            //Hopelchén
            array('idMunicipio'=>'6', 'nombrePoblacion'=>'Crucero San Luis'),
            array('idMunicipio'=>'6', 'nombrePoblacion'=>'Dzibalchén'),
            array('idMunicipio'=>'6', 'nombrePoblacion'=>'Hopelchén'),
            array('idMunicipio'=>'6', 'nombrePoblacion'=>'Nonhabin'),
            array('idMunicipio'=>'6', 'nombrePoblacion'=>'Vicente Guerrero'),
            array('idMunicipio'=>'6', 'nombrePoblacion'=>'X-Canhá'),
            array('idMunicipio'=>'6', 'nombrePoblacion'=>'Xcupil'),
            array('idMunicipio'=>'6', 'nombrePoblacion'=>'Xmabén'),

            //Palizada
            array('idMunicipio'=>'7', 'nombrePoblacion'=>'Blanca Mariposa'),
            array('idMunicipio'=>'7', 'nombrePoblacion'=>'La Toza'),
            array('idMunicipio'=>'7', 'nombrePoblacion'=>'Palizada'),

            //Tenabo
            array('idMunicipio'=>'8', 'nombrePoblacion'=>'Emiliano Zapata'),
            array('idMunicipio'=>'8', 'nombrePoblacion'=>'La Esperanza'),
            array('idMunicipio'=>'8', 'nombrePoblacion'=>'Tenabo'),

            //Escárcega
            array('idMunicipio'=>'9', 'nombrePoblacion'=>'Chan Laguna'),
            array('idMunicipio'=>'9', 'nombrePoblacion'=>'División del Norte'),
            array('idMunicipio'=>'9', 'nombrePoblacion'=>'Escárcega'),
            array('idMunicipio'=>'9', 'nombrePoblacion'=>'La Libertad'),

            //Calakmul
            array('idMunicipio'=>'10', 'nombrePoblacion'=>'Calakmul'),
            array('idMunicipio'=>'10', 'nombrePoblacion'=>'Dos Lagunas'),
            array('idMunicipio'=>'10', 'nombrePoblacion'=>'Lázaro Cárdenas Número 2'),
            array('idMunicipio'=>'10', 'nombrePoblacion'=>'Nueva Vida'),
            array('idMunicipio'=>'10', 'nombrePoblacion'=>'Nuevo Bécal'),
            array('idMunicipio'=>'10', 'nombrePoblacion'=>'Pablo Garcia'),
            array('idMunicipio'=>'10', 'nombrePoblacion'=>'Santo Domingo'),
            array('idMunicipio'=>'10', 'nombrePoblacion'=>'Xpujil'),

            //Candelaria
            array('idMunicipio'=>'11', 'nombrePoblacion'=>'Agua Azul'),
            array('idMunicipio'=>'11', 'nombrePoblacion'=>'Benito Juárez'),
            array('idMunicipio'=>'11', 'nombrePoblacion'=>'Candelaria'),
            array('idMunicipio'=>'11', 'nombrePoblacion'=>'El Desengaño'),
            array('idMunicipio'=>'11', 'nombrePoblacion'=>'El Tigre'),
            array('idMunicipio'=>'11', 'nombrePoblacion'=>'Nuevo Coahuila'),

            //Seybaplaya
            array('idMunicipio'=>'12', 'nombrePoblacion'=>'Seybaplaya'),
            array('idMunicipio'=>'12', 'nombrePoblacion'=>'Villa Madero'),
            array('idMunicipio'=>'12', 'nombrePoblacion'=>'Xkeulil'),

            //Dzibalché
            array('idMunicipio'=>'13', 'nombrePoblacion'=>'Dzibalché'),
            array('idMunicipio'=>'13', 'nombrePoblacion'=>'Bacabchén'),


        );

        DB::table('poblaciones')->insert($poblaciones);

    }

}
