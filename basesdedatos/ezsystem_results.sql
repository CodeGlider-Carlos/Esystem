-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-04-2025 a las 19:16:10
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
-- Base de datos: `ezsystem_results`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_arp`
--

DROP TABLE IF EXISTS `ezsystem_results_arp`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_arp` (
  `idindi` int NOT NULL AUTO_INCREMENT,
  `idobdirg` varchar(20) DEFAULT NULL,
  `idobj` varchar(10) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `yearini` varchar(4) DEFAULT NULL,
  `gerdir` varchar(8) DEFAULT NULL,
  `useresp` varchar(15) DEFAULT NULL,
  `tipoindi` varchar(35) DEFAULT NULL,
  `reg` varchar(35) DEFAULT NULL,
  `enfx1` varchar(60) DEFAULT NULL,
  `enfx2` varchar(60) DEFAULT NULL,
  `nombre` varchar(350) DEFAULT NULL,
  `meta` float DEFAULT NULL,
  `pond` float DEFAULT NULL,
  `unmed` varchar(25) DEFAULT NULL,
  `tipodat` varchar(20) DEFAULT NULL,
  `acumulado` float DEFAULT NULL,
  `promedio` float DEFAULT NULL,
  `cumple` float DEFAULT NULL,
  `resultado` float DEFAULT NULL,
  `m1` float DEFAULT NULL,
  `m2` float DEFAULT NULL,
  `m3` float DEFAULT NULL,
  `m4` float DEFAULT NULL,
  `m5` float DEFAULT NULL,
  `m6` float DEFAULT NULL,
  `m7` float DEFAULT NULL,
  `m8` float DEFAULT NULL,
  `m9` float DEFAULT NULL,
  `m10` float DEFAULT NULL,
  `m11` float DEFAULT NULL,
  `m12` float DEFAULT NULL,
  `obs1` varchar(350) DEFAULT NULL,
  `obs2` varchar(350) DEFAULT NULL,
  `obs3` varchar(350) DEFAULT NULL,
  `obs4` varchar(350) DEFAULT NULL,
  `obs5` varchar(350) DEFAULT NULL,
  `obs6` varchar(350) DEFAULT NULL,
  `obs7` varchar(350) DEFAULT NULL,
  `obs8` varchar(350) DEFAULT NULL,
  `obs9` varchar(350) DEFAULT NULL,
  `obs10` varchar(350) DEFAULT NULL,
  `obs11` varchar(350) DEFAULT NULL,
  `obs12` varchar(350) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `userbaja` varchar(15) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idindi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_cat_userindica`
--

DROP TABLE IF EXISTS `ezsystem_results_cat_userindica`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_cat_userindica` (
  `iduserindi` int NOT NULL AUTO_INCREMENT,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `tipouser` varchar(20) DEFAULT NULL,
  `pos` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`iduserindi`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_cat_userindica`
--

INSERT INTO `ezsystem_results_cat_userindica` (`iduserindi`, `region`, `unidad`, `rol`, `tipouser`, `pos`) VALUES
(1, 'JAL', 'ZR', 'ADMIN', 'dirgen', 'DIRECCION GENERAL CORPORATIVA'),
(2, 'JAL', 'ZR', 'ADMIN', 'geco', 'GERENCIA CORPORATIVA'),
(3, 'JAL', 'ZR', 'REGIONAL', 'ger', 'GERENCIA REGIONAL'),
(4, 'JAL', 'ZR', 'GERENCIA', 'gem', 'GERENCIA MEDICA'),
(5, 'JAL', 'ZR', 'GERENCIA', 'gea', 'GERENCIA ADMINISTRATIVA'),
(6, 'JAL', 'ZR', 'MANDO', 'ser', 'JEFATURA DE SERVICIOS'),
(7, 'JAL', 'ZR', 'MANDO', 'far', 'JEFATURA DE FARMACIA'),
(8, 'JAL', 'ZR', 'MANDO', 'enf', 'JEFATURA DE ENFERMERIA'),
(9, 'JAL', 'ZR', 'MANDO', 'arp', 'JEFATURA DE ADMISION Y RELACIONES PUBLICAS'),
(10, 'JAL', 'ZR', 'MANDO', 'rh', 'JEFE DE RECURSOS HUMANOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_enf`
--

DROP TABLE IF EXISTS `ezsystem_results_enf`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_enf` (
  `idindi` int NOT NULL AUTO_INCREMENT,
  `idobdirg` varchar(20) DEFAULT NULL,
  `idobj` varchar(10) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `yearini` varchar(4) DEFAULT NULL,
  `gerdir` varchar(8) DEFAULT NULL,
  `useresp` varchar(15) DEFAULT NULL,
  `tipoindi` varchar(35) DEFAULT NULL,
  `reg` varchar(35) DEFAULT NULL,
  `enfx1` varchar(60) DEFAULT NULL,
  `enfx2` varchar(60) DEFAULT NULL,
  `nombre` varchar(350) DEFAULT NULL,
  `meta` float DEFAULT NULL,
  `pond` float DEFAULT NULL,
  `unmed` varchar(25) DEFAULT NULL,
  `tipodat` varchar(20) DEFAULT NULL,
  `acumulado` float DEFAULT NULL,
  `promedio` float DEFAULT NULL,
  `cumple` float DEFAULT NULL,
  `resultado` float DEFAULT NULL,
  `m1` float DEFAULT NULL,
  `m2` float DEFAULT NULL,
  `m3` float DEFAULT NULL,
  `m4` float DEFAULT NULL,
  `m5` float DEFAULT NULL,
  `m6` float DEFAULT NULL,
  `m7` float DEFAULT NULL,
  `m8` float DEFAULT NULL,
  `m9` float DEFAULT NULL,
  `m10` float DEFAULT NULL,
  `m11` float DEFAULT NULL,
  `m12` float DEFAULT NULL,
  `obs1` varchar(350) DEFAULT NULL,
  `obs2` varchar(350) DEFAULT NULL,
  `obs3` varchar(350) DEFAULT NULL,
  `obs4` varchar(350) DEFAULT NULL,
  `obs5` varchar(350) DEFAULT NULL,
  `obs6` varchar(350) DEFAULT NULL,
  `obs7` varchar(350) DEFAULT NULL,
  `obs8` varchar(350) DEFAULT NULL,
  `obs9` varchar(350) DEFAULT NULL,
  `obs10` varchar(350) DEFAULT NULL,
  `obs11` varchar(350) DEFAULT NULL,
  `obs12` varchar(350) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `userbaja` varchar(15) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idindi`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_enf`
--

INSERT INTO `ezsystem_results_enf` (`idindi`, `idobdirg`, `idobj`, `region`, `unidad`, `yearini`, `gerdir`, `useresp`, `tipoindi`, `reg`, `enfx1`, `enfx2`, `nombre`, `meta`, `pond`, `unmed`, `tipodat`, `acumulado`, `promedio`, `cumple`, `resultado`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `obs1`, `obs2`, `obs3`, `obs4`, `obs5`, `obs6`, `obs7`, `obs8`, `obs9`, `obs10`, `obs11`, `obs12`, `fechalta`, `useralta`, `vigencia`, `fechabaja`, `userbaja`, `activo`) VALUES
(1, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'SATISFACCION SOPORTE PACIENTE', 'MANUAL', '', '', 'PACIENTE SATISFECHO POR LA ATENCION PRESTADA', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(2, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', NULL, 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 15, 'PORCENTAJE', '', 200, 100, 111.111, 16.6667, NULL, NULL, NULL, NULL, 100, NULL, 100, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(3, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'TAREAS', 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS EN TIEMPO Y FORMA', 90, 30, 'PORCENTAJE', '', 275, 91.6667, 83.3333, 25, NULL, NULL, NULL, NULL, 100, NULL, 100, 75, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(4, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'PCI', 'MACRO', 'PCI', '', 'APEGO AL MODELO OPERATIVO DE PREVENCION Y CONTROL DE INFECCIONES', 90, 3, 'PORCENTAJE', '', 295.83, 98.61, 111.111, 3.33333, NULL, NULL, NULL, NULL, 100, NULL, 95.83, 100, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(5, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'MMU', 'MACRO', 'MMU', '', 'APEGO AL MODELO OPERATIVO DE FARMACIA HOSPITALARIA', 90, 3, 'PORCENTAJE', '', 200, 100, 0, 0, NULL, NULL, NULL, NULL, 100, NULL, 100, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(6, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'MISP', 'MACRO', 'MISP', '', 'APEGO AL MODELO OPERATIVO DE PARA CUMPLIR CON LAS METAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE', 90, 23, 'PORCENTAJE', '', 186.19, 93.095, 104.311, 23.9916, NULL, NULL, NULL, NULL, 92.31, NULL, 93.88, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(7, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'PFE', 'MACRO', 'PFE', '', 'APEGO AL MODELO OPERATIVO DE EDUCACION AL PACIENTE, SU FAMILIA Y VISITANTES', 90, 3, 'PORCENTAJE', '', 175, 87.5, 111.111, 3.33333, NULL, NULL, NULL, NULL, 75, NULL, 100, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(8, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'ACC', 'MACRO', 'ACC', '', 'APEGO AL MODELO OPERATIVO DE ACCESO Y CONTINUIDAD DE LA ATENCION', 90, 3, 'PORCENTAJE', '', 100, 100, 111.111, 3.33333, NULL, NULL, NULL, NULL, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(9, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'AOP', 'MACRO', 'AOP', '', 'APEGO AL MODELO OPERATIVO DE EVALUACION DE PACIENTES', 90, 3, 'PORCENTAJE', '', 200, 100, 111.111, 3.33333, NULL, NULL, NULL, NULL, 100, NULL, 100, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(10, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'SQD', 'MACRO', 'SQD', '', 'APEGO AL MODELO OPERATIVO DE SERVICIOS AUXILIARES DE DIAGNOSTICO', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(11, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'COP', 'MACRO', 'COP', '', 'APEGO AL MODELO OPERATIVO DE ATENCION A PACIENTES', 90, 3, 'PORCENTAJE', '', 200, 100, 111.111, 3.33333, NULL, NULL, NULL, NULL, 100, NULL, 100, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(12, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'ASC', 'MACRO', 'ASC', '', 'APEGO AL MODELO OPERATIVO DE ATENCION QUIRURGICA Y ANTESTESICA', 90, 3, 'PORCENTAJE', '', 200, 100, 111.111, 3.33333, NULL, NULL, NULL, NULL, 100, NULL, 100, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(13, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'EXPCLI', 'MACRO', 'EXPCLI', '', 'APEGO AL MODELO OPERATIVO DE EXPEDIENTE CLINICO', 90, 3, 'PORCENTAJE', '', 195.12, 97.56, 111.111, 3.33333, NULL, NULL, NULL, NULL, 95.12, NULL, 100, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(14, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 3, 'PORCENTAJE', '', 200, 100, 111.111, 3.33333, NULL, NULL, NULL, NULL, 100, NULL, 100, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_estados`
--

DROP TABLE IF EXISTS `ezsystem_results_estados`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_estados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `yearall` varchar(4) DEFAULT NULL,
  `yearco` varchar(2) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  `tipodato` varchar(20) DEFAULT NULL,
  `orden` float DEFAULT NULL,
  `concepto` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `catcomment` varchar(20) DEFAULT NULL,
  `comment1` varchar(1000) DEFAULT NULL,
  `comment2` varchar(1000) DEFAULT NULL,
  `comment3` varchar(1000) DEFAULT NULL,
  `comment4` varchar(1000) DEFAULT NULL,
  `comment5` varchar(1000) DEFAULT NULL,
  `comment6` varchar(1000) DEFAULT NULL,
  `comment7` varchar(1000) DEFAULT NULL,
  `comment8` varchar(1000) DEFAULT NULL,
  `comment9` varchar(1000) DEFAULT NULL,
  `comment10` varchar(1000) DEFAULT NULL,
  `comment11` varchar(1000) DEFAULT NULL,
  `comment12` varchar(1000) DEFAULT NULL,
  `meta` float DEFAULT NULL,
  `ponde` float DEFAULT NULL,
  `unmed` varchar(25) DEFAULT NULL,
  `acumulado` float DEFAULT NULL,
  `cumple` float DEFAULT NULL,
  `resultado` float DEFAULT NULL,
  `m1` float DEFAULT NULL,
  `m2` float DEFAULT NULL,
  `m3` float DEFAULT NULL,
  `m4` float DEFAULT NULL,
  `m5` float DEFAULT NULL,
  `m6` float DEFAULT NULL,
  `m7` float DEFAULT NULL,
  `m8` float DEFAULT NULL,
  `m9` float DEFAULT NULL,
  `m10` float DEFAULT NULL,
  `m11` float DEFAULT NULL,
  `m12` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_estados`
--

INSERT INTO `ezsystem_results_estados` (`id`, `region`, `unidad`, `yearall`, `yearco`, `activo`, `tipodato`, `orden`, `concepto`, `catcomment`, `comment1`, `comment2`, `comment3`, `comment4`, `comment5`, `comment6`, `comment7`, `comment8`, `comment9`, `comment10`, `comment11`, `comment12`, `meta`, `ponde`, `unmed`, `acumulado`, `cumple`, `resultado`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`) VALUES
(1, 'JAL', 'ZR', '2024', '24', 'SI', 'VENTAS', 1, 'Cirugia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19 cirugias \nSOCIOS 6\nPARTICULARES 13\n\nANESTESIA GENERAL 8\nANESTESIA REGIONAL 9\nSEDACION  2\n\nNO AMBULATORIAS 17\nAMBULATORIAS 2', '21 CIRUGIAS  , 5 AMBULATORIAS , 16 NO AMBULATORIAS ', NULL, NULL, NULL, NULL, NULL, 'MONEDA', 2648210, NULL, NULL, 80193.2, 128332, 323714, 253355, 211332, 178171, 410363, 514266, 548488, NULL, NULL, NULL),
(2, 'JAL', 'ZR', '2024', '24', 'SI', 'VENTAS', 2, 'Consultas', NULL, '', '', '', '', '', '', '', 'NULL27  CONSULTAS \nPX401\nPX405\nPX408\nPX416\nPX415\nPX418\nPX422\nPX427\nPX428\nPX435\nPX436\nPX437\nPX 439\nPX443\nPX 449\nPX453\nPX457\nPX458\nPX459\nPX460\nPX461\nPX462\nPX463\nPX467\nPX471\nPX472\nPX474', 'CONSULTAS GENERALES  Y CONSULTAS + INSU 39 ', '', '', '', NULL, NULL, 'MONEDA', 111585, NULL, 0, 7793.06, 6816.33, 11207.8, 13363.7, 16424.9, 24417.7, 5940.7, 10802.9, 14817.5, NULL, NULL, NULL),
(3, 'JAL', 'ZR', '2024', '24', 'SI', 'VENTAS', 3, 'Laboratorios', NULL, '', '', '', '', '', '', '', 'ESTUDIOS DE LABORATORIO \n$2,427.37\n395\n421\n429\n454\n455\n448\n451\n470\n\nIMAGENOLOGIA \n$1,040.00\n454\n455', 'PROCEDIMIENTOS MEDICOS  + TRATAMIENTOS MEDICOS ', '', '', '', NULL, NULL, 'MONEDA', 6579.37, NULL, 0, 0, 0, 0, 0, 640, 0, 0, 3467.37, 2472, NULL, NULL, NULL),
(4, 'JAL', 'ZR', '2024', '24', 'SI', 'VENTAS', 4, 'Farmacia', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(5, 'JAL', 'ZR', '2024', '24', 'SI', 'VENTAS', 5, 'Otros', NULL, '', '', '', '', '', '', '', 'PX399  $3,152.14\nPX403\nPX409\nPX410\nPX411\nPX412\nPX413\nPX424\nPX425\nPX433\n\n TRATAMIENTO MEDICO \n3   $4,258.82\nPX426\nPX406\nPX432\nCONSULTORIO  \n$630\nPX C001\n\nCONSUMO CAFETERIA  $294\nA041,A043,A044,A045,A046', '', '', '', '', NULL, NULL, 'MONEDA', 41195.7, NULL, 0, 0, 0, 5459.11, 1379.36, 3642.22, 443.97, 10266.8, 8334.96, 11669.3, NULL, NULL, NULL),
(6, 'JAL', 'ZR', '2024', '24', 'SI', 'VENTAS', 0, 'TOTAL VENTAS', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 2807570, NULL, 0, 87986.3, 135148, 340381, 268098, 232039, 203032, 426571, 536871, 577447, NULL, NULL, NULL),
(7, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 1, 'Medicamentos', 'p', '', '', '', '', '', '', '', 'FACTURAS \nANESTESICOS DE JALISCO\n3897\n3896\n3906\n3907\n3920\n3913\n3917\n3919\n3916\n3933\n3935\n3947\n3954\n3953\n3952\n3956\n3967\n\nFARMACIAS DEL AHORRO \n76261\n1485\n\nSOLUCOM S.A. DE C.V.\n2978\n2979\n\nPHARMA PLUS\n1770\n1767\n1768\n1766\n1778\n1774\n1796\n1810\n1814\n1833\n1832\n1831\n1830\n\nFARMANEST\n15673\n', '', '', '', '', NULL, NULL, 'MONEDA', 197944, NULL, 0, 24440, 5439, 11306.3, 21761.7, 11888.6, 4043, 37295.7, 59274.9, 22494.7, NULL, NULL, NULL),
(8, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 2, 'Insumos y Material de Curacion', 'p', '', '', '', '', '', '', '', 'FACTURAS DE PROMEDICA GARCIA \n387755\n387967\n388099\n388398\n388588\n388885\n388218\n388219\n388843\n389402\n389530\n389945\n390986\n390983\n390467\n\n\nMICHAEL ROJAS \nFAC0000000095\nFAC0000000096\nFAC0000000097\nFAC0000000102\nFAC0000000105\nFAC0000000109\n\n GDL MEDICA\n21259\n21342\n21342\n21167\n21472\n21528\n21619\n\nMARIA DEL SOCORRO GOMEZ\nFE-9107\nFE-9215\nFE9264\n\nWALMART\n333451\n333453\n333854\n334003\n\nFARMACIAS DEL AHORRO\n193166\n27751\nSALUCOM S.A DE C.V.\n2993\n2991\n\nCOMERCIALIZADORA DE BOLSAS \n22431\n\nMARCO VINICIO MERCADO HERNANDEZ\nFV-MP-8443', '', '', '', '', NULL, NULL, 'MONEDA', 595548, NULL, 0, 198359, 16050.6, 55665.6, 36020.2, 46306.1, 17590.1, 62538.4, 109650, 53368.2, NULL, NULL, NULL),
(9, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 3, 'Anestesia y Sedacion', 'c', '', '', '', '', '', '', '', 'ANESTESIA GENERAL 8 X 3,745 =29,960.00\n\nANESTESIA REEGIONAL 9 X 2,996.00 = 26,964.00\n\nSEDACION 2 X 945 = 1,890.00\n\nTOTAL =  $ 58,814.00 AL DIA 01-09-2024 ESTO CONFORME A CONSUMO\n\n\n\n137,816.00 POR 40  QUE CORRESPONDEN A CONTRATO\n\nANESTESIA REEGIONAL 9 X 2,996.00 = 26,964.00\n\nSEDACION 2 X 945 = 1,890.00\n\nTOTAL =  $ 58,814.00 AL DIA 01-09-2024 ESTO CONFORME A CONSUMO\n\n\n\n\n137,816.00 POR 40  QUE CORRESPONDEN A CONTRATO', '8 anestesias generales    a 3745.00 total 29,960.00\r\n\r\n13 anestesias regionales   a 2996.00   total 38,948.00\r\n\r\ntotal de consumo al día  30-09-2024 68,908.00\r\nTOTAL CIRUGIAS 21 \r\n\r\n\r\nmes de septiembre corresponden 50 de acuerdo a contrato  \r\n60 % generales  seria 30 cirugias \r\n40% regionales serian 20 cirugias \r\n\r\n30 GENERALES  X 3,745.00 = 112,350.00\r\n20  REGIONALES  X 2,996.00 = 59,920.00\r\nTOTAL GENERAL 172,270.00', '', '', '', NULL, NULL, 'MONEDA', 487768, NULL, 0, 0, 0, 137816, 0, 79414.6, 104616, 38199, 58814, 68908, NULL, NULL, NULL),
(10, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 4, 'Esterilizacion de Instrumental Medico', 'c', '', '', '', '', '', '', '', 'NO SE CUENTA CON FACTURA SE CALCULA POR SERVICIOS PERO SE CALCULA POR NUMERO DE SERVICIOS', 'FUERON 51.50 CARGAS X 900 = 46,350.00', '', '', '', NULL, NULL, 'MONEDA', 242300, NULL, 0, 0, 0, 19500, 0, 73800, 24750, 36900, 41000, 46350, NULL, NULL, NULL),
(11, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 5, 'Estudios de Laboratorio', 'c', '', '', '', '', '', '', '', NULL, '$2,246.4 ESTAN COBRADOS EN EL ESTADO DE CUENTA DEL PACIENTE  ', '', '', '', NULL, NULL, 'MONEDA', 13517.2, NULL, 0, 0, 120.69, 0, 4232.76, 1758.62, 1120.69, 2931.03, 3353.44, NULL, NULL, NULL, NULL),
(12, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 6, 'Estudios de Patologia', 'c', '', '', '', '', '', '', '', NULL, 'SE COBRAN  DIRECTO AL PACIENTE NO SE CARGA EN LA CUENTA ', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(13, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 7, 'Estudios de Imagenologia', 'c', '', '', '', '', '', '', '', NULL, '$4,160 ESTAN COBRADOS EN EL ESTADO DE CUENTA DEL PACIENTE  ELECTROCARDIOGRAMA ', '', '', '', NULL, NULL, 'MONEDA', 2068.96, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 2068.96, NULL, NULL, NULL, NULL),
(14, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 8, 'Kit de Bienvenida para Pacientes', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 6674.94, NULL, 0, 741.66, 741.66, 741.66, 741.66, 741.66, 741.66, 741.66, 741.66, 741.66, NULL, NULL, NULL),
(15, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 9, 'Renta de Equipo e Instrumental Quirurgico', 'c', '', '', '', '', '', '', '', 'REMISION 10825 RENTA EQUIPO DE LAPAROSCOPIA \r\nDE VILLAFA, CONTABILIDAD REPORTE $52,000 ADICIONALES PERO CORRESPONDEN A EQUIPO DE JULIO, CIRUGIA POR REEMBOLSO', ' Renta de torre y equipo para laparoscopia ESTO SE COBRA APARTE NO SE CARGA EN LA CUENTA ', '', '', '', NULL, NULL, 'MONEDA', 89400, NULL, 0, 0, 0, 11000, 4800, 8000, 0, 56000, 9600, NULL, NULL, NULL, NULL),
(16, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 10, 'Renta de Equipo Medico', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(17, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 11, 'Lavado de Ropa Quirurgica', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(18, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 12, 'Lavado de Ropa Hospitalaria', NULL, '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'MONEDA', 116779, NULL, 0, 8751.51, 3802.01, 9576.15, 22847.7, 12597.4, 13282.5, 13609.1, 20171.7, 12140.9, NULL, NULL, NULL),
(19, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 13, 'Alimentos de Paciente', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(20, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 14, 'Servicios de Cafeteria ', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(21, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 15, 'Servicios de Banco de Sangre', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(22, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 16, 'Servicio de ambulancia', 'c', '', '', '', '', '', '', '', NULL, 'UN SERVICIO PERO SE COBRO DIRECTO AL FAMILIAR TRASLADO  ATONONILCO EL GRANDE  PAGO 5,500 PESOS  CON MEDICAL STATION ', '', '', '', NULL, NULL, 'MONEDA', 1322.04, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1322.04, NULL, NULL, NULL, NULL),
(23, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 17, 'Servicio de RPBI', 'c', '', '', '', '', '', '', '', 'MEDAM S DE RL DE CV \nMFP000211240', 'COBRO MENSUAL DE ACUERDO A CONTRATO ', '', '', '', NULL, NULL, 'MONEDA', 15925, NULL, 0, 1590, 1590, 1615, 1590, 1590, 1590, 3180, 1590, 1590, NULL, NULL, NULL),
(24, 'JAL', 'ZR', '2024', '24', 'SI', 'COSTO', 18, 'TOTAL COSTOS', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 1770170, NULL, 0, 233883, 27743.9, 247221, 91994, 236097, 167734, 251395, 307169, 206929, NULL, NULL, NULL),
(25, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 0, 'Descuentos a empleados', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(26, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 1, 'Sueldos y Salarios', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 3674820, NULL, 0, 412374, 442336, 412716, 398389, 411599, 400334, 392181, 402445, 402445, NULL, NULL, NULL),
(27, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 2, 'Cuotas Obrero Patronales IMSS, RCV e INFONAVIT', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 753606, NULL, 0, 40816.7, 102183, 42934.7, 144405, 41712.7, 144313, 39084.3, 155157, 43000, NULL, NULL, NULL),
(28, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 3, 'Impuesto Sobre Nominas', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 81668.6, NULL, 0, 10171, 10500, 8858.39, 8718.28, 8465.98, 8853, 9000, 8102, 9000, NULL, NULL, NULL),
(29, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 4, 'RTP', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 16984.8, NULL, 0, 0, 0, 185, 917, 603.79, 313.99, 350, 615, 14000, NULL, NULL, NULL),
(30, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 5, 'Impuestos Federales', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 87811.6, NULL, 0, 0, 0, 19847.6, 12245, 13923, 13596, 13800, 14000, 400, NULL, NULL, NULL),
(31, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 6, 'Honorarios PM - Servicios Contables', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 7500, NULL, 0, 7500, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(32, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 7, 'Honorarios Medicos', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 33060.4, NULL, 0, 0, 33060.4, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(33, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 8, 'Honorarios No Medicos', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 14713.3, NULL, 0, 0, 0, 0, 14713.3, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(34, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 9, 'Comisiones a Socios por Cirugias', 'p', '', '', '', '', '', '', '', 'FONSECA POR 4 Y A MORENO POR 2 CONTANDO LA DE DIAZ', '', '', '', '', NULL, NULL, 'MONEDA', 148937, NULL, 0, 9829.93, 20162.3, 11372.7, 24102.1, 16686, 16905.9, 14861.6, 12862.7, 22154.2, NULL, NULL, NULL),
(35, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 10, 'Ropa hospitalaria', 'c', '', '', '', '', '', '', '', NULL, 'COMENTARIO PRUEBA', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(36, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 11, 'Garrafones y Botellas de Agua para consumo de personal', 'c', '', '', '', '', '', '', '', NULL, 'SE PAGO DE CAJA CHICA', '', '', '', NULL, NULL, 'MONEDA', 11986.5, NULL, 0, 1000, 1390.52, 1400, 1352, 2631.93, 1248, 1092, 1040, 832, NULL, NULL, NULL),
(37, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 12, 'Renta de inmuebles', 'c', '', '', '', '', '', '', '', 'NO SE PAGA RENTA DE $230,700 EN ESTE MOMENTO', 'NO SE PAGA RENTA DE $230,700 EN ESTE MOMENTO', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(38, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 13, 'Viaticos', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 20696.2, NULL, 0, 13161.8, 1474.14, 0, 0, 0, 0, 0, 6060.35, NULL, NULL, NULL, NULL),
(39, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 14, 'Capacitacion', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(40, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 15, 'Equipo de TI', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(41, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 16, 'Equipo y mobiliario no Medico', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(42, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 17, 'Equipo, monbiliario e instrumental medico', 'c', '', '', '', '', '', '', '', NULL, 'SE COMPRARON PINZAS', '', '', '', NULL, NULL, 'MONEDA', 15733.2, NULL, 0, 0, 0, 0, 0, 14181.5, 0, 0, 0, 1551.72, NULL, NULL, NULL),
(43, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 18, 'Productos e Insumos de Limpieza', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 216590, NULL, 0, 45333.2, 40183.7, 40441.7, 40808.8, 9741.95, 8427.04, 9951.81, 8918.73, 12783.2, NULL, NULL, NULL),
(44, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 19, 'Mantenimiento de Instalaciones', 'c', '', '', '', '', '', '', '', 'limpieza de cisterna, pilas, conectors, pavc, cemento, mantenimiento extintor, reparaciones', 'SE PAGO LO DE LA REPARACION DE LAS LUCES DE QUIROFANOS 1 Y 2 ', '', '', '', NULL, NULL, 'MONEDA', 69747, NULL, 0, 15431.9, 21098.6, 340.53, 0, 323.76, 0, 13572, 12609.2, 6370.97, NULL, NULL, NULL),
(45, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 20, 'Mantenimiento de Equipo Medico', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 2835, NULL, 0, 0, 0, 2835, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(46, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 21, 'Mantenimiento de Equipo No medico', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 17983, NULL, 0, 0, 0, 0, 0, 17983, 0, 0, 0, NULL, NULL, NULL, NULL),
(47, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 22, 'Marketing', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 47342.9, NULL, 0, 7750, 26614.1, 12850, 128.79, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(48, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 23, 'Comisiones', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(49, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 24, 'Insumos para uso del personal', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(50, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 25, 'Gases Medicinales', 'c', '', '', '', '', '', '', '', 'HAY DOS FACTURAS PRAXAIR\nAL MENOS SON UNA FACTURA DE $9,000 Y UNA DE $2,000\nFZ6051823\nFZ6075225\n\nPERO SER CALCULARA ESTIMADA POR CIRUGIAS YA QUE NO SE ENVIAN FACTURAS A TIEMPO', 'LA FACTURA LLEGA EN OCTUBRE, SIN DATOS ESTIMADOS POR CONTABILIDAD', '', '', '', NULL, NULL, 'MONEDA', 95091.9, NULL, 0, 18100, 2000, 24919.5, 10600, 10600, 10600, 13662.6, 13209.8, NULL, NULL, NULL, NULL),
(51, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 26, 'Agua', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 1651, NULL, 0, 0, 0, 0, 0, 0, 0, 344, 963, 344, NULL, NULL, NULL),
(52, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 27, 'Luz', 'c', '', '', '', '', '', '', '', 'COMBUSTIBLES PALMA REAL \n64529  DISEL P/ PLANTA DE LUZ\n\nCFE \n30-06-24 A 31-07-24', '', '', '', '', NULL, NULL, 'MONEDA', 616526, NULL, 0, 42154.3, 51731.5, 49899, 63029.1, 79685.1, 86271, 84938, 79913.4, 78904.5, NULL, NULL, NULL),
(53, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 28, 'Servicios-Gas ', 'c', '', '', '', '', '', '', '', NULL, 'SE CARGO DOS VECES ESTE MES 350 LITROS EN CADA CARGA ', '', '', '', NULL, NULL, 'MONEDA', 27843.1, NULL, 0, 2053.88, 2312.5, 2140.09, 2140.09, 2627.59, 2645.69, 2769.83, 4925.86, 6227.58, NULL, NULL, NULL),
(54, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 29, 'Telefonia e internet', 'c', '', '', '', '', '', '', '', NULL, 'TELEFONIA CELULAR , TELMEX , SERVICIO DE TV', '', '', '', NULL, NULL, 'MONEDA', 85164, NULL, 0, 8152.02, 12580.5, 10424.5, 8617.84, 8617.84, 8617.84, 8617.84, 8617.84, 10917.8, NULL, NULL, NULL),
(55, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 30, 'Servicio Privado de Transporte', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 650, NULL, 0, 0, 0, 300, 0, 350, 0, 0, 0, NULL, NULL, NULL, NULL),
(56, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 31, 'Sanitizacion de Instalaciones', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 4449.9, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4449.9, NULL, NULL, NULL),
(57, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 32, 'Fumigacion', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 35599.2, NULL, 0, 4449.9, 4449.9, 4449.9, 4449.9, 4449.9, 4449.9, 4449.9, 4449.9, NULL, NULL, NULL, NULL),
(58, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 33, 'Renta de Equipos de Oficina', 'c', '', '', '', '', '', '', '', NULL, 'IMPRESORA', '', '', '', NULL, NULL, 'MONEDA', 34200, NULL, 0, 3800, 3800, 3800, 3800, 3800, 3800, 3800, 3800, 3800, NULL, NULL, NULL),
(59, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 34, 'Papeler', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 26731.5, NULL, 0, 7881.09, 2871.92, 5720.88, 85.35, 6541.39, 213.79, 420.54, 2996.52, NULL, NULL, NULL, NULL),
(60, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 35, 'Material e insumos de cafeteria', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 55028.9, NULL, 0, 9001.67, 2455.99, 5077.69, 7903.32, 3908.42, 6265.84, 7744.58, 7799.72, 4871.66, NULL, NULL, NULL),
(61, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 36, 'Material y equipo para el tratamiento y suministro de agua', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 16711, NULL, 0, 0, 0, 0, 0, 0, 16711, 0, 0, NULL, NULL, NULL, NULL),
(62, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 37, 'Sistema Nomina', 'c', '', '', '', '', '', '', '', NULL, 'lo de la nube se clasifico en esta cuenta ', '', '', '', NULL, NULL, 'MONEDA', 50288, NULL, 0, 10500, 10500, 10500, 3000, 3000, 3000, 3500, 3000, 3288, NULL, NULL, NULL),
(63, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 38, 'Sistema SAP', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 171091, NULL, 0, 21430, 17574.8, 17574.8, 17574.8, 17574.8, 17574.8, 20595.8, 20595.8, 20595.8, NULL, NULL, NULL),
(64, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 39, 'Sistema POS', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 18666, NULL, 0, 0, 3021, 3021, 3021, 3021, 3021, 3021, 3021, NULL, NULL, NULL, NULL),
(65, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 40, 'Sistema Vertical', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 9671.4, NULL, 0, 540, 540, 540, 540, 540, 540, 540, 540, NULL, NULL, NULL, NULL),
(66, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 41, 'Software', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 15000, NULL, 0, 0, 0, 2300, 2300, 2300, 2300, 2300, 2300, NULL, NULL, NULL, NULL),
(67, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 42, 'Comisiones Bancarias', 'c', '', '', '', '', '', '', '', 'CENTAURUS\n81\n93\n95', '', '', '', '', NULL, NULL, 'MONEDA', 23374.1, NULL, 0, 699, 699, 6942.34, 3679.79, 2545.61, 2303.75, 6504.57, 4488.2, NULL, NULL, NULL, NULL),
(68, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 43, 'Otros', 'c', '', '', '', '', '', '', '', NULL, 'SIN FACTURA, PAGO A TECNICO FLUROSCOPISTA, FRUTA Y CARNE', '', '', '', NULL, NULL, 'MONEDA', 32338.9, NULL, 0, 4547.1, 2300, 196.55, 431.04, 862.07, 12032.9, 3500, 3017.24, 5452, NULL, NULL, NULL),
(69, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 44, 'Renta de Consultorios', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(70, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 45, 'No deducibles', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 5343.07, NULL, 0, 0, 0, 0, 0, 0, 0, 5343.07, 5755.92, NULL, NULL, NULL, NULL),
(71, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 46, 'Servicio de cafeteria - medicos', 'c', '', '', '', '', '', '', '', 'SE HABLARA CON CONTADOR PARA CAMBIAR A CUENTA DE COSTOS PORQUE SE COBRA DENTRO DEL SERVICIO Y SE SUMARA EL ESTACIONAMIENTO DE LOS MEDICOS TAMBIEN\n\nRAFAEL SERRANO   (ECOPAN)\nT753\nT761\nT126\nT218\nT174\nT309\nT274\nT427\nT387\nT573\n\nLOS ARBOLITOS \nA2286', '+$3,362.07 COFICO\r\nMEDICOS $3,452.31', '', '', '', NULL, NULL, 'MONEDA', 39094.3, NULL, 0, 0, 18840.5, 0, 0, 740.5, 0, 4720.38, 7978.51, 6814.38, NULL, NULL, NULL),
(72, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 47, 'Servicio de cafeteria - otros', 'c', '', '', '', '', '', '', '', NULL, 'COMIDA PARA PACIENTES (WALMART Y CARNES FRIAS)', '', '', '', NULL, NULL, 'MONEDA', 4871.66, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4871.66, NULL, NULL, NULL),
(73, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 48, 'Seguros', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 131362, NULL, 0, 14595.8, 14595.8, 14595.8, 14595.8, 14595.8, 14595.8, 14595.8, 14595.8, 14595.8, NULL, NULL, NULL),
(74, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 49, 'Servicios-supervision y Soporte de Camaras', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(75, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 50, 'Comisiones sobre ventas', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 45420.9, NULL, 0, 43103.4, 0, 0, 0, 0, 0, 0, 0, 2317.45, NULL, NULL, NULL),
(76, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 51, 'Servicios Administrativos', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', 177514, NULL, 0, 0, 177514, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(77, 'JAL', 'ZR', '2024', '24', 'SI', 'GASTO', 52, 'TOTAL GASTO', 'c', '', '', '', '', '', '', '', 'EL GASTO AUMENTO SOLO POR QUE AUMENTATON LAS CUOTAS PATRONALES DE IMSS, INFONAVIT, ETC.', '', '', '', '', NULL, NULL, 'MONEDA', 6959070, NULL, 0, 754377, 1026790, 716183, 791548, 703612, 788934, 685261, 813779, 678588, NULL, NULL, NULL),
(78, 'JAL', 'ZR', '2024', '24', 'SI', 'UTILIDAD', 0, 'UTILIDAD', NULL, '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 'MONEDA', -5861890, NULL, 0, -980291, -1002100, -516544, -689022, -605466, -666237, -510085, -584077, -308070, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_estrategia`
--

DROP TABLE IF EXISTS `ezsystem_results_estrategia`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_estrategia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(30) DEFAULT NULL,
  `unidad` varchar(30) DEFAULT NULL,
  `yearco` varchar(2) DEFAULT NULL,
  `mes` varchar(2) DEFAULT NULL,
  `estrategia` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `obs` varchar(500) DEFAULT NULL,
  `useralta` varchar(20) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `activo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_estrategia`
--

INSERT INTO `ezsystem_results_estrategia` (`id`, `region`, `unidad`, `yearco`, `mes`, `estrategia`, `obs`, `useralta`, `fechalta`, `activo`) VALUES
(1, 'JAL', 'ZR', '24', '08', 'PRUEBA ESTRATEGIA DOS', 'OBS UNO', 'XION', '2024-09-16', '1'),
(2, 'JAL', 'ZR', '24', '08', 'Abrir Unidad de Terapia Intermedia para Grupo de NEURO y de CX Cardiotorácica', NULL, NULL, NULL, '1'),
(3, 'JAL', 'ZR', '24', '08', 'Iniciar Campaña/PAQUETES TODO INCLUÍDO para Pacientes', NULL, NULL, NULL, '1'),
(4, 'JAL', 'ZR', '24', '08', 'Concretar acuerdos con nuevos núcleos médicos', NULL, NULL, NULL, '1'),
(5, 'JAL', 'ZR', '24', '08', 'Gestionar publicidad en torneo de golf', NULL, NULL, NULL, '1'),
(6, 'JAL', 'ZR', '24', '08', 'Iniciar captación de médicos por nuevo broker externo', NULL, NULL, NULL, '1'),
(7, 'JAL', 'ZR', '24', '08', 'Gestionar inicio de productividad con pacientes de Banorte', NULL, NULL, NULL, '1'),
(8, 'JAL', 'ZR', '24', '08', 'Continuar trámite de GNP y preparar propuesta solicitada de ortopedia', NULL, NULL, NULL, '1'),
(9, 'JAL', 'ZR', '24', '08', 'Dar seguimiento a campaña de redes sociales para posicionamiento de marca', NULL, NULL, NULL, '1'),
(10, 'JAL', 'ZR', '24', '09', 'PROMOCION PAQUETES QUIRUGICOS REDES SOCIALES ', '', 'XION', '2024-10-07', '1'),
(11, 'JAL', 'ZR', '24', '09', 'CAMPAÑA PAQUETES MASTECTOMIA, DR, JAIME CORONA', '', 'XION', '2024-10-07', '1'),
(12, 'JAL', 'ZR', '24', '09', 'REUNION CON CON CENTE PARA BUSCAR ACUERDO PARTICULAR', '', 'XION', '2024-10-07', '1'),
(13, 'JAL', 'ZR', '24', '09', 'SEGUIR EN BUSQUEDA NUCLEOS MEDICOS', '', 'XION', '2024-10-07', '1'),
(14, 'JAL', 'ZR', '24', '09', 'CAMPAÑA DE VOLANTEO DE PROCEDIMIENTOS QUIRURGICOS', '', 'XION', '2024-10-07', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_far`
--

DROP TABLE IF EXISTS `ezsystem_results_far`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_far` (
  `idindi` int NOT NULL AUTO_INCREMENT,
  `idobdirg` varchar(20) DEFAULT NULL,
  `idobj` varchar(10) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `yearini` varchar(4) DEFAULT NULL,
  `gerdir` varchar(8) DEFAULT NULL,
  `useresp` varchar(15) DEFAULT NULL,
  `tipoindi` varchar(35) DEFAULT NULL,
  `reg` varchar(35) DEFAULT NULL,
  `enfx1` varchar(60) DEFAULT NULL,
  `enfx2` varchar(60) DEFAULT NULL,
  `nombre` varchar(350) DEFAULT NULL,
  `meta` float DEFAULT NULL,
  `pond` float DEFAULT NULL,
  `unmed` varchar(25) DEFAULT NULL,
  `tipodat` varchar(20) DEFAULT NULL,
  `acumulado` float DEFAULT NULL,
  `promedio` float DEFAULT NULL,
  `cumple` float DEFAULT NULL,
  `resultado` float DEFAULT NULL,
  `m1` float DEFAULT NULL,
  `m2` float DEFAULT NULL,
  `m3` float DEFAULT NULL,
  `m4` float DEFAULT NULL,
  `m5` float DEFAULT NULL,
  `m6` float DEFAULT NULL,
  `m7` float DEFAULT NULL,
  `m8` float DEFAULT NULL,
  `m9` float DEFAULT NULL,
  `m10` float DEFAULT NULL,
  `m11` float DEFAULT NULL,
  `m12` float DEFAULT NULL,
  `obs1` varchar(350) DEFAULT NULL,
  `obs2` varchar(350) DEFAULT NULL,
  `obs3` varchar(350) DEFAULT NULL,
  `obs4` varchar(350) DEFAULT NULL,
  `obs5` varchar(350) DEFAULT NULL,
  `obs6` varchar(350) DEFAULT NULL,
  `obs7` varchar(350) DEFAULT NULL,
  `obs8` varchar(350) DEFAULT NULL,
  `obs9` varchar(350) DEFAULT NULL,
  `obs10` varchar(350) DEFAULT NULL,
  `obs11` varchar(350) DEFAULT NULL,
  `obs12` varchar(350) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `userbaja` varchar(15) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idindi`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_far`
--

INSERT INTO `ezsystem_results_far` (`idindi`, `idobdirg`, `idobj`, `region`, `unidad`, `yearini`, `gerdir`, `useresp`, `tipoindi`, `reg`, `enfx1`, `enfx2`, `nombre`, `meta`, `pond`, `unmed`, `tipodat`, `acumulado`, `promedio`, `cumple`, `resultado`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `obs1`, `obs2`, `obs3`, `obs4`, `obs5`, `obs6`, `obs7`, `obs8`, `obs9`, `obs10`, `obs11`, `obs12`, `fechalta`, `useralta`, `vigencia`, `fechabaja`, `userbaja`, `activo`) VALUES
(1, '1', '1', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'MANUAL', NULL, '', 'CUMPLIMIENTO CON PLAZO PROMEDIO DE INVETARIO AUTORIZADO (FARMACIA)', 90, 5, 'PLAZO PROMEDIO', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(2, '1', '1', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'ENFOQUE', 'ENFXMMU2', 'ENFXMMU8', 'CONTROL ADECUADO DE ENTRADAS Y SALIDAS DE INVENTARIOS', 90, 18, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(3, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 9, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(4, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS', 90, 30, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(5, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(6, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'MACRO', 'MMU', '', 'APEGO AL MODELO OPERATIVO DE FARMACIA HOSPITALARIA', 90, 20, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(7, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'MACRO', 'MISP', '', 'APEGO AL MODELO OPERATIVO DE PARA CUMPLIR CON LAS METAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(8, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'MACRO', 'PFE', '', 'APEGO AL MODELO OPERATIVO DE EDUCACION AL PACIENTE, SU FAMILIA Y VISITANTES', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(9, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'ENFOQUE', 'ENFXMMU1', 'ENFXMUD1', 'APEGO AL MODELO DE ADQUISICIONES', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(10, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_gea`
--

DROP TABLE IF EXISTS `ezsystem_results_gea`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_gea` (
  `idindi` int NOT NULL AUTO_INCREMENT,
  `idobdirg` varchar(20) DEFAULT NULL,
  `idobj` varchar(10) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `yearini` varchar(4) DEFAULT NULL,
  `gerdir` varchar(8) DEFAULT NULL,
  `useresp` varchar(15) DEFAULT NULL,
  `tipoindi` varchar(35) DEFAULT NULL,
  `reg` varchar(35) DEFAULT NULL,
  `enfx1` varchar(60) DEFAULT NULL,
  `enfx2` varchar(60) DEFAULT NULL,
  `nombre` varchar(350) DEFAULT NULL,
  `meta` float DEFAULT NULL,
  `pond` float DEFAULT NULL,
  `unmed` varchar(25) DEFAULT NULL,
  `tipodat` varchar(20) DEFAULT NULL,
  `acumulado` float DEFAULT NULL,
  `promedio` float DEFAULT NULL,
  `cumple` float DEFAULT NULL,
  `resultado` float DEFAULT NULL,
  `m1` float DEFAULT NULL,
  `m2` float DEFAULT NULL,
  `m3` float DEFAULT NULL,
  `m4` float DEFAULT NULL,
  `m5` float DEFAULT NULL,
  `m6` float DEFAULT NULL,
  `m7` float DEFAULT NULL,
  `m8` float DEFAULT NULL,
  `m9` float DEFAULT NULL,
  `m10` float DEFAULT NULL,
  `m11` float DEFAULT NULL,
  `m12` float DEFAULT NULL,
  `obs1` varchar(350) DEFAULT NULL,
  `obs2` varchar(350) DEFAULT NULL,
  `obs3` varchar(350) DEFAULT NULL,
  `obs4` varchar(350) DEFAULT NULL,
  `obs5` varchar(350) DEFAULT NULL,
  `obs6` varchar(350) DEFAULT NULL,
  `obs7` varchar(350) DEFAULT NULL,
  `obs8` varchar(350) DEFAULT NULL,
  `obs9` varchar(350) DEFAULT NULL,
  `obs10` varchar(350) DEFAULT NULL,
  `obs11` varchar(350) DEFAULT NULL,
  `obs12` varchar(350) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `userbaja` varchar(15) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idindi`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_gea`
--

INSERT INTO `ezsystem_results_gea` (`idindi`, `idobdirg`, `idobj`, `region`, `unidad`, `yearini`, `gerdir`, `useresp`, `tipoindi`, `reg`, `enfx1`, `enfx2`, `nombre`, `meta`, `pond`, `unmed`, `tipodat`, `acumulado`, `promedio`, `cumple`, `resultado`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `obs1`, `obs2`, `obs3`, `obs4`, `obs5`, `obs6`, `obs7`, `obs8`, `obs9`, `obs10`, `obs11`, `obs12`, `fechalta`, `useralta`, `vigencia`, `fechabaja`, `userbaja`, `activo`) VALUES
(1, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'SATISFACCION SOPORTE PACIENTE', 'MANUAL', NULL, NULL, 'PACIENTE SATISFECHO POR LOS SERVICIOS DE SOPORTE, ADMISION Y RP', 90, 2, 'PORCENTAJE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'XION', '0000-00-00', NULL, NULL, 'SI'),
(2, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'GASTOS', 'MANUAL', '', '', 'GASTOS DE OPERACION IGUALES O MENORES A LO PRESUPUESTADO CONFORME A PRODUCTIVIDAD', 90, 15, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(3, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'FALLA', 'MANUAL', '', '', 'CUMPLIMIENTO CON MARGEN MINIMO DE UTILIDAD AUTORIZADO EN PROCEDIMIENTOS QX', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(4, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(5, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'TAREAS', 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS EN TIEMPO Y FORMA', 90, 30, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(6, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO Y SANITARIO', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(7, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'GOBIERNO', 'ENFOQUE', 'ENFXGLD9', '', 'APEGO AL MODELO DE JUNTA OPERATIVA', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(8, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'GOBIERNO', 'ENFOQUE', 'ENFXGLD2', '', 'APEGO AL MODELO DE JUNTA DE GOBIERNO', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(9, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'COMITES', 'ENFOQUE', 'ENFXQPS2', '', 'APEGO AL MODELO DE COMITES HOSPITALARIOS', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(10, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'LIMPIEZA Y ROPERIA', 'ENFOQUE', 'ENFXPCI8', 'ENFXPCI10', 'APEGO AL MODELO OPERATIVO DE LIMPIEZA Y ROPERIA', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(11, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'ALIMENTOS', 'ENFOQUE', 'ENFXPCI4', 'ENFXCOP4', 'APEGO AL MODELO OPERATIVO DE MANEJO DE ALIMENTOS', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(12, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'MANTENIMIENTO', 'FALLA', 'MANTENIMIENTO', '', 'APEGO AL MODELO OPERATIVO DE MANTENIMIENTO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(13, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'FMS', 'MACRO', 'FMS', '', 'APEGO AL MODELO OPERATIVO DE GESTION Y SEGURIDAD DE INSTALACIONES, INSTRUMENTAL Y EQUIPO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(14, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'INVENTARIOS', 'ENFOQUE', 'ENFXALM4', '', 'APEGO AL MODELO OPERATIVO DE GESTION DE INVENTARIOS DE SOPORTE', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(15, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'ADQUISICIONES', 'ENFOQUE', 'ENFXALM1', '', 'APEGO AL MODELO DE ADQUISICIONES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(16, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'ARP', 'MACRO', 'ARP', '', 'APEGO AL MODELO DE ADMISION Y CAJA', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(17, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'CUENTAS', 'ENFOQUE', 'ENFXGLD12', '', 'COTIZACIONES OPORTUNAS Y CORRECTAS', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(18, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'CUENTAS', 'ENFOQUE', 'ENFXARP2', '', 'CUENTAS CORRECTAS DE PACIENTES', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(19, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'QUEAS Y EDUCACION', 'ENFOQUE', 'ENFXPFR8', 'ENFXPFE1', 'APEGO AL MODELO DE RELACIONES PUBLICAS', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(20, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(21, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'PRIVILEGIOS CLINICOS', 'FALLA', 'F10SQE', '', 'APEGO AL MODELO DE OTORGAMIENTO DE PRIVILEGIOS A PROFESIONALES DE LA SALUD INDEPENDIENTES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(22, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'SATISFACCION SOPORTE PACIENTE', 'MANUAL', '', '', 'PACIENTE SATISFECHO POR LA ATENCION CLINICA PRESTADA', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(23, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'FALLA', 'FALLA', 'F72GLD', '', 'CUMPLIMIENTO CON MARGEN MINIMO DE UTILIDAD AUTORIZADO EN PROCEDIMIENTOS QX', 90, 15, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(24, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(25, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'TAREAS', 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS EN TIEMPO Y FORMA', 90, 30, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(26, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO Y SANITARIO', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(27, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'GOBIERNO', 'ENFOQUE', 'ENFXGLD9', '', 'APEGO AL MODELO DE JUNTA OPERATIVA', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(28, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'GOBIERNO', 'ENFOQUE', 'ENFXGLD2', '', 'APEGO AL MODELO DE JUNTA DE GOBIERNO', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(29, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'COMITES', 'ENFOQUE', 'ENFXQPS2', '', 'APEGO AL MODELO DE COMITES HOSPITALARIOS', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(30, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'PFR', 'MACRO', 'PFR', '', 'APEGO AL MODELO OPERATIVO PARA LA PROTECCION DE LOS DERECHOS DEL PACIENTE', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(31, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'PFE', 'MACRO', 'PFE', '', 'APEGO AL MODELO OPERATIVO DE EDUCACION AL PACIENTE, SU FAMILIA Y VISITANTES', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(32, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'ACC', 'MACRO', 'ACC', '', 'APEGO AL MODELO OPERATIVO DE ACCESO Y CONTINUIDAD DE LA ATENCION', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(33, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'AOP', 'MACRO', 'AOP', '', 'APEGO AL MODELO OPERATIVO DE EVALUACION DE PACIENTES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(34, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'SAD', 'MACRO', 'SAD', '', 'APEGO AL MODELO OPERATIVO DE SERVICIOS AUXILIARES DE DIAGNOSTICO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(35, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'COP', 'MACRO', 'COP', '', 'APEGO AL MODELO OPERATIVO DE ATENCION A PACIENTES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(36, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'ASC', 'MACRO', 'ASC', '', 'APEGO AL MODELO OPERATIVO DE ATENCION QUIRURGICA Y ANTESTESICA', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(37, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'MISP', 'MACRO', 'MISP', '', 'APEGO AL MODELO DE CUMPLIMIENTO CON LAS MESTAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(38, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'PCI', 'MACRO', 'PCI', '', 'APEGO AL MODEO DE PREVENCION Y CONTROL DE INFECCIONES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(39, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'MMU', 'MACRO', 'MMU', '', 'APEGO AL MODELO DE FARMACIA HOSPITALARIA', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(40, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'EXPCLI', 'MACRO', 'EXPCLI', '', 'APEGO AL MODELO OPERATIVO DE EXPEDIENTE CLINICO', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(41, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(42, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'SATISFACCION SOPORTE PACIENTE', 'MANUAL', '', '', 'PACIENTE SATISFECHO POR LA ATENCION PRESTADA', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(43, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', NULL, 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 15, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(44, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'TAREAS', 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS EN TIEMPO Y FORMA', 90, 30, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(45, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'PCI', 'MACRO', 'PCI', '', 'APEGO AL MODELO OPERATIVO DE PREVENCION Y CONTROL DE INFECCIONES', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(46, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'MMU', 'MACRO', 'MMU', '', 'APEGO AL MODELO OPERATIVO DE FARMACIA HOSPITALARIA', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(47, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'MISP', 'MACRO', 'MISP', '', 'APEGO AL MODELO OPERATIVO DE PARA CUMPLIR CON LAS METAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE', 90, 23, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(48, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'PFE', 'MACRO', 'PFE', '', 'APEGO AL MODELO OPERATIVO DE EDUCACION AL PACIENTE, SU FAMILIA Y VISITANTES', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(49, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'ACC', 'MACRO', 'ACC', '', 'APEGO AL MODELO OPERATIVO DE ACCESO Y CONTINUIDAD DE LA ATENCION', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(50, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'AOP', 'MACRO', 'AOP', '', 'APEGO AL MODELO OPERATIVO DE EVALUACION DE PACIENTES', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(51, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'SQD', 'MACRO', 'SQD', '', 'APEGO AL MODELO OPERATIVO DE SERVICIOS AUXILIARES DE DIAGNOSTICO', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(52, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'COP', 'MACRO', 'COP', '', 'APEGO AL MODELO OPERATIVO DE ATENCION A PACIENTES', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(53, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'ASC', 'MACRO', 'ASC', '', 'APEGO AL MODELO OPERATIVO DE ATENCION QUIRURGICA Y ANTESTESICA', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(54, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'EXPCLI', 'MACRO', 'EXPCLI', '', 'APEGO AL MODELO OPERATIVO DE EXPEDIENTE CLINICO', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(55, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(56, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'SATISFACCION SOPORTE PACIENTE', 'MANUAL', '', '', 'PACIENTE SATISFECHO POR LOS SERVICIOS DE SOPORTE', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(57, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'COSTOS', 'MANUAL', '', '', 'CUMPLIMIENTO CON PRESUPUESTO DE GASTOS', 90, 15, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(58, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'GASTOS', 'ENFOQUE', 'ENFXALM2', 'ENFXALM5', 'CONTROL ADECUADO DE ENTRADAS Y SALIDAS DE INVENTARIOS', 90, 17, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(59, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'PLAZO PROMEDIO', 'MANUAL', '', '', 'CUMPLIMIENTO CON PLAZO PROMEDIO DE INVENTARIO AUTORIZADO (ALMACEN GENERAL)', 15, 5, 'PLAZO PROMEDIO', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(60, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 9, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(61, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'TAREAS', 'TASK', '', '', 'CUMPLIMIENTO DE TAREAS-COMPROMISOS', 90, 30, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(62, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO Y SANITARIO', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(63, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'LIMPIEZA Y ROPERIA', 'ENFOQUE', 'ENFXPCI8', 'ENFXPCI10', 'APEGO AL MODELO OPERATIVO DE LIMPIEZA Y ROPERIA', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(64, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'ALIMENTOS', 'ENFOQUE', 'ENFXPCI4', 'ENFXCOP4', 'APEGO AL MODELO OPERATIVO DE MANEJO DE ALIMENTOS', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(65, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'MANTENIMIENTO', 'FALLA', 'MANTENIMIENTO', '', 'APEGO AL MODELO OPERATIVO DE MANTENIMIENTO', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(66, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'FMS', 'MACRO', 'FMS', '', 'APEGO AL MODELO OPERATIVO DE GESTION Y SEGURIDAD DE INSTALACIONES, INSTRUMENTAL Y EQUIPO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(67, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'ALM', 'MACRO', 'ALM', '', 'APEGO AL MODELO OPERATIVO DE ALMACEN GENERAL', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(68, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'ADQUISICIONES', 'ENFOQUE', 'ENFXALM1', '', 'APEGO AL MODELO DE ADQUISICIONES', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(69, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(70, '1', '1', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'MANUAL', NULL, '', 'CUMPLIMIENTO CON PLAZO PROMEDIO DE INVETARIO AUTORIZADO (FARMACIA)', 90, 5, 'PLAZO PROMEDIO', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(71, '1', '1', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'ENFOQUE', 'ENFXMMU2', 'ENFXMMU8', 'CONTROL ADECUADO DE ENTRADAS Y SALIDAS DE INVENTARIOS', 90, 18, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(72, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 9, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(73, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS', 90, 30, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(74, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(75, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'MACRO', 'MMU', '', 'APEGO AL MODELO OPERATIVO DE FARMACIA HOSPITALARIA', 90, 20, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(76, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'MACRO', 'MISP', '', 'APEGO AL MODELO OPERATIVO DE PARA CUMPLIR CON LAS METAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(77, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'MACRO', 'PFE', '', 'APEGO AL MODELO OPERATIVO DE EDUCACION AL PACIENTE, SU FAMILIA Y VISITANTES', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(78, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'ENFOQUE', 'ENFXMMU1', 'ENFXMUD1', 'APEGO AL MODELO DE ADQUISICIONES', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(79, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(80, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 10, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(81, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'TAREAS', 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS EN TIEMPO Y FORMA', 90, 30, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(82, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO APLICABLE A LA GESTION DE RECURSOS HUMANOS ', 90, 15, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(83, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'PLANTILLA', 'MANUAL', '', '', 'PLANTILLA NECESARIA, NORMATIVA Y REQUERIDA POR EL MODELO 50 DOCTORS CUBIERTA', 90, 17, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(84, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'SQE', 'MACRO', 'SQE', '', 'APEGO AL MODELO DE OPERATIVO DE RECURSOS HUMANOS (SQE)', 90, 10, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(85, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'RECLUTAMIENTO Y SELECCIÓN', 'ENFOQUE', 'ENFXSQE3', '', 'APEGO AL MODELO DE OPERATIVO DE RECLUTAMIENTO Y SELECCION', 90, 6, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(86, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 6, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(87, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'CAPACITACION', 'ENFOQUE', 'ENFXSQE6', '', 'APEGO AL MODELO DE CAPACITACION', 90, 6, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_gem`
--

DROP TABLE IF EXISTS `ezsystem_results_gem`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_gem` (
  `idindi` int NOT NULL AUTO_INCREMENT,
  `idobdirg` varchar(20) DEFAULT NULL,
  `idobj` varchar(10) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `yearini` varchar(4) DEFAULT NULL,
  `gerdir` varchar(8) DEFAULT NULL,
  `useresp` varchar(15) DEFAULT NULL,
  `tipoindi` varchar(35) DEFAULT NULL,
  `reg` varchar(35) DEFAULT NULL,
  `enfx1` varchar(60) DEFAULT NULL,
  `enfx2` varchar(60) DEFAULT NULL,
  `nombre` varchar(350) DEFAULT NULL,
  `meta` float DEFAULT NULL,
  `pond` float DEFAULT NULL,
  `unmed` varchar(25) DEFAULT NULL,
  `tipodat` varchar(20) DEFAULT NULL,
  `acumulado` float DEFAULT NULL,
  `promedio` float DEFAULT NULL,
  `cumple` float DEFAULT NULL,
  `resultado` float DEFAULT NULL,
  `m1` float DEFAULT NULL,
  `m2` float DEFAULT NULL,
  `m3` float DEFAULT NULL,
  `m4` float DEFAULT NULL,
  `m5` float DEFAULT NULL,
  `m6` float DEFAULT NULL,
  `m7` float DEFAULT NULL,
  `m8` float DEFAULT NULL,
  `m9` float DEFAULT NULL,
  `m10` float DEFAULT NULL,
  `m11` float DEFAULT NULL,
  `m12` float DEFAULT NULL,
  `obs1` varchar(350) DEFAULT NULL,
  `obs2` varchar(350) DEFAULT NULL,
  `obs3` varchar(350) DEFAULT NULL,
  `obs4` varchar(350) DEFAULT NULL,
  `obs5` varchar(350) DEFAULT NULL,
  `obs6` varchar(350) DEFAULT NULL,
  `obs7` varchar(350) DEFAULT NULL,
  `obs8` varchar(350) DEFAULT NULL,
  `obs9` varchar(350) DEFAULT NULL,
  `obs10` varchar(350) DEFAULT NULL,
  `obs11` varchar(350) DEFAULT NULL,
  `obs12` varchar(350) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `userbaja` varchar(15) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idindi`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_gem`
--

INSERT INTO `ezsystem_results_gem` (`idindi`, `idobdirg`, `idobj`, `region`, `unidad`, `yearini`, `gerdir`, `useresp`, `tipoindi`, `reg`, `enfx1`, `enfx2`, `nombre`, `meta`, `pond`, `unmed`, `tipodat`, `acumulado`, `promedio`, `cumple`, `resultado`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `obs1`, `obs2`, `obs3`, `obs4`, `obs5`, `obs6`, `obs7`, `obs8`, `obs9`, `obs10`, `obs11`, `obs12`, `fechalta`, `useralta`, `vigencia`, `fechabaja`, `userbaja`, `activo`) VALUES
(1, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'SATISFACCION SOPORTE PACIENTE', 'MANUAL', '', '', 'PACIENTE SATISFECHO POR LA ATENCION CLINICA PRESTADA', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(2, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'FALLA', 'FALLA', 'F72GLD', '', 'CUMPLIMIENTO CON MARGEN MINIMO DE UTILIDAD AUTORIZADO EN PROCEDIMIENTOS QX', 90, 15, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(3, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(4, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'TAREAS', 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS EN TIEMPO Y FORMA', 90, 30, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(5, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO Y SANITARIO', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(6, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'GOBIERNO', 'ENFOQUE', 'ENFXGLD9', '', 'APEGO AL MODELO DE JUNTA OPERATIVA', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(7, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'GOBIERNO', 'ENFOQUE', 'ENFXGLD2', '', 'APEGO AL MODELO DE JUNTA DE GOBIERNO', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(8, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'COMITES', 'ENFOQUE', 'ENFXQPS2', '', 'APEGO AL MODELO DE COMITES HOSPITALARIOS', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(9, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'PFR', 'MACRO', 'PFR', '', 'APEGO AL MODELO OPERATIVO PARA LA PROTECCION DE LOS DERECHOS DEL PACIENTE', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(10, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'PFE', 'MACRO', 'PFE', '', 'APEGO AL MODELO OPERATIVO DE EDUCACION AL PACIENTE, SU FAMILIA Y VISITANTES', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(11, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'ACC', 'MACRO', 'ACC', '', 'APEGO AL MODELO OPERATIVO DE ACCESO Y CONTINUIDAD DE LA ATENCION', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(12, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'AOP', 'MACRO', 'AOP', '', 'APEGO AL MODELO OPERATIVO DE EVALUACION DE PACIENTES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(13, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'SAD', 'MACRO', 'SAD', '', 'APEGO AL MODELO OPERATIVO DE SERVICIOS AUXILIARES DE DIAGNOSTICO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(14, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'COP', 'MACRO', 'COP', '', 'APEGO AL MODELO OPERATIVO DE ATENCION A PACIENTES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(15, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'ASC', 'MACRO', 'ASC', '', 'APEGO AL MODELO OPERATIVO DE ATENCION QUIRURGICA Y ANTESTESICA', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(16, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'MISP', 'MACRO', 'MISP', '', 'APEGO AL MODELO DE CUMPLIMIENTO CON LAS MESTAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(17, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'PCI', 'MACRO', 'PCI', '', 'APEGO AL MODEO DE PREVENCION Y CONTROL DE INFECCIONES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(18, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'MMU', 'MACRO', 'MMU', '', 'APEGO AL MODELO DE FARMACIA HOSPITALARIA', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(19, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'EXPCLI', 'MACRO', 'EXPCLI', '', 'APEGO AL MODELO OPERATIVO DE EXPEDIENTE CLINICO', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(20, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_ger`
--

DROP TABLE IF EXISTS `ezsystem_results_ger`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_ger` (
  `idindi` int NOT NULL AUTO_INCREMENT,
  `idobdirg` varchar(20) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `yearini` varchar(4) DEFAULT NULL,
  `gerdir` varchar(8) DEFAULT NULL,
  `useresp` varchar(15) DEFAULT NULL,
  `tipoindi` varchar(35) DEFAULT NULL,
  `reg` varchar(35) DEFAULT NULL,
  `enfx1` varchar(60) DEFAULT NULL,
  `enfx2` varchar(60) DEFAULT NULL,
  `nombre` varchar(350) DEFAULT NULL,
  `meta` float DEFAULT NULL,
  `pond` float DEFAULT NULL,
  `unmed` varchar(25) DEFAULT NULL,
  `tipodat` varchar(20) DEFAULT NULL,
  `acumulado` float DEFAULT NULL,
  `promedio` float DEFAULT NULL,
  `cumple` float DEFAULT NULL,
  `resultado` float DEFAULT NULL,
  `m1` float DEFAULT NULL,
  `m2` float DEFAULT NULL,
  `m3` float DEFAULT NULL,
  `m4` float DEFAULT NULL,
  `m5` float DEFAULT NULL,
  `m6` float DEFAULT NULL,
  `m7` float DEFAULT NULL,
  `m8` float DEFAULT NULL,
  `m9` float DEFAULT NULL,
  `m10` float DEFAULT NULL,
  `m11` float DEFAULT NULL,
  `m12` float DEFAULT NULL,
  `obs1` varchar(350) DEFAULT NULL,
  `obs2` varchar(350) DEFAULT NULL,
  `obs3` varchar(350) DEFAULT NULL,
  `obs4` varchar(350) DEFAULT NULL,
  `obs5` varchar(350) DEFAULT NULL,
  `obs6` varchar(350) DEFAULT NULL,
  `obs7` varchar(350) DEFAULT NULL,
  `obs8` varchar(350) DEFAULT NULL,
  `obs9` varchar(350) DEFAULT NULL,
  `obs10` varchar(350) DEFAULT NULL,
  `obs11` varchar(350) DEFAULT NULL,
  `obs12` varchar(350) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `userbaja` varchar(15) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idindi`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_ger`
--

INSERT INTO `ezsystem_results_ger` (`idindi`, `idobdirg`, `region`, `unidad`, `yearini`, `gerdir`, `useresp`, `tipoindi`, `reg`, `enfx1`, `enfx2`, `nombre`, `meta`, `pond`, `unmed`, `tipodat`, `acumulado`, `promedio`, `cumple`, `resultado`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `obs1`, `obs2`, `obs3`, `obs4`, `obs5`, `obs6`, `obs7`, `obs8`, `obs9`, `obs10`, `obs11`, `obs12`, `fechalta`, `useralta`, `vigencia`, `fechabaja`, `userbaja`, `activo`) VALUES
(1, '1', 'JAL', 'ZR', '24', 'DIGC', 'GRJ1', 'TAREAS', 'MANUAL', NULL, NULL, 'CUMPLIMIENTO CON EL DESARROLLO E IMPLEMENTACION DEL PLAN COMERCIAL', 90, 6, 'PORCENTAJE', NULL, 475, 95, 83.3333, 5, NULL, NULL, NULL, NULL, 100, 100, 100, 100, 75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Se desarrolló modelo comercial', NULL, 'SE IMPLEMENTARON DIFERENTES ESTRATEGIAS COMERCIALES QUE HAN RESULTADO EN EL INCREMENTO DE PROCEDIMIENTOS', 'Se han desarrollado varias estrategias que están incrementando las ventas desde Julio a la fecha', 'CONTACTO CON 2 BROKERS NUEVOS, GESTIONAR ACUERDO CON NUEVO MEDICO, CAMPAÑA DE REDES CON RETRASO POR DIFERENTES MOTIVOS (DISEÑO GRAFICO, REGRABACION DE VIDEO)', NULL, NULL, NULL, NULL, 'XION', '2024-12-31', NULL, NULL, 'SI'),
(2, '1', 'JAL', 'ZR', '24', 'DIGC', 'GRJ1', 'PRODUCTIVIDAD', 'MANUAL', '', '', 'INGRESOS HOSPITALARIOS CON CUENTAS MAYORES AL COSTO ESTIMADO PROMEDIO POR UNIDAD', 90, 2, 'PORCENTAJE', NULL, 500, 100, 111.111, 2.22222, NULL, NULL, NULL, NULL, 100, 100, 100, 100, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'XION', '2024-12-31', NULL, NULL, 'SI'),
(3, '1', 'JAL', 'ZR', '24', 'DIGC', 'GRJ1', 'VENTAS', 'MANUAL', '', '', 'METAS ECONOMICAS CUMPLIDAS', 90, 25, 'PORCENTAJE', NULL, 202.41, 40.482, 59.8444, 14.9611, NULL, NULL, NULL, NULL, 37.23, 21.46, 39.78, 50.08, 53.86, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' META $536,000.00, INGRESOS  $199,552.95 ', 'META  $536,000.00 ,  $115,026.09, 7 CX \r\n', 'META  $1,072,000.00. INGRESO  $426,471.36 incremento del 270% con relación a Junio', 'META $1,072,000.00 , INGRESOS  $536,871.44 \r\n\r\n', 'META:  $1,072,000.00 \r\nLOGRO: $577,446.77', NULL, NULL, NULL, NULL, 'XION', '2024-12-31', NULL, NULL, 'SI'),
(4, '1', 'JAL', 'ZR', '24', 'DIGC', 'GRJ1', 'COSTOS', 'MANUAL', '', '', 'CUMPLIMIENTO CON MARGEN MINIMO DE UTILIDAD AUTORIZADO EN PROCEDIMIENTOS QX', 90, 2, 'PORCENTAJE', NULL, 500, 100, 111.111, 2.22222, NULL, NULL, NULL, NULL, 100, 100, 100, 100, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'XION', '2024-12-31', NULL, NULL, 'SI'),
(5, '1', 'JAL', 'ZR', '24', 'DIGC', 'GRJ1', 'GASTOS', 'MANUAL', '', '', 'GASTOS DE OPERACION IGUALES O MENORES A LO PRESUPUESTADO CONFORME A PRODUCTIVIDAD', 90, 2, 'PORCENTAJE', NULL, 565, 113, 100, 2, NULL, NULL, NULL, NULL, 133, 110, 125, 107, 90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PPTO  $1,045,148.02 , GASTO $703,612.47, EL PRESUPUESTO REQUIERE AJUSTES\r\n', 'PPTO  $876,201.91, GASTO  $788,933.80 , PRESUPUESTO REQUIERE AJUSTES\r\n', 'PPTO $915148.018, GASTO  $685,260.88 \r\n\r\n', 'PRESUPUESTADO $876,201.91 , GASTO  $813,778.96 \r\n  \r\n', 'PRESUPUESTO NO APLICABLE PARA 2024, SE CONTROLARA A PARTIR DE 2025', NULL, NULL, NULL, NULL, 'XION', '2024-12-31', NULL, NULL, 'SI'),
(6, '2', 'JAL', 'ZR', '24', 'DIGC', 'GRJ1', 'TAREAS', 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS EN TIEMPO Y FORMA', 90, 20, 'PORCENTAJE', NULL, 481.81, 96.362, 90.9, 18.18, NULL, NULL, NULL, NULL, 100, 100, 100, 100, 81.81, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TAREAS CUMPLIDAS PARA EL DESARROLLO DEL MODELO DE OPERATIVO DE GOBIERNO Y OPERATIVO', 'Tareas cumplidas para desarrollo del plan comercial y el modelo operativo', '11 TAREAS, 9 CUMPLIDAS, FALTA ARRANQUE DE PAQUETES EN REDES, FALTA MEJORAR COTIZACION PARA MTN AIRES, FALTA GESTION DE TERAPIA CON JAVIER INTERMEDIA', NULL, NULL, NULL, NULL, 'XION', '2024-12-31', NULL, NULL, 'SI'),
(7, '2', 'JAL', 'ZR', '24', 'DIGC', 'GRJ1', 'GOBIERNO', 'ENFOQUE', 'ENFXGLD2', '', 'APEGO AL MODELO DE JUNTA DE GOBIERNO', 90, 10, 'PORCENTAJE', NULL, 485, 97, 94.4444, 9.44444, NULL, NULL, NULL, NULL, 100, 100, 100, 100, 85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Se diseño un nuevo programa de trabajo para fortalecer los roles de lis integrantes de la junta de gobierno, se implementará en septiembre', 'FALTA REFORZAR TIEMPO DE GERENCIA ADMINISTRATIVA Y PRESENTACION CONTINUA DE PARTICIPANTES, FALTAN SESIONES DE LIDERAZGO', NULL, NULL, NULL, NULL, 'XION', '2024-12-31', NULL, NULL, 'SI'),
(8, '3', 'JAL', 'ZR', '24', 'DIGC', 'GRJ1', 'OPERACIÓN', 'ALL', 'ALL', '', 'APEGO AL MODELO OPERATIVO DE LA UNIDAD', 90, 33, 'PORCENTAJE', NULL, 439.98, 87.996, 95.2333, 31.427, NULL, NULL, NULL, NULL, 86.59, 96.85, 85.83, 85, 85.71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Continua la implementación del modelo, el personal operativo será capacitado en los nuevos lineamientos', NULL, NULL, NULL, NULL, NULL, 'XION', '2024-12-31', NULL, NULL, 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_indicas`
--

DROP TABLE IF EXISTS `ezsystem_results_indicas`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_indicas` (
  `idindi` int NOT NULL AUTO_INCREMENT,
  `idobdirg` varchar(20) DEFAULT NULL,
  `idobj` varchar(10) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `yearini` varchar(4) DEFAULT NULL,
  `gerdir` varchar(8) DEFAULT NULL,
  `useresp` varchar(15) DEFAULT NULL,
  `tipoindi` varchar(35) DEFAULT NULL,
  `reg` varchar(35) DEFAULT NULL,
  `enfx1` varchar(60) DEFAULT NULL,
  `enfx2` varchar(60) DEFAULT NULL,
  `nombre` varchar(350) DEFAULT NULL,
  `meta` float DEFAULT NULL,
  `pond` float DEFAULT NULL,
  `unmed` varchar(25) DEFAULT NULL,
  `tipodat` varchar(20) DEFAULT NULL,
  `acumulado` float DEFAULT NULL,
  `promedio` float DEFAULT NULL,
  `cumple` float DEFAULT NULL,
  `resultado` float DEFAULT NULL,
  `m1` float DEFAULT NULL,
  `m2` float DEFAULT NULL,
  `m3` float DEFAULT NULL,
  `m4` float DEFAULT NULL,
  `m5` float DEFAULT NULL,
  `m6` float DEFAULT NULL,
  `m7` float DEFAULT NULL,
  `m8` float DEFAULT NULL,
  `m9` float DEFAULT NULL,
  `m10` float DEFAULT NULL,
  `m11` float DEFAULT NULL,
  `m12` float DEFAULT NULL,
  `obs1` varchar(350) DEFAULT NULL,
  `obs2` varchar(350) DEFAULT NULL,
  `obs3` varchar(350) DEFAULT NULL,
  `obs4` varchar(350) DEFAULT NULL,
  `obs5` varchar(350) DEFAULT NULL,
  `obs6` varchar(350) DEFAULT NULL,
  `obs7` varchar(350) DEFAULT NULL,
  `obs8` varchar(350) DEFAULT NULL,
  `obs9` varchar(350) DEFAULT NULL,
  `obs10` varchar(350) DEFAULT NULL,
  `obs11` varchar(350) DEFAULT NULL,
  `obs12` varchar(350) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `userbaja` varchar(15) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idindi`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_indicas`
--

INSERT INTO `ezsystem_results_indicas` (`idindi`, `idobdirg`, `idobj`, `region`, `unidad`, `yearini`, `gerdir`, `useresp`, `tipoindi`, `reg`, `enfx1`, `enfx2`, `nombre`, `meta`, `pond`, `unmed`, `tipodat`, `acumulado`, `promedio`, `cumple`, `resultado`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `obs1`, `obs2`, `obs3`, `obs4`, `obs5`, `obs6`, `obs7`, `obs8`, `obs9`, `obs10`, `obs11`, `obs12`, `fechalta`, `useralta`, `vigencia`, `fechabaja`, `userbaja`, `activo`) VALUES
(1, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'SATISFACCION SOPORTE PACIENTE', 'MANUAL', NULL, NULL, 'PACIENTE SATISFECHO POR LOS SERVICIOS DE SOPORTE, ADMISION Y RP', 90, 2, 'PORCENTAJE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'XION', '0000-00-00', NULL, NULL, 'SI'),
(2, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'GASTOS', 'MANUAL', '', '', 'GASTOS DE OPERACION IGUALES O MENORES A LO PRESUPUESTADO CONFORME A PRODUCTIVIDAD', 90, 15, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(3, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'FALLA', 'MANUAL', '', '', 'CUMPLIMIENTO CON MARGEN MINIMO DE UTILIDAD AUTORIZADO EN PROCEDIMIENTOS QX', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(4, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(5, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'TAREAS', 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS EN TIEMPO Y FORMA', 90, 30, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(6, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO Y SANITARIO', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(7, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'GOBIERNO', 'ENFOQUE', 'ENFXGLD9', '', 'APEGO AL MODELO DE JUNTA OPERATIVA', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(8, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'GOBIERNO', 'ENFOQUE', 'ENFXGLD2', '', 'APEGO AL MODELO DE JUNTA DE GOBIERNO', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(9, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'COMITES', 'ENFOQUE', 'ENFXQPS2', '', 'APEGO AL MODELO DE COMITES HOSPITALARIOS', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(10, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'LIMPIEZA Y ROPERIA', 'ENFOQUE', 'ENFXPCI8', 'ENFXPCI10', 'APEGO AL MODELO OPERATIVO DE LIMPIEZA Y ROPERIA', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(11, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'ALIMENTOS', 'ENFOQUE', 'ENFXPCI4', 'ENFXCOP4', 'APEGO AL MODELO OPERATIVO DE MANEJO DE ALIMENTOS', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(12, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'MANTENIMIENTO', 'FALLA', 'MANTENIMIENTO', '', 'APEGO AL MODELO OPERATIVO DE MANTENIMIENTO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(13, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'FMS', 'MACRO', 'FMS', '', 'APEGO AL MODELO OPERATIVO DE GESTION Y SEGURIDAD DE INSTALACIONES, INSTRUMENTAL Y EQUIPO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(14, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'INVENTARIOS', 'ENFOQUE', 'ENFXALM4', '', 'APEGO AL MODELO OPERATIVO DE GESTION DE INVENTARIOS DE SOPORTE', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(15, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'ADQUISICIONES', 'ENFOQUE', 'ENFXALM1', '', 'APEGO AL MODELO DE ADQUISICIONES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(16, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'ARP', 'MACRO', 'ARP', '', 'APEGO AL MODELO DE ADMISION Y CAJA', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(17, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'CUENTAS', 'ENFOQUE', 'ENFXGLD12', '', 'COTIZACIONES OPORTUNAS Y CORRECTAS', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(18, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'CUENTAS', 'ENFOQUE', 'ENFXARP2', '', 'CUENTAS CORRECTAS DE PACIENTES', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(19, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'QUEAS Y EDUCACION', 'ENFOQUE', 'ENFXPFR8', 'ENFXPFE1', 'APEGO AL MODELO DE RELACIONES PUBLICAS', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(20, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(21, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEA1', 'PRIVILEGIOS CLINICOS', 'FALLA', 'F10SQE', '', 'APEGO AL MODELO DE OTORGAMIENTO DE PRIVILEGIOS A PROFESIONALES DE LA SALUD INDEPENDIENTES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(22, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'SATISFACCION SOPORTE PACIENTE', 'MANUAL', '', '', 'PACIENTE SATISFECHO POR LA ATENCION CLINICA PRESTADA', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(23, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'FALLA', 'FALLA', 'F72GLD', '', 'CUMPLIMIENTO CON MARGEN MINIMO DE UTILIDAD AUTORIZADO EN PROCEDIMIENTOS QX', 90, 15, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(24, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(25, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'TAREAS', 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS EN TIEMPO Y FORMA', 90, 30, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(26, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO Y SANITARIO', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(27, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'GOBIERNO', 'ENFOQUE', 'ENFXGLD9', '', 'APEGO AL MODELO DE JUNTA OPERATIVA', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(28, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'GOBIERNO', 'ENFOQUE', 'ENFXGLD2', '', 'APEGO AL MODELO DE JUNTA DE GOBIERNO', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(29, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'COMITES', 'ENFOQUE', 'ENFXQPS2', '', 'APEGO AL MODELO DE COMITES HOSPITALARIOS', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(30, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'PFR', 'MACRO', 'PFR', '', 'APEGO AL MODELO OPERATIVO PARA LA PROTECCION DE LOS DERECHOS DEL PACIENTE', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(31, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'PFE', 'MACRO', 'PFE', '', 'APEGO AL MODELO OPERATIVO DE EDUCACION AL PACIENTE, SU FAMILIA Y VISITANTES', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(32, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'ACC', 'MACRO', 'ACC', '', 'APEGO AL MODELO OPERATIVO DE ACCESO Y CONTINUIDAD DE LA ATENCION', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(33, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'AOP', 'MACRO', 'AOP', '', 'APEGO AL MODELO OPERATIVO DE EVALUACION DE PACIENTES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(34, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'SAD', 'MACRO', 'SAD', '', 'APEGO AL MODELO OPERATIVO DE SERVICIOS AUXILIARES DE DIAGNOSTICO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(35, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'COP', 'MACRO', 'COP', '', 'APEGO AL MODELO OPERATIVO DE ATENCION A PACIENTES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(36, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'ASC', 'MACRO', 'ASC', '', 'APEGO AL MODELO OPERATIVO DE ATENCION QUIRURGICA Y ANTESTESICA', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(37, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'MISP', 'MACRO', 'MISP', '', 'APEGO AL MODELO DE CUMPLIMIENTO CON LAS MESTAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(38, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'PCI', 'MACRO', 'PCI', '', 'APEGO AL MODEO DE PREVENCION Y CONTROL DE INFECCIONES', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(39, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'MMU', 'MACRO', 'MMU', '', 'APEGO AL MODELO DE FARMACIA HOSPITALARIA', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(40, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'EXPCLI', 'MACRO', 'EXPCLI', '', 'APEGO AL MODELO OPERATIVO DE EXPEDIENTE CLINICO', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(41, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'GEM2', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(42, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'SATISFACCION SOPORTE PACIENTE', 'MANUAL', '', '', 'PACIENTE SATISFECHO POR LA ATENCION PRESTADA', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(43, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', NULL, 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 15, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(44, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'TAREAS', 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS EN TIEMPO Y FORMA', 90, 30, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(45, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'PCI', 'MACRO', 'PCI', '', 'APEGO AL MODELO OPERATIVO DE PREVENCION Y CONTROL DE INFECCIONES', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(46, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'MMU', 'MACRO', 'MMU', '', 'APEGO AL MODELO OPERATIVO DE FARMACIA HOSPITALARIA', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(47, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'MISP', 'MACRO', 'MISP', '', 'APEGO AL MODELO OPERATIVO DE PARA CUMPLIR CON LAS METAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE', 90, 23, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(48, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'PFE', 'MACRO', 'PFE', '', 'APEGO AL MODELO OPERATIVO DE EDUCACION AL PACIENTE, SU FAMILIA Y VISITANTES', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(49, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'ACC', 'MACRO', 'ACC', '', 'APEGO AL MODELO OPERATIVO DE ACCESO Y CONTINUIDAD DE LA ATENCION', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(50, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'AOP', 'MACRO', 'AOP', '', 'APEGO AL MODELO OPERATIVO DE EVALUACION DE PACIENTES', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(51, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'SQD', 'MACRO', 'SQD', '', 'APEGO AL MODELO OPERATIVO DE SERVICIOS AUXILIARES DE DIAGNOSTICO', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(52, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'COP', 'MACRO', 'COP', '', 'APEGO AL MODELO OPERATIVO DE ATENCION A PACIENTES', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(53, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'ASC', 'MACRO', 'ASC', '', 'APEGO AL MODELO OPERATIVO DE ATENCION QUIRURGICA Y ANTESTESICA', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(54, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'EXPCLI', 'MACRO', 'EXPCLI', '', 'APEGO AL MODELO OPERATIVO DE EXPEDIENTE CLINICO', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(55, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'ENF2', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 3, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(56, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'SATISFACCION SOPORTE PACIENTE', 'MANUAL', '', '', 'PACIENTE SATISFECHO POR LOS SERVICIOS DE SOPORTE', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(57, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'COSTOS', 'MANUAL', '', '', 'CUMPLIMIENTO CON PRESUPUESTO DE GASTOS', 90, 15, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(58, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'GASTOS', 'ENFOQUE', 'ENFXALM2', 'ENFXALM5', 'CONTROL ADECUADO DE ENTRADAS Y SALIDAS DE INVENTARIOS', 90, 17, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(59, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'PLAZO PROMEDIO', 'MANUAL', '', '', 'CUMPLIMIENTO CON PLAZO PROMEDIO DE INVENTARIO AUTORIZADO (ALMACEN GENERAL)', 15, 5, 'PLAZO PROMEDIO', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(60, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 9, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(61, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'TAREAS', 'TASK', '', '', 'CUMPLIMIENTO DE TAREAS-COMPROMISOS', 90, 30, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(62, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO Y SANITARIO', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(63, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'LIMPIEZA Y ROPERIA', 'ENFOQUE', 'ENFXPCI8', 'ENFXPCI10', 'APEGO AL MODELO OPERATIVO DE LIMPIEZA Y ROPERIA', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(64, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'ALIMENTOS', 'ENFOQUE', 'ENFXPCI4', 'ENFXCOP4', 'APEGO AL MODELO OPERATIVO DE MANEJO DE ALIMENTOS', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(65, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'MANTENIMIENTO', 'FALLA', 'MANTENIMIENTO', '', 'APEGO AL MODELO OPERATIVO DE MANTENIMIENTO', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(66, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'FMS', 'MACRO', 'FMS', '', 'APEGO AL MODELO OPERATIVO DE GESTION Y SEGURIDAD DE INSTALACIONES, INSTRUMENTAL Y EQUIPO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(67, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'ALM', 'MACRO', 'ALM', '', 'APEGO AL MODELO OPERATIVO DE ALMACEN GENERAL', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(68, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'ADQUISICIONES', 'ENFOQUE', 'ENFXALM1', '', 'APEGO AL MODELO DE ADQUISICIONES', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(69, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(70, '1', '1', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'MANUAL', NULL, '', 'CUMPLIMIENTO CON PLAZO PROMEDIO DE INVETARIO AUTORIZADO (FARMACIA)', 90, 5, 'PLAZO PROMEDIO', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(71, '1', '1', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'ENFOQUE', 'ENFXMMU2', 'ENFXMMU8', 'CONTROL ADECUADO DE ENTRADAS Y SALIDAS DE INVENTARIOS', 90, 18, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(72, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 9, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(73, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS', 90, 30, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(74, '2', '2', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO', 90, 10, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(75, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'MACRO', 'MMU', '', 'APEGO AL MODELO OPERATIVO DE FARMACIA HOSPITALARIA', 90, 20, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(76, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'MACRO', 'MISP', '', 'APEGO AL MODELO OPERATIVO DE PARA CUMPLIR CON LAS METAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(77, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'MACRO', 'PFE', '', 'APEGO AL MODELO OPERATIVO DE EDUCACION AL PACIENTE, SU FAMILIA Y VISITANTES', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(78, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', NULL, 'ENFOQUE', 'ENFXMMU1', 'ENFXMUD1', 'APEGO AL MODELO DE ADQUISICIONES', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(79, '3', '3', 'JAL', 'ZR', '24', 'GEM2', 'FAR2', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(80, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 10, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(81, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'TAREAS', 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS EN TIEMPO Y FORMA', 90, 30, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(82, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO APLICABLE A LA GESTION DE RECURSOS HUMANOS ', 90, 15, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(83, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'PLANTILLA', 'MANUAL', '', '', 'PLANTILLA NECESARIA, NORMATIVA Y REQUERIDA POR EL MODELO 50 DOCTORS CUBIERTA', 90, 17, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(84, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'SQE', 'MACRO', 'SQE', '', 'APEGO AL MODELO DE OPERATIVO DE RECURSOS HUMANOS (SQE)', 90, 10, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(85, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'RECLUTAMIENTO Y SELECCIÓN', 'ENFOQUE', 'ENFXSQE3', '', 'APEGO AL MODELO DE OPERATIVO DE RECLUTAMIENTO Y SELECCION', 90, 6, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(86, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 6, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(87, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'CAPACITACION', 'ENFOQUE', 'ENFXSQE6', '', 'APEGO AL MODELO DE CAPACITACION', 90, 6, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_muestra`
--

DROP TABLE IF EXISTS `ezsystem_results_muestra`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_muestra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `unidad` varchar(50) DEFAULT NULL,
  `muestravigente` int DEFAULT NULL,
  `fechactualizo` varchar(10) DEFAULT NULL,
  `usuarioactualizo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_muestra`
--

INSERT INTO `ezsystem_results_muestra` (`id`, `unidad`, `muestravigente`, `fechactualizo`, `usuarioactualizo`) VALUES
(1, 'ZR', 166, 'HOY', 'XION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_plantgeneral`
--

DROP TABLE IF EXISTS `ezsystem_results_plantgeneral`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_plantgeneral` (
  `id` int NOT NULL AUTO_INCREMENT,
  `var1` varchar(1) DEFAULT NULL,
  `var2` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_plantgeneral`
--

INSERT INTO `ezsystem_results_plantgeneral` (`id`, `var1`, `var2`) VALUES
(1, 'N', 0),
(2, 'N', 0),
(3, 'N', 0),
(4, 'N', 0),
(5, 'N', 0),
(6, 'N', 0),
(7, 'N', 0),
(8, 'N', 0),
(9, 'N', 0),
(10, 'N', 0),
(11, 'N', 0),
(12, 'N', 0),
(13, 'N', 0),
(14, 'N', 0),
(15, 'N', 0),
(16, 'N', 0),
(17, 'N', 0),
(18, 'N', 0),
(19, 'N', 0),
(20, 'N', 0),
(21, 'N', 0),
(22, 'N', 0),
(23, 'N', 0),
(24, 'N', 0),
(25, 'N', 0),
(26, 'N', 0),
(27, 'N', 0),
(28, 'N', 0),
(29, 'N', 0),
(30, 'N', 0),
(31, 'N', 0),
(32, 'N', 0),
(33, 'N', 0),
(34, 'N', 0),
(35, 'N', 0),
(36, 'N', 0),
(37, 'N', 0),
(38, 'N', 0),
(39, 'N', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_prod`
--

DROP TABLE IF EXISTS `ezsystem_results_prod`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_prod` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `yearall` varchar(4) DEFAULT NULL,
  `yearco` varchar(2) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  `tipodato` varchar(20) DEFAULT NULL,
  `orden` float DEFAULT NULL,
  `concepto` varchar(80) DEFAULT NULL,
  `catcomment` varchar(20) DEFAULT NULL,
  `comment1` varchar(1000) DEFAULT NULL,
  `comment2` varchar(1000) DEFAULT NULL,
  `comment3` varchar(1000) DEFAULT NULL,
  `comment4` varchar(1000) DEFAULT NULL,
  `comment5` varchar(1000) DEFAULT NULL,
  `comment6` varchar(1000) DEFAULT NULL,
  `comment7` varchar(1000) DEFAULT NULL,
  `comment8` varchar(1000) DEFAULT NULL,
  `comment9` varchar(1000) DEFAULT NULL,
  `comment10` varchar(1000) DEFAULT NULL,
  `comment11` varchar(1000) DEFAULT NULL,
  `comment12` varchar(1000) DEFAULT NULL,
  `meta` float DEFAULT NULL,
  `ponde` float DEFAULT NULL,
  `unmed` varchar(25) DEFAULT NULL,
  `acumulado` float DEFAULT NULL,
  `cumple` float DEFAULT NULL,
  `resultado` float DEFAULT NULL,
  `m1` float DEFAULT NULL,
  `m2` float DEFAULT NULL,
  `m3` float DEFAULT NULL,
  `m4` float DEFAULT NULL,
  `m5` float DEFAULT NULL,
  `m6` float DEFAULT NULL,
  `m7` float DEFAULT NULL,
  `m8` float DEFAULT NULL,
  `m9` float DEFAULT NULL,
  `m10` float DEFAULT NULL,
  `m11` float DEFAULT NULL,
  `m12` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_prod`
--

INSERT INTO `ezsystem_results_prod` (`id`, `region`, `unidad`, `yearall`, `yearco`, `activo`, `tipodato`, `orden`, `concepto`, `catcomment`, `comment1`, `comment2`, `comment3`, `comment4`, `comment5`, `comment6`, `comment7`, `comment8`, `comment9`, `comment10`, `comment11`, `comment12`, `meta`, `ponde`, `unmed`, `acumulado`, `cumple`, `resultado`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`) VALUES
(1, 'JAL', 'ZR', '2024', '24', 'SI', 'NUMERO', 1, 'Cirugias', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, NULL, 19, NULL, NULL),
(2, 'JAL', 'ZR', '2024', '24', 'SI', 'NUMERO', 2, 'Consultas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, NULL, NULL),
(3, 'JAL', 'ZR', '2024', '24', 'SI', 'NUMERO', 3, 'Ingresos por Tratatamiento Quirurgico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(4, 'JAL', 'ZR', '2024', '24', 'SI', 'NUMERO', 4, 'Ingresos por Tratamiento Medico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(5, 'JAL', 'ZR', '2024', '24', 'SI', 'NUMERO', 5, 'Cirugias Ambulatorias', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(6, 'JAL', 'ZR', '2024', '24', 'SI', 'NUMERO', 6, 'Cirugias NO Ambulatorias', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(7, 'JAL', 'ZR', '2024', '24', 'SI', 'PORCENTAJE', 7, 'Porcentaje de Ocupacion Hospitalaria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL, NULL),
(8, 'JAL', 'ZR', '2024', '24', 'SI', 'PROMEDIO', 8, 'Promedio de dias de estancia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_rh`
--

DROP TABLE IF EXISTS `ezsystem_results_rh`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_rh` (
  `idindi` int NOT NULL AUTO_INCREMENT,
  `idobdirg` varchar(20) DEFAULT NULL,
  `idobj` varchar(10) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `yearini` varchar(4) DEFAULT NULL,
  `gerdir` varchar(8) DEFAULT NULL,
  `useresp` varchar(15) DEFAULT NULL,
  `tipoindi` varchar(35) DEFAULT NULL,
  `reg` varchar(35) DEFAULT NULL,
  `enfx1` varchar(60) DEFAULT NULL,
  `enfx2` varchar(60) DEFAULT NULL,
  `nombre` varchar(350) DEFAULT NULL,
  `meta` float DEFAULT NULL,
  `pond` float DEFAULT NULL,
  `unmed` varchar(25) DEFAULT NULL,
  `tipodat` varchar(20) DEFAULT NULL,
  `acumulado` float DEFAULT NULL,
  `promedio` float DEFAULT NULL,
  `cumple` float DEFAULT NULL,
  `resultado` float DEFAULT NULL,
  `m1` float DEFAULT NULL,
  `m2` float DEFAULT NULL,
  `m3` float DEFAULT NULL,
  `m4` float DEFAULT NULL,
  `m5` float DEFAULT NULL,
  `m6` float DEFAULT NULL,
  `m7` float DEFAULT NULL,
  `m8` float DEFAULT NULL,
  `m9` float DEFAULT NULL,
  `m10` float DEFAULT NULL,
  `m11` float DEFAULT NULL,
  `m12` float DEFAULT NULL,
  `obs1` varchar(350) DEFAULT NULL,
  `obs2` varchar(350) DEFAULT NULL,
  `obs3` varchar(350) DEFAULT NULL,
  `obs4` varchar(350) DEFAULT NULL,
  `obs5` varchar(350) DEFAULT NULL,
  `obs6` varchar(350) DEFAULT NULL,
  `obs7` varchar(350) DEFAULT NULL,
  `obs8` varchar(350) DEFAULT NULL,
  `obs9` varchar(350) DEFAULT NULL,
  `obs10` varchar(350) DEFAULT NULL,
  `obs11` varchar(350) DEFAULT NULL,
  `obs12` varchar(350) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `userbaja` varchar(15) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idindi`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_rh`
--

INSERT INTO `ezsystem_results_rh` (`idindi`, `idobdirg`, `idobj`, `region`, `unidad`, `yearini`, `gerdir`, `useresp`, `tipoindi`, `reg`, `enfx1`, `enfx2`, `nombre`, `meta`, `pond`, `unmed`, `tipodat`, `acumulado`, `promedio`, `cumple`, `resultado`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `obs1`, `obs2`, `obs3`, `obs4`, `obs5`, `obs6`, `obs7`, `obs8`, `obs9`, `obs10`, `obs11`, `obs12`, `fechalta`, `useralta`, `vigencia`, `fechabaja`, `userbaja`, `activo`) VALUES
(1, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 10, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(2, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'TAREAS', 'TASK', '', '', 'TAREAS-COMPROMISOS CUMPLIDOS EN TIEMPO Y FORMA', 90, 30, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(3, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO APLICABLE A LA GESTION DE RECURSOS HUMANOS ', 90, 15, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(4, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'PLANTILLA', 'MANUAL', '', '', 'PLANTILLA NECESARIA, NORMATIVA Y REQUERIDA POR EL MODELO 50 DOCTORS CUBIERTA', 90, 17, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(5, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'SQE', 'MACRO', 'SQE', '', 'APEGO AL MODELO DE OPERATIVO DE RECURSOS HUMANOS (SQE)', 90, 10, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(6, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'RECLUTAMIENTO Y SELECCIÓN', 'ENFOQUE', 'ENFXSQE3', '', 'APEGO AL MODELO DE OPERATIVO DE RECLUTAMIENTO Y SELECCION', 90, 6, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(7, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 6, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(8, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'RH1', 'CAPACITACION', 'ENFOQUE', 'ENFXSQE6', '', 'APEGO AL MODELO DE CAPACITACION', 90, 6, 'PORCENTAJE', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_semaforo`
--

DROP TABLE IF EXISTS `ezsystem_results_semaforo`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_semaforo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(30) DEFAULT NULL,
  `unidad` varchar(30) DEFAULT NULL,
  `ejercicio` varchar(4) DEFAULT NULL,
  `versei` varchar(10) DEFAULT NULL,
  `intervalo` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `liminferior` float DEFAULT NULL,
  `limsuperior` float DEFAULT NULL,
  `fechact` varchar(10) DEFAULT NULL,
  `useralta` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_semaforo`
--

INSERT INTO `ezsystem_results_semaforo` (`id`, `region`, `unidad`, `ejercicio`, `versei`, `intervalo`, `liminferior`, `limsuperior`, `fechact`, `useralta`) VALUES
(1, 'JAL', 'ZR', '24', 'USUARIO', '1', 100, 200, '07/01/2024', NULL),
(2, 'JAL', 'ZR', '24', 'USUARIO', '2', 90, 100, '07/01/2024', ''),
(3, 'JAL', 'ZR', '24', 'USUARIO', '3', 80, 89.9999, '07/01/2024', ''),
(4, 'JAL', 'ZR', '24', 'USUARIO', '4', 70, 79.9999, '07/01/2024', ''),
(5, 'JAL', 'ZR', '24', 'USUARIO', '5', 0, 69.9999, '07/01/2024', ''),
(6, 'FIFTY', 'FIFTY', '24', 'USUARIO', '1', 100, 200, '07/01/2024', ''),
(7, 'FIFTY', 'FIFTY', '24', 'USUARIO', '2', 90, 100, '07/01/2024', ''),
(8, 'FIFTY', 'FIFTY', '24', 'USUARIO', '3', 80, 89.9999, '07/01/2024', ''),
(9, 'FIFTY', 'FIFTY', '24', 'USUARIO', '4', 70, 79.9999, '07/01/2024', ''),
(10, 'PUE', 'FIFTY', '24', 'USUARIO', '5', 0, 69.9999, '07/01/2024', ''),
(11, 'PUE', 'TM2', '24', 'USUARIO', '1', 100, 200, '07/01/2024', ''),
(12, 'PUE', 'TM2', '24', 'USUARIO', '2', 90, 100, '07/01/2024', ''),
(13, 'PUE', 'TM2', '24', 'USUARIO', '3', 80, 89.9999, '07/01/2024', ''),
(14, 'PUE', 'TM2', '24', 'USUARIO', '4', 70, 79.9999, '07/01/2024', ''),
(15, 'PUE', 'TM2', '24', 'USUARIO', '5', 0, 69.9999, '07/01/2024', ''),
(16, 'PUE', 'CMP', '24', 'USUARIO', '1', 100, 200, '07/01/2024', ''),
(17, 'PUE', 'CMP', '24', 'USUARIO', '2', 90, 100, '07/01/2024', ''),
(18, 'PUE', 'CMP', '24', 'USUARIO', '3', 80, 89.9999, '07/01/2024', ''),
(19, 'PUE', 'CMP', '24', 'USUARIO', '4', 70, 79.9999, '07/01/2024', ''),
(20, 'PUE', 'CMP', '24', 'USUARIO', '5', 0, 69.9999, '07/01/2024', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_results_ser`
--

DROP TABLE IF EXISTS `ezsystem_results_ser`;
CREATE TABLE IF NOT EXISTS `ezsystem_results_ser` (
  `idindi` int NOT NULL AUTO_INCREMENT,
  `idobdirg` varchar(20) DEFAULT NULL,
  `idobj` varchar(10) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `yearini` varchar(4) DEFAULT NULL,
  `gerdir` varchar(8) DEFAULT NULL,
  `useresp` varchar(15) DEFAULT NULL,
  `tipoindi` varchar(35) DEFAULT NULL,
  `reg` varchar(35) DEFAULT NULL,
  `enfx1` varchar(60) DEFAULT NULL,
  `enfx2` varchar(60) DEFAULT NULL,
  `nombre` varchar(350) DEFAULT NULL,
  `meta` float DEFAULT NULL,
  `pond` float DEFAULT NULL,
  `unmed` varchar(25) DEFAULT NULL,
  `tipodat` varchar(20) DEFAULT NULL,
  `acumulado` float DEFAULT NULL,
  `promedio` float DEFAULT NULL,
  `cumple` float DEFAULT NULL,
  `resultado` float DEFAULT NULL,
  `m1` float DEFAULT NULL,
  `m2` float DEFAULT NULL,
  `m3` float DEFAULT NULL,
  `m4` float DEFAULT NULL,
  `m5` float DEFAULT NULL,
  `m6` float DEFAULT NULL,
  `m7` float DEFAULT NULL,
  `m8` float DEFAULT NULL,
  `m9` float DEFAULT NULL,
  `m10` float DEFAULT NULL,
  `m11` float DEFAULT NULL,
  `m12` float DEFAULT NULL,
  `obs1` varchar(350) DEFAULT NULL,
  `obs2` varchar(350) DEFAULT NULL,
  `obs3` varchar(350) DEFAULT NULL,
  `obs4` varchar(350) DEFAULT NULL,
  `obs5` varchar(350) DEFAULT NULL,
  `obs6` varchar(350) DEFAULT NULL,
  `obs7` varchar(350) DEFAULT NULL,
  `obs8` varchar(350) DEFAULT NULL,
  `obs9` varchar(350) DEFAULT NULL,
  `obs10` varchar(350) DEFAULT NULL,
  `obs11` varchar(350) DEFAULT NULL,
  `obs12` varchar(350) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `userbaja` varchar(15) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idindi`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_results_ser`
--

INSERT INTO `ezsystem_results_ser` (`idindi`, `idobdirg`, `idobj`, `region`, `unidad`, `yearini`, `gerdir`, `useresp`, `tipoindi`, `reg`, `enfx1`, `enfx2`, `nombre`, `meta`, `pond`, `unmed`, `tipodat`, `acumulado`, `promedio`, `cumple`, `resultado`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `obs1`, `obs2`, `obs3`, `obs4`, `obs5`, `obs6`, `obs7`, `obs8`, `obs9`, `obs10`, `obs11`, `obs12`, `fechalta`, `useralta`, `vigencia`, `fechabaja`, `userbaja`, `activo`) VALUES
(1, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'SATISFACCION SOPORTE PACIENTE', 'MANUAL', '', '', 'PACIENTE SATISFECHO POR LOS SERVICIOS DE SOPORTE', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(2, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'COSTOS', 'MANUAL', '', '', 'CUMPLIMIENTO CON PRESUPUESTO DE GASTOS', 90, 15, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(3, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'GASTOS', 'ENFOQUE', 'ENFXALM2', 'ENFXALM5', 'CONTROL ADECUADO DE ENTRADAS Y SALIDAS DE INVENTARIOS', 90, 17, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(4, '1', '1', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'PLAZO PROMEDIO', 'MANUAL', '', '', 'CUMPLIMIENTO CON PLAZO PROMEDIO DE INVENTARIO AUTORIZADO (ALMACEN GENERAL)', 15, 5, 'PLAZO PROMEDIO', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(5, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'RUTINAS', 'ENFOQUE', 'ENFXGLD6', '', 'CUMPLIMIENTO CON RUTINAS GERENCIALES', 90, 9, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(6, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'TAREAS', 'TASK', '', '', 'CUMPLIMIENTO DE TAREAS-COMPROMISOS', 90, 30, 'PORCENTAJE', '', 83.33, 83.33, 92.5889, 27.7767, NULL, NULL, NULL, NULL, 83.33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(7, '2', '2', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'NOMX', 'MANUAL', '', '', 'CUMPLIMIENTO NORMATIVO Y SANITARIO', 90, 5, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(8, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'LIMPIEZA Y ROPERIA', 'ENFOQUE', 'ENFXPCI8', 'ENFXPCI10', 'APEGO AL MODELO OPERATIVO DE LIMPIEZA Y ROPERIA', 90, 2, 'PORCENTAJE', '', 20, 20, 22.2222, 0.444444, NULL, NULL, NULL, NULL, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(9, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'ALIMENTOS', 'ENFOQUE', 'ENFXPCI4', 'ENFXCOP4', 'APEGO AL MODELO OPERATIVO DE MANEJO DE ALIMENTOS', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(10, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'MANTENIMIENTO', 'FALLA', 'MANTENIMIENTO', '', 'APEGO AL MODELO OPERATIVO DE MANTENIMIENTO', 90, 5, 'PORCENTAJE', '', 100, 100, 111.111, 5.55556, NULL, NULL, NULL, NULL, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(11, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'FMS', 'MACRO', 'FMS', '', 'APEGO AL MODELO OPERATIVO DE GESTION Y SEGURIDAD DE INSTALACIONES, INSTRUMENTAL Y EQUIPO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(12, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'ALM', 'MACRO', 'ALM', '', 'APEGO AL MODELO OPERATIVO DE ALMACEN GENERAL', 90, 4, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(13, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'ADQUISICIONES', 'ENFOQUE', 'ENFXALM1', '', 'APEGO AL MODELO DE ADQUISICIONES', 90, 2, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI'),
(14, '3', '3', 'JAL', 'ZR', '24', 'GRJ1', 'SER2', 'INDUCCION', 'ENFOQUE', 'ENFXSQE5', '', 'APEGO AL MODELO OPERATIVO DE ORIENTACION ORGANIZACIONAL Y AL PUESTO', 90, 1, 'PORCENTAJE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'SI');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
