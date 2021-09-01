<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Go kart</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>DIY electromotor op een zelfgemaakt go kart</h3>
          <?php } else { ?>
            <h3>DIY electromotor on a homemade go kart</h3>
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
              Samen met een goede vriend van de basisschool heb ik een electromotor op een zelf gemaakte kart auto gemonteerd. 
              We hebben hiervoor een 3KW electromotor met 2 12V autoaccus en een PWM controller ertussen gebruikt.<br>
              Na wat tegenslagen hebben wij een werkende kart weten te bouwen die ons allei veel plezier en kennis heeft gegeven tijdens het maken.
            </p>
            <h3>Features</h3>
            <p>
              3000W 24V electromotor<br>
              Porter 10 PWM motor aansturing<br>
              Volledige straatlegale verlichting<br>
              Topsnelheid onbekend
            </p>
          <?php } else { ?>
            <p>
               Together with a good friend from primary school I mounted an electric motor on a self-made kart car.
               We used a 3KW electric motor with 2 12V car batteries and a PWM controller in between.<br>
               After some setbacks we managed to build a working kart that gave us all a lot of fun and knowledge while making it.
             </p>
             <h3>Features</h3>
             <p>
               3000W 24V electric motor<br>
               Porter 10 PWM motor drive<br>
               Full street legal lighting<br>
               Top speed unknown
             </p>
          <?php } ?>
          </div>
        </div>

        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Go Kart"
                src="https://www.youtube.com/embed/W54duL0MxBI" 
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
            <li data-target="#carouselIndicators" data-slide-to="6"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/misc/kart_auto/kart_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/kart_auto/kart_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/kart_auto/kart_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/kart_auto/kart_4.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/kart_auto/kart_5.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/kart_auto/kart_6.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/kart_auto/kart_7.jpg" class="d-block w-100">
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
              <?= $lang['projectDuration']; ?><br>
              PLATFORM
            </p>
          </div>
          <div class="col">
            <p class="text-left text-light">
              3 <?= $lang['months']; ?><br>
              Kart
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