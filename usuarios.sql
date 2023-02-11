-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 11-02-2023 a las 17:17:10
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `contrasena` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contrasena`, `email`, `created`, `updated`, `lastlogin`, `type`) VALUES
(29, 'Jesús', '1234', 'jesus.simarro@escuelaestech.es', '2022-12-18 23:16:25', '2022-12-18 23:17:57', '2023-02-11 16:54:59', 1),
(30, 'Jacinto Martínez', 'abcabc', 'correofalso123@mail.com', '2022-12-18 23:18:45', '2022-12-18 23:19:06', '2022-12-18 23:18:45', 0),
(31, 'Ana', 'qwerty', 'prueba@mail.com', '2022-12-18 23:19:28', '2022-12-18 23:19:28', '2022-12-18 23:19:28', 0),
(32, 'Ramón López', 'asdf123', 'otrocorreo@gmail.com', '2022-12-18 23:19:49', '2022-12-18 23:20:05', '2022-12-18 23:23:24', 0),
(33, 'María', 'qwerty771', 'correoooo@mail.com', '2022-12-18 23:31:29', '2022-12-18 23:32:02', '2022-12-18 23:33:06', 0),
(34, 'Pepito Pérez', 'asdfqwerty123', 'otrodeprueba@e.mail', '2023-02-11 16:56:35', '2023-02-11 16:57:15', '2023-02-11 16:57:03', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
