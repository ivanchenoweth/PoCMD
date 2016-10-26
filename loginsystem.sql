-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2011 at 10:26 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `tel`) VALUES(1, 'ivan', '123');
INSERT INTO `clientes` (`id`, `nombre`, `tel`) VALUES(3, 'dany', '487');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cveprod` varchar(25) NOT NULL COMMENT 'Clave del producto (acceso directo)',
  `descripcion` varchar(50) NOT NULL COMMENT 'Descripción completa',
  `precio` double NOT NULL COMMENT 'Precio de venta',
  `timelog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'FechaHora de afectación',
  `usuario_id` int(11) NOT NULL COMMENT 'id de usuarios (usuario que afecta)',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Catálogo de productos' AUTO_INCREMENT=9 ;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `cveprod`, `descripcion`, `precio`, `timelog`, `usuario_id`) VALUES(2, 'PL', 'Platos', 18, '2011-11-14 01:33:44', 4);
INSERT INTO `productos` (`id`, `cveprod`, `descripcion`, `precio`, `timelog`, `usuario_id`) VALUES(4, 'CH', 'Chiltepineros', 10, '2011-11-14 01:33:42', 4);
INSERT INTO `productos` (`id`, `cveprod`, `descripcion`, `precio`, `timelog`, `usuario_id`) VALUES(5, 'CU', 'Cucharas', 12, '2011-11-14 01:33:59', 4);
INSERT INTO `productos` (`id`, `cveprod`, `descripcion`, `precio`, `timelog`, `usuario_id`) VALUES(6, 'TE', 'Tenedores', 7, '2011-11-14 01:33:40', 4);
INSERT INTO `productos` (`id`, `cveprod`, `descripcion`, `precio`, `timelog`, `usuario_id`) VALUES(7, 'LT', 'Laptop', 123, '2011-11-14 01:33:36', 4);

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `razonsocial` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `telefono`, `razonsocial`) VALUES(1, 'Sabritas ', 'werwer', 'S.A. de C.V.');
INSERT INTO `proveedores` (`id`, `nombre`, `telefono`, `razonsocial`) VALUES(2, 'Barcel', '12387', 'Barcel S.A. de C.v');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `rol` set('Administrador','Vendedor') NOT NULL,
  `email` varchar(50) NOT NULL,
  `timelog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` set('Bloqueado','Suspendido') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Usuarios del sistema' AUTO_INCREMENT=31 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `nombre`, `rol`, `email`, `timelog`, `status`) VALUES(4, 'dany', '321', 'Daniel', 'Vendedor', 'dany@gmail.com', '2011-11-01 15:53:26', '');
INSERT INTO `usuarios` (`id`, `username`, `password`, `nombre`, `rol`, `email`, `timelog`, `status`) VALUES(3, 'ivan', '123', 'Ivan R. Chenoweth', 'Administrador', 'ivanchenoweth@gmaiil.com', '2011-11-11 14:32:22', '');
INSERT INTO `usuarios` (`id`, `username`, `password`, `nombre`, `rol`, `email`, `timelog`, `status`) VALUES(5, 'chuy', '789', 'Jesus', 'Vendedor', 'jesus@adsf.com', '2011-11-11 14:32:28', '');

-- --------------------------------------------------------

