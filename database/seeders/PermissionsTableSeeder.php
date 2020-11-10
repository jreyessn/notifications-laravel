<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create(['name' => 'list users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'show users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'delete users']);

        $superadmin = Role::create(['name' => 'Administrador']);
        $superadmin->givePermissionTo(Permission::all());
        
        $proveedor = Role::create(['name' => 'Invitado']);
        $proveedor->givePermissionTo([
            'list users'
        ]);
        
    }
}
