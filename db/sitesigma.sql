-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Ago-2022 às 01:11
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
-- Banco de dados: `sitesigma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `usuario`, `senha`, `Ativo`) VALUES
(1, 'pietro', '1234', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `ContatoID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefone` varchar(15) NOT NULL,
  `Mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`ContatoID`, `Nome`, `Email`, `Telefone`, `Mensagem`) VALUES
(1, 'Pietro', 'emailteste@gmail.com', '54050345040', 'Mensagem teste'),
(2, 'Amanda', 'amanda@gmail.com', '51982993394', 'Amei o site!!!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ProdutoID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` longtext NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Preco` float NOT NULL,
  `CategoriaID` int(11) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ProdutoID`, `Nome`, `Descricao`, `Imagem`, `Preco`, `CategoriaID`, `Ativo`) VALUES
(1, 'Pietro Legal!', 'Pietro é muito legal!', 'http://s2.glbimg.com/lTUhRSG_HLiZm_hnV0PtPVRY1dw=/e.glbimg.com/og/ed/f/original/2016/04/05/2c.jpg', 1000, 1, 1),
(2, 'Capivara Daora', 'Muito radical, sabia?', 'https://www.es.gov.br/Media/PortalES/Noticias/Capivarinha%20-%20Thassiane%20Targino%20-%20Ipram%20(1).jpeg', 2000, 1, 1),
(3, 'Capivara Faxineira', 'Ele limpa tudo!', 'https://midias.correiobraziliense.com.br/_midias/jpg/2021/01/25/675x450/1_whatsapp_image_2021_01_25_at_09_58_25-6499776.jpeg', 300, 1, 1),
(4, 'Jonas a capivara', 'Capivara das crias', 'https://cdn6.campograndenews.com.br/uploads/noticias/2021/08/20/ab0c1b3df5ac866e96c9f391dd89e77470273edd.jpg', 3000, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`ContatoID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ProdutoID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `ContatoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ProdutoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
