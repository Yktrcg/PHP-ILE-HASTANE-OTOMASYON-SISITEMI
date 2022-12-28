<?php include "header.php" ; ?>
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
            <b>Hastane Randevu Kaydınız Başarıyla Alındı.Randevularınıza <a href="randevu.php">Randevularım</a> Bölümünden Bakabilirsiniz</b>
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
<!-- *****************hastane randevu************************ -->
<h2 id="hastaneh2">Hastane Randevusu Al</h2>
<div class="orta_div" id="randevu_div">    
<form action="islem.php" method="post">
    

    <select name="sehir" class="hastane">
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

    <select name="hastane" class="hastane">
        <option value="hastane">Hastane Seçin</option>
        <option value="Acıbadem Hastanesi">Acıbadem Hastanesi</option>
        <option value="Hayat Hastanesi">Hayat Hastanesi</option>
        <option value="Malatya Eğitim Ve Araştırma Hastanesi">Malatya Eğitim Ve Araştırma Hastanesi</option>
        <option value="Hatay Devlet Hastanesi">Hatay Devlet Hastanesi</option>
        <option value="Diyarbakır Devlet Hastanesi">Diyarbakır Devlet Hastanesi</option>
        <option value="Erzurum Mareşal Fevzi Çakmak Asker Hastanesi">Erzurum Mareşal Fevzi Çakmak Asker Hastanesi</option>
        <option value="Erzincan Devlet Hastanesi">Erzincan Devlet Hastanesi</option>
        <option value="Eskişehir Yunusemre Devlet Hastanesi">Eskişehir Yunusemre Devlet Hastanesi</option>
        <option value="Anadolu Üniversitesi Mavi Hastanesi">Anadolu Üniversitesi Mavi Hastanesi</option>
        <option value="Eskişehir Hava Hastanesi">Eskişehir Hava Hastanesi</option>
        <option value="Arnavutköy Devlet Hastanesi">Arnavutköy Devlet Hastanesi</option>
        <option value="Estethica Plastik Cerrahi Hastaneleri">Estethica Plastik Cerrahi Hastaneleri</option>
        <option value="Ethica Hastanesi">Ethica Hastanesi</option>
        <option value="Gebze Fatih Devlet Hastanesi">Gebze Fatih Devlet Hastanesi</option>
        <option value="Kocaeli Devlet Hastanesi">Kocaeli Devlet Hastanesi</option>
        <option value="Konya Numune Hastanesi">Konya Numune Hastanesi</option>
        <option value="Mersin Devlet Hastanesi">Mersin Devlet Hastanesi</option>
        <option value="Muğla Kamu Hastaneleri Birliği">Muğla Kamu Hastaneleri Birliği</option>
        <option value="Yatağan Devlet Hastanesi">Yatağan Devlet Hastanesi</option>
        <option value="SSK Nazilli Hastanesi">SSK Nazilli Hastanesi</option>
        <option value="Çağıner Hastanesi">Çağıner Hastanesi</option>
        <option value="Şırnak Devlet Hastanesi">Şırnak Devlet Hastanesi </option>
        <option value="Gebze Şifa tıp merkezi">Gebze Şifa tıp merkezi</option>
        <option value="Bodrum Devlet Hastanesi">Bodrum Devlet Hastanesi</option>
        <option value="Ayvalık Devlet Hastanesi">Ayvalık Devlet Hastanesi</option>
        <option value="Edirne Devlet Hastanesi">Edirne Devlet Hastanesi</option>
        <option value="Safranbolu Devlet Hastanesi">Safranbolu Devlet Hastanesi</option>
        <option value="Düzce Atatürk Devlet Hastanesi">Düzce Atatürk Devlet Hastanesi</option>

    </select>

    <select name="klinik" class="klinik">
        <option value="klinik">Klinik Seçin</option>
        <option value="Dahiliye">Dahiliye</option>
        <option value="Göz Hastalıkları">Göz Hastalıkları</option>
        <option value="Kulak Burun Boğaz">Kulak Burun Boğaz</option>
        <option value="Ortopedi">Ortopedi</option>
        <option value="Nöroloji">Nöroloji</option>
        <option value="Kardiyoloji">Kardiyoloji</option>
        <option value="Üroloji">Üroloji</option>
        <option value="Tıbbi Genetik">Tıbbi Genetik</option>
        <option value="Radyasyon Onkolojisi">Radyasyon Onkolojisi</option>
        <option value="Kalp Damar Cerrahisi">Kalp Damar Cerrahisi</option>
        <option value="Kadın Doğum">Kadın Doğum</option>
        <option value="Hematoloji">Hematoloji</option>
        <option value="Genel Cerrahi">Genel Cerrahi</option>
        <option value="Göğüs Hastalıkları">Göğüs Hastalıkları</option>
        <option value="Çocuk Hastalıkları">Çocuk Hastalıkları</option>

    </select>

    <select name="doktor" class="doktor">
        <option value="doktor">Doktor Seçin</option>
        <option value="BERKAY ALBAYRAK">BERKAY ALBAYRAK</option>
        <option value="CEVAHİR EŞİNGEN">CEVAHİR EŞİNGEN</option>
        <option value="HÜSEYİN CAHİT TÜRKER">HÜSEYİN CAHİT TÜRKER</option>
        <option value="AHMET CAN ASILLIOĞLU">AHMET CAN ASILLIOĞLU</option>
        <option value="DEVRAN ŞÜKÜROĞLU">DEVRAN ŞÜKÜROĞLU</option>
        <option value="KAAN SUAT YAĞCI">KAAN SUAT YAĞCI</option>
        <option value="ALEVTİNA YÜZER">ALEVTİNA YÜZER</option>
        <option value="ŞADİ TAŞMALI">ŞADİ TAŞMALI</option>
        <option value="BERKE ÇOLAKEROL">BERKE ÇOLAKEROL</option>
        <option value="CANSU SELCAN İÇBAY">CANSU SELCAN İÇBAY</option>
        <option value="KEZİBAN SATILMIŞ">KEZİBAN SATILMIŞ</option>
        <option value="GAMZE PINAR YERLİ">GAMZE PINAR YERLİ</option>
        <option value="YAKUP İLKER BAYKOCA">YAKUP İLKER BAYKOCA</option>
        <option value="BADE TETİK">BADE TETİK</option>
        <option value="Nedim Balat">Nedim Balat</option>
    </select>

    <input type="date" name="tarih" id="tarihseç">
    <input type="hidden" name="kullanici_id" value="<?php echo$kullanicicek["kullanici_id"] ?>">
    <button name="randevu_kaydet">Randevu Kaydet</button>

    </form>
</div>
</body>
</html>