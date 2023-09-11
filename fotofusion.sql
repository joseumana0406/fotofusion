-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2023 a las 18:54:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fotofusion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cedulaCliente` varchar(10) NOT NULL,
  `nombreCliente` char(20) NOT NULL,
  `apellidoCliente` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cedulaCliente`, `nombreCliente`, `apellidoCliente`, `email`, `direccion`) VALUES
('1000', 'José', 'Umaña', '', ''),
('1001', 'Jamel', 'Navarro', '', ''),
('1002', 'Juan', 'Basmeson', '', ''),
('5-555-555', 'jose', 'prueba', 'estaesuna@gmail.com', 'palepapal'),
('8-888-111', 'umaña', 'Navarro', 'prueba2.navarro@example.com', '123 Calle Principal'),
('8-888-222', 'umaña', 'Navarro', 'prueba.navarro@example.com', '123 Calle Principal'),
('8-888-333', 'umaña', 'Navarro', 'umaña.navarro@example.com', '123 Calle Principal'),
('8-888-888', 'carlos', 'umaña', 'carlos@gmail.com', '123 Calle Principal'),
('8-888-999', 'Jamel', 'Navarro', 'jamel.navarro@example.com', '123 Calle Principal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacta`
--

CREATE TABLE `contacta` (
  `cedulaCliente` varchar(10) NOT NULL,
  `cedulaPersonal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `numContrato` char(15) NOT NULL,
  `cedulaCliente` varchar(10) NOT NULL,
  `cedulaPersonal` varchar(10) NOT NULL,
  `costo` float NOT NULL,
  `fechaEvento` date DEFAULT NULL,
  `lugarEvento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`numContrato`, `cedulaCliente`, `cedulaPersonal`, `costo`, `fechaEvento`, `lugarEvento`) VALUES
('c001', '1000', '3000', 50, '2020-06-24', 'Ciudad de Panamá, Cinta Costera'),
('c002', '1001', '3002', 85.2, '2020-03-25', 'Panamá Oeste, Westland Mall'),
('c003', '1002', '3001', 300, '2020-08-10', 'Panamá Oeste, Burunga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incluye`
--

CREATE TABLE `incluye` (
  `idServicio` char(5) NOT NULL,
  `numContrato` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `incluye`
--

INSERT INTO `incluye` (`idServicio`, `numContrato`) VALUES
('s101', 'c001'),
('s102', 'c002'),
('s103', 'c003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofrece`
--

CREATE TABLE `ofrece` (
  `cedulaPersonal` varchar(10) NOT NULL,
  `idServicio` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ofrece`
--

INSERT INTO `ofrece` (`cedulaPersonal`, `idServicio`) VALUES
('3000', 's101'),
('3000', 's103'),
('3001', 's102'),
('3001', 's103'),
('3002', 's101'),
('3002', 's103');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `nombrePersonal` char(20) NOT NULL,
  `apellidoPersonal` char(20) NOT NULL,
  `cedulaPersonal` varchar(10) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`nombrePersonal`, `apellidoPersonal`, `cedulaPersonal`, `contraseña`) VALUES
('Jaime', 'Cardenas', '3000', '12345'),
('Carlos', 'Castillo', '3001', '54321'),
('Mario', 'Martínez', '3002', '678910');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `numPrueba` char(10) NOT NULL,
  `cedulaPersonal` varchar(10) NOT NULL,
  `cedulaCliente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`numPrueba`, `cedulaPersonal`, `cedulaCliente`) VALUES
('p501', '3002', '1000'),
('p502', '3002', '1000'),
('p504', '3000', '1001'),
('p505', '3001', '1002'),
('p506', '3001', '1002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idServicio` char(5) NOT NULL,
  `tipoServicio` char(20) NOT NULL,
  `cedulaPersonal` varchar(10) NOT NULL,
  `numContrato` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idServicio`, `tipoServicio`, `cedulaPersonal`, `numContrato`) VALUES
('s101', 'Foto retrato', '', ''),
('s102', 'Foto graduación', '', ''),
('s103', 'Quinceaños', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cedulaCliente`);

--
-- Indices de la tabla `contacta`
--
ALTER TABLE `contacta`
  ADD PRIMARY KEY (`cedulaCliente`,`cedulaPersonal`),
  ADD KEY `fkcontacta_Personal` (`cedulaPersonal`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`numContrato`),
  ADD KEY `contrato_cedulaCliente_fk` (`cedulaCliente`),
  ADD KEY `contrato_cedulaPersonal_fk` (`cedulaPersonal`);

--
-- Indices de la tabla `incluye`
--
ALTER TABLE `incluye`
  ADD PRIMARY KEY (`idServicio`,`numContrato`),
  ADD KEY `incluye_numContrato_fk` (`numContrato`);

--
-- Indices de la tabla `ofrece`
--
ALTER TABLE `ofrece`
  ADD PRIMARY KEY (`cedulaPersonal`,`idServicio`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`cedulaPersonal`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`numPrueba`),
  ADD KEY `prueba_cedulaPersonal_fk` (`cedulaPersonal`),
  ADD KEY `prueba_cedulaCliente_fk` (`cedulaCliente`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idServicio`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacta`
--
ALTER TABLE `contacta`
  ADD CONSTRAINT `fkcontacta_Cliente` FOREIGN KEY (`cedulaCliente`) REFERENCES `cliente` (`cedulaCliente`),
  ADD CONSTRAINT `fkcontacta_Personal` FOREIGN KEY (`cedulaPersonal`) REFERENCES `personal` (`cedulaPersonal`);

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_cedulaCliente_fk` FOREIGN KEY (`cedulaCliente`) REFERENCES `cliente` (`cedulaCliente`),
  ADD CONSTRAINT `contrato_cedulaPersonal_fk` FOREIGN KEY (`cedulaPersonal`) REFERENCES `personal` (`cedulaPersonal`);

--
-- Filtros para la tabla `incluye`
--
ALTER TABLE `incluye`
  ADD CONSTRAINT `incluye_idServicio_fk` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`),
  ADD CONSTRAINT `incluye_numContrato_fk` FOREIGN KEY (`numContrato`) REFERENCES `contrato` (`numContrato`);

--
-- Filtros para la tabla `ofrece`
--
ALTER TABLE `ofrece`
  ADD CONSTRAINT `ofrece_cedulaPersonal_fk` FOREIGN KEY (`cedulaPersonal`) REFERENCES `personal` (`cedulaPersonal`);

--
-- Filtros para la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD CONSTRAINT `prueba_cedulaCliente_fk` FOREIGN KEY (`cedulaCliente`) REFERENCES `cliente` (`cedulaCliente`),
  ADD CONSTRAINT `prueba_cedulaPersonal_fk` FOREIGN KEY (`cedulaPersonal`) REFERENCES `personal` (`cedulaPersonal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
