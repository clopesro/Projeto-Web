-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Maio-2023 às 13:29
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mercadinho_leandro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codigo_cliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` bigint(11) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codigo_cliente`, `nome`, `cpf`) VALUES
(1, 'maria cristiane', 00000000088),
(2, 'maria lopes', 00000000222),
(3, 'titinha', 00000000333),
(4, 'nininho', 00000004444),
(5, 'tesouro', 00000000555);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `codigo_fornecedor` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cnpj` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `telefone` int(11) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`codigo_fornecedor`, `nome`, `cnpj`, `telefone`, `endereco`, `email`) VALUES
(1, 'bemol', 00000003344, 987665454, 'avenida TORQUATO', 'BEMOL@gmail.com'),
(2, 'TAPAJOS', 00000003355, 987665444, 'avenida das MARIAS', 'tapajos@gmail.com'),
(3, 'NOVA ERA', 00000003366, 2147483647, 'avenida das torres', 'novaera@gmail.com'),
(4, 'GABRIEL', 00000000000, 0, 'endereco', 'email');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `codigo_item` int(11) NOT NULL,
  `codigo_pedido` int(11) NOT NULL,
  `codigo_produto` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`codigo_item`, `codigo_pedido`, `codigo_produto`, `descricao`) VALUES
(4, 0, 0, 'ARROZ'),
(5, 0, 0, 'FEIJAO'),
(6, 0, 0, 'FARINHA'),
(7, 0, 0, 'LEITE'),
(8, 0, 0, 'MACARRAO'),
(9, 0, 0, 'bolacha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `codigo_login` int(11) NOT NULL,
  `nome_completo_login` varchar(100) NOT NULL,
  `nome_login` varchar(50) NOT NULL,
  `senha_login` varchar(32) NOT NULL,
  `tipo_login` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`codigo_login`, `nome_completo_login`, `nome_login`, `senha_login`, `tipo_login`) VALUES
(1, 'Administrador', 'admin', '202cb962ac59075b964b07152d234b70', 0),
(2, 'Aluno', 'aluno', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `codigo_pedido` int(11) NOT NULL,
  `codigo_cliente` int(11) NOT NULL,
  `codigo_vendedor` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`codigo_pedido`, `codigo_cliente`, `codigo_vendedor`, `descricao`, `quantidade`, `data_compra`) VALUES
(4, 0, 0, 'ARROZ', 10, '2023-05-25'),
(5, 0, 0, 'FEIJAO', 5, '2023-05-25'),
(6, 0, 0, 'MACARRAO', 3, '2023-05-25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codigo_produto` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `estoque_inicial` int(11) NOT NULL,
  `estoque_atual` int(11) NOT NULL,
  `fornecedor` varchar(50) NOT NULL,
  `preco_compra` float NOT NULL,
  `preco_venda` float NOT NULL,
  `codigo_fornecedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigo_produto`, `descricao`, `estoque_inicial`, `estoque_atual`, `fornecedor`, `preco_compra`, `preco_venda`, `codigo_fornecedor`) VALUES
(4, 'ARROZ', 500, 300, 'BEMOL', 50, 60, 0),
(5, 'FEIJAO', 500, 5, 'TAPAJOS', 50, 35, 0),
(6, 'MACARRAO', 20000, 15000, 'NOVA ERA', 20, 25, 0),
(7, 'FARINHA', 800, 700, 'NOVA ERA', 30, 35, 0),
(8, 'LEITE', 600, 150, 'BEMOL', 20, 25, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `codigo_vendedor` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` bigint(11) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`codigo_vendedor`, `nome`, `cpf`) VALUES
(1, 'jacira pimenta', 00000001212),
(2, 'janaina ferreira', 00000001123),
(3, 'gabriel feitosa', 00000001414);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigo_cliente`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`codigo_fornecedor`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- Índices para tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`codigo_item`),
  ADD KEY `codigo_pedido` (`codigo_pedido`),
  ADD KEY `codigo_produto` (`codigo_produto`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`codigo_login`),
  ADD UNIQUE KEY `nome_login` (`nome_login`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codigo_pedido`),
  ADD KEY `codigo_cliente` (`codigo_cliente`),
  ADD KEY `codigo_vendedor` (`codigo_vendedor`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo_produto`),
  ADD KEY `codigo_fornecedor` (`codigo_fornecedor`);

--
-- Índices para tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`codigo_vendedor`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigo_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `codigo_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `codigo_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `codigo_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `codigo_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codigo_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `codigo_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
