-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2019 at 03:40 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `idTour` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `foto` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`idTour`, `nombre`, `fecha_inicio`, `fecha_fin`, `foto`) VALUES
(5, 'Focus on Scandinavia', '2018-07-01', '2018-07-01', 'cop.jpg'),
(5820, 'Greek Island Hopper', '2018-04-08', '2018-04-08', 'greek.jpg'),
(52693, 'Full Day Sightseeing Tour of Prague', '2018-04-16', '2018-04-16', 'tercera.jpg'),
(5269424, 'Balkan Adventure', '2018-04-25', '2018-04-25', 'balcan.jpg'),
(5269425, 'Classic Europe', '2019-04-14', '2019-02-16', 'roma.jpg'),
(5269426, 'Best of UK & Ireland', '2019-05-01', '2019-05-04', 'uk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `privilegio` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `email`, `password`, `nombre`, `apellidos`, `privilegio`) VALUES
(6, 'prueba', 'prueba@gmail.com', 'prueba', 'prueba', 'prueba', 0),
(10, 'name', 'bn@nm.bj', 'pasword', 'name', 'name2', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`idTour`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `idTour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5269452;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
