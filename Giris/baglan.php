<?php 

try{
    $db = new PDO("mysql:host=localhost; dbname=deneme.sql; charset=utf8",'root','');
   
}
catch(Exception $e)
{
    echo $e->getMessage();
}
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="deneme.sql";
$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);
?>
