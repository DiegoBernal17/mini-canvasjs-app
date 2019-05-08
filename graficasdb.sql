-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-11-2018 a las 10:40:41
-- Versión del servidor: 5.7.22
-- Versión de PHP: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `graficasdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datapoints`
--

CREATE TABLE `datapoints` (
  `id` int(11) NOT NULL,
  `label` date NOT NULL,
  `y` decimal(8,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datapoints`
--

INSERT INTO `datapoints` (`id`, `label`, `y`) VALUES
(1, '2018-01-01', '18.6268'),
(2, '2018-02-01', '18.8143'),
(3, '2018-03-01', '18.7000'),
(4, '2018-04-01', '18.6893'),
(5, '2018-05-01', '19.8768'),
(6, '2018-06-01', '19.8768'),
(7, '2018-07-01', '18.5643'),
(8, '2018-08-01', '19.0643'),
(9, '2018-09-01', '18.7518'),
(10, '2018-10-01', '20.3143'),
(11, '2018-11-26', '24.0000'),
(12, '2018-11-27', '27.0000'),
(13, '2018-11-26', '80.0000'),
(14, '2018-11-16', '30.0000'),
(15, '2018-11-19', '10.0000'),
(16, '2018-11-01', '40.0000'),
(17, '2018-11-25', '40.0000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datapoints`
--
ALTER TABLE `datapoints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datapoints`
--
ALTER TABLE `datapoints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
