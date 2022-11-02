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
    </div>
    <header class="upperMenu">
        <div style="display:flex; align-items: baseline; padding: 0; align-content: flex-start; font-family: Kdam;">
            <a href="index.php"><img src="Multimedia/favi.png" alt="astronaut" style="max-width:20%; vertical-align: middle;"></a>
            <span><a href="oferta.php" class="menuA">Oferty</a></span>
            <span><a href="gallery.php" class="menuA">Galeria</a></span>
            <span><a href="forum.php" class="menuA">Forum</a></span>
        </div>
    </header>
    <main style="height: 160vh;">
        <div id="screen" style="height: 90vh;"></div>
        <div id="main">
            <h1 style="text-align: center; font-family: Kdam; font-size: 50px; padding-bottom: 4%;">LOGOWANIE</h1>
            <form method="post">
            <table>
                <tr>
                    <td class="formField"><input class="inputField" type="text" name="username" placeholder="Nazwa uzytkownika" required></td>
                </tr>
                <tr>
                    <td class="formField"><input class="inputField" type="password" name="password" placeholder="Haslo" required></td>
                </tr>
                <tr>
                    <td class="formField"><input style="background-color:#FF1E56; color:white;" class="inputField" type="submit" name="loggedIn" value="Zaloguj"></td>
                </tr>
            </table>
            <p style="text-align: center; font-family: Joan; font-size: 18px; padding-top: 4%;">Nie masz konta?<a style="color:#FFAC41" href="zaloguj.php"> Załóż konto</a></p>
            </form>
            <?php
                if(isset($_POST["loggedIn"])) {
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                
                    $query=mysqli_query($polaczenie,"select * from `users` where username='$username' AND password='$password'");
                    $numrows=mysqli_num_rows($query);
                    
                    if($numrows == 0) {
                        echo "<p style='text-align: center; font-family: Joan; font-size: 18px;'>Nie ma takiego użytkownika!<br>Błędne dane!</p>";
                    } else {
                        $_SESSION['username'] = $username;
                        header('location:index.php');
                    }
                    
                }
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; UP & AWAY</p>
    </footer>
</body>
</html>