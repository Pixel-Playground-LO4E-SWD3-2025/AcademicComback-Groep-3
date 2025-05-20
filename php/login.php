  <?php require_once '../partials/header.php'; ?>
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

<?php require_once '../partials/footer.php'; ?>>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
  