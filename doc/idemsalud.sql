-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.26 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for idemsalud
CREATE DATABASE IF NOT EXISTS `idemsalud` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `idemsalud`;

-- Dumping structure for table idemsalud.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `idCurso` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) NOT NULL,
  `subtitulo` varchar(90) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `fotoCurso` varchar(200) NOT NULL,
  `precio` int(6) unsigned NOT NULL,
  `descuento` int(6) unsigned DEFAULT '0',
  `estado` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `valoraciones` varchar(300) DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table idemsalud.cursos: ~0 rows (approximately)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Dumping structure for table idemsalud.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dni` char(8) DEFAULT NULL,
  `nomApe` varchar(60) NOT NULL,
  `fechaNac` datetime DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `tokenEmail` varchar(50) NOT NULL,
  `estado` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `rango` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `fotoPerfil` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table idemsalud.usuarios: ~0 rows (approximately)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Dumping structure for table idemsalud.usuarios_cursos
CREATE TABLE IF NOT EXISTS `usuarios_cursos` (
  `idUsuarioCurso` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) unsigned NOT NULL,
  `idCurso` int(11) unsigned NOT NULL,
  PRIMARY KEY (`idUsuarioCurso`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idCurso` (`idCurso`),
  CONSTRAINT `FK_usuarios_cursos_cursos` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`idCurso`),
  CONSTRAINT `FK_usuarios_cursos_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table idemsalud.usuarios_cursos: ~0 rows (approximately)
/*!40000 ALTER TABLE `usuarios_cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios_cursos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
