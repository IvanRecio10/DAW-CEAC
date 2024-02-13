-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2023 a las 10:42:06
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `camisetas_futbol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camiseta`
--

CREATE TABLE `camiseta` (
  `ID` int(8) NOT NULL,
  `Equipo` varchar(30) DEFAULT NULL,
  `Dorsal` int(2) DEFAULT NULL,
  `Precio` decimal(3,2) DEFAULT NULL,
  `CodigoTienda` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `camiseta`
--

INSERT INTO `camiseta` (`ID`, `Equipo`, `Dorsal`, `Precio`, `CodigoTienda`) VALUES
(1, 'Real Madrid', 20, '9.99', 1),
(2, 'Real Madrid', 21, '9.99', 1),
(3, 'Real Madrid', 1, '9.99', 1),
(4, 'Real Madrid', 2, '9.99', 1),
(5, 'Real Madrid', 3, '9.99', 1),
(6, 'Real Madrid', 4, '9.99', 1),
(7, 'Real Madrid', 5, '9.99', 1),
(8, 'Real Madrid', 6, '9.99', 1),
(9, 'Real Madrid', 7, '9.99', 1),
(10, 'Real Madrid', 8, '9.99', 1),
(11, 'Real Madrid', 9, '9.99', 1),
(12, 'Real Madrid', 10, '9.99', 1),
(13, 'Real Madrid', 11, '9.99', 1),
(14, 'Real Madrid', 12, '9.99', 1),
(15, 'Real Madrid', 13, '9.99', 1),
(16, 'Real Madrid', 14, '9.99', 1),
(17, 'Real Madrid', 15, '9.99', 1),
(18, 'Real Madrid', 19, '9.99', 1),
(19, 'Real Madrid', 18, '9.99', 1),
(20, 'Barça', 20, '9.99', 1),
(21, 'Barça', 21, '9.99', 1),
(22, 'Barça', 1, '9.99', 1),
(23, 'Barça', 2, '9.99', 1),
(24, 'Barça', 3, '9.99', 1),
(25, 'Barça', 4, '9.99', 1),
(26, 'Barça', 5, '9.99', 1),
(27, 'Barça', 6, '9.99', 1),
(28, 'Barça', 7, '9.99', 1),
(29, 'Barça', 8, '9.99', 1),
(30, 'Barça', 9, '9.99', 1),
(31, 'Barça', 10, '9.99', 1),
(32, 'Barça', 11, '9.99', 1),
(33, 'Barça', 12, '9.99', 1),
(34, 'Barça', 13, '9.99', 1),
(35, 'Barça', 14, '9.99', 1),
(36, 'Barça', 15, '9.99', 1),
(37, 'Barça', 19, '9.99', 1),
(38, 'Barça', 18, '9.99', 1),
(39, 'Arsenal', 20, '9.99', 1),
(40, 'Arsenal', 21, '9.99', 1),
(41, 'Arsenal', 1, '9.99', 1),
(42, 'Arsenal', 2, '9.99', 1),
(43, 'Arsenal', 3, '9.99', 1),
(44, 'Arsenal', 4, '9.99', 1),
(45, 'Arsenal', 5, '9.99', 1),
(46, 'Arsenal', 6, '9.99', 1),
(47, 'Arsenal', 7, '9.99', 1),
(48, 'Arsenal', 8, '9.99', 1),
(49, 'Arsenal', 9, '9.99', 1),
(50, 'Arsenal', 10, '9.99', 1),
(51, 'Arsenal', 11, '9.99', 1),
(52, 'Arsenal', 12, '9.99', 1),
(53, 'Arsenal', 13, '9.99', 1),
(54, 'Arsenal', 14, '9.99', 1),
(55, 'Arsenal', 15, '9.99', 1),
(56, 'Arsenal', 19, '9.99', 1),
(57, 'Arsenal', 18, '9.99', 1),
(58, 'Manchester City', 20, '9.99', 1),
(59, 'Manchester City', 21, '9.99', 1),
(60, 'Manchester City', 1, '9.99', 1),
(61, 'Manchester City', 2, '9.99', 1),
(62, 'Manchester City', 3, '9.99', 1),
(63, 'Manchester City', 4, '9.99', 1),
(64, 'Manchester City', 5, '9.99', 1),
(65, 'Manchester City', 6, '9.99', 1),
(66, 'Manchester City', 7, '9.99', 1),
(67, 'Manchester City', 8, '9.99', 1),
(68, 'Manchester City', 9, '9.99', 1),
(69, 'Manchester City', 10, '9.99', 1),
(70, 'Manchester City', 11, '9.99', 1),
(71, 'Manchester City', 12, '9.99', 1),
(72, 'Manchester City', 13, '9.99', 1),
(73, 'Manchester City', 14, '9.99', 1),
(74, 'Manchester City', 15, '9.99', 1),
(75, 'Manchester City', 19, '9.99', 1),
(76, 'Manchester City', 18, '9.99', 1),
(77, 'PSG', 20, '9.99', 1),
(78, 'PSG', 21, '9.99', 1),
(79, 'PSG', 1, '9.99', 1),
(80, 'PSG', 2, '9.99', 1),
(81, 'PSG', 3, '9.99', 1),
(82, 'PSG', 4, '9.99', 1),
(83, 'PSG', 5, '9.99', 1),
(84, 'PSG', 6, '9.99', 1),
(85, 'PSG', 7, '9.99', 1),
(86, 'PSG', 8, '9.99', 1),
(87, 'PSG', 9, '9.99', 1),
(88, 'PSG', 10, '9.99', 1),
(89, 'PSG', 11, '9.99', 1),
(90, 'PSG', 12, '9.99', 1),
(91, 'PSG', 13, '9.99', 1),
(92, 'PSG', 14, '9.99', 1),
(93, 'PSG', 15, '9.99', 1),
(94, 'PSG', 19, '9.99', 1),
(95, 'PSG', 18, '9.99', 1),
(96, 'Juventus', 20, '9.99', 1),
(97, 'Juventus', 21, '9.99', 1),
(98, 'Juventus', 1, '9.99', 1),
(99, 'Juventus', 2, '9.99', 1),
(100, 'Juventus', 3, '9.99', 1),
(101, 'Juventus', 4, '9.99', 1),
(102, 'Juventus', 5, '9.99', 1),
(103, 'Juventus', 6, '9.99', 1),
(104, 'Juventus', 7, '9.99', 1),
(105, 'Juventus', 8, '9.99', 1),
(106, 'Juventus', 9, '9.99', 1),
(107, 'Juventus', 10, '9.99', 1),
(108, 'Juventus', 11, '9.99', 1),
(109, 'Juventus', 12, '9.99', 1),
(110, 'Juventus', 13, '9.99', 1),
(111, 'Juventus', 14, '9.99', 1),
(112, 'Juventus', 15, '9.99', 1),
(113, 'Juventus', 19, '9.99', 1),
(114, 'Juventus', 18, '9.99', 1),
(115, 'Juventus', 20, '9.99', 4),
(116, 'Juventus', 21, '9.99', 4),
(117, 'Juventus', 1, '9.99', 4),
(118, 'Juventus', 2, '9.99', 4),
(119, 'Juventus', 3, '9.99', 4),
(120, 'Juventus', 4, '9.99', 4),
(121, 'Juventus', 5, '9.99', 4),
(122, 'Juventus', 6, '9.99', 4),
(123, 'Juventus', 7, '9.99', 4),
(124, 'Juventus', 8, '9.99', 4),
(125, 'Juventus', 9, '9.99', 4),
(126, 'Juventus', 10, '9.99', 4),
(127, 'Juventus', 11, '9.99', 4),
(128, 'Juventus', 12, '9.99', 4),
(129, 'Juventus', 13, '9.99', 4),
(130, 'Juventus', 14, '9.99', 4),
(131, 'Juventus', 15, '9.99', 4),
(132, 'Juventus', 19, '9.99', 4),
(133, 'Juventus', 18, '9.99', 4),
(134, 'Real Madrid', 18, '9.99', 4),
(135, 'Real Madrid', 18, '9.99', 4),
(136, 'Real Madrid', 18, '9.99', 4),
(137, 'Real Madrid', 18, '9.99', 4),
(138, 'Real Madrid', 20, '9.99', 4),
(139, 'Real Madrid', 11, '9.99', 4),
(140, 'Real Madrid', 21, '9.99', 4),
(141, 'Real Madrid', 9, '9.99', 4),
(142, 'Real Madrid', 1, '9.99', 4),
(143, 'Real Madrid', 12, '9.99', 4),
(144, 'Real Madrid', 19, '9.99', 4),
(145, 'Real Madrid', 25, '9.99', 4),
(146, 'Real Madrid', 8, '9.99', 4),
(147, 'Real Madrid', 10, '9.99', 4),
(148, 'Real Madrid', 13, '9.99', 4),
(149, 'Real Madrid', 2, '9.99', 4),
(150, 'Real Madrid', 4, '9.99', 4),
(151, 'Real Madrid', 5, '9.99', 4),
(152, 'Real Madrid', 7, '9.99', 4),
(153, 'Arsenal', 18, '9.99', 4),
(154, 'Arsenal', 20, '9.99', 4),
(155, 'Arsenal', 11, '9.99', 4),
(156, 'Arsenal', 21, '9.99', 4),
(157, 'Arsenal', 9, '9.99', 4),
(158, 'Arsenal', 1, '9.99', 4),
(159, 'Arsenal', 12, '9.99', 4),
(160, 'Arsenal', 19, '9.99', 4),
(161, 'Arsenal', 25, '9.99', 4),
(162, 'Arsenal', 8, '9.99', 4),
(163, 'Arsenal', 10, '9.99', 4),
(164, 'Arsenal', 13, '9.99', 4),
(165, 'Arsenal', 2, '9.99', 4),
(166, 'Arsenal', 4, '9.99', 4),
(167, 'Arsenal', 5, '9.99', 4),
(168, 'Arsenal', 7, '9.99', 4),
(169, 'PSG', 18, '9.99', 4),
(170, 'PSG', 20, '9.99', 4),
(171, 'PSG', 11, '9.99', 4),
(172, 'PSG', 21, '9.99', 4),
(173, 'PSG', 9, '9.99', 4),
(174, 'PSG', 1, '9.99', 4),
(175, 'PSG', 12, '9.99', 4),
(176, 'PSG', 19, '9.99', 4),
(177, 'PSG', 25, '9.99', 4),
(178, 'PSG', 8, '9.99', 4),
(179, 'PSG', 10, '9.99', 4),
(180, 'PSG', 13, '9.99', 4),
(181, 'PSG', 2, '9.99', 4),
(182, 'PSG', 4, '9.99', 4),
(183, 'PSG', 5, '9.99', 4),
(184, 'PSG', 7, '9.99', 4),
(185, 'PSG', 18, '9.99', 5),
(186, 'PSG', 20, '9.99', 5),
(187, 'PSG', 11, '9.99', 5),
(188, 'PSG', 21, '9.99', 5),
(189, 'PSG', 9, '9.99', 5),
(190, 'PSG', 1, '9.99', 5),
(191, 'PSG', 12, '9.99', 5),
(192, 'PSG', 19, '9.99', 5),
(193, 'PSG', 25, '9.99', 5),
(194, 'PSG', 8, '9.99', 5),
(195, 'PSG', 10, '9.99', 5),
(196, 'PSG', 13, '9.99', 5),
(197, 'PSG', 2, '9.99', 5),
(198, 'PSG', 4, '9.99', 5),
(199, 'PSG', 5, '9.99', 5),
(200, 'PSG', 7, '9.99', 5),
(201, 'Arsenal', 18, '9.99', 6),
(202, 'Arsenal', 20, '9.99', 6),
(203, 'Arsenal', 11, '9.99', 6),
(204, 'Arsenal', 21, '9.99', 6),
(205, 'Arsenal', 9, '9.99', 6),
(206, 'Arsenal', 1, '9.99', 6),
(207, 'Arsenal', 12, '9.99', 6),
(208, 'Arsenal', 19, '9.99', 6),
(209, 'Arsenal', 25, '9.99', 6),
(210, 'Arsenal', 8, '9.99', 6),
(211, 'Arsenal', 10, '9.99', 6),
(212, 'Arsenal', 13, '9.99', 6),
(213, 'Arsenal', 2, '9.99', 6),
(214, 'Arsenal', 4, '9.99', 6),
(215, 'Arsenal', 5, '9.99', 6),
(216, 'Arsenal', 7, '9.99', 6),
(217, 'Arsenal', 18, '9.99', 7),
(218, 'Arsenal', 20, '9.99', 7),
(219, 'Arsenal', 11, '9.99', 7),
(220, 'Arsenal', 21, '9.99', 7),
(221, 'Arsenal', 9, '9.99', 7),
(222, 'Arsenal', 1, '9.99', 7),
(223, 'Arsenal', 12, '9.99', 7),
(224, 'Arsenal', 19, '9.99', 7),
(225, 'Arsenal', 25, '9.99', 7),
(226, 'Arsenal', 8, '9.99', 7),
(227, 'Arsenal', 10, '9.99', 7),
(228, 'Arsenal', 13, '9.99', 7),
(229, 'Arsenal', 2, '9.99', 7),
(230, 'Arsenal', 4, '9.99', 7),
(231, 'Arsenal', 5, '9.99', 7),
(232, 'Arsenal', 7, '9.99', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `CodigoCliente` int(4) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`CodigoCliente`, `Nombre`, `Direccion`) VALUES
(1, 'Pepe Perez', 'Madrid'),
(2, 'Eva Isanta', 'Madrid'),
(3, 'Antonio Recio', 'Madrid'),
(4, 'Pablo Perez', 'Madrid'),
(5, 'Miguel Hernandez', 'Madrid'),
(6, 'Adrian Saez', 'Madrid'),
(7, 'Javier Fernandez', 'Madrid'),
(8, 'Edu Duque', 'Madrid'),
(9, 'Carlos Castanedo', 'Madrid'),
(10, 'Jose Ruiz', 'Madrid'),
(11, 'Mario Martin', 'Madrid'),
(12, 'Carolina Martinez', 'Salamanca'),
(13, 'Eva Ambit', 'Salamanca'),
(14, 'Adrian Alique', 'Salamanca'),
(15, 'Marcos Lopez', 'Salamanca'),
(16, 'Celia Henche', 'Salamanca'),
(17, 'Patricia Plaza', 'Salamanca'),
(18, 'Juan Jose Rojo', 'Salamanca'),
(19, 'Irene Martinez', 'Salamanca'),
(20, 'Hugo Mateos', 'Salamanca'),
(21, 'Penelope Diaz', 'Salamanca'),
(22, 'Elena Lopez', 'Salamanca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_tienda`
--

CREATE TABLE `compra_tienda` (
  `CodigoCompra` int(4) NOT NULL,
  `PrecioTotal` decimal(5,2) DEFAULT NULL,
  `CodigoTrabajador` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `Nombre` varchar(20) NOT NULL,
  `Telefono` int(9) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`Nombre`, `Telefono`, `Direccion`) VALUES
('FUTBOLLSHIRTS', 916795825, 'Plaza CRONOS / 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado`
--

CREATE TABLE `encargado` (
  `CodigoEncargado` int(4) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Sueldo` decimal(4,2) DEFAULT NULL,
  `CodigoTienda` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `encargado`
--

INSERT INTO `encargado` (`CodigoEncargado`, `Nombre`, `Sueldo`, `CodigoTienda`) VALUES
(1, 'Jorge Punzon Chichon', '99.99', 1),
(2, 'Bryant Ayala', '99.99', 4),
(3, 'Sonia Aranda', '99.99', 5),
(4, 'Hugo Torre', '99.99', 6),
(5, 'Aaron Henche', '99.99', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_online`
--

CREATE TABLE `pedido_online` (
  `CodigoPedido` int(4) NOT NULL,
  `PrecioTotal` decimal(5,2) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `CodigoTienda` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido_online`
--

INSERT INTO `pedido_online` (`CodigoPedido`, `PrecioTotal`, `Direccion`, `CodigoTienda`) VALUES
(1, '160.00', 'Madrid', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `CodigoTienda` int(4) NOT NULL,
  `Ubicacion` varchar(30) DEFAULT NULL,
  `Telefono` int(9) DEFAULT NULL,
  `CodigoEncargado` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`CodigoTienda`, `Ubicacion`, `Telefono`, `CodigoEncargado`) VALUES
(1, 'Madrid', 620793284, 1),
(4, 'Barcelona', 684535458, 2),
(5, 'Sevilla', 695728412, 3),
(6, 'Guadalajara', 672170246, 4),
(7, 'Salamanca', 620793281, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `CodigoTrabajador` int(4) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Sueldo` decimal(4,2) DEFAULT NULL,
  `CodigoTienda` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`CodigoTrabajador`, `Nombre`, `Sueldo`, `CodigoTienda`) VALUES
(1, 'Maria Guijarro', '5.00', 1),
(2, 'Rodrigo Martinez', '99.99', 1),
(3, 'Sergio Flores', '99.99', 1),
(4, 'Alexander Yamir', '99.99', 1),
(5, 'Sofia Martinez', '99.99', 4),
(6, 'Diego Sanchez', '99.99', 4),
(7, 'Alba Romero', '99.99', 4),
(8, 'Alberto Plaza', '99.99', 4),
(9, 'Marco Ripoll', '99.99', 5),
(10, 'Jhon Novino', '99.99', 5),
(11, 'Andrei Daniliuc', '99.99', 5),
(12, 'Jose Antonio Peña', '99.99', 5),
(13, 'Ester Henche', '99.99', 6),
(14, 'Diego Heras', '99.99', 6),
(15, 'Irene Cava', '99.99', 6),
(16, 'Raul Peña', '99.99', 6),
(17, 'Ana Guijarro', '99.99', 7),
(18, 'Jesus Martinez', '99.99', 7),
(19, 'Alvaro Perez', '99.99', 7),
(20, 'Diego Ruiz', '99.99', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camiseta`
--
ALTER TABLE `camiseta`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CodigoTienda` (`CodigoTienda`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CodigoCliente`) USING BTREE;

--
-- Indices de la tabla `compra_tienda`
--
ALTER TABLE `compra_tienda`
  ADD PRIMARY KEY (`CodigoCompra`),
  ADD KEY `CodigoTrabajador` (`CodigoTrabajador`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD PRIMARY KEY (`CodigoEncargado`),
  ADD KEY `CodigoTienda` (`CodigoTienda`);

--
-- Indices de la tabla `pedido_online`
--
ALTER TABLE `pedido_online`
  ADD PRIMARY KEY (`CodigoPedido`),
  ADD KEY `CodigoTienda` (`CodigoTienda`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`CodigoTienda`),
  ADD KEY `CodigoEncargado` (`CodigoEncargado`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`CodigoTrabajador`),
  ADD KEY `CodigoTienda` (`CodigoTienda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camiseta`
--
ALTER TABLE `camiseta`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `CodigoCliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `compra_tienda`
--
ALTER TABLE `compra_tienda`
  MODIFY `CodigoCompra` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encargado`
--
ALTER TABLE `encargado`
  MODIFY `CodigoEncargado` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pedido_online`
--
ALTER TABLE `pedido_online`
  MODIFY `CodigoPedido` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `CodigoTienda` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `CodigoTrabajador` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `camiseta`
--
ALTER TABLE `camiseta`
  ADD CONSTRAINT `camiseta_ibfk_1` FOREIGN KEY (`CodigoTienda`) REFERENCES `tienda` (`CodigoTienda`);

--
-- Filtros para la tabla `compra_tienda`
--
ALTER TABLE `compra_tienda`
  ADD CONSTRAINT `CodigoTrabajador` FOREIGN KEY (`CodigoTrabajador`) REFERENCES `trabajador` (`CodigoTrabajador`);

--
-- Filtros para la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD CONSTRAINT `CodigoTienda` FOREIGN KEY (`CodigoTienda`) REFERENCES `tienda` (`CodigoTienda`);

--
-- Filtros para la tabla `pedido_online`
--
ALTER TABLE `pedido_online`
  ADD CONSTRAINT `pedido_online_ibfk_1` FOREIGN KEY (`CodigoTienda`) REFERENCES `tienda` (`CodigoTienda`);

--
-- Filtros para la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD CONSTRAINT `CodigoEncargado` FOREIGN KEY (`CodigoEncargado`) REFERENCES `encargado` (`CodigoEncargado`);

--
-- Filtros para la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `trabajador_ibfk_1` FOREIGN KEY (`CodigoTienda`) REFERENCES `tienda` (`CodigoTienda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
