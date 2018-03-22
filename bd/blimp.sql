-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-03-2018 a las 07:04:49
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blimp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `usuario`, `email`, `password`) VALUES
(1, 'prueba', 'prueba@hotmail.com', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordenadasruta`
--

CREATE TABLE `coordenadasruta` (
  `id_coordenadas` int(11) NOT NULL,
  `latitud` varchar(45) NOT NULL,
  `longitud` varchar(45) NOT NULL,
  `rutas_id_ruta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `coordenadasruta`
--

INSERT INTO `coordenadasruta` (`id_coordenadas`, `latitud`, `longitud`, `rutas_id_ruta`) VALUES
(1, '-79.202592', '-3.984031', 1),
(2, '-79.202541', '-3.984213', 1),
(3, '-79.202505', '-3.984590', 1),
(4, '-79.202456', '-3.985064', 1),
(5, '-79.202503', '-3.985462', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_tipoHorarios` int(11) NOT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_tipoHorarios`, `tipo`, `descripcion`) VALUES
(1, '1', 'Mañana'),
(2, '2', 'Tarde'),
(3, '3', 'Noche'),
(4, '4', 'ninguno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineasdebuses`
--

CREATE TABLE `lineasdebuses` (
  `id_lineadeBuses` int(11) NOT NULL,
  `nombreLineaBus` varchar(400) NOT NULL,
  `denotacion` varchar(445) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `numeroConsultas` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lineasdebuses`
--

INSERT INTO `lineasdebuses` (`id_lineadeBuses`, `nombreLineaBus`, `denotacion`, `descripcion`, `numeroConsultas`) VALUES
(1, 'Linea 1', 'L-1', 'Linea 1 de transpo .....', 7),
(2, 'linea 3', 'L-3', 'linea 3 de transp', 3),
(3, 'Linea 4', 'L-4', 'Linea 4 de transpo ....', 2),
(4, 'Linea 5', 'L-5', 'liena de cpolor azuñ', 0),
(5, 'Linea 7', 'L-7', 'Linea de color Azul oscuro', 6),
(6, 'Linea 12', 'L-12', 'Linea de color Morado', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paradas`
--

CREATE TABLE `paradas` (
  `id_paradas` int(11) NOT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `latitud` varchar(10) DEFAULT NULL,
  `longitud` varchar(10) DEFAULT NULL,
  `rutas_id_ruta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paradas`
--

INSERT INTO `paradas` (`id_paradas`, `direccion`, `latitud`, `longitud`, `rutas_id_ruta`) VALUES
(10, 'Terminal Terrestre', '-79.204547', '-3.9783176', 2),
(11, 'Terminal Terrestre', '-79.204547', '-3.9783176', 3),
(17, 'Redondel de la Zona Militar', '-79.204857', '-3.9815807', 2),
(18, 'Redondel de la Zona Militar', '-79.204857', '-3.9815807', 3),
(19, 'Redondel de la Zona Militar', '-79.204857', '-3.9815807', 4),
(20, 'Redondel de la Zona Militar', '-79.204857', '-3.9815807', 5),
(21, 'Terminal Terrestre', '-79.204546', '-3.9783170', 4),
(22, 'Terminal Terrestre', '-79.204546', '-3.9783170', 5),
(23, 'Av. Cuxbamba y Latacunga', '-79.206110', '-3.9840128', 2),
(24, 'Av. Cuxibamba y Guaranda', '-79.205649', '-3.9867288', 2),
(25, 'Av. Cuxibamba y Cañar', '-79.205456', '-3.9893795', 2),
(26, 'Av Manuel Agustin Aguirre y Jose Feliz Valdiviezo', '-79.204857', '-3.9921519', 1),
(27, 'Av Manuel Agustin Aguirre y Jose Feliz Valdiviezo', '-79.204857', '-3.9921519', 2),
(28, 'Av Manuel Agustin Aguirre y Jose Feliz Valdiviezo', '-79.204857', '-3.9921519', 3),
(29, 'Av Manuel Agustin Aguirre y Jose Feliz Valdiviezo', '-79.204857', '-3.9921519', 4),
(30, 'Av Manuel Agustin Aguirre y Jose Feliz Valdiviezo', '-79.204857', '-3.9921519', 5),
(31, 'Av Manuel Agustin Aguirre y Jose Feliz Valdiviezo', '-79.205789', '-3.9921519', 6),
(32, 'Av MAnuel Agustin Aguirre y Quito', '-79.205638', '-3.9934397', 1),
(33, 'Av MAnuel Agustin Aguirre y Quito', '-79.205638', '-3.9934397', 2),
(34, 'Av MAnuel Agustin Aguirre y Quito', '-79.205638', '-3.9934397', 3),
(35, 'Av MAnuel Agustin Aguirre y Quito', '-79.205638', '-3.9934397', 4),
(36, 'Av MAnuel Agustin Aguirre y Quito', '-79.205638', '-3.9934397', 5),
(37, 'Av MAnuel Agustin Aguirre y Quito', '-79.205638', '-3.9934397', 6),
(38, 'Hospital calle Imbabura', '-79.206245', '-3.9945003', 1),
(39, 'Hospital calle Imbabura', '-79.206245', '-3.9945003', 2),
(40, 'Hospital calle Imbabura', '-79.206245', '-3.9945003', 3),
(41, 'Hospital calle Imbabura', '-79.206245', '-3.9945003', 4),
(42, 'Hospital calle Imbabura', '-79.206245', '-3.9945003', 5),
(43, 'Hospital calle Imbabura', '-3.9934397', '-3.9945003', 6),
(49, 'Ramon pinto y 10 de Agosto', '-79.206688', '-3.9973947', 1),
(50, 'Ramon pinto y 10 de Agosto', '-79.206688', '-3.9973947', 2),
(51, 'Ramon pinto y 10 de Agosto', '-79.206688', '-3.9973947', 3),
(52, 'Ramon pinto y 10 de Agosto', '-79.206688', '-3.9973947', 4),
(53, 'Ramon pinto y 10 de Agosto', '-79.206688', '-3.9973947', 5),
(54, 'Ramon Pinto y 10 de Agosto', '-79.206688', '-3.9973947', 6),
(55, 'RAmon pinto y Miguel riofrio', '-79.206436', '-3.9996906', 6),
(61, 'Ramon pinto y Alonso de mercadillo', '-79.206214', '-4.0013643', 1),
(62, 'Ramon pinto y Alonso de mercadillo', '-79.206214', '-4.0013643', 2),
(63, 'Ramon pinto y Alonso de mercadillo', '-79.206214', '-4.0013643', 3),
(64, 'Ramon pinto y Alonso de mercadillo', '-79.206214', '-4.0013643', 4),
(65, 'Ramon pinto y Alonso de mercadillo', '-79.206214', '-4.0013643', 5),
(70, 'Ramon pinto y Alonzo de mercadillo', '-79.206214', '4.0013643', 6),
(71, 'Av nueva loja y cañar', '-79.203766', '-3.9887578', 1),
(72, 'Av nueva loja y cañar', '-79.203766', '-3.9887578', 3),
(73, 'Av nueva loja y cañar', '-79.203766', '-3.9887578', 4),
(74, 'Av nueva loja y cañar', '-79.203766', '-3.9887578', 5),
(75, 'Av nueva loja y cañar', '-79.203766', '-3.9887578', 6),
(76, 'Av Nueva Loja y Guaranda', '-79.203005', '-3.9871046', 1),
(77, 'Av Nueva Loja y Guaranda', '-79.203005', '-3.9871046', 3),
(78, 'Av Nueva Loja y Guaranda', '-79.203005', '-3.9871046', 4),
(79, 'Av Nueva Loja y Guaranda', '-79.203005', '-3.9871046', 5),
(80, 'Av Nueva Loja y Guaranda', '-79.203005', '-3.9871046', 6),
(81, 'Av Nueva Loja e Ibarra', '-79.202500', '-3.9849486', 1),
(82, 'Av Nueva Loja e Ibarra', '-79.202500', '-3.9849486', 3),
(83, 'Av Nueva Loja e Ibarra', '-79.202500', '-3.9849486', 4),
(84, 'Av Nueva Loja e Ibarra', '-79.202500', '-3.9849486', 5),
(85, 'Av Nueva Loja e Ibarra', '-79.202500', '-3.9849486', 6),
(86, 'A nueva Loja entre Daule y Vinces', '-79.202935', '-3.9821140', 1),
(87, 'A nueva Loja entre Daule y Vinces', '-79.202935', '-3.9821140', 3),
(88, 'A nueva Loja entre Daule y Vinces', '-79.202935', '-3.9821140', 4),
(89, 'A nueva Loja entre Daule y Vinces', '-79.202935', '-3.9821140', 5),
(90, 'A nueva Loja entre Daule y Vinces', '-79.202935', '-3.9821140', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id_ruta` int(11) NOT NULL,
  `nombreRuta` varchar(300) DEFAULT NULL,
  `incioRuta` varchar(245) DEFAULT NULL,
  `finRuta` varchar(245) DEFAULT NULL,
  `primerTurno` varchar(45) DEFAULT NULL,
  `ultimoTurno` varchar(45) DEFAULT NULL,
  `recorrido` varchar(1000) DEFAULT NULL,
  `id_lineasdeBuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id_ruta`, `nombreRuta`, `incioRuta`, `finRuta`, `primerTurno`, `ultimoTurno`, `recorrido`, `id_lineasdeBuses`) VALUES
(1, 'Las Pitas-El Rosal', 'Las Pitas', 'El Rosal', '5:45', '15:40', 'La Pradera, Colegio Bernardo Valdivieso, Pucara, Cabo Minacho, San Sebastian, Coliseo Ciudad de Loja, Mercado Gran Colombia, Estadio, Parque Lineal, Parque Simon Bolívar, Centro, Catedral, Mercado Centro Comercial, Hospital Isidro Ayora, Bomberos, Facultad Salud Humana, Cruz Roja, Terminal Terrestre Reina del Cisne, El Mayorista, Puerta de La Ciudad.', 1),
(2, 'Virgenpamba- Mercadillo', 'Virgenpamba', 'Mercadillo', '0:00', '0:01', 'Bomba Quemada, Parque Jipiro, Parque Simon Bolívar, Centro, Catedral, Mercado Centro Comercial, Hospital Isidro Ayora, Bomberos, Facultad Salud Humana, Cruz Roja, Terminal Terrestre Reina del Cisne, El Mayorista, Puerta de La Ciudad.', 2),
(3, 'Borja- Isidro Ayora', 'Borja', 'Isidro Ayora', '6:40', '14:06', 'Epoca, Bomba Quemada, Las Peñas, Las Paltas, Gran Aqui, Mercado Gran Colombia, Hospital del Seguro, El Valle, HyperValle, Cinemax, Belen, Parque Simon Bolívar, Centro, Catedral, Mercado Centro Comercial, Hospital Isidro Ayora, Bomberos, Facultad Salud Humana, Cruz Roja, Terminal Terrestre Reina del Cisne, El Mayorista, Puerta de La Ciudad.', 3),
(4, 'Colinas Lojanas-Zamora Huayco', 'Colinas Lojanas', 'Zamora Huayco', '6:41', '21:15', 'El Valle, HyperValle, Cinemax, Colegio Tecnico, UTPL, Parque Simon Bolívar, Centro, Catedral, Mercado Centro Comercial, Hospital Isidro Ayora, Bomberos, Facultad Salud Humana, Cruz Roja, Terminal Terrestre Reina del Cisne, El Mayorista, Puerta de La Ciudad.', 4),
(5, 'Motupe-Punzara', 'Motupe', 'Punzara', '0:10', '0:11', 'La Argelia, Daniel Alvarez, La Tebaida, Motupe, Mercado Mayorista, Mercado Gran Colombia, Punzara, Terminal, Cuarto Centenario, Miguel Riofrio, Mercadillo, Coliseo Ciudad de Loja, Julio Ordoñez, Universidad Nacional de Loja, Hospital del Seguro, Parque Simon Bolívar, Centro, Catedral, Mercado Centro Comercial, Hospital Isidro Ayora, Bomberos, Facultad Salud Humana, Cruz Roja, Terminal Terrestre Reina del Cisne, El Mayorista, Puerta de La Ciudad.', 5),
(6, 'El Paraiso - Sol de Los Andes', 'El Paraiso', 'Sol de Los Andes', '0:20', '0:21', 'San Pedro, Parque de La Musica, Epoca, Gran Aqui, Mercado Gran Colombia, Hospital del Seguro, El Valle, HyperValle, Cinemax, Parque Simon Bolívar, Centro, Catedral, Mercado Centro Comercial, Hospital Isidro Ayora, Bomberos, Facultad Salud Humana, Cruz Roja, Terminal Terrestre Reina del Cisne, El Mayorista, Puerta de La Ciudad.', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas_has_paradas`
--

CREATE TABLE `rutas_has_paradas` (
  `rutas_id_ruta` int(11) NOT NULL,
  `paradas_id_paradas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` int(11) NOT NULL,
  `horaDeSalida` varchar(45) NOT NULL,
  `FK_ID_tipoHorario` int(11) NOT NULL,
  `rutas_id_ruta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id_turno`, `horaDeSalida`, `FK_ID_tipoHorario`, `rutas_id_ruta`) VALUES
(1, '07:01', 4, 1),
(2, '06:35', 1, 5),
(3, '07:16', 4, 4),
(4, '07:46', 4, 4),
(5, '08:16', 4, 5),
(6, '06:41', 1, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `coordenadasruta`
--
ALTER TABLE `coordenadasruta`
  ADD PRIMARY KEY (`id_coordenadas`),
  ADD KEY `fk_coordenadasRuta_rutas1_idx` (`rutas_id_ruta`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_tipoHorarios`);

--
-- Indices de la tabla `lineasdebuses`
--
ALTER TABLE `lineasdebuses`
  ADD PRIMARY KEY (`id_lineadeBuses`);

--
-- Indices de la tabla `paradas`
--
ALTER TABLE `paradas`
  ADD PRIMARY KEY (`id_paradas`),
  ADD KEY `fk_paradas_rutas1_idx` (`rutas_id_ruta`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id_ruta`),
  ADD KEY `fk_rutas_lineasDeBuses1_idx` (`id_lineasdeBuses`);

--
-- Indices de la tabla `rutas_has_paradas`
--
ALTER TABLE `rutas_has_paradas`
  ADD PRIMARY KEY (`rutas_id_ruta`,`paradas_id_paradas`),
  ADD KEY `fk_rutas_has_paradas_paradas1_idx` (`paradas_id_paradas`),
  ADD KEY `fk_rutas_has_paradas_rutas1_idx` (`rutas_id_ruta`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`),
  ADD KEY `FK_horarios_idx` (`FK_ID_tipoHorario`),
  ADD KEY `fk_turno_rutas1_idx` (`rutas_id_ruta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `coordenadasruta`
--
ALTER TABLE `coordenadasruta`
  MODIFY `id_coordenadas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_tipoHorarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lineasdebuses`
--
ALTER TABLE `lineasdebuses`
  MODIFY `id_lineadeBuses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `paradas`
--
ALTER TABLE `paradas`
  MODIFY `id_paradas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id_ruta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `coordenadasruta`
--
ALTER TABLE `coordenadasruta`
  ADD CONSTRAINT `fk_coordenadasRuta_rutas1` FOREIGN KEY (`rutas_id_ruta`) REFERENCES `rutas` (`id_ruta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paradas`
--
ALTER TABLE `paradas`
  ADD CONSTRAINT `fk_paradas_rutas1` FOREIGN KEY (`rutas_id_ruta`) REFERENCES `rutas` (`id_ruta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD CONSTRAINT `fk_rutas_lineasDeBuses1` FOREIGN KEY (`id_lineasdeBuses`) REFERENCES `lineasdebuses` (`id_lineadeBuses`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rutas_has_paradas`
--
ALTER TABLE `rutas_has_paradas`
  ADD CONSTRAINT `fk_rutas_has_paradas_paradas1` FOREIGN KEY (`paradas_id_paradas`) REFERENCES `paradas` (`id_paradas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rutas_has_paradas_rutas1` FOREIGN KEY (`rutas_id_ruta`) REFERENCES `rutas` (`id_ruta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `turno`
--
ALTER TABLE `turno`
  ADD CONSTRAINT `FK_horarios` FOREIGN KEY (`FK_ID_tipoHorario`) REFERENCES `horarios` (`id_tipoHorarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_turno_rutas1` FOREIGN KEY (`rutas_id_ruta`) REFERENCES `rutas` (`id_ruta`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
