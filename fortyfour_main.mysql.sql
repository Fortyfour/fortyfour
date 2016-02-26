-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: fortyfour_main
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `datasets`
--

DROP TABLE IF EXISTS `datasets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datasets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` int(10) unsigned NOT NULL,
  `type` tinytext NOT NULL,
  `label` tinytext,
  `default` text,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `unique` tinyint(1) NOT NULL,
  `options_source` tinyint(4) NOT NULL DEFAULT '0',
  `options_custom` text,
  `options_table` text,
  `use_editor` tinyint(1) DEFAULT NULL,
  `description` text,
  `sort` int(11) NOT NULL DEFAULT '0',
  `embed` tinyint(1) NOT NULL DEFAULT '0',
  `embed_name` tinytext,
  `list` tinyint(1) NOT NULL DEFAULT '0',
  `email` tinyint(1) DEFAULT '0',
  `rows` tinyint(2) DEFAULT '3',
  `randomize` tinyint(1) DEFAULT '0',
  `number` tinyint(1) DEFAULT '0',
  `multiple` tinyint(1) DEFAULT '0',
  `extensions` text,
  `thumbs` text,
  `folder` tinytext,
  `prefix` tinytext,
  `suffix` tinytext,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `mode` tinyint(1) NOT NULL DEFAULT '1',
  `interval` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=273 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datasets`
--

LOCK TABLES `datasets` WRITE;
/*!40000 ALTER TABLE `datasets` DISABLE KEYS */;
INSERT INTO `datasets` VALUES (7,3,'checkbox','Публиковать','0',0,0,0,'','',0,'Публиковать элемент',1,1,'publish',1,0,0,0,0,0,'','','','','',0,0,0,0),(8,3,'separator','Разделитель','',0,0,0,'','',0,'',3,1,'main',0,0,0,0,0,0,'','','','','',0,0,0,0),(9,3,'text','Название','',1,0,0,'','',0,'Название элемента',2,1,'name',1,0,0,0,0,0,'','','','','',0,0,0,0),(33,3,'textarea','Текст','',0,0,0,'','',1,'',4,0,NULL,0,0,19,0,0,0,'','','','','',0,0,0,0),(128,19,'checkbox','Публиковать','0',0,0,0,'','',0,'Публиковать элемент',1,1,'publish',1,0,0,0,0,0,'','','','','',0,0,0,0),(163,19,'tags','Теги','',0,0,0,'','',0,'',4,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(164,19,'separator','Разделитель','',0,0,0,'','',0,'',5,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(129,19,'separator','Разделитель','',0,0,0,'','',0,'',3,1,'main',0,0,0,0,0,0,'','','','','',0,0,0,0),(130,19,'text','Название','',1,0,0,'','',0,'Название элемента',2,1,'name',1,0,0,0,0,0,'','','','','',0,0,0,0),(131,19,'separator','Разделитель','',0,0,0,'','',0,'',7,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(132,19,'calendar','Дата и время','',0,0,0,'','',0,'',8,0,NULL,1,0,0,0,0,0,'','','','','',0,0,0,0),(133,19,'separator','Разделитель','',0,0,0,'','',0,'',9,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(134,19,'textarea','Текст','',0,0,0,'','',1,'',11,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(136,19,'textarea','Анонс','',0,0,0,'','',1,'',10,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(152,19,'image','Картинка','',0,0,0,'','',0,'',6,0,NULL,1,0,0,0,0,0,'','180,360,pic,2;180,180,pic_sq,4','','','',0,0,0,0),(165,20,'checkbox','Публиковать','0',0,0,0,'','',0,'Публиковать элемент',1,1,'publish',1,0,0,0,0,0,'','','','','',0,0,0,0),(166,20,'separator','Разделитель','',0,0,0,'','',0,'',19,1,'main',0,0,0,0,0,0,'','','','','',0,0,0,0),(167,20,'text','Название','',1,0,0,'','',0,'Название элемента',5,1,'name',1,0,0,0,0,0,'','','','','',0,0,0,0),(168,20,'image','Картинка (209x220)','',0,0,0,'','',0,'',20,0,NULL,1,0,0,0,0,0,'','209,1000,pic,2','','','',0,0,0,0),(169,20,'select','Тип','0',0,0,0,'1=Сайт;2=Логотип;3=Приложение','section_3',0,'',3,0,NULL,1,0,0,0,0,0,'','','','','',0,0,0,0),(170,20,'separator','Разделитель','',0,0,0,'','',0,'',15,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(173,20,'text','Шаблон','default',1,0,0,'','',0,'',18,0,NULL,1,0,0,0,0,0,'','','','','',0,0,0,0),(171,20,'text','Подпись','',1,0,0,'','',0,'',6,0,NULL,1,0,0,0,0,0,'','','','','',0,0,0,0),(172,20,'separator','Разделитель','',0,0,0,'','',0,'',4,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(174,20,'separator','Разделитель','',0,0,0,'','',0,'',17,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(175,20,'textarea','Краткое описание','',0,0,0,'','',1,'',16,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(176,20,'text','Задача','',1,0,0,'','',0,'',8,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(177,20,'separator','Разделитель','',0,0,0,'','',0,'',13,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(178,20,'calendar','Дата ыпуска','',0,0,0,'','',0,'',12,0,NULL,1,0,0,0,0,0,'','','','','',0,0,0,0),(179,20,'image','Фавикон','',0,0,0,'','',0,'',14,0,NULL,1,0,0,0,0,0,'','','','','',0,0,0,0),(180,20,'separator','Разделитель','',0,0,0,'','',0,'',23,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(182,20,'separator','Разделитель','',0,0,0,'','',0,'',9,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(183,20,'textarea','Текст','',0,0,0,'','',1,'',24,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(185,20,'url','Сайт','',0,0,0,'','',0,'',10,0,NULL,0,0,0,0,0,0,'','','','','',0,0,1,0),(190,20,'separator','Разделитель','',0,0,0,'','',0,'',7,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(187,20,'gallery','Фотогалерея','',0,0,0,'','',0,'',22,0,NULL,1,0,0,0,0,0,'','1000,10000,pic,2','','','',0,0,0,0),(188,20,'separator','Разделитель','',0,0,0,'','',0,'',21,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(189,20,'separator','Разделитель','',0,0,0,'','',0,'',11,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(191,20,'separator','Разделитель','',0,0,0,'','',0,'',2,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(192,21,'checkbox','Публиковать','0',0,0,0,'','',0,'Публиковать элемент',1,1,'publish',1,0,0,0,0,0,'','','','','',0,0,0,0),(193,21,'separator','Разделитель','',0,0,0,'','',0,'',2,1,'main',0,0,0,0,0,0,'','','','','',0,0,0,0),(194,21,'text','Название','',1,0,0,'','',0,'Название элемента',4,1,'name',1,0,0,0,0,0,'','','','','',0,0,0,0),(195,22,'checkbox','Публиковать','0',0,0,0,'','',0,'Публиковать элемент',1,1,'publish',1,0,0,0,0,0,'','','','','',0,0,0,0),(196,22,'separator','Разделитель','',0,0,0,'','',0,'',2,1,'main',0,0,0,0,0,0,'','','','','',0,0,0,0),(197,22,'text','Название','',1,0,0,'','',0,'Название элемента',3,1,'name',1,0,0,0,0,0,'','','','','',0,0,0,0),(198,22,'multiselect','Типы','0',0,0,0,'1=Интернет-магазин;2=Корпоративный сайт;3=Сайт-визитка;4=Свой проект','section_3',0,'',7,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(200,22,'separator','Разделитель','',0,0,0,'','',0,'',4,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(201,22,'separator','Разделитель','',0,0,0,'','',0,'',9,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(202,22,'separator','Разделитель','',0,0,0,'','',0,'',6,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(203,22,'param','Цена','',1,0,0,'','',0,'',10,0,NULL,1,0,0,0,1,0,'','','','','руб.',0,0,0,0),(204,22,'param','Старя цена','',0,0,0,'','',0,'',11,0,NULL,1,0,0,0,1,0,'','','','','руб.',0,0,0,0),(205,22,'separator','Разделитель','',0,0,0,'','',0,'',12,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(206,22,'multiselect','Обязателен для типов','0',0,0,0,'1=Интернет-магазин;2=Корпоративный сайт;3=Сайт-визитка;4=Свой проект','section_3',0,'',8,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(208,22,'select','Группа','0',0,0,1,'','section_21',0,'',5,0,NULL,1,0,0,0,0,0,'','','','','',0,0,0,0),(209,21,'checkbox','Запрет множественного выбора','0',0,0,0,'','',0,'',3,0,NULL,1,0,0,0,0,0,'','','','','',0,0,0,0),(246,33,'separator','Разделитель','',0,0,0,'','',0,'',5,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(245,33,'calendar','Дата и время','',0,0,0,'','',0,'',3,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(244,33,'textarea','Текстовый редактор','',0,0,0,'','',0,'',6,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(242,33,'text','Название','',1,0,0,'','',0,'Название элемента',4,1,'name',1,0,0,0,0,0,'','','','','',0,0,0,0),(241,33,'separator','Разделитель','',0,0,0,'','',0,'',2,1,'main',0,0,0,0,0,0,'','','','','',0,0,0,0),(240,33,'checkbox','Публиковать','0',0,0,0,'','',0,'Публиковать элемент',1,1,'publish',1,0,0,0,0,0,'','','','','',0,0,0,0),(272,37,'tags','Теги','',0,0,0,'','',0,'',7,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(271,37,'catalog','Каталог','[]',0,0,0,'','',0,'',6,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(270,37,'image','Картинка','',0,0,0,'','',0,'',5,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(269,37,'map','Карта','-34.397;150.644;8;roadmap',0,0,0,'','',0,'',4,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),(266,37,'checkbox','Публиковать','0',0,0,0,'','',0,'Публиковать элемент',1,1,'publish',1,0,0,0,0,0,'','','','','',0,0,0,0),(267,37,'separator','Разделитель','',0,0,0,'','',0,'',2,1,'main',0,0,0,0,0,0,'','','','','',0,0,0,0),(268,37,'text','Название','',1,0,0,'','',0,'Название элемента',3,1,'name',1,0,0,0,0,0,'','','','','',0,0,0,0);
/*!40000 ALTER TABLE `datasets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `extension` tinytext,
  `path` tinytext,
  `type` tinyint(1) DEFAULT '0',
  `relative_id` int(11) DEFAULT NULL,
  `form_item` tinytext,
  `date` datetime DEFAULT NULL,
  `size` int(50) DEFAULT '0',
  `metaname` tinytext,
  `metadesc` text,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `relative_table` tinytext,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=456 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (184,'koala','jpg','/data/images/section_9/3/albums_covers/',0,3,'col_46','2012-03-19 20:54:53',780831,NULL,NULL,1024,768,'section_9',184),(185,'hydrangeas','jpg','/data/images/section_9/3/photos/',1,3,'col_47','2012-03-19 20:54:57',595284,NULL,NULL,1024,768,'section_9',185),(186,'koala','jpg','/data/images/section_9/3/photos/',1,3,'col_47','2012-03-19 20:54:58',780831,NULL,NULL,1024,768,'section_9',186),(188,'jellyfish_6928','jpg','/data/images/section_9/3/photos/',1,3,'col_47','2012-03-19 20:55:00',775702,NULL,NULL,1024,768,'section_9',188),(189,'penguins_9242','jpg','/data/images/section_9/3/photos/',1,3,'col_47','2012-03-19 20:55:01',777835,NULL,NULL,1024,768,'section_9',189),(190,'desert_2645','jpg','/data/images/section_9/3/photos/',1,3,'col_47','2012-03-19 20:55:02',845941,NULL,NULL,1024,768,'section_9',190),(191,'tulips','jpg','/data/images/section_9/3/photos/',1,3,'col_47','2012-03-19 20:55:03',620888,NULL,NULL,1024,768,'section_9',191),(228,'koala_43','jpg','/data/images/section_10/1/projects/',1,1,'col_59','2012-03-20 00:06:30',780831,NULL,NULL,1024,768,'section_10',228),(227,'lighthouse','jpg','/data/images/section_10/1/projects/',1,1,'col_59','2012-03-20 00:06:29',561276,NULL,NULL,1024,768,'section_10',227),(193,'penguins','jpg','/data/images/section_9/4/albums_covers/',0,4,'col_46','2012-03-19 20:55:15',777835,NULL,NULL,1024,768,'section_9',193),(194,'koala_1145','jpg','/data/images/section_9/4/photos/',1,4,'col_47','2012-03-19 20:55:18',780831,NULL,NULL,1024,768,'section_9',194),(195,'lighthouse_705','jpg','/data/images/section_9/4/photos/',1,4,'col_47','2012-03-19 20:55:20',561276,NULL,NULL,1024,768,'section_9',195),(196,'jellyfish','jpg','/data/images/section_9/4/photos/',1,4,'col_47','2012-03-19 20:55:21',775702,NULL,NULL,1024,768,'section_9',196),(197,'penguins','jpg','/data/images/section_9/4/photos/',1,4,'col_47','2012-03-19 20:55:22',777835,NULL,NULL,1024,768,'section_9',197),(198,'desert','jpg','/data/images/section_9/4/photos/',1,4,'col_47','2012-03-19 20:55:23',845941,NULL,NULL,1024,768,'section_9',198),(199,'tulips','jpg','/data/images/section_9/4/photos/',1,4,'col_47','2012-03-19 20:55:24',620888,NULL,NULL,1024,768,'section_9',199),(200,'chrysanthemum','jpg','/data/images/section_9/4/photos/',1,4,'col_47','2012-03-19 20:55:26',879394,NULL,NULL,1024,768,'section_9',200),(201,'lighthouse_4340','jpg','/data/images/section_9/5/albums_covers/',0,5,'col_46','2012-03-19 20:55:42',561276,NULL,NULL,1024,768,'section_9',201),(202,'hydrangeas_4416','jpg','/data/images/section_9/5/photos/',1,5,'col_47','2012-03-19 20:55:46',595284,NULL,NULL,1024,768,'section_9',202),(203,'koala_43','jpg','/data/images/section_9/5/photos/',1,5,'col_47','2012-03-19 20:55:47',780831,NULL,NULL,1024,768,'section_9',203),(204,'tulips','jpg','/data/images/section_9/6/albums_covers/',0,6,'col_46','2012-03-19 20:55:53',620888,NULL,NULL,1024,768,'section_9',204),(205,'jellyfish_305','jpg','/data/images/section_9/6/photos/',1,6,'col_47','2012-03-19 20:55:56',775702,NULL,NULL,1024,768,'section_9',205),(225,'penguins_3240','jpg','/data/images/section_10/1/projects/',1,1,'col_59','2012-03-20 00:06:28',777835,NULL,NULL,1024,768,'section_10',225),(226,'tulips','jpg','/data/images/section_10/1/projects/',1,1,'col_59','2012-03-20 00:06:28',620888,NULL,NULL,1024,768,'section_10',226),(215,'penguins','jpg','/data/images/section_10/1/projects/',0,1,'col_58','2012-03-19 23:56:27',777835,NULL,NULL,1024,768,'section_10',215),(216,'tulips_4880','jpg','/data/images/section_10/2/projects/',0,2,'col_58','2012-03-19 23:56:38',620888,NULL,NULL,1024,768,'section_10',216),(231,'lighthouse','jpg','/data/images/section_10/2/projects/',1,2,'col_59','2012-03-20 00:06:48',561276,NULL,NULL,1024,768,'section_10',231),(230,'tulips','jpg','/data/images/section_10/2/projects/',1,2,'col_59','2012-03-20 00:06:47',620888,NULL,NULL,1024,768,'section_10',230),(229,'penguins','jpg','/data/images/section_10/2/projects/',1,2,'col_59','2012-03-20 00:06:46',777835,NULL,NULL,1024,768,'section_10',229),(232,'koala_43','jpg','/data/images/section_10/2/projects/',1,2,'col_59','2012-03-20 00:06:49',780831,NULL,NULL,1024,768,'section_10',232),(233,'penguins','jpg','/data/images/section_10/3/projects/',0,3,'col_58','2012-03-20 00:10:16',777835,NULL,NULL,1024,768,'section_10',233),(234,'55','jpg','/data/images/section_12/1/video_covers/',0,1,'col_77','2012-03-26 16:17:35',4936,NULL,NULL,50,50,'section_12',234),(253,'man','png','/data/images/section_13/1/projects_covers/',0,1,'col_97','2012-03-31 13:54:52',19933,NULL,NULL,150,150,'section_13',253),(252,'ill1_4676','jpg','/data/images/section_13/1/projects_covers/',0,1,'col_98','2012-03-31 13:54:07',176323,NULL,NULL,830,285,'section_13',252),(254,'man','png','/data/images/section_13/2/projects_covers/',0,2,'col_97','2012-03-31 14:03:39',19933,NULL,NULL,150,150,'section_13',254),(255,'ill1','jpg','/data/images/section_13/2/projects_covers/',0,2,'col_98','2012-03-31 14:03:42',176323,NULL,NULL,830,285,'section_13',255),(256,'client_logo','png','/data/images/section_13/3/projects_covers/',0,3,'col_97','2012-03-31 20:13:53',9282,NULL,NULL,248,248,'section_13',256),(257,'ill1','jpg','/data/images/section_13/3/projects_covers/',0,3,'col_98','2012-03-31 20:13:59',176323,NULL,NULL,830,285,'section_13',257),(258,'man','png','/data/images/section_13/4/projects_covers/',0,4,'col_97','2012-03-31 20:14:38',19933,NULL,NULL,150,150,'section_13',258),(259,'ill1','jpg','/data/images/section_13/4/projects_covers/',0,4,'col_98','2012-03-31 20:14:42',176323,NULL,NULL,830,285,'section_13',259),(260,'man','png','/data/images/section_13/5/projects_covers/',0,5,'col_97','2012-03-31 20:44:19',19933,NULL,NULL,150,150,'section_13',260),(261,'ill1','jpg','/data/images/section_13/5/projects_covers/',0,5,'col_98','2012-03-31 20:44:21',176323,NULL,NULL,830,285,'section_13',261),(262,'ill1','jpg','/data/images/section_13/6/projects_covers/',0,6,'col_97','2012-03-31 22:58:21',176323,NULL,NULL,830,285,'section_13',262),(263,'man','png','/data/images/section_13/6/projects_covers/',0,6,'col_98','2012-03-31 22:58:25',19933,NULL,NULL,150,150,'section_13',263),(275,'2_3005','jpg','/data/images/section_13/8/projects_covers/',0,8,'col_98','2012-04-01 22:41:33',65387,NULL,NULL,543,403,'section_13',275),(274,'2','jpg','/data/images/section_13/8/projects_covers/',0,8,'col_97','2012-04-01 22:41:30',65387,NULL,NULL,543,403,'section_13',274),(266,'man_810x250','png','/data/images/section_13/9/projects_covers/',0,9,'col_97','2012-04-01 22:18:28',22737,NULL,NULL,150,150,'section_13',266),(267,'ill1','jpg','/data/images/section_13/9/projects_covers/',0,9,'col_98','2012-04-01 22:18:32',176323,NULL,NULL,830,285,'section_13',267),(268,'man','png','/data/images/section_13/10/projects_covers/',0,10,'col_97','2012-04-01 22:18:51',19933,NULL,NULL,150,150,'section_13',268),(269,'ill1','jpg','/data/images/section_13/10/projects_covers/',0,10,'col_98','2012-04-01 22:18:54',176323,NULL,NULL,830,285,'section_13',269),(270,'man_810x250','png','/data/images/section_13/11/projects_covers/',0,11,'col_97','2012-04-01 22:19:15',22737,NULL,NULL,150,150,'section_13',270),(271,'ill1_250x250','jpg','/data/images/section_13/11/projects_covers/',0,11,'col_98','2012-04-01 22:19:19',31972,NULL,NULL,250,85,'section_13',271),(272,'man_810x250','png','/data/images/section_13/12/projects_covers/',0,12,'col_97','2012-04-01 22:19:37',22737,NULL,NULL,150,150,'section_13',272),(273,'man','png','/data/images/section_13/12/projects_covers/',0,12,'col_98','2012-04-01 22:19:40',19933,NULL,NULL,150,150,'section_13',273),(276,'trilobis_pm1','jpg','/data/images/section_13/13/projects_covers/',0,13,'col_97','2012-04-01 22:49:34',48507,NULL,NULL,500,353,'section_13',276),(277,'trilobis_pm1_5103','jpg','/data/images/section_13/13/projects_covers/',0,13,'col_98','2012-04-01 22:49:37',48507,NULL,NULL,500,353,'section_13',277),(278,'2','jpg','/data/images/section_13/14/projects_covers/',0,14,'col_97','2012-04-01 22:50:53',65387,NULL,NULL,543,403,'section_13',278),(279,'2_2438','jpg','/data/images/section_13/14/projects_covers/',0,14,'col_98','2012-04-01 22:50:56',65387,NULL,NULL,543,403,'section_13',279),(280,'22','jpg','/data/images/section_13/15/projects_covers/',0,15,'col_97','2012-04-01 22:51:44',73323,NULL,NULL,640,480,'section_13',280),(281,'22_4014','jpg','/data/images/section_13/15/projects_covers/',0,15,'col_98','2012-04-01 22:51:48',73323,NULL,NULL,640,480,'section_13',281),(282,'venus_project','jpg','/data/images/section_13/16/projects_covers/',0,16,'col_97','2012-04-01 22:52:22',103901,NULL,NULL,500,403,'section_13',282),(283,'venus_project_1743','jpg','/data/images/section_13/16/projects_covers/',0,16,'col_98','2012-04-01 22:52:25',103901,NULL,NULL,500,403,'section_13',283),(284,'22','jpg','/data/images/section_13/17/projects_covers/',0,17,'col_97','2012-04-01 22:54:27',73323,NULL,NULL,640,480,'section_13',284),(285,'22_3586','jpg','/data/images/section_13/17/projects_covers/',0,17,'col_98','2012-04-01 22:54:29',73323,NULL,NULL,640,480,'section_13',285),(286,'22','jpg','/data/images/section_13/18/projects_covers/',0,18,'col_97','2012-04-01 23:12:19',73323,NULL,NULL,640,480,'section_13',286),(287,'22_9476','jpg','/data/images/section_13/18/projects_covers/',0,18,'col_98','2012-04-01 23:12:23',73323,NULL,NULL,640,480,'section_13',287),(288,'trilobis_pm1','jpg','/data/images/section_13/19/projects_covers/',0,19,'col_98','2012-04-01 23:16:32',48507,NULL,NULL,500,353,'section_13',288),(289,'trilobis_pm1_9486','jpg','/data/images/section_13/19/projects_covers/',0,19,'col_97','2012-04-01 23:16:35',48507,NULL,NULL,500,353,'section_13',289),(290,'ill1','jpg','/data/images/section_6/17/news_giant_pics/',0,17,'col_78','2012-04-02 01:07:20',176323,NULL,NULL,830,285,'section_6',290),(291,'ill1','jpg','/data/images/section_6/18/news_giant_pics/',0,18,'col_78','2012-04-02 01:08:20',176323,NULL,NULL,830,285,'section_6',291),(292,'project_info','jpg','/data/images/section_6/19/news_giant_pics/',0,19,'col_78','2012-04-02 01:08:48',535834,NULL,NULL,1000,700,'section_6',292),(293,'koala','jpg','/data/images/section_16/1/videos/',0,1,'col_114','2012-04-12 18:07:44',780831,NULL,NULL,1024,768,'section_16',293),(294,'desert','jpg','/data/images/section_16/2/videos/',0,2,'col_114','2012-04-12 18:07:51',845941,NULL,NULL,1024,768,'section_16',294),(295,'lighthouse','jpg','/data/images/section_16/3/videos/',0,3,'col_114','2012-04-12 18:07:58',561276,NULL,NULL,1024,768,'section_16',295),(296,'tulips','jpg','/data/images/section_16/4/videos/',0,4,'col_114','2012-04-12 18:08:03',620888,NULL,NULL,1024,768,'section_16',296),(304,'slide-1','jpg','/data/images/section_18/1/slides/',0,1,'col_125','2013-10-16 18:21:16',83087,NULL,NULL,600,310,'section_18',304),(309,'logo-akg','png','/data/images/section_22/1/',0,1,'col_158','2013-10-17 04:40:44',12460,NULL,NULL,200,200,'section_22',309),(307,'photo-2','jpg','/data/images/section_19/2/',0,2,'col_152','2013-10-16 18:27:26',133103,NULL,NULL,582,437,'section_19',307),(308,'slide-1','jpg','/data/images/section_19/1/',0,1,'col_152','2013-10-16 18:27:35',83087,NULL,NULL,600,310,'section_19',308),(306,'photo-1','jpg','/data/images/section_18/2/slides/',0,2,'col_125','2013-10-16 18:21:43',68278,NULL,NULL,582,327,'section_18',306),(310,'logo-abrasivos-manhattan','png','/data/images/section_22/2/',0,2,'col_158','2013-10-17 04:41:46',11949,NULL,NULL,200,200,'section_22',310),(311,'logo-ace','png','/data/images/section_22/3/',0,3,'col_158','2013-10-17 04:42:10',10982,NULL,NULL,200,200,'section_22',311),(312,'logo-agilent','png','/data/images/section_22/4/',0,4,'col_158','2013-10-17 04:42:29',10683,NULL,NULL,200,200,'section_22',312),(313,'cigar-room','jpg','/data/images/section_22/6/',0,6,'col_158','2013-10-17 04:43:14',95726,NULL,NULL,284,279,'section_22',313),(322,'doma','png','/data/images/section_20/1/',1,1,'col_187','2013-12-01 21:30:29',2119499,'Каталог','',1130,3295,'section_20',3),(321,'dom---kaskad--','png','/data/images/section_20/1/',1,1,'col_187','2013-12-01 21:30:24',1073775,'Проект в каталоге','',1130,1380,'section_20',2),(323,'mosstroi--razvitie','png','/data/images/section_20/1/',1,1,'col_187','2013-12-01 21:30:35',3710582,'Главная страница','',1130,3211,'section_20',1),(324,'mosstroyrazvitie','png','/data/images/section_20/1/',0,1,'col_179','2013-12-01 21:50:21',923,NULL,NULL,16,16,'section_20',324),(333,'fotobuy','png','/data/images/section_20/3/',0,3,'col_179','2013-12-03 23:03:59',890,NULL,NULL,16,16,'section_20',333),(326,'mosstroyrazvitie-logo','png','/data/images/section_20/2/',0,2,'col_168','2013-12-01 22:09:21',35625,NULL,NULL,209,220,'section_20',326),(334,'fotobuy','jpg','/data/images/section_20/3/',0,3,'col_168','2013-12-03 23:04:28',392026,NULL,NULL,1000,1486,'section_20',334),(332,'mosstroi--razvitie_5358','png','/data/images/section_20/1/',0,1,'col_168','2013-12-03 01:51:40',3710582,NULL,NULL,1130,3211,'section_20',332),(335,'fotobuy-inner','jpg','/data/images/section_20/3/',1,3,'col_187','2013-12-03 23:04:37',363452,'Список товаров','',1000,1486,'section_20',2),(336,'fotobuy_5221','jpg','/data/images/section_20/3/',1,3,'col_187','2013-12-03 23:04:39',392026,'Главная страница','',1000,1486,'section_20',1),(352,'maket2_110','jpg','/data/images/section_20/4/',1,4,'col_187','2013-12-09 21:49:12',1106827,'Главная страница','',1100,1782,'section_20',352),(340,'pskmk','png','/data/images/section_20/5/',0,5,'col_179','2013-12-09 20:54:59',1465,NULL,NULL,16,16,'section_20',340),(344,'promsnabkomplekt-mk-2','jpeg','/data/images/section_20/5/',0,5,'col_168','2013-12-09 21:01:47',499882,NULL,NULL,1026,1812,'section_20',344),(345,'kontaktyi','jpeg','/data/images/section_20/5/',1,5,'col_187','2013-12-09 21:01:55',277068,'Контактная информация','',1026,1027,'section_20',2),(346,'promsnabkomplekt-mk-2_3703','jpeg','/data/images/section_20/5/',1,5,'col_187','2013-12-09 21:01:57',499882,'Главная страница','',1026,1812,'section_20',1),(347,'promsnabkomplekt-mk','jpeg','/data/images/section_20/5/',1,5,'col_187','2013-12-09 21:01:59',445947,'Всплывающее окошко обратной связи','',1026,1812,'section_20',3),(380,'chester-main','jpg','/data/images/section_20/6/',0,6,'col_168','2013-12-10 16:12:17',1177549,NULL,NULL,1000,1438,'section_20',380),(349,'chesterfield_6661','jpeg','/data/images/section_20/6/',1,6,'col_187','2013-12-09 21:41:26',751934,'Главная страница','',1255,1898,'section_20',349),(350,'chester-bar','png','/data/images/section_20/6/',0,6,'col_179','2013-12-09 21:45:20',399,NULL,NULL,16,16,'section_20',350),(355,'logo-bts','jpg','/data/images/section_20/4/',0,4,'col_168','2013-12-09 21:58:22',31601,NULL,NULL,209,220,'section_20',355),(360,'jukoffka-logo','jpg','/data/images/section_20/7/',0,7,'col_168','2013-12-09 22:22:43',34095,NULL,NULL,209,220,'section_20',360),(378,'vertu','jpg','/data/images/section_20/7/',1,7,'col_187','2013-12-10 13:44:49',220704,NULL,NULL,1059,856,'section_20',1),(379,'zhukoffka-plaza','jpg','/data/images/section_20/7/',1,7,'col_187','2013-12-10 13:44:51',303215,NULL,NULL,1059,851,'section_20',3),(377,'vertu-signature','jpg','/data/images/section_20/7/',1,7,'col_187','2013-12-10 13:44:48',372434,NULL,NULL,1059,1134,'section_20',2),(361,'8km-f','png','/data/images/section_20/8/',0,8,'col_179','2013-12-09 22:27:21',4659,NULL,NULL,16,16,'section_20',361),(362,'zhukoffkahome','png','/data/images/section_20/7/',0,7,'col_179','2013-12-09 22:28:24',334,NULL,NULL,16,16,'section_20',362),(363,'8km','jpg','/data/images/section_20/8/',0,8,'col_168','2013-12-09 22:30:29',1191051,NULL,NULL,1312,1646,'section_20',363),(364,'8km_6192','jpg','/data/images/section_20/8/',1,8,'col_187','2013-12-09 22:30:34',1191051,NULL,NULL,1312,1646,'section_20',364),(365,'beatsbymonster','png','/data/images/section_20/9/',0,9,'col_179','2013-12-09 22:34:28',1093,NULL,NULL,16,16,'section_20',365),(366,'main','jpg','/data/images/section_20/9/',0,9,'col_168','2013-12-09 22:39:00',1415646,NULL,NULL,1304,2786,'section_20',366),(367,'main_7129','jpg','/data/images/section_20/9/',1,9,'col_187','2013-12-09 22:39:07',1415646,'Главная страница','',1304,2786,'section_20',367),(368,'product','jpg','/data/images/section_20/9/',1,9,'col_187','2013-12-09 22:39:09',652641,'Страница товара','',1304,1744,'section_20',368),(371,'detective','png','/data/images/section_20/11/',1,11,'col_187','2013-12-09 22:59:06',3243475,'Главная страница','',1200,1974,'section_20',371),(370,'bbm-logo','jpg','/data/images/section_20/10/',0,10,'col_168','2013-12-09 22:52:43',24975,NULL,NULL,209,220,'section_20',370),(372,'sekretovnet-logo','jpg','/data/images/section_20/11/',0,11,'col_168','2013-12-09 23:01:40',59442,NULL,NULL,209,220,'section_20',372),(373,'netsekretovnet','png','/data/images/section_20/11/',0,11,'col_179','2013-12-09 23:03:21',728,NULL,NULL,16,16,'section_20',373),(381,'gts-favicon','png','/data/images/section_20/12/',0,12,'col_179','2013-12-12 02:29:18',4043,NULL,NULL,16,16,'section_20',381),(382,'gts-moskow-mainpage','jpg','/data/images/section_20/12/',1,12,'col_187','2013-12-12 02:32:24',723416,'Главная страница','',1024,1983,'section_20',382),(386,'123','png','/data/images/section_20/13/',0,13,'col_179','2013-12-12 13:53:28',2220,NULL,NULL,82,82,'section_20',386),(385,'gts-logo','jpg','/data/images/section_20/12/',0,12,'col_168','2013-12-12 02:57:00',15722,NULL,NULL,209,220,'section_20',385),(390,'sdn','jpg','/data/images/section_20/13/',1,13,'col_187','2013-12-12 13:54:46',547561,'Главная страница','',1063,2277,'section_20',1),(389,'kontaktyi','jpg','/data/images/section_20/13/',1,13,'col_187','2013-12-12 13:54:44',505409,'Контакты','',1063,2657,'section_20',2),(392,'sdn-logo','jpg','/data/images/section_20/13/',0,13,'col_168','2013-12-12 14:02:08',19806,NULL,NULL,209,220,'section_20',392),(393,'nsi-logo','jpg','/data/images/section_20/14/',0,14,'col_168','2013-12-16 20:30:12',30568,NULL,NULL,209,220,'section_20',393),(394,'nsi-favicon','png','/data/images/section_20/14/',0,14,'col_179','2013-12-16 20:31:22',452,NULL,NULL,16,16,'section_20',394),(395,'pt','png','/data/images/section_20/15/',0,15,'col_179','2013-12-23 02:17:05',3802,NULL,NULL,16,16,'section_20',395),(402,'screenshot-2014-02-26-23-45-08','png','/data/images/section_20/15/',1,15,'col_187','2014-02-26 23:46:56',203611,NULL,NULL,1240,1040,'section_20',402),(403,'glavnaya-stranitsa','png','/data/images/section_20/14/',1,14,'col_187','2014-03-03 13:26:59',1254477,'Главная страница','',1231,1839,'section_20',403),(397,'ptapp','jpg','/data/images/section_20/15/',0,15,'col_168','2013-12-23 02:25:17',12096,NULL,NULL,209,220,'section_20',397),(399,'elana-2','jpg','/data/images/section_20/16/',1,16,'col_187','2013-12-23 02:56:24',579357,NULL,NULL,1000,1106,'section_20',399),(400,'eliana','jpg','/data/images/section_20/16/',0,16,'col_168','2013-12-23 03:01:03',65209,NULL,NULL,209,220,'section_20',400),(401,'elianagold','png','/data/images/section_20/16/',0,16,'col_179','2013-12-23 03:01:39',496,NULL,NULL,16,16,'section_20',401),(404,'uslugi','png','/data/images/section_20/14/',1,14,'col_187','2014-03-03 13:27:16',377662,'Услуги','',1231,1310,'section_20',404),(405,'kontaktyi','png','/data/images/section_20/14/',1,14,'col_187','2014-03-03 13:27:18',350416,'Контакты','',1231,908,'section_20',405),(406,'4','png','/data/images/section_20/17/',1,17,'col_187','2014-03-25 19:51:49',715563,'Первый вариант макета','',1000,1290,'section_20',406),(407,'7','png','/data/images/section_20/17/',1,17,'col_187','2014-03-25 19:51:52',566895,'Второй вариант макета','',1000,1364,'section_20',407),(408,'favicons','png','/data/images/section_20/17/',0,17,'col_179','2014-03-25 19:53:21',154,NULL,NULL,16,16,'section_20',408),(409,'medana-badge','jpg','/data/images/section_20/17/',0,17,'col_168','2014-03-25 20:02:28',32684,NULL,NULL,209,220,'section_20',409),(410,'1','jpg','/data/images/section_20/18/',1,18,'col_187','2014-03-27 09:56:50',485844,'Главная страница','',1000,1020,'section_20',410),(413,'1','jpg','/data/images/section_20/19/',1,19,'col_187','2014-03-27 10:04:58',1611189,'Главная страница','',1000,1200,'section_20',413),(412,'2','jpg','/data/images/section_20/18/',0,18,'col_168','2014-03-27 10:01:34',48071,NULL,NULL,209,220,'section_20',412),(414,'logos-2','jpg','/data/images/section_20/19/',0,19,'col_168','2014-03-27 10:07:33',53034,NULL,NULL,209,220,'section_20',414),(415,'luster-2-r11','jpg','/data/images/section_20/20/',1,20,'col_187','2014-03-27 10:15:17',812338,'Главная страница','',1000,1645,'section_20',415),(416,'luster-vnutr','jpg','/data/images/section_20/20/',1,20,'col_187','2014-03-27 10:15:20',887465,'Каталог товаров','',1000,1645,'section_20',416),(417,'luster-2-r11_3637','jpg','/data/images/section_20/20/',0,20,'col_168','2014-03-27 10:15:22',812338,NULL,NULL,1000,1645,'section_20',417),(418,'favicons','png','/data/images/section_20/20/',0,20,'col_179','2014-03-27 10:17:44',722,NULL,NULL,16,16,'section_20',418),(419,'logo','jpg','/data/images/section_20/21/',0,21,'col_168','2014-03-27 10:32:10',16609,NULL,NULL,209,220,'section_20',419),(420,'blog','jpg','/data/images/section_20/21/',1,21,'col_187','2014-03-27 10:32:22',637712,'Главная страница','',1000,1625,'section_20',420),(422,'blog-7-1','jpg','/data/images/section_20/21/',1,21,'col_187','2014-03-27 10:34:51',725723,'Раздел блога','',1000,1954,'section_20',422),(427,'main2-copy','jpg','/data/images/section_20/22/',1,22,'col_187','2014-03-30 12:40:34',1363291,'Интернет-магазин Sec System','',1200,2196,'section_20',427),(428,'main2-copy_9010','jpg','/data/images/section_20/22/',0,22,'col_168','2014-03-30 12:40:42',1363291,NULL,NULL,1200,2196,'section_20',428),(425,'favicons-1','png','/data/images/section_20/22/',0,22,'col_179','2014-03-30 12:38:06',735,NULL,NULL,16,16,'section_20',425),(433,'lightbank','jpg','/data/images/section_20/23/',1,23,'col_187','2014-03-30 12:48:45',1975946,'Главная страница','',1400,1680,'section_20',433),(432,'lightbank_3804','jpg','/data/images/section_20/23/',0,23,'col_168','2014-03-30 12:48:39',1975946,NULL,NULL,1400,1680,'section_20',432),(431,'favicons-2','png','/data/images/section_20/23/',0,23,'col_179','2014-03-30 12:47:20',830,NULL,NULL,16,16,'section_20',431),(434,'favicons-3','png','/data/images/section_20/25/',0,25,'col_179','2014-03-30 12:51:32',572,NULL,NULL,16,16,'section_20',434),(435,'1','jpg','/data/images/section_20/25/',1,25,'col_187','2014-03-30 12:55:54',707064,'Страница каталога','',1000,1444,'section_20',435),(436,'2','jpg','/data/images/section_20/25/',1,25,'col_187','2014-03-30 12:55:55',726293,'Карточка товара','',1000,1444,'section_20',436),(437,'3','jpg','/data/images/section_20/25/',1,25,'col_187','2014-03-30 12:55:56',593825,'Оформление заказа','',1000,1444,'section_20',437),(438,'4','jpg','/data/images/section_20/25/',1,25,'col_187','2014-03-30 12:55:57',813262,'Контактная информация','',1000,1444,'section_20',438),(439,'5','jpg','/data/images/section_20/25/',1,25,'col_187','2014-03-30 12:55:57',571233,'Желто-белый вариант оформления','',1000,1444,'section_20',439),(440,'6','jpg','/data/images/section_20/25/',1,25,'col_187','2014-03-30 12:55:58',662200,'Бирюзовый вариант оформления','',999,1444,'section_20',440),(441,'1_58','jpg','/data/images/section_20/25/',0,25,'col_168','2014-03-30 12:56:01',707064,NULL,NULL,1000,1444,'section_20',441),(442,'1','jpg','/data/images/section_20/26/',0,26,'col_168','2014-03-30 13:04:56',268736,NULL,NULL,1000,1076,'section_20',442),(443,'1_2048','jpg','/data/images/section_20/26/',1,26,'col_187','2014-03-30 13:06:37',403898,'Контрагенты','',1000,895,'section_20',443),(444,'2','jpg','/data/images/section_20/26/',1,26,'col_187','2014-03-30 13:06:38',633132,'Контрагенты на карте','',1000,944,'section_20',444),(445,'3','jpg','/data/images/section_20/26/',1,26,'col_187','2014-03-30 13:06:39',268736,'Редактирование договора','',1000,1076,'section_20',445),(446,'4','jpg','/data/images/section_20/26/',1,26,'col_187','2014-03-30 13:06:40',319967,'Редактирование контрагента','',1000,1144,'section_20',446),(447,'5','jpg','/data/images/section_20/26/',1,26,'col_187','2014-03-30 13:06:40',269127,'Редактирование отдела','',1000,1276,'section_20',447),(448,'linsphoto-2-main','jpg','/data/images/section_20/27/',0,27,'col_168','2014-04-02 20:58:10',892592,NULL,NULL,1000,2147,'section_20',448),(449,'linsphoto-2-main_6888','jpg','/data/images/section_20/27/',1,27,'col_187','2014-04-02 20:58:15',892592,'Главная страница','',1000,2147,'section_20',449),(450,'linsphoto-2','jpg','/data/images/section_20/27/',1,27,'col_187','2014-04-02 20:58:16',614068,'Карточка товара','',1000,1435,'section_20',450),(451,'catalog-cards','png','/data/images/section_20/28/',1,28,'col_187','2014-04-15 17:49:41',878276,NULL,NULL,1074,3418,'section_20',451),(452,'catalog-list','png','/data/images/section_20/28/',1,28,'col_187','2014-04-15 17:49:44',686420,NULL,NULL,1074,2415,'section_20',452),(453,'main','png','/data/images/section_20/28/',1,28,'col_187','2014-04-15 17:49:49',1590565,NULL,NULL,1074,3284,'section_20',453),(454,'main_1705','png','/data/images/section_20/28/',0,28,'col_168','2014-04-15 17:49:51',1590565,NULL,NULL,1074,3284,'section_20',454),(455,'favicons','png','/data/images/section_20/28/',0,28,'col_179','2014-04-15 17:52:22',544,NULL,NULL,16,16,'section_20',455);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maps_objects`
--

DROP TABLE IF EXISTS `maps_objects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maps_objects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) DEFAULT NULL,
  `name` text,
  `description` text,
  `data` text,
  `relative_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `module` tinyint(1) DEFAULT NULL,
  `form_item` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maps_objects`
