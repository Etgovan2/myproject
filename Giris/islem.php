<?php


global $db;
require 'baglan.php';

if(isset($_POST['kayit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_again = @$_POST['password_again'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];


    if(!$username){
        echo"Lütfen kullanıcı adınızı giriniz";
    } elseif(!$password || !$password_again){
        echo"Lütfen şifrenizi giriniz";
    } elseif($password != $password_again){
        echo"Girdiğiniz şifreler birbiriyle aynı değil";
    }
    elseif(!$phone){
        echo"Lütfen telefon numaranızı giriniz";
    } 
    elseif(!$address){
        echo"Lütfen adresinizi giriniz";
    }
    else{
        $sorgu = $db->prepare('INSERT INTO users SET user_name = ?, user_password = ?, user_phone = ?, user_address = ?');
        $ekle = $sorgu->execute([
            $username, $password,$phone,$address
        ]);
    if($ekle){
        echo "Kayıt başarıyla gerçekleşti, yönlendiriliyorsunuz";
        header('Refresh:2; /Mesleki/Giris/index.php');
    } else{
        echo "Bir hata oluştu, Tekrar kontrol edin";
    }
  }
    
}
    if(isset($_POST['giris'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!$username){
            echo "kullanıcı adınızı giriniz";
        } elseif(!$password){
            echo"Şifrenizi giriniz";
        } else {
            $kullanici_sor = $db->prepare('SELECT * FROM users WHERE user_name = ? && user_password = ?');
            $sonuc = $kullanici_sor->execute([$username,$password]);

           $say = $kullanici_sor->rowCount();
            if($say==1){


                $user = $kullanici_sor->fetch(PDO::FETCH_ASSOC);
                $address = $user['user_address'];
                $phone = $user['user_phone'];


                session_start();

                $_SESSION['username']=$username;
                $_SESSION['address']= empty($address)  ?  "adress tanımlı değil" :  $address;
                $_SESSION['phone']= empty($phone)  ?  "telefon tanımlı değil" :  $phone;



                echo "Başarıyla giriş yaptınız, yönlendiriliyorsunuz";
                header('Refresh:2; /Mesleki/index.php');
            } else{
                echo "Kullanıcı adı veya şifre hatalı";
            }
        }
    }




?>