-- V1
ALTER TABLE `documento` ADD `descripcion` TEXT NULL AFTER `tipo` 
ALTER TABLE `documento` ADD `fecha_cheacion` DATETIME NULL DEFAULT CURRENT_TIMESTAMP AFTER `descripcion` 