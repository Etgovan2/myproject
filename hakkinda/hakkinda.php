<!doctype html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="../hakkinda/hkcss/hk.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<meta charset="utf-8">
<title>hakkımızda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<script src="script.js" defer></script>
	
</head>
<body>
<header>
	<img class="logo" src="" alt="logo">
	<nav>
		<ul class="one">
			<li><a href="../index.php">Anasayfa</a></li>
			<li><a href="#">Hakkında</a></li>
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
				<li><a href="../bahce/bahce.php">Bahçe</a></li>
				<li><a href="../deko/deko.php">Dekorasyon</a></li>
				<li><a href="../game/game.php">Gaming</a></li>
				<li><a href="../mutfak/mutfak.php">Mutfak</a></li>
				<li><a href="../kirtasiye/kirtasi.php">Kırtasiye</a></li>
			</ul>
	</nav>
    <section class="menu">
	    <div class="box-container">
		<div class="box"><h3 class="hak">HAKKIMIZDA</h3><p>
Hepsibende, sokak modasını,ev aletlerini ve aklına gelen her şeyi yakından takip eden ya da ilgi duyan herkesi bu akımla buluşturmak maksadıyla 2023 yılında İstanbul'da kuruldu.
İlk olarak güçlü bir moda /aksesuar reyonuyla ticari hayatına adım atan Hepsibende;zamanla müşterilerine sunduğu ürün gruplarını hem kategori hem 
tasarım hem de erişim anlamında çok daha ciddi bir büyüklüğe taşıdı.<br><br>Güncel olarak Türkiye'nin 81 iline ürün göndererek, her gün yüzlerce genci hayal ettiği ürünleriyle buluşturarak özellikle sokak giyimi ve elektronik kavramlarının her daim kendisine merkez edindi.
<br><br>Dünya trendlerini, moda ve müzik akımlarını ürün seçimlerinde ciddiyetle takip eden pazarlama karakteriyle Hepsibende; 
bugün hala Türkiye'nin En Büyük Online Aksesuar,Giyim ve Ev aletleri Mağazası olmaya devam ediyor.<br><br><b>Güvenli Alışveriş</b><br>
Aksesuarix.com 128 Bit SSL sertifikasına sahip bir web sitesidir. Kredi kartınızla güvenli bir şekilde alışveriş yapabilirsiniz.
Kredi Kartı dışında kapıda nakit ödeme seçeneğini kullanarak da sipariş verebilirsiniz.<br><br><b>Hızlı Teslimat</b><br>
Aksesuarix'in en önemsediği konulardan birisi hızlı teslimat; Sitemizden ya da uygulamamızdan verilen siparişler en geç 3 iş günü içinde kargo firmalarına teslim edilir.<br><br>
<b>İade Değişim</b><br>
Değişim yapılması toplumsal hijyen kuralları gereği yasak olan ürünler hariç Aksesuarix.com’dan aldığınız ürün ya da ürünleri beğenmediğiniz takdirde koşulsuz iade edebilirsiniz. Siparişinizle beraber size gönderilen iade-değişim formunu doldurup, formada da belirtildiği şekilde tarafımıza geri gönderebilirsiniz.<br><br>
<b>Güler Yüzlü Müşteri Desteği</b><br>
Satın aldığınız veya almayı planladığınız ürünlerle ilgili olarak haftanın 6 günü mesai saatleri içinde 0850 441 82 07 numaralı telefondan Aksesuarix.com müşteri hizmetlerine ulaşabilir ve bilgi alabilirsiniz. Ayrıca info@aksesuarix.com e-posta adresini kullanabilir ya da 0 542 689 0270 numaralı Whatsapp hattımızdan bize ulaşabilirsiniz.<br><br>
<b>İletişim:</b><br>
Aksesuarix.com Ozyo Pazarlama Girişimidir. (Tüm Hakları Saklıdır)
Ozyo Pazarlama Madencilik İnşaat İthalat İhracat Sanayi Ve Ticaret Ltd. Şti
Meriç Mah. MTK Sitesi 5747/10 SOKAK NO:3 Çamdibi Bornova/İzmir
EGE V.D. 650 003 8245<br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3009.5928217134165!2d28.853682876005163!3d41.03416337134693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zYmHEn2PEsWxhciBteWRhbg!5e0!3m2!1str!2str!4v1682769536503!5m2!1str!2str" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br><br>
<b>Telefon:</b><br>
0850 441 82 07<br><br>
<b>Whatsapp Destek Hattı :</b>
0 542 689 0270<br><br>

Çalışma saatleri içerisinde müşteri hizmetlerine ulaşabilirsiniz.<br><br>
<b>Çalışma Saatleri:</b><br>
Hafta içi:      08:00 – 17:00<br>
Cumartesi:   08:00 – 13:00<br><br>
<b>E-posta:</b></b><br>
info@aksesuarix.com<br>
7/24 E-Posta Yoluyla Ulaşabilirsiniz.En Kısa Sürede Geri Dönüş Sağlanır.
</p></div>
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
			<li><a href="#"target="_blank">Hakkımızda</a></li>
			<li><a href="../iletisim/iletisim.php">İletişim</a></li>
			</ul>
		 </div>
		 <div class="child_footer">
			<h3>YARDIM DESTEK</h3>
			<ul class="footer_guven">
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
			<li class="uc"><img src="../Resimler/pngwing.com (2).png"></li>
			</ul>
		 </div>
		</div>
	</footer>
	</body>
</html>