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
-- Struktura tabulky `uzivateleDB`
--

CREATE TABLE `uzivateleDB` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `heslo1` varchar(255) NOT NULL,
  `heslo2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jmeno` varchar(255) NOT NULL,
  `prijmeni` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `uzivateleDB`
--

INSERT INTO `uzivateleDB` (`id`, `login`, `heslo1`, `heslo2`, `email`, `jmeno`, `prijmeni`, `admin`) VALUES
(1, 'uzivatel', '578af7399b69bf4ca0806736f4f9a0093a9a87cd', '578af7399b69bf4ca0806736f4f9a0093a9a87cd', 'test@email.cz', 'alex', 'ahoj', 0),
(2, 'pepan', '9952734fe51224fd244955b86c713402582e6c73', '9952734fe51224fd244955b86c713402582e6c73', 'test@email.cz', 'test', 'test', 0),
(3, 'admin', '664819d8c5343676c9225b5ed00a5cdc6f3a1ff3', '664819d8c5343676c9225b5ed00a5cdc6f3a1ff3', 'test@email.cz', 'aaa', 'aaa', 1);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `uzivateleDB`
--
ALTER TABLE `uzivateleDB`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login` (`login`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `uzivateleDB`
--
ALTER TABLE `uzivateleDB`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
