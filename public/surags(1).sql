-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-01-2016 a las 16:02:41
-- Versión del servidor: 5.5.46
-- Versión de PHP: 5.6.14-0+deb8u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `surags`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexos`
--

CREATE TABLE IF NOT EXISTS `anexos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `anexos`
--

INSERT INTO `anexos` (`id`, `nombre`, `descripcion`, `estatus`) VALUES
(1, 'CEDULA', NULL, 1),
(2, 'CARTA DE SOLICITUD  ', '', 1),
(3, 'CERTIFICADO DE DISCAPACIDAD', NULL, 1),
(4, 'PARTIDA DE NACIMIENTO', NULL, 1),
(5, 'INFORME MEDICO', NULL, 1),
(6, 'PRESUPUESTO ORIGINAL', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexos_solicitud`
--

CREATE TABLE IF NOT EXISTS `anexos_solicitud` (
  `id_anexo` int(11) NOT NULL,
  `id_solicitud` int(11) NOT NULL,
  `URL` int(11) NOT NULL,
  KEY `id_anexo` (`id_anexo`),
  KEY `id_solicitud` (`id_solicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario_discapacidad`
--

CREATE TABLE IF NOT EXISTS `beneficiario_discapacidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificado_discp` varchar(150) DEFAULT NULL,
  `ayuda_tecnica` tinyint(1) NOT NULL,
  `id_discapacidad` int(11) NOT NULL,
  `id_gdiscapacidad` int(11) NOT NULL,
  `id_beneficiario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_discapacidad` (`id_discapacidad`),
  KEY `id_gdiscapacidad` (`id_gdiscapacidad`),
  KEY `id_beneficiario` (`id_beneficiario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `beneficiario_discapacidad`
--

INSERT INTO `beneficiario_discapacidad` (`id`, `certificado_discp`, `ayuda_tecnica`, `id_discapacidad`, `id_gdiscapacidad`, `id_beneficiario`) VALUES
(7, 'N1N1', 0, 6, 1, 43);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `observacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `nombre`, `observacion`) VALUES
(1, '(BI) BACHILLER I', NULL),
(2, '(BII) BACHILLER II', NULL),
(3, '(BIII) BACHILLER III', NULL),
(4, '(P2) MEDICO ESPECIALISTA II 4 HM', NULL),
(5, '(PI) PROFESIONAL I', NULL),
(6, '(PII) PROFESIONAL II', NULL),
(7, '(PIII) PROFESIONAL III', NULL),
(8, '(TI) TECNICO I', NULL),
(9, '(TII) TECNICO II', NULL),
(10, 'ACTOR I', NULL),
(11, 'ACTRIZ I', NULL),
(12, 'ACTRIZ II', NULL),
(13, 'APOYO ADMINISTRATIVO', NULL),
(14, 'APOYO COMUNAL', NULL),
(15, 'APOYO PROFESIONAL', NULL),
(16, 'APOYO PROFESIONAL (E)', NULL),
(17, 'APOYO PROFESIONAL III', NULL),
(18, 'APOYO TECNICO', NULL),
(19, 'APOYO TECNICO (E)', NULL),
(20, 'ARTICULADOR PARROQUIAL', NULL),
(21, 'ASEADOR', NULL),
(22, 'ASIGNACION TEMPORAL', NULL),
(23, 'ASISTENTE DE PRODUCCION', NULL),
(24, 'ASISTENTE EJECUTIVO', NULL),
(25, 'ASISTENTE EJECUTIVO (E)', NULL),
(26, 'AUDITOR INTERNO (E)', NULL),
(27, 'AUXILIAR DE ENFERMERIA', NULL),
(28, 'AUXILIAR DE SERVICIOS DE OFICINA', NULL),
(29, 'AYUDANTE DE SERVICIOS GENERALES', NULL),
(30, 'AYUDANTE SERVICIOS COCINA', NULL),
(31, 'BRIGADISTA', NULL),
(32, 'CAMARERA', NULL),
(33, 'CAMARERO', NULL),
(34, 'CHOFER', NULL),
(35, 'COCINERA (O)', NULL),
(36, 'CONSULTOR JURIDICO (E)', NULL),
(37, 'CONTRATADO', NULL),
(38, 'COORD.APOYO CONT.ALT.NIV', NULL),
(39, 'COORD.ATE.INTEG.PER.DISC', NULL),
(40, 'COORD.ATENCION DOTAC.PER', NULL),
(41, 'COORD.PROMOC.DIFUS.SAB.', NULL),
(42, 'COORDIDADOR CIRCUITO 3', NULL),
(43, 'COORDINADOR', NULL),
(44, 'COORDINADOR (E)', NULL),
(45, 'COORDINADOR CIRCUITO 1', NULL),
(46, 'COORDINADOR DE REFUGIOS', NULL),
(47, 'COORDINADOR INVESTIGACION', NULL),
(48, 'COORDINADOR(A) EJE 3', NULL),
(49, 'DISENADOR GRAFICO', NULL),
(50, 'ESPEC.IMAGEN PUBLICIDAD', NULL),
(51, 'ESPECIALISTA', NULL),
(52, 'ESPECIALISTA (E)', NULL),
(53, 'ESPECIALISTA EN DIRECCION DE ACTORES', NULL),
(54, 'GUIA TURISTICA', NULL),
(55, 'JEFE DE GOBIERNO', NULL),
(56, 'JEFE DE OFICINA', NULL),
(57, 'JEFE DE OFICINA (E)', NULL),
(58, 'JEFE DE UNIDAD II', NULL),
(59, 'JEFE OFIC.PLANIF.SOC.TER', NULL),
(60, 'LAVANDERA', NULL),
(61, 'LAVANDERO', NULL),
(62, 'MENSAJERO', NULL),
(63, 'MENSAJERO MOTORIZADO', NULL),
(64, 'OPERADOR DE SONIDO', NULL),
(65, 'PRODUCTOR GRAFICO', NULL),
(66, 'PRODUCTORA', NULL),
(67, 'RESP.CUSTODIA I (E)', NULL),
(68, 'RESPONSABLE CUSTODIA I', NULL),
(69, 'RESPONSABLE SERV.COCINA', NULL),
(70, 'SECRETARIO DE GOBIERNO (E)', NULL),
(71, 'SUBSECRETARIO', NULL),
(72, 'SUBSECRETARIO (E)', NULL),
(73, 'SUPERVISOR DE SERVICIOS ESPECIALIZADOS', NULL),
(74, 'TESORERO (E)', NULL),
(75, 'VIGILANTE', NULL),
(76, 'PRESIDENTE', NULL),
(77, 'SECRETARIO', NULL),
(78, 'SUPERINTENDETE', NULL),
(79, 'COMANDANTE GENERAL', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_comercial`
--

CREATE TABLE IF NOT EXISTS `casa_comercial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `id_tinstitucion` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idtinstitucion` (`id_tinstitucion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `casa_comercial`
--

INSERT INTO `casa_comercial` (`id`, `nombre`, `id_tinstitucion`) VALUES
(1, 'A.C ASOCIADOS CARDIOQUIRURGICOS.', 2),
(2, 'A.C CLINICA DISPENSARIO PADRE MACHADO', 2),
(3, 'A.C.CENTRO MEDICO DOCENTE LA TRINIDAD', 2),
(4, 'ASOCIACION  CIVIL CLINICA POPULAR ROSA MISTICA', 2),
(5, 'C.A. CENTRO MEDICO DE  CARACAS', 2),
(6, 'CENTRO  DIAGNOSTICO DOCENTE LAS MERCEDES, C.A', 2),
(7, 'CENTRO CLINICO DE ESTEREOTAXIA CECLINES C.A', 2),
(8, 'CENTRO MEDICO LOIRA, C.A', 2),
(9, 'CENTRO ORTOPEDICO PODOLOGICO C.O.P., C.A.', 2),
(10, 'CLINICA ALFREDO HERRERA LYNCH Y ASOCIADOS A.C', 2),
(11, 'CLINICA EL AVILA, C.A.', 2),
(12, 'CLINICA SANATRIX, C.A.', 2),
(13, 'CLINICA VISTA ALEGRE , C.A.', 2),
(14, 'COMERCIAL CIENTIFICA, C.A.', 2),
(15, 'CORPORACION MEDIFIX CA', 2),
(16, 'DIAGNOIMAGEN CENTRO CARACAS, C.A', 2),
(17, 'EQUIPOS FONOAUDIOLOGICOS CARABOBO, C.A.', 2),
(18, 'FARMA EXPRESS LA PAZ 2020, C.A', 2),
(19, 'FARMACIA 9 ENE, C.A', 2),
(20, 'FARMACIA FLOR ORIENTAL, C.A.', 2),
(21, 'FARMACIA NORAM, C.A', 2),
(22, 'FARMACIA VERAMED, C.A.', 2),
(23, 'FUNDACION HOSPITAL ORTOPEDICO INFANTIL', 2),
(24, 'FUNDAFARMACIA.', 2),
(25, 'GTG MEDICAL SERVICES, C.A', 2),
(26, 'HOSPITAL DE CLINICAS CARACAS, C.A', 2),
(27, 'HOSPITAL PEDIATRICO SAN JUAN DE DIOS', 2),
(28, 'INNOVACION DE SERVICIOS MEDICOS (INSERME,C.A.)', 2),
(29, 'INSTITUTO AUDITIVO WIDEX, C.A', 2),
(30, 'INSTITUTO DE OTORRINOLARINGOLOGIA C.A', 2),
(31, 'INVERSIONES PROMEDCA, C.A.', 2),
(32, 'OPTICA CARONI, C.A.', 2),
(33, 'SERVICIOS CLINICOS SANTA MONICA C.A', 2),
(34, 'SERVICIOS DE RADIOTERAPIA LA TRINIDAD, C.A.', 2),
(35, 'SERVICIOS ONCORAD, C.A', 2),
(36, 'UNIDAD DE CIRUGIA ENDOSCOPICA  CARACAS C.A', 2),
(37, 'UNIDAD DE PROTESIS ANTELO ROMERO, C. A.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comites`
--

CREATE TABLE IF NOT EXISTS `comites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `comites`
--

INSERT INTO `comites` (`id`, `nombre`, `estatus`) VALUES
(1, 'COMITE DE SALUD', 1),
(2, 'COMITE DE TIERRA URBANA', 1),
(3, 'COMITE DE VIVIENDA Y HABITAT', 1),
(4, 'COMITE DE ECONOMIA COMUNAL', 1),
(5, 'COMITE DE SEGURIDAD Y DEFENSA INTEGRAL', 1),
(6, 'COMITE DE MEDIOS ALTERNATIVOS COMUNITARIOS', 1),
(7, 'COMITE DE RECREACION Y DEPORTES', 1),
(8, 'COMITE DE ALIMENTACION Y DEFENSA DEL CONSUMIDOR', 1),
(9, 'COMITE DE MESA TECNICA DE AGUA', 1),
(10, 'COMITE DE MESA TECNICA DE ENERGIA Y GAS', 1),
(11, 'COMITE DE PROTECCION SOCIAL DE NIÑOS, NIÑAS Y ADOLESCENTES', 1),
(12, 'COMITE COMUNITARIO DE PERSONAS CON DISCAPACIDAD', 1),
(13, 'COMITE DE EDUCACION, CULTURA Y FORMACION CIUDADANA', 1),
(14, 'COMITE DE FAMILIA E IGUALDAD DE GENERO', 1),
(15, 'OTROS COMITES', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta_ingreso`
--

CREATE TABLE IF NOT EXISTS `consulta_ingreso` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  `puntos` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `consulta_ingreso`
--

INSERT INTO `consulta_ingreso` (`id`, `nombre`, `estatus`, `puntos`) VALUES
(1, 'FORTUNA HEREDADADA O ADQUIRIDA', 1, 1),
(2, 'GANANCIAS O BENEFICIOS, HONORARIOS PROFESIONALES', 1, 2),
(3, 'SUELDO MENSUAL', 1, 3),
(4, 'SALARIO SEMANAL , POR DIA, ENTRADA A DESTAJO', 1, 4),
(5, 'DONACIONES DE ORIGEN PUBLICO O PRIVADO, PENSIONES, JUBILACIONES', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinacion`
--

CREATE TABLE IF NOT EXISTS `coordinacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `abreviacion` varchar(45) NOT NULL,
  `idsubsecretaria` int(11) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_coordinacion_1` (`idsubsecretaria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `coordinacion`
--

INSERT INTO `coordinacion` (`id`, `nombre`, `abreviacion`, `idsubsecretaria`, `estatus`) VALUES
(1, 'COORDINACION DE ATENCION A PERSONAS CON ALGUN TIPO DE DISCAPACIDAD', 'CAPAD', 1, 1),
(2, 'COORDINACION DE PERSONAS EN SITUACION DE CALLE', 'CPSC', 1, 1),
(3, 'COORDINACION DE ATENCION Y DONACIONES A PERSONAS', 'CADP', 1, 1),
(4, 'COORDINACION DE ATENCION INTEGRAL A LA ADULTA Y ADULTO MAYOR', 'CAIAAM', 2, 0),
(5, 'COORDINACION DE ATENCION INTEGRAL A LA JUVENTUD', 'CAIJ', 2, 0),
(6, 'COORDINACION DE ATENCION INTEGRAL A LA MUJER', 'CAIM', 2, 0),
(7, 'PRUEBA ROBERT', 'ROBBEN', 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidad`
--

CREATE TABLE IF NOT EXISTS `discapacidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `discapacidad`
--

INSERT INTO `discapacidad` (`id`, `nombre`, `descripcion`, `estatus`) VALUES
(1, 'MENTAL (INTELECTUAL)', 'MENTAL (INTELECTUAL)', 0),
(2, 'MENTAL (PSICOSOCIAL)', 'MENTAL (PSICOSOCIAL)', 1),
(3, 'VISUAL', 'VISUAL', 1),
(4, 'AUDITIVA', 'AUDITIVAS', 1),
(5, 'SENSITIVA', 'SENSITIVA', 1),
(6, 'VOZ Y HABLA', 'VOZ Y HABLA', 1),
(7, 'CARDIORESPIRATORIA', 'CARDIORESPIRATORIA', 1),
(8, 'GENITOUNIRARIA', 'GENITOUNIRARIA', 1),
(9, 'NEUROLOGICA', 'NEUROLOGICA', 1),
(10, 'MUSCULOESQUELETICA', 'MUSCULOESQUELETICA', 1),
(11, 'MULTIPLE', 'MULTIPLE', 1),
(12, 'NINGUNA', 'NINGUNA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidad_beneficiario`
--

CREATE TABLE IF NOT EXISTS `discapacidad_beneficiario` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `certificado_discapcidad` varchar(250) NOT NULL,
  `ayuda_tecnica` tinyint(1) NOT NULL,
  `id_discapacidad` int(11) NOT NULL,
  `id_gradoDiscap` int(11) NOT NULL,
  `id_beneficiario` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edo_civil`
--

CREATE TABLE IF NOT EXISTS `edo_civil` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(150) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `edo_civil`
--

INSERT INTO `edo_civil` (`id`, `descripcion`) VALUES
(0, 'DIVORCIADO'),
(1, 'SOLTERO'),
(2, 'CASADO'),
(3, 'VIUDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egreso_grupo`
--

CREATE TABLE IF NOT EXISTS `egreso_grupo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_solicitud` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `cantidad` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `egreso_grupo`
--

INSERT INTO `egreso_grupo` (`id`, `id_solicitud`, `nombre`, `cantidad`) VALUES
(9, 10, 'ALIMENTACION', 50),
(10, 10, 'SERVICIOS PUBLICOS', 40),
(13, 10, 'AGUA', 10),
(14, 13, 'ALIMENTACION', 10000),
(15, 13, 'SERVICIOS PUBLICOS', 3000),
(16, 13, 'TELEFONO', 150),
(17, 13, 'GAS', 100),
(18, 13, 'AGUA', 200),
(19, 13, 'SALUD', 4500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacios_vivienda`
--

CREATE TABLE IF NOT EXISTS `espacios_vivienda` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `estatus` tinyint(4) NOT NULL DEFAULT '1',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `espacios_vivienda`
--

INSERT INTO `espacios_vivienda` (`id`, `nombre`, `estatus`) VALUES
(1, 'COCINA', 1),
(2, 'SALA', 1),
(3, 'DORMITORIOS', 1),
(4, 'BAÑO', 1),
(5, 'LAVADERO', 1),
(6, 'ESTACIONAMIENTO', 1),
(7, 'TERRAZA \n', 1),
(16, 'JARDIN', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Estado',
  `nombre` varchar(100) NOT NULL COMMENT 'Indica el nombre del estado almacenado',
  `pais_id` int(11) NOT NULL COMMENT 'Campo que relaciona el estado con el pais',
  PRIMARY KEY (`id`),
  KEY `fk_estado_pais` (`pais_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Entidad que contiene informacion sobre estados. ' AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nombre`, `pais_id`) VALUES
(1, 'DTTO. CAPITAL', 1),
(2, 'ANZOATEGUI', 1),
(3, 'APURE', 1),
(4, 'ARAGUA', 1),
(5, 'BARINAS', 1),
(6, 'BOLIVAR', 1),
(7, 'CARABOBO', 1),
(8, 'COJEDES', 1),
(9, 'FALCON', 1),
(10, 'GUARICO', 1),
(11, 'LARA', 1),
(12, 'MERIDA', 1),
(13, 'MIRANDA', 1),
(14, 'MONAGAS', 1),
(15, 'NUEVA ESPARTA', 1),
(16, 'PORTUGUESA', 1),
(17, 'SUCRE', 1),
(18, 'TACHIRA', 1),
(19, 'TRUJILLO', 1),
(20, 'YARACUY', 1),
(21, 'ZULIA', 1),
(22, 'AMAZONAS', 1),
(23, 'DELTA AMACURO', 1),
(24, 'VARGAS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE IF NOT EXISTS `estatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`id`, `descripcion`) VALUES
(1, 'PROCESADO'),
(2, 'VERIFICADO'),
(3, 'APROBADO'),
(4, 'RECHAZADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_discapacidad`
--

CREATE TABLE IF NOT EXISTS `grado_discapacidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `grado_discapacidad`
--

INSERT INTO `grado_discapacidad` (`id`, `nombre`, `descripcion`, `estatus`) VALUES
(1, 'LEVE (1)', 'LEVE (1)', 1),
(2, 'MODERADO (2)', 'MODERADO (2)', 1),
(3, 'SEVERO (3)', 'SEVERO (3)', 1),
(4, 'GRAVE (4)', 'GRAVE (4)', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos_grupo`
--

CREATE TABLE IF NOT EXISTS `ingresos_grupo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_solicitud` int(11) NOT NULL,
  `nombre_apellido` varchar(250) NOT NULL,
  `edad` int(11) NOT NULL,
  `id_parentesco` int(11) NOT NULL,
  `id_ocupacion` int(11) NOT NULL,
  `id_nivel_instr` int(11) NOT NULL,
  `id_ingresos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `jefe_familia` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='CONFORMACION DEL GRUPO FAMILIAR (INGRESOS)' AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `ingresos_grupo`
--

INSERT INTO `ingresos_grupo` (`id`, `id_solicitud`, `nombre_apellido`, `edad`, `id_parentesco`, `id_ocupacion`, `id_nivel_instr`, `id_ingresos`, `cantidad`, `jefe_familia`) VALUES
(1, 10, 'SIXTO REIM', 55, 4, 2, 4, 3, 5000, 0),
(2, 10, 'ROBERT DE ABREU', 26, 12, 1, 1, 3, 5000, 0),
(3, 10, 'FRAN LUNA', 1, 5, 3, 3, 2, 8000, 1),
(4, 10, 'ROMELIA COLMENARES', 55, 4, 2, 4, 3, 5000, 0),
(5, 11, 'GABRIELA ZAPATA', 25, 12, 1, 1, 3, 21000, 0),
(6, 11, 'PEDRO ZAPATA', 45, 5, 3, 1, 3, 50000, 1),
(7, 11, 'LUISA  DE ZAPATA', 38, 4, 2, 4, 3, 10000, 0),
(8, 12, 'HECTOR CUENCA', 118, 12, 10, 3, 1, 100000, 0),
(9, 12, 'LUIS MIJARES', 85, 5, 3, 1, 3, 50000, 1),
(10, 12, 'PAULA GARMIN', 100, 4, 2, 1, 5, 40000, 0),
(11, 13, 'TRINO PERAZA', 69, 12, 8, 1, 3, 20000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `misiones`
--

CREATE TABLE IF NOT EXISTS `misiones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `misiones`
--

INSERT INTO `misiones` (`id`, `nombre`, `estatus`) VALUES
(1, 'MISION ROBINSON', 1),
(2, 'MISION SUCRE', 1),
(3, 'MISION RIBAS', 1),
(4, 'MISION CULTURA', 1),
(5, 'MISION BARRIO ADENTRO ', 1),
(6, 'GRAN MISION SABER Y TRABAJO', 1),
(7, 'MISION JOSÉ GREGORIO HERNANDEZ', 1),
(8, 'MISION MILAGRO', 1),
(9, 'MISION NEGRA HIPOLITA', 1),
(10, 'MISION JOVENES DE LA PATRIA', 1),
(11, 'MISION ARBOL', 1),
(12, 'MISION CHE GUEVARA', 1),
(13, 'MISION ALIMENTACIOtruncN', 1),
(14, 'GRAN MISION A TODA VIDA VENEZUELA', 1),
(15, 'GRAN MISION AGROVENEZUELA', 1),
(16, 'MISION SONRISA', 1),
(17, 'MISION GUAICAIPURO', 1),
(18, 'MISION CIENCIA', 1),
(19, 'MISION PIAR', 1),
(20, 'MISION IDENTIDAD', 1),
(21, 'MISION REVOLUCION ENERGÃ‰TICA', 1),
(22, 'GRAN MISION VIVIENDA', 1),
(23, 'GRAN MISION AMOR MAYOR', 1),
(24, 'GRAN MISION HOGARES DE LA PATRIA', 1),
(25, 'OTRAS MISIONES', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de Munucipio',
  `nombre` varchar(100) NOT NULL,
  `estado_id` int(11) NOT NULL COMMENT 'Identificador del estado al que pertenece la parroquia',
  PRIMARY KEY (`id`),
  KEY `fk_municipio_estado1` (`estado_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Entidad que contiene la informacion de municipios. ' AUTO_INCREMENT=336 ;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre`, `estado_id`) VALUES
(1, 'LIBERTADOR', 1),
(2, 'ANACO', 2),
(3, 'ARAGUA', 2),
(4, 'BOLIVAR', 2),
(5, 'BRUZUAL', 2),
(6, 'CAJIGAL', 2),
(7, 'FREITES', 2),
(8, 'INDEPENDENCIA', 2),
(9, 'LIBERTAD', 2),
(10, 'MIRANDA', 2),
(11, 'MONAGAS', 2),
(12, 'PEÑALVER', 2),
(13, 'SIMON RODRIGUEZ', 2),
(14, 'SOTILLO', 2),
(15, 'GUANIPA', 2),
(16, 'GUANTA', 2),
(17, 'PIRITU', 2),
(18, 'M.L/DIEGO BAUTISTA U', 2),
(19, 'CARVAJAL', 2),
(20, 'SANTA ANA', 2),
(21, 'MC GREGOR', 2),
(22, 'S JUAN CAPISTRANO', 2),
(23, 'ACHAGUAS', 3),
(24, 'MUÑOZ', 3),
(25, 'PAEZ', 3),
(26, 'PEDRO CAMEJO', 3),
(27, 'ROMULO GALLEGOS', 3),
(28, 'SAN FERNANDO', 3),
(29, 'BIRUACA', 3),
(30, 'GIRARDOT', 4),
(31, 'SANTIAGO MARIÑO', 4),
(32, 'JOSE FELIX RIVAS', 4),
(33, 'SAN CASIMIRO', 4),
(34, 'SAN SEBASTIAN', 4),
(35, 'SUCRE', 4),
(36, 'URDANETA', 4),
(37, 'ZAMORA', 4),
(38, 'LIBERTADOR', 4),
(39, 'JOSE ANGEL LAMAS', 4),
(40, 'BOLIVAR', 4),
(41, 'SANTOS MICHELENA', 4),
(42, 'MARIO B IRAGORRY', 4),
(43, 'TOVAR', 4),
(44, 'CAMATAGUA', 4),
(45, 'JOSE R REVENGA', 4),
(46, 'FRANCISCO LINARES A.', 4),
(47, 'M.OCUMARE D LA COSTA', 4),
(48, 'ARISMENDI', 5),
(49, 'BARINAS', 5),
(50, 'BOLIVAR', 5),
(51, 'EZEQUIEL ZAMORA', 5),
(52, 'OBISPOS', 5),
(53, 'PEDRAZA', 5),
(54, 'ROJAS', 5),
(55, 'SOSA', 5),
(56, 'ALBERTO ARVELO T', 5),
(57, 'A JOSE DE SUCRE', 5),
(58, 'CRUZ PAREDES', 5),
(59, 'ANDRES E. BLANCO', 5),
(60, 'CARONI', 6),
(61, 'CEDEÑO', 6),
(62, 'HERES', 6),
(63, 'PIAR', 6),
(64, 'ROSCIO', 6),
(65, 'SUCRE', 6),
(66, 'SIFONTES', 6),
(67, 'RAUL LEONI', 6),
(68, 'GRAN SABANA', 6),
(69, 'EL CALLAO', 6),
(70, 'PADRE PEDRO CHIEN', 6),
(71, 'BEJUMA', 7),
(72, 'CARLOS ARVELO', 7),
(73, 'DIEGO IBARRA', 7),
(74, 'GUACARA', 7),
(75, 'MONTALBAN', 7),
(76, 'JUAN JOSE MORA', 7),
(77, 'PUERTO CABELLO', 7),
(78, 'SAN JOAQUIN', 7),
(79, 'VALENCIA', 7),
(80, 'MIRANDA', 7),
(81, 'LOS GUAYOS', 7),
(82, 'NAGUANAGUA', 7),
(83, 'SAN DIEGO', 7),
(84, 'LIBERTADOR', 7),
(85, 'ANZOATEGUI', 8),
(86, 'FALCON', 8),
(87, 'GIRARDOT', 8),
(88, 'MP PAO SN J BAUTISTA', 8),
(89, 'RICAURTE', 8),
(90, 'SAN CARLOS', 8),
(91, 'TINACO', 8),
(92, 'LIMA BLANCO', 8),
(93, 'ROMULO GALLEGOS', 8),
(94, 'ACOSTA', 9),
(95, 'BOLIVAR', 9),
(96, 'BUCHIVACOA', 9),
(97, 'CARIRUBANA', 9),
(98, 'COLINA', 9),
(99, 'DEMOCRACIA', 9),
(100, 'FALCON', 9),
(101, 'FEDERACION', 9),
(102, 'MAUROA', 9),
(103, 'MIRANDA', 9),
(104, 'PETIT', 9),
(105, 'SILVA', 9),
(106, 'ZAMORA', 9),
(107, 'DABAJURO', 9),
(108, 'MONS. ITURRIZA', 9),
(109, 'LOS TAQUES', 9),
(110, 'PIRITU', 9),
(111, 'UNION', 9),
(112, 'SAN FRANCISCO', 9),
(113, 'JACURA', 9),
(114, 'CACIQUE MANAURE', 9),
(115, 'PALMA SOLA', 9),
(116, 'SUCRE', 9),
(117, 'URUMACO', 9),
(118, 'TOCOPERO', 9),
(119, 'INFANTE', 10),
(120, 'MELLADO', 10),
(121, 'MIRANDA', 10),
(122, 'MONAGAS', 10),
(123, 'RIBAS', 10),
(124, 'ROSCIO', 10),
(125, 'ZARAZA', 10),
(126, 'CAMAGUAN', 10),
(127, 'S JOSE DE GUARIBE', 10),
(128, 'LAS MERCEDES', 10),
(129, 'EL SOCORRO', 10),
(130, 'ORTIZ', 10),
(131, 'S MARIA DE IPIRE', 10),
(132, 'CHAGUARAMAS', 10),
(133, 'SAN GERONIMO DE G', 10),
(134, 'CRESPO', 11),
(135, 'IRIBARREN', 11),
(136, 'JIMENEZ', 11),
(137, 'MORAN', 11),
(138, 'PALAVECINO', 11),
(139, 'TORRES', 11),
(140, 'URDANETA', 11),
(141, 'ANDRES E BLANCO', 11),
(142, 'SIMON PLANAS', 11),
(143, 'ALBERTO ADRIANI', 12),
(144, 'ANDRES BELLO', 12),
(145, 'ARZOBISPO CHACON', 12),
(146, 'CAMPO ELIAS', 12),
(147, 'GUARAQUE', 12),
(148, 'JULIO CESAR SALAS', 12),
(149, 'JUSTO BRICEÑO', 12),
(150, 'LIBERTADOR', 12),
(151, 'SANTOS MARQUINA', 12),
(152, 'MIRANDA', 12),
(153, 'ANTONIO PINTO S.', 12),
(154, 'OB. RAMOS DE LORA', 12),
(155, 'CARACCIOLO PARRA', 12),
(156, 'CARDENAL QUINTERO', 12),
(157, 'PUEBLO LLANO', 12),
(158, 'RANGEL', 12),
(159, 'RIVAS DAVILA', 12),
(160, 'SUCRE', 12),
(161, 'TOVAR', 12),
(162, 'TULIO F CORDERO', 12),
(163, 'PADRE NOGUERA', 12),
(164, 'ARICAGUA', 12),
(165, 'ZEA', 12),
(166, 'ACEVEDO', 13),
(167, 'BRION', 13),
(168, 'GUAICAIPURO', 13),
(169, 'INDEPENDENCIA', 13),
(170, 'LANDER', 13),
(171, 'PAEZ', 13),
(172, 'PAZ CASTILLO', 13),
(173, 'PLAZA', 13),
(174, 'SUCRE', 13),
(175, 'URDANETA', 13),
(176, 'ZAMORA', 13),
(177, 'CRISTOBAL ROJAS', 13),
(178, 'LOS SALIAS', 13),
(179, 'ANDRES BELLO', 13),
(180, 'SIMON BOLIVAR', 13),
(181, 'BARUTA', 13),
(182, 'CARRIZAL', 13),
(183, 'CHACAO', 13),
(184, 'EL HATILLO', 13),
(185, 'BUROZ', 13),
(186, 'PEDRO GUAL', 13),
(187, 'ACOSTA', 14),
(188, 'BOLIVAR', 14),
(189, 'CARIPE', 14),
(190, 'CEDEÑO', 14),
(191, 'EZEQUIEL ZAMORA', 14),
(192, 'LIBERTADOR', 14),
(193, 'MATURIN', 14),
(194, 'PIAR', 14),
(195, 'PUNCERES', 14),
(196, 'SOTILLO', 14),
(197, 'AGUASAY', 14),
(198, 'SANTA BARBARA', 14),
(199, 'URACOA', 14),
(200, 'ARISMENDI', 15),
(201, 'DIAZ', 15),
(202, 'GOMEZ', 15),
(203, 'MANEIRO', 15),
(204, 'MARCANO', 15),
(205, 'MARIÑO', 15),
(206, 'PENIN. DE MACANAO', 15),
(207, 'VILLALBA(I.COCHE)', 15),
(208, 'TUBORES', 15),
(209, 'ANTOLIN DEL CAMPO', 15),
(210, 'GARCIA', 15),
(211, 'ARAURE', 16),
(212, 'ESTELLER', 16),
(213, 'GUANARE', 16),
(214, 'GUANARITO', 16),
(215, 'OSPINO', 16),
(216, 'PAEZ', 16),
(217, 'SUCRE', 16),
(218, 'TUREN', 16),
(219, 'M.JOSE V DE UNDA', 16),
(220, 'AGUA BLANCA', 16),
(221, 'PAPELON', 16),
(222, 'GENARO BOCONOITO', 16),
(223, 'S RAFAEL DE ONOTO', 16),
(224, 'SANTA ROSALIA', 16),
(225, 'ARISMENDI', 17),
(226, 'BENITEZ', 17),
(227, 'BERMUDEZ', 17),
(228, 'CAJIGAL', 17),
(229, 'MARIÑO', 17),
(230, 'MEJIA', 17),
(231, 'MONTES', 17),
(232, 'RIBERO', 17),
(233, 'SUCRE', 17),
(234, 'VALDEZ', 17),
(235, 'ANDRES E BLANCO', 17),
(236, 'LIBERTADOR', 17),
(237, 'ANDRES MATA', 17),
(238, 'BOLIVAR', 17),
(239, 'CRUZ S ACOSTA', 17),
(240, 'AYACUCHO', 18),
(241, 'BOLIVAR', 18),
(242, 'INDEPENDENCIA', 18),
(243, 'CARDENAS', 18),
(244, 'JAUREGUI', 18),
(245, 'JUNIN', 18),
(246, 'LOBATERA', 18),
(247, 'SAN CRISTOBAL', 18),
(248, 'URIBANTE', 18),
(249, 'CORDOBA', 18),
(250, 'GARCIA DE HEVIA', 18),
(251, 'GUASIMOS', 18),
(252, 'MICHELENA', 18),
(253, 'LIBERTADOR', 18),
(254, 'PANAMERICANO', 18),
(255, 'PEDRO MARIA UREÑA', 18),
(256, 'SUCRE', 18),
(257, 'ANDRES BELLO', 18),
(258, 'FERNANDEZ FEO', 18),
(259, 'LIBERTAD', 18),
(260, 'SAMUEL MALDONADO', 18),
(261, 'SEBORUCO', 18),
(262, 'ANTONIO ROMULO C', 18),
(263, 'FCO DE MIRANDA', 18),
(264, 'JOSE MARIA VARGA', 18),
(265, 'RAFAEL URDANETA', 18),
(266, 'SIMON RODRIGUEZ', 18),
(267, 'TORBES', 18),
(268, 'SAN JUDAS TADEO', 18),
(269, 'RAFAEL RANGEL', 19),
(270, 'BOCONO', 19),
(271, 'CARACHE', 19),
(272, 'ESCUQUE', 19),
(273, 'TRUJILLO', 19),
(274, 'URDANETA', 19),
(275, 'VALERA', 19),
(276, 'CANDELARIA', 19),
(277, 'MIRANDA', 19),
(278, 'MONTE CARMELO', 19),
(279, 'MOTATAN', 19),
(280, 'PAMPAN', 19),
(281, 'S RAFAEL CARVAJAL', 19),
(282, 'SUCRE', 19),
(283, 'ANDRES BELLO', 19),
(284, 'BOLIVAR', 19),
(285, 'JOSE F M CAÑIZAL', 19),
(286, 'JUAN V CAMPO ELI', 19),
(287, 'LA CEIBA', 19),
(288, 'PAMPANITO', 19),
(289, 'BOLIVAR', 20),
(290, 'BRUZUAL', 20),
(291, 'NIRGUA', 20),
(292, 'SAN FELIPE', 20),
(293, 'SUCRE', 20),
(294, 'URACHICHE', 20),
(295, 'PEÑA', 20),
(296, 'JOSE ANTONIO PAEZ', 20),
(297, 'LA TRINIDAD', 20),
(298, 'COCOROTE', 20),
(299, 'INDEPENDENCIA', 20),
(300, 'ARISTIDES BASTID', 20),
(301, 'MANUEL MONGE', 20),
(302, 'VEROES', 20),
(303, 'BARALT', 21),
(304, 'SANTA RITA', 21),
(305, 'COLON', 21),
(306, 'MARA', 21),
(307, 'MARACAIBO', 21),
(308, 'MIRANDA', 21),
(309, 'PAEZ', 21),
(310, 'MACHIQUES DE P', 21),
(311, 'SUCRE', 21),
(312, 'LA CAÑADA DE U.', 21),
(313, 'LAGUNILLAS', 21),
(314, 'CATATUMBO', 21),
(315, 'M/ROSARIO DE PERIJA', 21),
(316, 'CABIMAS', 21),
(317, 'VALMORE RODRIGUEZ', 21),
(318, 'JESUS E LOSSADA', 21),
(319, 'ALMIRANTE P', 21),
(320, 'SAN FRANCISCO', 21),
(321, 'JESUS M SEMPRUN', 21),
(322, 'FRANCISCO J PULG', 21),
(323, 'SIMON BOLIVAR', 21),
(324, 'ATURES', 22),
(325, 'ATABAPO', 22),
(326, 'MAROA', 22),
(327, 'RIO NEGRO', 22),
(328, 'AUTANA', 22),
(329, 'MANAPIARE', 22),
(330, 'ALTO ORINOCO', 22),
(331, 'TUCUPITA', 23),
(332, 'PEDERNALES', 23),
(333, 'ANTONIO DIAZ', 23),
(334, 'CASACOIMA', 23),
(335, 'VARGAS', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_instruccion`
--

CREATE TABLE IF NOT EXISTS `nivel_instruccion` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `estatus` tinyint(4) NOT NULL DEFAULT '1',
  `puntos` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `nivel_instruccion`
--

INSERT INTO `nivel_instruccion` (`id`, `nombre`, `estatus`, `puntos`) VALUES
(1, 'UNIVERSITARIO', 1, 1),
(2, 'TECNICO', 1, 2),
(3, 'BACHILLERATO', 1, 3),
(4, 'PRIMARIA COMPLETA', 1, 4),
(5, 'PRIMARIA INCOMPLETA', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupacion`
--

CREATE TABLE IF NOT EXISTS `ocupacion` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `ocupacion`
--

INSERT INTO `ocupacion` (`id`, `nombre`, `descripcion`) VALUES
(1, 'ESTUDIANTE', 'ESTUDIANTE'),
(2, 'DEL HOGAR', 'DEL HOGAR'),
(3, 'EMPLEADO(A)', 'EMPLEADO PUBLICO'),
(4, 'TRABAJO DE MEDIO TIEMPO', 'TRABAJO DE MEDIO TIEMPO'),
(5, 'EMPLEO A DESTAJO', 'EMPLEO A DESTAJO'),
(6, 'COMERCIANTE INFORMAL', 'COMERCIANTE INFORMAL'),
(7, 'DESEMPLEADO(A)', 'DESEMPLEADO (A)'),
(8, 'SIN OCUPACION', 'SIN OCUPACION'),
(9, 'OBRERO(A)', 'OBRERO(A)'),
(10, 'PENSIONADO(A)', 'PENSIONADO(A)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE IF NOT EXISTS `opciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `padre` int(100) NOT NULL,
  `url` varchar(150) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`id`, `nombre`, `padre`, `url`, `estatus`) VALUES
(1, 'INICIO', 0, '../public', 1),
(2, 'DEFINICIONES', 0, '#', 1),
(3, 'SOLICITUDES', 0, '#', 1),
(4, 'USUARIOS', 0, '#', 1),
(5, 'REPORTES', 0, '#', 1),
(6, 'CAMBIAR CLAVE', 0, '#', 1),
(7, 'SALIR', 0, 'auth/logout', 1),
(8, 'Unidades Administrativas', 2, '##', 1),
(9, 'Conceptos', 2, '##', 1),
(10, 'Instituciones', 2, '', 1),
(11, 'Nueva Solicitud', 3, 'filtro', 1),
(12, 'Consultar Solicitud', 3, '', 1),
(13, 'Verificar Solicitud', 3, '', 1),
(14, 'Aprobar Solicitud', 3, '', 1),
(15, 'Nuevo Usuario', 4, 'nuevo_usuario', 1),
(16, 'Consultar Usuarios', 4, '../usuarios', 1),
(17, 'Reporte Beneficiados', 5, '', 1),
(18, 'Informe de Gestion', 5, '', 1),
(19, 'Secretarias', 8, 'secretaria', 1),
(20, 'SubSecretarias', 8, 'subsecretaria', 1),
(21, 'Coordinaciones', 8, 'coordinacion', 1),
(22, 'Discapacidades', 9, 'discapacidades', 1),
(23, 'Fuentes de Recepcion', 9, 'recepcion', 1),
(24, 'Modalidad de Atencion', 9, 'tipo_atencion', 1),
(25, 'Nueva Institucion', 10, '', 1),
(26, 'Consultar Instituciones', 10, '', 1),
(27, 'Nueva Secretaria', 19, 'nueva_secretaria', 0),
(28, 'Consultar Secretarias', 19, 'secretaria', 0),
(29, 'Nueva SubSucretaria', 20, 'nueva_subsecretaria', 1),
(30, 'Consultar SubSucretarias', 20, 'subsecretaria', 1),
(31, 'Nueva Coordinacion', 21, '', 1),
(32, 'Consultar Coordinaciones', 21, '', 1),
(33, 'Nuevo Tipo de Discapacidad', 23, '', 1),
(34, 'Consultar Tipos de Discapacidad', 23, '', 1),
(35, 'Nueva Fuente de Recepcion', 24, '', 1),
(36, 'Consultar Fuente de Recepcion', 24, '', 1),
(37, 'Nueva Modalidad de Atencion', 25, '', 1),
(38, 'Consultar Modalidades de Atencion', 25, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones_perfiles`
--

CREATE TABLE IF NOT EXISTS `opciones_perfiles` (
  `id_opcion` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  KEY `id_opcion` (`id_opcion`),
  KEY `id_perfil` (`id_perfil`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opciones_perfiles`
--

INSERT INTO `opciones_perfiles` (`id_opcion`, `id_perfil`, `id_usuario`) VALUES
(1, 2, 1),
(2, 2, 1),
(3, 2, 1),
(4, 2, 1),
(5, 2, 1),
(6, 2, 1),
(7, 2, 1),
(8, 2, 1),
(9, 2, 1),
(10, 2, 1),
(11, 2, 1),
(12, 2, 1),
(13, 2, 1),
(14, 2, 1),
(15, 2, 1),
(16, 2, 1),
(17, 2, 1),
(18, 2, 1),
(19, 2, 1),
(20, 2, 1),
(21, 2, 1),
(22, 2, 1),
(23, 2, 1),
(24, 2, 1),
(25, 2, 1),
(26, 2, 1),
(27, 2, 1),
(28, 2, 1),
(29, 2, 1),
(30, 2, 1),
(31, 2, 1),
(32, 2, 1),
(33, 2, 1),
(34, 2, 1),
(35, 2, 1),
(36, 2, 1),
(37, 2, 1),
(38, 2, 1),
(6, 3, 2),
(7, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del pais',
  `nombre` varchar(100) NOT NULL COMMENT 'Nombre del pais',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Entidad que contiene informacion sobre paises. ' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'Venezuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paredes`
--

CREATE TABLE IF NOT EXISTS `paredes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT '1',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `paredes`
--

INSERT INTO `paredes` (`id`, `nombre`, `estatus`) VALUES
(1, 'FRISADAS', 1),
(2, 'SIN FRISAR', 1),
(3, 'ZINC', 1),
(4, 'LATON', 1),
(5, 'CARTON', 1),
(6, 'MADERA', 1),
(7, 'BAHAREQUE', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

CREATE TABLE IF NOT EXISTS `parentesco` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `estatus` tinyint(4) NOT NULL DEFAULT '1',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`id`, `nombre`, `estatus`) VALUES
(1, 'CONYUGE', 1),
(2, 'HIJO(A)', 1),
(3, 'NIETO(A)', 1),
(4, 'MADRE', 1),
(5, 'PADRE', 1),
(6, 'SUEGRO', 1),
(7, 'HERMANO(A)', 1),
(8, 'SOBRINO(A)', 1),
(9, 'PRIMO(A)', 1),
(10, 'YERNO(A)', 1),
(11, 'NUERO(A', 1),
(12, 'BENEFICIARIO(A)', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquia`
--

CREATE TABLE IF NOT EXISTS `parroquia` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la parroquia',
  `nombre` varchar(100) NOT NULL COMMENT 'Nombre de la parroquia',
  `municipio_id` int(11) NOT NULL COMMENT 'Identificador del municipio al que pertenece la parroquia',
  PRIMARY KEY (`id`),
  KEY `fk_parroquia_municipio1` (`municipio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Entidad que contiene informacion sobre parroquias. ' AUTO_INCREMENT=1135 ;

--
-- Volcado de datos para la tabla `parroquia`
--

INSERT INTO `parroquia` (`id`, `nombre`, `municipio_id`) VALUES
(1, 'ALTAGRACIA', 1),
(2, 'CANDELARIA', 1),
(3, 'CATEDRAL', 1),
(4, 'LA PASTORA', 1),
(5, 'SAN AGUSTIN', 1),
(6, 'SAN JOSE', 1),
(7, 'SAN JUAN', 1),
(8, 'SANTA ROSALIA', 1),
(9, 'SANTA TERESA', 1),
(10, 'SUCRE', 1),
(11, '23 DE ENERO', 1),
(12, 'ANTIMANO', 1),
(13, 'EL RECREO', 1),
(14, 'EL VALLE', 1),
(15, 'LA VEGA', 1),
(16, 'MACARAO', 1),
(17, 'CARICUAO', 1),
(18, 'EL JUNQUITO', 1),
(19, 'COCHE', 1),
(20, 'SAN PEDRO', 1),
(21, 'SAN BERNARDINO', 1),
(22, 'EL PARAISO', 1),
(23, 'ANACO', 2),
(24, 'SAN JOAQUIN', 2),
(25, 'CM. ARAGUA DE BARCELONA', 3),
(26, 'CACHIPO', 3),
(27, 'EL CARMEN', 4),
(28, 'SAN CRISTOBAL', 4),
(29, 'BERGANTIN', 4),
(30, 'CAIGUA', 4),
(31, 'EL PILAR', 4),
(32, 'NARICUAL', 4),
(33, 'CM. CLARINES', 5),
(34, 'GUANAPE', 5),
(35, 'SABANA DE UCHIRE', 5),
(36, 'CM. ONOTO', 6),
(37, 'SAN PABLO', 6),
(38, 'CM. CANTAURA', 7),
(39, 'LIBERTADOR', 7),
(40, 'SANTA ROSA', 7),
(41, 'URICA', 7),
(42, 'CM. SOLEDAD', 8),
(43, 'MAMO', 8),
(44, 'CM. SAN MATEO', 9),
(45, 'EL CARITO', 9),
(46, 'SANTA INES', 9),
(47, 'CM. PARIAGUAN', 10),
(48, 'ATAPIRIRE', 10),
(49, 'BOCA DEL PAO', 10),
(50, 'EL PAO', 10),
(51, 'CM. MAPIRE', 11),
(52, 'PIAR', 11),
(53, 'SN DIEGO DE CABRUTICA', 11),
(54, 'SANTA CLARA', 11),
(55, 'UVERITO', 11),
(56, 'ZUATA', 11),
(57, 'CM. PUERTO PIRITU', 12),
(58, 'SAN MIGUEL', 12),
(59, 'SUCRE', 12),
(60, 'CM. EL TIGRE', 13),
(61, 'POZUELOS', 14),
(62, 'CM PTO. LA CRUZ', 14),
(63, 'CM. SAN JOSE DE GUANIPA', 15),
(64, 'GUANTA', 16),
(65, 'CHORRERON', 16),
(66, 'PIRITU', 17),
(67, 'SAN FRANCISCO', 17),
(68, 'LECHERIAS', 18),
(69, 'EL MORRO', 18),
(70, 'VALLE GUANAPE', 19),
(71, 'SANTA BARBARA', 19),
(72, 'SANTA ANA', 20),
(73, 'PUEBLO NUEVO', 20),
(74, 'EL CHAPARRO', 21),
(75, 'TOMAS ALFARO CALATRAVA', 21),
(76, 'BOCA UCHIRE', 22),
(77, 'BOCA DE CHAVEZ', 22),
(78, 'ACHAGUAS', 23),
(79, 'APURITO', 23),
(80, 'EL YAGUAL', 23),
(81, 'GUACHARA', 23),
(82, 'MUCURITAS', 23),
(83, 'QUESERAS DEL MEDIO', 23),
(84, 'BRUZUAL', 24),
(85, 'MANTECAL', 24),
(86, 'QUINTERO', 24),
(87, 'SAN VICENTE', 24),
(88, 'RINCON HONDO', 24),
(89, 'GUASDUALITO', 25),
(90, 'ARAMENDI', 25),
(91, 'EL AMPARO', 25),
(92, 'SAN CAMILO', 25),
(93, 'URDANETA', 25),
(94, 'SAN JUAN DE PAYARA', 26),
(95, 'CODAZZI', 26),
(96, 'CUNAVICHE', 26),
(97, 'ELORZA', 27),
(98, 'LA TRINIDAD', 27),
(99, 'SAN FERNANDO', 28),
(100, 'PEÑALVER', 28),
(101, 'EL RECREO', 28),
(102, 'SN RAFAEL DE ATAMAICA', 28),
(103, 'BIRUACA', 29),
(104, 'CM. LAS DELICIAS', 30),
(105, 'CHORONI', 30),
(106, 'MADRE MA DE SAN JOSE', 30),
(107, 'JOAQUIN CRESPO', 30),
(108, 'PEDRO JOSE OVALLES', 30),
(109, 'JOSE CASANOVA GODOY', 30),
(110, 'ANDRES ELOY BLANCO', 30),
(111, 'LOS TACARIGUAS', 30),
(112, 'CM. TURMERO', 31),
(113, 'SAMAN DE GUERE', 31),
(114, 'ALFREDO PACHECO M', 31),
(115, 'CHUAO', 31),
(116, 'AREVALO APONTE', 31),
(117, 'CM. LA VICTORIA', 32),
(118, 'ZUATA', 32),
(119, 'PAO DE ZARATE', 32),
(120, 'CASTOR NIEVES RIOS', 32),
(121, 'LAS GUACAMAYAS', 32),
(122, 'CM. SAN CASIMIRO', 33),
(123, 'VALLE MORIN', 33),
(124, 'GUIRIPA', 33),
(125, 'OLLAS DE CARAMACATE', 33),
(126, 'CM. SAN SEBASTIAN', 34),
(127, 'CM. CAGUA', 35),
(128, 'BELLA VISTA', 35),
(129, 'CM. BARBACOAS', 36),
(130, 'SAN FRANCISCO DE CARA', 36),
(131, 'TAGUAY', 36),
(132, 'LAS PEÑITAS', 36),
(133, 'CM. VILLA DE CURA', 37),
(134, 'MAGDALENO', 37),
(135, 'SAN FRANCISCO DE ASIS', 37),
(136, 'VALLES DE TUCUTUNEMO', 37),
(137, 'PQ AUGUSTO MIJARES', 37),
(138, 'CM. PALO NEGRO', 38),
(139, 'SAN MARTIN DE PORRES', 38),
(140, 'CM. SANTA CRUZ', 39),
(141, 'CM. SAN MATEO', 40),
(142, 'CM. LAS TEJERIAS', 41),
(143, 'TIARA', 41),
(144, 'CM. EL LIMON', 42),
(145, 'CA A DE AZUCAR', 42),
(146, 'CM. COLONIA TOVAR', 43),
(147, 'CM. CAMATAGUA', 44),
(148, 'CARMEN DE CURA', 44),
(149, 'CM. EL CONSEJO', 45),
(150, 'CM. SANTA RITA', 46),
(151, 'FRANCISCO DE MIRANDA', 46),
(152, 'MONS FELICIANO G', 46),
(153, 'OCUMARE DE LA COSTA', 47),
(154, 'ARISMENDI', 48),
(155, 'GUADARRAMA', 48),
(156, 'LA UNION', 48),
(157, 'SAN ANTONIO', 48),
(158, 'ALFREDO A LARRIVA', 49),
(159, 'BARINAS', 49),
(160, 'SAN SILVESTRE', 49),
(161, 'SANTA INES', 49),
(162, 'SANTA LUCIA', 49),
(163, 'TORUNOS', 49),
(164, 'EL CARMEN', 49),
(165, 'ROMULO BETANCOURT', 49),
(166, 'CORAZON DE JESUS', 49),
(167, 'RAMON I MENDEZ', 49),
(168, 'ALTO BARINAS', 49),
(169, 'MANUEL P FAJARDO', 49),
(170, 'JUAN A RODRIGUEZ D', 49),
(171, 'DOMINGA ORTIZ P', 49),
(172, 'ALTAMIRA', 50),
(173, 'BARINITAS', 50),
(174, 'CALDERAS', 50),
(175, 'SANTA BARBARA', 51),
(176, 'JOSE IGNACIO DEL PUMAR', 51),
(177, 'RAMON IGNACIO MENDEZ', 51),
(178, 'PEDRO BRICEÑO MENDEZ', 51),
(179, 'EL REAL', 52),
(180, 'LA LUZ', 52),
(181, 'OBISPOS', 52),
(182, 'LOS GUASIMITOS', 52),
(183, 'CIUDAD BOLIVIA', 53),
(184, 'IGNACIO BRICEÑO', 53),
(185, 'PAEZ', 53),
(186, 'JOSE FELIX RIBAS', 53),
(187, 'DOLORES', 54),
(188, 'LIBERTAD', 54),
(189, 'PALACIO FAJARDO', 54),
(190, 'SANTA ROSA', 54),
(191, 'CIUDAD DE NUTRIAS', 55),
(192, 'EL REGALO', 55),
(193, 'PUERTO DE NUTRIAS', 55),
(194, 'SANTA CATALINA', 55),
(195, 'RODRIGUEZ DOMINGUEZ', 56),
(196, 'SABANETA', 56),
(197, 'TICOPORO', 57),
(198, 'NICOLAS PULIDO', 57),
(199, 'ANDRES BELLO', 57),
(200, 'BARRANCAS', 58),
(201, 'EL SOCORRO', 58),
(202, 'MASPARRITO', 58),
(203, 'EL CANTON', 59),
(204, 'SANTA CRUZ DE GUACAS', 59),
(205, 'PUERTO VIVAS', 59),
(206, 'SIMON BOLIVAR', 60),
(207, 'ONCE DE ABRIL', 60),
(208, 'VISTA AL SOL', 60),
(209, 'CHIRICA', 60),
(210, 'DALLA COSTA', 60),
(211, 'CACHAMAY', 60),
(212, 'UNIVERSIDAD', 60),
(213, 'UNARE', 60),
(214, 'YOCOIMA', 60),
(215, 'POZO VERDE', 60),
(216, 'CM. CAICARA DEL ORINOCO', 61),
(217, 'ASCENSION FARRERAS', 61),
(218, 'ALTAGRACIA', 61),
(219, 'LA URBANA', 61),
(220, 'GUANIAMO', 61),
(221, 'PIJIGUAOS', 61),
(222, 'CATEDRAL', 62),
(223, 'AGUA SALADA', 62),
(224, 'LA SABANITA', 62),
(225, 'VISTA HERMOSA', 62),
(226, 'MARHUANTA', 62),
(227, 'JOSE ANTONIO PAEZ', 62),
(228, 'ORINOCO', 62),
(229, 'PANAPANA', 62),
(230, 'ZEA', 62),
(231, 'CM. UPATA', 63),
(232, 'ANDRES ELOY BLANCO', 63),
(233, 'PEDRO COVA', 63),
(234, 'CM. GUASIPATI', 64),
(235, 'SALOM', 64),
(236, 'CM. MARIPA', 65),
(237, 'ARIPAO', 65),
(238, 'LAS MAJADAS', 65),
(239, 'MOITACO', 65),
(240, 'GUARATARO', 65),
(241, 'CM. TUMEREMO', 66),
(242, 'DALLA COSTA', 66),
(243, 'SAN ISIDRO', 66),
(244, 'CM. CIUDAD PIAR', 67),
(245, 'SAN FRANCISCO', 67),
(246, 'BARCELONETA', 67),
(247, 'SANTA BARBARA', 67),
(248, 'CM. SANTA ELENA DE UAIREN', 68),
(249, 'IKABARU', 68),
(250, 'CM. EL CALLAO', 69),
(251, 'CM. EL PALMAR', 70),
(252, 'BEJUMA', 71),
(253, 'CANOABO', 71),
(254, 'SIMON BOLIVAR', 71),
(255, 'GUIGUE', 72),
(256, 'BELEN', 72),
(257, 'TACARIGUA', 72),
(258, 'MARIARA', 73),
(259, 'AGUAS CALIENTES', 73),
(260, 'GUACARA', 74),
(261, 'CIUDAD ALIANZA', 74),
(262, 'YAGUA', 74),
(263, 'MONTALBAN', 75),
(264, 'MORON', 76),
(265, 'URAMA', 76),
(266, 'DEMOCRACIA', 77),
(267, 'FRATERNIDAD', 77),
(268, 'GOAIGOAZA', 77),
(269, 'JUAN JOSE FLORES', 77),
(270, 'BARTOLOME SALOM', 77),
(271, 'UNION', 77),
(272, 'BORBURATA', 77),
(273, 'PATANEMO', 77),
(274, 'SAN JOAQUIN', 78),
(275, 'CANDELARIA', 79),
(276, 'CATEDRAL', 79),
(277, 'EL SOCORRO', 79),
(278, 'MIGUEL PEÑA', 79),
(279, 'SAN BLAS', 79),
(280, 'SAN JOSE', 79),
(281, 'SANTA ROSA', 79),
(282, 'RAFAEL URDANETA', 79),
(283, 'NEGRO PRIMERO', 79),
(284, 'MIRANDA', 80),
(285, 'U LOS GUAYOS', 81),
(286, 'NAGUANAGUA', 82),
(287, 'URB SAN DIEGO', 83),
(288, 'U TOCUYITO', 84),
(289, 'U INDEPENDENCIA', 84),
(290, 'COJEDES', 85),
(291, 'JUAN DE MATA SUAREZ', 85),
(292, 'TINAQUILLO', 86),
(293, 'EL BAUL', 87),
(294, 'SUCRE', 87),
(295, 'EL PAO', 88),
(296, 'LIBERTAD DE COJEDES', 89),
(297, 'EL AMPARO', 89),
(298, 'SAN CARLOS DE AUSTRIA', 90),
(299, 'JUAN ANGEL BRAVO', 90),
(300, 'MANUEL MANRIQUE', 90),
(301, 'GRL/JEFE JOSE L SILVA', 91),
(302, 'MACAPO', 92),
(303, 'LA AGUADITA', 92),
(304, 'ROMULO GALLEGOS', 93),
(305, 'SAN JUAN DE LOS CAYOS', 94),
(306, 'CAPADARE', 94),
(307, 'LA PASTORA', 94),
(308, 'LIBERTADOR', 94),
(309, 'SAN LUIS', 95),
(310, 'ARACUA', 95),
(311, 'LA PEÑA', 95),
(312, 'CAPATARIDA', 96),
(313, 'BOROJO', 96),
(314, 'SEQUE', 96),
(315, 'ZAZARIDA', 96),
(316, 'BARIRO', 96),
(317, 'GUAJIRO', 96),
(318, 'NORTE', 97),
(319, 'CARIRUBANA', 97),
(320, 'PUNTA CARDON', 97),
(321, 'SANTA ANA', 97),
(322, 'LA VELA DE CORO', 98),
(323, 'ACURIGUA', 98),
(324, 'GUAIBACOA', 98),
(325, 'MACORUCA', 98),
(326, 'LAS CALDERAS', 98),
(327, 'PEDREGAL', 99),
(328, 'AGUA CLARA', 99),
(329, 'AVARIA', 99),
(330, 'PIEDRA GRANDE', 99),
(331, 'PURURECHE', 99),
(332, 'PUEBLO NUEVO', 100),
(333, 'ADICORA', 100),
(334, 'BARAIVED', 100),
(335, 'BUENA VISTA', 100),
(336, 'JADACAQUIVA', 100),
(337, 'MORUY', 100),
(338, 'EL VINCULO', 100),
(339, 'EL HATO', 100),
(340, 'ADAURE', 100),
(341, 'CHURUGUARA', 101),
(342, 'AGUA LARGA', 101),
(343, 'INDEPENDENCIA', 101),
(344, 'MAPARARI', 101),
(345, 'EL PAUJI', 101),
(346, 'MENE DE MAUROA', 102),
(347, 'CASIGUA', 102),
(348, 'SAN FELIX', 102),
(349, 'SAN ANTONIO', 103),
(350, 'SAN GABRIEL', 103),
(351, 'SANTA ANA', 103),
(352, 'GUZMAN GUILLERMO', 103),
(353, 'MITARE', 103),
(354, 'SABANETA', 103),
(355, 'RIO SECO', 103),
(356, 'CABURE', 104),
(357, 'CURIMAGUA', 104),
(358, 'COLINA', 104),
(359, 'TUCACAS', 105),
(360, 'BOCA DE AROA', 105),
(361, 'PUERTO CUMAREBO', 106),
(362, 'LA CIENAGA', 106),
(363, 'LA SOLEDAD', 106),
(364, 'PUEBLO CUMAREBO', 106),
(365, 'ZAZARIDA', 106),
(366, 'CM. DABAJURO', 107),
(367, 'CHICHIRIVICHE', 108),
(368, 'BOCA DE TOCUYO', 108),
(369, 'TOCUYO DE LA COSTA', 108),
(370, 'LOS TAQUES', 109),
(371, 'JUDIBANA', 109),
(372, 'PIRITU', 110),
(373, 'SAN JOSE DE LA COSTA', 110),
(374, 'STA.CRUZ DE BUCARAL', 111),
(375, 'EL CHARAL', 111),
(376, 'LAS VEGAS DEL TUY', 111),
(377, 'CM. MIRIMIRE', 112),
(378, 'JACURA', 113),
(379, 'AGUA LINDA', 113),
(380, 'ARAURIMA', 113),
(381, 'CM. YARACAL', 114),
(382, 'CM. PALMA SOLA', 115),
(383, 'SUCRE', 116),
(384, 'PECAYA', 116),
(385, 'URUMACO', 117),
(386, 'BRUZUAL', 117),
(387, 'CM. TOCOPERO', 118),
(388, 'VALLE DE LA PASCUA', 119),
(389, 'ESPINO', 119),
(390, 'EL SOMBRERO', 120),
(391, 'SOSA', 120),
(392, 'CALABOZO', 121),
(393, 'EL CALVARIO', 121),
(394, 'EL RASTRO', 121),
(395, 'GUARDATINAJAS', 121),
(396, 'ALTAGRACIA DE ORITUCO', 122),
(397, 'LEZAMA', 122),
(398, 'LIBERTAD DE ORITUCO', 122),
(399, 'SAN FCO DE MACAIRA', 122),
(400, 'SAN RAFAEL DE ORITUCO', 122),
(401, 'SOUBLETTE', 122),
(402, 'PASO REAL DE MACAIRA', 122),
(403, 'TUCUPIDO', 123),
(404, 'SAN RAFAEL DE LAYA', 123),
(405, 'SAN JUAN DE LOS MORROS', 124),
(406, 'PARAPARA', 124),
(407, 'CANTAGALLO', 124),
(408, 'ZARAZA', 125),
(409, 'SAN JOSE DE UNARE', 125),
(410, 'CAMAGUAN', 126),
(411, 'PUERTO MIRANDA', 126),
(412, 'UVERITO', 126),
(413, 'SAN JOSE DE GUARIBE', 127),
(414, 'LAS MERCEDES', 128),
(415, 'STA RITA DE MANAPIRE', 128),
(416, 'CABRUTA', 128),
(417, 'EL SOCORRO', 129),
(418, 'ORTIZ', 130),
(419, 'SAN FCO. DE TIZNADOS', 130),
(420, 'SAN JOSE DE TIZNADOS', 130),
(421, 'S LORENZO DE TIZNADOS', 130),
(422, 'SANTA MARIA DE IPIRE', 131),
(423, 'ALTAMIRA', 131),
(424, 'CHAGUARAMAS', 132),
(425, 'GUAYABAL', 133),
(426, 'CAZORLA', 133),
(427, 'FREITEZ', 134),
(428, 'JOSE MARIA BLANCO', 134),
(429, 'CATEDRAL', 135),
(430, 'LA CONCEPCION', 135),
(431, 'SANTA ROSA', 135),
(432, 'UNION', 135),
(433, 'EL CUJI', 135),
(434, 'TAMACA', 135),
(435, 'JUAN DE VILLEGAS', 135),
(436, 'AGUEDO F. ALVARADO', 135),
(437, 'BUENA VISTA', 135),
(438, 'JUAREZ', 135),
(439, 'JUAN B RODRIGUEZ', 136),
(440, 'DIEGO DE LOZADA', 136),
(441, 'SAN MIGUEL', 136),
(442, 'CUARA', 136),
(443, 'PARAISO DE SAN JOSE', 136),
(444, 'TINTORERO', 136),
(445, 'JOSE BERNARDO DORANTE', 136),
(446, 'CRNEL. MARIANO PERAZA', 136),
(447, 'BOLIVAR', 137),
(448, 'ANZOATEGUI', 137),
(449, 'GUARICO', 137),
(450, 'HUMOCARO ALTO', 137),
(451, 'HUMOCARO BAJO', 137),
(452, 'MORAN', 137),
(453, 'HILARIO LUNA Y LUNA', 137),
(454, 'LA CANDELARIA', 137),
(455, 'CABUDARE', 138),
(456, 'JOSE G. BASTIDAS', 138),
(457, 'AGUA VIVA', 138),
(458, 'TRINIDAD SAMUEL', 139),
(459, 'ANTONIO DIAZ', 139),
(460, 'CAMACARO', 139),
(461, 'CASTAÑEDA', 139),
(462, 'CHIQUINQUIRA', 139),
(463, 'ESPINOZA LOS MONTEROS', 139),
(464, 'LARA', 139),
(465, 'MANUEL MORILLO', 139),
(466, 'MONTES DE OCA', 139),
(467, 'TORRES', 139),
(468, 'EL BLANCO', 139),
(469, 'MONTA A VERDE', 139),
(470, 'HERIBERTO ARROYO', 139),
(471, 'LAS MERCEDES', 139),
(472, 'CECILIO ZUBILLAGA', 139),
(473, 'REYES VARGAS', 139),
(474, 'ALTAGRACIA', 139),
(475, 'SIQUISIQUE', 140),
(476, 'SAN MIGUEL', 140),
(477, 'XAGUAS', 140),
(478, 'MOROTURO', 140),
(479, 'PIO TAMAYO', 141),
(480, 'YACAMBU', 141),
(481, 'QBDA. HONDA DE GUACHE', 141),
(482, 'SARARE', 142),
(483, 'GUSTAVO VEGAS LEON', 142),
(484, 'BURIA', 142),
(485, 'GABRIEL PICON G.', 143),
(486, 'HECTOR AMABLE MORA', 143),
(487, 'JOSE NUCETE SARDI', 143),
(488, 'PULIDO MENDEZ', 143),
(489, 'PTE. ROMULO GALLEGOS', 143),
(490, 'PRESIDENTE BETANCOURT', 143),
(491, 'PRESIDENTE PAEZ', 143),
(492, 'CM. LA AZULITA', 144),
(493, 'CM. CANAGUA', 145),
(494, 'CAPURI', 145),
(495, 'CHACANTA', 145),
(496, 'EL MOLINO', 145),
(497, 'GUAIMARAL', 145),
(498, 'MUCUTUY', 145),
(499, 'MUCUCHACHI', 145),
(500, 'ACEQUIAS', 146),
(501, 'JAJI', 146),
(502, 'LA MESA', 146),
(503, 'SAN JOSE', 146),
(504, 'MONTALBAN', 146),
(505, 'MATRIZ', 146),
(506, 'FERNANDEZ PEÑA', 146),
(507, 'CM. GUARAQUE', 147),
(508, 'MESA DE QUINTERO', 147),
(509, 'RIO NEGRO', 147),
(510, 'CM. ARAPUEY', 148),
(511, 'PALMIRA', 148),
(512, 'CM. TORONDOY', 149),
(513, 'SAN CRISTOBAL DE T', 149),
(514, 'ARIAS', 150),
(515, 'SAGRARIO', 150),
(516, 'MILLA', 150),
(517, 'EL LLANO', 150),
(518, 'JUAN RODRIGUEZ SUAREZ', 150),
(519, 'JACINTO PLAZA', 150),
(520, 'DOMINGO PEÑA', 150),
(521, 'GONZALO PICON FEBRES', 150),
(522, 'OSUNA RODRIGUEZ', 150),
(523, 'LASSO DE LA VEGA', 150),
(524, 'CARACCIOLO PARRA P', 150),
(525, 'MARIANO PICON SALAS', 150),
(526, 'ANTONIO SPINETTI DINI', 150),
(527, 'EL MORRO', 150),
(528, 'LOS NEVADOS', 150),
(529, 'CM. TABAY', 151),
(530, 'CM. TIMOTES', 152),
(531, 'ANDRES ELOY BLANCO', 152),
(532, 'PIÑANGO', 152),
(533, 'LA VENTA', 152),
(534, 'CM. STA CRUZ DE MORA', 153),
(535, 'MESA BOLIVAR', 153),
(536, 'MESA DE LAS PALMAS', 153),
(537, 'CM. STA ELENA DE ARENALES', 154),
(538, 'ELOY PAREDES', 154),
(539, 'PQ R DE ALCAZAR', 154),
(540, 'CM. TUCANI', 155),
(541, 'FLORENCIO RAMIREZ', 155),
(542, 'CM. SANTO DOMINGO', 156),
(543, 'LAS PIEDRAS', 156),
(544, 'CM. PUEBLO LLANO', 157),
(545, 'CM. MUCUCHIES', 158),
(546, 'MUCURUBA', 158),
(547, 'SAN RAFAEL', 158),
(548, 'CACUTE', 158),
(549, 'LA TOMA', 158),
(550, 'CM. BAILADORES', 159),
(551, 'GERONIMO MALDONADO', 159),
(552, 'CM. LAGUNILLAS', 160),
(553, 'CHIGUARA', 160),
(554, 'ESTANQUES', 160),
(555, 'SAN JUAN', 160),
(556, 'PUEBLO NUEVO DEL SUR', 160),
(557, 'LA TRAMPA', 160),
(558, 'EL LLANO', 161),
(559, 'TOVAR', 161),
(560, 'EL AMPARO', 161),
(561, 'SAN FRANCISCO', 161),
(562, 'CM. NUEVA BOLIVIA', 162),
(563, 'INDEPENDENCIA', 162),
(564, 'MARIA C PALACIOS', 162),
(565, 'SANTA APOLONIA', 162),
(566, 'CM. STA MARIA DE CAPARO', 163),
(567, 'CM. ARICAGUA', 164),
(568, 'SAN ANTONIO', 164),
(569, 'CM. ZEA', 165),
(570, 'CAÑO EL TIGRE', 165),
(571, 'CAUCAGUA', 166),
(572, 'ARAGUITA', 166),
(573, 'AREVALO GONZALEZ', 166),
(574, 'CAPAYA', 166),
(575, 'PANAQUIRE', 166),
(576, 'RIBAS', 166),
(577, 'EL CAFE', 166),
(578, 'MARIZAPA', 166),
(579, 'HIGUEROTE', 167),
(580, 'CURIEPE', 167),
(581, 'TACARIGUA', 167),
(582, 'LOS TEQUES', 168),
(583, 'CECILIO ACOSTA', 168),
(584, 'PARACOTOS', 168),
(585, 'SAN PEDRO', 168),
(586, 'TACATA', 168),
(587, 'EL JARILLO', 168),
(588, 'ALTAGRACIA DE LA M', 168),
(589, 'STA TERESA DEL TUY', 169),
(590, 'EL CARTANAL', 169),
(591, 'OCUMARE DEL TUY', 170),
(592, 'LA DEMOCRACIA', 170),
(593, 'SANTA BARBARA', 170),
(594, 'RIO CHICO', 171),
(595, 'EL GUAPO', 171),
(596, 'TACARIGUA DE LA LAGUNA', 171),
(597, 'PAPARO', 171),
(598, 'SN FERNANDO DEL GUAPO', 171),
(599, 'SANTA LUCIA', 172),
(600, 'GUARENAS', 173),
(601, 'PETARE', 174),
(602, 'LEONCIO MARTINEZ', 174),
(603, 'CAUCAGUITA', 174),
(604, 'FILAS DE MARICHES', 174),
(605, 'LA DOLORITA', 174),
(606, 'CUA', 175),
(607, 'NUEVA CUA', 175),
(608, 'GUATIRE', 176),
(609, 'BOLIVAR', 176),
(610, 'CHARALLAVE', 177),
(611, 'LAS BRISAS', 177),
(612, 'SAN ANTONIO LOS ALTOS', 178),
(613, 'SAN JOSE DE BARLOVENTO', 179),
(614, 'CUMBO', 179),
(615, 'SAN FCO DE YARE', 180),
(616, 'S ANTONIO DE YARE', 180),
(617, 'BARUTA', 181),
(618, 'EL CAFETAL', 181),
(619, 'LAS MINAS DE BARUTA', 181),
(620, 'CARRIZAL', 182),
(621, 'CHACAO', 183),
(622, 'EL HATILLO', 184),
(623, 'MAMPORAL', 185),
(624, 'CUPIRA', 186),
(625, 'MACHURUCUTO', 186),
(626, 'CM. SAN ANTONIO', 187),
(627, 'SAN FRANCISCO', 187),
(628, 'CM. CARIPITO', 188),
(629, 'CM. CARIPE', 189),
(630, 'TERESEN', 189),
(631, 'EL GUACHARO', 189),
(632, 'SAN AGUSTIN', 189),
(633, 'LA GUANOTA', 189),
(634, 'SABANA DE PIEDRA', 189),
(635, 'CM. CAICARA', 190),
(636, 'AREO', 190),
(637, 'SAN FELIX', 190),
(638, 'VIENTO FRESCO', 190),
(639, 'CM. PUNTA DE MATA', 191),
(640, 'EL TEJERO', 191),
(641, 'CM. TEMBLADOR', 192),
(642, 'TABASCA', 192),
(643, 'LAS ALHUACAS', 192),
(644, 'CHAGUARAMAS', 192),
(645, 'EL FURRIAL', 193),
(646, 'JUSEPIN', 193),
(647, 'EL COROZO', 193),
(648, 'SAN VICENTE', 193),
(649, 'LA PICA', 193),
(650, 'ALTO DE LOS GODOS', 193),
(651, 'BOQUERON', 193),
(652, 'LAS COCUIZAS', 193),
(653, 'SANTA CRUZ', 193),
(654, 'SAN SIMON', 193),
(655, 'CM. ARAGUA', 194),
(656, 'CHAGUARAMAL', 194),
(657, 'GUANAGUANA', 194),
(658, 'APARICIO', 194),
(659, 'TAGUAYA', 194),
(660, 'EL PINTO', 194),
(661, 'LA TOSCANA', 194),
(662, 'CM. QUIRIQUIRE', 195),
(663, 'CACHIPO', 195),
(664, 'CM. BARRANCAS', 196),
(665, 'LOS BARRANCOS DE FAJARDO', 196),
(666, 'CM. AGUASAY', 197),
(667, 'CM. SANTA BARBARA', 198),
(668, 'CM. URACOA', 199),
(669, 'CM. LA ASUNCION', 200),
(670, 'CM. SAN JUAN BAUTISTA', 201),
(671, 'ZABALA', 201),
(672, 'CM. SANTA ANA', 202),
(673, 'GUEVARA', 202),
(674, 'MATASIETE', 202),
(675, 'BOLIVAR', 202),
(676, 'SUCRE', 202),
(677, 'CM. PAMPATAR', 203),
(678, 'AGUIRRE', 203),
(679, 'CM. JUAN GRIEGO', 204),
(680, 'ADRIAN', 204),
(681, 'CM. PORLAMAR', 205),
(682, 'CM. BOCA DEL RIO', 206),
(683, 'SAN FRANCISCO', 206),
(684, 'CM. SAN PEDRO DE COCHE', 207),
(685, 'VICENTE FUENTES', 207),
(686, 'CM. PUNTA DE PIEDRAS', 208),
(687, 'LOS BARALES', 208),
(688, 'CM.LA PLAZA DE PARAGUACHI', 209),
(689, 'CM. VALLE ESP SANTO', 210),
(690, 'FRANCISCO FAJARDO', 210),
(691, 'CM. ARAURE', 211),
(692, 'RIO ACARIGUA', 211),
(693, 'CM. PIRITU', 212),
(694, 'UVERAL', 212),
(695, 'CM. GUANARE', 213),
(696, 'CORDOBA', 213),
(697, 'SAN JUAN GUANAGUANARE', 213),
(698, 'VIRGEN DE LA COROMOTO', 213),
(699, 'SAN JOSE DE LA MONTAÑA', 213),
(700, 'CM. GUANARITO', 214),
(701, 'TRINIDAD DE LA CAPILLA', 214),
(702, 'DIVINA PASTORA', 214),
(703, 'CM. OSPINO', 215),
(704, 'APARICION', 215),
(705, 'LA ESTACION', 215),
(706, 'CM. ACARIGUA', 216),
(707, 'PAYARA', 216),
(708, 'PIMPINELA', 216),
(709, 'RAMON PERAZA', 216),
(710, 'CM. BISCUCUY', 217),
(711, 'CONCEPCION', 217),
(712, 'SAN RAFAEL PALO ALZADO', 217),
(713, 'UVENCIO A VELASQUEZ', 217),
(714, 'SAN JOSE DE SAGUAZ', 217),
(715, 'VILLA ROSA', 217),
(716, 'CM. VILLA BRUZUAL', 218),
(717, 'CANELONES', 218),
(718, 'SANTA CRUZ', 218),
(719, 'SAN ISIDRO LABRADOR', 218),
(720, 'CM. CHABASQUEN', 219),
(721, 'PEÑA BLANCA', 219),
(722, 'CM. AGUA BLANCA', 220),
(723, 'CM. PAPELON', 221),
(724, 'CAÑO DELGADITO', 221),
(725, 'CM. BOCONOITO', 222),
(726, 'ANTOLIN TOVAR AQUINO', 222),
(727, 'CM. SAN RAFAEL DE ONOTO', 223),
(728, 'SANTA FE', 223),
(729, 'THERMO MORLES', 223),
(730, 'CM. EL PLAYON', 224),
(731, 'FLORIDA', 224),
(732, 'RIO CARIBE', 225),
(733, 'SAN JUAN GALDONAS', 225),
(734, 'PUERTO SANTO', 225),
(735, 'EL MORRO DE PTO SANTO', 225),
(736, 'ANTONIO JOSE DE SUCRE', 225),
(737, 'EL PILAR', 226),
(738, 'EL RINCON', 226),
(739, 'GUARAUNOS', 226),
(740, 'TUNAPUICITO', 226),
(741, 'UNION', 226),
(742, 'GRAL FCO. A VASQUEZ', 226),
(743, 'SANTA CATALINA', 227),
(744, 'SANTA ROSA', 227),
(745, 'SANTA TERESA', 227),
(746, 'BOLIVAR', 227),
(747, 'MACARAPANA', 227),
(748, 'YAGUARAPARO', 228),
(749, 'LIBERTAD', 228),
(750, 'PAUJIL', 228),
(751, 'IRAPA', 229),
(752, 'CAMPO CLARO', 229),
(753, 'SORO', 229),
(754, 'SAN ANTONIO DE IRAPA', 229),
(755, 'MARABAL', 229),
(756, 'CM. SAN ANT DEL GOLFO', 230),
(757, 'CUMANACOA', 231),
(758, 'ARENAS', 231),
(759, 'ARICAGUA', 231),
(760, 'COCOLLAR', 231),
(761, 'SAN FERNANDO', 231),
(762, 'SAN LORENZO', 231),
(763, 'CARIACO', 232),
(764, 'CATUARO', 232),
(765, 'RENDON', 232),
(766, 'SANTA CRUZ', 232),
(767, 'SANTA MARIA', 232),
(768, 'ALTAGRACIA', 233),
(769, 'AYACUCHO', 233),
(770, 'SANTA INES', 233),
(771, 'VALENTIN VALIENTE', 233),
(772, 'SAN JUAN', 233),
(773, 'GRAN MARISCAL', 233),
(774, 'RAUL LEONI', 233),
(775, 'GUIRIA', 234),
(776, 'CRISTOBAL COLON', 234),
(777, 'PUNTA DE PIEDRA', 234),
(778, 'BIDEAU', 234),
(779, 'MARIÑO', 235),
(780, 'ROMULO GALLEGOS', 235),
(781, 'TUNAPUY', 236),
(782, 'CAMPO ELIAS', 236),
(783, 'SAN JOSE DE AREOCUAR', 237),
(784, 'TAVERA ACOSTA', 237),
(785, 'CM. MARIGUITAR', 238),
(786, 'ARAYA', 239),
(787, 'MANICUARE', 239),
(788, 'CHACOPATA', 239),
(789, 'CM. COLON', 240),
(790, 'RIVAS BERTI', 240),
(791, 'SAN PEDRO DEL RIO', 240),
(792, 'CM. SAN ANT DEL TACHIRA', 241),
(793, 'PALOTAL', 241),
(794, 'JUAN VICENTE GOMEZ', 241),
(795, 'ISAIAS MEDINA ANGARIT', 241),
(796, 'CM. CAPACHO NUEVO', 242),
(797, 'JUAN GERMAN ROSCIO', 242),
(798, 'ROMAN CARDENAS', 242),
(799, 'CM. TARIBA', 243),
(800, 'LA FLORIDA', 243),
(801, 'AMENODORO RANGEL LAMU', 243),
(802, 'CM. LA GRITA', 244),
(803, 'EMILIO C. GUERRERO', 244),
(804, 'MONS. MIGUEL A SALAS', 244),
(805, 'CM. RUBIO', 245),
(806, 'BRAMON', 245),
(807, 'LA PETROLEA', 245),
(808, 'QUINIMARI', 245),
(809, 'CM. LOBATERA', 246),
(810, 'CONSTITUCION', 246),
(811, 'LA CONCORDIA', 247),
(812, 'PEDRO MARIA MORANTES', 247),
(813, 'SN JUAN BAUTISTA', 247),
(814, 'SAN SEBASTIAN', 247),
(815, 'DR. FCO. ROMERO LOBO', 247),
(816, 'CM. PREGONERO', 248),
(817, 'CARDENAS', 248),
(818, 'POTOSI', 248),
(819, 'JUAN PABLO PEÑALOZA', 248),
(820, 'CM. STA. ANA  DEL TACHIRA', 249),
(821, 'CM. LA FRIA', 250),
(822, 'BOCA DE GRITA', 250),
(823, 'JOSE ANTONIO PAEZ', 250),
(824, 'CM. PALMIRA', 251),
(825, 'CM. MICHELENA', 252),
(826, 'CM. ABEJALES', 253),
(827, 'SAN JOAQUIN DE NAVAY', 253),
(828, 'DORADAS', 253),
(829, 'EMETERIO OCHOA', 253),
(830, 'CM. COLONCITO', 254),
(831, 'LA PALMITA', 254),
(832, 'CM. UREÑA', 255),
(833, 'NUEVA ARCADIA', 255),
(834, 'CM. QUENIQUEA', 256),
(835, 'SAN PABLO', 256),
(836, 'ELEAZAR LOPEZ CONTRERA', 256),
(837, 'CM. CORDERO', 257),
(838, 'CM.SAN RAFAEL DEL PINAL', 258),
(839, 'SANTO DOMINGO', 258),
(840, 'ALBERTO ADRIANI', 258),
(841, 'CM. CAPACHO VIEJO', 259),
(842, 'CIPRIANO CASTRO', 259),
(843, 'MANUEL FELIPE RUGELES', 259),
(844, 'CM. LA TENDIDA', 260),
(845, 'BOCONO', 260),
(846, 'HERNANDEZ', 260),
(847, 'CM. SEBORUCO', 261),
(848, 'CM. LAS MESAS', 262),
(849, 'CM. SAN JOSE DE BOLIVAR', 263),
(850, 'CM. EL COBRE', 264),
(851, 'CM. DELICIAS', 265),
(852, 'CM. SAN SIMON', 266),
(853, 'CM. SAN JOSECITO', 267),
(854, 'CM. UMUQUENA', 268),
(855, 'BETIJOQUE', 269),
(856, 'JOSE G HERNANDEZ', 269),
(857, 'LA PUEBLITA', 269),
(858, 'EL CEDRO', 269),
(859, 'BOCONO', 270),
(860, 'EL CARMEN', 270),
(861, 'MOSQUEY', 270),
(862, 'AYACUCHO', 270),
(863, 'BURBUSAY', 270),
(864, 'GENERAL RIVAS', 270),
(865, 'MONSEÑOR JAUREGUI', 270),
(866, 'RAFAEL RANGEL', 270),
(867, 'SAN JOSE', 270),
(868, 'SAN MIGUEL', 270),
(869, 'GUARAMACAL', 270),
(870, 'LA VEGA DE GUARAMACAL', 270),
(871, 'CARACHE', 271),
(872, 'LA CONCEPCION', 271),
(873, 'CUICAS', 271),
(874, 'PANAMERICANA', 271),
(875, 'SANTA CRUZ', 271),
(876, 'ESCUQUE', 272),
(877, 'SABANA LIBRE', 272),
(878, 'LA UNION', 272),
(879, 'SANTA RITA', 272),
(880, 'CRISTOBAL MENDOZA', 273),
(881, 'CHIQUINQUIRA', 273),
(882, 'MATRIZ', 273),
(883, 'MONSEÑOR CARRILLO', 273),
(884, 'CRUZ CARRILLO', 273),
(885, 'ANDRES LINARES', 273),
(886, 'TRES ESQUINAS', 273),
(887, 'LA QUEBRADA', 274),
(888, 'JAJO', 274),
(889, 'LA MESA', 274),
(890, 'SANTIAGO', 274),
(891, 'CABIMBU', 274),
(892, 'TUÑAME', 274),
(893, 'MERCEDES DIAZ', 275),
(894, 'JUAN IGNACIO MONTILLA', 275),
(895, 'LA BEATRIZ', 275),
(896, 'MENDOZA', 275),
(897, 'LA PUERTA', 275),
(898, 'SAN LUIS', 275),
(899, 'CHEJENDE', 276),
(900, 'CARRILLO', 276),
(901, 'CEGARRA', 276),
(902, 'BOLIVIA', 276),
(903, 'MANUEL SALVADOR ULLOA', 276),
(904, 'SAN JOSE', 276),
(905, 'ARNOLDO GABALDON', 276),
(906, 'EL DIVIDIVE', 277),
(907, 'AGUA CALIENTE', 277),
(908, 'EL CENIZO', 277),
(909, 'AGUA SANTA', 277),
(910, 'VALERITA', 277),
(911, 'MONTE CARMELO', 278),
(912, 'BUENA VISTA', 278),
(913, 'STA MARIA DEL HORCON', 278),
(914, 'MOTATAN', 279),
(915, 'EL BAÑO', 279),
(916, 'JALISCO', 279),
(917, 'PAMPAN', 280),
(918, 'SANTA ANA', 280),
(919, 'LA PAZ', 280),
(920, 'FLOR DE PATRIA', 280),
(921, 'CARVAJAL', 281),
(922, 'ANTONIO N BRICEÑO', 281),
(923, 'CAMPO ALEGRE', 281),
(924, 'JOSE LEONARDO SUAREZ', 281),
(925, 'SABANA DE MENDOZA', 282),
(926, 'JUNIN', 282),
(927, 'VALMORE RODRIGUEZ', 282),
(928, 'EL PARAISO', 282),
(929, 'SANTA ISABEL', 283),
(930, 'ARAGUANEY', 283),
(931, 'EL JAGUITO', 283),
(932, 'LA ESPERANZA', 283),
(933, 'SABANA GRANDE', 284),
(934, 'CHEREGUE', 284),
(935, 'GRANADOS', 284),
(936, 'EL SOCORRO', 285),
(937, 'LOS CAPRICHOS', 285),
(938, 'ANTONIO JOSE DE SUCRE', 285),
(939, 'CAMPO ELIAS', 286),
(940, 'ARNOLDO GABALDON', 286),
(941, 'SANTA APOLONIA', 287),
(942, 'LA CEIBA', 287),
(943, 'EL PROGRESO', 287),
(944, 'TRES DE FEBRERO', 287),
(945, 'PAMPANITO', 288),
(946, 'PAMPANITO II', 288),
(947, 'LA CONCEPCION', 288),
(948, 'CM. AROA', 289),
(949, 'CM. CHIVACOA', 290),
(950, 'CAMPO ELIAS', 290),
(951, 'CM. NIRGUA', 291),
(952, 'SALOM', 291),
(953, 'TEMERLA', 291),
(954, 'CM. SAN FELIPE', 292),
(955, 'ALBARICO', 292),
(956, 'SAN JAVIER', 292),
(957, 'CM. GUAMA', 293),
(958, 'CM. URACHICHE', 294),
(959, 'CM. YARITAGUA', 295),
(960, 'SAN ANDRES', 295),
(961, 'CM. SABANA DE PARRA', 296),
(962, 'CM. BORAURE', 297),
(963, 'CM. COCOROTE', 298),
(964, 'CM. INDEPENDENCIA', 299),
(965, 'CM. SAN PABLO', 300),
(966, 'CM. YUMARE', 301),
(967, 'CM. FARRIAR', 302),
(968, 'EL GUAYABO', 302),
(969, 'GENERAL URDANETA', 303),
(970, 'LIBERTADOR', 303),
(971, 'MANUEL GUANIPA MATOS', 303),
(972, 'MARCELINO BRICEÑO', 303),
(973, 'SAN TIMOTEO', 303),
(974, 'PUEBLO NUEVO', 303),
(975, 'PEDRO LUCAS URRIBARRI', 304),
(976, 'SANTA RITA', 304),
(977, 'JOSE CENOVIO URRIBARR', 304),
(978, 'EL MENE', 304),
(979, 'SANTA CRUZ DEL ZULIA', 305),
(980, 'URRIBARRI', 305),
(981, 'MORALITO', 305),
(982, 'SAN CARLOS DEL ZULIA', 305),
(983, 'SANTA BARBARA', 305),
(984, 'LUIS DE VICENTE', 306),
(985, 'RICAURTE', 306),
(986, 'MONS.MARCOS SERGIO G', 306),
(987, 'SAN RAFAEL', 306),
(988, 'LAS PARCELAS', 306),
(989, 'TAMARE', 306),
(990, 'LA SIERRITA', 306),
(991, 'BOLIVAR', 307),
(992, 'COQUIVACOA', 307),
(993, 'CRISTO DE ARANZA', 307),
(994, 'CHIQUINQUIRA', 307),
(995, 'SANTA LUCIA', 307),
(996, 'OLEGARIO VILLALOBOS', 307),
(997, 'JUANA DE AVILA', 307),
(998, 'CARACCIOLO PARRA PEREZ', 307),
(999, 'IDELFONZO VASQUEZ', 307),
(1000, 'CACIQUE MARA', 307),
(1001, 'CECILIO ACOSTA', 307),
(1002, 'RAUL LEONI', 307),
(1003, 'FRANCISCO EUGENIO B', 307),
(1004, 'MANUEL DAGNINO', 307),
(1005, 'LUIS HURTADO HIGUERA', 307),
(1006, 'VENANCIO PULGAR', 307),
(1007, 'ANTONIO BORJAS ROMERO', 307),
(1008, 'SAN ISIDRO', 307),
(1009, 'FARIA', 308),
(1010, 'SAN ANTONIO', 308),
(1011, 'ANA MARIA CAMPOS', 308),
(1012, 'SAN JOSE', 308),
(1013, 'ALTAGRACIA', 308),
(1014, 'GOAJIRA', 309),
(1015, 'ELIAS SANCHEZ RUBIO', 309),
(1016, 'SINAMAICA', 309),
(1017, 'ALTA GUAJIRA', 309),
(1018, 'SAN JOSE DE PERIJA', 310),
(1019, 'BARTOLOME DE LAS CASAS', 310),
(1020, 'LIBERTAD', 310),
(1021, 'RIO NEGRO', 310),
(1022, 'GIBRALTAR', 311),
(1023, 'HERAS', 311),
(1024, 'M.ARTURO CELESTINO A', 311),
(1025, 'ROMULO GALLEGOS', 311),
(1026, 'BOBURES', 311),
(1027, 'EL BATEY', 311),
(1028, 'ANDRES BELLO (KM 48)', 312),
(1029, 'POTRERITOS', 312),
(1030, 'EL CARMELO', 312),
(1031, 'CHIQUINQUIRA', 312),
(1032, 'CONCEPCION', 312),
(1033, 'ELEAZAR LOPEZ C', 313),
(1034, 'ALONSO DE OJEDA', 313),
(1035, 'VENEZUELA', 313),
(1036, 'CAMPO LARA', 313),
(1037, 'LIBERTAD', 313),
(1038, 'UDON PEREZ', 314),
(1039, 'ENCONTRADOS', 314),
(1040, 'DONALDO GARCIA', 315),
(1041, 'SIXTO ZAMBRANO', 315),
(1042, 'EL ROSARIO', 315),
(1043, 'AMBROSIO', 316),
(1044, 'GERMAN RIOS LINARES', 316),
(1045, 'JORGE HERNANDEZ', 316),
(1046, 'LA ROSA', 316),
(1047, 'PUNTA GORDA', 316),
(1048, 'CARMEN HERRERA', 316),
(1049, 'SAN BENITO', 316),
(1050, 'ROMULO BETANCOURT', 316),
(1051, 'ARISTIDES CALVANI', 316),
(1052, 'RAUL CUENCA', 317),
(1053, 'LA VICTORIA', 317),
(1054, 'RAFAEL URDANETA', 317),
(1055, 'JOSE RAMON YEPEZ', 318),
(1056, 'LA CONCEPCION', 318),
(1057, 'SAN JOSE', 318),
(1058, 'MARIANO PARRA LEON', 318),
(1059, 'MONAGAS', 319),
(1060, 'ISLA DE TOAS', 319),
(1061, 'MARCIAL HERNANDEZ', 320),
(1062, 'FRANCISCO OCHOA', 320),
(1063, 'SAN FRANCISCO', 320),
(1064, 'EL BAJO', 320),
(1065, 'DOMITILA FLORES', 320),
(1066, 'LOS CORTIJOS', 320),
(1067, 'BARI', 321),
(1068, 'JESUS M SEMPRUN', 321),
(1069, 'SIMON RODRIGUEZ', 322),
(1070, 'CARLOS QUEVEDO', 322),
(1071, 'FRANCISCO J PULGAR', 322),
(1072, 'RAFAEL MARIA BARALT', 323),
(1073, 'MANUEL MANRIQUE', 323),
(1074, 'RAFAEL URDANETA', 323),
(1075, 'FERNANDO GIRON TOVAR', 324),
(1076, 'LUIS ALBERTO GOMEZ', 324),
(1077, 'PARHUEÑA', 324),
(1078, 'PLATANILLAL', 324),
(1079, 'CM. SAN FERNANDO DE ATABA', 325),
(1080, 'UCATA', 325),
(1081, 'YAPACANA', 325),
(1082, 'CANAME', 325),
(1083, 'CM. MAROA', 326),
(1084, 'VICTORINO', 326),
(1085, 'COMUNIDAD', 326),
(1086, 'CM. SAN CARLOS DE RIO NEG', 327),
(1087, 'SOLANO', 327),
(1088, 'COCUY', 327),
(1089, 'CM. ISLA DE RATON', 328),
(1090, 'SAMARIAPO', 328),
(1091, 'SIPAPO', 328),
(1092, 'MUNDUAPO', 328),
(1093, 'GUAYAPO', 328),
(1094, 'CM. SAN JUAN DE MANAPIARE', 329),
(1095, 'ALTO VENTUARI', 329),
(1096, 'MEDIO VENTUARI', 329),
(1097, 'BAJO VENTUARI', 329),
(1098, 'CM. LA ESMERALDA', 330),
(1099, 'HUACHAMACARE', 330),
(1100, 'MARAWAKA', 330),
(1101, 'MAVACA', 330),
(1102, 'SIERRA PARIMA', 330),
(1103, 'SAN JOSE', 331),
(1104, 'VIRGEN DEL VALLE', 331),
(1105, 'SAN RAFAEL', 331),
(1106, 'JOSE VIDAL MARCANO', 331),
(1107, 'LEONARDO RUIZ PINEDA', 331),
(1108, 'MONS. ARGIMIRO GARCIA', 331),
(1109, 'MCL.ANTONIO J DE SUCRE', 331),
(1110, 'JUAN MILLAN', 331),
(1111, 'PEDERNALES', 332),
(1112, 'LUIS B PRIETO FIGUERO', 332),
(1113, 'CURIAPO', 333),
(1114, 'SANTOS DE ABELGAS', 333),
(1115, 'MANUEL RENAUD', 333),
(1116, 'PADRE BARRAL', 333),
(1117, 'ANICETO LUGO', 333),
(1118, 'ALMIRANTE LUIS BRION', 333),
(1119, 'IMATACA', 334),
(1120, 'ROMULO GALLEGOS', 334),
(1121, 'JUAN BAUTISTA ARISMEN', 334),
(1122, 'MANUEL PIAR', 334),
(1123, '5 DE JULIO', 334),
(1124, 'CARABALLEDA', 335),
(1125, 'CARAYACA', 335),
(1126, 'CARUAO', 335),
(1127, 'CATIA LA MAR', 335),
(1128, 'LA GUAIRA', 335),
(1129, 'MACUTO', 335),
(1130, 'MAIQUETIA', 335),
(1131, 'NAIGUATA', 335),
(1132, 'EL JUNKO', 335),
(1133, 'PQ RAUL LEONI', 335),
(1134, 'PQ CARLOS SOUBLETTE', 335);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `nombre`, `descripcion`) VALUES
(1, 'SUPER ADMINISTRADOR', 'EL QUE TIENE TODOS LOS PERMISOS EN EL SISTEMA'),
(2, 'ADMINISTRADOR', 'ADMINISTRADOR DE LA APLICACION'),
(3, 'ANALISTA', 'ENCARGADO DE GENERAR Y CONSULTAR SOLICITUDES'),
(4, 'JEFE', 'APRUEBA SOLICITUDES, GENERA REPORTES'),
(5, 'COORDINADOR', 'GENERA SOLICITUDES, CONSULTA REPORTES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nacionalidad` char(1) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` int(8) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `id_ocupacion` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_parroquia` int(11) NOT NULL,
  `id_edocivil` int(20) NOT NULL,
  PRIMARY KEY (`id`,`cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nacionalidad`, `nombres`, `apellidos`, `cedula`, `fecha_nacimiento`, `sexo`, `direccion`, `id_ocupacion`, `id_estado`, `id_municipio`, `id_parroquia`, `id_edocivil`) VALUES
(43, 'V', 'ROBERT', 'DE ABREU', 19387292, '1989-08-21', 'M', 'SIMON BOLIVAR', 8, 1, 1, 7, 3),
(44, 'V', 'DANIXI', 'HERNANDEZ', 20566987, '1992-10-27', 'M', 'CARIBE CALLE 99', 4, 17, 239, 786, 3),
(45, 'V', 'GABRIELA', 'ZAPATA', 19387291, '1990-01-29', 'F', 'ESQUINA ROJA  EDIFICIO EL LEMA', 6, 2, 4, 27, 1),
(46, 'V', 'FELIX', 'LAIRET', 12, '1900-04-08', '', 'ESQUINA AZUL EDIFICIO LA MONJA', 10, 17, 239, 788, 1),
(47, 'V', 'HECTOR', 'CUENCA', 8, '1897-06-25', 'M', 'LA CALLE 9 ', 10, 3, 25, 89, 3),
(48, 'V', 'TRINO', 'PERAZA', 3143233, '1946-06-16', 'M', 'ESQ. DE PIÑANGO', 1, 1, 1, 3, 1),
(49, 'V', 'LUIS', 'GOTTO', 4567854, '1954-01-21', '', 'LA ROSALEDA', 1, 4, 40, 141, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `realidad_socieconomica`
--

CREATE TABLE IF NOT EXISTS `realidad_socieconomica` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(250) NOT NULL,
  `ponderacion` int(11) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `realidad_socieconomica`
--

INSERT INTO `realidad_socieconomica` (`id`, `pregunta`, `ponderacion`, `estatus`) VALUES
(1, 'VIVIENDA EN OPTIMAS CONDICIONES SANITARIAS EN AMBIENTES DE GRAN LUJO', 1, 1),
(2, 'VIVIENDA EN OPTIMAS CONDICIONES SANITARIAS EN AMBIENTES CON LUJO SIN EXCESO Y SUFICIENTES ESPACIOS', 2, 1),
(3, 'VIVIENDAS CON BUENAS CONDICIONES SANITARIAS EN ESPACIOS REDUCIDOS O NO, PERO SIEMPRE MENORES QUE EN LAS VIVIENDAS 1 Y 2 ', 3, 1),
(4, 'VIVIENDAS CON AMBIENTES ESPACIOSOS O REDUCIDOS Y/O CON DEFICIENCIAS EN ALGUNAS CONDICIONES SANITARIAS', 4, 1),
(5, 'RANCHO O VIVIENDA CON CONDICIONES SANITARIAS MARCADAMENTE INADECUADAS Y REFUGIOS', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcion`
--

CREATE TABLE IF NOT EXISTS `recepcion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `recepcion`
--

INSERT INTO `recepcion` (`id`, `nombre`, `descripcion`, `estatus`) VALUES
(1, 'SISTEMA DE INSTRUCCIONES DEL JEFE', 'NULL', 1),
(2, 'ACTIVIDAD DE CALLE', 'ESTO ES UNA PRUEBA', 1),
(3, 'ORGANIZACIONES COMUNITARIAS', 'NULL', 1),
(4, 'SECRETARIAS DEL GDC', 'NULL', 1),
(5, 'JEFATURAS DEL GDC', 'NULL', 1),
(6, 'ENTES ADSCRITOS DEL GDC', 'NULL', 1),
(7, 'ATENCION AL PUBLICO', 'NULL', 1),
(8, 'DE OTRAS INSTITUCIONES PUBLICAS', 'NULL', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretaria`
--

CREATE TABLE IF NOT EXISTS `secretaria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `secretaria`
--

INSERT INTO `secretaria` (`id`, `descripcion`, `estatus`) VALUES
(1, 'SECRETARIA DE GESTION SOCIAL', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `padre` int(11) DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `padre`, `estatus`) VALUES
(1, 'SUMINISTRO DE AGUA ', 0, 1),
(2, 'GAS', 0, 1),
(3, 'DESECHO DE BASURA', 0, 1),
(4, 'ENERGIA ELECTRICA', NULL, 1),
(5, 'TELEFONO', NULL, 1),
(6, 'INTERNET', NULL, 1),
(7, 'TELEVISIÓN POR SUSCRIPCION', NULL, 1),
(8, 'AGUAS SERVIDAS', 0, 1),
(9, 'TUBERIA', 1, 1),
(10, 'LLUVIA', 1, 1),
(11, 'MANANTIAL', 1, 1),
(12, 'POZO', 1, 1),
(13, 'TANQUE', 1, 1),
(14, 'CISTERNA', 1, 1),
(15, 'DIRECTO', 2, 1),
(16, 'BOMBONA', 2, 1),
(17, 'CAMION', 3, 1),
(18, 'CAMIONETA', 3, 1),
(19, 'CONTAINER', 3, 1),
(20, 'AL AIRE LIBRE', 3, 1),
(21, 'CLOACAS', 8, 1),
(22, 'POZO SEPTICO', 8, 1),
(23, 'LETRINA', 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_comunidad`
--

CREATE TABLE IF NOT EXISTS `servicios_comunidad` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `servicios_comunidad`
--

INSERT INTO `servicios_comunidad` (`id`, `nombre`, `estatus`) VALUES
(1, 'ESCALERAS Y CAMINERIAS', 1),
(2, 'ALUMBRADO PUBLICO', 1),
(3, 'AREAS RECREATIVAS', 1),
(4, 'CENTROS DE SALUD', 1),
(5, 'VIGILANCIA POLICIAL', 1),
(6, 'TELEFONOS PUBLICOS', 1),
(7, 'TRANSPORTE PUBLICO', 1),
(8, 'AREAS DEPORTIVAS', 1),
(9, 'SIMONCITO', 1),
(10, 'ESCUELA', 1),
(11, 'LICEO', 1),
(12, 'UNIVERSIDAD', 1),
(13, 'BIBLIOTECA', 1),
(14, 'INFOCENTRO', 1),
(15, 'DRENAJE FLUVIAL', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio_demografico_grupo`
--

CREATE TABLE IF NOT EXISTS `socio_demografico_grupo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_solicitud` int(11) NOT NULL,
  `id_viviendas` varchar(250) NOT NULL,
  `id_paredes` varchar(250) NOT NULL,
  `id_pisos` varchar(250) NOT NULL,
  `id_techos` varchar(250) NOT NULL,
  `id_agua` varchar(250) NOT NULL,
  `id_gas` varchar(250) NOT NULL,
  `id_basura` varchar(250) NOT NULL,
  `id_agua_servida` varchar(250) NOT NULL,
  `id_comunidad` varchar(250) NOT NULL,
  `id_comite` varchar(250) NOT NULL,
  `id_misiones` varchar(250) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `socio_demografico_grupo`
--

INSERT INTO `socio_demografico_grupo` (`id`, `id_solicitud`, `id_viviendas`, `id_paredes`, `id_pisos`, `id_techos`, `id_agua`, `id_gas`, `id_basura`, `id_agua_servida`, `id_comunidad`, `id_comite`, `id_misiones`) VALUES
(1, 10, 'a:2:{i:0;s:1:"1";i:1;s:1:"2";}', 'a:2:{i:0;s:1:"1";i:1;s:1:"2";}', 'a:2:{i:0;s:1:"1";i:1;s:1:"2";}', 'a:2:{i:0;s:1:"1";i:1;s:1:"2";}', 'a:2:{i:0;s:1:"9";i:1;s:2:"10";}', 'a:2:{i:0;s:2:"15";i:1;s:2:"16";}', 'a:2:{i:0;s:2:"17";i:1;s:2:"18";}', 'a:2:{i:0;s:2:"21";i:1;s:2:"22";}', 'a:2:{i:0;s:2:"11";i:1;s:2:"13";}', 'a:2:{i:0;s:2:"13";i:1;s:2:"14";}', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}'),
(2, 13, 'a:1:{i:0;s:1:"1";}', 'a:1:{i:0;s:1:"1";}', 'a:1:{i:0;s:1:"2";}', 'a:1:{i:0;s:1:"1";}', 'a:1:{i:0;s:2:"11";}', 'a:1:{i:0;s:2:"16";}', 'a:1:{i:0;s:2:"19";}', 'a:1:{i:0;s:2:"22";}', 'a:1:{i:0;s:1:"8";}', 'a:1:{i:0;s:1:"4";}', 'a:1:{i:0;s:2:"16";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(250) NOT NULL,
  `observacion` varchar(250) NOT NULL,
  `monto_solicitado` float NOT NULL,
  `monto_aprobado` float DEFAULT NULL,
  `id_beneficiario` int(11) NOT NULL,
  `id_solicitante` int(11) NOT NULL,
  `id_tsolicitud` int(11) NOT NULL,
  `id_coordinaciones` int(11) NOT NULL,
  `id_trecepcion` int(11) NOT NULL,
  `id_tatencion` int(11) DEFAULT NULL,
  `id_casa_comercial` int(11) DEFAULT NULL,
  `id_realidad_socieco` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `id_casa_comercial` (`id_casa_comercial`),
  KEY `id_tatencion` (`id_tatencion`),
  KEY `id_trecepcion` (`id_trecepcion`),
  KEY `id_coordinaciones` (`id_coordinaciones`),
  KEY `id_tsolicitud` (`id_tsolicitud`),
  KEY `id_solicitante` (`id_solicitante`),
  KEY `id_beneficiario` (`id_beneficiario`),
  KEY `id_usuarios` (`id_usuarios`),
  KEY `id_estatus` (`id_estatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `descripcion`, `observacion`, `monto_solicitado`, `monto_aprobado`, `id_beneficiario`, `id_solicitante`, `id_tsolicitud`, `id_coordinaciones`, `id_trecepcion`, `id_tatencion`, `id_casa_comercial`, `id_realidad_socieco`, `id_usuarios`, `id_estatus`, `created_at`, `updated_at`) VALUES
(10, 'ES SIMPLEMENTE EL TEXTO DE RELLENO DE LAS IMPRENTAS Y ARCHIVOS DE TEXTO. LOREM IPSUM HA SIDO EL TEXTO DE RELLENO ESTÁNDAR DE LAS', 'INDUSTRIAS DESDE EL AÑO 1500, CUANDO UN IMPRESOR (N. DEL T. PERSONA QUE SE DEDICA A LA IMPRENTA) DESCONOCIDO USÓ UNA GALERÍA DE', 89000, NULL, 43, 44, 1, 1, 5, NULL, 1, 3, 1, 1, '2016-01-13 16:07:11', '2016-01-13 20:37:11'),
(11, 'ES UN HECHO ESTABLECIDO HACE DEMASIADO TIEMPO QUE UN LECTOR SE DISTRAERÁ CON EL CONTENIDO DEL TEXTO DE UN SITIO MIENTRAS QUE MIRA SU DISEÑO. EL PUNTO DE USAR LOREM IPSUM ES QUE TIENE UNA DISTRIBUCIÓN MÁS O MENOS NORMAL DE LAS LETRAS, AL CONTRARIO DE ', 'AL CONTRARIO DEL PENSAMIENTO POPULAR, EL TEXTO DE LOREM IPSUM NO ES SIMPLEMENTE TEXTO ALEATORIO. TIENE SUS RAICES EN UNA PIEZA CL´SICA DE LA LITERATURA DEL LATIN, QUE DATA DEL AÑO 45 ANTES DE CRISTO, HACIENDO QUE ESTE ADQUIERA MAS DE 2000 AÑOS DE ANT', 25000, NULL, 45, 46, 10, 3, 7, NULL, 13, 2, 1, 1, '2015-12-14 14:42:30', '2015-12-08 21:02:11'),
(12, 'AL CONTRARIO DEL PENSAMIENTO POPULAR, EL TEXTO DE LOREM IPSUM NO ES SIMPLEMENTE TEXTO ALEATORIO. TIENE SUS RAICES EN UNA PIEZA CL´SICA DE LA LITERATURA DEL LATIN, QUE DATA DEL AÑO 45 ANTES DE CRISTO, HACIENDO QUE ESTE ADQUIERA MAS DE 2000 AÑOS DE ANT', 'AL CONTRARIO DEL PENSAMIENTO POPULAR, EL TEXTO DE LOREM IPSUM NO ES SIMPLEMENTE TEXTO ALEATORIO. TIENE SUS RAICES EN UNA PIEZA CL´SICA DE LA LITERATURA DEL LATIN, QUE DATA DEL AÑO 45 ANTES DE CRISTO, HACIENDO QUE ESTE ADQUIERA MAS DE 2000 AÑOS DE ANT', 40000, NULL, 47, 43, 7, 2, 7, NULL, 13, 3, 1, 1, '2015-12-14 14:42:25', '2015-12-08 23:15:32'),
(13, 'PROBLEMAS RESPIRATORIOS', '', 150000, NULL, 48, 49, 10, 3, 6, NULL, 24, 1, 1, 1, '2015-12-14 14:42:23', '2015-12-10 19:25:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subsecretaria`
--

CREATE TABLE IF NOT EXISTS `subsecretaria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(250) NOT NULL,
  `idsecretaria` int(11) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_subsecretaria_1` (`idsecretaria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `subsecretaria`
--

INSERT INTO `subsecretaria` (`id`, `descripcion`, `idsecretaria`, `estatus`) VALUES
(1, 'SUB-SECRETARIA DE ATENCION SOCIAL', 1, 1),
(2, 'SUB-SECRETARIA DE ATENCION A LA FAMILIA', 1, 1),
(3, 'PRUEBA-ROBERT', 1, 0),
(4, 'ESTO ES UNA PRUEBA', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE IF NOT EXISTS `telefonos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_tipo_telefono` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_persona` (`id_persona`),
  KEY `id_tipo_telefono` (`id_tipo_telefono`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`id`, `numero`, `id_persona`, `id_tipo_telefono`) VALUES
(1, 123456789, 43, 1),
(2, 2123230190, 43, 2),
(3, 123456789, 43, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tenencia_vivienda`
--

CREATE TABLE IF NOT EXISTS `tenencia_vivienda` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `estatus` tinyint(4) NOT NULL DEFAULT '1',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tenencia_vivienda`
--

INSERT INTO `tenencia_vivienda` (`id`, `nombre`, `estatus`) VALUES
(1, 'PROPIA', 1),
(2, 'ALQUILADA', 1),
(3, 'CEDIDA', 1),
(4, 'INVADIDA', 1),
(5, 'ADJUDICADO', 1),
(6, 'DE FAMILIAR', 1),
(7, 'ARRIMADO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_atencion`
--

CREATE TABLE IF NOT EXISTS `tipo_atencion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tipo_atencion`
--

INSERT INTO `tipo_atencion` (`id`, `nombre`, `descripcion`, `estatus`) VALUES
(1, 'ATENCION INMEDIATA', 'ATENCION INMEDIATA', 1),
(2, 'PUNTO DE CUENTA', 'PUNTO DE CUENTA', 1),
(3, 'LOTERIA DE CARACAS', 'ENVIAR A LOTERIA DE CARACAS', 1),
(4, 'REMITIR A OTRA INSTITUCION PUBLICA', 'ENVIAR A OTRA INSTITUCION PUBLICA', 1),
(5, 'PRUEBA', 'PRUEBA2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_institucion`
--

CREATE TABLE IF NOT EXISTS `tipo_institucion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_institucion`
--

INSERT INTO `tipo_institucion` (`id`, `nombre`, `descripcion`) VALUES
(1, 'SECTOR PUBLICO', 'INSTITUCION DE FINANCIAMIENTO PUBLICO'),
(2, 'SECTOR PRIVADO', 'INSTITUCION DE FINANCIAMIENTO PRIVADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pisos`
--

CREATE TABLE IF NOT EXISTS `tipo_pisos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `estatus` tinyint(4) NOT NULL DEFAULT '1',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tipo_pisos`
--

INSERT INTO `tipo_pisos` (`id`, `nombre`, `estatus`) VALUES
(1, 'GRANITO', 1),
(2, 'CERAMICA', 1),
(3, 'CEMENTO', 1),
(4, 'TIERRA', 1),
(5, 'PARKE', 1),
(6, 'MADERA', 1),
(7, 'PLASTICO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_solicitud`
--

CREATE TABLE IF NOT EXISTS `tipo_solicitud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `descripcion` varchar(11) DEFAULT NULL,
  `id_coordinacion` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idcoordinacion` (`id_coordinacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `tipo_solicitud`
--

INSERT INTO `tipo_solicitud` (`id`, `nombre`, `descripcion`, `id_coordinacion`) VALUES
(1, 'AYUDA TECNICA', NULL, 1),
(2, 'INTERVENCION QUIRURGICA', NULL, 1),
(3, 'TRATAMIENTO MEDICO', NULL, 1),
(4, 'INSUMOS MEDICOS', NULL, 1),
(5, 'EXAMENES MEDICOS', NULL, 1),
(6, 'OTRAS SOLICITUDES', NULL, 1),
(7, 'INTERVENCION TERAPEUTICA', NULL, 2),
(9, 'INTERVENCION QUIRURGICA', NULL, 3),
(10, 'TRATAMIENTO MEDICO', NULL, 3),
(11, 'INSUMOS MEDICOS', NULL, 3),
(12, 'EXAMENES MEDICOS', NULL, 3),
(13, 'SERVICIOS FUNERARIOS', NULL, 3),
(14, 'OTRAS SOLICITUDES', NULL, 3),
(15, 'APOYO CULTURAL EN EVENTOS JUVENILES', NULL, 5),
(16, 'APOYO A LA ADULTA Y ADULTO MAYOR EN DESAMPARO', NULL, 4),
(17, 'APOYO A LA MUJER VICTIMA DE LA VIOLENCIA DE G', NULL, 6),
(18, 'PROGRAMA EMBARAZADAS SALIMOS ADELANTE', NULL, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_techo`
--

CREATE TABLE IF NOT EXISTS `tipo_techo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `estatus` tinyint(4) NOT NULL DEFAULT '1',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tipo_techo`
--

INSERT INTO `tipo_techo` (`id`, `nombre`, `estatus`) VALUES
(1, 'PLATABANDA', 1),
(2, 'ZINC', 1),
(3, 'ACEROLIT', 1),
(4, 'ASBESTO', 1),
(5, 'TEJAS', 1),
(6, 'MACHIHEMBRADO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_telefono`
--

CREATE TABLE IF NOT EXISTS `tipo_telefono` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipo_telefono`
--

INSERT INTO `tipo_telefono` (`id`, `tipo`) VALUES
(1, 'CELULAR'),
(2, 'CASA'),
(3, 'TRABAJO'),
(4, 'OTRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vivienda`
--

CREATE TABLE IF NOT EXISTS `tipo_vivienda` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tipo_vivienda`
--

INSERT INTO `tipo_vivienda` (`id`, `nombre`, `estatus`) VALUES
(1, 'CASA', 1),
(2, 'RANCHO', 1),
(3, 'APARTAMENTO', 1),
(4, 'HABITACION\n', 1),
(5, 'REFUGIO', 1),
(6, 'CASA DE ABRIGO', 1),
(7, 'ESPACIOS IMPROVIZADOS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nacionalidad` varchar(1) NOT NULL DEFAULT 'V',
  `cedula` int(8) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `email` varchar(250) NOT NULL,
  `id_estatus` int(250) NOT NULL DEFAULT '1',
  `id_inst` int(250) NOT NULL,
  `id_secretaria` int(250) NOT NULL,
  `id_subsecre` int(250) NOT NULL,
  `id_perfil` int(250) NOT NULL,
  `id_cargo` int(250) NOT NULL,
  `id_coordinacion` int(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cargo` (`id_cargo`),
  KEY `id_coordinacion` (`id_coordinacion`),
  KEY `id_subsecre` (`id_subsecre`),
  KEY `id_secretaria` (`id_secretaria`),
  KEY `id_inst` (`id_inst`),
  KEY `id_perfil` (`id_perfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nacionalidad`, `cedula`, `nombres`, `apellidos`, `password`, `remember_token`, `created_at`, `updated_at`, `email`, `id_estatus`, `id_inst`, `id_secretaria`, `id_subsecre`, `id_perfil`, `id_cargo`, `id_coordinacion`) VALUES
(1, 'V', 19387292, 'ROBERT', 'DE ABREU', '$2y$10$IKWpCAC7.C.qh9rlT4GrD.wNadej6BPRl7HNJhtttQ/wZ6TeK04nu', 'HOHpCfhi1UV3sc8QWXNiBgu5Tywq8jtdJw0iCMMqXHQngclbHd2kFSTpNURv', '2015-12-21 14:10:10', '2015-12-21 18:40:10', 'ROBERT.DEABREU@GDC.GOB.VE', 1, 1, 1, 1, 2, 3, 1),
(2, 'V', 123456, 'LUIS', 'PEREZ', '$2y$10$A6u277cA9UYmWttGdVlxKumx1YwcXMGqeGOqTkqdLdPmTEdqAMUym', 'MxbZgFGi1510dAUCrNLVGUZtLMo02Pm1RhjkOMEQCwr0875zSVpE3qczgwRX', '2015-05-13 18:57:20', '2015-05-13 23:27:20', 'LUIS.PEREZ@GDC.GOB.VE', 1, 0, 1, 1, 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_solicitudes`
--

CREATE TABLE IF NOT EXISTS `usuarios_solicitudes` (
  `id_solicitud` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `id_solicitud` (`id_solicitud`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_solicitudes`
--

INSERT INTO `usuarios_solicitudes` (`id_solicitud`, `id_usuario`, `estatus`, `fecha_registro`) VALUES
(10, 1, 1, '2015-10-15 23:43:01'),
(10, 1, 2, '2015-10-19 15:58:48'),
(10, 1, 3, '2015-10-19 15:58:48'),
(11, 1, 1, '2015-12-08 21:02:11'),
(12, 1, 1, '2015-12-08 23:15:32'),
(13, 2, 1, '2015-12-10 19:25:52');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anexos_solicitud`
--
ALTER TABLE `anexos_solicitud`
  ADD CONSTRAINT `anexos_solicitud_ibfk_1` FOREIGN KEY (`id_anexo`) REFERENCES `anexos` (`id`),
  ADD CONSTRAINT `anexos_solicitud_ibfk_2` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitudes` (`id`);

--
-- Filtros para la tabla `beneficiario_discapacidad`
--
ALTER TABLE `beneficiario_discapacidad`
  ADD CONSTRAINT `beneficiario_discapacidad_ibfk_1` FOREIGN KEY (`id_discapacidad`) REFERENCES `discapacidad` (`id`),
  ADD CONSTRAINT `beneficiario_discapacidad_ibfk_2` FOREIGN KEY (`id_gdiscapacidad`) REFERENCES `grado_discapacidad` (`id`),
  ADD CONSTRAINT `beneficiario_discapacidad_ibfk_3` FOREIGN KEY (`id_beneficiario`) REFERENCES `personas` (`id`);

--
-- Filtros para la tabla `casa_comercial`
--
ALTER TABLE `casa_comercial`
  ADD CONSTRAINT `casa_comercial_ibfk_1` FOREIGN KEY (`id_tinstitucion`) REFERENCES `tipo_institucion` (`id`);

--
-- Filtros para la tabla `coordinacion`
--
ALTER TABLE `coordinacion`
  ADD CONSTRAINT `fk_coordinacion_1` FOREIGN KEY (`idsubsecretaria`) REFERENCES `subsecretaria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `fk_estado_pais` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `fk_municipio_estado1` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `opciones_perfiles`
--
ALTER TABLE `opciones_perfiles`
  ADD CONSTRAINT `opciones_perfiles_ibfk_4` FOREIGN KEY (`id_opcion`) REFERENCES `opciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `opciones_perfiles_ibfk_5` FOREIGN KEY (`id_perfil`) REFERENCES `usuarios` (`id_perfil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `opciones_perfiles_ibfk_6` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `parroquia`
--
ALTER TABLE `parroquia`
  ADD CONSTRAINT `fk_parroquia_municipio1` FOREIGN KEY (`municipio_id`) REFERENCES `municipio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `solicitudes_ibfk_10` FOREIGN KEY (`id_trecepcion`) REFERENCES `recepcion` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `solicitudes_ibfk_11` FOREIGN KEY (`id_tatencion`) REFERENCES `tipo_atencion` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `solicitudes_ibfk_12` FOREIGN KEY (`id_casa_comercial`) REFERENCES `casa_comercial` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `solicitudes_ibfk_13` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `solicitudes_ibfk_14` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id`),
  ADD CONSTRAINT `solicitudes_ibfk_8` FOREIGN KEY (`id_tsolicitud`) REFERENCES `tipo_solicitud` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `solicitudes_ibfk_9` FOREIGN KEY (`id_coordinaciones`) REFERENCES `coordinacion` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `subsecretaria`
--
ALTER TABLE `subsecretaria`
  ADD CONSTRAINT `fk_subsecretaria_1` FOREIGN KEY (`idsecretaria`) REFERENCES `secretaria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD CONSTRAINT `telefonos_ibfk_3` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `telefonos_ibfk_4` FOREIGN KEY (`id_tipo_telefono`) REFERENCES `tipo_telefono` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipo_solicitud`
--
ALTER TABLE `tipo_solicitud`
  ADD CONSTRAINT `tipo_solicitud_ibfk_2` FOREIGN KEY (`id_coordinacion`) REFERENCES `coordinacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_10` FOREIGN KEY (`id_coordinacion`) REFERENCES `coordinacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_6` FOREIGN KEY (`id_secretaria`) REFERENCES `secretaria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_7` FOREIGN KEY (`id_subsecre`) REFERENCES `subsecretaria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_8` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_9` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_solicitudes`
--
ALTER TABLE `usuarios_solicitudes`
  ADD CONSTRAINT `usuarios_solicitudes_ibfk_1` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitudes` (`id`),
  ADD CONSTRAINT `usuarios_solicitudes_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
