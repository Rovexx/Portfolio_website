<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Is It Glass?</h1>
          <h3>Simone Gierts W00tCamp project</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
            <p>
              Op mijn stage bij Q42 heb ik mee mogen doen met W00tcamp. Dit is een evenement van 2 dagen waarbij je in een team iets tofs maakt.
              Ik heb hierbij een project gedaan in de Simone Gierts arena. Hierbij was het de bedoeling dat je een zo nutteloos mogelijke robot maakt.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Wij hadden verzonnen om een robot te maken die zou gaan testen of iets van glas is gemaakt door het object stuk te maken.<br>
              Hierbij wordt er met een camera een foto gemaakt waarop object herkenning word toegepast om zo uit te vinden of het van glas is.
              Vervolgens zal er een hamer worden opgetild die het object stuk slaat. Als het stuk gaat is het waarschijnlijk van glas.
              <br>
              <span class="font-weight-bold">Mijn taak</span><br>
              Ik heb bij dit project de behuizing gemaakt, de Arduino geprogrammeerd die de hamer zal besturen en verschillende solenoids die tegen het glas aantikken.<br>
              <br>
              Met dit project heeft mijn team de arena waarin wij streden gewonnen! Onze robot werkte maar was compleet nutteloos en dus perfect!
            </p>
            <h3>Features</h3>
            <p>
              Detecteerd misschien of iets van glas is<br>
              Werkt niet echt<br>
              Compleet nutteloos<br>
              Heeft de arena gewonnen
            </p>
          </div>
        </div>

        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Is It Glass robot test"
                src="https://www.youtube.com/embed/Rm_KPm1VtvM" 
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
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/internship/is_it_glass/is_it_glass_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/internship/is_it_glass/is_it_glass_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/internship/is_it_glass/is_it_glass_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/internship/is_it_glass/is_it_glass_4.jpg" class="d-block w-100">
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
              Q42<br>
              C/C++<br>
              2 dagen<br>
              -<br>
              Arduino | Raspberry Pi
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