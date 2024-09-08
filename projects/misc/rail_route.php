<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Rail Route</h1>
          <h3>2D PC Train Dispatcher Simulator</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <p>
              Rond augustus 2021 sloot ik mij aan bij dit project. Op dat moment was de game al een paar jaar in vroege toegang en de oorspronkelijke ontwikkelaars stonden klaar om wat meer handen aan dek te krijgen om de game klaar te maken voor 1.0<br>
              De volgende drie jaar heb ik aan deze game gewerkt waarbij ik bijna elk onderdeel ervan heb aangepakt, van discussies met de community tot het oplossen van bugs, tot het maken van geheel nieuwe functionaliteiten en zelfs een DLC na de volledige release op 22 februari 2024.<br>
              <br>
              <span class="font-weight-bold">Het concept</span><br>
              Rail Route is een 2D trein verkeersleider simulatie spel. Je ontwerpt, bouwt, en breid je train netwerk uit in een ruime selectie aan kaarten, gebaseeerd op echte locaties.
              Je kunt ook je eigen kaarten maken of een van de vele kaarten downloaden via de Steam Workshop.<br>
              <br>
              <span class="font-weight-bold">Mijn taken</span><br>
              Toen ik bij het project kwam, begon ik met het oplossen van bugs om de codebase te leren kennen. In de loop van de tijd heb ik mijn taken uitgebreid met het implementeren van nieuwe functionaliteiten, het helemaal opnieuw ontwerpen van een compleet nieuwe gebruikersinterface 
              en het implementeren van volledige controllerondersteuning.
              Voor dit project heb ik ook nieuwe spelfuncties ontworpen die bij het bestaande spel zouden passen en toch een goede nieuwe waarde zouden bieden voor zowel nieuwe als bestaande spelers.
              Tijdens het project heb ik ook contact gehad met de community voor zaken als het verzamelen van feedback of het onderzoeken van bugs.
              Andere taken die ik deed, waren het documenteren en verbeteren van enkele conventies voor het team die de ontwikkeling helpen stroomlijnen. 
              Een voorbeeld hiervan is een document dat elke sorteerlaag van alle elementen in het spel bijhoudt, omdat de gebruikersinterface behoorlijk moeilijk te sorteren kan zijn als het spel 2D is met veel lagen overlappende elementen.<br>
              <br>
              Hieronder volgt een lijst met enkele gamefuncties waarvoor ik voornamelijk verantwoordelijk was:<br>
              - Herontwerp van de gebruikersinterface met de nadruk op ondersteuning voor mobiel, touch en controller.<br>
              - Controllerondersteuning inclusief dynamische sneltoetsen<br>
              - Grafiekweergaven<br>
              - Systeemupgrades-menu<br>
              - Hoofdmenu<br>
              - Treininfopanelen<br>
              - ChatGPT-integratie voor gamelokalisatie<br>
            </p>
          <?php } else { ?>
            <p>
              I joined this project around August of 2021. At this time the game had been in early access for a few years already and the original developers where ready to get some more hands on deck to get the game ready for 1.0<br>
              So for the next 3 years i worked on this game touching nearly every part of it, from discussing with the community, to bugfixing, to making entire new features and even a DLC after full release on February 22 2024.<br>
              <br>
              <span class="font-weight-bold">The concept</span><br>
              Rail Route is a 2D train dispatcher simulator game. You design, build and expand your train network in a wide selection of premade maps based on real work locations.
              But you can also build your own maps from scratch, or download one of the many maps in the Steam Workshop.<br>
              <br>
              <span class="font-weight-bold">My tasks</span><br>
              When i joined the project i started by doing bug fixes to get to know the codebase. Over time i expanded my tasks to implementing new features, designing a complete new UI from scratch and implementing full controller support.
              For this project i also got to design new game features that would fit the existing game yet provide good new value for new and existing players.
              During the project i also interacted with the community for things like gathering feedback or investigating bugs.
              Other tasks i did where documenting and improving some conventions for the team that help streamline development. 
              An example of this is a document that tracks every sorting layer of all the elements in the game as UI can get pretty hard to sort when the game is 2D with many layer of overlapping elements.<br>
              <br>
              The following is a list of some game features i was mostly responsible for:<br>
              - UI redesign focussing on mobile, touch and controller support.<br>
              - Controller support including dynamic keybinds<br>
              - Graph representations<br>
              - System Upgrades menu<br>
              - Main Menu<br>
              - Train Info Panels<br>
              - ChatGPT integration for game localisation<br>
            </p>
          <?php } ?>
          </div>
        </div>
        <!-- Links -->
        <div class="row justify-content-md-center text-light">
          <div class="col-sm">
            <p>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              Informatie over de game is op verschillende locaties te vinden:
            <?php } else { ?>
              Information about the game can be found on multiple platforms:
            <?php } ?>
            </p>
            <ul class="list-unstyled text-small">
              <li><a href="https://www.youtube.com/@railroute" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_youtube.svg">Youtube</a></li>
              <li><a href="https://discord.com/invite/railroute" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_discord.svg">Discord</a></li>
              <li><a href="https://x.com/RailRouteGame" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_x.svg">X</a></li>
              <li><a href="https://www.tiktok.com/@railroutegame" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_tiktok.svg">Tik Tok</a></li>
              <li><a href="https://www.facebook.com/RailRouteGame" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_facebook.svg">Facebook</a></li>
              <li><a href="https://www.reddit.com/r/RailRoute/" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_reddit.svg">Reddit</a></li>
              <li><a href="https://railroute.eu/" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_internet.svg">Website</a></li>
            </ul>
          </div>
        </div>
        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Rail Route 1.0 Release trailer"
                src="https://www.youtube.com/embed/aipDdgzpyNA"
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
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/content/projecten/misc/rail_route/rail_route_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/rail_route/rail_route_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/rail_route/rail_route_4.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/rail_route/rail_route_5.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/rail_route/rail_route_6.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/rail_route/rail_route_7.jpg" class="d-block w-100">
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
              Freelance<br>
              C#<br>
              3 Years<br>
              Unity<br>
              (Steam) Windows, Mac, Linux, Steam Deck
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