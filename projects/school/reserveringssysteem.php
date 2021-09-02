<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Reserveringssysteem</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>Website met reserverings en rooster systeem voor muziekles</h3>
          <?php } else { ?>    
            <h3>Website with reservation and schedule system for music lessons</h3>
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
              Vanuit mijn opleiding kreeg ik de opdracht om een reserveringssysteem te maken. 
              Ik heb hierbij zelf een opdrachtgever gezocht om dit project voor te kunnen doen. 
              Ik heb uiteindelijk een reserveringssysteem mogen maken voor mijn muziekleraar om te gebruiken bij zijn muziekpraktijk<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Het concept wat ik heb gemaakt is een reserveringssysteem voor leerlingen om een les in te kunnen boeken en bij te kunnen houden hoeveel lessen zij al hebben betaalt.
              De muziekleraar heeft ook een mooi overzicht van alle lessen die hij ingepland heeft.<br>
              Voor het inboeken van muzieklessen kan de leerling aangeven hoeveel lessen er ingeboekt moeten worden, voor welk instrument en op welke datum en tijd. 
              De lessen worden pas echt ingeboekt wanneer de muziekleraar ook de lessen accepteerd zodat zowel de leerling als leraar beschikbaar is om dat moment.<br>
              <br>
              <span class="font-weight-bold">Mijn taak</span><br>
              Ik heb bij dit project mijn opdrachtgever op de hoogte gehouden van mijn voortgang maar ook afspraken met heb gemaakt over de eisen die hij heeft voor dit project en dat ik deze ook nakom.<br>
              Ik heb een database opgezet en de website met logica geschreven zodat dit reserveringssysteem ging werken.
            </p>
            <h3>Leerdoelen</h3>
            <p>
              Werken met databases<br>
              Leer een website maken die data van een database gebruikt, aanpast, aanmaakt en verwijderd (CRUD).<br>
              Omgaan met een opdrachtgever.
            </p>
          <?php } else { ?>
            <p>
              My education gave me the assignment to make a reservation system.
              I have sought a client myself to be able to do this project.
              I finally got to make a reservation system for my music teacher to use in his music practice<br>
              <br>
              <span class="font-weight-bold">concept</span><br>
              The concept I created is a reservation system for students to book a lesson and keep track of how many lessons they have already paid.
              The music teacher also has a nice overview of all the lessons he has scheduled.<br>
              When booking music lessons, the student can indicate how many lessons should be booked, for which instrument and on what date and time.
              The lessons are only really booked when the music teacher also accepts the lessons so that both the student and teacher are available at that moment.<br>
              <br>
              <span class="font-weight-bold">My task</span><br>
              I have kept my client informed of my progress on this project, but I have also made agreements with about the requirements he has for this project and that I also comply with them.<br>
              I set up a database and wrote the website with logic to make this reservation system work.
            </p>
            <h3>Learning objectives</h3>
            <p>
              Working with databases<br>
              Learn to create a website that uses, modifies, creates and deletes data from a database (CRUD).<br>
              Dealing with a client.
            </p>
          <?php } ?>
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
              <img src="/content/projecten/school/reserveringssysteem/header.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/school/reserveringssysteem/reserveringssysteem.jpg" class="d-block w-100">
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
              School | Muziekpraktijk Blue Note<br>
              HTML | CSS | PHP | SQL<br>
              1 <?= $lang['quarter']; ?><br>
              -<br>
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