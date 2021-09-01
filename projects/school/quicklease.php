<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Leaseplan Quicklease Fleet</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>

          <?php } else { ?>

          <?php } ?>
          <h3>AI gestuurd optimalisatie systeem voor fiets-leasen</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <p>
              Leaseplan had voor mijn opleiding een opdracht. Bedenk iets voor Leaseplan wat te maken heeft met kunstmatige intelligentie of AI.<br>
              Dit project heb ik in een team met nog 3 studenten gedaan.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Wij hadden als concept een fietsen lease systeem waarbij de bevoorading van de fietsen geregeld werd met behhulp van AI.<br>
              Ik heb dus met het team eerst het fiet lease systeem moeten bedenken wat wij de naam Quicklease hebben gegeven.
              Het systeem achter de bevoorading noemen wij Quicklease Fleet.<br>
              Bij elke Hogeschool Rotterdam komt een plek waar fietsen staan om te gebruiken. Een student kan met zijn Hogeschool pas een fiets meenemen.<br>
              <br>
              Het systeem verzamelt van verschillende bronnen data. Zo verzamelt het weerdata, hoeveelheid studenten op hogeschool locaties, hoeveelheid fietsen op locatie, periodes van drukte en OV vertragingen.
              Al deze data wordt vervolgens verwerkt zodat de AI dit kan gebruiken om een voorspelling te maken voor het aantal fietsen dat nodig is op alle HR locaties. 
              Deze voorspelling wordt vervolgens doorgestuurd naar de persoon die de fietsen op alle locaties bevoorraadt.
              Met dit systeem zullen er dus altijd precies genoeg fietsen op een locatie aanwezig zijn.<br>
              <br>
              <span class="font-weight-bold">Mijn taak</span><br>
              Ik heb mij met dit project bezig gehouden met alles rondom de AI. Ik ben begonnen met de bronnen van data zoeken die onze AI nodig heeft en hoe we deze data om kunnen zetten tot iets waar de AI iets mee kan.<br>
              Ik heb ook onderzoek gedaan naar AI bibliotheken die ik kon gebruiken om data te voorspellen.<br>
              Vervolgens ben ik aan de slag gegaan om de AI te programeren zodat deze ons een voorspelling kan geven voor het aantal fietsen dat nodig zal zijn op alle locaties.
              Aan het einde van dit project was mijn AI code in staat om een voorspelling te geven met onze test data die 90-95% overeenkwam met wat we verwachten.
            </p>
            <h3>Leerdoelen</h3>
            <p>
              Data bronnen zoeken voor AI<br>
              Data omzetten voor gebruik met AI<br>
              AI applicatie maken die een voorspelling kan maken.
            </p>
          <?php } else { ?>
            <p>
              Leaseplan had an assignment for my study. Think of something for Leaseplan that has to do with artificial intelligence or AI.<br>
              I did this project in a team with 3 other students.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Our concept was a bicycle lease system in which the supply of the bicycles was arranged with the help of AI.<br>
              So I first had to devise the bicycle lease system with the team, which we named Quicklease.
              We call the system behind the supply Quicklease Fleet.<br>
              Every Rotterdam University of Applied Sciences will have a place where bicycles can be used. A student can take a bicycle with his University pass.<br>
              <br>
              The system collects data from various sources. For example, it collects weather data, number of students at university locations, number of bicycles on location, periods of crowds and public transport delays.
              All this data is then processed so that the AI ​​can use it to make a prediction for the number of bicycles needed at all HR locations.
              This prediction is then forwarded to the person supplying the bikes at all locations.
              With this system, there will always be exactly enough bicycles available at a location.<br>
              <br>
              <span class="font-weight-bold">My task</span><br>
              With this project I have been involved with everything related to AI. I started looking for the sources of data that our AI needs and how we can turn this data into something the AI ​​can do something with.<br>
              I also researched AI libraries that I could use to predict data.<br>
              Then I got to work programming the AI ​​so that it can give us a prediction for the number of bikes that will be needed at all locations.
              At the end of this project, my AI code was able to provide a prediction with our test data that matched 90-95% of what we expected.
            </p>
            <h3>Learning objectives</h3>
            <p>
              Finding data sources for AI<br>
              Converting data for use with AI<br>
              Create an AI application that can make a prediction.
            </p>
          <?php } ?>
          </div>
        </div>
        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Quicklease Fleet"
                src="https://www.youtube.com/embed/hvGOcKtSX1w" 
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
              <img src="/content/projecten/school/leaseplan_quicklease_fleet/header.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/leaseplan_quicklease_fleet/quicklease_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/leaseplan_quicklease_fleet/quicklease_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/leaseplan_quicklease_fleet/quicklease_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/leaseplan_quicklease_fleet/quicklease_4.jpg" class="d-block w-100">
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
              School | Leaseplan<br>
              Javascript<br>
              1 <?= $lang['quarter']; ?><br>
              -<br>
              BrainJS
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