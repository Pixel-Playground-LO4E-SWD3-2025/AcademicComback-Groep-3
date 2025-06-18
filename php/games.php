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
              <li><a href="https://www.youtube.com/watch?v=YG3EhWlBaoI">Memory </a> </li>
          </div>
          <div class="image-box">
              <img src="../img/Snake.png" alt="Game afbeelding 2">
              <p>Speel snake hier!</p>
              <li><a href="snake.php">Snake</a></li>
          </div>
          <div class="image-box">

              <img src="../img/flappy.jpg" alt="Game afbeelding 3">
              <p>flappybird hier!</p>
              <li><a href="flappy.php">Flappy</a></li>
          </div>
          <div class="image-box">

              <img src="../img/flappy.jpg" alt="Game afbeelding 3">
              <p>speel Connect 4 hier!</p>
              <li><a href="bke.php">connect 4</a></li>
          </div>
      </section>
  </main>
  <?php require_once '../partials/footer.php'; ?>