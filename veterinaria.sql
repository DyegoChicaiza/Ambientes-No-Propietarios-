-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2018 a las 19:34:14
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativo`
--

CREATE TABLE `administrativo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `idProducto` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrativo`
--

INSERT INTO `administrativo` (`id`, `nombre`, `contrasena`, `idProducto`) VALUES
(12, 'Tatiana', '1234', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialclinico`
--

CREATE TABLE `historialclinico` (
  `id` int(10) NOT NULL,
  `num_historial_clinico` int(10) NOT NULL,
  `idPaciente` int(10) DEFAULT NULL,
  `idProfesional` int(10) DEFAULT NULL,
  `idAdministrativo` int(10) DEFAULT NULL,
  `idProducto` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(10) NOT NULL,
  `nombrePaciente` varchar(50) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `especie` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `nombreDueno` varchar(50) NOT NULL,
  `telefonoDueno` int(10) NOT NULL,
  `direccionDueno` varchar(50) NOT NULL,
  `correoDueno` varchar(50) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `idProfesional` int(10) DEFAULT NULL,
  `idProducto` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `nombrePaciente`, `fechaNacimiento`, `especie`, `sexo`, `raza`, `nombreDueno`, `telefonoDueno`, `direccionDueno`, `correoDueno`, `fechaRegistro`, `idProfesional`, `idProducto`) VALUES
(8, 'Sheyla', '0000-00-00', 'perro', 'hembra', 'caniche', 'Cristina Cunalata', 2607151, 'San JosÃ© de Monjas', 'jhcris@yahoo.com', '0000-00-00', NULL, NULL),
(10, 'ASAs', '0000-00-00', 'dasdas', 'hembra', 'dasdasd', '', 0, '', '', '0000-00-00', NULL, NULL),
(11, 'sdfdf', '0000-00-00', 'dfgdgf', 'hembra', 'gdfgfdg', '', 0, '', '', '0000-00-00', NULL, NULL),
(12, 'rambo', '0000-00-00', 'perro', 'hembra', 'caniche', 'Myriam Cunalata', 2607151, 'San JosÃ© de Monjas', 'jhcris@yahoo.com', '0000-00-00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(10) NOT NULL,
  `nombreProducto` varchar(50) NOT NULL,
  `marcaProducto` varchar(50) NOT NULL,
  `valorProducto` int(10) NOT NULL,
  `fechaRegistro` varchar(10) NOT NULL,
  `tipoProducto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombreProducto`, `marcaProducto`, `valorProducto`, `fechaRegistro`, `tipoProducto`) VALUES
(1, 'huesito', 'acne', 3, '12102017', 'juguete');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesional`
--

CREATE TABLE `profesional` (
  `id` int(10) NOT NULL,
  `nombreProfesional` varchar(50) NOT NULL,
  `cedulaProfesional` int(10) NOT NULL,
  `ocupacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesional`
--

INSERT INTO `profesional` (`id`, `nombreProfesional`, `cedulaProfesional`, `ocupacion`) VALUES
(1, 'Katty', 2147483647, 'Medico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `historialclinico`
--
ALTER TABLE `historialclinico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPaciente` (`idPaciente`),
  ADD KEY `idProfesional` (`idProfesional`),
  ADD KEY `idAdministrativo` (`idAdministrativo`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProducto` (`idProducto`),
  ADD KEY `idProfesional` (`idProfesional`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesional`
--
ALTER TABLE `profesional`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `historialclinico`
--
ALTER TABLE `historialclinico`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `profesional`
--
ALTER TABLE `profesional`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD CONSTRAINT `administrativo_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `historialclinico`
--
ALTER TABLE `historialclinico`
  ADD CONSTRAINT `historialclinico_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`id`),
  ADD CONSTRAINT `historialclinico_ibfk_2` FOREIGN KEY (`idProfesional`) REFERENCES `profesional` (`id`),
  ADD CONSTRAINT `historialclinico_ibfk_3` FOREIGN KEY (`idAdministrativo`) REFERENCES `administrativo` (`id`),
  ADD CONSTRAINT `historialclinico_ibfk_4` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `paciente_ibfk_2` FOREIGN KEY (`idProfesional`) REFERENCES `profesional` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
