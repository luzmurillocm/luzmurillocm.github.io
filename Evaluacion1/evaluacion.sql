-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2023 a las 07:03:47
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evaluación1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `nombre` varchar(100) NOT NULL,
  `celular` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `dirección` varchar(100) NOT NULL,
  `tarjeta` int(11) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`nombre`, `celular`, `correo`, `dirección`, `tarjeta`, `color`) VALUES
('Kenia Patricia Guerrero Parra', 1111111111, 'keniaguerrero@gmail.com', 'cetis107', 0, 'Madera'),
('Luz Melissa Chavez Murillo', 1111111111, 'melissachavez@gmail.com', 'cetis 107', 0, 'Rojo rubí'),
('Ruben', 111, '', '', 0, ''),
('Ruben', 1111111111, 'rubensito@gmail.com', 'cetis 107', 0, 'Negro'),
('julian', 1111111111, 'julianlq@gmail.com', 'cetis 107', 0, 'Gris'),
('NicoFa', 1111111111, 'nicofafa@gmail.com', 'cetis 107', 0, 'Transparente'),
('rochin', 1111111111, 'tranquilopollo666@gmail.com', 'cetis 107', 0, 'Rojo'),
('Karyme', 1111111111, 'karuu@gmail.com', 'cetis 107', 0, 'Transparente'),
('nicole', 1111111111, 'nicoco@gmail.com', 'cetis 107', 0, 'Transparente'),
('Olivia', 1111111111, 'livini@gmail.com', 'cetis 107', 0, 'Madera'),
('Melyuyu', 1111111111, 'melii@gmail.com', 'cetis 107', 0, 'Negro'),
('josé labastida', 1111111111, 'elinge@gmail.com', 'cetis 107', 0, 'Rojo rubí'),
('kayra', 1111111111, 'kayrita@gmail.com', 'villas del río', 0, 'Gris'),
('saúl ', 1111111111, 'saulito@gmail.com', 'villas del río', 0, 'Madera'),
('tommy', 1111111111, 'warrior@gmail.com', 'villas del río', 0, 'Rojo'),
('Luis carlos', 1111111111, 'luiicarlos@gmail.com', 'cetis 107', 0, 'Gris');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda en línea`
--

CREATE TABLE `tienda en línea` (
  `instrumento o accesorio` varchar(100) NOT NULL,
  `acustico o electrico` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `descripción` varchar(100) NOT NULL,
  `descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tienda en línea`
--

INSERT INTO `tienda en línea` (`instrumento o accesorio`, `acustico o electrico`, `precio`, `color`, `descripción`, `descuento`) VALUES
('Guitarra Clásica', 'Acústico', 1439, 'Madera', 'Construida de madera de tilo americano, gran calidad de sonido. Incluye funda. 6 meses de garantía!!', 0),
('Pacific Drums', 'Acústico', 13850, 'Rojo rubí', 'Kit completo de batería de 5 tambores, color rojo rubí brillante. Varillas de tensión True Pitch. Ac', 0),
('Ukelele', 'Acústico', 3399, 'Madera', '76,2 cm ukelele de concierto Bass mini acústica. Mini Uke Handcraft Madera de acacia maciza. Incluye', 0),
('Bajo', 'Acústico', 7090, 'Negro', 'Color negro. Parte trasera y laterales de caoba. Cuello fácil de jugar con bordes enrollados de diap', 30),
('Guitarra', 'Eléctrica', 5785, 'Negro', 'Hasta 6 meses sin intereses de $964.20. Epiphone SG Special VE. Guitarra Eléctrica EBANY.', 25),
('Batería', 'Eléctrica', 8999, 'Negro', 'Batería electrónica con ocho piezas de alta calidad. Rack aluminio, 385 sonidos, baquetas, cableado ', 0),
('Ukelele', 'Eléctrico', 1424, 'Gris', 'Hecho de policarbonato compuesto de fibra de carbono con construcción duradera. con kit para princip', 0),
('Bajo', 'Eléctrico', 37999, 'Rojo', 'Color rojo. 4 cuerdas, diapasón de palo de rosa con 24 trastes. Incluye funda, cable y llave de ajus', 30),
('Cuerdas para guitarra', 'Eléctrica', 554, 'Transparente', 'Incluye 4 juegos envueltos transparentes Tono brillante y equilibrado', 0),
('Baquetas para batería', 'Ambas', 239, 'Madera', 'Material premium. Aptas para todos. Suaves y cómodas. Respetuosas con el medio ambiente. Garantía de', 0),
('Cuerdas para ukelele', 'Acustico', 162, 'Transparentes', 'Material premium. Aptas para todos. Suaves y cómodas. Respetuosas con el medio ambiente. Garantía de', 0),
('Funda de guitarra', 'Ambas', 748, 'Negro', 'Funda de Guitarras Universal Acolchada de 8mm con 2 Bolsillos para Guitarras Acústica y Clásica con ', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
