<?php

ob_start();
session_start();
include "baglan.php";
//***************kayıt olma********************* */
if(isset($_POST["kullanicikaydet"])){
    $kullanici_tc = isset($_POST["kullanici_tc"]) ? $_POST["kullanici_tc"] : null;
    $kullanici_adsoyad = isset($_POST["kullanici_adsoyad"]) ? $_POST["kullanici_adsoyad"] : null;
    $kullanici_password = isset($_POST["kullanici_password"]) ? $_POST["kullanici_password"] : null;

    //veritabanı ekleme işlemleri

    $sorgu = $db->prepare("INSERT INTO kullanici SET
        kullanici_tc = ?,
        kullanici_adsoyad = ?,
        kullanici_password = ?
    ");
    $ekle = $sorgu->execute([
        $kullanici_tc ,$kullanici_adsoyad,$kullanici_password
    ]);
    if($ekle) {
        header("location:giris.php?status=ok");
    }else{
        header("location:giris.php?status=no");
    }

}
// *************************giriş yapma**********************/
if(isset($_POST["giris_yap"])) {
    $kullanici_tc = $_POST["kullanici_tc"];
    $kullanici_password = $_POST["kullanici_password"];

    $kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc and kullanici_password=:kullanici_password");
    $kullanicisor->execute([
        "kullanici_tc" => $kullanici_tc,
        "kullanici_password" => $kullanici_password
    ]);

    $say = $kullanicisor->rowCount();
    if($say==1) {
        $_SESSION["userkullanici_tc"]=$kullanici_tc;
        header("location:anasayfa.php?durum=girisbasarili");
        exit;
    }else{
        header("location:index.php?durum=bsarisizgiris");
        exit;
    }


}

///**********hastane randevu */
if(isset($_POST["randevu_kaydet"])){
    $randevu_sehir = isset($_POST["sehir"]) ? $_POST["sehir"] : null;
    $randevu_hastane = isset($_POST["hastane"]) ? $_POST["hastane"] : null;
    $randevu_doktor = isset($_POST["doktor"]) ? $_POST["doktor"] : null;
    $randevu_tarih = isset($_POST["tarih"]) ? $_POST["tarih"] : null;
    $randevu_klinik = isset($_POST["klinik"]) ? $_POST["klinik"] : null;
    $hasta_id = isset($_POST["kullanici_id"]) ? $_POST["kullanici_id"] : null;


    $kaydet = $db->prepare("INSERT INTO randevu SET
    randevu_sehir = ?,
    randevu_hastane = ?,
    randevu_doktor = ?,
    randevu_tarih = ?,
    randevu_klinik = ?,
    randevu_hasta_id = ?
    ");
    $insert=$kaydet->execute([
        $randevu_sehir, $randevu_hastane, $randevu_doktor, $randevu_tarih, $randevu_klinik, $hasta_id
    ]);
    if($insert) {
        header("location:hastane.php?status=ok");
    }else{
        header("location:hastane.php?status=no");
    }
}

//********************aile hekimi randevu*************** */

if(isset($_POST["aile_randevu_kaydet"])){
    $aile_sehir = isset($_POST["il"]) ? $_POST["il"] : null;
    $aile_ilce = isset($_POST["ilçe"]) ? $_POST["ilçe"] : null;
    $aile_doktor = isset($_POST["hekim"]) ? $_POST["hekim"] : null;
    $aile_tarih = isset($_POST["tarih1"]) ? $_POST["tarih1"] : null;
    $aile_ocak = isset($_POST["saglık_ocak"]) ? $_POST["saglık_ocak"] : null;
    $hasta_id = isset($_POST["kullanici_id"]) ? $_POST["kullanici_id"] : null;


    $kaydet = $db->prepare("INSERT INTO ailehekim1 SET
    aile_sehir = ?,
    aile_ilce = ?,
    aile_doktor = ?,
    aile_tarih = ?,
    aile_ocak = ?,
    randevu_hasta_id = ?
    ");
    $insert=$kaydet->execute([
        $aile_sehir, $aile_ilce, $aile_doktor, $aile_tarih, $aile_ocak, $hasta_id
    ]);
    if($insert) {
        header("location:aile.php?status=ok");
    }else{
        header("location:aile.php?status=no");
    }
}
//*************************aşı randevu********* */
if(isset($_POST["aile_randevu_kaydet_asi"])){
    $aile_sehir = isset($_POST["il"]) ? $_POST["il"] : null;
    $aile_ilce = isset($_POST["ilçe"]) ? $_POST["ilçe"] : null;
    $aile_doktor = isset($_POST["hekim"]) ? $_POST["hekim"] : null;
    $aile_tarih = isset($_POST["tarih1"]) ? $_POST["tarih1"] : null;
    $aile_ocak = isset($_POST["saglık_ocak"]) ? $_POST["saglık_ocak"] : null;
    $hasta_id = isset($_POST["kullanici_id"]) ? $_POST["kullanici_id"] : null;


    $kaydet = $db->prepare("INSERT INTO asitablo SET
    aile_sehir_asi = ?,
    aile_ilce_asi = ?,
    aile_doktor_asi = ?,
    aile_tarih_asi = ?,
    aile_ocak_asi = ?,
    randevu_hasta_id = ?
    ");
    $insert=$kaydet->execute([
        $aile_sehir, $aile_ilce, $aile_doktor, $aile_tarih, $aile_ocak, $hasta_id
    ]);
    if($insert) {
        header("location:aşı.php?status=ok");
    }else{
        header("location:aşı.php?status=no");
    }
}

?>



