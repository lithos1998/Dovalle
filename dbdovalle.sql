-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 08:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdovalle`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'administraciones'),
(2, 'inmobiliarias'),
(3, 'desarrolladora'),
(4, 'home');

-- --------------------------------------------------------

--
-- Table structure for table `category_service`
--

CREATE TABLE `category_service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_service`
--

INSERT INTO `category_service` (`id`, `service_id`, `category_id`) VALUES
(1, 1, 4),
(2, 10, 4),
(3, 6, 4),
(4, 2, 4),
(5, 8, 4),
(6, 9, 4),
(7, 11, 4),
(8, 12, 4),
(9, 1, 1),
(10, 2, 1),
(11, 8, 1),
(12, 3, 1),
(13, 4, 1),
(14, 5, 1),
(15, 9, 1),
(16, 6, 1),
(17, 7, 2),
(18, 8, 2),
(19, 9, 2),
(20, 10, 2),
(21, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(52, '2019_08_19_000000_create_failed_jobs_table', 1),
(53, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(54, '2023_10_18_181511_create_services_table', 1),
(55, '2023_10_18_182242_create_categories_table', 1),
(56, '2023_10_19_002114_create_category_service_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(10) UNSIGNED NOT NULL,
  `id_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `id_name`, `name`, `icon`, `description`, `image`) VALUES
