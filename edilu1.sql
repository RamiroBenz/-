-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-12-2017 a las 16:20:23
-- Versión del servidor: 5.7.14-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `edilu1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` varchar(50) DEFAULT NULL,
  `Empresa` varchar(100) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Localidad` varchar(100) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `cuit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `Empresa`, `Direccion`, `Localidad`, `Telefono`, `cuit`) VALUES
('1', 'Arca Distribuciones S.A', 'Francia 3553', 'San Martin', '?', '30-68630937-8'),
('2', 'Naturel S.A.', 'Int.Neyer 924', 'Beccar', '?', '30-62534679-3'),
('3', 'Lady Way S.R.L.', 'Aguero 568 1°C', 'Capital Federal', '?', '30-65146422-2'),
('4', 'Garcia Reguera.', 'Moreno 1432', 'Capital Federal', '?', '30-52880793-9'),
('5', 'Famularo S.A.', 'Alsina 1556/60', 'Capital Federal', '?', '30-53870999-5'),
('', 'Lola Morena', 'Emilio Lamarca 4959', 'Capital Federal', '45723010', ''),
(NULL, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `numFact` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `cliente` varchar(55) NOT NULL,
  `direccion` varchar(55) NOT NULL,
  `iva` varchar(55) NOT NULL,
  `localidad` varchar(55) NOT NULL,
  `provincia` varchar(55) NOT NULL,
  `cuit` int(13) NOT NULL,
  `numRem` int(15) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `codigo` int(15) NOT NULL,
  `descripcion` varchar(55) NOT NULL,
  `precio` float NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(100) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `Empresa` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `Usuario`, `Contraseña`, `Empresa`) VALUES
(1, 'Admin', '1234', 'Edilu'),
(2, 'Ramiro', '1924', 'Edilu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nc`
--

CREATE TABLE IF NOT EXISTS `nc` (
  `id` int(15) NOT NULL,
  `numNC` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `cliente` varchar(55) NOT NULL,
  `direccion` varchar(55) NOT NULL,
  `iva` varchar(55) NOT NULL,
  `localidad` varchar(55) NOT NULL,
  `provincia` varchar(55) NOT NULL,
  `cuit` int(13) NOT NULL,
  `numFact` int(15) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `codigo` int(15) NOT NULL,
  `descripcion` varchar(55) NOT NULL,
  `precio` float NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nd`
--

CREATE TABLE IF NOT EXISTS `nd` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `numND` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `cliente` varchar(55) NOT NULL,
  `direccion` varchar(55) NOT NULL,
  `iva` varchar(55) NOT NULL,
  `localidad` varchar(55) NOT NULL,
  `provincia` varchar(55) NOT NULL,
  `cuit` int(13) NOT NULL,
  `numFact` int(15) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `codigo` int(15) NOT NULL,
  `descripcion` varchar(55) NOT NULL,
  `precio` float NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido` int(30) NOT NULL,
  `fecha` date NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `Codigo` int(50) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Cantidad` int(50) NOT NULL,
  `Precio` decimal(50,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `pedido`, `fecha`, `empresa`, `Codigo`, `Descripcion`, `Cantidad`, `Precio`) VALUES
(1, 1, '2019-07-19', 'Lola Morena', 51650, 'Sout. Red. Luana T.95', 200, '79');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int(50) DEFAULT NULL,
  `Empresa` varchar(100) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Localidad` varchar(100) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `cuit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `Empresa`, `Direccion`, `Localidad`, `Telefono`, `cuit`) VALUES
(1, 'Gabor', 'Moron 85', 'Paso del Rey', '4632-630', '30-56017056-0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remito`
--

CREATE TABLE IF NOT EXISTS `remito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numRem` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `cliente` varchar(55) NOT NULL,
  `direccion` varchar(55) NOT NULL,
  `iva` varchar(55) NOT NULL,
  `localidad` varchar(55) NOT NULL,
  `provincia` varchar(55) NOT NULL,
  `cuit` int(13) NOT NULL,
  `cant` int(11) NOT NULL,
  `codigo` int(15) NOT NULL,
  `descripcion` varchar(55) NOT NULL,
  `precio` float NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Precio` varchar(20) DEFAULT NULL,
  `Empresa` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id`, `Codigo`, `Descripcion`, `Precio`, `Empresa`) VALUES
(1, '01', 'Catalogos Lola Morena 2007', '50.20', 'Lola Morena'),
(2, '02', 'Lola Morena Catalogos año 2009', '50.30', 'Lola Morena'),
(3, '003', 'Catalogos Lola Morena 2008', '50.60', 'Lola Morena'),
(4, '51650', 'Sout. Red. Luana T.95', '79.00', 'Lady Way'),
(5, '51651', 'Sout. Red. Luana T.100', '79.00', 'Lady Way'),
(6, '44028201', 'Pack Vedetinas Bca/Negro T.U', '47.80', 'Millanel Cosmetica S.R.L.'),
(7, '', '', '', ''),
(8, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
