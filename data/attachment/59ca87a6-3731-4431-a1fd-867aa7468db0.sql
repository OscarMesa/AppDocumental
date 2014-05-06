-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-05-2014 a las 18:35:20
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `app_documental`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas_construccion`
--

CREATE TABLE IF NOT EXISTS `caracteristicas_construccion` (
  `idCaracteristicasConstruccion` int(11) NOT NULL AUTO_INCREMENT,
  `idPresupuestoReconstruccion` int(11) NOT NULL,
  `NPisos` int(11) NOT NULL,
  `NSotanos` int(11) NOT NULL,
  `existeMezanine` varchar(5) NOT NULL,
  `pisoRiesgo` varchar(25) NOT NULL,
  `areaRiesgo` double NOT NULL,
  `mamposteriaReforzada` varchar(5) NOT NULL,
  `mamposteriaConfinada` varchar(5) NOT NULL,
  `sistemaReticularCelulado` varchar(5) NOT NULL,
  `SistemaPorticoConcreto` varchar(5) NOT NULL,
  `unaDireccionC` varchar(5) NOT NULL,
  `dosDireccionesC` varchar(5) NOT NULL,
  `sistemaPorticoAcero` varchar(5) NOT NULL,
  `unaDireccionA` varchar(5) NOT NULL,
  `dosDireccionesA` varchar(5) NOT NULL,
  `sistemaDualConcreto` varchar(5) NOT NULL,
  `sistemaMurosEstructurales` varchar(5) NOT NULL,
  `maderaTejaBarro` varchar(5) NOT NULL,
  `cerchaMetalicaTejaLiviana` varchar(5) NOT NULL,
  `losaConcreto` varchar(5) NOT NULL,
  `otro` varchar(5) NOT NULL,
  `cual` varchar(250) DEFAULT NULL,
  `deterioro` varchar(5) NOT NULL,
  `observaciones` text,
  PRIMARY KEY (`idCaracteristicasConstruccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `caracteristicas_construccion`
--

