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
            <span><a href="oferta.php" class="menuA">Oferty</a></span>
            <span><a href="gallery.php" class="menuA">Galeria</a></span>
            <span><a href="forum.php" class="menuA">Forum</a></span>
        </div>
    </header>
    <main>
        <div id="screen" style="height: 90vh;"></div>
        <div id="main">
            <h1 style="text-align: center; font-family: Kdam; font-size: 50px; padding-bottom: 4%;">UP & AWAY</h1>
            <div id="firstSection">
                <p>Jesteśmy pordóżnikami, niesutannie podążającymi naprzód i oglądającymi się za siebie.<br> W pojedynkę i jako zespół nie mamy innego wyboru, niż próbować. Z powodu naszej nienasyconej ciekawości, z powodu naszego strachu przed tym, co się
                    stanie, jeśli tego nie zrobimy. <br>Nadeszła Twoja kolej, by zostać <span style="color: #FF1E56">odkrywcą</span>
                </p>
                <button class="btn" style="margin-top: 6%;"><a href="gallery.php">Odkrywaj</a></button>
            </div>
            <div class="row">
                <div class="column">
                    <img src="Multimedia/a3.jpg" alt="a3" width="100%">
                    <span style="padding:2%;">
                        <h2>Poczuj się jak w NASA</h2><br>
                        <p>W 90 minut okrążasz całą Ziemię. 
                           Widzisz jej piękno i doświadczasz go w każdej sekundzie.
                           Podróżuj w rakiecie, walcz z grawitajcą i zasmakuj życia astronauty dzięki naszym ofertom podróży.
                       </p>
                    </span>
                </div>
                <div class="column">
                    <img src="Multimedia/a2.jpg" alt="a2" width="100%">
                    <span style="padding:2%;">
                        <h2>Przełamuj własne bariery</h2><br>
                        <p>Astronauci to liderzy. Są jak najlepsi sportowcy. 
                            Przez lata trenują swoje umiejętności, aby potem użyć ich podczas misji na Stacji Kosmicznej.
                            Wymaga to ogromnej koncentracji, wysiłku i samozaparcia, jeszcze zanim wyruszy na swoją pierwszą misję.</p>
                    </span>
                </div>
                <div class="column">
                    <img src="Multimedia/a1.jpg" alt="a1" width="100%">
                    <span style="padding:2%;">
                        <h2>Zostań pionierem</h2><br>
                        <p>Gdy stoisz na Ziemi to Twoja perspektywa jest ograniczona. 
                            Widzisz kilka kilometrów przed siebie, po horyzont.
                            Ze stacji orbitalnej widzisz tysiąc kilometrów.
                            Oglądasz 16 spektakularnych wschodów i zachodów słońca dziennie.</p>
                    </span>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; UP & AWAY</p>
    </footer>

</body>

</html>