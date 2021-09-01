<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Live inc.</h1>
          <h3>3D multiplayer heist stealth action game</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <p>
              Live inc. is een pc game die ik meegeholpen heb te ontwikkelen tijden mijn minor Game Design & Development. Deze game heb ik in een team van 16 studenten gemaakt waarbij ik een van de programmeurs was.<br>
              Ik ben bij dit project voornramelijk verantwoordelijk geweest voor de multiplayer en stem communicatie. Hiernaast heb ik ook verschillende gameplay mechanieken geimplementeerd en de verlichting binnen de game gedaan.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Live inc. is een 2 vs 2 multiplayer game gezet in de jaren 80. Hierbij zijn 2 teams, de infiltrators die in een kantoor van de corporatie Live Inc in moeten breken om bewijs te verzamelen dat het bedrijf slechte bedoelingen heeft.<br>
              Het andere team neemt de rol in van Live Inc zijn beveiliging en moet het ander team te pakken zien te krijgen.<br>
              <br>
              <span class="font-weight-bold">Mijn taken</span><br>
              Tijdens dit project heb ik gekeken hoe ik multiplayer mogelijk kon maken in een Unity game. Ik heb hiervoor gekozen om gebruik te maken van SteamWorks en Mirror.
              Dit zijn frameworks waarmee het mogelijk is om zonder een server te hoeven hosten, of je speler port-forwarding te laten doen, een multiplayer spel te maken.<br>
              <br>
              Voor de stem communicatie in de game heb ik gebruik gemaakt van Dissonance, een gratis framework voor communicatie dat samen werkt met Mirror en SteamWorks.<br>
              <br>
              Naast de multiplayer en stem communicatie heb ik ook verschillende gameplay mechanics geimplementeerd in de game, het menu gemaakt en de code conventies en workflow opgezet voor de rest van het team.
              Met de conventies en workflow documenten heb ik het zo makkelijk mogelijk gemaakt om de eisen van de game designers om te kunnen zetten in een implementatie die de programmeurs konden maken.
              In dit document werden verschillende dingen benoemd van welke Unity versie we gebruiken tot syntax en handleidingen voor het gebruiken en maken van GitHub issues en Pull Requests.<br>
              <br>
              Voor deze game heb ik ook 2 soundtracks gemaakt die terug te vinden zijn op het 
              <a href="https://www.youtube.com/watch?v=R0EKed7Squc&list=PLql4MkHYnMEtQP7HpudUVE7OzyDsVmMfO&ab_channel=MaestroGames" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_youtube.svg">Youtube</a>
              kanaal van de game.
              <h3>Leerdoelen</h3>
              <p>
                Ervaring opdoen met Unity gameontwikkeling voor pc.<br>
                Multiplayer in Unity met SteamWorks.<br>
                Stem communicatie in Unity.<br>
                Ervaring opdoen met werken in een groter team voor gamedevelopment<br>
              </p>
              <br>
            </p>
          <?php } else { ?>
            <p>
              Live Inc. is a PC game that I helped develop during my minor Game Design & Development. I made this game in a team of 16 students where I was one of the programmers.<br>
              On this project I was mainly responsible for the multiplayer and voice communication. In addition, I also implemented various gameplay mechanics and implemented the lighting within the game.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Live Inc. is a 2 vs 2 multiplayer game set in the 80s. It involves 2 teams, the infiltrators who have to break into an office of the corporation Live Inc to collect evidence that the company has bad intentions.<br>
              The opposing team takes on the role of Live Inc.'s security and has to catch the opposing team.<br>
              <br>
              <span class="font-weight-bold">Mijn taken</span><br>
              During this project I looked at how I could implement multiplayer in a Unity game. I chose to use SteamWorks and Mirror for this purpose.
              These are frameworks that make it possible to create a multiplayer game without having to host a server, or let your player do port-forwarding.<br>
              <br>
              For the voice communication in the game I used Dissonance, a free framework for communication that works together with Mirror and SteamWorks.<br>
              <br>
              Besides the multiplayer and voice communication I also implemented various gameplay mechanics in the game, created the menu and set up the code conventions and workflow for the rest of the team.
              With the conventions and workflow documents I made it as easy as possible to convert the requirements of the game designers into an implementation that the programmers could make.
              In this document various things were mentioned, from which Unity version we are using to syntax and guides for using and creating GitHub issues and Pull Requests.<br>
              <br>
              For this game I also made 2 soundtracks that can be found on the 
              <a href="https://www.youtube.com/watch?v=R0EKed7Squc&list=PLql4MkHYnMEtQP7HpudUVE7OzyDsVmMfO&ab_channel=MaestroGames" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_youtube.svg">Youtube</a>
              channel of the game.
              <h3>Learning goals</h3>
              <p>
                Get experience with Unity game development for PC.<br>
                Multiplayer in Unity with SteamWorks.<br>
                Voice communication in Unity.<br>
                Gain experience working in a larger game development team<br>
              </p>
              <br>
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
              <li><a href="https://project.cmi.hr.nl/2020_2021/game_maestro/" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_internet.svg">Website</a></li>
              <li><a href="https://store.steampowered.com/app/1486620/Live_Inc/" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_steam.svg">Steam</a></li>
              <li><a href="https://www.youtube.com/channel/UC1Z0qmqvbovn0bYrfSsGbrg" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_youtube.svg">Youtube</a></li>
              <li><a href="https://discord.gg/yWEZ2SHhVF" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_discord.svg">Discord</a></li>
              <li><a href="https://www.instagram.com/maestrogames2020/" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_instagram.svg">Instagram</a></li>
              <li><a href="https://twitter.com/MaestroGames10" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_twitter.svg">Twitter</a></li>
              <li><a href="https://www.reddit.com/r/MaestroGames/" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_reddit.svg">Reddit</a></li>
            </ul>
          </div>
        </div>
        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Live Inc trailer"
                src="https://www.youtube.com/embed/vpqIV8T2vDE" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
        <br>
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
              Minor<br>
              C#<br>
              3 <?= $lang['months']; ?><br>
              Unity<br>
              Steam
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