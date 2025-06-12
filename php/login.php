<?php

require_once 'db.php';

require_once '../partials/header.php'; ?>
<?php

if (isset($_POST['submit']))
{
  try
  {
    $user = $_POST['gebruikersnaam'];
    $pass = $_POST['wachtwoord'];
    $sql = "SELECT * FROM gebruikers WHERE gebruikersnaam = '$user'";
    $result = $conn->query($sql);


    if ($result->num_rows == 1)
    {
      $row = $result->fetch_object();
      $hashUitDatabase = $row->wachtwoord;
      if (password_verify($pass, $hashUitDatabase))
      {


        $_SESSION['username'] = $username;



        $_SESSION['isLoggedIn'] = true;
        $_SESSION['username'] = $user;

        header('Location: index.php');
      }
    }
    else
    {
      echo "logins gegevens niet juist";
    }
  }
  catch (Exception $e)
  {
    echo $e->getMessage();
  }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <main>
    <section class="login-page">
      <article class="login-box">
        <form method="post">
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

</body>

</html>