<?php
require_once 'db.php';

require_once '../partials/header.php';

?>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet" />
<title>Snake Game</title>
<link rel="stylesheet" href="../CSS/snake.css" />
<script src="../js/snake.js" defer></script>
</head>

<body>
  <div>
    <div class="scores">
      <h1 id="score">000</h1>
      <h1 id="highScore">000</h1>
    </div>

    <div class="game-border-1">
      <div class="game-border-2">
        <div class="game-border-3">
          <button id="start-btn">Start Game</button>
          <div id="game-board"></div>
        </div>
      </div>
    </div>
  </div>
  <h1 id="instruction-text">Press spacebar to start the game</h1>
  <img id="logo" src="../img/snake-game-ai-gen.png" alt="snauhke-logo" />
</body>

</html>

<?php require_once '../partials/footer.php'; ?>