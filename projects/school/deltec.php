<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Deltec telepresence robot</h1>
          <h3>Telepresence robot voor langdurig zieke studenten</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
            <p>
              Vanuit het Honours programma van mijn opleiding kwam de opdracht om een telepresence robot te maken voor studenten die langdurig ziek thuis zitten. 
              De opdracht gever voor dit project was Creating 010. Er was een bestaande robot die gebruikt werd binnen de hogeschool voor deze situatie, de AV1 robot, maar deze was zeer prijzig.
              Ik heb dit project gevolgd voor 2 kwartalen met 2 verschillende teams.
              Het doel van de telepresence robot was om de robot in de klas neer te zetten zodat de student die ziek thuis zit via de robot aanwezig kan zijn in de klas.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Ik heb met mijn team de Deltec robot bedacht. Dit is een volledig modulair concept voor een telepresence robot die duurzaam is door de gehele behuizing van bioafbreekbaar PLA materiaal te maken met behulp van 3D printers.
              De robot krijgt verschillende modules, zoals ogen en wielen, die de gebruiker kan vervangen om de robot zo samen te stellen voor zijn gebruikscenario en budget.
              Alle onderdelen die gebruikt worden kunnen ook door de gebruiker gekocht worden en zelf vervangen worden. Dit princiepe heb ik bedacht om zo de "Right to repair" beweging te ondersteunen.<br>
              <br>
              <span class="font-weight-bold">Mijn taak</span><br>
              Ik heb het design van de robot gemaakt in Autodesk Fusion 360 en het model ook 3D geprint.
              Ik heb ook alle hardware uitgezocht die nodig was en het in de robot gemonteerd.
              Ook heb ik de code geschreven die op de robot draait om alle onderdelen aan te sturen.<br>
            </p>
            <h3>Features</h3>
            <p>
              De robot heeft een netwerk verbinding voor de ingebouwde tweewegs audio- en video communicatie en voor terugkoppeling van acties naar de gebruikers interface.<br>
              De robot is te besturen via de gebruikers interface doormiddel van knoppen die alle onderdelen aansturen.<br>
              Zo kan de gebruiker bijvoorbeeld verschillende animaties laten zien op de ogen, de robot laten rijden of de camera op de robot bewegen.
            </p>
          </div>
        </div>
        <!-- Links -->
        <div class="row justify-content-md-center text-light">
          <p>
            De code voor dit project is te vinden op GitHub
            <a href="https://github.com/Rovexx/Deltec_robot" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_github.svg">Deltec</a>
          </p>
        </div>
        <div class="row">
          <!-- Eyes images -->
          <div class="col">
            <h3 class="text-center">Oog modules</h3>
            <div id="carouselIndicators_1" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselIndicators_1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators_1" data-slide-to="1"></li>
                <li data-target="#carouselIndicators_1" data-slide-to="2"></li>
                <li data-target="#carouselIndicators_1" data-slide-to="3"></li>
                <li data-target="#carouselIndicators_1" data-slide-to="4"></li>
                <li data-target="#carouselIndicators_1" data-slide-to="5"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/content/projecten/school/deltec/Deltec_ogen_1_transparant.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="/content/projecten/school/deltec/Deltec_ogen_2_transparant.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="/content/projecten/school/deltec/Deltec_ogen_3_transparant.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="/content/projecten/school/deltec/Deltec_wielen_1_transparant.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="/content/projecten/school/deltec/Deltec_wielen_2_transparant.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="/content/projecten/school/deltec/Deltec_wielen_3_transparant.png" class="d-block w-100">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselIndicators_1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselIndicators_1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- Body images -->
          <div class="col">
            <h3 class="text-center">Modules</h3>
            <div id="carouselIndicators_2" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselIndicators_2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators_2" data-slide-to="1"></li>
                <li data-target="#carouselIndicators_2" data-slide-to="2"></li>
                <li data-target="#carouselIndicators_2" data-slide-to="3"></li>
                <li data-target="#carouselIndicators_2" data-slide-to="4"></li>
                <li data-target="#carouselIndicators_2" data-slide-to="5"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/content/projecten/school/deltec/modules/Deltec_ogen_1_transparant.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="/content/projecten/school/deltec/modules/Deltec_ogen_2_transparant.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="/content/projecten/school/deltec/modules/Deltec_ogen_3_transparant.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="/content/projecten/school/deltec/modules/Deltec_wielen_1_transparant.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="/content/projecten/school/deltec/modules/Deltec_wielen_2_transparant.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="/content/projecten/school/deltec/modules/Deltec_wielen_3_transparant.png" class="d-block w-100">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselIndicators_2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselIndicators_2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
        <!-- Images -->
        <h3 class="text-center my-5">De Deltec robot</h3>
        <div id="carouselIndicators_3" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselIndicators_3" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators_3" data-slide-to="1"></li>
            <li data-target="#carouselIndicators_3" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/school/deltec/header.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/deltec/Deltec_v2_hardware.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/deltec/Deltec_hardware_transparant.png" class="d-block w-100">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselIndicators_3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselIndicators_3" role="button" data-slide="next">
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
              School | Creating 010<br>
              C/C++<br>
              1 Semester<br>
              Autodesk Fusion 360<br>
              ESP32
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