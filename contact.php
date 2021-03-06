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
          <h3><?= $lang['title']; ?></h3>
        </div>
        <div class="col-sm-4">
          <img src="/content/extra/Portret.jpg" class="img-fluid rounded" alt="Portrait">
        </div>
      </div>
    </div>

    <!-- Contact -->
    <div class="bg-blue">
      <div class="container">
        <div class="row mx-5">
          <div class="col text-center">
            <h1 class="font-weight-bold">CONTACT</h1>
            <h2>Ik hoor graag van je</h2>
          </div>
        </div>
        <div class="row mx-5">
          <div class="col-md text-center mb-3">
            <?php if ($_SESSION['lang'] == "nl") { ?>
              <a type="button" class="btn btn-outline-light btn-lg btn-block mb-3 text-light" href="/content/bestanden/CV Roel Versteeg.pdf" download>DOWNLOAD CV</a>
            <?php } else { ?>
              <a type="button" class="btn btn-outline-light btn-lg btn-block mb-3 text-light" href="/content/bestanden/CV Roel Versteeg english.pdf" download>DOWNLOAD CV</a>
            <?php } ?>
            <a href="mailto:contact@rovex.nl" class="text-dark">contact@rovex.nl</a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-dark">
      <br>
      <!-- Include footer -->
      <?php include_once 'includes/footer.php';?>
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