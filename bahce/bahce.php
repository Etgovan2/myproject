<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iletişim</title>
    <link rel="stylesheet" href="bahce.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <img class="logo" src="" alt="logo">
    <nav>
        <ul class="one">
            <li><a href="../index.php">Anasayfa</a></li>
            <li><a href="../hakkinda/hakkinda.php" >Hakkında</a></li>
            <li><a href="../iletisim/iletisim.php">İletişim</a></li>
        </ul>

    </nav>
    <?php

    session_start();


    if(isset($_SESSION["username"])){
        ?>
        <a class="btn2"href="#"><?=$_SESSION['username']?></a>
        <a class="btn2"href="../Giris/cikis.php">Çıkış Yap</a>
        <?php
    } else{
        ?>
        <a class="btn1"href="../Giris/kayit.php" target="_blank">Kayıt Ol</a>
        <a class="btn2"href="../Giris/index.php"target="_blank">Giriş Yap</a>
        <?php
    }
    ?>
</header>
<nav>
    <ul class="two">
        <li><a href="../Elektronik/elektrk.php">Elektronik</a></li>
        <li><a href="../giyim/giyim.php">Giyim</a></li>
        <li><a href="../bahce/bahce.php"class="elek">Bahçe</a></li>
        <li><a href="../deko/deko.php">Dekorasyon</a></li>
        <li><a href="../game/game.php">Gaming</a></li>
        <li><a href="../mutfak/mutfak.php">Mutfak</a></li>
        <li><a href="../kirtasiye/kirtasi.php">Kırtasiye</a></li>
    </ul>
</nav>



<section class="menu">
    <div class="box-container">
        <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
        <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
        <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
        <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
        <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
    </div>
</section>
<section class="menu">
    <div class="box-container">
        <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
        <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
        <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
        <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
        <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
    </div>
</section>




<footer>
    <div class="inner_footer">
        <div class="child_footer">
            <h3>SOSYAL MEDYA</h3>
            <ul class="footer_social">
                <li><a href="#"><img src="../Resimler/pngwing.com (3).png"></a></li>
                <li><a href="#"><img src="../Resimler/pngwing.com (4).png"></a></li>
                <li><a href="#"><img src="../Resimler/pngwing.com (5).png"></a></li>
            </ul>
        </div>
        <div class="child_footer">
            <h3>KURUMSAL</h3>
            <ul class="quick_kurum">
                <li><a href="../hakkinda/hakkinda.php">Hakkımızda</a></li>
                <li><a href="../iletisim/iletisim.php">İletişim</a></li>
            </ul>
        </div>
        <div class="child_footer">
            <h3>YARDIM DESTEK</h3>
            <ul class="footer_yardim">
                <li><a href="#">İade Ve Değişim</a></li>
                <li><a href="../marka/marka.php">Markalar</a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
        <div class="child_footer">
            <h3>ÖDEME YÖNTEMLERİ</h3>
            <ul class="footer_guven">
                <li class="bi"><img src="../Resimler/pngwing.com.png"></li>
                <li class="iki"><img src="../Resimler/pngwing.com (1).png"></li>
                <li class="üc"><img src="../Resimler/pngwing.com (2).png"></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>