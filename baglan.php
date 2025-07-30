<?php
$host = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "sinav_sonuclari";

$baglanti = new mysqli($host, $kullanici, $sifre, $veritabani);

if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}
?>