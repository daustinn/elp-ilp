  -- DEPARTAMENT TABLE
  CREATE TABLE IF NOT EXISTS `departamento` (
    `id` int NOT NULL AUTO_INCREMENT,
    `nombre` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
  );


<<<<<<< HEAD
  -- AREA TABLE
  CREATE TABLE IF NOT EXISTS `area` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nombre` varchar(255) DEFAULT NULL,
    `iddepartamento` INT DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `iddepartamento_idx` (`iddepartamento`),
    CONSTRAINT `iddepartamento` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`id`)
  );
=======
-- AREA TABLE
CREATE TABLE IF NOT EXISTS `area` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
);
>>>>>>> 8fac538476cb81995f5016d078acd00b76daae79



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


<<<<<<< HEAD
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
    PRIMARY KEY (`id`),
    KEY `idcargo_idx` (`idcargo`),
    KEY `idusuario_idx` (`idusuario`),
    KEY `idsede_idx` (`idsede`),
    KEY `idpuesto_idx` (`idpuesto`),
    CONSTRAINT `idcargo` FOREIGN KEY (`idcargo`) REFERENCES `cargo` (`id`),
    CONSTRAINT `idsede` FOREIGN KEY (`idsede`) REFERENCES `sede` (`id`),
    CONSTRAINT `idusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`),
    CONSTRAINT `idpuesto` FOREIGN KEY (`idpuesto`) REFERENCES `puesto` (`id`)
  );
=======
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
  PRIMARY KEY (`id`),
  KEY `idcargo_idx` (`idcargo`),
  KEY `idusuario_idx` (`idusuario`),
  KEY `idsede_idx` (`idsede`),
  KEY `idpuesto_idx` (`idpuesto`),
  KEY `idarea_idx` (`idarea`),
  CONSTRAINT `idcargo` FOREIGN KEY (`idcargo`) REFERENCES `cargo` (`id`),
  CONSTRAINT `idsede` FOREIGN KEY (`idsede`) REFERENCES `sede` (`id`),
  CONSTRAINT `idusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`),
  CONSTRAINT `idpuesto` FOREIGN KEY (`idpuesto`) REFERENCES `puesto` (`id`),
  CONSTRAINT `idarea` FOREIGN KEY (`idarea`) REFERENCES `area` (`id`)
);
>>>>>>> 8fac538476cb81995f5016d078acd00b76daae79


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

  INSERT INTO `usuario` VALUES (1,'root','root',1);
  INSERT INTO `usuario` VALUES (2,'joaocisneros@elp.edu.pe','123',2);
  INSERT INTO `usuario` VALUES (3,'dianacurilla@elp.edu.pe','123',2);
  INSERT INTO `usuario` VALUES (4,'henrysalcedo@elp.edu.pe','123',2);

  INSERT INTO `departamento` VALUES (1,'General');
  INSERT INTO `departamento` VALUES (2,'Administrativa');
  INSERT INTO `departamento` VALUES (3,'Academico');
  INSERT INTO `departamento` VALUES (4,'Investigacion e Innovacion');
  INSERT INTO `departamento` VALUES (5,'Marketing y Comercial');
  INSERT INTO `departamento` VALUES (6,'Secretaria Academica');
  INSERT INTO `departamento` VALUES (7,'Educacion Continua');
  INSERT INTO `departamento` VALUES (8,'Centro de Idiomas');

  INSERT INTO `puesto` VALUES (1,1,'Director');
  INSERT INTO `puesto` VALUES (2,2,'Asesor');
  INSERT INTO `puesto` VALUES (3,3,'Jefe');
  INSERT INTO `puesto` VALUES (4,4,'Coordinador');
  INSERT INTO `puesto` VALUES (5,5,'Analista');
  INSERT INTO `puesto` VALUES (6,6,'Asistente');
  INSERT INTO `puesto` VALUES (7,7,'Practicante');
  INSERT INTO `puesto` VALUES (8,8,'Operario');

  INSERT INTO `sede` VALUES (1,'Alameda');
  INSERT INTO `sede` VALUES (2,'Jazmines');
  INSERT INTO `sede` VALUES (3,'Casuarinas');


  INSERT INTO `cargo` VALUES (1,'Director general');
  INSERT INTO `cargo` VALUES (2,'Directora adjunta');
  INSERT INTO `cargo` VALUES (3,'Director administrativo');
  INSERT INTO `cargo` VALUES (4,'Director academico');
  INSERT INTO `cargo` VALUES (5,'Director de investigacion e innovacion');
  INSERT INTO `cargo` VALUES (6,'Asesor legal');
  INSERT INTO `cargo` VALUES (7,'Asesor de contabilidad y tributacion');
  INSERT INTO `cargo` VALUES (8,'Asesor de gestion estrategica');
  INSERT INTO `cargo` VALUES (9,'Jefe de Infraestructura');
  INSERT INTO `cargo` VALUES (10,'Jefe de Admision ELP');
  INSERT INTO `cargo` VALUES (11,'Jefe Secretaria Academica ILP y ELP');
  INSERT INTO `cargo` VALUES (12,'Jefe de Registro de Grados y Titulos');
  INSERT INTO `cargo` VALUES (13,'Jefe Academico C. Salud');
  INSERT INTO `cargo` VALUES (14,'Jefe de Comunicaciones');
  INSERT INTO `cargo` VALUES (15,'Jefe de Sistemas');
  INSERT INTO `cargo` VALUES (16,'Jefe Academico C. Gestion y Tecnologia');
  INSERT INTO `cargo` VALUES (17,'Jefe de Admision ILP');
  INSERT INTO `cargo` VALUES (18,'Jefe gestion personas');
  INSERT INTO `cargo` VALUES (19,'Coordinador Academico C. Salud');
  INSERT INTO `cargo` VALUES (20,'Coordinador Certificaciones');
  INSERT INTO `cargo` VALUES (21,'Coordinadora de Experiencia del Estudiante');
  INSERT INTO `cargo` VALUES (22,'Coordinadora Secretaria Academica ILP ');
  INSERT INTO `cargo` VALUES (23,'Coordinador de Comunicacion ILP');
  INSERT INTO `cargo` VALUES (24,'Coordinador de Contabilidad');
  INSERT INTO `cargo` VALUES (25,'Coordinador de Recaudacion');
  INSERT INTO `cargo` VALUES (26,'Coordinador de Calidad Educativa');
  INSERT INTO `cargo` VALUES (27,'Coordinador de Educacion Continua');
  INSERT INTO `cargo` VALUES (28,'Coordinadora de Tesoreria');
  INSERT INTO `cargo` VALUES (29,'Coordinador de Academico C. Gestion y TI');
  INSERT INTO `cargo` VALUES (30,'Coordinador de Servicios y Demanda');
  INSERT INTO `cargo` VALUES (31,'Coordinador de Comunicaciones: Cybernet, RRPP y Prensa');
  INSERT INTO `cargo` VALUES (32,'Jefe de Gestion de Personas');
  INSERT INTO `cargo` VALUES (33,'Coordinador de Comunicaciones ELP');
  INSERT INTO `cargo` VALUES (34,'Coordinador de cloud, redes y conectividad');
  INSERT INTO `cargo` VALUES (35,'Coordinador de Comunicaciones: Educacion Continua y Centro de Idiomas');
  INSERT INTO `cargo` VALUES (36,'Coordinador de RATEC');
  INSERT INTO `cargo` VALUES (37,'Coordinador del Centro de Idiomas');
  INSERT INTO `cargo` VALUES (38,'Coordinador del Centro de Información');
  INSERT INTO `cargo` VALUES (39,'Coordinado de Bienestar');
  INSERT INTO `cargo` VALUES (40,'Coordinador de Talento');
  INSERT INTO `cargo` VALUES (41,'Analista de Contabilidad');
  INSERT INTO `cargo` VALUES (42,'Analista de Secretaria Academica del ILP');
  INSERT INTO `cargo` VALUES (43,'Analista Legal');
  INSERT INTO `cargo` VALUES (44,'Analista de mesa de ayuda');
  INSERT INTO `cargo` VALUES (45,'Analista de Calidad Educativa');
  INSERT INTO `cargo` VALUES (46,'Analista de Diseño y Producción ILP');
  INSERT INTO `cargo` VALUES (47,'Analista de Experiencia del Estudiante');
  INSERT INTO `cargo` VALUES (48,'Asistente de Direccion General');
  INSERT INTO `cargo` VALUES (49,'Asistente de Comunicaciones: Educacion Continua y Centro de Idiomas');
  INSERT INTO `cargo` VALUES (50,'Asistente de Tesoreia');
  INSERT INTO `cargo` VALUES (51,'Asesor  de Admision ILP');
  INSERT INTO `cargo` VALUES (52,'Asesor de Admision idiomas');
  INSERT INTO `cargo` VALUES (53,'Asistente Modulos');
  INSERT INTO `cargo` VALUES (54,'Asistente Secretaria Academica ILP');
  INSERT INTO `cargo` VALUES (55,'Asistente de Certificaciones');
  INSERT INTO `cargo` VALUES (56,'Asistente Administrativo');
  INSERT INTO `cargo` VALUES (57,'Asistente de Infraestructura');
  INSERT INTO `cargo` VALUES (58,'Asesor  de Admision ILP Y ELP');
  INSERT INTO `cargo` VALUES (59,'Asistente de Bienestar');
  INSERT INTO `cargo` VALUES (60,'Asistente Academico C. Gestion y Tecnologia ');
  INSERT INTO `cargo` VALUES (61,'Asistente Secretaria Academica ELP');
  INSERT INTO `cargo` VALUES (62,'Asistente de Redes Sociales');
  INSERT INTO `cargo` VALUES (63,'Asistente de Sistemas');
  INSERT INTO `cargo` VALUES (64,'Asistente de Seguridad y Camaras');
  INSERT INTO `cargo` VALUES (65,'Asistente de Experiencia del Estudiante');
  INSERT INTO `cargo` VALUES (66,'Asistente de Topico ');
  INSERT INTO `cargo` VALUES (67,'Asistente de Registro de Grados y Titulos');
  INSERT INTO `cargo` VALUES (68,'Asistente de Contabilidad');
  INSERT INTO `cargo` VALUES (69,'Asistente de Calidad Educativa');
  INSERT INTO `cargo` VALUES (70,'Asistente Academico C. Salud');
  INSERT INTO `cargo` VALUES (71,'Asesor de Admision ELP');
  INSERT INTO `cargo` VALUES (72,'Asesor de Admision Continua');
  INSERT INTO `cargo` VALUES (73,'Asistente de Recaudacion');
  INSERT INTO `cargo` VALUES (74,'Practicante de Certificaciones');
  INSERT INTO `cargo` VALUES (75,'Practicante de mesa de ayuda');
  INSERT INTO `cargo` VALUES (76,'Practicante Secretaria Academica ILP');
  INSERT INTO `cargo` VALUES (77,'Practicante de Comunicaciones');
  INSERT INTO `cargo` VALUES (78,'Practicante de Experiencia del Estudiante');
  INSERT INTO `cargo` VALUES (79,'Mentor');
  INSERT INTO `cargo` VALUES (80,'Operario de Logistica');
  INSERT INTO `cargo` VALUES (81,'Operario de Seguridad');
  INSERT INTO `cargo` VALUES (82,'Operario de Limpieza');


  INSERT INTO `colaborador` VALUES (1,'70057895','Joao ','Cisneros Maldonado',63,2,1,6);
  INSERT INTO `colaborador` VALUES (2,'28302883','Henry','Salcedo Arriaran',15,4,1,3);
  INSERT INTO `colaborador` VALUES (3,'70435122','Diana','Curilla Quispe',75,3,1,7);