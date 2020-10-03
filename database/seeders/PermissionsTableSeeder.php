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

        //Permission list

        Permission::create(['name' => 'providers.index']);
        Permission::create(['name' => 'providers.edit']);
        Permission::create(['name' => 'providers.show']);
        Permission::create(['name' => 'providers.create']);
        Permission::create(['name' => 'providers.destroy']);

        Permission::create(['name' => 'providers_state.index']);
        Permission::create(['name' => 'providers_state.create']);
        Permission::create(['name' => 'providers_state.approve_document']);
        Permission::create(['name' => 'providers_state.aprove_edit_information']); 
        // este permiso recibe correos de las solicitudes

        Permission::create(['name' => 'providers_state.request_edit_information']);
        Permission::create(['name' => 'providers_state.contract']);
        Permission::create(['name' => 'providers_state.form_sap']);

        Permission::create(['name' => 'requirements.index']);
        Permission::create(['name' => 'requirements.edit']);
        Permission::create(['name' => 'requirements.show']);
        Permission::create(['name' => 'requirements.create']);
        Permission::create(['name' => 'requirements.destroy']);

        Permission::create(['name' => 'guides.index']);
        Permission::create(['name' => 'guides.edit']);
        Permission::create(['name' => 'guides.show']);
        Permission::create(['name' => 'guides.create']);
        Permission::create(['name' => 'guides.destroy']);

        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.show']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.destroy']);

        //Admin
        $compras = Role::create(['name' => 'Compras']);

        $compras->givePermissionTo([
            'providers.index',
            'providers.show',
            'providers_state.index',
            'providers_state.approve_document',
            'providers_state.aprove_edit_information',
            'providers_state.form_sap',
        ]);

        $superadmin = Role::create(['name' => 'Super Administrador']);
        $superadmin->givePermissionTo(Permission::all());
       
        //Guest
        $proveedor = Role::create(['name' => 'Proveedor']);

        $proveedor->givePermissionTo([
            'providers_state.index',
            'providers_state.create',
            'providers_state.request_edit_information',
            'requirements.index',
            'requirements.show',
            'guides.index',
            'guides.show',
        ]);
        
    }
}
