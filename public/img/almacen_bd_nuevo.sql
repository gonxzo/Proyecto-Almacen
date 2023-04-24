/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : almacen_bd_nuevo

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 22/04/2023 22:48:48
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
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of clasherramientas
-- ----------------------------
INSERT INTO `clasherramientas` VALUES (1, 'MUEBLES Y ENSERES', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (2, 'EQUIPO DE COMPUTACION', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (3, 'EQUIPO ELECTRONICO', NULL, NULL);
INSERT INTO `clasherramientas` VALUES (4, 'MATERIAL INFORMATIVO', NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for gastoherramientas
-- ----------------------------
DROP TABLE IF EXISTS `gastoherramientas`;
CREATE TABLE `gastoherramientas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idregpedido` bigint UNSIGNED NOT NULL,
  `idherramienta` bigint UNSIGNED NOT NULL,
  `cantidad` int NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `gastoherramientas_idregpedido_foreign`(`idregpedido`) USING BTREE,
  INDEX `gastoherramientas_idherramienta_foreign`(`idherramienta`) USING BTREE,
  CONSTRAINT `gastoherramientas_idherramienta_foreign` FOREIGN KEY (`idherramienta`) REFERENCES `herramientas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `gastoherramientas_idregpedido_foreign` FOREIGN KEY (`idregpedido`) REFERENCES `regpedidoherramientas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gastoherramientas
-- ----------------------------

-- ----------------------------
-- Table structure for gastomaterials
-- ----------------------------
DROP TABLE IF EXISTS `gastomaterials`;
CREATE TABLE `gastomaterials`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idregpedido` bigint UNSIGNED NOT NULL,
  `idmaterial` bigint UNSIGNED NOT NULL,
  `cantidad` int NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `gastomaterials_idregpedido_foreign`(`idregpedido`) USING BTREE,
  INDEX `gastomaterials_idmaterial_foreign`(`idmaterial`) USING BTREE,
  CONSTRAINT `gastomaterials_idmaterial_foreign` FOREIGN KEY (`idmaterial`) REFERENCES `materials` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `gastomaterials_idregpedido_foreign` FOREIGN KEY (`idregpedido`) REFERENCES `regpedidomaterials` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gastomaterials
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
) ENGINE = InnoDB AUTO_INCREMENT = 138 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of herramientas
-- ----------------------------
INSERT INTO `herramientas` VALUES (1, 'Escritorio de madera', 'PZA', '1', 1, NULL, NULL);
INSERT INTO `herramientas` VALUES (2, 'Silla de plástico', 'PZA', '2', 1, NULL, NULL);
INSERT INTO `herramientas` VALUES (3, 'Estantes metálico tipo mecano', 'PZA', '1', 1, NULL, NULL);
INSERT INTO `herramientas` VALUES (4, 'Pizarras Acrílicas', 'PZA', '1', 1, NULL, NULL);
INSERT INTO `herramientas` VALUES (5, 'Computadora portatil ', 'EQP', '-0.5', 2, NULL, '2022-02-27 19:46:01');
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
INSERT INTO `herramientas` VALUES (43, 'Combillo 2 libras', 'PZA', '98', 7, NULL, '2023-04-12 09:15:09');
INSERT INTO `herramientas` VALUES (44, 'Lápiz de carpintero', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (45, 'Tenaza', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (46, 'Llave Stilson', 'PZA', '100', 7, NULL, '2022-02-27 19:46:02');
INSERT INTO `herramientas` VALUES (47, 'Combo 5 libras', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (48, 'Manguera transparente de nivel   3/8', 'M', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (49, 'Destornillador punta estrella', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (50, 'Pata de cabra', 'PZA', '100', 7, NULL, '2022-03-10 06:35:37');
INSERT INTO `herramientas` VALUES (51, 'Guantes de seguridad (especial)', 'PZA', '98', 7, NULL, '2023-04-12 09:15:09');
INSERT INTO `herramientas` VALUES (52, 'Escuadra 0.40 x 0.60', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (53, 'Alicate', 'PZA', '70', 7, NULL, '2022-03-11 10:34:18');
INSERT INTO `herramientas` VALUES (54, 'Martillo', 'PZA', '78', 7, NULL, '2022-03-11 10:34:18');
INSERT INTO `herramientas` VALUES (55, 'Destornillador punta plana', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (56, 'Pico y mango', 'PZA', '98', 7, NULL, '2023-04-12 09:15:09');
INSERT INTO `herramientas` VALUES (57, 'Estilete', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (58, 'Flexo 10m de primera', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (59, 'Badilejos', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (60, 'Nivel de mano de 30 cm', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (61, 'BROCHA 3\"', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (62, 'Plancha', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (63, 'Taladro', 'PZA', '97', 7, NULL, '2022-03-11 09:28:19');
INSERT INTO `herramientas` VALUES (64, 'Frotacho 15x20', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (65, 'Balde plástico 20 lt', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (66, 'Palas', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (67, 'RODILLO ESPUMA', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (68, 'Plomada   300 gr.', 'PZA', '96', 7, NULL, '2022-03-11 09:28:19');
INSERT INTO `herramientas` VALUES (69, 'Pinza de corte lateral', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (70, 'Hilo tanza # 0.70', 'RL', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (71, 'Barreta de 1.50 metros', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (72, 'Tester multímetro', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (73, 'Regla metálica 20 x 50 mm', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (74, 'Llave perico', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (75, 'Hojas para sierra mecánica', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (76, 'Cepillo de acero', 'PZA', '100', 7, NULL, '2022-03-11 04:56:25');
INSERT INTO `herramientas` VALUES (77, 'Llave universal para tubos', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (78, 'Serrucho para madera', 'PZA', '100', 7, NULL, '2022-03-10 06:35:37');
INSERT INTO `herramientas` VALUES (79, 'Pinza de electricista', 'PZA', '100', 7, NULL, NULL);
INSERT INTO `herramientas` VALUES (80, 'Sierra metálica', 'PZA', '100', 7, NULL, '2022-02-27 19:46:02');
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
INSERT INTO `herramientas` VALUES (125, 'Guantes', 'PZA', '-7', 12, NULL, '2022-03-11 04:56:25');
INSERT INTO `herramientas` VALUES (126, 'Overol', 'PZA', '-4', 12, NULL, '2022-03-11 04:56:25');
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
) ENGINE = InnoDB AUTO_INCREMENT = 122 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of materials
-- ----------------------------
INSERT INTO `materials` VALUES (1, 'ABRAZADERA DE 3\'\'', 'PIEZA', '950', '2022-01-29 05:47:08', '2022-03-11 09:23:52');
INSERT INTO `materials` VALUES (2, 'ALAMBRE DE AMARRE', 'QUINTAL', '992', '2022-01-29 05:47:17', '2022-03-11 10:18:22');
INSERT INTO `materials` VALUES (3, 'ALAMBRE DE COBRE N 10 AWG', 'KILOGRAMO', '998', '2022-01-30 05:47:21', '2023-04-12 03:02:00');
INSERT INTO `materials` VALUES (4, 'ALAMBRE DE COBRE N 12 AWG', 'KILOGRAMO', '1000', '2022-01-30 05:47:26', '2022-02-27 19:31:39');
INSERT INTO `materials` VALUES (5, 'ALAMBRE DE COBRE N 14 AWG', 'KILOGRAMO', '1000', '2022-01-30 05:47:31', NULL);
INSERT INTO `materials` VALUES (6, 'ALAMBRE GALVANIZADO 12', 'QUINTAL', '1000', '2022-01-31 05:47:45', '2022-03-08 21:49:48');
INSERT INTO `materials` VALUES (7, 'ALQUITRÁN\n', 'KILOGRAMO\n', '1000', NULL, '2022-03-10 06:26:21');
INSERT INTO `materials` VALUES (8, 'BARANDA METÁLIC', 'METRO', '1000', NULL, '2022-02-27 19:31:39');
INSERT INTO `materials` VALUES (9, 'BARNIZ', 'LITRO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (10, 'BISAGRA DE 4\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (11, 'BISAGRA PARA METAL\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (12, 'BOTAGUAS DE CERÁMICA UNA CAÍDA\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (13, 'CAÑERIA DE ALUMINIO 1/2 (BRAZO DE DUCHA)', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (14, 'CAJA DE REGISTRO DE PVC\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (15, 'CAJA PARA 1 TERMICO ', 'PIEZA\n', '997', NULL, '2023-04-12 03:02:00');
INSERT INTO `materials` VALUES (16, 'CAJA PARA 3 TERMICOS ', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (17, 'CAJA PLÁSTICA CIRCULAR\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (18, 'CAJA PLÁSTICA RECTANGULAR\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (19, 'CAJA SIFONADA PVC C/REJILLA DE PISO', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (20, 'CALAMINA ONDULADA GALV.N°28 PREPINTADA\n', 'METRO\n', '998', NULL, '2023-04-12 03:02:00');
INSERT INTO `materials` VALUES (21, 'CALAMINA PLÁSTICA', 'METRO ', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (22, 'CANALETA GALV.CORTE 33 NO. 28 Y ACCES.\n', 'METRO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (23, 'CARTON ALFALTICO ', 'METRO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (24, 'CEMENTO BLANCO', 'BOLSA 1 kg', '990', NULL, '2022-03-11 09:18:38');
INSERT INTO `materials` VALUES (25, 'CEMENTO COLA', 'BOLSA 20 kg', '1000', NULL, '2022-03-08 21:48:53');
INSERT INTO `materials` VALUES (26, 'CEMENTO PORTLAND', 'BOLSA 45 kg', '795', NULL, '2022-03-11 10:18:22');
INSERT INTO `materials` VALUES (27, 'CERÁMICA NACIONAL\n', 'METRO\n', '990', NULL, '2022-03-11 09:21:44');
INSERT INTO `materials` VALUES (28, 'CHAPA EXTERIOR ', 'PIEZA', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (30, 'CHICOTILLO 0.40cm italiano\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (31, 'CIELO FALSO pvc Y ACCESORIOS\n', 'METRO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (32, 'CIELO FALSO YESO - PCV + ACCESORIOS', 'METRO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (33, 'CINTA AISLANTE\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (34, 'CLAVOS\n', 'KILOGRAMO\n', '1000', NULL, '2022-03-10 06:26:21');
INSERT INTO `materials` VALUES (35, 'CODO DE 1/2\"FGGALV', 'PIEZA', '1000', NULL, '2022-01-30 21:58:41');
INSERT INTO `materials` VALUES (36, 'CODO PVC DE 1/2\'\'', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (37, 'CODO PVC DE 5/8\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (38, 'CODO PVC DESAGÜE 2\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (39, 'CODO PVC DESAGÜE 3\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (40, 'CODO PVC DESAGÜE 4\"\n', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (41, 'COPLA PVC-1/2\'\'', 'PIEZA\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (42, 'CORDEL', 'METROS', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (43, 'ELECTRODOS', 'KILOGRAMO\n', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (44, 'ESQUINERO DE ALUMINIO ', 'KILOGRAMO', '1000', NULL, NULL);
INSERT INTO `materials` VALUES (45, 'FIERRO CORRUGADO 1/2\'\'', 'BARRA', '970', NULL, '2022-03-11 10:18:22');
INSERT INTO `materials` VALUES (46, 'FIERRO CORRUGADO 1/4\'\'', 'BARRA', '950', NULL, '2022-03-11 10:18:22');
INSERT INTO `materials` VALUES (47, 'FIERRO CORRUGADO 3/8\'\'', 'BARRA', '980', NULL, '2022-03-11 10:18:22');
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
INSERT INTO `materials` VALUES (76, 'PINTURA LATEX (BALDE 18 LT)\n', 'BALDE-GAL\n', '998', NULL, '2022-03-11 09:23:52');
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
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `migrations` VALUES (10, '2023_04_22_182529_create_proyectos_table', 1);
INSERT INTO `migrations` VALUES (11, '2023_04_22_182811_create_materials_table', 2);
INSERT INTO `migrations` VALUES (12, '2023_04_22_182833_create_herramientas_table', 2);
INSERT INTO `migrations` VALUES (13, '2023_04_22_183535_create_clasherramientas_table', 3);
INSERT INTO `migrations` VALUES (14, '2023_04_22_184035_create_trabajadors_table', 4);
INSERT INTO `migrations` VALUES (15, '2023_04_22_184732_create_regpedidomaterials_table', 5);
INSERT INTO `migrations` VALUES (16, '2023_04_22_184926_create_pedidomaterials_table', 6);
INSERT INTO `migrations` VALUES (17, '2023_04_22_185202_create_regpedidoherramientas_table', 7);
INSERT INTO `migrations` VALUES (18, '2023_04_22_185310_create_pedidoherramientas_table', 8);
INSERT INTO `migrations` VALUES (19, '2023_04_22_185846_create_gastomaterials_table', 9);
INSERT INTO `migrations` VALUES (20, '2023_04_22_190114_create_gastoherramientas_table', 10);
INSERT INTO `migrations` VALUES (21, '2023_04_23_002119_create_clasherramientas_table', 11);
INSERT INTO `migrations` VALUES (22, '2023_04_23_002414_create_clasherramientas_table', 12);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for pedidoherramientas
-- ----------------------------
DROP TABLE IF EXISTS `pedidoherramientas`;
CREATE TABLE `pedidoherramientas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idregpedido` bigint UNSIGNED NOT NULL,
  `idherramienta` bigint UNSIGNED NOT NULL,
  `cantidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pedidoherramientas_idregpedido_foreign`(`idregpedido`) USING BTREE,
  INDEX `pedidoherramientas_idherramienta_foreign`(`idherramienta`) USING BTREE,
  CONSTRAINT `pedidoherramientas_idherramienta_foreign` FOREIGN KEY (`idherramienta`) REFERENCES `herramientas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pedidoherramientas_idregpedido_foreign` FOREIGN KEY (`idregpedido`) REFERENCES `regpedidoherramientas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pedidoherramientas
-- ----------------------------

-- ----------------------------
-- Table structure for pedidomaterials
-- ----------------------------
DROP TABLE IF EXISTS `pedidomaterials`;
CREATE TABLE `pedidomaterials`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idregpedido` bigint UNSIGNED NOT NULL,
  `idmaterial` bigint UNSIGNED NOT NULL,
  `cantidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pedidomaterials_idregpedido_foreign`(`idregpedido`) USING BTREE,
  INDEX `pedidomaterials_idmaterial_foreign`(`idmaterial`) USING BTREE,
  CONSTRAINT `pedidomaterials_idmaterial_foreign` FOREIGN KEY (`idmaterial`) REFERENCES `materials` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pedidomaterials_idregpedido_foreign` FOREIGN KEY (`idregpedido`) REFERENCES `regpedidomaterials` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pedidomaterials
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permission_role
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 55 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'USUARIO', 'users.index', 'NAVEGA LA TABLA USUARIOS', '2023-04-22 18:27:06', '2023-04-22 18:27:06');
INSERT INTO `permissions` VALUES (2, 'USUARIO', 'users.show', 'VISUALIZA A UN USUARIO EN ESPECIFICO', '2023-04-22 18:27:06', '2023-04-22 18:27:06');
INSERT INTO `permissions` VALUES (3, 'USUARIO', 'users.edit', 'EDITA A UN USUARIO EN ESPECIFICO', '2023-04-22 18:27:06', '2023-04-22 18:27:06');
INSERT INTO `permissions` VALUES (4, 'USUARIO', 'users.destroy', 'ELIMINA UN USUARIO EN ESPECIFICO', '2023-04-22 18:27:06', '2023-04-22 18:27:06');
INSERT INTO `permissions` VALUES (5, 'ROLES', 'roles.index', 'NAVEGA LA TABLA ROLES', '2023-04-22 18:27:06', '2023-04-22 18:27:06');
INSERT INTO `permissions` VALUES (6, 'ROLES', 'roles.show', 'VISUALIZA A UN ROL EN ESPECIFICO', '2023-04-22 18:27:07', '2023-04-22 18:27:07');
INSERT INTO `permissions` VALUES (7, 'ROLES', 'roles.create', 'CREA UN NUEVO ROL EN EL SISTEMA', '2023-04-22 18:27:07', '2023-04-22 18:27:07');
INSERT INTO `permissions` VALUES (8, 'ROLES', 'roles.edit', 'EDITA UN ROL EN ESPECIFICO', '2023-04-22 18:27:07', '2023-04-22 18:27:07');
INSERT INTO `permissions` VALUES (9, 'ROLES', 'roles.destroy', 'ELIMINA UN ROL EN ESPECIFICO', '2023-04-22 18:27:07', '2023-04-22 18:27:07');
INSERT INTO `permissions` VALUES (10, 'TRABAJADORES', 'trabajadors.index', 'NAVEGA LA TABLA TRABAJADORES', '2023-04-22 18:27:07', '2023-04-22 18:27:07');
INSERT INTO `permissions` VALUES (11, 'TRABAJADORES', 'trabajadors.show', 'VISUALIZA A UN TRABAJADOR EN ESPECIFICO', '2023-04-22 18:27:07', '2023-04-22 18:27:07');
INSERT INTO `permissions` VALUES (12, 'TRABAJADORES', 'trabajadors.create', 'CREA UN NUEVO TRABAJADOR EN EL SISTEMA', '2023-04-22 18:27:08', '2023-04-22 18:27:08');
INSERT INTO `permissions` VALUES (13, 'TRABAJADORES', 'trabajadors.edit', 'EDITA UN TRABAJADOR EN ESPECIFICO', '2023-04-22 18:27:08', '2023-04-22 18:27:08');
INSERT INTO `permissions` VALUES (14, 'TRABAJADORES', 'trabajadors.destroy', 'ELIMINA UN TRABAJADOR EN ESPECIFICO', '2023-04-22 18:27:08', '2023-04-22 18:27:08');
INSERT INTO `permissions` VALUES (15, 'PROYECTOS', 'proyectos.index', 'NAVEGA LA TABLA PROYECTOS', '2023-04-22 18:27:08', '2023-04-22 18:27:08');
INSERT INTO `permissions` VALUES (16, 'PROYECTOS', 'proyectos.show', 'VISUALIZA A UN PROYECTO EN ESPECIFICO', '2023-04-22 18:27:08', '2023-04-22 18:27:08');
INSERT INTO `permissions` VALUES (17, 'PROYECTOS', 'proyectos.create', 'CREA UN NUEVO PROYECTO EN EL SISTEMA', '2023-04-22 18:27:08', '2023-04-22 18:27:08');
INSERT INTO `permissions` VALUES (18, 'PROYECTOS', 'proyectos.edit', 'EDITA UN PROYECTO EN ESPECIFICO', '2023-04-22 18:27:08', '2023-04-22 18:27:08');
INSERT INTO `permissions` VALUES (19, 'PROYECTOS', 'proyectos.destroy', 'ELIMINA UN PROYECTO EN ESPECIFICO', '2023-04-22 18:27:08', '2023-04-22 18:27:08');
INSERT INTO `permissions` VALUES (20, 'MATERIAL', 'materials.index', 'NAVEGA LA TABLA MATERIAL', '2023-04-22 18:27:08', '2023-04-22 18:27:08');
INSERT INTO `permissions` VALUES (21, 'MATERIAL', 'materials.show', 'VISUALIZA A UN MATERIAL EN ESPECIFICO', '2023-04-22 18:27:08', '2023-04-22 18:27:08');
INSERT INTO `permissions` VALUES (22, 'MATERIAL', 'materials.create', 'CREA UN NUEVO MATERIAL EN EL SISTEMA', '2023-04-22 18:27:08', '2023-04-22 18:27:08');
INSERT INTO `permissions` VALUES (23, 'MATERIAL', 'materials.edit', 'EDITA UN MATERIAL EN ESPECIFICO', '2023-04-22 18:27:08', '2023-04-22 18:27:08');
INSERT INTO `permissions` VALUES (24, 'MATERIAL', 'materials.destroy', 'ELIMINA UN MATERIAL EN ESPECIFICO', '2023-04-22 18:27:09', '2023-04-22 18:27:09');
INSERT INTO `permissions` VALUES (25, 'HERRAIENTAS', 'herramientas.index', 'NAVEGA LA TABLA HERRAIENTAS', '2023-04-22 18:27:09', '2023-04-22 18:27:09');
INSERT INTO `permissions` VALUES (26, 'HERRAIENTAS', 'herramientas.show', 'VISUALIZA A UN HERRAIENTA EN ESPECIFICO', '2023-04-22 18:27:09', '2023-04-22 18:27:09');
INSERT INTO `permissions` VALUES (27, 'HERRAIENTAS', 'herramientas.create', 'CREA UN NUEVO HERRAIENTA EN EL SISTEMA', '2023-04-22 18:27:09', '2023-04-22 18:27:09');
INSERT INTO `permissions` VALUES (28, 'HERRAIENTAS', 'herramientas.edit', 'EDITA UN HERRAIENTA EN ESPECIFICO', '2023-04-22 18:27:09', '2023-04-22 18:27:09');
INSERT INTO `permissions` VALUES (29, 'HERRAIENTAS', 'herramientas.destroy', 'ELIMINA UN HERRAIENTA EN ESPECIFICO', '2023-04-22 18:27:09', '2023-04-22 18:27:09');
INSERT INTO `permissions` VALUES (30, 'CLASHERRAMIENTA', 'clasherramientas.index', 'NAVEGA LA TABLA CLASHERRAMIENTA', '2023-04-22 18:27:09', '2023-04-22 18:27:09');
INSERT INTO `permissions` VALUES (31, 'CLASHERRAMIENTA', 'clasherramientas.show', 'VISUALIZA A UN CLASHERRAMIENTA EN ESPECIFICO', '2023-04-22 18:27:09', '2023-04-22 18:27:09');
INSERT INTO `permissions` VALUES (32, 'CLASHERRAMIENTA', 'clasherramientas.create', 'CREA UN NUEVO CLASHERRAMIENTA EN EL SISTEMA', '2023-04-22 18:27:09', '2023-04-22 18:27:09');
INSERT INTO `permissions` VALUES (33, 'CLASHERRAMIENTA', 'clasherramientas.edit', 'EDITA UN CLASHERRAMIENTA EN ESPECIFICO', '2023-04-22 18:27:09', '2023-04-22 18:27:09');
INSERT INTO `permissions` VALUES (34, 'CLASHERRAMIENTA', 'clasherramientas.destroy', 'ELIMINA UN CLASHERRAMIENTA EN ESPECIFICO', '2023-04-22 18:27:09', '2023-04-22 18:27:09');
INSERT INTO `permissions` VALUES (35, 'ALMACEN MATERIAL', 'pedidocoms.index', 'NAVEGA LA TABLA ENVIO MATERIAL A ALMACENES', '2023-04-22 18:27:09', '2023-04-22 18:27:09');
INSERT INTO `permissions` VALUES (36, 'ALMACEN MATERIAL', 'pedidocoms.show', 'VISUALIZA A UN ENVIO DE MATERIAL EN ESPECIFICO', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (37, 'ALMACEN MATERIAL', 'pedidocoms.create', 'CREA UN NUEVO ENVIO DE MATERIAL A ALMACENES', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (38, 'ALMACEN MATERIAL', 'pedidocoms.edit', 'EDITA UN ENVIO DE MATERIAL A ALMACENES EN ESPECIFICO', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (39, 'ALMACEN MATERIAL', 'pedidocoms.destroy', 'ELIMINA UN ENVIO DE MATERIAL A ALMACENES EN ESPECIFICO', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (40, 'ALMACEN MATERIAL', 'pedidocoms.reporte', 'GENERA UN REPORTE DE ENVIO DE MATERIAL A ALMACEN', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (41, 'REPORTE POR FECHAS', 'pedidocoms.reportefechas', 'GENERA UN REPORTE POR ENVIO DE MATERIAL', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (42, 'ALMACEN HERRAMIENTAS', 'pedidohs.index', 'NAVEGA LA TABLA ENVIO DE HERRAMIENTAS A ALMACENES', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (43, 'ALMACEN HERRAMIENTAS', 'pedidohs.show', 'VISUALIZA A UN ENVIO DE HERRAMIENTAS EN ESPECIFICO', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (44, 'ALMACEN HERRAMIENTAS', 'pedidohs.create', 'CREA UN NUEVO ENVIO DE HERRAMIENTAS EN EL SISTEMA', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (45, 'ALMACEN HERRAMIENTAS', 'pedidohs.edit', 'EDITA UN ALMACEN ENVIO DE HERRAMIENTAS EN ESPECIFICO', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (46, 'ALMACEN HERRAMIENTAS', 'pedidohs.destroy', 'ELIMINA UN ALMACEN ENVIO DE HERRAMIENTAS EN ESPECIFICO', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (47, 'ALMACEN HERRAMIENTAS', 'pedidohs.pdf', 'EDITA UN REPORTE HERRAMIENTAS EN ESPECIFICO', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (48, 'ALMACEN HERRAMIENTAS', 'pedidohs.reportefechas', 'GENERA UN REPORTE POR ENVIO DE HERRAMIENTAS', '2023-04-22 18:27:10', '2023-04-22 18:27:10');
INSERT INTO `permissions` VALUES (49, 'PEDIDO MATERIAL', 'pedidos.index', 'NAVEGA LA TABLA PEDIDO MATERIAL', '2023-04-22 18:27:11', '2023-04-22 18:27:11');
INSERT INTO `permissions` VALUES (50, 'PEDIDO MATERIAL', 'pedidos.show', 'VISUALIZA A UN PEDIDO MATERIAL EN ESPECIFICO', '2023-04-22 18:27:11', '2023-04-22 18:27:11');
INSERT INTO `permissions` VALUES (51, 'PEDIDO MATERIAL', 'pedidos.destroy', 'ELIMINA UN PEDIDO MATERIAL EN ESPECIFICO', '2023-04-22 18:27:11', '2023-04-22 18:27:11');
INSERT INTO `permissions` VALUES (52, 'PEDIDO HERRAMIENTA', 'pedidoherras.index', 'NAVEGA LA TABLA PEDIDO HERRAMIENTA', '2023-04-22 18:27:11', '2023-04-22 18:27:11');
INSERT INTO `permissions` VALUES (53, 'PEDIDO HERRAMIENTA', 'pedidoherras.show', 'VISUALIZA A UN PEDIDO HERRAMIENTA EN ESPECIFICO', '2023-04-22 18:27:11', '2023-04-22 18:27:11');
INSERT INTO `permissions` VALUES (54, 'PEDIDO HERRAMIENTA', 'pedidoherras.destroy', 'ELIMINA UN PEDIDO HERRAMIENTA EN ESPECIFICO', '2023-04-22 18:27:11', '2023-04-22 18:27:11');

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of proyectos
-- ----------------------------

-- ----------------------------
-- Table structure for regpedidoherramientas
-- ----------------------------
DROP TABLE IF EXISTS `regpedidoherramientas`;
CREATE TABLE `regpedidoherramientas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idtrabajador` bigint UNSIGNED NOT NULL,
  `detalle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `regpedidoherramientas_idtrabajador_foreign`(`idtrabajador`) USING BTREE,
  CONSTRAINT `regpedidoherramientas_idtrabajador_foreign` FOREIGN KEY (`idtrabajador`) REFERENCES `trabajadors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of regpedidoherramientas
-- ----------------------------

-- ----------------------------
-- Table structure for regpedidomaterials
-- ----------------------------
DROP TABLE IF EXISTS `regpedidomaterials`;
CREATE TABLE `regpedidomaterials`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idtrabajador` bigint UNSIGNED NOT NULL,
  `detalle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `regpedidomaterials_idtrabajador_foreign`(`idtrabajador`) USING BTREE,
  CONSTRAINT `regpedidomaterials_idtrabajador_foreign` FOREIGN KEY (`idtrabajador`) REFERENCES `trabajadors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of regpedidomaterials
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES (1, 1, 48, '2022-07-06 10:42:54', '2022-07-06 10:42:58');
INSERT INTO `role_user` VALUES (2, 1, 22, NULL, NULL);
INSERT INTO `role_user` VALUES (9, 6, 47, '2022-03-11 09:32:09', '2022-03-11 09:32:09');
INSERT INTO `role_user` VALUES (10, 6, 45, '2022-03-11 09:32:12', '2022-03-11 09:32:12');
INSERT INTO `role_user` VALUES (14, 6, 49, '2023-04-12 03:02:59', '2023-04-12 03:02:59');
INSERT INTO `role_user` VALUES (15, 6, 46, '2023-04-12 09:03:06', '2023-04-12 09:03:06');

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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Admin', 'admin', 'superUsuario', '2021-08-09 10:30:10', '2021-08-09 10:30:10', 'all-access');
INSERT INTO `roles` VALUES (6, 'Almacen', 'Rol-Almacen', 'Almacen designado', '2022-03-11 09:31:55', '2022-03-11 09:31:55', NULL);
INSERT INTO `roles` VALUES (7, 'Invitado', 'Visualizacion', 'Solo podra Visualizar Registros', '2022-03-11 10:44:29', '2022-03-11 10:44:29', NULL);

-- ----------------------------
-- Table structure for trabajadors
-- ----------------------------
DROP TABLE IF EXISTS `trabajadors`;
CREATE TABLE `trabajadors`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idusuario` bigint UNSIGNED NOT NULL,
  `idproyecto` bigint UNSIGNED NOT NULL,
  `cargo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `trabajadors_idusuario_foreign`(`idusuario`) USING BTREE,
  INDEX `trabajadors_idproyecto_foreign`(`idproyecto`) USING BTREE,
  CONSTRAINT `trabajadors_idproyecto_foreign` FOREIGN KEY (`idproyecto`) REFERENCES `proyectos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `trabajadors_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of trabajadors
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (22, 'BARI SAMANTA MAMANI', 'samantashine@gmail.com', '', 0, NULL, '$2y$10$YEV3hkgZkAKE5PI/AzMLVumV65nn2faDy5YDy1cCtwcxmR5KF3AoG', NULL, '2021-08-09 10:47:39', '2022-02-24 07:19:13');
INSERT INTO `users` VALUES (45, 'MARCO CALLE MAMANI', 'marco@gmail.com', 'EL ALTO Z. CIUDAD SATELITE AV. DEL POLICIA', 78945645, NULL, '$2y$10$OMcbXVXHhespHabEWCgg5eXk5eKodM0UZUh4HoWesRIA100PAR35G', NULL, '2022-02-28 09:08:55', '2022-02-28 09:08:55');
INSERT INTO `users` VALUES (46, 'CARLOS MARQUEZ MENDOZA', 'carlo@gmail.com', 'EL ALTO VILLA DOLORES CALLE 14', 67767898, NULL, '$2y$10$qAxvP5AFhKzfumRKUUsWOuGZwsBjRcEstfKI7yCpaBV/q8TwbcAcu', NULL, '2022-03-08 21:39:23', '2022-03-08 21:39:23');
INSERT INTO `users` VALUES (47, 'JUAN MARCELO MENDOZA', 'juan@gmail.com', 'EL ALTO CALLE 5 NRO 177', 65498754, NULL, '$2y$10$OMcbXVXHhespHabEWCgg5eXk5eKodM0UZUh4HoWesRIA100PAR35G', NULL, '2022-03-10 06:14:07', '2022-03-10 06:14:07');
INSERT INTO `users` VALUES (48, 'GONXZO', 'gonxzo@gmail.com', 'EL ALTO', 65432154, NULL, '$2y$10$FyEBMsOjEtelS3Ohc0oXwOjHf/C79xFO.2tmvnvhT2b65fS4HOO7.', NULL, '2022-07-06 05:41:26', '2022-07-06 05:41:26');
INSERT INTO `users` VALUES (49, 'GONZALO CARANI', 'a@gmail.com', '321654', 321654, NULL, '$2y$10$bK3LIDB/j41CWIUpIU144.1YcHckHcptl/6AxLLJXfntxYSGKMfoe', NULL, '2023-04-12 02:30:48', '2023-04-12 02:30:48');

SET FOREIGN_KEY_CHECKS = 1;
