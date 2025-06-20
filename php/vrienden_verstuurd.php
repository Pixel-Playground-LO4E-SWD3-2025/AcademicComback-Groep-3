<?php

require_once '../partials/vriendenlijst.php';

$query = "SELECT naam FROM vrienden";
$result = mysqli_query($conn, $query);

?>

<section class="friends-page">
    <section class="friends-column">
        <h2>Vriendenlijst</h2>
        <?php
        echo "<h2> Bekijk je vrienden hier:</h2>";
        if (mysqli_num_rows($result) > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                echo '<article class="friend-item">' . htmlspecialchars($row['naam']) . '</article>';
            }
        }
        else
        {
            echo '<p>Er zijn nog geen vrienden toegevoegd.</p>';
        }
        ?>
    </section>
</section>

<?php

require_once '../partials/footer.php';
?>