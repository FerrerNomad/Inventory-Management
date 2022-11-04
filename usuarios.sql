-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Maio-2022 às 23:22
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
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(30) NOT NULL,
  `Senha` varchar(35) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Usuario`, `Senha`) VALUES
(3, 'dwadawdawdwad', '14272'),
(2, 'mateus@teste.com', 'teste789456'),
(4, 'dawdwa', 'dawdawd'),
(5, 'testando@12345', 'senha123'),
(6, 'dwadwa@dadowia.com', '7498465465'),
(15, 'mateus@teste.com', 'dadawdr5678'),
(11, '', ''),
(12, 'dawdawd@546', 'Tesndwdka'),
(13, 'dawdawd@546', 'Tesndwdka'),
(14, 'mateus@teste.com', 'dadawdr5678'),
(16, 'dawdwadw@dw', 'dawdwadawd'),
(17, 'dawdwa@tadawiu', '35836978');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
