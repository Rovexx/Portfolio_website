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
              <a href="https://www.youtube.com/watch?v=R0EKed7Squc&list=PLql4MkHYnMEtQP7HpudUVE7OzyDsVmMfO&ab_channel=MaestroGames" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_youtube.svg">Youtube</a>
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
          </div>
        </div>
        <!-- Links -->
        <div class="row justify-content-md-center text-light">
          <div class="col-sm">
            <p>
              Informatie over de game is op verschillende locaties te vinden:
            </p>
            <ul class="list-unstyled text-small">
              <li><a href="https://project.cmi.hr.nl/2020_2021/game_maestro/" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_internet.svg">Website</a></li>
              <li><a href="https://store.steampowered.com/app/1486620/Live_Inc/" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_steam.svg">Steam</a></li>
              <li><a href="https://www.youtube.com/channel/UC1Z0qmqvbovn0bYrfSsGbrg" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_youtube.svg">Youtube</a></li>
              <li><a href="https://discord.gg/yWEZ2SHhVF" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_discord.svg">Discord</a></li>
              <li><a href="https://www.instagram.com/maestrogames2020/" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_instagram.svg">Instagram</a></li>
              <li><a href="https://twitter.com/MaestroGames10" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_twitter.svg">Twitter</a></li>
              <li><a href="https://www.reddit.com/r/MaestroGames/" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_reddit.svg">Reddit</a></li>
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
              Minor<br>
              C#<br>
              3 maanden<br>
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