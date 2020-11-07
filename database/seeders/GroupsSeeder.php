<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::insert([
            [
                'description' => 'Activo Fijo',
                'orden' => 1
            ],
            
            [
                'description' => 'Arrendamiento',
                'orden' => 2
            ],
            [
                'description' => 'Combustibles',
                'orden' => 3
            ],
            [
                'description' => 'Fletes y Transportes',
                'orden' => 4
            ],
            [
                'description' => 'Funcionarios y Empleados',
                'orden' => 5
            ],
            [
                'description' => 'Impuestos, Derechos y Accesorios',
                'orden' => 6
            ],
            [
                'description' => 'Intercompañias',
                'orden' => 7
            ],
            [
                'description' => 'Mantenimiento',
                'orden' => 8
            ],
            [
                'description' => 'Materia Prima',
                'orden' => 9
            ],
            [
                'description' => 'Materia Prima Cárnica',
                'orden' => 10
            ],
            [
                'description' => 'Otros Materiales',
                'orden' => 11
            ],
            [
                'description' => 'Servicios',
                'orden' => 12
            ],
            [
                'description' => 'Servicios Profesionales',
                'orden' => 13
            ],
        ]);
    }
}
