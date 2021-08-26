<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>CMGT Markthal</h1>
          <h3>Collectieve intelligentie in Minecraft</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
            <p>
              Vanuit het vak Techniek Filosofie kreeg ik de opdracht met nog 2 studenten om iets te doen met collectieve intelligentie. 
              Dit is wanneer er intlligente acties ontstaan vanuit een groep individuen zonder dat er afspraken worden gemaakt.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Ik had het idee om eem gebouw te maken in het spel Minecraft zonder communicatie tussen de bouwers.<br>
              Mijn hypothese was namelijk dat we met zijn allen de Markthal na konden bouwen zonder met elkaar te communiceren wie wat bouwt of hoe het er uit moet komen te zien.
              <br>
              <span class="font-weight-bold">Mijn taak</span><br>
              Ik heb voor dit project de Minecraft server opgezet en gehost.
              Ook heb ik een timelapse video gemaakt van het bouw process om te kunnen zien hoe er een collectieve intelligentie onstaat.<br>
            </p>
          </div>
        </div>
        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="CMGT Markthal"
                src="https://www.youtube.com/embed/xbgxAoTLVHk" 
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
          </ol>
          <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="/content/projecten/school/cmgt_markthal/header.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/cmgt_markthal/markthal_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/cmgt_markthal/markthal_2.jpg" class="d-block w-100">
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
              School<br>
              -<br>
              1 kwartaal<br>
              Adobe Premiere<br>
              Minecraft
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