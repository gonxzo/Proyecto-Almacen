/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : almacen_bd

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 03/03/2022 07:54:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for clasherramientas
-- ----------------------------
DROP TABLE IF EXISTS `clasherramientas`;
CREATE TABLE `clasherramientas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of clasherramientas
-- ----------------------------
INSERT INTO `clasherramientas` VALUES (1, 'MUEBLES Y ENSERES', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (2, 'EQUIPO DE COMPUTACION', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (3, 'EQUIPO ELECTRONICO', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (4, 'MATERIAL INFORMATIVO', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (5, 'MATERIAL DE APOYO AL MEJORAMIENTO DE VIVIENDA', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (6, 'MATERIAL DE ESCRITORIO', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (7, 'HERRAMIENTAS', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (8, 'CAPACITACION TALLER PARA LIDERES Y AUTORIDADES', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (9, 'CAPACITACION TALLER PARA PROMOTORES Y ALMACENEROS', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (10, 'CAPACITACION TALLER EN TECNICAS CONSTRUCTIVAS', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (11, 'PERSONAL DE PROYECTO ', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (12, 'ROPA DE TRABAJO', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (13, 'COMBUSTIBLES Y LUBRICANTES', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (14, 'ALQUILERES', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (15, 'EVALUACIONES AL PROYECTO', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (16, 'MANTENIMIENTO Y REPARACIONES', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (17, 'GASTOS VARIOS', NULL, NULL);

-- ----------------------------
-- Table structure for documentos
-- ----------------------------
DROP TABLE IF EXISTS `documentos`;
CREATE TABLE `documentos`  (
  `IdDocumento` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Documento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DocumentoDescripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`IdDocumento`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of documentos
-- ----------------------------

-- ----------------------------
-- Table structure for dynamic_fields
-- ----------------------------
DROP TABLE IF EXISTS `dynamic_fields`;
CREATE TABLE `dynamic_fields`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of dynamic_fields
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for herramientas
-- ----------------------------
DROP TABLE IF EXISTS `herramientas`;
CREATE TABLE `herramientas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idclasificacion` int NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 138 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of herramientas
-- ----------------------------
INSERT INTO `herramientas` VALUES (1, 'Escritorio de madera', 'PZA', '1', 1, NULL, NULL);
INSERT INTO `herramientas` VALUES (2, 'Silla de plástico', 'PZA', '2', 1, NULL, NULL);
INSERT INTO `herramientas` VALUES (3, 'Estantes metálico tipo mecano', 'PZA', '1', 1, NULL, NULL);
INSERT INTO `herramientas` VALUES (4, 'Pizarras Acrílicas', 'PZA', '1', 1, NULL, NULL);
INSERT INTO `herramientas` VALUES (5, 'Computadora portatil ', 'EQP', '-0.5', 2, NULL, '2022-02-28 03:46:01');
INSERT INTO `herramientas` VALUES (6, 'Flash Memory 8GB', 'PZA', '0.5', 2, NULL, NULL);
INSERT INTO `herramientas` VALUES (7, 'Impresora de tinta continua - multiuso  ', 'EQP', '0.5', 2, NULL, NULL);
INSERT INTO `herramientas` VALUES (8, 'GPS ', 'EQP', '1', 3, NULL, NULL);
INSERT INTO `herramientas` VALUES (9, 'Data Show', 'EQP', '1', 3, NULL, NULL);
INSERT INTO `herramientas` VALUES (10, 'Afiche s/mejoramiento vivienda', 'HJA', '40', 4, NULL, NULL);
INSERT INTO `herramientas` VALUES (11, 'Banner Educativo segun modelo proporcionado por la AEVIVIENDA', 'HJA', '1', 4, NULL, NULL);
INSERT INTO `herramientas` VALUES (12, 'INSUMOS DE COLOCADO DE PLACA', 'PZA', '1', 4, NULL, NULL);
INSERT INTO `herramientas` VALUES (13, 'Placa de numeracion de viviendas', 'PZA', '40', 4, NULL, NULL);
INSERT INTO `herramientas` VALUES (14, 'Formularios Impresos control de almacenes', 'PZA', '40', 5, NULL, NULL);
INSERT INTO `herramientas` VALUES (15, 'Maletin Almaceneros (Libros de actas, calculadora, tampos, sellos, engrampadoras, etc)', 'STK', '1', 5, NULL, NULL);
INSERT INTO `herramientas` VALUES (16, 'Maqueta Vivienda tipo', 'PZA', '1', 5, NULL, NULL);
INSERT INTO `herramientas` VALUES (17, 'Carpetas Familiares Plasticas ', 'PZA', '40', 5, NULL, NULL);
INSERT INTO `herramientas` VALUES (18, 'Impresión de tarjetas familiares', 'HJA', '40', 5, NULL, NULL);
INSERT INTO `herramientas` VALUES (19, 'Tablero de anotaciones ', 'PZA', '5', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (20, 'Papel sabana tamaño resma', 'PLI', '20', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (21, 'Cuadernos de actas', 'PZA', '2', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (22, 'Papel Bond tamaño oficio ', 'PQT', '1', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (23, 'Clips', 'CJA', '3', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (24, 'Perforadora', 'PZA', '2', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (25, 'Engrampadora', 'PZA', '2', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (26, 'Cinta scotch transparente', 'PZA', '3', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (27, 'Post-it', 'PZA', '5', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (28, 'Folders de plástico', 'PZA', '5', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (29, 'Cinta masquink', 'PZA', '2', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (30, 'Cuaderno de 30 hojas', 'PZA', '10', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (31, 'Grampas', 'CJA', '5', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (32, 'Bolígrafo', 'PZA', '10', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (33, 'Goma de borrar', 'PZA', '5', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (34, 'Lápiz negro', 'PZA', '10', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (35, 'Tajador', 'PZA', '5', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (36, 'Marcador de agua', 'PZA', '5', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (37, 'Cuaderno de 100 hojas tamaño carta', 'PZA', '10', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (38, 'Marcador indeleble', 'PZA', '5', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (39, 'Portadocumentos de plástico tamaño oficio', 'PZA', '5', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (40, 'Papel carbónico', 'HJA', '10', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (41, 'Archivadores de palanca', 'PZA', '10', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (42, 'Papel Bond tamaño carta ', 'PQT', '5', 6, NULL, NULL);
INSERT INTO `herramientas` VALUES (43, 'Combillo 2 libras', 'PZA', '1', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (44, 'Lápiz de carpintero', 'PZA', '5', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (45, 'Tenaza', 'PZA', '3', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (46, 'Llave Stilson', 'PZA', '0', 7, NULL, '2022-02-28 03:46:02');
INSERT INTO `herramientas` VALUES (47, 'Combo 5 libras', 'PZA', '3', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (48, 'Manguera transparente de nivel   3/8', 'M', '10', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (49, 'Destornillador punta estrella', 'PZA', '4', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (50, 'Pata de cabra', 'PZA', '2', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (51, 'Guantes de seguridad (especial)', 'PZA', '3', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (52, 'Escuadra 0.40 x 0.60', 'PZA', '5', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (53, 'Alicate', 'PZA', '5', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (54, 'Martillo', 'PZA', '5', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (55, 'Destornillador punta plana', 'PZA', '4', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (56, 'Pico y mango', 'PZA', '3', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (57, 'Estilete', 'PZA', '5', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (58, 'Flexo 10m de primera', 'PZA', '5', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (59, 'Badilejos', 'PZA', '1', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (60, 'Nivel de mano de 30 cm', 'PZA', '3', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (61, 'BROCHA 3\"', 'PZA', '40', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (62, 'Plancha', 'PZA', '5', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (63, 'Taladro', 'PZA', '1', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (64, 'Frotacho 15x20', 'PZA', '2', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (65, 'Balde plástico 20 lt', 'PZA', '1', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (66, 'Palas', 'PZA', '2', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (67, 'RODILLO ESPUMA', 'PZA', '40', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (68, 'Plomada   300 gr.', 'PZA', '5', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (69, 'Pinza de corte lateral', 'PZA', '2', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (70, 'Hilo tanza # 0.70', 'RL', '5', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (71, 'Barreta de 1.50 metros', 'PZA', '1', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (72, 'Tester multímetro', 'PZA', '1', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (73, 'Regla metálica 20 x 50 mm', 'PZA', '5', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (74, 'Llave perico', 'PZA', '2', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (75, 'Hojas para sierra mecánica', 'PZA', '5', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (76, 'Cepillo de acero', 'PZA', '1', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (77, 'Llave universal para tubos', 'PZA', '3', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (78, 'Serrucho para madera', 'PZA', '1', 7, NULL, '2022-02-28 03:46:02');
INSERT INTO `herramientas` VALUES (79, 'Pinza de electricista', 'PZA', '3', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (80, 'Sierra metálica', 'PZA', '2', 7, NULL, '2022-02-28 03:46:02');
INSERT INTO `herramientas` VALUES (81, 'Huincha de 50 mts tela', 'PZA', '1', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (82, 'Tarrajas de PVC de 1/2\"', 'PZA', '2', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (83, 'Flexo  10m', 'PZA', '3', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (84, 'Cinta masquink', 'PZA', '2', 8, NULL, NULL);
INSERT INTO `herramientas` VALUES (85, 'Lápiz negro', 'PZA', '6', 8, NULL, NULL);
INSERT INTO `herramientas` VALUES (86, 'Marcador de agua', 'PZA', '6', 8, NULL, NULL);
INSERT INTO `herramientas` VALUES (87, 'Tajador', 'PZA', '6', 8, NULL, NULL);
INSERT INTO `herramientas` VALUES (88, 'Papel sabana tamaño resma', 'PLI', '6', 8, NULL, NULL);
INSERT INTO `herramientas` VALUES (89, 'Papelografo', 'PZA', '6', 8, NULL, NULL);
INSERT INTO `herramientas` VALUES (90, 'Manual Capacitacion', 'PZA', '6', 8, NULL, NULL);
INSERT INTO `herramientas` VALUES (91, 'Bolígrafo', 'PZA', '6', 8, NULL, NULL);
INSERT INTO `herramientas` VALUES (92, 'Cuaderno de 30 hojas', 'PZA', '6', 8, NULL, NULL);
INSERT INTO `herramientas` VALUES (93, 'Goma de borrar', 'PZA', '6', 8, NULL, NULL);
INSERT INTO `herramientas` VALUES (94, 'Manual Capacitacion', 'PZA', '2', 9, NULL, NULL);
INSERT INTO `herramientas` VALUES (95, 'Bolígrafo', 'PZA', '2', 9, NULL, NULL);
INSERT INTO `herramientas` VALUES (96, 'Cuaderno de 30 hojas', 'PZA', '2', 9, NULL, NULL);
INSERT INTO `herramientas` VALUES (97, 'Goma de borrar', 'PZA', '2', 9, NULL, NULL);
INSERT INTO `herramientas` VALUES (98, 'Cinta masquink', 'PZA', '2', 9, NULL, NULL);
INSERT INTO `herramientas` VALUES (99, 'Lápiz negro', 'PZA', '2', 9, NULL, NULL);
INSERT INTO `herramientas` VALUES (100, 'Marcador de agua', 'PZA', '3', 9, NULL, NULL);
INSERT INTO `herramientas` VALUES (101, 'Tajador', 'PZA', '2', 9, NULL, NULL);
INSERT INTO `herramientas` VALUES (102, 'Papel sabana tamaño resma', 'PLI', '3', 9, NULL, NULL);
INSERT INTO `herramientas` VALUES (103, 'Goma de borrar', 'PZA', '40', 10, NULL, NULL);
INSERT INTO `herramientas` VALUES (104, 'Cinta masquink', 'PZA', '3', 10, NULL, NULL);
INSERT INTO `herramientas` VALUES (105, 'Lápiz negro', 'PZA', '40', 10, NULL, NULL);
INSERT INTO `herramientas` VALUES (106, 'Tajador', 'PZA', '40', 10, NULL, NULL);
INSERT INTO `herramientas` VALUES (107, 'Marcador de agua', 'PZA', '5', 10, NULL, NULL);
INSERT INTO `herramientas` VALUES (108, 'Portadocumentos de plástico tamaño oficio', 'PZA', '40', 10, NULL, NULL);
INSERT INTO `herramientas` VALUES (109, 'Papel sabana tamaño resma', 'PLI', '15', 10, NULL, NULL);
INSERT INTO `herramientas` VALUES (110, 'Tablero de anotaciones ', 'PZA', '40', 10, NULL, NULL);
INSERT INTO `herramientas` VALUES (111, 'Papelografo', 'PZA', '15', 10, NULL, NULL);
INSERT INTO `herramientas` VALUES (112, 'Manual Capacitacion', 'PZA', '40', 10, NULL, NULL);
INSERT INTO `herramientas` VALUES (113, 'Bolígrafo', 'PZA', '40', 10, NULL, NULL);
INSERT INTO `herramientas` VALUES (114, 'Cuaderno de 100 hojas tamaño carta', 'PZA', '40', 10, NULL, NULL);
INSERT INTO `herramientas` VALUES (115, 'Constructor Especialista p/instalación materiales prefabricados ', 'PERSONA', '1', 11, NULL, NULL);
INSERT INTO `herramientas` VALUES (116, 'Constructor Especialista p/instalación sanitaria y agua potable ', 'PERSONA', '1', 11, NULL, NULL);
INSERT INTO `herramientas` VALUES (117, 'Constructor Especialista p/instalación eléctrica ', 'PERSONA', '1', 11, NULL, NULL);
INSERT INTO `herramientas` VALUES (118, 'Técnico Constructor - Albañil apoyo social ', 'PERSONA', '2', 11, NULL, NULL);
INSERT INTO `herramientas` VALUES (119, 'Constructores Albañiles ', 'PERSONA', '4', 11, NULL, NULL);
INSERT INTO `herramientas` VALUES (120, 'Almacenero ', 'PERSONA', '1', 11, NULL, NULL);
INSERT INTO `herramientas` VALUES (121, 'Educador Social ', 'PERSONA', '1', 11, NULL, NULL);
INSERT INTO `herramientas` VALUES (122, 'Técnico Operativo de Área ', 'PERSONA', '1', 11, NULL, NULL);
INSERT INTO `herramientas` VALUES (123, 'Gorra ', 'PZA', '13', 12, NULL, NULL);
INSERT INTO `herramientas` VALUES (124, 'Botas ', 'PZA', '5', 12, NULL, NULL);
INSERT INTO `herramientas` VALUES (125, 'Guantes', 'PZA', '5', 12, NULL, NULL);
INSERT INTO `herramientas` VALUES (126, 'Overol', 'PZA', '8', 12, NULL, NULL);
INSERT INTO `herramientas` VALUES (127, 'Casco', 'PZA', '12', 12, NULL, NULL);
INSERT INTO `herramientas` VALUES (128, 'Chaleco de identificación', 'PZA', '15', 12, NULL, NULL);
INSERT INTO `herramientas` VALUES (129, 'Gasolina para camioneta(s)', 'LT', '1200', 13, NULL, NULL);
INSERT INTO `herramientas` VALUES (130, 'Gasolina para motocicleta(s)', 'LT', '1500', 13, NULL, NULL);
INSERT INTO `herramientas` VALUES (131, 'Cambio de aceite de todos los vehículos', 'LT', '10', 13, NULL, NULL);
INSERT INTO `herramientas` VALUES (132, 'Alquiler de Oficina', 'GLB', '1', 14, NULL, NULL);
INSERT INTO `herramientas` VALUES (133, 'Alquiler de Almacenes', 'GLB', '1', 14, NULL, NULL);
INSERT INTO `herramientas` VALUES (134, 'Evaluación de medio termino', 'GLB', '1', 15, NULL, NULL);
INSERT INTO `herramientas` VALUES (135, 'Camioneta ', 'GLB', '1', 16, NULL, NULL);
INSERT INTO `herramientas` VALUES (136, 'Motocicleta ', 'GLB', '1', 16, NULL, NULL);
INSERT INTO `herramientas` VALUES (137, 'Fotocopias', 'HJA', '400', 17, NULL, NULL);

-- ----------------------------
-- Table structure for materials
-- ----------------------------
DROP TABLE IF EXISTS `materials`;
CREATE TABLE `materials`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 122 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of materials
-- ----------------------------
INSERT INTO `materials` VALUES (1, 'ABRAZADERA DE 3\'\'', 'PIEZA', '18', '2022-01-29 13:47:08', '2022-02-28 03:13:01');
INSERT INTO `materials` VALUES (2, 'ALAMBRE DE AMARRE', 'KILOGRAMO', '50', '2022-01-29 13:47:17', '2022-01-31 06:22:05');
INSERT INTO `materials` VALUES (3, 'ALAMBRE DE COBRE N 10 AWG', 'M', '0', '2022-01-30 13:47:21', '2022-01-31 06:22:05');
INSERT INTO `materials` VALUES (4, 'ALAMBRE DE COBRE N 12 AWG', 'M', '4', '2022-01-30 13:47:26', '2022-02-28 03:31:39');
INSERT INTO `materials` VALUES (5, 'ALAMBRE DE COBRE N 14 AWG', 'M', '8', '2022-01-30 13:47:31', NULL);
INSERT INTO `materials` VALUES (6, 'ALAMBRE GALVANIZADO 12\n', 'KILOGRAMO\n', '65', '2022-01-31 13:47:45', NULL);
INSERT INTO `materials` VALUES (7, 'ALQUITRÁN\n', 'KILOGRAMO\n', '5', NULL, NULL);
INSERT INTO `materials` VALUES (8, 'BARANDA METÁLIC', 'M', '44', NULL, '2022-02-28 03:31:39');
INSERT INTO `materials` VALUES (9, 'BARNIZ', 'LT', '100', NULL, NULL);
INSERT INTO `materials` VALUES (10, 'BISAGRA DE 4\"\n', 'PIEZA\n', '2', NULL, NULL);
INSERT INTO `materials` VALUES (11, 'BISAGRA PARA METAL\n', 'PIEZA\n', '2', NULL, NULL);
INSERT INTO `materials` VALUES (12, 'BOTAGUAS DE CERÁMICA UNA CAÍDA\n', 'PIEZA\n', '4', NULL, NULL);
INSERT INTO `materials` VALUES (13, 'CAÑERIA DE ALUMINIO 1/2 (BRAZO DE DUCHA)', 'PIEZA\n', '90', NULL, NULL);
INSERT INTO `materials` VALUES (14, 'CAJA DE REGISTRO DE PVC\n', 'PIEZA\n', '56', NULL, NULL);
INSERT INTO `materials` VALUES (15, 'CAJA PARA 1 TERMICO ', 'PIEZA\n', '54', NULL, NULL);
INSERT INTO `materials` VALUES (16, 'CAJA PARA 3 TERMICOS ', 'PIEZA\n', '32', NULL, NULL);
INSERT INTO `materials` VALUES (17, 'CAJA PLÁSTICA CIRCULAR\n', 'PIEZA\n', '332', NULL, NULL);
INSERT INTO `materials` VALUES (18, 'CAJA PLÁSTICA RECTANGULAR\n', 'PIEZA\n', '23', NULL, NULL);
INSERT INTO `materials` VALUES (19, 'CAJA SIFONADA PVC C/REJILLA DE PISO', 'PIEZA\n', '23', NULL, NULL);
INSERT INTO `materials` VALUES (20, 'CALAMINA ONDULADA GALV.N°28 PREPINTADA\n', 'METRO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (21, 'CALAMINA PLÁSTICA', 'METRO ', '0', NULL, NULL);
INSERT INTO `materials` VALUES (22, 'CANALETA GALV.CORTE 33 NO. 28 Y ACCES.\n', 'METRO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (23, 'CARTON ALFALTICO ', 'METRO', '0', NULL, NULL);
INSERT INTO `materials` VALUES (24, 'CEMENTO BLANCO\n', 'KILOGRAMO\n', '40', NULL, '2022-02-28 03:13:01');
INSERT INTO `materials` VALUES (25, 'CEMENTO COLA\n', 'KILOGRAMO\n', '40', NULL, NULL);
INSERT INTO `materials` VALUES (26, 'CEMENTO PORTLAND\n', 'KILOGRAMO\n', '-77', NULL, '2022-02-28 03:13:01');
INSERT INTO `materials` VALUES (27, 'CERÁMICA NACIONAL\n', 'METRO\n', '56', NULL, NULL);
INSERT INTO `materials` VALUES (28, 'CHAPA EXTERIOR ', 'PIEZA', '10', NULL, NULL);
INSERT INTO `materials` VALUES (30, 'CHICOTILLO 0.40cm italiano\n', 'PIEZA\n', '2', NULL, NULL);
INSERT INTO `materials` VALUES (31, 'CIELO FALSO pvc Y ACCESORIOS\n', 'METRO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (32, 'CIELO FALSO YESO - PCV + ACCESORIOS', 'METRO', '0', NULL, NULL);
INSERT INTO `materials` VALUES (33, 'CINTA AISLANTE\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (34, 'CLAVOS\n', 'KILOGRAMO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (35, 'CODO DE 1/2\"FGGALV', 'PIEZA', '7', NULL, '2022-01-31 05:58:41');
INSERT INTO `materials` VALUES (36, 'CODO PVC DE 1/2\'\'', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (37, 'CODO PVC DE 5/8\"\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (38, 'CODO PVC DESAGÜE 2\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (39, 'CODO PVC DESAGÜE 3\"\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (40, 'CODO PVC DESAGÜE 4\"\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (41, 'COPLA PVC-1/2\'\'', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (42, 'CORDEL', 'METROS', '0', NULL, NULL);
INSERT INTO `materials` VALUES (43, 'ELECTRODOS', 'KILOGRAMO\n', '14', NULL, NULL);
INSERT INTO `materials` VALUES (44, 'ESQUINERO DE ALUMINIO ', 'M', '15', NULL, NULL);
INSERT INTO `materials` VALUES (45, 'FIERRO CORRUGADO 1/2\'\'', 'BR', '-10', NULL, '2022-02-28 03:13:01');
INSERT INTO `materials` VALUES (46, 'FIERRO CORRUGADO 1/4\'\'', 'BR', '24', NULL, '2022-02-28 03:13:01');
INSERT INTO `materials` VALUES (47, 'FIERRO CORRUGADO 3/8\'\'', 'BR', '44', NULL, NULL);
INSERT INTO `materials` VALUES (48, 'FIERRO CORRUGADO 5/16\'\'', 'BR', '55', NULL, NULL);
INSERT INTO `materials` VALUES (49, 'GANCHOS J DE 2,5\'\'', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (50, 'GRIFERIA PARA LAVAMANOS ', 'PIEZA\n', '400', NULL, NULL);
INSERT INTO `materials` VALUES (51, 'GRIFERIA PARA LAVAPLATOS ', 'PIEZA\n', '677', NULL, NULL);
INSERT INTO `materials` VALUES (52, 'GRIFO DE PARED DE 1/2\'\'', 'PIEZA\n', '665', NULL, NULL);
INSERT INTO `materials` VALUES (53, 'IMPERMEABILIZANTE CRIL,SOL Y LLUVIA', 'LITRO', '54', NULL, NULL);
INSERT INTO `materials` VALUES (54, 'INODORO TANQUE BAJO + ACCESORIOS ', 'PIEZA\n', '45', NULL, NULL);
INSERT INTO `materials` VALUES (55, 'INTERRUPTOR', 'PIEZA\n', '45', NULL, NULL);
INSERT INTO `materials` VALUES (56, 'LADRILLO 6H 24X15X10', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (57, 'LADRILLO GAMBOTE', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (58, 'LAVAMANOS C/PEDESTAL + ACCESORIOS', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (59, 'LAVANDERIA DE CEMENTO + ACCESORIOS ', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (60, 'LAVAPLATOS DE 1 FOSAY 1 FREDADERO + SOPAPA Y SIFON ', 'GLB', '0', NULL, NULL);
INSERT INTO `materials` VALUES (61, 'LIJA PARA PARED\n', 'HOJA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (62, 'LLAVE DE PASO 1/2\"\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (63, 'LLAVE DE PASO 1/2\"PARA DUCHA\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (64, 'MADERA DE CONSTRUCCIÓN (3 USOS)\n', 'PIE CUADRADO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (65, 'MASA ACRILICA', 'LITRO', '0', NULL, NULL);
INSERT INTO `materials` VALUES (66, 'MASA CORRIDA', 'LITRO', '0', NULL, NULL);
INSERT INTO `materials` VALUES (67, 'MEMBRANA AISLANTE BAJO PISO FLOTANTE ', 'M2', '0', NULL, NULL);
INSERT INTO `materials` VALUES (68, 'MEMBRANA ASFALTICA CON ALUMINIO ', 'M2', '0', NULL, NULL);
INSERT INTO `materials` VALUES (69, 'NIPLE PVC DE 1/2\'\'', 'PIEZAS', '0', NULL, NULL);
INSERT INTO `materials` VALUES (70, 'PANEL LED 24 W EMPOTRABLE', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (71, 'PEGAMENTO PARA LADRILLO ', 'KILOGRAMO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (72, 'PEGAMENTO PARA PVC\n', 'LITRO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (73, 'PERFIL COSTANERA GALV.50*25*10-2MM(6M)\n', 'M', '0', NULL, NULL);
INSERT INTO `materials` VALUES (74, 'PERFIL COSTANERA GALV.80*40*15-2MM(6M)\n', 'M', '0', NULL, NULL);
INSERT INTO `materials` VALUES (75, 'PINTURA ANTICORROSIVA\n', 'GALON\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (76, 'PINTURA LATEX (BALDE 18 LT)\n', 'BALDE-GAL\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (77, 'PINTURA LÁTEX(ENGOMADA-BALDE 18 LT)\n', 'BALDE\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (78, 'PISO FLOTANTE HDF 8MM + ACCESORIOS\n', '', '0', NULL, NULL);
INSERT INTO `materials` VALUES (79, 'PLANTIN ', 'UNIDAD', '0', NULL, NULL);
INSERT INTO `materials` VALUES (80, 'PLETINA DE 1/8\"X 3/4\"-(BAJANTE)\n', 'METRO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (81, 'POLIETILENO 200 MICRONES\n', 'METRO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (82, 'PUERTA MIXTA METAL Y MADERA 1X2,10 INC/MARCO', 'PIEZA', '0', NULL, NULL);
INSERT INTO `materials` VALUES (83, 'PUERTA TABLERO CON MARCO DE MADERA SEMI DURA\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (84, 'PUERTA TABLERO CON MARCO DE MADERA SEMI DURA\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (85, 'REJILLA DE PISO METÁLICA fv\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (86, 'REJILLA DE VENTILACIÓN ', '', '0', NULL, NULL);
INSERT INTO `materials` VALUES (87, 'REJILLA DE VENTILACIÓN 20X20', 'PIEZA', '0', NULL, NULL);
INSERT INTO `materials` VALUES (88, 'SELLARROSCA', 'PIEZA', '0', NULL, NULL);
INSERT INTO `materials` VALUES (89, 'SELLADOR DE PARED ', 'LITROS ', '0', NULL, NULL);
INSERT INTO `materials` VALUES (90, 'SIFÓN DE PVC\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (91, 'SIFÓN DE LAVANDERIA', 'PIEZA', '0', NULL, NULL);
INSERT INTO `materials` VALUES (92, 'TANQUE SEPTICO DE PVC 900 Lt.', 'PIEZA', '0', NULL, NULL);
INSERT INTO `materials` VALUES (93, 'TANQUE PLÁSTICO DE AGUA 450 LITROS C/ACCESORIOS\n', 'GLB', '0', NULL, NULL);
INSERT INTO `materials` VALUES (94, 'SILICONA\n', 'TUBO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (95, 'SOCKET DE PORCELANA\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (96, 'TABLERO ELÉCTRICO 1 CIRCUITO(DUCHA)\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (97, 'TABLERO ELÉCTRICO 2 CIRCUITOS\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (98, 'TEEPVC D=1/2\"tupy\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (99, 'TEE PVC DESAGÜE 2\"\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (100, 'TEE PVC DESAGÜE 4\"\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (101, 'TEE PVC DESAGÜE 4\"A 2\"\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (102, 'TEFLON 3/4\"\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (103, 'TÉRMICO DE 20 AMP gacia\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (104, 'TERMICO DE 25 AMP gacia\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (105, 'TERMICO DE 30 AMP gacia\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (106, 'TOPE DE PUERTA ', 'PIEZA', '0', NULL, NULL);
INSERT INTO `materials` VALUES (107, 'TOMA CORRIENTE DOBLE', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (108, 'TORNILLO Y RAMPLU DE 6X2MM EL 100PZS', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (109, 'TUBERIA PVC 1 /2\"(L=6M)\n', 'BARRA-M\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (110, 'TUBO PVC 5/8\"(L=3M)\n', 'BARRA-M\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (111, 'TUBO PVC DE DESAGÜE 2\" (L=4M)\n', 'BARRA-M\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (112, 'TUBO PVC DE DESAGÜE 3\"(L=4M)\n', 'BARRA-M\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (113, 'TUBO PVC DE DESAGÜE 4\" (L=4M).\n', 'BARRA-M\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (114, 'UNION UNIVERSAL 1/2\"\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (115, 'VENTANA METÁLICA ANGULAR (0.60X1.10) 1\"X1/8\"+\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (116, 'VENTANA METÁLICA ANGULAR(1.50X1.10) 1\"X1/8\"+\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (117, 'VENTANA DE ALUMINIO LINEA 20 C/VIDRIO 4MM +\n', 'METRO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (118, 'VIDRIO DOBLE\n', 'METRO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (119, 'YEE PVC DESAGÜE 4\"A 2\"\n', 'PIEZA\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (120, 'YESO\n', 'KILOGRAMO\n', '0', NULL, NULL);
INSERT INTO `materials` VALUES (121, 'ZÓCALO (PISO FLOTANTE) Y TORNILLO-RAMPUG\n', 'METRO\n', '0', NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2015_01_20_084450_create_roles_table', 1);
INSERT INTO `migrations` VALUES (4, '2015_01_20_084525_create_role_user_table', 1);
INSERT INTO `migrations` VALUES (5, '2015_01_24_080208_create_permissions_table', 1);
INSERT INTO `migrations` VALUES (6, '2015_01_24_080433_create_permission_role_table', 1);
INSERT INTO `migrations` VALUES (7, '2015_12_04_003040_add_special_role_column', 1);
INSERT INTO `migrations` VALUES (8, '2017_10_17_170735_create_permission_user_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (10, '2021_02_24_194434_create_documentos_table', 1);
INSERT INTO `migrations` VALUES (11, '2021_08_24_174148_create_proyectos_table', 2);
INSERT INTO `migrations` VALUES (12, '2021_08_24_174657_create_asistencias_table', 3);
INSERT INTO `migrations` VALUES (13, '2021_09_25_162340_create_materials_table', 4);
INSERT INTO `migrations` VALUES (14, '2021_09_25_165942_create_clasherramientas_table', 5);
INSERT INTO `migrations` VALUES (15, '2021_09_25_170014_create_herramientas_table', 5);
INSERT INTO `migrations` VALUES (16, '2021_09_26_153019_create_dynamic_fields_table', 6);
INSERT INTO `migrations` VALUES (17, '2021_09_26_164055_create_students_table', 7);
INSERT INTO `migrations` VALUES (18, '2021_09_27_040120_create_trabajadors_table', 8);
INSERT INTO `migrations` VALUES (19, '2021_09_27_040928_create_pedidos_table', 9);
INSERT INTO `migrations` VALUES (20, '2021_09_27_052435_create_pedidocoms_table', 10);
INSERT INTO `migrations` VALUES (21, '2021_09_27_125054_create_pedidoherras_table', 11);
INSERT INTO `migrations` VALUES (22, '2021_09_27_125144_create_pedidohs_table', 11);
INSERT INTO `migrations` VALUES (23, '2022_02_24_144521_create_proyectos_table', 12);
INSERT INTO `migrations` VALUES (24, '2022_02_24_145908_create_proyectos_table', 13);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for pedidocoms
-- ----------------------------
DROP TABLE IF EXISTS `pedidocoms`;
CREATE TABLE `pedidocoms`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idtrab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 73 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pedidocoms
-- ----------------------------
INSERT INTO `pedidocoms` VALUES (71, '10', 'ALMACEN TIAHUNACU', '2022-02-28 03:13:01', '2022-02-28 03:13:01');
INSERT INTO `pedidocoms` VALUES (72, '10', 'ALMACEN LAJA', '2022-02-28 03:31:39', '2022-02-28 03:31:39');

-- ----------------------------
-- Table structure for pedidoherras
-- ----------------------------
DROP TABLE IF EXISTS `pedidoherras`;
CREATE TABLE `pedidoherras`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idph` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `herramienta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pedidoherras
-- ----------------------------
INSERT INTO `pedidoherras` VALUES (12, '12', '5', '1', '2022-02-28 03:46:01', '2022-02-28 03:46:01');
INSERT INTO `pedidoherras` VALUES (13, '12', '78', '2', '2022-02-28 03:46:02', '2022-02-28 03:46:02');
INSERT INTO `pedidoherras` VALUES (14, '12', '80', '2', '2022-02-28 03:46:02', '2022-02-28 03:46:02');
INSERT INTO `pedidoherras` VALUES (15, '12', '46', '2', '2022-02-28 03:46:02', '2022-02-28 03:46:02');

-- ----------------------------
-- Table structure for pedidohs
-- ----------------------------
DROP TABLE IF EXISTS `pedidohs`;
CREATE TABLE `pedidohs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idtrab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pedidohs
-- ----------------------------
INSERT INTO `pedidohs` VALUES (12, '10', 'ALMACEN TIAHUNACU', '2022-02-28 03:46:01', '2022-02-28 03:46:01');

