-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-04-2025 a las 19:13:08
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ezsystem_all`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_all_cat_macro`
--

DROP TABLE IF EXISTS `ezsystem_all_cat_macro`;
CREATE TABLE IF NOT EXISTS `ezsystem_all_cat_macro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `activo` varchar(2) DEFAULT NULL,
  `macro` varchar(15) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `fechalta` varchar(15) DEFAULT NULL,
  `fechamod` varchar(15) DEFAULT NULL,
  `usermod` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_all_cat_macro`
--

INSERT INTO `ezsystem_all_cat_macro` (`id`, `activo`, `macro`, `nombre`, `useralta`, `fechalta`, `fechamod`, `usermod`) VALUES
(1, 'SI', 'MISP', 'METAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE', 'XION', 'NA', '', ''),
(2, 'SI', 'MMU', 'MANEJO Y USO DE MEDICAMENTOS', 'XION', 'NA', '', ''),
(3, 'SI', 'PCI', 'PREVENCION Y CONTROL DE INFECCIONES', 'XION', 'NA', '', ''),
(4, 'SI', 'FMS', 'GESTION Y SEGURIDAD DE LAS INSTALACIONES', 'XION', 'NA', '', ''),
(5, 'SI', 'SQE', 'COMPETENCIAS Y CAPACITACION DEL PERSONAL', 'XION', 'NA', '', ''),
(6, 'SI', 'QPS', 'MEJORA DE LA CALIDAD Y SEGURIDAD DEL PACIENTE', 'XION', 'NA', '', ''),
(7, 'SI', 'ACC', 'ACCESO Y CONTINUIDAD DE LA ATENCION', 'XION', 'NA', '', ''),
(8, 'SI', 'PFR', 'DERECHOS DEL PACIENTE Y SU FAMILIA', 'XION', 'NA', '', ''),
(9, 'SI', 'AOP', 'EVALUACION DE PACIENTE', 'XION', 'NA', '', ''),
(10, 'SI', 'SAD', 'SERVICIOS AUXILIARES DE DIAGNOSTICO', 'XION', 'NA', '', ''),
(11, 'SI', 'COP', 'ATENCION A PACIENTES', 'XION', 'NA', '', ''),
(12, 'SI', 'ASC', 'ATENCION QUIRURGICA Y ANESTESICA', 'XION', 'NA', '', ''),
(13, 'SI', 'PFE', 'EDUCACION AL PACIENTE', 'XION', 'NA', '', ''),
(14, 'SI', 'MCI', 'MANEJO DE LA COMUNICACION Y DE LA INFORMACION', 'XION', 'NA', '', ''),
(15, 'SI', 'GLD', 'GOBIERNO, LIDERAZGO Y DIRECCION', 'XION', 'NA', '', ''),
(16, 'SI', 'MUD', 'MANEJO DE DISPOSITIVOS MEDICOS', 'XION', 'NA', '', ''),
(17, 'SI', 'EXPCLI', 'EXPEDIENTE CLINICO', 'XION', 'NA', '', ''),
(18, 'SI', 'SOP', 'OTROS DE SOPORTE', 'XION', 'HOY', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_all_cat_pfuncional`
--

DROP TABLE IF EXISTS `ezsystem_all_cat_pfuncional`;
CREATE TABLE IF NOT EXISTS `ezsystem_all_cat_pfuncional` (
  `id` int NOT NULL AUTO_INCREMENT,
  `activo` varchar(2) DEFAULT NULL,
  `unidad` varchar(10) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `acronimo` varchar(30) DEFAULT NULL,
  `usereg` varchar(10) DEFAULT NULL,
  `fechalta` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_all_cat_pmisional`
--

DROP TABLE IF EXISTS `ezsystem_all_cat_pmisional`;
CREATE TABLE IF NOT EXISTS `ezsystem_all_cat_pmisional` (
  `id` int NOT NULL AUTO_INCREMENT,
  `activo` varchar(2) DEFAULT NULL,
  `unidad` varchar(10) DEFAULT NULL,
  `userjefe` varchar(20) DEFAULT NULL,
  `acronimo` varchar(100) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `usereg` varchar(10) DEFAULT NULL,
  `fechalta` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_all_cat_pmisional`
--

INSERT INTO `ezsystem_all_cat_pmisional` (`id`, `activo`, `unidad`, `userjefe`, `acronimo`, `nombre`, `usereg`, `fechalta`) VALUES
(1, 'SI', 'ZR', 'GM', 'HP', 'HOSPITALIZACION', 'XION', 'NA'),
(2, 'SI', 'ZR', 'GM', 'HPA', 'HOSPITALIZACION CORTA ESTANCIA', 'XION', 'NA'),
(3, 'SI', 'ZR', 'GM', 'CXA', 'CIRUGIA AMBULATORIA', 'XION', 'NA'),
(4, 'SI', 'ZR', 'GM', 'CX', 'CIRUGIA NO AMBULATORIA', 'XION', 'NA'),
(5, 'SI', 'ZR', 'GM', 'SAM', 'SERVICIOS AMBULATORIOS', 'XION', 'NA'),
(6, 'SI', 'ZR', 'GM', 'CEX', 'CONSULTA EXTERNA', 'XION', 'NA'),
(7, 'SI', 'ZR', 'GM', 'SAD', 'SERVICIOS AUXILIARES', 'XION', 'NA'),
(8, 'SI', 'TM2', 'GM', 'HP', 'HOSPITALIZACION', 'XION', 'NA'),
(9, 'SI', 'TM2', 'GM', 'HPA', 'HOSPITALIZACION CORTA ESTANCIA', 'XION', 'NA'),
(10, 'SI', 'TM2', 'GM', 'CXA', 'CIRUGIA AMBULATORIA', 'XION', 'NA'),
(11, 'SI', 'TM2', 'GM', 'CX', 'CIRUGIA NO AMBULATORIA', 'XION', 'NA'),
(12, 'SI', 'TM2', 'GM', 'SAM', 'SERVICIOS AMBULATORIOS', 'XION', 'NA'),
(13, 'SI', 'TM2', 'GM', 'CEX', 'CONSULTA EXTERNA', 'XION', 'NA'),
(14, 'SI', 'TM2', 'GM', 'SAD', 'SERVICIOS AUXILIARES', 'XION', 'NA'),
(15, 'SI', 'TM3', 'GM', 'HP', 'HOSPITALIZACION', 'XION', 'NA'),
(16, 'SI', 'TM3', 'GM', 'HPA', 'HOSPITALIZACION CORTA ESTANCIA', 'XION', 'NA'),
(17, 'SI', 'TM3', 'GM', 'CXA', 'CIRUGIA AMBULATORIA', 'XION', 'NA'),
(18, 'SI', 'TM3', 'GM', 'CX', 'CIRUGIA NO AMBULATORIA', 'XION', 'NA'),
(19, 'SI', 'TM3', 'GM', 'SAM', 'SERVICIOS AMBULATORIOS', 'XION', 'NA'),
(20, 'SI', 'TM3', 'GM', 'CEX', 'CONSULTA EXTERNA', 'XION', 'NA'),
(21, 'SI', 'TM3', 'GM', 'SAD', 'SERVICIOS AUXILIARES', 'XION', 'NA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_all_ejercicio`
--

DROP TABLE IF EXISTS `ezsystem_all_ejercicio`;
CREATE TABLE IF NOT EXISTS `ezsystem_all_ejercicio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `num` varchar(2) DEFAULT NULL,
  `completo` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_all_ejercicio`
--

INSERT INTO `ezsystem_all_ejercicio` (`id`, `num`, `completo`) VALUES
(1, '24', '2024'),
(2, '25', '2025');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_all_formato_cedulas`
--

DROP TABLE IF EXISTS `ezsystem_all_formato_cedulas`;
CREATE TABLE IF NOT EXISTS `ezsystem_all_formato_cedulas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `col1` varchar(1) DEFAULT NULL,
  `col2` varchar(1) DEFAULT NULL,
  `col3` varchar(1) DEFAULT NULL,
  `col4` varchar(1) DEFAULT NULL,
  `col5` varchar(1) DEFAULT NULL,
  `col6` varchar(1) DEFAULT NULL,
  `col7` varchar(1) DEFAULT NULL,
  `col8` varchar(1) DEFAULT NULL,
  `col9` varchar(1) DEFAULT NULL,
  `col10` varchar(1) DEFAULT NULL,
  `col11` varchar(1) DEFAULT NULL,
  `col12` varchar(1) DEFAULT NULL,
  `col13` varchar(1) DEFAULT NULL,
  `col14` varchar(1) DEFAULT NULL,
  `col15` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_all_formato_cedulas`
--

INSERT INTO `ezsystem_all_formato_cedulas` (`id`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `col9`, `col10`, `col11`, `col12`, `col13`, `col14`, `col15`) VALUES
(1, 'P', 'U', 'N', 'S', 'D', 'T', 'T', 'F', 'F', 'T', 'S', 'I', 'O', 'E', 'C'),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_all_plantilla_form`
--

DROP TABLE IF EXISTS `ezsystem_all_plantilla_form`;
CREATE TABLE IF NOT EXISTS `ezsystem_all_plantilla_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hasta10` varchar(10) DEFAULT NULL,
  `hasta20` varchar(10) DEFAULT NULL,
  `hasta30` varchar(10) DEFAULT NULL,
  `hasta40` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_all_plantilla_form`
--

INSERT INTO `ezsystem_all_plantilla_form` (`id`, `hasta10`, `hasta20`, `hasta30`, `hasta40`) VALUES
(1, '1', '1', '1', '1'),
(2, '2', '2', '2', '2'),
(3, '3', '3', '3', '3'),
(4, '4', '4', '4', '4'),
(5, '5', '5', '5', '5'),
(6, '6', '6', '6', '6'),
(7, '7', '7', '7', '7'),
(8, '8', '8', '8', '8'),
(9, '9', '9', '9', '9'),
(10, '10', '10', '10', '10'),
(11, '', '11', '11', '11'),
(12, '', '12', '12', '12'),
(13, '', '13', '13', '13'),
(14, '', '14', '14', '14'),
(15, '', '15', '15', '15'),
(16, '', '16', '16', '16'),
(17, '', '17', '17', '17'),
(18, '', '18', '18', '18'),
(19, '', '19', '19', '19'),
(20, '', '20', '20', '20'),
(21, '', '', '21', '21'),
(22, '', '', '22', '22'),
(23, '', '', '23', '23'),
(24, '', '', '24', '24'),
(25, '', '', '25', '25'),
(26, '', '', '26', '26'),
(27, '', '', '27', '27'),
(28, '', '', '28', '28'),
(29, '', '', '29', '29'),
(30, '', '', '30', '30'),
(31, '', '', '', '31'),
(32, '', '', '', '32'),
(33, '', '', '', '33'),
(34, '', '', '', '34'),
(35, '', '', '', '35'),
(36, '', '', '', '36'),
(37, '', '', '', '37'),
(38, '', '', '', '38'),
(39, '', '', '', '39'),
(40, '', '', '', '40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
