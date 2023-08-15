-- DEPARTAMENT TABLE
CREATE TABLE IF NOT EXISTS `departamento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);


-- AREA TABLE
CREATE TABLE IF NOT EXISTS `area` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- SEDE TABLE
CREATE TABLE IF NOT EXISTS `sede` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lugar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);


-- PUESTO TABLE
CREATE TABLE IF NOT EXISTS `puesto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `puesto` INT DEFAULT NULL,
  `tipo_puesto` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
);


-- CARGO TABLE
CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);


-- ROL TABLE
CREATE TABLE IF NOT EXISTS `rol` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);


-- USER TABLE
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(255) DEFAULT 'Pontificia2023',
  `idrol` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idrol_idx` (`idrol`),
  CONSTRAINT `idrol` FOREIGN KEY (`idrol`) REFERENCES `rol` (`id`)
);


-- COLLABORATOR TABLE
CREATE TABLE IF NOT EXISTS `colaborador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dni` varchar(8) DEFAULT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `idusuario` int DEFAULT NULL,
  `idcargo` int DEFAULT NULL,
  `idsede` int DEFAULT NULL,
  `idpuesto` int DEFAULT NULL,
  `idarea` int DEFAULT NULL,
  `iddepartamento` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idcargo_idx` (`idcargo`),
  KEY `idusuario_idx` (`idusuario`),
  KEY `idsede_idx` (`idsede`),
  KEY `idpuesto_idx` (`idpuesto`),
  KEY `idarea_idx` (`idarea`),
  KEY `iddepartamento_idx` (`iddepartamento`),

  CONSTRAINT `idcargo` FOREIGN KEY (`idcargo`) REFERENCES `cargo` (`id`),
  CONSTRAINT `idsede` FOREIGN KEY (`idsede`) REFERENCES `sede` (`id`),
  CONSTRAINT `idusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`),
  CONSTRAINT `idpuesto` FOREIGN KEY (`idpuesto`) REFERENCES `puesto` (`id`),
  CONSTRAINT `idarea` FOREIGN KEY (`idarea`) REFERENCES `area` (`id`),
  CONSTRAINT `iddepartamento` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`id`)
);


-- SCORE TYPE TABLE
CREATE TABLE IF NOT EXISTS `tipo_objetivo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);


-- AIM TABLE
CREATE TABLE IF NOT EXISTS `objetivo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `porcentaje` INT DEFAULT NULL,
  `indicadores_logros` varchar(255) DEFAULT NULL,
  `fecha_vencimiento` DATETIME DEFAULT NULL,
  `estado_eva1` varchar(10) DEFAULT NULL, -- EARRING / APPROVED / REFUZED / FINISHED
  `estado_eva2` varchar(10) DEFAULT NULL, -- EARRING / APPROVED / REFUZED / FINISHED
  `puntaje_nicial_1` DECIMAL(1,1),
  `puntaje_nicial_2` DECIMAL(1,1),
  `idcolaborador` INT DEFAULT NULL,
  `idtipo_objetivo` INT DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idcolaborador_idx` (`idcolaborador`),
  KEY `idtipo_objetivo_idx` (`idtipo_objetivo`),
  CONSTRAINT `idcolaborador` FOREIGN KEY (`idcolaborador`) REFERENCES `colaborador` (`id`),
  CONSTRAINT `idtipo_objetivo` FOREIGN KEY (`idtipo_objetivo`) REFERENCES `tipo_objetivo` (`id`)
);



-- ASSESSMENT TABLE
CREATE TABLE IF NOT EXISTS `evaluacion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` DATETIME DEFAULT NULL,
  `puntaje_1` DECIMAL(1,1),
  `puntaje_2` DECIMAL(1,1),
  `id_evaluador` int DEFAULT NULL,
  `id_objetivo` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_evaluador_idx` (`id_evaluador`),
  KEY `id_objetivo_idx` (`id_objetivo`),
  CONSTRAINT `id_evaluador` FOREIGN KEY (`id_evaluador`) REFERENCES `colaborador` (`id`),
  CONSTRAINT `id_objetivo` FOREIGN KEY (`id_objetivo`) REFERENCES `objetivo` (`id`)
);


















