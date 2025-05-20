<?php require_once '../partials/header.php'; ?>
<main>
  <section class="login-page">
    <article class="login-box"> 
      <form action="verwerk_login.php" method="post">
        <h2>Inloggen</h2>

        <fieldset class="input-box">
          <input type="email" name="email" required placeholder="Emailadres" />
        </fieldset>

        <fieldset class="input-box">
          <input type="password" name="wachtwoord" required placeholder="Wachtwoord" />
        </fieldset>

        <section class="remember-forgot">
          <label><input type="checkbox" name="remember" /> Herinner mij</label>
          <a href="#">Wachtwoord vergeten?</a>
        </section>

        <button type="submit">Login</button>

        <section class="register-link">
          <p>Geen account? <a href="register.php">Account aanmaken</a></p>
        </section>
      </form>
    </article>
  </section>
</main>

<?php require_once '../partials/footer.php'; ?>
