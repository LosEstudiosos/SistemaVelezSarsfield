<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Role1 = Role::create(['name' => 'Admin']);
        $Role2 = Role::create(['name' => 'Directivo']);
        $Role3 = Role::create(['name' => 'Preceptor']);
        $Role4 = Role::create(['name' => 'Profesor']);
        $Role5 = Role::create(['name' => 'Tutor']);
        $Role6 = Role::create(['name' => 'Alumno']);
        
        Permission::create(['name' => 'listarRoles'])->syncRoles([$Role1]);
        Permission::create(['name' => 'crearRoles'])->syncRoles([$Role1]);
        Permission::create(['name' => 'editarRoles'])->syncRoles([$Role1]);
        Permission::create(['name' => 'eliminarRoles'])->syncRoles([$Role1]);

        Permission::create(['name' => 'listarUsuarios'])->syncRoles([$Role1, $Role2]);
        Permission::create(['name' => 'crearUsuarios'])->syncRoles([$Role1, $Role2]);
        Permission::create(['name' => 'editarUsuarios'])->syncRoles([$Role1, $Role2]);
        Permission::create(['name' => 'eliminarUsuarios'])->syncRoles([$Role1, $Role2]);

        Permission::create(['name' => 'cargarNotas'])->syncRoles([$Role1, $Role2, $Role4]);
        Permission::create(['name' => 'abrirInstancia'])->syncRoles([$Role1, $Role2]);
        Permission::create(['name' => 'cerrarInstancia'])->syncRoles([$Role1, $Role2]);

        Permission::create(['name' => 'mostrarCalificaciones'])->syncRoles([$Role1, $Role2, $Role3, $Role5]);

        Permission::create(['name' => 'mostrarCalendario'])->syncRoles([$Role1, $Role2, $Role3, $Role4, $Role6]);
        Permission::create(['name' => 'crearEvento'])->syncRoles([$Role1, $Role2, $Role3, $Role4, $Role6]);
        Permission::create(['name' => 'editarEvento'])->syncRoles([$Role1, $Role2, $Role3, $Role4, $Role6]);
        Permission::create(['name' => 'eliminarEvento'])->syncRoles([$Role1, $Role2, $Role3, $Role4, $Role6]);

        Permission::create(['name' => 'mostrarMensaje'])->syncRoles([$Role1, $Role2, $Role3, $Role4, $Role5, $Role6]);
        Permission::create(['name' => 'crearMensaje'])->syncRoles([$Role1, $Role2, $Role3, $Role4, $Role5, $Role6]);
        Permission::create(['name' => 'editarMensaje'])->syncRoles([$Role1, $Role2, $Role3, $Role4, $Role5, $Role6]);
        Permission::create(['name' => 'eliminarMensaje'])->syncRoles([$Role1, $Role2, $Role3, $Role4, $Role5, $Role6]);
        
    }
}
