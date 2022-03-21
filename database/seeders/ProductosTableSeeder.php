<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
            'categoria_id' => 1,    
            'producto' => 'Lechuga',
            'costo_unitario' => 14.50,
            'precio_unitario' => 17.50,
            'existencias' => 50.00,
            'descripcion' => 'Lechuga fresca',
            'imagen' => 'https://cdn.shopify.com/s/files/1/0021/9290/0156/products/lechuga_francesa_1024x1024.jpg?v=1552564741',
            'estatus' => 'activo'
            ]
        ]);
    }
}
