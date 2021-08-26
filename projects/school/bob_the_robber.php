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
            <p>
              Bob the Robber is een game voor Android telefoons die is ontwikkeld voor mijn Minor Game Design & Development. Ik zat hierbij in een team van 4, waarbij ik de rol van programmeur had.<br>
              Ik heb voor dit project mij bezig gehouden met het opzetten van de GitHub workflow voor Unity, code conventions en het programmeren van gameplay en visuals.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Bob the Robber is een actie-avontuur spel waar je als de dief Bob speelt om waardevolle items te stelen en te ontsnappen uit moeilijke situaties. 
              Bewakers, camera en lazers zullen het je lastig maken om te ontsnappen met de buit.<br>
              <br>
            </p>
          </div>
        </div>
        <!-- Links -->
        <div class="row justify-content-md-center text-light">
          <p>
            Vind de game op de Play store
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
            <p class="font-weight-bolder text-right">
              OPDRACHTGEVER<br>
              PROGRAMMEER TAAL<br>
              PROJECT DUUR<br>
              PROGRAMMAS<br>
              PLATFORM
            </p>
          </div>
          <div class="col">
            <p class="text-left text-light">
              Minor<br>
              C#<br>
              6 weken<br>
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
      <?php include_once '../../includes/footer.html';?>
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