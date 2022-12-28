<?php include "header.php" ; 

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
    <!-- ************uyarı mesajı**************** -->
<?php
if(isset($_GET["durum"])){
    if($_GET["durum"] == "ok"){
?>
        <div class="uyarı">
            <b>Güncelleme İşlemi Başarılı Bir Şekilde Geçekleştirildi. </b>
        </div> 
<?php
    }
    if($_GET["durum"] == "no"){
        ?>
        <div class="hata">
            <b>İptal Etme İşlemi Yapılırken Hata Oluştu</b>
        </div> 
<?php
    }
}
?>  
<h2 style="text-align: center; color:#e40; font-size:37px; padding:20px">Hesap Bilgilerim</h2>
<br>
    <table>
        <tr>
            <th>Kullanıcı No</th>
            <th>Adınız Soyadınız</th>
            <th>T.C Kimlik Numaranız</th>
            <th>Şifreniz</th>
            <th>Güncelle</th>
            

        </tr>
        <?php

        $bul = "SELECT * FROM kullanici";
        $kayit = $db->query($bul);

            if($kayit){
                while($satir = $kayit->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $satir["kullanici_id"]; ?></td>
                        <td><?php echo $satir["kullanici_adsoyad"]; ?></td>
                        <td><?php echo $satir["kullanici_tc"]; ?></td>
                        <td><?php echo $satir["kullanici_password"]; ?></td>
                        <td><a href="duzenle.php?id=<?php echo $satir["kullanici_id"];?>" class="guncel">Güncelle</a></td>

                    </tr>
                    <?php }              
            }
        ?>
    </table><br><br>
</body>
</html>