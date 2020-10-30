<?php

namespace App\Exports;

use App\Models\Society;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\BeforeSheet;

class SapExport implements WithHeadings, FromArray, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use RegistersEventListeners;

    private $items = [];

    function __construct($items)
    {
        $this->items = $items;
    }

    public function array(): array
    {
        return $this->items;
    }

    public function headings(): array
    {
        $societiesMap = Society::all()->pluck('description')->toArray();
        
        $headingsRow2 = [
            'Periodo',
            'Proveedor',
            'Sociedad',
            'Organización',
            'Grupo de Cuenta',
            'Tratamiento',
            'Nombre 1',
            'Para abono en cuenta',
            'Concepto búsq. 1/2',
            'Calle',
            'Número',
            'Colonia',
            'Código Postal',
            'Población (Delegación/Municipio)',
            'País',
            'Región',
            'Teléfono',
            'Fax',
            'N° ID Fiscal (RFC)',
            'CURP (NIF Comunitario)',
            'Persona Física',
            'Campo ALBA (CFD, CFDI, etc)',
            'Clave de país del banco',
            'Clave de banco',
            'Nº cuenta bancaria',
            'Titular de la cuenta',
            'Tipo de banco interlocutor',
            'Referencia para el banco/cuenta',
            'Número de cuenta del receptor alternativo del pago',
            'Grupo de tesorería',
            'Cuenta asociada',
            'Clave clasific',
            'No Cta Anterior',
            'Cond.pago',
            'Verif. fra.dob.',
            'Vías de pago',
            'Bloqueo de Pago',
            'Grupo de tolerancia',
            'Moneda de pedido',
            'Incoterms',
            'Descripción Incoterms',
            'Gpo Esquema de Prov',
            'Verificacion de factura base EM',
            'Verificacion de factura relac. Servicio',
            'Pedido automático permitido',
            'Conc bonificación especie',
            'Grupo de Compras',
            'Plazo entrega prev',
            'Pais de Retención',
            'Tipo de Retención',
            'Indicador de Retención',
            'Sujeto ¿?'
        ];

        $completeHeadings = array_merge($headingsRow2, ['Compañías en la que participan'], 
            array_fill(0, (count($societiesMap) - 1), '')
        ,
        [
            'Observacion',
            'Quien Solicita',
            'COMPRAS',
            'CORREO ELECTRONICO PARA ENVIO DE OC',
        ]);

        $headingsRow2 = array_merge(['Fecha'], array_fill(1, 51, ''), $societiesMap);

        return [
            $completeHeadings,
            $headingsRow2
        ];
    }

    public static function beforeSheet(BeforeSheet $event)
    {
        $event->sheet->getDelegate()->getParent()->getDefaultStyle()->getFont()->setName('Arial');    
        $event->sheet->getDelegate()->getParent()->getDefaultStyle()->getFont()->setSize(10);   
        
        $columnsRange = range('B', 'Z');
        $columnsRange = array_merge($columnsRange, ['AA'], array_map(function($letter){
            return "A{$letter}";
        },$columnsRange));

        $columnsRange = array_merge($columnsRange, ['BA', 'BB', 'BC', 'BD', 'BE', 'BF', 'BG', 'BH', 'BI', 'BJ', 'BK']);

        // se combina las row 1 y 2 de las cabeceras

         foreach ($columnsRange as $key => $letter) {
            if($key < 52 || $key > 57)
                $event->sheet->mergeCells("{$letter}1:{$letter}2");
         }

         // se combina las celdas de compañias

         $event->sheet->mergeCells("BA1:BG1");

        // estilos grises

         $styleArrayGray = [
            'borders' => [
                'top' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                    'color' => ['argb' => 'FF000000'],
                ],
                'bottom' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
            'font' =>[
                'bold' => true
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'color' => ['argb' => 'F6F6F6']
            ]
        ];

        // aplicar estilos

        $event->sheet->getStyle('B1:BK1')->applyFromArray($styleArrayGray);
        $event->sheet->getStyle('B2:BK2')->applyFromArray($styleArrayGray);
        $event->sheet->getStyle('B1')->applyFromArray([
            'borders' => [
                'left' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                    'color' => ['argb' => 'FF000000'],
                ]
            ]
        ]);
        $event->sheet->getStyle('AZ1')->applyFromArray([
            'borders' => [
                'right' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                    'color' => ['argb' => 'FF000000'],
                ]
            ]
        ]);

        $event->sheet->getStyle('BA2:BG2')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'color' => ['argb' => 'FF000000']
            ],
            'font' => [
                'color' => ['argb' => 'FFFFFFFF']
            ]
        ]);

        // B - BK
        foreach ($columnsRange as $letter) {
            $event->sheet->getColumnDimension($letter)->setWidth(15);
            $event->sheet->getStyle("{$letter}1")->getAlignment()->setWrapText(true);
        }

        $event->sheet->getColumnDimension('A')->setWidth(13);
        $event->sheet->getColumnDimension('H')->setWidth(30);
        $event->sheet->getColumnDimension('BK')->setWidth(40);

        // estilos amarillos
        $event->sheet->getStyle('AN1:AV1')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'color' => ['argb' => 'FFFFFF00']
            ]
        ]);
        


    }


}
