-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-12-2020 a las 17:54:27
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `closesports`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `id_articulo` int(20) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(20) NOT NULL,
  `Nombre_articulo` varchar(50) NOT NULL,
  `Equipo` varchar(20) NOT NULL,
  `Precio_articulo` int(20) NOT NULL,
  `Stock` int(20) NOT NULL,
  `Para` varchar(20) NOT NULL,
  `Foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_articulo`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `Tipo`, `Nombre_articulo`, `Equipo`, `Precio_articulo`, `Stock`, `Para`, `Foto`) VALUES
(1, 'Camiseta', 'Camiseta Titular', 'Boca', 6000000, 50, 'Hombre', 'Hombre_CamisetaTitular_Boca.png'),
(2, 'Camiseta', 'Camiseta Titular', 'Boca', 6000, 4, 'Mujer', 'Mujer_CamisetaTitular_Boca.png'),
(4, 'Camiseta', 'Camiseta Titular', 'Boca', 4000, 9, 'Ninio', 'Nino_CamisetaTitular_Boca.png'),
(6, 'Camiseta', 'Camiseta Titular', 'Racing', 6000, 9, 'Mujer', 'Mujer_CamisetaTitular_Rc.png'),
(7, 'Camiseta', 'Camiseta Titular', 'San Lorenzo', 6000, 9, 'Mujer', 'Mujer_CamisetaTitular_Sl'),
(8, 'Camiseta', 'Camiseta Titular', 'Riber', 6000, 9, 'Mujer', 'Mujer_CamisetaTitular_Riber.png'),
(10, 'Camiseta', 'Camiseta Suplente', 'Riber', 6000, 9, 'Mujer', 'Mujer_CamisetaSuplente_Riber.png'),
(11, 'Camiseta', 'Camiseta Suplente', 'Independiente', 6000, 0, 'Mujer', '0'),
(12, 'Camiseta', 'Camiseta Suplente', 'Racing', 6000, 9, 'Mujer', 'Mujer_CamisetaSuplente_Rc.png'),
(13, 'Camiseta', 'Camiseta Suplente', 'Boca', 6000, 5, 'Mujer', 'Mujer_CamisetaSuplente_Boca.png'),
(18, 'Short', 'Short uno', 'Racing', 2000, 9, 'Mujer', 'Mujer_Short_Rc.jpg'),
(19, 'Camiseta', 'Camiseta Suplente', 'Boca', 6000, 9, 'Hombre', 'Hombre_CamisetaSuplente_Boca.png'),
(20, 'Camiseta', 'Camiseta Suplente', 'Riber', 6000, 9, 'Hombre', 'Hombre_CamisetaSuplente_Riber.png'),
(21, 'Camiseta', 'Camiseta Suplente', 'Independiente', 6000, 9, 'Hombre', 'Hombre_CamisetaSuplente_Cai.png'),
(22, 'Camiseta', 'Camiseta Suplente', 'Racing', 6000, 9, 'Hombre', 'Hombre_CamisetaSuplente_Rc.png'),
(23, 'Camiseta', 'Camiseta Suplente', 'San Lorenzo', 6000, 8, 'Hombre', 'Hombre_CamisetaSuplente_Sl.png'),
(24, 'Camiseta', 'Camiseta Titular', 'Independiente', 6000, 9, 'Hombre', 'Hombre_CamisetaTitular_Cai.png'),
(25, 'Camiseta', 'Camiseta Titular', 'San Lorenzo', 6000, 9, 'Hombre', 'Hombre_CamisetaTitular_Sl.png'),
(26, 'Camiseta', 'Camiseta Titular', 'Racing', 6000, 9, 'Hombre', 'Hombre_CamisetaTitular_Rc.png'),
(27, 'Camiseta', 'Camiseta Titular', 'Riber', 6000, 9, 'Hombre', 'Hombre_CamisetaTitular_Riber.jpg'),
(29, 'Short', 'Short uno', 'Boca', 2000, 9, 'Hombre', 'Hombre_Short1_Boca.png'),
(30, 'Short', 'Short uno', 'Independiente', 2000, 9, 'Hombre', 'Hombre_Short1_Cai.png'),
(31, 'Short', 'Short uno', 'Racing', 2000, 9, 'Hombre', 'Hombre_Short1_Rc.png'),
(32, 'Short', 'Short uno', 'Riber', 2000, 9, 'Hombre', 'Hombre_Short1_Riber.png'),
(33, 'Short', 'Short uno', 'San Lorenzo', 2000, 9, 'Hombre', 'Hombre_Short1_Sl.png'),
(34, 'Short', 'Short dos', 'Boca', 2000, 9, 'Hombre', 'Hombre_Short2_Boca.png'),
(35, 'Short', 'Short dos', 'Riber', 2000, 9, 'Hombre', 'Hombre_Short2_Riber.png'),
(36, 'Short', 'Short dos', 'San Lorenzo', 2000, 9, 'Hombre', 'Hombre_Short2_Sl.png'),
(37, 'Camiseta', 'Camiseta Suplente', 'Boca', 4000, 9, 'Ninio', 'Nino_CamisetaSuplente_Boca.png'),
(38, 'Camiseta', 'Camiseta Suplente', 'Riber', 4000, 9, 'Ninio', 'Nino_CamisetaSuplente_Riber.png'),
(39, 'Camiseta', 'Camiseta Suplente', 'San Lorenzo', 4000, 9, 'Ninio', 'Nino_CamisetaSuplente_Sl.png'),
(40, 'Camiseta', 'Camiseta Suplente', 'Racing', 4000, 9, 'Ninio', 'Nino_CamisetaSuplente_Rc.png'),
(41, 'Camiseta', 'Camiseta Titular', 'Racing', 4000, 8, 'Ninio', 'Nino_CamisetaTitular_Rc.png'),
(42, 'Camiseta', 'Camiseta Titular', 'Riber', 4000, 9, 'Ninio', 'Nino_CamisetaTitular_Riber.png'),
(43, 'Camiseta', 'Camiseta Titular', 'San Lorenzo', 4000, 4, 'Ninio', 'Nino_CamisetaTitular_Sl.png'),
(44, 'Short', 'Short uno', 'Boca', 2000, 8, 'Ninio', 'Nino_Short_Boca.png'),
(45, 'Short', 'Short uno', 'Independiente', 2000, 9, 'Ninio', 'Nino_Short_Cai.png'),
(46, 'Short', 'Short uno', 'Racing', 2000, 9, 'Ninio', 'Nino_Short_Rc.png'),
(47, 'Short', 'Short uno', 'Riber', 2000, 9, 'Ninio', 'Nino_Short_Riber.png'),
(48, 'Short', 'Short dos', 'Boca', 2000, 9, 'Ninio', 'Nino_Short2_Boca.png'),
(53, 'Camiseta', 'Camiseta Boca 2018', 'Boca', 6000, 15, 'Hombre', 'Boca-2018.jpg'),
(52, 'Camiseta', 'Camiseta Boca 2018', 'Boca', 6000, 15, 'Hombre', 'Boca-2018.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

DROP TABLE IF EXISTS `carrito`;
CREATE TABLE IF NOT EXISTS `carrito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

DROP TABLE IF EXISTS `ofertas`;
CREATE TABLE IF NOT EXISTS `ofertas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_articulo` int(11) NOT NULL,
  `Descuento` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`id`, `id_articulo`, `Descuento`) VALUES
(1, 42, 15),
(2, 38, 15),
(3, 43, 15),
(6, 18, 5),
(5, 41, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Precio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `id_persona`, `id_articulo`, `Fecha`, `Precio`) VALUES
(64, 3, 41, '2020-12-28 17:52:20', 3400),
(63, 3, 44, '2020-12-28 04:40:13', 2000),
(62, 3, 43, '2020-12-28 04:07:17', 3400),
(61, 3, 1, '2020-12-28 03:50:52', 6000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas`
--

DROP TABLE IF EXISTS `tarjetas`;
CREATE TABLE IF NOT EXISTS `tarjetas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Numero_tarjeta` int(11) NOT NULL,
  `Saldo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarjetas`
--

INSERT INTO `tarjetas` (`id`, `Numero_tarjeta`, `Saldo`) VALUES
(1, 12345678, 94600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `Tipo_usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`id`,`Usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Usuario`, `Nombre`, `Apellido`, `Password`, `Tipo_usuario`) VALUES
(3, 'Cesar99', 'Cesar', 'Paredes', '$2y$10$Bm3dwCQFyJBOWJnPwhvwX.w0Eppny6prTRrRLN9jNBEcY4OIhnDwO', 'usuario'),
(5, 'admin', 'admin', 'admin', '$2y$10$vme/zYTb0AB34ZRI8dcwEuBp45jlqeFbW7QfmfBTDG82aKtpmVVXe', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
