<?php 

require 'baglan.php';

?>
<!doctype html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="../Giris/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<meta charset="utf-8">
<title>hepsibende.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<script src="script.js" defer></script>
	
</head>
<body>
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Kayıt Ol</h1>
            </div>
            <form action="islem.php" method="post">
            <div class="login-form">
                <div class="control-group">
                <input type="text" name="username"class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                <label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                <div class="control-group">
                <input type="password" name="password"class="login-field" placeholder="Şifre" id="login-pass">
                <label class="login-field-icon fui-user" for="login-pass"></label>
                </div>
                <div class="control-group">
                <input type="password" name="password_again"class="login-field" placeholder="Tekrar Şifre" id="login-pass">
                <label class="login-field-icon fui-user" for="login-pass"></label>
                </div>
                <div class="control-group">
                <input type="text" name="address"class="login-field" placeholder="Adres" id="login-address">
                <label class="login-field-icon fui-user" for="login-address"></label>
                </div>
                <div class="control-group">
                <input type="text" name="phone"class="login-field" placeholder="Telefon" maxlength="11" minlength="11" id="login-phone">
                <label class="login-field-icon fui-user" for="login-phone"></label>
                </div>
                <button href="kayit.php" name="kayit" class="btn btn-priamry btn-large btn-block">Kayıt Ol</button>

         </div>
         </form>
         <a href="index.php"><button href="index.php" class="btn btn-priamry btn-large btn-block">Giriş Yap</button></a>
        </div>
    </div>

	</body>
    </html>