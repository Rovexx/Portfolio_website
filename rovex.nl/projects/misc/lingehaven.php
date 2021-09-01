<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Lingehaven Teller</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>Boten teller bij de Lingehaven Gorinchem</h3>
          <?php } else { ?>
            <h3>Boat counter for the Lingehaven in Gorinchem</h3>
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
              De Lingehaven in Gorinchem heeft mij gevraagd om een tellersysteem te maken dat kan bijhouden hoeveel boten er door de sluis komen.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Ik heb met behulp van een Raspberry Pi een systeem gemaakt dat knopinvoer opvangt en dit als telling in een database verwerkt.<br>
              Hierbij draait een webinterface waarom er ook handmatig een telling gedaan kan worden en de data ingezien en geexporteerd kan worden.
            </p>
            <h3>Features</h3>
            <p>
              Telling via knoppen op de sluis<br>
              handmatige telling via webinterface<br>
              Webinterface voor data inzien.<br>
              Tel data exporteren.<br>
              Data backup naar USB.
            </p>
          <?php } else { ?>
            <p>
               The Lingehaven in Gorinchem has asked me to make a counter system that can keep track of how many boats pass through the lock.<br>
               <br>
               <span class="font-weight-bold">Concept</span><br>
               I've created a system using a Raspberry Pi that captures button input and processes it as a count in a database.<br>
               A web interface runs here, which means that a count can also be done manually and the data can be viewed and exported.
             </p>
             <h3>Features</h3>
             <p>
               Counting via buttons on the lock<br>
               manual counting via web interface<br>
               Web interface for viewing data.<br>
               Export count data.<br>
               Data backup to USB.
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
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/rovex.nl/content/projecten/misc/lingehaven/header.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/misc/lingehaven/lingehaven_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/misc/lingehaven/lingehaven_2.jpg" class="d-block w-100">
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
              Lingehaven Gorinchem<br>
              HTML | CSS | JavaScript | PHP | SQL | Python<br>
              60 <?= $lang['hours']; ?><br>
              -<br>
              Raspberry Pi
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