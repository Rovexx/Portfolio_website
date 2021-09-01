<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Bob the Robber</h1>
          <h3>2D strategy mobile game</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <p>
              Bob the Robber is een game voor Android telefoons die is ontwikkeld voor mijn Minor Game Design & Development. Ik zat hierbij in een team van 4, waarbij ik de rol van programmeur had.<br>
              Ik heb voor dit project mij bezig gehouden met het opzetten van de GitHub workflow voor Unity, code conventions en het programmeren van gameplay en visuals.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Bob the Robber is een actie-avontuur spel waar je als de dief Bob speelt om waardevolle items te stelen en te ontsnappen uit moeilijke situaties. 
              Bewakers, camera en lazers zullen het je lastig maken om te ontsnappen met de buit.<br>
              <br>
            </p>
          <?php } else { ?>
            <p>
              Bob the Robber is a game for Android phones that was developed for my Minor Game Design & Development. I was part of a team of 4, where I had the role of programmer.<br>
              For this project I was involved in setting up the GitHub workflow for Unity, code conventions and programming gameplay and visuals.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Bob the Robber is an action adventure game where you play as the thief Bob to steal valuable items and escape from difficult situations.
              Guards, camera and lasers will make it difficult for you to escape with the loot.<br>
              <br>
            </p>
          <?php } ?>
          </div>
        </div>
        <!-- Links -->
        <div class="row justify-content-md-center text-light">
          <p>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            Vind de game op de Play store
          <?php } else { ?>
            Find the game on the Play store
          <?php } ?>
            <a href="https://play.google.com/store/apps/details?id=com.ThumbsUpGames.BobTheRobber&hl=nl&gl=US" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_playstore.svg">Bob the Robber</a>
          </p>
        </div>
        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Bob the Robber trailer"
                src="https://www.youtube.com/embed/rbaffc-j7iI" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Bob the Robber supercut"
                src="https://www.youtube.com/embed/BkZplJhODl0" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
        <br>
        <!-- Images -->
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
            <li data-target="#carouselIndicators" data-slide-to="3"></li>
            <li data-target="#carouselIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/school/bob_the_robber/bob_the_robber_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/bob_the_robber/bob_the_robber_2.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/bob_the_robber/bob_the_robber_3.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/bob_the_robber/bob_the_robber_4.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/bob_the_robber/bob_the_robber_5.jpg" class="d-block w-100">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="row my-4">
          <div class="col">
            <p class="font-weight-bolder text-right text-uppercase">
              <?= $lang['client']; ?><br>
              <?= $lang['programmingLanguage']; ?><br>
              <?= $lang['projectDuration']; ?><br>
              <?= $lang['programs']; ?><br>
              PLATFORM
            </p>
          </div>
          <div class="col">
            <p class="text-left text-light">
              Minor<br>
              C#<br>
              6 <?= $lang['weeks']; ?><br>
              Unity<br>
              Android
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-dark">
      <br>
      <!-- Include footer -->
      <?php include_once '../../includes/footer.php';?>
    </div>
    <!-- Include scripts -->
    <?php include_once '../../includes/scripts.html';?>
  </body>
  <script>
      $(document).ready(function () {
        $('#nav_home').removeClass('active');
        $('#nav_projects').addClass('active');
        $('#nav_contact').removeClass('active');
      });
    </script>
</html>