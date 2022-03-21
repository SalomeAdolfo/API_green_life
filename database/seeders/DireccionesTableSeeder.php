<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DireccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('direcciones')->insert([
            [
                'municipio_id' => '723',
                'usuario_id' => '1',
                'localidad' => 'Villa cuauhtémoc',
                'calle' => 'Rio Francisco I Madero',
                'numero_interior' => '18',
                'numero_exterior' => 'N/A',
                'codigo_postal' => '52085',
                'referencias' => 'Adelante de la capilla'
            ],
            [
                'municipio_id' => '723',
                'usuario_id' => '2',
                'localidad' => 'Villa cuauhtémoc',
                'calle' => 'Emiliano Zapata',
                'numero_interior' => '18',
                'numero_exterior' => 'N/A',
                'codigo_postal' => '52085',
                'referencias' => 'Frente al salón excelencia'
            ]
        ]);
    }
}
