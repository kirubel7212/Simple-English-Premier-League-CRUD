-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 05:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudoperation`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `No` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Club` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Goals` int(11) NOT NULL,
  `Salary` float NOT NULL,
  `profile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`No`, `Fname`, `Lname`, `Club`, `Position`, `Nationality`, `Age`, `Goals`, `Salary`, `profile`) VALUES
(1, 'Hernández Cascante', 'Rodri', 'Man City', 'Central Midfielder ', 'Spain', 28, 10, 225000, 'rodri.PNG'),
(2, 'Phil', 'Foden', 'Man City', 'Right Winger', 'England', 24, 10, 250000, 'foden.PNG'),
(3, 'Bruno', 'Fernandes', 'Man United', 'Midfielder ', 'Portugal ', 29, 14, 245000, 'bro.PNG'),
(4, 'Alejandro ', 'Garnacho', 'Man United', 'Left Winger', 'Argentine ', 19, 13, 230000, 'gra.PNG'),
(5, 'Kai', 'Havertz', 'Arsenal', 'Forward ', 'German', 25, 13, 350000, 'kai.PNG'),
(6, 'Martin', ' Odegaard', 'Arsenal ', 'Midfielder', 'Norway', 25, 8, 230000, 'odg.PNG'),
(7, 'Bukayo', 'Saka', 'Arsenal', 'Right Winger', 'England', 22, 23, 140000, 'saka.PNG'),
(8, 'Heung-Min', 'Son ', 'Tottenham Hotspur', 'Strikers', 'South Korea', 32, 22, 200000, 'son.PNG'),
(9, 'Mo', 'Salah', 'Liverpool ', 'Striker ', 'Egypt', 32, 15, 370000, 'Mo.PNG'),
(10, 'Diogo', ' Jota', 'Liverpool', 'Left winger', 'Portugal', 27, 6, 170000, 'jota.PNG'),
(11, 'Alexis ', 'Mac Allister', 'Liverpool ', 'Midfielder', 'Argentina ', 25, 13, 130000, 'MA.PNG'),
(12, 'Kevin', ' De Bruyne', 'Man City', 'Midfielder', 'Belgium ', 32, 11, 400000, 'KD.PNG'),
(13, 'David', 'Raya', 'Arsenal', 'Goalkeeper ', 'Spain', 28, 0, 75000, 'raya.PNG'),
(14, 'Moreira', 'Savinho', 'Man City', 'Right Winger', 'Brazil ', 20, 0, 50000, 'Savio.PNG'),
(15, 'Erling', 'Haaland ', 'Man City', 'Striker', 'Norway', 24, 37, 375000, 'hal.PNG'),
(16, 'Rúben', ' Dias', 'Man City', 'Central Defense', 'Portugal', 28, 2, 150000, 'dias.PNG'),
(17, 'Riccardo', 'Calafiori', 'Arsenal', 'Right Back', 'Italy ', 22, 0, 14000, 'cal.PNG'),
(18, 'Stefan', 'Ortega', 'Man city', 'Goalkeeper ', 'German', 31, 1, 55000, 'ort.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
