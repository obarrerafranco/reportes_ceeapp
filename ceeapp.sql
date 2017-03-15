/*
Navicat MySQL Data Transfer

Source Server         : Local Laptop
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ceeapp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-03-15 15:41:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for campanas
-- ----------------------------
DROP TABLE IF EXISTS `campanas`;
CREATE TABLE `campanas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_campana` varchar(250) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `img_header` varchar(250) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of campanas
-- ----------------------------
INSERT INTO `campanas` VALUES ('16', 'Caracol - Yo me llamo', '9', 'nike.jpg', '1', '2017-03-13 16:56:03');
INSERT INTO `campanas` VALUES ('17', 'Adidas - Mejor cada paso', '20', 'adidas.jpg', '1', '2017-03-14 15:41:24');
INSERT INTO `campanas` VALUES ('18', 'Cineco 90 aÃ±os', '65', 'cine_colombia.jpg', '1', '2017-03-14 15:43:34');
INSERT INTO `campanas` VALUES ('19', 'Coca Cola - 2lt Retornable', '66', 'coca_cola.jpg', '1', '2017-03-14 15:46:15');
INSERT INTO `campanas` VALUES ('20', 'Disney Channel -Once', '67', 'disney_channel_once.jpg', '1', '2017-03-14 15:48:17');
INSERT INTO `campanas` VALUES ('21', 'ebba spring summer', '11', 'ebba.jpg', '1', '2017-03-14 15:48:46');
INSERT INTO `campanas` VALUES ('22', 'FIa CinturÃ³n', '68', 'fia.jpg', '1', '2017-03-14 15:50:35');
INSERT INTO `campanas` VALUES ('23', 'JW SÃºbele el nivel', '21', 'johnnie-walker.jpg', '1', '2017-03-14 15:51:44');
INSERT INTO `campanas` VALUES ('24', 'Bella y la Bestia', '69', 'la-bella-la-bestia.jpg', '1', '2017-03-14 15:53:29');
INSERT INTO `campanas` VALUES ('25', 'Mani Calma tu antojo ya', '70', 'Mani-la-especial.jpg', '1', '2017-03-14 15:58:22');
INSERT INTO `campanas` VALUES ('26', 'Movistar Galaxy A5', '71', 'movistar.jpg', '1', '2017-03-14 16:00:04');
INSERT INTO `campanas` VALUES ('27', 'Nike - Kiss my airs', '4', 'nike.jpg', '1', '2017-03-14 16:01:37');
INSERT INTO `campanas` VALUES ('28', 'Redds - Cambiate a Redds', '72', 'redds.jpg', '1', '2017-03-14 16:02:47');
INSERT INTO `campanas` VALUES ('29', 'Sprite - Born to Refrs', '73', 'sprite.jpg', '1', '2017-03-14 16:03:51');
INSERT INTO `campanas` VALUES ('30', 'Tigo - A7 samsung', '39', 'tigo.jpg', '1', '2017-03-14 16:06:02');
INSERT INTO `campanas` VALUES ('31', 'Unipunto - Nueva colecciÃ³n candela', '74', 'unipunto.jpg', '1', '2017-03-14 16:08:23');

-- ----------------------------
-- Table structure for ciudades
-- ----------------------------
DROP TABLE IF EXISTS `ciudades`;
CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_ciudad` varchar(150) NOT NULL,
  `estatus` int(1) NOT NULL DEFAULT '1',
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ciudades
-- ----------------------------
INSERT INTO `ciudades` VALUES ('1', 'Nacional', '1', '2017-02-16 14:27:03');
INSERT INTO `ciudades` VALUES ('2', 'Bogota', '1', '2017-02-16 14:27:09');
INSERT INTO `ciudades` VALUES ('3', 'Cali', '1', '2017-02-16 14:27:16');

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(150) NOT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `estatus` int(1) NOT NULL DEFAULT '1',
  `letra` varchar(1) NOT NULL,
  `fecha_creacion` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('1', 'Pegastic', null, '1', '', '2017-02-16 14:18:59');
INSERT INTO `clientes` VALUES ('2', 'Jcdecaux', null, '1', '', '2017-02-17 10:25:12');
INSERT INTO `clientes` VALUES ('3', 'Reebok', null, '1', '', '2017-02-20 16:49:14');
INSERT INTO `clientes` VALUES ('4', 'Nike', 'nike.png', '1', 'N', '2017-02-21 15:13:46');
INSERT INTO `clientes` VALUES ('5', 'Alkosto', 'alkosto.png', '1', 'A', '2017-02-21 15:28:22');
INSERT INTO `clientes` VALUES ('6', 'Almacenes Si', 'alkosto.png', '1', 'A', '2017-02-21 15:31:51');
INSERT INTO `clientes` VALUES ('7', 'Artefacto', 'artefacto.png', '1', 'A', '2017-02-21 15:37:00');
INSERT INTO `clientes` VALUES ('8', 'Avianca', null, '1', '', '2017-02-21 15:38:38');
INSERT INTO `clientes` VALUES ('9', 'Caracol', '	calzatodo.png', '1', 'C', '2017-02-21 15:41:04');
INSERT INTO `clientes` VALUES ('10', 'Unicentro Cali', null, '1', '', '2017-02-21 15:43:20');
INSERT INTO `clientes` VALUES ('11', 'EBBA', 'ebba.png', '1', 'E', '2017-02-21 15:47:07');
INSERT INTO `clientes` VALUES ('12', 'Ensalsate', null, '1', '', '2017-02-21 15:51:54');
INSERT INTO `clientes` VALUES ('13', 'Zoo Cali', null, '1', '', '2017-02-21 15:54:38');
INSERT INTO `clientes` VALUES ('15', 'Colcafe', null, '1', '', '2017-02-21 16:01:11');
INSERT INTO `clientes` VALUES ('16', 'O Boticario', null, '1', '', '2017-02-21 16:02:17');
INSERT INTO `clientes` VALUES ('17', 'GolfSportBack', '', '1', '', '2017-02-21 16:05:41');
INSERT INTO `clientes` VALUES ('18', 'Jeep', null, '1', '', '2017-02-21 16:07:57');
INSERT INTO `clientes` VALUES ('19', 'Todo Rico', 'Tnt.png', '1', 'T', '2017-02-21 16:12:06');
INSERT INTO `clientes` VALUES ('20', 'Adidas', 'adidas.png', '1', 'A', '2017-02-21 16:18:03');
INSERT INTO `clientes` VALUES ('21', 'Johnnie Walker', 'no', '1', 'J', '2017-02-21 16:19:50');
INSERT INTO `clientes` VALUES ('23', 'CC Titan Plaza', null, '1', '', '2017-02-21 16:26:42');
INSERT INTO `clientes` VALUES ('24', 'Colsubsidio', null, '1', '', '2017-02-21 16:29:17');
INSERT INTO `clientes` VALUES ('25', 'Convergys', null, '1', '', '2017-02-21 16:32:03');
INSERT INTO `clientes` VALUES ('26', 'Delirio', null, '1', '', '2017-02-21 16:34:03');
INSERT INTO `clientes` VALUES ('27', 'Discovery Channel', null, '1', '', '2017-02-21 16:36:27');
INSERT INTO `clientes` VALUES ('28', 'ETB', 'etb.png', '1', 'E', '2017-02-21 16:38:53');
INSERT INTO `clientes` VALUES ('29', 'Fincas del Valle', null, '1', '', '2017-02-21 16:41:18');
INSERT INTO `clientes` VALUES ('30', 'Huawei Mate 9', null, '1', '', '2017-02-21 16:42:57');
INSERT INTO `clientes` VALUES ('31', 'Huggies', null, '1', '', '2017-02-21 16:47:01');
INSERT INTO `clientes` VALUES ('32', 'Learn', '', '1', 'L', '2017-02-21 16:48:02');
INSERT INTO `clientes` VALUES ('33', 'Motorola', null, '1', '', '2017-02-21 16:49:37');
INSERT INTO `clientes` VALUES ('34', 'Nutresa', null, '1', '', '2017-02-21 16:50:44');
INSERT INTO `clientes` VALUES ('35', 'OLX', null, '1', '', '2017-02-21 16:51:36');
INSERT INTO `clientes` VALUES ('36', 'Pacific Mall', null, '1', '', '2017-02-21 16:53:50');
INSERT INTO `clientes` VALUES ('37', 'RCN', '', '1', '', '2017-02-21 16:55:31');
INSERT INTO `clientes` VALUES ('38', 'Seoul', null, '1', '', '2017-02-21 16:57:57');
INSERT INTO `clientes` VALUES ('39', 'Tigo', 'tigo.png', '1', 'T', '2017-02-21 16:58:28');
INSERT INTO `clientes` VALUES ('40', 'Universidad Santiago de Cali ', null, '1', '', '2017-02-21 16:59:58');
INSERT INTO `clientes` VALUES ('41', 'Lego - Batman', null, '1', '', '2017-02-21 17:01:27');
INSERT INTO `clientes` VALUES ('42', 'Aguila Light', 'aguila_light.png', '1', 'A', '2017-02-21 17:02:42');
INSERT INTO `clientes` VALUES ('43', 'Akt Motos', 'adidas.png', '1', 'A', '2017-02-21 17:08:31');
INSERT INTO `clientes` VALUES ('44', 'Club Colombia', 'Club_Colombia.png', '1', '', '2017-02-22 15:21:46');
INSERT INTO `clientes` VALUES ('45', 'Claro Fijo', 'claro.png', '1', 'C', '2017-02-22 15:22:34');
INSERT INTO `clientes` VALUES ('46', 'Claro MÃ³vil', 'claro.png', '1', 'C', '2017-02-22 15:22:47');
INSERT INTO `clientes` VALUES ('47', 'Calzatodo', 'calzatodo.png', '1', 'C', '2017-02-22 15:24:20');
INSERT INTO `clientes` VALUES ('48', 'Chocolate Corona', '', '1', '', '2017-02-22 15:24:44');
INSERT INTO `clientes` VALUES ('49', 'Aguardiente Blanco del Valle', 'adidas.png', '1', 'A', '2017-02-22 15:27:04');
INSERT INTO `clientes` VALUES ('50', 'Decameron 2017', '', '1', '', '2017-02-22 15:27:29');
INSERT INTO `clientes` VALUES ('51', 'Dental Kids', '', '1', '', '2017-02-22 15:28:25');
INSERT INTO `clientes` VALUES ('52', 'El Corral', '', '1', '', '2017-02-22 15:30:03');
INSERT INTO `clientes` VALUES ('53', 'Heineken / UEFA', '', '1', '', '2017-02-22 16:49:02');
INSERT INTO `clientes` VALUES ('54', 'Milo', '', '1', '', '2017-02-22 16:49:10');
INSERT INTO `clientes` VALUES ('55', 'Tosh', '', '1', '', '2017-02-22 16:49:18');
INSERT INTO `clientes` VALUES ('56', 'Productos Yupi', '', '1', '', '2017-02-22 16:49:45');
INSERT INTO `clientes` VALUES ('57', 'Universidad EAN', '', '1', '', '2017-02-22 16:49:57');
INSERT INTO `clientes` VALUES ('58', 'Wingo Cali', '', '1', '', '2017-02-22 16:50:10');
INSERT INTO `clientes` VALUES ('59', 'AsociaciÃ³n Rio Cali', 'adidas.png', '1', 'A', '2017-02-22 16:50:34');
INSERT INTO `clientes` VALUES ('60', 'Poker - Dia de los amigos', '', '1', '', '2017-02-22 16:51:10');
INSERT INTO `clientes` VALUES ('61', 'CorporaciÃ³n Taurina BogotÃ¡', '', '1', '', '2017-02-22 16:51:26');
INSERT INTO `clientes` VALUES ('62', 'CC Palmetto Plaza', '', '1', '', '2017-02-22 16:52:19');
INSERT INTO `clientes` VALUES ('64', 'Fabio Restrepo', 'logo', '1', 'F', '2017-03-07 14:42:57');
INSERT INTO `clientes` VALUES ('65', 'Cine Colombia', 'cine_colombia.png', '1', 'C', '2017-03-14 15:42:56');
INSERT INTO `clientes` VALUES ('66', 'Coca Cola', 'coca_cola.png', '1', 'C', '2017-03-14 15:45:44');
INSERT INTO `clientes` VALUES ('67', 'Disney Channel', 'no', '1', 'D', '2017-03-14 15:47:42');
INSERT INTO `clientes` VALUES ('68', 'FIA', '', '1', 'F', '2017-03-14 15:50:06');
INSERT INTO `clientes` VALUES ('69', 'Bella y la Bestia', 'bella', '1', 'B', '2017-03-14 15:53:00');
INSERT INTO `clientes` VALUES ('70', 'ManÃ­ la Especial', 'no', '1', 'M', '2017-03-14 15:56:17');
INSERT INTO `clientes` VALUES ('71', 'Movistar', 'no', '1', 'M', '2017-03-14 15:59:37');
INSERT INTO `clientes` VALUES ('72', 'Redds', 'no', '1', 'R', '2017-03-14 16:02:28');
INSERT INTO `clientes` VALUES ('73', 'Sprite', 'no', '1', 'S', '2017-03-14 16:03:24');
INSERT INTO `clientes` VALUES ('74', 'Unipunto', 'no', '1', 'U', '2017-03-14 16:07:44');

-- ----------------------------
-- Table structure for graficas_edad
-- ----------------------------
DROP TABLE IF EXISTS `graficas_edad`;
CREATE TABLE `graficas_edad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_reporte` int(11) NOT NULL,
  `datos_edad` varchar(50) NOT NULL,
  `estatus` int(1) NOT NULL DEFAULT '1',
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_reporte` (`id_reporte`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of graficas_edad
-- ----------------------------
INSERT INTO `graficas_edad` VALUES ('8', '20', '29, 88, 120, 51', '1', '2017-03-13 17:00:38');
INSERT INTO `graficas_edad` VALUES ('9', '21', '29, 88, 120, 51', '1', '2017-03-14 14:59:55');

-- ----------------------------
-- Table structure for graficas_general
-- ----------------------------
DROP TABLE IF EXISTS `graficas_general`;
CREATE TABLE `graficas_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_reporte` int(11) NOT NULL,
  `fechas_general` varchar(250) NOT NULL,
  `datos_general` varchar(250) NOT NULL,
  `estatus` int(1) NOT NULL DEFAULT '1',
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_reporte` (`id_reporte`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of graficas_general
-- ----------------------------
INSERT INTO `graficas_general` VALUES ('18', '20', '8-feb, 9-feb, 10-feb, 11-feb, 12-feb, 13-feb, 14-feb', '5786, 6066, 4104, 2759, .228, 5979, 4188', '1', '2017-03-13 16:59:01');
INSERT INTO `graficas_general` VALUES ('19', '21', '8-feb, 9-feb, 10-feb, 11-feb, 12-feb, 13-feb, 14-feb', '5.786, 6.066, 4.104, 2.759, 2.228, 5.979, 4.188', '1', '2017-03-14 14:58:17');

-- ----------------------------
-- Table structure for graficas_genero
-- ----------------------------
DROP TABLE IF EXISTS `graficas_genero`;
CREATE TABLE `graficas_genero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_reporte` varchar(11) NOT NULL,
  `datos_generos` varchar(11) NOT NULL,
  `estatus` int(1) NOT NULL DEFAULT '1',
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_reporte` (`id_reporte`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of graficas_genero
-- ----------------------------
INSERT INTO `graficas_genero` VALUES ('4', '20', '191,128', '1', '2017-03-13 17:00:20');
INSERT INTO `graficas_genero` VALUES ('5', '21', '191,128', '1', '2017-03-14 14:59:32');

-- ----------------------------
-- Table structure for graficas_semana
-- ----------------------------
DROP TABLE IF EXISTS `graficas_semana`;
CREATE TABLE `graficas_semana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_reporte` int(11) NOT NULL,
  `fechas_semana` varchar(250) NOT NULL,
  `scans_semana` varchar(250) NOT NULL,
  `views_semana` varchar(250) NOT NULL,
  `estatus` int(1) NOT NULL DEFAULT '1',
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_reporte` (`id_reporte`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of graficas_semana
-- ----------------------------
INSERT INTO `graficas_semana` VALUES ('6', '20', '8-feb, 9-feb, 10-feb, 11-feb, 12-feb, 13-feb, 14-feb', '76, 58, 48, 35, 28, 42, 32', '33, 26, 21, 15, 13, 18, 14', '1', '2017-03-13 17:00:01');
INSERT INTO `graficas_semana` VALUES ('7', '21', '8-feb, 9-feb, 10-feb, 11-feb, 12-feb, 13-feb, 14-feb', '54, 44, 38, 27, 22, 25, 20', '24, 20, 17, 12, 10, 11, 9', '1', '2017-03-14 14:59:13');

-- ----------------------------
-- Table structure for historial
-- ----------------------------
DROP TABLE IF EXISTS `historial`;
CREATE TABLE `historial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `id_semana` int(11) NOT NULL,
  `estatus` int(1) NOT NULL DEFAULT '1',
  `imagen` varchar(300) DEFAULT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=232 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of historial
-- ----------------------------
INSERT INTO `historial` VALUES ('1', '1', '1', '55', '1', 'pegastic-nacional-sem03-min.jpg', '2017-02-17 10:15:32');
INSERT INTO `historial` VALUES ('2', '1', '1', '56', '1', 'pegastic-nacional-sem04-min.jpg', '2017-02-17 10:16:48');
INSERT INTO `historial` VALUES ('3', '1', '2', '55', '1', 'pegastic-bogota-sem03-min.jpg', '2017-02-17 10:18:13');
INSERT INTO `historial` VALUES ('4', '1', '2', '56', '1', 'pegastic-bogota-sem04-min.jpg', '2017-02-17 10:18:33');
INSERT INTO `historial` VALUES ('5', '1', '3', '55', '1', 'pegastic-cali-sem03-min.jpg', '2017-02-17 10:19:29');
INSERT INTO `historial` VALUES ('6', '1', '3', '56', '1', 'pegastic-cali-sem04-min.jpg', '2017-02-17 10:19:51');
INSERT INTO `historial` VALUES ('7', '2', '2', '2', '1', 'gral-sem02-min.jpg', '2017-02-17 10:37:16');
INSERT INTO `historial` VALUES ('8', '2', '2', '3', '1', 'gral-sem03-min.jpg', '2017-02-17 10:40:57');
INSERT INTO `historial` VALUES ('9', '2', '2', '4', '1', 'gral-sem04-min.jpg', '2017-02-17 10:44:41');
INSERT INTO `historial` VALUES ('10', '2', '2', '5', '1', 'gral-sem05-min.jpg', '2017-02-17 10:45:12');
INSERT INTO `historial` VALUES ('11', '2', '2', '6', '1', 'gral-sem06-min.jpg', '2017-02-17 10:45:35');
INSERT INTO `historial` VALUES ('12', '2', '2', '7', '1', 'gral-sem07-min.jpg', '2017-02-17 10:46:39');
INSERT INTO `historial` VALUES ('13', '2', '2', '8', '1', 'gral-sem08-min.jpg', '2017-02-17 10:47:04');
INSERT INTO `historial` VALUES ('14', '2', '2', '9', '1', 'gral-sem09-min.jpg', '2017-02-17 10:47:35');
INSERT INTO `historial` VALUES ('15', '2', '2', '10', '1', 'no', '2017-02-17 10:48:17');
INSERT INTO `historial` VALUES ('16', '2', '2', '11', '1', 'gral-sem11.jpg', '2017-02-17 10:48:30');
INSERT INTO `historial` VALUES ('17', '2', '2', '12', '1', 'jcdecaux-bogota-sem12-min.jpg', '2017-02-17 10:48:55');
INSERT INTO `historial` VALUES ('18', '2', '2', '13', '1', 'jcdecaux-bogota-sem13-min.jpg', '2017-02-17 10:50:31');
INSERT INTO `historial` VALUES ('19', '2', '2', '14', '1', 'jcdecaux-bogota-sem14-min.jpg', '2017-02-17 10:50:55');
INSERT INTO `historial` VALUES ('20', '2', '2', '15', '1', 'jcdecaux-bogota-sem15-min.jpg', '2017-02-17 10:51:25');
INSERT INTO `historial` VALUES ('21', '2', '2', '16', '1', 'jcdecaux-bogota-sem16-min.jpg', '2017-02-17 10:51:50');
INSERT INTO `historial` VALUES ('22', '2', '2', '17', '1', 'jcdecaux-bogota-sem17-min.jpg', '2017-02-17 10:52:09');
INSERT INTO `historial` VALUES ('23', '2', '2', '18', '1', 'jcdecaux-bogota-sem18-min.jpg', '2017-02-17 10:52:32');
INSERT INTO `historial` VALUES ('24', '2', '2', '19', '1', 'jcdecaux-bogota-sem19-min.jpg', '2017-02-17 10:52:56');
INSERT INTO `historial` VALUES ('25', '2', '2', '20', '1', 'jcdecaux-bogota-sem20-min.jpg', '2017-02-17 10:53:24');
INSERT INTO `historial` VALUES ('26', '2', '2', '21', '1', 'jcdecaux-bogota-sem21-min.jpg', '2017-02-17 10:53:47');
INSERT INTO `historial` VALUES ('27', '2', '2', '22', '1', 'no', '2017-02-17 10:54:04');
INSERT INTO `historial` VALUES ('28', '2', '2', '23', '1', 'jcdecaux-bogota-sem23-min.jpg', '2017-02-17 10:54:30');
INSERT INTO `historial` VALUES ('29', '2', '2', '24', '1', 'jcdecaux-bogota-sem24-min.jpg', '2017-02-17 10:54:53');
INSERT INTO `historial` VALUES ('30', '2', '2', '25', '1', 'jcdecaux-bogota-sem25-min.jpg', '2017-02-17 10:55:14');
INSERT INTO `historial` VALUES ('31', '2', '2', '26', '1', 'no', '2017-02-17 10:55:39');
INSERT INTO `historial` VALUES ('32', '2', '2', '27', '1', 'jcdecaux-bogota-sem27-min.jpg', '2017-02-17 10:55:48');
INSERT INTO `historial` VALUES ('33', '2', '2', '28', '1', 'jcdecaux-bogota-sem28-min.jpg', '2017-02-17 10:57:04');
INSERT INTO `historial` VALUES ('34', '2', '2', '29', '1', 'jcdecaux-bogota-sem29-min.jpg', '2017-02-17 10:57:24');
INSERT INTO `historial` VALUES ('35', '2', '2', '30', '1', 'jcdecaux-bogota-sem30-min.jpg', '2017-02-17 10:57:50');
INSERT INTO `historial` VALUES ('36', '2', '2', '31', '1', 'jcdecaux-bogota-sem31-min.jpg', '2017-02-17 10:58:14');
INSERT INTO `historial` VALUES ('37', '2', '2', '32', '1', 'jcdecaux-bogota-sem32-min.jpg', '2017-02-17 10:58:35');
INSERT INTO `historial` VALUES ('38', '2', '2', '33', '1', 'jcdecaux-bogota-sem33-min.jpg', '2017-02-17 10:58:59');
INSERT INTO `historial` VALUES ('39', '2', '2', '34', '1', 'jcdecaux-bogota-sem34-min.jpg', '2017-02-17 10:59:18');
INSERT INTO `historial` VALUES ('40', '2', '2', '35', '1', 'jcdecaux-bogota-sem35-min.jpg', '2017-02-17 10:59:37');
INSERT INTO `historial` VALUES ('41', '2', '2', '36', '1', 'jcdecaux-bogota-sem36-min.jpg', '2017-02-17 10:59:59');
INSERT INTO `historial` VALUES ('42', '2', '2', '37', '1', 'no', '2017-02-17 11:00:21');
INSERT INTO `historial` VALUES ('43', '2', '2', '38', '1', 'jcdecaux-bogota-sem38-min.jpg', '2017-02-17 11:00:41');
INSERT INTO `historial` VALUES ('44', '2', '2', '39', '1', 'no', '2017-02-17 11:01:05');
INSERT INTO `historial` VALUES ('45', '2', '2', '40', '1', 'jcdecaux-bogota-sem40-min.jpg', '2017-02-17 11:01:16');
INSERT INTO `historial` VALUES ('46', '2', '2', '41', '1', 'jcdecaux-bogota-sem41-min.jpg', '2017-02-17 11:01:38');
INSERT INTO `historial` VALUES ('47', '2', '2', '42', '1', 'jcdecaux-bogota-sem42-min.jpg', '2017-02-17 11:02:23');
INSERT INTO `historial` VALUES ('48', '2', '2', '43', '1', 'jcdecaux-bogota-sem43-min.jpg', '2017-02-17 11:02:47');
INSERT INTO `historial` VALUES ('49', '2', '2', '44', '1', 'jcdecaux-bogota-sem44-min.jpg', '2017-02-17 11:03:12');
INSERT INTO `historial` VALUES ('50', '2', '2', '45', '1', 'jcdecaux-bogota-sem45-min.jpg', '2017-02-17 11:03:30');
INSERT INTO `historial` VALUES ('51', '2', '2', '46', '1', 'jcdecaux-bogota-sem46-min.jpg', '2017-02-17 11:03:50');
INSERT INTO `historial` VALUES ('52', '2', '2', '47', '1', 'no', '2017-02-17 11:04:15');
INSERT INTO `historial` VALUES ('53', '2', '2', '48', '1', 'jcdecaux-bogota-sem48-min.jpg', '2017-02-17 11:04:23');
INSERT INTO `historial` VALUES ('54', '2', '2', '49', '1', 'jcdecaux-bogota-sem49-min.jpg', '2017-02-17 11:04:44');
INSERT INTO `historial` VALUES ('55', '2', '2', '50', '1', 'jcdecaux-bogota-sem50-min.jpg', '2017-02-17 11:05:05');
INSERT INTO `historial` VALUES ('56', '2', '2', '51', '1', 'jcdecaux-bogota-sem51-min.jpg', '2017-02-17 11:05:25');
INSERT INTO `historial` VALUES ('57', '2', '2', '52', '1', 'jcdecaux-bogota-sem52-min.jpg', '2017-02-17 11:05:44');
INSERT INTO `historial` VALUES ('58', '2', '2', '53', '1', 'jcdecaux-bogota-sem01-min.jpg', '2017-02-17 11:06:44');
INSERT INTO `historial` VALUES ('59', '2', '2', '54', '1', 'jcdecaux-bogota-sem02-min.jpg', '2017-02-17 11:07:09');
INSERT INTO `historial` VALUES ('60', '2', '2', '55', '1', 'jcdecaux-bogota-sem03-min.jpg', '2017-02-17 11:07:32');
INSERT INTO `historial` VALUES ('61', '2', '2', '56', '1', 'jcdecaux-bogota-sem04-min.jpg', '2017-02-17 11:07:50');
INSERT INTO `historial` VALUES ('62', '2', '2', '57', '1', 'jcdecaux-bogota-sem05-min.jpg', '2017-02-17 11:08:11');
INSERT INTO `historial` VALUES ('63', '2', '3', '11', '1', 'gral-sem11.jpg', '2017-02-17 11:13:09');
INSERT INTO `historial` VALUES ('64', '2', '3', '12', '1', 'jcdecaux-cali-sem12-min.jpg', '2017-02-17 11:19:01');
INSERT INTO `historial` VALUES ('65', '2', '3', '13', '1', 'jcdecaux-cali-sem13-min.jpg', '2017-02-17 11:22:27');
INSERT INTO `historial` VALUES ('66', '2', '3', '14', '1', 'jcdecaux-cali-sem14-min.jpg', '2017-02-17 11:23:01');
INSERT INTO `historial` VALUES ('67', '2', '3', '15', '1', 'jcdecaux-cali-sem15-min.jpg', '2017-02-17 11:23:23');
INSERT INTO `historial` VALUES ('68', '2', '3', '16', '1', 'jcdecaux-cali-sem16-min.jpg', '2017-02-17 11:23:47');
INSERT INTO `historial` VALUES ('69', '2', '3', '17', '1', 'jcdecaux-cali-sem17-min.jpg', '2017-02-17 11:25:01');
INSERT INTO `historial` VALUES ('70', '2', '3', '18', '1', 'jcdecaux-cali-sem18-min.jpg', '2017-02-17 11:25:35');
INSERT INTO `historial` VALUES ('71', '2', '3', '19', '1', 'jcdecaux-cali-sem19-min.jpg', '2017-02-17 11:26:00');
INSERT INTO `historial` VALUES ('72', '2', '3', '20', '1', 'jcdecaux-cali-sem20-min.jpg', '2017-02-17 11:26:24');
INSERT INTO `historial` VALUES ('73', '2', '3', '21', '1', 'jcdecaux-cali-sem21-min.jpg', '2017-02-17 11:26:47');
INSERT INTO `historial` VALUES ('74', '2', '3', '22', '1', 'no', '2017-02-17 11:27:05');
INSERT INTO `historial` VALUES ('75', '2', '3', '23', '1', 'jcdecaux-cali-sem23-min.jpg', '2017-02-17 11:27:26');
INSERT INTO `historial` VALUES ('76', '2', '3', '25', '1', 'jcdecaux-cali-sem25-min.jpg', '2017-02-17 11:27:54');
INSERT INTO `historial` VALUES ('77', '2', '3', '24', '1', 'no', '2017-02-17 11:28:10');
INSERT INTO `historial` VALUES ('78', '2', '3', '26', '1', 'no', '2017-02-17 11:28:44');
INSERT INTO `historial` VALUES ('79', '2', '3', '27', '1', 'jcdecaux-cali-sem27-min.jpg', '2017-02-17 11:28:55');
INSERT INTO `historial` VALUES ('80', '2', '3', '28', '1', 'jcdecaux-cali-sem28-min.jpg', '2017-02-17 11:29:26');
INSERT INTO `historial` VALUES ('81', '2', '3', '29', '1', 'jcdecaux-cali-sem29-min.jpg', '2017-02-17 11:29:47');
INSERT INTO `historial` VALUES ('82', '2', '3', '30', '1', 'jcdecaux-cali-sem30-min.jpg', '2017-02-17 11:30:08');
INSERT INTO `historial` VALUES ('83', '2', '3', '31', '1', 'jcdecaux-cali-sem31-min.jpg', '2017-02-17 11:30:53');
INSERT INTO `historial` VALUES ('84', '2', '3', '32', '1', 'jcdecaux-cali-sem32-min.jpg', '2017-02-17 11:31:15');
INSERT INTO `historial` VALUES ('85', '2', '3', '33', '1', 'jcdecaux-cali-sem33-min.jpg', '2017-02-17 11:31:37');
INSERT INTO `historial` VALUES ('86', '2', '3', '34', '1', 'jcdecaux-cali-sem34-min.jpg', '2017-02-17 11:31:58');
INSERT INTO `historial` VALUES ('87', '2', '3', '35', '1', 'jcdecaux-cali-sem35-min.jpg', '2017-02-17 11:32:16');
INSERT INTO `historial` VALUES ('88', '2', '3', '36', '1', 'jcdecaux-cali-sem36-min.jpg', '2017-02-17 11:32:36');
INSERT INTO `historial` VALUES ('89', '2', '3', '37', '1', 'no', '2017-02-17 11:33:01');
INSERT INTO `historial` VALUES ('90', '2', '3', '38', '1', 'jcdecaux-cali-sem38-min.jpg', '2017-02-17 11:33:09');
INSERT INTO `historial` VALUES ('91', '2', '3', '39', '1', 'no', '2017-02-17 11:33:32');
INSERT INTO `historial` VALUES ('92', '2', '3', '40', '1', 'jcdecaux-cali-sem40-min.jpg', '2017-02-17 11:33:40');
INSERT INTO `historial` VALUES ('93', '2', '3', '41', '1', 'jcdecaux-cali-sem41-min.jpg', '2017-02-17 11:34:00');
INSERT INTO `historial` VALUES ('94', '2', '3', '42', '1', 'jcdecaux-cali-sem42-min.jpg', '2017-02-17 11:34:19');
INSERT INTO `historial` VALUES ('95', '2', '3', '43', '1', 'jcdecaux-cali-sem43-min.jpg', '2017-02-17 11:34:41');
INSERT INTO `historial` VALUES ('96', '2', '3', '44', '1', 'jcdecaux-cali-sem44-min.jpg', '2017-02-17 11:35:05');
INSERT INTO `historial` VALUES ('97', '2', '3', '45', '1', 'jcdecaux-cali-sem45-min.jpg', '2017-02-17 11:35:30');
INSERT INTO `historial` VALUES ('98', '2', '3', '46', '1', 'jcdecaux-cali-sem46-min.jpg', '2017-02-17 11:35:48');
INSERT INTO `historial` VALUES ('99', '2', '3', '47', '1', 'no', '2017-02-17 11:36:16');
INSERT INTO `historial` VALUES ('100', '2', '3', '48', '1', 'jcdecaux-cali-sem48-min.jpg', '2017-02-17 11:36:23');
INSERT INTO `historial` VALUES ('101', '2', '3', '49', '1', 'jcdecaux-cali-sem49-min.jpg', '2017-02-17 11:37:02');
INSERT INTO `historial` VALUES ('102', '2', '3', '50', '1', 'jcdecaux-cali-sem50-min.jpg', '2017-02-17 11:37:24');
INSERT INTO `historial` VALUES ('103', '2', '3', '51', '1', 'jcdecaux-cali-sem51-min.jpg', '2017-02-17 11:37:43');
INSERT INTO `historial` VALUES ('104', '2', '3', '52', '1', 'jcdecaux-cali-sem52-min.jpg', '2017-02-17 11:38:02');
INSERT INTO `historial` VALUES ('105', '2', '3', '53', '1', 'jcdecaux-cali-sem01-min.jpg', '2017-02-17 11:38:24');
INSERT INTO `historial` VALUES ('106', '2', '3', '54', '1', 'jcdecaux-cali-sem02-min.jpg', '2017-02-17 11:38:43');
INSERT INTO `historial` VALUES ('107', '2', '3', '55', '1', 'jcdecaux-cali-sem03-min.jpg', '2017-02-17 11:39:01');
INSERT INTO `historial` VALUES ('108', '2', '3', '56', '1', 'jcdecaux-cali-sem04-min.jpg', '2017-02-17 11:39:19');
INSERT INTO `historial` VALUES ('109', '2', '3', '57', '1', 'jcdecaux-cali-sem05-min.jpg', '2017-02-17 11:39:39');
INSERT INTO `historial` VALUES ('110', '2', '1', '2', '1', 'gral-sem02-min.jpg', '2017-02-17 11:44:52');
INSERT INTO `historial` VALUES ('111', '2', '1', '4', '1', 'gral-sem04-min.jpg', '2017-02-17 11:45:17');
INSERT INTO `historial` VALUES ('112', '2', '1', '5', '1', 'gral-sem05-min.jpg', '2017-02-17 11:45:43');
INSERT INTO `historial` VALUES ('113', '2', '1', '6', '1', 'gral-sem06-min.jpg', '2017-02-17 11:50:32');
INSERT INTO `historial` VALUES ('114', '2', '1', '7', '1', 'gral-sem07-min.jpg', '2017-02-17 11:51:45');
INSERT INTO `historial` VALUES ('115', '2', '1', '8', '1', 'gral-sem08-min.jpg', '2017-02-17 11:52:18');
INSERT INTO `historial` VALUES ('116', '2', '1', '9', '1', 'gral-sem09-min.jpg', '2017-02-17 11:52:39');
INSERT INTO `historial` VALUES ('117', '2', '1', '10', '1', 'gral-sem10.jpg', '2017-02-17 11:53:03');
INSERT INTO `historial` VALUES ('118', '2', '1', '11', '1', 'gral-sem11.jpg', '2017-02-17 11:53:27');
INSERT INTO `historial` VALUES ('119', '2', '1', '12', '1', 'jcdecaux-nacional-sem12-min.jpg', '2017-02-17 11:54:01');
INSERT INTO `historial` VALUES ('120', '2', '1', '13', '1', 'jcdecaux-nacional-sem13-min.jpg', '2017-02-17 11:56:22');
INSERT INTO `historial` VALUES ('121', '2', '1', '14', '1', 'jcdecaux-nacional-sem14-min.jpg', '2017-02-17 11:56:48');
INSERT INTO `historial` VALUES ('122', '2', '1', '15', '1', 'jcdecaux-nacional-sem15-min.jpg', '2017-02-17 11:57:08');
INSERT INTO `historial` VALUES ('123', '2', '1', '16', '1', 'jcdecaux-nacional-sem16-min.jpg', '2017-02-17 11:57:31');
INSERT INTO `historial` VALUES ('124', '2', '1', '17', '1', 'jcdecaux-nacional-sem17-min.jpg', '2017-02-17 11:58:14');
INSERT INTO `historial` VALUES ('125', '2', '1', '18', '1', 'jcdecaux-nacional-sem18-min.jpg', '2017-02-17 11:58:54');
INSERT INTO `historial` VALUES ('126', '2', '1', '19', '1', 'jcdecaux-nacional-sem19-min.jpg', '2017-02-17 11:59:14');
INSERT INTO `historial` VALUES ('127', '2', '1', '20', '1', 'jcdecaux-nacional-sem20-min.jpg', '2017-02-17 11:59:37');
INSERT INTO `historial` VALUES ('128', '2', '1', '21', '1', 'jcdecaux-nacional-sem21-min.jpg', '2017-02-17 12:00:01');
INSERT INTO `historial` VALUES ('129', '2', '1', '22', '1', 'no', '2017-02-17 12:00:18');
INSERT INTO `historial` VALUES ('130', '2', '1', '23', '1', 'jcdecaux-nacional-sem23-min.jpg', '2017-02-17 12:00:42');
INSERT INTO `historial` VALUES ('131', '2', '1', '24', '1', 'jcdecaux-nacional-sem24-min.jpg', '2017-02-17 12:01:04');
INSERT INTO `historial` VALUES ('132', '2', '1', '25', '1', 'jcdecaux-nacional-sem25-min.jpg', '2017-02-17 12:01:29');
INSERT INTO `historial` VALUES ('133', '2', '1', '26', '1', 'no', '2017-02-17 12:01:46');
INSERT INTO `historial` VALUES ('134', '2', '1', '27', '1', 'jcdecaux-nacional-sem27-min.jpg', '2017-02-17 12:02:12');
INSERT INTO `historial` VALUES ('135', '2', '1', '28', '1', 'jcdecaux-nacional-sem28-min.jpg', '2017-02-17 12:02:39');
INSERT INTO `historial` VALUES ('136', '2', '1', '29', '1', 'jcdecaux-nacional-sem29-min.jpg', '2017-02-17 12:03:02');
INSERT INTO `historial` VALUES ('137', '2', '1', '30', '1', 'jcdecaux-nacional-sem30-min.jpg', '2017-02-17 12:03:27');
INSERT INTO `historial` VALUES ('138', '2', '1', '31', '1', 'jcdecaux-nacional-sem31-min.jpg', '2017-02-17 12:03:51');
INSERT INTO `historial` VALUES ('139', '2', '1', '32', '1', 'jcdecaux-nacional-sem32-min.jpg', '2017-02-17 12:05:23');
INSERT INTO `historial` VALUES ('140', '2', '1', '33', '1', 'jcdecaux-nacional-sem33-min.jpg', '2017-02-17 12:06:05');
INSERT INTO `historial` VALUES ('141', '2', '1', '34', '1', 'jcdecaux-nacional-sem34-min.jpg', '2017-02-17 12:06:28');
INSERT INTO `historial` VALUES ('142', '2', '1', '35', '1', 'jcdecaux-nacional-sem35-min.jpg', '2017-02-17 12:06:50');
INSERT INTO `historial` VALUES ('143', '2', '1', '36', '1', 'jcdecaux-nacional-sem36-min.jpg', '2017-02-17 12:07:09');
INSERT INTO `historial` VALUES ('144', '2', '1', '37', '1', 'no', '2017-02-17 12:07:39');
INSERT INTO `historial` VALUES ('145', '2', '1', '38', '1', 'jcdecaux-nacional-sem38-min.jpg', '2017-02-17 12:07:48');
INSERT INTO `historial` VALUES ('146', '2', '1', '39', '1', 'no', '2017-02-17 12:08:17');
INSERT INTO `historial` VALUES ('147', '2', '1', '40', '1', 'jcdecaux-nacional-sem40-min.jpg', '2017-02-17 12:08:25');
INSERT INTO `historial` VALUES ('148', '2', '1', '41', '1', 'jcdecaux-nacional-sem41-min.jpg', '2017-02-17 12:08:47');
INSERT INTO `historial` VALUES ('149', '2', '1', '42', '1', 'jcdecaux-nacional-sem42-min.jpg', '2017-02-17 12:09:11');
INSERT INTO `historial` VALUES ('150', '2', '1', '43', '1', 'jcdecaux-nacional-sem43-min.jpg', '2017-02-17 12:09:36');
INSERT INTO `historial` VALUES ('151', '2', '1', '44', '1', 'jcdecaux-nacional-sem44-min.jpg', '2017-02-17 12:09:59');
INSERT INTO `historial` VALUES ('152', '2', '1', '45', '1', 'jcdecaux-nacional-sem45-min.jpg', '2017-02-17 12:10:18');
INSERT INTO `historial` VALUES ('153', '2', '1', '46', '1', 'jcdecaux-nacional-sem46-min.jpg', '2017-02-17 12:10:38');
INSERT INTO `historial` VALUES ('154', '2', '1', '47', '1', 'no', '2017-02-17 12:11:04');
INSERT INTO `historial` VALUES ('155', '2', '1', '48', '1', 'jcdecaux-nacional-sem48-min.jpg', '2017-02-17 12:11:11');
INSERT INTO `historial` VALUES ('156', '2', '1', '49', '1', 'jcdecaux-nacional-sem49-min.jpg', '2017-02-17 12:11:30');
INSERT INTO `historial` VALUES ('157', '2', '1', '50', '1', 'jcdecaux-nacional-sem50-min.jpg', '2017-02-17 12:12:01');
INSERT INTO `historial` VALUES ('158', '2', '1', '51', '1', 'jcdecaux-nacional-sem50-min.jpg', '2017-02-17 12:12:09');
INSERT INTO `historial` VALUES ('159', '2', '1', '52', '1', 'jcdecaux-nacional-sem52-min.jpg', '2017-02-17 12:12:28');
INSERT INTO `historial` VALUES ('160', '2', '1', '53', '1', 'jcdecaux-nacional-sem01-min.jpg', '2017-02-17 12:12:47');
INSERT INTO `historial` VALUES ('161', '2', '1', '54', '1', 'jcdecaux-nacional-sem02-min.jpg', '2017-02-17 12:13:06');
INSERT INTO `historial` VALUES ('162', '2', '1', '55', '1', 'jcdecaux-nacional-sem03-min.jpg', '2017-02-17 12:13:24');
INSERT INTO `historial` VALUES ('163', '2', '1', '56', '1', 'jcdecaux-nacional-sem04-min.jpg', '2017-02-17 12:13:43');
INSERT INTO `historial` VALUES ('164', '2', '1', '57', '1', 'jcdecaux-nacional-sem05-min.jpg', '2017-02-17 12:14:04');
INSERT INTO `historial` VALUES ('165', '3', '2', '18', '1', 'reebok-cali-sem18-min.jpg', '2017-02-20 16:49:46');
INSERT INTO `historial` VALUES ('166', '4', '2', '32', '1', 'nike-bogota-sem32-min.jpg', '2017-02-21 15:14:41');
INSERT INTO `historial` VALUES ('167', '4', '2', '33', '1', 'nike-bogota-sem33-min.jpg', '2017-02-21 15:15:07');
INSERT INTO `historial` VALUES ('168', '4', '2', '34', '1', 'nike-bogota-sem34-min.jpg', '2017-02-21 15:15:40');
INSERT INTO `historial` VALUES ('169', '3', '2', '59', '1', 'reebok-bog-sem7-17.jpg', '2017-02-21 15:20:04');
INSERT INTO `historial` VALUES ('170', '5', '2', '59', '1', 'alkosto-bog-sem7-17.jpg', '2017-02-21 15:28:36');
INSERT INTO `historial` VALUES ('171', '6', '3', '34', '1', 'almacenessi-cali-sem26-16', '2017-02-21 15:32:06');
INSERT INTO `historial` VALUES ('172', '6', '3', '25', '1', 'almacenessi-cali-sem25-16.jpg', '2017-02-21 15:33:36');
INSERT INTO `historial` VALUES ('173', '7', '3', '59', '1', 'artefacto-cali-sem7-17.jpg', '2017-02-21 15:37:16');
INSERT INTO `historial` VALUES ('174', '8', '2', '59', '1', 'avianca-bog-sem7-17.jpg', '2017-02-21 15:38:56');
INSERT INTO `historial` VALUES ('175', '9', '1', '59', '1', 'caracol-yomellamo-nacional-sem7-17.jpg', '2017-02-21 15:41:20');
INSERT INTO `historial` VALUES ('176', '9', '2', '59', '1', 'caracol-yomellamo-bog-sem7-17.jpg', '2017-02-21 15:42:05');
INSERT INTO `historial` VALUES ('177', '9', '3', '59', '1', 'caracol-yomellamo-cali-sem7-17.jpg', '2017-02-21 15:42:46');
INSERT INTO `historial` VALUES ('178', '10', '3', '25', '1', 'unicentro-cali-sem25-16.jpg', '2017-02-21 15:45:58');
INSERT INTO `historial` VALUES ('179', '11', '3', '59', '1', 'ebba-cali-sem7-17.jpg', '2017-02-21 15:47:18');
INSERT INTO `historial` VALUES ('180', '12', '3', '59', '1', 'ensalsate-cali-sem7-17.jpg', '2017-02-21 15:52:10');
INSERT INTO `historial` VALUES ('181', '13', '3', '52', '1', 'zoo-cali-sem44-16.jpg', '2017-02-21 15:55:16');
INSERT INTO `historial` VALUES ('182', '14', '1', '59', '1', 'mcdonalds-nacional-sem7-17.jpg', '2017-02-21 15:57:13');
INSERT INTO `historial` VALUES ('183', '14', '2', '59', '1', 'mcdonalds-bog-sem7-17.jpg', '2017-02-21 15:58:22');
INSERT INTO `historial` VALUES ('184', '14', '3', '59', '1', 'mcdonalds-cali-sem7-17.jpg', '2017-02-21 16:00:02');
INSERT INTO `historial` VALUES ('185', '15', '2', '59', '1', 'colcafe-bog-sem7-17.jpg', '2017-02-21 16:01:25');
INSERT INTO `historial` VALUES ('186', '16', '2', '59', '1', 'oboticario-bogota-sem51-min.jpg', '2017-02-21 16:03:13');
INSERT INTO `historial` VALUES ('187', '16', '2', '60', '1', 'oboticario-bogota-sem52-min.jpg', '2017-02-21 16:04:11');
INSERT INTO `historial` VALUES ('188', '17', '2', '41', '1', 'golfsportback-bogota-sem41-min.jpg', '2017-02-21 16:06:40');
INSERT INTO `historial` VALUES ('189', '18', '1', '59', '1', 'jeep-nacional-sem7-17.jpg', '2017-02-21 16:08:08');
INSERT INTO `historial` VALUES ('190', '18', '2', '59', '1', 'jeep-bog-sem7-17.jpg', '2017-02-21 16:09:54');
INSERT INTO `historial` VALUES ('191', '18', '3', '59', '1', 'jeep-cali-sem7-17.jpg', '2017-02-21 16:10:36');
INSERT INTO `historial` VALUES ('192', '19', '2', '59', '1', 'todorico-bog-sem7-17.jpg', '2017-02-21 16:12:15');
INSERT INTO `historial` VALUES ('193', '20', '2', '59', '1', 'adidas-bog-sem7-17.jpg', '2017-02-21 16:18:14');
INSERT INTO `historial` VALUES ('194', '21', '3', '59', '1', 'andina-cali-sem7-17.jpg', '2017-02-21 16:20:01');
INSERT INTO `historial` VALUES ('195', '22', '1', '59', '1', 'caracol-aliasjj-nacional-sem7-17.jpg', '2017-02-21 16:24:13');
INSERT INTO `historial` VALUES ('196', '22', '2', '59', '1', 'caracol-aliasjj-bog-sem7-17.jpg', '2017-02-21 16:25:02');
INSERT INTO `historial` VALUES ('197', '22', '3', '59', '1', 'caracol-aliasjj-cali-sem7-17.jpg', '2017-02-21 16:25:42');
INSERT INTO `historial` VALUES ('198', '23', '2', '34', '1', 'titan-plaza-bog-sem34-16.jpg', '2017-02-21 16:29:08');
INSERT INTO `historial` VALUES ('199', '24', '2', '59', '1', 'colsubsidio-bog-sem7-17.jpg', '2017-02-21 16:30:13');
INSERT INTO `historial` VALUES ('200', '25', '2', '59', '1', 'convergys-bog-sem7-17.jpg', '2017-02-21 16:32:15');
INSERT INTO `historial` VALUES ('201', '26', '3', '59', '1', 'delirio-cali-sem7-17.jpg', '2017-02-21 16:34:13');
INSERT INTO `historial` VALUES ('202', '27', '2', '59', '1', 'discovery-channel-bog-sem7-17.jpg', '2017-02-21 16:37:37');
INSERT INTO `historial` VALUES ('203', '28', '2', '59', '1', 'etb-bog-sem7-17.jpg', '2017-02-21 16:39:04');
INSERT INTO `historial` VALUES ('204', '29', '3', '59', '1', 'fincas-valle-cali-sem7-17.jpg', '2017-02-21 16:41:31');
INSERT INTO `historial` VALUES ('205', '30', '1', '59', '1', 'huawei-mate9-nacional-sem7-17.jpg', '2017-02-21 16:43:21');
INSERT INTO `historial` VALUES ('206', '30', '2', '59', '1', 'huawei-mate9-bog-sem7-17.jpg', '2017-02-21 16:44:15');
INSERT INTO `historial` VALUES ('207', '30', '3', '59', '1', 'huawei-mate9-cali-sem7-17.jpg', '2017-02-21 16:44:55');
INSERT INTO `historial` VALUES ('208', '31', '2', '59', '1', 'huggies-bog-sem7-17.jpg', '2017-02-21 16:47:12');
INSERT INTO `historial` VALUES ('209', '32', '3', '59', '1', 'learn-cali-sem7-17.jpg', '2017-02-21 16:48:17');
INSERT INTO `historial` VALUES ('210', '33', '2', '59', '1', 'mototola-bog-sem7-17.jpg', '2017-02-21 16:49:53');
INSERT INTO `historial` VALUES ('211', '34', '2', '59', '1', 'nutresa-bog-sem7-17.jpg', '2017-02-21 16:50:58');
INSERT INTO `historial` VALUES ('212', '35', '2', '57', '1', 'olx-bogota-sem05-min.jpg', '2017-02-21 16:51:47');
INSERT INTO `historial` VALUES ('213', '35', '2', '58', '1', 'no', '2017-02-21 16:52:36');
INSERT INTO `historial` VALUES ('214', '35', '2', '59', '1', 'olx-bog-sem7-17.jpg', '2017-02-21 16:52:48');
INSERT INTO `historial` VALUES ('215', '36', '3', '59', '1', 'pacific-mall-cali-sem7-17.jpg', '2017-02-21 16:54:04');
INSERT INTO `historial` VALUES ('216', '37', '1', '59', '1', 'francisco-matematico-nacional-sem7-17.jpg', '2017-02-21 16:55:45');
INSERT INTO `historial` VALUES ('217', '37', '2', '59', '1', 'francisco-matematico-bogota-sem7-17.jpg', '2017-02-21 16:56:32');
INSERT INTO `historial` VALUES ('218', '37', '3', '59', '1', 'francisco-matematico-cali-sem7-17.jpg', '2017-02-21 16:57:11');
INSERT INTO `historial` VALUES ('219', '38', '3', '59', '1', 'seoul-cali-sem7-17.jpg', '2017-02-21 16:58:07');
INSERT INTO `historial` VALUES ('220', '39', '2', '59', '1', 'tigo-bog-sem7-17.jpg', '2017-02-21 16:59:05');
INSERT INTO `historial` VALUES ('221', '40', '3', '59', '1', 'usanticali-cali-sem7-17.jpg', '2017-02-21 17:00:22');
INSERT INTO `historial` VALUES ('222', '41', '2', '59', '1', 'lego-batman-bog-sem7-17.jpg', '2017-02-21 17:01:49');
INSERT INTO `historial` VALUES ('223', '42', '1', '56', '1', 'aguila-light-nacional-sem04-min.jpg', '2017-02-21 17:02:53');
INSERT INTO `historial` VALUES ('224', '42', '1', '59', '1', 'aguila-light-nacional-sem04-min.jpg', '2017-02-21 17:04:56');
INSERT INTO `historial` VALUES ('225', '42', '2', '56', '1', 'aguila-light-bogota-sem04-min.jpg', '2017-02-21 17:05:38');
INSERT INTO `historial` VALUES ('226', '42', '2', '59', '1', 'aguila-light-bog-sem7-17.jpg', '2017-02-21 17:06:30');
INSERT INTO `historial` VALUES ('227', '42', '3', '56', '1', 'aguila-light-cali-sem04-min.jpg', '2017-02-21 17:06:57');
INSERT INTO `historial` VALUES ('228', '42', '3', '59', '1', 'aguila-light-cali-sem7-17.jpg', '2017-02-21 17:07:30');
INSERT INTO `historial` VALUES ('229', '43', '1', '59', '1', 'akt-motos-nacional-sem7-17.jpg', '2017-02-21 17:08:41');
INSERT INTO `historial` VALUES ('230', '43', '2', '59', '1', 'akt-motos-bog-sem7-17.jpg', '2017-02-21 17:09:24');
INSERT INTO `historial` VALUES ('231', '43', '3', '59', '1', 'akt-motos-cali-sem7-17.jpg', '2017-02-21 17:10:03');

-- ----------------------------
-- Table structure for loginattempts
-- ----------------------------
DROP TABLE IF EXISTS `loginattempts`;
CREATE TABLE `loginattempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of loginattempts
-- ----------------------------
INSERT INTO `loginattempts` VALUES ('::1', '1', '2017-03-14 21:30:54', 'obarrera', '1');

-- ----------------------------
-- Table structure for reportes_clientes
-- ----------------------------
DROP TABLE IF EXISTS `reportes_clientes`;
CREATE TABLE `reportes_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_campana` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `id_semana` int(11) NOT NULL,
  `text_semana` varchar(100) DEFAULT NULL,
  `no_scans` int(11) DEFAULT NULL,
  `no_views` int(11) DEFAULT NULL,
  `best_hour` varchar(50) DEFAULT NULL,
  `porcen_total` varchar(20) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT CURRENT_TIMESTAMP,
  `scans_total` int(11) DEFAULT NULL,
  `descarga_total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reportes_clientes
-- ----------------------------
INSERT INTO `reportes_clientes` VALUES ('20', '16', '1', '59', 'DEL 8 DE FEBRERO AL 14 DE FEBRERO ', '319', '140', '11:00 AM 37 SCANS', '0.15%', '2017-03-13 16:57:59', '29441', '87893');
INSERT INTO `reportes_clientes` VALUES ('21', '16', '2', '59', 'aSFGH', '230', '103', '2332', '22', '2017-03-14 14:57:14', '21212', '23232323');
INSERT INTO `reportes_clientes` VALUES ('22', '16', '3', '59', 'ASFDsfsdf', '34234', '3243', 'aszfg', '222', '2017-03-14 15:05:37', '23323', '23232');

-- ----------------------------
-- Table structure for semanas
-- ----------------------------
DROP TABLE IF EXISTS `semanas`;
CREATE TABLE `semanas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semana` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `estatus` int(1) NOT NULL DEFAULT '1',
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of semanas
-- ----------------------------
INSERT INTO `semanas` VALUES ('1', '1', '2016', '1', '2017-02-16 14:29:38', 'dodgerBlue');
INSERT INTO `semanas` VALUES ('2', '2', '2016', '1', '2017-02-16 15:07:56', 'darkCyan');
INSERT INTO `semanas` VALUES ('3', '3', '2016', '1', '2017-02-16 15:10:06', 'skyBlue');
INSERT INTO `semanas` VALUES ('4', '4', '2016', '1', '2017-02-16 16:02:08', 'violet');
INSERT INTO `semanas` VALUES ('5', '5', '2016', '1', '2017-02-16 16:02:25', 'zombieGreen');
INSERT INTO `semanas` VALUES ('6', '6', '2016', '1', '2017-02-16 16:02:44', 'darkCyan');
INSERT INTO `semanas` VALUES ('7', '7', '2016', '1', '2017-02-16 16:04:55', 'skyBlue');
INSERT INTO `semanas` VALUES ('8', '8', '2016', '1', '2017-02-16 17:07:10', 'skyBlue');
INSERT INTO `semanas` VALUES ('9', '9', '2016', '1', '2017-02-17 10:25:41', 'violet');
INSERT INTO `semanas` VALUES ('10', '10', '2016', '1', '2017-02-17 10:25:48', 'violet');
INSERT INTO `semanas` VALUES ('11', '11', '2016', '1', '2017-02-17 10:25:54', 'dodgerBlue');
INSERT INTO `semanas` VALUES ('12', '12', '2016', '1', '2017-02-17 10:25:59', 'darkCyan');
INSERT INTO `semanas` VALUES ('13', '13', '2016', '1', '2017-02-17 10:26:04', 'skyBlue');
INSERT INTO `semanas` VALUES ('14', '14', '2016', '1', '2017-02-17 10:26:09', 'violet');
INSERT INTO `semanas` VALUES ('15', '15', '2016', '1', '2017-02-17 10:26:16', 'zombieGreen');
INSERT INTO `semanas` VALUES ('16', '16', '2016', '1', '2017-02-17 10:26:23', 'darkCyan');
INSERT INTO `semanas` VALUES ('17', '17', '2016', '1', '2017-02-17 10:26:30', 'skyBlue');
INSERT INTO `semanas` VALUES ('18', '18', '2016', '1', '2017-02-17 10:26:35', 'dodgerBlue');
INSERT INTO `semanas` VALUES ('19', '19', '2016', '1', '2017-02-17 10:26:39', 'darkCyan');
INSERT INTO `semanas` VALUES ('20', '20', '2016', '1', '2017-02-17 10:26:43', 'skyBlue');
INSERT INTO `semanas` VALUES ('21', '21', '2016', '1', '2017-02-17 10:26:48', 'violet');
INSERT INTO `semanas` VALUES ('22', '22', '2016', '1', '2017-02-17 10:26:53', 'zombieGreen');
INSERT INTO `semanas` VALUES ('23', '23', '2016', '1', '2017-02-17 10:26:57', 'darkCyan');
INSERT INTO `semanas` VALUES ('24', '24', '2016', '1', '2017-02-17 10:27:01', 'skyBlue');
INSERT INTO `semanas` VALUES ('25', '25', '2016', '1', '2017-02-17 10:27:09', 'dodgerBlue');
INSERT INTO `semanas` VALUES ('26', '26', '2016', '1', '2017-02-17 10:27:15', 'darkCyan');
INSERT INTO `semanas` VALUES ('27', '27', '2016', '1', '2017-02-17 10:27:20', 'skyBlue');
INSERT INTO `semanas` VALUES ('28', '28', '2016', '1', '2017-02-17 10:27:26', 'violet');
INSERT INTO `semanas` VALUES ('29', '29', '2016', '1', '2017-02-17 10:28:05', 'zombieGreen');
INSERT INTO `semanas` VALUES ('30', '30', '2016', '1', '2017-02-17 10:28:10', 'darkCyan');
INSERT INTO `semanas` VALUES ('31', '31', '2016', '1', '2017-02-17 10:28:36', 'skyBlue');
INSERT INTO `semanas` VALUES ('32', '32', '2016', '1', '2017-02-17 10:28:43', 'dodgerBlue');
INSERT INTO `semanas` VALUES ('33', '33', '2016', '1', '2017-02-17 10:28:51', 'darkCyan');
INSERT INTO `semanas` VALUES ('34', '34', '2016', '1', '2017-02-17 10:28:57', 'skyBlue');
INSERT INTO `semanas` VALUES ('35', '35', '2016', '1', '2017-02-17 10:29:03', 'violet');
INSERT INTO `semanas` VALUES ('36', '36', '2016', '1', '2017-02-17 10:29:09', 'zombieGreen');
INSERT INTO `semanas` VALUES ('37', '37', '2016', '1', '2017-02-17 10:29:45', 'darkCyan');
INSERT INTO `semanas` VALUES ('38', '38', '2016', '1', '2017-02-17 10:30:30', 'skyBlue');
INSERT INTO `semanas` VALUES ('39', '39', '2016', '1', '2017-02-17 10:30:36', 'dodgerBlue');
INSERT INTO `semanas` VALUES ('40', '40', '2016', '1', '2017-02-17 10:30:41', 'darkCyan');
INSERT INTO `semanas` VALUES ('41', '41', '2016', '1', '2017-02-17 10:30:46', 'skyBlue');
INSERT INTO `semanas` VALUES ('42', '42', '2016', '1', '2017-02-17 10:30:51', 'violet');
INSERT INTO `semanas` VALUES ('43', '43', '2016', '1', '2017-02-17 10:30:56', 'zombieGreen');
INSERT INTO `semanas` VALUES ('44', '44', '2016', '1', '2017-02-17 10:31:02', 'darkCyan');
INSERT INTO `semanas` VALUES ('45', '45', '2016', '1', '2017-02-17 10:31:07', 'skyBlue');
INSERT INTO `semanas` VALUES ('46', '46', '2016', '1', '2017-02-17 10:31:12', 'dodgerBlue');
INSERT INTO `semanas` VALUES ('47', '47', '2016', '1', '2017-02-17 10:31:17', 'darkCyan');
INSERT INTO `semanas` VALUES ('48', '48', '2016', '1', '2017-02-17 10:31:23', 'dodgerBlue');
INSERT INTO `semanas` VALUES ('49', '49', '2016', '1', '2017-02-17 10:31:28', 'darkCyan');
INSERT INTO `semanas` VALUES ('50', '50', '2016', '1', '2017-02-17 10:31:33', 'skyBlue');
INSERT INTO `semanas` VALUES ('51', '51', '2016', '1', '2017-02-17 10:31:38', 'violet');
INSERT INTO `semanas` VALUES ('52', '52', '2016', '1', '2017-02-17 10:31:42', 'zombieGreen');
INSERT INTO `semanas` VALUES ('53', '1', '2017', '1', '2017-02-17 10:31:46', 'darkCyan');
INSERT INTO `semanas` VALUES ('54', '2', '2017', '1', '2017-02-17 10:31:52', 'skyBlue');
INSERT INTO `semanas` VALUES ('55', '3', '2017', '1', '2017-02-17 10:31:58', 'dodgerBlue');
INSERT INTO `semanas` VALUES ('56', '4', '2017', '1', '2017-02-17 10:32:04', 'darkCyan');
INSERT INTO `semanas` VALUES ('57', '5', '2017', '1', '2017-02-17 10:32:07', 'skyBlue');
INSERT INTO `semanas` VALUES ('58', '6', '2017', '1', '2017-02-17 10:32:17', 'violet');
INSERT INTO `semanas` VALUES ('59', '7', '2017', '1', '2017-02-17 10:32:22', 'zombieGreen');
INSERT INTO `semanas` VALUES ('60', '8', '2017', '1', '2017-02-17 10:32:27', 'darkCyan');
INSERT INTO `semanas` VALUES ('61', '9', '2017', '1', '2017-02-17 11:06:26', 'skyBlue');
INSERT INTO `semanas` VALUES ('62', '10', '2017', '1', '2017-02-17 11:06:32', 'darkCyan');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1132458a360122df6e', 'obarrera', '$2y$10$c26vYoA/efd0M/xLfaENDOxfQ9mpWr0jABG5K7Tn9Dzb4ZcCjBLNW', 'obarrerafranco@gmail.com', '1', '2017-02-14 14:58:34');
INSERT INTO `usuarios` VALUES ('199113702458a7366b66b36', 'andres', '$2y$10$dwq1XId.Adm/wtg1s70O5umCPY2V.BmEdKgmJzamTs.gp/mXML6Am', 'andres@cee-platform.com', '1', '2017-02-17 12:47:06');
INSERT INTO `usuarios` VALUES ('66920433558a7363e00e86', 'elisa', '$2y$10$OPyGSz4GAtFn3w8R.WUWoOyDiQ/cdBODf/q0oAB3wa5zLRnP3Pbwe', 'elisa@cee-platform.com', '1', '2017-02-17 12:47:08');
