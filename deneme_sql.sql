-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Nis 2023, 17:51:41
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `deneme.sql`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_baslik` varchar(100) NOT NULL,
  `ayar_description` varchar(255) NOT NULL,
  `ayar_keywords` varchar(255) NOT NULL,
  `ayar_facebook` varchar(150) NOT NULL,
  `ayar_twitter` varchar(150) NOT NULL,
  `ayar_instagram` varchar(150) NOT NULL,
  `ayar_youtube` varchar(150) NOT NULL,
  `ayar_msunucu` varchar(100) NOT NULL,
  `ayar_mport` int(4) NOT NULL,
  `ayar_mkadi` varchar(100) NOT NULL,
  `ayar_msifre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aydinlatma_ev_aydinlatmalari`
--

CREATE TABLE `aydinlatma_ev_aydinlatmalari` (
  `uid` int(11) NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_fiyat` varchar(150) NOT NULL,
  `urun_kodu` varchar(150) NOT NULL,
  `urun_renk` varchar(150) NOT NULL,
  `urun_malzeme` varchar(150) NOT NULL,
  `urun_genislik` varchar(150) NOT NULL,
  `urun_yukseklik` varchar(150) NOT NULL,
  `urun_ampul_sayisi` varchar(150) NOT NULL,
  `urun_stil` varchar(150) NOT NULL,
  `urun_aciklama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banyo_batarya_musluk`
--

