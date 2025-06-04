<?php require_once '../partials/header.php'; ?>

<?php
if (isset($_POST['submit'])) {
  if (!empty($_POST['gebruikersnaam']) && !empty($_POST['wachtwoord'])) {

    try {
      $conn = new mysqli("localhost", "root", "", "pixelplayground");

    } catch (Exception $e) {
      $error = "niet goed";
      die($error);
    }
    $user = $_POST['gebruikersnaam'];
    $pass = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO gebruikers (gebruikersnaam, wachtwoord) VALUES ('$user', '$pass')";

    try {
      $conn->query($sql);
      $conn->close();
      echo "Gebruiker toegevoegd";

    } catch (Exception $e) {
      $error = "niet goed";
      die($error);
    }
  } else {
    echo "Vul beide velden in";
  }
}
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