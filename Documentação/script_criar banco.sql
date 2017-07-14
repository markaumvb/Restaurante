-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jul-2017 às 07:07
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgr`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agregacoes`
--

CREATE TABLE `agregacoes` (
  `id` int(11) NOT NULL,
  `mesa_id` int(11) DEFAULT NULL,
  `mesa_id_a` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agregacoes`
--

INSERT INTO `agregacoes` (`id`, `mesa_id`, `mesa_id_a`) VALUES
(0, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapios`
--

CREATE TABLE `cardapios` (
  `id` int(11) NOT NULL,
  `codigo` varchar(5) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `cardapios`
--

INSERT INTO `cardapios` (`id`, `codigo`, `descricao`, `created`, `modified`, `preco`, `status`) VALUES
(1, '001', 'Pizza de Calabresa', '2017-07-14 04:27:07', '2017-07-14 04:27:07', '29.90', 'Ativo'),
(2, '002', 'Coca-Cola Lata 350ml', '2017-07-14 04:27:48', '2017-07-14 04:27:48', '3.00', 'Ativo'),
(3, '003', 'Cerveja Skol lata 350ml', '2017-07-14 04:28:01', '2017-07-14 04:28:01', '5.00', 'Ativo'),
(4, '004', 'Pizza de Frango Catupiry', '2017-07-14 04:31:58', '2017-07-14 04:31:58', '15.00', 'Ativo'),
(5, '005', 'Porção de batata frita', '2017-07-14 04:32:20', '2017-07-14 04:32:20', '20.00', 'Ativo'),
(6, '006', 'Pizza portuguesa Grande', '2017-07-14 04:33:02', '2017-07-14 04:33:02', '28.00', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapios_pedidos`
--

CREATE TABLE `cardapios_pedidos` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `cardapio_id` int(11) NOT NULL,
  `obs` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone_residencial` varchar(20) DEFAULT NULL,
  `telefone_celular` varchar(20) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone_residencial`, `telefone_celular`, `dt_nascimento`, `status`, `created`, `modified`) VALUES
(0, 'Marcus Vinicius Bertoncello', '05519597979', '', '43996145371', NULL, 'Ativo', '2017-07-14 05:01:28', '2017-07-14 05:01:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE `contas` (
  `id` int(11) NOT NULL,
  `mesa_id` int(11) NOT NULL,
  `valor` float(10,2) NOT NULL DEFAULT '0.00',
  `status` varchar(20) NOT NULL DEFAULT 'Pendente',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone_residencial` varchar(20) DEFAULT NULL,
  `telefone_celular` varchar(20) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `dt_admissao` date NOT NULL,
  `dt_demissao` date DEFAULT NULL,
  `pis` varchar(20) DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `comissao` decimal(10,2) DEFAULT NULL,
  `foto` blob,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesas`
--

CREATE TABLE `mesas` (
  `id` int(11) NOT NULL,
  `numero_mesa` int(11) NOT NULL,
  `cadeiras` int(11) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Livre',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mesas`
--

INSERT INTO `mesas` (`id`, `numero_mesa`, `cadeiras`, `status`, `created`, `modified`) VALUES
(1, 1, 4, 'Livre', '2017-07-14 04:33:48', '2017-07-14 04:52:59'),
(2, 2, 4, 'Livre', '2017-07-14 04:33:57', '2017-07-14 04:33:57'),
(3, 3, 6, 'Livre', '2017-07-14 04:34:04', '2017-07-14 04:34:04'),
(4, 4, 6, 'Livre', '2017-07-14 04:34:12', '2017-07-14 04:34:12'),
(5, 5, 2, 'Livre', '2017-07-14 04:34:18', '2017-07-14 04:34:18'),
(6, 10, 10, 'Livre', '2017-07-14 04:52:31', '2017-07-14 04:52:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesas_reservas`
--

CREATE TABLE `mesas_reservas` (
  `id` int(11) NOT NULL,
  `mesa_id` int(11) NOT NULL,
  `reserva_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `mesa_id` int(11) NOT NULL,
  `datahora` datetime NOT NULL,
  `valortotal` float(10,2) NOT NULL,
  `entrega` varchar(20) NOT NULL DEFAULT 'Não',
  `status` varchar(20) NOT NULL DEFAULT 'Pendente',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_cardapios`
--

CREATE TABLE `pedidos_cardapios` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `cardapio_id` int(11) NOT NULL,
  `obs` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quotas_contas`
--

CREATE TABLE `quotas_contas` (
  `id` int(11) NOT NULL,
  `conta_id` int(11) NOT NULL,
  `valor` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `lugares` int(11) NOT NULL,
  `datahora` datetime NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agregacoes`
--
ALTER TABLE `agregacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardapios`
--
ALTER TABLE `cardapios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indexes for table `cardapios_pedidos`
--
ALTER TABLE `cardapios_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`);

--
-- Indexes for table `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero_mesa` (`numero_mesa`);

--
-- Indexes for table `mesas_reservas`
--
ALTER TABLE `mesas_reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos_cardapios`
--
ALTER TABLE `pedidos_cardapios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotas_contas`
--
ALTER TABLE `quotas_contas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardapios`
--
ALTER TABLE `cardapios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
