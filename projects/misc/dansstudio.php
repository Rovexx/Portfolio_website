<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Dansstudio Jolynda website</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>De website van Dansstudio Jolynda</h3>
          <?php } else { ?>
            <h3>De website for Dansstudio Jolynda</h3>
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
              Mijn zus heeft haar eigen dansstudio. Ik heb voor haar de website gemaakt waarop algemene info staat voor haar dansstudio.<br>
              <br>
            </p>
            <h3>Website</h3>
            <a href="https://www.dansstudiojolynda.nl/" rel="noopener noreferrer" target="_blank" style="color: #e5187c;" class="font-weight-bolder">Dansstudio Jolynda</a><br>
            <br>
          <?php } else { ?>
            <p>
               My sister has her own dance studio. I made the website for her that contains general information for her dance studio.<br>
               <br>
             </p>
             <h3>Website</h3>
             <a href="https://www.dansstudiojolynda.nl/" rel="noopener noreferrer" target="_blank" style="color: #e5187c;" class="font-weight-bolder">Dansstudio Jolynda</a><br>
             <br>
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
              <img src="/content/projecten/misc/dansstudio_jolynda/dansstudio_jolynda_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/dansstudio_jolynda/dansstudio_jolynda_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/dansstudio_jolynda/header.jpg" class="d-block w-100">
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
              Dansstudio Jolynda<br>
              HTML | CSS | JavaScript<br>
              1 week<br>
              -<br>
              -
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