INSERT INTO `caracteristicas_construccion` (`idCaracteristicasConstruccion`, `idPresupuestoReconstruccion`, `NPisos`, `NSotanos`, `existeMezanine`, `pisoRiesgo`, `areaRiesgo`, `mamposteriaReforzada`, `mamposteriaConfinada`, `sistemaReticularCelulado`, `SistemaPorticoConcreto`, `unaDireccionC`, `dosDireccionesC`, `sistemaPorticoAcero`, `unaDireccionA`, `dosDireccionesA`, `sistemaDualConcreto`, `sistemaMurosEstructurales`, `maderaTejaBarro`, `cerchaMetalicaTejaLiviana`, `losaConcreto`, `otro`, `cual`, `deterioro`, `observaciones`) VALUES
(1, 1, 12, 2, 'No', 'Todos', 2932.5, 'No', 'No', 'Si', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', NULL, 'No', NULL),
(2, 2, 2, 2, 'No', 'w', 2, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'sda', 'No', NULL),
(3, 3, 2, 2, 'No', '2', 2, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'No', NULL),
(4, 4, 2, 2, 'No', 'Todos', 2, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'No', NULL),
(5, 5, 2, 2, 'No', '2', 2, 'No', 'No', 'No', 'No', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'dsad', 'Si', NULL),
(6, 6, 2, 2, 'No', '2', 2, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'No', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas_instalacion`
--

CREATE TABLE IF NOT EXISTS `caracteristicas_instalacion` (
  `idCaracteristicasInstalacion` int(11) NOT NULL AUTO_INCREMENT,
  `idPresupuestoReconstruccion` int(11) NOT NULL,
  `acueductoPropio` varchar(5) NOT NULL,
  `aRedPublica` varchar(5) NOT NULL,
  `aCual` varchar(250) DEFAULT NULL,
  `estadoRejillas` varchar(10) NOT NULL,
  `estadoCanales` varchar(10) NOT NULL,
  `estadoAlcantarillas` varchar(10) NOT NULL,
  `limpiezaTechos` varchar(10) NOT NULL,
  `estadoBajantes` varchar(10) NOT NULL,
  `plantaElectrica` varchar(5) NOT NULL,
  `pEMarca` varchar(250) DEFAULT NULL,
  `pEAño` varchar(25) DEFAULT NULL,
  `pEPotencia` varchar(25) DEFAULT NULL,
  `pECombustible` varchar(250) DEFAULT NULL,
  `pEUbicacionFisica` varchar(250) DEFAULT NULL,
  `pEZonaAlimenta` varchar(250) DEFAULT NULL,
  `transformadorPropio` varchar(5) NOT NULL,
  `tPMarca` varchar(250) DEFAULT NULL,
  `tPAño` varchar(25) DEFAULT NULL,
  `tPCapacidad` varchar(25) DEFAULT NULL,
  `tPUbicacionFisica` varchar(250) DEFAULT NULL,
  `sistemaGas` varchar(5) NOT NULL,
  `sGRedPublica` varchar(5) NOT NULL,
  `sGTanqueAlmacenamiento` varchar(5) NOT NULL,
  `sGCapacidadTanque` varchar(250) DEFAULT NULL,
  `sGUtilizaCilindros` varchar(5) NOT NULL,
  `sGCapacidad` varchar(250) DEFAULT NULL,
  `sistemaAireAcondicionado` varchar(5) NOT NULL,
  `aATipoSistema` varchar(250) DEFAULT NULL,
  `aACapacidad` varchar(25) DEFAULT NULL,
  `aATorreEnfriamiento` varchar(5) NOT NULL,
  `aATECapacidad` varchar(25) DEFAULT NULL,
  `aATECantidad` varchar(25) DEFAULT NULL,
  `mantenimientoInstalacionesFisicas` varchar(15) DEFAULT NULL,
  `mIFPersonalACargo` varchar(250) DEFAULT NULL,
  `mantenimientoPlantaElectrica` varchar(15) DEFAULT NULL,
  `mPEPersonalACargo` varchar(250) DEFAULT NULL,
  `mantenimientosubestaciónElectrica` varchar(15) DEFAULT NULL,
  `mSEPersonalACargo` varchar(250) DEFAULT NULL,
  `mantenimientoTransformadorPropio` varchar(15) DEFAULT NULL,
  `mTPPersonalACargo` varchar(250) DEFAULT NULL,
  `mantenimientoSistemaGas` varchar(15) DEFAULT NULL,
  `mSGPersonalACargo` varchar(250) DEFAULT NULL,
  `mantenimientoAscensores` varchar(15) DEFAULT NULL,
  `mAPersonalACargo` varchar(250) DEFAULT NULL,
  `mantenimientoDispositivosSeguridad` varchar(15) DEFAULT NULL,
  `mDSPersonalACargo` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idCaracteristicasInstalacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `caracteristicas_instalacion`
--

INSERT INTO `caracteristicas_instalacion` (`idCaracteristicasInstalacion`, `idPresupuestoReconstruccion`, `acueductoPropio`, `aRedPublica`, `aCual`, `estadoRejillas`, `estadoCanales`, `estadoAlcantarillas`, `limpiezaTechos`, `estadoBajantes`, `plantaElectrica`, `pEMarca`, `pEAño`, `pEPotencia`, `pECombustible`, `pEUbicacionFisica`, `pEZonaAlimenta`, `transformadorPropio`, `tPMarca`, `tPAño`, `tPCapacidad`, `tPUbicacionFisica`, `sistemaGas`, `sGRedPublica`, `sGTanqueAlmacenamiento`, `sGCapacidadTanque`, `sGUtilizaCilindros`, `sGCapacidad`, `sistemaAireAcondicionado`, `aATipoSistema`, `aACapacidad`, `aATorreEnfriamiento`, `aATECapacidad`, `aATECantidad`, `mantenimientoInstalacionesFisicas`, `mIFPersonalACargo`, `mantenimientoPlantaElectrica`, `mPEPersonalACargo`, `mantenimientosubestaciónElectrica`, `mSEPersonalACargo`, `mantenimientoTransformadorPropio`, `mTPPersonalACargo`, `mantenimientoSistemaGas`, `mSGPersonalACargo`, `mantenimientoAscensores`, `mAPersonalACargo`, `mantenimientoDispositivosSeguridad`, `mDSPersonalACargo`) VALUES
(1, 1, 'No', 'Si', 'Epm', 'Bueno', 'Bueno', 'Bueno', 'Bueno', 'Bueno', 'Si', 'Kohler', NULL, NULL, 'Acpm', 'Sotano', NULL, 'Si', NULL, NULL, '30 kva', 'sotano', 'Si', 'Si', 'No', NULL, 'No', NULL, 'No', NULL, NULL, 'No', NULL, NULL, 'Preventivo', 'Contrato a terceros', 'Preventivo', 'Epm', 'Preventivo', 'Epm', NULL, NULL, 'Preventivo', 'Epm', 'Preventivo', 'Mitsubishi', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authassignment`
--

CREATE TABLE IF NOT EXISTS `cruge_authassignment` (
  `userid` int(11) NOT NULL,
  `bizrule` text,
  `data` text,
  `itemname` varchar(64) NOT NULL,
  PRIMARY KEY (`userid`,`itemname`),
  KEY `fk_cruge_authassignment_cruge_authitem1` (`itemname`),
  KEY `fk_cruge_authassignment_user` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authassignment`
--

INSERT INTO `cruge_authassignment` (`userid`, `bizrule`, `data`, `itemname`) VALUES
(1, NULL, 'N;', 'car'),
(1, NULL, 'N;', 'Ganaderos'),
(2, NULL, 'N;', 'invitados'),
(3, NULL, 'N;', 'Ganaderos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitem`
--

CREATE TABLE IF NOT EXISTS `cruge_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_documento_admin', 0, '', NULL, 'N;'),
('action_documento_controller_documento', 0, '', NULL, 'N;'),
('action_documento_create', 0, '', NULL, 'N;'),
('action_documento_delete', 0, '', NULL, 'N;'),
('action_documento_descargararchivo', 0, '', NULL, 'N;'),
('action_documento_index', 0, '', NULL, 'N;'),
('action_documento_update', 0, '', NULL, 'N;'),
('action_documento_view', 0, '', NULL, 'N;'),
('action_informaciongeneral_admin', 0, '', NULL, 'N;'),
('action_informaciongeneral_create', 0, '', NULL, 'N;'),
('action_informaciongeneral_delete', 0, '', NULL, 'N;'),
('action_informaciongeneral_index', 0, '', NULL, 'N;'),
('action_informaciongeneral_update', 0, '', NULL, 'N;'),
('action_informaciongeneral_view', 0, '', NULL, 'N;'),
('action_informacionpredio_admin', 0, '', NULL, 'N;'),
('action_informacionpredio_create', 0, '', NULL, 'N;'),
('action_informacionpredio_delete', 0, '', NULL, 'N;'),
('action_informacionpredio_index', 0, '', NULL, 'N;'),
('action_informacionpredio_update', 0, '', NULL, 'N;'),
('action_informacionpredio_view', 0, '', NULL, 'N;'),
('action_informacionpresupuestoreconstruccion_admin', 0, '', NULL, 'N;'),
('action_informacionpresupuestoreconstruccion_create', 0, '', NULL, 'N;'),
('action_informacionpresupuestoreconstruccion_delete', 0, '', NULL, 'N;'),
('action_informacionpresupuestoreconstruccion_index', 0, '', NULL, 'N;'),
('action_informacionpresupuestoreconstruccion_update', 0, '', NULL, 'N;'),
('action_informacionpresupuestoreconstruccion_view', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_actualizar', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_admin', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_create', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_delete', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_index', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_ingresar', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_update', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_view', 0, '', NULL, 'N;'),
('action_site_contact', 0, '', NULL, 'N;'),
('action_site_error', 0, '', NULL, 'N;'),
('action_site_index', 0, '', NULL, 'N;'),
('action_site_login', 0, '', NULL, 'N;'),
('action_site_logout', 0, '', NULL, 'N;'),
('action_ui_editprofile', 0, '', NULL, 'N;'),
('action_ui_fieldsadmincreate', 0, '', NULL, 'N;'),
('action_ui_fieldsadmindelete', 0, '', NULL, 'N;'),
('action_ui_fieldsadminlist', 0, '', NULL, 'N;'),
('action_ui_fieldsadminupdate', 0, '', NULL, 'N;'),
('action_ui_rbacajaxassignment', 0, '', NULL, 'N;'),
('action_ui_rbacajaxgetassignmentbizrule', 0, '', NULL, 'N;'),
('action_ui_rbacajaxsetchilditem', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemchilditems', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemcreate', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemdelete', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemupdate', 0, '', NULL, 'N;'),
('action_ui_rbaclistops', 0, '', NULL, 'N;'),
('action_ui_rbaclistroles', 0, '', NULL, 'N;'),
('action_ui_rbaclisttasks', 0, '', NULL, 'N;'),
('action_ui_rbacusersassignments', 0, '', NULL, 'N;'),
('action_ui_sessionadmin', 0, '', NULL, 'N;'),
('action_ui_systemupdate', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('action_ui_usermanagementcreate', 0, '', NULL, 'N;'),
('action_ui_usermanagementdelete', 0, '', NULL, 'N;'),
('action_ui_usermanagementupdate', 0, '', NULL, 'N;'),
('action_ui_usersaved', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;'),
('car', 2, '', '', 'N;'),
('controller_documento', 0, '', NULL, 'N;'),
('controller_informaciongeneral', 0, '', NULL, 'N;'),
('controller_informacionpredio', 0, '', NULL, 'N;'),
('controller_informacionpresupuestoreconstruccion', 0, '', NULL, 'N;'),
('controller_presupuestoreconstruccion', 0, '', NULL, 'N;'),
('controller_site', 0, '', NULL, 'N;'),
('controller__presupuestoreconstruccion', 0, '', NULL, 'N;'),
('edit-advanced-profile-features', 0, '/var/www/AppDocumental/protected/modules/cruge/views/ui/usermanagementupdate.php linea 114', NULL, 'N;'),
('Ganaderos', 2, '', '', 'N;'),
('invitados', 2, 'Usuario invitado, tiene acceso a cualquier seccion.', '', 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitemchild`
--

CREATE TABLE IF NOT EXISTS `cruge_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authitemchild`
--

INSERT INTO `cruge_authitemchild` (`parent`, `child`) VALUES
('Ganaderos', 'action_documento_admin'),
('Ganaderos', 'action_documento_controller_documento'),
('Ganaderos', 'action_documento_create'),
('Ganaderos', 'action_documento_delete'),
('Ganaderos', 'action_documento_descargararchivo'),
('Ganaderos', 'action_documento_index'),
('Ganaderos', 'action_documento_update'),
('Ganaderos', 'action_documento_view'),
('car', 'action_informaciongeneral_admin'),
('car', 'action_informaciongeneral_create'),
('car', 'action_informaciongeneral_delete'),
('car', 'action_informaciongeneral_index'),
('car', 'action_informaciongeneral_update'),
('car', 'action_informaciongeneral_view'),
('car', 'action_informacionpredio_admin'),
('car', 'action_informacionpredio_create'),
('car', 'action_informacionpredio_delete'),
('car', 'action_informacionpredio_index'),
('car', 'action_informacionpredio_update'),
('car', 'action_informacionpredio_view'),
('car', 'action_informacionpresupuestoreconstruccion_admin'),
('car', 'action_informacionpresupuestoreconstruccion_create'),
('car', 'action_informacionpresupuestoreconstruccion_delete'),
('car', 'action_informacionpresupuestoreconstruccion_index'),
('car', 'action_informacionpresupuestoreconstruccion_update'),
('car', 'action_informacionpresupuestoreconstruccion_view'),
('car', 'action_presupuestoreconstruccion_admin'),
('car', 'action_presupuestoreconstruccion_create'),
('car', 'action_presupuestoreconstruccion_delete'),
('car', 'action_presupuestoreconstruccion_index'),
('car', 'action_presupuestoreconstruccion_update'),
('car', 'action_presupuestoreconstruccion_view'),
('car', 'action_site_contact'),
('invitados', 'action_site_contact'),
('car', 'action_site_error'),
('invitados', 'action_site_error'),
('car', 'action_site_index'),
('invitados', 'action_site_index'),
('car', 'action_site_login'),
('invitados', 'action_site_login'),
('car', 'action_site_logout'),
('invitados', 'action_site_logout'),
('car', 'admin'),
('Ganaderos', 'car'),
('car', 'controller_informaciongeneral'),
('car', 'controller_informacionpredio'),
('car', 'controller_informacionpresupuestoreconstruccion'),
('car', 'controller_presupuestoreconstruccion'),
('car', 'controller_site');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_field`
--

CREATE TABLE IF NOT EXISTS `cruge_field` (
  `idfield` int(11) NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(20) NOT NULL,
  `longname` varchar(50) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `required` int(11) DEFAULT '0',
  `fieldtype` int(11) DEFAULT '0',
  `fieldsize` int(11) DEFAULT '20',
  `maxlength` int(11) DEFAULT '45',
  `showinreports` int(11) DEFAULT '0',
  `useregexp` varchar(512) DEFAULT NULL,
  `useregexpmsg` varchar(512) DEFAULT NULL,
  `predetvalue` mediumblob,
  PRIMARY KEY (`idfield`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_fieldvalue`
--

CREATE TABLE IF NOT EXISTS `cruge_fieldvalue` (
  `idfieldvalue` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idfield` int(11) NOT NULL,
  `value` blob,
  PRIMARY KEY (`idfieldvalue`),
  KEY `fk_cruge_fieldvalue_cruge_user1` (`iduser`),
  KEY `fk_cruge_fieldvalue_cruge_field1` (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_session`
--

CREATE TABLE IF NOT EXISTS `cruge_session` (
  `idsession` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `created` bigint(30) DEFAULT NULL,
  `expire` bigint(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ipaddress` varchar(45) DEFAULT NULL,
  `usagecount` int(11) DEFAULT '0',
  `lastusage` bigint(30) DEFAULT NULL,
  `logoutdate` bigint(30) DEFAULT NULL,
  `ipaddressout` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsession`),
  KEY `crugesession_iduser` (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Volcado de datos para la tabla `cruge_session`
--

INSERT INTO `cruge_session` (`idsession`, `iduser`, `created`, `expire`, `status`, `ipaddress`, `usagecount`, `lastusage`, `logoutdate`, `ipaddressout`) VALUES
(1, 1, 1396017066, 1396018866, 0, '::1', 1, 1396017066, 1396017080, '::1'),
(2, 1, 1396017170, 1396018970, 0, '::1', 1, 1396017170, 1396017203, '::1'),
(3, 1, 1396017211, 1396019011, 0, '::1', 1, 1396017211, 1396017232, '::1'),
(4, 1, 1396242046, 1396243846, 0, '::1', 1, 1396242046, 1396242275, '::1'),
(5, 1, 1396242314, 1396244114, 0, '::1', 1, 1396242314, 1396242586, '::1'),
(6, 1, 1396849066, 1396850866, 0, '::1', 1, 1396849066, NULL, NULL),
(7, 1, 1396850960, 1396852760, 0, '::1', 1, 1396850960, 1396851860, '::1'),
(8, 1, 1396851867, 1396853667, 0, '::1', 1, 1396851867, 1396853248, '::1'),
(9, 3, 1396853255, 1396855055, 0, '::1', 1, 1396853255, 1396853305, '::1'),
(10, 1, 1396853316, 1396855116, 0, '::1', 1, 1396853316, NULL, NULL),
(11, 1, 1396874720, 1396876520, 0, '::1', 1, 1396874720, NULL, NULL),
(12, 1, 1396876812, 1396878612, 0, '::1', 1, 1396876812, NULL, NULL),
(13, 1, 1396919206, 1396921006, 0, '::1', 1, 1396919206, NULL, NULL),
(14, 1, 1396923161, 1396924961, 1, '::1', 1, 1396923161, NULL, NULL),
(15, 1, 1397016515, 1397018315, 1, '::1', 1, 1397016515, NULL, NULL),
(16, 1, 1398864273, 1398866073, 0, '190.156.226.207', 1, 1398864273, NULL, NULL),
(17, 1, 1398873800, 1398875600, 0, '127.0.0.1', 1, 1398873800, 1398873802, '127.0.0.1'),
(18, 1, 1398873833, 1398875633, 0, '127.0.0.1', 1, 1398873833, NULL, NULL),
(19, 1, 1398926539, 1398928339, 1, '127.0.0.1', 1, 1398926539, NULL, NULL),
(20, 1, 1399078036, 1399079836, 1, '127.0.0.1', 1, 1399078036, NULL, NULL),
(21, 1, 1399237127, 1399238927, 0, '127.0.0.1', 1, 1399237127, NULL, NULL),
(22, 1, 1399238944, 1399240744, 0, '127.0.0.1', 1, 1399238944, NULL, NULL),
(23, 1, 1399253415, 1399255215, 0, '127.0.0.1', 1, 1399253415, NULL, NULL),
(24, 1, 1399258005, 1399259805, 0, '127.0.0.1', 1, 1399258005, NULL, NULL),
(25, 1, 1399260992, 1399262792, 1, '127.0.0.1', 1, 1399260992, NULL, NULL),
(26, 1, 1399265617, 1399267417, 0, '127.0.0.1', 1, 1399265617, NULL, NULL),
(27, 3, 1399265892, 1399267692, 0, '127.0.0.1', 1, 1399265892, 1399265911, '127.0.0.1'),
(28, 3, 1399266045, 1399267845, 0, '127.0.0.1', 1, 1399266045, 1399266236, '127.0.0.1'),
(29, 1, 1399268122, 1399269922, 1, '127.0.0.1', 1, 1399268122, NULL, NULL),
(30, 3, 1399268353, 1399270153, 0, '127.0.0.1', 1, 1399268353, NULL, NULL),
(31, 1, 1399270452, 1399272252, 1, '127.0.0.1', 1, 1399270452, NULL, NULL),
(32, 1, 1399276618, 1399278418, 1, '127.0.0.1', 1, 1399276618, NULL, NULL),
(33, 1, 1399305063, 1399306863, 0, '127.0.0.1', 1, 1399305063, NULL, NULL),
(34, 1, 1399307591, 1399309391, 0, '127.0.0.1', 2, 1399307971, NULL, NULL),
(35, 1, 1399309420, 1399311220, 0, '127.0.0.1', 1, 1399309420, NULL, NULL),
(36, 1, 1399311381, 1399313181, 0, '127.0.0.1', 2, 1399311695, NULL, NULL),
(37, 1, 1399313833, 1399315633, 0, '127.0.0.1', 2, 1399314918, 1399315414, '127.0.0.1'),
(38, 1, 1399315959, 1399317759, 0, '127.0.0.1', 1, 1399315959, 1399316026, '127.0.0.1'),
(39, 1, 1399316045, 1399323245, 0, '127.0.0.1', 1, 1399316045, 1399316090, '127.0.0.1'),
(40, 3, 1399325272, 1399332472, 0, '127.0.0.1', 1, 1399325272, 1399325546, '127.0.0.1'),
(41, 1, 1399325611, 1399332811, 0, '127.0.0.1', 1, 1399325611, 1399331045, '127.0.0.1'),
(42, 3, 1399329634, 1399336834, 0, '127.0.0.1', 1, 1399329634, 1399329849, '127.0.0.1'),
(43, 3, 1399329864, 1399337064, 0, '127.0.0.1', 1, 1399329864, 1399329928, '127.0.0.1'),
(44, 1, 1399331226, 1399338426, 0, '127.0.0.1', 1, 1399331226, 1399332426, '127.0.0.1'),
(45, 1, 1399339020, 1399346220, 0, '127.0.0.1', 1, 1399339020, NULL, NULL),
(46, 1, 1399346259, 1399353459, 1, '127.0.0.1', 1, 1399346259, NULL, NULL),
(47, 1, 1399353871, 1399361071, 0, '127.0.0.1', 1, 1399353871, NULL, NULL),
(48, 1, 1399382515, 1399389715, 0, '127.0.0.1', 1, 1399382515, 1399389587, '127.0.0.1'),
(49, 1, 1399412383, 1399419583, 1, '127.0.0.1', 2, 1399414101, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_system`
--

CREATE TABLE IF NOT EXISTS `cruge_system` (
  `idsystem` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `largename` varchar(45) DEFAULT NULL,
  `sessionmaxdurationmins` int(11) DEFAULT '30',
  `sessionmaxsameipconnections` int(11) DEFAULT '10',
  `sessionreusesessions` int(11) DEFAULT '1' COMMENT '1yes 0no',
  `sessionmaxsessionsperday` int(11) DEFAULT '-1',
  `sessionmaxsessionsperuser` int(11) DEFAULT '-1',
  `systemnonewsessions` int(11) DEFAULT '0' COMMENT '1yes 0no',
  `systemdown` int(11) DEFAULT '0',
  `registerusingcaptcha` int(11) DEFAULT '0',
  `registerusingterms` int(11) DEFAULT '0',
  `terms` blob,
  `registerusingactivation` int(11) DEFAULT '1',
  `defaultroleforregistration` varchar(64) DEFAULT NULL,
  `registerusingtermslabel` varchar(100) DEFAULT NULL,
  `registrationonlogin` int(11) DEFAULT '1',
  PRIMARY KEY (`idsystem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 120, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_user`
--

CREATE TABLE IF NOT EXISTS `cruge_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `regdate` bigint(30) DEFAULT NULL,
  `actdate` bigint(30) DEFAULT NULL,
  `logondate` bigint(30) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL COMMENT 'Hashed password',
  `authkey` varchar(100) DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` int(11) DEFAULT '0',
  `totalsessioncounter` int(11) DEFAULT '0',
  `currentsessioncounter` int(11) DEFAULT '0',
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1399414101, 'admin', 'oscarmesa.elpoli@gmail.com.co', 'mesa2344827', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0),
(3, 1396853132, NULL, 1399329864, 'carlos', 'oscar@nettic.com.co', '123456', '74a145e1d91d6a85b680ed120e43bcc4', 1, 0, 0),
(5, 1399385393, NULL, NULL, 'victor', 'varangoa@gmail.com', 'ad1f2de0', '68a56c62fc2e10ade5226ab7e70ec284', 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre_documento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario_modificador` int(5) NOT NULL,
  `nombre_doc_bd` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_doc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuairo_modificador` (`id_usuario_modificador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id`, `nombre_documento`, `id_usuario_modificador`, `nombre_doc_bd`, `nombre_doc`, `tipo`) VALUES
(9, 'modificar other doc', 1, '918b112f-d2b7-422f-8506-7affe273af59.mp4', 'pruebatales.mp4', 'video/mp4'),
(10, 'gdsgf', 1, '4eff5531-c566-4f49-889e-6977587ee106.mp3', 'SeñalDeVida.mp3', 'audio/mpeg'),
(11, 'prueba 12', 1, 'c0655328-0b1c-4f7d-9aa1-3e935fa2c94f.jpg', 'av-9.jpg', 'image/jpeg'),
(12, 'Un archivo', 1, '090ffec3-bdf7-4f68-8fe9-05a1659c0fe8.sql', 'wwwdisco_testing.sql', 'text/x-sql'),
(18, 'sdafs', 1, '1f38275d-fdf4-4527-97b4-04d1d528e728.sql', 'wwwdisco_testing.sql', 'text/x-sql'),
(19, 'El archivito', 1, '68bef826-7d27-4d22-9d58-6c0e18864dba.sql', 'wwwdisco_testing.sql', 'text/x-sql'),
(20, 'El archivito', 1, '5e9ae504-993c-40ab-a151-c10e2902513e.sql', 'wwwdisco_testing.sql', 'text/x-sql'),
(21, 'aja', 1, 'e0463c8f-bea0-464d-96ce-1233f02ed2ea.sql', 'wwwdisco_testing.sql', 'text/x-sql'),
(24, 'jajajaja', 1, '6995e542-049e-4054-b678-50acb1418fac.doc', 'Formato - Hoja Vida V.2.doc', 'application/msword');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento_authitem`
--

CREATE TABLE IF NOT EXISTS `documento_authitem` (
  `id_documento` int(11) NOT NULL,
  `name_authitem` varchar(64) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_documento`,`name_authitem`),
  KEY `name_authitem` (`name_authitem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `documento_authitem`
--

INSERT INTO `documento_authitem` (`id_documento`, `name_authitem`) VALUES
(10, 'car'),
(11, 'car'),
(12, 'car'),
(9, 'Ganaderos'),
(10, 'Ganaderos'),
(12, 'Ganaderos'),
(18, 'Ganaderos'),
(19, 'Ganaderos'),
(20, 'Ganaderos'),
(24, 'Ganaderos');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cruge_authassignment`
--
ALTER TABLE `cruge_authassignment`
  ADD CONSTRAINT `cruge_authassignment_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cruge_authassignment_ibfk_2` FOREIGN KEY (`itemname`) REFERENCES `cruge_authitem` (`name`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `cruge_authitemchild`
--
ALTER TABLE `cruge_authitemchild`
  ADD CONSTRAINT `crugeauthitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crugeauthitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cruge_authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cruge_authitemchild_ibfk_3` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_field1` FOREIGN KEY (`idfield`) REFERENCES `cruge_field` (`idfield`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_user1` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`id_usuario_modificador`) REFERENCES `cruge_user` (`iduser`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `documento_authitem`
--
ALTER TABLE `documento_authitem`
  ADD CONSTRAINT `documento_authitem_ibfk_4` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documento_authitem_ibfk_3` FOREIGN KEY (`name_authitem`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
