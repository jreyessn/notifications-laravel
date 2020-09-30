<?php

namespace Database\Seeders;

use App\Models\Maintenance;
use Illuminate\Database\Seeder;

class MaintenancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maintenance::query()->delete();
        
        $data = [
            [
                "code" => "H01",
                "description" => "Mantenimiento Vehiculos"
            ],            
            [
                "code" => "H02",
                "description" => "Mantenimiento Maquinaria"
            ],
            [
                "code" => "H03",
                "description" => "Mantenimiento Edificios"
            ],
            [
                "code" => "H04",
                "description" => "Mantenimiento Granjas"
            ],
            [
                "code" => "H05",
                "description" => "Mantenimiento Equipo de Computo"
            ],
            [
                "code" => "H06",
                "description" => "Mantenimiento Sistemas de Informacion"
            ],
            [
                "code" => "H07",
                "description" => "Mantenimiento Sistemas de Comunicación"
            ],
            [
                "code" => "H08",
                "description" => "Mantenimiento Areas Verdes"
            ],
            [
                "code" => "H09",
                "description" => "Mantenimiento Equipo Refrigeracion"
            ],
        ];

        foreach ($data as $value) {
            Maintenance::create($value);
        }

    }
}
