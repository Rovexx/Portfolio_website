<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Super bespaar app</h1>
          <h3>Bespaar het milieu door bewust te kopen</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
            <p>
              Vanuit de Gemeente Rotterdam kreeg ik vanuit mijn opleiding de opdracht om een project te doen dat te maken heeft met de energietransitie naar duurzame energie.<br>
              Ik heb dit project in een team met nog 2 andere studenten gedaan.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Het concept dat ik samen wij hadden bedacht was een progressive web app waarmee je punten kan scoren door aankopen in de supermarkt te doen die duurzaam zijn.
              Een progressive web app is een website die je ook als app kan installeren op je telefoon.
              Bij het kopen van een stuk vlees krijg je bijvoorbeeld geen punten omdat de ecologische impact hiervan hoog is. 
              Bij het kopen van een potje bonen krijg je veel punten omdat dit de groente is met de kleinste impact op het millieu.<br>
              Met de punten die je verdient kun je sparen voor korting op bijvoorbeeld een zonnepaneel of korting op je volgende duurzame product.<br>
              Het hele doel van deze app was om de winkeliers onbewust bewust te maken van hun impact op het millieu op basis van wat ze kopen. 
              Door deze app te koppelen met bijvoorbeeld de bonuskaart van de, al ecologisch verantwoorde winkel, Ekoplaza kan de klant zonder enige hinder sparen en zijn voetafdruk op de planeet verminderen.<br>
              <br>
              <span class="font-weight-bold">Mijn taak</span><br>
              Bij dit project heb ik mijzelf bezig gehouden met het maken van de paginas van de web app.<br>
            </p>
            <h3>Leerdoelen</h3>
            <p>
              Maak een progressive web app.<br>
            </p>
          </div>
        </div>
        <!-- Images -->
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/school/super_bespaar_app/header.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/super_bespaar_app/super_bespaar_app.jpg" class="d-block w-100">
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
              HTML | CSS | JavaScript<br>
              1 semester<br>
              -<br>
              PWA
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