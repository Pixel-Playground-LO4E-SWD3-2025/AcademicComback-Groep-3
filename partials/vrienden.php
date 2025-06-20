<?php

require_once '../partials/header.php';
require_once 'db.php';

if (!isset($_SESSION['username']) || !isset($_SESSION['user_id']))
{
    echo "<p>Je moet ingelogd zijn om een verzoek te versturen.</p>";
    exit;
}

if (isset($_POST['submit']))
{
    $naam = mysqli_real_escape_string($conn, trim($_POST['naam']));
    $aanvrager_naam = $_SESSION['username'];

    if ($naam === $aanvrager_naam)
    {
        echo "<p>Je kunt geen verzoek naar jezelf sturen.</p>";
        exit;
    }


    $sql = "SELECT id FROM gebruikers WHERE gebruikersnaam = '$naam'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0)
    {
        echo "<p>Gebruiker bestaat niet.</p>";
        exit;
    }


    $check = "SELECT id FROM vrienden WHERE naam = '$naam'";
    $check_result = mysqli_query($conn, $check);

    if (mysqli_num_rows($check_result) > 0)
    {
        echo "<p>Je hebt al een verzoek gestuurd naar deze gebruiker.</p>";
        exit;
    }


    $insert = "INSERT INTO vrienden (naam) VALUES ('$naam')";
    if (mysqli_query($conn, $insert))
    {
        echo "<p>Vriendschapsverzoek verzonden naar $naam!</p>";
    }
    else
    {
        echo "<p>Fout bij verzenden: " . mysqli_error($conn) . "</p>";
    }
}
