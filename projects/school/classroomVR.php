<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    
    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Classroom<span class="txt-blue">VR</span></h1>
          <h3>VR applicatie voor digitaal lesgeven</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
            <p>
              ClassroomVR is een virtual reality applicatie voor Google Cardboard headsets.<br>
              Met de applicatie kun je als docent lesgeven aan je studenten in een virtuele klas.<br>
              <br>
              Door een klas te volgen in VR hoeven docenten en studenten niet meer te reizen naar een schoolgebouw en kan je lessen volgen vanuit het comfort van je eigen huis.<br>
              <br>
              Dit project was mijn eerste kennismaking met Unity en Blender voor de 3D modellen.<br>
              Ik ben ook gelijk in het diepe gesprongen door een VR applicatie te maken met multiplayer en audio communicatie.
            </p>
            <h3>Features</h3>
            <p>
              Met ClassroomVR heb je de mogelijkheid om de virtuele omgeving compleet aan te passen zodat deze perfect bij de les past.<br>
              Geef les in een normaal lokaal, bezichtig een gebouw om over de achitectuur te leren of bezoek het ISS!<br>
              <br>
              De interactie werkt doormiddel van een gaze interactie.
              Staar naar een object en na een bepaalde tijd activeer je de interactie, dit kan zijn teleporteren naar een stoel of een knop indrukken.<br>
              <br>
              De demo die ik heb gemaakt heeft multiplayer met tweewegs audio communicatie.
              De docent kan ook de leerlingen muten om zo de rust in de virtuele klas te behouden.
            </p>
          </div>
        </div>
        <!-- Links -->
        <div class="row justify-content-md-center text-light">
          <p>
            De code voor dit project is te vinden op GitHub
            <a href="https://github.com/Rovexx/ClassroomVR" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_github.svg">Classroom VR</a>
          </p>
        </div>
        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="ClassroomVR Demo"
                src="https://www.youtube.com/embed/fKmRXzOF02s" 
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
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
            <li data-target="#carouselIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/school/classroomVR/1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/classroomVR/2.gif" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/classroomVR/3.gif" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/classroomVR/4.gif" class="d-block w-100">
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
              School<br>
              C#<br>
              1 semester<br>
              Unity | Blender<br>
              Google Cardboard VR
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