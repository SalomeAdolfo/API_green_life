<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategorias')->insert([
            ['categoria_id' => 1, 'subcategoria' => 'Alimentos', 'estatus' => 'activa']
            , ['categoria_id' => 1, 'subcategoria' => 'Cervezas, vinos y licores', 'estatus' => 'activa']
            , ['categoria_id' => 2, 'subcategoria' => 'En inglés', 'estatus' => 'activa']
            , ['categoria_id' => 2, 'subcategoria' => 'Infantil y juvenil', 'estatus' => 'activa']
            , ['categoria_id' => 2, 'subcategoria' => 'Literatura y ficción', 'estatus' => 'activa']
            , ['categoria_id' => 2, 'subcategoria' => 'Libros de texto', 'estatus' => 'activa']
            , ['categoria_id' => 2, 'subcategoria' => 'Profesional y técnico', 'estatus' => 'activa']
            , ['categoria_id' => 2, 'subcategoria' => 'Ciencia ficción y fantasía', 'estatus' => 'activa']
            , ['categoria_id' => 2, 'subcategoria' => 'Romance', 'estatus' => 'activa']
            , ['categoria_id' => 2, 'subcategoria' => 'EBook', 'estatus' => 'activa']
        ]);
    }
}
