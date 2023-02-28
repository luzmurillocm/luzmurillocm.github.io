-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2023 a las 01:44:33
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `telefono`, `fecha_nacimiento`, `sexo`) VALUES
(1, 'Meli', 'luz.chavez21@cetis107.edu.mx', '6674146882', '2006-08-22', 1),
(2, 'Luis', 'luis.castro21@cetis107.edu.mx', '6879387329', '2006-12-04', 0),
(3, 'Jimena', 'jimena.lara21@cetis107.edu.mx', '6675690450', '2006-09-13', 1),
(4, 'Ana', 'ana.beltran21@cetis107.edu.mx', '6673878095', '2006-04-19', 1),
(5, 'sofia', '12bslc@gmail.com', '6648529725', '2006-04-30', 1),
(6, 'kenia', 'kenia.guerrero21@cetis107.edu.mx', '6673172109', '2006-08-02', 0),
(7, 'angel', 'angel.revilla21@cetis107.edu.mx', '6673256794', '2006-11-12', 1),
(8, 'nicolas', 'nicolas.felix21@cetis107.edu.mx', '6673286192', '2006-11-22', 0),
(9, 'ruben', 'ruben.rocha21@cetis107.edu.mx', '6675286385', '2006-07-15', 0),
(10, 'francis', 'francis.murillo@hotmail.com', '6645872598', '1986-02-02', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
