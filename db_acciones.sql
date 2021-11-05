-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-11-2021 a las 13:45:25
-- Versión del servidor: 8.0.25
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_acciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accion_empresa`
--

CREATE TABLE `accion_empresa` (
  `idaccionempresa` bigint NOT NULL,
  `fichaempresaid` bigint NOT NULL,
  `part_venta` int NOT NULL,
  `part_totales` int NOT NULL,
  `precio_ask` float NOT NULL,
  `monedaid` bigint NOT NULL,
  `situacion` int NOT NULL,
  `datecreated` datetime NOT NULL,
  `putter` int NOT NULL,
  `activa` tinyint(1) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `idanuncio` int NOT NULL,
  `empresaid` bigint NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`idanuncio`, `empresaid`, `descripcion`, `status`) VALUES
(1, 1, 'Anuncio número 1', 1),
(2, 3, 'Anuncio número 2', 1),
(3, 2, 'Anuncio número 3', 1),
(4, 4, 'Anuncio número 4', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cnae`
--

CREATE TABLE `cnae` (
  `idcnae` bigint NOT NULL,
  `codigo` varchar(15) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `cnae`
--

INSERT INTO `cnae` (`idcnae`, `codigo`, `descripcion`, `status`) VALUES
(1, 'A', 'Agricultura, ganaderÁa, silvicultura y pesca\r\n', 1),
(2, 'A01', 'Agricultura, ganaderÁa, caza y servicios relacionados con las mismas\r\n', 1),
(3, 'A011', 'Cultivos no perennes\r\n', 1),
(4, 'A0111', 'Cultivo de cereales (excepto arroz), leguminosas y semillas oleaginosas\r\n', 1),
(5, 'A0112', 'Cultivo de arroz\r\n', 1),
(6, 'A0113', 'Cultivo de hortalizas, raÁces y tubârculos\r\n', 1),
(7, 'A0114', 'Cultivo de caña de azúcar\r\n', 1),
(8, 'C13', 'Industria textil\r\n', 1),
(9, 'C21', 'Fabricación de productos farmacéuticos\r\n', 1),
(10, 'C2364', 'Fabricación de mortero\r\n', 1),
(11, 'C2573', 'Fabricación de herramientas\r\n', 1),
(12, 'F411', 'Promoción inmobiliaria\r\n', 1),
(13, 'G451', 'Venta de vehículos de motor\r\n', 1),
(14, 'H4942', 'Servicios de mudanza\r\n', 1),
(15, 'M731', 'Publicidad\r\n', 1),
(16, 'N801', 'Actividades de seguridad privada\r\n', 1),
(17, 'P85', 'Educación\r\n', 1),
(18, 'S9604', 'Actividades de mantenimiento físico\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo_postal`
--

CREATE TABLE `codigo_postal` (
  `idcodigopostal` bigint NOT NULL,
  `codigo` varchar(10) COLLATE utf8mb4_swedish_ci NOT NULL,
  `provincia` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `poblacion` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `pais` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `codigo_postal`
--

INSERT INTO `codigo_postal` (`idcodigopostal`, `codigo`, `provincia`, `poblacion`, `pais`) VALUES
(1, '08001', 'Barcelona', 'Barcelona', 'España'),
(2, '08002', 'Barcelona', 'Barcelona', 'España'),
(3, '43001', 'Tarragona', 'Tarragona', 'España'),
(4, '43002', 'Tarragona', 'Tarragona', 'España'),
(5, '08860', 'Castelldefels', 'Barcelona', 'España'),
(6, '08850', 'Gava', 'Barcelona', 'España'),
(7, '08840', 'Viladecans', ' Barcelona', 'España'),
(8, '08830', 'Sant Boi de Llobregat', 'Barcelona', 'España');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_empresa`
--

CREATE TABLE `datos_empresa` (
  `iddatosempresa` bigint NOT NULL,
  `empresaid` bigint NOT NULL,
  `personacontacto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `direccion_fiscal` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `coordenadas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `movil` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `web` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `codigopostalid` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `datos_empresa`
--

INSERT INTO `datos_empresa` (`iddatosempresa`, `empresaid`, `personacontacto`, `direccion`, `direccion_fiscal`, `coordenadas`, `telefono`, `movil`, `email`, `web`, `codigopostalid`) VALUES
(2, 4, 'Pedro', 'Avda Carrilet', 'Avda Carrilet', '', '936547878', '654789932', 'juguetes@gmail.com', 'juguetes.com', 7),
(3, 1, 'Antonio', 'Calle Barcelona', 'Calle Barcelona', '465464', '938979877', '789789799', 'antonio@gmail.com', 'antonio.com', 1),
(4, 3, 'Luisa', 'Avda Tibidabo', 'Avda Rosellon', '464+99+798+84654++9', '392583636', '987982455', 'luisa@gmail.com', 'lluisa.es', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_persona`
--

CREATE TABLE `datos_persona` (
  `iddatospersona` int NOT NULL,
  `personaid` bigint NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `codigopostalid` bigint NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `movil` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `datos_persona`
--

INSERT INTO `datos_persona` (`iddatospersona`, `personaid`, `direccion`, `email`, `codigopostalid`, `telefono`, `movil`) VALUES
(1, 1, 'Calle infinito', 'alex@gmail.com', 6, '936547878', '654789875'),
(2, 2, 'Calle Iglesia', 'enrique@gmail.com', 5, '396641515', '852369456'),
(3, 3, 'Calle del tiempo', 'lluvia@gmail.com', 2, '93654789632', '6969693212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idempresa` bigint NOT NULL,
  `rolid` bigint NOT NULL,
  `identificador_fiscal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `datacreated` datetime NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idempresa`, `rolid`, `identificador_fiscal`, `nombre`, `password`, `token`, `datacreated`, `status`) VALUES
(1, 5, '12345678', 'Alcampo', '', '', '2021-11-04 12:26:35', 1),
(2, 5, '77789456', 'Agricultura de Barcelona', '', '', '2021-11-04 12:26:35', 1),
(3, 5, '45678963', 'Tienda de electrodomesticos', '', '', '2021-11-04 12:28:06', 1),
(4, 5, '85236987', 'Tienda de juguetees ', '', '', '2021-11-04 12:28:06', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_empresa`
--

CREATE TABLE `ficha_empresa` (
  `idfichaempresa` bigint NOT NULL,
  `empresaid` bigint NOT NULL,
  `factruacion_tramos` int NOT NULL,
  `empleados_tramos` int NOT NULL,
  `import_export` int NOT NULL,
  `cargas_registrales` tinyint(1) NOT NULL,
  `iaeid` bigint NOT NULL,
  `cnaeid` bigint NOT NULL,
  `formajuridicaid` bigint NOT NULL,
  `sectorid` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `ficha_empresa`
--

INSERT INTO `ficha_empresa` (`idfichaempresa`, `empresaid`, `factruacion_tramos`, `empleados_tramos`, `import_export`, `cargas_registrales`, `iaeid`, `cnaeid`, `formajuridicaid`, `sectorid`) VALUES
(1, 1, 45454, 4, 454, 45, 4, 6, 17, 2),
(2, 4, 98989, 9898, 9, 98, 9, 12, 16, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_juridica`
--

CREATE TABLE `forma_juridica` (
  `idformajuridica` bigint NOT NULL,
  `acronimo` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `forma_juridica`
--

INSERT INTO `forma_juridica` (`idformajuridica`, `acronimo`, `descripcion`, `status`) VALUES
(1, 'Autonomo', 'Empresario Individual', 1),
(2, 'Responsabilidad Limitada', 'Emprendedor de responsabilidad limitada', 1),
(3, 'Comunidad de bienes', 'Comunidad de bienes', 1),
(4, 'Sociedad Civil', 'Sociedad Civil', 1),
(5, 'Sociedad Colectiva', 'Sociedad Colectiva', 1),
(6, 'Sociedad Comanditaria Simple', 'Sociedad Comanditaria Simple', 1),
(7, 'Sociedad de responsabilidad limitada', 'Sociedad de responsabilidad limitada', 1),
(8, 'Sociedad limitada de formación sucesiva ', 'Sociedad limitada nueva empresa', 1),
(9, 'Sociedad limitada nueva empresa', 'Sociedad limitada nueva empresa', 1),
(10, 'Sociedad Anónima', 'Sociedad Anónima', 1),
(11, 'Sociedad Comanditaria por acciones', 'Sociedad comanditaria por acciones', 1),
(12, 'Sociedad de responsabilidad limitada laboral', 'Sociedad de responsabilidad limitada laboral', 1),
(13, 'Sociedad Anónima Laboral', 'Sociedad Anónima Laboral', 1),
(14, 'Sociedad cooperativa', 'Sociedad cooperativa', 1),
(15, 'Sociedad cooperativa de trabajo asociado', 'Sociedad cooperativa de trabajo asociado', 1),
(16, 'Sociedades Profesionales ', 'Sociedades Profesionales ', 1),
(17, 'Sociedad agraria de transformación', 'Sociedad agraria de transformación', 1),
(18, 'Sociedad de Garantía recíproca', 'Sociedad de Garantía recíproca', 1),
(19, 'Entidades de capital riesgo', 'Entidades de capital riesgo', 1),
(20, 'Agrupación de interés económico', 'Agrupación de interés económico', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iae`
--

CREATE TABLE `iae` (
  `idiae` bigint NOT NULL,
  `epigrafe` varchar(15) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `iae`
--

INSERT INTO `iae` (`idiae`, `epigrafe`, `descripcion`, `status`) VALUES
(1, '1013', 'EXPLOT.INTENSIVA GANADO BOVINO DE CEBO            \r\n', 1),
(2, '11111', 'EXTRACCION Y PREPARACION DE HULLA                 \r\n', 1),
(3, '11221', 'EXTRACCION DE CRUDOS DE PETROLEO                  \r\n', 1),
(4, '11232', 'DISTRIBUCION DE GAS NATURAL                       \r\n', 1),
(5, '1130', 'REFINO DE PETROLEO                                \r\n', 1),
(6, '11431', 'TRANSFORMACION DE MINERALES RADIOACTIVOS          \r\n', 1),
(7, '11432', 'TRATAMIENTO DE RESIDUOS RADIOACTIVOS              \r\n', 1),
(8, '11511', 'PRODUCCION DE ENERGIA HIDROELECTRICA              \r\n', 1),
(9, '11512', 'PRODUCCION ENERGIA TERMOELECTRICA                 \r\n', 1),
(10, '11513', 'PRODUCCION ENERGIA ELECTRONUCLEAR                 \r\n', 1),
(11, '11514', 'OTRAS PRODUCCIONES DE ENERGIA                     \r\n', 1),
(12, '11515', 'TTE. Y DISTRIBUCION DE ELECTRICIDAD               \r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `idimagen` bigint NOT NULL,
  `imagen` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `sector` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro_pujas`
--

CREATE TABLE `libro_pujas` (
  `idlibropujas` bigint NOT NULL,
  `getter` int NOT NULL,
  `part_bid` int NOT NULL,
  `puja_bid` int NOT NULL,
  `monedaid` bigint NOT NULL,
  `datacreate` datetime NOT NULL,
  `accionempresaid` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `idmodulo` bigint NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`idmodulo`, `titulo`, `descripcion`, `status`) VALUES
(1, 'dashboard', 'dashboard', 1),
(2, 'usuarios', 'usuarios del sistema', 1),
(3, 'personas', 'personas', 1),
(4, 'empresas', 'empresas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moneda`
--

CREATE TABLE `moneda` (
  `idmoneda` bigint NOT NULL,
  `moneda` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `ascii` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `idpermiso` bigint NOT NULL,
  `rolid` bigint NOT NULL,
  `moduloid` bigint NOT NULL,
  `r` int NOT NULL DEFAULT '0',
  `w` int NOT NULL DEFAULT '0',
  `u` int NOT NULL DEFAULT '0',
  `d` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idpermiso`, `rolid`, `moduloid`, `r`, `w`, `u`, `d`) VALUES
(1, 1, 1, 1, 1, 1, 1),
(2, 5, 4, 1, 1, 1, 0),
(3, 3, 3, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` bigint NOT NULL,
  `rolid` bigint NOT NULL,
  `identificador_fiscal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_1` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_2` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `datecreate` datetime NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `rolid`, `identificador_fiscal`, `nombre`, `apellido_1`, `apellido_2`, `password`, `token`, `datecreate`, `status`) VALUES
(1, 1, '78789789789', 'Alex', 'Alex', 'Alex', '', '', '2021-11-04 13:36:36', 1),
(2, 3, '445145123', 'Enrique', 'Camacho', 'Martin', '', '', '2021-11-04 13:37:29', 1),
(3, 3, '456363636', 'Juan', 'Lluvia', 'Granizo', '', '', '2021-11-04 13:37:29', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` bigint NOT NULL,
  `nombrerol` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombrerol`, `descripcion`, `status`) VALUES
(1, 'Administrador', 'Acceso a todo el sistema', 1),
(2, 'Supervisor', 'Supervisor', 1),
(3, 'Persona', 'Persona', 1),
(5, 'Empresa', 'Empresa', 1),
(6, 'Coordinador', 'coordinador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE `sector` (
  `idsector` bigint NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`idsector`, `nombre`, `descripcion`) VALUES
(1, 'Administración y Gestión ', 'Administración y Gestión(Oficina y Despachos)'),
(2, 'Agricultura y Ganadería ', 'Agricultura y Ganadería '),
(3, 'Industria alimentaria', 'Industria alimentaria'),
(4, 'Grandes almacenes', 'Grandes almacenes'),
(5, 'Comercio', 'Comercio'),
(6, 'Construcción e industrias extractivas ', 'Construcción e industrias extractivas '),
(7, 'Actividades físico deportivas ', 'Actividades físico deportivas '),
(8, 'Educación', 'Educación'),
(9, 'Energía y agua', 'Energía y agua'),
(10, 'Finanzas y seguros', 'Finanzas y seguros'),
(11, 'Hostelería y Turismo', 'Hostelería y Turismo'),
(12, 'Información, comunicación y artes gráficas', 'Información, comunicación y artes gráficas'),
(13, 'Servicios Medioambientales', 'Servicios Medioambientales'),
(14, 'Metal', 'Metal'),
(15, 'Pesca y acuicultura ', 'Pesca y acuicultura '),
(16, 'Industria química y vidrio', 'Industria química y vidrio'),
(17, 'Sanidad', 'Sanidad'),
(18, 'Otros servicios', 'Otros servicios'),
(19, 'Servicios a las empresas', 'Servicios a las empresas'),
(20, 'Telecomunicaciones', 'Telecomunicaciones '),
(21, 'Textil, confección y piel', 'Textil, confección y piel'),
(22, 'Transporte y logística ', 'Transporte y logística '),
(23, 'Economía Social', 'Economía Social');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accion_empresa`
--
ALTER TABLE `accion_empresa`
  ADD PRIMARY KEY (`idaccionempresa`),
  ADD KEY `fichaempresaid` (`fichaempresaid`),
  ADD KEY `monedaid` (`monedaid`);

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`idanuncio`),
  ADD KEY `empresaid` (`empresaid`);

--
-- Indices de la tabla `cnae`
--
ALTER TABLE `cnae`
  ADD KEY `idcnae` (`idcnae`);

--
-- Indices de la tabla `codigo_postal`
--
ALTER TABLE `codigo_postal`
  ADD PRIMARY KEY (`idcodigopostal`);

--
-- Indices de la tabla `datos_empresa`
--
ALTER TABLE `datos_empresa`
  ADD PRIMARY KEY (`iddatosempresa`),
  ADD KEY `codigopostalid` (`codigopostalid`),
  ADD KEY `empresaid` (`empresaid`);

--
-- Indices de la tabla `datos_persona`
--
ALTER TABLE `datos_persona`
  ADD PRIMARY KEY (`iddatospersona`),
  ADD KEY `personaid` (`personaid`),
  ADD KEY `codigopostalid` (`codigopostalid`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`),
  ADD KEY `rolid` (`rolid`);

--
-- Indices de la tabla `ficha_empresa`
--
ALTER TABLE `ficha_empresa`
  ADD PRIMARY KEY (`idfichaempresa`),
  ADD KEY `empresaid` (`empresaid`),
  ADD KEY `iaeid` (`iaeid`),
  ADD KEY `cnaeid` (`cnaeid`),
  ADD KEY `formajuridicaid` (`formajuridicaid`),
  ADD KEY `sectorid` (`sectorid`);

--
-- Indices de la tabla `forma_juridica`
--
ALTER TABLE `forma_juridica`
  ADD PRIMARY KEY (`idformajuridica`);

--
-- Indices de la tabla `iae`
--
ALTER TABLE `iae`
  ADD PRIMARY KEY (`idiae`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`idimagen`),
  ADD KEY `sector` (`sector`);

--
-- Indices de la tabla `libro_pujas`
--
ALTER TABLE `libro_pujas`
  ADD PRIMARY KEY (`idlibropujas`),
  ADD KEY `monedaid` (`monedaid`),
  ADD KEY `accionempresaid` (`accionempresaid`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`idmodulo`);

--
-- Indices de la tabla `moneda`
--
ALTER TABLE `moneda`
  ADD PRIMARY KEY (`idmoneda`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`idpermiso`),
  ADD KEY `rolid` (`rolid`),
  ADD KEY `moduloid` (`moduloid`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`),
  ADD KEY `rolid` (`rolid`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`idsector`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accion_empresa`
--
ALTER TABLE `accion_empresa`
  MODIFY `idaccionempresa` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `idanuncio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cnae`
--
ALTER TABLE `cnae`
  MODIFY `idcnae` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `codigo_postal`
--
ALTER TABLE `codigo_postal`
  MODIFY `idcodigopostal` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `datos_empresa`
--
ALTER TABLE `datos_empresa`
  MODIFY `iddatosempresa` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `datos_persona`
--
ALTER TABLE `datos_persona`
  MODIFY `iddatospersona` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ficha_empresa`
--
ALTER TABLE `ficha_empresa`
  MODIFY `idfichaempresa` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `forma_juridica`
--
ALTER TABLE `forma_juridica`
  MODIFY `idformajuridica` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `iae`
--
ALTER TABLE `iae`
  MODIFY `idiae` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `idimagen` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libro_pujas`
--
ALTER TABLE `libro_pujas`
  MODIFY `idlibropujas` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `idmodulo` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `moneda`
--
ALTER TABLE `moneda`
  MODIFY `idmoneda` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `idpermiso` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sector`
--
ALTER TABLE `sector`
  MODIFY `idsector` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accion_empresa`
--
ALTER TABLE `accion_empresa`
  ADD CONSTRAINT `accion_empresa_ibfk_1` FOREIGN KEY (`fichaempresaid`) REFERENCES `ficha_empresa` (`idfichaempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `accion_empresa_ibfk_2` FOREIGN KEY (`monedaid`) REFERENCES `moneda` (`idmoneda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `anuncio_ibfk_1` FOREIGN KEY (`empresaid`) REFERENCES `empresa` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_empresa`
--
ALTER TABLE `datos_empresa`
  ADD CONSTRAINT `datos_empresa_ibfk_1` FOREIGN KEY (`codigopostalid`) REFERENCES `codigo_postal` (`idcodigopostal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_empresa_ibfk_2` FOREIGN KEY (`empresaid`) REFERENCES `empresa` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_persona`
--
ALTER TABLE `datos_persona`
  ADD CONSTRAINT `datos_persona_ibfk_1` FOREIGN KEY (`personaid`) REFERENCES `persona` (`idpersona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_persona_ibfk_2` FOREIGN KEY (`codigopostalid`) REFERENCES `codigo_postal` (`idcodigopostal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ficha_empresa`
--
ALTER TABLE `ficha_empresa`
  ADD CONSTRAINT `ficha_empresa_ibfk_1` FOREIGN KEY (`cnaeid`) REFERENCES `cnae` (`idcnae`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ficha_empresa_ibfk_2` FOREIGN KEY (`formajuridicaid`) REFERENCES `forma_juridica` (`idformajuridica`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ficha_empresa_ibfk_3` FOREIGN KEY (`iaeid`) REFERENCES `iae` (`idiae`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ficha_empresa_ibfk_4` FOREIGN KEY (`sectorid`) REFERENCES `sector` (`idsector`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ficha_empresa_ibfk_5` FOREIGN KEY (`empresaid`) REFERENCES `empresa` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`sector`) REFERENCES `sector` (`idsector`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libro_pujas`
--
ALTER TABLE `libro_pujas`
  ADD CONSTRAINT `libro_pujas_ibfk_1` FOREIGN KEY (`monedaid`) REFERENCES `moneda` (`idmoneda`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libro_pujas_ibfk_2` FOREIGN KEY (`accionempresaid`) REFERENCES `accion_empresa` (`idaccionempresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`moduloid`) REFERENCES `modulo` (`idmodulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
