<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Datos_bancariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datos_bancarios') -> insert([
            [
                'numero' => bcrypt('789456324521387965'),
                'fecha_expiracion' => '2023-03-24',
                'ccv' => bcrypt('1245'),
                'banco' => 'Banorte',
                'usuario_id' => '3'
            ],
        ]);
    }
}
