<?php include "header.php"; ?>

<!-- ***************hastane randevu silme*********** -->
<?php

if($_GET){
    $id = $_GET["id"];
    $db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charest=utf8","root","");
    $sil = $db->prepare("DELETE FROM randevu WHERE randevu_id =:id");
    $sil->execute(array(":id" => $id));
    if($sil){
        header("location:randevu.php?status=ok");
    }else{
        header("location:randevu.php?status=no");
    }
}
?>
<!-- ***************aile hekim randevu silme*********** -->
<?php

if($_GET){
    $id = $_GET["id"];
    $db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charest=utf8","root","");
    $sil = $db->prepare("DELETE FROM ailehekim1 WHERE aile_id =:id");
    $sil->execute(array(":id" => $id));
    if($sil){
        header("location:randevu.php?status=ok");
    }else{
        header("location:randevu.php?status=no");
    }
}
?>

<!-- ***************aşı randevu silme*********** -->


<?php

if($_GET){
    $id = $_GET["id"];
    $db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charest=utf8","root","");
    $sil = $db->prepare("DELETE FROM asitablo WHERE aile_id_asi =:id");
    $sil->execute(array(":id" => $id));
    if($sil){
        header("location:randevu.php?status=ok");
    }else{
        header("location:randevu.php?status=no");
    }
}
?>


