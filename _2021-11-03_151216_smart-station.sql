-- MySQL dump 10.13  Distrib 8.0.27, for macos11 (x86_64)
--
-- Host: 127.0.0.1    Database: smart-station
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `all_issue_images`
--

DROP TABLE IF EXISTS `all_issue_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_issue_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_id` bigint unsigned DEFAULT NULL,
  `issue_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_price` double DEFAULT NULL,
  `issue_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `all_issue_images_model_id_index` (`model_id`),
  CONSTRAINT `all_issue_images_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `modals` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `all_issue_images`
--

/*!40000 ALTER TABLE `all_issue_images` DISABLE KEYS */;
INSERT INTO `all_issue_images` VALUES (1,1,'Screen / LCD',400,'back camera replacemet','2021-11-03 23:09:20','2021-11-03 23:09:20'),(2,1,'LED',300,'replacemet','2021-11-03 23:09:20','2021-11-03 23:09:20'),(3,1,'camera',200,'back camera replacemet','2021-11-03 23:09:20','2021-11-03 23:09:20'),(4,2,'Battery',100,'battery replacemet','2021-11-03 23:09:20','2021-11-03 23:09:20'),(5,3,'Charging port',200,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(6,4,'Speaker',200,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(7,5,'Front Camera',200,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(8,6,'Rear Camera',200,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(9,7,'Mic Issues',200,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(10,8,'Back glass',200,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(11,9,'Screen / LCD',200,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(12,10,'Battery',200,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(13,11,'Charging port',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(14,12,'Speaker',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(15,13,'Front Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(16,14,'Rear Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(17,15,'Mic Issues',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(18,16,'Back glass',50,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(19,17,'Screen / LCD',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(20,18,'Battery',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(21,19,'Charging port',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(22,20,'Speaker',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(23,21,'Front Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(24,22,'Rear Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(25,23,'Mic Issues',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(26,24,'Back glass',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(27,25,'Screen / LCD',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(28,26,'Battery',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(29,27,'Charging port',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(30,28,'Speaker',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(31,29,'Front Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(32,30,'Rear Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(33,31,'Mic Issues',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(34,32,'Back glass',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(35,33,'Screen / LCD',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(36,34,'Battery',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(37,35,'Charging port',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(38,36,'Speaker',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(39,37,'Front Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(40,38,'Rear Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(41,39,'Mic Issues',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(42,40,'Back glass',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(43,41,'Screen / LCD',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(44,42,'Battery',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(45,43,'Charging port',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(46,44,'Speaker',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(47,45,'Front Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(48,46,'Rear Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(49,47,'Mic Issues',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(50,48,'Back glass',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(51,49,'Screen / LCD',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(52,50,'Battery',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(53,51,'Charging port',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(54,52,'Speaker',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(55,53,'Front Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(56,54,'Rear Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(57,55,'Mic Issues',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(58,56,'Back glass',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(59,57,'Screen / LCD',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(60,58,'Battery',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(61,59,'Charging port',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(62,60,'Speaker',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(63,61,'Front Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(64,62,'Rear Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(65,63,'Mic Issues',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(66,64,'Back glass',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(67,65,'Screen / LCD',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(68,66,'Battery',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(69,67,'Charging port',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(70,68,'Speaker',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(71,69,'Front Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(72,70,'Rear Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(73,71,'Mic Issues',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(74,72,'Back glass',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(75,73,'Screen / LCD',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(76,74,'Battery',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(77,75,'Charging port',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(78,76,'Speaker',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(79,77,'Front Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(80,78,'Rear Camera',100,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20'),(81,79,'Water',390,'fall in water','2021-11-03 23:09:20','2021-11-03 23:09:20'),(82,80,'Battery',180,'replacemet','2021-11-03 23:09:20','2021-11-03 23:09:20'),(83,81,'camera',300,'replacemet','2021-11-03 23:09:20','2021-11-03 23:09:20'),(84,82,'Screen / LCD',600,'screen replacement','2021-11-03 23:09:20','2021-11-03 23:09:20');
/*!40000 ALTER TABLE `all_issue_images` ENABLE KEYS */;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `store_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bookings_store_id_index` (`store_id`),
  CONSTRAINT `bookings_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,1,'dvsvs','dfs@dsvsddv','23423',NULL,'Apple','Apple','battery1','2021-08-17 04:58:40','2021-08-17 04:58:40'),(2,1,'dsvdv','sds@safda','23423432',NULL,'Apple','iPhone 12 Pro Max','Screen / LCD,Battery','2021-08-17 15:06:42','2021-08-17 15:06:42'),(3,1,'dsvdv','sds@safda','23423432',NULL,'Apple','iPhone 12 Pro Max','Screen / LCD,Battery','2021-08-17 15:08:44','2021-08-17 15:08:44'),(4,1,'sdfsdf','sdfds@sdfds','345345',NULL,'Apple','iPhone 12','Charging port','2021-08-17 15:13:44','2021-08-17 15:13:44'),(5,NULL,'Ghh','vahe@gsbsbs','427272',NULL,'Apple','iPhone 12 Pro Max','Screen / LCD','2021-08-17 15:21:56','2021-08-17 15:21:56');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserPhone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserMessage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Ali','+11231231234','alirazaasad498@gmail.com','TEST CITY','dfdsfdf','2021-04-20 02:24:22','2021-04-20 02:24:22'),(2,'Ali','+11231231234','alirazaasad498@gmail.com','TEST CITY','123','2021-04-20 15:37:55','2021-04-20 15:37:55'),(3,'Ali','+11231231234','alirazaasad498@gmail.com','TEST CITY','123','2021-04-20 15:39:16','2021-04-20 15:39:16'),(4,'Ali','+11231231234','alirazaasad498@gmail.com','TEST CITY','fsddfs','2021-04-21 16:39:32','2021-04-21 16:39:32'),(5,'Ali','+11231231234','alirazaasad498@gmail.com','TEST CITY','fds','2021-08-16 12:41:22','2021-08-16 12:41:22');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

--
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `devices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `DeviceName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `DeviceDescription` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devices`
--

/*!40000 ALTER TABLE `devices` DISABLE KEYS */;
INSERT INTO `devices` VALUES (1,'Apple','2021-11-03 23:09:20','2021-11-03 23:09:20',''),(2,'Xiaomi','2021-11-03 23:09:20','2021-11-03 23:09:20',''),(3,'samsung','2021-11-03 23:09:20','2021-11-03 23:09:20','');
/*!40000 ALTER TABLE `devices` ENABLE KEYS */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

--
-- Table structure for table `footer_contents`
--

DROP TABLE IF EXISTS `footer_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `footer_contents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `LogoDescription` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footer_contents`
--

/*!40000 ALTER TABLE `footer_contents` DISABLE KEYS */;
INSERT INTO `footer_contents` VALUES (1,'ss-footer-logo.png','<p>dsds</p>','alirazaasad498@gmail.com','+11231231234','123 TEST ST','<p>dsds</p>','2021-04-19 07:14:17','2021-04-20 14:17:31');
/*!40000 ALTER TABLE `footer_contents` ENABLE KEYS */;

--
-- Table structure for table `home_sliders`
--

DROP TABLE IF EXISTS `home_sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `home_sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_sliders`
--

/*!40000 ALTER TABLE `home_sliders` DISABLE KEYS */;
INSERT INTO `home_sliders` VALUES (1,'Book your repair in just a few steps!','select your model above','http://127.0.0.1:8000/Apple_Device','banner_1 SS.jpg','2021-05-10 21:12:37','2021-05-10 21:12:37'),(2,'iPhone XS Case Cover','home page','http://127.0.0.1:8000/Apple_Device','banner_2 SS.jpg','2021-05-10 21:13:37','2021-06-23 12:34:06'),(3,'iphone','select your model above','http://127.0.0.1:8000/Apple_Device','banner_3 SS.jpg','2021-05-10 21:14:36','2021-05-10 21:14:36');
/*!40000 ALTER TABLE `home_sliders` ENABLE KEYS */;

--
-- Table structure for table `issue_images`
--

DROP TABLE IF EXISTS `issue_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `issue_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issue_images`
--

/*!40000 ALTER TABLE `issue_images` DISABLE KEYS */;
INSERT INTO `issue_images` VALUES (1,'6 month warrnty.png','2021-05-10 21:34:31','2021-05-10 21:34:31'),(2,'get price on chat.png','2021-05-10 21:34:46','2021-05-10 21:34:46'),(3,'ready in 15 30 min.png','2021-05-10 21:35:07','2021-05-10 21:35:07'),(4,'pick and drop service.png','2021-05-10 21:35:21','2021-05-10 21:35:21');
/*!40000 ALTER TABLE `issue_images` ENABLE KEYS */;

--
-- Table structure for table `issues`
--

DROP TABLE IF EXISTS `issues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `issues` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_id` bigint unsigned NOT NULL,
  `IssueDescription` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issues`
--

/*!40000 ALTER TABLE `issues` DISABLE KEYS */;
/*!40000 ALTER TABLE `issues` ENABLE KEYS */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_03_16_115824_create_services_table',1),(5,'2021_03_22_064016_create_devices_table',1),(6,'2021_03_22_122159_create_modals_table',1),(7,'2021_03_24_071849_create_series_table',1),(8,'2021_03_24_093135_create_home_sliders_table',1),(9,'2021_03_25_103505_create_issues_table',1),(10,'2021_04_03_060155_create_repair_services_table',1),(11,'2021_04_09_055951_create_issue_images_table',1),(12,'2021_04_10_174923_create_all_issue_images_table',1),(13,'2021_04_17_023640_add_column_to_devices_table',1),(14,'2021_04_17_040536_add_column_to_series_table',2),(15,'2021_04_19_040611_create_page_contents_table',3),(16,'2021_04_19_114102_create_footer_contents_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

--
-- Table structure for table `modals`
--

DROP TABLE IF EXISTS `modals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ModelName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_id` bigint unsigned NOT NULL,
  `series_id` bigint unsigned NOT NULL,
  `ModelDescription` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modals`
--

/*!40000 ALTER TABLE `modals` DISABLE KEYS */;
INSERT INTO `modals` VALUES (1,'iPad Pro 12.9 2018',1,1,'','iPad Pro 12.9 4th Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(2,'iPad Pro 12.9 2nd Gen',1,1,'','iPad Pro 12.9 2nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(3,'iPad Pro 12.9 1st Gen',1,1,'','iPad Pro 12.9 3nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(4,'iPad Pro 11 2018',1,1,'','iPad Pro 12.9 4nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(5,'iPad Pro 10.5',1,1,'','iPad Pro 12.9 5nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(6,'iPad Pro 9.7',1,1,'','iPad Pro 12.9 6nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(7,'iPad Air 3 2019',1,1,'','iPad Pro 12.9 7nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(8,'iPad Air 2',1,1,'','iPad Pro 12.9 8nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(9,'iPad Air 1',1,1,'','iPad Pro 12.9 9nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(10,'iPad Mini 5 2019',1,1,'','iPad Pro 12.9 10nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(11,'iPad Mini 4',1,1,'','iPad Pro 12.9 11nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(12,'iPad Mini 3',1,1,'','iPad Pro 12.9 12nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(13,'iPad Mini 2',1,1,'','iPad Pro 12.9 13nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(14,'iPad Mini 1',1,1,'','iPad Pro 12.9 14nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(15,'iPad 7 2019 10.2',1,1,'','iPad Pro 12.9 15nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(16,'iPad 6 2018 9.7',1,1,'','iPad Pro 12.9 16nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(17,'iPad 5 2017 9.7',1,1,'','iPad Pro 12.9 17nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(18,'iPad 444',1,1,'','iPad Pro 12.9 18nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(19,'iPad 3',1,1,'','iPad Pro 12.9 19nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(20,'iPad 2',1,1,'','iPad Pro 12.9 20nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(21,'iPad 1',1,1,'','iPad Pro 12.9 21nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(22,'iPhone 12 Pro Max',1,2,'','iPad Pro 12.9 22nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(23,'iPhone 12 Pro',1,2,'','iPad Pro 12.9 23nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(24,'iPhone 12',1,2,'','iPad Pro 12.9 24nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(25,'iPhone 11 Pro Max',1,2,'','iPad Pro 12.9 25nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(26,'iPhone 11 Pro',1,2,'','iPad Pro 12.9 26nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(27,'iPhone 11',1,2,'','iPad Pro 12.9 27nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(28,'iPhone XS Max',1,2,'','iPad Pro 12.9 28nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(29,'iPhone XS',1,2,'','iPad Pro 12.9 29nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(30,'iPhone XR',1,2,'','iPad Pro 12.9 30nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(31,'iPhone X',1,2,'','iPad Pro 12.9 31nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(32,'iPhone 8 Plus',1,2,'','iPad Pro 12.9 32nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(33,'iPhone 8',1,2,'','iPad Pro 12.9 33nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(34,'iPhone 7 Plus',1,2,'','iPad Pro 12.9 34nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(35,'iPhone 7',1,2,'','iPad Pro 12.9 35nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(36,'iPhone 6S Plus',1,2,'','iPad Pro 12.9 36nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(37,'iPhone 6S',1,2,'','iPad Pro 12.9 37nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(38,'iPhone 6 Plus',1,2,'','iPad Pro 12.9 38nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(39,'iPhone 6',1,2,'','iPad Pro 12.9 39nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(40,'iPhone SE',1,2,'','iPad Pro 12.9 40nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(41,'iPhone 5C',1,2,'','iPad Pro 12.9 41nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(42,'iPhone 5S',1,2,'','iPad Pro 12.9 42nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(43,'iPhone 5',1,2,'','iPad Pro 12.9 43nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(44,'iPhone 4S',1,2,'','iPad Pro 12.9 44nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(45,'iPhone 4',1,2,'','iPad Pro 12.9 45nd Gen.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(46,'Xiaomi Mi 10 Pro',2,3,'','Xiaomi Mi 10 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(47,'Xiaomi Mi 10',2,3,'','Xiaomi Mi 11 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(48,'Xiaomi Mi A3',2,3,'','Xiaomi Mi 12 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(49,'Xiaomi Mi 9 SE',2,3,'','Xiaomi Mi 13 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(50,'Xiaomi Mi 9T',2,3,'','Xiaomi Mi 14 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(51,'Xiaomi Mi 9 Pro',2,3,'','Xiaomi Mi 15 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(52,'Xiaomi Mi 9 Lite',2,3,'','Xiaomi Mi 16 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(53,'Xiaomi Mi 9',2,3,'','Xiaomi Mi 17 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(54,'Xiaomi Mi 8 SE',2,3,'','Xiaomi Mi 18 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(55,'Xiaomi MI 8 Lite',2,3,'','Xiaomi Mi 19 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(56,'Xiaomi Mi 8',2,3,'','Xiaomi Mi 20 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(57,'Xiaomi Mi 6',2,3,'','Xiaomi Mi 21 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(58,'Xiaomi Mi 5S Plus',2,3,'','Xiaomi Mi 22 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(59,'Xiaomi Mi 5s',2,3,'','Xiaomi Mi 23 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(60,'Xiaomi Mi 5c',2,3,'','Xiaomi Mi 24 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(61,'Xiaomi Mi 5',2,3,'','Xiaomi Mi 25 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(62,'Xiaomi Mi 4S',2,3,'','Xiaomi Mi 26 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(63,'Xiaomi Mi 4i',2,3,'','Xiaomi Mi 27 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(64,'Xiaomi Mi 4C',2,3,'','Xiaomi Mi 28 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(65,'Xiaomi Mi 4',2,3,'','Xiaomi Mi 29 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(66,'Xiaomi Mi 3',2,3,'','Xiaomi Mi 30 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(67,'Xiaomi Mi 2A',2,3,'','Xiaomi Mi 31 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(68,'Xiaomi Mi A2 Lite',2,3,'','Xiaomi Mi 32 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(69,'Xiaomi Mi A2',2,3,'','Xiaomi Mi 33 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(70,'Xiaomi Mi A1',2,3,'','Xiaomi Mi 34 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(71,'Xiaomi Mi Play',2,3,'','Xiaomi Mi 35 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(72,'Xiaomi Mi Max 3',2,3,'','Xiaomi Mi 36 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(73,'Xiaomi Mi Max 2',2,3,'','Xiaomi Mi 37 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(74,'Xiaomi Mi Max',2,3,'','Xiaomi Mi 38 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(75,'Xiaomi Mi Mix 3',2,3,'','Xiaomi Mi 39 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(76,'Xiaomi MI Mix 2S',2,3,'','Xiaomi Mi 40 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(77,'Xiaomi Mi Mix 2',2,3,'','Xiaomi Mi 41 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(78,'Xiaomi Mi Mix',2,3,'','Xiaomi Mi 42 Pro.png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(79,'S1 2018',3,4,'','2019 (1).png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(80,'Galaxy S2 2018',3,5,'','2019 (1).png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(81,'Galaxy S4 2020',3,6,'','2019 (1).png','2021-11-03 23:09:20','2021-11-03 23:09:20'),(82,'S1 2021',3,7,'','2019 (1).png','2021-11-03 23:09:20','2021-11-03 23:09:20');
/*!40000 ALTER TABLE `modals` ENABLE KEYS */;

--
-- Table structure for table `page_contents`
--

DROP TABLE IF EXISTS `page_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `page_contents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_contents`
--

/*!40000 ALTER TABLE `page_contents` DISABLE KEYS */;
INSERT INTO `page_contents` VALUES (1,'<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline; text-size-adjust: 100%; text-align: center;\"><font color=\"#666666\" face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">Here at Mobile Repair Shop, we understand how much you value your electronic devices and that accidents do happen. Out of passion and experience, our brand was built to help you get the most out of your personal and professional devices. Over the years, we have continued to show our unwavering commitment to quality customer care. Whether your device has an iPhone Repair Services cracked screen, isn’t holding a charge or is simply dead, you can always count on us. This is because we have the parts, tools, knowledge, and experience for fast and high-quality repairs.</span></font></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline; text-size-adjust: 100%; text-align: center;\"><font color=\"#666666\" face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">While there are several repair shops in the region, our reputation has set us apart from the crowd. In fact, our previous clients have found us to be reliable, trustworthy, and dependable. Even DIY is never an option for them anymore because as much as it looks cheaper, it’s never so in the long run and you also risk inflicting further damage to your precious device. If you are looking for the best mobile repair services do not look further than cell phone repair shops near me.</span></font></p>','2021-04-18 23:39:52','2021-04-19 06:35:14');
/*!40000 ALTER TABLE `page_contents` ENABLE KEYS */;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

--
-- Table structure for table `repair_services`
--

DROP TABLE IF EXISTS `repair_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `repair_services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ServiceName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ServiceDetail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repair_services`
--

/*!40000 ALTER TABLE `repair_services` DISABLE KEYS */;
INSERT INTO `repair_services` VALUES (2,'Devices Repairs','<p>200k+</p>','20-01.png','2021-05-10 21:19:52','2021-07-12 10:17:39'),(3,'6 MONTHS WARRANTY','<p>6 MONTHS WARRANTY<br></p>','warrenty.png','2021-05-10 21:20:33','2021-05-10 21:20:33'),(4,'EXPERT STAFF','<p>EXPERT STAFF<br></p>','expert staff.png','2021-05-10 21:21:05','2021-05-10 21:21:05');
/*!40000 ALTER TABLE `repair_services` ENABLE KEYS */;

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `series` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `device_id` bigint unsigned NOT NULL,
  `SeriesName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `SeriesDescription` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `series`
--

/*!40000 ALTER TABLE `series` DISABLE KEYS */;
INSERT INTO `series` VALUES (1,1,'iPad','Asset 2 (1).png','2021-11-03 23:09:20','2021-11-03 23:09:20',''),(2,1,'iPhone','Asset 6-8.png','2021-11-03 23:09:20','2021-11-03 23:09:20',''),(3,2,'Mi Series','Asus Transformer Prime.png','2021-11-03 23:09:20','2021-11-03 23:09:20',''),(4,3,'s1','Galaxy Tab A 7.0 T280 T285.png','2021-11-03 23:09:20','2021-11-03 23:09:20',''),(5,3,'Galaxy','Galaxy Tab A 7.0 T280 T285.png','2021-11-03 23:09:20','2021-11-03 23:09:20',''),(6,3,'S4','Galaxy Tab A 7.0 T280 T285.png','2021-11-03 23:09:20','2021-11-03 23:09:20',''),(7,3,'S5','Galaxy Tab A 7.0 T280 T285.png','2021-11-03 23:09:20','2021-11-03 23:09:20','');
/*!40000 ALTER TABLE `series` ENABLE KEYS */;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ServiceTitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `ServiceDescription` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (2,'Broken',_binary 'device broken.jpg','<p>Broken</p>','2021-05-10 21:16:33','2021-05-10 21:16:33'),(3,'PickUp',_binary 'device pickup.jpg','<p>Pick up</p>','2021-05-10 21:16:52','2021-05-10 21:16:52'),(4,'Fast Return',_binary 'fast return.jpg','<p>Return</p>','2021-05-10 21:17:18','2021-05-10 21:17:18'),(5,'Quick Fix',_binary 'quick fix.jpg','<p>Fix</p>','2021-05-10 21:17:38','2021-05-10 21:17:38');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

--
-- Table structure for table `stores`
--

DROP TABLE IF EXISTS `stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_id` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stores`
--

/*!40000 ALTER TABLE `stores` DISABLE KEYS */;
INSERT INTO `stores` VALUES (1,'alirazaasad498@gmail.com','9AM to 5PM','82 Somerville Hampton Park,  VIC 3976','My Shop','03349768408','-38.053512112017465','145.2724376859658',1,'2021-07-26 17:55:19','2021-07-26 17:55:19'),(2,'andy@elpmis.com.au','10am-6pm, Sat 10am-5pm','3 Lawrence St, blackburn South 3130','MMPR blackburn','10249124','-37.832064172869224','145.1489664248525',2,'2021-07-27 10:43:42','2021-07-27 10:47:30'),(3,'phone@gmail.com','10AM to 6PM','Dandenong Victoria 3175 Australia','Phone Repairs','435356435','-37.592827946066976','144.94500246093006',3,'2021-08-16 10:59:40','2021-08-24 13:38:03'),(4,'khalidACreapair@gamil.com','10AM to 5PM','Cheltenham Rd Building','AC Repairing','432567843','-37.745758064527415','144.74471521527622',4,'2021-08-16 11:04:16','2021-08-24 13:49:11'),(5,'repairingshop@gmail.com','11AM to 6PM','Dandenong VIC 3175, Australia','Repair your Mobile Battery','4257953432','-37.76991559853822','144.77355432664623',5,'2021-08-16 11:07:14','2021-08-24 13:49:39'),(6,'hafeez@yahoo.com','9AM to 6PM','4 Greenland Pl, Dandenong VIC 3175, Australia','Hafeez Center for all electronic devices','32457787642','-37.693078761803626','145.02174879762308',6,'2021-08-16 11:11:55','2021-08-24 13:50:19'),(7,'bicyclereapirer@hotmail.com','9AM to 6PM','47 Foster St, Dandenong VIC 3175, Australia','Bicycle repairer','03459876522','-37.737884479159604','144.95029497205078',7,'2021-08-16 11:14:37','2021-08-24 13:50:44'),(8,'carservices@hotmail.com','10AM to 5PM','Shell Coles Express Service Station 51-65 Cheltenham Road Corner of, Carroll La, Dandenong VIC 3175, Australia','Car service','0321456784','-37.75924381589774','145.34241962569735',8,'2021-08-16 11:20:10','2021-08-24 13:51:10'),(9,'maintainer@hotmail.com','8AM to 5PM','1 Hammond Rd, Dandenong VIC 3175, Australia','Vehicle Maintainer','0345678922','-37.808140354008785','145.21781112480357',9,'2021-08-16 11:23:52','2021-08-24 13:51:57'),(10,'tyrerepairer@gamil.com','8AM to 5PM','25 Hammond Rd, Dandenong VIC 3175, Australia','Tyre Repairer','042-456663214','-37.93409373018997','145.0120692225573',10,'2021-08-16 11:28:07','2021-08-24 13:53:36');
/*!40000 ALTER TABLE `stores` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'sadia','chsadiamushtaq@gmail.com',NULL,'$2y$10$WTs9gHn.r9Va6yP8kHwYCOi138rYARMLjcbvFX6pSe5wJCmTQUHvO',NULL,'2021-08-16 10:53:04','2021-08-16 10:53:04'),(2,'Ali Raza Asad','alirazaasad498@gmail.com',NULL,'$2y$10$EYyQg4Jss84.ahhejI3uH.SkgFhLvC9KrwbmpCI5SuvcK6kD4qUAq',NULL,'2021-08-16 13:23:27','2021-08-16 13:23:27'),(3,'admin','admin@admin.com',NULL,'$2y$10$uvVirJXul93EHQ8kJCZosuXD5go0dpwVPwu9xUqmv3QBvDs5ZdVXi',NULL,'2021-08-17 12:22:32','2021-08-17 12:22:32');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-03 15:12:28
