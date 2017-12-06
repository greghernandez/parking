-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2017 a las 00:34:13
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
  `modelo` varchar(20) COLLATE utf8_bin NOT NULL,
  `color` varchar(20) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`placa`, `modelo`, `color`, `fecha`, `id_usuario`, `estado`) VALUES
('1234', 'rw-wq', 'blanco', '2017-11-08', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacionamiento`
--

CREATE TABLE `estacionamiento` (
  `id_est` int(11) NOT NULL,
  `estado` int(2) NOT NULL,
  `locacion` int(50) NOT NULL,
  `colinia` varchar(40) COLLATE utf8_bin NOT NULL,
  `nom_plaza` varchar(50) COLLATE utf8_bin NOT NULL,
  `tarifa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `id_lugar` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `fecha` int(11) NOT NULL,
  `h_inicio` int(11) NOT NULL,
  `h_salida` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parquimetro`
--

CREATE TABLE `parquimetro` (
  `locacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `estado` int(2) NOT NULL,
  `colonia` varchar(50) COLLATE utf8_bin NOT NULL,
  `calle` varchar(50) COLLATE utf8_bin NOT NULL,
  `tarifa` int(2) NOT NULL,
  `latitud` varchar(30) COLLATE utf8_bin NOT NULL,
  `longi` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `parquimetro`
--

INSERT INTO `parquimetro` (`locacion`, `estado`, `colonia`, `calle`, `tarifa`, `latitud`, `longi`) VALUES
('20.592806, -100.398111', 1, 'Centro', 'Hidalgo', 15, '20.592806', '100.398111'),
('20.592861, -100.397917', 1, 'Centro', 'Hidalgo', 15, '20.592861', '100.397917'),
('20.592889, -100.397833', 1, 'Centro ', 'Hidalgo', 15, '20.592889', '100.397833'),
('20.592944, -100.397639', 1, 'Centro', 'Hidalgo', 15, '20.592944', '100.397639'),
('20.592972, -100.397556', 1, 'Centro', 'Hidalgo', 15, '20.592972', '100.397556'),
('20.593028, -100.397361', 1, 'Centro', 'Hidalgo', 15, '20.593028', '100.397361'),
('20.593111, -100.397167', 1, 'Centro', 'Hidalgo', 15, '20.593111', '100.397167'),
('20.593167, -100.396944', 1, 'Centro', 'Hidalgo', 15, '20.593167', '100.396944'),
('20.593167, -100.397000', 1, 'Centro', 'Hidalgo', 15, '20.593167', '100.397000'),
('20.593194, -100.396944', 1, 'Centro', 'Hidalgo', 15, '20.593194', '100.396944'),
('20.593222, -100.396778', 1, 'Centro', 'Hidalgo', 15, '20.593222', '100.396778'),
('20.593278, -100.396583', 1, 'Centro', 'Hidalgo', 15, '20.593278', '100.396583'),
('20.593333, -100.396444', 1, 'Centro', 'Hidalgo', 15, '20.593333', '100.396444'),
('20.593389, -100.396278', 1, 'Centro', 'Hidalgo', 15, '20.593389', '100.396278'),
('20.593444, -100.396083', 1, 'Centro', 'Hidalgo', 15, '20.593444', '100.396083'),
('20.593500, -100.395889', 1, 'Centro', 'Hidalgo', 15, '20.593500', '100.395889'),
('20.593556, -100.395694', 1, 'Centro', 'Hidalgo', 15, '20.593556', '100.395694'),
('20.593556, -100.395778', 1, 'Centro', 'Hidalgo', 15, '20.593556', '100.395778'),
('20.593611, -100.395583', 1, 'Centro', 'Hidalgo', 15, '20.593611', '100.395583'),
('20.593639, -100.395444', 1, 'Centro', 'Hidalgo', 15, '20.593639', '100.395444'),
('20.593694, -100.395250', 1, 'Centro', 'Hidalgo', 15, '20.593694', '100.395250'),
('20.593750, -100.395111', 1, 'Centro', 'Hidalgo', 15, '20.593750', '100.395111'),
('20.593806, -100.394889', 1, 'Centro', 'Hidalgo', 15, '20.593806', '100.394889'),
('20.593861, -100.394694', 1, 'Centro', 'Hidalgo', 15, '20.593861', '100.394694'),
('20.593917, -100.394528', 1, 'Centro', 'Hidalgo', 15, '20.593917', '100.394528'),
('20.593972, -100.394389', 1, 'Centro', 'Hidalgo', 15, '', ''),
('20.594056, -100.394194', 1, 'Centro', 'Hidalgo', 15, '', ''),
('20.594083, -100.394056', 1, 'Centro', 'Hidalgo', 15, '', ''),
('20.594139, -100.393806', 1, 'Centro', 'Hidalgo', 15, '', ''),
('20.594194, -100.393667', 1, 'Centro', 'Hidalgo', 15, '', ''),
('20.594250, -100.393500', 1, 'Centro', 'Hidalgo', 15, '', ''),
('20.594389, -100.393167', 1, 'Centro', 'Hidalgo', 15, '', ''),
('20.594444, -100.392833', 1, 'Centro', 'Hidalgo', 15, '', ''),
('20.594444, -100.392972', 1, 'Centro', 'Hidalgo', 15, '', ''),
('20.594472, -100.392667', 1, 'Centro', 'Hidalgo', 15, '', ''),
('20.594556, -100.392500', 1, 'Centro', 'Hidalgo', 15, '', ''),
('20.594583, -100.392333', 1, 'Centro', 'Hidalgo', 15, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `num_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(30) COLLATE utf8_bin NOT NULL,
  `apellido_usuario` varchar(30) COLLATE utf8_bin NOT NULL,
  `correo` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(30) COLLATE utf8_bin NOT NULL,
  `telefono` int(10) NOT NULL,
  `no_tarjeta` int(10) NOT NULL,
  `cvv_usuario` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`num_usuario`, `nombre_usuario`, `apellido_usuario`, `correo`, `password`, `telefono`, `no_tarjeta`, `cvv_usuario`) VALUES
(1, 'luis', 'montes', 'luis@gmail.com', '1234', 126234567, 237654324, 123),
(3, 'ad', 'e', 'qwe@gmail.com', '123', 123, 123, 234),
(4, 'luis', 'montes', 'luismontes@gmail.com', '1234', 12345, 2147483647, 123);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`placa`);

--
-- Indices de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  ADD PRIMARY KEY (`id_est`);

--
-- Indices de la tabla `parquimetro`
--
ALTER TABLE `parquimetro`
  ADD PRIMARY KEY (`locacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`num_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  MODIFY `id_est` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `num_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
