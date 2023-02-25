-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 02:36:43
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `color` varchar(50) NOT NULL,
  `existencia` int(11) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `medida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `color`, `existencia`, `marca`, `medida`) VALUES
(1, 'Paño de Microfibra Scotch Brite Premium 1 pieza\r\n', 37, '- Pueden utilizarse en trabajos de limpieza pesados, en acabados y hasta para dar brillo', 'lila', 1000, 'Scotch Brite', '3m'),
(2, 'Alimento para Perro Pedigree Adulto Razas Pequeñas Res y Vegetales en Filetes 100 g', 12.5, 'Pedigree tiene para tu perro deliciosas porciones de pollo, cordero y res para que puedas consentirlo día tras día.\r\n- Sabores exquisitos\r\n- Textura suave', 'amarillo', 100000, 'Pedigree', '10x10'),
(3, 'TV LG ', 0, 'UHD 4K REAL\r\nQuad Core Processor 4K\r\nActive HDR', 'negro', 100000, 'lg', '43\"'),
(4, 'iPhone X Apple', 7, 'Spinmobile 64 GB Desbloqueado Varios Colores 1 pza', 'blanco', 10000000, 'apple', ' 5.8 pulgadas'),
(5, 'MacBook Air Apple', 18, 'Pantalla de 13 pulgadas\r\nResolución de 2560 x 1600\r\nSistema operativo MACOS', 'blanco', 1000000, 'apple', ' 13 pulgadas'),
(6, 'Lápices de Colores', 28.5, 'Forma redonda para un cómodo agarre.\r\nNo son tóxicos.\r\nColores vivos e intensos.', 'arcoiris', 10000000, 'berol', '10'),
(7, 'Audifonos', 499, 'Los audífonos Soul Track de Billboard, te darán la fidelidad de audio que necesitas para esa canción que no deja de sonar en tu cabeza.', 'negro', 1000000, 'TWS Billboard BB-E19818', '10'),
(8, 'carritos', 179, 'Edad recomendada: 3 años en adelante\r\n5 autos coleccionables\r\nCuenta con varios modelos', 'rojo', 100000, 'Hot Wheels Mattel ', '27'),
(9, 'Bloques', 339, 'Incluye 80 bloques\r\nCrea nuevas figuras\r\nLa bolsa cuenta con cierre', 'rosa', 100000, 'Fisher Price', '34'),
(10, 'Lentes ', 139, 'Modelo y color atrevido\r\nForma moderna\r\nLindo diseño', 'negro', 1000000, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
