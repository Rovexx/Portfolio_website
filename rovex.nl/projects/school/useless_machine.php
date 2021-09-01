<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Useless machine</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>Een nutteloze machine</h3>
          <?php } else { ?>
            <h3>A useless machine</h3>
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
              Als introductieopdracht voor mijn opleiding moesten we in teams van 4 personen een nutteloze machine maken.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Ons concept was een waterkraan die uitgaat wanneer je water nodig hebt.<br>
              <br>
              <span class="font-weight-bold">Mijn taak</span><br>
              Ik heb de Arduino geprogrammeerd zodat deze een motor aanstuurt om water te laten lopen.<br>
              Er zit ook een ultrasone sensor op die waarneemt wanneer er iets voor de kraan zit en dus de kraan uit moet.<br>
              Ik heb ook een waterpomp ontworpen en 3D geprint.
            </p>
          <?php } else { ?>
            <p>
              As an introductory assignment for my study, we had to make a useless machine in teams of 4 people.<br>
              <br>
              <span class="font-weight-bold">concept</span><br>
              Our concept was a water tap that turns off when you need water.<br>
              <br>
              <span class="font-weight-bold">My task</span><br>
              I programmed the Arduino to drive a motor to run water.<br>
              It also has an ultrasonic sensor that detects when something is in front of the tap and therefore has to be turned off.<br>
              I also designed and 3D printed a water pump.
            </p>
          <?php } ?>
          </div>
        </div>

        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Useless machine"
                src="https://www.youtube.com/embed/LMfIqt5ggVs" 
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
              <img src="/rovex.nl/content/projecten/school/useless_machine/useless_machine_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/school/useless_machine/useless_machine_2.jpg" class="d-block w-100">
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