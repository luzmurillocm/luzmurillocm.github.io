-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2023 a las 02:47:00
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaenlinea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripción` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripción`) VALUES
(1, 'Librero Minimalista', 'IDEAL PARA ORGANIZAR, ESPACIOS ABIERTOS, RESISTENTE Y MULTIFUNCIÓN, FÁCIL DE ARMAR, FACIL DE ARMAR, DE MADERA.'),
(2, 'Silla Escritorio', 'Silla Escritorio para Oficina EJECUTIVA GIRATORIA con COLCHON ACOLCHONADO Y Soporte Lumbar Super Comoda Altura Ajustable'),
(3, 'Lamparas', 'Juego de 2 lámparas táctiles de mesita de noche pequeña, 3 vías, regulables, puertos USB C, A y tomacorrientes, modernas para habitación de niños, con pantalla de lino y base plateada, color blanco'),
(4, 'Alexa', 'Nuevo Echo Dot (5.ª generación, modelo de 2022) | Bocina inteligente con Alexa | Negro'),
(5, 'Espejo con luz', 'Redlemon Espejo con Luz para Makeup Extra Grande Hollywood Vintage (44x35 cm), Espejo para Maquillaje con 9 Focos LED Regulables de Luz Blanca, Cálida y Neutra, Conexión USB, Soporte Ajustable 360°');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
