-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2024 a las 22:25:51
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `no_cli` varchar(10) NOT NULL,
  `cliente` varchar(80) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `cli_telefono` text NOT NULL COMMENT 'Numero del teléfono del cliente',
  `cant_personas` int(11) DEFAULT NULL,
  `cant_autos` int(11) DEFAULT NULL,
  `vendedor` varchar(70) DEFAULT NULL COMMENT 'vendedor',
  `fecha_visita` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'captura la hora y fecha de visita del cliente a la feria'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`no_cli`, `cliente`, `correo`, `cli_telefono`, `cant_personas`, `cant_autos`, `vendedor`, `fecha_visita`) VALUES
('000001', 'FERRETERIA ENRIQUE, S.A.', '', '', 0, 0, 'DANIEL NIETO', '0000-00-00 00:00:00'),
('000002', 'JURADO Y JURADO, S. A.', 'eserracin@franklinjurado.com', '', 0, 0, 'KATHERINE DUQUE', '0000-00-00 00:00:00'),
('000003', 'IMP. RICAMAR, S.A. **04** (99 LOS ANDES) CM', 'cxp@super99.com', '', 0, 0, 'MIGUEL ALVAEZ', '0000-00-00 00:00:00'),
('000004', 'RODELAG', 'cxp@super99.com', '', 0, 0, 'JESUS V. PRINC', '0000-00-00 00:00:00'),
('000012', 'DORADO RETAIL, S.A. (DOIT CENTER)', 'prontopago@doitcenter.com.pa', '', 0, 0, 'JESUS V. PRINC', '0000-00-00 00:00:00'),
('000013', 'TKL IMPORT & EXPORT, S. A. (Super Materiales)  NO CK', 'janeth.hou@supermateriales.net', '', 0, 0, 'CARLOS MORALES', '0000-00-00 00:00:00'),
('000014', 'NIEROSA, S. A.', 'ventas.nierosa@gmail.com', '', 0, 0, 'MICHAELL ESPINOZA', '0000-00-00 00:00:00'),
('000015', 'MATERIALES MAN, S.A.', 'fatao_man@yahoo.com', '', 0, 0, 'DANIEL NIETO', '0000-00-00 00:00:00'),
('000019', 'CASA CHEONG', 'casacheong@hotmail.com', '', 0, 0, 'DANIEL NIETO', '0000-00-00 00:00:00'),
('000103', 'COMPAÑIA GOLY, S.A. (Machetazo Santiago)', '', '', 0, 0, 'MIGUEL ALVAEZ', '0000-00-00 00:00:00'),
('000104', 'DISTRIBUIDORA M.S.B.   (NO CK.)', '', '', 0, 0, 'WILBERTO JARAMILLO', '0000-00-00 00:00:00'),
('000105', 'FERRETERIA DORADO', 'admidoradoplus@gmail.com', '', 0, 0, 'DANIEL NIETO', '0000-00-00 00:00:00'),
('000106', 'TIENDA AGROPECUARIA, S.A.', '', '', 0, 0, 'DANIEL NIETO', '0000-00-00 00:00:00'),
('000107', 'MATERIALES CONIVAN S A', '', '', 0, 0, 'JOSE RODRIGUEZ', '0000-00-00 00:00:00'),
('000108', 'ALUVIDRIO, S.A.', '', '', 0, 0, 'CALL CENTER', '0000-00-00 00:00:00'),
('000109', 'FERRETERIA EL DORADO', '', '', 0, 0, 'DANIEL NIETO', '0000-00-00 00:00:00'),
('000111', 'VENTANAS DEL MAR, S.A.', '', '', 0, 0, 'DIMAS GUERRA', '0000-00-00 00:00:00'),
('000112', 'EL MACHETAZO, S. A.  ( AVE. CENTRAL )', '', '', 0, 0, 'MIGUEL ALVAEZ', '0000-00-00 00:00:00'),
('000113', 'HYPER TUNING SHOP', '', '', 0, 0, 'CALL CENTER', '0000-00-00 00:00:00'),
('000114', 'COMPAÑIA GOLY, S.A.  (Calidonia)', '', '', 0, 0, 'MIGUEL ALVAEZ', '0000-00-00 00:00:00'),
('000115', 'MATERIALES MARELYS', '', '', 0, 0, 'MIGUEL ALVAEZ', '0000-00-00 00:00:00'),
('000116', 'FERRETERIA Y MATERIALES MAYKOL', '', '', 0, 0, 'JOSE POLO', '0000-00-00 00:00:00'),
('000117', 'FERRETERIA PRAVIS ****CERRO****', '', '', 0, 0, 'CALL CENTER', '0000-00-00 00:00:00'),
('000118', 'COMOSA', 'correo@correo.com', '', 0, 0, 'CALL CENTER', '0000-00-00 00:00:00'),
('000119', 'COOP. DE SERV. MULTIPLES EL PROGRESO R.L', '', '', 0, 0, 'JOSE RODRIGUEZ', '0000-00-00 00:00:00'),
('000120', 'PILLAR CONTRUCTION, S.A.', '', '', 0, 0, 'DIMAS GUERRA', '0000-00-00 00:00:00'),
('000121', 'COMPAÑIA GOLY, S.A.  (San Miguelito)', '', '', 0, 0, 'MIGUEL ALVAEZ', '0000-00-00 00:00:00'),
('000122', 'CASA LORENZO CHAN (002) ', '', '0', 0, 0, 'CALL CENTER', '0000-00-00 00:00:00'),
('000124', 'FERRET. Y DIST. JEAN', '', '', 0, 0, 'CALL CENTER', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `co_ven` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`co_ven`, `nombre`, `correo`) VALUES
(126, 'AQUILES GONZALEZ', 'agonzalez@abolu.com'),
(128, 'BEN OBDIVALER ', 'oben@abolu.com'),
(13, 'SAMUEL MORENO', 'vendedor05@abolu.com'),
(132, 'CARLOS MORALES', 'moralesc@abolu.com'),
(14, 'WILBERTO JARAMILLO', 'wjaramillo@abolu.com'),
(16, 'DANIEL NIETO', 'dnieto@abolu.com'),
(18, 'JOSE POLO', 'vendedor22@abolu.com'),
(19, 'CARLOS ESPINOZA', 'vendedor09@abolu.com'),
(2, 'RORIS VILLARREAL', 'rvillarreal@abolu.com'),
(21, 'MIGUEL ALVAEZ', 'vendedor04@abolu.com'),
(34, 'JOSE RODRIGUEZ', 'vendedor12@abolu.com'),
(35, 'EDWIN NUÑEZ', 'vendedor14@abolu.com'),
(6, 'JORGE SANCHEZ', 'vendedor14@abolu.com'),
(64, 'GABRIEL APARICIO', 'gaparicio@abolu.com'),
(75, 'MOISES VASQUEZ', 'mvasquez@abolu.com'),
(9, 'DIMAS GUERRA', 'ventas01@abolu.com'),
(91, 'TOMY SERRANO', 'vendedor06@abolu.com'),
(92, 'KATHERINE DUQUE', 'vendedor07@abolu.com'),
(94, 'JOSE CHAVARRIA', 'jchavarria@abolu.com'),
(98, 'JESUS V. PRINC', 'vprinc@abolu.com'),
(98, 'KEVIN ELLIS', ''),
(8, 'NICOLAS MENDOZA', 'vendedor15@abolu.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`no_cli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
