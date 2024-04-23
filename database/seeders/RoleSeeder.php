<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleJournalist = Role::create(['name' => 'Journalist']);

        //Permisos para los usuarios

        Permission::create(['name' => 'admin.count.index', 
                            'description' => 'Administracion de cuenta'])->assignRole($roleAdmin);

        Permission::create(['name' => 'admin.user.index', 
                            'description' => 'Ver listado de usuarios'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.user.create', 
                            'description' => 'Crear nuevos usuarios'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.user.modify', 
                            'description' => 'Editar informacion de los usuarios'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.user.show', 
                            'description' => 'Ver características de los usuarios'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.user.destroy', 
                            'description' => 'Eliminar usuarios'])->assignRole($roleAdmin);

                            //permisos para los roles
        Permission::create(['name' => 'admin.role.index', 
                'description' => 'Ver listado de roles'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.role.create', 
                'description' => 'Crear nuevos roles'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.role.modify', 
                'description' => 'Editar informacion de los roles'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.role.show', 
                'description' => 'Ver caracteristicas de los roles'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.role.destroy', 
                'description' => 'Eliminar roles'])->assignRole($roleAdmin);

        //Permisos para los documentos

        Permission::create(['name' => 'admin.information.index', 
                            'description' => 'Ver listado de documentos'])->syncRoles([$roleAdmin, $roleJournalist]);
        Permission::create(['name' => 'admin.information.create', 
                            'description' => 'Crear nuevos documentos'])->syncRoles([$roleAdmin, $roleJournalist]);
        Permission::create(['name' => 'admin.information.modify', 
                            'description' => 'Editar informacion de los documentos'])->syncRoles([$roleAdmin, $roleJournalist]);
        Permission::create(['name' => 'admin.information.show', 
                            'description' => 'Ver características de los documentos'])->syncRoles([$roleAdmin, $roleJournalist]);
        Permission::create(['name' => 'admin.information.destroy', 
                            'description' => 'Eliminar documentos'])->assignRole($roleAdmin);
    }
}
