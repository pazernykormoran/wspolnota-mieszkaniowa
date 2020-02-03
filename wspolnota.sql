-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Lut 2020, 20:57
-- Wersja serwera: 10.4.6-MariaDB
-- Wersja PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wspolnota`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `adresy`
--

CREATE TABLE `adresy` (
  `idZewnetrzne` int(11) NOT NULL,
  `ulica` varchar(74) COLLATE utf8_polish_ci NOT NULL,
  `nrMieszkania` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `kodPocztowy` varchar(6) COLLATE utf8_polish_ci NOT NULL,
  `miejscowosc` varchar(31) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `adresy`
--

INSERT INTO `adresy` (`idZewnetrzne`, `ulica`, `nrMieszkania`, `kodPocztowy`, `miejscowosc`) VALUES
(1, 'Prosta', '4', '21-433', 'Warszawa'),
(3, 'Prosta', '5', '21-433', 'Warszawa'),
(2, 'Długa', '44', '45-766', 'Kraków');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `budynki`
--

CREATE TABLE `budynki` (
  `id` int(11) NOT NULL,
  `idWspolnoty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `budynki`
--

INSERT INTO `budynki` (`id`, `idWspolnoty`) VALUES
(1, 1),
(3, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `budzety`
--

CREATE TABLE `budzety` (
  `id` int(11) NOT NULL,
  `idWspolnoty` int(11) NOT NULL,
  `rokRozliczeniowy` int(4) NOT NULL,
  `typ` varchar(15) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `budzety`
--

INSERT INTO `budzety` (`id`, `idWspolnoty`, `rokRozliczeniowy`, `typ`) VALUES
(1, 1, 2020, 'aktualny'),
(2, 1, 2021, 'planowany'),
(3, 2, 2020, 'aktualny'),
(4, 2, 2021, 'planowany');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czynsze_lokalowe`
--

CREATE TABLE `czynsze_lokalowe` (
  `id` int(11) NOT NULL,
  `idLokalu` int(11) NOT NULL,
  `dataWplaty` date NOT NULL,
  `kwota` int(6) NOT NULL,
  `idBudzetu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `czynsze_lokalowe`
--

INSERT INTO `czynsze_lokalowe` (`id`, `idLokalu`, `dataWplaty`, `kwota`, `idBudzetu`) VALUES
(1, 2, '2020-02-02', 500, 3),
(2, 2, '2020-01-02', 500, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czynsze_mieszkaniowe`
--

CREATE TABLE `czynsze_mieszkaniowe` (
  `id` int(11) NOT NULL,
  `idMieszkania` int(11) NOT NULL,
  `dataWplaty` date NOT NULL,
  `kwota` int(6) NOT NULL,
  `idBudzetu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `czynsze_mieszkaniowe`
--

INSERT INTO `czynsze_mieszkaniowe` (`id`, `idMieszkania`, `dataWplaty`, `kwota`, `idBudzetu`) VALUES
(1, 7, '2020-02-02', 500, 3),
(2, 7, '2020-01-05', 500, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `podzialKosztow` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id`, `nazwa`, `podzialKosztow`) VALUES
(1, 'Usługi stałe', 'rownomierny'),
(2, 'Zaplanowane remonty', 'metrazowy'),
(3, 'Usterki', 'rownomierny'),
(4, 'Fundusz odtwórczy', 'metrazowy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lokale`
--

CREATE TABLE `lokale` (
  `id` int(11) NOT NULL,
  `idBudynku` int(11) NOT NULL,
  `numer` int(5) NOT NULL,
  `czynsz` int(6) NOT NULL,
  `powierzchnia` float NOT NULL,
  `subkonto` varchar(26) COLLATE utf8_polish_ci NOT NULL,
  `wynajety` tinyint(1) NOT NULL,
  `zagospodorowanie` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `lokale`
--

INSERT INTO `lokale` (`id`, `idBudynku`, `numer`, `czynsz`, `powierzchnia`, `subkonto`, `wynajety`, `zagospodorowanie`) VALUES
(1, 1, 8, 633, 35, '453453453453453243453', 1, 'sklep spożywczy'),
(2, 2, 7, 800, 24, '3453423377777835433', 0, 'siłownia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mieszkania`
--

CREATE TABLE `mieszkania` (
  `id` int(11) NOT NULL,
  `idBudynku` int(11) NOT NULL,
  `numer` int(4) NOT NULL,
  `czynsz` int(5) NOT NULL,
  `powierzchnia` float NOT NULL,
  `subkonto` varchar(26) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `mieszkania`
--

INSERT INTO `mieszkania` (`id`, `idBudynku`, `numer`, `czynsz`, `powierzchnia`, `subkonto`) VALUES
(1, 1, 1, 500, 43, '5646484531894563464888'),
(2, 1, 2, 555, 22, '5646484534566464888'),
(3, 1, 3, 654, 32, '56464845318945645664888'),
(4, 1, 4, 566, 76, '56464845318944564564888'),
(5, 2, 1, 322, 43, '5656756475674575475'),
(6, 2, 1, 322, 43, '5656756475674575475'),
(7, 2, 2, 212, 43, '5656756475674575475'),
(8, 2, 3, 352, 23, '5656756475674575475'),
(9, 2, 4, 122, 43, '5656756475674575475'),
(10, 3, 1, 322, 43, '5656756475674575475'),
(11, 3, 2, 212, 33, '5656756475674575475'),
(12, 3, 3, 352, 23, '5656756475674575475'),
(13, 3, 4, 122, 43, '5656756475674575475');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `plan_wydatku`
--

CREATE TABLE `plan_wydatku` (
  `id` int(11) NOT NULL,
  `idBudzetu` int(11) NOT NULL,
  `idKategorii` int(11) NOT NULL,
  `nazwa` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `czestotliwoscRoczna` int(3) NOT NULL,
  `kwota` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `plan_wydatku`
--

INSERT INTO `plan_wydatku` (`id`, `idBudzetu`, `idKategorii`, `nazwa`, `czestotliwoscRoczna`, `kwota`) VALUES
(1, 3, 1, 'Koszenie trawy', 12, 50),
(2, 3, 2, 'Wymiana okien', 1, 2000),
(3, 4, 2, 'Malowanie ścian klat', 1, 4000),
(4, 3, 1, 'Odśnieżanie', 5, 50),
(5, 3, 3, 'Usterki drobne', 1, 2000);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usterki`
--

CREATE TABLE `usterki` (
  `id` int(11) NOT NULL,
  `idUzytkownika` int(11) NOT NULL,
  `idBudynku` int(11) NOT NULL,
  `dataZgloszenia` date NOT NULL,
  `temat` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `opis` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `stan` varchar(15) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `usterki`
--

INSERT INTO `usterki` (`id`, `idUzytkownika`, `idBudynku`, `dataZgloszenia`, `temat`, `opis`, `stan`) VALUES
(1, 1, 2, '2020-02-02', 'Wybita szyba', 'Wybita szyba na klatce nr 5', 'Zrealizowano'),
(2, 2, 2, '2020-02-03', 'Spalona żarówka', 'Spalona żarówka w holu', 'Zaakceptowano');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `pytPomocnicze` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `odpPomocnicza` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `rola` varchar(15) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `imie`, `nazwisko`, `login`, `haslo`, `pytPomocnicze`, `odpPomocnicza`, `rola`) VALUES
(1, 'Mateusz', 'Szczygielski', 'mati', 'mati', 'Ocena z IPR', '2', 'właściciel'),
(2, 'Andrzej', 'Daniel', 'dan', 'dan', 'Ocena z IPR', '2', 'właściciel'),
(3, 'Andrzej', 'Nowak', 'and', 'and', 'Ocena z IPR', '2', 'lokator'),
(4, 'Andrzej', 'Kowalski', 'admin', 'admin', 'Ocena z IPR', '2', 'lokator'),
(5, 'Szymon', 'Motłoch', 'szymon', 'szymon', 'Ocena z IPR', '2', 'właściciel');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy_lokale`
--

CREATE TABLE `uzytkownicy_lokale` (
  `idUzytkownika` int(11) NOT NULL,
  `idLokalu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy_lokale`
--

INSERT INTO `uzytkownicy_lokale` (`idUzytkownika`, `idLokalu`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy_mieszkania`
--

CREATE TABLE `uzytkownicy_mieszkania` (
  `idUzytkownika` int(11) NOT NULL,
  `idMieszkania` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy_mieszkania`
--

INSERT INTO `uzytkownicy_mieszkania` (`idUzytkownika`, `idMieszkania`) VALUES
(2, 7),
(3, 13),
(4, 4),
(5, 1),
(5, 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wspolnoty_mieszkaniowe`
--

CREATE TABLE `wspolnoty_mieszkaniowe` (
  `id` int(11) NOT NULL,
  `nrKontaBankowego` varchar(26) COLLATE utf8_polish_ci NOT NULL,
  `nazwa` varchar(25) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wspolnoty_mieszkaniowe`
--

INSERT INTO `wspolnoty_mieszkaniowe` (`id`, `nrKontaBankowego`, `nazwa`) VALUES
(1, '23109028510000000137332879', 'Sąsiedzi'),
(2, '89116022020000000354915315', 'Bliźniak');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wydatki`
--

CREATE TABLE `wydatki` (
  `id` int(11) NOT NULL,
  `idPlanuWydatkow` int(11) NOT NULL,
  `idUsterki` int(11) DEFAULT NULL,
  `dataRealizacji` date NOT NULL,
  `kwota` int(6) NOT NULL,
  `opis` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wydatki`
--

INSERT INTO `wydatki` (`id`, `idPlanuWydatkow`, `idUsterki`, `dataRealizacji`, `kwota`, `opis`) VALUES
(1, 1, NULL, '2020-02-02', 50, 'Koszenie trawy'),
(2, 1, NULL, '2019-12-03', 50, 'Koszenie trawy'),
(3, 4, NULL, '2020-02-02', 50, 'Odśnieżanie'),
(4, 4, NULL, '2020-01-02', 50, 'Odśnieżanie'),
(5, 4, NULL, '2020-01-15', 50, 'Odśnieżanie'),
(6, 5, 1, '2020-02-01', 500, 'Wstawienie szyby');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `adresy`
--
ALTER TABLE `adresy`
  ADD KEY `idZewnetrzne` (`idZewnetrzne`);

--
-- Indeksy dla tabeli `budynki`
--
ALTER TABLE `budynki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idWspólnoty` (`idWspolnoty`);

--
-- Indeksy dla tabeli `budzety`
--
ALTER TABLE `budzety`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idWspólnoty` (`idWspolnoty`);

--
-- Indeksy dla tabeli `czynsze_lokalowe`
--
ALTER TABLE `czynsze_lokalowe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idLokalu` (`idLokalu`),
  ADD KEY `idBudżetu` (`idBudzetu`);

--
-- Indeksy dla tabeli `czynsze_mieszkaniowe`
--
ALTER TABLE `czynsze_mieszkaniowe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idMieszkania` (`idMieszkania`),
  ADD KEY `idBudżetu` (`idBudzetu`);

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `lokale`
--
ALTER TABLE `lokale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idBudynku` (`idBudynku`);

--
-- Indeksy dla tabeli `mieszkania`
--
ALTER TABLE `mieszkania`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idBudynku` (`idBudynku`);

--
-- Indeksy dla tabeli `plan_wydatku`
--
ALTER TABLE `plan_wydatku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idBudżetu` (`idBudzetu`) USING BTREE,
  ADD KEY `idKategorii` (`idKategorii`) USING BTREE;

--
-- Indeksy dla tabeli `usterki`
--
ALTER TABLE `usterki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUżytkownika` (`idUzytkownika`),
  ADD KEY `idBudynku` (`idBudynku`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy_lokale`
--
ALTER TABLE `uzytkownicy_lokale`
  ADD KEY `idUżytkownika` (`idUzytkownika`),
  ADD KEY `idLokalu` (`idLokalu`);

--
-- Indeksy dla tabeli `uzytkownicy_mieszkania`
--
ALTER TABLE `uzytkownicy_mieszkania`
  ADD KEY `idUżytkownika` (`idUzytkownika`),
  ADD KEY `idMieszkania` (`idMieszkania`);

--
-- Indeksy dla tabeli `wspolnoty_mieszkaniowe`
--
ALTER TABLE `wspolnoty_mieszkaniowe`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wydatki`
--
ALTER TABLE `wydatki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsterki` (`idUsterki`),
  ADD KEY `idPlanuWydatków` (`idPlanuWydatkow`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `budynki`
--
ALTER TABLE `budynki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `budzety`
--
ALTER TABLE `budzety`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `czynsze_lokalowe`
--
ALTER TABLE `czynsze_lokalowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `czynsze_mieszkaniowe`
--
ALTER TABLE `czynsze_mieszkaniowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `lokale`
--
ALTER TABLE `lokale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `mieszkania`
--
ALTER TABLE `mieszkania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `plan_wydatku`
--
ALTER TABLE `plan_wydatku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `usterki`
--
ALTER TABLE `usterki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `wspolnoty_mieszkaniowe`
--
ALTER TABLE `wspolnoty_mieszkaniowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `wydatki`
--
ALTER TABLE `wydatki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `adresy`
--
ALTER TABLE `adresy`
  ADD CONSTRAINT `adresy_ibfk_1` FOREIGN KEY (`idZewnetrzne`) REFERENCES `budynki` (`id`);

--
-- Ograniczenia dla tabeli `budynki`
--
ALTER TABLE `budynki`
  ADD CONSTRAINT `budynki_ibfk_1` FOREIGN KEY (`idWspolnoty`) REFERENCES `wspolnoty_mieszkaniowe` (`id`);

--
-- Ograniczenia dla tabeli `budzety`
--
ALTER TABLE `budzety`
  ADD CONSTRAINT `budzety_ibfk_1` FOREIGN KEY (`idWspolnoty`) REFERENCES `wspolnoty_mieszkaniowe` (`id`);

--
-- Ograniczenia dla tabeli `czynsze_lokalowe`
--
ALTER TABLE `czynsze_lokalowe`
  ADD CONSTRAINT `czynsze_lokalowe_ibfk_1` FOREIGN KEY (`idLokalu`) REFERENCES `lokale` (`id`),
  ADD CONSTRAINT `czynsze_lokalowe_ibfk_2` FOREIGN KEY (`idBudzetu`) REFERENCES `budzety` (`id`);

--
-- Ograniczenia dla tabeli `czynsze_mieszkaniowe`
--
ALTER TABLE `czynsze_mieszkaniowe`
  ADD CONSTRAINT `czynsze_mieszkaniowe_ibfk_2` FOREIGN KEY (`idBudzetu`) REFERENCES `budzety` (`id`),
  ADD CONSTRAINT `czynsze_mieszkaniowe_ibfk_3` FOREIGN KEY (`idMieszkania`) REFERENCES `mieszkania` (`id`);

--
-- Ograniczenia dla tabeli `lokale`
--
ALTER TABLE `lokale`
  ADD CONSTRAINT `lokale_ibfk_1` FOREIGN KEY (`idBudynku`) REFERENCES `budynki` (`id`);

--
-- Ograniczenia dla tabeli `mieszkania`
--
ALTER TABLE `mieszkania`
  ADD CONSTRAINT `mieszkania_ibfk_1` FOREIGN KEY (`idBudynku`) REFERENCES `budynki` (`id`);

--
-- Ograniczenia dla tabeli `plan_wydatku`
--
ALTER TABLE `plan_wydatku`
  ADD CONSTRAINT `plan_wydatku_ibfk_1` FOREIGN KEY (`idBudzetu`) REFERENCES `budzety` (`id`),
  ADD CONSTRAINT `plan_wydatku_ibfk_2` FOREIGN KEY (`idKategorii`) REFERENCES `kategorie` (`id`);

--
-- Ograniczenia dla tabeli `usterki`
--
ALTER TABLE `usterki`
  ADD CONSTRAINT `usterki_ibfk_1` FOREIGN KEY (`idUzytkownika`) REFERENCES `uzytkownicy` (`id`),
  ADD CONSTRAINT `usterki_ibfk_2` FOREIGN KEY (`idBudynku`) REFERENCES `budynki` (`id`);

--
-- Ograniczenia dla tabeli `uzytkownicy_lokale`
--
ALTER TABLE `uzytkownicy_lokale`
  ADD CONSTRAINT `uzytkownicy_lokale_ibfk_1` FOREIGN KEY (`idUzytkownika`) REFERENCES `uzytkownicy` (`id`),
  ADD CONSTRAINT `uzytkownicy_lokale_ibfk_2` FOREIGN KEY (`idLokalu`) REFERENCES `lokale` (`id`);

--
-- Ograniczenia dla tabeli `uzytkownicy_mieszkania`
--
ALTER TABLE `uzytkownicy_mieszkania`
  ADD CONSTRAINT `uzytkownicy_mieszkania_ibfk_1` FOREIGN KEY (`idUzytkownika`) REFERENCES `uzytkownicy` (`id`),
  ADD CONSTRAINT `uzytkownicy_mieszkania_ibfk_2` FOREIGN KEY (`idMieszkania`) REFERENCES `mieszkania` (`id`);

--
-- Ograniczenia dla tabeli `wydatki`
--
ALTER TABLE `wydatki`
  ADD CONSTRAINT `wydatki_ibfk_1` FOREIGN KEY (`idUsterki`) REFERENCES `usterki` (`id`),
  ADD CONSTRAINT `wydatki_ibfk_2` FOREIGN KEY (`idPlanuWydatkow`) REFERENCES `plan_wydatku` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
