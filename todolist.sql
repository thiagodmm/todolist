-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Mar-2022 às 02:43
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `todolist`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `titulo` varchar(60) NOT NULL,
  `datalimite` date NOT NULL,
  `finalizada` varchar(3) NOT NULL,
  `idtarefa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `perfilAcesso` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`iduser`, `usuario`, `senha`, `perfilAcesso`) VALUES
(11, 'David', '$2y$10$lrgfxzlPJrM2nyZxqKYPP.pyRZJsGxY.bjltZOLo8pG6waYncnT1q', ''),
(12, 'King', '$2y$10$ph5tpKOPiX8PaRODk.RDLuVPsRdA6idBT6yfLeuCEBYgzpCOFz6we', ''),
(13, 'Andy', '$2y$10$7opEOPSOMgI1BL2SNR4MNeL/28jbLwzpVcpfXSccWunHgkm55dXZi', ''),
(14, 'Mikkey', '$2y$10$atDI1sx7CpdiTzhYS3ikx.Ch9dDZTzd85yWCmMrmcS2iHA1I3hG5C', ''),
(15, 'Michael', '$2y$10$ywJL2r0Clq3IaocVvuycAOBOY.DEkmjo0GTkZ9ipDlM71BtqYOitm', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`idtarefa`),
  ADD UNIQUE KEY `tarefas_UNIQUE` (`idtarefa`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `user_UNIQUE` (`iduser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `idtarefa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
