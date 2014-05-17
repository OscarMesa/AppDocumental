-- V1
ALTER TABLE `documento` ADD `descripcion` TEXT NULL AFTER `tipo` 
ALTER TABLE `documento` ADD `fecha_cheacion` DATETIME NULL DEFAULT CURRENT_TIMESTAMP AFTER `descripcion` 

ALTER TABLE  `documento` CHANGE  `fecha_cheacion`  `fecha_creacion` DATETIME NULL DEFAULT CURRENT_TIMESTAMP


CREATE TABLE IF NOT EXISTS `categorias_documentos` (
  `id_cat` int(11) NOT NULL,
  `id_documento` int(11) NOT NULL,
  PRIMARY KEY (`id_cat`,`id_documento`),
  KEY `id_cat` (`id_cat`),
  KEY `id_documento` (`id_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categorias_documentos`
--
ALTER TABLE `categorias_documentos`
  ADD CONSTRAINT `categorias_documentos_ibfk_2` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id`),
  ADD CONSTRAINT `categorias_documentos_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id_cat`);

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_cat`, `nombre`) VALUES
(1, 'circulares'),
(2, 'modelos'),
(3, 'videos'),
(4, 'capacitaciones'),
(5, 'imagenes'),
(6, 'audio'),
(7, 'instructivo');
