# MySQL-Front 5.1  (Build 1.28)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: oufuedu
# ------------------------------------------------------
# Server version 5.6.20

#
# Source for table o_apply
#

DROP TABLE IF EXISTS `o_apply`;
CREATE TABLE `o_apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Dumping data for table o_apply
#
LOCK TABLES `o_apply` WRITE;
/*!40000 ALTER TABLE `o_apply` DISABLE KEYS */;

INSERT INTO `o_apply` VALUES (1,'test1111','丫坏孩子',0,'14266764101127.jpg',1426676411,2,'<p>2222222222222222222222222222222222222222222222</p>');
/*!40000 ALTER TABLE `o_apply` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_applytip
#

DROP TABLE IF EXISTS `o_applytip`;
CREATE TABLE `o_applytip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `desc` text,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Dumping data for table o_applytip
#
LOCK TABLES `o_applytip` WRITE;
/*!40000 ALTER TABLE `o_applytip` DISABLE KEYS */;

INSERT INTO `o_applytip` VALUES (1,'英国留学签证最新动态：要把外国学生踢出去?23','丫坏孩子',3,0,1,'欧孚留学1',0,'111111www','<p>2222233333333</p>');
INSERT INTO `o_applytip` VALUES (2,'英国留学签证最新动态','丫坏孩子',21,2,2,'欧孚留学',0,'1','2');
INSERT INTO `o_applytip` VALUES (3,'香港留学签证最新动态','ZMO联盟',123,0,2,'1',0,'1','2');
INSERT INTO `o_applytip` VALUES (4,'英国留学签证最新动态：要把外国学生踢出去?','宋朝瑞',123,2,3,'欧孚留学',0,'3','4');
INSERT INTO `o_applytip` VALUES (5,'英国留学签证最新动态：要把外国学生踢出去?','丫坏孩子',123,2,4,'欧孚留学111',0,'4','4');
INSERT INTO `o_applytip` VALUES (6,'英国留学签证最新动态：要把外国学生踢出去?','12',12,1,12,'21',0,'12','12');
INSERT INTO `o_applytip` VALUES (9,'英国留学签证最新动态：要把外国学生踢出去?','丫坏孩子',1425737099,0,1,'欧孚留学',0,'2222222','<p ><strong><span >333333333333333333333</span></strong></p>');
INSERT INTO `o_applytip` VALUES (10,'233333333333333333333','33',1425739040,0,33,'333333',0,'333','<p><strong>22222222222222222222222222222222</strong></p>');
/*!40000 ALTER TABLE `o_applytip` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_aus
#

DROP TABLE IF EXISTS `o_aus`;
CREATE TABLE `o_aus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Dumping data for table o_aus
#
LOCK TABLES `o_aus` WRITE;
/*!40000 ALTER TABLE `o_aus` DISABLE KEYS */;

INSERT INTO `o_aus` VALUES (2,'aaaaaaaaaaaaa','aaaaaaaaaaaaaaaa',1426350858,'<p>aaaaaaaaaaaaaaaaaaaaaaaaaa</p>');
/*!40000 ALTER TABLE `o_aus` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_carousel
#

DROP TABLE IF EXISTS `o_carousel`;
CREATE TABLE `o_carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Dumping data for table o_carousel
#
LOCK TABLES `o_carousel` WRITE;
/*!40000 ALTER TABLE `o_carousel` DISABLE KEYS */;

/*!40000 ALTER TABLE `o_carousel` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_country
#

DROP TABLE IF EXISTS `o_country`;
CREATE TABLE `o_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usa` text,
  `uk` text,
  `hk` text,
  `aus` text,
  `singapore` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Dumping data for table o_country
#
LOCK TABLES `o_country` WRITE;
/*!40000 ALTER TABLE `o_country` DISABLE KEYS */;

/*!40000 ALTER TABLE `o_country` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_eassy
#

DROP TABLE IF EXISTS `o_eassy`;
CREATE TABLE `o_eassy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Dumping data for table o_eassy
#
LOCK TABLES `o_eassy` WRITE;
/*!40000 ALTER TABLE `o_eassy` DISABLE KEYS */;

INSERT INTO `o_eassy` VALUES (1,'test222','333',0,'14260707276504.png',1426070727,22,'<p>222122222</p>');
INSERT INTO `o_eassy` VALUES (2,'wewewe','wewewe',0,'14260707527201.png',1426070752,23,'<p>dddddddddddddd</p>');
INSERT INTO `o_eassy` VALUES (3,'2323323','232',0,'14257847275707.jpg',1425784728,33,'<p>232323<br/></p>');
INSERT INTO `o_eassy` VALUES (4,'12121212','12',0,'14257860301462.jpg',1425786031,21,'<p>21212<br/></p>');
INSERT INTO `o_eassy` VALUES (5,'454545','45',0,'14257860628872.png',1425786063,54,'<p>5454</p>');
/*!40000 ALTER TABLE `o_eassy` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_eassytip
#

DROP TABLE IF EXISTS `o_eassytip`;
CREATE TABLE `o_eassytip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `desc` text,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Dumping data for table o_eassytip
#
LOCK TABLES `o_eassytip` WRITE;
/*!40000 ALTER TABLE `o_eassytip` DISABLE KEYS */;

