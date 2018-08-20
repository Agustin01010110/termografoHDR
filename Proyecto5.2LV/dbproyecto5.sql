-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2018 a las 07:40:28
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbproyecto5`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(11) NOT NULL,
  `device_id` int(11) DEFAULT NULL,
  `start_loc` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `end_loc` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `mode` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `sample_time` float DEFAULT NULL,
  `updt_time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `deliveries`
--

INSERT INTO `deliveries` (`id`, `device_id`, `start_loc`, `end_loc`, `start_date`, `end_date`, `vehicle_id`, `mode`, `sample_time`, `updt_time`) VALUES
(1, 1, 'CÓRDOBA', 'C.PRINGLES', '2018-07-31 10:31:31', '2018-07-31 22:31:31', 2, 'supercongelado', 0.5, 20),
(2, 5, 'BAHÍA BLANCA', 'C.DORREGO', '2018-07-31 12:31:31', NULL, 1, 'refrigerado', 1, 10),
(3, 3, 'STA.FE', 'S.M.TUCUMAN', '2018-07-31 13:31:31', NULL, 3, 'supercongelado', 1, 30),
(4, 1, 'NEUQUEN', 'C.RIVADAVIA', '2018-08-01 07:31:31', NULL, 2, 'congelado', 0.5, 30),
(5, 1, 'C.PRINGLES', 'BAHIA BLANCA', '2018-08-01 05:00:00', '2018-08-02 06:00:00', 2, 'refrigerado', 1, 20),
(6, 2, 'BAHIA BLANCA', 'PIGUE', '2018-08-01 06:15:11', '2018-08-01 09:00:00', 1, 'refrigerado', 0.5, 5),
(8, 2, 'BARILOCHE', 'NEUQUEN', '2018-08-13 08:00:00', NULL, 1, 'refrigerado', 0.5, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `working` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `devices`
--

INSERT INTO `devices` (`id`, `name`, `active`, `working`) VALUES
(1, 'APARATO-0001', 1, 1),
(2, 'APARATO-0002 ', 1, 1),
(3, 'APARATO-0003', 1, 1),
(4, 'APARATO-0004', 0, 0),
(5, 'APARATO-0005', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `temp` float NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `id_data` int(11) NOT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `records`
--

INSERT INTO `records` (`id`, `time`, `temp`, `delivery_id`, `id_data`, `latitude`, `longitude`) VALUES
(1, '2018-08-01 10:00:00', 1.352, 2, 1, NULL, NULL),
(2, '2018-08-01 10:01:00', 1.352, 2, 2, NULL, NULL),
(3, '2018-08-01 10:02:00', 3.352, 2, 3, NULL, NULL),
(4, '2018-08-01 10:03:00', 2.652, 2, 4, NULL, NULL),
(5, '2018-08-01 10:04:00', 1.352, 2, 5, NULL, NULL),
(6, '2018-08-01 10:05:00', 3.352, 2, 6, NULL, NULL),
(7, '2018-08-01 10:06:00', 2.652, 2, 7, NULL, NULL),
(8, '2018-08-01 10:30:00', 2.652, 4, 1, NULL, NULL),
(9, '2018-08-01 10:30:32', 1.352, 4, 2, NULL, NULL),
(10, '2018-08-01 10:31:00', 3.352, 4, 3, NULL, NULL),
(11, '2018-08-01 10:31:30', 2.652, 4, 4, NULL, NULL),
(12, '2018-08-01 10:32:00', 2.45, 4, 5, NULL, NULL),
(13, '2018-08-01 05:50:00', 1.32, 5, 1, NULL, NULL),
(14, '2018-08-01 10:32:30', 2.46, 4, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'charbo', 'agus_vilis@hotmail.com', '$2y$10$27gEHLC1cGJb9ub/B3aykOi5WFLIyNiurCJJ4vnQZQ7o5dI42.AO.', '3pcgzfTVSv8HFAqodMuErzNpD6M3InC89lBkmjRT8GviViWa6TZdyja4WLdA', '2018-06-14 22:58:38', '2018-06-14 22:58:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `equipment` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `domain`, `equipment`) VALUES
(1, 'CAMION-0001', 'AC-231-DC', 'TERMOKING-1100'),
(2, 'CAMION-0002', 'AC-232-DC', 'TERMOKING-1100'),
(3, 'CAMION-0003', 'AC-233-DC', 'TERMOKING-1100');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
