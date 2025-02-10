-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-11-2024 a las 01:02:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `S_Antonio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_carrito`
--

CREATE TABLE `tb_carrito` (
  `id` int(11) NOT NULL,
  `id_pedido` varchar(512) DEFAULT NULL,
  `producto` varchar(512) DEFAULT NULL,
  `detalle` varchar(512) DEFAULT NULL,
  `cantidad` varchar(512) DEFAULT NULL,
  `precio_unitario` varchar(512) DEFAULT NULL,
  `precio_total` varchar(512) DEFAULT NULL,
  `extra1` varchar(512) DEFAULT NULL,
  `extra2` varchar(512) DEFAULT NULL,
  `extra3` varchar(512) DEFAULT NULL,
  `user_creacion` varchar(512) DEFAULT NULL,
  `user_actualizacion` varchar(512) DEFAULT NULL,
  `user_eliminacion` varchar(512) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_carrito`
--

INSERT INTO `tb_carrito` (`id`, `id_pedido`, `producto`, `detalle`, `cantidad`, `precio_unitario`, `precio_total`, `extra1`, `extra2`, `extra3`, `user_creacion`, `user_actualizacion`, `user_eliminacion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '1', 'POLLOS POCOYO', 'SIN SOPA', '5', '18', '90', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:27:30', NULL, NULL, '1'),
(2, '1', 'COCA COLA', 'DE 3 LITROS', '1', '15', '15', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:27:53', NULL, NULL, '1'),
(3, '2', 'pañales para bebe', 'recien nacido', '1', '20', '20', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:36:14', NULL, NULL, '1'),
(4, '2', 'gaseosa', 'de 2 litro', '1', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:36:35', '2022-11-16 01:36:56', NULL, '0'),
(5, '2', 'pollod', 'con sopa', '1', '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:36:49', NULL, NULL, '1'),
(6, '3', 'pollo', 'con sopa', '1', '15', '15', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:39:02', NULL, NULL, '1'),
(7, '4', 'sachets', 'paquete', '23', '12', '276', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-06 03:17:26', NULL, NULL, '1'),
(8, '5', 'papa', 'quintal', '2', '23', '46', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-07 11:01:17', NULL, NULL, '1'),
(9, '6', 'asxckjhgfds', 'werfghn', '23', '23', '529', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-08 12:49:37', NULL, NULL, '1'),
(10, '7', 'zaaaa', 'arroba', '12', '23', '276', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-08 12:48:33', NULL, NULL, '1'),
(11, '8', 'BOTELLON', '20 LITROS', '3', '5', '15', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 09:26:40', '2024-09-10 09:02:27', NULL, '0'),
(12, '8', 'schet', '10 paquetes', '100', '0.50', '50', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-10 09:02:07', NULL, NULL, '1'),
(13, '9', 'BOTELLONES ', '20 LITROS', '20', '10', '200', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 10:31:58', NULL, NULL, '1'),
(14, '10', 'rojo', 'solo uno', '123', '2', '246', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 11:05:31', NULL, NULL, '1'),
(15, '11', 'wrgh', 'asdfgbqwe', '12', '2', '24', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 05:40:46', NULL, NULL, '1'),
(16, '11', 'qwerg', 'qwerfg', '2', '3', '6', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 05:44:19', NULL, NULL, '1'),
(17, '11', 'qwe', 'qwe', '12', '3', '36', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 05:44:48', NULL, NULL, '1'),
(18, '11', 'asdfgh', 'asdfgh', '12', '23', '276', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 06:53:02', NULL, NULL, '1'),
(19, '12', 'botellon', '20 ltros', '2', '10', '20', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 07:42:48', NULL, NULL, '1'),
(20, '13', 'botellon', '20 lt4orfdsfbxv ', '20', '10', '200', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-15 06:49:23', NULL, NULL, '1'),
(21, '14', 'agua', '20 litros', '4', '10', '40', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-17 09:07:55', NULL, NULL, '1'),
(22, '14', 'botellon', '20 litros', '5', '10', '50', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-23 03:52:15', NULL, NULL, '1'),
(23, '15', 'sachet', '45', '3', '4', '12', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-23 03:55:51', NULL, NULL, '1'),
(24, '16', 'aguaa', 'fria', '12', '25', '300', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-23 04:48:03', NULL, NULL, '1'),
(25, '17', 'hsbcbvbdh', '3ocvbnm', '2', '10', '20', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-23 08:57:30', NULL, NULL, '1'),
(26, '18', 'agua', '20 ltros', '3', '10', '30', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-23 09:11:32', NULL, NULL, '1'),
(27, '19', 'galleta', 'moradita', '5', '10', '50', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-08 10:59:20', NULL, NULL, '1'),
(28, '20', 'botellon ', 'dxcvbnm,.', '1', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-12 09:42:29', '2024-10-12 09:45:57', NULL, '0'),
(29, '21', 'qwe', 'qwe', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 08:21:07', NULL, NULL, '1'),
(30, '22', NULL, '', '10', '10', '100', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 08:51:54', '2024-10-23 08:53:21', NULL, '0'),
(31, '22', 'producto', 'qweqe', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 08:52:42', '2024-10-23 08:54:17', NULL, '0'),
(32, '22', 'Agua Sachet', '12312dasdasd', '10', '1', '10', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 08:53:15', '2024-10-23 08:53:18', NULL, '0'),
(33, '22', 'Agua en botellon', '', '100', '10', '1000', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 08:54:29', '2024-10-23 08:54:40', NULL, '0'),
(34, '22', 'Agua en botellon', '', '10', '100', '1000', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 08:55:10', '2024-10-23 08:55:17', NULL, '0'),
(35, '22', 'Agua en botellon', '', '10', '100', '1000', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 08:55:26', NULL, NULL, '1'),
(36, '22', 'Agua Sachet', '', '10', '5', '50', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 08:55:36', NULL, NULL, '1'),
(37, '23', 'Agua Sachet', '', '100', '5', '500', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 09:27:22', NULL, NULL, '1'),
(38, '24', 'Agua Sachet', '', '11', '11', '11', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 11:08:56', NULL, NULL, '1'),
(39, '25', 'Agua en botellon', 'DEbe de la semana pasada', '10', '10', '100', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-26 11:56:34', NULL, NULL, '1'),
(40, '26', 'Agua en botellon', 'No olvidar marcar las botellas', '5', '10', '50', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 09:13:22', NULL, NULL, '1'),
(41, '26', 'Agua Sachet', 'No olvidar cobrar', '10', '5', '50', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 09:13:42', NULL, NULL, '1'),
(42, '27', 'Agua en botellon', '', '100', '10', '1000', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 10:12:01', NULL, NULL, '1'),
(43, '27', 'Agua Sachet', '', '10', '5', '50', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 10:12:10', NULL, NULL, '1'),
(44, '28', 'Agua en botellon', '', '10', '10', '100', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 10:32:50', NULL, NULL, '1'),
(45, '28', 'Agua Sachet', '', '50', '5', '250', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 10:33:00', NULL, NULL, '1'),
(46, '29', 'Agua Sachet', '', '1', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 10:36:08', NULL, NULL, '1'),
(47, '30', 'Agua Sachet', '', '10', '1', '10', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 10:37:14', NULL, NULL, '1'),
(48, '31', 'Agua Sachet', '', '10', '10', '100', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 10:39:06', NULL, NULL, '1'),
(49, '32', 'Agua botella', '', '100', '10', '1000', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-30 11:42:55', NULL, NULL, '1'),
(50, '32', 'Agua en botellon', '', '100', '10', '1000', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-30 11:43:09', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `a_paterno` varchar(50) NOT NULL,
  `a_materno` varchar(50) NOT NULL,
  `ci` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `nombre`, `a_paterno`, `a_materno`, `ci`, `telefono`, `email`) VALUES
(19, 'jose', 'Lopez', 'qwe', 'qwe', 'qweqw', 'rrrr@gmail.com'),
(20, 'Abel', 'Copa', 'Lopez', '234234', '67335234', 'aberl@gmailcom'),
(21, 'sdf', 'sdf', '23423', '234234', '23423', 'fsdf22sdf@gmial.com'),
(22, 'sdfsdf', 'sdfsd', 'fsdf', 'sdfsdf', 'sdfsdf', 'sdss@gmail.com'),
(23, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qweqqqqw@ga.com'),
(24, 'roddddd', 'wer', 'wer', 'wer', 'qqq', 'qqweqwe'),
(25, 'nueva', 'dasd', 'asd', 'asd', 'asd', 'asdasd'),
(26, 'Pepe', 'Perez', 'qweqwe', '12312', '734574564', 'pepe@gmail.com'),
(27, 'Pepe', 'weqw', 'qweqw', 'qweq', 'eqwe', 'pepeee@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_direcciones`
--

CREATE TABLE `tb_direcciones` (
  `id` int(11) NOT NULL,
  `zona` varchar(50) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `latitud` varchar(50) DEFAULT NULL,
  `longitud` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_direcciones`
--

INSERT INTO `tb_direcciones` (`id`, `zona`, `calle`, `referencia`, `id_cliente`, `email`, `latitud`, `longitud`) VALUES
(14, 'ITSA', 'porvenir', 'Local', NULL, 'rrrr@gmail.com', NULL, NULL),
(15, 'Sacaba', 'Calle demetrio perez', 'puerta negra', NULL, 'rrrr@gmail.com', NULL, NULL),
(16, 'Sacaba', 'Calle Porvenir', 'puerta blanca', NULL, 'aberl@gmailcom', NULL, NULL),
(17, 'Pacata', 'Bateon', 'Al lado de farmacia', NULL, 'aberl@gmailcom', NULL, NULL),
(18, 'Sacaba', 'Calle Porvenir', 'https://maps.app.goo.gl/vxBkVH9kFRJbtsjE8', NULL, 'sdss@gmail.com', NULL, NULL),
(19, 'qwe', 'qwe', 'qwe', NULL, 'qweqqqqw@ga.com', NULL, NULL),
(20, 'qwe', 'qwe', 'qwe', NULL, 'qqweqwe', NULL, NULL),
(21, '1123', 'qweqweqw', 'qweqfsdf', NULL, 'asdasd', NULL, NULL),
(22, 'SAcaba', '1231', 'qweqwe', NULL, 'pepeee@gmail.com', '-17.40633404504375', '-66.03911325891939'),
(23, 'Pepepee', 'qweqw', 'qweqweqw', NULL, 'pepeee@gmail.com', '-17.40502363608366', '-66.04460642298189');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_distribuidores`
--

CREATE TABLE `tb_distribuidores` (
  `id` int(11) NOT NULL,
  `nombres` varchar(512) DEFAULT NULL,
  `ap_paterno` varchar(512) DEFAULT NULL,
  `ap_materno` varchar(512) DEFAULT NULL,
  `ci` varchar(512) DEFAULT NULL,
  `fecha_nacimiento` varchar(512) DEFAULT NULL,
  `genero` varchar(512) DEFAULT NULL,
  `celular` varchar(512) DEFAULT NULL,
  `placa` varchar(512) DEFAULT NULL,
  `cargo` varchar(512) DEFAULT NULL,
  `email` varchar(512) DEFAULT NULL,
  `password` varchar(512) DEFAULT NULL,
  `token` varchar(512) DEFAULT NULL,
  `extra1` varchar(512) DEFAULT NULL,
  `extra2` varchar(512) DEFAULT NULL,
  `extra3` varchar(512) DEFAULT NULL,
  `user_creacion` varchar(512) DEFAULT NULL,
  `user_actualizacion` varchar(512) DEFAULT NULL,
  `user_eliminacion` varchar(512) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_gestion`
--

CREATE TABLE `tb_gestion` (
  `id_gestion` int(11) NOT NULL,
  `id_pedido` varchar(512) DEFAULT NULL,
  `id_carrito` varchar(512) DEFAULT NULL,
  `id_distribuidor_asignado` varchar(512) DEFAULT NULL,
  `estado_E` varchar(512) DEFAULT NULL,
  `extra1` varchar(512) DEFAULT NULL,
  `extra2` varchar(512) DEFAULT NULL,
  `extra3` varchar(512) DEFAULT NULL,
  `extra4` varchar(512) DEFAULT NULL,
  `extra5` varchar(512) DEFAULT NULL,
  `user_creacion` varchar(512) DEFAULT NULL,
  `user_actualizacion` varchar(512) DEFAULT NULL,
  `user_eliminacion` varchar(512) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mis_direcciones`
--

CREATE TABLE `tb_mis_direcciones` (
  `id` int(11) NOT NULL,
  `email` varchar(512) DEFAULT NULL,
  `nombre_direccion` varchar(512) DEFAULT NULL,
  `direccion` varchar(512) DEFAULT NULL,
  `referencia` varchar(512) DEFAULT NULL,
  `extra1` varchar(512) DEFAULT NULL,
  `extra2` varchar(512) DEFAULT NULL,
  `extra3` varchar(512) DEFAULT NULL,
  `user_creacion` varchar(512) DEFAULT NULL,
  `user_actualizacion` varchar(512) DEFAULT NULL,
  `user_eliminacion` varchar(512) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_mis_direcciones`
--

INSERT INTO `tb_mis_direcciones` (`id`, `email`, `nombre_direccion`, `direccion`, `referencia`, `extra1`, `extra2`, `extra3`, `user_creacion`, `user_actualizacion`, `user_eliminacion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'fernando@gmail.com', 'OFICINA', 'AV. LITORAL CALLE 5 Y 6 #500', 'FRENTE AL COLEGIO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-17 07:33:44', NULL, NULL, '1'),
(2, 'jonas@gmail.com', 'sacaba', 'colomi', 'santa cruz ', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-15 05:38:56', NULL, NULL, '1'),
(3, 'alex@gmail.com', 'Principal', 'calle circunvalacion y peru', 'frente a la itsa sacaba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(6, 'juaa@gmail.com', 'Principal', 'aleman', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(8, 'don@gmail.com', 'Principal', 'sacaba', 'colegio 6 de agosto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(9, 'figueroa@gmail.com', 'Principal', 'sacaba', 'colegio', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(10, 'figueroa@gmail.com', 'Principal', 'sacaba', 'colegio', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(11, 'juve7659@gmail.com', 'Principal', 'cotani alto', 'moollooo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(12, 'juve7659@gmail.com', 'Principal', 'cotani alto', 'moollooo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(13, 'jukkkkkkkk@gmail.com', 'Principal', 'kjhgfds', 'wertyuk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(15, 'juve7659@gmail.com', 'Principal', 'sacaba', 'colegio humanistico paraiso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(16, 'erasmo@gmail.com', 'Principal', 'sacaba', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(17, 'aaaaty@gmail.com', 'Principal', 'Sacaba glorieta', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(18, 'ssss@gmail.com', 'Principal', 'sacaba', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(19, 'allll@gmail.com', 'Principal', 'no los e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(20, 'jose@gmail.com', 'Principal', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(21, 'ROMA@GMAIL.COM', 'Principal', 'LOCOTAL', 'RECORD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(22, 'sa@gmail.com', 'Principal', 'Sacaba glorieta', 'morro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(23, 'maca@gmail.com', 'Principal', 'paraiso', 'colejuo tuscapujlio', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(24, 'DAVID@GMAIL.COM', 'Principal', 'PUNATA', 'CALLE SAVEDRA Y DELGADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(25, 'novillo@gmail.com', 'Principal', 'lagunitas', 'chicheria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(26, 'rodri@gmail.com', 'Principal', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(27, 'fsdfsdf@gmial.com', 'Principal', 'sdfsd', 'fsdfsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(28, 'rodri@gmail.com', 'Principal', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(29, '22@gsd.ciom', 'Principal', 'wfer', 'wserwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(30, '22@gsd.ciom', 'Principal', 'wfer', 'wserwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(31, '22@gsd.ciom', 'Principal', 'wfer', 'wserwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(32, 'qweqw@ga.com', 'Principal', 'qwe', 'qweqwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(33, 'qweqw@ga.com', 'Principal', 'qwe', 'qweqwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(34, 'qweqw@ga.com', 'Principal', 'qwe', 'qweqwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(35, 'dasd@gmail.com', 'Principal', 'sadqwe', '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(36, 'dasd@gmail.com', 'Principal', 'sadqwe', '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(37, 'werwer@gmail.com', 'Principal', '234234', '234234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(38, 'werwer@gmail.com', 'Principal', '234234', '234234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(39, '22@gsd.ciom', 'Principal', '2342werwe', '23423423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(40, '12312@gmail.com', 'Principal', 'sfasd', 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(41, 'qweqwe@gmail.com', 'Principal', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(42, 'qweqwe@gmail.com', 'Principal', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(43, 'qweqwe@gmail.com', 'Principal', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(44, 'qweqwe@gmail.com', 'Principal', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(45, 'qweqwe@gmail.com', 'Principal', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(46, 'qweqwe@gmail.com', 'Principal', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(47, 'qweqwe@gmail.com', 'Principal', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(48, 'qweqwe@gmail.com', 'Principal', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(49, 'qweqwe@gmail.com', 'Principal', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pedidos`
--

CREATE TABLE `tb_pedidos` (
  `id_pedido` int(11) NOT NULL,
  `nombre_cliente` varchar(512) DEFAULT NULL,
  `ci_cliente` varchar(512) DEFAULT NULL,
  `celular_cliente` varchar(512) DEFAULT NULL,
  `celular_referencia_cliente` varchar(512) DEFAULT NULL,
  `email_cliente` varchar(512) DEFAULT NULL,
  `direccion_cliente` varchar(512) DEFAULT NULL,
  `latitud` varchar(50) DEFAULT NULL,
  `longitud` varchar(50) DEFAULT NULL,
  `id_direccion_cliente` varchar(512) DEFAULT NULL,
  `costo_pedido` varchar(512) DEFAULT NULL,
  `costo_emvio` varchar(512) DEFAULT NULL,
  `obs` varchar(512) DEFAULT NULL,
  `id_carrito` varchar(512) DEFAULT NULL,
  `id_distribuidor_asignado` varchar(512) DEFAULT NULL,
  `estado_pedido` varchar(512) DEFAULT NULL,
  `extra1` varchar(512) DEFAULT NULL,
  `extra2` varchar(512) DEFAULT NULL,
  `extra3` varchar(512) DEFAULT NULL,
  `extra4` varchar(512) DEFAULT NULL,
  `extra5` varchar(512) DEFAULT NULL,
  `user_creacion` varchar(512) DEFAULT NULL,
  `user_actualizacion` varchar(512) DEFAULT NULL,
  `user_eliminacion` varchar(512) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_pedidos`
--

INSERT INTO `tb_pedidos` (`id_pedido`, `nombre_cliente`, `ci_cliente`, `celular_cliente`, `celular_referencia_cliente`, `email_cliente`, `direccion_cliente`, `latitud`, `longitud`, `id_direccion_cliente`, `costo_pedido`, `costo_emvio`, `obs`, `id_carrito`, `id_distribuidor_asignado`, `estado_pedido`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`, `user_creacion`, `user_actualizacion`, `user_eliminacion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Jose Hilari', '37723822', '77466443', '775665775', 'josehilari@gmail.com', 'Zona Alto Lima 3ra Seccion Av 6 entre calle rocallado y 6', NULL, NULL, '', '105', '12', 'ninguna', '1', '32', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:30:11', NULL, NULL, '1'),
(2, 'MARIA MONTES', '3772763', '77466477', '77577587', 'maria@gmail.com', 'av. italia entre calle mendoza frente al colegio fe', NULL, NULL, '', '32', '5', 'ninguna', '2', '32', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:38:26', NULL, NULL, '1'),
(3, 'Freddy Eddy', 'H', '7676765', '6767565', 'hilariweb@gmail.com', 'Zona Alto Lima 3ra Seccion Av 6 nro 450', NULL, NULL, '', '15', '5', 'ninguna', '3', '40', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:39:17', NULL, NULL, '1'),
(4, 'jime', '6756543', '9876543', '23456', 'jime@gmail.com', 'cotani', NULL, NULL, '', '276', '23', 'posi', '4', '40', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-06 03:19:56', NULL, NULL, '1'),
(5, 'DANIEL CALVETI  ', '3960487', '3232323', '765432', 'ervinnvs65@gmail.com', 'localhost', NULL, NULL, '', '46', '3', 'fds', '5', '32', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-07 11:01:55', NULL, NULL, '1'),
(6, 'Misión Vida  ', '8424349', '74073600', '', 'ervinnvs652222@gmail.com', 'gfds', NULL, NULL, '', '529', '78', 'er', '6', '47', 'PEDIDO TOMADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-08 12:50:25', NULL, NULL, '1'),
(7, 'Misión Vida  ', '8424349', '74073600', '12345', 'ervinnvs652222@gmail.com', 'werg', NULL, NULL, '', '276', '5', 'qwer', '7', '32', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-08 12:49:11', NULL, NULL, '1'),
(8, 'FERNANDO COSIO  ', '4884993', '74747664', '', 'fernando@gmail.com', 'sacaba-plaza', NULL, NULL, '', '50', '', '', '8', '', 'LIBRE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-10 09:03:42', NULL, NULL, '1'),
(9, 'NELVI', '12523537', '62633636', '78958681', 'neelvi@gmail.com', 'avenida villazon Km 2', NULL, NULL, '', '200', '20', 'NINGUNA', '9', '60', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 10:34:42', NULL, NULL, '1'),
(10, 'Misión Vida  ', '8424349', '74073600', '578995', 'ervinnvs652222@gmail.com', 'eeeee', NULL, NULL, '', '246', '23', 'erds', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 11:06:14', NULL, NULL, '1'),
(11, 'FERNANDO COSIO  ', '4884993', '74747664', '', 'fernando@gmail.com', ' sacaba', NULL, NULL, '', '342', '20', 'ninguna', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 06:54:03', NULL, NULL, '1'),
(12, 'Brigida  ', '323232', '445545', '12345678', 'brigida@gmail.com', 'sacaba', NULL, NULL, '', '20', '20', 'NINGUNA', '12', '59', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 07:43:56', NULL, NULL, '1'),
(13, 'jonas  ', '44675433', '63536345', 'wertyh', 'jonas@gmail.com', 'sacaba', NULL, NULL, '', '200', '20', '', '13', '63', 'ASIGNADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-15 06:49:59', NULL, NULL, '1'),
(14, 'juvenal', '1254', '8858825', '2588524', 'oooaa@gmail.com', 'COLOMI', NULL, NULL, '', '90', '12', 'ninguna', '14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-23 03:54:40', NULL, NULL, '1'),
(15, 'juanna', '12345y', '552555', 'colomi', 'juaa@gmail.coom', 'Sacaba glorieta', NULL, NULL, '', '12', '23', 'nega', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-23 03:57:07', NULL, NULL, '1'),
(16, 'jaaa fnmhhdjd dmbcjdbc', '1236377', '345788', 'colomi', 'jaaaaa@gmail.com', 'savddff', NULL, NULL, '', '300', '12', '34', '16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-23 04:49:24', NULL, NULL, '1'),
(17, 'don savedra moro', '1258798', '75869557', '', 'don@gmail.com', 'whsdhdbved', NULL, NULL, '', '20', '', '', '17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-23 08:57:48', NULL, NULL, '1'),
(18, 'don savedra moro', '1258798', '75869557', '765432', 'don@gmail.com', 'sacaba', NULL, NULL, '', '30', '5', '', '18', '47', 'ASIGNADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-23 09:13:15', NULL, NULL, '1'),
(19, 'roman ', '255225', '9876543', '34567', 'roman@gmail.com', 'qwertyuiol', NULL, NULL, '', '50', '10', 'NINGUNA', '19', '63', 'ASIGNADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-08 11:03:24', NULL, NULL, '1'),
(20, 'danilo', '45678', '8765432', '765432', 'fernandffo@gmail.com', 'Sacaba glorieta', NULL, NULL, '', '0', '10', 'ninguna', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-12 09:49:19', NULL, NULL, '1'),
(21, 'qwe qwe qwe', 'qweqwe', 'qweq', '', 'qweqwe@gmail.com', '', NULL, NULL, '', '1', '', '', '21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 08:21:30', NULL, NULL, '1'),
(22, 'jose Lopez qwe', 'qwe', 'qweqw', '', 'rrrr@gmail.com', '', NULL, NULL, '', '1050', '', '', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 09:24:32', NULL, NULL, '1'),
(23, 'jose Lopez qwe', 'qwe', 'qweqw', '', 'rrrr@gmail.com', 'Calle demetrio perez', NULL, NULL, '15', '500', '', '', '23', '57', 'ASIGNADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 09:40:19', NULL, NULL, '1'),
(24, 'jose Lopez qwe', 'qwe', 'qweqw', '', 'rrrr@gmail.com', 'porvenir', NULL, NULL, '14', '11', '', '', '24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 11:09:58', NULL, NULL, '1'),
(25, 'Pepe weqw qweqw', 'qweq', 'eqwe', '745767456', 'pepeee@gmail.com', '1231', '-66.03911325891939', '-17.40633404504375', '22', '100', '10', 'ninguna', NULL, '59', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-27 12:15:53', NULL, NULL, '1'),
(26, 'jose Lopez qwe', 'qwe', 'qweqw', '73457454', 'rrrr@gmail.com', 'porvenir', '', '', '14', '100', '0', 'ninguna', NULL, '59', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 09:14:12', NULL, NULL, '1'),
(27, 'Pepe weqw qweqw', 'qweq', 'eqwe', '', 'pepeee@gmail.com', '1231', '-66.03911325891939', '-17.40633404504375', '22', '1050', '0', '', NULL, '59', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 10:12:28', NULL, NULL, '1'),
(28, 'Pepe weqw qweqw', 'qweq', 'eqwe', '', 'pepeee@gmail.com', 'qweqw', '-66.04460642298189', '-17.40502363608366', '23', '350', '0', 'ninguna', NULL, '59', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 10:33:27', NULL, NULL, '1'),
(29, 'Pepe weqw qweqw', 'qweq', 'eqwe', '', 'pepeee@gmail.com', '1231', '-66.03911325891939', '-17.40633404504375', '22', '10', '', '', NULL, '59', 'ASIGNADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 10:36:16', NULL, NULL, '1'),
(30, 'Pepe weqw qweqw', 'qweq', 'eqwe', '', 'pepeee@gmail.com', '1231', '-66.03911325891939', '-17.40633404504375', '22', '10', '0', '', NULL, '59', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 10:37:30', NULL, NULL, '1'),
(31, 'Pepe weqw qweqw', 'qweq', 'eqwe', '', 'pepeee@gmail.com', 'qweqw', '-66.04460642298189', '-17.40502363608366', '23', '100', '0', '', NULL, '59', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-28 10:39:26', NULL, NULL, '1'),
(32, 'Pepe weqw qweqw', 'qweq', 'eqwe', '7455433', 'pepeee@gmail.com', 'qweqw', '-66.04460642298189', '-17.40502363608366', '23', '2000', '0', 'ninguna', NULL, '59', 'PEDIDO FINALIZADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-30 11:43:51', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_productos`
--

CREATE TABLE `tb_productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `volumen_l` int(11) NOT NULL,
  `unidades` int(11) NOT NULL,
  `stock` int(100) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_productos`
--

INSERT INTO `tb_productos` (`id`, `nombre`, `volumen_l`, `unidades`, `stock`, `precio`) VALUES
(1, 'Agua en botellon', 20, 1, 400, 10),
(6, 'Agua Sachet', 5, 10, 100, 5),
(7, 'sdfsd', 2132, 123123, 123, 12312),
(8, 'Agua botella', 2, 10, 100, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ubicacion`
--

CREATE TABLE `tb_ubicacion` (
  `id` int(11) NOT NULL,
  `email` varchar(512) DEFAULT NULL,
  `latitud` varchar(512) DEFAULT NULL,
  `longitud` varchar(512) DEFAULT NULL,
  `estado_E` varchar(512) DEFAULT NULL,
  `cargo` varchar(512) DEFAULT NULL,
  `nombre` varchar(512) DEFAULT NULL,
  `extra1` varchar(512) DEFAULT NULL,
  `extra2` varchar(512) DEFAULT NULL,
  `extra3` varchar(512) DEFAULT NULL,
  `user_creacion` varchar(512) DEFAULT NULL,
  `user_actualizacion` varchar(512) DEFAULT NULL,
  `user_eliminacion` varchar(512) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_ubicacion`
--

INSERT INTO `tb_ubicacion` (`id`, `email`, `latitud`, `longitud`, `estado_E`, `cargo`, `nombre`, `extra1`, `extra2`, `extra3`, `user_creacion`, `user_actualizacion`, `user_eliminacion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'julio@gmail.com', '0', '0', 'LIBRE', 'ADMINISTRADOR', 'Julio Mendoza Mamani', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:23:10', NULL, NULL, '1'),
(2, 'juanloza@gmail.com', '0', '0', 'LIBRE', 'MOTOQUERO', 'Juan Loza Quispe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:25:06', NULL, NULL, '1'),
(3, 'mario@gmail.com', '0', '0', 'LIBRE', 'MOTOQUERO', 'Mario Mendoza Quispe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:35:34', NULL, NULL, '1'),
(4, 'fernando@gmail.com', '0', '0', 'LIBRE', 'CLIENTE', 'FERNANDO COSIO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-17 07:26:13', NULL, NULL, '1'),
(5, 'ervinnvs65@gmail.com', '0', '0', 'LIBRE', 'CLIENTE', 'DANIEL CALVETI', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-17 07:38:20', NULL, NULL, '1'),
(6, 'ervinnvs652222@gmail.com', '0', '0', 'LIBRE', 'CLIENTE', 'Misión Vida', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-17 07:39:07', NULL, NULL, '1'),
(7, 'benjamin@gmail.com', '0', '0', 'LIBRE', 'CLIENTE', 'Benjamin Hilari', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-17 07:40:36', NULL, NULL, '1'),
(8, 'misionvida@gmail.com', '0', '0', 'LIBRE', 'CLIENTE', 'Misión Vida', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-17 07:47:12', NULL, NULL, '1'),
(9, 'brigida@gmail.com', '0', '0', 'LIBRE', 'CLIENTE', 'Brigida', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-17 07:47:42', NULL, NULL, '1'),
(10, 'robert@gmail.com', '0', '0', 'LIBRE', 'MOTOQUERO', 'roberto cruz copa ', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-06 03:03:30', NULL, NULL, '1'),
(11, 'aaa@gmail.com', '0', '0', 'LIBRE', 'MOTOQUERO', 'fghnm sdfghjk xcvbnm', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-08 11:09:05', NULL, NULL, '1'),
(12, 'dd@gmail.com', '0', '0', 'LIBRE', 'MOTOQUERO', 'asdfg iuytre asdfg', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-08 11:49:02', NULL, NULL, '1'),
(13, 'anahi@gmail.com', '0', '0', 'LIBRE', 'MOTOQUERO', 'anahi mejia sanches', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-08 11:51:29', NULL, NULL, '1'),
(15, 'moma@gmaail.com', '0', '0', 'LIBRE', 'MOTOQUERO', 'roman rojas lazarte', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-08 12:46:20', NULL, NULL, '1'),
(16, 'ju@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'juvenal almendras orellana', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 11:15:06', NULL, NULL, '1'),
(17, 'rojas@gmail.com', '0', '0', 'OCUPADO', 'DISTRIBUIDOR', 'juan serna rojas', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 11:18:09', NULL, NULL, '1'),
(18, 'ximana23@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'ximena zapata gonzales', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 11:20:02', NULL, NULL, '1'),
(19, 'gg@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'qwerty werty qwertyh', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 11:20:43', NULL, NULL, '1'),
(20, 'xime@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'xime itsa root', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 11:29:42', NULL, NULL, '1'),
(21, 'sdf@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'qwertyu wertyu ', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 11:31:05', NULL, NULL, '1'),
(22, 'Juvex@gmail.com', '0', '0', 'LIBRE', 'SUPERVISOR', 'JUVENAL ORELLANA ALMENDRAS', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 03:02:23', NULL, NULL, '1'),
(23, 'jjj@gmail.com', '0', '0', 'LIBRE', 'SUPERVISOR', 'xamas romer rohhas', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 03:05:03', NULL, NULL, '1'),
(24, 'jua@gmail.com', '0', '0', 'LIBRE', 'ADMINISTRADOR', 'PEPE CUEE JUAJ', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 03:26:45', NULL, NULL, '1'),
(25, 'xime12@gmail.com', '0', '0', 'LIBRE', 'ADMINISTRADOR', 'MARIA PEREZ MONTAÑO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 03:29:31', NULL, NULL, '1'),
(26, 'robertQ@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'roberto roko jamuy', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 04:49:14', NULL, NULL, '1'),
(27, 'alexi@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'Alex montaño rojas', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 08:35:18', NULL, NULL, '1'),
(28, 'chavo@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'chavo SIMON jamu', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 08:39:45', NULL, NULL, '1'),
(29, 'ramon@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'ramon zapata rivero', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 08:45:51', NULL, NULL, '1'),
(30, 'mary@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'MARIA ROJAS CACERES', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 08:48:13', NULL, NULL, '1'),
(31, 'orlimarcea@gmail.com', '0', '0', 'LIBRE', 'ADMINISTRADOR', 'Orlando Sandagorda Arias', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-10 08:56:11', NULL, NULL, '1'),
(32, 'adyer@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'Adayer Sandagorda Balderrama', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-10 09:00:11', NULL, NULL, '1'),
(33, 'mmaa@gmail.com', '0', '0', 'LIBRE', 'ADMINISTRADOR', 'macario wertgyhj qwedfghn', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 02:46:31', NULL, NULL, '1'),
(34, 'ggg@gmail.com', '0', '0', 'LIBRE', 'ADMINISTRADOR', 'qwertyhj qwertyu ertyu', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-11 03:13:55', NULL, NULL, '1'),
(35, 'jonas@gmail.com', '0', '0', 'LIBRE', 'CLIENTE', 'jonas', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-15 05:36:53', NULL, NULL, '1'),
(36, 'weee@gmail.com', '0', '0', 'LIBRE', 'ADMINISTRADOR', 'wee eee erwe', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-18 03:35:12', NULL, NULL, '1'),
(37, 'ggg2@gmail.com', '0', '0', 'LIBRE', 'ADMINISTRADOR', 'fghj sdfg jjhgf', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-18 18:53:15', NULL, NULL, '1'),
(38, 'juana@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'juana terceros quinteros', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-07 09:15:16', NULL, NULL, '1'),
(39, 'pepito@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'pepito roro fuentes', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-07 09:17:28', NULL, NULL, '1'),
(40, 'rod@gmail.com', '0', '0', 'LIBRE', 'ADMINISTRADOR', 'Rodrigo Lopez Fuentes', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-21 21:52:30', NULL, NULL, '1'),
(41, 'rodrigos@gmail.com', '0', '0', 'LIBRE', 'ADMINISTRADOR', 'rodsds Lopezx asdasd', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-21 23:44:14', NULL, NULL, '1'),
(42, 'test-rodrigo@gmail.com', '0', '0', 'LIBRE', 'ADMINISTRADOR', 'rodrigo lopez Materno', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-21 23:47:19', NULL, NULL, '1'),
(43, 'test@gmail.com', '0', '0', 'LIBRE', 'ADMINISTRADOR', 'Rodrigo asd asd', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 08:51:50', NULL, NULL, '1'),
(44, 'dis@gmail.com', '0', '0', 'LIBRE', 'DISTRIBUIDOR', 'sad asd asd', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-26 10:04:12', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(512) DEFAULT NULL,
  `ap_paterno` varchar(512) DEFAULT NULL,
  `ap_materno` varchar(512) DEFAULT NULL,
  `ci` varchar(512) DEFAULT NULL,
  `expedido` varchar(512) DEFAULT NULL,
  `fecha_nacimiento` varchar(512) DEFAULT NULL,
  `genero` varchar(512) DEFAULT NULL,
  `celular` varchar(512) DEFAULT NULL,
  `foto_perfil` text DEFAULT NULL,
  `email` varchar(512) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(512) DEFAULT NULL,
  `cargo` varchar(512) DEFAULT NULL,
  `placa` varchar(512) DEFAULT NULL,
  `extra1` varchar(512) DEFAULT NULL,
  `extra2` varchar(512) DEFAULT NULL,
  `extra3` varchar(512) DEFAULT NULL,
  `user_creacion` varchar(512) DEFAULT NULL,
  `user_actualizacion` varchar(512) DEFAULT NULL,
  `user_eliminacion` varchar(512) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nombres`, `ap_paterno`, `ap_materno`, `ci`, `expedido`, `fecha_nacimiento`, `genero`, `celular`, `foto_perfil`, `email`, `password`, `token`, `cargo`, `placa`, `extra1`, `extra2`, `extra3`, `user_creacion`, `user_actualizacion`, `user_eliminacion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Freddy Eddy', 'Hilari', 'Michua', '12345678', 'LA PAZ', '', 'HOMBRE', '75657007', NULL, 'hilariweb@gmail.com', '12345678', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-06 03:33:05', '2024-09-09 03:22:29', '0'),
(31, 'Julio Cesar', 'Mendoza', 'Mamani', '1231231233', NULL, '1991-11-16', 'HOMBRE', '77466455', NULL, 'julio@gmail.com', '12345678', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 01:23:10', '2022-11-16 01:23:25', '2022-11-16 01:23:32', '0'),
(47, 'juana', 'serna', 'rojas', '8520678', NULL, '2000-03-12', 'HOMBRE', '4567897', NULL, 'rojas@gmail.com', '123456', NULL, 'DISTRIBUIDOR', '345gjh', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 11:18:09', '2024-09-25 09:28:46', '2024-10-08 10:54:35', '0'),
(48, 'xime', 'zapata', 'gonzales', '234567', NULL, '1998-02-12', 'HOMBRE', '23453456', NULL, 'ximana23@gmail.com', '123456', NULL, 'MOTOQUERO', '4558sgd', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 11:20:02', '2024-09-09 11:21:57', NULL, '1'),
(50, 'ximessssdsdsdsd', 'itsa', 'robota', '765432', NULL, '2000-03-12', 'MUJER', '0987654', NULL, 'xime@gmail.com', '', NULL, 'DISTRIBUIDOR', '3456frg', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 11:29:42', '2024-10-26 10:01:22', NULL, '1'),
(51, 'qwertyu', 'wertyu', '', '', NULL, '', 'HOMBRE', '', NULL, 'sdf@gmail.com', '876543', NULL, 'DISTRIBUIDOR', '', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 11:31:05', NULL, '2024-09-09 11:32:07', '0'),
(52, 'JUVENALlll', 'ORELLANA', 'ALMENDRAS', '12456723 -CB', ' cochabamba', '2000-11-24', 'HOMBRE', '62633636', NULL, 'juve7659@gmail.com', '0000', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-26 09:57:53', NULL, '1'),
(53, 'JUVENAL', 'ORELLANA', 'ALMENDRAS', '12522564', NULL, '2003-11-12', 'HOMBRE', '62633636', NULL, 'Juvex@gmail.com', '12345678', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 03:02:23', '2024-09-09 03:20:55', '2024-09-09 03:22:24', '0'),
(55, 'PEPE', 'CUEE', 'J', '12345234 - LP', NULL, '', 'HOMBRE', '7657656U', NULL, 'jua@gmail.com', '1234', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 03:26:45', '2024-09-11 03:12:16', '2024-10-26 10:01:03', '0'),
(56, 'MARIA', 'PEREZ', 'MONTAÑO', '24587654 - SC', NULL, '2000-04-12', 'MUJER', '76568576', NULL, 'xime12@gmail.com', '1230', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 03:29:31', '2024-09-09 03:29:56', '2024-09-10 08:57:29', '0'),
(57, 'roberto', 'roko', 'jamuy', '345675677', NULL, '1998-03-12', 'HOMBRE', '12534', NULL, 'robertQ@gmail.com', '2024', NULL, 'DISTRIBUIDOR', '24bvcd', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 04:49:14', NULL, NULL, '1'),
(58, 'Alex', 'montaño', 'rojas', '37458458 CB', NULL, '2000-04-12', 'HOMBRE', '76966865', NULL, 'alexi@gmail.com', '1234', NULL, 'DISTRIBUIDOR', '5766GTP', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 08:35:18', NULL, NULL, '1'),
(59, 'chavo', 'SIMON', 'jamu', '78585785', NULL, '2000-03-12', 'HOMBRE', '34567895', NULL, 'chavo@gmail.com', '1234', NULL, 'DISTRIBUIDOR', '4578GTP', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 08:39:45', NULL, NULL, '1'),
(60, 'ramon', 'zapata', 'rivero', '45758895', NULL, '1985-02-12', 'HOMBRE', '78678909', NULL, 'ramon@gmail.com', '1234', NULL, 'DISTRIBUIDOR', '7656GDP', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 08:45:51', NULL, NULL, '1'),
(61, 'MARIA', 'ROJAS', 'CACERES', '12456778', NULL, '1999-05-12', 'MUJER', '78909865', NULL, 'mary@gmail.com', 'juve', NULL, 'DISTRIBUIDOR', '7687GTR', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 08:48:13', NULL, NULL, '1'),
(62, 'Orlando', 'Sanda', 'Arias', '4618831 S.C.', NULL, '1976-09-28', 'HOMBRE', '70348182', NULL, 'orlimarcea@gmail.com', '0123', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-10 08:56:11', '2024-09-11 03:11:29', NULL, '1'),
(63, 'Adayer', 'Sandagorda', 'Balderrama', '09876543', NULL, '2006-02-04', 'HOMBRE', '0987654', NULL, 'adyer@gmail.com', '0123', NULL, 'DISTRIBUIDOR', '4356tre', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-10 09:00:11', NULL, NULL, '1'),
(68, 'wee', 'eee', 'erwe', '23445', NULL, '1999-03-12', 'HOMBRE', '878766', NULL, 'weee@gmail.com', '4556', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-18 03:35:12', NULL, '2024-09-24 09:38:14', '0'),
(74, 'macario', 'almendras', 'rosa', '123456', 'cocha', '12/2/2000', 'femenino', '626878145', NULL, 'mav@gmail.com', '1200', NULL, 'administrador', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'jaaaa', 'joooo', 'jiiii', '456852', 'dfghj', '12/7/20000', 'femenino', '852963', NULL, 'jjjjjj@gmail.com', '1230', NULL, 'administrador', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-26 10:04:46', '0'),
(76, 'don', 'savedra', 'moro', '1258798', NULL, NULL, NULL, '75869557', NULL, 'don@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(81, 'qertyuio', 'sdfghjk', 'sdfghjk', '9876543', NULL, NULL, NULL, '234567', NULL, 'jukkkkkkkk@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(84, 'aloo', 'zapata', 'garcia', '2258942', NULL, NULL, NULL, '623636', NULL, 'erasmo@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(85, 'Juvenal', ',nhgfdsa', 'OrellanA', '76543', NULL, '', '', '0987654', NULL, 'aaaaty@gmail.com', '', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-25 09:29:22', NULL, '1'),
(87, 'alooooo', 'jdfhlijvjddj', 'rfghgfsdfg', '2345455', NULL, NULL, NULL, '2552555', NULL, 'allll@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(88, 'jose', 'mamani', 'aaaff', '12587265', NULL, '', '', '58956536', NULL, 'jose@gmail.com', '', NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-25 15:30:51', NULL, '0'),
(89, 'ROMANA', 'ZAPATA', 'SANCHEZ', '12587914', NULL, NULL, NULL, '62633636', NULL, 'ROMA@GMAIL.COM', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(90, 'sanchez', 'sapata', 'orellana', '2585455', NULL, NULL, NULL, '2255555', NULL, 'sa@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(91, 'macario', 'rosales', 'figueroa', '52585585', NULL, NULL, NULL, '85855556', NULL, 'maca@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(92, 'DAVID', 'MAMANI', 'CASTRO', '66373885', NULL, NULL, NULL, '25825665', NULL, 'DAVID@GMAIL.COM', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(93, 'novillo', 'locotal', 'sanches', '12252256', NULL, NULL, NULL, '65898452', NULL, 'novillo@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(94, 'juana', 'terceros', 'quinteros', '45879548', NULL, '1999-02-12', 'MUJER', '7895865', NULL, 'juana@gmail.com', '12345678', NULL, 'DISTRIBUIDOR', '2345HTY', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-07 09:15:16', NULL, NULL, '1'),
(95, 'pepito', 'roro', 'fuentes', '12345689', NULL, '1999-05-04', 'HOMBRE', '68969654', NULL, 'pepito@gmail.com', '123456780', NULL, 'DISTRIBUIDOR', '4567DFG', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-07 09:17:28', NULL, NULL, '1'),
(96, 'Rodrigo', 'Lopez', 'Fuentes', '3453453', NULL, '2024-10-24', 'HOMBRE', '364567457', NULL, 'rod@gmail.com', '$2y$10$EDB/OqDu6Hb.3AJagIs1oO4Nyq.0BHG.HW55x9cZ9VStJCHl78j5W', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-21 21:52:30', NULL, NULL, '1'),
(97, 'pepito', 'perez', 'lopez', '342342', NULL, NULL, NULL, '9898789234', NULL, 'rodri@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(98, 'sedfsed', 'werwe', 'wersd', 'fsdfs', NULL, NULL, NULL, 'dfsd', NULL, 'fsdfsdf@gmial.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(99, 'Rodrigo', 'Lop', 'Fuent', '2312341', NULL, NULL, NULL, '634232', NULL, 'rodri@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(100, 'ewer', 'werwe', 'rwerwer', '234234', NULL, NULL, NULL, '23423', NULL, '22@gsd.ciom', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(101, 'ewer', 'werwe', 'rwerwer', '234234', NULL, NULL, NULL, '23423', NULL, '22@gsd.ciom', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(102, 'ewer', 'werwe', 'rwerwer', '234234', NULL, NULL, NULL, '23423', NULL, '22@gsd.ciom', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(103, '12312', '12312', 'qweqwe', 'qweqw', NULL, NULL, NULL, 'eqwe', NULL, 'qweqw@ga.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(104, '12312', '12312', 'qweqwe', 'qweqw', NULL, NULL, NULL, 'eqwe', NULL, 'qweqw@ga.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(105, '12312', '12312', 'qweqwe', 'qweqw', NULL, NULL, NULL, 'eqwe', NULL, 'qweqw@ga.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(106, 'qweqw', 'qweqwe', 'qweqwe', '12312', NULL, NULL, NULL, '123123', NULL, 'dasd@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(107, 'qweqw', 'qweqwe', 'qweqwe', '12312', NULL, NULL, NULL, '123123', NULL, 'dasd@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(108, 'werwer', 'werwer', 'werwer', 'werwer', NULL, NULL, NULL, 'werwer', NULL, 'werwer@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(109, 'werwer', 'werwer', 'werwer', 'werwer', NULL, NULL, NULL, 'werwer', NULL, 'werwer@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(110, 'werwer', 'werwer', 'sdrfwer', 'wsr23423', NULL, NULL, NULL, '234234', NULL, '22@gsd.ciom', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(111, 'rodsds', 'Lopezx', 'asdasd', '123123', NULL, '2024-10-11', 'HOMBRE', '123123', NULL, 'rodrigos@gmail.com', '$2y$10$Q8hHfKNuHy39I0fdxy/ChuK2/fIVT7iEyMpkEPuTC/qBjIZqcs7pa', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-21 23:44:14', NULL, NULL, '1'),
(112, 'rodrigo', 'lopez', 'Materno', '1234234', NULL, '2024-10-09', 'HOMBRE', '123345345', NULL, 'test-rodrigo@gmail.com', '$2y$10$afpfnVZGn/XbwEM3J1Yao.H0q2B91glTCM.OWoFyD5oynagRXeTH6', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-21 23:47:19', NULL, NULL, '1'),
(113, 'rwer', 'werwe', 'werwer', '23123', NULL, NULL, NULL, '123asdasd', NULL, '12312@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(114, 'qwe', 'qwe', 'qwe', 'qweqwe', NULL, NULL, NULL, 'qweq', NULL, 'qweqwe@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(115, 'qwe', 'qwe', 'qwe', 'qweqwe', NULL, NULL, NULL, 'qweq', NULL, 'qweqwe@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(116, 'qwe', 'qwe', 'qwe', 'qweqwe', NULL, NULL, NULL, 'qweq', NULL, 'qweqwe@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(117, 'qwe', 'qwe', 'qwe', 'qweqwe', NULL, NULL, NULL, 'qweq', NULL, 'qweqwe@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(118, 'qwe', 'qwe', 'qwe', 'qweqwe', NULL, NULL, NULL, 'qweq', NULL, 'qweqwe@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(119, 'qwe', 'qwe', 'qwe', 'qweqwe', NULL, NULL, NULL, 'qweq', NULL, 'qweqwe@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(120, 'qwe', 'qwe', 'qwe', 'qweqwe', NULL, NULL, NULL, 'qweq', NULL, 'qweqwe@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(121, 'qwe', 'qwe', 'qwe', 'qweqwe', NULL, NULL, NULL, 'qweq', NULL, 'qweqwe@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(122, 'qwe', 'qwe', 'qwe', 'qweqwe', NULL, NULL, NULL, 'qweq', NULL, 'qweqwe@gmail.com', NULL, NULL, 'CLIENTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(123, 'Rodrigo', 'Sanchez', 'Delgadillo', 'asdasd', NULL, '2024-10-18', 'HOMBRE', 'asdas', NULL, 'test@gmail.com', '$2y$10$Y2Ngmwvwjef84Atyjxs3gOiQon7fxr0WX1wcoM3ddr01VcIFlNdHa', NULL, 'ADMINISTRADOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 08:51:50', NULL, NULL, '1'),
(124, 'sad', 'asd', 'asd', 'asdasd', NULL, '2024-10-09', 'HOMBRE', '2745645', NULL, 'dis@gmail.com', '1233', NULL, 'DISTRIBUIDOR', 'qweqw', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-26 10:04:12', NULL, '2024-10-26 10:05:21', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ventas`
--

CREATE TABLE `tb_ventas` (
  `id` int(11) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `cantidad` varchar(100) NOT NULL,
  `fecha_venta` date NOT NULL,
  `email_vendedor` varchar(50) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `precio_total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_ventas`
--

INSERT INTO `tb_ventas` (`id`, `producto`, `cantidad`, `fecha_venta`, `email_vendedor`, `email_cliente`, `precio_total`) VALUES
(4, 'Agua Sachet', '50', '2024-10-29', 'chavo@gmail.com', 'rrrr@gmail.com', '250'),
(5, 'Agua Sachet', '10', '2024-10-29', 'chavo@gmail.com', 'rrrr@gmail.com', '10'),
(6, 'Agua Sachet', '10', '2024-10-29', 'chavo@gmail.com', 'pepeee@gmail.com', '100'),
(8, 'Agua botella', '100', '2024-10-31', 'chavo@gmail.com', 'pepeee@gmail.com', '1000'),
(9, 'Agua en botellon', '100', '2024-10-31', 'chavo@gmail.com', 'pepeee@gmail.com', '1000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_carrito`
--
ALTER TABLE `tb_carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_direcciones`
--
ALTER TABLE `tb_direcciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_distribuidores`
--
ALTER TABLE `tb_distribuidores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_gestion`
--
ALTER TABLE `tb_gestion`
  ADD PRIMARY KEY (`id_gestion`);

--
-- Indices de la tabla `tb_mis_direcciones`
--
ALTER TABLE `tb_mis_direcciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ubicacion`
--
ALTER TABLE `tb_ubicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ventas`
--
ALTER TABLE `tb_ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_carrito`
--
ALTER TABLE `tb_carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `tb_direcciones`
--
ALTER TABLE `tb_direcciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tb_distribuidores`
--
ALTER TABLE `tb_distribuidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_gestion`
--
ALTER TABLE `tb_gestion`
  MODIFY `id_gestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_mis_direcciones`
--
ALTER TABLE `tb_mis_direcciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tb_ubicacion`
--
ALTER TABLE `tb_ubicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `tb_ventas`
--
ALTER TABLE `tb_ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
