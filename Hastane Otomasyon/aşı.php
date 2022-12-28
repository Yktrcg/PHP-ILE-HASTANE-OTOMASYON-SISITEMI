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
     <!-- ***********uyarı mesajı**************** -->

<?php
if(isset($_GET["status"])){
    if($_GET["status"] == "ok"){
?>
        <div class="uyarı">
            <b>Aşı Randevu Kaydınız Başarıyla Alındı.Randevularınıza <a href="randevu.php">Randevularım</a> Bölümünden Bakabilirsiniz</b>
        </div> 
<?php
    }
    if($_GET["status"] == "no"){
        ?>
        <div class="hata">
            <b>Aşı Randevu Kaydı Alınırken Hata Oluştu</b>
        </div> 
<?php
    }
}
?>
<h2 id="asıh2">Aşı Randevusu Al</h2>  
<!-- ****************aşı randevu********** -->
<div class="orta_div"  id="ası_div">
<br><br><br><br><br><br><br><br><br>
<form action="islem.php" method="POST">
    <select name="il" class="hastane">
        <option value="İl Seçin">İl Seçin</option>
        <option value="Adana">Adana</option>
        <option value="Adıyaman">Adıyaman</option>
        <option value="Afyonkarahisar">Afyonkarahisar</option>
        <option value="Ağrı">Ağrı</option>
        <option value="Amasya">Amasya</option>
        <option value="Ankara">Ankara</option>
        <option value="Antalya">Antalya</option>
        <option value="Artvin">Artvin</option>
        <option value="Aydın">Aydın</option>
        <option value="Balıkesir">Balıkesir</option>
        <option value="Bilecik">Bilecik</option>
        <option value="Bingöl">Bingöl</option>
        <option value="Bitlis">Bitlis</option>
        <option value="Bolu">Bolu</option>
        <option value="Burdur">Burdur</option>
        <option value="Bursa">Bursa</option>
        <option value="Çanakkale">Çanakkale</option>
        <option value="Çankırı">Çankırı</option>
        <option value="Çorum">Çorum</option>
        <option value="Denizli">Denizli</option>
        <option value="Diyarbakır">Diyarbakır</option>
        <option value="Edirne">Edirne</option>
        <option value="Elazığ">Elazığ</option>
        <option value="Erzincan">Erzincan</option>
        <option value="Erzurum">Erzurum</option>
        <option value="Eskişehir">Eskişehir</option>
        <option value="Gaziantep">Gaziantep</option>
        <option value="Giresun">Giresun</option>
        <option value="Gümüşhane">Gümüşhane</option>
        <option value="Hakkâri">Hakkâri</option>
        <option value="Hatay">Hatay</option>
        <option value="Isparta">Isparta</option>
        <option value="Mersin">Mersin</option>
        <option value="İstanbul">İstanbul</option>
        <option value="İzmir">İzmir</option>
        <option value="Kars">Kars</option>
        <option value="Kastamonu">Kastamonu</option>
        <option value="Kayseri">Kayseri</option>
        <option value="Kırklareli">Kırklareli</option>
        <option value="Kırşehir">Kırşehir</option>
        <option value="Kocaeli">Kocaeli</option>
        <option value="Konya">Konya</option>
        <option value="Kütahya">Kütahya</option>
        <option value="Malatya">Malatya</option>
        <option value="Manisa">Manisa</option>
        <option value="Kahramanmaraş">Kahramanmaraş</option>
        <option value="Mardin">Mardin</option>
        <option value="Muğla">Muğla</option>
        <option value="Muş">Muş</option>
        <option value="Nevşehir">Nevşehir</option>
        <option value="Niğde">Niğde</option>
        <option value="Ordu">Ordu</option>
        <option value="Rize">Rize</option>
        <option value="Sakarya">Sakarya</option>
        <option value="Samsun">Samsun</option>
        <option value="Siirt">Siirt</option>
        <option value="Sinop">Sinop</option>
        <option value="Sivas">Sivas</option>
        <option value="Tekirdağ">Tekirdağ</option>
        <option value="Tokat">Tokat</option>
        <option value="Trabzon">Trabzon</option>
        <option value="Tunceli">Tunceli</option>
        <option value="Şanlıurfa">Şanlıurfa</option>
        <option value="Uşak">Uşak</option>
        <option value="Van">Van</option>
        <option value="Yozgat">Yozgat</option>
        <option value="Zonguldak">Zonguldak</option>
        <option value="Aksaray">Aksaray</option>
        <option value="Bayburt">Bayburt</option>
        <option value="Karaman">Karaman</option>
        <option value="Kırıkkale">Kırıkkale</option>
        <option value="Batman">Batman</option>
        <option value="Şırnak">Şırnak</option>
        <option value="Bartın">Bartın</option>
        <option value="Ardahan">Ardahan</option>
        <option value="Iğdır">Iğdır</option>
        <option value="Yalova">Yalova</option>
        <option value="Karabük">Karabük</option>
        <option value="Kilis">Kilis</option>
        <option value="Osmaniye">Osmaniye</option>
        <option value="Düzce">Düzce</option>
    </select>
    <select name="ilçe">
        <option value="ilçeler">İlçe Seçin</option>
        <option value="Kocasinan">Kocasinan</option>
        <option value="Bağlar">Bağlar</option>
        <option value="Eyüp">Eyüp</option>
        <option value="Haliliye">Haliliye</option>
        <option value="Altındağ">Altındağ</option>
        <option value="Altındağ">Çukurova</option>
        <option value="Konak">Konak</option>
        <option value="Meram">Meram</option>
        <option value="Sarıyer">Sarıyer</option>
        <option value="Pamukkale">Pamukkale</option>
        <option value="Kayapınar">Kayapınar</option>
        <option value="Karşıyaka">Karşıyaka</option>
        <option value="İpekyolu">İpekyolu</option>
        <option value="Güngören">Güngören</option>
        <option value="Çorlu">Çorlu</option>
        <option value="Kızıltepe">Kızıltepe</option>
        <option value="Altınordu">Altınordu</option>
        <option value="Karesi">Karesi</option>

    </select>
    <select name="saglık_ocak">
        <option value="saglık ocağı">Sağlık Ocağı Seçin</option>
        <option value="HAYAT SAĞLIK OCAĞI">HAYAT SAĞLIK OCAĞI</option>
        <option value="BAHÇEŞEHİR AİLE SAĞLIĞI MERKEZİ">BAHÇEŞEHİR AİLE SAĞLIĞI MERKEZİ</option>
        <option value="ARAPGİR AİLE SAĞLIĞI MERKEZİ">ARAPGİR AİLE SAĞLIĞI MERKEZİ</option>
        <option value="19 MAYIS AİLE SAĞLIĞI MERKEZİ"> 19 MAYIS AİLE SAĞLIĞI MERKEZİ</option>
        <option value="GEVREKLİ AİLE SAĞLIĞI MERKEZİ"> GEVREKLİ AİLE SAĞLIĞI MERKEZİ</option>
        <option value="OSMANGAZİ AİLE SAĞLIĞI MERKEZİ"> OSMANGAZİ AİLE SAĞLIĞI MERKEZİ</option>
        <option value="KINIKLI AİLE SAĞLIĞI MERKEZİ"> KINIKLI AİLE SAĞLIĞI MERKEZİ</option>
        <option value="ATAŞEHİR 10 NOLU AİLE SAĞLIĞI MERKEZİ"> ATAŞEHİR 10 NOLU AİLE SAĞLIĞI MERKEZİ</option>
        <option value="ALTINDAĞ 5 NOLU AİLE SAĞLIĞI MERKEZİ"> ALTINDAĞ 5 NOLU AİLE SAĞLIĞI MERKEZİ</option>
        <option value="ÜSKÜDAR 17 NOLU NAZİF SÖZBİR AİLE SAĞLIĞI MERKEZİ"> ÜSKÜDAR 17 NOLU NAZİF SÖZBİR AİLE SAĞLIĞI MERKEZİ</option>
        <option value="ERZURUMLU İBRAHİM HAKKI AİLE SAĞLIĞI MERKEZİ"> ERZURUMLU İBRAHİM HAKKI AİLE SAĞLIĞI MERKEZİ</option>
        <option value=" MURADINLAR AİLE SAĞLIĞI MERKEZİ"> MURADINLAR AİLE SAĞLIĞI MERKEZİ</option>

    </select>
    <select name="hekim" class="doktor">
        <option value="doktor">Aşı Seçin</option>
        <option value="Biontech">Biontech</option>
        <option value="Sinovac">Sinovac</option>
        <option value="Türkovac">Türkovac</option>
    </select>
    <input type="date" name="tarih1" id="tarihseç">
    <input type="hidden" name="kullanici_id" value="<?php echo$kullanicicek["kullanici_id"] ?>">
    <button name="aile_randevu_kaydet_asi">Randevu Kaydet</button>
    </form>
</div>

</body>
</html>


