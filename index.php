<?php
session_start();
include 'baglan.php';

$sql = "SELECT * FROM ogrenciler ORDER BY ad ASC";
$sonuc = $baglanti->query($sql);
?>


<html>
<head>
<title>Öğrenci Notları</title>
<link rel="stylesheet" href="stil.css">
</head>
<body>
<div class="container">
	<div class="center">
        <h3>Hoşgeldiniz</h3>
	<h2>Öğrenci Notları</h2>
<ul>
     <?php while($satir = $sonuc->fetch_assoc()): ?>
    <li><?= $satir['ad'] ?> <?= $satir ['soyad'] ?><br>
    <strong>
        Matematik: <?= $satir['matematik'] ?><br>
        Türkçe: <?= $satir['turkce'] ?><br>
        Fen: <?= $satir['fen'] ?><br>
        Ortalama: <?= $satir['ortalama'] ?><br>

    </strong>
    <div class="buttons">
        <a href="duzenle.php?id=<?= $satir['id'] ?>">Düzenle</a> |
        <a href="sil.php?id=<?= $satir['id'] ?>">Sil</a>
    </div>
</li><hr>

<?php endwhile; ?>
</ul>

</div>
</div>
	<div class="buttons">
	<a href="ekle.php"><button>Yeni Kayıt Ekle</button></a>
	<button onclick="location.reload();">Yenile</button>
	</div>
</body>
</html>