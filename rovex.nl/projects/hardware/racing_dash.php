<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Racing dashboard</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>Hardware display voor in-game racing informatie</h3>
          <?php } else { ?>
            <h3>Hardware display for in-game racing information</h3>
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
              Ik hou van racing games. En toen ik een keer een video zag van een dashboard die reageerde op informatie uit een game wist ik dat ik dit ook wilde bouwen.<br>
              Het programma achter dit princiepe heet SimHub. Dit programma luistert naar de informatie die de game in het RAM geheugen van de computer zet en kan deze informatie doorsturen naar een Arduino.
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Ik heb al 2 versies van dit project gemaakt. Allebei hebben ze TM1637 7 segment modules, WS2812B led bars en een MAX7219 8x8 led matrix. 
              Mijn tweede versie heeft ook een 3.2 inch Nextion touchscreen display.<br>
              De hardware zit aangesloten op een Arduino die via het programma SimHub data krijgt van de game om weer te geven.
              Welke waardes er worden weer gegeven is gemakkelijk in te stellen via dit programma.
              <br>
              <span class="font-weight-bold">het proces</span><br>
              Ik ben begonnen met het ontwerpen van de behuizing in Fusion 360. Deze behuizing heb ik vervolgens 3D geprint en gewrapped in carbon fiber vinyl voor een stoere uitstraling.<br>
              De hardware was gemakkelijk aan te sluiten maar voor het touchscreen moest ik nog een UI maken in Photoshop.<br>
              Het eindresultaat is een dashboard waarop ik tijdens racegames mijn snelheid, rondetijden, bandtemperatuur etc kan zien. 
              De versellingsindicator samen met de RPM balk van ledjes maken het rijden nog realistischer.<br>
              Wanneer ik niet in een racegame zit zijn de temperaturen van mijn computer te zien samen met CPU, GPU en RAM gebruik en Frames per seconde in game.
            </p>
            <h3>Features</h3>
            <p>
              8 4x7 segment modules<br>
              16 Adressable RGB leds<br>
              8x8 Led matrix<br>
              3.2 inch Touchscreen
            </p>
          <?php } else { ?>
            <p>
              I like racing games. And once I saw a video of a dashboard responding to information from a game, I knew I wanted to build this too.<br>
              The program behind this principle is called SimHub. This program listens to the information that the game puts in the RAM of the computer and can send this information to an Arduino.
              <br>
              <span class="font-weight-bold">Concept</span><br>
              I have already made 2 versions of this project. Both have TM1637 7 segment modules, WS2812B led bars and a MAX7219 8x8 led matrix.
              My second version also has a 3.2 inch Nextion touchscreen display.<br>
              The hardware is connected to an Arduino that receives data from the game via the SimHub program to display.
              Which values ​​are displayed can easily be set via this program.
              <br>
              <span class="font-weight-bold">the process</span><br>
              I started designing the housing in Fusion 360. I then 3D printed this housing and wrapped it in carbon fiber vinyl for a tough look.<br>
              The hardware was easy to connect but for the touchscreen I still had to make a UI in Photoshop.<br>
              The end result is a dashboard where I can see my speed, lap times, tire temperature, etc. during racing games.
              The refresh indicator together with the RPM bar of LEDs make driving even more realistic.<br>
              When I'm not in a racing game, my computer's temperatures can be seen along with CPU, GPU and RAM usage and Frames per second in game.
            </p>
            <h3>Features</h3>
            <p>
              8 4x7 segment modules<br>
              16 Addressable RGB LEDs<br>
              8x8 Led Matrix<br>
              3.2 inch Touch Screen
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
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/rovex.nl/content/projecten/hardware/racing_dash/Racing_dash_V1_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/hardware/racing_dash/Racing_dash_V1_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/hardware/racing_dash/Racing_dash_V1_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/hardware/racing_dash/Racing_dash_V2_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/hardware/racing_dash/Racing_dash_V2_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/hardware/racing_dash/Racing_dash_V2_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/hardware/racing_dash/Racing_dash_V2_4.jpg" class="d-block w-100">
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
              Hobby<br>
              C/C++<br>
              20 <?= $lang['hours']; ?><br>
              Fusion 360 | Photoshop | Nextion editor | SimHub<br>
              SimHub
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