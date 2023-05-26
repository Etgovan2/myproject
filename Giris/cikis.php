<?php session_start();

unset($_SESSION['username']);
echo"çıkış yapıldı";
header('Refresh:2; /Mesleki/index.php');
?>
