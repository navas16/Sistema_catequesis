-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2017 a las 20:39:24
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_control`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_1`
--

CREATE TABLE `nivel_1` (
  `nombre_estudiante` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_estudiante` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `nacionalidad` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `cedula` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `lugar_nacimiento` varchar(26) COLLATE utf8_spanish2_ci NOT NULL,
  `estado_nacimiento` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_bautismo` date NOT NULL,
  `direccion` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_fijo` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_celular` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `institucion` varchar(22) COLLATE utf8_spanish2_ci NOT NULL,
  `grado` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `seccion` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_mama` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_mama` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_papa` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_papa` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `estado_civil` varchar(22) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_catequista` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_catequista` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `observaciones` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `nivel_1`
--

INSERT INTO `nivel_1` (`nombre_estudiante`, `apellido_estudiante`, `edad`, `nacionalidad`, `cedula`, `lugar_nacimiento`, `estado_nacimiento`, `fecha_nacimiento`, `fecha_bautismo`, `direccion`, `telefono_fijo`, `telefono_celular`, `institucion`, `grado`, `seccion`, `nombre_mama`, `apellido_mama`, `nombre_papa`, `apellido_papa`, `estado_civil`, `nombre_catequista`, `apellido_catequista`, `observaciones`) VALUES
('a', 'a', '1', 'a', '1', 'a', 'a', '2017-11-16', '2017-11-20', 'a', '', '', '', '', '', '', '', '', '', 'Seleccione...', '', '', ''),
('gladys', 'suarez', '12', 'venezolana', '18719501', 'san antonio', 'tachira', '1988-06-05', '2001-08-26', 'una casa', '00000000000', '00008800000', 'victor manuel', '4', 'a', 'maria', 'vivas', 'luis', 'suarez', 'Casados Por La Iglesia', 'pedroo', 'fijo', ''),
('w', 'w', 'w', 'w', 'wss', 'w', 'w', '2017-11-16', '2017-11-13', 'w', 'w', 'w', '', '', '', '', '', '', '', 'Seleccione...', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_2`
--

CREATE TABLE `nivel_2` (
  `nombre_estudiante` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_estudiante` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `nacionalidad` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `cedula` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `lugar_nacimiento` varchar(24) COLLATE utf8_spanish2_ci NOT NULL,
  `estado_nacimiento` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_bautismo` date NOT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_fijo` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_celular` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `institucion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `grado` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `seccion` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_mama` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_mama` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_papa` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_papa` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `estado_civil` varchar(22) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_catequista` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_catequista` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `observaciones` varchar(60) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `nivel_2`
--

INSERT INTO `nivel_2` (`nombre_estudiante`, `apellido_estudiante`, `edad`, `nacionalidad`, `cedula`, `lugar_nacimiento`, `estado_nacimiento`, `fecha_nacimiento`, `fecha_bautismo`, `direccion`, `telefono_fijo`, `telefono_celular`, `institucion`, `grado`, `seccion`, `nombre_mama`, `apellido_mama`, `nombre_papa`, `apellido_papa`, `estado_civil`, `nombre_catequista`, `apellido_catequista`, `observaciones`) VALUES
('gsgg', 'sggsfgsg', '33', 'gsdfgsg', '33333333', 'dgsdfg', 'dfgsdfgfg', '2017-11-07', '2017-11-13', 'dsfgsdfg', '33333333333', '33333333333', 'gdfsggsfdg', '3', 'b', 'gsdfgdg', 'fdgdsg', 'sdfgsdfg', 'fdgsg', 'Seleccione...', 'dsfgsdfg', 'sgsfdg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ema_usu` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cla_usu` varchar(8) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `est_usu` char(1) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ema_usu`, `cla_usu`, `est_usu`) VALUES
('javiereduardonavas@hotmail.com', '25951456', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nivel_1`
--
ALTER TABLE `nivel_1`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `nivel_2`
--
ALTER TABLE `nivel_2`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ema_usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
