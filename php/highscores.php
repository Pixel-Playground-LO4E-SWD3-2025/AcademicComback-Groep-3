<?php require_once '../partials/header.php'; ?>
<main class="highscore-page">
    <?php 
  try{
      $conn = new mysqli("localhost", "root", "", "pixelplayground");
  }catch (Exception $e){
    $error = $e->getMessage();
    echo $error;
  }
  
  $sql = "SELECT * FROM gebruikers";
  try { 
    if($result = $conn->query($sql)){
      while ($row = $result->fetch_row()){
        echo $row[0]." - ".$row[1]."-". "<br>";
      }   
    }
  }catch (Exception $e){
    $error = $e->getMessage();
    echo $error;
  }

  $result->close();
  $conn->close();
   ?>
    <h1>
        Latest highscores!
    </h1>

    <section class="highscore-table">
        <section class="highscore-section">
            <p>Lorem ipsum dolor sit amet et delectus accommodare his</p>
            <p>
                Lorem ipsum dolor sit amet et delectus accommodare his consul copiosae legendos at vix ad putent
                delectus delicata usu. Vidit dissentiet eos cu eum an
            </p>
        </section>

        <section class="highscore-section">
            <p>Lorem ipsum dolor sit amet et delectus accommodare his consul</p>
            <p>Lorem ipsum dolor sit amet et</p>
            <p>Lorem ipsum dolor sit amet et</p>
            <p>Lorem ipsum dolor sit amet et</p>
            <p>Lorem ipsum dolor sit amet et delectus accommodare his</p>
        </section>

        <section class="highscore-section">

        </section>
    </section>
</main>

<?php require_once '../partials/footer.php'; ?>