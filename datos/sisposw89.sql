-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-04-2020 a las 03:28:08
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE sisposw89;

USE sisposw89;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisposw89`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `Id_admin` int(11) NOT NULL,
  `Persona` int(11) DEFAULT NULL,
  `Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`Id_admin`, `Persona`, `Usuario`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Id_Categoria` varchar(6) NOT NULL,
  `Nombre_Cat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id_Categoria`, `Nombre_Cat`) VALUES
('04', 'Accesorios'),
('08', 'AIO'),
('10', 'Audio'),
('01', 'Discos'),
('07', 'Escritorios'),
('02', 'Memorias'),
('09', 'Monitores'),
('06', 'NoteBooks'),
('03', 'Perifericos'),
('05', 'Routers');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id_Cliente` varchar(11) NOT NULL,
  `Persona` int(11) NOT NULL,
  `Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_Cliente`, `Persona`, `Usuario`) VALUES
('', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id_Empleado` varchar(11) NOT NULL,
  `Persona` int(11) NOT NULL,
  `Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id_Empleado`, `Persona`, `Usuario`) VALUES
('', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificacion`
--

CREATE TABLE `identificacion` (
  `id_identificacion` int(11) NOT NULL,
  `tipo_identificacion` int(11) NOT NULL,
  `numero_identificacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `identificacion`
--

INSERT INTO `identificacion` (`id_identificacion`, `tipo_identificacion`, `numero_identificacion`) VALUES
(1, 1, '11440179663'),
(2, 1, '1234567890'),
(3, 1, '0987654321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Celular` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Identificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `Nombre`, `Apellido`, `Direccion`, `Celular`, `Telefono`, `Identificacion`) VALUES
(1, 'juan camilo', 'quiceno ortiz', 'cra 47c # 46-81', '3164189126', '3270295', 1),
(2, 'jheyman', 'mejia', 'abc123', '310xxxxxxxx', '327xxxxx', 2),
(3, 'felipe', 'cordoba', 'abc 1 def 2', '1234567890', '3280510', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_Producto` varchar(6) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `ValorUnitario` float DEFAULT NULL,
  `Nombre_Cat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_Producto`, `Nombre`, `Descripcion`, `ValorUnitario`, `Nombre_Cat`) VALUES
('1', 'Portatil i3', 'Core i3, 4GB Ram, Wi-Fi, 500GB HDD', 1000000, 'NoteBooks'),
('2', 'Portatil i5', 'Core i5, 8GB Ram, Wi-Fi, 240GB SSD', 1550000, 'NoteBooks'),
('3', 'JBL T450BT', 'Audifonos Inalámbricos, Manos Libres', 150000, 'Audio'),
('4', 'Sony Mdr-xb550ap', 'Audífonos Sony Extra Bass Manos Libres, Cableados', 120000, 'Audio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_proveedor`
--

CREATE TABLE `producto_proveedor` (
  `Id_producto` varchar(6) DEFAULT NULL,
  `Id_Proveedor` varchar(20) DEFAULT NULL,
  `Nombre_Producto` varchar(20) DEFAULT NULL,
  `Nombre_Proveedor` varchar(20) DEFAULT NULL,
  `Cantidad` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `Id_Proveedor` varchar(20) NOT NULL,
  `Nombre_Prov` varchar(20) NOT NULL,
  `Direccion` varchar(60) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefonos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`Id_Proveedor`, `Nombre_Prov`, `Direccion`, `Email`, `Telefonos`) VALUES
('1', 'SanDisk', 'Milpitas, California, Estados Unidos', 'support@sandisk.com', '888 527 1441'),
('2', 'Kingston', 'Fountain Valley, California, Estados Unidos', 'support@kingston.com', '7144452894'),
('3', 'ADATA', 'Nuevo Taipéi, República de China', 'support@adata.com', '9562112548'),
('4', 'DELL', 'Round Rock, Texas, Estados Unidos', 'support@dell.com', '8006249896'),
('5', 'HP', 'Palo Alto, CA 94304 United States', 'support@hp.com', '6508571501'),
('6', 'Toshiba', 'Minato, Tokio, Japón', 'support@toshiba.com', '2125960600'),
('7', 'Lenovo', 'Quarry Bay, Hong Kong', 'support@lenovo.com', '8552536686'),
('8', 'JBL', 'San Francisco, CA', 'support@jbl.com', '8245772351'),
('9', 'SONY', 'San Francisco, CA', 'support@sonyes.com', '9382815634');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'administra'),
(2, 'empleado'),
(3, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_identificacion`
--

CREATE TABLE `tipo_identificacion` (
  `id_identificacion` int(11) NOT NULL,
  `identificacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_identificacion`
--

INSERT INTO `tipo_identificacion` (`id_identificacion`, `identificacion`) VALUES
(1, 'CC'),
(2, 'TI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `email`, `pass`, `rol`) VALUES
(1, 'juan@mail.com', '12345', 1),
(2, 'jeyman@mail.com', '12345', 2),
(3, 'felipe@mail.com', '12345', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_cabecera`
--

CREATE TABLE `venta_cabecera` (
  `Id_Venta` int(11) NOT NULL,
  `Id_Cliente` varchar(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `Factura` varchar(20) DEFAULT NULL,
  `forma_pago` varchar(20) DEFAULT NULL,
  `Total_Factura` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_detalle`
--

CREATE TABLE `venta_detalle` (
  `Id_Venta` int(11) DEFAULT NULL,
  `Id_Producto` varchar(6) DEFAULT NULL,
  `Cantidad` int(6) DEFAULT NULL,
  `ValorUnitario` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`Id_admin`),
  ADD KEY `Persona` (`Persona`),
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_Categoria`),
  ADD KEY `Nombre_Cat` (`Nombre_Cat`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_Cliente`),
  ADD KEY `Persona` (`Persona`),
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_Empleado`),
  ADD KEY `Persona` (`Persona`),
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `identificacion`
--
ALTER TABLE `identificacion`
  ADD PRIMARY KEY (`id_identificacion`),
  ADD KEY `tipo_identificacion` (`tipo_identificacion`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `Identificacion` (`Identificacion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_Producto`),
  ADD KEY `Productos_NombreCat_fk` (`Nombre_Cat`);

--
-- Indices de la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
  ADD KEY `Producto_Proveedor_Producto_fk` (`Id_producto`),
  ADD KEY `Producto_Proveedor_Proveedores_fk` (`Id_Proveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`Id_Proveedor`),
  ADD UNIQUE KEY `Nombre_Prov` (`Nombre_Prov`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Nombre_Prov_2` (`Nombre_Prov`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  ADD PRIMARY KEY (`id_identificacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  ADD PRIMARY KEY (`Id_Venta`),
  ADD KEY `Venta_cabecera_Cliente_fk` (`Id_Cliente`);

--
-- Indices de la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD KEY `Venta_Detalle_Venta_Cabecera_fk` (`Id_Venta`),
  ADD KEY `Venta_Detalle_Producto_fk` (`Id_Producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `identificacion`
--
ALTER TABLE `identificacion`
  MODIFY `id_identificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  MODIFY `id_identificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  MODIFY `Id_Venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`Persona`) REFERENCES `personas` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `administradores_ibfk_2` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`Id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`Persona`) REFERENCES `personas` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`Id_usuario`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`Persona`) REFERENCES `personas` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`Id_usuario`);

--
-- Filtros para la tabla `identificacion`
--
ALTER TABLE `identificacion`
  ADD CONSTRAINT `identificacion_ibfk_1` FOREIGN KEY (`tipo_identificacion`) REFERENCES `tipo_identificacion` (`id_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`Identificacion`) REFERENCES `identificacion` (`id_identificacion`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `Productos_NombreCat_fk` FOREIGN KEY (`Nombre_Cat`) REFERENCES `categoria` (`Nombre_Cat`);

--
-- Filtros para la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
  ADD CONSTRAINT `Producto_Proveedor_Producto_fk` FOREIGN KEY (`Id_producto`) REFERENCES `productos` (`Id_Producto`),
  ADD CONSTRAINT `Producto_Proveedor_Proveedores_fk` FOREIGN KEY (`Id_Proveedor`) REFERENCES `proveedores` (`Id_Proveedor`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  ADD CONSTRAINT `Venta_cabecera_Cliente_fk` FOREIGN KEY (`Id_Cliente`) REFERENCES `clientes` (`Id_Cliente`);

--
-- Filtros para la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD CONSTRAINT `Venta_Detalle_Producto_fk` FOREIGN KEY (`Id_Producto`) REFERENCES `productos` (`Id_Producto`),
  ADD CONSTRAINT `Venta_Detalle_Venta_Cabecera_fk` FOREIGN KEY (`Id_Venta`) REFERENCES `venta_cabecera` (`Id_Venta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
