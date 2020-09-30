<?php

namespace Database\Seeders;

use App\Models\BusinessType;
use Illuminate\Database\Seeder;

class BusinessTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        BusinessType::query()->delete();

        $data = [
            [
                "description" => "Persona Moral",
            ],
            [
                "description" => "Persona Fisica",
            ],
            [
                "description" => "Proveedor Extranjero",
            ],
        ];

        foreach ($data as $value) {
            BusinessType::create($value);
         }

     }
}
