<?php include "header.php"; 
include "baglan.php";

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
    <!-- ****************silme işlemi uyarı mesajı*************** -->
    <?php
if(isset($_GET["status"])){
    if($_GET["status"] == "ok"){
?>
        <div class="uyarı">
            <b>İptal Etme İşlemi Başarılı Bir Şekilde Geçekleştirildi. </b>
        </div> 
<?php
    }
    if($_GET["status"] == "no"){
        ?>
        <div class="hata">
            <b>İptal Etme İşlemi Yapılırken Hata Oluştu</b>
        </div> 
<?php
    }
}
?>  
    <h2 style="text-align: center; color:#e40; font-size:30px;">Hastane Randevu Bilgilerim</h2>
     <br>
<!-- *******************hastane randevu************* -->
    <table>
        <tr>
            <th>Randevu No</th>
            <th>Şehir</th>
            <th>Hastane</th>
            <th>Klinik</th>
            <th>Doktor</th>
            <th>Randevu Tarihi</th>
            <th>Randevu Hasta No</th>
            <th>İptal Et</th>
            

        </tr>

        <?php
        
        $randevu_sor = $db->prepare("SELECT * FROM randevu
        INNER JOIN kullanici ON randevu.randevu_hasta_id = kullanici.kullanici_id WHERE kullanici_tc=:kullanici_tc");
        $randevu_sor->execute([
            "kullanici_tc" => $_SESSION["userkullanici_tc"]
        ]);
        while ($radevu_cek = $randevu_sor->fetch(PDO::FETCH_ASSOC)) { ?>
        

        <tr>
            <td><?php echo $radevu_cek["randevu_id"]; ?></td>
            <td><?php echo $radevu_cek["randevu_sehir"]; ?></td>
            <td><?php echo $radevu_cek["randevu_hastane"]; ?></td>
            <td><?php echo $radevu_cek["randevu_klinik"]; ?></td>
            <td><?php echo $radevu_cek["randevu_doktor"]; ?></td>
            <td><?php echo $radevu_cek["randevu_tarih"]; ?></td>
            <td><?php echo $radevu_cek["randevu_hasta_id"]; ?></td>
            <td><a href="sil.php?id=<?php echo $radevu_cek["randevu_id"];?>" class="sil">İptal Et</a></td>


        </tr>
        <?php } ?>
    </table><br><br>
<!-- *******************aile hekim randevu************* -->
 
    <h2 style="text-align: center; color:#e40; font-size:30px;">Aile Hekimliği Randevu Bilgilerim</h2>
    <br>
    <table>
        <tr>
            <th>Randevu No</th>
            <th>Şehir</th>
            <th>İlçe</th>
            <th>Sağlık Ocağı</th>
            <th>Doktor</th>
            <th>Randevu Tarihi</th>
            <th>Randevu Hasta No</th>
            <th>İptal Et</th>
            

        </tr>
        <?php

        $bul = "SELECT * FROM ailehekim1";
        $kayit = $db->query($bul);

            if($kayit){
                while($satir = $kayit->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $satir["aile_id"]; ?></td>
                        <td><?php echo $satir["aile_sehir"]; ?></td>
                        <td><?php echo $satir["aile_ilce"]; ?></td>
                        <td><?php echo $satir["aile_ocak"]; ?></td>
                        <td><?php echo $satir["aile_doktor"]; ?></td>
                        <td><?php echo $satir["aile_tarih"]; ?></td>
                        <td><?php echo $satir["randevu_hasta_id"]; ?></td>
                        <td><a href="sil.php?id=<?php echo $satir["aile_id"];?>" class="sil">İptal Et</a></td>

                    </tr>
                    <?php }              
            }
        ?>
    </table><br><br>
    <!-- *******************aşı randevu************* -->
    <h2 style="text-align: center; color:#e40; font-size:30px;">Aşı Randevu Bilgilerim</h2>
    <br>
    <table>
        <tr>
            <th>Randevu No</th>
            <th>Şehir</th>
            <th>İlçe</th>
            <th>Sağlık Ocağı</th>
            <th>Aşı Türü</th>
            <th>Randevu Tarihi</th>
            <th>Randevu Hasta No</th>
            <th>İptal Et</th>
            

        </tr>
        <?php

        $bul = "SELECT * FROM asitablo";
        $kayit = $db->query($bul);

            if($kayit){
                while($satir = $kayit->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $satir["aile_id_asi"]; ?></td>
                        <td><?php echo $satir["aile_sehir_asi"]; ?></td>
                        <td><?php echo $satir["aile_ilce_asi"]; ?></td>
                        <td><?php echo $satir["aile_ocak_asi"]; ?></td>
                        <td><?php echo $satir["aile_doktor_asi"]; ?></td>
                        <td><?php echo $satir["aile_tarih_asi"]; ?></td>
                        <td><?php echo $satir["randevu_hasta_id"]; ?></td>
                        <td><a href="sil.php?id=<?php echo $satir["aile_id_asi"];?>" class="sil">İptal Et</a></td>

                    </tr>
                    <?php }              
            }
        ?>
    </table><br><br>

</body>
</html>
