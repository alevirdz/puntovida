<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Primero creamos los roles
        $this->call(RolesSeeder::class);

        $superAdministrador = User::factory()->create([
            'name' => 'Administrador Supremo',
            'email' => 'test@example.com',
            'password' => Hash::make('password')
        ]);

        $admin = User::factory()->create([
           'name' => 'Admin',
           'email' => 'admin@example.com',
           'password' => Hash::make('admin')
        ]);

        //Asigna role por defecto
        $superAdministrador->assignRole('superadmin');
        $admin->assignRole('admin');
    }
}
