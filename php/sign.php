  <?php require_once '../partials/header.php'; ?>

  <?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['gebruikersnaam']) && !empty($_POST['wachtwoord'])) {

        try {
            $conn = new mysqli("localhost", "root", "", "pixelplayground");

   
            if ($conn->connect_error) {
                throw new Exception("Verbindingsfout: " . $conn->connect_error);
            }

       
            $user = $conn->real_escape_string($_POST['gebruikersnaam']);
            $pass = $conn->real_escape_string($_POST['wachtwoord']);

     
            $sql = "INSERT INTO gebruikers (gebruikersnaam, wachtwoord) VALUES ('$username', '$password')";


            if ($conn->query($sql) === TRUE) {
                echo "Gebruiker toegevoegd";
            } else {
                throw new Exception("Queryfout: " . $conn->error);
            }

         
            $conn->close();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    } else {
        echo "Vul beide velden in";
    }
}
?>

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