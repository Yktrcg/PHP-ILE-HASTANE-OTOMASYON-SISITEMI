<?php 
try{
    $db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charest=utf8","root","");
    //echo "veritabanı bağlandı";
}catch(Exception $e) {
    echo $e->getMessage();
}

?>