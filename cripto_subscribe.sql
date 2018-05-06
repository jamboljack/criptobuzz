/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.30-MariaDB : Database - db_criptobuzz
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_criptobuzz` /*!40100 DEFAULT CHARACTER SET utf8 */;

/*Table structure for table `cripto_subscribe` */

DROP TABLE IF EXISTS `cripto_subscribe`;

CREATE TABLE `cripto_subscribe` (
  `subscribe_id` int(10) NOT NULL AUTO_INCREMENT,
  `subscribe_email` varchar(50) NOT NULL,
  `subscribe_date` date NOT NULL,
  `subscribe_update` datetime NOT NULL,
  PRIMARY KEY (`subscribe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `cripto_subscribe` */

insert  into `cripto_subscribe`(`subscribe_id`,`subscribe_email`,`subscribe_date`,`subscribe_update`) values 
(1,'jama.muttaqin@gmail.com','2018-05-05','2018-05-05 23:13:06'),
(2,'jama.muttaqin@live.com','2018-05-05','2018-05-05 23:21:18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
