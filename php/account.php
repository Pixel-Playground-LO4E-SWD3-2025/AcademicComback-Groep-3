  <?php require_once '../partials/header.php';

  ?>

  <?php


  $username = $_SESSION['username'];
  // }

  ?>

  <body>
    <main class="account-page">
      <h1>Mijn Account</h1>

      <section class="account-section">
        <h2>Gebruikersgegevens</h2>
        <article>
          <p><strong>Naam:</strong></p>
          <?php echo $username ?>
          <p><strong>Gebruikersnaam:</strong> </p>
        </article>
      </section>

      <form action="" id="wachtwoord" method="post">
        wachtwoord
        <input type="text" name="wachtwoord">
        <input type="submit" name='change-pass'>
      </form>
      <form action="" id="uname" method="post">
        Username
        <input type="text" name="gebruikersnaam">
        <input type="submit" name='submit'>
      </form>

      <section class="account-section">
        <h2>Acties</h2>
        <article>
          <button id="wachtbutton">Wachtwoord wijzigen</button>
          <button id="unamebutton">Naam wijzigen</button>
        </article>
      </section>
    </main>
  </body>

  </html>
  <?php require_once '../partials/footer.php'; ?>