--
-- Table structure for table `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folio` int(11) NOT NULL,
  `total` double NOT NULL,
  `timelog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'FechaHora de afectación',
  `usuarios_id` int(11) NOT NULL COMMENT 'id de usuarios (usuario que afecta)',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Ventas realizadas' AUTO_INCREMENT=9 ;

--
-- Dumping data for table `venta`
--

INSERT INTO `venta` (`id`, `folio`, `total`, `timelog`, `usuarios_id`) VALUES(1, 1, 0, '2011-11-15 19:28:26', 4);
INSERT INTO `venta` (`id`, `folio`, `total`, `timelog`, `usuarios_id`) VALUES(2, 2, 0, '2011-11-15 19:29:39', 4);
INSERT INTO `venta` (`id`, `folio`, `total`, `timelog`, `usuarios_id`) VALUES(3, 3, 0, '2011-11-15 20:27:02', 4);
INSERT INTO `venta` (`id`, `folio`, `total`, `timelog`, `usuarios_id`) VALUES(4, 4, 12, '2011-11-15 23:08:25', 4);
INSERT INTO `venta` (`id`, `folio`, `total`, `timelog`, `usuarios_id`) VALUES(5, 5, 10, '2011-11-16 14:42:58', 4);
INSERT INTO `venta` (`id`, `folio`, `total`, `timelog`, `usuarios_id`) VALUES(6, 6, 133, '2011-11-16 14:57:37', 4);
INSERT INTO `venta` (`id`, `folio`, `total`, `timelog`, `usuarios_id`) VALUES(7, 7, 10, '2011-11-16 17:40:50', 4);
INSERT INTO `venta` (`id`, `folio`, `total`, `timelog`, `usuarios_id`) VALUES(8, 8, 12, '2011-11-17 15:28:52', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ventadetalle`
--

CREATE TABLE IF NOT EXISTS `ventadetalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folio` int(11) NOT NULL COMMENT 'Folio consecutivo de venta',
  `cveprod` varchar(25) NOT NULL COMMENT 'cveprod del catalogo de  productos',
  `descripcion` text NOT NULL COMMENT 'Descripción del producto',
  `precio` double NOT NULL COMMENT 'Precio unitario de venta',
  `cantidad` int(11) NOT NULL COMMENT 'Cantidad adquirida del producto',
  `importe` double NOT NULL COMMENT 'importe del producto',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Detalle de una venta realizada' AUTO_INCREMENT=12 ;

--
-- Dumping data for table `ventadetalle`
--

INSERT INTO `ventadetalle` (`id`, `folio`, `cveprod`, `descripcion`, `precio`, `cantidad`, `importe`) VALUES(1, 1, 'CH', 'Chiltepineros', 10, 1, 10);
INSERT INTO `ventadetalle` (`id`, `folio`, `cveprod`, `descripcion`, `precio`, `cantidad`, `importe`) VALUES(2, 1, 'CU', 'Cucharas', 12, 1, 12);
INSERT INTO `ventadetalle` (`id`, `folio`, `cveprod`, `descripcion`, `precio`, `cantidad`, `importe`) VALUES(3, 2, 'LT', 'Laptop', 123, 1, 123);
INSERT INTO `ventadetalle` (`id`, `folio`, `cveprod`, `descripcion`, `precio`, `cantidad`, `importe`) VALUES(4, 3, 'CU', 'Cucharas', 12, 1, 12);
INSERT INTO `ventadetalle` (`id`, `folio`, `cveprod`, `descripcion`, `precio`, `cantidad`, `importe`) VALUES(5, 3, 'CH', 'Chiltepineros', 10, 1, 10);
INSERT INTO `ventadetalle` (`id`, `folio`, `cveprod`, `descripcion`, `precio`, `cantidad`, `importe`) VALUES(6, 4, 'CU', 'Cucharas', 12, 1, 12);
INSERT INTO `ventadetalle` (`id`, `folio`, `cveprod`, `descripcion`, `precio`, `cantidad`, `importe`) VALUES(7, 5, 'CH', 'Chiltepineros', 10, 1, 10);
INSERT INTO `ventadetalle` (`id`, `folio`, `cveprod`, `descripcion`, `precio`, `cantidad`, `importe`) VALUES(8, 6, 'CH', 'Chiltepineros', 10, 1, 10);
INSERT INTO `ventadetalle` (`id`, `folio`, `cveprod`, `descripcion`, `precio`, `cantidad`, `importe`) VALUES(9, 6, 'LT', 'Laptop', 123, 1, 123);
INSERT INTO `ventadetalle` (`id`, `folio`, `cveprod`, `descripcion`, `precio`, `cantidad`, `importe`) VALUES(10, 7, 'CH', 'Chiltepineros', 10, 1, 10);
INSERT INTO `ventadetalle` (`id`, `folio`, `cveprod`, `descripcion`, `precio`, `cantidad`, `importe`) VALUES(11, 8, 'CU', 'Cucharas', 12, 1, 12);
