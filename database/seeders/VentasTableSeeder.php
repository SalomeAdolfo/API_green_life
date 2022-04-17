<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ventas')->insert([
           [ 
            "Producto" => "Pala",
            "cantidad" => "8",
            "Precio" => 200,
            "total" => 1600
           ]
        ]);
    }
}
