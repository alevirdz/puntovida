<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crea los roles por defecto
        $superAdministrador = Role::firstOrCreate(['name' => 'superadmin']);
        $admin = Role::firstOrCreate(['name' => 'admin']);

        $superAdministrador->givePermissionTo(Permission::all());

        //Crear permisos por módulo
        Permission::firstOrCreate(['name' => 'Modulo Registro']);
        Permission::firstOrCreate(['name' => 'Modulo Go']);
        Permission::firstOrCreate(['name' => 'Modulo Bienvenida']);

         // Agregar permisos especificos
        $admin->givePermissionTo([
            'Modulo Bienvenida',
            'Modulo Go',
        ]);
    }
}
