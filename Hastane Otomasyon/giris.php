<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Hastane Randevu Merkezi</title>
</head>
<body>
<div class="tableOuter" >
    <img src="resim/logo.png" width="150" height="160" id="resim1">
    <img src="resim/logo1.png" width="350" height="130" id="resim">
    <img src="resim/logo4.png" width="150" height="125">
    <!-- *************uyarı mesajı***************** -->
    <br><br>
    <?php
if(isset($_GET["status"])){
    if($_GET["status"] == "ok"){
?>
        <div class="uyarı">
            <b>Kullanıcı  Kaydınız Başarıyla Oluşturuldu</b>
        </div> 
<?php
    }
    if($_GET["status"] == "no"){
        ?>
        <div class="hata">
            <b>Hastane Randevu Kaydı Alınırken Hata Oluştu</b>
        </div> 
<?php
    }
}
?> 
    <h1>Giriş Yap</h1>
    <form action="islem.php" method="post">
        <div class="user">
            <input type="text" name="kullanici_tc" placeholder="T.C Kimlik No">
        </div>
        <div class="pass">
            <input type="password" name="kullanici_password" placeholder="Parola">
        </div>
        <button type="submit" class="sub" id="giris" name="giris_yap">Giriş Yap</button>
        <br>
    </form>
    <p style="position: relative;left: 180px;">Hesabınız Yok Mu? <a href="uye.php">Kayıt Ol</a></p>
    <p style="position: relative;left: 10px; width:730px">Soru Ve Sorularınız İçin <a href="#">mhrsyardım@saglik.gov.tr</a> Adresimizi Kullanarak Bize Ulaşabilirsiniz.</p>
</div>
<div class="yanresim">
        <h2>Merkezi Hekim Randevu Sistemi İle Her Zaman Öndesiniz</h2>
</div>


</body>
</html>