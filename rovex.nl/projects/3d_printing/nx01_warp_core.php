<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Star Trek Enterprise NX-01 warp core</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>Warp core van de Enterprise NX-01</h3>
          <?php } else { ?>
            <h3>Warp core from the Starship Enterprise NX-01</h3>
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
              Vanuit een keuzevak op de Hogeschool Rotterdam kreeg ik de opdracht om iets te maken waarbij ik minimaal 2 machines moest gebruiken.<br>
              Ik heb toen besloten om de Warp Core van de USS Enterprise NX-01 te maken omdat ik een grote fan ben van Star Trek en ik dit altijd een fascinerend ding vond uit de serie.<br>
              <br>
              Ik heb van dit project ook een Instructable gemaakt waar je alles kunt lezen over dit hele project en hoe je er zelf ook een zou kunnen maken.
              Dit is de vinden via op <a href="https://www.instructables.com/id/Star-Trek-Enterprise-NX-01-Warp-Core/" rel="noopener noreferrer" target="_blank" class="text-dark font-weight-bolder">mijn instructable</a>
              <br>
          <?php } else { ?>
            <p>
              From an elective course at Rotterdam University of Applied Sciences, I was given the assignment to make something in which I had to use at least 2 machines.<br>
              I then decided to make the Warp Core of the USS Enterprise NX-01 because I'm a big fan of Star Trek and I've always found this to be a fascinating thing from the series.<br>
              <br>
              I also made an Instructable of this project where you can read all about this whole project and how you could make one yourself.
              This is the found via at <a href="https://www.instructables.com/id/Star-Trek-Enterprise-NX-01-Warp-Core/" rel="noopener noreferrer" target="_blank" class ="text-dark font-weight-bolder">my instructable</a>
              <br>
          <?php } ?>
            </p>
          </div>
        </div>

        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Star Trek NX01 Warp Core"
                src="https://www.youtube.com/embed/SngJoa8rBQ8"
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
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
            <li data-target="#carouselIndicators" data-slide-to="3"></li>
            <li data-target="#carouselIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/rovex.nl/content/projecten/3d_printer/nx01_warp_core/Enterprise_Warp_core_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/nx01_warp_core/Enterprise_Warp_core_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/nx01_warp_core/Enterprise_Warp_core_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/nx01_warp_core/Enterprise_Warp_core_4.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/nx01_warp_core/Enterprise_Warp_core_5.jpg" class="d-block w-100">
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
              60 <?= $lang['hours']; ?><br>
              Fusion 360 | Ideamaker slicer<br>
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