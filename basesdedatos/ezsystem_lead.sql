-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-04-2025 a las 19:15:15
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
-- Base de datos: `ezsystem_lead`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_lead_acuerdos`
--

DROP TABLE IF EXISTS `ezsystem_lead_acuerdos`;
CREATE TABLE IF NOT EXISTS `ezsystem_lead_acuerdos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(25) DEFAULT NULL,
  `unidad` varchar(25) DEFAULT NULL,
  `idmod` varchar(10) DEFAULT NULL,
  `idmod2` varchar(10) DEFAULT NULL,
  `nombremod` varchar(100) DEFAULT NULL,
  `unmed` varchar(5) DEFAULT NULL,
  `criterio` varchar(1) DEFAULT NULL,
  `critmin` float DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `autoriza` varchar(100) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `activo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_lead_acuerdos`
--

INSERT INTO `ezsystem_lead_acuerdos` (`id`, `region`, `unidad`, `idmod`, `idmod2`, `nombremod`, `unmed`, `criterio`, `critmin`, `valor`, `autoriza`, `fechalta`, `activo`) VALUES
(1, 'FIFTY', 'FIFTY', 'MOD2', 'MOD2a', 'CAPTACION DE NUEVOS MEDICOS/CIRUGIA UNO', '$', '1', NULL, 1200, 'PABLO AJA', '0000-00-00', '1'),
(2, 'FIFTY', 'FIFTY', 'MOD2', 'MOD2b', 'CAPTACION DE NUEVOS MEDICOS/CIRUGIA DOS', '$', '1', NULL, 1800, 'PABLO AJA', '0000-00-00', '1'),
(3, 'FIFTY', 'FIFTY', 'MOD2', 'MOD2c', 'CAPTACION DE NUEVOS MEDICOS/CIRUGIA DOS', '$', '1', NULL, 2500, 'PABLO AJA', '0000-00-00', '1'),
(4, 'FIFTY', 'FIFTY', 'MOD3', 'MOD3a', '2% POR CONVENIOS CON MONTO ASEGURADO', '%', '2', NULL, 0.02, 'PABLO AJA', '0000-00-00', '1'),
(5, 'FIFTY', 'FIFTY', 'MOD3', 'MOD3b', '4% POR CONVENIOS CON MONTO ASEGURADO', '%', '2', NULL, 0.04, 'PABLO AJA', '0000-00-00', '1'),
(6, 'FIFTY', 'FIFTY', 'MOD3', 'MOD3c', '6% POR CONVENIOS CON MONTO ASEGURADO', '%', '2', NULL, 0.06, 'PABLO AJA', '0000-00-00', '1'),
(7, 'FIFTY', 'FIFTY', 'MOD3', 'MOD3d', '10% POR CONVENIOS CON MONTO ASEGURADO', '%', '2', NULL, 0.1, 'PABLO AJA', '0000-00-00', '1'),
(8, 'FIFTY', 'FIFTY', 'MOD5', 'MOD5a', '4% DEL MES UNO AL SEIS/SIN MONTO FIJO', '%', '3', NULL, 0.04, 'PABLO AJA', '0000-00-00', '1'),
(9, 'FIFTY', 'FIFTY', 'MOD5', 'MOD5b', '6% DEL MES UNO AL SEIS/SIN MONTO FIJO', '%', '3', NULL, 0.06, 'PABLO AJA', '0000-00-00', '1'),
(10, 'FIFTY', 'FIFTY', 'MOD5', 'MOD5c', '2% DEL MES SIETE AL DOCE/SIN MONTO FIJO', '%', '3', NULL, 0.02, 'PABLO AJA', '0000-00-00', '1'),
(11, 'FIFTY', 'FIFTY', 'MOD5', 'MOD5d', '4% DEL MES SIETE AL DOCE/SIN MONTO FIJO', '%', '3', NULL, 0.04, 'PABLO AJA', '0000-00-00', '1'),
(12, 'FIFTY', 'FIFTY', 'MOD8', 'MOD8a', '4% A PARTIR DE PRODUCTIVIDAD MINIMA', '%', '4', NULL, 0.04, 'PABLO AJA', '0000-00-00', '1'),
(13, 'FIFTY', 'FIFTY', 'MOD8', 'MOD8b', '6% A PARTIR DE PRODUCTIVIDAD MINIMA', '%', '4', NULL, 0.06, 'PABLO AJA', '0000-00-00', '1'),
(14, 'FIFTY', 'FIFTY', 'MOD8', 'MOD8c', '10% A PARTIR DE PRODUCTIVIDAD MINIMA', '%', '4', NULL, 0.1, 'PABLO AJA', '0000-00-00', '1'),
(15, 'FIFTY', 'FIFTY', 'MOD9', 'MOD9a', '4% POR TOTAL DE LA FACTURA MENSUAL', '%', '5', NULL, 0.04, 'PABLO AJA', '0000-00-00', '1'),
(16, 'FIFTY', 'FIFTY', 'MOD9', 'MOD9b', '6% POR TOTAL DE LA FACTURA MENSUAL', '%', '5', NULL, 0.06, 'PABLO AJA', '0000-00-00', '1'),
(17, 'FIFTY', 'FIFTY', 'MOD9', 'MOD9c', '10% POR TOTAL DE LA FACTURA MENSUAL', '%', '5', NULL, 0.1, 'PABLO AJA', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_lead_acuerdos_bene`
--

DROP TABLE IF EXISTS `ezsystem_lead_acuerdos_bene`;
CREATE TABLE IF NOT EXISTS `ezsystem_lead_acuerdos_bene` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(25) DEFAULT NULL,
  `unidad` varchar(25) DEFAULT NULL,
  `criterio` varchar(1) DEFAULT NULL,
  `idmod2` varchar(10) DEFAULT NULL,
  `unmed` varchar(10) DEFAULT NULL,
  `critmin` float DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `bene` varchar(100) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `obs` varchar(500) DEFAULT NULL,
  `autoriza` varchar(100) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `activo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_lead_cat_precios`
--

DROP TABLE IF EXISTS `ezsystem_lead_cat_precios`;
CREATE TABLE IF NOT EXISTS `ezsystem_lead_cat_precios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(25) DEFAULT NULL,
  `unidad` varchar(25) DEFAULT NULL,
  `especialidad` varchar(50) DEFAULT NULL,
  `procedimiento` varchar(100) DEFAULT NULL,
  `costo` float DEFAULT NULL,
  `venta` float DEFAULT NULL,
  `margenpo1` float DEFAULT NULL,
  `margenmo1` float DEFAULT NULL,
  `preciohosp` float DEFAULT NULL,
  `margenpo2` float DEFAULT NULL,
  `margenmo2` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_lead_cat_precios`
--

INSERT INTO `ezsystem_lead_cat_precios` (`id`, `region`, `unidad`, `especialidad`, `procedimiento`, `costo`, `venta`, `margenpo1`, `margenmo1`, `preciohosp`, `margenpo2`, `margenmo2`) VALUES
(1, 'JAL', 'ZR', 'CIRUGIA GENERAL', 'COLECISTECTOMIA LAPAROSCOPICA', 21867, 26909.6, 0.19, 5042.54, 29062.3, 0.25, 7195.31),
(2, 'JAL', 'ZR', 'CIRUGIA GENERAL', 'HEMORROIDECTOMIA INTERNA O EXTERNA', 16966.4, 20538.8, 0.17, 3572.37, 22181.9, 0.24, 5215.48),
(3, 'JAL', 'ZR', 'CIRUGIA GENERAL', 'HERNIOPLASTIA INGUINAL LAPOROSCOPICA CON MALLA DE HASTA 15 CM', 33861, 37531.1, 0.1, 3670.14, 43160.8, 0.22, 9299.81),
(4, 'JAL', 'ZR', 'CIRUGIA GENERAL', 'HERNIOPLASTIA HIATAL', 18331.4, 21942.6, 0.16, 3611.16, 23698, 0.23, 5366.57),
(5, 'JAL', 'ZR', 'GINECOLOGIA Y OBSTETRICIA', 'HISTERECTOMIA ABIERTA', 17813.5, 21640, 0.18, 3826.49, 23371.2, 0.24, 5557.69),
(6, 'JAL', 'ZR', 'OTRORRINOLARINGOLOGIA', 'RINOPLASTIA ESTETICA O FUNCIONAL DESDE', 16798.3, 20398.2, 0.18, 3599.93, 22030.1, 0.24, 5231.79),
(7, 'JAL', 'ZR', 'UROLOGIA', 'RTUP BIPOLAR', 26454.9, 30476.9, 0.13, 4022.01, 35048.5, 0.25, 8593.55),
(8, 'JAL', 'ZR', 'GINECOLOGIA Y OBSTETRICIA', 'HISTERECTOMIA LAPAROSCOPICA', 22947.2, 28313.7, 0.19, 5366.58, 30578.8, 0.25, 7631.68),
(9, 'JAL', 'ZR', 'ORTOPEDIA Y TRAUMATOLOGIA', 'ARSTROSCOPIA DE HOMBRO SIMPLE', 24009.6, 28478.2, 0.16, 4468.61, 30756.5, 0.22, 6746.87),
(10, 'JAL', 'ZR', 'ORTOPEDIA Y TRAUMATOLOGIA', 'ARSTROSCOPIA DE RODILLA SIMPLE', 23739.4, 28127, 0.16, 4387.56, 30377.2, 0.22, 6637.72),
(11, 'JAL', 'ZR', 'ORTOPEDIA Y TRAUMATOLOGIA', 'ARTROPLASTIA DE RODILLA', 63052.4, 80489.4, 0.22, 17437, 86928.5, 0.27, 23876.1),
(12, 'JAL', 'ZR', 'GINECOLOGIA Y OBSTETRICIA', 'MIOMECTOMIA LAPAROSCOPICA', 36723.8, 40472.5, 0.09, 3748.68, 46543.4, 0.21, 9819.55),
(13, 'JAL', 'ZR', 'CIRUGIA GENERAL', 'FUNDUPLICATURA NISSEN', 23040.3, 28434.9, 0.19, 5394.54, 29856.6, 0.23, 6816.28),
(14, 'JAL', 'ZR', 'OTRORRINOLARINGOLOGIA', 'AMIGDALECTOMIA AMBULATORIA', 15024, 18091.7, 0.17, 3067.64, 19539, 0.23, 4514.97),
(15, 'JAL', 'ZR', 'NEUROCIRUGIA', 'INSTRUMENTACION LUMBAR', 21455, 26374, 0.19, 4918.94, 27692.7, 0.23, 6237.64),
(16, 'JAL', 'ZR', 'CIRUGIA GENERAL', 'HERNIOPLASTIA INGUINAL ABIERTA CON MALLA DE HASTA 15 CM', 18331.4, 21942.6, 0.16, 3611.16, 23698, 0.23, 5366.57),
(17, 'JAL', 'ZR', 'CIRUGIA GENERAL', 'HERNIOPLASTIA INGUINAL ABIERTA CON MALLA DE HASTA 30 CM', 19601.1, 23212.8, 0.16, 3611.72, 25069.9, 0.22, 5468.75),
(18, 'JAL', 'ZR', 'CIRUGIA GENERAL', 'HERNIOPLASTIA INGUINAL ABIERTA CON PROLENE MESH 15 CM', 21402.7, 25014.4, 0.14, 3611.72, 27515.8, 0.22, 6113.16),
(19, 'JAL', 'ZR', 'CIRUGIA GENERAL', 'HERNIOPLASTIA INGUINAL ABIERTA CON PROLENE MESH 30 CM', 26950.5, 30562.8, 0.12, 3612.27, 34230.3, 0.21, 7279.8),
(20, 'JAL', 'ZR', 'GINECOLOGIA Y OBSTETRICIA', 'QUISTECTOM', 20896.9, 25648.4, 0.19, 4751.5, 28213.2, 0.26, 7316.34),
(21, 'JAL', 'ZR', 'GINECOLOGIA Y OBSTETRICIA', 'HISTERECTOMIA LAPAROSCOPICA', 22945.2, 28313.7, 0.19, 5368.58, 31145.1, 0.26, 8199.95),
(22, 'JAL', 'ZR', 'GINECOLOGIA Y OBSTETRICIA', 'OTB ABIERTA', 9171.8, 11370.9, 0.19, 2199.11, 12508, 0.27, 3336.2),
(23, 'JAL', 'ZR', 'GINECOLOGIA Y OBSTETRICIA', 'OTB LAPAROSCOPICA', 15001, 18288.5, 0.18, 3287.53, 20117.4, 0.25, 5116.38),
(24, 'JAL', 'ZR', 'UROLOGIA', 'RTUP MONOPOLAR', 17754.9, 21775.6, 0.18, 4020.71, 23953.2, 0.26, 6198.27),
(25, 'JAL', 'ZR', 'UROLOGIA', 'VASECTOMIA', 11176.7, 13316.9, 0.16, 2140.24, 14648.6, 0.24, 3471.93),
(26, 'JAL', 'ZR', 'UROLOGIA', 'CIRCUNSICI', 11737.4, 14045.8, 0.16, 2308.45, 15450.4, 0.24, 3713.03),
(27, 'JAL', 'ZR', 'CIRUGIA GENERAL', 'BIOPSIA RENAL', 13419.6, 16232.7, 0.17, 2813.12, 17856, 0.25, 4436.39),
(28, 'JAL', 'ZR', 'ORTOPEDIA Y TRAUMATOLOGIA', 'ARTROSCOPIA DE RODILLA CON SUTURA', 31859.4, 36247, 0.12, 4387.56, 40596.6, 0.22, 8737.2),
(29, 'JAL', 'ZR', 'ORTOPEDIA Y TRAUMATOLOGIA', 'ARTROSCOPIA DE RODILLA CON LIGAMENTO CRUZADO', 40559.4, 44947, 0.1, 4387.56, 51689, 0.22, 11129.6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_lead_hist_coment`
--

DROP TABLE IF EXISTS `ezsystem_lead_hist_coment`;
CREATE TABLE IF NOT EXISTS `ezsystem_lead_hist_coment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(25) DEFAULT NULL,
  `unidad` varchar(25) DEFAULT NULL,
  `etapa` varchar(2) DEFAULT NULL,
  `tipotarjeta` varchar(10) DEFAULT NULL,
  `idtarjeta` varchar(20) DEFAULT NULL,
  `tipocom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `coment` varchar(3000) DEFAULT NULL,
  `fechacoment` date DEFAULT NULL,
  `diapro` varchar(2) DEFAULT NULL,
  `mespro` varchar(2) DEFAULT NULL,
  `yearpro` varchar(2) DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `fechalta` varchar(15) DEFAULT NULL,
  `fechamod` varchar(15) DEFAULT NULL,
  `usermod` varchar(15) DEFAULT NULL,
  `activo` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nombrearchivo` varchar(500) DEFAULT NULL,
  `ruta` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_lead_hist_coment`
--

INSERT INTO `ezsystem_lead_hist_coment` (`id`, `region`, `unidad`, `etapa`, `tipotarjeta`, `idtarjeta`, `tipocom`, `coment`, `fechacoment`, `diapro`, `mespro`, `yearpro`, `useralta`, `fechalta`, `fechamod`, `usermod`, `activo`, `nombrearchivo`, `ruta`) VALUES
(1, 'JAL', 'ZR', '1', 'EMPRESA', '1', 'VIDEOLLAMADA', 'VIDEOLLAMADA REALIZADA CON SEGUROS FIFTY', '2024-10-21', '21', '10', '24', 'XION', '2024-10-21', NULL, NULL, 'SI', '50D.png', '../DOCTOS/TRATOS/50D.png'),
(2, 'JAL', 'ZR', '1', 'EMPRESA', '1', 'WHATSAPP', 'AAAAA', '2024-10-23', '23', '10', '24', 'XION', '2024-10-21', NULL, NULL, 'SI', 'Brochure EZ SYSTEM.png', '../DOCTOS/TRATOS/Brochure EZ SYSTEM.png'),
(3, 'JAL', 'ZR', '1', 'PACIENTE', '1', 'LLAMADA', 'PRUEBA COMENT LLAMADA', '2024-10-23', '23', '10', '24', 'XION', '2024-10-22', NULL, NULL, 'SI', NULL, NULL),
(4, 'JAL', 'ZR', '1', 'PACIENTE', '1', 'DEL CLIENTE', 'PRUEBA VISITA DEL CLIENTE', '2024-10-31', '31', '10', '24', 'XION', '2024-10-22', NULL, NULL, 'SI', NULL, NULL),
(5, 'JAL', 'ZR', '1', 'PACIENTE', '1', 'AL CLIENTE', 'PRUEBA VISITA LA CLIENTE', '2024-10-31', '31', '10', '24', 'XION', '2024-10-22', NULL, NULL, 'SI', NULL, NULL),
(9, 'JAL', 'ZR', '1', 'PACIENTE', '1', 'VIDEOLLAMADA', 'PRUEBA VIDEO', '2024-10-31', '31', '10', '24', 'XION', '2024-10-24', NULL, NULL, 'SI', NULL, NULL),
(10, 'JAL', 'ZR', '1', 'PACIENTE', '1', 'OTROS', 'OTROS COM', '2024-10-30', '30', '10', '24', 'XION', '2024-10-24', NULL, NULL, 'SI', NULL, NULL),
(11, 'JAL', 'ZR', '1', 'PACIENTE', '1', 'WHATSAPP', 'PRUEBA WHATS', '2024-10-25', '25', '10', '24', 'XION', '2024-10-24', NULL, NULL, 'SI', 'Brochure EZ SYSTEM.png', '../DOCTOS/TRATOS/Brochure EZ SYSTEM.png'),
(12, 'JAL', 'ZR', '2', 'PACIENTE', '1', 'LLAMADA', 'PRUEBA LLAMADA 1', '2024-10-24', '24', '10', '24', 'XION', '2024-10-24', NULL, NULL, 'SI', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_lead_prospectos_emp`
--

DROP TABLE IF EXISTS `ezsystem_lead_prospectos_emp`;
CREATE TABLE IF NOT EXISTS `ezsystem_lead_prospectos_emp` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(25) DEFAULT NULL,
  `unidad` varchar(25) DEFAULT NULL,
  `categoria` varchar(25) DEFAULT NULL,
  `tipoco` varchar(15) DEFAULT NULL,
  `nombreco` varchar(100) DEFAULT NULL,
  `acron` varchar(15) DEFAULT NULL,
  `especialidad` varchar(60) DEFAULT NULL,
  `tel1` varchar(15) DEFAULT NULL,
  `nombrecontacto` varchar(25) DEFAULT NULL,
  `tel2` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `tipomo` varchar(10) DEFAULT NULL,
  `fuente` varchar(50) DEFAULT NULL,
  `finterna` varchar(50) DEFAULT NULL,
  `useresp` varchar(15) DEFAULT NULL,
  `obs` varchar(2000) DEFAULT NULL,
  `estatus` varchar(20) DEFAULT NULL,
  `etapa` varchar(20) DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `autoriza` varchar(15) DEFAULT NULL,
  `fechautoriza` date DEFAULT NULL,
  `autorizado` varchar(1) DEFAULT NULL,
  `activo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_lead_prospectos_emp`
--

INSERT INTO `ezsystem_lead_prospectos_emp` (`id`, `region`, `unidad`, `categoria`, `tipoco`, `nombreco`, `acron`, `especialidad`, `tel1`, `nombrecontacto`, `tel2`, `email`, `valor`, `tipomo`, `fuente`, `finterna`, `useresp`, `obs`, `estatus`, `etapa`, `useralta`, `fechalta`, `autoriza`, `fechautoriza`, `autorizado`, `activo`) VALUES
(1, 'JAL', 'ZR', 'ORGANIZACION PRIVADA', NULL, 'FIFTY', 'FIFTY', 'NO APLICA', 'NA', 'NA', 'NA', 'NA', NULL, 'NMX', 'OTRA', 'PAF', 'GEM2', '\r\n                            ', '0', '0', 'XION', '2024-09-19', NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_lead_prospectos_px`
--

DROP TABLE IF EXISTS `ezsystem_lead_prospectos_px`;
CREATE TABLE IF NOT EXISTS `ezsystem_lead_prospectos_px` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(25) DEFAULT NULL,
  `unidad` varchar(25) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `tel1` varchar(15) DEFAULT NULL,
  `procedimiento` varchar(150) DEFAULT NULL,
  `especialidad` varchar(60) DEFAULT NULL,
  `fuente` varchar(50) DEFAULT NULL,
  `useresp` varchar(15) DEFAULT NULL,
  `obs` varchar(2000) DEFAULT NULL,
  `estatus` varchar(20) DEFAULT NULL,
  `etapa` varchar(20) DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `activo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_lead_prospectos_px`
--

INSERT INTO `ezsystem_lead_prospectos_px` (`id`, `region`, `unidad`, `nombre`, `tel1`, `procedimiento`, `especialidad`, `fuente`, `useresp`, `obs`, `estatus`, `etapa`, `useralta`, `fechalta`, `activo`) VALUES
(1, 'JAL', 'ZR', 'PABLO MONTERO', '2562582255', 'COLESISTECTOMIA POR LAPAROSCOPIA', 'CIRUGIA GENERAL', 'WHATSAPP', 'VIC1', '\r\n                            ', '0', '0', 'XION', '2024-10-12', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_lead_tareas`
--

DROP TABLE IF EXISTS `ezsystem_lead_tareas`;
CREATE TABLE IF NOT EXISTS `ezsystem_lead_tareas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(20) DEFAULT NULL,
  `unidad` varchar(20) DEFAULT NULL,
  `etapa` varchar(1) DEFAULT NULL,
  `tipotarj` varchar(15) DEFAULT NULL,
  `idtarj` varchar(15) DEFAULT NULL,
  `fechahoy` varchar(10) DEFAULT NULL,
  `tarea` varchar(3000) DEFAULT NULL,
  `prioridad` varchar(10) DEFAULT NULL,
  `responsabletarea` varchar(255) DEFAULT NULL,
  `fechaprogramada` date DEFAULT NULL,
  `yearfinpro` varchar(4) DEFAULT NULL,
  `mesfinpro` varchar(2) DEFAULT NULL,
  `diafinpro` varchar(2) DEFAULT NULL,
  `observaciones` varchar(3000) DEFAULT NULL,
  `estatus` varchar(60) DEFAULT 'EN_CURSO',
  `fechacumple` date DEFAULT NULL,
  `diacu` varchar(2) DEFAULT NULL,
  `mescu` varchar(2) DEFAULT NULL,
  `yearcu` varchar(2) DEFAULT NULL,
  `observacionescumple` varchar(3000) DEFAULT NULL,
  `usuarioregistra` varchar(10) DEFAULT NULL,
  `usertask` varchar(20) DEFAULT NULL,
  `app` varchar(25) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_lead_tareas`
--

INSERT INTO `ezsystem_lead_tareas` (`id`, `region`, `unidad`, `etapa`, `tipotarj`, `idtarj`, `fechahoy`, `tarea`, `prioridad`, `responsabletarea`, `fechaprogramada`, `yearfinpro`, `mesfinpro`, `diafinpro`, `observaciones`, `estatus`, `fechacumple`, `diacu`, `mescu`, `yearcu`, `observacionescumple`, `usuarioregistra`, `usertask`, `app`, `activo`) VALUES
(1, 'JAL', 'ZR', '1', 'EMPRESA', '1', '2024-10-20', '´RUEBA', 'ALTA', 'CARLOS REAL', '2024-10-22', '24', '10', '22', '', 'EN CURSO', NULL, NULL, NULL, NULL, NULL, 'XION', 'VIC', 'lead', 'SI'),
(2, 'JAL', 'ZR', '1', 'EMPRESA', '1', '2024-10-20', 'PRUEBA DOS', 'ALTA', 'CARLOS REAL', '2024-10-31', '24', '10', '31', 'AA', 'EN CURSO', NULL, NULL, NULL, NULL, NULL, 'XION', 'VIC', 'lead', 'SI'),
(3, 'JAL', 'ZR', '1', 'EMPRESA', '1', '2024-10-20', 'PRUEBA TRES', 'MEDIA', 'CARLOS REAL', '2024-10-29', '24', '10', '29', 'AAA', 'EN CURSO', NULL, NULL, NULL, NULL, NULL, 'XION', 'VIC', 'lead', 'SI'),
(4, 'JAL', 'ZR', '1', 'EMPRESA', '1', '2024-10-21', 'PRUEBA 3', 'ALTA', 'CARLOS REAL', '2024-10-30', '24', '10', '30', 'WWW', 'EN CURSO', NULL, NULL, NULL, NULL, NULL, 'XION', 'VIC', 'lead', 'SI'),
(5, 'JAL', 'ZR', '1', 'PACIENTE', '1', '2024-10-24', 'PRUEBA TAREA', 'ALTA', 'CARLOS REAL', '2024-10-24', '24', '10', '24', '', 'EN CURSO', NULL, NULL, NULL, NULL, NULL, 'XION', 'VIC', 'lead', 'SI'),
(6, 'JAL', 'ZR', '1', 'PACIENTE', '1', '2024-10-24', 'PRUEBA TAREA', 'ALTA', 'CARLOS REAL', '2024-10-24', '24', '10', '24', '', 'EN CURSO', NULL, NULL, NULL, NULL, NULL, 'XION', 'VIC', 'lead', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_lead_tarj_emp`
--

DROP TABLE IF EXISTS `ezsystem_lead_tarj_emp`;
CREATE TABLE IF NOT EXISTS `ezsystem_lead_tarj_emp` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(25) DEFAULT NULL,
  `unidad` varchar(25) DEFAULT NULL,
  `categoria` varchar(25) DEFAULT NULL,
  `idemp` varchar(5) DEFAULT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `red` varchar(60) DEFAULT NULL,
  `valorestimado` float DEFAULT NULL,
  `valorfin` float DEFAULT NULL,
  `tipomo` varchar(5) DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `fechamod` date DEFAULT NULL,
  `usermod` varchar(15) DEFAULT NULL,
  `estatus` varchar(1) DEFAULT NULL,
  `useresp` varchar(20) DEFAULT NULL,
  `activo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_lead_tarj_px`
--

DROP TABLE IF EXISTS `ezsystem_lead_tarj_px`;
CREATE TABLE IF NOT EXISTS `ezsystem_lead_tarj_px` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(25) DEFAULT NULL,
  `unidad` varchar(25) DEFAULT NULL,
  `idpx` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `procedimiento` varchar(200) DEFAULT NULL,
  `especialidad` varchar(200) DEFAULT NULL,
  `valorestimado` float DEFAULT NULL,
  `valorfin` float DEFAULT NULL,
  `tipomo` varchar(5) DEFAULT NULL,
  `useralta` varchar(15) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `fechamod` date DEFAULT NULL,
  `usermod` varchar(15) DEFAULT NULL,
  `estatus` varchar(1) DEFAULT NULL,
  `useresp` varchar(20) DEFAULT NULL,
  `activo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_lead_tarj_px`
--

INSERT INTO `ezsystem_lead_tarj_px` (`id`, `region`, `unidad`, `idpx`, `nombre`, `procedimiento`, `especialidad`, `valorestimado`, `valorfin`, `tipomo`, `useralta`, `fechalta`, `fechamod`, `usermod`, `estatus`, `useresp`, `activo`) VALUES
(1, 'JAL', 'ZR', '1', 'PABLO MONTERO', 'COLESISTECTOMIA POR LAPAROSCOPIA', 'CIRUGIA GENERAL', 45000, NULL, 'MXN', 'XION', '2024-11-18', NULL, NULL, '2', 'VIC1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ezsystem_lead_users`
--

DROP TABLE IF EXISTS `ezsystem_lead_users`;
CREATE TABLE IF NOT EXISTS `ezsystem_lead_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `region` varchar(25) DEFAULT NULL,
  `unidad` varchar(25) DEFAULT NULL,
  `rol` varchar(25) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `posicion` varchar(50) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `comision` varchar(2) DEFAULT NULL,
  `useralta` varchar(10) DEFAULT NULL,
  `fechalta` date DEFAULT NULL,
  `activo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ezsystem_lead_users`
--

INSERT INTO `ezsystem_lead_users` (`id`, `region`, `unidad`, `rol`, `nombre`, `posicion`, `user`, `comision`, `useralta`, `fechalta`, `activo`) VALUES
(1, 'JAL', 'ZR', 'ADMIN', 'PABLO AJA', 'GERENCIA REGIONAL', 'PAF', NULL, 'XION', '0000-00-00', '1'),
(2, 'JAL', 'ZR', 'ADMIN', 'JUAN CARLOS FUENTES', 'GERENCIA CORPORATIVA', 'XION', NULL, 'XION', '0000-00-00', '1'),
(3, 'JAL', 'ZR', 'COM', 'CARLOS REAL', 'VINCULACION COMERCIAL', 'VIC1', 'SI', 'VIC', '0000-00-00', '1'),
(4, 'JAL', 'ZR', 'GEM', 'REYNA BARRERA', 'GERENCIA MEDICA', 'GEM2', NULL, 'XION', '0000-00-00', '1'),
(5, 'JAL', 'ZR', 'GEA', 'BRENDA MARTINEZ', 'GERENCIA ADMINISTRATIVA', 'GEA1', NULL, 'XION', '0000-00-00', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
