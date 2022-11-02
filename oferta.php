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
        $polaczenie = new mysqli("localhost", "root", "", "space");
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
    <main style="height:550vh;">
        <div id="screen" style="height: 90vh;"></div>
        <div id="main">
            <h1 style="text-align: center; font-family: Kdam; font-size: 50px; padding-bottom: 4%;">OFERTY</h1><br>
            <div class="comment">
                <?php
                   $q = "select * from oferty";
                   $result = mysqli_query($polaczenie, $q);
                   $ilosc = mysqli_num_rows($result);
                   for($i=0; $i<$ilosc; $i++) {
                       $row = mysqli_fetch_row($result);
                        echo "<div class='ofertaDiv'>";
                        echo "<img src='Multimedia/".$row[0].".jpg' alt='".$row[1]."' style='width:40%;'>";
                        echo "<br><br><h2>".$row[1]."</h2><br>";
                        echo "<h4>Cena: <span style='color:#FFAC41'>".$row[2]."</span></h4><br>";
                        echo "</div>";
                   }
                ?>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; UP & AWAY</p>
    </footer>
</body>

</html>
