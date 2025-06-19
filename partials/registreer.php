<?php

require_once 'db.php';
require_once '../partials/header.php';

?>

<?php
if (isset($_POST['submit']))
{
    if (!empty($_POST['gebruikersnaam']) && !empty($_POST['wachtwoord']))
    {

        try
        {
            $conn = new mysqli("localhost", "root", "", "pixelplayground");
        }
        catch (Exception $e)
        {
            $error = "niet goed";
            die($error);
        }
        $user = $_POST['gebruikersnaam'];
        $pass = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO gebruikers (gebruikersnaam, wachtwoord) VALUES ('$user', '$pass')";

        try
        {
            $conn->query($sql);
            $conn->close();
            echo "Gebruiker toegevoegd";
        }
        catch (Exception $e)
        {
            $error = "niet goed";
            die($error);
        }
    }
    else
    {
        echo "Vul beide velden in";
    }
}
?>