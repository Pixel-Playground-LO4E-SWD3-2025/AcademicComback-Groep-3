<?php
require_once '../partials/header.php';
require_once 'db.php';



if (!isset($_SESSION['username']))
{
    echo "Niet ingelogd.";
    exit;
}


$username = mysqli_real_escape_string($conn, $_SESSION['username']);


$sql = "SELECT * FROM gebruikers WHERE gebruikersnaam = '$username'";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $currentName = $row['gebruikersnaam'];
}
else
{
    echo "Gebruiker niet gevonden.";
    exit;
}


if (isset($_POST['submit']) && isset($_POST['gebruikersnaam']))
{
    $newName = mysqli_real_escape_string($conn, $_POST['gebruikersnaam']);
    $update = "UPDATE gebruikers SET gebruikersnaam = '$newName' WHERE id = $id";
    if ($conn->query($update) === TRUE)
    {
        echo "Gebruikersnaam bijgewerkt!";
        $_SESSION['username'] = $newName;
        $currentName = $newName;
    }
    else
    {
        echo "Fout bij bijwerken van gebruikersnaam: " . $conn->error;
    }
}


if (isset($_POST['change-pass']) && isset($_POST['wachtwoord']))
{
    $newPassword = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);
    $update = "UPDATE gebruikers SET wachtwoord = '$newPassword' WHERE id = $id";
    if ($conn->query($update) === TRUE)
    {
        echo "Wachtwoord bijgewerkt!";
    }
    else
    {
        echo "Fout bij bijwerken van wachtwoord: " . $conn->error;
    }
}


if (isset($_POST['delete_account']) && isset($_SESSION['username']))
{
    $deleteQuery = "DELETE FROM gebruikers WHERE gebruikersnaam = '$username'";
    if ($conn->query($deleteQuery) === TRUE)
    {
        session_destroy();
        header("Location: index.php");
        exit();
    }
    else
    {
        echo "Er is iets misgegaan bij het verwijderen van je account.";
    }
}
