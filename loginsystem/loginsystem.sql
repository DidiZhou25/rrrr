-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 jul 2018 om 09:04
-- Serverversie: 10.1.33-MariaDB
-- PHP-versie: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reserve`
--

CREATE TABLE `reserve` (
  `user_id` int(11) NOT NULL,
  `kind` varchar(256) NOT NULL,
  `datepicker` varchar(256) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `birth_date` varchar(256) NOT NULL,
  `bsn_number` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone_number` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `postal_code` varchar(256) NOT NULL,
  `residence` varchar(256) NOT NULL,
  `notes` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reserve`
--

INSERT INTO `reserve` (`user_id`, `kind`, `datepicker`, `first_name`, `last_name`, `birth_date`, `bsn_number`, `email`, `phone_number`, `address`, `postal_code`, `residence`, `notes`) VALUES
(1, 'aa', 'aa', 'Ding', 'Zhou', 'a', 'a', 'didizhou25@hotmail.com', '653305809', '2e opbouwstraat, 14', '3076 PS', 'Rotterdam', 'aaa'),
(2, 'aa', 'aa', 'Ding', 'Zhou', 'a', 'a', 'didizhou25@hotmail.com', '653305809', '2e opbouwstraat, 14', '3076 PS', 'Rotterdam', 'aaa'),
(3, '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'a', 'aa', 'Ding', 'Zhou', 'a', 'a', 'didizhou25@hotmail.com', '653305809', '2e opbouwstraat, 14', '3076 PS', 'Rotterdam', 'aaa');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(3, 'aa', 'aa', 'didizhou25@hotmail.com', 'Admin', '$2y$10$GUaoj0gdOHSLFFugzARgE.oeFiWGWIIkJES2HDJDwAjlgKm6RgJXC');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `reserve`
--
ALTER TABLE `reserve`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
