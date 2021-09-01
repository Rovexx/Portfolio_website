<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Interactive Installation Darkpark</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>Interactieve installatie op het Darkpark in Rotterdam</h3>
          <?php } else { ?>
            <h3>Interactive installation for the Darkpark in Rotterdam</h3>
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
              Vanuit mijn opleiding had ik en mijn team van 3 andere personen de opdracht gekregen om een interactieve isntallatie te maken voor de locatie van het Darkpark in Rotterdam.
              Ik heb toen met het team de locatie onderzocht door terplekke rond te lopen en deskresearch te doen naar de historie van de locatie.
              Met deze informatie hebben wij een plan kunnen vormen voor een interactieve installatie.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Het concept was dat er op de locatie een kleine trein kwam waarin kinderen een rondrit konden maken en tijdens de rit een watergevecht konden houden tegen konijn doelen die op het park geplaatst worden.
              Dit concept is toepasbaar op deze locatie omdat het park vroegen een rangeerterrein was voor treinen en omdat er tegenwoordig een konijnen plaag is op die locatie.<br>
              <br>
              <span class="font-weight-bold">Mijn taak</span><br>
              Ik heb een maquette gemaakt van het park waarop een schaalmodel van het spel staat. Ik heb vervolgens het spel geprogrammerd voor een Arduino met internetconnectie.
              De Arduino neemt de scoretelling op en stuurt de data en de locatie van de trein door naar een webinterface waarop spelers het spel kunnen volgen en hun naam kunnen ingeven voor het highscore systeem.<br>
            </p>
            <h3>Leerdoelen</h3>
            <p>
              Met dit project heb ik geleerd om een Arduino met het internet te verbinden en om data naar een website te sturen.
              <br>
              Ik heb ook geleerd om met AJAX de data op de website te updaten zonder de pagina te hoeven herladen.
            </p>
          <?php } else { ?>
            <p>
              From my education, I and my team of 3 other people had been commissioned to make an interactive installation for the location of the Darkpark in Rotterdam.
              I then investigated the location with the team by walking around the site and doing desk research into the history of the location.
              With this information we were able to form a plan for an interactive installation.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              The concept was that a small train would be built at the location in which children could take a tour and during the ride could have a water fight against rabbit targets that are placed on the park.
              This concept is applicable to this location because the park used to be a shunting yard for trains and because there is now a rabbit infestation at that location.<br>
              <br>
              <span class="font-weight-bold">My task</span><br>
              I made a model of the park with a scale model of the game. I then programmed the game for an Arduino with internet connection.
              The Arduino records the scoring and transmits the train's data and location to a web interface where players can track the game and enter their name for the highscore system.<br>
            </p>
            <h3>Learning objectives</h3>
            <p>
              With this project I learned to connect an Arduino to the internet and to send data to a website.
              <br>
              I also learned to update the data on the website with AJAX without having to reload the page.
            </p>
          <?php } ?>
          </div>
        </div>
        <!-- Links -->
        <div class="row justify-content-md-center text-light">
          <p>
            <?php if ($_SESSION['lang'] == "nl") { ?>
            De code voor dit project is te vinden op GitHub
          <?php } else { ?>
            The code for this project can be found on my GitHub
          <?php } ?>
            <a href="https://github.com/Rovexx/Dakpark" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_github.svg">Dakpark</a>
          </p>
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
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/school/dakpark/header.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/dakpark/darkpark_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/dakpark/darkpark_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/dakpark/darkpark_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/dakpark/darkpark_4.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/dakpark/darkpark_5.jpg" class="d-block w-100">
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
              HTML | CSS | JavaScript | PHP | SQL | C/C++<br>
              1 <?= $lang['quarter']; ?><br>
              -<br>
              Website | Arduino
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