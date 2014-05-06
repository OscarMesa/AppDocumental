-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2014 at 12:59 PM
-- Server version: 5.5.35
-- PHP Version: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `appaerovision`
--

-- --------------------------------------------------------

--
-- Table structure for table `aprobacion_revision`
--

CREATE TABLE IF NOT EXISTS `aprobacion_revision` (
  `id_aprobacion` int(5) NOT NULL AUTO_INCREMENT,
  `id_revision` int(5) NOT NULL,
  `aprobado` tinyint(1) NOT NULL,
  `motivos` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_aprobacion`),
  KEY `fk_id_revision` (`id_revision`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `aprobacion_revision`
--

INSERT INTO `aprobacion_revision` (`id_aprobacion`, `id_revision`, `aprobado`, `motivos`) VALUES
(1, 9, 1, 'yo lo veo bien.'),
(2, 10, 1, 'esta Bieno.\r\n\r\n- Quiero ver que pasa.'),
(3, 11, 0, 'no me gusto.');

-- --------------------------------------------------------

--
-- Table structure for table `archivos_adjuntos`
--

CREATE TABLE IF NOT EXISTS `archivos_adjuntos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `itemID` int(5) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `titleAttribute` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `archivos_adjuntos`
--

INSERT INTO `archivos_adjuntos` (`id`, `itemID`, `id_usuario`, `filename`, `title`, `titleAttribute`) VALUES
(15, 302, 812, 'Screenshot from 2013-11-01 10:00:50.png', 'Screenshot from 2013-11-01 10:00:50.png', 'Screenshot from 2013-11-01 10:00:50.png'),
(16, 7, 812, 'video-game.jpg', 'video-game.jpg', 'video-game.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `revision`
--

CREATE TABLE IF NOT EXISTS `revision` (
  `id_revision` int(5) NOT NULL AUTO_INCREMENT,
  `id_estado_revision` int(5) NOT NULL,
  `id_programa` int(5) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_revision`),
  KEY `pk_id_estado_revision` (`id_estado_revision`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `revision`
--

INSERT INTO `revision` (`id_revision`, `id_estado_revision`, `id_programa`, `id_usuario`, `fecha_creacion`) VALUES
(3, 1, 302, 812, '2014-02-03 15:34:27'),
(6, 2, 302, 813, '2014-02-03 20:55:27'),
(7, 1, 7, 812, '2014-02-04 02:54:03'),
(9, 2, 7, 813, '2014-02-04 03:15:33'),
(10, 4, 7, 812, '2014-02-04 12:32:38'),
(11, 5, 302, 812, '2014-02-04 12:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_estado_revision`
--

CREATE TABLE IF NOT EXISTS `tipo_estado_revision` (
  `id_estado` int(5) NOT NULL AUTO_INCREMENT,
  `nombre_estado` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tipo_estado_revision`
--

INSERT INTO `tipo_estado_revision` (`id_estado`, `nombre_estado`) VALUES
(1, 'Recientemente publicado'),
(2, 'Revisado y aprobado por empleado de nettic'),
(3, 'Revisado y desaprobado por empleado de nettic'),
(4, 'Revisado y aprobado por usuario'),
(5, 'Revisado y desaprobado por usuario'),
(6, 'Sin historial');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `revision`
--
ALTER TABLE `revision`
  ADD CONSTRAINT `revision_ibfk_1` FOREIGN KEY (`id_estado_revision`) REFERENCES `tipo_estado_revision` (`id_estado`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
