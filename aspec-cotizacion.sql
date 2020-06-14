-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2020 a las 21:41:02
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aspec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `clienteNombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `rfc_cliente` varchar(13) COLLATE utf8_spanish2_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `numero` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `numeroInterior` varchar(11) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `colonia` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `codigoPostal` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `clienteNombre`, `rfc_cliente`, `calle`, `numero`, `numeroInterior`, `colonia`, `localidad`, `municipio`, `estado`, `pais`, `codigoPostal`, `email`, `telefono`) VALUES
(1, 'Felix Antonio Serna Olguin', 'SEOF960218RW0', 'Rafael Ramirez', '10', '', 'U HAB SDTEV', '', 'Coscomatepec', 'Veracruz', 'Mexico', 94140, 'fantonioserna18@gmail.com', '2731256673'),
(2, 'Felix Serna Olguin', 'SEOF960218RW0', 'Rafael Ramirez', '10', '', 'U HAB SDTEV', '', 'Coscomatepec', 'Veracruz', 'Mexico', 94140, 'soporte1@grupoaspec.com', '2731256673'),
(3, 'Felix Serna Olguin', '', 'Rafael Ramirez', '10', '', 'U HAB SDTEV', '', 'Coscomatepec', 'Veracruz', 'Mexico', 94140, 'soporte1@grupoaspec.com', '2731256673'),
(4, 'Felix Serna Olguin', '', 'Rafael Ramirez', '10', '', 'U HAB SDTEV', '', 'Coscomatepec', 'Veracruz', 'Mexico', 94140, 'soporte1@grupoaspec.com', '2731256673');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `linea` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `marca` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fabricante` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `impuestos` int(11) NOT NULL,
  `unidad` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `costo_dolares` int(11) NOT NULL,
  `precio_dolares` int(11) NOT NULL,
  `cambio_peso_dolar` int(11) NOT NULL,
  `fecha_contratacion` date NOT NULL,
  `fecha_caducidad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `descripcion`, `linea`, `marca`, `fabricante`, `impuestos`, `unidad`, `costo`, `precio`, `costo_dolares`, `precio_dolares`, `cambio_peso_dolar`, `fecha_contratacion`, `fecha_caducidad`) VALUES
(1, 'Servidor', 'AWS', 'AWS', 'AWS', 100, 2, 250, 350, 100, 500, 25, '2020-06-16', '2021-06-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
