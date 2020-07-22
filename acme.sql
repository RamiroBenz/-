-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2017 a las 20:40:56
-- Versión del servidor: 5.7.14-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `acme`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas_horario`
--

CREATE TABLE IF NOT EXISTS `citas_horario` (
  `id` int(11) DEFAULT NULL,
  `tipo` varchar(5) DEFAULT NULL,
  `tema` varchar(25) DEFAULT NULL,
  `titulo` varchar(142) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `duracion` double DEFAULT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  `colorear` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `festivos`
--

CREATE TABLE IF NOT EXISTS `festivos` (
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `fecha_fin` date DEFAULT NULL,
  `aniversario` tinyint(1) NOT NULL DEFAULT '0',
  `descripcion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formas_pago`
--

CREATE TABLE IF NOT EXISTS `formas_pago` (
  `id_forma_pago` int(10) NOT NULL AUTO_INCREMENT,
  `forma_pago` varchar(50) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `num_vencimientos` int(10) DEFAULT NULL,
  `dia_pago` int(10) DEFAULT NULL,
  `notas` longtext COLLATE latin1_spanish_ci,
  PRIMARY KEY (`forma_pago`),
  UNIQUE KEY `id_forma_pago` (`id_forma_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `desde` int(11) NOT NULL,
  `hasta` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL COMMENT 'Fecha de la conexión',
  `ip` char(25) NOT NULL COMMENT 'IP desde dónde se conecta',
  `user` char(10) NOT NULL DEFAULT '' COMMENT 'Usuario',
  `num_logins` int(11) NOT NULL DEFAULT '0' COMMENT 'Nº de conexiones del usuario en esa fecha y esa IP',
  `num_errors` int(11) NOT NULL DEFAULT '0' COMMENT 'Nº de conexiones erróneas',
  `changes` text COMMENT 'Cambios realizados, por ejemplo: UPDATE trabajadores(FCO), INSERT cursos(FTN-10-09), etc.',
  `revised` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Revisado cuando el num_errors es alto',
  PRIMARY KEY (`date`,`ip`,`user`),
  KEY `new_index` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Contabiliza las conexiones en la extranet' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `logins`
--

INSERT INTO `logins` (`id`, `date`, `ip`, `user`, `num_logins`, `num_errors`, `changes`, `revised`) VALUES
(1, '2017-11-14', '', 'Admin', 1, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meses`
--

CREATE TABLE IF NOT EXISTS `meses` (
  `id_mes` int(10) NOT NULL DEFAULT '0',
  `mes` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_mes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `meses`
--

INSERT INTO `meses` (`id_mes`, `mes`) VALUES
(1, 'Enero'),
(2, 'Febrero'),
(3, 'Marzo'),
(4, 'Abril'),
(5, 'Mayo'),
(6, 'Junio'),
(7, 'Julio'),
(8, 'Agosto'),
(9, 'Septiembre'),
(10, 'Octubre'),
(11, 'Noviembre'),
(12, 'Diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `Empresa` varchar(55) NOT NULL,
  `banco` varchar(45) NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblaciones`
--

CREATE TABLE IF NOT EXISTS `poblaciones` (
  `id_poblacion` int(10) NOT NULL AUTO_INCREMENT,
  `poblacion` varchar(50) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `provincia` varchar(25) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`poblacion`),
  UNIQUE KEY `id_poblacion` (`id_poblacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `poblaciones`
--

INSERT INTO `poblaciones` (`id_poblacion`, `poblacion`, `provincia`) VALUES
(2, 'Jose C Paz', 'Buenos Aires'),
(3, 'Laferrere', 'Buenos Aires'),
(4, 'Lanus ', 'Buenos Aires'),
(1, 'San Martin', 'Buenos Aires');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_bancos`
--

CREATE TABLE IF NOT EXISTS `tabla_bancos` (
  `banco` varchar(25) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`banco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tabla_bancos`
--

INSERT INTO `tabla_bancos` (`banco`) VALUES
('Ciudad'),
('Galicia'),
('H.S.B.C'),
('Hipotecario'),
('Nacion'),
('Patagonia'),
('Provincia'),
('Santander Rio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` varbinary(16) DEFAULT NULL,
  `summary` varchar(25) DEFAULT NULL,
  `description` varchar(128) DEFAULT NULL,
  `dtstart` datetime DEFAULT NULL,
  `dtend` datetime DEFAULT NULL,
  `calendar` varchar(10) DEFAULT NULL,
  `sequence` varbinary(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks_allday`
--

CREATE TABLE IF NOT EXISTS `tasks_allday` (
  `id` varbinary(18) DEFAULT NULL,
  `summary` varchar(7) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `dtstart` date DEFAULT NULL,
  `dtend` datetime DEFAULT NULL,
  `calendar` varchar(7) DEFAULT NULL,
  `sequence` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE IF NOT EXISTS `trabajadores` (
  `id_trabajador` varchar(10) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `trabajador` varchar(25) COLLATE latin1_spanish_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cp` varchar(5) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `id_poblacion` int(10) DEFAULT NULL,
  `nif` varchar(15) COLLATE latin1_spanish_ci DEFAULT NULL,
  `retencion_trabajador` double(15,5) DEFAULT NULL,
  `correo` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `seleccionado` tinyint(1) NOT NULL DEFAULT '0',
  `fecha_alta` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL,
  `notas` longtext COLLATE latin1_spanish_ci,
  `clave` varchar(32) COLLATE latin1_spanish_ci DEFAULT NULL,
  `num_trabajador` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_trabajador`),
  KEY `id_poblacion` (`id_poblacion`),
  KEY `num_trabajador` (`num_trabajador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id_trabajador`, `trabajador`, `apellidos`, `telefono`, `direccion`, `cp`, `fecha_creacion`, `id_poblacion`, `nif`, `retencion_trabajador`, `correo`, `seleccionado`, `fecha_alta`, `fecha_baja`, `notas`, `clave`, `num_trabajador`) VALUES
('1', 'Martin', 'Barrios', '6546546222', 'Calle cerrada 123', '1419', '2005-06-15 00:00:00', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1),
('2', 'Faustino', 'Centurion', '32122242', 'Calle Cortada 4567', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '2', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` varchar(10) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `clave` varchar(32) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'HASH de la contraseña con MD5',
  `usuario` varchar(25) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'Nombre al conectar',
  `paginas` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'Páginas con acceso (sino es administrador) entre corchetes y sin .html',
  `filtros` text COLLATE latin1_spanish_ci COMMENT 'filtro indicado por página',
  `activo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '¿Es un usuario permitido?',
  `escritura` tinyint(1) NOT NULL DEFAULT '0' COMMENT '¿Puede realizar cambios?',
  `administracion` tinyint(1) NOT NULL DEFAULT '0' COMMENT '¿Es administrador?',
  `notas` longtext COLLATE latin1_spanish_ci,
  `ip` char(25) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'calc: Dirección de la última conexión',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `clave`, `usuario`, `paginas`, `filtros`, `activo`, `escritura`, `administracion`, `notas`, `ip`) VALUES
('acme', 'admin', 'ACME', NULL, NULL, 1, 1, 1, NULL, NULL),
('admin', 'admin', 'Admin', NULL, NULL, 1, 1, 1, NULL, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD CONSTRAINT `trabajadores_ibfk_1` FOREIGN KEY (`id_poblacion`) REFERENCES `poblaciones` (`id_poblacion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
