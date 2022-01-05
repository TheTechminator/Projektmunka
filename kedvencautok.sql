-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Jan 04. 09:16
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `kedvencautok`
--
CREATE DATABASE IF NOT EXISTS `kedvencautok` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `kedvencautok`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `autok`
--

CREATE TABLE `autok` (
  `id` int(11) NOT NULL,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `evjarat` int(11) NOT NULL,
  `marka_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `autok`
--

INSERT INTO `autok` (`id`, `nev`, `evjarat`, `marka_id`) VALUES
(2, 'M5', 2015, 1),
(3, 'valkyrie', 2021, 17),
(4, 'E-tron', 2021, 11),
(5, 'phantom', 1997, 8),
(6, 'veyron', 2015, 9),
(7, 'spider', 2012, 13),
(8, 'Civic', 2002, 10),
(9, 'sorento', 2016, 5),
(10, 'agera', 2018, 14),
(11, 'Huracan', 2019, 15),
(12, 'Rx-7', 2012, 2),
(13, '720s', 2018, 16),
(14, 'AMG gt 63', 2020, 6),
(15, '911', 2012, 7),
(16, 'Swift', 1999, 12),
(17, 'Model s plaid', 2021, 3),
(18, 'Passat 1.9 TDI', 2005, 4);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `markak`
--

CREATE TABLE `markak` (
  `id` int(11) NOT NULL,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `markak`
--

INSERT INTO `markak` (`id`, `nev`) VALUES
(1, 'BMW'),
(2, 'Mazda'),
(3, 'Tesla'),
(4, 'Volkswagen'),
(5, 'Kia'),
(6, 'Mercedes'),
(7, 'Porsche'),
(8, 'Bentley'),
(9, 'Bugatti'),
(10, 'Honda'),
(11, 'Audi'),
(12, 'Suzuki'),
(13, 'Ferrari'),
(14, 'Koenigsegg'),
(15, 'Lamborghini'),
(16, 'McLaren'),
(17, 'Aston Martin');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `autok`
--
ALTER TABLE `autok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marka_id` (`marka_id`);

--
-- A tábla indexei `markak`
--
ALTER TABLE `markak`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `autok`
--
ALTER TABLE `autok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT a táblához `markak`
--
ALTER TABLE `markak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `autok`
--
ALTER TABLE `autok`
  ADD CONSTRAINT `autok_ibfk_1` FOREIGN KEY (`marka_id`) REFERENCES `markak` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
