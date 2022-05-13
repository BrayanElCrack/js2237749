-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2022 a las 15:06:59
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuario`
--

CREATE TABLE `datos_usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT 0,
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT 0,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_usuario`
--

INSERT INTO `datos_usuario` (`id`, `usuario`, `password`, `nombre`, `correo`, `last_session`, `activacion`, `token`, `token_password`, `password_request`, `id_tipo`) VALUES
(1, 'jey', '$2y$10$xJM0dFO4Cved8ja1YhRYEeaJkW2sFat8.Pjomq5IrJq3sRoTDDtEW', 'jeisson villabon', 'jeisvillabon@misena.edu.co', NULL, 0, '238b977efa02589842b045a3505e724e', NULL, 0, 2),
(2, 'steven', '$2y$10$1RBNiBpZl9yCvKRNNUUHGeSA2.X3ZUjzUs2.gV9pXV1uQGHPa7Nq2', 'jeisson torres', 'Jeisson.Villabon.Torres@gmail.com', '2022-02-15 08:27:21', 1, '2c360136b1535fa61ab9ba8490b72bf4', '', 0, 2),
(3, 'tiago', '$2y$10$Oin234guA6yu3.WaepMvN.0Q/foopwJuiGht/Zv5rN9guKJFVsrx6', 'santiago', 'santiagoturneo@gmail.com', NULL, 0, 'acd50fd2948359b73a49ce8a18ac2d54', NULL, 0, 2),
(4, 'thehome', '$2y$10$bFJcrK3MTxvG.lAeNfbLCeKeLUXeWKPJcJjJ7A1Kx0cDaGhY7zqxe', 'home', 'thehomesoacha@gmail.com', '2022-02-15 09:06:49', 1, '0a42eaada416a467258062c969a35804', '', 0, 1),
(5, 'daniel', '$2y$10$di7edLyOwiO9HDEhQQFCd.HrGvKeQlRyGZnBWX9wyqcgEfJakuFvC', 'daniel', 'devargas79@misena.edu.co', '2022-04-05 07:26:54', 1, 'b6cba835deaa10f350e267e4bb6c3f43', '', 0, 2),
(6, 'torres', '$2y$10$iOlDEVfgqkzLAh8An2qq7uXxhOYIPyX2v9kxcKO.4AKF.V1V9zcg2', 'david', 'davstorres11111@misena.edu.co', NULL, 0, 'da3f979028016fbc55b7e817f3819420', NULL, 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_usuario`
--
ALTER TABLE `datos_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_usuario`
--
ALTER TABLE `datos_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
