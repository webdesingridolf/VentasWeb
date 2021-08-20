-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-12-2020 a las 12:53:29
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdsystem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdetalleventa`
--

DROP TABLE IF EXISTS `tdetalleventa`;
CREATE TABLE IF NOT EXISTS `tdetalleventa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idVenta` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Descargado` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idVenta` (`idVenta`),
  KEY `idProducto` (`idProducto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tproductos`
--

DROP TABLE IF EXISTS `tproductos`;
CREATE TABLE IF NOT EXISTS `tproductos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(300) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Imagen` varchar(30) NOT NULL,
  `Categoria` enum('Laptops','LaptopsGamer',',','') NOT NULL,
  `Detalle` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tproductos`
--

INSERT INTO `tproductos` (`id`, `Nombre`, `Precio`, `Imagen`, `Categoria`, `Detalle`) VALUES
(1, 'laptop normal', 12, 'lady.jpg', 'Laptops', 'este es un detalle'),
(2, 'HP LAPTOP 14-CF2067LA CORE I3 8GB 256GB SSD 14\"', 2499, 'HP14.jpg', 'Laptops', 'Modelo: 14-cf2067la\r\nProcesador: Intel Core i3\r\nMemoria RAM: 8GB\r\nDisco Duro: 256GB\r\nPeso (kg): 1.51 kg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tventas`
--

DROP TABLE IF EXISTS `tventas`;
CREATE TABLE IF NOT EXISTS `tventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ClaveTransaccion` varchar(250) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `Status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tventas`
--

INSERT INTO `tventas` (`id`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `Status`) VALUES
(1, 'niidea', '', '2020-12-07 00:00:00', 'amoyach971@gmail.com', '60.00', 'pendiente'),
(2, 'niidea', '', '2020-12-07 00:00:00', 'amoyach971@gmail.com', '60.00', 'pendiente'),
(3, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 20:11:34', 'troya_prais@hotmail.com', '2511.00', 'pendiente'),
(4, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 21:09:34', 'amoyach971@gmail.com', '2511.00', 'pendiente'),
(5, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 21:10:29', 'amoyach971@gmail.com', '2511.00', 'pendiente'),
(6, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 21:10:45', 'amoyach971@gmail.com', '2511.00', 'pendiente'),
(7, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 21:11:42', 'troya_prais@hotmail.com', '2511.00', 'pendiente'),
(8, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 21:14:18', 'troya_prais@hotmail.com', '2511.00', 'pendiente'),
(9, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 21:14:40', 'troya_prais@hotmail.com', '2511.00', 'pendiente'),
(10, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 21:24:20', 'troya_prais@hotmail.com', '2511.00', 'pendiente'),
(11, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 21:25:47', 'troya_prais@hotmail.com', '2511.00', 'pendiente'),
(12, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 21:29:29', 'troya_prais@hotmail.com', '2511.00', 'pendiente'),
(13, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 21:44:42', 'troya_prais@hotmail.com', '2511.00', 'pendiente'),
(14, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 21:45:16', 'troya_prais@hotmail.com', '2511.00', 'pendiente'),
(15, '09g5h5b6mk9tmcmjkmqlud3s17', '', '2020-12-21 21:45:37', 'troya_prais@hotmail.com', '2511.00', 'pendiente');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
