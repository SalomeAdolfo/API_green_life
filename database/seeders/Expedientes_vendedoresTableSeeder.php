<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Expedientes_vendedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expedientes-vendedores')->insert([
            [
                'vendedor_id'=> 3,
                'rfc'=> 'SAHA020928',
                'curp'=> 'SAHA020928HMCLRDA1',
                'clave_elector'=> 'SASGTASD52'
            ]
            ]);
    }
}
