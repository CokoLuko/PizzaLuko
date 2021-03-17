-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: localhost
-- Čas generovania: Po 01.Mar 2021, 10:41
-- Verzia serveru: 10.4.14-MariaDB
-- Verzia PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `luko_pizzeria`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `admini`
--

CREATE TABLE `admini` (
  `id` int(2) NOT NULL,
  `prezyvka` varchar(20) NOT NULL,
  `heslo` varchar(100) NOT NULL,
  `meno` varchar(30) NOT NULL,
  `priezvisko` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `pravomoci` int(1) NOT NULL,
  `obrazok` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `admini`
--

INSERT INTO `admini` (`id`, `prezyvka`, `heslo`, `meno`, `priezvisko`, `mail`, `pravomoci`, `obrazok`) VALUES
(1, 'Legolas', 'Qm9oSmVNb2NueQ==', 'Lukáš', 'Hajdúk', 'lukasluko@outlook.sk', 0, 'legolas.jpg'),
(2, 'Balin', 'SmV6aXNaaWpl', 'Balin', 'z Hôr', 'balin@erebor.sz', 0, 'balin.png'),
(3, 'Gimli', 'SmV6aXNKZVZpYWNBa29abGF0bw==', 'Gimli', 'syn Gloina', 'gimli@erebor.sz', 0, 'gimli.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `nazov` varchar(26) NOT NULL,
  `url` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`nazov`, `url`) VALUES
('Domov', 'domov'),
('Denné menu', 'denneMenu'),
('Služby', 'sluzby'),
('O nás', 'oNas'),
('Kontakt', 'kontakt'),
('', '');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `pizze`
--

CREATE TABLE `pizze` (
  `id` int(11) NOT NULL,
  `nazov` varchar(25) DEFAULT NULL,
  `popis` varchar(150) DEFAULT NULL,
  `vaha` int(4) DEFAULT NULL,
  `cena` float DEFAULT NULL,
  `foto` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `pizze`
--

INSERT INTO `pizze` (`id`, `nazov`, `popis`, `vaha`, `cena`, `foto`) VALUES
(1, 'Quatro Stagioni', 'paradajková omáčka, syr Mozzarella, šunka, šampiňóny, kukurica, olivy', 620, 5.5, 'quatroStagioni'),
(2, 'Capriciosa', 'paradajková omáčka, syr Mozzarella, šunka, šampiňóny, kukurica, olivy', 620, 5.4, 'capriciosa'),
(3, 'Quasimodo', 'paradajková omáčka, syr Mozzarella, šampiňóny, syr Plesnivec, saláma', 680, 5.6, 'quasimodo'),
(4, 'Brokolicová', 'smotana, brokolica, syr Niva, syr Mozzarella', 670, 4.8, 'brokolicova'),
(5, 'Zeleninová Ratatuile', 'paradajková omáčka, syr Mozzarella, paprika, cuketa, šampiňóny, baklažán, cesnak, cherry paradajky, olivový olej', 760, 5.4, 'zeleninovaRatatuile'),
(6, 'Rukola', 'paradajková omáčka, parmská šunka, rukola, syr Mozzarella, cherry paradajky, Parmezán', 660, 6.5, 'rukola'),
(7, 'Pikantná', 'paradajková omáčka, pikantná saláma, syr Niva, Feferóny, syr Mozzarella', 640, 5.7, 'pikantna'),
(8, 'Western', 'paradajková omáčka, údená šunka, slanina, cibuľa, tavený syr, baranie rohy, kukurica', 640, 5.6, 'western'),
(9, 'Vulcano', 'paradajková omáčka, šunka, parmská šunka, smotana, slanina, baranie rohy, syr Mozzarella', 640, 6.4, 'vulcano'),
(10, 'Sedliacka', 'paradajková omáčka, syr Mozzarella, klobása, saláma, slanina, vajce, cibuľa', 540, 5.7, 'sedliacka'),
(11, 'Diavola', 'paradajková omáčka, syr Mozzarella, šunka, saláma, feferóny', 500, 5.5, 'diavola'),
(12, 'Buffallo', 'paradajková omáčka, cesnak, bazalka, olivový olej, syr Buffallo, cherry paradajky', 600, 5.3, 'buffallo'),
(13, 'Giovanni', 'paradajková omáčka, šunka, syr Niva, olivy, syr Mozzarella', 670, 6.1, 'giovanni'),
(14, 'Syrová', 'paradajková omáčka, syr Niva, syr Mozzarella, syr Feta, syr Bambino', 640, 5.5, 'syrova'),
(15, 'Šunková so šampiňónmi', 'paradajková omáčka, syr Mozzarella, šunka, šampiňóny', 670, 5.4, 'sunkovaSampinonmi'),
(16, 'Quatro Formagi', 'paradajková omáčka, syr Niva, syr Mozzarella, syr Feta, syr Chedar', 640, 5.3, 'quatroFormagi');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `pizze_dnes`
--

CREATE TABLE `pizze_dnes` (
  `id` int(11) NOT NULL,
  `nazov` varchar(25) DEFAULT NULL,
  `popis` varchar(150) DEFAULT NULL,
  `vaha` int(4) DEFAULT NULL,
  `cena` float DEFAULT NULL,
  `foto` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `pizze_dnes`
--

INSERT INTO `pizze_dnes` (`id`, `nazov`, `popis`, `vaha`, `cena`, `foto`) VALUES
(1, 'Quatro Stagioni', 'paradajková omáčka, syr Mozzarella, šunka, šampiňóny, kukurica, olivy', 620, 5.5, 'quatroStagioni'),
(2, 'Capriciosa', 'paradajková omáčka, syr Mozzarella, šunka, šampiňóny, kukurica, olivy', 620, 5.4, 'capriciosa'),
(3, 'Quasimodo', 'paradajková omáčka, syr Mozzarella, šampiňóny, syr Plesnivec, saláma', 680, 5.6, 'quasimodo'),
(4, 'Brokolicová', 'smotana, brokolica, syr Niva, syr Mozzarella', 670, 4.8, 'brokolicova'),
(5, 'Zeleninová Ratatuile', 'paradajková omáčka, syr Mozzarella, paprika, cuketa, šampiňóny, baklažán, cesnak, cherry paradajky, olivový olej', 760, 5.4, 'zeleninovaRatatuile'),
(6, 'Rukola', 'paradajková omáčka, parmská šunka, rukola, syr Mozzarella, cherry paradajky, Parmezán', 660, 6.5, 'rukola'),
(7, 'Pikantná', 'paradajková omáčka, pikantná saláma, syr Niva, Feferóny, syr Mozzarella', 640, 5.7, 'pikantna'),
(8, 'Western', 'paradajková omáčka, údená šunka, slanina, cibuľa, tavený syr, baranie rohy, kukurica', 640, 5.6, 'western'),
(9, 'Vulcano', 'paradajková omáčka, šunka, parmská šunka, smotana, slanina, baranie rohy, syr Mozzarella', 640, 6.4, 'vulcano'),
(10, 'Sedliacka', 'paradajková omáčka, syr Mozzarella, klobása, saláma, slanina, vajce, cibuľa', 540, 5.7, 'sedliacka'),
(11, 'Diavola', 'paradajková omáčka, syr Mozzarella, šunka, saláma, feferóny', 500, 5.5, 'diavola'),
(12, 'Buffallo', 'paradajková omáčka, cesnak, bazalka, olivový olej, syr Buffallo, cherry paradajky', 600, 5.3, 'buffallo'),
(13, 'Giovanni', 'paradajková omáčka, šunka, syr Niva, olivy, syr Mozzarella', 670, 6.1, 'giovanni'),
(14, 'Syrová', 'paradajková omáčka, syr Niva, syr Mozzarella, syr Feta, syr Bambino', 640, 5.5, 'syrova'),
(15, 'Šunková so šampiňónmi', 'paradajková omáčka, syr Mozzarella, šunka, šampiňóny', 670, 5.4, 'sunkovaSampinonmi'),
(16, 'Quatro Formagi', 'paradajková omáčka, syr Niva, syr Mozzarella, syr Feta, syr Chedar', 640, 5.3, 'quatroFormagi');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `admini`
--
ALTER TABLE `admini`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prezyvka` (`prezyvka`);

--
-- Indexy pre tabuľku `pizze`
--
ALTER TABLE `pizze`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `pizze_dnes`
--
ALTER TABLE `pizze_dnes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `admini`
--
ALTER TABLE `admini`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `pizze`
--
ALTER TABLE `pizze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pre tabuľku `pizze_dnes`
--
ALTER TABLE `pizze_dnes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
