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
                <h1>Giriş Yap</h1>
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
                </div>
                <button href="index.php" name="giris"class="btn btn-priamry btn-large btn-block">Giriş Yap</button>
            </form>
            <a href="kayit.php"><button class="btn btn-priamry btn-large btn-block">Kayıt Ol </button></a>
        </div>
    </div>

	</body>
    </html>