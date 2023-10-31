<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\CategoryService;
use App\Models\Service;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(4)
            ->sequence(
                ['category_id' => '1', 'category_name' => 'administraciones',],
                ['category_id' => '2', 'category_name' => 'inmobiliarias',],
                ['category_id' => '3', 'category_name' => 'desarrolladora',],
                ['category_id' => '4', 'category_name' => 'home',],
            )->create();

            
            
        Service::factory(18)
        ->sequence(
            [
                'service_id' => '1',
                'id_name' => 'ley_257',
                'name' => 'Ley 6116 (Ex ley 257)',
                'icon' => 'fa-solid fa-hotel',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '2',
                'id_name' => 'avisos_obra',
                'name' => 'Avisos de obra',
                'icon' => 'fa-solid fa-file-signature',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '3',
                'id_name' => 'planos_suminsitro_gas',
                'name' => 'Planos de suministro de gas',
                'icon' => 'fa-regular fa-map',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '4',
                'id_name' => 'planos_evacuacion',
                'name' => 'Planos de evacuacion',
                'icon' => 'fa-solid fa-person-running',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '5',
                'id_name' => 'obleas',
                'name' => 'Obleas',
                'icon' => 'fa-solid fa-file-invoice',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '6',
                'id_name' => 'puesta_a_tierra',
                'name' => 'Medicion de puesta a tierra',
                'icon' => 'fa-solid fa-plug',
                'description' => 'aaaa',
                'image' => 'default',
            ],            
            [
                'service_id' => '7',
                'id_name' => 'informe_factibilidad',
                'name' => 'Informe de factibilidad',
                'icon' => 'fa-solid fa-paste',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '8',
                'id_name' => 'solicitud_planos',
                'name' => 'Solicitud de planos',
                'icon' => 'fa-regular fa-map',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '9',
                'id_name' => 'informe_dominio',
                'name' => 'Informe de dominio',
                'icon' => 'fa-solid fa-file-lines',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '10',
                'id_name' => 'subdivision',
                'name' => 'Subdivision',
                'icon' => 'fa-solid fa-table-cells-large',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '11',
                'id_name' => 'fachadas',
                'name' => 'Mantenimiento de fachadas',
                'icon' => 'fa-solid fa-building-shield',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '12',
                'id_name' => 'aph',
                'name' => 'Consultas APH',
                'icon' => 'fa-solid fa-hospital-user',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '13',
                'id_name' => 'medianeras',
                'name' => 'Inpermeabilizacion de medianeras',
                'icon' => '',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '14',
                'id_name' => 'azoteas',
                'name' => 'Inpermeabilizacion de azoteas',
                'icon' => '',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '15',
                'id_name' => 'municipales',
                'name' => 'Habilitaciones municipales',
                'icon' => '',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '16',
                'id_name' => 'carteleria',
                'name' => 'Habilitaciones de carteleria, marquecina y toldos',
                'icon' => '',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '17',
                'id_name' => 'vereda',
                'name' => 'Habilitacion de espacio publico en vereda',
                'icon' => '',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            [
                'service_id' => '18',
                'id_name' => 'emplazamiento',
                'name' => 'Habilitacion de permiso de emplazamiento',
                'icon' => '',
                'description' => 'aaaa',
                'image' => 'default',
            ],
            )->create();
            
            CategoryService::factory(21)
                ->sequence(
                    ['service_id' => '1', 'category_id' => '4',],
                    ['service_id' => '10', 'category_id' => '4',],
                    ['service_id' => '6', 'category_id' => '4',],
                    ['service_id' => '2', 'category_id' => '4',],
                    ['service_id' => '8', 'category_id' => '4',],
                    ['service_id' => '9', 'category_id' => '4',],
                    ['service_id' => '11', 'category_id' => '4',],
                    ['service_id' => '12', 'category_id' => '4',],
                    ['service_id' => '1', 'category_id' => '1',],
                    ['service_id' => '2', 'category_id' => '1',],
                    ['service_id' => '8', 'category_id' => '1',],
                    ['service_id' => '3', 'category_id' => '1',],
                    ['service_id' => '4', 'category_id' => '1',],
                    ['service_id' => '5', 'category_id' => '1',],
                    ['service_id' => '9', 'category_id' => '1',],
                    ['service_id' => '6', 'category_id' => '1',],
                    ['service_id' => '7', 'category_id' => '2',],
                    ['service_id' => '8', 'category_id' => '2',],
                    ['service_id' => '9', 'category_id' => '2',],
                    ['service_id' => '10', 'category_id' => '2',],
                    ['service_id' => '14', 'category_id' => '2',],
                )->create();
        }   
}
