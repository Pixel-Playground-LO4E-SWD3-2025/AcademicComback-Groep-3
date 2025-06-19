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
