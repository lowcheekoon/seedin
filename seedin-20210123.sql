/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - seedin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`seedin` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `seedin`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `admin_status` tinyint(3) NOT NULL DEFAULT '0',
  `admin_username` varchar(50) NOT NULL DEFAULT '',
  `admin_password` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`admin_id`,`admin_status`,`admin_username`,`admin_password`) values 
(1,1,'admin','admin');

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `cart_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cart_member_id` bigint(20) NOT NULL DEFAULT '0',
  `cart_item_id` bigint(20) NOT NULL DEFAULT '0',
  `cart_status` tinyint(3) NOT NULL DEFAULT '0',
  `cart_item_name` varchar(255) NOT NULL DEFAULT '',
  `cart_item_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

insert  into `cart`(`cart_id`,`cart_member_id`,`cart_item_id`,`cart_status`,`cart_item_name`,`cart_item_price`) values 
(1,1,1,2,'Product ABC',16.00),
(2,1,1,2,'Product ABC',16.00),
(3,1,4,2,'Product BBB',5.00),
(4,1,1,2,'Product ABC',16.00),
(5,1,4,2,'Product BBB',5.00),
(6,1,1,2,'Product ABC',16.00),
(7,1,1,2,'Product ABC',16.00);

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `item_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `item_status` tinyint(3) NOT NULL DEFAULT '0',
  `item_name` varchar(255) NOT NULL DEFAULT '',
  `item_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `item` */

insert  into `item`(`item_id`,`item_status`,`item_name`,`item_price`) values 
(1,1,'Product ABC',16.00),
(2,9,'Product XYZ',50.00),
(3,9,'Product QWE',100.00),
(4,1,'Product BBB',5.00);

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `member_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_status` tinyint(3) NOT NULL DEFAULT '0',
  `member_username` varchar(50) NOT NULL DEFAULT '',
  `member_password` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `member` */

insert  into `member`(`member_id`,`member_status`,`member_username`,`member_password`) values 
(1,1,'tester@gmail.com','tester');

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `order_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `order_member_id` bigint(20) NOT NULL DEFAULT '0',
  `order_status` tinyint(3) NOT NULL DEFAULT '0',
  `order_vourcher_code` varchar(255) NOT NULL DEFAULT '',
  `order_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `order_discount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `order_payment_method` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `order` */

insert  into `order`(`order_id`,`order_member_id`,`order_status`,`order_vourcher_code`,`order_amount`,`order_discount`,`order_payment_method`) values 
(1,1,2,'',37.00,0.00,'Online Banking'),
(2,1,2,'',21.00,0.00,'Credit Card'),
(3,1,1,'',32.00,0.00,'');

/*Table structure for table `order_detail` */

DROP TABLE IF EXISTS `order_detail`;

CREATE TABLE `order_detail` (
  `order_detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `order_detail_order_id` bigint(20) NOT NULL DEFAULT '0',
  `order_detail_status` tinyint(3) NOT NULL DEFAULT '0',
  `order_detail_item_id` bigint(20) NOT NULL DEFAULT '0',
  `order_detail_item_name` varchar(255) NOT NULL DEFAULT '',
  `order_detail_quantity` int(10) NOT NULL DEFAULT '0',
  `order_detail_item_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `order_detail_discount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `order_detail_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `order_detail` */

insert  into `order_detail`(`order_detail_id`,`order_detail_order_id`,`order_detail_status`,`order_detail_item_id`,`order_detail_item_name`,`order_detail_quantity`,`order_detail_item_price`,`order_detail_discount`,`order_detail_amount`) values 
(1,1,1,1,'Product ABC',2,16.00,0.00,32.00),
(2,1,1,4,'Product BBB',1,5.00,0.00,5.00),
(3,2,1,1,'Product ABC',1,16.00,0.00,16.00),
(4,2,1,4,'Product BBB',1,5.00,0.00,5.00),
(5,3,1,1,'Product ABC',2,16.00,0.00,32.00);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
