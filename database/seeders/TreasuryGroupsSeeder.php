<?php

namespace Database\Seeders;

use App\Models\TreasuryGroup;
use Illuminate\Database\Seeder;

class TreasuryGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "code" => "N01",
                "description" => "Proyectos",
                'group_id' => 1,
                "orden" => 1
            ],            
            [
                "code" => "N02",
                "description" => "Inversiones Operativas",
                'group_id' => 1,
                "orden" => 2
            ],
            [
                "code" => "N03",
                "description" => "Pie de Cria",
                'group_id' => 1,
                "orden" => 3
            ],
            [
                "code" => "D01",
                "description" => "Flete de Materia Prima",
                'group_id' => 4,
                "orden" => 1
            ],            
            [
                "code" => "D02",
                "description" => "Flete de Producto Terminado",
                'group_id' => 4,
                "orden" => 2
            ],
            [
                "code" => "D03",
                "description" => "Flete de Agua",
                'group_id' => 4,
                "orden" => 3
            ],
            [
                "code" => "D04",
                "description" => "Guias",
                'group_id' => 4,
                "orden" => 4
            ],
            [
                "code" => "C01",
                "description" => "Gasolina",
                'group_id' => 3,
                "orden" => 1
            ],            
            [
                "code" => "C02",
                "description" => "Gas L.P",
                'group_id' => 3,
                "orden" => 2
            ],
            [
                "code" => "C03",
                "description" => "Gas Natural",
                'group_id' => 3,
                "orden" => 3
            ],
            [
                "code" => "G01",
                "description" => "Norson Holding",
                'group_id' => 7,
                "orden" => 1
            ],            
            [
                "code" => "G02",
                "description" => "Promotora Comercial Alpro",
                'group_id' => 7,
                "orden" => 2
            ],
            [
                "code" => "G03",
                "description" => "Frigorifico Agropecuaria Sonorense",
                'group_id' => 7,
                "orden" => 3
            ],
            [
                "code" => "G04",
                "description" => "Agroindustrial Servicios en Administracion",
                'group_id' => 7,
                "orden" => 4
            ],
            [
                "code" => "G05",
                "description" => "Agrofarms",
                'group_id' => 7,
                "orden" => 5
            ],
            [
                "code" => "G06",
                "description" => "Fassa",
                'group_id' => 7,
                "orden" => 6
            ],
            [
                "code" => "G07",
                "description" => "Industrias Agrofarms",
                'group_id' => 7,
                "orden" => 7
            ],
            [
                "code" => "G08",
                "description" => "Gerencial Ser. Agro. Alimenticios",
                'group_id' => 7,
                "orden" => 8
            ],
            [
                "code" => "G09",
                "description" => "Smithfield Smithfield Foods de Méx",
                'group_id' => 7,
                "orden" => 9
            ],

            [
                "code" => "B01",
                "description" => "Arrendamiento Granjas Porcicolas",
                'group_id' => 2,
                "orden" => 1
            ],            
            [
                "code" => "B02",
                "description" => "Arrendamiento Expendios",
                'group_id' => 2,
                "orden" => 2
            ],
            [
                "code" => "B03",
                "description" => "Arrendamiento Oficinas",
                'group_id' => 2,
                "orden" => 3
            ],
            [
                "code" => "B04",
                "description" => "Arrendamiento Almacenes",
                'group_id' => 2,
                "orden" => 4
            ],
            [
                "code" => "B05",
                "description" => "Arrendamiento Camiones de Carga y materiales",
                'group_id' => 2,
                "orden" => 5
            ],
            [
                "code" => "B06",
                "description" => "Arrendamiento Licencias",
                'group_id' => 2,
                "orden" => 6
            ],
            [
                "code" => "B07",
                "description" => "Arrendamiento maquinaria",
                'group_id' => 2,
                "orden" => 7
            ],
            [
                "code" => "H01",
                "description" => "Mantenimiento Vehiculos",
                'group_id' => 8,
                "orden" => 1
            ],            
            [
                "code" => "H02",
                "description" => "Mantenimiento Maquinaria",
                'group_id' => 8,
                "orden" => 2
            ],
            [
                "code" => "H03",
                "description" => "Mantenimiento Edificios",
                'group_id' => 8,
                "orden" => 3
            ],
            [
                "code" => "H04",
                "description" => "Mantenimiento Granjas",
                'group_id' => 8,
                "orden" => 4
            ],
            [
                "code" => "H05",
                "description" => "Mantenimiento Equipo de Computo",
                'group_id' => 8,
                "orden" => 5
            ],
            [
                "code" => "H06",
                "description" => "Mantenimiento Sistemas de Informacion",
                'group_id' => 8,
                "orden" => 6
            ],
            [
                "code" => "H07",
                "description" => "Mantenimiento Sistemas de Comunicación",
                'group_id' => 8,
                "orden" => 7
            ],
            [
                "code" => "H08",
                "description" => "Mantenimiento Areas Verdes",
                'group_id' => 8,
                "orden" => 8
            ],
            [
                "code" => "H09",
                "description" => "Mantenimiento Equipo Refrigeracion",
                'group_id' => 8,
                "orden" => 9
            ],
            [
                "code" => "F01",
                "description" => "Fonacot",
                'group_id' => 5,
                "orden" => 1
            ],            
            [
                "code" => "F02",
                "description" => "Uniformes",
                'group_id' => 5,
                "orden" => 2
            ],
            [
                "code" => "F03",
                "description" => "Cortesías Personal",
                'group_id' => 5,
                "orden" => 3
            ],
            [
                "code" => "F04",
                "description" => "Prestamos Personal",
                'group_id' => 5,
                "orden" => 4
            ],
            [
                "code" => "F05",
                "description" => "Reembolso de gastos",
                'group_id' => 5,
                "orden" => 5
            ],
            [
                "code" => "F06",
                "description" => "Sueldos y Salarios",
                'group_id' => 5,
                "orden" => 6
            ],
            [
                "code" => "M01",
                "description" => "Asesoría fiscal",
                'group_id' => 13,
                "orden" => 1
            ],            
            [
                "code" => "M02",
                "description" => "Asesoría Laboral",
                'group_id' => 13,
                "orden" => 2
            ],
            [
                "code" => "M03",
                "description" => "Asesoría Legal",
                'group_id' => 13,
                "orden" => 3
            ],
            [
                "code" => "M04",
                "description" => "Notario Publico",
                'group_id' => 13,
                "orden" => 4
            ],
            [
                "code" => "M05",
                "description" => "Auditoria a Estados Financieros",
                'group_id' => 13,
                "orden" => 5
            ],
            [
                "code" => "M06",
                "description" => "Asesoría Operativa",
                'group_id' => 13,
                "orden" => 6
            ],
            [
                "code" => "M07",
                "description" => "Asesoría Ambiental",
                'group_id' => 13,
                "orden" => 7
            ],
            [
                "code" => "M08",
                "description" => "Asesoría en TI",
                'group_id' => 13,
                "orden" => 8
            ],
            [
                "code" => "M09",
                "description" => "Asesoría Veterinaria",
                'group_id' => 13,
                "orden" => 9
            ],

            [
                "code" => "K01",
                "description" => "Medicinas, Vacunas (Veterinarios)",
                'group_id' => 11,
                "orden" => 1
            ],            
            [
                "code" => "K02",
                "description" => "Refacciones",
                'group_id' => 11,
                "orden" => 2
            ],
            [
                "code" => "K03",
                "description" => "Herramientas de Trabajo",
                'group_id' => 11,
                "orden" => 3
            ],
            [
                "code" => "K04",
                "description" => "Materiales para mantenimiento",
                'group_id' => 11,
                "orden" => 4
            ],
            [
                "code" => "K05",
                "description" => "Accesorios Electrónicos",
                'group_id' => 11,
                "orden" => 5
            ],
            [
                "code" => "K06",
                "description" => "Consumibles de Producción",
                'group_id' => 11,
                "orden" => 6
            ],
            [
                "code" => "K07",
                "description" => "Material de Limpieza",
                'group_id' => 11,
                "orden" => 7
            ],
            [
                "code" => "K08",
                "description" => "Insumos para Inseminación",
                'group_id' => 11,
                "orden" => 8
            ],
            [
                "code" => "K09",
                "description" => "Herramientas de Mantenimiento",
                'group_id' => 11,
                "orden" => 9
            ],
            [
                "code" => "K10",
                "description" => "Medicinas (personal)",
                'group_id' => 11,
                "orden" => 10
            ],
            [
                "code" => "K11",
                "description" => "Papelería y accesorios de oficina",
                'group_id' => 11,
                "orden" => 11
            ],
            [
                "code" => "K12",
                "description" => "Material de Laboratorio",
                'group_id' => 11,
                "orden" => 12
            ],
            [
                "code" => "K13",
                "description" => "Material de Abarrotes",
                'group_id' => 11,
                "orden" => 13
            ],
            [
                "code" => "I01",
                "description" => "MP Molino",
                'group_id' => 9,
                "orden" => 1
            ],            
            [
                "code" => "I02",
                "description" => "MP Empaque",
                'group_id' => 9,
                "orden" => 2
            ],
            [
                "code" => "I03",
                "description" => "MP Preparados",
                'group_id' => 9,
                "orden" => 3
            ],
            [
                "code" => "J01",
                "description" => "MP Carnicos",
                'group_id' => 10,
                "orden" => 1
            ],            
            [
                "code" => "J02",
                "description" => "MP Cerdo Vivo",
                'group_id' => 10,
                "orden" => 2
            ],

            [
                "code" => "L01",
                "description" => "Servicios Aduanales",
                'group_id' => 12,
                "orden" => 1
            ],
            [
                "code" => "L02",
                "description" => "Servicios de Almacenaje",
                'group_id' => 12,
                "orden" => 2
            ],
            [
                "code" => "L03",
                "description" => "Servicios de Limpieza",
                'group_id' => 12,
                "orden" => 3
            ],
            [
                "code" => "L04",
                "description" => "Servicio de Comedores (personal)",
                'group_id' => 12,
                "orden" => 4
            ],
            [
                "code" => "L05",
                "description" => "Tarjeta de Credito",
                'group_id' => 12,
                "orden" => 5
            ],
            [
                "code" => "L06",
                "description" => "Servicio Energía Eléctrica",
                'group_id' => 12,
                "orden" => 6
            ],
            [
                "code" => "L07",
                "description" => "Seguros y Fianzas",
                'group_id' => 12,
                "orden" => 7
            ],
            [
                "code" => "L08",
                "description" => "Servicios de Laboratorio",
                'group_id' => 12,
                "orden" => 8
            ],
            [
                "code" => "L09",
                "description" => "Servicios de Seguridad",
                'group_id' => 12,
                "orden" => 9
            ],
            [
                "code" => "L10",
                "description" => "Servicios de Transporte de Personal",
                'group_id' => 12,
                "orden" => 10
            ],
            [
                "code" => "L11",
                "description" => "Servicios de Fumigación",
                'group_id' => 12,
                "orden" => 11
            ],
            [
                "code" => "L12",
                "description" => "Servicios Médicos (Personal)",
                'group_id' => 12,
                "orden" => 12
            ],
            [
                "code" => "L13",
                "description" => "Recolección de Residuos y basuras",
                'group_id' => 12,
                "orden" => 13
            ],
            [
                "code" => "L14",
                "description" => "Eventos Especiales",
                'group_id' => 12,
                "orden" => 14
            ],
            [
                "code" => "L15",
                "description" => "Diplomados y Cursos",
                'group_id' => 12,
                "orden" => 15
            ],
            [
                "code" => "L16",
                "description" => "Servicio de Telefonía y otras comunicaciones",
                'group_id' => 12,
                "orden" => 16
            ],
            [
                "code" => "L17",
                "description" => "Servicios de Publicidad",
                'group_id' => 12,
                "orden" => 17
            ],
            [
                "code" => "L18",
                "description" => "Otros Servicios",
                'group_id' => 12,
                "orden" => 18
            ],
            [
                "code" => "L19",
                "description" => "Donativos",
                'group_id' => 12,
                "orden" => 19
            ],
            [
                "code" => "L20",
                "description" => "Servicios de Mensajería y Paquetería",
                'group_id' => 12,
                "orden" => 20
            ],
            [
                "code" => "L21",
                "description" => "Servicio de viajes",
                'group_id' => 12,
                "orden" => 21
            ],
            [
                "code" => "L22",
                "description" => "Servicio de Venta de Vales",
                'group_id' => 12,
                "orden" => 22
            ],
            [
                "code" => "L23",
                "description" => "Certificados",
                'group_id' => 12,
                "orden" => 23
            ],
            [
                "code" => "L24",
                "description" => "Cuotas y suscripciones",
                'group_id' => 12,
                "orden" => 24
            ],

            [
                "code" => "P01",
                "description" => "Impuestos, Derechos Y Accesorios",
                'group_id' => 6,
                "orden" => 1
            ],            
        ];

        TreasuryGroup::insert($data);

    }
}
