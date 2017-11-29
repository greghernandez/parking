-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2017 a las 21:45:31
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
  `locacion` int(50) NOT NULL,
  `estado` int(2) NOT NULL,
  `colonia` varchar(50) COLLATE utf8_bin NOT NULL,
  `calle` varchar(50) COLLATE utf8_bin NOT NULL,
  `tarifa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  MODIFY `num_usuario` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
