<?php
include 'baglan.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $mat = $_POST['matematik'];
    $turkce = $_POST['turkce'];
    $fen = $_POST['fen'];
    $ortalama = ($mat + $turkce + $fen) / 3;

    $sql = "UPDATE ogrenciler 
            SET ad='$ad', soyad='$soyad', matematik='$mat', turkce='$turkce', fen='$fen' , ortalama='$ortalama'
            WHERE id=$id";

    if ($baglanti->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Hata: " . $baglanti->error;
    }
}

$sql = "SELECT * FROM ogrenciler WHERE id=$id";
$sonuc = $baglanti->query($sql);
$not = $sonuc->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Notu Düzenle</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <div class="container">
        <div class="center">
            <h2>Notu Düzenle</h2>

            <form method="post" class="form">
                <label>Adı:</label><br>
                <input type="text" name="ad" value="<?= htmlspecialchars($not['ad']) ?>" required><br><br>

                <label>Soyadı:</label><br>
                <input type="text" name="soyad" value="<?= htmlspecialchars($not['soyad']) ?>" required><br><br>

                <label>Matematik:</label><br>
                <input type="text" name="matematik" value="<?= htmlspecialchars($not['matematik']) ?>" required><br><br>

                <label>Türkçe:</label><br>
                <input type="text" name="turkce" value="<?= htmlspecialchars($not['turkce']) ?>" required><br><br>

                <label>Fen:</label><br>
                <input type="text" name="fen" value="<?= htmlspecialchars($not['fen']) ?>" required><br><br>

                <div class="buttons">
                    <button type="submit">Güncelle</button>
                    <a href="index.php"><button type="button">İptal</button></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
