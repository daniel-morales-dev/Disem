-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2016 a las 00:38:52
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `rpassword` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`usuario`, `password`, `email`, `rpassword`, `id`) VALUES
('Daniel99', '990711', 'alejo999@live.com', 'cosfa', 3),
('Daniel', '9911', 'alejo999@live.com', '9911', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `cedula` int(11) NOT NULL,
  `negocio` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `cedula`, `negocio`, `telefono`, `email`, `edad`, `sexo`) VALUES
(2, 'Daniel Gomez', 2147483647, 'Las palmas', 3053474, '16', 16, 'Masculino'),
(3, 'Daniel Morales', 9911, 'Las aguilas dos', 311, 'alejo999@live.com', 15, 'Masculino'),
(4, 'Daniel Morales', 1231231, 'Las palmas', 123, 'alejo999@live.com', 16, 'Sexo'),
(5, 'Daniel Morales', 2147483647, 'La 32 Barra Discotk', 3053474, 'alejo999@live.com', 20, 'Masculino'),
(6, 'adas', 3423, 'adas', 3423, 'asaa@hotmail.com', 12, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `nit` int(11) NOT NULL,
  `encargado` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `empresa`, `nit`, `encargado`, `telefono`, `email`) VALUES
(7, 'Arrocera los pinos', 11111, 'Juan Carlos', 0, 'juan@xxx.xxx'),
(8, 'Deportivo Cali', 2016, 'Mario Alberto Yepes', 9090909, 'cali@cali.com'),
(9, 'Daniel', 12312, 'Daniel Morales', 3053474, 'alejo999@live.com'),
(10, 'asdas', 34234, 'dasdas', 32432, 'asaa@hotmail.com'),
(11, '23212', 3232, '2323', 3223, '32@css.com'),
(13, 'Las Cerveceras', 10000, 'Eliecer Delgado', 3053474, 'eliecercerveza@gmail.com'),
(14, 'ADSAS', 423423, 'SADASDAS', 23423, 'alejo999@live.com'),
(16, 'Hola', 123, 'asd', 234, 'alejo999@live.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargos`
--

CREATE TABLE IF NOT EXISTS `encargos` (
  `id` int(11) NOT NULL,
  `producto` text NOT NULL,
  `tipo` text NOT NULL,
  `proveedor` varchar(30) NOT NULL,
  `unidades` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encargos`
--

INSERT INTO `encargos` (`id`, `producto`, `tipo`, `proveedor`, `unidades`, `dia`, `mes`) VALUES
(1, 'Rastrillos', 'Limpiador', 'Daniel Morales', 35, 15, 'Junio'),
(2, 'asdasd', 'adas', 'asdas', 2423, 13, 'Julio'),
(3, 'asdas', 'asdas', 'sadas', 3432, 16, 'Marzo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE IF NOT EXISTS `facturas` (
  `id` int(11) NOT NULL,
  `factura` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `vendedor` text NOT NULL,
  `comprador` text NOT NULL,
  `cedula` int(11) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `producto` text NOT NULL,
  `cantidad` int(11) NOT NULL,
  `preciou` int(11) NOT NULL,
  `net` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `resultado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `factura`, `fecha`, `vendedor`, `comprador`, `cedula`, `direccion`, `telefono`, `codigo`, `producto`, `cantidad`, `preciou`, `net`, `descuento`, `resultado`) VALUES
(34, 11, '2016-05-30', 'Daniel Morales', 'Sebastian Infante', 123, 'D123', 123, 213413, 'Perro', 10, 5000, 50000, 6, 55000),
(35, 11, '2016-05-30', 'Daniel Morales', 'Sebastian Infante', 123, 'D123', 123, 213413, 'Perro', 10, 5000, 50000, 6, 55000),
(36, 0, '2016-05-30', '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0),
(38, 9, '2016-05-30', 'Daniel Morales', 'Sebastian Infante', 1231231, 'Crr 40B # 10-82', 3053474, 1, 'Trapeador', 100, 7000, 700000, 5, 777000),
(39, 9, '2016-05-30', '', '', 0, '', 0, 1, 'Trapeador', 100, 7000, 0, 0, 0),
(40, 9, '2016-05-30', '', '', 0, '', 0, 1, 'Trapeador', 100, 7000, 0, 0, 0),
(41, 9, '2016-05-30', 'asdas', 'asdas', 32423, 'asdas234', 34234, 1, 'Trapeador', 100, 7000, 700000, 5, 777000),
(42, 10, '2016-05-30', 'asdas', 'sdfsdsd', 123, '123a', 12312, 1215, 'Gato', 1, 60000, 60000, 5, 66600),
(43, 0, '2016-05-30', '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0),
(44, 9, '2016-05-30', 'ASDASD', 'asdas', 423423, 'sdaas', 23423, 1, 'Trapeador', 100, 7000, 700000, 4, 784000),
(45, 9, '2016-05-30', 'asas', 'asas', 3223, 'asas23', 323232, 1, 'Trapeador', 100, 7000, 700000, 5, 777000),
(46, 9, '2016-05-30', 'dasdas', 'asdas', 234234, 'asdasd23', 32423, 1, 'Trapeador', 100, 7000, 700000, 5, 777000),
(47, 0, '2016-05-31', '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0),
(48, 0, '2016-05-31', '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ganancias`
--

CREATE TABLE IF NOT EXISTS `ganancias` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `producto` text NOT NULL,
  `numero1` int(11) NOT NULL,
  `numero2` int(11) NOT NULL,
  `numero3` int(11) NOT NULL,
  `resultado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ganancias`
--

INSERT INTO `ganancias` (`id`, `codigo`, `producto`, `numero1`, `numero2`, `numero3`, `resultado`) VALUES
(31, 1, 'Trapeador', 100, 7000, 10, 11200),
(32, 991, 'Tapas', 70, 10000, 4, 4480);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `trabajador` text NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` text NOT NULL,
  `anio` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `valorm` int(11) NOT NULL,
  `unidades` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `producto`, `trabajador`, `dia`, `mes`, `anio`, `valor`, `valorm`, `unidades`) VALUES
(9, 1, 'Trapeador', 'Daniel Rodriguez', 1, 'Abril', 2016, 7000, 5000, 100),
(10, 1215, 'Gato', 'Carlos Gil', 22, 'Octubre', 2016, 60000, 60000, 1),
(11, 213413, 'Perro', 'Daniel Morales', 10, 'Junio', 2008, 5000, 3000, 10),
(12, 991, 'Tapas', 'Daniel Morales', 11, 'Julio', 2016, 10000, 8000, 70),
(14, 34324, 'asdasd', 'asdasd', 1, 'Febrero', 2004, 3432, 23423, 3423);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `rpassword` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`usuario`, `password`, `email`, `rpassword`, `id`) VALUES
('Daniels', '123', 'alejo@cosfa.com', '123', 26),
('Dani', '123', 'dani@hotmail.com', '123', 28),
('Daniel99', '9911', 'alejo999@live.com', '9911', 29),
('Daniel99', '123', 'alejo999@live.com', '123', 30),
('santiago', '123', 'sant@hotmail.com', '123', 124),
('carlos22', '123', 'cas@live.com', '123', 126),
('Gomez', '123', 'gomez@hotmail.com', '123', 127);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encargos`
--
ALTER TABLE `encargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ganancias`
--
ALTER TABLE `ganancias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `encargos`
--
ALTER TABLE `encargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `ganancias`
--
ALTER TABLE `ganancias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=128;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
