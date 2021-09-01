<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Star Citizen control panel</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>

          <?php } else { ?>

          <?php } ?>
          <h3>Knoppen paneel voor het spel Star Citizen</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
          <?php if ($_SESSION['lang'] == "nl") { ?>

          <?php } else { ?>

          <?php } ?>
            <p>
              Het spel Star Citizen is een van mijn favoriete spellen, het heeft echter 1 probleem. Je hebt alle knoppen op je toetsen bord x3 nodig. 
              Ik heb dus besloten om een knoppendoos te maken die te gebruiken is met dit spel.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Ik heb in Photoshop een design gemaakt van alle knoppen en hun plaats na een lijst gemaakt te hebben welke acties van het spel ik allemaal een knop van wil hebben.<br>
              Hierna heb ik in Sketchup het ontwerp van de behuizing gemaakt. De voorkant heb ik vervolgens laten CNC snijden en laten bedrukken met de decals voor alle knoppen.<br>
              De knoppen heb ik allemaal via Aliexpress besteld samen met de Mach3 USB Hid interface om de knoppen aan de computer te koppelen. Dit bord registreert zichtzelf simpel als 2 joysticks met elk 32 knoppen, 8 analoge ingangen.
              <br>
              <span class="font-weight-bold">Community</span><br>
              Ik heb dit project ook gedeeld met de Star Citizen community gedeeld en hier is hij zeer goed ontvangen. 
              Zo heb ik een spotlight gekregen van de Star Citizen developers en heb ik al verschillende vragen gekregen of dit product in productie komt.<br>
              Ik heb dit project <a href="https://robertsspaceindustries.com/community/citizen-spotlight/7105-Star-Citizen-Custom-Control-Box" rel="noopener noreferrer" target="_blank" class="text-dark font-weight-bolder">hier</a> gedocumenteerd.<br>
              Ik ben in <a href="https://youtu.be/Q52nm5Sn1sk?list=WL&t=494" rel="noopener noreferrer" target="_blank" class="text-dark font-weight-bolder">deze video</a> genoemd door de developers van Star Citizen.
            </p>
            <h3>Features</h3>
            <p>
              3D geprinte behuizing met CNC gesneden top plaat<br>
              59 knoppen<br>
              2 joysticks<br>
              Werkt met alle spellen
            </p>
          </div>
        </div>

        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Star Citizen control panel"
                src="https://www.youtube.com/embed/goL1Mtn7Jk4" 
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
            <li data-target="#carouselIndicators" data-slide-to="4"></li>
            <li data-target="#carouselIndicators" data-slide-to="5"></li>
            <li data-target="#carouselIndicators" data-slide-to="6"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/hardware/control_panel/Star_Citizen_Control_Panel_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/hardware/control_panel/Star_Citizen_Control_Panel_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/hardware/control_panel/Star_Citizen_Control_Panel_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/hardware/control_panel/Star_Citizen_Control_Panel_4.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/hardware/control_panel/Star_Citizen_Control_Panel_5.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/hardware/control_panel/Star_Citizen_Control_Panel_6.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/hardware/control_panel/Star_Citizen_Control_Panel_7.jpg" class="d-block w-100">
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
              PROJECT DUUR<br>
              PROGRAMMAS<br>
              PLATFORM
            </p>
          </div>
          <div class="col">
            <p class="text-left text-light">
              Hobby<br>
              40 Uur<br>
              Google Sketchup | Photoshop<br>
              PC
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