(1, 'ley_257', 'Ley 6116 (Ex ley 257)', 'fa-solid fa-hotel', 'Facilitamos tu cumplimiento con la Ley 6116. Nuestro servicio se encarga eficientemente de todos los trámites necesarios, asegurando conformidad legal. Desde documentación hasta procesos administrativos, nos ocupamos para que puedas centrarte en tu actividad principal. Confía en nosotros para simplificar y agilizar el cumplimiento normativo', 'default'),
(2, 'avisos_obra', 'Avisos de obra', 'fa-solid fa-file-signature', 'Simplificamos tu proceso constructivo y nos encargamos de notificar y coordinar eficientemente cada fase del proyecto, manteniéndote informado en tiempo real. Desde permisos hasta hitos cruciales, estamos aquí para que tu obra avance sin contratiempos. Confía en nosotros para una gestión de proyectos fluida', 'default'),
(3, 'planos_suminsitro_gas', 'Planos de suministro de gas', 'fa-regular fa-map', 'Ofrecemos un servicio especializado en la creación de planos para el suministro de gas, asegurando instalaciones seguras y eficientes. Nuestro equipo de expertos elabora detallados diseños, cumpliendo con normativas y garantizando la optimización del sistema. Confía en nosotros para asegurar un suministro de gas confiable y adaptado a tus necesidades', 'default'),
(4, 'planos_evacuacion', 'Planos de evacuacion', 'fa-solid fa-person-running', 'Ofrecemos un servicio especializado en la creación de planos de evacuación. Nuestros expertos diseñan mapas detallados, cumpliendo normativas de seguridad y facilitando la rápida evacuación en situaciones críticas. Confía en nosotros para garantizar entornos seguros y cumplir con los requisitos legales', 'default'),
(5, 'obleas', 'Obleas', 'fa-solid fa-file-invoice', '', 'default'),
(6, 'puesta_a_tierra', 'Medicion de puesta a tierra', 'fa-solid fa-plug', 'Proporcionamos servicios de medición de puesta a tierra para garantizar la seguridad eléctrica. Nuestro equipo especializado utiliza tecnología avanzada para evaluar la eficiencia del sistema de conexión a tierra, identificando posibles riesgos. Confía en nosotros para asegurar un entorno eléctrico seguro y cumplir con normativas.', 'default'),
(7, 'informe_factibilidad', 'Informe de factibilidad', 'fa-solid fa-paste', 'frecemos servicios de informes de factibilidad para evaluar la viabilidad de tus proyectos. Nuestro equipo experto analiza minuciosamente aspectos financieros, técnicos y operativos, proporcionándote datos clave. Confía en nosotros para tomar decisiones informadas y garantizar el éxito de tus iniciativas empresariales.', 'default'),
(8, 'solicitud_planos', 'Solicitud de planos', 'fa-regular fa-map', 'Facilitamos la solicitud de planos con nuestro servicio especializado. Gestionamos eficientemente la documentación necesaria, garantizando procesos sin complicaciones. Ya sea para proyectos residenciales o comerciales, confía en nosotros para agilizar el proceso y obtener los planos que necesitas de manera rápida y precisa.', 'default'),
(9, 'informe_dominio', 'Informe de dominio', 'fa-solid fa-file-lines', 'Ofrecemos servicios de informes de dominio para proporcionarte información detallada sobre propiedades. Nuestro equipo realiza exhaustivas investigaciones legales y registrales, asegurando transparencia en la compra o venta. Confía en nosotros para obtener informes precisos que respalden tus decisiones inmobiliarias con seguridad y confianza.', 'default'),
(10, 'subdivision', 'Subdivision', 'fa-solid fa-table-cells-large', 'Facilitamos subdivisiones de terreno con nuestro servicio especializado. Nuestro equipo experto gestiona todos los aspectos del proceso, desde la planificación hasta la aprobación, garantizando una subdivisión eficiente y legalmente sólida. Confía en nosotros para maximizar el valor de tu propiedad con subdivisiones bien ejecutadas.', 'default'),
(11, 'fachadas', 'Mantenimiento de fachadas', 'fa-solid fa-building-shield', 'Ofrecemos servicios especializados en el mantenimiento de fachadas, garantizando la preservación y estética de edificios. Nuestro equipo experto realiza inspecciones, reparaciones y limpiezas, asegurando la integridad estructural y visual. Confía en nosotros para mantener la apariencia y funcionalidad de tus fachadas con soluciones eficientes y de calidad.', 'default'),
(12, 'aph', 'Consultas APH', 'fa-solid fa-hospital-user', 'Ofrecemos servicios especializados en consultas de Análisis Preliminar de Riesgos (APH). Nuestro equipo experto evalúa y asesora sobre los riesgos laborales, garantizando entornos de trabajo seguros. Confía en nosotros para cumplir con normativas, prevenir accidentes y promover la seguridad laboral en tu empresa.', 'default'),
(13, 'medianeras', 'Impermeabilizacion de medianeras', 'fa-solid fa-droplet-slash', 'Especializados en impermeabilización de medianeras, ofrecemos soluciones efectivas para proteger tu edificio contra filtraciones y humedades. Nuestro equipo realiza evaluaciones detalladas y aplica técnicas avanzadas, garantizando una barrera duradera contra los elementos. Confía en nosotros para mantener tus medianeras secas y estructuralmente sólidas', 'default'),
(14, 'azoteas', 'Impermeabilizacion de azoteas', 'fa-solid fa-droplet-slash', 'Destacamos en la impermeabilización de azoteas, protegiendo tu edificio contra filtraciones y daños causados por el clima. Nuestro servicio utiliza tecnologías avanzadas y materiales duraderos, asegurando una impermeabilización efectiva y duradera. Confía en nosotros para mantener tu azotea seca y protegida, prolongando la vida útil de tu estructura.', 'default'),
(15, 'municipales', 'Habilitaciones municipales', 'fa-solid fa-file-signature', 'Facilitamos las habilitaciones municipales con nuestro servicio especializado. Gestionamos eficientemente todos los trámites necesarios, asegurando la conformidad con normativas locales. Ya sea para proyectos comerciales o residenciales, confía en nosotros para agilizar el proceso y obtener las habilitaciones municipales que necesitas de manera rápida y precisa.', 'default'),
(16, 'carteleria', 'Habilitaciones de carteleria, marquecina y toldos', 'fa-solid fa-sign-hanging', 'Facilitamos las habilitaciones de cartelería, marquesinas y toldos con nuestro servicio especializado. Gestionamos eficientemente todos los trámites necesarios, asegurando la conformidad con regulaciones locales. Ya sea para negocios o residencias, confía en nosotros para agilizar el proceso y obtener las habilitaciones que necesitas de manera rápida y precisa.', 'default'),
(17, 'vereda', 'Habilitacion de espacio publico en vereda', 'fa-solid fa-road', 'Simplificamos la habilitación de espacios públicos en veredas con nuestro servicio especializado. Nos encargamos eficientemente de los trámites, garantizando la conformidad con regulaciones locales. Ya sea para comercios o proyectos urbanos, confía en nosotros para agilizar el proceso y obtener la habilitación necesaria de manera rápida y precisa.', 'default'),
(18, 'emplazamiento', 'Habilitacion de permiso de emplazamiento', 'fa-solid fa-up-right-and-down-left-from-center', 'Ofrecemos servicios especializados en la habilitación de permisos de emplazamiento, asegurando la conformidad con regulaciones locales. Gestionamos eficientemente todos los trámites necesarios para posicionar tus proyectos comerciales o residenciales de manera legal y efectiva. Confía en nosotros para agilizar el proceso y obtener los permisos de emplazamiento necesarios de manera rápida y precisa.', 'default');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `category_service`
--
ALTER TABLE `category_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category_service`
--
ALTER TABLE `category_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
