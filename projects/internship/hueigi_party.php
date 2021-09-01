<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Hueigi Party</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>Simon Zegt spelletje voor Philips Hue lampen</h3>
          <?php } else { ?>
            <h3>Simon Says game for Philips Hue lights</h3>
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
              Het eerste project waar ik tijdens mijn stage bij Q42 aan gewerkt heb was een spel genaamd Huegi party. 
              Dit was een project wat ik twee weken heb gedaan. Dit korte project diende als een intro voor mijn stagetijd bij Q42. 
              Tijdens deze twee weken raakte ik bekend met de werkmethodes die gebruikt worden binnen Q42 en ik kon kennis maken met het Philips Hue ecosysteem waarmee ik zou gaan werken in de komende weken.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Dit spel was het simon zegt spelletje dat werkt met Philips Hue lampen. 
              Een gebruiker kon zijn lampen koppelen via zijn telefoon en vervolgens op zijn lampen het spelletje spelen waarbij er een reeks aan kleuren werd getoond die de speler vervolgens in de app moest ingeven.<br>
              Zodra de speler de hele reeks correct had werd de reeks langer. Wanneer de gebruiker de reeks niet goed heeft gereaden was het game over.<br>
              <br>
              <span class="font-weight-bold">Mijn taak</span><br>
                Dit project is verzonnen door mijzelf en een mede stagiair genaamd Tim Borowy. 
                Mijn taak was heel breed in dit project. Ik heb bedacht wat ik wilde maken, voor wie we dit zouden maken en ik heb het natuurlijk zelf geprogrammeerd.
                Deze opdracht was niet gemaakt vanuit de vraag van een klant, maar puur iets om bekend te raken met de manier van werken binnen het Phillips Hue team en Q42.<br>
            </p>
            <h3>Features</h3>
            <p>
              Automatisch Hue bridges zoeken en verbinden<br>
              Selecteer zelf de lampen om het spel mee te spelen<br>
              Simon zegt spelletje
            </p>
          <?php } else { ?>
            <p>
              The first project I worked on during my internship at Q42 was a game called Huegi party.
              This was a project I did for two weeks. This short project served as an intro to my internship at Q42.
              During these two weeks I became acquainted with the working methods used within Q42 and I was able to get to know the Philips Hue ecosystem that I would be working with in the coming weeks.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              This game was the simon says game that works with Philips Hue lamps.
              A user could link his lamps via his phone and then play the game on his lamps, showing a series of colors that the player then had to enter in the app.<br>
              Once the player got the whole sequence correct, the sequence got longer. If the user did not read the series correctly, it was game over.<br>
              <br>
              <span class="font-weight-bold">My task</span><br>
                This project was created by myself and a fellow intern named Tim Borowy.
                My task was very broad in this project. I thought of what I wanted to make, who we would make this for and of course I programmed it myself.
                This assignment was not made from a customer request, but purely to get to know the way of working within the Phillips Hue team and Q42.<br>
            </p>
            <h3>Features</h3>
            <p>
              Automatically find and connect with Hue bridges<br>
              Select the lamps yourself to play the game<br>
              Simon says game
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
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/internship/huegi_party/huegi_party_1.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/internship/huegi_party/huegi_party_2.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/internship/huegi_party/huegi_party_3.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/internship/huegi_party/huegi_party_4.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/internship/huegi_party/huegi_party_5.png" class="d-block w-100">
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
              Q42<br>
              HTML | CSS | JavaScript<br>
              2 <?= $lang['weeks']; ?><br>
              -<br>
              Philips Hue Api
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