<!DOCTYPE html>
<html lang="nl" data-theme="light">
<?php

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>00Games</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <script src="../js/script.js" defer></script>
    <script src="../js/theme.js" defer></script>
    <script src="../js/unamewachtwoord.js" defer></script>
    <script src="../js/friend.js" defer></script>
</head>

<body>
    <header class="topbar">
        <img src="../img/00Games.png" alt="Mijn Logo" class="logo">
        <button class="hamburger" id="burger-knop" aria-label="Menu openen">☰</button>
        <nav class="navbar">
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="Games.php">Games</a></li>
                <li><a href="highscores.php">Highscores</a></li>
                <li><a href="Friends.php">Friends</a></li>
                <?php
                session_start();
                if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true)
                {

                    echo "<li><a href='vrienden_verstuurd.php'>Verzoeken verstuurd</a</li>";

                    echo "<li><a href='account.php'>Account</a></li>";
                    echo "<li><a href='logout.php'>Logout</a></li>";
                }
                else
                {
                    echo "<li><a href='Login.php'>Login</a></li>";
                    echo "<li><a href='sign.php'>Registreer</a></li>";
                }
                ?>

            </ul>
        </nav>
    </header>