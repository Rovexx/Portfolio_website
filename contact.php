<?php include 'includes/config.php';?>
<?php include_once 'includes/head.php';?>
<body>
  <!-- Include navbar -->
    <?php include_once 'includes/navbar.php';?>

    <!-- Profile -->
    <div class="container">
      <div class="row my-5 align-items-center">
        <div class="col">
          <h1 class="txt-name">I<span class="txt-blue-darker">'</span>M <br>
          ROEL <br> VERSTEEG<span class="txt-blue-darker">.</span></h1>
          <h3>Student Creative Media And Game Technologies</h3>
        </div>
        <div class="col-sm-4">
          <img src="/content/extra/Portret.jpg" class="img-fluid rounded" alt="Portrait">
        </div>
      </div>
    </div>

    <!-- Contact -->
    <div class="bg-blue">
      <div class="container">
        <div class="row m-5">
          <div class="col text-center">
            <h1 class="font-weight-bold">CONTACT</h1>
            <h2>Ik hoor graag van je</h2>
          </div>
        </div>
        <div class="row mx-5">
          <div class="col-md">
            <ul class="list-unstyled text-small">
              <li><a href="https://www.facebook.com/roel.versteeg" rel="noopener noreferrer" target="_blank" class="text-light"><img class="socialicons-large pr-2" src="/content/logos/icon_facebook.svg">Facebook</a></li>
              <li><a href="https://www.youtube.com/user/roel0099" rel="noopener noreferrer" target="_blank" class="text-light"><img class="socialicons-large pr-2" src="/content/logos/icon_youtube.svg">Youtube</a></li>
              <li><a href="https://www.instagram.com/roelversteeg/" rel="noopener noreferrer" target="_blank" class="text-light"><img class="socialicons-large pr-2" src="/content/logos/icon_instagram.svg">Instagram</a></li>
            </ul>
          </div>
          <div class="col-md">
            <ul class="list-unstyled text-small">
              <li><a href="https://twitter.com/Roel_Versteeg" rel="noopener noreferrer" target="_blank" class="text-light"><img class="socialicons-large pr-2" src="/content/logos/icon_twitter.svg">Twitter</a></li>
              <li><a href="https://www.linkedin.com/in/roel-v-a66773124/" rel="noopener noreferrer" target="_blank" class="text-light"><img class="socialicons-large pr-2" src="/content/logos/icon_linkedin.svg">LinkedIn</a></li>
              <li><a href="https://github.com/Rovexx" rel="noopener noreferrer" target="_blank" class="text-light"><img class="socialicons-large pr-2" src="/content/logos/icon_github.svg">GitHub</a></li>
            </ul>
          </div>
          <div class="col-md text-center mb-3">
            <a type="button" class="btn btn-outline-light btn-lg btn-block mb-3 text-light" href="/content/bestanden/CV_Roel_Versteeg.pdf" download>DOWNLOAD CV</a>
            <a href="mailto:roel.versteeg@hotmail.com" class="text-dark">roel.versteeg@hotmail.com</a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-dark">
      <br>
      <!-- Include footer -->
      <?php include_once 'includes/footer.html';?>
    </div>
    <!-- Include scripts -->
    <?php include_once 'includes/scripts.html';?>
    <script>
      $(document).ready(function () {
        $('#nav_home').removeClass('active');
        $('#nav_projects').removeClass('active');
        $('#nav_contact').addClass('active');
      });
    </script>
  </body>
</html>