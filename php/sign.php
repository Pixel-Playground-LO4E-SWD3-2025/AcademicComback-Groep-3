  <?php require_once '../partials/header.php'; ?>
<main class="register-page">
  <article class="register-box">
    <h2>Account aanmaken</h2>

    <form action="/register" method="POST">
      <section class="input-wrapper">
        <input type="text" name="username" placeholder="Gebruikersnaam" required />
      </section>

      <section class="input-wrapper">
        <input type="email" name="email" placeholder="E-mailadres" required />
      </section>

      <section class="input-wrapper">
        <input type="password" name="password" placeholder="Wachtwoord" required />
      </section>

      <section class="input-wrapper">
        <input type="password" name="confirm_password" placeholder="Bevestig wachtwoord" required />
      </section>

      <button type="submit">Registreer</button>

      <section class="register-link">
        <p>Al een account? <a href="/login">Log in</a></p>
      </section>
    </form>
  </article>
</main>


<?php require_once '../partials/footer.php'; ?>