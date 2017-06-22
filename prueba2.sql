-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2017 a las 20:26:42
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE `tbl_documentos` (
  `id_documento` int(10) UNSIGNED NOT NULL,
  `nombre_alumno` varchar(30) NOT NULL,
  `rut` int(11) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` mediumtext,
  `tamanio` int(10) UNSIGNED DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_documentos`
--

INSERT INTO `tbl_documentos` (`id_documento`, `nombre_alumno`, `rut`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(11, 'marco lorca', 15456464, 'tesis', 'pedagogia en ingles', 3092, 'application/pdf', 'ejemplo.pdf'),
(12, 'ruben diaz', 8963852, 'poruÃ±a', 'master en poruÃ±a', 3092, 'application/pdf', 'ejemplo.pdf'),
(13, 'camila vergara', 19070964, 'tesis ', 'prevencion de riesgos', 3092, 'application/pdf', 'ejemplo.pdf'),
(14, 'camila', 19, 'tesis', 'prevencion', 3092, 'application/pdf', 'ejemplo.pdf'),
(15, 'GGG', 444, 'YYO', 'U0', 3092, 'application/pdf', 'ejemplo.pdf'),
(16, 'cristopher martinez', 17638455, 'tesis', 'analista programador', 131190, 'application/pdf', 'FormularioRegistro.pdf'),
(17, 'hih', 0, 'huii', '', 3092, 'application/pdf', 'ejemplo.pdf'),
(18, 'cristopher martinez', 2147483647, 'analista', 'asfasf', 34304, 'application/msword', 'curriculum cristophermartinez-final.doc'),
(19, 'tahiel', 245675678, 'bebe', 'bebito', 27603, 'image/jpeg', 'oferta.jpg'),
(20, 'c bzg', 0, '', '', 72, 'application/octet-stream', 'debug.log'),
(21, 'rtwe', 0, 'twet', 'wetrwet', 4735, 'application/octet-stream', 'prueba2.sql'),
(22, 'aSQA', 0, 'Sed', 'sdqED', 72, 'application/octet-stream', 'debug.log'),
(23, 'aSQA', 0, 'Sed', 'd', 780831, 'image/jpeg', 'Koala.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tipo_usuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`rut`, `nombre`, `nombre_usuario`, `password`, `tipo_usuario`) VALUES
('17638455-7', 'Cristopher martinez', 'cmartinez', '54321', 'Administrador'),
('18956456-8', 'marco lorca', 'mlorca', '12345', 'Administrador'),
('charls xav', '1111111-1', 'profesorx', 'xxx', 'Vendedor'),
('cristopher', 'vendedor', 'topher', '12345', 'Alumno'),
('19635489-7', 'david bisba', 'dbisbal', '1212', 'Alumno'),
('w31', '321', 'qw', '12', 'Alumno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  MODIFY `id_documento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
