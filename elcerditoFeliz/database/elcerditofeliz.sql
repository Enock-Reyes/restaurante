-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: cerditofeliz.accountsupportmysql.com 
-- Tiempo de generación: 27-09-2017 a las 20:22:52
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `elcerditofeliz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Nombre` varchar(30) NOT NULL,
  `Clave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Nombre`, `Clave`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('Marcos', 'c5e3539121c4944f2bbe097b425ee774'),
('oscar', 'f156e7995d521f30e6c59a3d6c75e1e5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodegas`
--

CREATE TABLE `bodegas` (
  `codigoBodega` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `codigoProveedor` int(20) NOT NULL,
  `codigoMarca` int(20) NOT NULL,
  `unidad` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precioUnitario` decimal(10,2) DEFAULT NULL,
  `precioTotal` decimal(10,2) DEFAULT NULL,
  `Entrada` varchar(15) DEFAULT NULL,
  `Salida` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bodegas`
--

INSERT INTO `bodegas` (`codigoBodega`, `idProducto`, `codigoProveedor`, `codigoMarca`, `unidad`, `cantidad`, `precioUnitario`, `precioTotal`, `Entrada`, `Salida`) VALUES
(1, 1, 1, 2, 'KG', 80, '20.50', '1640.00', 'SI', 'NO'),
(2, 2, 2, 5, 'LB', 200, '17.50', '3500.00', 'SI', 'NO'),
(8, 3, 5, 1, 'LB', 10, '5.00', '50.00', 'SI', 'NO'),
(12, 4, 4, 1, 'LB', 20, '5.00', '100.00', 'SI', 'NO'),
(13, 3, 5, 1, 'LB', 100, '2.00', '200.00', 'SI', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `CodigoCat` int(20) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CodigoCat`, `Nombre`, `Descripcion`) VALUES
(1, 'Desayuno', 'Platillos Mañaneros.'),
(2, 'Almuerzo', 'Platillos a Gusto del Cliente.'),
(3, 'Cena', 'Platillos Diurnos.'),
(5, 'Infantil', 'Platillo Infantil.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `codigoCliente` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codigoCliente`, `nombre`, `apellido`, `email`, `password`, `direccion`, `telefono`) VALUES
(1, 'Miguel', 'Cardoza', 'miguel@gmail.com', '3015c150131e23cd8921b35036114ab1b74aeca7', 'San salvador, colonia medica', '7324-5678'),
(2, 'Oscar', 'perez', 'oskarjandro@gmail.com', 'f156e7995d521f30e6c59a3d6c75e1e5', 'Ciudad delgado colonia las brisas.', '7436-5730'),
(4, 'Raul', 'Gomez', 'raull@hotmail.com', '8b52b6b714585648fd300da0dbc0fa0678553280', 'San salvador, la bernal.', '7523-7810'),
(5, 'Marlon', 'Chavez', 'marlon@gmail.com', 'c8f759a539858b08e9e46251b1ae9f09', 'Ilobasco, cabanas', '7300-2078'),
(6, 'Enock', 'Reyes', 'enock@gmail.com', 'c7b61b2426bde7d41b1b864c204d97c3c446df3e', 'san salvador', '7320-3450'),
(7, 'Omar', 'Umaña', 'Omar@gmail.com', '2286a560d222130640bdcb568eb9288897ad6540', 'san salvador, la olimpica', '7345-9012'),
(10, 'leonel', ' jovel', 'oskarpj@hotmail.com', 'ce15c49597ee27e06d97fcdd9ad4989c', 'San Salvador ', '78541234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentarios` int(11) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mensaje` varchar(100) DEFAULT NULL,
  `codigoCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idComentarios`, `usuario`, `fecha`, `mensaje`, `codigoCliente`) VALUES
(1, 'oscar', '2017-09-04 06:00:00', 'hola', 2),
(11, 'jose12', '2017-09-05 02:23:25', 'hola como estan todos', NULL),
(12, 'jose12', '2017-09-07 00:45:50', 'hola', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `codigoConsulta` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `sugerencia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumidorfinal`
--

CREATE TABLE `consumidorfinal` (
  `codigoCfinal` int(11) NOT NULL,
  `fechaEmision` date DEFAULT NULL,
  `numeroCF` varchar(20) DEFAULT NULL,
  `cantidad` double DEFAULT NULL,
  `tipoPago` varchar(15) DEFAULT NULL,
  `totalPagar` decimal(10,2) DEFAULT NULL,
  `codigoEmpresa` int(11) DEFAULT NULL,
  `idPlatillo` int(11) DEFAULT NULL,
  `codigoCliente` int(11) DEFAULT NULL,
  `codigoTarjeta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consumidorfinal`
--

INSERT INTO `consumidorfinal` (`codigoCfinal`, `fechaEmision`, `numeroCF`, `cantidad`, `tipoPago`, `totalPagar`, `codigoEmpresa`, `idPlatillo`, `codigoCliente`, `codigoTarjeta`) VALUES
(1, '2017-08-14', 'fc382749-34', 1, 'TARJETA', '6.95', 1, 1, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `idDepartamento` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`idDepartamento`, `nombre`) VALUES
(1, 'AHUACHAPAN'),
(2, 'SANTA ANA'),
(3, 'SONSONATE'),
(4, 'CHALATENANGO'),
(5, 'LA LIBERTAD'),
(6, 'SAN SALVADOR'),
(7, 'CUSCATLAN'),
(8, 'LA PAZ'),
(9, 'CABANAS'),
(10, 'SAN VICENTE'),
(11, 'USULUTAN'),
(12, 'SAN MIGUEL'),
(13, 'MORAZAN'),
(14, 'LA UNION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `NumPedido` int(11) NOT NULL,
  `codigoPlatillo` int(11) NOT NULL,
  `CantidadProductos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`NumPedido`, `codigoPlatillo`, `CantidadProductos`) VALUES
(1, 4, '1'),
(2, 1, '1'),
(3, 1, '1'),
(5, 11, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `codigoEmpleado` int(11) NOT NULL,
  `primerNombre` varchar(50) NOT NULL,
  `segundoNombre` varchar(50) NOT NULL,
  `primerApellido` varchar(50) NOT NULL,
  `segundoApellido` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaContrato` datetime NOT NULL,
  `genero` varchar(10) NOT NULL,
  `salario` decimal(10,2) NOT NULL,
  `user` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `codigoPuesto` int(11) DEFAULT NULL,
  `idDepartamento` int(11) DEFAULT NULL,
  `idMunicipio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`codigoEmpleado`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `telefono`, `fechaNacimiento`, `fechaContrato`, `genero`, `salario`, `user`, `password`, `email`, `rol`, `fecha`, `codigoPuesto`, `idDepartamento`, `idMunicipio`) VALUES
(1, 'OSCAR', 'ALEJANDRO', 'PEREZ', 'RODRIGUEZ', '75359956', '1993-03-25', '2017-08-11 10:11:26', 'M', '600.00', 'oscar', '$2y$12$tDI/L89L5Nsn/5UYlejjXu627OmZSdH878xYyPlYzbm9./K7EZkpW', 'oskarjandro@gmail.com', 1, '2017-08-16 10:38:00', 3, 6, 98),
(2, 'ISAIAS', 'DANIEL', 'GONZALEZ', 'RAMIREZ', '7324-5678', '1994-02-12', '2017-08-14 03:21:25', 'M', '700.00', 'danny', '$2y$12$yEGyAO5EfroW41sLPutUmuKT.RWb8RzUe49pMvTANcJ23w0926Uay', 'danny@gmail.com', 1, '2017-08-16 10:39:00', 4, 4, 47),
(3, 'MIGUEL', 'ANTONIO', 'CARDOZA', 'MONGE', '75453420', '1994-02-14', '2017-08-01 03:05:08', 'M', '1500.00', 'mcardoza', '3c4d9277d7ad1ab613c892e966845e54', 'miguel@gmail.com', 2, '2017-08-15 10:13:00', 4, 6, 111),
(4, 'MARLON', 'GIOVANNI', 'CHAVEZ', 'AYALA', '7634-2090', '1991-08-14', '2017-08-14 13:21:35', 'M', '500.00', 'marlon', '$2y$12$tIkuTlPb.kRud0jUkHT33.8orPmHKWymiCm3MO56j73qjgPuZvfAm', 'marlon@hotmail.com', 1, '2017-08-16 10:40:00', 6, 9, 156),
(5, 'GUSTAVO', 'ENOCK', 'REYES', 'RIVAS', '7290-3400', '1991-02-09', '2017-08-16 04:18:00', 'M', '1600.00', 'enockReyez12', '$2y$12$VAhav0poACw7ccOL3GrrO.QZXPwKlvATcJQQaRzeY000SfFznpCn6', 'genock@gmail.com', 1, '2017-08-16 10:32:00', 3, 6, 105),
(6, 'CARLOS', 'ALBERTO', 'GUZMAN', 'TORRES', '7435-8900', '1985-08-16', '2017-08-16 02:02:00', 'M', '600.00', 'jose12', '$2y$10$WL7Un.mnWO3tGgnSaMxO/eRl66D9ZgZJ7.GYoWO3XAZSCJHuMKMyO', 'jose@gmail.com', 2, '2017-08-16 00:00:00', 6, 6, 111),
(7, 'Daniel', 'Alvarado', 'Rodriguez', 'PeÃ±a', '7389-9089', '1994-09-12', '0000-00-00 00:00:00', 'M', '500.00', 'daniel', '$2y$12$AUJoqstTTsf7nm9KPYifpe9.jwnjGFrIOHkSAcQfDdq0qc60DhqVS', 'daniel@gmail.com', 2, '0000-00-00 00:00:00', 6, 2, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `codigoEmpresa` int(11) NOT NULL,
  `nombreEmp` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`codigoEmpresa`, `nombreEmp`, `descripcion`) VALUES
(1, 'UFG', 'UNIVERSIDAD'),
(2, 'SEGURO FUTURO', 'COOPERATIVA'),
(3, 'BANCO AMÉRICA CENTRAL', 'BANCO'),
(4, 'ACODJAR DE R.L.', 'FINANCIERA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `NumPedido` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `formaDePago` varchar(20) DEFAULT NULL,
  `Fecha` varchar(100) DEFAULT NULL,
  `Descuento` int(20) DEFAULT NULL,
  `totalPagar` decimal(10,2) DEFAULT NULL,
  `codigoPlatillo` int(11) DEFAULT NULL,
  `codigoCliente` int(11) DEFAULT NULL,
  `codigoTarjeta` int(11) DEFAULT NULL,
  `Estado` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`NumPedido`, `nombre`, `apellido`, `direccion`, `formaDePago`, `Fecha`, `Descuento`, `totalPagar`, `codigoPlatillo`, `codigoCliente`, `codigoTarjeta`, `Estado`) VALUES
(1, 'MARLON', 'CHAVEZ', 'SAN SALVADOR', 'EFECTIVO', '2017-08-14', 1, '15.95', 1, 5, 2, 'Entregado'),
(2, 'RAUL', 'GOMEZ', 'SAN SALVADOR', 'TARJETA', '2017-08-14', 1, '7.65', 2, 4, 2, 'Pendiente'),
(3, 'MIGUEL', 'CARDOZA', 'SAN SALVADOR', 'EFECTIVO', '2017-08-24', 1, '6.95', 3, 1, 1, 'Pendiente'),
(5, 'user', 'user', 'direccion', 'EFECTIVO', '21-09-2017', 1, '12.95', 1, 2, 1, 'Pendiente'),
(6, 'user', 'user', 'direccion', 'EFECTIVO', '21-09-2017', 1, '12.95', 1, 2, 1, 'Pendiente'),
(7, 'user', 'user', 'direccion', 'EFECTIVO', '21-09-2017', 1, '15.95', 1, 2, 1, 'Entregado'),
(8, 'user', 'user', 'direccion', 'EFECTIVO', '21-09-2017', 1, '15.95', 1, 10, 1, 'Entregado'),
(9, 'user', 'user', 'direccion', 'EFECTIVO', '21-09-2017', 1, '3.50', 1, 2, 1, 'Pendiente'),
(10, 'user', 'user', 'direccion', 'EFECTIVO', '21-09-2017', 1, '3.50', 1, 2, 1, 'Pendiente'),
(11, 'user', 'user', 'direccion', 'EFECTIVO', '21-09-2017', 1, '3.50', 1, 2, 1, 'Entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `codigoMarca` int(11) NOT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`codigoMarca`, `marca`, `descripcion`) VALUES
(1, 'LINARES', 'ARROZ'),
(2, 'LA FAMA', 'CARNE ROJA'),
(3, 'TURCOS', 'PRODUCTO ENLATADO'),
(4, 'SAN MARCOS', 'VERDURAS'),
(5, 'POLLO INDIO', 'CARNE BLANCA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `idMunicipio` int(11) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `codMunicipio` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`idMunicipio`, `idDepartamento`, `codMunicipio`, `nombre`) VALUES
(1, 1, 101, 'AHUACHAPAN'),
(2, 1, 102, 'APANECA'),
(3, 1, 103, 'ATIQUIZAYA'),
(4, 1, 104, 'CONCEPCION DE ATACO'),
(5, 1, 105, 'EL REFUGIO'),
(6, 1, 106, 'GUAYMANGO'),
(7, 1, 107, 'JUJUTLA'),
(8, 1, 108, 'SAN FRANCISCO MENEND'),
(9, 1, 109, 'SAN LORENZO'),
(10, 1, 110, 'SAN PEDRO PUXTLA'),
(11, 1, 111, 'TACUBA'),
(12, 1, 112, 'TURIN'),
(13, 2, 201, 'CANDELARIA DE LA FRO'),
(14, 2, 203, 'CHALCHUAPA'),
(15, 2, 202, 'COATEPEQUE'),
(16, 2, 204, 'EL CONGO'),
(17, 2, 205, 'EL PORVENIR'),
(18, 2, 206, 'MASAHUAT'),
(19, 2, 207, 'METAPAN'),
(20, 2, 208, 'SAN ANTONIO PAJONAL'),
(21, 2, 209, 'SAN SEBASTIAN'),
(22, 2, 210, 'SANTA ANA'),
(23, 2, 211, 'SANTA ROSA GUACHIPIL'),
(24, 2, 212, 'SANTIAGO DE LA FRONT'),
(25, 2, 213, 'TEXISTEPEQUE'),
(26, 3, 301, 'ACAJUTLA'),
(27, 3, 302, 'ARMENIA'),
(28, 3, 303, 'CALUCO'),
(29, 3, 304, 'CUISNAHUAT'),
(30, 3, 306, 'IZALCO'),
(31, 3, 307, 'JUAYUA'),
(32, 3, 309, 'NAHUILINGO'),
(33, 3, 308, 'NAHUIZALCO'),
(34, 3, 310, 'SALCOATITAN'),
(35, 3, 311, 'SAN ANTONIO DEL MONT'),
(36, 3, 312, 'SAN JULIAN'),
(37, 3, 313, 'SANTA CATARINA MASAH'),
(38, 3, 305, 'SANTA ISABEL ISHUATA'),
(39, 3, 314, 'SANTO DOMINGO DE GUZ'),
(40, 3, 315, 'SONSONATE'),
(41, 3, 316, 'SONZACATE'),
(42, 4, 401, 'AGUA CALIENTE'),
(43, 4, 402, 'ARCATAO'),
(44, 4, 403, 'AZACUALPA'),
(45, 4, 407, 'CHALATENANGO'),
(46, 4, 404, 'CITALA'),
(47, 4, 405, 'COMALAPA'),
(48, 4, 406, 'CONCEPCION QUEZALTEP'),
(49, 4, 408, 'DULCE NOMBRE DE MARI'),
(50, 4, 409, 'EL CARRIZAL'),
(51, 4, 410, 'EL PARAISO'),
(52, 4, 411, 'LA LAGUNA'),
(53, 4, 412, 'LA PALMA'),
(54, 4, 413, 'LA REINA'),
(55, 4, 414, 'LAS VUELTAS'),
(56, 4, 415, 'NOMBRE DE JESUS'),
(57, 4, 416, 'NUEVA CONCEPCION'),
(58, 4, 417, 'NUEVA TRINIDAD'),
(59, 4, 418, 'OJOS DE AGUA'),
(60, 4, 419, 'POTONICO'),
(61, 4, 430, 'SAN MIGUEL DE MERCED'),
(62, 4, 420, 'SAN ANTONIO DE LA CR'),
(63, 4, 421, 'SAN ANTONIO LOS RANC'),
(64, 4, 422, 'SAN FERNANDO'),
(65, 4, 423, 'SAN FRANCISCO LEMPA'),
(66, 4, 424, 'SAN FRANCISCO MORAZA'),
(67, 4, 425, 'SAN IGNACIO'),
(68, 4, 426, 'SAN ISIDRO LABRADOR'),
(69, 4, 427, 'SAN JOSE CANASQUE'),
(70, 4, 428, 'SAN JOSE LAS FLORES'),
(71, 4, 429, 'SAN LUIS DEL CARMEN'),
(72, 4, 431, 'SAN RAFAEL'),
(73, 4, 432, 'SANTA RITA'),
(74, 4, 433, 'TEJUTLA'),
(75, 5, 501, 'ANTIGUO CUSCATLAN'),
(76, 5, 505, 'CHILTIUPAN'),
(77, 5, 502, 'CIUDAD ARCE'),
(78, 5, 503, 'COLON'),
(79, 5, 504, 'COMASAGUA'),
(80, 5, 506, 'HUIZUCAR'),
(81, 5, 507, 'JAYAQUE'),
(82, 5, 508, 'JICALAPA'),
(83, 5, 509, 'SANTA TECLA'),
(84, 5, 510, 'NUEVO CUSCATLAN'),
(85, 5, 511, 'NUEVA SAN SALVADOR'),
(86, 5, 512, 'QUEZALTEPEQUE'),
(87, 5, 513, 'SACACOYO'),
(88, 5, 514, 'SAN JOSE VILLANUEVA'),
(89, 5, 515, 'SAN JUAN OPICO'),
(90, 5, 516, 'SAN MATIAS'),
(91, 5, 517, 'SAN PABLO TACACHICO'),
(92, 5, 519, 'TALNIQUE'),
(93, 5, 518, 'TAMANIQUE'),
(94, 5, 520, 'TEOTEPEQUE'),
(95, 5, 521, 'TEPECOYO'),
(96, 5, 522, 'ZARAGOZA'),
(97, 6, 601, 'AGUILARES'),
(98, 6, 602, 'APOPA'),
(99, 6, 603, 'AYUTUXTEPEQUE'),
(100, 6, 619, 'CIUDAD DELGADO'),
(101, 6, 604, 'CUSCATANCINGO'),
(102, 6, 605, 'EL PAISNAL'),
(103, 6, 606, 'GUAZAPA'),
(104, 6, 607, 'ILOPANGO'),
(105, 6, 608, 'MEJICANOS'),
(106, 6, 609, 'NEJAPA'),
(107, 6, 610, 'PANCHIMALCO'),
(108, 6, 611, 'ROSARIO DE MORA'),
(109, 6, 612, 'SAN MARCOS'),
(110, 6, 613, 'SAN MARTIN'),
(111, 6, 614, 'SAN SALVADOR'),
(112, 6, 615, 'SANTIAGO TEXACUANGOS'),
(113, 6, 616, 'SANTO TOMAS'),
(114, 6, 617, 'SOYAPANGO'),
(115, 6, 618, 'TONACATEPEQUE'),
(116, 7, 701, 'CANDELARIA'),
(117, 7, 702, 'COJUTEPEQUE'),
(118, 7, 703, 'EL CARMEN'),
(119, 7, 704, 'EL ROSARIO'),
(120, 7, 705, 'MONTE SAN JUAN'),
(121, 7, 706, 'ORATORIO DE CONCEPCI'),
(122, 7, 707, 'SAN BARTOLE PERULAPI'),
(123, 7, 708, 'SAN CRISTOBAL'),
(124, 7, 709, 'SAN JOSE GUAYABAL'),
(125, 7, 710, 'SAN PEDRO PERULAPAN'),
(126, 7, 711, 'SAN RAFAEL CEDROS'),
(127, 7, 712, 'SAN RAMON'),
(128, 7, 713, 'SANTA CRUZ ANALQUITO'),
(129, 7, 714, 'SANTA CRUZ MICHAPA'),
(130, 7, 715, 'SUCHITOTO'),
(131, 7, 716, 'TENANCINGO'),
(132, 8, 801, 'CUYULTITAN'),
(133, 8, 802, 'EL ROSARIO'),
(134, 8, 803, 'JERUSALEN'),
(135, 8, 804, 'MERCEDES LA CEIBA'),
(136, 8, 805, 'OLOCUILTA'),
(137, 8, 806, 'PARAISO DE OSORIO'),
(138, 8, 807, 'SAN ANTONIO MASAHUAT'),
(139, 8, 808, 'SAN EMIGDIO'),
(140, 8, 809, 'SAN FRANCISCO CHINAM'),
(141, 8, 810, 'SAN JUAN NONUALCO'),
(142, 8, 811, 'SAN JUAN TALPA'),
(143, 8, 812, 'SAN JUAN TEPEZONTES'),
(144, 8, 822, 'SAN LUIS LA HERRADUR'),
(145, 8, 813, 'SAN LUIS TALPA'),
(146, 8, 814, 'SAN MIGUEL TEPEZONTE'),
(147, 8, 815, 'SAN PEDRO MASAHUAT'),
(148, 8, 816, 'SAN PEDRO NONUALCO'),
(149, 8, 817, 'SAN RAFAEL OBRAJUELO'),
(150, 8, 818, 'SANTA MARIA OSTUMA'),
(151, 8, 819, 'SANTIAGO NONUALCO'),
(152, 8, 820, 'TAPALHUACA'),
(153, 8, 821, 'ZACATECOLUCA'),
(154, 9, 901, 'CINQUERA'),
(155, 9, 902, 'GUACOTECTI'),
(156, 9, 903, 'ILOBASCO'),
(157, 9, 904, 'JUTIAPA'),
(158, 9, 905, 'SAN ISIDRO'),
(159, 9, 906, 'SENSUNTEPEQUE'),
(160, 9, 907, 'TEJUTEPEQUE'),
(161, 9, 909, 'VILLA DOLORES'),
(162, 9, 908, 'VILLA VICTORIA'),
(163, 10, 1001, 'APASTEPEQUE'),
(164, 10, 1002, 'GUADALUPE'),
(165, 10, 1012, 'NUEVO TEPETITAN'),
(166, 10, 1003, 'SAN CAYETANO ISTEPEQ'),
(167, 10, 1006, 'SAN ESTEBAN CATARINA'),
(168, 10, 1007, 'SAN IDELFONSO'),
(169, 10, 1008, 'SAN LORENZO'),
(170, 10, 1009, 'SAN SEBASTIAN'),
(171, 10, 1010, 'SAN VICENTE'),
(172, 10, 1004, 'SANTA CLARA'),
(173, 10, 1005, 'SANTO DOMINGO'),
(174, 10, 1011, 'TECOLUCA'),
(175, 10, 1013, 'VERAPAZ'),
(176, 11, 1101, 'ALEGRIA'),
(177, 11, 1102, 'BERLIN'),
(178, 11, 1103, 'CALIFORNIA'),
(179, 11, 1104, 'CONCEPCION BATRES'),
(180, 11, 1106, 'EREGUAYQUIN'),
(181, 11, 1107, 'ESTANZUELAS'),
(182, 11, 1108, 'JIQUILISCO'),
(183, 11, 1109, 'JUCUAPA'),
(184, 11, 1110, 'JUCUARAN'),
(185, 11, 1111, 'MERCEDES UMA'),
(186, 11, 1112, 'NUEVA GRANADA'),
(187, 11, 1113, 'OZATLAN'),
(188, 11, 1114, 'PUERTO EL TRIUNFO'),
(189, 11, 1115, 'SAN AGUSTIN'),
(190, 11, 1116, 'SAN BUENA AVENTURA'),
(191, 11, 1117, 'SAN DIONISIO'),
(192, 11, 1119, 'SAN FRANCISCO JAVIER'),
(193, 11, 1118, 'SANTA ELENA'),
(194, 11, 1120, 'SANTA MARIA'),
(195, 11, 1121, 'SANTIAGO DE MARIA'),
(196, 11, 1122, 'TECAPAN'),
(197, 11, 1123, 'USULUTAN'),
(198, 11, 1105, 'EL TRIUNFO'),
(199, 12, 1201, 'CAROLINA'),
(200, 12, 1204, 'CHAPELTIQUE'),
(201, 12, 1205, 'CHINAMECA'),
(202, 12, 1206, 'CHIRILAGUA'),
(203, 12, 1202, 'CIUDAD BARRIOS'),
(204, 12, 1203, 'COMACARAN'),
(205, 12, 1207, 'EL TRANSITO'),
(206, 12, 1208, 'LOLOTIQUE'),
(207, 12, 1209, 'MONCAGUA'),
(208, 12, 1210, 'NUEVA GUADALUPE'),
(209, 12, 1211, 'NUEVO EDEN DE SAN JU'),
(210, 12, 1212, 'QUELEPA'),
(211, 12, 1213, 'SAN ANTONIO DEL MOSC'),
(212, 12, 1214, 'SAN GERARDO'),
(213, 12, 1215, 'SAN JORGE'),
(214, 12, 1216, 'SAN LUIS DE LA REINA'),
(215, 12, 1217, 'SAN MIGUEL'),
(216, 12, 1218, 'SAN RAFAEL ORIENTE'),
(217, 12, 1219, 'SESORI'),
(218, 12, 1220, 'ULUAZAPA'),
(219, 13, 1301, 'ARAMBALA'),
(220, 13, 1302, 'CACAOPERA'),
(221, 13, 1304, 'CHILANGA'),
(222, 13, 1303, 'CORINTO'),
(223, 13, 1305, 'DELICIAS DE CONCEPCI'),
(224, 13, 1306, 'EL DIVISADERO'),
(225, 13, 1307, 'EL ROSARIO'),
(226, 13, 1308, 'GUALOCOCIT'),
(227, 13, 1309, 'GUATAJIAGUA'),
(228, 13, 1310, 'JOATECA'),
(229, 13, 1311, 'JOCOAITIQUE'),
(230, 13, 1312, 'JOCORO'),
(231, 13, 1313, 'LOLOTIQUILLO'),
(232, 13, 1314, 'MEANGUERA'),
(233, 13, 1315, 'OSICALA'),
(234, 13, 1316, 'PERQUIN'),
(235, 13, 1317, 'SAN CARLOS'),
(236, 13, 1318, 'SAN FERNANDO'),
(237, 13, 1319, 'SAN FRANCISCO GOTERA'),
(238, 13, 1320, 'SAN ISIDRO'),
(239, 13, 1321, 'SAN SIMON'),
(240, 13, 1322, 'SEMSEMBRA'),
(241, 13, 1323, 'SOCIEDAD'),
(242, 13, 1324, 'TOROLA'),
(243, 13, 1325, 'YAMABAL'),
(244, 13, 1326, 'YOLOAQUITIN'),
(245, 14, 1401, 'ANAMOROS'),
(246, 14, 1402, 'BOLIVAR'),
(247, 14, 1403, 'CONCEPCION DE ORIENT'),
(248, 14, 1404, 'CONCHAGUA'),
(249, 14, 1405, 'EL CARMEN'),
(250, 14, 1406, 'EL SAUCE'),
(251, 14, 1407, 'INTIPUCA'),
(252, 14, 1408, 'LA UNION'),
(253, 14, 1409, 'LISLIQUE'),
(254, 14, 1410, 'MEANGUERA DEL GOLFO'),
(255, 14, 1411, 'NUEVA ESPARTA'),
(256, 14, 1412, 'PASAQUINA'),
(257, 14, 1413, 'POLOROS'),
(258, 14, 1414, 'SAN ALEJO'),
(259, 14, 1415, 'SAN JOSE LA FUENTE'),
(260, 14, 1416, 'SANTA ROSA DE LIMA'),
(261, 14, 1417, 'YAYANTIQUE'),
(262, 14, 1418, 'YUCUAIQUIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE `platillos` (
  `codigoPlatillo` int(11) NOT NULL,
  `platillo` varchar(20) DEFAULT NULL,
  `tipoPlatillo` varchar(100) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `imagen` text NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Stock` varchar(150) NOT NULL,
  `CodigoCat` int(20) NOT NULL,
  `codigoProveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`codigoPlatillo`, `platillo`, `tipoPlatillo`, `precio`, `descripcion`, `imagen`, `Nombre`, `Stock`, `CodigoCat`, `codigoProveedor`) VALUES
(1, 'ASADO DE TIRA', 'Plato fuerte', '15.95', 'COSTILLAR DE RES CORTADO EN TIRAS, 10 ONZ', 'carne-egipto.jpg', 'admin', '1', 3, 1),
(2, 'HUEVOS BENEDICTINOS', 'Desayuno', '7.65', 'HUEVOS POCHÉ MONTADOS EN LOMITO CANADIENSE, PAN MUFFIN, ACOMPANADOS DE CASAMIENTO, QUESO CREMADO O CREMA, PAN TOSTADO Y REFILL DE CAFÉ.', 'huevosB.jpg', 'oscar', '45', 1, 2),
(3, 'HAMBURGUESA', 'Infantil', '6.95', '4 ONZAS DE CARNE MOLIDA, LECHUGA, TOMATE, PAPAS FRITAS, QUESO, INCLUYE UNA BEBIDA, SODA O TÉ, 1 HELADO SENCILLO A ESCOGER ENTRE: VAINILLA O CHOCOLATE', 'hamburguesa.jpg', 'oscar', '50', 2, 2),
(4, 'ENTRADA TIPICA', 'Entrada', '12.95', 'LOMO DE AGUJA, CHORIZO ARGENTINO, FRIJOLES, AGUACATE Y CUAJADA ACOMPAÑADO DE TORTILLAS FRITAS.', 'entrada.jpg', 'admin', '11', 1, 2),
(5, 'PARRILLADA MIXTA', 'Parrillada', '45.95', 'EXQUISITO LOMO DE AGUJA, 3/4 DE POLLO DESHUESADO, 3 CAMARONES, CHORIZO ARGENTINO, PAPA AL HORNO, VEGETALES MIXTOS, ADEREZO, 3 CONSOMES DE RES, 3 ENSALADAS DE BAR Y PAN.', 'Asador.jpg', 'admin', '17', 3, 2),
(6, 'pollo', 'Almuerzo', '3.50', 'Pollo Empanizado y jugozo.', 'pollo.jpg', 'admin', '20', 2, 2),
(10, 'ensalada', 'Entrada', '3.50', 'ensalada fresca', 'ensalada.jpg', 'oscar', '63', 2, 3),
(11, 'Kumo Sushi', 'ALMUERZO', '3.50', 'Kumo Sushi | Groupon', 'c700x420.jpg', 'oscar', '98', 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(30) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `codigoProveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `descripcion`, `codigoProveedor`) VALUES
(1, 'CARNE DE RES', '30 KG DE CARNE RES', 1),
(2, 'POLLO ', '50 KG DE POLLO INDIO', 2),
(3, 'ARROZ', '100 kg de arroz', 5),
(4, 'FRIJOLES', 'FRIJOLES', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `codigoProveedor` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `razonSocial` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `rfc` varchar(50) DEFAULT NULL,
  `codigoMarca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`codigoProveedor`, `nombre`, `razonSocial`, `direccion`, `telefono`, `email`, `rfc`, `codigoMarca`) VALUES
(1, 'LOPEZ', 'BODEGA S.A. DE C.V', 'SAN SALVADOR', '2234-5620', 'lopezbodega@gmail.com', 'BOD-349267', 3),
(2, 'LABODEGASUPREMA', 'SUPREMA S.A. DE C.V', 'LA UNION', '2234-5670', 'bodega12@gmail.com', 'SUP-104782', 5),
(3, 'ECO', 'ECOMIC S.A DE C.V', 'SOYAPANGO', '2290-8045', 'eco123@gmail.com', 'ECO-186071', 2),
(4, 'MOLEX', 'MOLEZKAT S.A DE C.V', 'SONSONATE', '2278-2014', 'molex@gmail.com', 'MOLEX-175031', 3),
(5, 'DELL', 'DELMAIZ S.A DE C.V', 'LA UNION', '2120-2080', 'delmaiz@gmail.com', 'MAIZ-186540', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `codigoPuesto` int(11) NOT NULL,
  `cargoLaboral` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`codigoPuesto`, `cargoLaboral`) VALUES
(1, 'COCINERO'),
(2, 'MESERO'),
(3, 'INFORMATICA'),
(4, 'CONTABILIDAD'),
(5, 'GENERENTE'),
(6, 'BODEGAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_entrada`
--

CREATE TABLE `registro_entrada` (
  `idRegistroEntrada` int(11) NOT NULL,
  `fechaE` date NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo` decimal(10,0) NOT NULL,
  `codigoProveedor` int(11) NOT NULL,
  `codigoEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `registro_entrada`
--

INSERT INTO `registro_entrada` (`idRegistroEntrada`, `fechaE`, `descripcion`, `cantidad`, `costo`, `codigoProveedor`, `codigoEmpleado`) VALUES
(1, '2017-09-04', 'Compra de carne de res de 30KG', 100, '2050', 1, 6),
(2, '2017-09-04', 'compra de 50 LB de pollo indio', 250, '4375', 2, 6),
(4, '2017-09-11', '50 kg de arroz.', 10, '50', 5, 4),
(5, '2017-09-12', '20 LIBRAS DE FRIJOLES', 20, '100', 4, 4),
(6, '2017-09-21', 'arroz preCosido', 100, '200', 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_salida`
--

CREATE TABLE `registro_salida` (
  `idRegistroSalida` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `personaSolicitante` varchar(30) NOT NULL,
  `cantidad` varchar(30) NOT NULL,
  `codigoEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_salida`
--

INSERT INTO `registro_salida` (`idRegistroSalida`, `fecha`, `personaSolicitante`, `cantidad`, `codigoEmpleado`) VALUES
(1, '2018-01-03', 'Mario Ortiz', '20', 6),
(2, '2018-01-04', 'Miguel campos', '50', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas`
--

CREATE TABLE `tarjetas` (
  `codigoTarjeta` int(11) NOT NULL,
  `numeroTarjeta` varchar(20) DEFAULT NULL,
  `codigoSeguridad` int(11) DEFAULT NULL,
  `FechaVencimiento` date DEFAULT NULL,
  `TipoTarjeta` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarjetas`
--

INSERT INTO `tarjetas` (`codigoTarjeta`, `numeroTarjeta`, `codigoSeguridad`, `FechaVencimiento`, `TipoTarjeta`) VALUES
(1, '8728384-4', 123, '2022-09-04', 'VISA'),
(2, '8920394-5', 123, '2020-09-04', 'MasterCard'),
(3, '8302749-4', 123, '2024-09-04', 'BBVA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `bodegas`
--
ALTER TABLE `bodegas`
  ADD PRIMARY KEY (`codigoBodega`),
  ADD KEY `IX_Relationship24` (`idProducto`),
  ADD KEY `bodega-codigoProveedor` (`codigoProveedor`),
  ADD KEY `bodega-codigoMarca` (`codigoMarca`),
  ADD KEY `fk_bodegas_registro_entrada1_idx` (`Entrada`),
  ADD KEY `fk_bodegas_registro_salida1_idx1` (`Salida`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CodigoCat`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codigoCliente`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentarios`),
  ADD KEY `fk_comentarios_clientes1_idx1` (`codigoCliente`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`codigoConsulta`);

--
-- Indices de la tabla `consumidorfinal`
--
ALTER TABLE `consumidorfinal`
  ADD PRIMARY KEY (`codigoCfinal`),
  ADD KEY `IX_Relationship29` (`codigoEmpresa`),
  ADD KEY `IX_Relationship36` (`idPlatillo`),
  ADD KEY `fk_consumidorfinal_clientes1_idx` (`codigoCliente`),
  ADD KEY `fk_consumidorfinal_tarjetas1_idx` (`codigoTarjeta`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`idDepartamento`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD KEY `fk_detalle_facturas1_idx` (`NumPedido`),
  ADD KEY `fk_detalle_platillos1_idx` (`codigoPlatillo`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`codigoEmpleado`),
  ADD KEY `IX_Relationship11` (`codigoPuesto`),
  ADD KEY `IX_Relationship13` (`idDepartamento`),
  ADD KEY `IX_Relationship14` (`idMunicipio`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`codigoEmpresa`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`NumPedido`),
  ADD KEY `codigoPlatillo` (`codigoPlatillo`),
  ADD KEY `fk_facturas_clientes1_idx` (`codigoCliente`),
  ADD KEY `fk_facturas_tarjetas1_idx` (`codigoTarjeta`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`codigoMarca`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`idMunicipio`),
  ADD KEY `idDepartamento` (`idDepartamento`);

--
-- Indices de la tabla `platillos`
--
ALTER TABLE `platillos`
  ADD PRIMARY KEY (`codigoPlatillo`),
  ADD KEY `fk_platillos_administrador1_idx` (`Nombre`),
  ADD KEY `fk_platillos_categoria1_idx1` (`CodigoCat`),
  ADD KEY `fk_platillos_proveedores1_idx` (`codigoProveedor`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `IX_Relationship20` (`codigoProveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`codigoProveedor`),
  ADD KEY `IX_Relationship26` (`codigoMarca`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`codigoPuesto`);

--
-- Indices de la tabla `registro_entrada`
--
ALTER TABLE `registro_entrada`
  ADD PRIMARY KEY (`idRegistroEntrada`),
  ADD KEY `fk_registro_entrada_proveedores1_idx` (`codigoProveedor`),
  ADD KEY `fk_registro_entrada_empleados1_idx` (`codigoEmpleado`);

--
-- Indices de la tabla `registro_salida`
--
ALTER TABLE `registro_salida`
  ADD PRIMARY KEY (`idRegistroSalida`),
  ADD KEY `fk_registro_salida_empleados1_idx` (`codigoEmpleado`);

--
-- Indices de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD PRIMARY KEY (`codigoTarjeta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bodegas`
--
ALTER TABLE `bodegas`
  MODIFY `codigoBodega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `CodigoCat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codigoCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `codigoConsulta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `consumidorfinal`
--
ALTER TABLE `consumidorfinal`
  MODIFY `codigoCfinal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `idDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `NumPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `codigoEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `codigoEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `NumPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `codigoMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `idMunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;
--
-- AUTO_INCREMENT de la tabla `platillos`
--
ALTER TABLE `platillos`
  MODIFY `codigoPlatillo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `codigoProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `codigoPuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `registro_entrada`
--
ALTER TABLE `registro_entrada`
  MODIFY `idRegistroEntrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `registro_salida`
--
ALTER TABLE `registro_salida`
  MODIFY `idRegistroSalida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  MODIFY `codigoTarjeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bodegas`
--
ALTER TABLE `bodegas`
  ADD CONSTRAINT `bodegas_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`),
  ADD CONSTRAINT `bodegas_ibfk_2` FOREIGN KEY (`codigoProveedor`) REFERENCES `proveedores` (`codigoProveedor`),
  ADD CONSTRAINT `bodegas_ibfk_3` FOREIGN KEY (`codigoMarca`) REFERENCES `marcas` (`codigoMarca`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_clientes1` FOREIGN KEY (`codigoCliente`) REFERENCES `clientes` (`codigoCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `consumidorfinal`
--
ALTER TABLE `consumidorfinal`
  ADD CONSTRAINT `CF-tarjeta` FOREIGN KEY (`idPlatillo`) REFERENCES `platillos` (`codigoPlatillo`),
  ADD CONSTRAINT `consumidorfinal_ibfk_2` FOREIGN KEY (`codigoEmpresa`) REFERENCES `empresas` (`codigoEmpresa`),
  ADD CONSTRAINT `fk_consumidorfinal_clientes1` FOREIGN KEY (`codigoCliente`) REFERENCES `clientes` (`codigoCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_consumidorfinal_tarjetas1` FOREIGN KEY (`codigoTarjeta`) REFERENCES `tarjetas` (`codigoTarjeta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`NumPedido`) REFERENCES `facturas` (`NumPedido`),
  ADD CONSTRAINT `fk_detalle_platillos1` FOREIGN KEY (`codigoPlatillo`) REFERENCES `platillos` (`codigoPlatillo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_3` FOREIGN KEY (`idDepartamento`) REFERENCES `departamentos` (`idDepartamento`),
  ADD CONSTRAINT `empleados_ibfk_4` FOREIGN KEY (`codigoPuesto`) REFERENCES `puestos` (`codigoPuesto`),
  ADD CONSTRAINT `empleados_ibfk_5` FOREIGN KEY (`idMunicipio`) REFERENCES `municipios` (`idMunicipio`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `factura-platillo` FOREIGN KEY (`codigoPlatillo`) REFERENCES `platillos` (`codigoPlatillo`),
  ADD CONSTRAINT `fk_facturas_clientes1` FOREIGN KEY (`codigoCliente`) REFERENCES `clientes` (`codigoCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_facturas_tarjetas1` FOREIGN KEY (`codigoTarjeta`) REFERENCES `tarjetas` (`codigoTarjeta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_ibfk_1` FOREIGN KEY (`idDepartamento`) REFERENCES `departamentos` (`idDepartamento`);

--
-- Filtros para la tabla `platillos`
--
ALTER TABLE `platillos`
  ADD CONSTRAINT `fk_platillos_administrador1` FOREIGN KEY (`Nombre`) REFERENCES `administrador` (`Nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_platillos_categoria1` FOREIGN KEY (`CodigoCat`) REFERENCES `categoria` (`CodigoCat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_platillos_proveedores1` FOREIGN KEY (`codigoProveedor`) REFERENCES `proveedores` (`codigoProveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`codigoProveedor`) REFERENCES `proveedores` (`codigoProveedor`);

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`codigoMarca`) REFERENCES `marcas` (`codigoMarca`);

--
-- Filtros para la tabla `registro_entrada`
--
ALTER TABLE `registro_entrada`
  ADD CONSTRAINT `fk_registro_entrada_empleados1` FOREIGN KEY (`codigoEmpleado`) REFERENCES `empleados` (`codigoEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registro_entrada_proveedores1` FOREIGN KEY (`codigoProveedor`) REFERENCES `proveedores` (`codigoProveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registro_salida`
--
ALTER TABLE `registro_salida`
  ADD CONSTRAINT `fk_registro_salida_empleados1` FOREIGN KEY (`codigoEmpleado`) REFERENCES `empleados` (`codigoEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
