-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Dez-2016 às 13:51
-- Versão do servidor: 5.5.38
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minha_biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acervo`
--

CREATE TABLE IF NOT EXISTS `acervo` (
  `id_acervo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `id_editora` int(11) DEFAULT NULL,
  `id_autor` int(11) NOT NULL,
  `id_indice` int(11) DEFAULT NULL,
  `tipo_acervo` int(11) DEFAULT NULL,
  `exemplar` int(11) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `edicao` int(11) DEFAULT NULL,
  `ano_edicao` int(11) DEFAULT NULL,
  `paginas` int(11) DEFAULT NULL,
  `tombo` varchar(20) DEFAULT NULL,
  `cdu` varchar(15) DEFAULT NULL,
  `cdd` varchar(15) DEFAULT NULL,
  `cutter` varchar(15) DEFAULT NULL,
  `isbn` varchar(15) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `palavra_chave` text,
  `pode_emprestar` varchar(1) DEFAULT 'S',
  PRIMARY KEY (`id_acervo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `acervo`
--

INSERT INTO `acervo` (`id_acervo`, `titulo`, `subtitulo`, `data_cadastro`, `id_editora`, `id_autor`, `id_indice`, `tipo_acervo`, `exemplar`, `volume`, `edicao`, `ano_edicao`, `paginas`, `tombo`, `cdu`, `cdd`, `cutter`, `isbn`, `foto`, `palavra_chave`, `pode_emprestar`) VALUES
(2, 'Desenvolvendo aplicações web com JSP e JSTL', 'Agora tem', '0000-00-00', NULL, 0, 0, 0, 1, 1, 1, 2010, 310, '', '', '', '', '', NULL, NULL, NULL),
(4, 'sdsdsd', 'dsds', '0000-00-00', 1, 1, 4, 0, 0, 0, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `aluno` varchar(200) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `escolaridade` varchar(10) DEFAULT NULL,
  `nome_pai` varchar(150) DEFAULT NULL,
  `nome_mae` varchar(150) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `fone` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `referencia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `aluno`, `endereco`, `cidade`, `bairro`, `uf`, `cep`, `email`, `data_cadastro`, `data_nascimento`, `sexo`, `escolaridade`, `nome_pai`, `nome_mae`, `rg`, `cpf`, `fone`, `celular`, `referencia`) VALUES
(1, 'Manoel Masculino Nascimento', 'Rua 49, 30', 'São LUis', '12332', 'SP', '65000-00', 'mjailton@gmail.com', '0000-00-00', NULL, 'Masculino', 'superior', 'Manoel', 'Nascimento', NULL, '12323', NULL, NULL, '12312');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(200) NOT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id_autor`, `autor`) VALUES
(1, 'Antônio Neto'),
(3, 'Peter Jandl Júnior');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editora`
--

CREATE TABLE IF NOT EXISTS `editora` (
  `id_editora` int(11) NOT NULL AUTO_INCREMENT,
  `editora` varchar(180) NOT NULL,
  PRIMARY KEY (`id_editora`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `editora`
--

INSERT INTO `editora` (`id_editora`, `editora`) VALUES
(1, 'Novatec');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE IF NOT EXISTS `emprestimo` (
  `id_emprestimo` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `data_emprestimo` date NOT NULL,
  `hora_emprestimo` time DEFAULT NULL,
  `data_devolucao` date DEFAULT NULL,
  `confirmado` varchar(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_emprestimo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `indice`
--

CREATE TABLE IF NOT EXISTS `indice` (
  `id_indice` int(11) NOT NULL AUTO_INCREMENT,
  `indice` text NOT NULL,
  PRIMARY KEY (`id_indice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `indice`
--

INSERT INTO `indice` (`id_indice`, `indice`) VALUES
(4, 'Estou alterando meu índice');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_emprestimo`
--

CREATE TABLE IF NOT EXISTS `item_emprestimo` (
  `id_item_emprestimo` int(11) NOT NULL AUTO_INCREMENT,
  `id_emprestimo` int(11) NOT NULL,
  `id_acervo` int(11) NOT NULL,
  `data_devolucao` date NOT NULL,
  `devolvido` varchar(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_item_emprestimo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
