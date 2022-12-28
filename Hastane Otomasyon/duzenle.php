<?php include "header.php";

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Hastane Randevu Merkezi</title>
</head>
<body>
    <!-- *****************güncelleme işlemi***************** -->
    <?php
        if ($_POST)
        {
            $yeni_adsoyad = $_POST["gorev"];
            $yeni_tcno = $_POST["gorev1"];
            $yeni_sifre = $_POST["gorev2"];
            $db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charest=utf8","root","");
            $query = $db->prepare("UPDATE kullanici SET kullanici_adsoyad = ?, kullanici_tc = ?, kullanici_password = ?  ");
            $update = $query->execute(array($yeni_adsoyad, $yeni_tcno, $yeni_sifre));
            header("location: hesap.php?durum=ok");
        }
// ******************value degerleri çekme************************//

        if ($_GET)
        {
            $id = $_GET["id"];
            $db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charest=utf8","root","");
            $query = $db->query("SELECT * FROM kullanici WHERE kullanici_id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
            if ($query)
            {
                $sifre = $query["kullanici_password"];
                $tcno = $query["kullanici_tc"];
                $adsoyad = $query["kullanici_adsoyad"];         
            }
        }
    ?>

    <form action="duzenle.php" method="POST">
    <h3>Hesap Bilgilerimi Güncelle</h3>
    <div class="hesabim_content">
        <div class="label">
            <label>ADI SOYADI</label>
            <input type="text" name="gorev" value="<?php echo $adsoyad ?>">
        </div><br>
        <div class="label">
            <label>TC NO</label>
            <input type="text" name="gorev1" value="<?php echo $tcno ?>"> 
        </div>
        <br>
        <div class="label">
            <label>ŞİFRE</label>
            <input type="text" name="gorev2" value="<?php echo $sifre ?>">
        </div><br><br>
        <button type="submit" class="buton" name="kaydet">Güncelle</button>
    </div>
    </form>
</body>
</html>