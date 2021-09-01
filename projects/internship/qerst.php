<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Qerst game</h1>
          <h3>IOT water fontein spelletje</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
            <p>
              Tijdens het kerstdiner van mijn stageplek Q42 wilde ik een spelletje maken dat door de gasten gespeeld kon worden.<br>
              Dit project diende als korte afsluiter voor mijn stagetijd.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Ik wilde een spelletje maken waarbij gasten voor verschillende teams konden spelen en voor hun team punten moesten scoren. 
              Deze punten konden gescoord worden door berichtjes te sturen, het aantal karakters in je bericht was het aantal punten.<br>
              Wanneer een team genoeg punten had gescoord zal een waterfontijn een korte show geven die uniek is voor dat team.<br>
              <br>
              De website communiceert met een ESP32 via websockets. 
              Wanneer een team heeft gewonnen ontvangt de ESP32 hier bericht over en stuurt deze een Arduino aan die vervolgens een lichtshow en de 3D geprinte waterpomp aanstuurt.
            </p>
          </div>
        </div>
        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Qerst diner game"
                src="https://www.youtube.com/embed/9Jba2yqWx-Q" 
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
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/internship/qerst_game/qerst_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/internship/qerst_game/qerst_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/internship/qerst_game/qerst_3.jpg" class="d-block w-100">
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
              OPDRACHTGEVER<br>
              PROGRAMMEER TAAL<br>
              PROJECT DUUR<br>
              PROGRAMMAS<br>
              PLATFORM
            </p>
          </div>
          <div class="col">
            <p class="text-left text-light">
              Q42<br>
              HTML | CSS | Javascript | C/C++<br>
              1 week<br>
              -<br>
              Arduino | ESP32
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