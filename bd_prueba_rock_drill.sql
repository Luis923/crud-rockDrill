-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2022 a las 00:46:51
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_prueba_rock_drill`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id` int(100) UNSIGNED NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidoPaterno` varchar(20) NOT NULL,
  `apellidoMaterno` varchar(20) NOT NULL,
  `tipoDocumento` varchar(20) NOT NULL,
  `numeroDocumento` varchar(20) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `departamento` varchar(30) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `distrito` varchar(30) NOT NULL,
  `direccionExacta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `tipoDocumento`, `numeroDocumento`, `sexo`, `fechaNacimiento`, `departamento`, `provincia`, `distrito`, `direccionExacta`) VALUES
(3, 'asd9', 'Huamani', 'Robles', 'RUC', '75315978965', 'M', '2000-01-08', 'Lima', 'Lima', 'Miraflores', 'AAHH Jose Maria Arguedaz Mz.G Lt. 24'),
(5, 'Alvaro5', 'Cruz2', 'Quispe2', 'Pasaporte', '153478695424', 'M', '2000-01-29', 'Lima', 'Lima', 'Surco', 'Mz. S Lt. 23 '),
(14, 'asd9', 'Huamani', 'Robles', 'Pasaporte', '15348679546', 'M', '2000-01-08', 'Lima', 'Lima', 'Miraflores', 'AAHH Jose Maria Arguedaz Mz.G Lt. 24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
