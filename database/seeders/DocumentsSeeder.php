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
                'file_input_name' => 'acta_constitutiva_file',
                'folder' => 'actas_constitutivas'
            ],
            [
                "title" => "Constancia de Situación Fiscal",
                'file_input_name' => 'constancia_situacion_fiscal_file',
                'folder' => 'constancias_situaciones'
            ],
            [
                "title" => "Copia de Identificación Oficial",
                'file_input_name' => 'copia_identificacion_file',
                'folder' => 'identificaciones'
            ],
            [
                "title" => "Formato 32D",
                'file_input_name' => 'formato_32d_file',
                'folder' => '32d'
            ],
            [
                "title" => "Copia de la Caratula de Estado de Cuenta Reciente",
                'file_input_name' => 'estado_cuenta_file',
                'folder' => 'estados_cuentas'
            ],            
            [
                "title" => "Comprobante de Domicilio",
                'file_input_name' => 'comprobante_domicilio_file',
                'folder' => 'comprobantes_domicilios'
            ],
            [
                "title" => "Cedula de Cuotas IMSS e INFONAVIT",
                'file_input_name' => 'imss_file',
                'folder' => 'imss'
            ],
            [
                "title" => "TAX ID Number (Form W-9)",
                'file_input_name' => 'rfc_file',
                'folder' => 'rfc'
            ],
            [
                "title" => "Owner's ID",
                'file_input_name' => 'owner_file',
                'folder' => 'owners'
            ],
            [
                "title" => "Account / Routing number confirmation for Wire Transfer",
                'file_input_name' => 'account_routing_file',
                'folder' => 'account_routings'
            ],

        ];

        foreach ($data as $value) {
            Document::create($value);
         }

    }
}
