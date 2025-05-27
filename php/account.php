  <?php require_once '../partials/header.php'; 
  
  ?>
  <body>
  <main class="account-page">
    <h1>Mijn Account</h1>

    <section class="account-section">
      <h2>Gebruikersgegevens</h2>
      <article>
        <p><strong>Naam:</strong> Jan Jansen</p>
        <p><strong>Email:</strong> jan@email.com</p>
        <p><strong>Gebruikersnaam:</strong> jan123</p>
      </article>
    </section>

  <form action="" id="wachtwoord">wachtwoord</form>
  <input type="text">test
  <form action="wachtwoord">uname</form>

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