-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-01-2020 a las 16:55:36
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contrapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `ID_CONT` int(32) NOT NULL AUTO_INCREMENT,
  `FROM1` int(32) NOT NULL,
  `TO1` int(32) NOT NULL,
  `DATE` varchar(6) COLLATE latin1_spanish_ci DEFAULT NULL,
  `STATE1` int(16) NOT NULL,
  PRIMARY KEY (`ID_CONT`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `contacts`
--

INSERT INTO `contacts` (`ID_CONT`, `FROM1`, `TO1`, `DATE`, `STATE1`) VALUES
(1, 3, 2, NULL, 2),
(2, 1, 2, NULL, 2),
(3, 3, 1, NULL, 2),
(4, 1, 5, NULL, 2),
(5, 1, 4, NULL, 2),
(6, 6, 1, NULL, 2),
(7, 6, 1, NULL, 2),
(8, 3, 4, NULL, 2),
(9, 4, 6, NULL, 2),
(10, 7, 1, NULL, 2),
(11, 19, 3, NULL, 2),
(12, 3, 19, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejecucion`
--

DROP TABLE IF EXISTS `ejecucion`;
CREATE TABLE IF NOT EXISTS `ejecucion` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `OWNER` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `TIPO` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `FECHA` varchar(32) COLLATE latin1_spanish_ci NOT NULL,
  `DOCUMENTO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboral_termino_fijo`
--

DROP TABLE IF EXISTS `laboral_termino_fijo`;
CREATE TABLE IF NOT EXISTS `laboral_termino_fijo` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `LTF_NOMBRE_EMPLEADOR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_DOCUMENTO_EMPLEADOR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_DIRECCION_EMPLEADOR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_NOMBRE_TRABAJADOR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_DOCUMENTO_TRABAJADOR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_DIRECCION_TRABAJADOR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_FECHA_TRABAJADOR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_OFICIO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_SALARIO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_PERIODO_PAGO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_INICIO_LABORES` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_FINALIZACION_LABORES` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_LUGAR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_HORARIO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_PROPIETARIO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_ESTADO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LTF_DOCUMENTO_FISICO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pendientes`
--

DROP TABLE IF EXISTS `pendientes`;
CREATE TABLE IF NOT EXISTS `pendientes` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `OWNER` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `TIPO` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `FECHA` varchar(32) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pkey`
--

DROP TABLE IF EXISTS `pkey`;
CREATE TABLE IF NOT EXISTS `pkey` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDUSER` int(11) NOT NULL,
  `PBK` varchar(128) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pkey`
--

INSERT INTO `pkey` (`ID`, `IDUSER`, `PBK`) VALUES
(1, 3, 'hola'),
(7, 3, ''),
(6, 3, ''),
(8, 3, ''),
(9, 3, ''),
(10, 3, ''),
(11, 3, ''),
(12, 3, ''),
(13, 3, ''),
(14, 3, ''),
(15, 3, ''),
(16, 3, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `MAIL` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `PASSWORD` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `ROL` varchar(32) COLLATE latin1_spanish_ci NOT NULL,
  `PBK` varchar(42) COLLATE latin1_spanish_ci NOT NULL,
  `IMAGE` varchar(128) COLLATE latin1_spanish_ci DEFAULT 'default',
  `IDENT` varchar(96) COLLATE latin1_spanish_ci DEFAULT NULL,
  `TEL` varchar(64) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ADDRESS` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `COMPANY` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `DATE` varchar(12) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `register`
--

INSERT INTO `register` (`ID`, `NAME`, `MAIL`, `PASSWORD`, `ROL`, `PBK`, `IMAGE`, `IDENT`, `TEL`, `ADDRESS`, `COMPANY`, `DATE`) VALUES
(1, 'Andrés Esteban Piedrahita Rincón', 'kingstone1990@gmail.com', '$2y$15$ayrjMYzCiuzhV0bOvSR4nugX5WZDf1hDRNk66e1Sz/7rea4efGXke', 'Rol 2', '', 'kingstone1990@gmail.com', '1035424214', '3207730638', 'calle 48 # 62 - 104 apto. 301 ', 'Ingeniería BITS S.A.S', NULL),
(2, 'Rafael SantaMaría', 'rafasantama@gmail.com', '$2y$15$YVCyA6cqAfRh0FrGGHYP4.MwyVu.fBB2jPZGwS5tMuV4U7DAnGX4.', 'Rol 2', '', 'rafasantama@gmail.com', NULL, NULL, NULL, NULL, NULL),
(3, 'Ingeniería BITS S.A.S', 'ingenieriabits@gmail.com', '$2y$15$ayrjMYzCiuzhV0bOvSR4nugX5WZDf1hDRNk66e1Sz/7rea4efGXke', 'Rol 1', '', 'ingenieriabits@gmail.com', '9012536748', '3207730638', 'calle 46 # 70a - 83', 'Ingeniería BITS S.A.S', ''),
(4, 'Junior Andrés Calle Acevedo', 'cajuniora@unal.edu.co', '$2y$15$iymA3fBXCZxx8pf5pOvHD.uV9JlvnoLKuTFrkZC9Gte2LYOFtm0V6', 'Rol 2', '', 'cajuniora@unal.edu.co', NULL, NULL, NULL, NULL, NULL),
(5, 'Oscar Andrés Tovar Rosero', 'oatovarr@unal.edu.co', '$2y$15$pe6eKLgLy908ie.fBX85meHejdaHojLedUiqinTQhoC8LN2jiF8fO', 'Rol 2', '', 'default', NULL, NULL, NULL, NULL, NULL),
(6, 'Santiago Gil', 'sgila@unal.edu.co', '$2y$15$/8twO0u3/XxDLsyuiwYlZ.ZbZhqeEParAIW1V4rnaguPTIGtwYvg.', 'Rol 2', '', 'default', '9012536748', '3207730638', 'calle 46 # 70a - 83', 'Ingeniería BITS S.A.S', 'May 14, 2019'),
(7, 'Rafiki Leon', 'rafiki@hotmail.com', '$2y$15$ayrjMYzCiuzhV0bOvSR4nugX5WZDf1hDRNk66e1Sz/7rea4efGXke', 'Rol 2', '', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Junior Calle', 'junior@gmail.com', '$2y$15$qkxKgqYZ6dFBFPgbWDOX8eiDJWTwMrAWJLHavp1yajLu.9GYYWZ5.', 'Rol 2', '', 'default', NULL, NULL, NULL, NULL, NULL),
(9, 'Ana Isabel', 'anaisabelgaviriarivera@gmail.com', '$2y$15$YVCyA6cqAfRh0FrGGHYP4.MwyVu.fBB2jPZGwS5tMuV4U7DAnGX4.', 'Rol 2', '', 'default', NULL, NULL, NULL, NULL, NULL),
(10, 'Rafael SantaMaría', 'rafasantama@gmil.com', '$2y$15$H1nK6eCMxtUwDtODbnKGq.8oY0QU8Q8DEsn9s41gApyc7sryCJW4S', 'Rol 2', '', 'default', NULL, NULL, NULL, NULL, NULL),
(11, 'BITS', 'contacto@bitsingenieria.com', '$2y$15$1gagK6nMfX51PcO6kjrJGueQAeQYSWvaMba3b.0468vKkQ4nfgJWi', 'Rol 2', '', 'default', NULL, NULL, NULL, NULL, NULL),
(13, 'Rafa Santama', 'rafa@gmail.com', '$2y$15$tD0nYfiIrYtgsdb82HxT1ONx2/0Izv5zqel7gfQ2AeN9Y/S/jHCyS', 'Rol 2', '', 'default', NULL, NULL, NULL, NULL, NULL),
(14, 'Rafa', 'rafa@gmail.com', '$2y$15$.61Zw3ezwNvK9ZQRFfsc2.Te0S1jU6jAh6/0kj7A8hqWyculrCMWm', 'Rol 2', '', 'default', NULL, NULL, NULL, NULL, NULL),
(15, 'Camilo Restrepo', 'camilo.restrepo@bitsingenieria.com', '$2y$15$KxsYjDuVGZrEp3lYdG2c1Ob0XaUeyMgz.Q9lAxMIEWxCMvhxgEmEK', 'Rol 2', '', 'default', NULL, NULL, NULL, NULL, NULL),
(16, 'Julian Garcia', 'julian@gmail.com', '$2y$15$mIeMKuJkxrnG0nkfb8IsSuoAABTTIgBM0qOUYXkPlcaZFp1vmyl/a', 'Rol 2', '0x15D28E313E34A20B99AD038C92C0AaB6842CbB51', 'default', NULL, NULL, NULL, NULL, NULL),
(17, 'Julian Garcia', 'julian@gmail.com', '$2y$15$uKL2IwY2BmfjG3DG4Lfm3e9.AxN4Zx7fUD0.l2h0v0V2KRzGYnt2G', 'Rol 2', '0x15D28E313E34A20B99AD038C92C0AaB6842CbB51', 'default', NULL, NULL, NULL, NULL, NULL),
(18, 'Julio', 'julio@gmail.com', '$2y$15$ENmLaXh/u6XgLNDyMwUJmu49ApKJV/n5ZTjWjhqWBGuSvG3Yr1gAW', 'Rol 2', '0xb515149C9e9911D55f9add9E6D106FB7b818FbC6', 'default', NULL, NULL, NULL, NULL, NULL),
(19, 'Edward', 'ed@ward.com', '$2y$15$qAMILnB1NYQ/Yef1lZu/Fen2igJghz82rZtRg2RkNMo0wA4x5632a', 'Rol 2', '0xFDC9fc03F0130820bE0404A2c4935ec42E1e7714', 'default', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminados`
--

DROP TABLE IF EXISTS `terminados`;
CREATE TABLE IF NOT EXISTS `terminados` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `OWNER` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `TIPO` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `FECHA` varchar(32) COLLATE latin1_spanish_ci NOT NULL,
  `DOCUMENTO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo_fijo`
--

DROP TABLE IF EXISTS `trabajo_fijo`;
CREATE TABLE IF NOT EXISTS `trabajo_fijo` (
  `NOMBRE_EMPLEADOR` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `DOCUMENTO_EMPLEADOR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `DIRECCION_EMPLEADOR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `NOMBRE_TRABAJADOR` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `DOCUMENTO_TRABAJADOR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `DIRECCION_TRABAJADOR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FECHA_TRABAJADOR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `OFICIO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `SALARIO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `PERIODO_PAGO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FECHA_INICIO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `LUGAR` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `HORARIO` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
