-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Out-2021 às 01:13
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `abraco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE `cor` (
  `id_cor` int(11) NOT NULL,
  `nome_cor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cor`
--

INSERT INTO `cor` (`id_cor`, `nome_cor`) VALUES
(1, 'vermelho'),
(2, 'azul'),
(3, 'amarelo'),
(4, 'laranja'),
(5, 'verde'),
(6, 'roxo'),
(7, 'azul claro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

CREATE TABLE `doacao` (
  `id_doacao` int(11) NOT NULL,
  `imagem` varchar(400) DEFAULT NULL,
  `quantidade` int(2) NOT NULL,
  `tamanho` varchar(3) NOT NULL,
  `faixa_etaria` bit(1) NOT NULL,
  `retirada` bit(1) NOT NULL,
  `escolha` bit(1) NOT NULL,
  `descricao` varchar(4096) DEFAULT NULL,
  `id_status` int(11) NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `id_tipo_roupa` int(11) NOT NULL,
  `id_cor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `rua` varchar(80) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `cidade` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `doacao`
--

INSERT INTO `doacao` (`id_doacao`, `imagem`, `quantidade`, `tamanho`, `faixa_etaria`, `retirada`, `escolha`, `descricao`, `id_status`, `id_sexo`, `id_tipo_roupa`, `id_cor`, `id_usuario`, `rua`, `bairro`, `numero`, `cidade`) VALUES
(8, '1.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato'),
(9, '9.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato'),
(10, '10.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato'),
(11, '11.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato'),
(12, '12.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato'),
(13, '13.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato'),
(14, '14.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato'),
(15, '15.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato'),
(16, '16.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato'),
(17, '17.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato'),
(18, '18.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato'),
(19, '19.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato'),
(20, '20.jpeg', 4, 'GG', b'1', b'1', b'1', 'aaa', 1, 2, 3, 3, 61, 'Tupinambás', 'Jardim Nova Belém', '572', 'Francisco Morato');

-- --------------------------------------------------------

--
-- Estrutura da tabela `interesse`
--

CREATE TABLE `interesse` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_doacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` int(11) NOT NULL,
  `nome_sexo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `nome_sexo`) VALUES
(1, 'feminino'),
(2, 'masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nome_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id_status`, `nome_status`) VALUES
(1, 'disponível'),
(2, 'em acerto'),
(3, 'doado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo_roupa` int(11) NOT NULL,
  `nome_roupa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id_tipo_roupa`, `nome_roupa`) VALUES
(1, 'camiseta'),
(2, 'shorts'),
(3, 'calça moletom'),
(4, 'calça jeans'),
(5, 'camiseta manga longa'),
(6, 'blusa de moletom'),
(7, 'jaco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `celular` char(15) NOT NULL,
  `telefone_fixo` char(14) DEFAULT NULL,
  `cpf` char(14) DEFAULT NULL,
  `dia` smallint(2) NOT NULL,
  `mes` varchar(25) NOT NULL,
  `ano` smallint(4) NOT NULL,
  `rua` varchar(80) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `cep` char(9) NOT NULL,
  `opcao` bit(1) NOT NULL,
  `autorizacao` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `celular`, `telefone_fixo`, `cpf`, `dia`, `mes`, `ano`, `rua`, `bairro`, `numero`, `cidade`, `cep`, `opcao`, `autorizacao`) VALUES
(61, 'Victor', 'victor@victor.com', 'bilibertadores', '(11)98980-8390', '(11)4002-8922', '109.876.543-21', 28, 'Março', 2010, 'Adriano VI', 'Jardim Nossa Senhora das Graças', '546', 'Francisco Morato', '07936-179', b'1', 1),
(62, 'Victor', 'victor@victor', '123', '(11)98980-8390', '(11)4002-8922', '109.876.543-21', 28, 'Março', 2010, 'Adriano VI', 'Jardim Nossa Senhora das Graças', '546', 'Francisco Morato', '07936-179', b'1', 1),
(63, 'Victor', 'victor1@victor.com', '123456789', '(11)98980-8390', '(11)4002-8922', '109.876.543-21', 28, 'Março', 2010, 'Adriano VI', 'Jardim Nossa Senhora das Graças', '546', 'Francisco Morato', '07936-179', b'1', 1),
(64, 'Victor', 'victor1@victor', '123', '(11)98980-8390', '(11)4002-8922', '109.876.543-21', 28, 'Março', 2010, 'Adriano VI', 'Jardim Nossa Senhora das Graças', '546', 'Francisco Morato', '07936-179', b'1', 1),
(65, 'Victor', 'victor2@victor.com', '123456789', '(11)989808390', '(11)4002-8922', '109.876.543-21', 28, 'Março', 2010, 'Adriano VI', 'Jardim Nossa Senhora das Graças', '546', 'Francisco Morato', '07936-179', b'1', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cor`
--
ALTER TABLE `cor`
  ADD PRIMARY KEY (`id_cor`);

--
-- Índices para tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`id_doacao`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_tipo_roupa` (`id_tipo_roupa`),
  ADD KEY `id_cor` (`id_cor`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `FKCOD` (`id_sexo`);

--
-- Índices para tabela `interesse`
--
ALTER TABLE `interesse`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_doacao` (`id_doacao`);

--
-- Índices para tabela `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Índices para tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Índices para tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo_roupa`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
  MODIFY `id_doacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `FKCOD` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`),
  ADD CONSTRAINT `doacao_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `doacao_ibfk_2` FOREIGN KEY (`id_tipo_roupa`) REFERENCES `tipo` (`id_tipo_roupa`),
  ADD CONSTRAINT `doacao_ibfk_3` FOREIGN KEY (`id_cor`) REFERENCES `cor` (`id_cor`),
  ADD CONSTRAINT `doacao_ibfk_4` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `interesse`
--
ALTER TABLE `interesse`
  ADD CONSTRAINT `interesse_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `interesse_ibfk_2` FOREIGN KEY (`id_doacao`) REFERENCES `doacao` (`id_doacao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
