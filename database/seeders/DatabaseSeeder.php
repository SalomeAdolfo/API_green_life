<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategoriasTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(MunicipiosTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(VentasTableSeeder::class);
        $this->call(Datos_bancariosTableSeeder::class);
        $this->call(DireccionesTableSeeder::class);
        $this->call(Detalles_ventasTableSeeder::class);
        $this->call(Expedientes_vendedoresTableSeeder::class);
        $this->call(RolesPermisosTableSeeder::class);
    }
}
