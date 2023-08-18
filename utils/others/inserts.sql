-- QUERY ROL ADD
INSERT INTO
    `rol` (`nombre`, `descripcion`)
VALUES
    ('admin', 'Administrador'),
    ('colab', 'Colaborador');

-- QUERY AREA ADD
INSERT INTO
    `area` (`nombre`)
VALUES
    ('Developers'),
    ('Director General'),
    ('Administrativa'),
    ('Académica'),
    ('Investigación'),
    ('Contabilidad'),
    ('Construcción'),
    ('Admisión'),
    ('Secretaría Académica'),
    ('Comunicación'),
    ('Sistemas'),
    ('Calidad Educativa'),
    ('Experiencia del Estudiante'),
    ('Recaudaciones'),
    ('Educación Continua'),
    ('Tesorería'),
    ('RATEC'),
    ('Centro de Idiomas'),
    ('Centro de Información'),
    ('Bienestar'),
    ('Talento Humano'),
    ('Legal'),
    ('Mantenimiento, Seguridad y Limpieza');

-- QUERY USER ADD
INSERT INTO
    `usuario` (`usuario`, `contraseña`, `idrol`)
VALUES
    ('admin', 'admin', 1),
    ('joaocisneros@elp.edu.pe', 'Pontificia2023', 2),
    ('dianacurilla@elp.edu.pe', 'Pontificia2023', 2),
    ('henrysalcedo@elp.edu.pe', 'Pontificia2023', 2),
    ('julioflores@elp.edu.pe', 'Pontificia2023', 2),
    ('adamedina@elp.edu.pe', 'Pontificia2023', 2),
    (
        'albertogutierrez@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    (
        'anacristhinahuaman@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    (
        'anamariacabrera@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('anayelyromero@elp.edu.pe', 'Pontificia2023', 2),
    ('andreamorote@elp.edu.pe', 'Pontificia2023', 2),
    ('andresoblitas@elp.edu.pe', 'Pontificia2023', 2),
    ('angeladiaz@elp.edu.pe', 'Pontificia2023', 2),
    ('angelaquispe@elp.edu.pe', 'Pontificia2023', 2),
    ('anitineo@elp.edu.pe', 'Pontificia2023', 2),
    ('asistentelegal@elp.edu.pe', 'Pontificia2023', 2),
    ('Aylingonzales@elp.edu.pe', 'Pontificia2023', 2),
    ('bettydelacruz@elp.edu.pe', 'Pontificia2023', 2),
    ('bezaibellido@elp.edu.pe', 'Pontificia2023', 2),
    ('carlosataurima@elp.edu.pe', 'Pontificia2023', 2),
    ('carlosayala@elp.edu.pe', 'Pontificia2023', 2),
    ('carmenlainez@elp.edu.pe', 'Pontificia2023', 2),
    (
        'carolinaperalta@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('catyccasani@elp.edu.pe', 'Pontificia2023', 2),
    ('cecilialeandro@elp.edu.pe', 'Pontificia2023', 2),
    ('cesargutierrez@elp.edu.pe', 'Pontificia2023', 2),
    (
        'christianreymundez@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('contabilidad@elp.edu.pe', 'Pontificia2023', 2),
    ('cristinaleche@elp.edu.pe', 'Pontificia2023', 2),
    (
        'davidataupillco@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('deysisalinas@elp.edu.pe', 'Pontificia2023', 2),
    ('edgararones@elp.edu.pe', 'Pontificia2023', 2),
    (
        'elizabethmoises@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('elsasosa@elp.edu.pe', 'Pontificia2023', 2),
    ('elvisconga@elp.edu.pe', 'Pontificia2023', 2),
    ('erikamonteras@elp.edu.pe', 'Pontificia2023', 2),
    (
        'estefanychuchon@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    (
        'evelyngutierrez@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    (
        'felicianoapaico@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('florvilcapoma@elp.edu.pe', 'Pontificia2023', 2),
    ('francoayala@elp.edu.pe', 'Pontificia2023', 2),
    ('franzasto@ilp.edu.pe', 'Pontificia2023', 2),
    ('Freyberguillen@elp.edu.pe', 'Pontificia2023', 2),
    (
        'gianellasaldana@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('gloriaclavo@elp.edu.pe', 'Pontificia2023', 2),
    (
        'guiselagutierrez@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('ivettenicolas@elp.edu.pe', 'Pontificia2023', 2),
    (
        'jackelinemedina@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('jamesquispe@elp.edu.pe', 'Pontificia2023', 2),
    (
        'jammesbaladilla@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('janmcuri@elp.edu.pe', 'Pontificia2023', 2),
    ('jasonflores@elp.edu.pe', 'Pontificia2023', 2),
    ('jersondelacruz@elp.edu.pe', 'Pontificia2023', 2),
    ('jhonymartinez@elp.edu.pe', 'Pontificia2023', 2),
    ('josegaray@elp.edu.pe', 'Pontificia2023', 2),
    ('joseluisvargas@elp.edu.pe', 'Pontificia2023', 2),
    ('josemartinez@elp.edu.pe', 'Pontificia2023', 2),
    ('juanmendez@elp.edu.pe', 'Pontificia2023', 2),
    ('juanmendoza@elp.edu.pe', 'Pontificia2023', 2),
    ('juliaochatoma@elp.edu.pe', 'Pontificia2023', 2),
    ('karinafarfan@elp.edu.pe', 'Pontificia2023', 2),
    ('katherinacosta@elp.edu.pe', 'Pontificia2023', 2),
    (
        'katihuscamedina@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('kendychavez@elp.edu.pe', 'Pontificia2023', 2),
    ('keylagalvez@elp.edu.pe', 'Pontificia2023', 2),
    ('leydivalera@elp.edu.pe', 'Pontificia2023', 2),
    ('lidiacasas@elp.edu.pe', 'Pontificia2023', 2),
    (
        'liduvinacangana@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('lizbarrientos@elp.edu.pe', 'Pontificia2023', 2),
    ('lizieguillen@elp.edu.pe', 'Pontificia2023', 2),
    ('lizjaulis@elp.edu.pe', 'Pontificia2023', 2),
    ('luisbaldeon@elp.edu.pe', 'Pontificia2023', 2),
    ('luisgeraldo@elp.edu.pe', 'Pontificia2023', 2),
    ('luzgutierrez@elp.edu.pe', 'Pontificia2023', 2),
    ('mabilonhuaman@elp.edu.pe', 'Pontificia2023', 2),
    ('manuelapaza@elp.edu.pe', 'Pontificia2023', 2),
    ('manuelgongora@elp.edu.pe', 'Pontificia2023', 2),
    (
        'margaritagutierrez@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('mariaesther@elp.edu.pe', 'Pontificia2023', 2),
    ('maryalfaro@elp.edu.pe', 'Pontificia2023', 2),
    (
        'maximilianolapa@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('melanienarvaez@elp.edu.pe', 'Pontificia2023', 2),
    ('melanihuamani@elp.edu.pe', 'Pontificia2023', 2),
    ('melaniyaranga@elp.edu.pe', 'Pontificia2023', 2),
    ('melinalaura@elp.edu.pe', 'Pontificia2023', 2),
    ('moisesquispe@elp.edu.pe', 'Pontificia2023', 2),
    ('natalyorihuela@elp.edu.pe', 'Pontificia2023', 2),
    ('neysiauqui@elp.edu.pe', 'Pontificia2023', 2),
    ('nicolruiz@elp.edu.pe', 'Pontificia2023', 2),
    ('nikoskanicolas@elp.edu.pe', 'Pontificia2023', 2),
    ('nilgarcia@elp.edu.pe', 'Pontificia2023', 2),
    ('niltonsulca@elp.edu.pe', 'Pontificia2023', 2),
    ('NoevalinaBorda@elp.edu.pe', 'Pontificia2023', 2),
    ('noragonzales@elp.edu.pe', 'Pontificia2023', 2),
    ('raquelochante@elp.edu.pe', 'Pontificia2023', 2),
    ('reyshellramos@elp.edu.pe', 'Pontificia2023', 2),
    ('ricardotaco@elp.edu.pe', 'Pontificia2023', 2),
    ('richardmayta@elp.edu.pe', 'Pontificia2023', 2),
    ('rosatorres@elp.edu.pe', 'Pontificia2023', 2),
    ('rossyloayza@elp.edu.pe', 'Pontificia2023', 2),
    ('rossyyulgo@elp.edu.pe', 'Pontificia2023', 2),
    ('ruthcardenas@elp.edu.pe', 'Pontificia2023', 2),
    ('ruthore@elp.edu.pe', 'Pontificia2023', 2),
    ('ruthperez@elp.edu.pe', 'Pontificia2023', 2),
    ('ruthvalladolid@elp.edu.pe', 'Pontificia2023', 2),
    ('rutmanquispe@elp.edu.pe', 'Pontificia2023', 2),
    ('sandrahuarcaya@elp.edu.pe', 'Pontificia2023', 2),
    ('saraserna@elp.edu.pe', 'Pontificia2023', 2),
    ('sayuriespino@elp.edu.pe', 'Pontificia2023', 2),
    ('sintiatenorio@elp.edu.pe', 'Pontificia2023', 2),
    ('sthefanovega@elp.edu.pe', 'Pontificia2023', 2),
    (
        'suselbarrientos@elp.edu.pe',
        'Pontificia2023',
        2
    ),
    ('thaliabermudo@elp.edu.pe', 'Pontificia2023', 2),
    ('thaliahuaman@elp.edu.pe', 'Pontificia2023', 2),
    ('urpifalco@elp.edu.pe', 'Pontificia2023', 2),
    ('vanesallampasi@elp.edu.pe', 'Pontificia2023', 2),
    ('vickihuaman@elp.edu.pe', 'Pontificia2023', 2),
    ('victorayala@elp.edu.pe', 'Pontificia2023', 2),
    ('wilmeranccasi@elp.edu.pe', 'Pontificia2023', 2),
    ('yansinegamboa@elp.edu.pe', 'Pontificia2023', 2),
    ('yennifercalle@elp.edu.pe', 'Pontificia2023', 2),
    ('yesicameza@elp.edu.pe', 'Pontificia2023', 2),
    ('yoanacardenas@elp.edu.pe', 'Pontificia2023', 2),
    ('yolimarmeses@elp.edu.pe', 'Pontificia2023', 2),
    ('yoninicolas@elp.edu.pe', 'Pontificia2023', 2),
    ('yulyechaccaya@elp.edu.pe', 'Pontificia2023', 2),
    ('yulyfernandez@elp.edu.pe', 'Pontificia2023', 2);

-- QUERY DEPARTAMENT ADD
INSERT INTO
    `departamento` (`nombre`)
VALUES
    ('Developers'),
    ('General'),
    ('Administrativa'),
    ('Academico'),
    ('Investigacion e Innovacion'),
    ('Marketing y Comercial'),
    ('Secretaria Academica'),
    ('Educacion Continua'),
    ('Centro de Idiomas');

-- QUERY POST ADD
INSERT INTO
    `puesto` (`nombre`)
VALUES
    ('Developers'),
    ('Director'),
    ('Asesor'),
    ('Jefe'),
    ('Coordinador'),
    ('Analista'),
    ('Asistente'),
    ('Practicante'),
    ('Operario');

-- QUERY SEDE ADD
INSERT INTO
    `sede` (`lugar`)
VALUES
    ('Developers'),
    ('Alameda'),
    ('Jazmines'),
    ('Casuarinas'),
    ('Colegio');

-- QUERY CARGO ADD
INSERT INTO
    `cargo` (`nombre`)
VALUES
    ('Developers'),
    ('Director general'),
    ('Directora adjunta'),
    ('Director administrativo'),
    ('Director academico'),
    ('Director de investigacion e innovacion'),
    ('Asesor legal'),
    ('Asesor de contabilidad y tributacion'),
    ('Asesor de gestion estrategica'),
    ('Jefe de Infraestructura'),
    ('Jefe de Admision ELP'),
    ('Jefe Secretaria Academica ILP y ELP'),
    ('Jefe de Registro de Grados y Titulos'),
    ('Jefe Academico C. Salud'),
    ('Jefe de Comunicaciones'),
    ('Jefe de Sistemas'),
    ('Jefe Academico C. Gestion y Tecnologia'),
    ('Jefe de Admision ILP'),
    ('Jefe gestion personas'),
    ('Coordinador Academico C. Salud'),
    ('Coordinador Certificaciones'),
    ('Coordinadora de Experiencia del Estudiante'),
    ('Coordinadora Secretaria Academica ILP '),
    ('Coordinador de Comunicacion ILP'),
    ('Coordinador de Contabilidad'),
    ('Coordinador de Recaudacion'),
    ('Coordinador de Calidad Educativa'),
    ('Coordinador de Educacion Continua'),
    ('Coordinadora de Tesoreria'),
    ('Coordinador de Academico C. Gestion y TI'),
    ('Coordinador de Servicios y Demanda'),
    (
        'Coordinador de Comunicaciones: Cybernet, RRPP y Prensa'
    ),
    ('Jefe de Gestion de Personas'),
    ('Coordinador de Comunicaciones ELP'),
    ('Coordinador de cloud, redes y conectividad'),
    (
        'Coordinador de Comunicaciones: Educacion Continua y Centro de Idiomas'
    ),
    ('Coordinador de RATEC'),
    ('Coordinador del Centro de Idiomas'),
    ('Coordinador del Centro de Información'),
    ('Coordinado de Bienestar'),
    ('Coordinador de Talento'),
    ('Analista de Contabilidad'),
    ('Analista de Secretaria Academica del ILP'),
    ('Analista Legal'),
    ('Analista de mesa de ayuda'),
    ('Analista de Calidad Educativa'),
    ('Analista de Diseño y Producción ILP'),
    ('Analista de Experiencia del Estudiante'),
    ('Asistente de Direccion General'),
    (
        'Asistente de Comunicaciones: Educacion Continua y Centro de Idiomas'
    ),
    ('Asistente de Tesoreia'),
    ('Asesor  de Admision ILP'),
    ('Asesor de Admision idiomas'),
    ('Asistente Modulos'),
    ('Asistente Secretaria Academica ILP'),
    ('Asistente de Certificaciones'),
    ('Asistente Administrativo'),
    ('Asistente de Infraestructura'),
    ('Asesor  de Admision ILP Y ELP'),
    ('Asistente de Bienestar'),
    ('Asistente Academico C. Gestion y Tecnologia '),
    ('Asistente Secretaria Academica ELP'),
    ('Asistente de Redes Sociales'),
    ('Asistente de Sistemas'),
    ('Asistente de Seguridad y Camaras'),
    ('Asistente de Experiencia del Estudiante'),
    ('Asistente de Topico '),
    ('Asistente de Registro de Grados y Titulos'),
    ('Asistente de Contabilidad'),
    ('Asistente de Calidad Educativa'),
    ('Asistente Academico C. Salud'),
    ('Asesor de Admision ELP'),
    ('Asesor de Admision Continua'),
    ('Asistente de Recaudacion'),
    ('Practicante de Certificaciones'),
    ('Practicante de mesa de ayuda'),
    ('Practicante Secretaria Academica ILP'),
    ('Practicante de Comunicaciones'),
    ('Practicante de Experiencia del Estudiante'),
    ('Mentor'),
    ('Operario de Logistica'),
    ('Operario de Seguridad'),
    ('Operario de Limpieza');

-- QUERY COLABORDAROR ADD
INSERT INTO
    `colaborador` (
        `dni`,
        `nombres`,
        `apellidos`,
        `idusuario`,
        `idcargo`,
        `idsede`,
        `idpuesto`,
        `idarea`,
        `iddepartamento`,
        `idsupervisor`
    )
VALUES
    (
        '99999999',
        'Usuario',
        'admin',
        1,
        1,
        1,
        1,
        1,
        1,
        1
    );