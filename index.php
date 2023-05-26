<!doctype html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="Style/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<meta charset="utf-8">
<title>Anasayfa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<script src="script.js" defer></script>
</head>
<body>
<header>
	<img class="logo" src="" alt="logo">
	<nav>
		<ul class="one">
			<li><a href="../Mesleki/index.php">Anasayfa</a></li>
			<li><a href="../Mesleki/hakkinda/hakkinda.php">Hakkında</a></li>
			<li><a href="../Mesleki/iletisim/iletisim.php">İletişim</a></li>
		</ul>
	</nav>

	<?php
	
	session_start();
	if(isset($_SESSION["username"])){
		?>
		<a class="btn1"href="urun/urun.php">Sepet</a>
		<a class="btn2"href="#"><?=$_SESSION['username']?></a>
		<a class="btn2"href="Giris/cikis.php">Çıkış Yap</a>
		<?php
	} else{
			?>

		<a class="btn1"href="Giris/index.php"target="_blank">Kayıt Ol</a>
	<a class="btn2"href="Giris/index.php"target="_blank">Giriş Yap</a>
		<?php
	}
	?>
		</header>




		<nav>
			<ul class="two">
				<li><a href="Elektronik/elektrk.php">Elektronik</a></li>
				<li><a href="giyim/giyim.php">Giyim</a></li>
				<li><a href="bahce/bahce.php">Bahçe</a></li>
				<li><a href="deko/deko.php">Dekorasyon</a></li>
				<li><a href="game/game.php">Gaming</a></li>
				<li><a href="mutfak/mutfak.php">Mutfak</a></li>
				<li><a href="kirtasiye/kirtasi.php">Kırtasiye</a></li>
			</ul>
	</nav>
	   
	<!--! animasyon java kısmı kaydırma bölümü bölümü -->
	<div class="trennd">
	<p>Trend Ürünler</p>
	</div>
	<section class="kaydirma">
		
	<div class="wrapper">
	<i id="left" class="fa-solid fa-angle-left"></i>
		<div class="carousel">
			<a href="#" target="_blank" ><img src="Resimler/foto9.jpg" alt="img"draggable="false"></a>
			<a href="#" target="_blank" ><img src="Resimler/foto16.jpg" alt="img"draggable="false"></a>
			<a href="#" target="_blank" ><img src="Resimler/foto12.jpg" alt="img"draggable="false"></a>
			<a href="#" target="_blank" ><img src="Resimler/foto11.jpg" alt="img"draggable="false"></a>
			<a href="#" target="_blank" ><img src="Resimler/foto14.jpg" alt="img"draggable="false"></a>
			<a href="#" target="_blank" ><img src="Resimler/foto13.jpg" alt="img"draggable="false"></a>
			<a href="#" target="_blank" ><img src="Resimler/foto2.jpg" alt="img"draggable="false"></a>
			<a href="#" target="_blank" ><img src="Resimler/foto3.jpg" alt="img"draggable="false"></a>
			<a href="#" target="_blank" ><img src="Resimler/foto16.jpg" alt="img"draggable="false"></a>
		</div>
		<i id="right" class="fa-solid fa-angle-right"></i>
		</div>
	</section>

	
		<!--! home bölümü -->
	<section class="menu">
		<p>İndirimi Kaçırma!!</p>
	    <div class="box-container">
		<div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
		<div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
		<div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
		<div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
		<div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
	    </div>
	</section>
	
	
	<!--! SON bölümü -->
	
	<footer>
	<div class="inner_footer">
		<div class="child_footer">
			<h3>SOSYAL MEDYA</h3>
			<ul class="footer_social">
			<li><a href="#"><img src="Resimler/pngwing.com (3).png"></a></li>
			<li><a href="#"><img src="Resimler/pngwing.com (4).png"></a></li>
			<li><a href="#"><img src="Resimler/pngwing.com (5).png"></a></li>
			</ul>
		 </div>
			<div class="child_footer">
			<h3>KURUMSAL</h3>
			<ul class="quick_kurum">
			<li><a href="../Mesleki/hakkinda/hakkinda.php"target="_blank">Hakkımızda</a></li>
			<li><a href="../Mesleki/iletisim/iletisim.php"target="_blank">İletişim</a></li>
			</ul>
		 </div>
		 <div class="child_footer">
			<h3>YARDIM DESTEK</h3>
			<ul class="footer_yardim">
			<li><a href="#">İade Ve Değişim</a></li>
			<li><a href="../Mesleki/marka/marka.php" target="_blank">Markalar</a></li>
			<li><a href="#"></a></li>
			</ul>
		 </div>
			<div class="child_footer">
			<h3>ÖDEME YÖNTEMLERİ</h3>
			<ul class="footer_guven">
			<li class="bi"><img src="Resimler/pngwing.com.png"></li>
			<li class="iki"><img src="Resimler/pngwing.com (1).png"></li>
			<li class="uc"><img src="Resimler/pngwing.com (2).png"></li>
			</ul>
		 </div>
		</div>
	</footer>
	
	
	
</body>
</html>