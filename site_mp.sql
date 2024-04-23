-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/04/2024 às 22:51
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site_mp`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_clientes`
--

CREATE TABLE `cadastro_clientes` (
  `id_cadastro` int(11) NOT NULL,
  `nome_cliente` varchar(45) NOT NULL,
  `email_cliente` varchar(45) NOT NULL,
  `senha_cliente` varchar(45) NOT NULL,
  `sexo_cliente` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabela para cadastro de clientes.';

--
-- Despejando dados para a tabela `cadastro_clientes`
--

INSERT INTO `cadastro_clientes` (`id_cadastro`, `nome_cliente`, `email_cliente`, `senha_cliente`, `sexo_cliente`) VALUES
(1, 'Jackson Queiroz', 'jackson.oqueiroz@gmail.com', '1234', 'M'),
(2, 'Fulano de Tal', 'fulano@gmail.com', '1234', 'F'),
(3, 'Fulano da Silva', 'fulana_silva@gmail.com', '1234', 'F'),
(4, 'Teste 1', 'teste1@gmail.com', '1234', 'F'),
(5, 'Teste 1', 'teste1@gmail.com', '1234', 'F'),
(6, 'Outro Teste', 'outroteste@gmail.com', '1234', 'M'),
(7, 'Denovo', 'denovo@gmail.com', '1234', 'M');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_clientes`
--
ALTER TABLE `cadastro_clientes`
  ADD PRIMARY KEY (`id_cadastro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_clientes`
--
ALTER TABLE `cadastro_clientes`
  MODIFY `id_cadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
