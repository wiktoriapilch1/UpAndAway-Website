<?php
     $polaczenie = new mysqli("localhost", "root", "", "space");
     session_start();
     session_destroy();
     header("location: index.php");
?>