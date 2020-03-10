-- MySQL dump 10.13  Distrib 5.7.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: php2oef11
-- ------------------------------------------------------
-- Server version	5.7.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES UTF8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `img_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `img_filename` varchar(512) DEFAULT NULL,
  `img_title` varchar(512) DEFAULT NULL,
  `img_width` mediumint(9) DEFAULT NULL,
  `img_height` mediumint(9) DEFAULT NULL,
  `img_type` varchar(512) DEFAULT NULL,
  `img_country` varchar(512) DEFAULT NULL,
  `img_continent` varchar(512) DEFAULT NULL,
  `img_family` varchar(512) DEFAULT NULL,
  `img_animal` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'london_2423609b','Big Ben',2330,4400,'City','United Kingdom','Europe',NULL,NULL),(2,'paris','Eiffeltoren',3000,4000,'City','France','Europe',NULL,NULL),(3,'berlin','De Muur',5600,1400,'City','Germany','Europe',NULL,NULL),(4,'yuki','Kat',2341,3265,'Nature',NULL,NULL,'Felidae','Cat'),(5,'kyoto','Kyoto',1245,2236,'City','Japan','Asia',NULL,NULL),(6,'mees','Eurasian Blue Tit',4512,3365,NULL,NULL,NULL,'Paridae','Bird');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_user`
--

DROP TABLE IF EXISTS `log_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_user` (
  `log_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `log_usr_id` mediumint(9) DEFAULT NULL,
  `log_session_id` varchar(512) DEFAULT NULL,
  `log_in` datetime DEFAULT NULL,
  `log_out` datetime DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_user`
--

LOCK TABLES `log_user` WRITE;
/*!40000 ALTER TABLE `log_user` DISABLE KEYS */;
INSERT INTO `log_user` VALUES (1,26,'ba10329f9859c2b18e9a2105418dd720','2020-01-06 22:18:46','2020-01-06 22:19:08'),(2,26,'37675d7ae3436c36b81001b3cebaa498','2020-01-06 22:19:25','2020-01-06 22:28:07'),(3,26,'8ee2dfc38ed33bba60b60f797ca9b41e','2020-01-06 22:28:18',NULL),(4,27,'5e4rib9l4juokifg0np9tothnr','2020-02-11 09:56:33',NULL),(5,27,'to5h5airl8ea9rs5fn1q8q6iur','2020-02-26 10:34:53','2020-02-26 16:03:24'),(6,27,'slqdae0fip13rq9b464seat60m','2020-02-28 11:23:44','2020-02-28 14:44:31'),(7,27,'ulgkcil8dq20rgbv9rfhu26lve','2020-02-28 14:44:44','2020-02-28 14:50:32'),(8,28,'fnbhjgs7f522m6hhomvrnv6eu1','2020-02-28 14:51:15',NULL),(9,27,'66uevoc85ic6p66h4851d8sumq','2020-02-29 10:47:09',NULL),(10,27,'o3mbgfk9hvgf0j08o6j6j5j7p4','2020-03-01 08:57:56',NULL),(11,27,'q71cos9je7kf02q008brogt4vk','2020-03-10 11:41:30',NULL);
/*!40000 ALTER TABLE `log_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `men_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `men_caption` varchar(127) DEFAULT NULL,
  `men_destination` varchar(512) DEFAULT NULL,
  `men_order` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`men_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Home','steden.php',1),(2,'Over ons','over_ons.php',2),(3,'Vacatures','vacatures.php',3),(4,'Contact','contact.php',4),(5,'Afmelden','lib/logout.php',20),(6,'Weekoverzicht','week.php',6),(7,'File Upload','file_upload.php',7),(8,'Mijn historiek','historiek.php',8),(9,'Download taken','download_taken.php',9),(10,'Mijn profiel','profiel.php',10);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persoon`
--

DROP TABLE IF EXISTS `persoon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persoon` (
  `per_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `per_voornaam` varchar(512) DEFAULT NULL,
  `per_naam` varchar(512) DEFAULT NULL,
  `per_email` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`per_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persoon`
--

LOCK TABLES `persoon` WRITE;
/*!40000 ALTER TABLE `persoon` DISABLE KEYS */;
INSERT INTO `persoon` VALUES (2,'steven','de ryck','steven@inform.be'),(6,'Jan','Jambon','jambon@vlregering.be'),(7,'Steven','D&#039;Hondt','steven@syntra.be');
/*!40000 ALTER TABLE `persoon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taak`
--

DROP TABLE IF EXISTS `taak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taak` (
  `taa_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `taa_datum` date DEFAULT NULL,
  `taa_omschr` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`taa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taak`
--

LOCK TABLES `taak` WRITE;
/*!40000 ALTER TABLE `taak` DISABLE KEYS */;
INSERT INTO `taak` VALUES (1,'2019-12-10','Dag 9 - PHP1'),(2,'2019-12-12','Dag 10 - PHP1'),(3,'2019-12-10','Barbecue');
/*!40000 ALTER TABLE `taak` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `usr_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `usr_voornaam` varchar(512) DEFAULT NULL,
  `usr_naam` varchar(512) DEFAULT NULL,
  `usr_login` varchar(512) DEFAULT NULL,
  `usr_paswd` varchar(512) DEFAULT NULL,
  `usr_straat` varchar(512) DEFAULT NULL,
  `usr_huisnr` varchar(30) DEFAULT NULL,
  `usr_busnr` varchar(30) DEFAULT NULL,
  `usr_postcode` varchar(10) DEFAULT NULL,
  `usr_gemeente` varchar(512) DEFAULT NULL,
  `usr_telefoon` varchar(30) DEFAULT NULL,
  `usr_pasfoto` varchar(512) DEFAULT NULL,
  `usr_vz_eid` varchar(512) DEFAULT NULL,
  `usr_az_eid` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (27,'Hannelore','Lamotte','H@g.c','$2y$10$8/2XVVXE6.ZBnFKDpXaqvefNdqoThNHeABEO2Lq/Ub//mkBZdlqNq','Fon','1','8','3','L','0',NULL,NULL,NULL),(28,'a','c','i@j.k','$2y$10$/RBSmfzf4M1hFQN8vSa.V.Cc.5Je6vdQpgbkoHA9DB/G7eV6.h2da','c','d','e','f','g','h',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-10 15:55:44
