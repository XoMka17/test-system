-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: teachertest
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.16.04.1

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
-- Table structure for table `division`
--

DROP TABLE IF EXISTS `division`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `division` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `division`
--

LOCK TABLES `division` WRITE;
/*!40000 ALTER TABLE `division` DISABLE KEYS */;
INSERT INTO `division` (`id`, `name`) VALUES (1,'test test'),(2,'NDC');
/*!40000 ALTER TABLE `division` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posada`
--

DROP TABLE IF EXISTS `posada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posada`
--

LOCK TABLES `posada` WRITE;
/*!40000 ALTER TABLE `posada` DISABLE KEYS */;
INSERT INTO `posada` (`id`, `name`) VALUES (1,'Na4alnik'),(2,'Simple');
/*!40000 ALTER TABLE `posada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `value` text,
  `answer` tinytext,
  `test_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `test_id` (`test_id`),
  CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`, `title`, `value`, `answer`, `test_id`) VALUES (25,'question_1','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(26,'question_2','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(27,'question_3','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(28,'question_4','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(29,'question_5','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(30,'question_6','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(31,'question_7','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(32,'question_8','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(33,'question_9','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(34,'question_10','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(35,'question_11','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(36,'question_12','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(37,'question_13','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(38,'question_14','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(39,'question_15','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(40,'question_16','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(41,'question_17','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(42,'question_18','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(43,'question_19','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(44,'question_1','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(45,'question_2','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(46,'question_3','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(47,'question_4','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(48,'question_5','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(49,'question_6','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(50,'question_7','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(51,'question_8','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(52,'question_9','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(53,'question_10','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(54,'question_11','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(55,'question_12','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(56,'question_13','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(57,'question_14','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(58,'question_15','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(59,'question_16','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(60,'question_17','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(61,'question_18','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(62,'question_19','a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}','1',1),(72,'123','a:6:{i:0;s:3:\"132\";i:1;s:3:\"123\";i:2;s:3:\"123\";i:3;s:3:\"123\";i:4;s:3:\"123\";i:5;s:3:\"123\";}','1',2),(73,'q1','a:6:{i:0;s:2:\"a1\";i:1;s:2:\"a2\";i:2;s:2:\"a3\";i:3;s:2:\"a4\";i:4;s:2:\"a5\";i:5;s:2:\"a6\";}','4',13),(74,'q2','a:6:{i:0;s:2:\"a1\";i:1;s:2:\"a2\";i:2;s:2:\"a3\";i:3;s:2:\"a4\";i:4;s:2:\"a5\";i:5;s:2:\"a6\";}','4',13),(75,'q1','a:6:{i:0;s:2:\"a1\";i:1;s:2:\"a2\";i:2;s:2:\"a3\";i:3;s:2:\"a4\";i:4;s:2:\"a5\";i:5;s:2:\"a6\";}','1',16),(76,'q2','a:6:{i:0;s:2:\"a1\";i:1;s:2:\"a2\";i:2;s:2:\"a3\";i:3;s:2:\"a4\";i:4;s:2:\"a5\";i:5;s:2:\"a6\";}','1',16),(77,'q3','a:6:{i:0;s:2:\"a1\";i:1;s:2:\"a2\";i:2;s:2:\"a3\";i:3;s:2:\"a4\";i:4;s:2:\"a5\";i:5;s:2:\"a6\";}','1',16),(78,'q4','a:6:{i:0;s:2:\"a1\";i:1;s:2:\"a2\";i:2;s:2:\"a3\";i:3;s:2:\"a4\";i:4;s:2:\"a5\";i:5;s:2:\"a6\";}','1',16),(79,'q1','a:6:{i:0;s:2:\"a1\";i:1;s:2:\"a2\";i:2;s:2:\"a3\";i:3;s:1:\"a\";i:4;s:0:\"\";i:5;s:0:\"\";}','',17),(80,'q1','a:6:{i:0;s:2:\"a1\";i:1;s:2:\"a2\";i:2;s:2:\"a3\";i:3;s:2:\"a4\";i:4;s:2:\"a5\";i:5;s:2:\"a6\";}','1',17),(81,'q2','a:6:{i:0;s:2:\"a1\";i:1;s:2:\"a2\";i:2;s:2:\"a3\";i:3;s:2:\"a4\";i:4;s:2:\"a5\";i:5;s:2:\"a6\";}','1',17),(82,'q3','a:6:{i:0;s:2:\"a1\";i:1;s:2:\"a2\";i:2;s:2:\"a3\";i:3;s:2:\"a4\";i:4;s:2:\"a5\";i:5;s:2:\"a6\";}','1',17),(83,'q4','a:6:{i:0;s:2:\"a1\";i:1;s:2:\"a2\";i:2;s:2:\"a3\";i:3;s:2:\"a4\";i:4;s:2:\"a5\";i:5;s:2:\"a6\";}','1',17);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `division_id` int(3) DEFAULT NULL,
  `posada_id` int(3) DEFAULT NULL,
  `max_score` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` (`id`, `title`, `division_id`, `posada_id`, `max_score`) VALUES (1,'hello world',NULL,NULL,NULL),(2,'hello world',NULL,NULL,NULL),(3,'',NULL,NULL,NULL),(4,'',NULL,NULL,NULL),(9,'',NULL,NULL,NULL),(10,'',NULL,NULL,NULL),(11,'',NULL,NULL,NULL),(12,'',NULL,NULL,NULL),(13,'test 404',NULL,NULL,NULL),(14,'',NULL,NULL,NULL),(15,'',NULL,NULL,NULL),(16,'test 555',NULL,NULL,NULL),(17,'test 556',NULL,NULL,NULL),(18,'test test',NULL,NULL,NULL),(19,'test test',NULL,NULL,NULL);
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_score`
--

DROP TABLE IF EXISTS `user_score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` tinytext,
  `division` tinytext,
  `rang` tinytext,
  `posada` tinytext,
  `score` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_score`
--

LOCK TABLES `user_score` WRITE;
/*!40000 ALTER TABLE `user_score` DISABLE KEYS */;
INSERT INTO `user_score` (`id`, `user`, `division`, `rang`, `posada`, `score`) VALUES (1,'Sasha','NDC','soldat','cadet','a:1:{s:6:\"data_1\";s:8:\"answer_2\";}'),(2,'Кальян','C5 курс','','','a:2:{i:0;a:1:{i:16;d:50;}i:1;a:1:{i:1;d:10;}}'),(3,'user1','C6 курс','','','a:0:{}'),(4,'user2','C6 курс','сол','С55','a:0:{}'),(5,'user3','C8 курс','сол','С55','a:1:{i:1;d:20;}'),(6,'user11','C8 курс','сол','Курсант','a:1:{i:0;a:1:{i:1;d:30;}}'),(7,'user23','C5 курс','сол','Курсант','a:3:{i:0;a:1:{i:2;i:100;}i:1;a:1:{i:1;d:40;}i:2;a:1:{i:1;d:50;}}'),(8,'user54','C5 курс','сол','С55','a:1:{i:0;a:1:{i:1;d:50;}}'),(9,'user100','C6 курс','сол','55','a:2:{i:0;a:1:{i:16;d:50;}i:1;a:1:{i:17;d:60;}}'),(10,'user 211','C5 курс','Солдат','Курсант','a:1:{i:0;a:1:{i:16;d:25;}}'),(11,'user2322','C6 курс','сол','С55','a:1:{i:0;a:1:{i:17;d:20;}}'),(12,'m30yy2ps1we','C7 курс','Sold1213','С55','a:1:{i:0;a:1:{i:16;d:50;}}'),(13,'user232','C6 курс','Sold1213','121','a:1:{i:0;a:1:{i:1;d:30;}}'),(14,'3r242','C5 курс','SOld','f23f23','a:0:{}'),(15,'user23222','C6 курс','SOld','','a:1:{i:0;a:1:{i:2;i:0;}}'),(16,'1','C5 курс','SOld','','a:0:{}');
/*!40000 ALTER TABLE `user_score` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-09 12:21:06
