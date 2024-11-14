/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.5.2-MariaDB, for osx10.20 (arm64)
--
-- Host: localhost    Database: grupo_griffin
-- ------------------------------------------------------
-- Server version	11.5.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `requirements` text NOT NULL,
  `modality` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `publisherId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `publisherId` (`publisherId`),
  CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`publisherId`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES
(1,'Desarrollador Full Stack','Diseño y desarrollo de aplicaciones web.','Conocimientos en JavaScript, Node.js, React, y bases de datos SQL.','Remoto','2+ años',2),
(2,'Diseñador UI/UX','Creación de interfaces intuitivas y atractivas para aplicaciones web y móviles.','Manejo de Figma, Adobe XD, y principios de diseño centrado en el usuario.','Freelance / Proyecto específico.','1+ años',2),
(3,'Desarrollador Mobile (iOS / Android)','Creación de aplicaciones nativas y mantenimiento de funcionalidades en sistemas móviles.','Conocimientos en Swift, Kotlin, o Flutter.','Presencial','2+ años',1),
(4,'Analista de Datos','Análisis e interpretación de datos para apoyar la toma de decisiones estratégicas.','Experiencia en SQL, Python (pandas, NumPy), y herramientas de visualización (Power BI o Tableau).','Remoto','1+ años',1);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opinions`
--

DROP TABLE IF EXISTS `opinions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opinions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `publisherId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `publisherId` (`publisherId`),
  CONSTRAINT `opinions_ibfk_1` FOREIGN KEY (`publisherId`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opinions`
--

LOCK TABLES `opinions` WRITE;
/*!40000 ALTER TABLE `opinions` DISABLE KEYS */;
INSERT INTO `opinions` VALUES
(1,'Opinion honesta','Gracias a esta plataforma, encontré el empleo remoto que buscaba desde hace meses.',3),
(2,'Opinion honesta','Las herramientas digitales que ofrecen me permitieron optimizar mi negocio.',4);
/*!40000 ALTER TABLE `opinions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `publisherId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `publisherId` (`publisherId`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`publisherId`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES
(1,'Diseño de UI/UX','Nos enfocamos en mejorar la forma en la que los usuarios interactuan con tus servicios y nos emociona hacer de eso el estandard. Usamos Figma como principal herramienta y garantizamos diseños modernos, funcionales y accesibles','Solicita una <a href=\"/pages/contactos.php\">cotización</a>*','https://plus.unsplash.com/premium_photo-1661388007672-2274a64bf468?q=80&w=2885&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',1),
(2,'Desarrollo de aplicaciones nativas','Sabemos la importancia del rendimiento en las aplicaciones, por eso ofrecemos desarrollo de aplicaciones en Kotlin y en Swift, garantizando rendimiento, optimización y uso de tecnologías modernas','Solicita una <a href=\"/pages/contactos.php\">cotización</a>*','https://images.unsplash.com/photo-1517650862521-d580d5348145?q=80&w=2969&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',1),
(3,'Desarrollo web fullstack','Ofrecemos servicios de desarrollo web con equipos especializados en todos los componentes necesarios para hacer funcionar una aplicación web.','Solicita una <a href=\"/pages/contactos.php\">cotización</a>*','https://images.unsplash.com/photo-1583508915901-b5f84c1dcde1?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'Grupo Griffin','info@grupog.com','2222-2222'),
(2,'Grupo Devs','info@devops.com','2222-2223'),
(3,'Jon Marston','jon.marston@mail.com','2322-2223'),
(4,'Arthur Morgan','arthur.morgan@mail.com','2322-2223');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'grupo_griffin'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2024-11-14  1:30:09
