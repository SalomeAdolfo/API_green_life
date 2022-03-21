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
        DB::table('datos-bancarios') -> insert([
            [
                'numero' => '789456324521387965',
                'fecha_expiración' => '2023-03-24',
                'ccv' => '1245',
                'banco' => 'Banorte',
                'usuario_id' => '3'
            ],
        ]);
    }
}
