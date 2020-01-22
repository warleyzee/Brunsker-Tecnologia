-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jan 22, 2020 as 10:16 
-- Versão do Servidor: 5.1.37
-- Versão do PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `brunsker`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `id_cadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `apelido` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `data_nacimento` date DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cadastro`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cadastro`, `nome`, `apelido`, `email`, `cpf`, `sexo`, `data_nacimento`, `estado`, `cidade`, `cep`, `telefone`, `celular`, `usuario`, `senha`) VALUES
(40, 'Brunsker', 'Tecnologia', 'brunsker@brunsker.com.br', '11111111111', 'Marculino', '2020-01-16', 'Minas Gerais', 'Belo Horizonte', '31250-310', '(31) 3395-8574', '999999999', 'Brunsker', '123'),
(41, 'Warley ', 'Souza', 'warleyzee@hotmail.com', '10680613676', 'Masculino', '2020-01-31', 'MG', 'Belo Horizonte', '30575590', '99999999', '31920016647', 'warley', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `senha`) VALUES
(1, 'admin', '123'),
(2, 'Brunsker', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
