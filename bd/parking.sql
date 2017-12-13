-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2017 a las 20:45:12
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parking`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `placa` varchar(9) COLLATE utf8_bin NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  `modelo` varchar(30) COLLATE utf8_bin NOT NULL,
  `year` int(4) NOT NULL,
  `color` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajones`
--

CREATE TABLE `cajones` (
  `id_cajon` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  `num` int(3) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cajones`
--

INSERT INTO `cajones` (`id_cajon`, `id_est`, `num`, `estado`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(6, 1, 6, 1),
(7, 1, 7, 1),
(8, 1, 8, 1),
(9, 1, 9, 1),
(10, 1, 10, 1),
(11, 1, 11, 1),
(12, 1, 12, 1),
(13, 1, 13, 1),
(14, 1, 14, 1),
(15, 1, 15, 1),
(16, 1, 16, 1),
(17, 1, 17, 1),
(18, 1, 18, 1),
(19, 1, 19, 1),
(20, 1, 20, 1),
(21, 1, 21, 1),
(22, 1, 22, 1),
(23, 1, 23, 1),
(24, 1, 24, 1),
(25, 1, 25, 1),
(26, 1, 26, 1),
(27, 1, 27, 1),
(28, 1, 28, 1),
(29, 1, 29, 1),
(30, 1, 30, 1),
(31, 1, 31, 1),
(32, 1, 32, 1),
(33, 1, 33, 1),
(34, 1, 34, 1),
(35, 1, 35, 1),
(36, 1, 37, 1),
(37, 1, 38, 1),
(38, 1, 39, 1),
(39, 1, 40, 1),
(40, 1, 41, 1),
(41, 1, 42, 1),
(42, 1, 43, 1),
(43, 1, 44, 1),
(44, 1, 45, 1),
(45, 1, 46, 1),
(46, 1, 47, 1),
(47, 1, 48, 1),
(48, 1, 49, 1),
(49, 1, 50, 1),
(50, 2, 1, 1),
(51, 2, 2, 1),
(52, 2, 3, 1),
(53, 2, 4, 1),
(54, 2, 5, 1),
(55, 2, 6, 1),
(56, 2, 7, 1),
(57, 2, 8, 1),
(58, 2, 9, 1),
(59, 2, 10, 1),
(60, 2, 11, 1),
(61, 2, 12, 1),
(62, 2, 13, 1),
(63, 2, 14, 1),
(64, 2, 15, 1),
(65, 2, 16, 1),
(66, 2, 17, 1),
(67, 2, 18, 1),
(68, 2, 19, 1),
(69, 2, 20, 1),
(70, 2, 21, 1),
(71, 2, 22, 1),
(72, 2, 23, 1),
(73, 2, 24, 1),
(74, 2, 25, 1),
(75, 2, 26, 1),
(76, 2, 27, 1),
(77, 2, 28, 1),
(78, 2, 29, 1),
(79, 2, 30, 1),
(80, 2, 31, 1),
(81, 2, 32, 1),
(82, 2, 33, 1),
(83, 2, 34, 1),
(84, 2, 35, 1),
(85, 2, 36, 1),
(86, 2, 37, 1),
(87, 2, 38, 1),
(88, 2, 39, 1),
(89, 2, 40, 1),
(90, 2, 41, 1),
(91, 2, 42, 1),
(92, 2, 43, 1),
(93, 2, 44, 1),
(94, 2, 45, 1),
(95, 2, 46, 1),
(96, 2, 47, 1),
(97, 2, 48, 1),
(98, 2, 49, 1),
(99, 2, 50, 1),
(150, 3, 1, 1),
(151, 3, 2, 1),
(152, 3, 3, 1),
(153, 3, 4, 1),
(154, 3, 5, 1),
(155, 3, 6, 1),
(156, 3, 7, 1),
(157, 3, 8, 1),
(158, 3, 9, 1),
(159, 3, 10, 1),
(160, 3, 11, 1),
(161, 3, 12, 1),
(162, 3, 13, 1),
(163, 3, 14, 1),
(164, 3, 15, 1),
(165, 3, 16, 1),
(166, 3, 17, 1),
(167, 3, 18, 1),
(168, 3, 19, 1),
(169, 3, 20, 1),
(170, 3, 21, 1),
(171, 3, 22, 1),
(172, 3, 23, 1),
(173, 3, 24, 1),
(174, 3, 25, 1),
(175, 3, 26, 1),
(176, 3, 27, 1),
(177, 3, 28, 1),
(178, 3, 29, 1),
(179, 3, 30, 1),
(180, 3, 31, 1),
(181, 3, 32, 1),
(182, 3, 33, 1),
(183, 3, 34, 1),
(184, 3, 35, 1),
(185, 3, 36, 1),
(186, 3, 37, 1),
(187, 3, 38, 1),
(188, 3, 39, 1),
(189, 3, 40, 1),
(190, 3, 41, 1),
(191, 3, 42, 1),
(192, 3, 43, 1),
(193, 3, 44, 1),
(194, 3, 45, 1),
(195, 3, 46, 1),
(196, 3, 47, 1),
(197, 3, 48, 1),
(198, 3, 49, 1),
(199, 3, 50, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(30) COLLATE utf8_bin NOT NULL,
  `correo` varchar(30) COLLATE utf8_bin NOT NULL,
  `contraseña` varbinary(200) NOT NULL,
  `telefono` int(10) NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_bin NOT NULL,
  `municipio` varchar(30) COLLATE utf8_bin NOT NULL,
  `cp` int(6) NOT NULL,
  `rfc` varbinary(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacionamiento`
--

CREATE TABLE `estacionamiento` (
  `id_est` int(11) NOT NULL,
  `latitud` float NOT NULL,
  `longitud` float NOT NULL,
  `zona` varchar(30) COLLATE utf8_bin NOT NULL,
  `nom_plaza` varchar(30) COLLATE utf8_bin NOT NULL,
  `tarifa1` float NOT NULL,
  `tarifa2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estacionamiento`
--

INSERT INTO `estacionamiento` (`id_est`, `latitud`, `longitud`, `zona`, `nom_plaza`, `tarifa1`, `tarifa2`) VALUES
(1, 20.6746, 100.439, 'Juriquilla', 'Antea Lifestyle Center', 20, 10),
(2, 20.5778, 100.408, 'Prados de la capilla ', 'Galerías Querétaro', 20, 10),
(3, 20.6147, 100.393, 'Parques Industriales', 'Plaza del Parque', 12, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_parq`
--

CREATE TABLE `info_parq` (
  `id_infoparq` int(11) NOT NULL,
  `colonia` varchar(30) COLLATE utf8_bin NOT NULL,
  `calle` varchar(30) COLLATE utf8_bin NOT NULL,
  `tarifa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `info_parq`
--

INSERT INTO `info_parq` (`id_infoparq`, `colonia`, `calle`, `tarifa`) VALUES
(1, 'Centro', 'Hidalgo', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_est`
--

CREATE TABLE `pago_est` (
  `id_pago` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  `monto` float NOT NULL,
  `tiempo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_parq`
--

CREATE TABLE `pago_parq` (
  `id_pago` int(11) NOT NULL,
  `id_parq` int(11) NOT NULL,
  `monto` float NOT NULL,
  `tiempo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parquimetro`
--

CREATE TABLE `parquimetro` (
  `id_parq` int(11) NOT NULL,
  `id_infoparq` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  `latitud` float NOT NULL,
  `longitud` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `parquimetro`
--

INSERT INTO `parquimetro` (`id_parq`, `id_infoparq`, `estado`, `latitud`, `longitud`) VALUES
(1, 1, 1, 20.5928, 100.398),
(2, 1, 1, 20.5929, 100.398),
(3, 1, 1, 20.5929, 100.398),
(4, 1, 1, 20.5929, 100.398),
(5, 1, 1, 20.593, 100.398),
(6, 1, 1, 20.593, 100.397),
(7, 1, 1, 20.5931, 100.397),
(8, 1, 1, 20.5932, 100.397),
(9, 1, 1, 20.5932, 100.397),
(10, 1, 1, 20.5932, 100.397),
(11, 1, 1, 20.5932, 100.397),
(12, 1, 1, 20.5933, 100.397),
(13, 1, 1, 20.5933, 100.396),
(14, 1, 1, 20.5934, 100.396),
(15, 1, 1, 20.5934, 100.396),
(16, 1, 1, 20.5935, 100.396),
(17, 1, 1, 20.5936, 100.396),
(18, 1, 1, 20.5936, 100.396),
(19, 1, 1, 20.5936, 100.396),
(20, 1, 1, 20.5936, 100.395),
(21, 1, 1, 20.5937, 100.395),
(22, 1, 1, 20.5938, 100.395),
(23, 1, 1, 20.5938, 100.395),
(24, 1, 1, 20.5939, 100.395),
(25, 1, 1, 20.5939, 100.395),
(26, 1, 1, 20.594, 100.394),
(27, 1, 1, 20.5941, 100.394),
(28, 1, 1, 20.5941, 100.394),
(29, 1, 1, 20.5941, 100.394),
(30, 1, 1, 20.5942, 100.394),
(31, 1, 1, 20.5942, 100.394),
(32, 1, 1, 20.5944, 100.393),
(33, 1, 1, 20.5944, 100.393),
(34, 1, 1, 20.5944, 100.393),
(35, 1, 1, 20.5945, 100.393),
(36, 1, 1, 20.5946, 100.393),
(37, 1, 1, 20.5946, 100.392);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `realiza_est`
--

CREATE TABLE `realiza_est` (
  `id_cliente` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `realiza_parq`
--

CREATE TABLE `realiza_parq` (
  `id_cliente` int(11) NOT NULL,
  `id_parq` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `no_tarjeta` varbinary(128) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cvv` int(3) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `cajones`
--
ALTER TABLE `cajones`
  ADD PRIMARY KEY (`id_cajon`),
  ADD KEY `id_est` (`id_est`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  ADD PRIMARY KEY (`id_est`);

--
-- Indices de la tabla `info_parq`
--
ALTER TABLE `info_parq`
  ADD PRIMARY KEY (`id_infoparq`);

--
-- Indices de la tabla `pago_est`
--
ALTER TABLE `pago_est`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `id_est` (`id_est`);

--
-- Indices de la tabla `pago_parq`
--
ALTER TABLE `pago_parq`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `id_parq` (`id_parq`);

--
-- Indices de la tabla `parquimetro`
--
ALTER TABLE `parquimetro`
  ADD PRIMARY KEY (`id_parq`),
  ADD KEY `id_infoparq` (`id_infoparq`);

--
-- Indices de la tabla `realiza_est`
--
ALTER TABLE `realiza_est`
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_est` (`id_est`);

--
-- Indices de la tabla `realiza_parq`
--
ALTER TABLE `realiza_parq`
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_parq` (`id_parq`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`no_tarjeta`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cajones`
--
ALTER TABLE `cajones`
  MODIFY `id_cajon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  MODIFY `id_est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `info_parq`
--
ALTER TABLE `info_parq`
  MODIFY `id_infoparq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pago_est`
--
ALTER TABLE `pago_est`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pago_parq`
--
ALTER TABLE `pago_parq`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `parquimetro`
--
ALTER TABLE `parquimetro`
  MODIFY `id_parq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `cajones`
--
ALTER TABLE `cajones`
  ADD CONSTRAINT `cajones_ibfk_1` FOREIGN KEY (`id_est`) REFERENCES `estacionamiento` (`id_est`);

--
-- Filtros para la tabla `pago_est`
--
ALTER TABLE `pago_est`
  ADD CONSTRAINT `pago_est_ibfk_1` FOREIGN KEY (`id_est`) REFERENCES `estacionamiento` (`id_est`);

--
-- Filtros para la tabla `pago_parq`
--
ALTER TABLE `pago_parq`
  ADD CONSTRAINT `pago_parq_ibfk_1` FOREIGN KEY (`id_parq`) REFERENCES `parquimetro` (`id_parq`);

--
-- Filtros para la tabla `parquimetro`
--
ALTER TABLE `parquimetro`
  ADD CONSTRAINT `parquimetro_ibfk_1` FOREIGN KEY (`id_infoparq`) REFERENCES `info_parq` (`id_infoparq`);

--
-- Filtros para la tabla `realiza_est`
--
ALTER TABLE `realiza_est`
  ADD CONSTRAINT `realiza_est_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `realiza_est_ibfk_2` FOREIGN KEY (`id_est`) REFERENCES `estacionamiento` (`id_est`);

--
-- Filtros para la tabla `realiza_parq`
--
ALTER TABLE `realiza_parq`
  ADD CONSTRAINT `realiza_parq_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `realiza_parq_ibfk_2` FOREIGN KEY (`id_parq`) REFERENCES `parquimetro` (`id_parq`);

--
-- Filtros para la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD CONSTRAINT `tarjeta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
