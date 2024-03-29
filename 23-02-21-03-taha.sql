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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `admin_ad` varchar(45) NOT NULL,
  `admin_email` varchar(45) DEFAULT NULL,
  `admin_sifre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'geokdeniz','geokdeniz@gmail.com',NULL),(2,'carnivora','carnivora@gmail.com',NULL),(3,'tafa','mustafaince538@gmail.com',NULL);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bilet`
--

DROP TABLE IF EXISTS `bilet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bilet` (
  `bilet_id` int NOT NULL,
  `musteri_id` int NOT NULL,
  `sefer_id` int NOT NULL,
  `koltuk_numara` int NOT NULL,
  PRIMARY KEY (`bilet_id`)
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
-- Table structure for table `koltuk_durumu`
--

DROP TABLE IF EXISTS `koltuk_durumu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `koltuk_durumu` (
  `otobus_id` varchar(45) NOT NULL,
  `koltuk_id` varchar(45) DEFAULT NULL,
  `durum` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='ĞĞĞĞĞĞĞĞĞĞĞ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `koltuk_durumu`
--

LOCK TABLES `koltuk_durumu` WRITE;
/*!40000 ALTER TABLE `koltuk_durumu` DISABLE KEYS */;
INSERT INTO `koltuk_durumu` VALUES ('1','1',0),('1','2',0),('1','3',1);
/*!40000 ALTER TABLE `koltuk_durumu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kullanici` (
  `kullanici_id` int NOT NULL AUTO_INCREMENT,
  `kullanici_ad` varchar(25) NOT NULL,
  `kullanici_sifre` varchar(45) NOT NULL,
  `kullanici_email` varchar(45) NOT NULL,
  `kullanici_tcno` bigint NOT NULL,
  `kullanici_telefon` varchar(20) NOT NULL,
  PRIMARY KEY (`kullanici_id`),
  UNIQUE KEY `kullanici_tcno_UNIQUE` (`kullanici_tcno`),
  UNIQUE KEY `kullanici_ad_UNIQUE` (`kullanici_ad`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kullanici`
--

LOCK TABLES `kullanici` WRITE;
/*!40000 ALTER TABLE `kullanici` DISABLE KEYS */;
/*!40000 ALTER TABLE `kullanici` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `musteri`
--

DROP TABLE IF EXISTS `musteri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `musteri` (
  `musteri_id` int NOT NULL,
  `musteri_tc` bigint NOT NULL,
  `musteri_ad` varchar(25) NOT NULL,
  `musteri_soyad` varchar(25) NOT NULL,
  `musteri_email` varchar(100) NOT NULL,
  `musteri_telefon` varchar(20) NOT NULL,
  `musteri_cinsiyet` varchar(10) NOT NULL,
  `musteri_sifre` varchar(45) NOT NULL,
  `musteri_yolcutarife` varchar(15) NOT NULL,
  PRIMARY KEY (`musteri_id`),
  UNIQUE KEY `musteri_tc_UNIQUE` (`musteri_tc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `musteri`
--

LOCK TABLES `musteri` WRITE;
/*!40000 ALTER TABLE `musteri` DISABLE KEYS */;
/*!40000 ALTER TABLE `musteri` ENABLE KEYS */;
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
INSERT INTO `otobus` VALUES (1,'41A001','20','2+1'),(2,'41A002','25','2+1'),(3,'41A003','50','2+1'),(4,'41A004','50','2+1'),(5,'41A005','50','2+1'),(6,'41A006','50','2+1'),(7,'41A007','50','2+1'),(8,'41A008','50','2+1'),(9,'41A009','50','2+1'),(10,'34B001','50','2+1'),(11,'34B002','50','2+1'),(12,'34B003','50','2+1'),(13,'34B004','50','2+1');
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
  `otobus_id` int NOT NULL,
  `kalkis_saat` time NOT NULL,
  `varis_saat` time NOT NULL,
  `sefer_fiyat` int NOT NULL,
  `kalkis_sehri` varchar(45) DEFAULT NULL,
  `varis_sehri` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sefer_id`),
  KEY `seferotobus_id_idx` (`otobus_id`),
  CONSTRAINT `seferotobus_id` FOREIGN KEY (`otobus_id`) REFERENCES `otobus` (`otobus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sefer`
--

LOCK TABLES `sefer` WRITE;
/*!40000 ALTER TABLE `sefer` DISABLE KEYS */;
INSERT INTO `sefer` VALUES (1,1,'00:00:00','06:00:00',100,'Ankara','İstanbul'),(2,2,'00:00:00','08:00:00',500,'İstanbul','Ankara');
/*!40000 ALTER TABLE `sefer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sehir`
--

DROP TABLE IF EXISTS `sehir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sehir` (
  `sehir_id` int NOT NULL AUTO_INCREMENT,
  `sefer_id` int DEFAULT NULL,
  `sehir_ad` varchar(25) NOT NULL,
  `kalkis_sehir` varchar(45) DEFAULT NULL,
  `varis_sehir` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sehir_id`),
  KEY `sehirsefer_id_idx` (`sefer_id`),
  CONSTRAINT `sehirsefer_id` FOREIGN KEY (`sefer_id`) REFERENCES `sefer` (`sefer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sehir`
--

LOCK TABLES `sehir` WRITE;
/*!40000 ALTER TABLE `sehir` DISABLE KEYS */;
INSERT INTO `sehir` VALUES (1,NULL,'Ankara - İstanbul','Ankara','İstanbul'),(2,NULL,'Ankara - İzmir','Ankara','İzmir'),(3,NULL,'Ankara - Kocaeli','Ankara','Kocaeli'),(4,NULL,'İstanbul - Ankara','İstanbul','Ankara'),(5,NULL,'İstanbul - İzmir','İstanbul','İzmir'),(6,NULL,'İstanbul - Kocaeli','İstanbul','Kocaeli'),(7,NULL,'İzmir - İstanbul','İzmir','İstanbul'),(8,NULL,'İzmir - Ankara','İzmir','Ankara'),(9,NULL,'İzmir - Kocaeli','İzmir','Kocaeli'),(10,NULL,'Kocaeli - İstanbul','Kocaeli','İstanbul'),(11,NULL,'Kocaeli - Ankara','Kocaeli','Ankara'),(12,NULL,'Kocaeli - İzmir','Kocaeli','İzmir');
/*!40000 ALTER TABLE `sehir` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-21 23:02:14