--

LOCK TABLES `maps_objects` WRITE;
/*!40000 ALTER TABLE `maps_objects` DISABLE KEYS */;
INSERT INTO `maps_objects` VALUES (8,1,NULL,NULL,'55.714537792126194;37.685320800781255',6,13,0,'col_84'),(7,1,NULL,NULL,'55.75783522837833;37.78007788085938',1,13,0,'col_84'),(3,1,NULL,NULL,'55.73696567477626;37.633135742187505',3,13,0,'col_84'),(4,1,NULL,NULL,'55.684355841658956;37.578204101562505',4,13,0,'col_84'),(5,1,NULL,NULL,'55.6835816390055;37.663348144531255',5,13,0,'col_84'),(6,1,NULL,NULL,'55.75087995086029;37.561724609375005',2,13,0,'col_84'),(9,1,NULL,NULL,'55.73696567477626;37.60155004882813',8,13,0,'col_84'),(10,1,NULL,NULL,'55.73541933780969;37.690813964843755',9,13,0,'col_84'),(11,1,NULL,NULL,'55.77251451944497;37.48619360351563',10,13,0,'col_84'),(12,1,NULL,NULL,'55.77792128623281;37.69150061035157',11,13,0,'col_84'),(13,1,NULL,NULL,'55.77174206295924;37.627642578125005',12,13,0,'col_84'),(14,1,NULL,NULL,'55.68590420098671;37.657854980468755',13,13,0,'col_84'),(15,1,NULL,NULL,'55.5750419200453;37.76428503417969',14,13,0,'col_84'),(16,1,NULL,NULL,'55.807259220093584;37.49168676757813',15,13,0,'col_84'),(17,1,NULL,NULL,'60.00705048779266;30.259249633789068',16,13,0,'col_84'),(18,1,NULL,NULL,'39.931586044052914;32.82593054199219',17,13,0,'col_84'),(19,1,NULL,NULL,'55.71531138184872;37.39349645996094',18,13,0,'col_84'),(20,1,NULL,NULL,'59.9397051071213;30.040896362304693',19,13,0,'col_84'),(21,1,NULL,NULL,'-33.87412621370918;148.963091796875',1,35,0,'col_256');
/*!40000 ALTER TABLE `maps_objects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `sort` int(11) NOT NULL,
  `publish` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (3,'Главное меню',3,1);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `public_users`
--

DROP TABLE IF EXISTS `public_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `public_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` int(10) unsigned NOT NULL DEFAULT '0',
  `active` tinyint(1) DEFAULT '0',
  `online` tinyint(1) NOT NULL DEFAULT '0',
  `subscriber` tinyint(1) DEFAULT '0',
  `login` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `email` tinytext,
  `name` tinytext,
  `reg_date` datetime NOT NULL,
  `last_login` datetime DEFAULT '2010-01-01 00:00:00',
  `last_activity` datetime DEFAULT '2010-01-01 00:00:00',
  `last_remember` datetime DEFAULT NULL,
  `remember_code` varchar(32) DEFAULT NULL,
  `vk_id` text,
  `fb_id` text,
  `publish` tinyint(1) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `last` datetime DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vk_id` (`vk_id`(8))
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `public_users`
--

LOCK TABLES `public_users` WRITE;
/*!40000 ALTER TABLE `public_users` DISABLE KEYS */;
INSERT INTO `public_users` VALUES (26,522176527,0,1,0,'ruslanchek_192612290','2461ff8a74d0e6984e37c22b43b048f7','9c8ff7bfb18df1e94b77af8f38245c24','ruslanchek@me.com','ruslanchek_192612290','2012-03-26 18:55:28','2012-03-26 18:57:50','2012-03-27 00:30:39','2012-03-26 18:55:55','',NULL,NULL,NULL,NULL,NULL,NULL),(24,522176527,0,1,0,'minaevstas','60abfcd92346f220df107315a5374c21','e2b54e6e6200374466f20d38bee15ad7','minaevstas@gmail.com','minaevstas','2012-03-26 17:52:59','2012-03-26 17:53:00','2012-03-26 17:53:03',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(25,522176527,0,0,0,'ruslanchek','d9b1d7db4cd6e70935368a1efb10e377','','ruslanchek@gmail.com','ruslanchek','2012-03-26 17:58:36','2012-03-26 17:59:35','2012-03-26 18:03:04','2012-03-26 18:53:20','84f7c61384654bcc1a2369d1106bf56b',NULL,NULL,NULL,NULL,NULL,NULL),(27,2130706433,0,0,0,'rus1','9648d3fc871ec77bc6bb7dfa95b8fe4b','','rus1@gmail.com','rus1','2012-04-12 18:26:59','2012-04-12 18:27:00','2012-04-12 18:36:57',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `public_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_19`
--

DROP TABLE IF EXISTS `section_19`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_19` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `name` tinytext,
  `sort` int(11) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `changer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '2013-07-21 16:59:00',
  `change_date` datetime NOT NULL DEFAULT '2013-07-21 16:59:00',
  `col_132` datetime NOT NULL DEFAULT '2013-07-21 17:00:00',
  `col_134` longtext,
  `col_136` longtext,
  `col_152` text,
  `col_163` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_19`
--

LOCK TABLES `section_19` WRITE;
/*!40000 ALTER TABLE `section_19` DISABLE KEYS */;
INSERT INTO `section_19` VALUES (3,1,'Parallax.js — очень качественный параллакс-эффект',1,1,1,'2013-11-27 20:28:40','2013-12-29 23:29:46','2013-08-26 12:00:00','<p><img class=\"rounded\" style=\"font-size: 16px; line-height: 1.65em;\" src=\"/data/content/images/parallaxjs.jpg\" alt=\"\" /><span style=\"font-size: 16px; line-height: 1.65em;\">Хороший скрипт, реализующий очень красивый параллакс-эффект.&nbsp;</span><a href=\"http://wagerfield.github.io/parallax/\">Сайт проекта</a>.</p>\r\n<p>&nbsp;</p>','<p><img class=\"rounded\" src=\"/data/content/images/parallaxjs.jpg\" alt=\"\" />Хороший скрипт, реализующий очень красивый параллакс-эффект.</p>',NULL,'JavaScript,CSS3,Анимация,Параллакс'),(4,1,'Настройка веб-сервера на платформе Google Compute Cloud',2,1,1,'2013-12-07 19:27:17','2014-10-22 15:48:12','2013-12-05 17:00:00','<p>Недавно, всем желающим открылся новый сервис &mdash; Google Compute Cloud. Хотим показать вам, как завести свой веб-сервер на этом прекрасном сервисе.</p>\r\n<h3>Регистрация</h3>\r\n<p>Первым делом регистрируемся на проекте, для этого нам понадобится аккаунт Google. Итак, начнем. Сначала переходим на сайт <a href=\"https://cloud.google.com/\">cloud.google.com</a>. Жмем &laquo;Get started&raquo;, авторизуемся. После прохождения авторизации появляется окно, предлагающее создать новый проект, вводим нужное имя и ID, создаем.</p>\r\n<p>После создания вам предложат оформить платную подписку. Соглашаемся, вводим данные своей банковской карты. Переходим на страницу проектов и выбираем наш проект. Далее Compute Engine, VM instances, New instance.</p>\r\n<h3>Создаем инстанс</h3>\r\n<p>Вводим название, описание и так далее, нажимаем &laquo;Create&raquo;.</p>\r\n<h4>Create a new Instance</h4>\r\n<p>Вводим название, описание и так далее.</p>\r\n<h4>Location and resources</h4>\r\n<p>Выбираем зону и тип машины. Выбирем <em>europe-west1-b</em>. Boot source &mdash; <em>New persistent disk from image</em>. Image &mdash; <em>debian-7-wheezy</em>.</p>\r\n<p><em class=\"em-tip\">Тип машины выбирайте, исходя их нужной вам мощности и цены (<a href=\"https://cloud.google.com/products/compute-engine/\">прайс на инстансы</a>).</em></p>\r\n<h4>Networking</h4>\r\n<p>Network &mdash; <em>default</em>. Создаем новый статический IP-адрес, запоминаем его на будущее. External IP &mdash; <em>New static</em><em>IP address</em>. IP forwarding &mdash; <em>enabled</em>.</p>\r\n<p>Жмем &laquo;Create&raquo;. Готово, проект создан, инстанс запущен. Теперь нам нужно как-то зайти на нашу машину и начать собственно настройку веб-сервера.</p>\r\n<h3>Подключение по SSH</h3>\r\n<p>Для того, чтобы подключиться к инстансу по SSH, нам потребуется &laquo;<a href=\"https://developers.google.com/compute/docs/gcutil/\">Gcutil</a>&raquo;, качаем отсюда, там же инструкция по установке, там все очень просто.</p>\r\n<p><em class=\"em-tip\">После установки Gcutil, если у вас Mac OS X, необходимо перезапустить терминал.</em></p>\r\n<p>Заходим в терминал или консоль или cygwin, не важно, это зависит от вашей ОС. Пишем в терминале:</p>\r\n<pre>gcloud auth login\r\n</pre>\r\n<p>После чего открывается браузер и предлагает авторизовать приложение в Google. Соглашаемся, возвращаемся в терминал, видим, что нас спрашивают ID проекта, вводим наш ID (его можно найти на станице Project в Google Cloud Console).</p>\r\n<p>Сразу же открываем фаервол для Apache (порт 8080), NGINX (80), MySQL (3306), иначе ничего не будет доступно извне:</p>\r\n<pre>gcutil addfirewall apache --description=\"Incoming apache allowed.\" &mdash;allowed=\"tcp:8080\" \r\ngcutil addfirewall nginx --description=\"Incoming nginx allowed.\" &mdash;allowed=\"tcp:80\" \r\ngcutil addfirewall mysql --description=\"Incoming mysql allowed.\" &mdash;allowed=\"tcp:3306\"\r\n</pre>\r\n<p><em class=\"em-tip\">Вообще это можно и в Cloud Console, через веб-интерфейс сделать, в разделе Compute Engine, Networks. Но так быстрее и проще.</em></p>\r\n<p>Теперь мы можем авторизоваться на инстансе. Для этого в Google Cloud Console заходим в наш проект, открываем Compute Engine, VM instances, жмем на кнопку &laquo;SSH&raquo; у нашего инстанса. Откроется окошко с парамерами подключения для терминала. Копируем, вводим в терминале (<em>не забудьте подставить свое название проекта и зону!</em>):</p>\r\n<pre>gcutil --service_version=\"v1\" --project=\"[ID проекта]\" ssh  --zone=\"[Зона проекта]\" \"test\"\r\n</pre>\r\n<p>Терминал выдаcт нам информацию о том, что в проект добавлен новый SSH-ключ, и что нужно подождать несколько минут, пока инстанс не примет новый ключ. Автоматом включится ожидание в 300 секунд. Ждем... Готово, мы авторизовались на сервере.</p>\r\n<h3>Настройка сервера</h3>\r\n<p>Сразу сменим таймзону:</p>\r\n<pre>sudo dpkg-reconfigure tzdata\r\n</pre>\r\n<h4>Установка нужных пакетов</h4>\r\n<p>Первым делом (на всякий случай) обновим репозитории:</p>\r\n<pre>sudo apt-get update\r\n</pre>\r\n<p>Midnight commander (пригодится):</p>\r\n<pre>sudo apt-get install mc\r\n</pre>\r\n<p>Apache + RPAF для проддержки reverse proxy в Apache</p>\r\n<pre>sudo apt-get install apache2 libapache2-mod-rpaf\r\n</pre>\r\n<p>Nginx</p>\r\n<pre>sudo apt-get install nginx\r\n</pre>\r\n<p>MySQL</p>\r\n<pre>sudo apt-get install mysql-server mysql-client\r\n</pre>\r\n<p><em class=\"em-tip\">Во время установки MySQL попросит вас установить пароль администратора &mdash; введите и запомните его.</em></p>\r\n<p>PHP</p>\r\n<pre>sudo apt-get install php5 php-pear php5-cli php5-mysql\r\n</pre>\r\n<p>Теперь перезапустим Apache</p>\r\n<pre>sudo service apache2 restart\r\n</pre>\r\n<h3>Настройка MySQL</h3>\r\n<p>Запустим скрипт финальной настройки MySQL</p>\r\n<pre>mysql_secure_installation\r\n</pre>\r\n<p>Ответьте на вопросы. Просто ответьте на все вопросы, Y (да), кроме первого вопроса, если не хотите менять пароль root.</p>\r\n<pre>Change the root password? [Y/n] n\r\nRemove anonymous users? [Y/n] y\r\nDisallow root login remotely? [Y/n] y\r\nRemove test database and access to it? [Y/n] y\r\nReload privilege tables now? [Y/n] y\r\n</pre>\r\n<p>Отредактируем конфигурацию MySQL:</p>\r\n<pre>sudo nano /etc/mysql/my.cnf\r\n</pre>\r\n<p>Нас интересует строка <code>bind-adress, = 127.0.0.1</code>. Меняем ее на <code>bind-address = 0.0.0.0</code>. Это нужно для того, чтобы можно было управлять базой данных удаленно. Выходим из nano и сохраняем &ndash; Ctrl+X, затем Y, затем Enter.</p>\r\n<p><em class=\"em-tip\">В будущем, когда проект будет в продакшене, лучше доступ к MySQL извне закрыть, как в my.cnf, так и фаерволом проекта в Google Cloud Console (порт 3306), &ndash; это небезопасно!</em></p>\r\n<p>Теперь нужно импортировать системный список временных зон в MySQL <em>(потребуется пароль MySQL root)</em>:</p>\r\n<pre>mysql_tzinfo_to_sql /usr/share/zoneinfo | mysql -u root -p mysql\r\n</pre>\r\n<p><em class=\"em-tip\">Некоторые зоны не смогут импортироваться, ничего страшного, так бывает, можно не обращать внимания, это не критично.</em></p>\r\n<p>Перезагружаем MySQL:</p>\r\n<pre>sudo service mysql restart\r\n</pre>\r\n<h4>Теперь создадим и настроим пользователя</h4>\r\n<p>Входим в MySQL <em>(после выполнения команды вас попросят пароль MySQL root, вводите)</em>:</p>\r\n<pre>mysql -u root -p\r\n</pre>\r\n<p>Создаем пользователя:</p>\r\n<pre>CREATE USER \'user\'@\'%\' IDENTIFIED BY \'password\';\r\n</pre>\r\n<p>Даем ему права</p>\r\n<pre>GRANT ALL PRIVILEGES ON * . * TO \'user\'@\'%\';\r\n</pre>\r\n<p><em class=\"em-tip\">Лучше немного подумать над тем, какие права дать пользователю, так как это не безопасно, но для простоты укажем пока ALL PRIVILEGES.</em></p>\r\n<p>Выходим из MySQL:</p>\r\n<pre>exit\r\n</pre>\r\n<h3>Настройка PHP</h3>\r\n<p>Создадим сначала тестовый скрипт, для последующей проверки работы PHP:</p>\r\n<pre>sudo nano /var/www/info.php\r\n</pre>\r\n<p>Вносим в файл info.php следующую строку:</p>\r\n<pre>&lt;? phpinfo(); ?&gt;\r\n</pre>\r\n<h3>Настройка Apache</h3>\r\n<p>Включаем модули Apache:</p>\r\n<pre>sudo a2enmod rewrite\r\nsudo a2enmod rpaf\r\n</pre>\r\n<h4>Настройка модуля RPAF</h4>\r\n<p>Для этого отредактируем <em>rpaf.conf</em>:</p>\r\n<pre>sudo nano /etc/apache2/mods-enabled/rpaf.conf\r\n</pre>\r\n<p>В файле rpaf.conf должно быть следующее:</p>\r\n<pre>	RPAFenable On\r\n	RPAFsethostname Off\r\n	RPAFproxy_ips 127.0.0.1\r\n	RPAFheader X-Real-IP\r\n\r\n</pre>\r\n<h4>&laquo;Вешаем&raquo; Apache на порт 8080</h4>\r\n<p>Вносим изменения в конфигурацию портов апача в <em>ports.conf</em>:</p>\r\n<pre>sudo nano /etc/apache2/ports.conf\r\n</pre>\r\n<p>В файле ports.conf должно быть следующее:</p>\r\n<pre>NameVirtualHost 127.0.0.1:8080\r\nListen 127.0.0.1:8080\r\n</pre>\r\n<h4>Настраиваем хост</h4>\r\n<p>Отредактируем список виртуальных хостов Apache</p>\r\n<pre>sudo nano /etc/apache2/sites-available/default\r\n</pre>\r\n<p>В файле <em>default</em> должно быть следующее:</p>\r\n<pre>        ServerAdmin webmaster@localhost\r\n        ServerName [ваш домен]\r\n        DocumentRoot /var/www\r\n        \r\n        \r\n                Options FollowSymLinks\r\n                AllowOverride None\r\n        \r\n        \r\n                Options Indexes FollowSymLinks MultiViews\r\n                AllowOverride None\r\n                Order allow,deny\r\n                allow from all\r\n        \r\n\r\n        ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/\r\n        &lt;Directory \"/usr/lib/cgi-bin\"&gt;\r\n            AllowOverride None\r\n            Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch\r\n            Order allow,deny\r\n            Allow from all\r\n        \r\n\r\n        ErrorLog ${APACHE_LOG_DIR}/error.log\r\n        LogLevel warn\r\n        CustomLog ${APACHE_LOG_DIR}/access.log combined\r\n\r\n</pre>\r\n<p>Перезапускаем Apache</p>\r\n<pre>sudo service apache2 restart\r\n</pre>\r\n<h3>Настройка Nginx</h3>\r\n<p>Отредактируем список виртуальных хостов Nginx</p>\r\n<pre>sudo nano /etc/nginx/sites-enabled/default\r\n</pre>\r\n<p>В файле <em>default</em> должно быть следующее:</p>\r\n<pre>server {\r\n	listen *:80;\r\n	server_name [ваш домен];\r\n	access_log /var/log/nginx/access.log;\r\n	location / {\r\n		proxy_pass http://localhost:8080/;\r\n		proxy_set_header Host $host;\r\n		proxy_set_header X-Real-IP $remote_addr;\r\n		proxy_set_header X-Forwarded-For $remote_addr;\r\n		proxy_connect_timeout 120;\r\n		proxy_send_timeout 120;\r\n		proxy_read_timeout 180;\r\n	}\r\n	location ~* \\.(jpg|jpeg|gif|png|ico|css|bmp|swf|js|html|txt)$ {\r\n		root /var/www;\r\n	}\r\n}\r\n</pre>\r\n<p>Перезагружаем Nginx</p>\r\n<pre>sudo service nginx restart\r\n</pre>\r\n<h3>Перезагрузка инстаса и проверка</h3>\r\n<p>Перезагрузим инстанс:</p>\r\n<pre>sudo reboot\r\n</pre>\r\n<p>Теперь дождемся окончания перезагрузки (20-30 секунд) и пробуем посмотреть на результат работы нашего info.php:</p>\r\n<pre>http://[IP-адрес инстанса]/info.php\r\n</pre>\r\n<h3>Привязка проекта к домену</h3>\r\n<p>Чтобы привязать домен к хосту, зайдите в панель управления своего регистратора (сейчас многие регистраторы бесплатно предоставляют услугу поддержки DNS) и просто добавьте в настройках поддержки DNS следующие записи:</p>\r\n<pre>Имя			Тип	Адрес\r\n[ваш домен].		A	[IP-адрес инстанса]\r\n[ваш домен].		TXT	v=spf1 ip4:[IP-адрес инстанса] a mx ~all\r\nwww			A	[IP-адрес инстанса]\r\n</pre>\r\n<p>На этом все, спасибо за внимание.</p>','<p>Недавно, всем желающим открылся новый сервис &mdash; Google Compute Cloud. Хотим показать вам, как завести свой веб-сервер на этом прекрасном сервисе.</p>',NULL,'Cloud,Linux,Google Compute Cloud,Server,PaaS,Google,Туториал,LAMP,Debian');
/*!40000 ALTER TABLE `section_19` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_20`
--

DROP TABLE IF EXISTS `section_20`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_20` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `name` tinytext,
  `sort` int(11) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `changer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '2013-12-01 02:22:00',
  `change_date` datetime NOT NULL DEFAULT '2013-12-01 02:22:00',
  `col_168` text,
  `col_169` int(11) DEFAULT '0',
  `col_171` text,
  `col_173` text,
  `col_175` longtext,
  `col_176` text,
  `col_178` datetime NOT NULL DEFAULT '2013-12-01 17:46:00',
  `col_179` text,
  `col_183` longtext,
  `col_185` text,
  `col_187` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_20`
--

LOCK TABLES `section_20` WRITE;
/*!40000 ALTER TABLE `section_20` DISABLE KEYS */;
INSERT INTO `section_20` VALUES (1,1,'Сайт Мосстройразвития',1,1,1,'2013-12-01 02:24:09','2013-12-01 22:00:48','1',1,'Дизайн и разработка','default','<p>\r\n	 Разработка сайта и логотипа для компании «Мосстройразвитие».<br />\r\n	 Был разработан <a href=\"/portfolio/mosstroyrazvitie-logo\">логотип</a>, макеты страниц сайта, осуществлена верстка и программирование.\r\n</p>','Сделать сайт','2013-01-15 12:00:00','1','','mosstroyrazvitie.ru',3),(2,1,'Логотип Мосстройразвития',2,1,1,'2013-12-01 22:01:26','2013-12-29 16:11:56','1',2,'Создание логотипа','default-plain-images','<p>Разработка <a href=\"/portfolio/mosstroyrazvitie-site\">сайта</a> и логотипа для компании &laquo;Мосстройразвитие&raquo;.<br /> Был разработан логотип, макеты страниц сайта, осуществлена верстка и программирование.</p>','Сделать логотип','2013-01-12 17:46:00',NULL,'<p><br /><img class=\"rounded bordered\" src=\"/data/content/images/portfolio/mosstroyrazvitie/msr-logo-big.jpg\" alt=\"\" width=\"920\" height=\"200\" /></p>\r\n<p><img class=\"rounded bordered\" src=\"/data/content/images/portfolio/mosstroyrazvitie/msr-logo-varietes.jpg\" alt=\"\" width=\"920\" /></p>','',0),(3,1,'Интернет-магазин Fotobuy.ru',3,1,1,'2013-12-03 23:01:55','2013-12-03 23:04:40','1',1,'Дизайн и разработка','default','','Сделать простой магазин','2010-12-15 17:46:00','1','','fotobuy.ru',2),(4,1,'BTS',4,1,1,'2013-12-09 19:36:05','2013-12-09 22:12:53','1',1,'Макет и логотип','default','','Сделать макет сайта','2013-07-20 17:46:00',NULL,'','',1),(5,1,'Сайт Промснабкомплекта',5,1,1,'2013-12-09 20:54:13','2013-12-09 21:02:10','1',1,'Разработка сайта','default','','Сделать сайт','2013-09-05 17:46:00','1','','pskmk.ru',3),(6,1,'Сайт бара Chesterfield',6,1,1,'2013-12-09 21:26:58','2013-12-10 16:12:19','1',1,'Создание сайта','default','','Сделайть сайт','2013-06-20 17:46:00','1','','chester-bar.ru',1),(7,1,'Сайт Жуковки Плазы',7,1,1,'2013-12-09 22:16:33','2013-12-10 13:45:03','1',1,'Разработка каталога','default','','Сделать онлайн-каталог','2013-09-30 17:46:00','1','','jhukoffkaplaza.ru',3),(8,1,'Сайт 8km cargo',8,1,1,'2013-12-09 22:23:59','2013-12-12 02:59:21','1',0,'Верстка макетов','default','','Оживить макет','2010-05-10 17:46:00','1','','8-km.com',1),(9,1,'Интернет-магазин Beatsbymonster',9,1,1,'2013-12-09 22:33:14','2013-12-09 22:48:44','1',1,'Разработка интернет-магазина','default','','Сделать магазин','2013-03-01 17:46:00','1','','beatsbymonster.ru',2),(10,1,'Логотип Beatsbymonster',10,1,1,'2013-12-09 22:49:40','2013-12-09 22:52:45','1',2,'Создание логотипа','default','','Сделать логотип','2013-03-01 17:46:00',NULL,'<p class=\"noised\">\r\n	 <img class=\"block-centered\" src=\"/data/content/images/preview.png\">\r\n</p>','',0),(11,1,'Сайт Секретов.нет',11,1,1,'2013-12-09 22:57:53','2013-12-09 23:03:23','1',1,'Разработка сайта','default','','Сделать сайт','2013-05-06 17:46:00','1','','netsekretovnet.ru',1),(12,1,'Сайт ДжиТиЭс-Москва',12,1,1,'2013-12-12 02:26:46','2013-12-12 02:56:16','1',1,'Интеграция дизайна','default','','Оживить макет','2013-12-01 17:46:00','1','','gts-moscow.ru',1),(13,1,'Сайт датацентра SDN',13,1,1,'2013-12-12 13:52:43','2013-12-29 16:24:49','1',1,'Интеграция дизайна','default','','Оживить макет','2013-12-01 17:46:00','1','','stackdata.net',2),(14,1,'Сайт NSI GROUP',14,1,1,'2013-12-16 20:29:09','2013-12-16 20:30:01','1',1,'Разработка сайта','default','','Сделать сайт','2013-08-15 17:46:00','1','','nsigroup.ru',3),(15,1,'Pt-app',15,1,1,'2013-12-23 02:14:47','2013-12-23 02:38:33','1',3,'Создание приложения','default','','Оформить периодическую систему химических элементов в виде веб-приложения','2013-12-23 17:46:00','1','','pt-app.ru',1),(16,1,'Элиана голд',16,1,1,'2013-12-23 02:55:13','2013-12-23 03:01:47','1',1,'Создание сайта','default','','Сделать сайт','2012-10-01 17:46:00','1','','elianagold.ru',1),(17,1,'Сайт клиники «Медана XXI-век»',17,1,1,'2014-03-25 19:48:35','2014-03-25 20:03:30','1',1,'Макет главной страницы сайта','default','','Сделать макет главной страницы сайта','2010-03-10 17:46:00','1','','medana.ru',2),(18,1,'Трейд Лайт',18,1,1,'2014-03-27 09:52:41','2014-03-27 09:59:31','1',1,'Интеграция дизайна','default','','Оживить макет','2009-04-10 17:46:00',NULL,'','trade-light.ru',1),(19,1,'Стройбетон',19,1,1,'2014-03-27 10:03:36','2014-03-27 10:07:40','1',1,'Создание сайта','default','','Сделать сайт производственной компании','2008-05-01 17:46:00',NULL,'','',1),(20,1,'Интернет-магазин Svet4home',20,1,1,'2014-03-27 10:11:55','2014-03-27 10:17:48','1',0,'Разработка интернет-магазина','default','','Сделать интернет-магазин осветительной техники','2010-03-01 17:46:00','1','','svet4home.ru',2),(21,1,'Блоги iXBT',21,1,1,'2014-03-27 10:21:38','2014-03-27 10:33:06','1',1,'Создание макетов','default','','Сделать макет блогов для iXBT','2011-05-01 17:46:00',NULL,'','',2),(22,1,'Интернет-магазин SEC System',22,1,1,'2014-03-30 12:35:33','2014-03-30 12:45:14','1',1,'Разработка интернет-магазина','default','','Сделать интернет-магазин охранных систем','2013-03-20 17:46:00','1','','msksec.ru',1),(23,1,'Сайт банка «Лайт»',23,1,1,'2014-03-30 12:45:05','2014-03-30 12:47:23','1',1,'Разработка сайта','default','','Сделать сайт банка «Лайт»','2013-04-20 17:46:00','1','','lightbank.ru',1),(25,1,'Интернет-магазин Elcomshop',24,1,1,'2014-03-30 12:49:41','2014-03-30 12:56:05','1',0,'Разработка макетов','default','','Сделать дизайн для интернет-магазина','2010-05-01 17:46:00','1','','elcomshop.ru',6),(26,1,'Прототип CRM «Менеджер»',25,1,1,'2014-03-30 13:01:49','2014-03-30 13:13:00','1',3,'Создание прототипов','default','','Сделать дизайн системы управления проектами','2011-09-10 17:46:00',NULL,'','',5),(27,1,'Интернет-магазин Linsfoto.ru',26,1,1,'2014-04-02 20:56:47','2014-04-02 21:05:53','1',1,'Разработка интернет-магазина','default','','Сделать интернет-магазин фототехники и компьютеров','2011-04-12 17:46:00',NULL,'','',2),(28,1,'Интернет-магазин Network.msk.ru',27,1,1,'2014-04-15 17:47:39','2014-04-15 17:52:25','1',1,'Разработка интернет-магазина','default','','Сделать интернет-магазин сетевого оборудования Cisco','2014-04-15 17:46:00','1','','network.msk.ru',3);
/*!40000 ALTER TABLE `section_20` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_21`
--

DROP TABLE IF EXISTS `section_21`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_21` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `name` tinytext,
  `sort` int(11) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `changer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '2013-12-29 16:47:00',
  `change_date` datetime NOT NULL DEFAULT '2013-12-29 16:47:00',
  `col_209` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_21`
--

LOCK TABLES `section_21` WRITE;
/*!40000 ALTER TABLE `section_21` DISABLE KEYS */;
INSERT INTO `section_21` VALUES (1,1,'Модули сайта (включая дизайн)',1,1,1,'2013-12-29 18:27:00','2014-03-25 21:13:20',0),(2,0,'Верстка',2,1,1,'2013-12-29 18:27:04','2013-12-29 18:27:09',NULL),(3,0,'Программирование',4,1,1,'2013-12-29 18:27:10','2013-12-29 18:27:15',NULL),(4,1,'Настройка',5,1,1,'2013-12-29 18:27:16','2013-12-29 18:27:20',NULL),(5,1,'Прочее',6,1,1,'2013-12-29 18:27:24','2013-12-29 18:27:26',NULL),(6,1,'Хостинг',7,1,1,'2013-12-29 18:27:29','2014-02-27 01:57:49',1),(7,1,'Виджеты',3,1,1,'2014-03-03 15:16:50','2014-03-03 15:17:11',0);
/*!40000 ALTER TABLE `section_21` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_22`
--

DROP TABLE IF EXISTS `section_22`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_22` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `name` tinytext,
  `sort` int(11) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `changer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '2013-12-29 16:48:00',
  `change_date` datetime NOT NULL DEFAULT '2013-12-29 16:48:00',
  `col_198` tinytext,
  `col_203` float DEFAULT '0',
  `col_204` float DEFAULT '0',
  `col_206` tinytext,
  `col_208` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_22`
--

LOCK TABLES `section_22` WRITE;
/*!40000 ALTER TABLE `section_22` DISABLE KEYS */;
INSERT INTO `section_22` VALUES (1,1,'Главная страница',1,1,1,'2013-12-29 18:27:37','2014-03-25 20:36:52','1,2,3,4',19500,21500,'1,2,3',1),(3,1,'Хостинг V6',3,1,1,'2014-02-27 01:55:00','2014-02-27 01:56:36','1,2,3,4',9900,0,'',6),(4,1,'Хостинг V8',4,1,1,'2014-02-27 01:55:40','2014-02-27 01:56:53','1,2,4',14900,0,'',6),(5,1,'Хостинг V12',5,1,1,'2014-02-27 01:56:54','2014-02-27 01:57:18','1,2,4',19900,0,'',6),(6,1,'Обратная связь',6,1,1,'2014-03-03 15:16:36','2014-03-25 20:34:58','1,2,3,4',1500,0,'',7),(8,1,'Обратный звонок',7,1,1,'2014-03-03 15:19:20','2014-03-25 20:34:47','1,2,3,4',1500,0,'',7),(9,1,'Географическая карта с маршрутом проезда ',8,1,1,'2014-03-03 15:19:44','2014-03-25 21:14:48','1,2,3,4',490,0,'',7),(10,1,'Типовая внутренняя страница',9,1,1,'2014-03-03 15:21:56','2014-03-25 20:37:45','1,2,3,4',9500,0,'1,2,3',1),(11,1,'Каталог товаров',10,1,1,'2014-03-25 20:29:25','2014-03-25 20:37:06','1,2,4',4900,0,'1',1),(12,1,'Карточка товаров',11,1,1,'2014-03-25 20:33:19','2014-03-25 20:37:24','1,2,4',5900,0,'1',1),(13,1,'Страница контактов',12,1,1,'2014-03-25 20:33:56','2014-03-25 20:37:14','1,2,3,4',900,0,'1,2',1),(14,1,'Корзина товаров',13,1,1,'2014-03-25 20:36:25','2014-03-25 20:40:18','1',0,2900,'1',1),(15,1,'Страница новостей',14,1,1,'2014-03-25 20:38:46','2014-03-25 21:19:08','1,2,3,4',0,1000,'1,2',1),(17,1,'Каталог вакансий',17,1,1,'2014-03-25 21:04:27','2014-03-25 21:05:00','1,2,4',1900,0,'',1),(19,1,'Географическая карта с метками и фильтрами',18,1,1,'2014-03-25 21:14:50','2014-03-25 21:15:58','1,2,3,4',5900,0,'',1),(20,1,'Карта сайта',15,1,1,'2014-03-25 21:16:05','2014-03-25 21:16:28','1,2,3,4',0,0,'1,2',1),(21,1,'Система онлайн-оплаты заказов интернет-магазина',19,1,1,'2014-03-25 21:16:42','2014-03-25 21:18:21','1',9900,12000,'',1);
/*!40000 ALTER TABLE `section_22` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_3`
--

DROP TABLE IF EXISTS `section_3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `name` tinytext,
  `sort` int(11) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `changer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '2011-11-09 22:17:00',
  `change_date` datetime NOT NULL DEFAULT '2011-11-09 22:17:00',
  `col_33` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_3`
--

LOCK TABLES `section_3` WRITE;
/*!40000 ALTER TABLE `section_3` DISABLE KEYS */;
INSERT INTO `section_3` VALUES (73,1,'Контакты',1,1,1,'2013-10-16 17:24:32','2013-10-16 17:26:08','<h4>Адрес</h4>\r\n<p> Россия, 121357, Москва, ул. Академика Королева, дом&nbsp;12, кор.&nbsp;3, пом. IV, ком. <nobr>1-9</nobr> </p>\r\n<h4>Телефоны</h4>\r\n<p> Общие вопросы: <nobr class=\"phone\">+7 (499) 792-68-04</nobr>;<br/>\r\n Факс: <nobr class=\"phone\">+7 (499) 792-68-05</nobr>;<br/>\r\n Отдел продаж: <nobr class=\"phone\">+7 (499) 792-69-65</nobr>;\r\n</p>\r\n<h4>E-mail</h4>\r\n<p> <a href=\"mailto:info@gtsmoscow.ru\">info@gtsmoscow.ru</a></p>\r\n<h4>Web</h4>\r\n<p> <a href=\"http://www.gts-moskow.ru\">www.gts-moskow.ru</a></p>'),(74,1,'О компании',2,1,1,'2013-11-19 02:16:34','2014-03-06 23:01:30','<h2>Кто мы?</h2>\r\n<p>Мы компания специалистов, занимающихся разработкой в&nbsp;сфере веб-технологий. Разрабатываем веб-приложения, интернет-магазины и&nbsp;сайты. С&nbsp;трепетом относимся к&nbsp;новым технологиям, любим свою работу и&nbsp;совершенствуемся каждый день.</p>\r\n<p>Качество&nbsp;&mdash; для&nbsp;нас не&nbsp;пустой звук. Поэтому нам есть, что&nbsp;вам предложить. Мы не&nbsp;делаем дизайн ради картинки, мы делаем его так, чтобы он просто работал, удобство использования и&nbsp;все по&nbsp;делу, ничего лишнего.</p>\r\n<h2>Что&nbsp;мы делаем?</h2>\r\n<p>Занимаемся разработкой сайтов, интернет-магазинов, веб-приложений и&nbsp;дизайном пользовательского интерфейса. Мы так&nbsp;же предоставляем услуги хостинга, технической поддержки и&nbsp;котент-менеджмента проектов.</p>\r\n<h2>Как&nbsp;мы делаем?</h2>\r\n<p>Мы очень любим все, что&nbsp;связано с&nbsp;веб-технологиями, применяем самые последние технологии и&nbsp;разработки, создаем и&nbsp;совершенствуем собственные программные решения которые позволяют нам делать нашу работу быстрее и&nbsp;качественнее.</p>'),(75,1,'Заказ',3,1,1,'2013-12-29 16:50:16','2013-12-29 16:50:22',''),(76,1,'Хостинг',4,1,1,'2013-12-29 23:38:57','2013-12-29 23:39:03',''),(77,1,'Услуги',5,1,1,'2014-01-03 18:24:30','2014-01-03 18:24:35',''),(78,1,'Редактор',6,1,1,'2014-01-09 16:53:15','2014-01-09 16:53:24',''),(79,1,'Создание сайтов и интернет-магазинов',7,1,1,'2014-03-03 12:38:44','2014-04-17 16:25:22','<h2>Сделать интернет-магазин: начните зарабатывать уже сегодня!</h2>\r\n<p>Наличие собственного интернет-магазина с легким и быстрым управлением его основными параметрами позволяет беспрерывно осуществлять продажи, существенно расширить клиентскую базу, а также получать хорошую прибыль за счет развития своего бизнеса во Всемирной Сети.</p>\r\n<h2>Высокопрофессиональные услуги &ndash; гарантированный результат</h2>\r\n<p>Мы рады предложить своим клиентам такую услугу, как создание интернет-магазина, на высоком профессиональном уровне, в максимально сжатые временные сроки, по доступной цене. Ваше представительство в Интернете с возможностью реализации товаров и услуг будет отличаться ультрасовременным, эксклюзивным дизайном, который надолго запомнится покупателям и станет вашей визитной карточкой. Качественное исполнение, простота навигации ресурса позволят потенциальным клиентам максимально быстро найти интересующую категорию, осуществить свой заказ, сделают процесс изучения интернет-магазина настоящим увлекательным путешествием, в результате которого захочется осуществить покупку.</p>\r\n<p>Наличие высокотехнологических примочек, таких как анимация элементов, одностраничные приложения, быстрая скорость работы и прочее впечатляют своей оригинальностью, носят определенную функциональную нагрузку, направленную на привлечение наибольшего количества заказчиков, увеличение прибыли от продаж.</p>\r\n<h2>Основные секции интернет-магазина</h2>\r\n<p>Мы предлагаем три основных направления по разработке интернет-магазина, среди которых можно выделить:</p>\r\n<p>1. Интернет-магазин Экспресс стоимостью 19500 руб., со стартом в течение 3-х дней: - готовый дизайн; - настройка некоторых элементов - цвета, логотипа, выбор подходящего макета из каталога; - подключение к Яндекс-маркету.</p>\r\n<p>2. Интернет-магазин Стандарт стоимостью 54500 руб.: - уникальный дизайн; - подключение к Яндекс-Маркету; - хостинг на год; - тех. поддержка на один месяц.</p>\r\n<p>3. Интернет-магазин Максимум: - содержит уникальные модули (например, магазин автозапчастей - разработка специального ПО для администрирования, обработки заказов и интеграции каталога с 1С и пр.); - сложный дизайн; - анимация элементов; - техподдержка на месяц; - хостинг на год.</p>\r\n<h2>В наших силах создать интернет-магазин быстро, качественно и надежно</h2>\r\n<p>Если вам необходимо открыть интернет-магазин &ndash; обращайтесь в нашу компанию, и непременно останетесь довольны! Высокий сервис, отличное качество работы, а также нацеленность на результат, максимально отвечающий требованиям заказчика, являются основными приоритетами работы наших высококвалифицированных специалистов. Мы воплотим в жизнь и наполним смыслом идеи, которые в дальнейшем принесут расцвет вашему бизнесу и будут способствовать росту прибыли.</p>'),(80,1,'Техническая поддержка и контент-менеджмент',8,1,1,'2014-03-03 12:39:01','2014-03-03 12:39:03',''),(81,1,'Разработка комплексных веб-приложений',9,1,1,'2014-03-03 12:39:24','2014-03-03 12:39:32',''),(82,1,'Дизайн пользовательских интерфейсов',10,1,1,'2014-03-03 12:39:45','2014-03-03 12:39:47',''),(83,1,'Создание сайтов',11,1,1,'2014-03-03 12:41:41','2014-03-03 12:41:43',''),(84,1,'Разработка под мобильные платформы',12,1,1,'2014-03-03 15:25:51','2014-03-03 15:25:58','');
/*!40000 ALTER TABLE `section_3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_33`
--

DROP TABLE IF EXISTS `section_33`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_33` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `name` tinytext,
  `sort` int(11) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `changer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '2014-03-01 19:12:00',
  `change_date` datetime NOT NULL DEFAULT '2014-03-01 19:12:00',
  `col_244` longtext,
  `col_245` datetime NOT NULL DEFAULT '2014-03-01 19:13:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_33`
--

LOCK TABLES `section_33` WRITE;
/*!40000 ALTER TABLE `section_33` DISABLE KEYS */;
/*!40000 ALTER TABLE `section_33` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_37`
--

DROP TABLE IF EXISTS `section_37`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_37` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `name` tinytext,
  `sort` int(11) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `changer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '2015-05-26 13:25:00',
  `change_date` datetime NOT NULL DEFAULT '2015-05-26 13:25:00',
  `col_269` text,
  `col_270` text,
  `col_271` longtext,
  `col_272` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_37`
--

LOCK TABLES `section_37` WRITE;
/*!40000 ALTER TABLE `section_37` DISABLE KEYS */;
INSERT INTO `section_37` VALUES (1,1,'Объект 1',1,1,1,'2015-05-26 05:25:49','2015-05-26 05:25:49','-34.397;150.644;8;roadmap',NULL,'[]',NULL);
/*!40000 ALTER TABLE `section_37` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text NOT NULL,
  `color` varchar(6) NOT NULL DEFAULT 'FFFFFF',
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (3,'Страницы','','759494',NULL),(19,'Блог','','103A55',NULL),(20,'Портфолио','','A565FB',NULL),(21,'Группы услуг','','2E91B4',NULL),(22,'Услуги','','4E1A0E',NULL),(33,'Заказы','','090552',NULL),(37,'Раздел 37','','11D1DA',NULL);
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_categories`
--

DROP TABLE IF EXISTS `shop_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `sort` int(11) DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_categories`
--

LOCK TABLES `shop_categories` WRITE;
/*!40000 ALTER TABLE `shop_categories` DISABLE KEYS */;
INSERT INTO `shop_categories` VALUES (3,'Категория товаров 3',3,1),(4,'Категория товаров 4',4,1);
/*!40000 ALTER TABLE `shop_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_goods`
--

DROP TABLE IF EXISTS `shop_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `sort` int(11) DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  `item_article` tinytext,
  `price` float DEFAULT '0',
  `discount` tinyint(3) DEFAULT '0',
  `category` int(11) DEFAULT NULL,
  `item_picture` int(11) DEFAULT NULL,
  `item_gallery` int(11) DEFAULT NULL,
  `description` text,
  `short_description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_goods`
--

LOCK TABLES `shop_goods` WRITE;
/*!40000 ALTER TABLE `shop_goods` DISABLE KEYS */;
INSERT INTO `shop_goods` VALUES (10,'Товар 10',10,0,'',0,0,NULL,0,0,NULL,NULL);
/*!40000 ALTER TABLE `shop_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `structure`
--

DROP TABLE IF EXISTS `structure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `structure` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `structure`
--

LOCK TABLES `structure` WRITE;
/*!40000 ALTER TABLE `structure` DISABLE KEYS */;
INSERT INTO `structure` VALUES (1,0),(72,1),(73,72),(70,1),(74,1),(44,1),(71,1),(75,1),(76,74),(77,74),(78,74),(79,74),(80,72),(81,74),(82,74),(83,74),(84,74),(85,74),(86,74),(87,74),(88,74),(89,74),(90,74),(92,74),(93,74),(94,1),(95,75),(96,1),(97,96),(98,96),(99,96),(100,96),(102,75),(103,96),(104,96),(105,74),(106,74),(107,74),(108,74),(109,74),(110,74),(111,74),(112,74),(113,74),(114,74),(115,74);
/*!40000 ALTER TABLE `structure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `structure_data`
--

DROP TABLE IF EXISTS `structure_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `structure_data` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `name` tinytext,
  `path` tinytext,
  `part` tinytext,
  `title` tinytext,
  `description` tinytext,
  `keywords` tinytext,
  `publish` tinyint(1) DEFAULT '0',
  `sort` tinyint(4) DEFAULT '0',
  `menu` int(11) NOT NULL,
  `mode` tinyint(1) NOT NULL,
  `template` int(11) DEFAULT NULL,
  `private` tinyint(4) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `just_created` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `path` (`path`(2)),
  KEY `menu` (`menu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `structure_data`
--

LOCK TABLES `structure_data` WRITE;
/*!40000 ALTER TABLE `structure_data` DISABLE KEYS */;
INSERT INTO `structure_data` VALUES (1,0,'Главная','/',NULL,'Fortyfour - разработка сайтов','','',1,0,3,1,1,0,0,0),(44,1,'Контакты','/contacts/','contacts','','','',1,7,3,1,12,0,73,0),(72,1,'Блог','/blog/','blog','Блог','','',1,5,3,2,14,NULL,0,0),(73,72,'Очень качественный параллакс-эффект, Parallax.js','/blog/parallax-js/','parallax-js','','','',1,3,0,3,14,NULL,3,0),(74,1,'Портфолио','/portfolio/','portfolio','Портфолио','','',1,4,0,4,15,NULL,0,0),(70,1,'Карта сайта','/sitemap/','sitemap','Карта сайта','','',1,8,0,100,13,NULL,0,0),(71,1,'О компании','/about/','about','О компании','','',1,6,3,1,20,NULL,74,0),(75,1,'Проекты','/projects/','projects','Проекты','','',1,3,3,1,16,NULL,0,0),(76,74,'Сайт Мосстройразвития','/portfolio/mosstroyrazvitie-site/','mosstroyrazvitie-site','','','',1,24,3,5,15,NULL,1,0),(77,74,'Логотип Мосстройразвития','/portfolio/mosstroyrazvitie-logo/','mosstroyrazvitie-logo','Логотип Мосстройразвития','','',1,26,3,5,15,NULL,2,0),(78,74,'Интернет-магазин Fotobuy.ru','/portfolio/fotobuy/','fotobuy','Интернет-магазин Fotobuy.ru','','',1,25,3,5,15,NULL,3,0),(79,74,'Сайт BTS','/portfolio/buderus-thermotechnik-service/','buderus-thermotechnik-service','Сайт Базистеплостроя','','',1,23,3,5,15,NULL,4,0),(80,72,'Настройка веб-сервера на платформе Google Compute Cloud','/blog/google-compute-cloud-web-server-configure/','google-compute-cloud-web-server-configure','Настройка веб-сервера на платформе Google Compute Cloud','','',1,2,0,3,14,NULL,4,0),(83,74,'Сайт Жуковки Плазы','/portfolio/jukovka-plaza/','jukovka-plaza','Жуковка Плаза','','',1,20,3,5,15,NULL,7,0),(81,74,'Сайт Промснабкомплекта','/portfolio/promsnabkomplekt/','promsnabkomplekt','Сайт Промснабкомплекта','','',1,22,3,5,15,NULL,5,0),(82,74,'Сайт бара Chesterfield','/portfolio/chesterfield-bar/','chesterfield-bar','Сайт бара Chesterfield','','',1,21,3,5,15,NULL,6,0),(84,74,'Сайт 8km cargo','/portfolio/8km-cargo/','8km-cargo','Сайт 8km cargo','','',0,19,3,5,15,NULL,8,0),(85,74,'Магазин Beatsbymonster','/portfolio/beatsbymonster/','beatsbymonster','Интернет-магазин Beatsbymonster','','',1,18,3,5,15,NULL,9,0),(87,74,'Сайт Секретов.нет','/portfolio/sekretov-net/','sekretov-net','Сайт Секретов.нет','','',1,16,3,5,15,NULL,11,0),(86,74,'Логотип Beatsbymonster','/portfolio/beatsbymonster-logo/','beatsbymonster-logo','Логотип Beatsbymonster','','',1,17,3,5,15,NULL,10,0),(88,74,'Сайт ДжиТиЭс-Москва','/portfolio/gts-moscow/','gts-moscow','Сайт GTS Moscow','','',1,15,3,5,15,NULL,12,0),(89,74,'Сайт датацентра SDN','/portfolio/sdn-spb/','sdn-spb','Сайт SDN СПБ','','',1,14,3,5,15,NULL,13,0),(90,74,'Сайт NSI GROUP','/portfolio/nsi-group/','nsi-group','Сайт NSI GROUP','','',1,13,3,5,15,NULL,14,0),(92,74,'Pt-app','/portfolio/pt-app/','pt-app','Pt-app','','',1,12,3,5,15,NULL,15,0),(93,74,'Элиана голд','/portfolio/elianagold/','elianagold','','','',1,11,3,5,15,NULL,16,0),(94,1,'Заказ разработки','/order/','order','Заказ разработки','','',1,2,0,1,18,NULL,75,0),(95,75,'Хостинг','/projects/hosting/','hosting','Хостинг','','',1,2,0,1,19,NULL,76,0),(96,1,'Услуги','/services/','services','Услуги','','',1,1,3,1,21,NULL,77,0),(97,96,'Создание нтернет-магазинов','/services/shops/','shops','Создание сайтов и интернет-магазинов','','',1,3,3,1,13,NULL,79,0),(103,96,'Создание сайтов','/services/sites/','sites','Создание сайтов','','',1,2,0,1,13,NULL,83,0),(98,96,'Дизайн пользовательских интерфейсов','/services/ui/','ui','Дизайн пользовательских интерфейсов','','',1,6,0,1,13,NULL,82,0),(99,96,'Разработка комплексных веб-приложений','/services/apps/','apps','Разработка комплексных веб-приложений','','',1,5,3,1,13,NULL,81,0),(100,96,'Техническая поддержка и контент-менеджмент','/services/support/','support','Техническая поддержка и контент-менеджмент','','',1,4,3,1,13,NULL,0,0),(102,75,'Редактор','/projects/redactor/','redactor','Редактор','','',1,1,3,1,22,NULL,78,0),(104,96,'Разработка под мобильные платформы','/services/mobile/','mobile','Разработка под мобильные платформы','','',1,1,0,1,13,NULL,84,0),(105,74,'Медана XXI век','/portfolio/medana-xxi/','medana-xxi','Медана XXI-век','','',1,27,0,5,17,NULL,17,0),(106,74,'Трейд Лайт','/portfolio/treyd-layt/','treyd-layt','Трейд Лайт','','',1,10,0,5,17,NULL,18,0),(107,74,'Стройбетон','/portfolio/stroybeton/','stroybeton','Стройбетон','','',1,9,0,5,17,NULL,19,0),(108,74,'Интернет-магазин Svet4home','/portfolio/svet4home/','svet4home','Интернет-магазин Svet4home','','',1,8,0,5,17,NULL,20,0),(109,74,'Блоги iXBT','/portfolio/blogi-ixbt/','blogi-ixbt','Блоги iXBT','','',1,7,0,5,17,NULL,21,0),(110,74,'Интернет-магазин SEC System','/portfolio/sec-system/','sec-system','Интернет-магазин SEC System','','',1,6,0,5,17,NULL,22,0),(111,74,'Сайт банка «Лайт»','/portfolio/lightbank/','lightbank','Сайт банка «Лайт»','','',1,5,0,5,17,NULL,23,0),(112,74,'Интернет-магазин Elcomshop','/portfolio/elcomshop/','elcomshop','Интернет-магазин Elcomshop','','',1,4,0,5,17,NULL,25,0),(113,74,'Прототип CRM «Менеджер»','/portfolio/managercrm/','managercrm','Прототип CRM «Менеджер»','','',1,3,0,5,17,NULL,26,0),(114,74,'Интернет-магазин Linsfoto.ru','/portfolio/linsfoto/','linsfoto','Интернет-магазин Linsfoto.ru','','',1,2,0,5,17,NULL,27,0),(115,74,'Магазин Network.msk.ru','/portfolio/network-msk-ru/','network-msk-ru','Интернет-магазин Network.msk.ru','','',1,1,0,5,17,NULL,28,0);
/*!40000 ALTER TABLE `structure_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `va` (`name`),
  KEY `name` (`name`(2))
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Parallax'),(2,'JavaScript'),(3,'CSS3'),(4,'Cloud'),(5,'Linux'),(6,'Google Compute Cloud'),(7,'Server'),(8,'PaaS'),(9,'Google'),(10,'Туториал'),(11,'LAMP'),(12,'Debian'),(13,'Анимация'),(14,'Параллакс');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `templates`
--

DROP TABLE IF EXISTS `templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `sort` int(11) DEFAULT NULL,
  `publish` tinyint(4) DEFAULT NULL,
  `file` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `templates`
--

LOCK TABLES `templates` WRITE;
/*!40000 ALTER TABLE `templates` DISABLE KEYS */;
INSERT INTO `templates` VALUES (1,'Главная страница',6,1,'main.tpl'),(15,'Портфолио',15,1,'portfolio.tpl'),(13,'Текстовая страница',13,1,'text.tpl'),(14,'Блог',14,1,'blog.tpl'),(12,'Контакты',12,1,'contacts.tpl'),(16,'Проекты',16,1,'projects.tpl'),(17,'Универсальный',17,1,'universal.tpl'),(18,'Заказ',18,1,'order.tpl'),(19,'Хостинг',19,1,'hosting.tpl'),(20,'О компании',20,1,'about.tpl'),(21,'Услуги',21,1,'services.tpl'),(22,'Редактор',22,1,'redactor.tpl');
/*!40000 ALTER TABLE `templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `name` tinytext,
  `email` tinytext,
  `password` varchar(32) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `ip` int(10) unsigned NOT NULL DEFAULT '0',
  `last` datetime DEFAULT '2010-01-01 00:00:00',
  `activity` datetime DEFAULT '2010-01-01 00:00:00',
  `group` int(11) DEFAULT NULL,
  `publish` tinyint(4) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','Admin','ruslanchek@gmail.com','709c185541b208588e6755bf7bed6402','aa046048589e823290f36997787c88ba',2990466591,'2015-06-26 16:18:09','2015-06-26 16:18:21',4,1,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `auth_code` tinytext NOT NULL,
  `publish` tinyint(4) NOT NULL,
  `sort` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (4,'Администраторы','',1,4);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-25  5:12:46
