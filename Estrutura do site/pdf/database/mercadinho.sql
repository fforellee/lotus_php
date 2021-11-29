-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Nov-2021 às 20:37
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mercadinho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `Cod_categoria` smallint(6) NOT NULL,
  `Tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CPF` char(11) NOT NULL,
  `Nome_completo` varchar(30) DEFAULT NULL,
  `Data_nascimento` date DEFAULT NULL,
  `Sexo` char(1) DEFAULT NULL,
  `Num_tel` varchar(15) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Senha` varchar(20) DEFAULT NULL,
  `Endereço_CEP` char(9) DEFAULT NULL,
  `Endereço_Logradouro` varchar(20) DEFAULT NULL,
  `Endereço_Num_residencia` varchar(20) DEFAULT NULL,
  `Endereço_Complemento` varchar(20) DEFAULT NULL,
  `Cartao_numero` char(15) DEFAULT NULL,
  `Cartao_cod` char(3) DEFAULT NULL,
  `Cartao_vencimento` char(5) DEFAULT NULL,
  `Endereco_Logradouro2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `Data_compra` date NOT NULL,
  `Tipo` varchar(6) DEFAULT NULL,
  `Cod_barra_Produto` int(13) NOT NULL,
  `CPF_Cliente` char(11) NOT NULL,
  `Cod_cadastro_Funcionario` int(11) DEFAULT NULL,
  `fatura_id` char(9) DEFAULT NULL,
  `fatura_id_cliente` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `distribuidora`
--

CREATE TABLE `distribuidora` (
  `CNPJ` char(18) NOT NULL,
  `Nome_companhia` varchar(30) DEFAULT NULL,
  `Distancia_entrega` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

CREATE TABLE `entrega` (
  `Prazo` date NOT NULL,
  `Prioridade` varchar(15) DEFAULT NULL,
  `CNPJ_Distribuidora` char(18) NOT NULL,
  `CPF_Cliente` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `envia`
--

CREATE TABLE `envia` (
  `Data` date NOT NULL,
  `hora` time DEFAULT NULL,
  `Data_compra` date NOT NULL,
  `Cod_barra_Produto` char(13) NOT NULL,
  `CPF_Cliente` char(11) NOT NULL,
  `CNPJ_Distribuidora` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornece`
--

CREATE TABLE `fornece` (
  `Data` date NOT NULL,
  `Quantidade` int(3) DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `CNPJ_Fornecedor` char(18) NOT NULL,
  `Cod_barra_Produto` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `CNPJ` char(18) NOT NULL,
  `Nome_empresa` varchar(30) DEFAULT NULL,
  `Num_tel` varchar(15) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `Cod_cadastro` int(11) NOT NULL,
  `Nome_completo` varchar(30) DEFAULT NULL,
  `Data_nascimento` date DEFAULT NULL,
  `CPF` char(11) DEFAULT NULL,
  `Num_tel` varchar(15) DEFAULT NULL,
  `Senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `Cod_barra` char(13) NOT NULL,
  `Data_vencimento` date DEFAULT NULL,
  `Preço` decimal(4,2) DEFAULT NULL,
  `Cod_categoria` varchar(8) DEFAULT NULL,
  `Nome_produto` varchar(30) DEFAULT NULL,
  `Quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_veiculos`
--

CREATE TABLE `tipos_veiculos` (
  `CNPJ` char(18) NOT NULL,
  `Tipo_veiculo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Cod_categoria`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`Data_compra`,`Cod_barra_Produto`,`CPF_Cliente`);

--
-- Índices para tabela `distribuidora`
--
ALTER TABLE `distribuidora`
  ADD PRIMARY KEY (`CNPJ`);

--
-- Índices para tabela `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`Prazo`,`CPF_Cliente`,`CNPJ_Distribuidora`);

--
-- Índices para tabela `envia`
--
ALTER TABLE `envia`
  ADD PRIMARY KEY (`Data`,`CPF_Cliente`,`Cod_barra_Produto`,`Data_compra`,`CNPJ_Distribuidora`);

--
-- Índices para tabela `fornece`
--
ALTER TABLE `fornece`
  ADD PRIMARY KEY (`Data`,`CNPJ_Fornecedor`,`Cod_barra_Produto`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`CNPJ`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`Cod_cadastro`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`Cod_barra`);

--
-- Índices para tabela `tipos_veiculos`
--
ALTER TABLE `tipos_veiculos`
  ADD PRIMARY KEY (`CNPJ`,`Tipo_veiculo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `Cod_cadastro` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
