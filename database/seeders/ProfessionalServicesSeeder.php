<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfessionalService;

class ProfessionalServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfessionalService::query()->delete();
        
        $data = [
            [
                "code" => "M01",
                "description" => "Asesoría fiscal"
            ],            
            [
                "code" => "M02",
                "description" => "Asesoría Laboral"
            ],
            [
                "code" => "M03",
                "description" => "Asesoría Legal"
            ],
            [
                "code" => "M04",
                "description" => "Notario Publico"
            ],
            [
                "code" => "M05",
                "description" => "Auditoria a Estados Financieros"
            ],
            [
                "code" => "M06",
                "description" => "Asesoría Operativa"
            ],
            [
                "code" => "M07",
                "description" => "Asesoría Ambiental"
            ],
            [
                "code" => "M08",
                "description" => "Asesoría en TI"
            ],
            [
                "code" => "M09",
                "description" => "Asesoría Veterinaria"
            ],

        ];

        foreach ($data as $value) {
            ProfessionalService::create($value);
        }

    }
}
