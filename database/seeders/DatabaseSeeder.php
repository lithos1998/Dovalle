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
                'description' => 'Facilitamos tu cumplimiento con la Ley 6116. Nuestro servicio se encarga eficientemente de todos los trámites necesarios, asegurando conformidad legal. Desde documentación hasta procesos administrativos, nos ocupamos para que puedas centrarte en tu actividad principal. Confía en nosotros para simplificar y agilizar el cumplimiento normativo',
                'image' => 'ley_257',
            ],
            [
                'service_id' => '2',
                'id_name' => 'avisos_obra',
                'name' => 'Avisos de obra',
                'icon' => 'fa-solid fa-file-signature',
                'description' => 'Simplificamos tu proceso constructivo y nos encargamos de notificar y coordinar eficientemente cada fase del proyecto, manteniéndote informado en tiempo real. Desde permisos hasta hitos cruciales, estamos aquí para que tu obra avance sin contratiempos. Confía en nosotros para una gestión de proyectos fluida',
                'image' => 'avisos_obra',
            ],
            [
                'service_id' => '3',
                'id_name' => 'planos_suminisitro_gas',
                'name' => 'Planos de suministro de gas',
                'icon' => 'fa-regular fa-map',
                'description' => 'Ofrecemos un servicio especializado en la creación de planos para el suministro de gas, asegurando instalaciones seguras y eficientes. Nuestro equipo de expertos elabora detallados diseños, cumpliendo con normativas y garantizando la optimización del sistema. Confía en nosotros para asegurar un suministro de gas confiable y adaptado a tus necesidades',
                'image' => 'planos_suminisitro_gas',
            ],
            [
                'service_id' => '4',
                'id_name' => 'planos_evacuacion',
                'name' => 'Planos de evacuacion',
                'icon' => 'fa-solid fa-person-running',
                'description' => 'Ofrecemos un servicio especializado en la creación de planos de evacuación. Nuestros expertos diseñan mapas detallados, cumpliendo normativas de seguridad y facilitando la rápida evacuación en situaciones críticas. Confía en nosotros para garantizar entornos seguros y cumplir con los requisitos legales',
                'image' => 'planos_evacuacion',
            ],
            [
                'service_id' => '5',
                'id_name' => 'obleas',
                'name' => 'Obleas',
                'icon' => 'fa-solid fa-file-invoice',
                'description' => 'Nos especializamos en la emisión de obleas para ascensores, garantizando la conformidad con normativas de seguridad. Nuestro servicio gestiona eficientemente todos los trámites necesarios, asegurando la operación segura y legal de los ascensores. Confía en nosotros para obtener obleas de ascensores de manera rápida y precisa.',
                'image' => 'obleas',
            ],
            [
                'service_id' => '6',
                'id_name' => 'puesta_a_tierra',
                'name' => 'Medicion de puesta a tierra',
                'icon' => 'fa-solid fa-plug',
                'description' => 'Proporcionamos servicios de medición de puesta a tierra para garantizar la seguridad eléctrica. Nuestro equipo especializado utiliza tecnología avanzada para evaluar la eficiencia del sistema de conexión a tierra, identificando posibles riesgos. Confía en nosotros para asegurar un entorno eléctrico seguro y cumplir con normativas.',
                'image' => 'puesta_a_tierra',
            ],            
            [
                'service_id' => '7',
                'id_name' => 'informe_factibilidad',
                'name' => 'Informe de factibilidad',
                'icon' => 'fa-solid fa-paste',
                'description' => 'frecemos servicios de informes de factibilidad para evaluar la viabilidad de tus proyectos. Nuestro equipo experto analiza minuciosamente aspectos financieros, técnicos y operativos, proporcionándote datos clave. Confía en nosotros para tomar decisiones informadas y garantizar el éxito de tus iniciativas empresariales.',
                'image' => 'informe_factibilidad',
            ],
            [
                'service_id' => '8',
                'id_name' => 'solicitud_planos',
                'name' => 'Solicitud de planos',
                'icon' => 'fa-regular fa-map',
                'description' => 'Facilitamos la solicitud de planos con nuestro servicio especializado. Gestionamos eficientemente la documentación necesaria, garantizando procesos sin complicaciones. Ya sea para proyectos residenciales o comerciales, confía en nosotros para agilizar el proceso y obtener los planos que necesitas de manera rápida y precisa.',
                'image' => 'solicitud_plano',
            ],
            [
                'service_id' => '9',
                'id_name' => 'informe_dominio',
                'name' => 'Informe de dominio',
                'icon' => 'fa-solid fa-file-lines',
                'description' => 'Ofrecemos servicios de informes de dominio para proporcionarte información detallada sobre propiedades. Nuestro equipo realiza exhaustivas investigaciones legales y registrales, asegurando transparencia en la compra o venta. Confía en nosotros para obtener informes precisos que respalden tus decisiones inmobiliarias con seguridad y confianza.',
                'image' => 'informe_dominio',
            ],
            [
                'service_id' => '10',
                'id_name' => 'subdivision',
                'name' => 'Subdivision',
                'icon' => 'fa-solid fa-table-cells-large',
                'description' => 'Facilitamos subdivisiones de terreno con nuestro servicio especializado. Nuestro equipo experto gestiona todos los aspectos del proceso, desde la planificación hasta la aprobación, garantizando una subdivisión eficiente y legalmente sólida. Confía en nosotros para maximizar el valor de tu propiedad con subdivisiones bien ejecutadas.',
                'image' => 'subdivision',
            ],
            [
                'service_id' => '11',
                'id_name' => 'fachadas',
                'name' => 'Mantenimiento de fachadas',
                'icon' => 'fa-solid fa-building-shield',
                'description' => 'Ofrecemos servicios especializados en el mantenimiento de fachadas, garantizando la preservación y estética de edificios. Nuestro equipo experto realiza inspecciones, reparaciones y limpiezas, asegurando la integridad estructural y visual. Confía en nosotros para mantener la apariencia y funcionalidad de tus fachadas con soluciones eficientes y de calidad.',
                'image' => 'fachadas',
            ],
            [
                'service_id' => '12',
                'id_name' => 'aph',
                'name' => 'Consultas APH',
                'icon' => 'fa-solid fa-hospital-user',
                'description' => 'Ofrecemos servicios especializados en consultas de Análisis Preliminar de Riesgos (APH). Nuestro equipo experto evalúa y asesora sobre los riesgos laborales, garantizando entornos de trabajo seguros. Confía en nosotros para cumplir con normativas, prevenir accidentes y promover la seguridad laboral en tu empresa.',
                'image' => 'aph',
            ],
            [
                'service_id' => '13',
                'id_name' => 'medianeras',
                'name' => 'Inpermeabilizacion de medianeras',
                'icon' => 'fa-solid fa-droplet-slash',
                'description' => 'Especializados en impermeabilización de medianeras, ofrecemos soluciones efectivas para proteger tu edificio contra filtraciones y humedades. Nuestro equipo realiza evaluaciones detalladas y aplica técnicas avanzadas, garantizando una barrera duradera contra los elementos. Confía en nosotros para mantener tus medianeras secas y estructuralmente sólidas',
                'image' => 'medianeras',
            ],
            [
                'service_id' => '14',
                'id_name' => 'azoteas',
                'name' => 'Inpermeabilizacion de azoteas',
                'icon' => 'fa-solid fa-droplet-slash',
                'description' => 'Destacamos en la impermeabilización de azoteas, protegiendo tu edificio contra filtraciones y daños causados por el clima. Nuestro servicio utiliza tecnologías avanzadas y materiales duraderos, asegurando una impermeabilización efectiva y duradera. Confía en nosotros para mantener tu azotea seca y protegida, prolongando la vida útil de tu estructura.',
                'image' => 'azoteas',
            ],
            [
                'service_id' => '15',
                'id_name' => 'municipales',
                'name' => 'Habilitaciones municipales',
                'icon' => 'fa-solid fa-file-signature',
                'description' => 'Facilitamos las habilitaciones municipales con nuestro servicio especializado. Gestionamos eficientemente todos los trámites necesarios, asegurando la conformidad con normativas locales. Ya sea para proyectos comerciales o residenciales, confía en nosotros para agilizar el proceso y obtener las habilitaciones municipales que necesitas de manera rápida y precisa.',
                'image' => 'municipales',
            ],
            [
                'service_id' => '16',
                'id_name' => 'carteleria',
                'name' => 'Habilitaciones de carteleria, marquecina y toldos',
                'icon' => 'fa-solid fa-sign-hanging',
                'description' => 'Facilitamos las habilitaciones de cartelería, marquesinas y toldos con nuestro servicio especializado. Gestionamos eficientemente todos los trámites necesarios, asegurando la conformidad con regulaciones locales. Ya sea para negocios o residencias, confía en nosotros para agilizar el proceso y obtener las habilitaciones que necesitas de manera rápida y precisa.',
                'image' => 'carteleria',
            ],
            [
                'service_id' => '17',
                'id_name' => 'vereda',
                'name' => 'Habilitacion de espacio publico en vereda',
                'icon' => 'fa-solid fa-road',
                'description' => 'Simplificamos la habilitación de espacios públicos en veredas con nuestro servicio especializado. Nos encargamos eficientemente de los trámites, garantizando la conformidad con regulaciones locales. Ya sea para comercios o proyectos urbanos, confía en nosotros para agilizar el proceso y obtener la habilitación necesaria de manera rápida y precisa.',
                'image' => 'vereda',
            ],
            [
                'service_id' => '18',
                'id_name' => 'emplazamiento',
                'name' => 'Habilitacion de permiso de emplazamiento',
                'icon' => 'fa-solid fa-up-right-and-down-left-from-center',
                'description' => 'Ofrecemos servicios especializados en la habilitación de permisos de emplazamiento, asegurando la conformidad con regulaciones locales. Gestionamos eficientemente todos los trámites necesarios para posicionar tus proyectos comerciales o residenciales de manera legal y efectiva. Confía en nosotros para agilizar el proceso y obtener los permisos de emplazamiento necesarios de manera rápida y precisa.',
                'image' => 'vereda',
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
