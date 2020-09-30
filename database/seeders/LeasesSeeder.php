<?php

namespace Database\Seeders;

use App\Models\Lease;
use Illuminate\Database\Seeder;

class LeasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lease::query()->delete();
        
        $data = [
            [
                "code" => "B01",
                "description" => "Arrendamiento Granjas Porcicolas"
            ],            
            [
                "code" => "B02",
                "description" => "Arrendamiento Expendios"
            ],
            [
                "code" => "B03",
                "description" => "Arrendamiento Oficinas"
            ],
            [
                "code" => "B04",
                "description" => "Arrendamiento Almacenes"
            ],
            [
                "code" => "B05",
                "description" => "Arrendamiento Camiones de Carga y materiales"
            ],
            [
                "code" => "B06",
                "description" => "Arrendamiento Licencias"
            ],
            [
                "code" => "B07",
                "description" => "Arrendamiento maquinaria"
            ],
        ];

        foreach ($data as $value) {
            Lease::create($value);
        }

    }
}
