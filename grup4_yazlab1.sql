-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: otobusbiletuygulama
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bilet`
--

DROP TABLE IF EXISTS `bilet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bilet` (
  `bilet_id` int NOT NULL AUTO_INCREMENT,
  `musteri_id` int NOT NULL,
  `sefer_id` int NOT NULL,
  `koltuk_numara` int NOT NULL,
  `bilet_alimtarihi` varchar(45) NOT NULL DEFAULT ' CURRENT_TIMESTAMP',
  `yolcu_ad` varchar(45) NOT NULL,
  `yolcu_soyad` varchar(45) NOT NULL,
  `cinsiyet` varchar(10) NOT NULL,
  PRIMARY KEY (`bilet_id`),
  KEY `musteri_id_idx` (`musteri_id`),
  KEY `sefer_id_idx` (`sefer_id`),
  CONSTRAINT `musteri_id` FOREIGN KEY (`musteri_id`) REFERENCES `kullanici` (`kullanici_id`),
  CONSTRAINT `sefer_id` FOREIGN KEY (`sefer_id`) REFERENCES `sefer` (`sefer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bilet`
--

LOCK TABLES `bilet` WRITE;
/*!40000 ALTER TABLE `bilet` DISABLE KEYS */;
/*!40000 ALTER TABLE `bilet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `durum`
--

DROP TABLE IF EXISTS `durum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `durum` (
  `otobus_id` int NOT NULL,
  `koltuk_id` int NOT NULL,
  `durum` varchar(5) NOT NULL,
  `koltuk_cinsiyet` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`otobus_id`,`koltuk_id`),
  CONSTRAINT `otobus_id` FOREIGN KEY (`otobus_id`) REFERENCES `otobus` (`otobus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `durum`
--

