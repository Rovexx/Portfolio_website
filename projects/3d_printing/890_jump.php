<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Star Citizen 890 Jump</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>3D geprint ruimteschip uit het spel Star Citizen</h3>
          <?php } else { ?>
            <h3>3D printed spaceship from the game Star Citizen</h3>
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
              In het spel Star Citizen zit een heel luxe ship, de Origin 890 Jump. 
              Omdat ik dit een heel gaaf schip vindt en een groot 3D print project wilde maken heb ik besloten om dit model te gaan printen.<br>
              Mijn doel is om dit model 1 meter lang te maken. Hiernaast wil ik ook waterdamp sproeiers toevoegen zodat het net lijkt alsof de motoren werken.
            </p>
            <h3>Process</h3>
            <p>
              Het begon bij het orginele model van de site halen. 
              Er is namelijk een 3D schip hologram vieuwer waar de developers heel aardig hun volledige model in hebben geplaats van miljoenen polygons.<br>
              <br>
              Na dit model te hebben gedownload begon de taak om dit model om te zetten van een videospel kwaliteit naar een waterdicht model om te kunnen 3D printen.
              Ik wist van tevoren niet dat dit honderden uren zou gaan kosten. Het probleem is namelijk dat je voor een videogame geen waterdichte modellen hoeft te maken. 
              Dit wil zeggen dat niet alle puntjes waar dit model uit bestaat met elkaar verbonden zijn en dat er muren zijn die elkaar kruisen.<br>
              <br>

              Ik ben dus nu bezig om alle punten waaruit dit model bestaat (+/- 10 miljoen gereduceert tot 600.000) één voor één langs te gaan en het model te repareren.
              Wanneer dit klaar is zal ik alle onderdelen gaan printen, schuren, schuren, schuren en verven.
            </p>
          <?php } else { ?>
            <p>
              In the game Star Citizen there is a very luxurious ship, the Origin 890 Jump.
              Because I think this is a very cool ship and wanted to make a large 3D print project, I decided to print this model.<br>
              My goal is to make this model 1 meter long. In addition, I also want to add water vapor nozzles to make it look like the motors are working.
            </p>
            <h3>Process</h3>
            <p>
              It started with getting the original model from the site.
              There is a 3D ship hologram viewer in which the developers have very nicely placed their full model of millions of polygons.<br>
              <br>
              After downloading this model, the task of converting this model from a video game quality to a waterproof model for 3D printing began.
              I didn't know beforehand that this would take hundreds of hours. The problem is that you don't have to make waterproof models for a video game.
              This means that not all the dots that make up this model are connected and that there are walls that intersect.<br>
              <br>

              So now I'm going through all the points that make up this model (+/- 10 million reduced to 600,000) one by one and repairing the model.
              When this is ready I will start printing, sanding, sanding, sanding and painting all parts.
            </p>
          <?php } ?>
          </div>
        </div>

        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Star Citizen 890 Jump"
                src="https://www.youtube.com/embed/j4LXGLvbBYU" 
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
              <img src="/content/projecten/3d_printer/890_jump/890_jump (1).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/890_jump/890_jump (2).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/890_jump/890_jump (3).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/890_jump/890_jump (4).jpg" class="d-block w-100">
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
              <?= $lang['projectDuration']; ?><br>
              <?= $lang['programs']; ?><br>
              PLATFORM
            </p>
          </div>
          <div class="col">
            <p class="text-left text-light">
              Hobby project<br>
              300+ <?= $lang['hours']; ?><br>
              Blender | Meshlab<br>
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