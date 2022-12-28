<?php

ob_start();
session_start();
include "baglan.php";

$kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
$kullanicisor ->execute([
    "kullanici_tc" => $_SESSION["userkullanici_tc"]
]);
$say =$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

if($say==0) {
    header("location:hesap.php?durum=ok");
    exit;
}

?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Hastane Randevu Merkezi</title>
</head>
<body>
    <div class="dropdown">
        <nav>
            <img src="resim/logo.png" width="170" height="120" id="logo" >
            <img src="resim/logo1.png" width="250" height="100" id="logo">
            <ul>
                <li><a href="anasayfa.php">Anasayfa</a></li>
                <li><a href="randevu.php">Randevularım</a></li>
                <li><a href="#">Sn. <?php echo $kullanicicek["kullanici_adsoyad"] ?> <img src="resim/icon.png" width="21" height="21"></a>
                    <ul>
                        <li><a id="hesap" href="hesap.php">Hesabım</a></li>
                        <li><a id="çık" href="logout.php">Çıkış Yap</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>
