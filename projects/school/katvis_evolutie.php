<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Katvis Evolutie</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>Leer over evolutie theorie doormiddel van een spelletje</h3>
          <?php } else { ?>
            <h3>Learn about evolution theory through a game</h3>
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
          <?php } else { ?>
            <p>
              School commissioned me and my team of 3 people to make a browser game.
              This game had a number of requirements that were determined at random.
              Our game had to be educational for the target group of primary school children aged 8 to 10 years.
              The subject of the game had to be evolution and we had to use the scarcity learning method.
              Then an X-factor has to be processed, this one was ins case: cats.<br>
              <br>
              <span class="font-weight-bold">concept</span><br>
              With my team I asked children at a primary school in Rotterdam a number of questions in order to come up with a concept for a game.
              I researched platforms to make the game in and that's how I came up with Phaser.<br>
              The concept we came up with was to show the evolution of a fish. We then opted for a catfish to integrate the X factor in a fun way.<br>
              In the game you have to eat other fish to evolve yourself.
              You can evolve yourself in different areas and with each evolution you learn about what it does and what effect it has.
              At the end of the game you see the fish go on land and turn into a cat. This is sort of a comparison of the organisms that went out of the ocean onto land.
              When you have completed the game you unlock a bonus level where the fish swims in space. This was our easter egg.
              <br>
              <span class="font-weight-bold">My task</span><br>
              I've been researching browser game frameworks. For example, I made a demo in Pixi.js and Phaser.js.<br>
              After making the choice to use Phaser, I kept myself busy with the game logic and creating all assets.
              I made different backgrounds for the game with Photoshop.<br>
              For the game logic I wrote code to be able to evolve the fish,
              collect points and make all external influences on the fish such as lives, temperature effects, depth effects etc.<br>
              I also kept myself busy with the user interface and the HUD.
            </p>
            <h3>Learning objectives</h3>
            <p>
              Learn to make browser games with a framework.<br>
              Create game assets with Photoshop<br>
            </p>
          <?php } ?>
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
              School<br>
              JavaScript<br>
              1 <?= $lang['quarter']; ?><br>
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