-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-02-2018 a las 13:32:19
-- Versión del servidor: 5.7.14-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `comprobantes2`
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
