-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2020 a las 19:08:21
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen2p`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `agregaIncidente` (IN `p_idLugar` INT(11), IN `p_idTipoIncidente` INT(11))  BEGIN
		INSERT INTO incidente (idLugar, idTipoIncidente) VALUES(p_idLugar, p_idTipoIncidente);
	END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidente`
--

CREATE TABLE `incidente` (
  `idLugar` int(11) NOT NULL,
  `idTipoIncidente` int(11) NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `incidente`
--

INSERT INTO `incidente` (`idLugar`, `idTipoIncidente`, `fechaCreacion`) VALUES
(1, 1, '2020-05-06 10:50:23'),
(1, 5, '2020-05-06 12:01:12'),
(1, 6, '2020-05-06 12:00:19'),
(1, 7, '2020-05-06 10:32:33'),
(1, 7, '2020-05-06 11:59:11'),
(2, 3, '2020-05-06 11:59:19'),
(2, 4, '2020-05-06 11:04:42'),
(3, 1, '2020-05-06 11:58:54'),
(3, 2, '2020-05-06 11:57:48'),
(3, 7, '2020-05-06 12:00:43'),
(4, 5, '2020-05-06 10:32:33'),
(4, 5, '2020-05-06 12:00:36'),
(5, 2, '2020-05-06 12:00:59'),
(5, 5, '2020-05-06 11:59:03'),
(6, 1, '2020-05-06 12:00:52'),
(6, 1, '2020-05-06 12:04:27'),
(7, 2, '2020-05-06 12:01:28'),
(7, 3, '2020-05-06 12:00:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `idLugar` int(11) NOT NULL,
  `nombreLugar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`idLugar`, `nombreLugar`) VALUES
(1, 'Centro Turistico'),
(2, 'Laboratorios'),
(3, 'Restaurante'),
(4, 'Centro Operativo'),
(5, 'Triceratops'),
(6, 'Dilofosaurios'),
(7, 'Velociraptors'),
(8, 'TRex'),
(9, 'Planicie de los herbivoros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoincidente`
--

CREATE TABLE `tipoincidente` (
  `idTipoIncidente` int(11) NOT NULL,
  `nombreTipoIncidente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoincidente`
--

INSERT INTO `tipoincidente` (`idTipoIncidente`, `nombreTipoIncidente`) VALUES
(1, 'Falla Electrica'),
(2, 'Fuga de Herbivoro'),
(3, 'Fuga de Velociraptors'),
(4, 'Fuga de TRex'),
(5, 'Robo de ADN'),
(6, 'Auto Descompuesto'),
(7, 'Visitantes en zona no autorizada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `incidente`
--
ALTER TABLE `incidente`
  ADD PRIMARY KEY (`idLugar`,`idTipoIncidente`,`fechaCreacion`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`idLugar`);

--
-- Indices de la tabla `tipoincidente`
--
ALTER TABLE `tipoincidente`
  ADD PRIMARY KEY (`idTipoIncidente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `idLugar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipoincidente`
--
ALTER TABLE `tipoincidente`
  MODIFY `idTipoIncidente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incidente`
--
ALTER TABLE `incidente`
  ADD CONSTRAINT `incidente_ibfk_1` FOREIGN KEY (`idLugar`) REFERENCES `lugar` (`idLugar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `incidente_ibfk_2` FOREIGN KEY (`idTipoIncidente`) REFERENCES `tipoincidente` (`idTipoIncidente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
