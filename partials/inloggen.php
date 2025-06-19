<?php

require_once 'db.php';

require_once '../partials/header.php';
?>
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