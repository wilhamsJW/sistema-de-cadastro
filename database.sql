-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jun-2020 às 01:56
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
  `nome` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`nome`, `email`, `senha`, `id`) VALUES
('Wilhams', 'wilhams.dev@gmail.com', 'www', 1),
('MC2', 'MC2@MC2', 'mc2', 2),
('Wilhams', 'Wilhamsmeira@gmail.com', 'qq', 3),
('ronaldo', 'rodrigo@ppp', 'ee', 5),
('ronaldo', 'rrrr@errrr', 're', 6),
('andré', 'andr@andr', '123', 7),
('andré', 'andr@andro', 'uu', 9),
('jose', 'jose@jose', 'as', 11),
('maria', 'maria@maria', 'as', 12),
('bernadete', 'bernadete@bernadete', 'as', 14),
('', '', '', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tasks`
--

CREATE TABLE `tasks` (
  `title` varchar(50) DEFAULT NULL,
  `start_date` varchar(8) DEFAULT NULL,
  `last_date` varchar(8) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `stats` varchar(10) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tasks`
--

INSERT INTO `tasks` (`title`, `start_date`, `last_date`, `description`, `stats`, `id`) VALUES
('Hello MC2', NULL, NULL, NULL, NULL, 1),
('Hello MC2', NULL, NULL, NULL, NULL, 2),
('Hello MC2', NULL, NULL, NULL, NULL, 3),
('Hello MC2', '2222-02-', ' 2222-02', 'A MC2 Performance oferece consultoria empresarial, com foco em alavancar negócios e resultados, através de Modelagem e Automação de Processos de Negócio, Governança Corporativa e de TI, Diagnóstico de', ' ', 4);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;