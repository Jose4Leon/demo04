-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 18, 2022 at 11:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddw601`
--

-- --------------------------------------------------------

--
-- Table structure for table `participantes`
--

CREATE TABLE `participantes` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `ape` varchar(50) NOT NULL,
  `fechna` date NOT NULL,
  `cor` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `est` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `participantes`
--

INSERT INTO `participantes` (`id`, `nom`, `ape`, `fechna`, `cor`, `sex`, `est`) VALUES
(1, 'jose', 'leon', '2004-05-20', 'lk@gmail.com', '1', '2'),
(2, 'Oscar', 'Corral', '2004-05-20', 'lk@gmail.com', '1', '1'),
(3, 'Oscar', 'torres', '2004-05-20', 'lks@gmail.com', '1', '1'),
(4, 'Oscar', 'heidy', '2004-05-20', 'lks@gamil.com', '1', '1'),
(5, 'Oscar', 'torres', '2004-05-20', 'lks@gmail.com', 'Masculino', 'Soltero'),
(6, 'Luis', 'Escobar Huamani', '2004-05-20', 'kill@456senati.pe', 'Masculino', 'Soltero'),
(7, 'Sam', 'Smith ', '1999-01-30', 'qwe@senati.pe', 'Masculino', 'Soltero'),
(8, 'Sam', 'Smith', '2004-05-20', 'ert@senati.pe', 'Masculino', 'Soltero'),
(9, 'heidy', 'heidy', '2006-05-20', 'qew@senati.pe', 'Masculino', 'Soltero'),
(10, 'asd', 'asd', '5724-02-14', 'tr@gamil.com', 'Femenino', 'Soltero'),
(11, 'Oscar', 'torres', '5060-05-20', 'qwe@senati.pe', '0', 'Viudo'),
(12, 'heidy', 'torres', '4545-06-13', 'ses@senati.pe', 'Masculino', 'Divorciado');

-- --------------------------------------------------------

--
-- Table structure for table `trabajador`
--

CREATE TABLE `trabajador` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `ape` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trabajador`
--

INSERT INTO `trabajador` (`id`, `nom`, `ape`, `cor`) VALUES
(26, 'Jorge', 'Luque', 'jluque@senati.pe'),
(27, 'Elva', 'Martinez', 'emartinez@senati.pe'),
(28, 'Andres', 'Garcia', 'agarcia@senati.pe'),
(29, 'alicia', 'avalos', 'a@senati.pe'),
(30, 'Antonio', 'Valle', 'avalle@senati.pe'),
(31, 'Jose', 'Leon ', 'killandyou123@gmail.com'),
(32, 'jose', 'leon', 'lk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `clave`) VALUES
(1, 'ahuayanay', '654321'),
(2, 'wrivas', '123456'),
(3, 'rnazario', '111222'),
(4, 'jgarcia', '654654'),
(5, 'flopez', '654654'),
(6, 'dtomas', '123412'),
(7, 'jluque', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
