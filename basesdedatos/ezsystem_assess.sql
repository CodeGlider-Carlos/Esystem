-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-04-2025 a las 19:13:54
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
-- Base de datos: `ezsystem_assess`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_assess_personal`
--

DROP TABLE IF EXISTS `ezsystem_assess_personal`;
CREATE TABLE IF NOT EXISTS `ezsystem_assess_personal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `activo` varchar(2) DEFAULT NULL,
  `region` varchar(15) DEFAULT NULL,
  `unidad` varchar(10) DEFAULT NULL,
  `dirger` varchar(10) DEFAULT NULL,
  `userjefe` varchar(20) DEFAULT NULL,
  `dep` varchar(15) DEFAULT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `area` varchar(70) DEFAULT NULL,
  `otro` varchar(70) DEFAULT NULL,
  `rol` varchar(40) DEFAULT NULL,
  `idtrab` varchar(10) DEFAULT NULL,
  `nombreco` varchar(200) DEFAULT NULL,
  `idpoa` varchar(8) DEFAULT NULL,
  `poasig` varchar(100) DEFAULT NULL,
  `usereg` varchar(20) DEFAULT NULL,
  `fechalta` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_assess_personal`
--

INSERT INTO `ezsystem_assess_personal` (`id`, `activo`, `region`, `unidad`, `dirger`, `userjefe`, `dep`, `nombre`, `area`, `otro`, `rol`, `idtrab`, `nombreco`, `idpoa`, `poasig`, `usereg`, `fechalta`) VALUES
(1, 'SI', 'JAL', 'ZR', 'DIGC', 'DIGC', 'GRJ1', 'GERENCIA', '', '', 'MANDO', '', 'PABLO AJA', '', 'Gerente Regional', 'XION', 'HOY'),
(2, 'SI', 'JAL', 'ZR', 'GEM2', 'GEM2', 'MED', 'MEDICINA', NULL, NULL, 'OPERATIVO', '4', 'JOSE JOEL MONTOYA GARCIA', NULL, 'Medico de Guardia', 'XION', 'HOY'),
(3, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'ENF2', 'ENFERMERIA', 'QUIROFANO', '', '', '5', 'KARINA GARCIA SANCHEZ', '', 'Enfermera General', 'XION', 'HOY'),
(4, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'ENF2', 'ENFERMERIA', 'HOSPITALIZACION', '', '', '7', 'NOEMI CERVANTES GOMEZ NESLY', '', 'Enfermera General', 'XION', 'HOY'),
(5, 'SI', 'JAL', 'ZR', 'GEM2', 'GEM2', 'MED', 'MEDICINA', '', '', '', '8', 'CHRISTIAN RAFAEL MAGADALENO DE LA TORRE', '', 'Medico de Guardia', 'XION', 'HOY'),
(6, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'ENF2', 'ENFERMERIA', '', '', 'MANDO', '13', 'MARIA DE JESUS ARTEAGA', '', 'Jefe de Enfermeras', 'XION', 'HOY'),
(7, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'ENF2', 'ENFERMERIA', 'HOSPITALIZACION', '', '', '17', 'GERARDO VELA PUENTE BRYAN', '', 'Enfermera General', 'XION', 'HOY'),
(8, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'ENF2', 'ENFERMERIA', 'QUIROFANO', '', '', '18', 'CRISTINA BRISEÑO MEDELLIN DIANA', '', 'Enfermera General', 'XION', 'HOY'),
(9, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'ENF2', 'ENFERMERIA', 'HOSPITALIZACION', '', '', '19', 'ADIRAY NAVARRO MORAN VANESA', '', 'Enfermera General', 'XION', 'HOY'),
(10, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'ENF2', 'ENFERMERIA', 'QUIROFANO', '', '', '20', 'SARAHI HERNANDEZ GARCIA FERNANDA', '', 'Enfermera Especialista', 'XION', 'HOY'),
(11, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'CAM', 'CAMILLERO', '', '', '', '21', 'ROBERTO ROMERO GUZMAN JOSE', '', 'Camillero', 'XION', 'HOY'),
(12, 'SI', 'JAL', 'ZR', 'GRJ1', 'GRJ1', 'RH1', 'RECURSOS HUMANOS', '', '', 'MANDO', '22', 'ISBERT GARCIA', '', 'Jefe de Recursos Humanos', 'XION', 'HOY'),
(14, 'SI', 'JAL', 'ZR', 'GEA1', 'SER2', 'MTN', 'MANTENIMIENTO', '', '', '', '27', 'TERESA OROZCO SANDOVAL MARIA', '', 'Auxiliar de Mantenimiento', 'XION', 'HOY'),
(15, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'ENF2', 'ENFERMERIA', 'HOSPITALIZACION', '', '', '28', 'BERENICE CAMARENA MERCADO SOFIA', '', 'Enfermera General', 'XION', 'HOY'),
(16, 'SI', 'JAL', 'ZR', 'GEA1', 'SER2', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '29', 'CARMEN OROZCO SANDOVAL MARIA DEL', '', 'Auxiliar de Intendencia', 'XION', 'HOY'),
(17, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'ENF2', 'ENFERMERIA', 'QUIROFANO', '', '', '30', 'ZURIEL RAMIREZ MORENO ADLAI', '', 'Enfermera Especialista', 'XION', 'HOY'),
(18, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'ENF2', 'ENFERMERIA', 'QUIROFANO', '', '', '31', 'SANDRA ENRIQUEZ GONZALEZ', '', 'Enfermera General', 'XION', 'HOY'),
(19, 'SI', 'JAL', 'ZR', 'GRJ1', 'GRJ1', 'GEM2', 'GERENCIA MEDICA', '', '', 'GERENCIAL', '33', 'REYNA BARRERA', '', 'Gerente Medico', 'XION', 'HOY'),
(20, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'ENF2', 'ENFERMERIA', '', '', '', '35', 'ANTONIO PEREZ ROJAS CARLOS', '', 'Camillero', 'XION', 'HOY'),
(21, 'SI', 'JAL', 'ZR', 'GEA1', 'SER2', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '36', 'PAOLA COSIO ALCALA DANNA', '', 'Auxiliar de Intendencia', 'XION', 'HOY'),
(22, 'SI', 'JAL', 'ZR', 'GEA1', 'SER2', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '37', 'CARMEN PUENTE GARCIA MARIA DEL', '', 'Auxiliar de Intendencia', 'XION', 'HOY'),
(23, 'SI', 'JAL', 'ZR', 'GEA1', 'SER2', 'SEG', 'SEGURIDAD', '', '', '', '41', 'RAFAEL PALACIOS NANDE', '', 'Guardia de Seguridad', 'XION', 'HOY'),
(24, 'SI', 'JAL', 'ZR', 'GEA1', 'SER2', 'SEG', 'SEGURIDAD', '', '', '', '42', 'JOAQUIN ROBLES ARELLANO', '', 'Guardia de Seguridad', 'XION', 'HOY'),
(25, 'SI', 'JAL', 'ZR', 'GEM2', 'GEM2', 'MED', 'MEDICINA', '', '', '', '43', 'MIRIAM PEÑA CORTEZ', '', 'Medico de Guardia', 'XION', 'HOY'),
(26, 'SI', 'JAL', 'ZR', 'GEA1', 'ARP2', 'ARP2', 'ADMISION Y RELACIONES PUBLICAS', '', '', '', '44', 'ESTHER RODRIGUEZ VIDAURRI JAZMIN', '', 'Admision', 'XION', 'HOY'),
(27, 'SI', 'JAL', 'ZR', 'GRJ1', 'GRJ1', 'GEA1', 'GERENCIA ADMINISTRATIVA', '', '', 'GERENCIAL', '47', 'BRENDA MARTINEZ', '', 'Gerente Administrativo', 'XION', 'HOY'),
(28, 'SI', 'JAL', 'ZR', 'GEA1', 'ARP2', 'ARP', 'ADMISION Y RELACIONES PUBLICAS', '', '', '', '49', 'FABIAN TOPETE LOPEZ', '', 'Admision', 'XION', 'HOY'),
(29, 'SI', 'JAL', 'ZR', 'GEA1', 'SER2', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '50', 'FRANCISCO CARRERO FLORES JUAN', '', 'Auxiliar de Intendencia', 'XION', 'HOY'),
(30, 'SI', 'JAL', 'ZR', 'GEM2', 'ENF2', 'ENF2', 'ENFERMERIA', '', '', '', '52', 'NOEMI AVALOS SANCHEZ ALVAREZ CLARA', '', 'Enfermera General', 'XION', 'HOY'),
(31, 'SI', 'JAL', 'ZR', 'GEA1', 'SER2', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '53', 'LUIS NAVARRO CHAVEZ JOSE', '', 'Auxiliar de Intendencia', 'XION', 'HOY'),
(32, 'SI', 'PUE', '', 'GRP1', 'DIGC', 'GRP1', 'GERENCIA', '', '', 'GERENCIAL', '', 'MARIA EUGENIA MALDONADO', '', '', '', ''),
(33, 'SI', 'PUE', 'CMP', 'GEA3', 'SER3', 'LYR', 'LIMPIEZA Y ROPERIA', NULL, NULL, NULL, NULL, 'MARIA CONCEPCION  ROJANO  RAMIREZ ', NULL, 'INTENDENTE ', NULL, NULL),
(34, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'MARICRUZ  GONZALEZ CRUZ ', '', 'ENFERMERA GENERAL ', '', ''),
(35, 'SI', 'PUE', 'CMP', 'GRP1', 'GRP1', 'GEA3', 'GERENCIA ADMINISTRATIVA', '', '', 'GERENCIAL', '', 'LEIZI NURI SANCHEZ  LOPEZ ', '', 'GERENTE ADMINISTRATIVO', '', ''),
(36, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', 'MANDO', '', 'MAGALY GUADALUPE  ROSAS  HERNANDEZ ', '', 'JEFA DE ENFERMERIA ', '', ''),
(37, 'SI', 'PUE', 'CMP', 'GEA3', 'SER3', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'NORMA ANGELICA  DIAZ SALAZAR ', '', 'INTENDENTE ', '', ''),
(38, 'SI', 'PUE', 'CMP', 'GEA3', 'SER3', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'ALMA  ROSA BAUTISTA  GUZMAN ', '', 'INTENDENTE ', '', ''),
(39, 'SI', 'PUE', 'CMP', 'GEA3', 'ARP1', 'ARP1', 'ADMISION Y RELACIONES PUBLICAS', '', '', '', '', 'MARIANA SANCHEZ  GARCIA ', '', 'RECEPCION', '', ''),
(40, 'SI', 'PUE', 'CMP', 'GEA3', 'SER3', 'SER1', 'SERVICIOS', '', '', 'MANDO', '', 'DIANA ALEJANDRA MOTA  GONZALEZ ', '', 'SUPERVISOR DE SERVICIOS ', '', ''),
(41, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'PABLO  PAZOS  GONZALEZ ', '', 'ENFERMERA ESPECIALISTA ', '', ''),
(42, 'SI', 'PUE', 'CMP', 'GEA3', 'SER3', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'MARIA MARTHA  GARCIA  MENDOZA ', '', 'INTENDENTE ', '', ''),
(43, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'MED', 'MEDICINA', '', '', '', '', 'ALAIN  MESSA RODRIGUEZ ', '', 'MEDICO DE GUARDIA', '', ''),
(44, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'FAR2', 'FARMACIA', '', '', 'MANDO', '', 'PENELOPE CRISTAL DE LA ROSA  DIAZ', '', 'RESPONSABLE SANITARIA Y JEFA DE FARMACIA ', '', ''),
(45, 'SI', 'PUE', 'CMP', 'GEA3', 'ARP1', 'ARP1', 'ADMISION Y RELACIONES PUBLICAS', '', '', '', '', 'ERNESTO  BARCENAS  SANTILLAN', '', 'RECEPCION ', '', ''),
(46, 'SI', 'PUE', 'CMP', 'GEM3', 'FAR1', 'FAR2', 'FARMACIA', '', '', '', '', 'YOCELIN  VILLEGAS  ALVAREZ ', '', 'AUXILIAR DE FARMACIA ', '', ''),
(47, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'KARLA  VARGAS  ALVAREZ ', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(48, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'ANA LAURA  SANTOS  RAMOS ', '', 'ENFERMERA GENERAL ', '', ''),
(49, 'SI', 'PUE', 'CMP', 'GEA3', 'ARP1', 'ARP1', 'ADMISION Y RELACIONES PUBLICAS', '', '', '', '', 'ARMANDO DANIEL  NUÑEZ  GARCIA', '', 'RECEPCION ', '', ''),
(50, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'MED', 'MEDICINA', '', '', '', '', 'ALEXIS ENRIQUE MARIN  MEZA', '', 'MEDICO DE GUARDIA ', '', ''),
(51, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'DIANA  HERNANDEZ LANDERO ', '', 'ENFERMERA GENERAL ', '', ''),
(52, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'ADITI  MALDONADO  ANAYA ', '', 'ENFERMERA GENERAL ', '', ''),
(53, 'SI', 'PUE', 'CMP', 'GEA3', 'SER3', 'SEG', 'SEGURIDAD', '', '', '', '', 'JUAN CARLOS  ALVA  JOLALPA ', '', 'GUARDIA DE SEGURIDAD', '', ''),
(54, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'LORENA  FELIPE  TRINIDAD ', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(55, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'CAMILLERO', '', '', '', '', 'YAHIR ALBERTO  SILVA  MENDOZA ', '', 'CAMILLERO ', '', ''),
(56, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'CAMILLERO', '', '', '', '', 'JUAN PABLO  SANCHEZ  MANI ', '', 'CAMILLERO ', '', ''),
(57, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'JANETH  PEREZ  IBAÑEZS', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(58, 'SI', 'PUE', 'CMP', 'GEA3', 'GRP1', 'GEM3', 'GERENCIA MEDICA', '', '', 'GERENCIAL', '', 'DANIEL BALDEMAR  BUCIO  ORTIZ ', '', 'GERENTE MEDICO ', '', ''),
(59, 'SI', 'PUE', 'CMP', 'GEA3', 'SER3', 'MTN', 'MANTENIMIENTO', '', '', '', '', 'MITZELINE  VELASCO  FLORES ', '', 'AUXILIAR DE MANTENIMIENTO ', '', ''),
(60, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'MAGDALENA  LINO MATEO ', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(61, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'MED', 'MEDICINA', '', '', '', '', 'LAURA  ORTIZ  PEREZ ', '', 'MEDICO DE GUARDIA', '', ''),
(62, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'MARIA ELOINA  MORALES  HERNANDEZ ', '', 'ENFERMERA GENERAL ', '', ''),
(63, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'NIMSI  RAMIREZ  DIAZ ', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(64, 'SI', 'PUE', 'CMP', 'GEA3', 'SER3', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'MARIA DEL CARMEN  SALAZAR  ZUÑIGA ', '', 'INTENDENTE ', '', ''),
(65, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'HECTOR  FLORES  RAMOS ', '', 'CAMILLERO ', '', ''),
(66, 'SI', 'PUE', 'CMP', 'GEM3', 'GEM3', 'ENF1', 'ENFERMERIA', '', '', '', '', 'DIANA  PONCE  SALDIVAR ', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(67, 'SI', 'PUE', 'TM2', 'GEA2', 'ARP1', 'ARP1', 'ADMISION Y RELACIONES PUBLICAS', '', '', '', '', 'SERGIO SERRANO  LOPEZ', '', 'RECEPCIÓN', '', ''),
(68, 'SI', 'PUE', 'TM2', 'GEA2', 'SER1', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'JEANNETTE MATA  CRUZ ', '', 'INTENDENTE', '', ''),
(69, 'SI', 'PUE', 'TM2', 'GEA2', 'GRP1', 'GEA2', 'GERENCIA ADMINISTRATIVA', '', '', 'GERENCIAL', '', 'MARIA INES MURILLO  DIAZ', '', 'GERENTE ADMINISTRATIVO ', '', ''),
(70, 'SI', 'PUE', 'TM2', 'GEM1', 'GEM1', 'ENF1', 'ENFERMERIA', '', '', 'MANDO', '', 'YELENNY MATA  GARCIA ', '', 'JEFA DE ENFERMERIA ', '', ''),
(71, 'SI', 'PUE', 'TM2', 'GEA2', 'GEA2', 'ARP1', 'ADMISION Y RELACIONES PUBLICAS', '', '', 'MANDO', '', 'KARLA MARIANA MESSA RODRIGUEZ ', '', 'RELACIONES PÚBLICAS', '', ''),
(72, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'CAMILLERO', '', '', '', '', 'RAUL MIGUEL VIGUERAS  SANCHEZ ', '', 'CAMILLERO', '', ''),
(73, 'SI', 'PUE', 'TM2', 'GEM1', 'GEM1', 'MED', 'MEDICINA', '', '', '', '', 'CAROLINA CONTRERAS  URBINA ', '', 'MÉDICO DE GUARDIA', '', ''),
(74, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'CAMILLERO', '', '', '', '', 'ERICK GIOVANNY MARTINEZ  DOMINGUEZ', '', 'CAMILLERO ', '', ''),
(75, 'SI', 'PUE', 'TM2', 'GEA2', 'SER1', 'ALIM', 'ALIMENTOS', '', '', '', '', 'RITA VIRIDIANA MORENO  ESCALERA ', '', 'BARISTA ', '', ''),
(76, 'SI', 'PUE', 'TM2', 'GRP1', 'GRP1', 'GEM1', 'GERENCIA MEDICA', '', '', 'GERENCIAL', '', 'KAREN ALEJANDRA HERNANDEZ  DIAZ ', '', 'GERENTE MEDICO ', '', ''),
(77, 'SI', 'PUE', 'TM2', 'GEM1', 'GEM1', 'FAR1', 'FARMACIA', '', '', 'MANDO', '', 'VIRIDIANA  OSORIO  MOTA ', '', 'JEFE DE FARMACIA ', '', ''),
(78, 'SI', 'PUE', 'TM2', 'GEA2', 'SER1', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'DOLORES  LIMA ENCISO', '', 'INTENDENTE ', '', ''),
(79, 'SI', 'PUE', 'TM2', '', '', '', 'SISTEMAS', '', '', '', '', 'ROQUE LEYVA LEYVA LEON', '', 'LIDER DE SISTEMA SAP', '', ''),
(80, 'SI', 'PUE', 'TM2', '', '', '', 'CONTABILIDAD', '', '', 'MANDO', '', 'OSVALDO  OSVALDO CONTRERAS ', '', 'CONTADOR GENERAL ', '', ''),
(81, 'SI', 'PUE', 'TM2', 'GEA2', 'GRP1', 'SER1', 'SERVICIOS', '', '', 'MANDO', '', 'IVAN GOMEZ  MENDEZ ', '', 'JEFE DE SEGURIDAD E HIGIENE Y SERVICIOS GENERALES', '', ''),
(82, 'SI', 'PUE', 'TM2', 'GEA2', 'SER1', 'MTN', 'MANTENIMIENTO', '', '', '', '', 'J.JESUS AGUILAR  CABRERA ', '', 'AUXILIAR DE MANTENIMIENTO', '', ''),
(83, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'AZUCENA  VEGA  MELGAREJO ', '', 'ENFERMERA GENERAL ', '', ''),
(84, 'SI', 'PUE', 'TM2', 'GEA2', 'ARP1', 'ARP1', 'ADMISION Y RELACIONES PUBLICAS', '', '', '', '', 'ERNESTO ALONSO  CHOLULA  LOPEZ ', '', 'RECEPCION', '', ''),
(85, 'SI', 'PUE', 'TM2', '', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'MARTHA NANCY  HERNANDEZ  FLORES', '', 'ENFERMERA GENERAL ', '', ''),
(86, 'SI', 'PUE', 'TM2', '', '', '', 'CONTABILIDAD', '', '', '', '', 'ANA KAREN  FUENTES  GARCIA ', '', 'AUXILIAR CONTABLE', '', ''),
(87, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'TANIA JAQUELINE  RUIZ  SANCHEZ ', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(88, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'ANA ROSA  HERNÁNDEZ  ELIOSA ', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(89, 'SI', 'PUE', 'TM2', 'GEA2', 'SER1', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'MARIZA  GALICIA  GARCIA ', '', 'INTENDENTE ', '', ''),
(90, 'SI', 'PUE', 'TM2', 'GEA2', 'SER1', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'GABRIELA  VAZQUEZ  MORALES', '', 'INTENDENTE ', '', ''),
(91, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'BERTHA  GUERRA  GOMEZ ', '', 'ENFERMERA GENERAL ', '', ''),
(92, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'JOSE ALBERTO  CASTELLANOS LOPEZ ', '', 'ENFERMERA GENERAL ', '', ''),
(93, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'MARIA CRISTINA GONZALEZ ROJAS ', '', 'ENFERMERA GENERAL ', '', ''),
(94, 'SI', 'PUE', 'TM2', 'GEM1', 'GEM1', 'MED', 'MEDICINA', '', '', '', '', 'DIANA LAURA  MIGUEL  MARTINEZ ', '', 'MEDICO DE GUARDIA', '', ''),
(95, 'SI', 'PUE', 'TM2', 'GEM1', 'GEM1', 'FAR1', 'FARMACIA', '', '', '', '', 'ARTURO  VILLEGAS  ALVAREZ ', '', 'ALMACENISTA ', '', ''),
(96, 'SI', 'PUE', 'TM2', 'GEA2', 'SER3', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'ZURI SADAY PLATA  TORRES ', '', 'INTENDENTE ', '', ''),
(97, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'CECILIA SANCHEZ  CORTES', '', 'ENFERMERA GENERAL', '', ''),
(98, 'SI', 'PUE', 'TM2', '', 'GRP1', 'RH1', 'RECURSOS HUMANOS', '', '', 'MANDO', '', 'CINTHIA NOHEMI  RINCON  NAJERA ', '', 'JEFE DE RECURSOS HUMANOS ', '', ''),
(99, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'MELISSA LOPEZ  GOMEZ ', '', 'ENFERMERA GENERAL ', '', ''),
(100, 'SI', 'PUE', 'TM2', 'GEA2', 'SER3', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'MYRIAM  GARCIA  GONZALEZ ', '', 'INTENDENTE ', '', ''),
(101, 'SI', 'PUE', 'TM2', 'GEA2', 'SER3', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'NORMA ANGELICA  RIVERA  SANCHEZ ', '', 'INTENDENTE ', '', ''),
(102, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'ERIC  GALICIA  ARCE ', '', 'LICENCIADO EN ENFERMERIA ', '', ''),
(103, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'DEYANIRA  CABRERA  HERRERA ', '', 'LICENCIADO EN ENFERMERIA ', '', ''),
(104, 'SI', 'PUE', 'TM2', 'GEA2', 'SER3', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'GUADALUPE JACQUELINE  RAMIREZ  GARNICA ', '', 'INTENDENTE ', '', ''),
(105, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'JOSUE  MICHIMANI  CUAPA ', '', 'ENFERMERO GENERAL ', '', ''),
(106, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'IVONNE  MOLINA  VAZQUEZ ', '', 'ENFERMERA GENERAL ', '', ''),
(107, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'ESTELA  REYES  MARQUEZ ', '', 'ENFERMERA GENERAL ', '', ''),
(108, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'ABIGAIL  CONTRERAS  FLORES', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(109, 'SI', 'PUE', 'TM2', '', '', '', 'DISEÑO GRAFICO', '', '', '', '', 'ALAN ESTEBAN  PANTOJA  GIL ', '', 'DISEÑADOR GRAFICO ', '', ''),
(110, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'ALONDRA  REYES  BELLO ', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(111, 'SI', 'PUE', 'TM2', 'GEM1', 'FAR1', 'FAR1', 'FARMACIA', '', '', '', '', 'EUNICE  JARAMILLO  SALDAÑA ', '', 'FARMACOVIGILANCIA ', '', ''),
(112, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'MAYRA  ESCALANTE  MENDEZ ', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(113, 'SI', 'PUE', 'TM2', 'GEA2', 'SER3', 'LYR', 'LIMPIEZA Y ROPERIA', '', '', '', '', 'MARIA CONCEPCION  ROJANO  RAMIREZ ', '', 'INTENDENTE ', '', ''),
(114, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'CAMILLERO', '', '', '', '', 'GERSON NUÑEZ GINES ', '', 'CAMILLERO ', '', ''),
(115, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'POLET  ROJAS  OCAMPO', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(116, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'CAMILLERO', '', '', '', '', 'EDUARDO  CHAVEZ  GUTIERREZ ', '', 'CAMILLERO ', '', ''),
(117, 'SI', 'PUE', 'TM2', 'GEM1', 'GEM1', 'MED', 'MEDICINA', '', '', '', '', 'DAVID ALAN  SILVA  ALAVEZ ', '', 'MEDICO DE GUARDIA ', '', ''),
(118, 'SI', 'PUE', 'TM2', '', '', '', 'COMPRAS', '', '', '', '', 'VICTOR HUGO  SERRANO  HERNANDEZ ', '', 'AUXILIAR DE COMPRAS ', '', ''),
(119, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'ERICKA  DURAN  COVA ', '', 'LICENCIADA EN ENFERMERIA ', '', ''),
(120, 'SI', 'PUE', 'TM2', 'GEM1', 'ENF1', 'ENF1', 'ENFERMERIA', '', '', '', '', 'NANCY  PEREZ  CRUZ ', '', 'ENFERMERA GENERAL ', '', ''),
(121, 'SI', 'PUE', 'TM2', 'GEM1', 'FAR1', 'FAR1', 'FARMACIA', '', '', '', '', 'MARIO ALBERTO  GUTIERREZ  DOMINGUEZ ', '', 'AUXILIAR DE FARMACIA ', '', ''),
(122, 'SI', 'PUE', 'TM2', 'GEM1', 'FAR1', 'FAR1', 'FARMACIA', '', '', '', '', 'ARACELI  RODRIGUEZ  FLORES ', '', 'AUXILIAR DE FARMACIA ', '', ''),
(123, 'SI', 'PUE', 'TM2', '', 'RH1', 'RH1', 'RECURSOS HUMANOS', '', '', '', '', 'YADIRA  RAMIREZ  RAMIREZ ', '', 'AUXILIAR DE RECURSOS HUMANOS ', '', ''),
(124, 'SI', 'PUE', 'TM2', 'GEA2', 'GEM1', 'SEG', 'SEGURIDAD', '', '', '', '', 'EDGAR  MARTINEZ  CABRERA ', '', 'GUARDIA DE SEGURIDAD ', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