-- ----------------------------
-- Table structure for pedidos
-- ----------------------------
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idpedidocom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 69 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pedidos
-- ----------------------------
INSERT INTO `pedidos` VALUES (62, '71', '1', '2', '2022-02-20 03:13:01', '2022-02-28 03:13:01');
INSERT INTO `pedidos` VALUES (63, '71', '24', '10', '2022-02-21 03:13:01', '2022-02-28 03:13:01');
INSERT INTO `pedidos` VALUES (64, '71', '26', '100', '2022-02-22 03:13:01', '2022-02-28 03:13:01');
INSERT INTO `pedidos` VALUES (65, '71', '45', '20', '2022-03-23 03:13:01', '2022-02-28 03:13:01');
INSERT INTO `pedidos` VALUES (66, '71', '46', '20', '2022-03-28 03:13:01', '2022-02-28 03:13:01');
INSERT INTO `pedidos` VALUES (67, '72', '8', '1', '2022-03-28 03:31:39', '2022-02-28 03:31:39');
INSERT INTO `pedidos` VALUES (68, '72', '4', '2', '2022-03-28 03:31:39', '2022-02-28 03:31:39');

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `permission_role_permission_id_index`(`permission_id`) USING BTREE,
  INDEX `permission_role_role_id_index`(`role_id`) USING BTREE,
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES (4, 58, 4, '2022-02-28 17:10:52', '2022-02-28 17:10:52');
INSERT INTO `permission_role` VALUES (5, 59, 4, '2022-02-28 17:10:52', '2022-02-28 17:10:52');
INSERT INTO `permission_role` VALUES (6, 60, 4, '2022-02-28 17:10:52', '2022-02-28 17:10:52');
INSERT INTO `permission_role` VALUES (7, 61, 4, '2022-02-28 17:10:52', '2022-02-28 17:10:52');
INSERT INTO `permission_role` VALUES (8, 62, 4, '2022-02-28 17:10:52', '2022-02-28 17:10:52');
INSERT INTO `permission_role` VALUES (9, 63, 4, '2022-02-28 17:10:52', '2022-02-28 17:10:52');
INSERT INTO `permission_role` VALUES (10, 29, 4, '2022-02-28 17:14:05', '2022-02-28 17:14:05');
INSERT INTO `permission_role` VALUES (11, 34, 4, '2022-02-28 17:14:05', '2022-02-28 17:14:05');