INSERT INTO `o_eassytip` VALUES (1,'文书技巧111224','丫坏孩子1212',123111,0,'欧孚留学',1,0,'111','<p>11</p>');
INSERT INTO `o_eassytip` VALUES (3,'英国留学签证最新动态：要把外国学生踢出去?','丫坏孩子',123,0,'欧孚留学',2,0,'111111111111111','<p>11111111111111111111888</p>');
/*!40000 ALTER TABLE `o_eassytip` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_evaluation
#

DROP TABLE IF EXISTS `o_evaluation`;
CREATE TABLE `o_evaluation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fcountry` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `scountry` varchar(255) DEFAULT NULL,
  `ltime` int(11) DEFAULT NULL,
  `degree` int(11) DEFAULT NULL,
  `nschool` varchar(255) DEFAULT NULL,
  `nmajor` varchar(255) DEFAULT NULL,
  `stype` int(11) DEFAULT NULL,
  `gpa` float(2,1) DEFAULT '0.0',
  `egpa` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ssex` int(11) DEFAULT NULL,
  `ndgree` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Dumping data for table o_evaluation
#
LOCK TABLES `o_evaluation` WRITE;
/*!40000 ALTER TABLE `o_evaluation` DISABLE KEYS */;

/*!40000 ALTER TABLE `o_evaluation` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_feedback
#

DROP TABLE IF EXISTS `o_feedback`;
CREATE TABLE `o_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Dumping data for table o_feedback
#
LOCK TABLES `o_feedback` WRITE;
/*!40000 ALTER TABLE `o_feedback` DISABLE KEYS */;

INSERT INTO `o_feedback` VALUES (2,'test121212','yzm0621@163.com','13070168291',1427111035,'<p>111111111111122222222222222222222222</p>');
/*!40000 ALTER TABLE `o_feedback` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_hk
#

DROP TABLE IF EXISTS `o_hk`;
CREATE TABLE `o_hk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Dumping data for table o_hk
#
LOCK TABLES `o_hk` WRITE;
/*!40000 ALTER TABLE `o_hk` DISABLE KEYS */;

INSERT INTO `o_hk` VALUES (2,'xxxxxxxx11','xxxxxxxxxxxxxxxx',1426350869,'<p>xxxxxxxxxxxxxxxxxxxxxx</p>');
/*!40000 ALTER TABLE `o_hk` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_singapore
#

DROP TABLE IF EXISTS `o_singapore`;
CREATE TABLE `o_singapore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Dumping data for table o_singapore
#
LOCK TABLES `o_singapore` WRITE;
/*!40000 ALTER TABLE `o_singapore` DISABLE KEYS */;

INSERT INTO `o_singapore` VALUES (1,'aaaaa111122','a111111111',0,'<p>aaddddddddddd11111111</p>');
/*!40000 ALTER TABLE `o_singapore` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_uk
#

DROP TABLE IF EXISTS `o_uk`;
CREATE TABLE `o_uk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Dumping data for table o_uk
#
LOCK TABLES `o_uk` WRITE;
/*!40000 ALTER TABLE `o_uk` DISABLE KEYS */;

INSERT INTO `o_uk` VALUES (2,'qqqqqq11122','',0,'&lt;p&gt;qqqqqqqqqqqqqqqqqqqqqqq1112&lt;/p&gt;');
/*!40000 ALTER TABLE `o_uk` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_usa
#

DROP TABLE IF EXISTS `o_usa`;
CREATE TABLE `o_usa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

#
# Dumping data for table o_usa
#
LOCK TABLES `o_usa` WRITE;
/*!40000 ALTER TABLE `o_usa` DISABLE KEYS */;

INSERT INTO `o_usa` VALUES (14,'8888888888888','8888888888888888888',1426351017,'<p><span ><strong>vvvvvvvvvvvvvvvvvvvvvvvv1111wwwwwwwwwwwwwwwww</strong></span></p>');
/*!40000 ALTER TABLE `o_usa` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table o_user
#

DROP TABLE IF EXISTS `o_user`;
CREATE TABLE `o_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Dumping data for table o_user
#
LOCK TABLES `o_user` WRITE;
/*!40000 ALTER TABLE `o_user` DISABLE KEYS */;

INSERT INTO `o_user` VALUES (1,'yzm','yzmyzm',NULL,NULL,NULL,NULL);
INSERT INTO `o_user` VALUES (2,'hallo','hellooo',NULL,NULL,NULL,NULL);
INSERT INTO `o_user` VALUES (3,'admin','21232f297a57a5a743894a0e4a801fc3',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `o_user` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
