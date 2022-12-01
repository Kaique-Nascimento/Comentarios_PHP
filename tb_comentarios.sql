-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para tb_comentarios
CREATE DATABASE IF NOT EXISTS `tb_comentarios` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `tb_comentarios`;

-- Copiando estrutura para tabela tb_comentarios.tb01_comentarios
CREATE TABLE IF NOT EXISTS `tb01_comentarios` (
  `tb01_id` int(6) NOT NULL AUTO_INCREMENT,
  `tb01_nome` varchar(300) NOT NULL,
  `tb01_mensagem` varchar(300) NOT NULL,
  PRIMARY KEY (`tb01_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela tb_comentarios.tb01_comentarios: ~0 rows (aproximadamente)
REPLACE INTO `tb01_comentarios` (`tb01_id`, `tb01_nome`, `tb01_mensagem`) VALUES
	(7, 'teste', 'teste'),
	(9, 'José ', 'Parabéns! Que site lixo!');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
