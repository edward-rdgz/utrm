-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2015 a las 22:46:14
-- Versión del servidor: 5.6.16-log
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tjquerymobile`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusr` int(11) NOT NULL AUTO_INCREMENT,
  `usr` varchar(250) DEFAULT NULL,
  `pwd` varchar(250) DEFAULT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `apellido` varchar(250) DEFAULT NULL,
  `sexo` varchar(250) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusr`, `usr`, `pwd`, `nombre`, `apellido`, `sexo`, `edad`) VALUES
(1, 'jeansaoyn@hotmail.com', 'cff1546e012821b74c4b95779e0aec2c', 'Edward', 'Rodríguez', 'H', 20),
(2, 'll', 'bf083d4ab960620b645557217dd59a49', 'lll', 'lll', 'H', 60),
(3, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 'M', 60),
(4, 'edward.rdgz@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'edward', 'rodriguez', 'H', 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
