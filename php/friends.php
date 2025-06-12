<?php

require_once 'db.php';
require_once '../partials/header.php';

?>


<?php
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
        echo "New record created succesfully";
      }
      else
      {
        echo "Error" . $sql . "<br>" . $conn->error;
      }
    }
    catch (Exception $e)
    {
      echo $e->getMessage();
    }
  }
}


?>

<body>
  <form action="" method="post">
    <input type="text" name="naam">
    <input type="submit" name="submit">
  </form>

</body>

</html>

<?php require_once '../partials/footer.php'; ?>