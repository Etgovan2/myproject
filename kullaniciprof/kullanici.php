<?php
include '../Giris/baglan.php';
?>
<!doctype html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="kllanicicss/kullaniciprf.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Kullanıcı</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="script.js" defer></script>

</head>
    <body>

        <header>
            <img class="logo" src="" alt="logo">
            <nav>
                <ul class="one">
                    <li><a href="../index.php">Anasayfa</a></li>
                    <li><a href="../hakkinda/hakkinda.php" target="_blank">Hakkında</a></li>
                    <li><a href="../iletisim/iletisim.php" target="_blank">İletişim</a></li>
                </ul>

            </nav>

            <?php
            session_start();
            if(isset($_SESSION["username"])){
                ?>
                <a class="btn2"href="../Giris/index.php"target="_blank">Sepet</a>
                <a class="btn2"href="../kullaniciprof/kullanici.php"><?=$_SESSION['username']?></a>
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
        <?php
        global$db;

        include"../Giris/baglan.php";

        $query = $db->query("SELECT * FROM users", PDO::FETCH_ASSOC);
        $rows = $query->fetchAll();

        ?>
            <section class="menu">
                <div class="box-container">
                    <div class="box"><p>Kullanıcı Adınız: <?php
                            if(isset($_SESSION["username"])){
                                ?>

                                <?=$_SESSION['username']?>

                                <?php
                            } else{
                                ?>

                                <?php
                            }
                            ?><br>
                            Adresiniz: <?php
                            if(isset($_SESSION["username"])){
                                ?>

                                <?=$_SESSION['address']?>

                                <?php
                            } else{
                                ?>

                                <?php
                            }
                            ?>


                            Telefonunuz:<?php
                            if(isset($_SESSION["phone"])){
                                ?>

                                <?=$_SESSION['phone']?>

                                <?php
                            } else{
                                ?>

                                <?php
                            }
                            ?> </p></div>
                    <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
                    <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
                    <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
                    <div class="box"><a href="../proje3/ornek.html" target="_blank" ><img src="Resimler/box1.jpg" alt="" href"https://music.youtube.com/"></a></div>
                </div>
            </section>
    </body>
</html>