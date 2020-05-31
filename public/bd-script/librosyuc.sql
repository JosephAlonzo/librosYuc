-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2020 a las 06:31:04
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `librosyuc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `rate` double(10,2) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `foto` varchar(250) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `added_at` datetime NOT NULL,
  `delete_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id`, `nombre`, `autor`, `genero`, `rate`, `views`, `foto`, `descripcion`, `precio`, `added_at`, `delete_at`) VALUES
(1, 'Croata', 'Jorge García García', 'Novela', 4.00, 59, 'croata.jpg', 'Croata, utilizando la arrolladora fuerza de sus personajes, sube a las más altas esferas de la sociedad para mostrarnos las mayores bajezas del ser humano. Lo hace en una época, la actual, y en un mundo ridículo y corrupto donde los conceptos buenos.', 560.00, '2020-05-29 00:00:00', 0),
(2, 'El legado de los malditos', 'Vanesa Redondo', 'Novela', 4.50, 0, 'el-legado-de-los-malditos.jpg', 'Novela histórica. La gran obra de narrativa de la escritora Vanesa Redondo. Uno de los misterios arquitectónicos mejor guardados por la Iglesia y por los antiguos reyes de Castilla.', 600.00, '2020-05-29 00:00:00', 0),
(5, 'El silencio de la lengua', 'Luis Melero Marcos', 'Poética actual', 3.50, 0, 'el-silencio-de-la-lengua.jpg', 'Transitar por los angostos espacios de la poesía, es como mirar al abismo donde el caminante puede despeñar su realidad, urgir el abandono y hundirse, siempre con dolor, en lo más profundo del ser.', 320.00, '2020-05-29 00:00:00', 0),
(6, 'ficcion', 'joseph', 'ficcion', 5.00, 0, 'user.jpg', 'este es un libro de test', 800.00, '2020-05-12 00:00:00', 0),
(7, 'ficción', 'joseph', 'ficción', 5.00, 0, 'user.jpg', 'este es un libro de test', 800.00, '2020-05-04 00:00:00', 0),
(8, 'Lo inefable del amor', 'Sara Carballal', 'Narrativa urbana', 3.00, 0, 'lo-inefable-del-amor.jpg', 'En palabras de la autora: “A veces el para siempre dura un poco menos, pero no por ello se convierte en mentira. Esta historia es un viaje a la concepción de un amor, un elogio a los buenos momentos mientras se plantea el devenir de la pareja.', 0.00, '2020-05-26 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favourite`
--

DROP TABLE IF EXISTS `favourite`;
CREATE TABLE IF NOT EXISTS `favourite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_book` (`id_book`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `favourite`
--

INSERT INTO `favourite` (`id`, `id_user`, `id_book`) VALUES
(4, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_book` (`id_book`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `history`
--

INSERT INTO `history` (`id`, `id_user`, `id_book`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 2, 1, '2020-05-30 04:04:46', '2020-05-30 04:05:06', '0000-00-00 00:00:00'),
(8, 2, 6, '2020-05-30 04:09:22', '2020-05-30 04:12:36', '0000-00-00 00:00:00'),
(9, 2, 2, '2020-05-30 04:12:12', '2020-05-30 04:12:20', '0000-00-00 00:00:00'),
(10, 1, 1, '2020-05-30 04:17:02', '2020-05-30 14:28:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nowreading`
--

DROP TABLE IF EXISTS `nowreading`;
CREATE TABLE IF NOT EXISTS `nowreading` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_book` (`id_book`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nowreading`
--

INSERT INTO `nowreading` (`id`, `id_user`, `id_book`) VALUES
(16, 2, 1),
(17, 2, 2),
(18, 2, 6),
(19, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `delete_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email`, `foto`, `tipo`, `password`, `delete_at`) VALUES
(1, 'joseph', 'alonzo', 'josep_alonzo@icloud.com', 'user.jpg', 0, '87d39e0b4590915d80d370f374167e5b28f0ef7d', 0),
(2, 'bryant', 'paz', 'pelusito@gmail.com', 'user.png', 0, 'b6721bc80c0f73cc7b7e271d53bd0ee26153f50c', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_book` (`id_book`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `wishlist`
--

INSERT INTO `wishlist` (`id`, `id_user`, `id_book`) VALUES
(3, 2, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `favourite`
--
ALTER TABLE `favourite`
  ADD CONSTRAINT `favourite_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `favourite_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `nowreading`
--
ALTER TABLE `nowreading`
  ADD CONSTRAINT `nowreading_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `nowreading_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
