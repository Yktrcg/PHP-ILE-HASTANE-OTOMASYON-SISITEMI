-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 08 Haz 2023, 09:52:50
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hastane_otomasyon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ailehekim1`
--

CREATE TABLE `ailehekim1` (
  `aile_id` int(11) NOT NULL,
  `aile_sehir` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `aile_ilce` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `aile_ocak` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `aile_doktor` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `aile_tarih` date NOT NULL,
  `randevu_hasta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `asitablo`
--

CREATE TABLE `asitablo` (
  `aile_id_asi` int(11) NOT NULL,
  `aile_sehir_asi` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `aile_ilce_asi` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `aile_ocak_asi` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `aile_doktor_asi` varchar(25) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `aile_tarih_asi` date NOT NULL,
  `randevu_hasta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adsoyad` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` int(11) NOT NULL,
  `kullanici_password` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_tc`, `kullanici_password`) VALUES
(1, 'yahya', 1223, 'pass123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE `randevu` (
  `randevu_id` int(11) NOT NULL,
  `randevu_sehir` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_hastane` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_doktor` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_tarih` date NOT NULL,
  `randevu_klinik` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_hasta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ailehekim1`
--
ALTER TABLE `ailehekim1`
  ADD PRIMARY KEY (`aile_id`);

--
-- Tablo için indeksler `asitablo`
--
ALTER TABLE `asitablo`
  ADD PRIMARY KEY (`aile_id_asi`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `randevu`
--
ALTER TABLE `randevu`
  ADD PRIMARY KEY (`randevu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ailehekim1`
--
ALTER TABLE `ailehekim1`
  MODIFY `aile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `asitablo`
--
ALTER TABLE `asitablo`
  MODIFY `aile_id_asi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `randevu`
--
ALTER TABLE `randevu`
  MODIFY `randevu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
