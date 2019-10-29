-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2019 a las 21:01:52
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ccvictoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE `avisos` (
  `idAvisos` int(11) NOT NULL,
  `Contenido` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `avisos`
--

INSERT INTO `avisos` (`idAvisos`, `Contenido`) VALUES
(5, 'Esta es una prueba de aviso para la página del Centro Comercial La Victoria'),
(6, 'Este es un segundo aviso para la pagina del CCV'),
(10, 'Ya hay Pulpopapas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentarios` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo`
--

CREATE TABLE `empleo` (
  `idEmpleos` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Horario` varchar(30) DEFAULT NULL,
  `Sueldo` varchar(30) DEFAULT NULL,
  `Atencion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleo`
--

INSERT INTO `empleo` (`idEmpleos`, `Nombre`, `Descripcion`, `Horario`, `Sueldo`, `Atencion`) VALUES
(1, 'Ayudante', 'Despachar', '9:00 - 15:00', '$1300.00', '10:00'),
(4, 'Prueba', 'Probadores', '9:00 - 20:00', '$2000.00 Quincenales', '11:00 en Adelante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idEvento` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Lugar` varchar(45) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `FechaEvento` varchar(45) DEFAULT NULL,
  `Horario` varchar(45) DEFAULT NULL,
  `Imagen` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idEvento`, `Nombre`, `Lugar`, `Descripcion`, `FechaEvento`, `Horario`, `Imagen`) VALUES
(3, 'Catrina', 'Cholula', 'Concierto', '12/03/2019', '3:00 a 12:00', 'evento_3.jpg'),
(4, 'Navidad', 'Donde Sea', 'Celebra la Navidad', '25/12/2019', '10:00 a 18:00', 'evento_2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `idFotos` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `giro`
--

CREATE TABLE `giro` (
  `idGiro` int(11) NOT NULL,
  `Categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `girotienda`
--

CREATE TABLE `girotienda` (
  `Giro_idGiro` int(11) NOT NULL,
  `Tienda_idTienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local`
--

CREATE TABLE `local` (
  `idLocal` int(11) NOT NULL,
  `NombreL` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `local`
--

INSERT INTO `local` (`idLocal`, `NombreL`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '16'),
(16, '17'),
(17, '18'),
(18, '19'),
(19, '20'),
(20, '22'),
(21, '23'),
(22, '24'),
(23, '25'),
(24, '26'),
(25, '27'),
(26, '29'),
(27, '31'),
(28, '32'),
(29, '32A'),
(30, '33'),
(31, '34-37'),
(32, '38'),
(33, '39'),
(34, '40'),
(35, '41'),
(36, '42'),
(37, '43'),
(38, '44'),
(39, '45'),
(40, '46'),
(41, '47'),
(42, '48'),
(43, '49'),
(44, '50'),
(45, '51'),
(46, '52'),
(47, '53'),
(48, '54'),
(49, '55'),
(50, '80'),
(51, '56 '),
(52, '57'),
(53, '58'),
(54, '59'),
(55, '60'),
(56, '61'),
(57, '62'),
(58, '63'),
(59, 'A'),
(60, 'B'),
(61, 'C'),
(62, 'CH'),
(63, 'D'),
(64, 'E'),
(65, 'F'),
(66, 'G'),
(67, 'H'),
(68, 'I '),
(69, 'J'),
(70, 'K'),
(71, 'L'),
(72, 'LL'),
(73, 'M '),
(74, 'N'),
(75, 'Ñ'),
(76, 'O'),
(77, 'P'),
(78, 'Q'),
(79, 'R'),
(80, 'S'),
(81, 'T'),
(82, 'U'),
(83, 'V'),
(84, 'W'),
(85, 'X'),
(86, 'Y'),
(87, 'Z'),
(88, 'AA'),
(89, 'BB'),
(90, 'CC'),
(91, 'CHCH'),
(92, 'DD'),
(93, 'EE'),
(94, 'FF'),
(95, 'GG'),
(96, 'HH'),
(97, 'II'),
(98, '15'),
(99, '30'),
(100, '64');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `idPromocion` int(11) NOT NULL,
  `NombreP` varchar(50) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Imagen` varchar(30) DEFAULT NULL,
  `Vigencia` varchar(60) DEFAULT NULL,
  `Tienda_idTienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`idPromocion`, `NombreP`, `Descripcion`, `Imagen`, `Vigencia`, `Tienda_idTienda`) VALUES
(8, 'Relojes', 'Descuento', 'promo_2.jpg', 'Hasta Agotar Existencias', 1),
(9, 'Pantallas', 'Descuentos', 'promo_1.jpg', 'Hasta Agotar Existencias', 1),
(10, 'Telcel', 'Celulares', 'logo_telcel.jpg', 'Hasta Agotar Existencias', 4007);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `idTienda` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Horario` varchar(30) DEFAULT NULL,
  `Imagen` varchar(30) DEFAULT NULL,
  `No_Local` varchar(200) NOT NULL,
  `Pagina_Web` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`idTienda`, `Nombre`, `Descripcion`, `Telefono`, `Horario`, `Imagen`, `No_Local`, `Pagina_Web`) VALUES
(1, 'Suburbia', 'Tienda Departamental de Ropa y Calzado', '90218212', '9:00am a 9:00pm', 'logo-suburbia.jpg', '5000', 'www.suburbia.com.mx'),
(2, 'Vips', 'Restaurante', '7654321', '8:00 am - 9:00 pm', 'logo-vips.jpg', '6000', 'www.vips.com.mx'),
(3, 'La Michoacana', 'Heladería y Paletería', '9876543', '10:00 am - 20:00 pm', 'logo-michoacana.png', '34-37', 'www.lamichoacanaweb.com'),
(1000, 'KIOSKO', 'Kiosko del Centro Comercial La Victoria', 'Sin Numero', 'Todos los Días', 'kiosko.jpg', '1000', '#'),
(2000, 'BAÑOS/ESCALERAS', 'Baños del Centro Comercial', NULL, NULL, NULL, '2000', NULL),
(3000, 'TREN', 'Estación del Tren para niños', NULL, NULL, NULL, '3000', NULL),
(4000, 'MAQUINA DE REFRESCOS', 'Dispensadora de refrescos de la marca Pepsi', NULL, NULL, 'pepsi.jpg', '4000', NULL),
(4007, 'Telcel', 'Tienda de telefonía celular', '1234567', '10:00 a 19:00', 'logo_telcel.jpg', '32A', 'www.telcel.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendaempleo`
--

CREATE TABLE `tiendaempleo` (
  `Tienda_idTienda` int(11) NOT NULL,
  `Empleos_idEmpleos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiendaempleo`
--

INSERT INTO `tiendaempleo` (`Tienda_idTienda`, `Empleos_idEmpleos`) VALUES
(1, 4),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuarios` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Tipo` int(11) NOT NULL,
  `pass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuarios`, `User`, `Tipo`, `pass`) VALUES
(1, 'prueba', 1, 'prueba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`idAvisos`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentarios`);

--
-- Indices de la tabla `empleo`
--
ALTER TABLE `empleo`
  ADD PRIMARY KEY (`idEmpleos`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idEvento`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`idFotos`);

--
-- Indices de la tabla `giro`
--
ALTER TABLE `giro`
  ADD PRIMARY KEY (`idGiro`);

--
-- Indices de la tabla `girotienda`
--
ALTER TABLE `girotienda`
  ADD PRIMARY KEY (`Giro_idGiro`,`Tienda_idTienda`),
  ADD KEY `fk_Giro_has_Tienda_Tienda1_idx` (`Tienda_idTienda`),
  ADD KEY `fk_Giro_has_Tienda_Giro1_idx` (`Giro_idGiro`);

--
-- Indices de la tabla `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`idLocal`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`idPromocion`),
  ADD KEY `fk_Promocion_Tienda1_idx` (`Tienda_idTienda`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`idTienda`);

--
-- Indices de la tabla `tiendaempleo`
--
ALTER TABLE `tiendaempleo`
  ADD PRIMARY KEY (`Tienda_idTienda`,`Empleos_idEmpleos`),
  ADD KEY `fk_Tienda_has_Empleos_Empleos1_idx` (`Empleos_idEmpleos`),
  ADD KEY `fk_Tienda_has_Empleos_Tienda1_idx` (`Tienda_idTienda`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avisos`
--
ALTER TABLE `avisos`
  MODIFY `idAvisos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `empleo`
--
ALTER TABLE `empleo`
  MODIFY `idEmpleos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `giro`
--
ALTER TABLE `giro`
  MODIFY `idGiro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `local`
--
ALTER TABLE `local`
  MODIFY `idLocal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `idPromocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `idTienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4008;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `girotienda`
--
ALTER TABLE `girotienda`
  ADD CONSTRAINT `fk_Giro_has_Tienda_Giro1` FOREIGN KEY (`Giro_idGiro`) REFERENCES `giro` (`idGiro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Giro_has_Tienda_Tienda1` FOREIGN KEY (`Tienda_idTienda`) REFERENCES `tienda` (`idTienda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD CONSTRAINT `fk_Promocion_Tienda1` FOREIGN KEY (`Tienda_idTienda`) REFERENCES `tienda` (`idTienda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tiendaempleo`
--
ALTER TABLE `tiendaempleo`
  ADD CONSTRAINT `fk_Tienda_has_Empleos_Empleos1` FOREIGN KEY (`Empleos_idEmpleos`) REFERENCES `empleo` (`idEmpleos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tienda_has_Empleos_Tienda1` FOREIGN KEY (`Tienda_idTienda`) REFERENCES `tienda` (`idTienda`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
