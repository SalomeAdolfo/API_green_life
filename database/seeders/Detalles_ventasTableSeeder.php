<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Detalles_ventasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detalles-venta')->insert([
            [
                'venta_id' => 1,
                'producto_id' => 1,
                'cantidad' => '18',
                'total' => '320',
            ]
        ]);
    }
}
