<?php

require_once 'db.php';

require_once '../partials/header.php';

?>



<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Connect Four</title>
    <link rel="stylesheet" href="../CSS/bke.css">
    <script src="../js/bke.js"></script>
</head>

<body>

    <h1>Connect Four</h1>

    <div id="board"></div>

    <h2 id="winner"></h2>

    <div id="highscores">
        <h3>Highscores</h3>
        <p id="scoreRood">Rood: 0</p>
        <p id="scoreGeel">Geel: 0</p>
        <button onclick="resetScores()">Reset scores</button>
    </div>


</body>

</html>



<?php require_once '../partials/footer.php'; ?>