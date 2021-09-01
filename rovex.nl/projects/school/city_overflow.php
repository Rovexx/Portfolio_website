<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>City Overflow</h1>
          <h3>Tech demo Nvidia Flex in Unity</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <p>
              City Overflow was gemaakt binnen een week als proof of concept voor de minor Game Design & Development. Dit concept zou inzicht geven of dit een haalbaar iets is om een volledige game mee te maken.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Het concept is gebasseerd op Nvidia Flex voor Unity. Dit is een framework voor realtime deeltjes-gebaseerde simulatie.<br>
              Mijn doel was om dit te gebruiken voor een spel waarbij je water naar 1 of meer steden moet brengen door een buis netwerk aan te leggen.
              Helaas bleek dat deze technologie nog niet genoeg was uitgewerkt om er echt een game mee te kunnen maken. 
              Er waren nog een aantal limitaties waaronder de prestaties die ervoor gezorgd hebben dat dit project niet verder is uitgewerkt dan de demo.
              <br>
            </p>
          <?php } else { ?>
            <p>
              City Overflow was made within a week as proof of concept for the minor Game Design & Development. This concept would give insight into whether this is a feasible thing to make a full game with.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              The concept is based on Nvidia Flex for Unity. This is a framework for real-time particle-based simulation.<br>
              My goal was to use this for a game where you have to bring water to 1 or more cities by building a pipe network.
              Unfortunately, it turned out that this technology was not yet developed enough to really be able to make a game with it.
              There were still a number of limits including performance that prevented this project from progressing beyond the demo.
              <br>
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
            <a href="https://github.com/Rovexx/City_Overflow" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_github.svg">City overflow</a>
          </p>
        </div>
        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="City Overflow tech demo"
                src="https://www.youtube.com/embed/0xMOi_IAgbI" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
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
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/rovex.nl/content/projecten/school/city_overflow/city_overflow_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/school/city_overflow/city_overflow_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/school/city_overflow/city_overflow_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/school/city_overflow/city_overflow_4.jpg" class="d-block w-100">
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
              BIBLIOTHEEK
            </p>
          </div>
          <div class="col">
            <p class="text-left text-light">
              Minor<br>
              C#<br>
              1 week<br>
              Unity<br>
              Nvidia Flex
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