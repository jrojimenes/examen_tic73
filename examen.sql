/*
SQLyog Ultimate v8.61 
MySQL - 5.5.16 : Database - examen
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`examen` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `examen`;

/*Table structure for table `evaluacion` */

DROP TABLE IF EXISTS `evaluacion`;

CREATE TABLE `evaluacion` (
  `idev` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) DEFAULT NULL,
  `cf` int(11) DEFAULT NULL,
  PRIMARY KEY (`idev`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `evaluacion` */

LOCK TABLES `evaluacion` WRITE;

UNLOCK TABLES;

/*Table structure for table `preguntas` */

DROP TABLE IF EXISTS `preguntas`;

CREATE TABLE `preguntas` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(100) DEFAULT NULL,
  `respuesta` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `preguntas` */

LOCK TABLES `preguntas` WRITE;

insert  into `preguntas`(`idp`,`pregunta`,`respuesta`) values (1,'Guadalupe Victoria fue el primer presidente de la republica Mexicana?','verdadero'),(2,'Candela es la unidad de medida para la intencidad luminosa','verdadero'),(3,'En 1810 inicio de la revolucion Mexicana?','falso'),(4,'Messi gano el balon de oro en el 2008?','falso'),(5,'El ampere es unidad de medida para la corriente electrica','verdadero'),(6,'En 1938 inicio la expropiacion petrolera?','verdadero'),(7,'en 1940 inicio la segunda guerra mundial?','falso'),(8,'10000 bits equivalen a un kilobyte?','falso'),(9,'En 1985 fue presentada la primera version del sistema operativo de Windows','verdadero'),(10,'Ice cream sandwich es version mas reciente de android?','falso');

UNLOCK TABLES;

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido_paterno` varchar(50) DEFAULT NULL,
  `apellido_materno` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

LOCK TABLES `usuario` WRITE;

insert  into `usuario`(`idusuario`,`nombre`,`apellido_paterno`,`apellido_materno`,`telefono`,`usuario`,`nivel`,`contrasena`,`status`) values (1,'Rodrigo','Olivares','Jimenez',2172940,'rodri',1,'123','active'),(2,'Arturo ','Lara','Garcia',8668721,'art',1,'123','active'),(3,'Aaron','Gomez','Martinez',2312312,'aar',1,'123','active'),(4,'Bertin','Perez','Sanchez',41213,'ber',1,'123','active');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
