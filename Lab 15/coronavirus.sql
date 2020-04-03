-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2020 a las 02:39:45
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coronavirus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caso`
--

CREATE TABLE `caso` (
  `id` int(11) NOT NULL,
  `lugar_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `caso`
--

INSERT INTO `caso` (`id`, `lugar_id`, `created_at`) VALUES
(1, 1, '2020-03-27 01:34:34'),
(2, 1, '2020-03-27 01:34:34'),
(3, 2, '2020-03-27 01:34:47'),
(4, 4, '2020-03-27 01:34:47'),
(5, 5, '2020-03-27 01:34:57'),
(6, 5, '2020-03-27 01:34:57'),
(7, 5, '2020-03-27 01:35:04'),
(8, 5, '2020-03-27 01:35:04'),
(9, 5, '2020-03-27 01:35:11'),
(10, 5, '2020-03-27 01:35:11'),
(11, 6, '2020-03-27 01:35:18'),
(12, 5, '2020-03-27 01:35:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nombre`) VALUES
(1, 'Infectado'),
(2, 'Muerto'),
(3, 'Recuperado'),
(4, 'Negativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`id`, `nombre`) VALUES
(1, 'Queretarock'),
(2, 'Celayork'),
(3, 'Chiapaslovakia'),
(4, 'Michigan'),
(5, 'CDMX'),
(6, 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiene`
--

CREATE TABLE `tiene` (
  `caso_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiene`
--

INSERT INTO `tiene` (`caso_id`, `estado_id`, `created_at`) VALUES
(1, 1, '2020-03-27 01:36:35'),
(2, 1, '2020-03-27 01:36:35'),
(3, 1, '2020-03-27 01:36:51'),
(4, 1, '2020-03-27 01:36:51'),
(5, 1, '2020-03-27 01:37:19'),
(6, 1, '2020-03-27 01:37:19'),
(7, 1, '2020-03-27 01:37:48'),
(7, 2, '2020-03-27 01:38:03'),
(8, 1, '2020-03-27 01:38:03'),
(9, 1, '2020-03-27 01:38:12'),
(9, 3, '2020-03-27 01:38:20'),
(10, 4, '2020-03-27 01:38:32'),
(11, 1, '2020-03-27 01:38:46'),
(12, 1, '2020-03-27 01:38:46');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caso`
--
ALTER TABLE `caso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `caso_lugar_index` (`lugar_id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD KEY `caso_id` (`caso_id`),
  ADD KEY `estado_id` (`estado_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caso`
--
ALTER TABLE `caso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caso`
--
ALTER TABLE `caso`
  ADD CONSTRAINT `caso_lugar` FOREIGN KEY (`lugar_id`) REFERENCES `lugar` (`id`);

--
-- Filtros para la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD CONSTRAINT `tiene_caso` FOREIGN KEY (`caso_id`) REFERENCES `caso` (`id`),
  ADD CONSTRAINT `tiene_estado` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
