<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Destiny Ace of Spades</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>3D geprinte model uit het spel Destiny</h3>
          <?php } else { ?>
            <h3>3D printed model from the game Destiny</h3>
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
              Een goede vriend van mij wilde graag een 3D geprinte variant van een wapen uit een videogame hebben.<br>
              Het model was een handpistool met de naam Ace of Spades uit het spel Destiny.<br>
              <br>
            </p>
            <h3>Features</h3>
            <p>
              Volledig 3D geprint<br>
              Bestaand model gebruikt en licht aangepast<br>
              Gaten opgevuld, geschuurd en vervolgens met spray paint kleur gegeven.
            </p>
          <?php } else { ?>
            <p>
              A good friend of mine wanted to have a 3D printed variant of a weapon from a video game.<br>
              The model was a hand gun named Ace of Spades from the game Destiny.<br>
              <br>
            </p>
            <h3>Features</h3>
            <p>
              Fully 3D printed<br>
              Existing model used and slightly modified<br>
              Holes filled, sanded and then colored with spray paint.
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
            <li data-target="#carouselIndicators" data-slide-to="8"></li>
            <li data-target="#carouselIndicators" data-slide-to="9"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/3d_printer/ace_of_spades/ace_of_spades (1).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ace_of_spades/ace_of_spades (2).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ace_of_spades/ace_of_spades (3).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ace_of_spades/ace_of_spades (4).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ace_of_spades/ace_of_spades (5).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ace_of_spades/ace_of_spades (6).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ace_of_spades/ace_of_spades (7).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ace_of_spades/ace_of_spades (8).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ace_of_spades/ace_of_spades (9).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ace_of_spades/ace_of_spades (10).jpg" class="d-block w-100">
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
              <?= $lang['projectDuration']; ?><br>
              <?= $lang['programs']; ?><br>
              PLATFORM
            </p>
          </div>
          <div class="col">
            <p class="text-left text-light">
              <?= $lang['friend']; ?><br>
              40 <?= $lang['hours']; ?><br>
              Ideamaker slicer<br>
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