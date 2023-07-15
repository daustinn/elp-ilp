-- DEPARTAMENT TABLE
CREATE TABLE `departamento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `departamento` VALUE (1,'General')


-- AREA TABLE
CREATE TABLE `area` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `iddepartamento` INT DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iddepartamento_idx` (`iddepartamento`),
  CONSTRAINT `iddepartamento` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`id`)
);
INSERT INTO `departamento` VALUE (1,'Director General', 1)




-- SEDE TABLE
CREATE TABLE `sede` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lugar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);



-- puesto TABLE
CREATE TABLE `puesto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `puesto` INT DEFAULT NULL,
  `tipo_puesto` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
);



-- POST TABLE
CREATE TABLE `cargo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);






-- ROL TABLE
CREATE TABLE `rol` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);



-- USER TABLE
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(255) DEFAULT 'Pontificia2023',
  `idrol` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idrol_idx` (`idrol`),
  CONSTRAINT `idrol` FOREIGN KEY (`idrol`) REFERENCES `rol` (`id`)
);




-- COLLABORATOR TABLE
CREATE TABLE `colaborador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dni` varchar(8) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `idcargo` int DEFAULT NULL,
  `idusuario` int DEFAULT NULL,
  `idsede` int DEFAULT NULL,
  `idpuesto` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idcargo_idx` (`idcargo`),
  KEY `idusuario_idx` (`idusuario`),
  KEY `idsede_idx` (`idsede`),
  KEY `idpuestoidx` (`idpuesto`),

  CONSTRAINT `idcargo` FOREIGN KEY (`idcargo`) REFERENCES `cargo` (`id`),
  CONSTRAINT `idsede` FOREIGN KEY (`idsede`) REFERENCES `sede` (`id`),
  CONSTRAINT `idusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`),
  CONSTRAINT `idpuesto` FOREIGN KEY (`idpuesto`) REFERENCES `puesto` (`id`)
);



-- EMAILS TABLE
CREATE TABLE `correos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo_correo` varchar(100) NOT NULL,
  `valor` varchar(255) DEFAULT NULL,
  `id_colaborador` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idcolaborador_idx` (`id_colaborador`),
  CONSTRAINT `id_colaborador` FOREIGN KEY (`id_colaborador`) REFERENCES `colaborador` (`id`)
);



-- SCORE TYPE TABLE
CREATE TABLE `tipo_objetivo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);



-- AIM TABLE
CREATE TABLE `objetivo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `indicadores_logros` varchar(255) DEFAULT NULL,
  `porcentaje` INT DEFAULT NULL,
  `fecha_inicial` DATETIME DEFAULT NULL,
  `idcolaborador` INT DEFAULT NULL,
  `idtipo_objetivo` INT DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idcolaborador_idx` (`idcolaborador`),
  KEY `idtipo_objetivo_idx` (`idtipo_objetivo`),
  CONSTRAINT `idcolaborador` FOREIGN KEY (`idcolaborador`) REFERENCES `colaborador` (`id`),
  CONSTRAINT `idtipo_objetivo` FOREIGN KEY (`idtipo_objetivo`) REFERENCES `tipo_objetivo` (`id`)
);



-- SCORE TABLE
CREATE TABLE `puntaje` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha_inicio` DATETIME DEFAULT NULL,
  `fecha_fin` DATETIME DEFAULT NULL,
  `estado` int DEFAULT NULL, -- 1: FINALIZADO, 2: PENDIENTE, 3: RECHAZADO
  `valor` DECIMAL(1,1) DEFAULT NULL,
  `valor_inicial` DECIMAL(1,1) DEFAULT NULL,
  `idobjetivo` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idobjetivo_idx` (`idobjetivo`),
  CONSTRAINT `idobjetivo` FOREIGN KEY (`idobjetivo`) REFERENCES `objetivo` (`id`)
);



-- ASSESSMENT TABLE
CREATE TABLE `evaluacion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` DATETIME DEFAULT NULL,
  `idevaluador` int DEFAULT NULL,
  `idpuntaje` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idcolaborador_idx` (`idevaluador`),
  KEY `idpuntaje_idx` (`idpuntaje`),
  CONSTRAINT `idevaluador` FOREIGN KEY (`idevaluador`) REFERENCES `colaborador` (`id`),
  CONSTRAINT `idpuntaje` FOREIGN KEY (`idpuntaje`) REFERENCES `puntaje` (`id`)
); 












