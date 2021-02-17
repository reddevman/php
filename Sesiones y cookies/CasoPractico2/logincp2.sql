-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-02-2021 a las 16:02:58
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logincp2`
--
CREATE DATABASE IF NOT EXISTS `logincp2` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `logincp2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(512) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellidos`, `email`, `rol`, `pass`) VALUES
(3, 'ale@prueba.com', 'asdas', 'mqa', 'ale@prueba.com', 'usuario', '$2y$10$ZXg6ZhaWe2ABAtGJyGvh7OGu6u8CNgxqIO6NY.irdTsMaXhZCxxAq'),
(4, 'asdas123@gmail.com', 'zxc', 'marq', 'asdas123@gmail.com', 'usuario', '$2y$10$gmbHNiNBo2RhtAltbjcRCuFtyYxIYjzT9rEGNoquf52H2wnHOxiGy'),
(5, 'pepe@gmail.com', 'pepe', 'pepa', 'pepe@gmail.com', 'usuario', '$2y$10$4md/FUBZNA2E02bypn2dhuYLQYVdgzKmnuScHPNb8uhKrJRloBaw2');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
