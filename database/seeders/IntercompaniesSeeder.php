<?php

namespace Database\Seeders;

use App\Models\Intercompany;
use Illuminate\Database\Seeder;

class IntercompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Intercompany::query()->delete();
        
        $data = [
            [
                "code" => "G01",
                "description" => "Norson Holding"
            ],            
            [
                "code" => "G02",
                "description" => "Promotora Comercial Alpro"
            ],
            [
                "code" => "G03",
                "description" => "Frigorifico Agropecuaria Sonorense"
            ],
            [
                "code" => "G04",
                "description" => "Agroindustrial Servicios en Administracion"
            ],
            [
                "code" => "G05",
                "description" => "Agrofarms"
            ],
            [
                "code" => "G06",
                "description" => "Fassa"
            ],
            [
                "code" => "G07",
                "description" => "Industrias Agrofarms"
            ],
            [
                "code" => "G08",
                "description" => "Gerencial Ser. Agro. Alimenticios"
            ],
            [
                "code" => "G09",
                "description" => "Smithfield Smithfield Foods de Méx"
            ],
        ];

        foreach ($data as $value) {
            Intercompany::create($value);
        }
        
    }
}
