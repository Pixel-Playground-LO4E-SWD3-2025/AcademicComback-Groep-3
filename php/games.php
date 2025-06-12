  <?php

  require_once '../partials/header.php';
  require_once 'db.php';


  ?>

  <main>
    <section class="intro-text">
      <p>
        Speel een van onze geweldige spelen!
      </p>
    </section>

    <section class="carousel">
      <div class="image-box">
        <img src="../img/memory.png" alt="Memory">
        <p>Speel memory hier!</p>
      </div>
      <div class="image-box">
        <img src="../img/Snake.png" alt="Game afbeelding 2">
        <p>Speel snake hier!</p>
        <li><a href="snake.html">Snake</a></li>
      </div>
      <div class="image-box">
        <li><a href="flappy.html">Flappy</a></li>
        <img src="../img/flappy.jpg" alt="Game afbeelding 3">
        <p>flappybird hier!</p>
      </div>
    </section>
  </main>
  <?php require_once '../partials/footer.php'; ?>