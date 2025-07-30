<?php
include 'baglan.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $mat = $_POST['matematik'];
    $turkce = $_POST['turkce'];
    $fen = $_POST['fen'];
    $ortalama = ($mat + $turkce + $fen) / 3;

    $sql = "INSERT INTO ogrenciler (ad, soyad, matematik, turkce, fen, ortalama) 
            VALUES ('$ad', '$soyad', '$mat', '$turkce', '$fen', '$ortalama')";
    if ($baglanti->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Hata: " . $baglanti->error;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yeni Kayıt Ekle</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <div class="container">
        <div class="center">
            <h2>Yeni Kayıt Ekle</h2>

            <form method="post" class="form">
                <label>Adı:</label><br>
                <input type="text" name="ad" required><br><br>

                <label>Soyadı:</label><br>
                <input type="text" name="soyad" required><br><br>

                <label>Matematik:</label><br>
                <input type="text" name="matematik"><br><br>

                <label>Türkçe:</label><br>
                <input type="text" name="turkce"><br><br>

                <label>Fen:</label><br>
                <input type="text" name="fen"><br><br>

                <div class="buttons">
                    <button type="submit">Kaydet</button>
                    <a href="index.php"><button type="button">Anasayfaya Git</button></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
