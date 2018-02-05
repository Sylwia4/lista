-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Lut 2018, 22:43
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wycieczki`
--

CREATE TABLE `wycieczki` (
  `id` int(11) NOT NULL,
  `kraj` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `miasto` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `zabytek` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `zdjecie` varchar(300) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `opis` mediumtext CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `wycieczki`
--

INSERT INTO `wycieczki` (`id`, `kraj`, `miasto`, `zabytek`, `zdjecie`, `opis`) VALUES
(1, 'Polska', 'Płock', 'Katedra', 'plock_katedra', 'Bazylika katedralna w Płocku – najstarsza świątynia rzymskokatolicka i najcenniejszy zabytek Płocka, położona na wznoszącym się 60 m nad Wisłą Wzgórzu Tumskim, miejsce spoczynku władców Polski'),
(4, 'Francja', 'Paryż', 'Luwr', 'paryz_luwr', 'Luwr – dawny pałac królewski w Paryżu, obecnie mieszczący największe na świecie muzeum sztuki, ponadto mieści wiele instytucji o charakterze naukowym. Jedno z największych historycznych rezydencji w Europie.'),
(5, 'Polska', 'Płock', 'Ratusz', 'plock_ratusz', 'Klasycystyczny budynek z lat 1824-27, miejsce ostatniego posiedzenia Sejmu Królestwa Polskiego. Codziennie o godz. 12.00 i 18.00 z wieży ratusza rozlega się płocki hejnał grany przez trębacza. Atrakcją jest również scena pasowania Bolesława Krzywoustego na rycerza - naturalnej wielkości figury pojawiają się na wieży po hejnale o godz. 12.00.\r\n'),
(6, 'Polska', 'Kraków', 'Zamek', 'krakow_zamek', 'Zamek Królewski na Wawelu – zamek obronno-rezydencyjny w Krakowie, na Wawelu, o powierzchni 7040 m² z 71 salami wystawowymi. Oddział Zamku Królewskiego na Wawelu – Państwowych Zbiorów Sztuki.');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `wycieczki`
--
ALTER TABLE `wycieczki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `wycieczki`
--
ALTER TABLE `wycieczki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
