-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 02-Maio-2022 às 14:50
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rocketshoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL,
  `cliente` varchar(120) DEFAULT NULL,
  `produto` varchar(120) DEFAULT NULL,
  `qnt_produto` int(11) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `cliente`, `produto`, `qnt_produto`, `created`, `modified`) VALUES
(1, 'Domingos', 'Carne do sol', 15, '2017-09-23 00:00:00', NULL),
(0, 'Domingos', 'tenis', 2, '2022-05-02 11:22:26', NULL),
(0, '', 'tenis', 2, '2022-05-02 11:23:31', NULL),
(0, '', 'tenis', 2, '2022-05-02 11:24:50', NULL),
(0, 'Domingos', 'tenis', 2, '2022-05-02 11:26:03', NULL),
(0, '', '', 0, '2022-05-02 11:26:52', NULL),
(0, '', 'tenis', 2, '2022-05-02 11:49:08', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
