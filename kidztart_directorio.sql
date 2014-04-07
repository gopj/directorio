-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-04-2014 a las 17:40:02
-- Versión del servidor: 5.5.36-cll
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kidztart_directorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Cine', 'Un lugar donde puedes gozar de las películas de estreno en compañía de tus amigos y con una enorme pantalla, también puedes acompañar tu película con palomitas y refrescos!', ''),
(2, 'asdsa', 'asdasd', ''),
(3, '0', 'jkhkjhkjh', '3315813150_cee08ab2b33.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE IF NOT EXISTS `destacados` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idNegocio` int(10) NOT NULL,
  `idUsuario` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `url` varchar(300) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `idNegocio` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mensaje` text NOT NULL,
  `idManda` int(10) NOT NULL,
  `idRecibe` int(10) NOT NULL,
  `idNegocio` int(10) NOT NULL,
  `idRespuesta` int(10) NOT NULL,
  `publico` int(1) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocioCategorias`
--

CREATE TABLE IF NOT EXISTS `negocioCategorias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idNegocio` int(10) NOT NULL,
  `idCategoria` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocios`
--

CREATE TABLE IF NOT EXISTS `negocios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `descripcion` text,
  `latitud` varchar(20) DEFAULT NULL,
  `longitud` varchar(20) DEFAULT NULL,
  `imagen` varchar(400) DEFAULT NULL,
  `web` varchar(300) DEFAULT NULL,
  `idMatriz` int(10) DEFAULT NULL,
  `idNivel` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocioUsuario`
--

CREATE TABLE IF NOT EXISTS `negocioUsuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idNegocio` int(10) NOT NULL,
  `idUsuario` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE IF NOT EXISTS `niveles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `valor` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id`, `nombre`, `valor`) VALUES
(1, 'Basico', 10),
(2, 'Intermedio', 20),
(3, 'Completo', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raiting`
--

CREATE TABLE IF NOT EXISTS `raiting` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idNegocio` int(10) NOT NULL,
  `Rate` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socialMedia`
--

CREATE TABLE IF NOT EXISTS `socialMedia` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idNegocio` int(10) NOT NULL,
  `faceUsr` varchar(200) NOT NULL,
  `twitUsr` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `idAdministra` int(10) NOT NULL,
  `imagen` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
