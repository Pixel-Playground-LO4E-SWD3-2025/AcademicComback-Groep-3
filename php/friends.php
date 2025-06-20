<?php

require_once '../partials/vrienden.php'; ?>

<body>
    <main class="friend-page-container">
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
    </main>
</body>

<?php require_once '../partials/footer.php'; ?>