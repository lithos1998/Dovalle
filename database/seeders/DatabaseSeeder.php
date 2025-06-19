<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\CategoryService;
use App\Models\Item;
use App\Models\Service;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
                ['id' => '1', 'name' => 'administraciones',],
                ['id' => '2', 'name' => 'inmobiliarias',],
                ['id' => '3', 'name' => 'constructoras',],
                ['id' => '4', 'name' => 'home',],
            )->create();

            
        Service::factory(18)
        ->sequence(
            [
                'id_name' => 'ley_257',
                'name' => 'Ley 6116 (Ex ley 257)',
                'icon' => 'fa-solid fa-hotel',
                'description' => 'Facilitamos el cumplimiento legal con la Ley 6116. Nuestro servicio se encarga de trámites, asegurando conformidad. Te liberamos para enfocarte en tu actividad principal. Simplificamos y agilizamos el cumplimiento normativo',
                'image' => 'ley_257',
            ],
            [
                'id_name' => 'avisos_obra',
                'name' => 'Avisos, permisos y final de obra',
                'icon' => 'fa-solid fa-file-signature',
                'description' => 'Optimizamos tu proceso constructivo, coordinando cada fase del proyecto eficientemente y manteniéndote informado en tiempo real. Desde permisos hasta hitos cruciales, aseguramos que tu obra avance sin contratiempos. Confía en nuestra gestión fluida',
                'image' => 'avisos_obra',
            ],
            [
                'id_name' => 'planos_suminisitro_gas',
                'name' => 'Planos de suministro de gas',
                'icon' => 'fa-regular fa-map',
                'description' => 'Servicio especializado en creación de planos para suministro de gas, garantizando instalaciones seguras y eficientes. Expertos elaboran diseños detallados cumpliendo normativas, garantizando optimización del sistema. Confía en nosotros para suministro confiable y adaptado',
                'image' => 'planos_suminisitro_gas',
            ],
            [
                'id_name' => 'planos_evacuacion',
                'name' => 'Planos de evacuacion',
                'icon' => 'fa-solid fa-person-running',
                'description' => 'Servicio especializado en creación de planos de evacuación. Expertos diseñan mapas detallados, cumpliendo normativas de seguridad, facilitando rápida evacuación. Confía en nosotros para entornos seguros y cumplir requisitos legales',
                'image' => 'planos_evacuacion',
            ],
            [
                'id_name' => 'obleas',
                'name' => 'Obleas',
                'icon' => 'fa-solid fa-file-invoice',
                'description' => 'Especializados en emisión de obleas para ascensores, asegurando conformidad con normativas de seguridad. Nuestro servicio gestiona trámites eficientemente, garantizando operación segura y legal. Confía en nosotros para obtener obleas rápida y precisamente',
                'image' => 'obleas',
            ],
            [
                'id_name' => 'puesta_a_tierra',
                'name' => 'Medicion de puesta a tierra',
                'icon' => 'fa-solid fa-bolt-lightning',
                'description' => 'Ofrecemos servicios de medición de puesta a tierra para garantizar seguridad eléctrica. Equipo especializado usa tecnología avanzada para evaluar eficiencia del sistema, identificando riesgos. Confía en nosotros para entornos seguros y normativas cumplidas',
                'image' => 'puesta_a_tierra',
            ],            
            [
                'id_name' => 'informe_factibilidad',
                'name' => 'Informe de factibilidad',
                'icon' => 'fa-solid fa-paste',
                'description' => 'Servicios de informes de factibilidad para evaluar viabilidad de proyectos. Equipo experto analiza aspectos financieros, técnicos y operativos, proporcionando datos clave. Confía en nosotros para decisiones informadas y éxito empresarial',
                'image' => 'informe_factibilidad',
            ],
            [
                'id_name' => 'solicitud_planos',
                'name' => 'Solicitud de planos',
                'icon' => 'fa-regular fa-map',
                'description' => 'Facilitamos solicitud de planos con servicio especializado. Gestionamos documentación eficientemente, garantizando procesos sin complicaciones. Confía en nosotros para agilizar obtención de planos en proyectos residenciales o comerciales, rápida y precisamente',
                'image' => 'solicitud_plano',
            ],
            [
                'id_name' => 'informe_dominio',
                'name' => 'Informe de dominio',
                'icon' => 'fa-solid fa-file-lines',
                'description' => 'Servicios de informes de dominio para detalles de propiedades. Equipo realiza exhaustivas investigaciones legales y registrales, garantizando transparencia en transacciones. Confía en nosotros para informes precisos que respalden decisiones inmobiliarias con seguridad y confianza',
                'image' => 'informe_dominio',
            ],
            [
                'id_name' => 'subdivision',
                'name' => 'Subdivision',
                'icon' => 'fa-solid fa-table-cells-large',
                'description' => 'Facilitamos subdivisiones de terreno con servicio especializado. Equipo experto gestiona proceso completo, desde planificación hasta aprobación, garantizando subdivisión eficiente y legalmente sólida. Confía en nosotros para maximizar valor de tu propiedad',
                'image' => 'subdivision',
            ],
            [
                'id_name' => 'fachadas',
                'name' => 'Mantenimiento de fachadas',
                'icon' => 'fa-solid fa-person-digging',
                'description' => 'Servicios especializados en mantenimiento de fachadas para preservación y estética de edificios. Equipo experto realiza inspecciones, reparaciones y limpiezas, asegurando integridad estructural y visual. Confía en nosotros para mantener tus fachadas con soluciones eficientes y de calidad',
                'image' => 'fachadas',
            ],
            [
                'id_name' => 'aph',
                'name' => 'Consultas APH',
                'icon' => 'fa-solid fa-hospital-user',
                'description' => 'Ofrecemos servicios especializados en consultas de Análisis Preliminar de Riesgos (APH). Equipo experto evalúa y asesora sobre riesgos laborales, garantizando entornos seguros. Confía en nosotros para cumplir normativas y promover seguridad laboral',
                'image' => 'aph',
            ],
            [
                'id_name' => 'medianeras',
                'name' => 'Inpermeabilizacion de medianeras',
                'icon' => 'fa-solid fa-droplet-slash',
                'description' => 'Especializados en impermeabilización de medianeras, ofrecemos soluciones efectivas para proteger tu edificio contra filtraciones y humedades. Equipo realiza evaluaciones detalladas y aplica técnicas avanzadas. Confía en nosotros para mantener tus medianeras secas y sólidas',
                'image' => 'medianeras',
            ],
            [
                'id_name' => 'azoteas',
                'name' => 'Inpermeabilizacion de azoteas',
                'icon' => 'fa-solid fa-droplet-slash',
                'description' => 'Destacamos en impermeabilización de azoteas, protegiendo edificios contra filtraciones y daños climáticos. Utilizamos tecnologías avanzadas y materiales duraderos para asegurar una impermeabilización efectiva. Confía en nosotros para mantener tu azotea seca y protegida',
                'image' => 'azoteas',
            ],
            [
                'id_name' => 'municipales',
                'name' => 'Habilitaciones municipales',
                'icon' => 'fa-regular fa-calendar-check',
                'description' => 'Facilitamos habilitaciones municipales con servicio especializado. Gestionamos trámites eficientemente, asegurando conformidad con normativas locales. Confía en nosotros para agilizar proceso y obtener habilitaciones municipales rápidas y precisas en proyectos comerciales o residenciales',
                'image' => 'municipales',
            ],
            [
                'id_name' => 'carteleria',
                'name' => 'Habilitaciones de carteleria, marquecina y toldos',
                'icon' => 'fa-solid fa-sign-hanging',
                'description' => 'Facilitamos habilitaciones de cartelería, marquesinas y toldos con servicio especializado. Gestionamos trámites eficientemente, asegurando conformidad con regulaciones locales. Confía en nosotros para agilizar proceso y obtener habilitaciones rápidas y precisas',
                'image' => 'carteleria',
            ],
            [
                'id_name' => 'vereda',
                'name' => 'Habilitacion de espacio publico en vereda',
                'icon' => 'fa-solid fa-road',
                'description' => 'Simplificamos habilitación de espacios públicos en veredas con servicio especializado. Nos encargamos eficientemente de trámites, garantizando conformidad con regulaciones locales. Confía en nosotros para agilizar proceso y obtener habilitación rápida y precisa',
                'image' => 'vereda',
            ],
            [
                'id_name' => 'emplazamiento',
                'name' => 'Habilitacion de permiso de emplazamiento',
                'icon' => 'fa-solid fa-up-right-and-down-left-from-center',
                'description' => 'Ofrecemos servicios especializados en habilitación de permisos de emplazamiento, garantizando conformidad con regulaciones locales. Gestionamos eficientemente trámites para posicionar tus proyectos comerciales o residenciales legal y efectivamente. Confía en nosotros para obtener permisos rápidos y precisos',
                'image' => 'vereda',
            ],
            [
                'id_name' => 'comerciales',
                'name' => 'Habilitaciones comerciales',
                'icon' => 'fa-solid fa-building-circle-check',
                'description' => 'Facilitamos habilitaciones comerciales. Gestionamos trámites eficientemente para garantizar conformidad con regulaciones locales. Confía en nosotros para obtener las habilitaciones necesarias de manera rápida y precisa',
                'image' => 'no definido',
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

                Item::factory(28)
                ->sequence(
                    ['name' => 'Aviso de obra', 'amount' => '50000'],
                    ['name' => 'Eximicion de Ley 6116', 'amount' => '50000'],
                    ['name' => 'Habilitacion Carteleria', 'amount' => '125000'],
                    ['name' => 'Habilitacion Comercial C/ Plano', 'amount' => '350000'],
                    ['name' => 'Habilitacion Comercial Simple', 'amount' => '300000'],
                    ['name' => 'Habilitacion Espacio Publico', 'amount' => '125000'],
                    ['name' => 'Informe de prefactibilidad - ABONO (10)', 'amount' => '240000'],
                    ['name' => 'Informe de prefactibilidad - ABONO (11-15)', 'amount' => '342000'],
                    ['name' => 'Informe de prefactibilidad - ABONO (16-20)', 'amount' => '420000'],
                    ['name' => 'Informe de prefactibilidad - Gestion Express', 'amount' => '50000'],
                    ['name' => 'Informe de prefactibilidad C/ LFI', 'amount' => '80000'],
                    ['name' => 'Informe de prefactibilidad Simple', 'amount' => '50000'],
                    ['name' => 'Informe Tecnico LEY 6116', 'amount' => '50000'],
                    ['name' => 'Ley 6116 (Chico)', 'amount' => '120000'],
                    ['name' => 'Ley 6116 (Mediano)', 'amount' => '150000'],
                    ['name' => 'Ley 6116 (Grande)', 'amount' => '180000'],
                    ['name' => 'Ley 6116 (Torre)', 'amount' => '300000'],
                    ['name' => 'Ley Autoproteccion 5920 (DDJJ)', 'amount' => '30000'],
                    ['name' => 'Mantenimiento Edificilio', 'amount' => '0'],
                    ['name' => 'Medicion Puesta a Tierra', 'amount' => '100000'],
                    ['name' => 'Modificacion de conservador', 'amount' => '25000'],
                    ['name' => 'Obleas Anuales', 'amount' => '50000'],
                    ['name' => 'Permiso de obra', 'amount' => '0'],
                    ['name' => 'Plano de evacuacion', 'amount' => '0'],
                    ['name' => 'Relevamiento Tecnico c/ Informe', 'amount' => '150000'],
                    ['name' => 'Solicitud de planos', 'amount' => '50000'],
                    ['name' => 'Subdivision', 'amount' => '0'],
                    ['name' => 'Vinculacion AGIP/AGC', 'amount' => '35000']
                )->create();

                User::factory(3)
                ->sequence(
                    [
                        'user' => 'admin',
                        'password' => Hash::make('admin'),
                        'privileges' => 'admin',
                    ],
                    [
                        'user' => 'pascual',
                        'password' => Hash::make('pascual123'),
                        'cuit' => 20411507611,
                        'ptovta' => 1,
                        'privileges' => 'facturador',
                    ],
                    [
                        'user' => 'nicolas',
                        'password' => Hash::make('nico123'),
                        'cuit' => 20411507622,
                        'ptovta' => 2,
                        'privileges' => 'facturador',
                    ],
                    [
                        'user' => 'angela',
                        'password' => Hash::make('angela123'),
                        'cuit' => 0,
                        'ptovta' => 0,
                        'privileges' => 'user',
                    ],
                )->create();
                
        }    
}
