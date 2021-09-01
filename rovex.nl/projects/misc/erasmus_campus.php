<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Erasmus campus project</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>Volledige Erasmus campus nagemaakt op schaal in Minecraft</h3>
          <?php } else { ?>
            <h3>Entire Erasmus campus recreated to scale in Minecraft</h3>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <p>
              De Erasmus Universiteit in Rotterdam wilde een recreactie van het Erasmus campus in Minecraft op de schaal 1:1. 
              Dit heb ik samen met 2 vrienden en de organisatie Shapescape gebouwd.<br>
              Ik heb een server opgezet om het project in te bouwen en om het mogelijk te maken dat een groot aantal spelers de map kan bezoeken.<br>
              <br>
              <span class="font-weight-bold">Bouwen</span><br>
              Ik heb eerst alle omtrekken van de gebouwen op het kampus gemaakt zodat ik wist waar alle gebouwen en wegen lagen.
              Ik heb vervolgens met 2 vrienden een aantal gebouwen gemaakt en ik heb ook de wegen aangelegd.<br>
              <br>
              <span class="font-weight-bold">Timelapse</span><br>
              Ik heb van het hele project een timelapse gemaakt zodat je mooi de voortgang van het hele process kan zien.
            </p>
          <?php } else { ?>
            <p>
               The Erasmus University in Rotterdam wanted a recreation of the Erasmus campus in Minecraft on a scale of 1:1.
               I built this together with 2 friends and the organization Shapescape.<br>
               I've set up a server to build the project into and to allow a large number of players to visit the map.<br>
               <br>
               <span class="font-weight-bold">Build</span><br>
               I first made all the outlines of the buildings on the campus so that I knew where all the buildings and roads were.
               I then made some buildings with 2 friends and I also built the roads.<br>
               <br>
               <span class="font-weight-bold">Timelapse</span><br>
               I made a timelapse of the entire project so that you can see the progress of the entire process.
             </p>
          <?php } ?>
          </div>
        </div>

        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="EUR campus Timelapse"
                src="https://www.youtube.com/embed/Fxl9eiHAyWM" 
                frameborder="0" 
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
        <br>
        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="EUR campus flytrough"
                src="https://www.youtube.com/embed/gI_t7ynM_ls" 
                frameborder="0" 
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
        <br>
        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="EUR campus flyover ShapeScape"
                src="https://www.youtube.com/embed/5skbUNfg58o" 
                frameborder="0" 
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
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
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/rovex.nl/content/projecten/misc/eur_campus/erasmus_campus_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/misc/eur_campus/erasmus_campus_2.jpg" class="d-block w-100">
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
              ErasmusX<br>
              -<br>
              4 <?= $lang['months']; ?><br>
              Minecraft | Adobe Premiere<br>
              Minecraft Java Edition
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