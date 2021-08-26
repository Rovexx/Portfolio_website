<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Erasmus campus project</h1>
          <h3>Volledige Erasmus campus nagemaakt in Minecraft</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
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
              <img src="/content/projecten/misc/eur_campus/erasmus_campus_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/eur_campus/erasmus_campus_2.jpg" class="d-block w-100">
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
              ErasmusX<br>
              -<br>
              4 maanden<br>
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