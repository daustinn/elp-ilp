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
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `idcargo` int DEFAULT NULL,
  `idusuario` int DEFAULT NULL,
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


-- EMAILS TABLE
CREATE TABLE IF NOT EXISTS `correos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo_correo` varchar(100) NOT NULL,
  `valor` varchar(255) DEFAULT NULL,
  `id_colaborador` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idcolaborador_idx` (`id_colaborador`),
  CONSTRAINT `id_colaborador` FOREIGN KEY (`id_colaborador`) REFERENCES `colaborador` (`id`)
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
CREATE TABLE IF NOT EXISTS `puntaje` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha_inicio` DATETIME DEFAULT NULL,
  `fecha_fin` DATETIME DEFAULT NULL,
  `estado` int DEFAULT NULL,
  `valor` DECIMAL(1,1) DEFAULT NULL,
  `valor_inicial` DECIMAL(1,1) DEFAULT NULL,
  `idobjetivo` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idobjetivo_idx` (`idobjetivo`),
  CONSTRAINT `idobjetivo` FOREIGN KEY (`idobjetivo`) REFERENCES `objetivo` (`id`)
);


-- ASSESSMENT TABLE
CREATE TABLE IF NOT EXISTS `evaluacion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` DATETIME DEFAULT NULL,
  `idevaluador` int DEFAULT NULL,
  `idpuntaje` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idevaluador_idx` (`idevaluador`),
  KEY `idpuntaje_idx` (`idpuntaje`),
  CONSTRAINT `idevaluador` FOREIGN KEY (`idevaluador`) REFERENCES `colaborador` (`id`),
  CONSTRAINT `idpuntaje` FOREIGN KEY (`idpuntaje`) REFERENCES `puntaje` (`id`)
);

-- QUERY USER ADD
INSERT INTO `rol` VALUES (1, 'admin');
INSERT INTO `rol` VALUES (2, 'colab');

INSERT INTO `area` VALUES (1,'Developers');
INSERT INTO `area` VALUES (2,'Director General');
INSERT INTO `area` VALUES (3,'Administrativa');
INSERT INTO `area` VALUES (4,'Académica');
INSERT INTO `area` VALUES (5,'Investigación');
INSERT INTO `area` VALUES (6,'Contabilidad');
INSERT INTO `area` VALUES (7,'Construcción');
INSERT INTO `area` VALUES (8,'Admisión');
INSERT INTO `area` VALUES (9,'Secretaría Académica');
INSERT INTO `area` VALUES (10,'Comunicación');
INSERT INTO `area` VALUES (11,'Sistemas');
INSERT INTO `area` VALUES (12,'Calidad Educativa');
INSERT INTO `area` VALUES (13,'Experiencia del Estudiante');
INSERT INTO `area` VALUES (14,'Recaudaciones');
INSERT INTO `area` VALUES (15,'Educación Continua');
INSERT INTO `area` VALUES (16,'Tesorería');
INSERT INTO `area` VALUES (17,'RATEC');
INSERT INTO `area` VALUES (18,'Centro de Idiomas');
INSERT INTO `area` VALUES (19,'Centro de Información');
INSERT INTO `area` VALUES (20,'Bienestar');
INSERT INTO `area` VALUES (21,'Talento Humano');
INSERT INTO `area` VALUES (22,'Legal');
INSERT INTO `area` VALUES (23,'Mantenimiento, Seguridad y Limpieza');


INSERT INTO `usuario` VALUES (1,'root','root',1);
INSERT INTO `usuario` VALUES (2,'joaocisneros@elp.edu.pe','123',2);
INSERT INTO `usuario` VALUES (3,'dianacurilla@elp.edu.pe','123',2);
INSERT INTO `usuario` VALUES (4,'henrysalcedo@elp.edu.pe','123',2);

INSERT INTO `departamento` VALUES (1,'Developers');
INSERT INTO `departamento` VALUES (2,'General');
INSERT INTO `departamento` VALUES (3,'Administrativa');
INSERT INTO `departamento` VALUES (4,'Academico');
INSERT INTO `departamento` VALUES (5,'Investigacion e Innovacion');
INSERT INTO `departamento` VALUES (6,'Marketing y Comercial');
INSERT INTO `departamento` VALUES (7,'Secretaria Academica');
INSERT INTO `departamento` VALUES (8,'Educacion Continua');
INSERT INTO `departamento` VALUES (9,'Centro de Idiomas');

