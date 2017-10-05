-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2017 a las 15:43:45
-- Versión del servidor: 5.7.11
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pvp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajero`
--

CREATE TABLE `cajero` (
  `PKNCajero` int(11) NOT NULL,
  `DireccionC` varchar(50) NOT NULL,
  `TelefonoC` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `FKIDTipoDocumento` int(11) NOT NULL,
  `FKIDCiudad` int(11) NOT NULL,
  `FKIDEstado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `PKIDCiudad` int(11) NOT NULL,
  `NombreC` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `PKNIdentificacion` int(11) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `FKIDRecibo` int(11) NOT NULL,
  `FKIDMenu` int(11) NOT NULL,
  `FKIDTipoDocumento` int(11) NOT NULL,
  `FKIDCiudad` int(11) NOT NULL,
  `FKIDEmail` int(11) NOT NULL,
  `FKIDFrecuencia` int(11) NOT NULL,
  `FKIDDescuento` int(11) NOT NULL,
  `FKIDCajero` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuento`
--

CREATE TABLE `descuento` (
  `PKIDDescuento` int(11) NOT NULL,
  `PorcentajeDescuento` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallerecibo`
--

CREATE TABLE `detallerecibo` (
  `PKIDDetalleR` int(11) NOT NULL,
  `FKIDProducto` int(11) NOT NULL,
  `FKIDRecibo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `email`
--

CREATE TABLE `email` (
  `PKIDEmail` int(11) NOT NULL,
  `Asunto` varchar(100) NOT NULL,
  `Destinatario` varchar(1000) NOT NULL,
  `Contenido` varchar(1000) NOT NULL,
  `FKIDRecibo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `PKIDEstado` int(11) NOT NULL,
  `TipoEstado` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frecuencia`
--

CREATE TABLE `frecuencia` (
  `PKIDFrecuencia` int(11) NOT NULL,
  `FechaPrimerCompra` date NOT NULL,
  `FechaCompra` date NOT NULL,
  `FechaLimite` date NOT NULL,
  `HoraCompra` time NOT NULL,
  `FrecuenciaDeCompra` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `PKIDPlato` int(11) NOT NULL,
  `NombrePlato` varchar(250) NOT NULL,
  `FotoPlato` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `PKIDProducto` int(11) NOT NULL,
  `DescripcionProducto` varchar(400) NOT NULL,
  `CantidadProducto` int(11) NOT NULL,
  `PrecioUnitario` decimal(19,4) NOT NULL,
  `ValorTotalProducto` decimal(19,4) NOT NULL,
  `SubTotal` decimal(19,4) NOT NULL,
  `TotalAPagar` decimal(19,4) NOT NULL,
  `FKIDDescuento` int(11) NOT NULL,
  `FKIDTipoProducto` int(11) NOT NULL,
  `FKIDMenu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE `recibo` (
  `PKIDRecibo` int(11) NOT NULL,
  `NombreR` varchar(50) NOT NULL,
  `DireccionR` varchar(50) NOT NULL,
  `TelefonoR` int(11) NOT NULL,
  `FechaRecibo` date NOT NULL,
  `FKIDFrecuencia` int(11) NOT NULL,
  `FKIDReportes` int(11) NOT NULL,
  `FKIDCajero` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `PKIDReportes` int(11) NOT NULL,
  `IngresosTotales` decimal(19,4) NOT NULL,
  `PrimerFecha` date NOT NULL,
  `FechaFin` date NOT NULL,
  `FKIDCajero` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `PKIdTipoDocumento` int(11) NOT NULL,
  `TipoDocumento` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproducto`
--

CREATE TABLE `tipoproducto` (
  `PKIDTipoProducto` int(11) NOT NULL,
  `TipoProducto` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cajero`
--
ALTER TABLE `cajero`
  ADD PRIMARY KEY (`PKNCajero`),
  ADD KEY `FKIDEstado` (`FKIDEstado`),
  ADD KEY `FKIDTipoDocumento` (`FKIDTipoDocumento`),
  ADD KEY `FKIDCiudad` (`FKIDCiudad`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`PKIDCiudad`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`PKNIdentificacion`),
  ADD KEY `FKIDRecibo` (`FKIDRecibo`),
  ADD KEY `FKIDMenu` (`FKIDMenu`),
  ADD KEY `FKIDTipoDocumento` (`FKIDTipoDocumento`),
  ADD KEY `FKIDCiudad` (`FKIDCiudad`),
  ADD KEY `FKIDEmail` (`FKIDEmail`),
  ADD KEY `FKIDFrecuencia` (`FKIDFrecuencia`),
  ADD KEY `FKIDDescuento` (`FKIDDescuento`),
  ADD KEY `FKIDCajero` (`FKIDCajero`);

--
-- Indices de la tabla `descuento`
--
ALTER TABLE `descuento`
  ADD PRIMARY KEY (`PKIDDescuento`);

--
-- Indices de la tabla `detallerecibo`
--
ALTER TABLE `detallerecibo`
  ADD PRIMARY KEY (`PKIDDetalleR`),
  ADD KEY `FKIDProducto` (`FKIDProducto`),
  ADD KEY `FKIDRecibo` (`FKIDRecibo`);

--
-- Indices de la tabla `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`PKIDEmail`),
  ADD KEY `FKIDRecibo` (`FKIDRecibo`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`PKIDEstado`);

--
-- Indices de la tabla `frecuencia`
--
ALTER TABLE `frecuencia`
  ADD PRIMARY KEY (`PKIDFrecuencia`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`PKIDPlato`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`PKIDProducto`),
  ADD KEY `FKIDDescuento` (`FKIDDescuento`),
  ADD KEY `FKIDTipoProducto` (`FKIDTipoProducto`),
  ADD KEY `FKIDMenu` (`FKIDMenu`);

--
-- Indices de la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD PRIMARY KEY (`PKIDRecibo`),
  ADD KEY `FKIDFrecuencia` (`FKIDFrecuencia`),
  ADD KEY `FKIDReportes` (`FKIDReportes`),
  ADD KEY `FKIDCajero` (`FKIDCajero`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`PKIDReportes`),
  ADD KEY `FKIDCajero` (`FKIDCajero`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`PKIdTipoDocumento`);

--
-- Indices de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  ADD PRIMARY KEY (`PKIDTipoProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `PKIDCiudad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `descuento`
--
ALTER TABLE `descuento`
  MODIFY `PKIDDescuento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `frecuencia`
--
ALTER TABLE `frecuencia`
  MODIFY `PKIDFrecuencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `PKIDPlato` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `PKIDProducto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `PKIdTipoDocumento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  MODIFY `PKIDTipoProducto` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
