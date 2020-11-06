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
        Permission::query()->delete();

        Permission::create(['name' => 'dashboard']); 
        Permission::create(['name' => 'register provider']); // 2
        Permission::create(['name' => 'list providers status']); 
        Permission::create(['name' => 'list providers']); 
        Permission::create(['name' => 'edit providers']); 
        Permission::create(['name' => 'show providers']); 
        Permission::create(['name' => 'show providers resume']);  
        Permission::create(['name' => 'create providers sap']); 
        Permission::create(['name' => 'edit providers sap']); 
        Permission::create(['name' => 'show providers sap']);  
        Permission::create(['name' => 'show providers authorizes']); 
        Permission::create(['name' => 'download providers xlsx']); 

        // actions 
        Permission::create(['name' => 'approve documents']);  
        Permission::create(['name' => 'approve providers edit']); 
        Permission::create(['name' => 'contract providers']);  
        Permission::create(['name' => 'inactive providers']); 
        Permission::create(['name' => 'authorize providers sap']); 

        Permission::create(['name' => 'create requirements']);
        Permission::create(['name' => 'show requirements']);
        Permission::create(['name' => 'edit requirements']);
        Permission::create(['name' => 'delete requirements']);
        Permission::create(['name' => 'list requirements']);

        Permission::create(['name' => 'list guides']);
        Permission::create(['name' => 'edit guides']);

        Permission::create(['name' => 'list users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'show users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'delete users']);

        $superadmin = Role::create(['name' => 'Administrador']);
        $superadmin->givePermissionTo(Permission::all()->except([2, 17]));
        
        $proveedor = Role::create(['name' => 'Proveedor']);
        $proveedor->givePermissionTo([
            'register provider',
            'list providers status',
            'show providers',
            'list requirements',
            'show requirements',
        ]);

        $compras = Role::create(['name' => 'Compras']);
        $compras->givePermissionTo(Permission::all()->except([2, 5, 17]));

        $legal = Role::create(['name' => 'Legal']);
        $legal->givePermissionTo(Permission::all()->only([1,3,4,6,7,10,11]));

        $legal = Role::create(['name' => 'Fiscal']);
        $legal->givePermissionTo(Permission::all()->except([1,3,4,6,7,10,11]));
        
        $legal = Role::create(['name' => 'Tesorería']);
        $legal->givePermissionTo(Permission::all()->except([1,3,4,6,7,10,11]));
        
        $legal = Role::create(['name' => 'Auditoría']);
        $legal->givePermissionTo(Permission::all()->except([1,3,4,6,7,10,11]));

        $authorizationRol = Role::create(['name' => 'Autorizador SAP']);
        $authorizationRol->givePermissionTo(['authorize providers sap']);
        
    }
}
