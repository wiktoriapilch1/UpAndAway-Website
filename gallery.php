<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Wiktoria Pilch">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Up & Away</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Multimedia/favi.png">
    <?php
        session_start();
    ?>
</head>

<body>
    <div class="upperMenu">
        <?php
            if(!$_SESSION['username']) {
                echo "<span class='logowanie.php'><a href='zaloguj.php'>Zaloguj/Zarejestruj</a></span>"; 
            } else {
                echo "<span class='logowanie.php'><a href='wyloguj.php'>Wyloguj mnie</a></span>"; 
            }
        ?>
    </div>
    <header class="upperMenu">
        <div style="display:flex; align-items: baseline; padding: 0; align-content: flex-start; font-family: Kdam;">
            <a href="index.php"><img src="Multimedia/favi.png" alt="astronaut" style="max-width:20%; vertical-align: middle;"></a>
            <span class="spanSmall"><a href="oferta.php" class="menuA" >Oferty</a></span>
            <span class="spanSmall"<a href="gallery.php" class="menuA" style="font-family: Kdam;">Galeria</a></span>
            <span class="spanSmall"><a href="forum.php" class="menuA">Forum</a></span>
        </div>
    </header>
    <main>
        <div id="screen" style="height: 90vh;"></div>
        <div id="main">
            <h1 style="text-align: center; font-family: Kdam; font-size: 50px; padding-bottom: 4%;">GALERIA</h1>
            <p style="text-align: center; font-family: Joan; font-size: 20px;">Kilka zdjęć z podróży po galaktyce, <span style="color:#FF1E56 ;">kliknij</span>, aby powiększyć.</p><br><br><br>
            <div class="galleryRow">
                <div class="galleryColumn">
                    <img src="Gallery/5.jpg" alt="Odpoczynek po przechadzce po Marsie" style="width:80%" onclick="biggerImg(this);">
                </div>
                <div class="galleryColumn">
                    <img src="Gallery/4.jpg" alt="Przegląd rakiety" style="width:80%" onclick="biggerImg(this);">
                </div>
                <div class="galleryColumn">
                    <img src="Gallery/7.jpg" alt="Licząc miliony gwiazd" style="width:80%" onclick="biggerImg(this);">
                </div>
                <div class="galleryColumn">
                    <img src="Gallery/3.jpg" alt="Czas na zabawę w próżni" style="width:80%" onclick="biggerImg(this);">
                </div>
            </div>
            <div>
                <div id="imgtext">Odpoczynek po przechadzce po Marsie</div><br>
                <img id="expandedImg" src="Gallery/5.jpg" alt="Odpoczynek po przechadzce po Marsie">
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; UP & AWAY</p>
    </footer>
    <script>
        function biggerImg(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
        }
    </script>
</body>

</html>