CREATE TABLE `banyo_batarya_musluk` (
  `uid` int(11) NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_fiyat` varchar(150) NOT NULL,
  `urun_kodu` varchar(150) NOT NULL,
  `urun_renk` varchar(150) NOT NULL,
  `urun_malzeme` varchar(150) NOT NULL,
  `urun_genislik` varchar(150) NOT NULL,
  `urun_yukseklik` varchar(150) NOT NULL,
  `urun_derinlik` varchar(150) NOT NULL,
  `urun_agirlik` varchar(150) NOT NULL,
  `urun_aciklama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banyo_dus_sistemleri`
--

CREATE TABLE `banyo_dus_sistemleri` (
  `uid` int(11) NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_fiyat` varchar(150) NOT NULL,
  `urun_kodu` varchar(150) NOT NULL,
  `urun_tekne_yuksekligi` varchar(150) NOT NULL,
  `urun_tekne_genisligi` varchar(150) NOT NULL,
  `urun_tekne_derinligi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dekorasyon_cop_kutusu`
--

CREATE TABLE `dekorasyon_cop_kutusu` (
  `uid` int(11) NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_fiyat` varchar(150) NOT NULL,
  `urun_kodu` varchar(150) NOT NULL,
  `urun_genislik` varchar(150) NOT NULL,
  `urun_cap` varchar(150) NOT NULL,
  `urun_yukseklik` varchar(150) NOT NULL,
  `urun_derinlik` varchar(150) NOT NULL,
  `urun_litre` varchar(150) NOT NULL,
  `urun_renk` varchar(150) NOT NULL,
  `urun_malzeme` varchar(150) NOT NULL,
  `urun_aciklama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dekorasyon_duvar_kagitlari`
--

CREATE TABLE `dekorasyon_duvar_kagitlari` (
  `uid` int(11) NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_fiyat` varchar(150) NOT NULL,
  `urun_kodu` varchar(150) NOT NULL,
  `urun_renk` varchar(150) NOT NULL,
  `urun_uygulama_alani` varchar(150) NOT NULL,
  `urun_silinebilirlik` varchar(150) NOT NULL,
  `urun_boyanabilirlik` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dekorasyon_ev_tekstili`
--

CREATE TABLE `dekorasyon_ev_tekstili` (
  `uid` int(11) NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_fiyat` varchar(150) NOT NULL,
  `urun_kodu` varchar(150) NOT NULL,
  `urun_genislik` varchar(150) NOT NULL,
  `urun_yukseklik` varchar(150) NOT NULL,
  `urun_rengi` varchar(150) NOT NULL,
  `urun_malzeme` varchar(150) NOT NULL,
  `urun_aciklama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dekorasyon_obje`
--

CREATE TABLE `dekorasyon_obje` (
  `uid` int(11) NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_fiyat` varchar(150) NOT NULL,
  `urun_kodu` varchar(150) NOT NULL,
  `urun_genislik` varchar(150) DEFAULT NULL,
  `urun_yukseklik` varchar(150) DEFAULT NULL,
  `urun_rengi` varchar(150) DEFAULT NULL,
  `urun_malzeme` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `elektrikli_el_aletleri_matkaplar`
--

CREATE TABLE `elektrikli_el_aletleri_matkaplar` (
  `uid` int(11) NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_fiyat` varchar(150) NOT NULL,
  `urun_kodu` varchar(150) NOT NULL,
  `urun_guc` varchar(150) NOT NULL,
  `urun_agirlik` varchar(150) NOT NULL,
  `urun_kablo_uzunluk` varchar(150) NOT NULL,
  `urun_darbe_orani` varchar(150) NOT NULL,
  `urun_yan_sap` varchar(150) NOT NULL,
  `urun_aciklama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `elektrikli_el_aletleri_testereler`
--

CREATE TABLE `elektrikli_el_aletleri_testereler` (
  `uid` int(11) NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_fiyat` varchar(150) NOT NULL,
  `urun_kodu` varchar(150) NOT NULL,
  `urun_guc` varchar(150) NOT NULL,
  `urun_agirlik` varchar(150) NOT NULL,
  `urun_kesme_derinligi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mutfak_bataryalari`
--

CREATE TABLE `mutfak_bataryalari` (
  `uid` int(11) NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_fiyat` varchar(150) NOT NULL,
  `urun_kodu` varchar(150) NOT NULL,
  `urun_genislik` varchar(150) NOT NULL,
  `urun_yukseklik` varchar(150) NOT NULL,
  `urun_derinlik` varchar(150) NOT NULL,
  `urun_agirlik` varchar(150) NOT NULL,
  `urun_renk` varchar(150) NOT NULL,
  `urun_malzeme` varchar(150) NOT NULL,
  `urun_aciklama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mutfak_eviye`
--

CREATE TABLE `mutfak_eviye` (
  `uid` int(11) NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_fiyat` varchar(150) NOT NULL,
  `urun_kodu` varchar(150) NOT NULL,
  `urun_genislik` varchar(150) NOT NULL,
  `urun_yukseklik` varchar(150) NOT NULL,
  `urun_derinlik` varchar(150) NOT NULL,
  `urun_agirlik` varchar(150) NOT NULL,
  `urun_renk` varchar(150) NOT NULL,
  `urun_malzeme` varchar(150) NOT NULL,
  `urun_aciklama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `urun_id` int(11) NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_aciklama` text NOT NULL,
  `urun_fiyat` double NOT NULL,
  `urun_indirim` int(1) NOT NULL,
  `urun_stok` int(11) NOT NULL,
  `urun_vitrin` tinyint(1) NOT NULL,
  `urun_eklenmetarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `urun_kategori_id` int(11) NOT NULL,
  `urun_renk` varchar(200) NOT NULL,
  `urun_beden` varchar(200) NOT NULL,
  `urun_marka_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_phone` varchar(11) NOT NULL,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_phone`, `user_address`) VALUES
(5, 'hammza', '123', '05535885962', 'istanbul/mahmutbey'),
(6, 'tuğberk', '123147', '05537747599', 'istanbul/maltepe'),
(7, 'tuğberk', '123147', '05537747599', 'istanbul/maltepe');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `aydinlatma_ev_aydinlatmalari`
--
ALTER TABLE `aydinlatma_ev_aydinlatmalari`
  ADD PRIMARY KEY (`uid`);

--
-- Tablo için indeksler `banyo_batarya_musluk`
--
ALTER TABLE `banyo_batarya_musluk`
  ADD PRIMARY KEY (`uid`);

--
-- Tablo için indeksler `banyo_dus_sistemleri`
--
ALTER TABLE `banyo_dus_sistemleri`
  ADD PRIMARY KEY (`uid`);

--
-- Tablo için indeksler `dekorasyon_cop_kutusu`
--
ALTER TABLE `dekorasyon_cop_kutusu`
  ADD PRIMARY KEY (`uid`);

--
-- Tablo için indeksler `dekorasyon_duvar_kagitlari`
--
ALTER TABLE `dekorasyon_duvar_kagitlari`
  ADD PRIMARY KEY (`uid`);

--
-- Tablo için indeksler `dekorasyon_ev_tekstili`
--
ALTER TABLE `dekorasyon_ev_tekstili`
  ADD PRIMARY KEY (`uid`);

--
-- Tablo için indeksler `dekorasyon_obje`
--
ALTER TABLE `dekorasyon_obje`
  ADD PRIMARY KEY (`uid`);

--
-- Tablo için indeksler `elektrikli_el_aletleri_matkaplar`
--
ALTER TABLE `elektrikli_el_aletleri_matkaplar`
  ADD PRIMARY KEY (`uid`);

--
-- Tablo için indeksler `elektrikli_el_aletleri_testereler`
--
ALTER TABLE `elektrikli_el_aletleri_testereler`
  ADD PRIMARY KEY (`uid`);

--
-- Tablo için indeksler `mutfak_bataryalari`
--
ALTER TABLE `mutfak_bataryalari`
  ADD PRIMARY KEY (`uid`);

--
-- Tablo için indeksler `mutfak_eviye`
--
ALTER TABLE `mutfak_eviye`
  ADD PRIMARY KEY (`uid`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayar`
--
ALTER TABLE `ayar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `aydinlatma_ev_aydinlatmalari`
--
ALTER TABLE `aydinlatma_ev_aydinlatmalari`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `banyo_batarya_musluk`
--
ALTER TABLE `banyo_batarya_musluk`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `banyo_dus_sistemleri`
--
ALTER TABLE `banyo_dus_sistemleri`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `dekorasyon_cop_kutusu`
--
ALTER TABLE `dekorasyon_cop_kutusu`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `dekorasyon_duvar_kagitlari`
--
ALTER TABLE `dekorasyon_duvar_kagitlari`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `dekorasyon_ev_tekstili`
--
ALTER TABLE `dekorasyon_ev_tekstili`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `dekorasyon_obje`
--
ALTER TABLE `dekorasyon_obje`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `elektrikli_el_aletleri_matkaplar`
--
ALTER TABLE `elektrikli_el_aletleri_matkaplar`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `elektrikli_el_aletleri_testereler`
--
ALTER TABLE `elektrikli_el_aletleri_testereler`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `mutfak_bataryalari`
--
ALTER TABLE `mutfak_bataryalari`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `mutfak_eviye`
--
ALTER TABLE `mutfak_eviye`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
