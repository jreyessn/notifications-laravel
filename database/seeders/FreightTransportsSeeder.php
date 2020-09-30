<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FreightTransport;

class FreightTransportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FreightTransport::query()->delete();
        
        $data = [
            [
                "code" => "D01",
                "description" => "Flete de Materia Prima"
            ],            
            [
                "code" => "D02",
                "description" => "Flete de Producto Terminado"
            ],
            [
                "code" => "D03",
                "description" => "Flete de Agua"
            ],
            [
                "code" => "D04",
                "description" => "Guias"
            ],
        ];

        foreach ($data as $value) {
            FreightTransport::create($value);
        }
    }
}
