<?php


global $db;
include"../Giris/baglan.php";

if ($_POST){

    $UrunID = $_POST["id"];

    $statement = $db->prepare("SELECT * FROM urun WHERE UrunID =:UrunID");
    $data = array(
        "UrunID" => $UrunID
    );
    $statement->execute($data);
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    echo json_encode($row);
}
if($_GET){
    $urun_id = $_GET["urun_id"];
    $adet = $_GET["adet"];
    $fiyat = $_GET["fiyat"];
    $toplam_fiyat = $adet * $fiyat;

    session_start();

    $data = array(
        "adet" =>$adet,
        "fiyat" =>$fiyat,
        "toplam_fiyat"=>$toplam_fiyat
    );
    $_SESSION["sepet"][$urun_id] = $data;
}

