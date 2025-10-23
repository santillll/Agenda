-- phpMyAdmin SQL Dump
-- version 5.1.4-dev+20220429.6af017a6ad
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Ago-2023 às 02:09
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Cliníca`
--
DROP DATABASE IF exists Cliníca;

CREATE DATABASE Cliníca;
-- --------------------------------------------------------
USE Cliníca;
--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `call number` int(11) NOT NULL,
  `race` varchar(255) DEFAULT NULL,
  `owner's phone` varchar(20) DEFAULT NULL,
  `observations` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`call number`, `race`, `owner's phone`, `observations`) VALUES
(1, 'Pastor Alemão', '(11)9999-8888', 'Protetor'),
(2, 'Husky Siberiano', '(11)9999-4698', 'Gelo'),
(3, 'Golden Retriever', '(11) 9945-3468', 'Celebridade'),
(4, ' Vitor Roque', '(11) 9976-4567', ' Tigrinho');


--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`call number`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contacts`
--
ALTER TABLE `contacts`
  MODIFY `call number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
