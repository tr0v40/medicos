-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 18, 2019 at 06:15 AM
-- Server version: 5.7.24
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema`
--

-- --------------------------------------------------------

--
-- Table structure for table `especializacao`
--

CREATE TABLE `especializacao` (
  `ID_ESP` int(11) NOT NULL,
  `ESPECIALIZACAO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `especializacao`
--

INSERT INTO `especializacao` (`ID_ESP`, `ESPECIALIZACAO`) VALUES
(1, 'ALERGOLOGIA'),
(2, 'ANGIOLOGIA'),
(3, 'BUCO MAXILO'),
(4, 'CARDIOLOGIA CLINICA'),
(5, 'CARDIOLOGIA INFANTIL'),
(6, 'CIRURGIA CABEÇA E PESCOÇO'),
(7, 'CIRURGIA CARDÍACA'),
(8, 'CIRURGIA DE CABEÇA/PESCOÇO'),
(9, 'CIRURGIA DE TORAX'),
(10, 'CIRURGIA GERAL'),
(11, 'CIRURGIA PEDIÁTRICA'),
(12, 'CIRURGIA PLÁSTICA'),
(13, 'CIRURGIA TORÁCICA'),
(14, 'CIRURGIA VASCULAR'),
(15, 'CLINICA MEDICA'),
(16, 'FONOAUDIOLOGIA,'),
(17, 'ENDOCRINOLOGIA,'),
(18, 'GERIATRIA,'),
(19, 'HEMATOLOGIA,');

-- --------------------------------------------------------

--
-- Table structure for table `medico`
--

CREATE TABLE `medico` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `CRM` varchar(12) DEFAULT NULL,
  `TEL` varchar(11) NOT NULL,
  `ESTADO` varchar(100) NOT NULL,
  `CIDADE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medico`
--

INSERT INTO `medico` (`ID`, `NOME`, `CRM`, `TEL`, `ESTADO`, `CIDADE`) VALUES
(1, 'MEDICO 5', '000025/RJ', '', '', ''),
(2, 'MEDICO34', '0000443/SP', '', '', ''),
(3, 'MEDICO 6', '000004/MG', '', '', ''),
(6, 'MEDICO3', '000205/RJ', '', '', ''),
(10, 'MEDICO 5', '214214', '42525234523', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `medico_has_especializacao`
--

CREATE TABLE `medico_has_especializacao` (
  `ID` int(11) NOT NULL,
  `MEDICO_ID` int(11) DEFAULT NULL,
  `ESPEC_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `especializacao`
--
ALTER TABLE `especializacao`
  ADD PRIMARY KEY (`ID_ESP`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CRM` (`CRM`);

--
-- Indexes for table `medico_has_especializacao`
--
ALTER TABLE `medico_has_especializacao`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ESPEC_ID` (`ESPEC_ID`),
  ADD KEY `MEDICO_ID` (`MEDICO_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `especializacao`
--
ALTER TABLE `especializacao`
  MODIFY `ID_ESP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `medico`
--
ALTER TABLE `medico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `medico_has_especializacao`
--
ALTER TABLE `medico_has_especializacao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medico_has_especializacao`
--
ALTER TABLE `medico_has_especializacao`
  ADD CONSTRAINT `medico_has_especializacao_ibfk_1` FOREIGN KEY (`ESPEC_ID`) REFERENCES `especializacao` (`ID_ESP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medico_has_especializacao_ibfk_2` FOREIGN KEY (`MEDICO_ID`) REFERENCES `medico` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
