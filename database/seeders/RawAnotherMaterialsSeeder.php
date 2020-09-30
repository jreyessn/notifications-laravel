<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RawAnotherMaterial;

class RawAnotherMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RawAnotherMaterial::query()->delete();
        
        $data = [
            [
                "code" => "K01",
                "description" => "Medicinas, Vacunas (Veterinarios)"
            ],            
            [
                "code" => "K02",
                "description" => "Refacciones"
            ],
            [
                "code" => "K03",
                "description" => "Herramientas de Trabajo"
            ],
            [
                "code" => "K04",
                "description" => "Materiales para mantenimiento"
            ],
            [
                "code" => "K05",
                "description" => "Accesorios Electrónicos"
            ],
            [
                "code" => "K06",
                "description" => "Consumibles de Producción"
            ],
            [
                "code" => "K07",
                "description" => "Material de Limpieza"
            ],
            [
                "code" => "K08",
                "description" => "Insumos para Inseminación"
            ],
            [
                "code" => "K09",
                "description" => "Herramientas de Mantenimiento"
            ],
            [
                "code" => "K10",
                "description" => "Medicinas (personal)"
            ],
            [
                "code" => "K11",
                "description" => "Papelería y accesorios de oficina"
            ],
            [
                "code" => "K12",
                "description" => "Material de Laboratorio"
            ],
            [
                "code" => "K13",
                "description" => "Material de Abarrotes"
            ],
        ];

        foreach ($data as $value) {
            RawAnotherMaterial::create($value);
        }

    }
}
