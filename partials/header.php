<!DOCTYPE html>
<html lang="nl" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>00Games</title>
  <link rel="stylesheet" href="../CSS/styles.css">
  <script src="../js/script.js"defer></script>
  <script src="../js/theme.js"defer></script>
  <script src="../js/unamewachtwoord.js"defer></script>
</head>
<body>
<header class="topbar">
  <img src="../img/00Games.png" alt="Mijn Logo" class="logo">
  <button class="hamburger" id="burger-knop" aria-label="Menu openen">☰</button>
   
<?php try{
      $conn = new mysqli("localhost", "root", "", "pixelplayground");
  }catch (Exception $e){
    $error = $e->getMessage();
    echo $error;
  }
  ?>  
  


  <nav class="navbar">
    <ul class="nav-list">
      <li><a href="index.php">Home</a></li>
      <li><a href="Games.php">Games</a></li>
      <li><a href="highscores.php">Highscores</a></li>
      <li><a href="Friends.php">Friends</a></li>
      <li><a href="Login.php">Login</a></li>
      <li><a href="sign.php">Registreer</a></li>
      <?php 
        session_start();
        if(isset($_SESSION['isLoggedIn'])){
          echo "<li><a href='account.php'>Admin</a></li>";
          echo "<li><a href='logout.php'>Logout</a></li>";
        }
      ?>
    </ul>
  </nav>
</header>