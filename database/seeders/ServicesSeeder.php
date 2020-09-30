<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::query()->delete();
        
        $data = [
            [
                "code" => "L01",
                "description" => "Servicios Aduanales"
            ],
            [
                "code" => "L02",
                "description" => "Servicios de Almacenaje"
            ],
            [
                "code" => "L03",
                "description" => "Servicios de Limpieza"
            ],
            [
                "code" => "L04",
                "description" => "Servicio de Comedores (personal)"
            ],
            [
                "code" => "L05",
                "description" => "Tarjeta de Credito"
            ],
            [
                "code" => "L06",
                "description" => "Servicio Energía Eléctrica"
            ],
            [
                "code" => "L07",
                "description" => "Seguros y Fianzas"
            ],
            [
                "code" => "L08",
                "description" => "Servicios de Laboratorio"
            ],
            [
                "code" => "L09",
                "description" => "Servicios de Seguridad"
            ],
            [
                "code" => "L10",
                "description" => "Servicios de Transporte de Personal"
            ],
            [
                "code" => "L11",
                "description" => "Servicios de Fumigación"
            ],
            [
                "code" => "L12",
                "description" => "Servicios Médicos (Personal)"
            ],
            [
                "code" => "L13",
                "description" => "Recolección de Residuos y basuras"
            ],
            [
                "code" => "L14",
                "description" => "Eventos Especiales"
            ],
            [
                "code" => "L15",
                "description" => "Diplomados y Cursos"
            ],
            [
                "code" => "L16",
                "description" => "Servicio de Telefonía y otras comunicaciones"
            ],
            [
                "code" => "L17",
                "description" => "Servicios de Publicidad"
            ],
            [
                "code" => "L18",
                "description" => "Otros Servicios"
            ],
            [
                "code" => "L19",
                "description" => "Donativos"
            ],
            [
                "code" => "L20",
                "description" => "Servicios de Mensajería y Paquetería"
            ],
            [
                "code" => "L21",
                "description" => "Servicio de viajes"
            ],
            [
                "code" => "L22",
                "description" => "Servicio de Venta de Vales"
            ],
            [
                "code" => "L23",
                "description" => "Certificados"
            ],
            [
                "code" => "L24",
                "description" => "Cuotas y suscripciones"
            ],

        ];

        foreach ($data as $value) {
            Service::create($value);
        }

    }
}
