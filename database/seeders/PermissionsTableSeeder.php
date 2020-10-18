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

        Permission::create(['name' => 'dashboard']); // 1
        Permission::create(['name' => 'list providers']);
        Permission::create(['name' => 'edit providers']); // 3
        Permission::create(['name' => 'show providers']);
        Permission::create(['name' => 'register provider']); // 5
        Permission::create(['name' => 'delete providers']); // 6
        Permission::create(['name' => 'approve documents']); // 7
        Permission::create(['name' => 'approve edit providers']);
        Permission::create(['name' => 'request edit providers']); // 9
        Permission::create(['name' => 'contract providers']); // 10
        Permission::create(['name' => 'sap providers']);
        Permission::create(['name' => 'approve to sap']); //12
        
        Permission::create(['name' => 'list requirements']);
        Permission::create(['name' => 'edit requirements']);
        Permission::create(['name' => 'show requirements']);
        Permission::create(['name' => 'create requirements']);
        Permission::create(['name' => 'delete requirements']);

        Permission::create(['name' => 'list guides']);
        Permission::create(['name' => 'edit guides']);

        Permission::create(['name' => 'list users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'show users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'delete users']);

        $superadmin = Role::create(['name' => 'Administrador']);
        $superadmin->givePermissionTo(Permission::all()->except([9,5]));
        
        $proveedor = Role::create(['name' => 'Proveedor']);
        $proveedor->givePermissionTo([
            'list providers',
            'show providers',
            'register provider',
            'request edit providers',
            'list requirements',
            'show requirements',
        ]);

        $compras = Role::create(['name' => 'Compras']);
        $compras->givePermissionTo(Permission::all()->except([3,5,6,9,10,12]));

        $legal = Role::create(['name' => 'Legal']);
        $legal->givePermissionTo(Permission::all()->except([3,5,6,9,7]));

        $legal = Role::create(['name' => 'Fiscal']);
        $legal->givePermissionTo(Permission::all()->except([3,5,6,9,7]));
        
        $legal = Role::create(['name' => 'Tesorería']);
        $legal->givePermissionTo(Permission::all()->except([3,5,6,9,7]));
        
        $legal = Role::create(['name' => 'Auditoría']);
        $legal->givePermissionTo(Permission::all()->except([3,5,6,9,7]));
        
    }
}
