<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Katvis Evolutie</h1>
          <h3>Leer over evolutie theorie doormiddel van een spelletje</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
            <p>
              School gaf de opdracht aan mij en mijn team van 3 personen om een browser game te maken. 
              Deze game had een aantal eisen die willekeurig waren bepaald.
              Onze game moest educatief zijn voor de doelgroep basisschoolkinderen van 8 tot 10 jaar.
              Het onderwerp van de game moest evolutie zijn en we moesten de leermethode scarcity gebruiken.
              Vervolgens moet er een X-factor in verwerkt worden, deze was in ins geval: katten.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Met mijn team heb ik kinderen op een basisschool in Rotterdam een aantal vragen gesteld om zo op een concept te komen voor een game.
              Ik heb onderzoek gedaan naar platformen om de game in te maken en zo ben ik op Phaser gekomen.<br>
              Het concept wat wij hadden verzonnen was om de evolutie van een vis te laten zien. We hebben toen voor een katvis gekozen om de X-factor te integreren in een leuke manier.<br>
              In de game moet je andere vissen op eten om jezelf te evolueren. 
              Je kunt op verschillende vlakken jezelf evolueren en bij elke evolutie leer je over wat het doet en wat voor effect dit heeft.
              In het einde van de game zie je dat de vis het land op gaat en veranderd in een kat. Dit is een soort vergelijking van de organismes die uit de oceaan het land op gingen.
              Wanneer je de game hebt uitgespeeld ontgrendel je een bonus level waar de vis in de ruimte zwemt. Dit was onze easter egg.
              <br>
              <span class="font-weight-bold">Mijn taak</span><br>
              Ik heb onderzoek gedaan naar frameworks voor browsergames. Zo heb ik een demo gemaakt in Pixi.js en Phaser.js.<br>
              Na de keuze te hebben gemaakt om Phaser te gebruiken heb ik mijzelf bezig gehouden met de gamelogica en alle assets maken. 
              Ik heb zo met Photoshop verschillende achtergronden gemaakt voor de game.<br>
              Voor de gamelogica heb ik code geschreven om de vis te kunnen evolueren, 
              punten te verzamelen en alle externe invloeden op de vis te maken zoals levens, temperatuur effecten, diepte effecten etc.<br>
              Ik heb mijzelf ook bezig gehouden met de gebruikers interface en de HUD.
            </p>
            <h3>Leerdoelen</h3>
            <p>
              Leer browsergames maken met een framework.<br>
              Game assets maken met Photoshop<br>
            </p>
          </div>
        </div>
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
            <li data-target="#carouselIndicators" data-slide-to="7"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/school/katvis_evolutie/katvis_evolutie_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/katvis_evolutie/katvis_evolutie_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/katvis_evolutie/katvis_evolutie_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/katvis_evolutie/katvis_evolutie_4.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/katvis_evolutie/katvis_evolutie_5.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/katvis_evolutie/katvis_evolutie_6.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/katvis_evolutie/katvis_evolutie_7.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/katvis_evolutie/katvis_evolutie_8.jpg" class="d-block w-100">
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
              JavaScript<br>
              1 kwartaal<br>
              Photoshop<br>
              Phaser
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