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
-- Banco de dados: `Clinica`
--
DROP DATABASE IF exists Clinica;

CREATE DATABASE Clinica;
-- --------------------------------------------------------
USE Clinica;
--
-- Estrutura da tabela `clinica`
--

CREATE TABLE `clinica` (
  `Callnumber` int(11) NOT NULL,
  `Race` varchar(255) DEFAULT NULL,
  `Ownersphone` varchar(20) DEFAULT NULL,
  `Observations` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clinica`
--

INSERT INTO `clinica` (`Callnumber`, `Race`, `Ownersphone`, `Observations`) VALUES
(1, 'Pastor Alemão', '(11)9999-8888', 'Protetor'),
(2, 'Husky Siberiano', '(11)9999-4698', 'Gelo'),
(3, 'Golden Retriever', '(11) 9945-3468', 'Celebridade'),
(4, ' Vitor Roque', '(11) 9976-4567', ' Tigrinho');


--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clinica`
--
ALTER TABLE `clinica`
  ADD PRIMARY KEY (`Callnumber`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clinica`
--
ALTER TABLE `clinica`
  MODIFY `Callnumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
