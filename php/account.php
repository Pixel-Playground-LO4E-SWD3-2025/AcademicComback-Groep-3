<?php

require_once '../partials/acc.php';

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Mijn Account</title>
    <link rel="stylesheet" href="../CSS/styles.css">
</head>

<body>
    <main class="account-page">
        <h1>Mijn Account</h1>

        <section class="account-section">
            <h2>Gebruikersgegevens</h2>
            <article>
                <p><strong>Naam:</strong> <?php echo htmlspecialchars($currentName); ?></p>
            </article>
        </section>

        <form action="" id="wachtwoord" method="post">
            <label for="wachtwoord">Nieuw wachtwoord:</label>
            <input type="text" name="wachtwoord" required>
            <input type="submit" name="change-pass" value="Wachtwoord wijzigen">
        </form>

        <form action="" id="uname" method="post">
            <label for="gebruikersnaam">Nieuwe gebruikersnaam:</label>
            <input type="text" name="gebruikersnaam" value="<?php echo htmlspecialchars($currentName); ?>" required>
            <input type="submit" name="submit" value="Gebruikersnaam wijzigen">
        </form>

        <section class="account-section">
            <h2>Acties</h2>
            <article>
                <form method="post">
                    <button type="submit" name="delete_account"
                        onclick="return confirm('Weet je zeker dat je je account wilt verwijderen?');">
                        Verwijder mijn account
                    </button>
                </form>
            </article>
        </section>
    </main>
</body>

</html>

<?php require_once '../partials/footer.php'; ?>