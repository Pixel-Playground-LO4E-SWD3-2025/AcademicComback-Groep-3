<?php

require_once '../partials/inloggen.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <main>
    <section class="login-page">
      <article class="login-box">
        <form method="post">
          <h2>Inloggen</h2>

          <fieldset class="input-box">
            <input type="text" name="gebruikersnaam" required placeholder="gebruikersnaam" />
          </fieldset>

          <fieldset class="input-box">
            <input type="password" name="wachtwoord" required placeholder="Wachtwoord" />
          </fieldset>

          <section class="remember-forgot">
            <label><input type="checkbox" name="remember" /> Herinner mij</label>
            <a href="#">Wachtwoord vergeten?</a>
          </section>

          <input type="submit" name="submit">Login</input>

          <section class="register-link">
            <p>Geen account? <a href="sign.php">Account aanmaken</a></p>
          </section>
        </form>
      </article>
    </section>
  </main>

  <?php require_once '../partials/footer.php'; ?>

</body>

</html>