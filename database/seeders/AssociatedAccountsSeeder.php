<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssociatedAccount;

class AssociatedAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AssociatedAccount::query()->delete();

        $data = [
            [
                "code" => "1011010",
                "description" => "Fondo Fijo" 
            ],
            [
                "code" => "1301100",
                "description" => "Anticipos a Proveedores/Nacionales" 
            ],
            [
                "code" => "1301200",
                "description" => "Anticipos a Proveedores/Extranjeros" 
            ],
            [
                "code" => "1301300",
                "description" => "Anticipo Acreedores Diversos/Nacionales" 
            ],
            [
                "code" => "1301400",
                "description" => "Anticipo Acreedores Diversos/Extranjeros" 
            ],
            [
                "code" => "1301500",
                "description" => "Anticipos a Proveedores/Intercompañía" 
            ],
            [
                "code" => "2101100",
                "description" => "CXP/Proveedores Nacionales",
                "default" => 1
            ],
            [
                "code" => "2101110",
                "description" => "Cuentas por Pagar/Proveedores Extranjeros",
                "default" => 1 
            ],
            [
                "code" => "2101140",
                "description" => "Cuentas por Pagar/Acreedores Fondo Fijo" 
            ],
            [
                "code" => "2101300",
                "description" => "CXP/Acreedores Nacionales",
                "default" => 1
            ],
            [
                "code" => "2101310",
                "description" => "Cuentas por Pagar/Acreedores Extranjeros", 
                "default" => 1
            ],
            [
                "code" => "2108010",
                "description" => "Cuenta por pagar/Intercompañias" 
            ],
        ];

        foreach ($data as $value) {
            AssociatedAccount::create($value);
        }
    }
}
