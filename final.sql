-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 May 2018, 12:33:00
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `final`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veri2`
--

CREATE TABLE `veri2` (
  `id` int(11) NOT NULL,
  `ad` varchar(222) NOT NULL,
  `date` date NOT NULL,
  `sayi` int(222) NOT NULL,
  `boolen` tinyint(1) NOT NULL,
  `sifre` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `veri2`
--

INSERT INTO `veri2` (`id`, `ad`, `date`, `sayi`, `boolen`, `sifre`) VALUES
(6, 'soner2', '2018-05-03', 123, 1, '5edb79884e2f55688b7ea75698703b66');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `veri2`
--
ALTER TABLE `veri2`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `veri2`
--
ALTER TABLE `veri2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
