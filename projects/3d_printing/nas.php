<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>DIY NAS</h1>
          <h3>Raspberry Pi Open Source Network Attached Storage</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
            <p>
              Dit project is ontstaan uit een frustatie die ik had met Dropbox. Ik gebruik dit platform al jaren maar ik werd steeds meer gelimiteerd door de hoeveelheid gratis opslag.<br>
              Een NAS (network attached storage) was dus de oplossing, maar een NAS behuizing is enorm duur. Ik heb toen besloten om zelf een NAS te ontwerpen en bouwen.
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Ik heb onderzoek gedaan naar software en hardware combinaties die mijn eisen kunnen vervullen.<br>
              Mijn eisen voor dit project waren:<br>
              - Ik moet vanaf buiten mijn huis bij mijn bestanden kunnen.<br>
              - Ik wil snelle opslag<br>
              - Mijn bestanden moeten gebackupped zijn.<br>
              - Ik wil vrienden een link naar een bestand kunnen sturen zodat ook anderen 'gelimiteerde' toegang hebben tot mijn NAS.<br>
              Ik ben vervolgens op de combinatie gekomen van een Raspberry Pi met 2 SSD's en de software combinatie van Open Media Vault met Nextcloud.<br>

              <br>
              <span class="font-weight-bold">Het Proces</span><br>
              Ik heb in Fusion 360 de behuizing ontworpen met plek voor 4 3.5 inch HDD of 2.5 inch SSD. 
              Deze behuizing heb ik geprint en na veel schuren ook een likje verf gegeven met 10 lagen spray paint.<br>
              Hierna heb ik de software geinstalleerd. Ik heb voor dit project met Docker gewerkt.<br>
              <br>
              Docker is een manier om verschillende stukken software in hun eigen 'containers' te laten draaien. 
              Dit was de eerste keer dat ik met Docker heb gewerkt en dit was dus een grote leerstap voor mij. Maar ik denk dat ik de basis nu wel onder de knie heb.
              Op de Raspberry Pi draait Open Media Vault. Deze software kan je zien als het besturingssysteem die alles regelt van folders op hardeschijven zetten tot het koppelen van die folders aan je netwerk.<br>
              Hiernaast draait Docker met daarin containers voor Portainer (interface voor Docker),  DuckDNS (zorgt voor toegang tot de NAS vanaf het internet) en Nextcloud (de vervangen van Dropbox functionaliteit).<br>
              <br>
              Na alles ingesteld te hebben heb ik een zelfgebouwde NAS met 256GB SSD opslag die volledig gebacked up is, met ruimte voor nog 2 schijven. Alles voor nog geen 150 Euro!
            </p>
            <h3>Features</h3>
            <p>
              Modern unieke look<br>
              Backed up SSD opslag<br>
              Opslag overal bereikbaar<br>
              Automatische telefoon media synchronisatie<br>
              500mb/s lees + schrijf snelheid opslag<br>
              Ruimte voor 4 schijven waarvan 2 op USB 3.0 en 2 op USB 2.0 snelheden.
            </p>
          </div>
        </div>

        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="NAS"
                src="https://www.youtube.com/embed/4SnQwxBqwb0" 
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
              <img src="/content/projecten/3d_printer/nas/nas_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/nas/nas_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/nas/nas_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/nas/nas_4.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/nas/nas_5.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/3d_printer/nas/header.jpg" class="d-block w-100">
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
              OPDRACHTGEVER<br>
              PROGRAMMEER TAAL<br>
              PROJECT DUUR<br>
              PROGRAMMAS<br>
              PLATFORM
            </p>
          </div>
          <div class="col">
            <p class="text-left text-light">
              Hobby<br>
              -<br>
              100 Uur<br>
              Fusion 360<br>
              Linux | Docker | OMV | Nextcloud
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