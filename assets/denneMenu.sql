-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: localhost
-- Čas generovania: Pi 25.Sep 2020, 08:03
-- Verzia serveru: 5.7.25
-- Verzia PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `pizza`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `pizze` (
  `nazov` varchar(25) DEFAULT NULL,
  `popis` varchar(150) DEFAULT NULL,
  `vaha` int(4) DEFAULT NULL,
  `cena` float DEFAULT NULL,
  `foto` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `pizze` (`nazov`, `popis`, `vaha`, `cena`, `foto`) VALUES
('Quatro Stagioni', 'paradajková omáčka, syr Mozzarella, šunka, šampiňóny, kukurica, olivy', 620, 5.5, 'quatroStagioni'),
('Capriciosa', 'paradajková omáčka, syr Mozzarella, šunka, šampiňóny, kukurica, olivy', 620, 5.4, 'capriciosa'),
('Quasimodo', 'paradajková omáčka, syr Mozzarella, šampiňóny, syr Plesnivec, saláma', 680, 5.6, 'quasimodo'),
('Brokolicová', 'smotana, brokolica, syr Niva, syr Mozzarella', 670, 4.8, 'brokolicova'),
('Zeleninová Ratatuile', 'paradajková omáčka, syr Mozzarella, paprika, cuketa, šampiňóny, baklažán, cesnak, cherry paradajky, olivový olej', 760, 5.4, 'zeleninovaRatatuile'),
('Rukola', 'paradajková omáčka, parmská šunka, rukola, syr Mozzarella, cherry paradajky, Parmezán', 660, 6.5, 'rukola'),
('Pikantná', 'paradajková omáčka, pikantná saláma, syr Niva, Feferóny, syr Mozzarella', 640, 5.7, 'pikantna'),
('Western', 'paradajková omáčka, údená šunka, slanina, cibuľa, tavený syr, baranie rohy, kukurica', 640, 5.6, 'western'),
('Vulcano', 'paradajková omáčka, šunka, parmská šunka, smotana, slanina, baranie rohy, syr Mozzarella', 640, 6.4, 'vulcano'),
('Sedliacka', 'paradajková omáčka, syr Mozzarella, klobása, saláma, slanina, vajce, cibuľa', 540, 5.7, 'sedliacka'),
('Diavola', 'paradajková omáčka, syr Mozzarella, šunka, saláma, feferóny', 500, 5.5, 'diavola'),
('Buffallo', 'paradajková omáčka, cesnak, bazalka, olivový olej, syr Buffallo, cherry paradajky', 600, 5.3, 'buffallo'),
('Giovanni', 'paradajková omáčka, šunka, syr Niva, olivy, syr Mozzarella', 670, 6.1, 'giovanni'),
('Syrová', 'paradajková omáčka, syr Niva, syr Mozzarella, syr Feta, syr Bambino', 640, 5.5, 'syrova'),
('Šunková so šampiňónmi', 'paradajková omáčka, syr Mozzarella, šunka, šampiňóny', 670, 5.4, 'sunkovaSampinonmi'),
('Quatro Formagi', 'paradajková omáčka, syr Niva, syr Mozzarella, syr Feta, syr Chedar', 640, 5.3, 'quatroFormagi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
