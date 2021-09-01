<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Kies Kleurig</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>Spelletje voor kleuters</h3>
          <?php } else { ?>
            <h3>Game for toddlers</h3>
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
              School gaf de opdracht om een spelletje te maken voor kleuters. Dit project heb ik met een team van 8 personen gedaan.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Ons concept was om een spelletje te maken waar kinderen objecten moeten zoeken in het klaslokaal met een kleur dit ons apparaat aangeeft. 
              Het wordt gespeeld in twee teams. het team dat als eerste de juiste kleur vind wint een punt.<br>
              <br>
              <span class="font-weight-bold">Mijn taak</span><br>
              Ik heb de hardware en software op mij genomen. Zo heb ik code geschreven om een kleuren sensor aan te sturen.
              De kleuren sensor neemt waar welke kleur ervoor staat. Indien de kleur hetzelfde is als de kleur die het apparaat aangaf dan wint het team een punt.<br>
            </p>
          <?php } else { ?>
            <p>
              School gave the assignment to make a game for toddlers. I did this project with a team of 8 people.<br>
              <br>
              <span class="font-weight-bold">concept</span><br>
              Our concept was to create a game where children have to find objects in the classroom with a color that indicates our device.
              It is played in two teams. the first team to find the correct color wins a point.<br>
              <br>
              <span class="font-weight-bold">My task</span><br>
              I took on the hardware and software. For example, I wrote code to control a color sensor.
              The color sensor detects which color is in front of it. If the color is the same as the color indicated by the device, the team wins a point.<br>
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
            <a href="https://github.com/Rovexx/CLE1-Sprint-3-kleuter-spel" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_github.svg">Kleuter spel</a>
          </p>
        </div>
        <!-- Images -->
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/rovex.nl/content/projecten/school/kies_kleurig/kies_kleurig_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/school/kies_kleurig/kies_kleurig_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/school/kies_kleurig/header.jpg" class="d-block w-100">
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
              C/C++<br>
              3 <?= $lang['weeks']; ?><br>
              -<br>
              Arduino
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