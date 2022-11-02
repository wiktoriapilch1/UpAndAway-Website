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
    <main style="height:500vh; max-height:1000vh;">
        <div id="screen" style="height: 90vh;"></div>
        <div id="main">
            <h1 style="text-align: center; font-family: Kdam; font-size: 50px; padding-bottom: 4%;">FORUM</h1><br>   
            <?php
                if(!$_SESSION['username']) {
                    echo "<p style='text-align: center; font-family: Joan; font-size: 20px;'>Opinie klientów, którzy skorzystali z naszych ofert.<br><a href='zaloguj.php' style='color:#FF1E56 ; text-decoraction: none;'> Zaloguj się</a>, aby dodać własny komentarz.</p>";
                } else {
                    echo "<form method='post'>
                    <div class='comment'>
                        <div class='userData' id='smallScreen'>
                        <span style='text-align: center; font-family: Joan; font-size: 20px;'>Dodaj własną opinię ".$_SESSION['username']."!</span><br>
                            <input class='inputField' type='text' name='opinion' placeholder='Napisz swoje wrażenia' required><br>
                            <input class='inputField' type='number' name='recenzja' min='1' max='5' placeholder='Ilość gwiazdek za usługi' required><br>
                            <input class='inputField' type='submit' value='dodaj' name='dodaj'>
                        </div>
                    </div>
                    </form><br><br>";
                    if(isset($_POST['dodaj'])) {
                        @$recenzja = $_POST['recenzja'];
                        @$opinion = $_POST['opinion'];
                        $q1 = "INSERT INTO forum (username, opinion, stars) VALUES('".$_SESSION['username']."', '".$opinion."', '".$recenzja."')";
                        $re = mysqli_query($polaczenie, $q1);
                    }
                }
            ?>
            <br><br><br>
            <div class="comment">
           <?php
            $q = "select * from forum";
            $res = mysqli_query($polaczenie, $q);
            $ilosc = mysqli_num_rows($res);
            for($i=0; $i<$ilosc; $i++) {
                $row = mysqli_fetch_row($res);
                echo "<div class='userData'>";
                echo "<p><span class='usernames'>".$row[1]."</span></p><br>";
                echo "<p>".$row[2]."</p><p>Ilość gwiazdek:</p>";
                $stars = $row[3];
                for($j=0; $j < $stars; $j++) {
                    echo "<img src='Multimedia/kotek.png' alt='gwiazdka' width='10%'>";
                }
                echo "<br></div>";
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