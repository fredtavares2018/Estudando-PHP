-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Nov-2020 às 21:02
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cad_graficos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `id` int(5) NOT NULL,
  `Nome_Dado` text NOT NULL,
  `dUm` int(5) NOT NULL,
  `dDois` int(5) NOT NULL,
  `dTres` int(5) NOT NULL,
  `dQuatro` int(5) NOT NULL,
  `dCinco` int(5) NOT NULL,
  `Mes` int(5) NOT NULL,
  `id_nome_grafico` int(5) NOT NULL,
  `cor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `Nome_Dado`, `dUm`, `dDois`, `dTres`, `dQuatro`, `dCinco`, `Mes`, `id_nome_grafico`, `cor`) VALUES
(1, 'Disciplina 01', 2, 3, 4, 5, 3, 1, 1, 'red'),
(2, 'Disciplina 02', 7, 3, 5, 8, 1, 1, 1, 'blue');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eixo_x`
--

CREATE TABLE `eixo_x` (
  `id` int(5) NOT NULL,
  `nomes` text NOT NULL,
  `id_nome_grafico` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eixo_x`
--

INSERT INTO `eixo_x` (`id`, `nomes`, `id_nome_grafico`) VALUES
(1, 'Janeiro', 1),
(2, 'Fevereiro', 1),
(3, 'Março', 1),
(4, 'Abril', 1),
(5, 'Maio', 1),
(6, 'Junho', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nome_grafico`
--

CREATE TABLE `nome_grafico` (
  `id` int(5) NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nome_grafico`
--

INSERT INTO `nome_grafico` (`id`, `nome`) VALUES
(1, 'Médias'),
(2, 'Pagamentos');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eixo_x`
--
ALTER TABLE `eixo_x`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `nome_grafico`
--
ALTER TABLE `nome_grafico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `eixo_x`
--
ALTER TABLE `eixo_x`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `nome_grafico`
--
ALTER TABLE `nome_grafico`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