-- ----------------------------
-- Table structure for permission_user
-- ----------------------------
DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE `permission_user`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `permission_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `permission_user_permission_id_index`(`permission_id`) USING BTREE,
  INDEX `permission_user_user_id_index`(`user_id`) USING BTREE,
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of permission_user
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 64 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (15, 'USUARIO', 'users.index', 'NAVEGA LA TABLA USUARIOS', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (16, 'USUARIO', 'users.show', 'VISUALIZA A UN USUARIO EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (17, 'USUARIO', 'users.edit', 'EDITA A UN USUARIO EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (18, 'USUARIO', 'users.destroy', 'ELIMINA UN USUARIO EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (19, 'ROLES', 'roles.index', 'NAVEGA LA TABLA USUARIOS', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (20, 'ROLES', 'roles.show', 'VISUALIZA A UN ROL EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (21, 'ROLES', 'roles.create', 'CREA UN NUEVO ROL EN EL SISTEMA', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (22, 'ROLES', 'roles.edit', 'EDITA UN ROL EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (23, 'ROLES', 'roles.destroy', 'ELIMINA UN ROL EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (24, 'PROYECTOS', 'proyectos.index', 'NAVEGA LA TABLA PROYECTOS', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (25, 'PROYECTOS', 'proyectos.show', 'VISUALIZA A UN PROYECTO EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (26, 'PROYECTOS', 'proyectos.create', 'CREA UN NUEVO PROYECTO EN EL SISTEMA', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (27, 'PROYECTOS', 'proyectos.edit', 'EDITA UN PROYECTO EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (28, 'PROYECTOS', 'proyectos.destroy', 'ELIMINA UN PROYECTO EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (29, 'MATERIAL', 'materials.index', 'NAVEGA LA TABLA MATERIAL', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (30, 'MATERIAL', 'materials.show', 'VISUALIZA A UN MATERIAL EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (31, 'MATERIAL', 'materials.create', 'CREA UN NUEVO MATERIAL EN EL SISTEMA', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (32, 'MATERIAL', 'materials.edit', 'EDITA UN MATERIAL EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (33, 'MATERIAL', 'materials.destroy', 'ELIMINA UN MATERIAL EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (34, 'HERRAIENTAS', 'herramientas.index', 'NAVEGA LA TABLA HERRAIENTAS', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (35, 'HERRAIENTAS', 'herramientas.show', 'VISUALIZA A UN HERRAIENTA EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (36, 'HERRAIENTAS', 'herramientas.create', 'CREA UN NUEVO HERRAIENTA EN EL SISTEMA', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (37, 'HERRAIENTAS', 'herramientas.edit', 'EDITA UN HERRAIENTA EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (38, 'HERRAIENTAS', 'herramientas.destroy', 'ELIMINA UN HERRAIENTA EN ESPECIFICO', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (39, 'CLASHERRAMIENTA', 'clasherramientas.index', 'NAVEGA LA TABLA CLASHERRAMIENTA', '2022-02-28 17:02:38', '2022-02-28 17:02:38');
INSERT INTO `permissions` VALUES (40, 'CLASHERRAMIENTA', 'clasherramientas.show', 'VISUALIZA A UN CLASHERRAMIENTA EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (41, 'CLASHERRAMIENTA', 'clasherramientas.create', 'CREA UN NUEVO CLASHERRAMIENTA EN EL SISTEMA', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (42, 'CLASHERRAMIENTA', 'clasherramientas.edit', 'EDITA UN CLASHERRAMIENTA EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (43, 'CLASHERRAMIENTA', 'clasherramientas.destroy', 'ELIMINA UN CLASHERRAMIENTA EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (44, 'ALMACEN MATERIAL', 'pedidocoms.index', 'NAVEGA LA TABLA ALMACEN MATERIAL', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (45, 'ALMACEN MATERIAL', 'pedidocoms.show', 'VISUALIZA A UN ALMACEN MATERIAL EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (46, 'ALMACEN MATERIAL', 'pedidocoms.create', 'CREA UN NUEVO ALMACEN MATERIAL EN EL SISTEMA', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (47, 'ALMACEN MATERIAL', 'pedidocoms.edit', 'EDITA UN ALMACEN MATERIAL EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (48, 'ALMACEN MATERIAL', 'pedidocoms.destroy', 'ELIMINA UN ALMACEN MATERIAL EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (49, 'ALMACEN MATERIAL', 'pedidocoms.reporte', 'EDITA UN REPORTE GENERAL EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (50, 'ALMACEN MATERIAL', 'pedidocoms.reportefechas', 'ELIMINA UN REPORTE POR FECHAS EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (51, 'ALMACEN HERRAMIENTAS', 'pedidohs.index', 'NAVEGA LA TABLA ALMACEN MATERIAL', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (52, 'ALMACEN HERRAMIENTAS', 'pedidohs.show', 'VISUALIZA A UN ALMACEN MATERIAL EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (53, 'ALMACEN HERRAMIENTAS', 'pedidohs.create', 'CREA UN NUEVO ALMACEN HERRAMIENTAS EN EL SISTEMA', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (54, 'ALMACEN HERRAMIENTAS', 'pedidohs.edit', 'EDITA UN ALMACEN HERRAMIENTAS EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (55, 'ALMACEN HERRAMIENTAS', 'pedidohs.destroy', 'ELIMINA UN ALMACEN HERRAMIENTAS EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (56, 'ALMACEN HERRAMIENTAS', 'pedidohs.pdf', 'EDITA UN REPORTE HERRAMIENTAS EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (57, 'ALMACEN HERRAMIENTAS', 'pedidohs.reportefechas', 'ELIMINA UN REPORTE POR FECHAS EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (58, 'PEDIDO MATERIAL', 'pedidos.index', 'NAVEGA LA TABLA PEDIDO MATERIAL', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (59, 'PEDIDO MATERIAL', 'pedidos.show', 'VISUALIZA A UN PEDIDO MATERIAL EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (60, 'PEDIDO MATERIAL', 'pedidos.destroy', 'ELIMINA UN PEDIDO MATERIAL EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (61, 'PEDIDO HERRAMIENTA', 'pedidoherras.index', 'NAVEGA LA TABLA PEDIDO HERRAMIENTA', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (62, 'PEDIDO HERRAMIENTA', 'pedidoherras.show', 'VISUALIZA A UN PEDIDO HERRAMIENTA EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');
INSERT INTO `permissions` VALUES (63, 'PEDIDO HERRAMIENTA', 'pedidoherras.destroy', 'ELIMINA UN PEDIDO HERRAMIENTA EN ESPECIFICO', '2022-02-28 17:02:39', '2022-02-28 17:02:39');

-- ----------------------------
-- Table structure for proyectos
-- ----------------------------
DROP TABLE IF EXISTS `proyectos`;
CREATE TABLE `proyectos`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `superficieutil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechai` date NOT NULL,
  `fechaf` date NOT NULL,
  `fechae` date NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of proyectos
-- ----------------------------
INSERT INTO `proyectos` VALUES (1, 'VIVIENDA SOCIAL TIAHUANACU', 'CONSTRUCCIÓN NUEVA', 'BAÑO, COCINA, COMEDOR, 3 DORMITORIOS, SALA COMEDOR', 'EL PROYECTO CUENTA CON UNA TOPOLOGÍA DE VIVIENDA, CONSTRUIDA EN UN ÁREA DE 60.80 M2 Y CUENTA CON DOS DORMITORIOS, BAÑO, COCINA Y ESTAR-COMEDOR. EL SISTEMA CONSTRUCTIVO ES EL TRADICIONAL: CON CIMIENTOS Y SOBRECIMIENTOS DE HºCº, VIGA CADENA DE HºAº LADRILLO DE 6 H EN MUROS Y CUBIERTA DE CALAMINA GALVANIZADA N°… ETC', '2022-02-24', '2022-03-24', '2022-04-01', '2022-02-24 16:54:36', '2022-02-24 16:54:36');
INSERT INTO `proyectos` VALUES (2, 'VIVIENDA SOCIAL LAJA', 'CONSTRUCCIÓN NUEVA', 'BAÑO, COCINA, COMEDOR, 3 DORMITORIOS, SALA COMEDOR', 'LA OBRA', '2022-02-28', '2022-04-07', '2022-04-08', '2022-02-28 03:30:53', '2022-02-28 03:30:53');

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `role_user_role_id_index`(`role_id`) USING BTREE,
  INDEX `role_user_user_id_index`(`user_id`) USING BTREE,
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES (2, 1, 22, NULL, NULL);
INSERT INTO `role_user` VALUES (3, 4, 45, '2022-02-28 17:11:00', '2022-02-28 17:11:00');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `special` enum('all-access','no-access') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_unique`(`name`) USING BTREE,
  UNIQUE INDEX `roles_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Admin', 'admin', 'superUsuario', '2021-08-09 18:30:10', '2021-08-09 18:30:10', 'all-access');
INSERT INTO `roles` VALUES (3, 'usuario', 'user', 'solo usuarios designados', '2021-08-09 20:37:50', '2021-08-09 20:37:50', NULL);
INSERT INTO `roles` VALUES (4, 'ALMACENERO', 'ALMACEN', 'ALMACEN DE OBRA', '2022-02-28 17:10:52', '2022-02-28 17:10:52', NULL);

-- ----------------------------
-- Table structure for trabajadors
-- ----------------------------
DROP TABLE IF EXISTS `trabajadors`;
CREATE TABLE `trabajadors`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idusuario` bigint NOT NULL,
  `idproyecto` bigint NOT NULL,
  `cargo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of trabajadors
-- ----------------------------
INSERT INTO `trabajadors` VALUES (9, 22, 1, 'ALMACENERO', '2022-02-24', '2022-02-24 17:06:06', '2022-02-24 17:06:06');
INSERT INTO `trabajadors` VALUES (10, 22, 1, 'GERENTE', '2022-02-28', '2022-02-28 03:29:52', '2022-02-28 03:29:52');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (22, 'Federico del Castillo', 'gonzalo.carani@gmail.com', '', 0, NULL, '$2y$10$YEV3hkgZkAKE5PI/AzMLVumV65nn2faDy5YDy1cCtwcxmR5KF3AoG', NULL, '2021-08-09 18:47:39', '2022-02-24 15:19:13');
INSERT INTO `users` VALUES (45, 'MARCO CALLE MAMANI', 'marco@gmail.com', 'EL ALTO Z. CIUDAD SATELITE AV. DEL POLICIA', 78945645, NULL, '$2y$10$OMcbXVXHhespHabEWCgg5eXk5eKodM0UZUh4HoWesRIA100PAR35G', NULL, '2022-02-28 17:08:55', '2022-02-28 17:08:55');

SET FOREIGN_KEY_CHECKS = 1;
