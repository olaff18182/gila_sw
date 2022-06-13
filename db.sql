-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-06-2022 a las 19:31:50
-- Versión del servidor: 8.0.29
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `guacamol_gilasw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributos1`
--

CREATE TABLE `atributos1` (
  `idatributo1` int NOT NULL,
  `idCategorias` int NOT NULL,
  `txtatribut` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `atributos1`
--

INSERT INTO `atributos1` (`idatributo1`, `idCategorias`, `txtatribut`) VALUES
(1, 1, 'LED'),
(2, 1, 'LCD'),
(3, 1, 'OLED'),
(4, 2, 'Intel'),
(5, 2, 'AMD'),
(6, 3, 'Piel'),
(7, 3, 'Plástico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categorias`
--

CREATE TABLE `Categorias` (
  `idCategorias` int NOT NULL,
  `NomCategorias` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Categorias`
--

INSERT INTO `Categorias` (`idCategorias`, `NomCategorias`) VALUES
(1, 'Televisor'),
(2, 'Laptops'),
(3, 'Zapatos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `SKU` text COLLATE utf8_spanish_ci NOT NULL,
  `Marca` text COLLATE utf8_spanish_ci NOT NULL,
  `Costo` float(10,2) NOT NULL,
  `idCategorias` int NOT NULL,
  `idatributo1` int NOT NULL,
  `atributos2` float(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `Nombre`, `SKU`, `Marca`, `Costo`, `idCategorias`, `idatributo1`, `atributos2`) VALUES
(1, 'Tele sony', '123abc', 'sony', 123.12, 1, 1, 10.0),
(2, 'HP á', 'hp', 'hp', 789.00, 2, 4, 321.0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atributos1`
--
ALTER TABLE `atributos1`
  ADD PRIMARY KEY (`idatributo1`);

--
-- Indices de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  ADD PRIMARY KEY (`idCategorias`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atributos1`
--
ALTER TABLE `atributos1`
  MODIFY `idatributo1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  MODIFY `idCategorias` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
