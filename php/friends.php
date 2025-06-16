<?php
require_once 'db.php';
require_once '../partials/header.php';

if (isset($_POST['submit']))
{
  if (!empty($_POST["naam"]))
  {
    $naam = htmlspecialchars($_POST['naam']);
    try
    {
      $sql = "INSERT INTO vrienden (naam) VALUES ('$naam')";
      $result = $conn->query($sql);
      if ($result === TRUE)
      {
        echo "<p>Vriend toegevoegd: $naam</p>";
      }
      else
      {
        echo "<p>Er is iets misgegaan: " . $conn->error . "</p>";
      }
    }
    catch (Exception $e)
    {
      echo "<p>Foutmelding: " . $e->getMessage() . "</p>";
    }
  }
  else
  {
    echo "<p>Voer een naam in.</p>";
  }
}
?>

<body>
  <h1>Voeg een vriend toe</h1>
  <form id="friendForm" action="" method="post">
    <label for="naam">Naam:</label><br>
    <input type="text" id="naam" name="naam"><br><br>
    <input type="submit" name="submit" value="Toevoegen">
  </form>
  <form id="bevestigBox">
    <p>Weet je zeker dat je wilt toevoegen?</p>
    <button type="button" id="bevestigJa">Ja</button>
    <button type="button" id="bevestigNee">Nee</button>
  </form>

</body>


</html>

<?php require_once '../partials/footer.php'; ?>