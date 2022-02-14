-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cadastro_pessoas
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.22-MariaDB

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
-- Table structure for table `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `cidade` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro`
--

LOCK TABLES `cadastro` WRITE;
/*!40000 ALTER TABLE `cadastro` DISABLE KEYS */;
INSERT INTO `cadastro` VALUES (7,'Popó','1010','012.365.221.,m','outros','2022-01-12','São Leopoldo','Centro','mjdghbdf',3589,'rua paralela a  rua jhkeaskjld,ao lado do correio.'),(8,'Maria Silva','123','016.114.590-60','feminino','2022-01-19','São Leopoldo','Arroio da Manteiga','Rio Paraguaçu',335,' ao lado da churrascaria do Pancho.'),(9,'madalena','1112','111.222.333.44','feminino','1988-03-05','São Leopoldo','vicentina','alfredo das dores',123,'Casa Própria na frente da Upa.'),(10,'Mateus Silva','123','016.114.590-60','masculino','2022-01-20','São Leopoldo','Arroio da Manteiga','Rio Paraguaçu',337,'Casa Própria ao lado da churrascaria do Pancho.'),(11,'Mateus Silva','123','016.114.590-60','masculino','2022-01-20','São Leopoldo','Arroio da Manteiga','Rio Paraguaçu',337,' lado da churrascaria do Pancho.'),(12,'Mateus Silva','123','016.114.590-60','masculino','2022-01-20','São Leopoldo','Arroio da Manteiga','Rio Paraguaçu',337,'Casa Própria ao lado da churrascaria do Pancho.'),(13,'Mateus Silva','123','016.114.590-60','masculino','1955-06-05','São Leopoldo','Arroio da Manteiga','Rio Paraguaçu',3369,'Casa Própria ao lado da churrascaria do Pancho.'),(14,'João pereira','1233','016.114.590-60','masculino','1982-12-02','São Leopoldo','Arroio da Manteiga','Rio Paraguaçu',1,'Casa Própria ao lado da churrascaria do Pancho.'),(15,'João Silva','112233','016.114.590-60','outros','1958-05-02','São Leopoldo','Arroio da Manteiga','Rio Paraguaçu',2,'Casa Própria ao lado da churrascaria do Pancho.'),(16,'João Silva','12396','016.114.590-60','outros','2022-01-11','São Leopoldo','Arroio da Manteiga','Rio Paraguaçu',1,'Casa Própria ao lado da churrascaria do Pancho.'),(17,'Mateus Silva','565','016.114.590-60','feminino','2022-01-12','São Leopoldo','Arroio da Manteiga','Rio Paraguaçu',7,'Casa Própria na frente da Upa.'),(18,'Mateus Silva','123','016.114.590-60','masculino','2022-01-26','São Leopoldo','Arroio da Manteiga','Rio Paraguaçu',335,'ao lado da segunda casa azul da rua'),(19,'Mateus Silva','123','lkjhfgf','masculino','2022-01-26','São Leopoldo','Arroio da Manteiga','Rio Paraguaçu',3355,'ao lado da segunda casa azul da rua'),(20,'Mateus Dutra','55478','001.256.190-00','masculino','2022-01-20','São Leopoldo','feitoria','mjdghbdf',45,'sdafsdaewd'),(21,'Mateus Silva','123','016.114.590-60','masculino','2022-01-19','São Leopoldo','Arroio da Manteiga','Rio Paraguaçu',34534,'rua paralela a independencia, casa ao lado do correio.');
/*!40000 ALTER TABLE `cadastro` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-14 12:58:45
