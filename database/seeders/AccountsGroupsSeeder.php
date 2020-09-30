<?php

namespace Database\Seeders;

use App\Models\AccountsGroup;
use Illuminate\Database\Seeder;

class AccountsGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AccountsGroup::query()->delete();
           
        $data = [
            [
                "code" => "ZAF",
                "description" => "Prov. Activo Fijo"
            ],
            [
                "code" => "ZARD",
                "description" => "Prov. Arrendatarios"
            ],
            [
                "code" => "ZCOM",
                "description" => "Prov. Combustible"
            ],
            [
                "code" => "ZCPD",
                "description" => "Acreed. única vez"
            ],
            [
                "code" => "ZEMP",
                "description" => "Acreed Func y Empleado"
            ],
            [
                "code" => "ZFF",
                "description" => "Acreed. Fondo Fijo"
            ],
            [
                "code" => "ZFIN",
                "description" => "Acreed Fini y Pens Alimen"
            ],
            [
                "code" => "ZFYT",
                "description" => "Proveed. Fletes y Transportes"
            ],
            [
                "code" => "ZINT",
                "description" => "Prov. Intercompañía"
            ],
            [
                "code" => "ZMAT",
                "description" => "Prov. Mantenimiento"
            ],
            [
                "code" => "ZMP",
                "description" => "Prov. Mat Prima /Insumos"
            ],
            [
                "code" => "ZSER",
                "description" => "Prov. Servicios y Otros"
            ],
        ];

        foreach ($data as $value) {
            AccountsGroup::create($value);
        }
    }
}
