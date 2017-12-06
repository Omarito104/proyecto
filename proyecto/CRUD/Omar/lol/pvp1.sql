-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2017 a las 12:28:41
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pvp1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idCiudad` int(11) NOT NULL COMMENT 'Identificador de la ciudad',
  `NombreCiudad` varchar(45) DEFAULT NULL COMMENT 'Nombre de la ciudad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idCiudad`, `NombreCiudad`) VALUES
(1, 'Bogota'),
(2, 'Barranquilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conteo_visitas`
--

CREATE TABLE `conteo_visitas` (
  `IdConteoVisitas` int(11) NOT NULL COMMENT 'Identificador de la tabla conteo de visitas',
  `Visitas` int(11) NOT NULL COMMENT 'Numero de visitas que hace el usuario al restaurante',
  `Usuario_PKNUsuario` int(11) NOT NULL COMMENT 'Llave foránea de la tabla usuario',
  `Usuario_TipoDocumento_idTipoDocumento` varchar(5) NOT NULL COMMENT 'Llave foránea de la tabla tipo documento que tambien se encuentra en usuario',
  `ubicacion_img` varchar(50) NOT NULL COMMENT 'Directorio de la imagen que se va a colocar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `conteo_visitas`
--

INSERT INTO `conteo_visitas` (`IdConteoVisitas`, `Visitas`, `Usuario_PKNUsuario`, `Usuario_TipoDocumento_idTipoDocumento`, `ubicacion_img`) VALUES
(1, 1, 1002377886, 'CC', 'img/mueca.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `IDProducto` int(11) NOT NULL COMMENT 'Identificador del producto',
  `DescripcionPro` varchar(45) NOT NULL COMMENT 'Descripción del producto',
  `PrecioUnitarioPro` decimal(19,0) NOT NULL COMMENT 'Precio del producto por unidad ',
  `ObservPro` varchar(45) NOT NULL COMMENT 'Cantidad de productos llevados y detalles de los productos',
  `Productocol` varchar(45) NOT NULL,
  `TamanoPresentacion_IdTamanoPresentacion` int(11) NOT NULL COMMENT 'Llave foránea de la tabla TamanoPresentacion  ',
  `TipoProducto_IdTipoProducto` int(11) NOT NULL COMMENT 'Llave foránea de la tabla TipoProducto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE `recibo` (
  `idRecibo` int(11) NOT NULL COMMENT 'Identificador de la tabla recibo',
  `FechaRecibo` date NOT NULL COMMENT 'Fecha en la que se expide el recibo',
  `TotalRecibo` decimal(19,0) NOT NULL COMMENT 'Total del precio de los productos del recibo',
  `Usuario_PKNUsuario` int(11) NOT NULL COMMENT 'Llave foránea de la tabla usuario',
  `Usuario_TipoDocumento_idTipoDocumento` varchar(5) NOT NULL COMMENT 'Lave foránea de usuario y de tipodocumento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo_has_producto`
--

CREATE TABLE `recibo_has_producto` (
  `Recibo_idRecibo` int(11) NOT NULL COMMENT 'Identificador de recibo_has_producto y Llave foránea de la tabla recibo',
  `Producto_IDProducto` int(11) NOT NULL COMMENT '	Identificador de recibo_has_producto y Llave foránea de la tabla producto',
  `CantidadProducto` int(11) NOT NULL COMMENT 'Cantidad del producto, o los productos llevados',
  `ValorVenta` decimal(19,0) NOT NULL COMMENT 'Valor total del la venta '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL COMMENT 'Identificador de la tabla rol',
  `EstadoRol` varchar(45) NOT NULL COMMENT 'Estado del rol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `EstadoRol`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamanopresentacion`
--

CREATE TABLE `tamanopresentacion` (
  `IdTamanoPresentacion` int(11) NOT NULL COMMENT 'Identificador de la tabla tamanopresentacion',
  `DescripcionTP` varchar(45) DEFAULT NULL COMMENT 'Descripcion del tamaño de presentacion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `idTipoDocumento` varchar(5) NOT NULL COMMENT 'Identificador de la tabla tipodocumento',
  `TipoDocumento` varchar(45) NOT NULL COMMENT 'Tipo de documento del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`idTipoDocumento`, `TipoDocumento`) VALUES
('CC', 'Cédula de Ciudadanía'),
('CE', 'Cedula de Extranjeria'),
('TI', 'Tarjeta de Identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproducto`
--

CREATE TABLE `tipoproducto` (
  `IdTipoProducto` int(11) NOT NULL COMMENT 'Identificador de la tabla tipoproducto',
  `DescripcionTipoProducto` varchar(45) DEFAULT NULL COMMENT 'Descripción del tipo de producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `PKNUsuario` int(11) NOT NULL COMMENT 'Identificador de la tabla usuario que en este caso es el numero de documento del usuario',
  `PrimerNombreUsu` varchar(45) NOT NULL COMMENT 'Primer nombre del usuario',
  `SegundoNombreUsu` varchar(45) DEFAULT NULL COMMENT 'Segundo nombre del usuario',
  `PrimerApellidoUsu` varchar(45) NOT NULL COMMENT 'Primer apellido del usuario',
  `SegundoApellidoUsu` varchar(45) DEFAULT NULL COMMENT 'Segundo apellido del usuario',
  `DireccionUsu` varchar(45) NOT NULL COMMENT 'Dirección de domicilio del usuario',
  `TelefonoUsu` int(11) DEFAULT NULL COMMENT 'Teléfono del usuario',
  `CelularUsu` bigint(15) DEFAULT NULL COMMENT 'Celular del usuario',
  `EmailUsu` varchar(45) NOT NULL COMMENT 'Direccion de correo electrónico de usuario',
  `FechaNacimientoUsu` varchar(45) NOT NULL COMMENT 'Fecha de nacimiento del usuario',
  `PassUsu` varchar(45) NOT NULL COMMENT 'Contraseña del usuario',
  `TipoDocumento_idTipoDocumento` varchar(5) NOT NULL COMMENT 'Llave foránea de la tabla tipodocumento',
  `Rol_idRol` int(11) NOT NULL COMMENT 'Llave foránea de la tabla rol',
  `Ciudad_idCiudad` int(11) NOT NULL COMMENT 'Llave foránea de la tabla ciudad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`PKNUsuario`, `PrimerNombreUsu`, `SegundoNombreUsu`, `PrimerApellidoUsu`, `SegundoApellidoUsu`, `DireccionUsu`, `TelefonoUsu`, `CelularUsu`, `EmailUsu`, `FechaNacimientoUsu`, `PassUsu`, `TipoDocumento_idTipoDocumento`, `Rol_idRol`, `Ciudad_idCiudad`) VALUES
(36420987, 'Jorge', 'Daniel ', 'Rojas', 'Jimenez', 'Calle72#21-36', 4012239, 3204789562, 'jdjimenez10@hotmail.com', '30/03/19994', '3245678', 'CC', 1, 1),
(1002377886, 'Luis', 'Omar', 'Pallares', 'Fuentes', 'Cra 15B#4-87', 8023320, 3214621469, 'luisomarfuentes036@gmail.com', '04/10/1999', '123456', 'CC', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idCiudad`);

--
-- Indices de la tabla `conteo_visitas`
--
ALTER TABLE `conteo_visitas`
  ADD PRIMARY KEY (`IdConteoVisitas`),
  ADD KEY `fk_Conteo_Visitas_Usuario1_idx` (`Usuario_PKNUsuario`,`Usuario_TipoDocumento_idTipoDocumento`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IDProducto`),
  ADD KEY `fk_Producto_TamanoPresentacion1_idx` (`TamanoPresentacion_IdTamanoPresentacion`),
  ADD KEY `fk_Producto_TipoProducto1_idx` (`TipoProducto_IdTipoProducto`);

--
-- Indices de la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD PRIMARY KEY (`idRecibo`),
  ADD KEY `fk_Recibio_Usuario1_idx` (`Usuario_PKNUsuario`,`Usuario_TipoDocumento_idTipoDocumento`);

--
-- Indices de la tabla `recibo_has_producto`
--
ALTER TABLE `recibo_has_producto`
  ADD PRIMARY KEY (`Recibo_idRecibo`,`Producto_IDProducto`),
  ADD KEY `fk_Recibio_has_Producto_Producto1_idx` (`Producto_IDProducto`),
  ADD KEY `fk_Recibio_has_Producto_Recibio1_idx` (`Recibo_idRecibo`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tamanopresentacion`
--
ALTER TABLE `tamanopresentacion`
  ADD PRIMARY KEY (`IdTamanoPresentacion`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`idTipoDocumento`);

--
-- Indices de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  ADD PRIMARY KEY (`IdTipoProducto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`PKNUsuario`,`TipoDocumento_idTipoDocumento`),
  ADD KEY `fk_Usuario_TipoDocumento_idx` (`TipoDocumento_idTipoDocumento`),
  ADD KEY `fk_Usuario_Rol1_idx` (`Rol_idRol`),
  ADD KEY `fk_Usuario_Ciudad1_idx` (`Ciudad_idCiudad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conteo_visitas`
--
ALTER TABLE `conteo_visitas`
  MODIFY `IdConteoVisitas` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla conteo de visitas', AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `conteo_visitas`
--
ALTER TABLE `conteo_visitas`
  ADD CONSTRAINT `fk_Conteo_Visitas_Usuario1` FOREIGN KEY (`Usuario_PKNUsuario`,`Usuario_TipoDocumento_idTipoDocumento`) REFERENCES `usuario` (`PKNUsuario`, `TipoDocumento_idTipoDocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_Producto_TamanoPresentacion1` FOREIGN KEY (`TamanoPresentacion_IdTamanoPresentacion`) REFERENCES `tamanopresentacion` (`IdTamanoPresentacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Producto_TipoProducto1` FOREIGN KEY (`TipoProducto_IdTipoProducto`) REFERENCES `tipoproducto` (`IdTipoProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD CONSTRAINT `fk_Recibio_Usuario1` FOREIGN KEY (`Usuario_PKNUsuario`,`Usuario_TipoDocumento_idTipoDocumento`) REFERENCES `usuario` (`PKNUsuario`, `TipoDocumento_idTipoDocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recibo_has_producto`
--
ALTER TABLE `recibo_has_producto`
  ADD CONSTRAINT `fk_Recibio_has_Producto_Producto1` FOREIGN KEY (`Producto_IDProducto`) REFERENCES `producto` (`IDProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Recibio_has_Producto_Recibio1` FOREIGN KEY (`Recibo_idRecibo`) REFERENCES `recibo` (`idRecibo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Ciudad1` FOREIGN KEY (`Ciudad_idCiudad`) REFERENCES `ciudad` (`idCiudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_Rol1` FOREIGN KEY (`Rol_idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_TipoDocumento` FOREIGN KEY (`TipoDocumento_idTipoDocumento`) REFERENCES `tipodocumento` (`idTipoDocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
