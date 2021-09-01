<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Inspector Gadget</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>API generated debugger interface voor Philips Hue</h3>
          <?php } else { ?>
            <h3>API generated debugger interface for Philips Hue</h3>
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
              Voor de Api van Philips Hue is momenteel geen goede developer ervaring. 
              De documentatie is niet gemakkelijk te volgen en er mist een hoop informatie. Ook is er geen makkelijke manier om met de Api te testen.<br>
              Hiervoor ging ik samen met een mede stagair een applicatie maken die deze developer ervaring moest verbeteren.
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Ik ging een tool maken die een interactieve documentatie genereert van de Api. 
              hiervoor wordt een RAML bestand uitgelezen waarvan vervolgens een interface wordt gemaakt die een developer kan gebuiken om de Api te testen en te ontdekken.<br>
              Het mooie van dit systeem is dat de tool zelf niet aangepast hoeft te worden als de Api veranderd. De tool wordt namelijk gegenereerd van een structuur bestand van de Api.<br>
              De tool genereerd ook gelijk de documentatie waardoor een developer alle mogelijke Api eindpunten kan zien, testen en lezen welke variabelen er verwacht worden. 
              Er zit ook overal autocompletion op die ook gebouwd wordt vanuit de RAML specificatie.
              <br>
            </p>
            <h3>Features</h3>
            <p>
              Documentatie gegenereerd vanuit Api specificatie<br>
              Debugger gegenereerd vanuit Api specificatie<br>
              Autocompletion gegenereerd vanuit Api specificatie
            </p>
          <?php } else { ?>
            <p>
              There is currently no good developer experience for the Philips Hue API.
              The documentation is not easy to follow and a lot of information is missing. Also, there is no easy way to test with the Api.<br>
              For this I went together with a fellow intern to make an application that had to improve this developer experience.
              <br>
              <span class="font-weight-bold">Concept</span><br>
              I was going to create a tool that generates an interactive documentation of the API.
              for this, a RAML file is read, which then creates an interface that a developer can use to test and discover the API.<br>
              The beauty of this system is that the tool itself does not need to be modified if the API changes. The tool is generated from a structure file of the API.<br>
              The tool also immediately generates the documentation allowing a developer to see all possible API endpoints, test them and read which variables are expected.
              There is also autocompletion everywhere that is also built from the RAML specification.
              <br>
            </p>
            <h3>Features</h3>
            <p>
              Documentation generated from API specification<br>
              Debugger generated from Api specification<br>
              Autocompletion generated from API specification
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
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/rovex.nl/content/projecten/internship/inspector_gadget/insepctor_gadget_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/internship/inspector_gadget/insepctor_gadget_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/internship/inspector_gadget/insepctor_gadget_3.jpg" class="d-block w-100">
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
              Q42 | Philips | Signify<br>
              HTML | CSS | Typescript<br>
              8 <?= $lang['weeks']; ?><br>
              -<br>
              Hue Api
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