LOCK TABLES `durum` WRITE;
/*!40000 ALTER TABLE `durum` DISABLE KEYS */;
INSERT INTO `durum` VALUES (1,1,'Boş',NULL),(1,2,'Boş',NULL),(1,3,'Boş',NULL),(1,4,'Boş',NULL),(1,5,'Boş',NULL),(1,6,'Boş',NULL),(1,7,'Boş',NULL),(1,8,'Boş',NULL),(1,9,'Boş',NULL),(1,10,'Boş',NULL),(1,11,'Boş',NULL),(1,12,'Boş',NULL),(1,13,'Boş',NULL),(1,14,'Boş',NULL),(1,15,'Boş',NULL),(1,16,'Boş',NULL),(1,17,'Boş',NULL),(1,18,'Boş',NULL),(1,19,'Boş',NULL),(1,20,'Boş',NULL),(1,21,'Boş',NULL),(1,22,'Boş',NULL),(1,23,'Boş',NULL),(1,24,'Boş',NULL),(2,1,'Boş',NULL),(2,2,'Boş',NULL),(2,3,'Boş',NULL),(2,4,'Boş',NULL),(2,5,'Boş',NULL),(2,6,'Boş',NULL),(2,7,'Boş',NULL),(2,8,'Boş',NULL),(2,9,'Boş',NULL),(2,10,'Boş',NULL),(2,11,'Boş',NULL),(2,12,'Boş',NULL),(2,13,'Boş',NULL),(2,14,'Boş',NULL),(2,15,'Boş',NULL),(2,16,'Boş',NULL),(2,17,'Boş',NULL),(2,18,'Boş',NULL),(2,19,'Boş',NULL),(2,20,'Boş',NULL),(2,21,'Boş',NULL),(2,22,'Boş',NULL),(2,23,'Boş',NULL),(2,24,'Boş',NULL),(3,1,'Boş',NULL),(3,2,'Boş',NULL),(3,3,'Boş',NULL),(3,4,'Boş',NULL),(3,5,'Boş',NULL),(3,6,'Boş',NULL),(3,7,'Boş',NULL),(3,8,'Boş',NULL),(3,9,'Boş',NULL),(3,10,'Boş',NULL),(3,11,'Boş',NULL),(3,12,'Boş',NULL),(3,13,'Boş',NULL),(3,14,'Boş',NULL),(3,15,'Boş',NULL),(3,16,'Boş',NULL),(3,17,'Boş',NULL),(3,18,'Boş',NULL),(3,19,'Boş',NULL),(3,20,'Boş',NULL),(3,21,'Boş',NULL),(3,22,'Boş',NULL),(3,23,'Boş',NULL),(3,24,'Boş',NULL),(4,1,'Boş',NULL),(4,2,'Boş',NULL),(4,3,'Boş',NULL),(4,4,'Boş',NULL),(4,5,'Boş',NULL),(4,6,'Boş',NULL),(4,7,'Boş',NULL),(4,8,'Boş',NULL),(4,9,'Boş',NULL),(4,10,'Boş',NULL),(4,11,'Boş',NULL),(4,12,'Boş',NULL),(4,13,'Boş',NULL),(4,14,'Boş',NULL),(4,15,'Boş',NULL),(4,16,'Boş',NULL),(4,17,'Boş',NULL),(4,18,'Boş',NULL),(4,19,'Boş',NULL),(4,20,'Boş',NULL),(4,21,'Boş',NULL),(4,22,'Boş',NULL),(4,23,'Boş',NULL),(4,24,'Boş',NULL),(5,1,'Boş',NULL),(5,2,'Boş',NULL),(5,3,'Boş',NULL),(5,4,'Boş',NULL),(5,5,'Boş',NULL),(5,6,'Boş',NULL),(5,7,'Boş',NULL),(5,8,'Boş',NULL),(5,9,'Boş',NULL),(5,10,'Boş',NULL),(5,11,'Boş',NULL),(5,12,'Boş',NULL),(5,13,'Boş',NULL),(5,14,'Boş',NULL),(5,15,'Boş',NULL),(5,16,'Boş',NULL),(5,17,'Boş',NULL),(5,18,'Boş',NULL),(5,19,'Boş',NULL),(5,20,'Boş',NULL),(5,21,'Boş',NULL),(5,22,'Boş',NULL),(5,23,'Boş',NULL),(5,24,'Boş',NULL),(6,1,'Boş',NULL),(6,2,'Boş',NULL),(6,3,'Boş',NULL),(6,4,'Boş',NULL),(6,5,'Boş',NULL),(6,6,'Boş',NULL),(6,7,'Boş',NULL),(6,8,'Boş',NULL),(6,9,'Boş',NULL),(6,10,'Boş',NULL),(6,11,'Boş',NULL),(6,12,'Boş',NULL),(6,13,'Boş',NULL),(6,14,'Boş',NULL),(6,15,'Boş',NULL),(6,16,'Boş',NULL),(6,17,'Boş',NULL),(6,18,'Boş',NULL),(6,19,'Boş',NULL),(6,20,'Boş',NULL),(6,21,'Boş',NULL),(6,22,'Boş',NULL),(6,23,'Boş',NULL),(6,24,'Boş',NULL),(7,1,'Boş',NULL),(7,2,'Boş',NULL),(7,3,'Boş',NULL),(7,4,'Boş',NULL),(7,5,'Boş',NULL),(7,6,'Boş',NULL),(7,7,'Boş',NULL),(7,8,'Boş',NULL),(7,9,'Boş',NULL),(7,10,'Boş',NULL),(7,11,'Boş',NULL),(7,12,'Boş',NULL),(7,13,'Boş',NULL),(7,14,'Boş',NULL),(7,15,'Boş',NULL),(7,16,'Boş',NULL),(7,17,'Boş',NULL),(7,18,'Boş',NULL),(7,19,'Boş',NULL),(7,20,'Boş',NULL),(7,21,'Boş',NULL),(7,22,'Boş',NULL),(7,23,'Boş',NULL),(7,24,'Boş',NULL),(8,1,'Boş',NULL),(8,2,'Boş',NULL),(8,3,'Boş',NULL),(8,4,'Boş',NULL),(8,5,'Boş',NULL),(8,6,'Boş',NULL),(8,7,'Boş',NULL),(8,8,'Boş',NULL),(8,9,'Boş',NULL),(8,10,'Boş',NULL),(8,11,'Boş',NULL),(8,12,'Boş',NULL),(8,13,'Boş',NULL),(8,14,'Boş',NULL),(8,15,'Boş',NULL),(8,16,'Boş',NULL),(8,17,'Boş',NULL),(8,18,'Boş',NULL),(8,19,'Boş',NULL),(8,20,'Boş',NULL),(8,21,'Boş',NULL),(8,22,'Boş',NULL),(8,23,'Boş',NULL),(8,24,'Boş',NULL),(9,1,'Boş',NULL),(9,2,'Boş',NULL),(9,3,'Boş',NULL),(9,4,'Boş',NULL),(9,5,'Boş',NULL),(9,6,'Boş',NULL),(9,7,'Boş',NULL),(9,8,'Boş',NULL),(9,9,'Boş',NULL),(9,10,'Boş',NULL),(9,11,'Boş',NULL),(9,12,'Boş',NULL),(9,13,'Boş',NULL),(9,14,'Boş',NULL),(9,15,'Boş',NULL),(9,16,'Boş',NULL),(9,17,'Boş',NULL),(9,18,'Boş',NULL),(9,19,'Boş',NULL),(9,20,'Boş',NULL),(9,21,'Boş',NULL),(9,22,'Boş',NULL),(9,23,'Boş',NULL),(9,24,'Boş',NULL),(10,1,'Boş',NULL),(10,2,'Boş',NULL),(10,3,'Boş',NULL),(10,4,'Boş',NULL),(10,5,'Boş',NULL),(10,6,'Boş',NULL),(10,7,'Boş',NULL),(10,8,'Boş',NULL),(10,9,'Boş',NULL),(10,10,'Boş',NULL),(10,11,'Boş',NULL),(10,12,'Boş',NULL),(10,13,'Boş',NULL),(10,14,'Boş',NULL),(10,15,'Boş',NULL),(10,16,'Boş',NULL),(10,17,'Boş',NULL),(10,18,'Boş',NULL),(10,19,'Boş',NULL),(10,20,'Boş',NULL),(10,21,'Boş',NULL),(10,22,'Boş',NULL),(10,23,'Boş',NULL),(10,24,'Boş',NULL),(11,1,'Boş',NULL),(11,2,'Boş',NULL),(11,3,'Boş',NULL),(11,4,'Boş',NULL),(11,5,'Boş',NULL),(11,6,'Boş',NULL),(11,7,'Boş',NULL),(11,8,'Boş',NULL),(11,9,'Boş',NULL),(11,10,'Boş',NULL),(11,11,'Boş',NULL),(11,12,'Boş',NULL),(11,13,'Boş',NULL),(11,14,'Boş',NULL),(11,15,'Boş',NULL),(11,16,'Boş',NULL),(11,17,'Boş',NULL),(11,18,'Boş',NULL),(11,19,'Boş',NULL),(11,20,'Boş',NULL),(11,21,'Boş',NULL),(11,22,'Boş',NULL),(11,23,'Boş',NULL),(11,24,'Boş',NULL),(12,1,'Boş',NULL),(12,2,'Boş',NULL),(12,3,'Boş',NULL),(12,4,'Boş',NULL),(12,5,'Boş',NULL),(12,6,'Boş',NULL),(12,7,'Boş',NULL),(12,8,'Boş',NULL),(12,9,'Boş',NULL),(12,10,'Boş',NULL),(12,11,'Boş',NULL),(12,12,'Boş',NULL),(12,13,'Boş',NULL),(12,14,'Boş',NULL),(12,15,'Boş',NULL),(12,16,'Boş',NULL),(12,17,'Boş',NULL),(12,18,'Boş',NULL),(12,19,'Boş',NULL),(12,20,'Boş',NULL),(12,21,'Boş',NULL),(12,22,'Boş',NULL),(12,23,'Boş',NULL),(12,24,'Boş',NULL),(13,1,'Boş',NULL),(13,2,'Boş',NULL),(13,3,'Boş',NULL),(13,4,'Boş',NULL),(13,5,'Boş',NULL),(13,6,'Boş',NULL),(13,7,'Boş',NULL),(13,8,'Boş',NULL),(13,9,'Boş',NULL),(13,10,'Boş',NULL),(13,11,'Boş',NULL),(13,12,'Boş',NULL),(13,13,'Boş',NULL),(13,14,'Boş',NULL),(13,15,'Boş',NULL),(13,16,'Boş',NULL),(13,17,'Boş',NULL),(13,18,'Boş',NULL),(13,19,'Boş',NULL),(13,20,'Boş',NULL),(13,21,'Boş',NULL),(13,22,'Boş',NULL),(13,23,'Boş',NULL),(13,24,'Boş',NULL);
/*!40000 ALTER TABLE `durum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fiyat`
--

DROP TABLE IF EXISTS `fiyat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fiyat` (
  `fiyat_id` int NOT NULL AUTO_INCREMENT,
  `kalkis` varchar(20) NOT NULL,
  `varis` varchar(20) NOT NULL,
  `fiyat` int NOT NULL,
  PRIMARY KEY (`fiyat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fiyat`
--

LOCK TABLES `fiyat` WRITE;
/*!40000 ALTER TABLE `fiyat` DISABLE KEYS */;
INSERT INTO `fiyat` VALUES (1,'İstanbul','Antalya',800),(2,'Antalya','İstanbul',800),(3,'İstanbul','Kocaeli',200),(4,'Kocaeli','İstanbul',200),(5,'İstanbul','Ankara',600),(6,'Ankara','İstanbul',600),(7,'Antalya','Ankara',500),(8,'Ankara','Antalya',500),(9,'Antalya','Kocaeli',750),(10,'Kocaeli','Antalya',750),(11,'Ankara','Kocaeli',600),(12,'Kocaeli','Ankara',600);
/*!40000 ALTER TABLE `fiyat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kullanici` (
  `kullanici_id` int NOT NULL AUTO_INCREMENT,
  `kullanici_ad` varchar(35) NOT NULL,
  `kullanici_soyad` varchar(35) NOT NULL,
  `kullanici_tcno` varchar(11) NOT NULL,
  `kullanici_telefon` varchar(20) NOT NULL,
  `kullanici_email` varchar(100) NOT NULL,
  `kullanici_sifre` varchar(100) NOT NULL,
  PRIMARY KEY (`kullanici_id`),
  UNIQUE KEY `kullanici_tcno_UNIQUE` (`kullanici_tcno`),
  UNIQUE KEY `kullanici_ad_UNIQUE` (`kullanici_ad`),
  UNIQUE KEY `kullanici_telefon_UNIQUE` (`kullanici_telefon`),
  UNIQUE KEY `kullanici_email_UNIQUE` (`kullanici_email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kullanici`
--

LOCK TABLES `kullanici` WRITE;
/*!40000 ALTER TABLE `kullanici` DISABLE KEYS */;
INSERT INTO `kullanici` VALUES (9,'Taha Rıdvan','Öztürk','53377684014','+905312765179','taharidvanozturk0@gmail.com','5d01b7892cdb65e0e82820ec6315de41');
/*!40000 ALTER TABLE `kullanici` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otobus`
--

DROP TABLE IF EXISTS `otobus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `otobus` (
  `otobus_id` int NOT NULL AUTO_INCREMENT,
  `otobus_plaka` varchar(10) NOT NULL,
  `otobus_kapasite` varchar(45) NOT NULL,
  `otobus_cesidi` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`otobus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otobus`
--

LOCK TABLES `otobus` WRITE;
/*!40000 ALTER TABLE `otobus` DISABLE KEYS */;
INSERT INTO `otobus` VALUES (1,'41A001','20','2+1'),(2,'41A002','20','2+1'),(3,'41A003','20','2+1'),(4,'41A004','20','2+1'),(5,'41A005','20','2+1'),(6,'41A006','20','2+1'),(7,'41A007','20','2+1'),(8,'41A008','20','2+1'),(9,'41A009','20','2+1'),(10,'34B001','20','2+1'),(11,'34B002','20','2+1'),(12,'34B003','20','2+1'),(13,'34B004','20','2+1');
/*!40000 ALTER TABLE `otobus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sefer`
--

DROP TABLE IF EXISTS `sefer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sefer` (
  `sefer_id` int NOT NULL AUTO_INCREMENT,
  `sefer_kalkis` varchar(20) NOT NULL,
  `sefer_varis` varchar(20) NOT NULL,
  `tarih` datetime NOT NULL,
  `otobus_id` int DEFAULT NULL,
  PRIMARY KEY (`sefer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sefer`
--

LOCK TABLES `sefer` WRITE;
/*!40000 ALTER TABLE `sefer` DISABLE KEYS */;
INSERT INTO `sefer` VALUES (1,'İstanbul','Ankara','2024-03-22 00:00:00',1),(2,'İstanbul','Ankara','2024-03-22 08:00:00',2),(3,'İstanbul','Ankara','2024-03-22 16:00:00',3),(4,'Ankara','İstanbul','2024-03-22 00:00:00',4),(5,'Ankara','İstanbul','2024-03-22 08:00:00',5),(6,'Ankara','İstanbul','2024-03-22 16:00:00',6),(7,'İstanbul','Kocaeli','2024-03-22 00:00:00',7),(8,'İstanbul','Kocaeli','2024-03-22 08:00:00',8),(9,'İstanbul','Kocaeli','2024-03-22 16:00:00',9),(10,'Kocaeli','İstanbul','2024-03-22 00:00:00',10),(11,'Kocaeli','İstanbul','2024-03-22 08:00:00',11),(12,'Kocaeli','İstanbul','2024-03-22 16:00:00',12),(13,'İstanbul','Antalya','2024-03-22 00:00:00',13),(14,'İstanbul','Antalya','2024-03-22 08:00:00',1),(15,'İstanbul','Antalya','2024-03-22 16:00:00',2),(16,'Antalya','İstanbul','2024-03-22 00:00:00',3),(17,'Antalya','İstanbul','2024-03-22 08:00:00',4),(18,'Antalya','İstanbul','2024-03-22 16:00:00',5),(19,'Ankara','Kocaeli','2024-03-22 00:00:00',6),(20,'Ankara','Kocaeli','2024-03-22 08:00:00',7),(21,'Ankara','Kocaeli','2024-03-22 16:00:00',8),(22,'Kocaeli','Ankara','2024-03-22 00:00:00',9),(23,'Kocaeli','Ankara','2024-03-22 08:00:00',10),(24,'Kocaeli','Ankara','2024-03-22 16:00:00',11),(25,'Ankara','Antalya','2024-03-22 00:00:00',12),(26,'Ankara','Antalya','2024-03-22 08:00:00',13),(27,'Ankara','Antalya','2024-03-22 16:00:00',1),(28,'Antalya','Ankara','2024-03-22 00:00:00',2),(29,'Antalya','Ankara','2024-03-22 08:00:00',3),(30,'Antalya','Ankara','2024-03-22 16:00:00',4),(31,'Kocaeli','Antalya','2024-03-22 00:00:00',5),(32,'Kocaeli','Antalya','2024-03-22 08:00:00',6),(33,'Kocaeli','Antalya','2024-03-22 16:00:00',7),(34,'Antalya','Kocaeli','2024-03-22 00:00:00',8),(35,'Antalya','Kocaeli','2024-03-22 08:00:00',9),(36,'Antalya','Kocaeli','2024-03-22 16:00:00',10),(37,'İstanbul','Ankara','2024-03-30 00:00:00',11),(38,'İstanbul','Ankara','2024-03-30 08:00:00',12),(39,'İstanbul','Ankara','2024-03-30 16:00:00',13),(40,'Ankara','İstanbul','2024-03-30 00:00:00',1),(41,'Ankara','İstanbul','2024-03-30 08:00:00',2),(42,'Ankara','İstanbul','2024-03-30 16:00:00',3),(43,'İstanbul','Kocaeli','2024-03-30 00:00:00',4),(44,'İstanbul','Kocaeli','2024-03-30 08:00:00',5),(45,'İstanbul','Kocaeli','2024-03-30 16:00:00',6),(46,'Kocaeli','İstanbul','2024-03-30 00:00:00',7),(47,'Kocaeli','İstanbul','2024-03-30 08:00:00',8),(48,'Kocaeli','İstanbul','2024-03-30 16:00:00',9),(49,'İstanbul','Antalya','2024-03-30 00:00:00',10),(50,'İstanbul','Antalya','2024-03-30 08:00:00',11),(51,'İstanbul','Antalya','2024-03-30 16:00:00',12),(52,'Antalya','İstanbul','2024-03-30 00:00:00',13),(53,'Antalya','İstanbul','2024-03-30 08:00:00',1),(54,'Antalya','İstanbul','2024-03-30 16:00:00',2),(55,'Ankara','Kocaeli','2024-03-30 00:00:00',3),(56,'Ankara','Kocaeli','2024-03-30 08:00:00',4),(57,'Ankara','Kocaeli','2024-03-30 16:00:00',5),(58,'Kocaeli','Ankara','2024-03-30 00:00:00',6),(59,'Kocaeli','Ankara','2024-03-30 08:00:00',7),(60,'Kocaeli','Ankara','2024-03-30 16:00:00',8),(61,'Ankara','Antalya','2024-03-30 00:00:00',9),(62,'Ankara','Antalya','2024-03-30 08:00:00',10),(63,'Kocaeli','Istanbul','2024-03-27 00:00:00',11),(64,'Kocaeli','Istanbul','2024-03-28 00:00:00',12),(65,'Kocaeli','Ankara','2024-03-28 00:00:00',13),(66,'Kocaeli','Ankara','2024-03-29 00:00:00',1),(67,'Ankara','Izmir','2024-03-25 00:00:00',NULL);
/*!40000 ALTER TABLE `sefer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-29 22:15:57
