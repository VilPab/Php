-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-12-2017 a las 16:34:49
-- Versión del servidor: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo12`
--
CREATE DATABASE IF NOT EXISTS `catalogo12` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `catalogo12`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `idAutor` int(255) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nacimiento` date NOT NULL,
  `nacionalidad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `imagenA` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`idAutor`, `nombre`, `nacimiento`, `nacionalidad`, `imagenA`) VALUES
(1, 'Deadmau5', '1981-01-05', 'Canadiense', 'dead.jpg'),
(2, 'José González', '1978-07-31', 'Sueco', 'jg.jpg'),
(3, 'Gary Clark Jr', '1984-02-15', 'Americano', 'gc.jpg'),
(4, 'Bansky', '0000-00-00', '?', ''),
(5, 'Iseo', '0000-00-00', 'Española', 'iseo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musica`
--

CREATE TABLE `musica` (
  `idObra` int(255) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ano` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duracion` time DEFAULT NULL,
  `imagen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idAutor` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `musica`
--

INSERT INTO `musica` (`idObra`, `titulo`, `ano`, `duracion`, `imagen`, `idAutor`) VALUES
(1, 'Cat Platoon', '2015', '00:45:00', 'catp.jpg', 5),
(2, 'Get Scraped ', '2005', '01:09:41', 'gets.jpg', 1),
(3, 'Crosses', '2003', '00:02:55', 'crs.jpg', 2),
(4, 'In Our Nature', '2007', '00:33:08', 'ino.jpg', 2),
(8, '110', '2004', '00:33:25', '110.jpg', 3),
(9, 'Worry No More', '2008', '00:52:26', 'wn.jpg', 3),
(10, 'Digital Shots', '2017', '00:30:00', 'DS.jpg', 5),
(11, '4ware', '2016', '00:08:39', '4a.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pintura`
--

CREATE TABLE `pintura` (
  `idPintura` int(255) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idAutor` int(255) NOT NULL,
  `ano` date NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pintura`
--

INSERT INTO `pintura` (`idPintura`, `titulo`, `idAutor`, `ano`, `imagen`) VALUES
(1, 'Slave Labour', 4, '2012-01-01', 'slv.jpg'),
(2, 'Girl and Balloon', 4, '2002-01-01', 'Girl.jpg'),
(3, 'True Identity', 4, '2003-01-01', 'Cancel.jpg'),
(4, 'Crayon Boy', 4, '2011-01-01', 'Gun.jpg'),
(5, 'Rage, Flower Thrower', 4, '2003-01-01', 'flowers.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `login` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`login`, `password`, `nombre`, `admin`, `descripcion`) VALUES
('jose', '$2y$10$R1uqFB7tCoz.5OaT82OOMO3.uPesbzbEBUqDq28Axd5.MIeoz2jGq', 'jose', 0, 'jose'),
('pablo', '$2y$10$Qy4m7cTdwXMe/MmZkh0J2.14h5QgdRhVXX0TlhjXs6uEioTxCW5Hy', 'Pablo V', 1, 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idAutor`);

--
-- Indices de la tabla `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`idObra`),
  ADD KEY `lnk_autor_obra` (`idAutor`);

--
-- Indices de la tabla `pintura`
--
ALTER TABLE `pintura`
  ADD PRIMARY KEY (`idPintura`),
  ADD KEY `lnk_autor_pintura` (`idAutor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `idAutor` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `musica`
--
ALTER TABLE `musica`
  MODIFY `idObra` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `pintura`
--
ALTER TABLE `pintura`
  MODIFY `idPintura` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `musica`
--
ALTER TABLE `musica`
  ADD CONSTRAINT `lnk_autor_obra` FOREIGN KEY (`idAutor`) REFERENCES `autor` (`idAutor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pintura`
--
ALTER TABLE `pintura`
  ADD CONSTRAINT `lnk_autor_pintura` FOREIGN KEY (`idAutor`) REFERENCES `autor` (`idAutor`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
