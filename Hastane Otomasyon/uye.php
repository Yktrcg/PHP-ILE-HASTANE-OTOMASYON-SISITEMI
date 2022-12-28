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
    <h1>Kayıt Ol</h1>
    <form action="islem.php" method="post">
        <div class="user">
            <input type="text" name="kullanici_adsoyad" placeholder="Ad Soyad">
        </div>
        <div class="user">
            <input type="text" name="kullanici_tc" placeholder="TC kimlik No">
        </div>
        <div class="pass">
            <input type="password" name="kullanici_password" placeholder="Şifre">
        </div>
        <button type="submit" class="sub" id="giris" name="kullanicikaydet">Kayıt Ol</button>
        <br>
    </form>
    <p style="position: relative;left: 180px;">Zaten Bir Hesabınız Varmı? <a href="giris.php">Giriş Yap</a></p>

</div>
<div class="yanresim">
        <h2>Merkezi Hekim Randevu Sistemi İle Her Zaman Öndesiniz</h2>
</div>
<input type="checkbox">
<h5><a href="#">Üyelik Sözleşmesini</a> Okudum Kabul Ediyorum.</h5>
</body>
</html>