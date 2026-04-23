-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 20-Jun-2023 às 21:55
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `emprego tech`
--
CREATE DATABASE IF NOT EXISTS `emprego tech` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `emprego tech`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE IF NOT EXISTS `candidato` (
  `id_candidato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cpf` int(14) NOT NULL COMMENT 'cargo desejado',
  `cargo_desejado` varchar(100) NOT NULL,
  `ano_formacao` date NOT NULL,
  `diploma` varchar(37) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` char(40) NOT NULL,
  PRIMARY KEY (`id_candidato`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`id_candidato`, `nome`, `data_nascimento`, `cpf`, `cargo_desejado`, `ano_formacao`, `diploma`, `email`, `senha`) VALUES
(1, 'nicolle da silva', '0000-00-00', 0, '', '0000-00-00', 'ee1b4c7ffa4600b74e862eea166d3e78.png', 'nicolle@gmail.com', '7751a23fa55170a57e90374df13a3ab78efe0e99'),
(2, 'dahyun', '0000-00-00', 0, '', '0000-00-00', '6cc02799702068007fb903ce83628e0d.png', 'diana@gmail.com', '7751a23fa55170a57e90374df13a3ab78efe0e99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato_vaga`
--

CREATE TABLE IF NOT EXISTS `candidato_vaga` (
  `id_candidato_vaga` int(11) NOT NULL AUTO_INCREMENT,
  `id_candidato` int(11) NOT NULL,
  `id_vaga` int(11) NOT NULL,
  PRIMARY KEY (`id_candidato_vaga`),
  UNIQUE KEY `id_vaga_fk` (`id_vaga`),
  KEY `id_candidato_fk` (`id_candidato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `email_corporativo` varchar(100) NOT NULL,
  `senha_empresa` char(40) NOT NULL,
  `cnpj` int(15) NOT NULL DEFAULT '0',
  `razao_social` varchar(100) NOT NULL,
  `nome_fantasia` varchar(100) NOT NULL,
  `numero_funcionarios` int(100) NOT NULL,
  `descricao_empresa` tinyint(250) NOT NULL DEFAULT '0',
  `telefone_comercial` int(11) NOT NULL,
  `cep` int(8) NOT NULL,
  `endereco` varchar(55) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(55) NOT NULL,
  `estado` varchar(55) NOT NULL,
  `cidade` varchar(55) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome`, `cargo`, `email_corporativo`, `senha_empresa`, `cnpj`, `razao_social`, `nome_fantasia`, `numero_funcionarios`, `descricao_empresa`, `telefone_comercial`, `cep`, `endereco`, `numero`, `bairro`, `estado`, `cidade`) VALUES
(1, '', '', 'nicolle@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, '', 'lovely corp', 0, 0, 0, 0, '', 0, '', '', ''),
(2, 'dahyun', '', 'dahyun@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, '', 'lovely corp', 0, 0, 0, 0, '', 0, '', '', ''),
(3, 'tzuyu', '', 'tzuyu@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, '', 'tzuyu corp', 0, 0, 0, 0, '', 0, '', '', ''),
(4, 'nayeon', '', 'nayeon@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, '', 'pop', 0, 0, 0, 0, '', 0, '', '', ''),
(5, 'nayeon', '', 'jeong@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, '', 'pop', 0, 0, 0, 0, '', 0, '', '', ''),
(6, 'nayeon', '', 'momo@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, '', 'pop', 0, 0, 0, 0, '', 0, '', '', ''),
(7, 'sana', '', 'sana@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, '', 'sana corp', 0, 0, 0, 8111450, '', 0, '', '', ''),
(8, 'sana', '', 'viado@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, '', 'sana corp', 0, 0, 0, 8111450, '', 0, '', '', ''),
(9, 'sana', '', 'sla@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, '', 'sana corp', 0, 0, 0, 8111450, '', 0, '', '', ''),
(10, 'sana', '', 'minatozaki@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, '', 'sana corp', 0, 0, 0, 8111450, '', 0, '', '', ''),
(11, 'stefany', 'chata', 'stefany@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, 'razao', 'stefany corp', 1550, 0, 25714124, 8456985, 'rua', 695, 'bairro', '', 'cidade'),
(12, 'stefany', 'chata', 'thauane@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, 'razao', 'stefany corp', 1550, 0, 25714124, 8456985, 'rua', 695, 'bairro', '', 'cidade'),
(13, 'dyna', 'chefe', 'dyna@gmail.com', 'cc7cdae08ca044c0d33f3669427cd2025c714661', 2147483647, 'razao', 'corporacao', 456, 0, 257145142, 8115464, 'rua', 65, 'bairro', '', 'cidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE IF NOT EXISTS `vaga` (
  `id_vaga` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_contratacao` varchar(100) NOT NULL,
  `titulo_vaga` varchar(100) NOT NULL,
  `funcao` varchar(100) NOT NULL,
  `requisitos` text NOT NULL,
  `salario_mensal` int(50) NOT NULL,
  `beneficios` tinytext NOT NULL,
  `jornada_trabalho` varchar(100) NOT NULL,
  `informacoes_adicionais` tinytext NOT NULL,
  `endereco_trabalho` varchar(100) NOT NULL,
  `numero_vagas` int(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_vaga`),
  UNIQUE KEY `id_empresa_fk` (`id_vaga`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`id_vaga`, `tipo_contratacao`, `titulo_vaga`, `funcao`, `requisitos`, `salario_mensal`, `beneficios`, `jornada_trabalho`, `informacoes_adicionais`, `endereco_trabalho`, `numero_vagas`, `link`) VALUES
(1, '', 'gfdgfdshgdtfsh', 'yetyteyteyty', 'gfdgfdg', 5000, 'palnop de saude', 'fkjlnadfaedr', 'gjsndfgkljsn', 'oasdhfloasnfeda', 12, ''),
(2, '', 'programador pyhton', 'programar python', 'programar em python', 5000, 'plano de saude', 'desempregado', 'voce ira programar', 'onde voce ira programar', 0, ''),
(3, '', 'programador java', 'programar em java', 'saber ', 4000, 'vr', 'jornada', 'informacoes', 'endereco', 20, 'https://docs.google.com/forms/d/1bMPnPoosM-BBe2Lfz6CcLp7Pw6VQ4hrNt6RsngJsuGE/edit'),
(4, 'homeoffice', 'ablubpsgke ge', 'kfdsflksdnflsdkn', 'gfdgfdhdgjn', 5000, 'kfdjsbfksdjfbh', 'figodshjglshg', 'udsfhgksdjgh', 'odkhlfhsd', 20, 'https://docs.google.com/forms/d/1bMPnPoosM-BBe2Lfz6CcLp7Pw6VQ4hrNt6RsngJsuGE/edit');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `vaga`
--
ALTER TABLE `vaga`
  ADD CONSTRAINT `vaga_ibfk_1` FOREIGN KEY (`id_vaga`) REFERENCES `empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
