<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Seeder;

class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Document::query()->delete();

        $data = [
            [
                "title" => "Acta Constitutiva",
            ],
            [
                "title" => "Constancia de Situación Fiscal",
            ],
            [
                "title" => "Copia de Identificación Oficial",
            ],
            [
                "title" => "Formato 32D",
            ],
            [
                "title" => "Copia de la Caratula de Estado de Cuenta Reciente",
            ],            
            [
                "title" => "Comprobante de Domicilio",
            ],
            [
                "title" => "Cedula de Cuotas IMSS e INFONAVIT",
            ],
            [
                "title" => "TAX ID Number (Form W-9)",
            ],
            [
                "title" => "Owner's ID",
            ],
            [
                "title" => "Account / Routing number confirmation for Wire Transfer",
            ],

        ];

        foreach ($data as $value) {
            Document::create($value);
         }

    }
}
