<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Star Trek Enterprise NCC 1701D Warp core</h1>
          <h3>Warp core van de Enterprise NCC 1701D</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
            <p>
              Als grote Star Trek fan wilde ik graag de Warp Core printen van de USS Enterprise NCC 1701D uit Star Trek TNG<br>
              <br>
              <span class="font-weight-bold">Het proces</span><br>
              Ik heb het model van Thingiverse gedownload en daarna geprint. De zwarte delen zijn gemaakt van PLA en de transparante gedeeltes zijn gemaakt van PETG.<br>
              Ik heb verschillende strips van WS2812B ledstrip erin verwerkt die ik met een zelfgeschreven programma bestuur op een Arduino Nano met een Touchscreen LCD.<br>
              <br>
              Het hele project was 91 uur print tijd en nam 850 Gram print materiaal in beslag.
            </p>
            <h3>Features</h3>
            <p>
              Touchescreen controle voor ledjes<br>
              Orginele LED patronen<br>
              66cm hoog
            </p>
          </div>
        </div>

        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Star Trek NCC 1701D Warp Core"
                src="https://www.youtube.com/embed/E4poOqceci0" 
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
              <img src="/content/projecten/3d_printer/ncc_1701_d_warp_core/header.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ncc_1701_d_warp_core/NX01_Warp_core_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ncc_1701_d_warp_core/NX01_Warp_core_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ncc_1701_d_warp_core/NX01_Warp_core_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/ncc_1701_d_warp_core/NX01_Warp_core_4.jpg" class="d-block w-100">
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
              Hobby<br>
              C/C++<br>
              100 Uur<br>
              Ideamaker slicer<br>
              Arduino
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