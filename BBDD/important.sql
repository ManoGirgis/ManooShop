-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: manoshop
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articulos` (
  `idarticulos` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `idcategory` int NOT NULL,
  `img` varchar(500) NOT NULL,
  PRIMARY KEY (`idarticulos`),
  UNIQUE KEY `idarticulos_UNIQUE` (`idarticulos`),
  KEY `fk_articulos_category1_idx` (`idcategory`),
  CONSTRAINT `fk_articulos_category1` FOREIGN KEY (`idcategory`) REFERENCES `category` (`idcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulos`
--

LOCK TABLES `articulos` WRITE;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` VALUES (1,'GTA V',80,'Criminal mode',3,'img/GTAV.jpg'),(2,'Valorant',20,'Fight with your friends',5,'img/Valo.jpg'),(3,'MineCraft',15,'Show the creativity',4,'img/Minecraft.jpg'),(5,'Resident evil 2',30,'nice game',2,'https://media.playstation.com/is/image/SCEA/resident-evil-2-box-art-01-ps4-us-12dec18?$native_nt$'),(14,'Euro truck simulator',15,'Live as a trucker',7,'https://images.g2a.com/360x600/1x1x1/euro-truck-simulator-2-steam-key-global-i10000006437010/590dba80ae653a8ca8753fe6');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `idcategory` int NOT NULL AUTO_INCREMENT,
  `catname` varchar(45) NOT NULL,
  PRIMARY KEY (`idcategory`),
  UNIQUE KEY `catname_UNIQUE` (`catname`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (2,'Adventure'),(3,'Free mode'),(1,'Horror'),(4,'Puzzle'),(5,'PVP'),(7,'Simulator');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `idcomments` int NOT NULL,
  `id_user` int NOT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `Rating` decimal(10,0) NOT NULL,
  `Product` varchar(45) NOT NULL,
  `prod_ID` int NOT NULL,
  PRIMARY KEY (`idcomments`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compras` (
  `idcompras` int NOT NULL,
  `preciototal` decimal(10,0) NOT NULL,
  `fecha` date NOT NULL,
  `iduser` int NOT NULL,
  PRIMARY KEY (`idcompras`,`iduser`),
  UNIQUE KEY `idcompras_UNIQUE` (`idcompras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compras_articulos`
--

DROP TABLE IF EXISTS `compras_articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compras_articulos` (
  `compras_idcompras` int NOT NULL,
  `articulos_idarticulos` int NOT NULL,
  `cantidad` int DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`compras_idcompras`,`articulos_idarticulos`),
  KEY `fk_compras_has_articulos_articulos1_idx` (`articulos_idarticulos`),
  KEY `fk_compras_has_articulos_compras1_idx` (`compras_idcompras`),
  CONSTRAINT `fk_compras_has_articulos_articulos1` FOREIGN KEY (`articulos_idarticulos`) REFERENCES `articulos` (`idarticulos`),
  CONSTRAINT `fk_compras_has_articulos_compras1` FOREIGN KEY (`compras_idcompras`) REFERENCES `compras` (`idcompras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras_articulos`
--

LOCK TABLES `compras_articulos` WRITE;
/*!40000 ALTER TABLE `compras_articulos` DISABLE KEYS */;
/*!40000 ALTER TABLE `compras_articulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `idUsers` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`idUsers`),
  UNIQUE KEY `idUsers_UNIQUE` (`idUsers`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Manuel','Gerges','ManoG','2000-10-04','manoly@gmail.com','123'),(2,'Michael','Gerges','MikiG','2002-09-08','miki@gmail.com','123'),(3,'Mark','Sameh','MarkS','1997-12-11','mark@gmail.com','123');
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

-- Dump completed on 2023-12-14  9:21:44
