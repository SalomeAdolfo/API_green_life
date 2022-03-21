<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['categoria'=>'Frutas y verduras', 'estatus'=>'activa'],
            ['categoria'=>'Frutas', 'estatus'=>'activa'],
            ['categoria'=>'Herramientas', 'estatus'=>'activa'],
            ['categoria'=>'Semillas', 'estatus'=>'activa'],
        ]);
    }
}
