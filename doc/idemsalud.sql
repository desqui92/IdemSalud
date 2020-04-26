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

-- Dumping structure for table idemsalud.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `idBlog` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) unsigned NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` longtext,
  `portada` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idBlog`),
  KEY `idUsuarioBlog` (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table idemsalud.blog: 1 rows
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`idBlog`, `idUsuario`, `titulo`, `descripcion`, `portada`) VALUES
	(1, 0, NULL, NULL, NULL);
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table idemsalud.cursos: ~0 rows (approximately)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Dumping structure for table idemsalud.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dni` char(8) DEFAULT NULL,
  `nomApe` varchar(60) NOT NULL,
  `fechaNac` date DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `tokenEmail` varchar(50) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '0',
  `rango` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `fotoPerfil` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table idemsalud.usuarios: ~3 rows (approximately)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idUsuario`, `dni`, `nomApe`, `fechaNac`, `provincia`, `ciudad`, `telefono`, `email`, `clave`, `tokenEmail`, `estado`, `rango`, `fotoPerfil`) VALUES
	(3, '40714325', 'Flores Mariano', '1994-03-12', 'Buenos Aires', 'La Plata', '2216775544', 'pepe@hotmail.com', '$2y$10$L4sJKaamvqqlvLB8qYM7y.Pzr/dIctpPBxsnj24bgF3Vhp.f4xHXG', 'sjdajdj23j2jjsdsd', 1, 4, NULL),
	(9, NULL, 'Rodrigo Garcia', NULL, NULL, NULL, NULL, 'rodri@gmail.com', '$2y$10$9jDiEkJk34Zd6Woeswo3jufQGeB2qpQaqKpKeHhUx3x9nKw2qXQNy', 'uat1oz6dmhekwl94d3b630n4q9xt4earkm8snfm39nw5onsn6w', 1, 3, NULL),
	(10, NULL, 'mariano flores', NULL, NULL, NULL, NULL, 'marianobc12@hotmail.com', '$2y$10$CFPsCgoTfkTF7zsaHeuMted2LMy7qvD24H7eYjgOMOIOTUPyCKhjK', 'ynst5y0ko7h64skyi322fsa90tibmtlryancaszfxr9sunzdl8', 0, 4, NULL);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table idemsalud.usuarios_cursos: ~0 rows (approximately)
/*!40000 ALTER TABLE `usuarios_cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios_cursos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
