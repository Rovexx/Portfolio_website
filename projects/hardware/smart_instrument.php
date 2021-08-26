<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Smart instrument</h1>
          <h3>Ultrasonic synthesiser</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
            <p>
              Vanuit een keuzevak op de Hogeschool Rotterdam kreeg ik de opdracht om een smart object te maken.<br>
              Ik heb toen besloten om een instrument te maken met behulp van een Arduino.
              Het instrument zal een synthesizer zijn die te besturen is met je hand in de lucht. Dit was geinspireerd op de theremin, een synthesizer die je ook met 2 handen in de lucht bespeeld.<br>
              <br>
              Ik heb van dit project ook een Instructable gemaakt waar je alles kunt lezen over dit hele project en hoe je er zelf ook een zou kunnen maken.
              Dit is de vinden via op <a href="https://www.instructables.com/id/Ultrasonic-Smart-Instrument/" rel="noopener noreferrer" target="_blank" class="text-dark font-weight-bolder">mijn instructable</a>
            </p>
          </div>
        </div>
        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Ultrasonic smart instrument"
                src="https://www.youtube.com/embed/UDWKwfsJVA8" 
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
            <li data-target="#carouselIndicators" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/hardware/smart_instrument/Smart_instrument_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/hardware/smart_instrument/Smart_instrument_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/hardware/smart_instrument/Smart_instrument_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/hardware/smart_instrument/Smart_instrument_4.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/hardware/smart_instrument/Smart_instrument_5.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/hardware/smart_instrument/Smart_instrument_6.jpg" class="d-block w-100">
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
              30 Uur<br>
              Fusion 360 | Adobe Illustrator<br>
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