-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2020 às 01:36
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `registro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`name`, `email`, `senha`, `id`) VALUES
('Wilhams', 'wilhams.dev@gmail.com', 'www', 1),
('yadson', 'yadson@mc2', 'mc2', 2),
('MC2', 'mc2@mc2', 'mc2', 4),
('suanny meira', 'suanny@meira', 'su', 5),
('', '', '', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tasks`
--

CREATE TABLE `tasks` (
  `title` varchar(50) DEFAULT NULL,
  `date_incio` varchar(8) DEFAULT NULL,
  `date_end` varchar(8) DEFAULT NULL,
  `descri` varchar(200) DEFAULT NULL,
  `stats` varchar(10) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tasks`
--

INSERT INTO `tasks` (`title`, `date_incio`, `date_end`, `descri`, `stats`, `id`) VALUES
('xxxxxxxxxxxxxx', '', '', '', 'Edite seu ', 44);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
