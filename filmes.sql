-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql100.byetcluster.com
-- Tempo de geração: 09/03/2026 às 21:18
-- Versão do servidor: 11.4.10-MariaDB
-- Versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `filmes`
--
CREATE DATABASE IF NOT EXISTS `filmes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `filmes`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

DROP TABLE IF EXISTS `filmes`;
CREATE TABLE IF NOT EXISTS `filmes` (
  `idFilme` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `ano_lancamento` int(11) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `sinopse` varchar(255) DEFAULT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idFilme`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `filmes`
--

INSERT INTO `filmes` (`idFilme`, `titulo`, `ano_lancamento`, `genero`, `sinopse`, `data_criacao`) VALUES
(6, 'WALL-E', 2008, 'Infantil/Ficção Científica', 'Após entulhar a Terra de lixo e poluir a atmosfera com gases tóxicos, a humanidade deixou o planeta e passou a viver em uma gigantesca nave.', '2025-12-04 14:12:35'),
(7, 'Toy Story', 1995, 'Infantil/Comédia', 'O aniversário do garoto Andy está chegando e seus brinquedos ficam nervosos, temendo que ele ganhe novos brinquedos que possam substituí-los.', '2025-12-04 14:23:02'),
(8, 'Toy Story 2', 1999, 'Infantil/Aventura', 'Woody tenta salvar um brinquedo que acaba indo parar em um bazar de usados, mas termina por ser sequestrado por um colecionador que pretende vendê-lo a um museu japonês.', '2025-12-04 14:24:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
