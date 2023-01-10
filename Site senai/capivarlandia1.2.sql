-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2022 às 10:22
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `capivarlandia1.2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `boleto`
--
-- Criação: 09-Dez-2022 às 08:21
--

CREATE TABLE `boleto` (
  `numero_boleto` int(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `boleto`:
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--
-- Criação: 09-Dez-2022 às 07:52
--

CREATE TABLE `cliente` (
  `nome_cliente` varchar(60) DEFAULT NULL,
  `sobrenome_cliente` varchar(60) DEFAULT NULL,
  `email_cliente` int(60) NOT NULL,
  `senha_cliente` int(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `cliente`:
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerente`
--
-- Criação: 09-Dez-2022 às 07:55
--

CREATE TABLE `gerente` (
  `nome_gerente` varchar(60) DEFAULT NULL,
  `sobrenome_gerente` varchar(60) DEFAULT NULL,
  `email_gerente` int(60) NOT NULL,
  `senha_gerente` int(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `gerente`:
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `master card`
--
-- Criação: 09-Dez-2022 às 08:19
--

CREATE TABLE `master card` (
  `numero_cartao_master_card` int(16) NOT NULL,
  `senha_cartao_master_card` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `master card`:
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `nubank`
--
-- Criação: 09-Dez-2022 às 08:19
--

CREATE TABLE `nubank` (
  `numero_cartao_nubank` int(16) NOT NULL,
  `senha_cartao_nubank` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `nubank`:
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--
-- Criação: 09-Dez-2022 às 07:46
--

CREATE TABLE `produtos` (
  `id_produto` int(3) NOT NULL,
  `nome_produto` varchar(15) DEFAULT NULL,
  `preco_produto` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `produtos`:
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `suporte`
--
-- Criação: 09-Dez-2022 às 08:04
--

CREATE TABLE `suporte` (
  `nome_suporte` varchar(60) DEFAULT NULL,
  `sobrenome_suporte` varchar(60) DEFAULT NULL,
  `email_suporte` int(60) NOT NULL,
  `senha_suporte` int(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `suporte`:
--

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `boleto`
--
ALTER TABLE `boleto`
  ADD PRIMARY KEY (`numero_boleto`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`email_cliente`);

--
-- Índices para tabela `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`email_gerente`);

--
-- Índices para tabela `master card`
--
ALTER TABLE `master card`
  ADD PRIMARY KEY (`numero_cartao_master_card`);

--
-- Índices para tabela `nubank`
--
ALTER TABLE `nubank`
  ADD PRIMARY KEY (`numero_cartao_nubank`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `suporte`
--
ALTER TABLE `suporte`
  ADD PRIMARY KEY (`email_suporte`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `boleto`
--
ALTER TABLE `boleto`
  MODIFY `numero_boleto` int(48) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `email_cliente` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `gerente`
--
ALTER TABLE `gerente`
  MODIFY `email_gerente` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `master card`
--
ALTER TABLE `master card`
  MODIFY `numero_cartao_master_card` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nubank`
--
ALTER TABLE `nubank`
  MODIFY `numero_cartao_nubank` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `suporte`
--
ALTER TABLE `suporte`
  MODIFY `email_suporte` int(60) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
