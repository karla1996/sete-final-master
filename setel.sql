-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2017 a las 05:35:00
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `setel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE IF NOT EXISTS `almacen` (
  `id_entrada` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(25) NOT NULL,
  `no_factura` varchar(20) NOT NULL,
  `no_pedido` int(11) NOT NULL,
  `fecha_ing` date NOT NULL,
  `movimiento` varchar(50) NOT NULL,
  `proveedor` varchar(50) NOT NULL,
  `entrada` varchar(25) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidades` varchar(50) NOT NULL,
  `precio_unitario` double NOT NULL,
  `importe` double NOT NULL,
  `lote` varchar(25) NOT NULL,
  `fecha_cad` date NOT NULL,
  `existencia` int(11) NOT NULL,
  PRIMARY KEY (`id_entrada`),
  KEY `id_entrada` (`id_entrada`),
  KEY `id_entrada_2` (`id_entrada`),
  KEY `id_entrada_3` (`id_entrada`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`id_entrada`, `clave`, `no_factura`, `no_pedido`, `fecha_ing`, `movimiento`, `proveedor`, `entrada`, `descripcion`, `presentacion`, `cantidad`, `unidades`, `precio_unitario`, `importe`, `lote`, `fecha_cad`, `existencia`) VALUES
(49, '0600040109', '4444', 98, '2017-10-12', 'Apoyo', 'Teniente', 'Pieza', 'ABATELENGUAS DE MADERA', 'C/500', 10, '78', 76, 67, '544', '2017-10-31', 0),
(51, '06000340103', '543', 544, '2017-10-12', 'Apoyo', 'Teniente', 'Pieza', 'AGUA OXIGENADA DEL 2.5-3.5%', 'ENV CON 480ML', 28, '77', 87, 76, '876', '2017-11-01', 0),
(52, '0600040109', '4444', 98, '2017-10-14', 'Apoyo', 'Teniente', 'Pieza', 'ABATELENGUAS DE MADERA', 'C/500', 14, '78', 76, 67, '544', '2017-10-31', 0),
(56, '0600660773', '89', 75, '2017-10-17', 'Ajuste', 'jaqueline', 'Caja', 'ALCOHOL DESNATURALIZADO', 'LATA C/20 LTS', 25, '65', 55, 656, '756', '2017-10-31', 0),
(58, '0066778887', '44447', 465789, '2017-10-26', 'ajuste', 'Teniente', 'pieza', 'Jeringas del 3', 'caja', 18, '100', 200, 200, '21341234', '2017-10-31', 0),
(60, '12343234', '21342', 4564, '2017-10-26', 'apoyo', 'Teniente', 'unidades', 'jeringas del 5', 'unidades', 47, '45', 50, 50, '23423', '2017-11-04', 13),
(61, '35422', '87587', 977, '2017-10-26', 'apoyo', 'Teniente', 'caja', 'guantes', 'caja', 50, '10', 12, 12, '2343', '2017-12-08', -1),
(68, '', '', 0, '0000-00-00', 'Ajuste', '', 'Caja', '', '', 0, '', 0, 0, '', '0000-00-00', 0),
(69, '', '', 0, '0000-00-00', 'Ajuste', '', 'Caja', '', '', 0, '', 0, 0, '', '0000-00-00', 0),
(71, '', '', 0, '0000-00-00', 'Ajuste', '', 'Caja', '', '', 0, '', 0, 0, '', '0000-00-00', 0),
(72, '77y', '77', 7, '2017-10-30', 'Ajuste', 'Jaqueline', 'Caja', 'prueba', 'hjh', 899, '78', 78, 8, '7', '2017-11-15', 893),
(73, '', '', 0, '0000-00-00', 'Ajuste', '', 'Caja', '', '', 0, '', 0, 0, '', '0000-00-00', 0),
(74, 'JJJJ', '78', 645, '2017-11-02', 'Ajuste', 'Jaqueline Flores Garcia', 'Caja', 'Jarabe', 'nuevo', 50, '87', 76, 75, '7576', '2017-11-30', 48);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_del_paciente`
--

CREATE TABLE IF NOT EXISTS `datos_del_paciente` (
  `Nombre` char(50) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Sexo` char(20) DEFAULT NULL,
  `Diagnostico` char(150) DEFAULT NULL,
  `l_referencia` char(20) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `dia_evento` date DEFAULT NULL,
  `F_nacimiento` date DEFAULT NULL,
  `No_expediente` char(20) NOT NULL,
  `No_SPP` char(20) DEFAULT NULL,
  `idenfermero` char(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `turno` char(20) DEFAULT NULL,
  `tipo_paciente` char(20) DEFAULT NULL,
  `nocama` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hora_registro` time DEFAULT NULL,
  `dia_post` char(20) NOT NULL,
  `dia_estancia` char(20) NOT NULL,
  `con_paciente` char(20) NOT NULL,
  `ta1` char(20) DEFAULT NULL,
  `ta2` char(20) DEFAULT NULL,
  `pam` char(20) DEFAULT NULL,
  `fc` char(20) DEFAULT NULL,
  `so2` char(20) DEFAULT NULL,
  `fr` char(20) DEFAULT NULL,
  `tem` char(20) DEFAULT NULL,
  `pvc` char(20) DEFAULT NULL,
  `ui` char(20) DEFAULT NULL,
  `dx` char(20) DEFAULT NULL,
  `pia` char(20) DEFAULT NULL,
  `glasgow` char(20) DEFAULT NULL,
  `rass` char(20) DEFAULT NULL,
  `ramsay` char(20) DEFAULT NULL,
  `braden` char(20) DEFAULT NULL,
  `crichton` char(20) DEFAULT NULL,
  `tiss` char(20) DEFAULT NULL,
  `clase` char(20) DEFAULT NULL,
  `dieta` char(20) DEFAULT NULL,
  `ayuno` char(20) DEFAULT NULL,
  `vm` char(20) DEFAULT NULL,
  `mv` char(20) DEFAULT NULL,
  `fio2` char(20) DEFAULT NULL,
  `so2_2` char(20) DEFAULT NULL,
  `bh` char(20) DEFAULT NULL,
  `qs` char(20) DEFAULT NULL,
  `elts` char(20) DEFAULT NULL,
  `tp` char(20) DEFAULT NULL,
  `tpt` char(20) DEFAULT NULL,
  `cpk` char(20) DEFAULT NULL,
  `ego` char(20) DEFAULT NULL,
  `culti` char(20) DEFAULT NULL,
  `otro` char(20) DEFAULT NULL,
  `rx` char(20) DEFAULT NULL,
  `pg_cecc` char(20) DEFAULT NULL,
  `pg_hgs` char(20) DEFAULT NULL,
  `pfc_cecc` char(20) DEFAULT NULL,
  `pfc_hgs` char(20) DEFAULT NULL,
  `cp_cecc` char(20) DEFAULT NULL,
  `cp_hgs` char(20) DEFAULT NULL,
  `observaciones` char(20) DEFAULT NULL,
  `lsps` char(20) DEFAULT NULL,
  `aminas` char(20) DEFAULT NULL,
  `sedacion` char(20) DEFAULT NULL,
  `unidad` char(20) DEFAULT NULL,
  `ant1` char(20) DEFAULT NULL,
  `ant2` char(20) DEFAULT NULL,
  `ant3` char(20) DEFAULT NULL,
  `ant4` char(20) DEFAULT NULL,
  `ant5` char(20) DEFAULT NULL,
  `dia1` char(20) DEFAULT NULL,
  `dia2` char(20) DEFAULT NULL,
  `dia3` char(20) DEFAULT NULL,
  `dia4` char(20) DEFAULT NULL,
  `dia5` char(20) DEFAULT NULL,
  `sv` char(20) DEFAULT NULL,
  `sng` char(20) DEFAULT NULL,
  `sog` char(20) DEFAULT NULL,
  `te` char(20) DEFAULT NULL,
  `cvc` char(20) DEFAULT NULL,
  `cvp` char(20) DEFAULT NULL,
  `fi1` char(20) DEFAULT NULL,
  `fi2` char(20) DEFAULT NULL,
  `fi3` char(20) DEFAULT NULL,
  `fi4` char(20) DEFAULT NULL,
  `fi5` char(20) DEFAULT NULL,
  `fi6` char(20) DEFAULT NULL,
  `fc1` char(20) DEFAULT NULL,
  `fc2` char(20) DEFAULT NULL,
  `fc3` char(20) DEFAULT NULL,
  `fc4` char(20) DEFAULT NULL,
  `fc5` char(20) DEFAULT NULL,
  `fc6` char(20) DEFAULT NULL,
  PRIMARY KEY (`No_expediente`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcado de datos para la tabla `datos_del_paciente`
--

INSERT INTO `datos_del_paciente` (`Nombre`, `Edad`, `Sexo`, `Diagnostico`, `l_referencia`, `fecha_ingreso`, `dia_evento`, `F_nacimiento`, `No_expediente`, `No_SPP`, `idenfermero`, `fecha`, `turno`, `tipo_paciente`, `nocama`, `id`, `hora_registro`, `dia_post`, `dia_estancia`, `con_paciente`, `ta1`, `ta2`, `pam`, `fc`, `so2`, `fr`, `tem`, `pvc`, `ui`, `dx`, `pia`, `glasgow`, `rass`, `ramsay`, `braden`, `crichton`, `tiss`, `clase`, `dieta`, `ayuno`, `vm`, `mv`, `fio2`, `so2_2`, `bh`, `qs`, `elts`, `tp`, `tpt`, `cpk`, `ego`, `culti`, `otro`, `rx`, `pg_cecc`, `pg_hgs`, `pfc_cecc`, `pfc_hgs`, `cp_cecc`, `cp_hgs`, `observaciones`, `lsps`, `aminas`, `sedacion`, `unidad`, `ant1`, `ant2`, `ant3`, `ant4`, `ant5`, `dia1`, `dia2`, `dia3`, `dia4`, `dia5`, `sv`, `sng`, `sog`, `te`, `cvc`, `cvp`, `fi1`, `fi2`, `fi3`, `fi4`, `fi5`, `fi6`, `fc1`, `fc2`, `fc3`, `fc4`, `fc5`, `fc6`) VALUES
('Karla', 20, 'Mujer', '3er Grado', 'Hospital', '2017-11-08', '2017-11-08', '2017-11-08', '1', '1', '1', '2017-11-08', 'tnoche', 'pediatria', 1, 1, NULL, '', '', '', 'TA', 'TA', 'PAM', 'FC', 'SO2', 'FR', 'TEM', 'PVC', 'UI', 'DX', 'PIA', 'GLASGOE', 'RASS', 'RAMSAY', 'BRADEN', 'CRICTHON', 'TIIS', 'CLASE', 'DIETAAYUNOAYUNO', 'AYUNO', 'VM', 'MV', 'FIO', 'SO2', 'BH', 'QS', 'ELT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_paciente`
--

CREATE TABLE IF NOT EXISTS `in_paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `altas` varchar(20) DEFAULT NULL,
  `referencia` varchar(25) DEFAULT NULL,
  `defucion` varchar(10) DEFAULT NULL,
  `contra` varchar(20) DEFAULT NULL,
  `cirug_progra` varchar(20) DEFAULT NULL,
  `cirug_reali` varchar(20) DEFAULT NULL,
  `cirug_susp` varchar(20) DEFAULT NULL,
  `camas_usi` varchar(20) NOT NULL,
  `camas_quem` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `in_paciente`
--

INSERT INTO `in_paciente` (`id`, `altas`, `referencia`, `defucion`, `contra`, `cirug_progra`, `cirug_reali`, `cirug_susp`, `camas_usi`, `camas_quem`) VALUES
(21, '1', '2', '2', '2', NULL, NULL, NULL, '', ''),
(22, '2', '2', '2', '2', NULL, NULL, NULL, '', ''),
(23, '2', '2', '2', '2', '2', NULL, NULL, '', ''),
(24, '4', '4', '4', '4', '4', '4', '4', '4', '4'),
(25, '', '', '', '', '', '', '', '', ''),
(26, '2', '2', '2', '2', '2', '2', '2', '22', '2'),
(27, '3', '3', '3', '3', '3', '3', '3', '3', '3'),
(28, '2', '', '3', '2', '2', '2', '2Âº', '2', '2'),
(29, '1', '', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `passenfe` varchar(55) NOT NULL,
  `passalmacen` varchar(55) NOT NULL,
  `passceyes` varchar(55) NOT NULL,
  `passdirec` varchar(55) NOT NULL,
  `rol` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `email`, `password`, `pasadmin`, `passenfe`, `passalmacen`, `passceyes`, `passdirec`, `rol`) VALUES
(1, 'admin', 'admin@gmail.com', '', '12345', '', '', '', '', 1),
(2, 'beatriz huerta', 'beatriz@gmail.com', '123456', '', '', '', '', '', 2),
(3, 'maria', 'maria@gmail.com', '123', '', '', '', '', '', 2),
(4, 'juan', 'juan@gmail.com', '', '', '', '525', '', '', 4),
(5, 'pedro', 'pedro@gmail.com', '', '', '', '', '23', '', 5),
(6, 'marco', 'marco@gmail.com', '', '', '', '566', '', '', 4),
(7, 'Jaqui', 'jacky_9529@hotmail.com', '', '', '', 'upjr', '', '', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `telefono`) VALUES
(37, 'Jaqueline Flores Garcia', '4111003203');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=148 ;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `type`, `amount`, `profit`, `due_date`, `name`, `balance`) VALUES
(147, 'RS-306323', 'Administrator', '10/04/17', 'cash', '1560', '-13780', '2000', 'teniente', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales_order`
--

CREATE TABLE IF NOT EXISTS `sales_order` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `cantidad` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `codigo_producto` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=402 ;

--
-- Volcado de datos para la tabla `sales_order`
--

INSERT INTO `sales_order` (`transaction_id`, `invoice`, `product`, `cantidad`, `amount`, `profit`, `descripcion`, `codigo_producto`, `name`, `price`, `discount`, `date`) VALUES
(380, 'RS-932332', '58', '2', '', '', 'Jeringas del 3', '0066778887', '', '', '', '2011-01-17'),
(381, 'RS-3200043', '60', '4', '', '', 'jeringas del 5', '12343234', '', '', '', '2011-01-17'),
(382, 'RS-02222939', '58', '20', '', '', 'Jeringas del 3', '0066778887', '', '', '', '2011-01-17'),
(383, 'RS-52233', '60', '5', '', '', 'jeringas del 5', '12343234', '', '', '', '2011-01-17'),
(384, 'RS-3030006', '61', '5', '', '', 'guantes', '35422', '', '', '', '2011-01-17'),
(385, 'RS-33386223', '59', '5', '', '', 'Isodine de 200 ml', '9786756', '', '', '', '2011-01-17'),
(386, 'RS-02222232', '58', '1', '', '', 'Jeringas del 3', '0066778887', '', '', '', '2011-01-17'),
(387, 'RS-2304046', '60', '5', '', '', 'jeringas del 5', '12343234', '', '', '', '2011-01-17'),
(391, 'RS-7343230', '60', '1', '', '', 'jeringas del 5', '12343234', '', '', '', '2017-11-01'),
(392, 'RS-2329422', '72', '5', '', '', 'prueba', '77y', '', '', '', '2017-11-02'),
(393, 'RS-224203', '72', '1', '', '', 'prueba', '77y', '', '', '', '2017-11-03'),
(394, 'RS-224203', '74', '1', '', '', 'Jarabe', 'JJJJ', '', '', '', '2017-11-03'),
(395, 'RS-7364', '74', '1', '', '', 'Jarabe', 'JJJJ', '', '', '', '2017-11-03'),
(397, 'RS-4020', '60', '2', '', '', 'jeringas del 5', '12343234', '', '', '', '2017-11-06'),
(398, 'RS-6623020', '60', '5', '', '', 'jeringas del 5', '12343234', '', '', '', '2017-11-06'),
(399, 'RS-90233', '60', '1', '', '', 'jeringas del 5', '12343234', '', '', '', '2017-11-06'),
(400, 'RS-60292488', '60', '1', '', '', 'jeringas del 5', '12343234', '', '', '', '2017-11-06'),
(401, 'RS-333050', '60', '5', '', '', 'jeringas del 5', '12343234', '', '', '', '2017-11-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `position`) VALUES
(1, 'admin', 'admin', 'Admin', 'admin'),
(2, 'cashier', 'cashier', 'Cashier Pharmacy', 'Cashier'),
(3, 'admin', 'admin123', 'Administrator', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
