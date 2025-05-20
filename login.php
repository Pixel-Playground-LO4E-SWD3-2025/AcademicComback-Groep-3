<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/styles.css">
</head>

<body>
<header class="topbar">
    <img src="../img/00Games.png" alt="Mijn Logo" class="logo">
    <nav class="navbar">
        <ul class="nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="Games.php">Games</a></li>
            <li><a href="highscores.php">Highscores</a></li>
            <li><a href="Friends.php">Friends</a></li>
            <li><a href="Login.php">Login</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="login-page">
        <article class="login-box">
            <form action="">
                <h2>Login</h2>

                <fieldset class="input-box">
                    <legend hidden>Login met e-mail</legend>
                    <label>
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required placeholder="Email">
                    </label>
                </fieldset>

                <fieldset class="input-box">
                    <legend hidden>Login met wachtwoord</legend>
                    <label>
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required placeholder="Wachtwoord">
                    </label>
                </fieldset>

                <div class="remember-forgot">
                    <label><input type="checkbox"> Herinner mij</label>
                    <a href="#">Wachtwoord vergeten?</a>
                </div>

                <button type="submit">Login</button>

                <section class="register-link">
                    <p>Geen account? <a href="">Account aanmaken</a></p>
                </section>
            </form>
        </article>
    </section>
</main>

<footer class="footer">
    <p>&copy; 2025 00games. Alle rechten voorbehouden.</p>
    <p>Gemaakt door 00games Team</p>
</footer>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
  