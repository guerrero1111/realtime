-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 11-08-2019 a las 18:52:30
-- Versión del servidor: 5.7.25
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dell`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblprod`
--

CREATE TABLE `tblprod` (
  `id` int(10) UNSIGNED NOT NULL,
  `prod_code` varchar(20) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_ctry` varchar(50) NOT NULL,
  `prod_qty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblprod`
--

INSERT INTO `tblprod` (`id`, `prod_code`, `prod_name`, `prod_ctry`, `prod_qty`) VALUES
(38, 'asdasd', '21', 'asdasd', '12'),
(39, 'adrian2', '39', 'guerrerow@gmail.com', '999'),
(42, 'adrian', '3', 'guerrerow@gmail.com', '99'),
(44, 'adrian', '3', 'guerrerow@gmail.com', '99'),
(45, 'adrian', '3', 'guerrerow@gmail.com', '99'),
(46, 'asdasd', '132', 'asdas@asd.com', '90'),
(47, 'adsdasd', '34', 'asdas@asd.com', '34'),
(48, 'Adrian Guerrero', '234', 'asdas@asd.com', '34'),
(49, 'asdasd', '234', 'asdas@asd.com', '234'),
(50, 'Adrian Guerrero', '34', 'asdas@asd.com', '34'),
(51, 'qweqwe', '34', 'asdas@asd.com', '34'),
(52, 'asdasd', '23', 'asdas@asd.com', '34'),
(53, 'asdasd', '23', 'asdas@asd.com', '34'),
(54, 'asdasd', '23', 'asdas@asd.com', '34'),
(55, 'asdasd', '34', 'asdas@asd.com', '34'),
(56, 'asdasd', '34', 'asdas@asd.com', '34'),
(57, 'Adrian Guerrero', '34', 'asdas@asd.com', '34'),
(58, 'Adrian Guerrero', '34', 'asdas@asd.com', '34'),
(59, 'Adrian Guerrero', '34', 'asasd@asdsad.com', '34'),
(60, 'peter pan', '35', 'peter@gmail.com', '999'),
(61, 'asdasdasdasd', '34', 'asdas@asd.com', '34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblprod`
--
ALTER TABLE `tblprod`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblprod`
--
ALTER TABLE `tblprod`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
