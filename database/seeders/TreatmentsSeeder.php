<?php

namespace Database\Seeders;

use App\Models\Treatment;
use Illuminate\Database\Seeder;

class TreatmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Treatment::query()->delete();
        
        $data = [
            [
                "description" => "Empresa"
            ]
        ];

        foreach ($data as $value) {
            Treatment::create($value);
        }

    }
}
