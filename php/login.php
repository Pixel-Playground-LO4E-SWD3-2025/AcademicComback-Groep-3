<?php require_once '../partials/header.php'; ?>
<?php

if(isset($_POST['submit'])){
try{ 
  $user = $_POST['gebruikersnaam'];
  $pass = $_POST['wachtwoord'];
  $sql = "SELECT * FROM gebruikers WHERE gebruikersnaam = '$user' AND wachtwoord = '$pass'";
  $result = $conn->query($sql);
  
  if($result->num_rows == 1){
    echo "Login gegevens juist";
session_start();
$_SESSION['isLoggedIn'] = true;
header('Location: beveiligd.php');
  } else{
    echo "logins gegevens niet jusit";
  }
} catch (Exception $e) {
  echo $e->getMessage(); 
}
} ?>
<main>
  <section class="login-page">
    <article class="login-box"> 
      <form  method="post">
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
