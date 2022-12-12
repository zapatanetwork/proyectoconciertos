-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2022 a las 17:19:36
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `nombreCiudad` varchar(30) NOT NULL,
  `id_festival_ciudad` int(11) NOT NULL,
  `id_hotel_ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `nombreCiudad`, `id_festival_ciudad`, `id_hotel_ciudad`) VALUES
(1, 'Jerez', 1, 1),
(2, 'Jerez', 1, 13),
(3, 'Castellon', 4, 2),
(4, 'Castellon', 4, 14),
(5, 'Albacete', 5, 3),
(6, 'Albacete', 5, 15),
(7, 'Murcia', 8, 4),
(8, 'Murcia', 8, 16),
(9, 'Madrid', 10, 5),
(10, 'Madrid', 10, 17),
(11, 'Alicante', 13, 6),
(12, 'Alicante', 13, 18),
(13, 'Valencia', 15, 7),
(14, 'Valencia', 15, 19),
(15, 'Barcelona', 16, 8),
(16, 'Barcelona', 16, 20),
(17, 'Barcelona', 18, 8),
(18, 'Barcelona', 18, 20),
(19, 'Vitoria', 21, 9),
(20, 'Vitoria', 21, 21),
(21, 'Mallorca', 24, 10),
(22, 'Mallorca', 24, 22),
(23, 'Marbella', 27, 11),
(24, 'Marbella', 27, 23),
(25, 'Barbate', 30, 12),
(26, 'Barbate', 30, 24),
(27, 'Madrid', 33, 5),
(28, 'Madrid', 33, 17),
(29, 'Valencia', 35, 7),
(30, 'Valencia', 35, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `festival`
--

CREATE TABLE `festival` (
  `nombreFestival` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `id_festival` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `festival`
--

INSERT INTO `festival` (`nombreFestival`, `ciudad`, `fecha`, `id_festival`) VALUES
('Primavera trompetera fest', 'Jerez', '7 de Abril', 1),
('Sansan Festival', 'Castellon', '14 de Abril', 4),
('Viña Rock', 'Albacete', '28 de Abril', 5),
('Warm Up Festival', 'Murcia', '29 de Abril', 8),
('Tomavistas', 'Madrid', '19 de Mayo', 10),
('Spring Festival', 'Alicante', '27 de Mayo', 13),
('Love The 90s Valencia', 'Valencia', '28 de Mayo', 15),
('Primavera sound', 'Barcelona', '2 de Junio', 16),
('Sonar Festival', 'Barcelona', '16 de Junio', 18),
('Azkena rock festival', 'Vitoria', '16 de Junio', 21),
('Mallorca live festival', 'Mallorca', '24 de Junio', 24),
('Starlite festival', 'Marbella', '14 de Julio', 27),
('Cabo de plata', 'Barbate', '20 de Julio', 30),
('Universal music festival', 'Madrid', '22 de Junio', 33),
('Arenal sound', 'Valencia', '2 de Agosto', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `nombreHotel` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `transporte` varchar(30) NOT NULL,
  `id_hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`nombreHotel`, `ciudad`, `transporte`, `id_hotel`) VALUES
('Hostal Sanvi', 'Jerez', 'Bus', 1),
('Hotel Zaymar', 'Castellon', 'Bus', 2),
('Hostal Atienzar Albacete', 'Albacete', 'Bus', 3),
('La Casa Verde Hostel', 'Murcia', 'Bus', 4),
('Safestay Madrid', 'Madrid', 'Cercanías', 5),
('Hostal El Paraiso Playa Alican', 'Alicante', 'Cercanías', 6),
('Hostal Moratin', 'Valencia', 'Cercanías', 7),
('Mambo Tango', 'Barcelona', 'Tranvía', 8),
('Hostal Del Arquitecto', 'Vitoria', 'Bus', 9),
('Hotel Sol', 'Mallorca', 'Bus', 10),
('Hostal Berlín', 'Marbella', 'Bus', 11),
('Hostal Barbate', 'Barbate', 'Bus', 12),
('Hostal Pepe', 'Jerez', 'Taxi', 13),
('Hotel La Corte', 'Castellon', 'Taxi', 14),
('Hotel Castilla', 'Albacete', 'Taxi', 15),
('Pensión Segura', 'Murcia', 'Taxi', 16),
('Hostal Madrid', 'Madrid', 'Bus', 17),
('Hostal Número Trece', 'Alicante', 'Bus', 18),
('The River Hostel', 'Valencia', 'Bus', 19),
('Hotel Barcelona', 'Barcelona', 'Taxi', 20),
('Pensión Maitane', 'Vitoria', 'Taxi', 21),
('Hostal Pinar', 'Mallorca', 'Taxi', 22),
('Pensión Aduar', 'Marbella', 'Taxi', 23),
('Hotel Nuro', 'Barbate', 'Taxi', 24);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `fk_festival_ciudad` (`id_festival_ciudad`),
  ADD KEY `fk_hotel_ciudad` (`id_hotel_ciudad`);

--
-- Indices de la tabla `festival`
--
ALTER TABLE `festival`
  ADD PRIMARY KEY (`id_festival`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `festival`
--
ALTER TABLE `festival`
  MODIFY `id_festival` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_festival_ciudad` FOREIGN KEY (`id_festival_ciudad`) REFERENCES `festival` (`id_festival`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hotel_ciudad` FOREIGN KEY (`id_hotel_ciudad`) REFERENCES `hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
