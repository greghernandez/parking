-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 08:22 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `modelo` varchar(20) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `color` varchar(15) COLLATE utf8_bin NOT NULL,
  `placa` varchar(11) COLLATE utf8_bin NOT NULL,
  `estado` int(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`modelo`, `date`, `color`, `placa`, `estado`, `id_usuario`) VALUES
('equis', '2017-01-01', 'rojo', '123-12-1h', 0, 2),
('adf', '2017-01-01', 'col', '134-143-1', 0, 1),
('versa', '2017-01-01', 'blaco', 'uml-3aw-22', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cajones`
--

CREATE TABLE `cajones` (
  `id_caj` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  `num` int(3) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cajones`
--

INSERT INTO `cajones` (`id_caj`, `id_est`, `num`, `estado`) VALUES
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
-- Table structure for table `estacionamiento`
--

CREATE TABLE `estacionamiento` (
  `id_est` int(11) NOT NULL,
  `latitud` varchar(20) COLLATE utf8_bin NOT NULL,
  `longitud` varchar(20) COLLATE utf8_bin NOT NULL,
  `zona` varchar(30) COLLATE utf8_bin NOT NULL,
  `nom_plaza` varchar(30) COLLATE utf8_bin NOT NULL,
  `tarifa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `estacionamiento`
--

INSERT INTO `estacionamiento` (`id_est`, `latitud`, `longitud`, `zona`, `nom_plaza`, `tarifa`) VALUES
(1, '20.674563', '100.4385702', 'Juriquilla', 'Antea Lifestyle Center', 20),
(2, '20.5777584', '100.4077649', 'Prados de la capilla ', 'Galerías Querétaro', 20),
(3, '20.6147042', '100.3933802', 'Parques Industriales', 'Plaza del Parque', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pago_est`
--

CREATE TABLE `pago_est` (
  `id_pago` int(11) NOT NULL,
  `monto` varchar(20) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `h_inicio` varchar(5) COLLATE utf8_bin NOT NULL,
  `h_salida` varchar(5) COLLATE utf8_bin NOT NULL,
  `id_est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pago_parq`
--

CREATE TABLE `pago_parq` (
  `id_pago` int(11) NOT NULL,
  `monto` varchar(20) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `h_inicio` varchar(5) COLLATE utf8_bin NOT NULL,
  `h_salida` varchar(5) COLLATE utf8_bin NOT NULL,
  `id_parq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pago_parq`
--

INSERT INTO `pago_parq` (`id_pago`, `monto`, `fecha`, `h_inicio`, `h_salida`, `id_parq`) VALUES
(8, '22.5', '2017-12-07', '21', '5', 1),
(9, '22.5', '2017-12-07', '22', '5', 2),
(10, '22.5', '2017-12-07', '22', '5', 2),
(11, '22.5', '2017-12-07', '22', '5', 2),
(12, '22.5', '2017-12-07', '22', '5', 2),
(13, '22.5', '2017-12-07', '22', '5', 2),
(14, '22.5', '2017-12-07', '22', '5', 2),
(15, '22.5', '2017-12-07', '22', '5', 2),
(16, '22.5', '2017-12-08', '17', '5', 3),
(17, '22.5', '2017-12-11', '3', '5', 4),
(18, '22.5', '2017-12-11', '16', '5', 2),
(19, '22.5', '2017-12-11', '16', '5', 3),
(20, '22.5', '2017-12-11', '18', '5', 5),
(21, '22.5', '2017-12-11', '19', '5', 5),
(22, '22.5', '2017-12-11', '19', '5', 5),
(23, '22.5', '2017-12-11', '19', '5', 5),
(24, '22.5', '2017-12-11', '19', '5', 5),
(25, '22.5', '2017-12-11', '19', '5', 6);

-- --------------------------------------------------------

--
-- Table structure for table `parquimetro`
--

CREATE TABLE `parquimetro` (
  `id_parq` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  `latitud` varchar(20) COLLATE utf8_bin NOT NULL,
  `longitud` varchar(20) COLLATE utf8_bin NOT NULL,
  `colonia` varchar(30) COLLATE utf8_bin NOT NULL,
  `calle` varchar(20) COLLATE utf8_bin NOT NULL,
  `tarifa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `parquimetro`
--

INSERT INTO `parquimetro` (`id_parq`, `estado`, `latitud`, `longitud`, `colonia`, `calle`, `tarifa`) VALUES
(1, 0, '20.592806', '100.398111', 'Centro', 'Hidalgo', 15),
(2, 0, '20.592861', '100.397917', 'Centro', 'Hidalgo', 15),
(3, 0, '20.592889', '100.397833', 'Centro ', 'Hidalgo', 15),
(4, 0, '20.592944', '100.397639', 'Centro', 'Hidalgo', 15),
(5, 0, '20.592972', '100.397556', 'Centro', 'Hidalgo', 15),
(6, 0, '20.593028', '100.397361', 'Centro', 'Hidalgo', 15),
(7, 1, '20.593111', '100.397167', 'Centro', 'Hidalgo', 15),
(8, 1, '20.593167', '100.396944', 'Centro', 'Hidalgo', 15),
(9, 1, '20.593167', '100.397000', 'Centro', 'Hidalgo', 15),
(10, 1, '20.593194', '100.396944', 'Centro', 'Hidalgo', 15),
(11, 1, '20.593222', '100.396778', 'Centro', 'Hidalgo', 15),
(12, 1, '20.593278', '100.396583', 'Centro', 'Hidalgo', 15),
(13, 1, '20.593333', '100.396444', 'Centro', 'Hidalgo', 15),
(14, 1, '20.593389', '100.396278', 'Centro', 'Hidalgo', 15),
(15, 1, '20.593444', '100.396083', 'Centro', 'Hidalgo', 15),
(16, 1, '20.593500', '100.395889', 'Centro', 'Hidalgo', 15),
(17, 1, '20.593556', '100.395694', 'Centro', 'Hidalgo', 15),
(18, 1, '20.593556', '100.395778', 'Centro', 'Hidalgo', 15),
(19, 1, '20.593611', '100.395583', 'Centro', 'Hidalgo', 15),
(20, 1, '20.593639', '100.395444', 'Centro', 'Hidalgo', 15),
(21, 1, '20.593694', '100.395250', 'Centro', 'Hidalgo', 15),
(22, 1, '20.593750', '100.395111', 'Centro', 'Hidalgo', 15),
(23, 1, '20.593806', '100.394889', 'Centro', 'Hidalgo', 15),
(24, 1, '20.593861', '100.394694', 'Centro', 'Hidalgo', 15),
(25, 1, '20.593917', '100.394528', 'Centro', 'Hidalgo', 15),
(26, 1, '20.593972', '100.394389', 'Centro', 'Hidalgo', 15),
(27, 1, '20.594056', '100.394194', 'Centro', 'Hidalgo', 15),
(28, 1, '20.594083', '100.394056', 'Centro', 'Hidalgo', 15),
(29, 1, '20.594139', '100.393806', 'Centro', 'Hidalgo', 15),
(30, 1, '20.594194', '100.393667', 'Centro', 'Hidalgo', 15),
(31, 1, '20.594250', '100.393500', 'Centro', 'Hidalgo', 15),
(32, 1, '20.594389', '100.393167', 'Centro', 'Hidalgo', 15),
(33, 1, '20.594444', '100.392833', 'Centro', 'Hidalgo', 15),
(34, 1, '20.594444', '100.392972', 'Centro', 'Hidalgo', 15),
(35, 1, '20.594472', '100.392667', 'Centro', 'Hidalgo', 15),
(36, 1, '20.594556', '100.392500', 'Centro', 'Hidalgo', 15),
(37, 1, '20.594583', '100.392333', 'Centro', 'Hidalgo', 15);

-- --------------------------------------------------------

--
-- Table structure for table `realiza_est`
--

CREATE TABLE `realiza_est` (
  `no_usuario` int(11) NOT NULL,
  `id_est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `realiza_parq`
--

CREATE TABLE `realiza_parq` (
  `no_usuario` int(11) NOT NULL,
  `id_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `realiza_parq`
--

INSERT INTO `realiza_parq` (`no_usuario`, `id_pago`) VALUES
(1, 2),
(2, 3),
(3, 4),
(1, 2),
(1, 3),
(1, 5),
(1, 5),
(1, 5),
(1, 5),
(1, 5),
(1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `no_usuario` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(30) COLLATE utf8_bin NOT NULL,
  `correo` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `telefono` int(10) NOT NULL,
  `no_tarjeta` int(16) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`no_usuario`, `nombre`, `apellido`, `correo`, `password`, `telefono`, `no_tarjeta`, `cvv`) VALUES
(1, 'luis', 'montes', 'luis@gmail.com', '1234', 123434, 124543424, 123),
(2, 'luis', 'montes', 'luis1@gmail.com', '1234', 123453445, 2147483647, 234),
(3, 'jose', 'addaf', 'jose@gmail.com', '1234', 1234133, 434323423, 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`placa`);

--
-- Indexes for table `cajones`
--
ALTER TABLE `cajones`
  ADD PRIMARY KEY (`id_caj`),
  ADD KEY `id_est` (`id_est`);

--
-- Indexes for table `estacionamiento`
--
ALTER TABLE `estacionamiento`
  ADD PRIMARY KEY (`id_est`);

--
-- Indexes for table `pago_est`
--
ALTER TABLE `pago_est`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `id_est` (`id_est`);

--
-- Indexes for table `pago_parq`
--
ALTER TABLE `pago_parq`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `id_parq` (`id_parq`);

--
-- Indexes for table `parquimetro`
--
ALTER TABLE `parquimetro`
  ADD PRIMARY KEY (`id_parq`);

--
-- Indexes for table `realiza_est`
--
ALTER TABLE `realiza_est`
  ADD KEY `no_usuario` (`no_usuario`),
  ADD KEY `id_est` (`id_est`);

--
-- Indexes for table `realiza_parq`
--
ALTER TABLE `realiza_parq`
  ADD KEY `no_usuario` (`no_usuario`),
  ADD KEY `id_parq` (`id_pago`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`no_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cajones`
--
ALTER TABLE `cajones`
  MODIFY `id_caj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;
--
-- AUTO_INCREMENT for table `estacionamiento`
--
ALTER TABLE `estacionamiento`
  MODIFY `id_est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pago_est`
--
ALTER TABLE `pago_est`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pago_parq`
--
ALTER TABLE `pago_parq`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `parquimetro`
--
ALTER TABLE `parquimetro`
  MODIFY `id_parq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `no_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cajones`
--
ALTER TABLE `cajones`
  ADD CONSTRAINT `cajones_ibfk_1` FOREIGN KEY (`id_est`) REFERENCES `estacionamiento` (`id_est`);

--
-- Constraints for table `pago_est`
--
ALTER TABLE `pago_est`
  ADD CONSTRAINT `pago_est_ibfk_1` FOREIGN KEY (`id_est`) REFERENCES `estacionamiento` (`id_est`);

--
-- Constraints for table `pago_parq`
--
ALTER TABLE `pago_parq`
  ADD CONSTRAINT `pago_parq_ibfk_1` FOREIGN KEY (`id_parq`) REFERENCES `parquimetro` (`id_parq`);

--
-- Constraints for table `realiza_est`
--
ALTER TABLE `realiza_est`
  ADD CONSTRAINT `realiza_est_ibfk_1` FOREIGN KEY (`no_usuario`) REFERENCES `usuario` (`no_usuario`),
  ADD CONSTRAINT `realiza_est_ibfk_2` FOREIGN KEY (`id_est`) REFERENCES `estacionamiento` (`id_est`);

--
-- Constraints for table `realiza_parq`
--
ALTER TABLE `realiza_parq`
  ADD CONSTRAINT `realiza_parq_ibfk_1` FOREIGN KEY (`no_usuario`) REFERENCES `usuario` (`no_usuario`),
  ADD CONSTRAINT `realiza_parq_ibfk_2` FOREIGN KEY (`id_pago`) REFERENCES `parquimetro` (`id_parq`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
