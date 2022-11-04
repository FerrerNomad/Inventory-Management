-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Abr-2022 às 23:46
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabelaimg`
--

DROP TABLE IF EXISTS `tabelaimg`;
CREATE TABLE IF NOT EXISTS `tabelaimg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(14) NOT NULL,
  `produto` varchar(80) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `data` date NOT NULL,
  `imagem` varchar(80) NOT NULL,
  `valor` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `tabelaimg`
--

INSERT INTO `tabelaimg` (`id`, `codigo`, `produto`, `descricao`, `data`, `imagem`, `valor`) VALUES
(4, '354354', 'coca-cola', 'coca cola garrafa', '4343-03-31', 'coquinha.png', '7.00'),
(5, '089908', 'agua', 'agua em garrafa', '2828-07-31', 'aguazin.jpg', '2.00'),
(6, '59403875', 'suco', 'suco em garrafa', '1919-12-19', 'suquin.jpg', '4.00'),
(7, '401838890', 'chá', 'chá garrafa', '1010-10-10', 'chazin.jpeg', '3.00'),
(8, '23452345', 'guaraná', 'guaraná garrafa', '5050-05-05', 'guaranazin.jpg', '5.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
