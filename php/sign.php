<?php

require_once '../partials/registreer.php';

?>


<main class="register-page">
  <article class="register-box">
    <h2>Account aanmaken</h2>

    <form method="post">
      <section class="input-wrapper">
        <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required />
      </section>

      <section class="input-wrapper">
        <input type="password" name="wachtwoord" placeholder="Wachtwoord" required />
      </section>

      <section class="input-wrapper">
        <input type="password" name="confirm_password" placeholder="Bevestig wachtwoord" required />
      </section>

      <input type="submit" name="submit">Registreer</input>

      <section class="register-link">
        <p>Al een account? <a href="login.php">Log in</a></p>
      </section>
    </form>
  </article>
</main>


<?php require_once '../partials/footer.php'; ?>