<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TaxesDutiesAccesory;

class TaxesDutiesAccesoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaxesDutiesAccesory::query()->delete();
        
        $data = [
            [
                "code" => "P01",
                "description" => "Impuestos, Derechos Y Accesorios"
            ],            
        ];

        foreach ($data as $value) {
            TaxesDutiesAccesory::create($value);
        }
    }
}
