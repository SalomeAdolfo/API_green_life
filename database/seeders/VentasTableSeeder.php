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
            'id' => 1,
            'vendedor_id'=> '2',
            'categoria_id'=> '1',
            'total'=> '40',
            'fecha'=> '2022-03-20'
           ]
        ]);
    }
}
