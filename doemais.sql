/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 5.7.31 : Database - doemais
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`doemais` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `doemais`;

/*Table structure for table `doacoes` */

DROP TABLE IF EXISTS `doacoes`;

CREATE TABLE `doacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor` float NOT NULL,
  `status` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Análise 2=Confirmado',
  `idUsuarioDoador` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `doacoes` */

insert  into `doacoes`(`id`,`entidade`,`valor`,`status`,`idUsuarioDoador`,`data`) values 
(1,'Faculdade UFKI',2,'2',1,'2022-07-27 16:58:42'),
(2,'Faculdade UFKI',3,'2',1,'2022-07-27 17:16:31'),
(3,'Faculdade UFKI',2.31,'2',1,'2022-07-29 11:39:14'),
(4,'Casa das Meninas',9.1,'2',1,'2022-09-19 19:17:43'),
(5,'Casa das Meninas',20,'2',1,'2022-09-19 19:53:07');

/*Table structure for table `entidades` */

DROP TABLE IF EXISTS `entidades`;

CREATE TABLE `entidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `cnpj` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ISENTO',
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Ativo',
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `entidades` */

insert  into `entidades`(`id`,`nome`,`email`,`cidade`,`descricao`,`cnpj`,`status`,`user_id`) values 
(1,'Hospital São Paulo','hsp@email.com','Muriaé','O Hospital São Paulo, localizado em Muriaé atende pelo SUS e particular','ISENTO','1',NULL),
(2,'Casa das Meninas','casa@email.com','Muriaé','A Casa das meninas funciona como um lar que recebe meninas em situações desfavoráveis','22222222222222','Ativo',NULL),
(3,'Igreja','igreja@email.com','Muriae','312d','22222222222222','2',NULL),
(4,'Faculdade UFKI','faculdade@email.com','Itaperuna','A UFKI busca alunos com baixa renda ou em situações desfavoráveis, buscando uma melhora de vida!','83292112312321','Ativo',NULL),
(9,'Casa dos Meninos','final@email.com','São Paulo','A Casa dos meninos funciona como um lar que recebe meninos em situações desfavoráveis','ISENTO','Ativo',NULL);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` text COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'usuario',
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ativo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nome`,`email`,`senha`,`cidade`,`funcao`,`status`) values 
(1,'Gabriel Assis','gabriel@email.com','202cb962ac59075b964b07152d234b70','Muriaé','Administrador','1'),
(2,'Jhonata','jhonata@email.com','202cb962ac59075b964b07152d234b70','Itaperuna','Usuario','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
