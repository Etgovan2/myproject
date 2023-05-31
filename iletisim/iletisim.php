 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iletişim</title>
    <link rel="stylesheet" href="../iletisim/itcss/it.css">
    <script src="https://kit.fontawesome.com/d755b7edb1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
	<img class="logo" src="" alt="logo">
	<nav>
		<ul class="one">
			<li><a href="../index.php">Anasayfa</a></li>
			<li><a href="../hakkinda/hakkinda.php">Hakkında</a></li>
			<li><a href="#">İletişim</a></li>
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
			<li><a href="../bahce/bahce.php">Bahçe</a></li>
			<li><a href="../deko/deko.php">Dekorasyon</a></li>
			<li><a href="../game/game.php">Gaming</a></li>
			<li><a href="../mutfak/mutfak.php">Mutfak</a></li>
			<li><a href="../kirtasiye/kirtasi.php">Kırtasiye</a></li>
		</ul>
	</nav>


    <section id="contact">
        <div class="container">
            <h1 class="title">İletişim</h1>
            <div class="contact-area">
                <div class="cont-left">
                    <div class="cont-top">
                        <div class="cont-element">
                            <i class="far fa-address-card"></i>
                            <address> İstanbul / Türkiye </address>
                        </div>
                        <div class="cont-element">
                            <i class="far fa-envelope"></i>
                            <a href="mailto:furkansunger@fakemail.com">Hepsibende.com</a>
                        </div>
                        <div class="cont-element">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:+1234567890">0850 441 82 07</a>
                        </div>
                    </div>
                    <div class="cont-bottom">
                        <a href="#"><i class="fab fa-facebook-f"></i></a> 
                        <a href="#"><i class="fab fa-twitter"></i></a> 
                        <a href="#"><i class="fab fa-instagram"></i></a> 
                        <a href="#"><i class="fab fa-linkedin-in"></i></a> 
                    </div>
                </div>
                <div class="cont-right">
                    <form action="">
                        <input type="text" name="adsoyad" placeholder="Adınız Soyadınız">
                        <input type="email" name="eposta" placeholder="E-Posta Adresiniz">
                        <textarea name="mesaj" rows="10" placeholder="Mesajınız"></textarea>
                        <input type="submit"value="Gönder">
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
global$baglan;
global$db;

include"../Giris/baglan.php";
if (isset($_POST["text"], $_POST["email"], $_POST["message"]))
{
	$adsoyad=$_POST["adsoyad"];
	$eposta=$_POST["eposta"];
	$mesaj=$_POST["mesaj"];

	$ekle="INSERT INTO iletisim(adsoyad,eposta,mesaj) VALUES ('".$adsoyad."','".$eposta."','".$mesaj."')";

	if ($db->query($ekle)===TRUE)
	{
		echo "<script> alert('Mesajınız gönderildi')</script>";
	}
}

?>



    <section class="menu">
	    <div class="box-container">
		<div class="box"><h2>İletişim bilgilerimiz</h2><br><br><br>
        <p><i class="fa fa-phone" style="font-size:27px"></i>  &nbsp;0850 441 82 07<br><br><br>
        <i class="fa fa-mobile-phone"style="font-size:27px"></i> &nbsp;&nbsp; 0 542 689 0270<br><br> <br>
        <i class="fa fa-envelope-o"style="font-size:26px"></i>&nbsp; hepsibende@gmail.com <br><br><br>
        <i class="fa fa-location-arrow"style="font-size:26px"></i><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3009.5544604759825!2d28.854598815414892!3d41.03500247929805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zYmHEn2PEsWxhciBtZXlkYW4!5e0!3m2!1str!2str!4v1682782091779!5m2!1str!2str" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    
    </p>
</div>
		
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
			<li><a href="#">İletişim</a></li>
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