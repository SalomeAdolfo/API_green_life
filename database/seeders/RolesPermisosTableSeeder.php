<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_vendedor = Role::create(['name' => 'Vendedor']);
        $rol_cliente = Role::create(['name' => 'Cliente']);

        $permission = Permission::create(['name' => 'productos.index']);
        $rol_vendedor->givePermissionTo($permission);
        $rol_cliente->givePermissionTo($permission);
        
        $permission = Permission::create(['name' => 'productos.show']);
        $rol_vendedor->givePermissionTo($permission);
        $rol_cliente->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'productos.create']);
        $rol_vendedor->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'productos.store']);
        $rol_vendedor->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'productos.edit']);
        $rol_vendedor->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'productos.update']);
        $rol_vendedor->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'productos.destroy']);
        $rol_vendedor->givePermissionTo($permission);
    }
}
