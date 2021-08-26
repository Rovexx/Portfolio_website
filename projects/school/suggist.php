<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Suggist</h1>
          <h3>Suggesteer menu items voor bij jouw biertje</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
            <p>
              Mijn opleiding kwam met de opdracht om een smart object te maken voor een bar, kledingwinkel of sportclub.
              Ik heb met mijn team van 3 andere studenten ervoor gekozen om een smart object te maken voor een bar in Rotterdam.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Ons concept was om een suggestiebox te maken die een suggestie geeft voor een drankje of wat eten. 
              De bar waar wij dit voor maakt was gespecialiseerd in speciaal bier en daarom hebben wij ons apparaat de suggist genoemt.
              Door een simpel menu door te lopen weet de gebruiker gelijk de opties op het menu en krijg hij een suggestie voor de gekozen categorie.<br>
              <br>
              <span class="font-weight-bold">Mijn taak</span><br>
              ik heb mij bezig gehouden met de code voor de Arduino waar dit smart object op draait.
              Deze code is voor het menu dat getoond wordt op 2 LCD schermen. De Arduino leest ook de knopinvoer af om zo door het menu te navigeren.<br>
            </p>
            <h3>Leerdoelen</h3>
            <p>
              Leer programeren voor Arduino.<br>
              Leer werken met Arduino en LCD schermen.<br>
            </p>
          </div>
        </div>
        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Title"
                src="https://www.youtube.com/embed/q2RBZWDdowc" 
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
              <img src="/content/projecten/school/suggist/suggist_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/suggist/suggist_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/suggist/suggist_3.jpg" class="d-block w-100">
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
              C/C++<br>
              3 weken<br>
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