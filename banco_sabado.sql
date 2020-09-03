-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Ago-2020 às 21:18
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cad_clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais_fazenda`
--

--
-- Estrutura da tabela `clientes_fazenda`
--

CREATE TABLE `clientes_fazenda` (
  `id` int(5) NOT NULL,
  `nome` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `link_imagem` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `clientes_fazenda`
--
ALTER TABLE `clientes_fazenda`
  ADD PRIMARY KEY (`id`);

--

--
-- AUTO_INCREMENT for table `clientes_fazenda`
--
ALTER TABLE `clientes_fazenda`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
