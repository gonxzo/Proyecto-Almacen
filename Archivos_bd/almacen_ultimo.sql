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

 Date: 11/03/2022 22:43:31
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
-- Table structure for gastoherras
-- ----------------------------
DROP TABLE IF EXISTS `gastoherras`;
CREATE TABLE `gastoherras`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idpedidoh` int NOT NULL,
  `idherramienta` int NOT NULL,
  `cantidad` int NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gastoherras
-- ----------------------------

-- ----------------------------
-- Table structure for gastos
-- ----------------------------
DROP TABLE IF EXISTS `gastos`;
CREATE TABLE `gastos`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idpedidocom` int NOT NULL,
  `idmaterial` int NOT NULL,
  `cantidad` int NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gastos
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
INSERT INTO `herramientas` VALUES (43, 'Combillo 2 libras', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (44, 'Lápiz de carpintero', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (45, 'Tenaza', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (46, 'Llave Stilson', 'PZA', '100', 7, NULL, '2022-02-28 03:46:02');
INSERT INTO `herramientas` VALUES (47, 'Combo 5 libras', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (48, 'Manguera transparente de nivel   3/8', 'M', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (49, 'Destornillador punta estrella', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (50, 'Pata de cabra', 'PZA', '100', 7, NULL, '2022-03-10 14:35:37');
INSERT INTO `herramientas` VALUES (51, 'Guantes de seguridad (especial)', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (52, 'Escuadra 0.40 x 0.60', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (53, 'Alicate', 'PZA', '80', 7, NULL, '2022-03-11 17:28:18');
INSERT INTO `herramientas` VALUES (54, 'Martillo', 'PZA', '80', 7, NULL, '2022-03-11 17:28:18');
INSERT INTO `herramientas` VALUES (55, 'Destornillador punta plana', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (56, 'Pico y mango', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (57, 'Estilete', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (58, 'Flexo 10m de primera', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (59, 'Badilejos', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (60, 'Nivel de mano de 30 cm', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (61, 'BROCHA 3\"', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (62, 'Plancha', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (63, 'Taladro', 'PZA', '97', 7, NULL, '2022-03-11 17:28:19');
INSERT INTO `herramientas` VALUES (64, 'Frotacho 15x20', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (65, 'Balde plástico 20 lt', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (66, 'Palas', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (67, 'RODILLO ESPUMA', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (68, 'Plomada   300 gr.', 'PZA', '96', 7, NULL, '2022-03-11 17:28:19');
INSERT INTO `herramientas` VALUES (69, 'Pinza de corte lateral', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (70, 'Hilo tanza # 0.70', 'RL', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (71, 'Barreta de 1.50 metros', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (72, 'Tester multímetro', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (73, 'Regla metálica 20 x 50 mm', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (74, 'Llave perico', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (75, 'Hojas para sierra mecánica', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (76, 'Cepillo de acero', 'PZA', '100', 7, NULL, '2022-03-11 12:56:25');
INSERT INTO `herramientas` VALUES (77, 'Llave universal para tubos', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (78, 'Serrucho para madera', 'PZA', '100', 7, NULL, '2022-03-10 14:35:37');
INSERT INTO `herramientas` VALUES (79, 'Pinza de electricista', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (80, 'Sierra metálica', 'PZA', '100', 7, NULL, '2022-02-28 03:46:02');
INSERT INTO `herramientas` VALUES (81, 'Huincha de 50 mts tela', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (82, 'Tarrajas de PVC de 1/2\"', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (83, 'Flexo  10m', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (84, 'Cinta masquink', 'PZA', '100', 8, NULL, NULL);
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
INSERT INTO `herramientas` VALUES (125, 'Guantes', 'PZA', '-7', 12, NULL, '2022-03-11 12:56:25');
INSERT INTO `herramientas` VALUES (126, 'Overol', 'PZA', '-4', 12, NULL, '2022-03-11 12:56:25');
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
INSERT INTO `materials` VALUES (1, 'ABRAZADERA DE 3\'\'', 'PIEZA', '950', '2022-01-29 13:47:08', '2022-03-11 17:23:52');
INSERT INTO `materials` VALUES (2, 'ALAMBRE DE AMARRE', 'QUINTAL', '997', '2022-01-29 13:47:17', '2022-03-11 17:21:43');
INSERT INTO `materials` VALUES (3, 'ALAMBRE DE COBRE N 10 AWG', 'KILOGRAMO', '1000', '2022-01-30 13:47:21', '2022-01-31 06:22:05');
INSERT INTO `materials` VALUES (4, 'ALAMBRE DE COBRE N 12 AWG', 'KILOGRAMO', '1000', '2022-01-30 13:47:26', '2022-02-28 03:31:39');
INSERT INTO `materials` VALUES (5, 'ALAMBRE DE COBRE N 14 AWG', 'KILOGRAMO', '1000', '2022-01-30 13:47:31', NULL);
INSERT INTO `materials` VALUES (6, 'ALAMBRE GALVANIZADO 12', 'QUINTAL', '1000', '2022-01-31 13:47:45', '2022-03-09 05:49:48');
INSERT INTO `materials` VALUES (7, 'ALQUITRÁN\n', 'KILOGRAMO\n', '1000', NULL, '2022-03-10 14:26:21');
INSERT INTO `materials` VALUES (8, 'BARANDA METÁLIC', 'METRO', '1000', NULL, '2022-02-28 03:31:39');
INSERT INTO `materials` VALUES (9, 'BARNIZ', 'LITRO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (10, 'BISAGRA DE 4\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (11, 'BISAGRA PARA METAL\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (12, 'BOTAGUAS DE CERÁMICA UNA CAÍDA\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (13, 'CAÑERIA DE ALUMINIO 1/2 (BRAZO DE DUCHA)', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (14, 'CAJA DE REGISTRO DE PVC\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (15, 'CAJA PARA 1 TERMICO ', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (16, 'CAJA PARA 3 TERMICOS ', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (17, 'CAJA PLÁSTICA CIRCULAR\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (18, 'CAJA PLÁSTICA RECTANGULAR\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (19, 'CAJA SIFONADA PVC C/REJILLA DE PISO', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (20, 'CALAMINA ONDULADA GALV.N°28 PREPINTADA\n', 'METRO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (21, 'CALAMINA PLÁSTICA', 'METRO ', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (22, 'CANALETA GALV.CORTE 33 NO. 28 Y ACCES.\n', 'METRO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (23, 'CARTON ALFALTICO ', 'METRO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (24, 'CEMENTO BLANCO', 'BOLSA 1 kg', '990', NULL, '2022-03-11 17:18:38');
INSERT INTO `materials` VALUES (25, 'CEMENTO COLA', 'BOLSA 20 kg', '1000', NULL, '2022-03-09 05:48:53');
INSERT INTO `materials` VALUES (26, 'CEMENTO PORTLAND', 'BOLSA 45 kg', '798', NULL, '2022-03-11 17:23:52');
INSERT INTO `materials` VALUES (27, 'CERÁMICA NACIONAL\n', 'METRO\n', '990', NULL, '2022-03-11 17:21:44');
INSERT INTO `materials` VALUES (28, 'CHAPA EXTERIOR ', 'PIEZA', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (30, 'CHICOTILLO 0.40cm italiano\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (31, 'CIELO FALSO pvc Y ACCESORIOS\n', 'METRO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (32, 'CIELO FALSO YESO - PCV + ACCESORIOS', 'METRO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (33, 'CINTA AISLANTE\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (34, 'CLAVOS\n', 'KILOGRAMO\n', '1000', NULL, '2022-03-10 14:26:21');
INSERT INTO `materials` VALUES (35, 'CODO DE 1/2\"FGGALV', 'PIEZA', '1000', NULL, '2022-01-31 05:58:41');
INSERT INTO `materials` VALUES (36, 'CODO PVC DE 1/2\'\'', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (37, 'CODO PVC DE 5/8\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (38, 'CODO PVC DESAGÜE 2\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (39, 'CODO PVC DESAGÜE 3\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (40, 'CODO PVC DESAGÜE 4\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (41, 'COPLA PVC-1/2\'\'', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (42, 'CORDEL', 'METROS', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (43, 'ELECTRODOS', 'KILOGRAMO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (44, 'ESQUINERO DE ALUMINIO ', 'KILOGRAMO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (45, 'FIERRO CORRUGADO 1/2\'\'', 'BARRA', '980', NULL, '2022-03-11 17:21:44');
INSERT INTO `materials` VALUES (46, 'FIERRO CORRUGADO 1/4\'\'', 'BARRA', '960', NULL, '2022-03-11 17:23:52');
INSERT INTO `materials` VALUES (47, 'FIERRO CORRUGADO 3/8\'\'', 'BARRA', '990', NULL, '2022-03-11 17:23:52');
INSERT INTO `materials` VALUES (48, 'FIERRO CORRUGADO 5/16\'\'', 'BARRA', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (49, 'GANCHOS J DE 2,5\'\'', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (50, 'GRIFERIA PARA LAVAMANOS ', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (51, 'GRIFERIA PARA LAVAPLATOS ', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (52, 'GRIFO DE PARED DE 1/2\'\'', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (53, 'IMPERMEABILIZANTE CRIL,SOL Y LLUVIA', 'LITRO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (54, 'INODORO TANQUE BAJO + ACCESORIOS ', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (55, 'INTERRUPTOR', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (56, 'LADRILLO 6H 24X15X10', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (57, 'LADRILLO GAMBOTE', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (58, 'LAVAMANOS C/PEDESTAL + ACCESORIOS', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (59, 'LAVANDERIA DE CEMENTO + ACCESORIOS ', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (60, 'LAVAPLATOS DE 1 FOSAY 1 FREDADERO + SOPAPA Y SIFON ', 'GLB', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (61, 'LIJA PARA PARED\n', 'HOJA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (62, 'LLAVE DE PASO 1/2\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (63, 'LLAVE DE PASO 1/2\"PARA DUCHA\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (64, 'MADERA DE CONSTRUCCIÓN (3 USOS)\n', 'PIE CUADRADO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (65, 'MASA ACRILICA', 'LITRO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (66, 'MASA CORRIDA', 'LITRO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (67, 'MEMBRANA AISLANTE BAJO PISO FLOTANTE ', 'METRO CUADRADO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (68, 'MEMBRANA ASFALTICA CON ALUMINIO ', 'METRO CUADRADO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (69, 'NIPLE PVC DE 1/2\'\'', 'PIEZAS', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (70, 'PANEL LED 24 W EMPOTRABLE', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (71, 'PEGAMENTO PARA LADRILLO ', 'KILOGRAMO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (72, 'PEGAMENTO PARA PVC\n', 'LITRO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (73, 'PERFIL COSTANERA GALV.50*25*10-2MM(6M)\n', 'METRO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (74, 'PERFIL COSTANERA GALV.80*40*15-2MM(6M)\n', 'METRO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (75, 'PINTURA ANTICORROSIVA\n', 'GALON\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (76, 'PINTURA LATEX (BALDE 18 LT)\n', 'BALDE-GAL\n', '998', NULL, '2022-03-11 17:23:52');
INSERT INTO `materials` VALUES (77, 'PINTURA LÁTEX(ENGOMADA-BALDE 18 LT)\n', 'BALDE\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (78, 'PISO FLOTANTE HDF 8MM + ACCESORIOS\n', 'METRO CUADRADO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (79, 'PLANTIN ', 'UNIDAD', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (80, 'PLETINA DE 1/8\"X 3/4\"-(BAJANTE)\n', 'METRO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (81, 'POLIETILENO 200 MICRONES\n', 'METRO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (82, 'PUERTA MIXTA METAL Y MADERA 1X2,10 INC/MARCO', 'PIEZA', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (83, 'PUERTA TABLERO CON MARCO DE MADERA SEMI DURA\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (84, 'PUERTA TABLERO CON MARCO DE MADERA SEMI DURA\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (85, 'REJILLA DE PISO METÁLICA fv\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (86, 'REJILLA DE VENTILACIÓN ', '', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (87, 'REJILLA DE VENTILACIÓN 20X20', 'PIEZA', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (88, 'SELLARROSCA', 'PIEZA', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (89, 'SELLADOR DE PARED ', 'LITROS ', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (90, 'SIFÓN DE PVC\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (91, 'SIFÓN DE LAVANDERIA', 'PIEZA', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (92, 'TANQUE SEPTICO DE PVC 900 Lt.', 'PIEZA', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (93, 'TANQUE PLÁSTICO DE AGUA 450 LITROS C/ACCESORIOS\n', 'GLB', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (94, 'SILICONA\n', 'TUBO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (95, 'SOCKET DE PORCELANA\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (96, 'TABLERO ELÉCTRICO 1 CIRCUITO(DUCHA)\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (97, 'TABLERO ELÉCTRICO 2 CIRCUITOS\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (98, 'TEEPVC D=1/2\"tupy\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (99, 'TEE PVC DESAGÜE 2\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (100, 'TEE PVC DESAGÜE 4\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (101, 'TEE PVC DESAGÜE 4\"A 2\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (102, 'TEFLON 3/4\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (103, 'TÉRMICO DE 20 AMP gacia\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (104, 'TERMICO DE 25 AMP gacia\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (105, 'TERMICO DE 30 AMP gacia\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (106, 'TOPE DE PUERTA ', 'PIEZA', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (107, 'TOMA CORRIENTE DOBLE', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (108, 'TORNILLO Y RAMPLU DE 6X2MM EL 100PZS', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (109, 'TUBERIA PVC 1 /2\"(L=6M)\n', 'BARRA-M\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (110, 'TUBO PVC 5/8\"(L=3M)\n', 'BARRA-M\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (111, 'TUBO PVC DE DESAGÜE 2\" (L=4M)\n', 'BARRA-M\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (112, 'TUBO PVC DE DESAGÜE 3\"(L=4M)\n', 'BARRA-M\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (113, 'TUBO PVC DE DESAGÜE 4\" (L=4M).\n', 'BARRA-M\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (114, 'UNION UNIVERSAL 1/2\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (115, 'VENTANA METÁLICA ANGULAR (0.60X1.10) 1\"X1/8\"+\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (116, 'VENTANA METÁLICA ANGULAR(1.50X1.10) 1\"X1/8\"+\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (117, 'VENTANA DE ALUMINIO LINEA 20 C/VIDRIO 4MM +\n', 'METRO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (118, 'VIDRIO DOBLE\n', 'METRO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (119, 'YEE PVC DESAGÜE 4\"A 2\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (120, 'YESO\n', 'KILOGRAMO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (121, 'ZÓCALO (PISO FLOTANTE) Y TORNILLO-RAMPUG\n', 'METRO\n', '1000', NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

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
INSERT INTO `migrations` VALUES (25, '2022_03_11_094959_create_gastos_table', 14);
INSERT INTO `migrations` VALUES (26, '2022_03_11_122322_create_gastoherras_table', 15);

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
) ENGINE = InnoDB AUTO_INCREMENT = 78 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pedidocoms
-- ----------------------------
INSERT INTO `pedidocoms` VALUES (75, '13', 'ALMACEN TIAHUNACU', '2022-03-11 17:18:37', '2022-03-11 17:18:37');
INSERT INTO `pedidocoms` VALUES (76, '14', 'ALMACEN INQUISIVI', '2022-03-11 17:21:43', '2022-03-11 17:21:43');
INSERT INTO `pedidocoms` VALUES (77, '15', 'ALMACEN IRUPANA', '2022-03-11 17:23:52', '2022-03-11 17:23:52');

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
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pedidoherras
-- ----------------------------
INSERT INTO `pedidoherras` VALUES (23, '15', '53', '10', '2022-03-11 17:27:06', '2022-03-11 17:27:06');
INSERT INTO `pedidoherras` VALUES (24, '15', '54', '10', '2022-03-11 17:27:06', '2022-03-11 17:27:06');
INSERT INTO `pedidoherras` VALUES (25, '15', '68', '2', '2022-03-11 17:27:06', '2022-03-11 17:27:06');
INSERT INTO `pedidoherras` VALUES (26, '15', '63', '2', '2022-03-11 17:27:07', '2022-03-11 17:27:07');
INSERT INTO `pedidoherras` VALUES (27, '16', '54', '10', '2022-03-11 17:28:18', '2022-03-11 17:28:18');
INSERT INTO `pedidoherras` VALUES (28, '16', '53', '10', '2022-03-11 17:28:18', '2022-03-11 17:28:18');
INSERT INTO `pedidoherras` VALUES (29, '16', '63', '1', '2022-03-11 17:28:19', '2022-03-11 17:28:19');
INSERT INTO `pedidoherras` VALUES (30, '16', '68', '2', '2022-03-11 17:28:19', '2022-03-11 17:28:19');

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
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pedidohs
-- ----------------------------
INSERT INTO `pedidohs` VALUES (15, '13', 'ALMACEN TIAHUNACU', '2022-03-11 17:27:06', '2022-03-11 17:27:06');
INSERT INTO `pedidohs` VALUES (16, '13', 'ALMACEN INQUISIVI', '2022-03-11 17:28:18', '2022-03-11 17:28:18');

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
) ENGINE = InnoDB AUTO_INCREMENT = 97 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pedidos
-- ----------------------------
INSERT INTO `pedidos` VALUES (80, '75', '2', '1', '2022-03-11 17:18:37', '2022-03-11 17:18:37');
INSERT INTO `pedidos` VALUES (81, '75', '26', '100', '2022-03-11 17:18:37', '2022-03-11 17:18:37');
INSERT INTO `pedidos` VALUES (82, '75', '45', '10', '2022-03-11 17:18:37', '2022-03-11 17:18:37');
INSERT INTO `pedidos` VALUES (83, '75', '46', '10', '2022-03-11 17:18:37', '2022-03-11 17:18:37');
INSERT INTO `pedidos` VALUES (84, '75', '24', '10', '2022-03-11 17:18:38', '2022-03-11 17:18:38');
INSERT INTO `pedidos` VALUES (85, '76', '2', '2', '2022-03-11 17:21:43', '2022-03-11 17:21:43');
INSERT INTO `pedidos` VALUES (86, '76', '26', '100', '2022-03-11 17:21:43', '2022-03-11 17:21:43');
INSERT INTO `pedidos` VALUES (87, '76', '45', '10', '2022-03-11 17:21:44', '2022-03-11 17:21:44');
INSERT INTO `pedidos` VALUES (88, '76', '46', '10', '2022-03-11 17:21:44', '2022-03-11 17:21:44');
INSERT INTO `pedidos` VALUES (89, '76', '27', '10', '2022-03-11 17:21:44', '2022-03-11 17:21:44');
INSERT INTO `pedidos` VALUES (91, '77', '26', '2', '2022-03-11 17:23:52', '2022-03-11 17:23:52');
INSERT INTO `pedidos` VALUES (92, '77', '1', '50', '2022-03-11 17:23:52', '2022-03-11 17:23:52');
INSERT INTO `pedidos` VALUES (93, '77', '47', '10', '2022-03-11 17:23:52', '2022-03-11 17:23:52');
INSERT INTO `pedidos` VALUES (94, '77', '46', '10', '2022-03-11 17:23:52', '2022-03-11 17:23:52');
INSERT INTO `pedidos` VALUES (95, '77', '76', '2', '2022-03-11 17:23:52', '2022-03-11 17:23:52');
INSERT INTO `pedidos` VALUES (96, '77', '46', '10', '2022-03-11 17:23:52', '2022-03-11 17:23:52');

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
) ENGINE = InnoDB AUTO_INCREMENT = 59 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES (44, 73, 6, '2022-03-11 17:31:55', '2022-03-11 17:31:55');
INSERT INTO `permission_role` VALUES (45, 74, 6, '2022-03-11 17:31:55', '2022-03-11 17:31:55');
INSERT INTO `permission_role` VALUES (46, 83, 6, '2022-03-11 17:31:55', '2022-03-11 17:31:55');
INSERT INTO `permission_role` VALUES (47, 88, 6, '2022-03-11 17:31:56', '2022-03-11 17:31:56');
INSERT INTO `permission_role` VALUES (48, 112, 6, '2022-03-11 17:31:56', '2022-03-11 17:31:56');
INSERT INTO `permission_role` VALUES (49, 113, 6, '2022-03-11 17:31:56', '2022-03-11 17:31:56');
INSERT INTO `permission_role` VALUES (50, 114, 6, '2022-03-11 17:31:56', '2022-03-11 17:31:56');
INSERT INTO `permission_role` VALUES (51, 115, 6, '2022-03-11 17:31:56', '2022-03-11 17:31:56');
INSERT INTO `permission_role` VALUES (52, 116, 6, '2022-03-11 17:31:56', '2022-03-11 17:31:56');
INSERT INTO `permission_role` VALUES (53, 117, 6, '2022-03-11 17:31:56', '2022-03-11 17:31:56');
INSERT INTO `permission_role` VALUES (54, 75, 6, '2022-03-11 17:35:13', '2022-03-11 17:35:13');
INSERT INTO `permission_role` VALUES (55, 76, 6, '2022-03-11 17:35:14', '2022-03-11 17:35:14');
INSERT INTO `permission_role` VALUES (56, 77, 6, '2022-03-11 17:35:15', '2022-03-11 17:35:15');
INSERT INTO `permission_role` VALUES (57, 118, 6, '2022-03-11 17:40:57', '2022-03-11 17:40:57');
INSERT INTO `permission_role` VALUES (58, 119, 6, '2022-03-11 17:40:57', '2022-03-11 17:40:57');

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
) ENGINE = InnoDB AUTO_INCREMENT = 120 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (64, 'USUARIO', 'users.index', 'NAVEGA LA TABLA USUARIOS', '2022-03-11 16:48:55', '2022-03-11 16:48:55');
INSERT INTO `permissions` VALUES (65, 'USUARIO', 'users.show', 'VISUALIZA A UN USUARIO EN ESPECIFICO', '2022-03-11 16:48:55', '2022-03-11 16:48:55');
INSERT INTO `permissions` VALUES (66, 'USUARIO', 'users.edit', 'EDITA A UN USUARIO EN ESPECIFICO', '2022-03-11 16:48:55', '2022-03-11 16:48:55');
INSERT INTO `permissions` VALUES (67, 'USUARIO', 'users.destroy', 'ELIMINA UN USUARIO EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (68, 'ROLES', 'roles.index', 'NAVEGA LA TABLA ROLES', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (69, 'ROLES', 'roles.show', 'VISUALIZA A UN ROL EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (70, 'ROLES', 'roles.create', 'CREA UN NUEVO ROL EN EL SISTEMA', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (71, 'ROLES', 'roles.edit', 'EDITA UN ROL EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (72, 'ROLES', 'roles.destroy', 'ELIMINA UN ROL EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (73, 'TRABAJADORES', 'trabajadors.index', 'NAVEGA LA TABLA TRABAJADORES', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (74, 'TRABAJADORES', 'trabajadors.show', 'VISUALIZA A UN TRABAJADOR EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (75, 'TRABAJADORES', 'trabajadors.create', 'CREA UN NUEVO TRABAJADOR EN EL SISTEMA', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (76, 'TRABAJADORES', 'trabajadors.edit', 'EDITA UN TRABAJADOR EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (77, 'TRABAJADORES', 'trabajadors.destroy', 'ELIMINA UN TRABAJADOR EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (78, 'PROYECTOS', 'proyectos.index', 'NAVEGA LA TABLA PROYECTOS', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (79, 'PROYECTOS', 'proyectos.show', 'VISUALIZA A UN PROYECTO EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (80, 'PROYECTOS', 'proyectos.create', 'CREA UN NUEVO PROYECTO EN EL SISTEMA', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (81, 'PROYECTOS', 'proyectos.edit', 'EDITA UN PROYECTO EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (82, 'PROYECTOS', 'proyectos.destroy', 'ELIMINA UN PROYECTO EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (83, 'MATERIAL', 'materials.index', 'NAVEGA LA TABLA MATERIAL', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (84, 'MATERIAL', 'materials.show', 'VISUALIZA A UN MATERIAL EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (85, 'MATERIAL', 'materials.create', 'CREA UN NUEVO MATERIAL EN EL SISTEMA', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (86, 'MATERIAL', 'materials.edit', 'EDITA UN MATERIAL EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (87, 'MATERIAL', 'materials.destroy', 'ELIMINA UN MATERIAL EN ESPECIFICO', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (88, 'HERRAIENTAS', 'herramientas.index', 'NAVEGA LA TABLA HERRAIENTAS', '2022-03-11 16:48:56', '2022-03-11 16:48:56');
INSERT INTO `permissions` VALUES (89, 'HERRAIENTAS', 'herramientas.show', 'VISUALIZA A UN HERRAIENTA EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (90, 'HERRAIENTAS', 'herramientas.create', 'CREA UN NUEVO HERRAIENTA EN EL SISTEMA', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (91, 'HERRAIENTAS', 'herramientas.edit', 'EDITA UN HERRAIENTA EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (92, 'HERRAIENTAS', 'herramientas.destroy', 'ELIMINA UN HERRAIENTA EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (93, 'CLASHERRAMIENTA', 'clasherramientas.index', 'NAVEGA LA TABLA CLASHERRAMIENTA', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (94, 'CLASHERRAMIENTA', 'clasherramientas.show', 'VISUALIZA A UN CLASHERRAMIENTA EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (95, 'CLASHERRAMIENTA', 'clasherramientas.create', 'CREA UN NUEVO CLASHERRAMIENTA EN EL SISTEMA', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (96, 'CLASHERRAMIENTA', 'clasherramientas.edit', 'EDITA UN CLASHERRAMIENTA EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (97, 'CLASHERRAMIENTA', 'clasherramientas.destroy', 'ELIMINA UN CLASHERRAMIENTA EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (98, 'ALMACEN MATERIAL', 'pedidocoms.index', 'NAVEGA LA TABLA ENVIO MATERIAL A ALMACENES', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (99, 'ALMACEN MATERIAL', 'pedidocoms.show', 'VISUALIZA A UN ENVIO DE MATERIAL EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (100, 'ALMACEN MATERIAL', 'pedidocoms.create', 'CREA UN NUEVO ENVIO DE MATERIAL A ALMACENES', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (101, 'ALMACEN MATERIAL', 'pedidocoms.edit', 'EDITA UN ENVIO DE MATERIAL A ALMACENES EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (102, 'ALMACEN MATERIAL', 'pedidocoms.destroy', 'ELIMINA UN ENVIO DE MATERIAL A ALMACENES EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (103, 'ALMACEN MATERIAL', 'pedidocoms.reporte', 'GENERA UN REPORTE DE ENVIO DE MATERIAL A ALMACEN', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (104, 'REPORTE POR FECHAS', 'pedidocoms.reportefechas', 'GENERA UN REPORTE POR ENVIO DE MATERIAL', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (105, 'ALMACEN HERRAMIENTAS', 'pedidohs.index', 'NAVEGA LA TABLA ENVIO DE HERRAMIENTAS A ALMACENES', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (106, 'ALMACEN HERRAMIENTAS', 'pedidohs.show', 'VISUALIZA A UN ENVIO DE HERRAMIENTAS EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (107, 'ALMACEN HERRAMIENTAS', 'pedidohs.create', 'CREA UN NUEVO ENVIO DE HERRAMIENTAS EN EL SISTEMA', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (108, 'ALMACEN HERRAMIENTAS', 'pedidohs.edit', 'EDITA UN ALMACEN ENVIO DE HERRAMIENTAS EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (109, 'ALMACEN HERRAMIENTAS', 'pedidohs.destroy', 'ELIMINA UN ALMACEN ENVIO DE HERRAMIENTAS EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (110, 'ALMACEN HERRAMIENTAS', 'pedidohs.pdf', 'EDITA UN REPORTE HERRAMIENTAS EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (111, 'ALMACEN HERRAMIENTAS', 'pedidohs.reportefechas', 'GENERA UN REPORTE POR ENVIO DE HERRAMIENTAS', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (112, 'PEDIDO MATERIAL', 'pedidos.index', 'NAVEGA LA TABLA PEDIDO MATERIAL', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (113, 'PEDIDO MATERIAL', 'pedidos.show', 'VISUALIZA A UN PEDIDO MATERIAL EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (114, 'PEDIDO MATERIAL', 'pedidos.destroy', 'ELIMINA UN PEDIDO MATERIAL EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (115, 'PEDIDO HERRAMIENTA', 'pedidoherras.index', 'NAVEGA LA TABLA PEDIDO HERRAMIENTA', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (116, 'PEDIDO HERRAMIENTA', 'pedidoherras.show', 'VISUALIZA A UN PEDIDO HERRAMIENTA EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (117, 'PEDIDO HERRAMIENTA', 'pedidoherras.destroy', 'ELIMINA UN PEDIDO HERRAMIENTA EN ESPECIFICO', '2022-03-11 16:48:57', '2022-03-11 16:48:57');
INSERT INTO `permissions` VALUES (118, 'PEDIDO HERRAMIENTAS', 'pedidoherras.create', 'CREA UN NUEVO REGISTRO DE PRESTAMO DE HERRAMIENTAS', '2022-03-11 16:48:57', NULL);
INSERT INTO `permissions` VALUES (119, 'PEDIDOM MATERIAL', 'pedidos.create', 'CREA UN REGISTRO DE GASTO DE MATERIALES', '2022-03-11 16:48:57', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of proyectos
-- ----------------------------
INSERT INTO `proyectos` VALUES (4, 'VIVIENDA SOCIAL TIAHUANACU', 'CONSTRUCCIÓN NUEVA', 'BAÑO, COCINA, COMEDOR, 3 DORMITORIOS, SALA COMEDOR', 'EL PROYECTO CUENTA CON UNA TOPOLOGÍA DE VIVIENDA, CONSTRUIDA EN UN ÁREA DE 60.80 M2 Y CUENTA CON DOS DORMITORIOS, BAÑO, COCINA Y ESTAR-COMEDOR. EL SISTEMA CONSTRUCTIVO ES EL TRADICIONAL: CON CIMIENTOS Y SOBRECIMIENTOS DE HºCº, VIGA CADENA DE HºAº LADRILLO DE 6 H EN MUROS Y CUBIERTA DE CALAMINA GALVANIZADA N°… ETC', '2022-01-01', '2022-04-30', '2022-05-02', '2022-03-11 16:55:21', '2022-03-11 16:55:21');
INSERT INTO `proyectos` VALUES (5, 'VIVIENDA SOCIAL INQUISIVI', 'CONSTRUCCIÓN NUEVA', 'BAÑO, COCINA, COMEDOR, 3 DORMITORIOS, SALA COMEDOR', 'EL PROYECTO CUENTA CON UNA TOPOLOGÍA DE VIVIENDA, CONSTRUIDA EN UN ÁREA DE 60.80 M2 Y CUENTA CON DOS DORMITORIOS, BAÑO, COCINA Y ESTAR-COMEDOR. EL SISTEMA CONSTRUCTIVO ES EL TRADICIONAL: CON CIMIENTOS Y SOBRECIMIENTOS DE HºCº, VIGA CADENA DE HºAº LADRILLO DE 6 H EN MUROS Y CUBIERTA DE CALAMINA GALVANIZADA N°… ETC', '2022-01-20', '2022-04-15', '2022-04-18', '2022-03-11 16:55:49', '2022-03-11 16:55:49');
INSERT INTO `proyectos` VALUES (6, 'VIVIENDA SOCIAL IRUPANA', 'CONSTRUCCIÓN NUEVA', 'BAÑO, COCINA, COMEDOR, 3 DORMITORIOS, SALA COMEDOR', 'EL PROYECTO CUENTA CON UNA TOPOLOGÍA DE VIVIENDA, CONSTRUIDA EN UN ÁREA DE 60.80 M2 Y CUENTA CON DOS DORMITORIOS, BAÑO, COCINA Y ESTAR-COMEDOR. EL SISTEMA CONSTRUCTIVO ES EL TRADICIONAL: CON CIMIENTOS Y SOBRECIMIENTOS DE HºCº, VIGA CADENA DE HºAº LADRILLO DE 6 H EN MUROS Y CUBIERTA DE CALAMINA GALVANIZADA N°… ETC', '2022-02-14', '2022-05-18', '2022-05-23', '2022-03-11 16:56:29', '2022-03-11 16:56:29');
INSERT INTO `proyectos` VALUES (7, 'VIVIENDA SOCIAL LAJA', 'CONSTRUCCIÓN NUEVA', 'BAÑO, COCINA, COMEDOR, 3 DORMITORIOS, SALA COMEDOR', 'EL PROYECTO CUENTA CON UNA TOPOLOGÍA DE VIVIENDA, CONSTRUIDA EN UN ÁREA DE 60.80 M2 Y CUENTA CON DOS DORMITORIOS, BAÑO, COCINA Y ESTAR-COMEDOR. EL SISTEMA CONSTRUCTIVO ES EL TRADICIONAL: CON CIMIENTOS Y SOBRECIMIENTOS DE HºCº, VIGA CADENA DE HºAº LADRILLO DE 6 H EN MUROS Y CUBIERTA DE CALAMINA GALVANIZADA N°… ETC', '2022-01-31', '2022-04-30', '2022-05-02', '2022-03-11 16:57:03', '2022-03-11 16:57:03');

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
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES (2, 1, 22, NULL, NULL);
INSERT INTO `role_user` VALUES (8, 6, 46, '2022-03-11 17:32:04', '2022-03-11 17:32:04');
INSERT INTO `role_user` VALUES (9, 6, 47, '2022-03-11 17:32:09', '2022-03-11 17:32:09');
INSERT INTO `role_user` VALUES (10, 6, 45, '2022-03-11 17:32:12', '2022-03-11 17:32:12');

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
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Admin', 'admin', 'superUsuario', '2021-08-09 18:30:10', '2021-08-09 18:30:10', 'all-access');
INSERT INTO `roles` VALUES (6, 'Almacen', 'Rol-Almacen', 'Almacen designado', '2022-03-11 17:31:55', '2022-03-11 17:31:55', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of trabajadors
-- ----------------------------
INSERT INTO `trabajadors` VALUES (13, 47, 4, 'ALMACENERO', '2022-03-11', '2022-03-11 16:57:29', '2022-03-11 16:57:29');
INSERT INTO `trabajadors` VALUES (14, 46, 5, 'ALMACENERO', '2022-03-11', '2022-03-11 16:57:42', '2022-03-11 16:57:42');
INSERT INTO `trabajadors` VALUES (15, 45, 6, 'ALMACENERO', '2022-03-11', '2022-03-11 16:58:03', '2022-03-11 16:58:03');

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
) ENGINE = InnoDB AUTO_INCREMENT = 48 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (22, 'BARI SAMANTA MAMANI', 'samantashine@gmail.com', '', 0, NULL, '$2y$10$YEV3hkgZkAKE5PI/AzMLVumV65nn2faDy5YDy1cCtwcxmR5KF3AoG', NULL, '2021-08-09 18:47:39', '2022-02-24 15:19:13');
INSERT INTO `users` VALUES (45, 'MARCO CALLE MAMANI', 'marco@gmail.com', 'EL ALTO Z. CIUDAD SATELITE AV. DEL POLICIA', 78945645, NULL, '$2y$10$OMcbXVXHhespHabEWCgg5eXk5eKodM0UZUh4HoWesRIA100PAR35G', NULL, '2022-02-28 17:08:55', '2022-02-28 17:08:55');
INSERT INTO `users` VALUES (46, 'CARLOS MARQUEZ MENDOZA', 'carlo@gmail.com', 'EL ALTO VILLA DOLORES CALLE 14', 67767898, NULL, '$2y$10$qAxvP5AFhKzfumRKUUsWOuGZwsBjRcEstfKI7yCpaBV/q8TwbcAcu', NULL, '2022-03-09 05:39:23', '2022-03-09 05:39:23');
INSERT INTO `users` VALUES (47, 'JUAN MARCELO MENDOZA', 'juan@gmail.com', 'EL ALTO CALLE 5 NRO 177', 65498754, NULL, '$2y$10$NDO3b6GwBt9ML9OjRJ3AcuudzcnpF7BKp1X/soL7LoSKdzSLnCjqe', NULL, '2022-03-10 14:14:07', '2022-03-10 14:14:07');

SET FOREIGN_KEY_CHECKS = 1;
