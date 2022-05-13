-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2022 a las 14:57:13
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
-- Base de datos: `datos`
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
(1, 'jey', '$2y$10$xJM0dFO4Cved8ja1YhRYEeaJkW2sFat8.Pjomq5IrJq3sRoTDDtEW', 'jeisson villabon', 'jeisvillabon@misena.edu.co', NULL, 0, '238b977efa02589842b045a3505e724e', NULL, 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_documento` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `edad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_documento`, `nombre`, `apellido`, `edad`) VALUES
(123456, 'pepe', 'perez', 17),
(4567, 'maria', 'lopez', 25),
(12346789, 'wilson', 'perez', 36),
(9876, 'maruja', 'perez', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` varchar(11) NOT NULL,
  `seccion` varchar(30) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `origen` varchar(30) NOT NULL,
  `importado` varchar(15) NOT NULL,
  `precio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `seccion`, `producto`, `origen`, `importado`, `precio`) VALUES
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600),
('0', 'muebles', 'sofa ', 'Vietmam', 'verdadero', 1600);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
