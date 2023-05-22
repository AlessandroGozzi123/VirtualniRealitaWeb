-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost
-- Vytvořeno: Pát 03. čen 2022, 21:45
-- Verze serveru: 10.5.13-MariaDB-log
-- Verze PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `alessandro_gozzi`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `forumDB`
--

CREATE TABLE `forumDB` (
  `id` int(11) NOT NULL,
  `prezdivka` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `prispevek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `forumDB`
--

INSERT INTO `forumDB` (`id`, `prezdivka`, `tema`, `prispevek`) VALUES
(17, 'uzivatel', 'vzkaz', 'Dobrý den. Mohl bych být administrátor?'),
(23, 'admin', 'vzkaz', 'Ne');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `forumDB`
--
ALTER TABLE `forumDB`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `forumDB`
--
ALTER TABLE `forumDB`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
