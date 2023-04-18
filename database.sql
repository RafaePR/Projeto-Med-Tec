-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Abr-2023 às 14:29
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `medtec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `codes`
--

CREATE TABLE `codes` (
  `ID` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `codes`
--

INSERT INTO `codes` (`ID`, `code`, `cpf`) VALUES
(5, 'BiD#uQ*D39', '111.222.333-80'),
(6, 'Xca*$SiBat', '111.222.333-80');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospital_geral_staff`
--

CREATE TABLE `hospital_geral_staff` (
  `ID` int(11) NOT NULL,
  `usernameMed` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passwordMed` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `hospital_geral_staff`
--

INSERT INTO `hospital_geral_staff` (`ID`, `usernameMed`, `passwordMed`) VALUES
(3, 'pingolo', 'macacas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medtec_devs`
--

CREATE TABLE `medtec_devs` (
  `ID` int(11) NOT NULL,
  `usernameDev` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passwordDev` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `medtec_devs`
--

INSERT INTO `medtec_devs` (`ID`, `usernameDev`, `passwordDev`) VALUES
(3, 'pingolo', '91071444c37f60ebdba1d92f1723e149');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `hospital_geral_staff`
--
ALTER TABLE `hospital_geral_staff`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `medtec_devs`
--
ALTER TABLE `medtec_devs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `codes`
--
ALTER TABLE `codes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `hospital_geral_staff`
--
ALTER TABLE `hospital_geral_staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `medtec_devs`
--
ALTER TABLE `medtec_devs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
