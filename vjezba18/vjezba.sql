-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2026 at 04:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vjezba`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_code` char(2) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_code`, `country_name`) VALUES
('AR', 'Argentina'),
('AT', 'Austria'),
('AU', 'Australia'),
('BA', 'Bosnia and Herzegovina'),
('DE', 'Germany'),
('HR', 'Croatia'),
('HU', 'Hungary'),
('RS', 'Serbia'),
('SI', 'Slovenia'),
('UK', 'United Kingdom'),
('US', 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `country_code` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `username`, `password`, `country_code`) VALUES
(1, 'John', 'Doe', 'john@email.com', 'johndoe', 'pass123', 'US'),
(2, 'Ana', 'Horvat', 'ana@email.com', 'anah', 'pass123', 'HR'),
(3, 'Marko', 'Perić', 'marko@email.com', 'markop', 'pass123', 'HR'),
(4, 'Ivan', 'Kovačić', 'ivan@email.com', 'ivank', 'pass123', 'HR'),
(5, 'Bob', 'Johnson', 'bob@email.com', 'bobj', 'pass123', 'AR'),
(6, 'Charlie', 'Milie', 'charlie@email.com', 'charlieb', 'pass123', 'AR'),
(7, 'Frank', 'Miller', 'frank@email.com', 'frankm', 'pass123', 'AR'),
(8, 'Grace', 'Moore', 'grace@email.com', 'gracem', 'pass123', 'AR'),
(9, 'Winnie', 'Young', 'winnie@email.com', 'winniey', 'pass123', 'AU'),
(10, 'Petar', 'Petrović', 'petar@email.com', 'petarp', 'pass123', 'RS'),
(11, 'Maria', 'Schmidt', 'maria@email.com', 'marias', 'pass123', 'DE'),
(12, 'Hans', 'Müller', 'hans@email.com', 'hansm', 'pass123', 'DE'),
(13, 'Eva', 'Novak', 'eva@email.com', 'evan', 'pass123', 'SI'),
(14, 'User', 'WithoutCountry', 'no@country.com', 'nocountry', 'pass123', 'UK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
