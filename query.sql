

CREATE TABLE `colaborador` (
  `idcolaborador` int NOT NULL,
  `dni` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int NOT NULL,
  `sede_idsede` int NOT NULL,
  PRIMARY KEY (`idcolaborador`,`usuario_idusuario`,`sede_idsede`),
  KEY `fk_colaborador_usuario1_idx` (`usuario_idusuario`),
  KEY `fk_colaborador_sede1_idx` (`sede_idsede`),
  CONSTRAINT `fk_colaborador_sede1` FOREIGN KEY (`sede_idsede`) REFERENCES `sede` (`idsede`),
  CONSTRAINT `fk_colaborador_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`)
)
INSERT INTO `colaborador` VALUES (1,'70435122','diana','curilla','practicante','sistemas','administrativa',0,0),(2,'70422734','freyber','guillen','asistente','sistemas','administrativo',0,0),(3,'70057895','joao','cisneros','asistente','sistemas','administrativo',0,0);


CREATE TABLE `objetivos` (
  `idobjetivos` int NOT NULL,
  `objetivo_personal` varchar(45) DEFAULT NULL,
  `objetivo_plan_de_mejora` varchar(45) DEFAULT NULL,
  `objetivo_laboral` varchar(45) DEFAULT NULL,
  `porcentaje` varchar(45) DEFAULT NULL,
  `fecha_01` varchar(45) DEFAULT NULL,
  `fecha_02` varchar(45) DEFAULT NULL,
  `eva_01` varchar(45) DEFAULT NULL,
  `eva_02` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `puntaje_01` varchar(45) DEFAULT NULL,
  `puntaje_02` varchar(45) DEFAULT NULL,
  `colaborador_idcolaborador` int NOT NULL,
  PRIMARY KEY (`idobjetivos`,`colaborador_idcolaborador`),
  KEY `fk_objetivos_colaborador_idx` (`colaborador_idcolaborador`),
  CONSTRAINT `fk_objetivos_colaborador` FOREIGN KEY (`colaborador_idcolaborador`) REFERENCES `colaborador` (`idcolaborador`)
) 
INSERT INTO `objetivos` VALUES (1,'productividad','mejorar el clima laboral','crear una meta profeisional','5%','10/07/2023','15/07/2023','12','14','activo','14','12',0);



CREATE TABLE `sede` (
  `idsede` int NOT NULL,
  `lugar` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsede`)
)
INSERT INTO `sede` VALUES (1,'alameda'),(2,'jazmines'),(3,'colegio'),(4,'casuarinas');




CREATE TABLE `tipo_acceso` (
  `idtipo_acceso` int NOT NULL,
  `rol` varchar(45) DEFAULT NULL,
  `niveles` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipo_acceso`)
) 
INSERT INTO `tipo_acceso` VALUES (1,'administrador','nivel 1'),(2,'director','nivel 2'),(3,'jefe','nivel 3'),(4,'coordinador','nivel 4'),(5,'analista','nivel 5'),(6,'asistente','nivel 6'),(7,'practicante','nivel 7');






CREATE TABLE `usuario` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `tipo_acceso_idtipo_acceso` int NOT NULL,
  PRIMARY KEY (`idusuario`,`tipo_acceso_idtipo_acceso`),
  KEY `fk_usuario_tipo_acceso1_idx` (`tipo_acceso_idtipo_acceso`),
  CONSTRAINT `fk_usuario_tipo_acceso1` FOREIGN KEY (`tipo_acceso_idtipo_acceso`) REFERENCES `tipo_acceso` (`idtipo_acceso`)
)
INSERT INTO `usuario` VALUES (1,'joao','cisneros','joaocisneros@elp.edu.pe','123',0),(2,'joao',NULL,'admi','admi',0),(3,'diana','curilla','dianacurilla@elp.edu.pe','1234',0),(4,'freyber','guillen','freyberguillen@elp.edu.pe','12345',0);


