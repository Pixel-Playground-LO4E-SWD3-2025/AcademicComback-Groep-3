  <?php require_once '../partials/header.php'; 
  
  ?>

  <?php if (isset($_POST['submit'])) {
    if (!empty($_POST['gebruikersnaam']) && !empty($_POST['wachtwoord'])) {

        try {
            $conn = new mysqli("localhost", "root", "", "pixelplayground");

        }catch (Exception $e){
          $error = "niet goed";
          die($error);
        }
            $user = $_POST['gebruikersnaam'];
            $pass = password_hash($_POST['wachtwoord'],  PASSWORD_DEFAULT);
           
            $sql = "UPDATE gebruikers (gebruikersnaam, wachtwoord) VALUES ('$user', '$pass')";
?>

  <body>
  <main class="account-page">
    <h1>Mijn Account</h1>

    <section class="account-section">
      <h2>Gebruikersgegevens</h2>
      <article>
        <p><strong>Naam:</strong></p>
        <p><strong>Email:</strong></p>
        <p><strong>Gebruikersnaam:</strong> </p>
      </article>
    </section>

  <form action="" id="wachtwoord">wachtwoord
  <input type="text"></form>
  <form action="" id="uname">
    Username
    <input type="text">

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