INSERT INTO `puesto` VALUES (1,1,'Developers');
INSERT INTO `puesto` VALUES (2,2,'Director');
INSERT INTO `puesto` VALUES (3,3,'Asesor');
INSERT INTO `puesto` VALUES (4,4,'Jefe');
INSERT INTO `puesto` VALUES (5,5,'Coordinador');
INSERT INTO `puesto` VALUES (6,6,'Analista');
INSERT INTO `puesto` VALUES (7,7,'Asistente');
INSERT INTO `puesto` VALUES (8,8,'Practicante');
INSERT INTO `puesto` VALUES (9,9,'Operario');

INSERT INTO `sede` VALUES (1,'Developers');
INSERT INTO `sede` VALUES (2,'Alameda');
INSERT INTO `sede` VALUES (3,'Jazmines');
INSERT INTO `sede` VALUES (4,'Casuarinas');
INSERT INTO `sede` VALUES (5,'Colegio');

INSERT INTO `cargo` VALUES (1,'Developers');
INSERT INTO `cargo` VALUES (2,'Director general');
INSERT INTO `cargo` VALUES (3,'Directora adjunta');
INSERT INTO `cargo` VALUES (4,'Director administrativo');
INSERT INTO `cargo` VALUES (5,'Director academico');
INSERT INTO `cargo` VALUES (6,'Director de investigacion e innovacion');
INSERT INTO `cargo` VALUES (7,'Asesor legal');
INSERT INTO `cargo` VALUES (8,'Asesor de contabilidad y tributacion');
INSERT INTO `cargo` VALUES (9,'Asesor de gestion estrategica');
INSERT INTO `cargo` VALUES (10,'Jefe de Infraestructura');
INSERT INTO `cargo` VALUES (11,'Jefe de Admision ELP');
INSERT INTO `cargo` VALUES (12,'Jefe Secretaria Academica ILP y ELP');
INSERT INTO `cargo` VALUES (13,'Jefe de Registro de Grados y Titulos');
INSERT INTO `cargo` VALUES (14,'Jefe Academico C. Salud');
INSERT INTO `cargo` VALUES (15,'Jefe de Comunicaciones');
INSERT INTO `cargo` VALUES (16,'Jefe de Sistemas');
INSERT INTO `cargo` VALUES (17,'Jefe Academico C. Gestion y Tecnologia');
INSERT INTO `cargo` VALUES (18,'Jefe de Admision ILP');
INSERT INTO `cargo` VALUES (19,'Jefe gestion personas');
INSERT INTO `cargo` VALUES (20,'Coordinador Academico C. Salud');
INSERT INTO `cargo` VALUES (21,'Coordinador Certificaciones');
INSERT INTO `cargo` VALUES (22,'Coordinadora de Experiencia del Estudiante');
INSERT INTO `cargo` VALUES (23,'Coordinadora Secretaria Academica ILP ');
INSERT INTO `cargo` VALUES (24,'Coordinador de Comunicacion ILP');
INSERT INTO `cargo` VALUES (25,'Coordinador de Contabilidad');
INSERT INTO `cargo` VALUES (26,'Coordinador de Recaudacion');
INSERT INTO `cargo` VALUES (27,'Coordinador de Calidad Educativa');
INSERT INTO `cargo` VALUES (28,'Coordinador de Educacion Continua');
INSERT INTO `cargo` VALUES (29,'Coordinadora de Tesoreria');
INSERT INTO `cargo` VALUES (30,'Coordinador de Academico C. Gestion y TI');
INSERT INTO `cargo` VALUES (31,'Coordinador de Servicios y Demanda');
INSERT INTO `cargo` VALUES (32,'Coordinador de Comunicaciones: Cybernet, RRPP y Prensa');
INSERT INTO `cargo` VALUES (33,'Jefe de Gestion de Personas');
INSERT INTO `cargo` VALUES (34,'Coordinador de Comunicaciones ELP');
INSERT INTO `cargo` VALUES (35,'Coordinador de cloud, redes y conectividad');
INSERT INTO `cargo` VALUES (36,'Coordinador de Comunicaciones: Educacion Continua y Centro de Idiomas');
INSERT INTO `cargo` VALUES (37,'Coordinador de RATEC');
INSERT INTO `cargo` VALUES (38,'Coordinador del Centro de Idiomas');
INSERT INTO `cargo` VALUES (39,'Coordinador del Centro de Información');
INSERT INTO `cargo` VALUES (40,'Coordinado de Bienestar');
INSERT INTO `cargo` VALUES (41,'Coordinador de Talento');
INSERT INTO `cargo` VALUES (42,'Analista de Contabilidad');
INSERT INTO `cargo` VALUES (43,'Analista de Secretaria Academica del ILP');
INSERT INTO `cargo` VALUES (44,'Analista Legal');
INSERT INTO `cargo` VALUES (45,'Analista de mesa de ayuda');
INSERT INTO `cargo` VALUES (46,'Analista de Calidad Educativa');
INSERT INTO `cargo` VALUES (47,'Analista de Diseño y Producción ILP');
INSERT INTO `cargo` VALUES (48,'Analista de Experiencia del Estudiante');
INSERT INTO `cargo` VALUES (49,'Asistente de Direccion General');
INSERT INTO `cargo` VALUES (50,'Asistente de Comunicaciones: Educacion Continua y Centro de Idiomas');
INSERT INTO `cargo` VALUES (51,'Asistente de Tesoreia');
INSERT INTO `cargo` VALUES (52,'Asesor  de Admision ILP');
INSERT INTO `cargo` VALUES (53,'Asesor de Admision idiomas');
INSERT INTO `cargo` VALUES (54,'Asistente Modulos');
INSERT INTO `cargo` VALUES (55,'Asistente Secretaria Academica ILP');
INSERT INTO `cargo` VALUES (56,'Asistente de Certificaciones');
INSERT INTO `cargo` VALUES (57,'Asistente Administrativo');
INSERT INTO `cargo` VALUES (58,'Asistente de Infraestructura');
INSERT INTO `cargo` VALUES (59,'Asesor  de Admision ILP Y ELP');
INSERT INTO `cargo` VALUES (60,'Asistente de Bienestar');
INSERT INTO `cargo` VALUES (61,'Asistente Academico C. Gestion y Tecnologia ');
INSERT INTO `cargo` VALUES (62,'Asistente Secretaria Academica ELP');
INSERT INTO `cargo` VALUES (63,'Asistente de Redes Sociales');
INSERT INTO `cargo` VALUES (64,'Asistente de Sistemas');
INSERT INTO `cargo` VALUES (65,'Asistente de Seguridad y Camaras');
INSERT INTO `cargo` VALUES (66,'Asistente de Experiencia del Estudiante');
INSERT INTO `cargo` VALUES (67,'Asistente de Topico ');
INSERT INTO `cargo` VALUES (68,'Asistente de Registro de Grados y Titulos');
INSERT INTO `cargo` VALUES (69,'Asistente de Contabilidad');
INSERT INTO `cargo` VALUES (70,'Asistente de Calidad Educativa');
INSERT INTO `cargo` VALUES (71,'Asistente Academico C. Salud');
INSERT INTO `cargo` VALUES (72,'Asesor de Admision ELP');
INSERT INTO `cargo` VALUES (73,'Asesor de Admision Continua');
INSERT INTO `cargo` VALUES (74,'Asistente de Recaudacion');
INSERT INTO `cargo` VALUES (75,'Practicante de Certificaciones');
INSERT INTO `cargo` VALUES (76,'Practicante de mesa de ayuda');
INSERT INTO `cargo` VALUES (77,'Practicante Secretaria Academica ILP');
INSERT INTO `cargo` VALUES (78,'Practicante de Comunicaciones');
INSERT INTO `cargo` VALUES (79,'Practicante de Experiencia del Estudiante');
INSERT INTO `cargo` VALUES (80,'Mentor');
INSERT INTO `cargo` VALUES (81,'Operario de Logistica');
INSERT INTO `cargo` VALUES (82,'Operario de Seguridad');
INSERT INTO `cargo` VALUES (83,'Operario de Limpieza');

INSERT INTO `colaborador` VALUES (1,'99999999','Usuario','Root',1,1,1,1,1);
INSERT INTO `colaborador` VALUES (2,'70057895','Joao','Cisneros Maldonado',64,2,2,5,2);
INSERT INTO `colaborador` VALUES (3,'28302883','Henry','Salcedo Arriaran',16,4,2,4,3);
INSERT INTO `colaborador` VALUES (4,'70435122','Diana','Curilla Quispe',76,3,2,8,3);