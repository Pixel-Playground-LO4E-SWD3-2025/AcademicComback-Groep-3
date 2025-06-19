<?php

require_once '../partials/home.php';

?>

<section class="intro-text">
    <h1>Welkom <?php echo $user ?></h1>

    <h2> Bij 00 games
    </h2>
    <p>
        Dit is een website om spelletjes te spelen met vrienden.

        Je kunt ook met je vrienden toernooien maken! Nodig er een paar uit!

        Laat zien wat je kan bij de verschillende games, word jij de uiteindelijke winaar?
    </p>
</section>

<section class="slideshow">

    <main class="carousel">
        <button class="arrow">&#8592;</button>

        <figure class="image-box">
            <img class="slide" src="../img/memory.png" alt="Slide 1">
            <img class="slide" src="../img/Snake.png" alt="Slide 2">
            <img class="slide" src="../img/flappy.jpg" alt="Slide 3">
            <figcaption>
                <nav class="dots">
                    <button></button>
                    <button></button>
                    <button></button>

                </nav>

                <p>
                    Bekijk hier Onze games!
                </p>
            </figcaption>
        </figure>

        <button class="arrow">&#8594;</button>
    </main>

    <?php require_once '../partials/footer.php'; ?>