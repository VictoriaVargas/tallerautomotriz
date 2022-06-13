-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2022 a las 05:28:25
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chromocars_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `rut` varchar(20) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `direccion` varchar(90) NOT NULL,
  `correo` varchar(90) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `id_comuna`, `rut`, `nombre`, `direccion`, `correo`, `telefono`) VALUES
(1, 2, 'AXB010101AJKCS', 'Julieta Victoria Parra Vargas', 'MAR DE CORTEZ 3003', 'julieta.victoria.vargas@gmail.com', '3345600900'),
(2, 1, 'AXB010101AJKCS', 'Julieta Victoria Parra Vargas', 'MAR DE CORTEZ 93939', 'julieta.victoria.vargas@gmail.com', '3325639284'),
(3, 3, 'AXB0103490AJKCS', 'Francisco Alonso Aguilar Vazquez', 'Direccion Local #20 Col. San Martin, Jalisco, Mexico.', 'correoprueba@mail.com', '3324567890'),
(4, 3, 'AXB0103490AJKCS', 'Francisco Alonso Aguilar Vazquez', 'Direccion Local #20 Col. San Martin, Jalisco, Mexico.', 'correoprueba@mail.com', '3324567890'),
(5, 3, 'AXB0103490AJKCS', 'Francisco Alonso Aguilar Vazquez', 'Direccion Local #20 Col. San Martin, Jalisco, Mexico.', 'correoprueba@mail.com', '3324567890'),
(6, 3, 'AXB0103490AJKCS', 'Francisco Alonso Aguilar Vazquez', 'Direccion Local #20 Col. San Martin, Jalisco, Mexico.', 'correoprueba@mail.com', '3324567890'),
(7, 2, 'AXBCD838351AJKCS', 'Luis Miguel Hernandez', 'MAR DE CORTEZ #2459 A Col. Martinez Jalisco, Mexico', 'correomail@mail.com', '99-0900-9078');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `rut` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `id_cargo`, `nombre`, `apellido`, `rut`) VALUES
(1, 1, 'Yohan', 'Martinez', '12.749.625-K');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `id_empleado`, `user`, `password`) VALUES
(1, 1, 'Administrador', 'Admin2022');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
