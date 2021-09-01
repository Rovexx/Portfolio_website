<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Quest for Redemption</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>MMO game in ontwikkeling</h3>
          <?php } else { ?>
            <h3>MMO game in development</h3>
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
              Tijdens de minor Game Design & Development heb ik met een aantal studenten besloten om een eigen gamestudio te starten om een eigen game te maken als hobbie.
              Het doel van dit project was om ervaring op te doen en om een gave game te bouwen. We willen de game klaarmaken voor een kickstarter met in ons achterhoofd dat het lastig is om een succesvolle game te maken.
              Het team doet het nu als hobbie maar als we er in de toekomst geld aan verdienen is dit mooi meegenomen.<br>
              <br>
              <span class="font-weight-bold">Het concept</span><br>
              De game is een MMO waarbij we de combat heel fysiek willen houden. In tegenstelling tot veel andere MMO's willen wij dus dat de spelers op verschillende manieren contact kunnen maken met de vijanden en tactisch moeten denken om het gevecht te winnen.
              Hierbij is het een open world game met verschillende gebieden met verschillende niveaus van vijanden. Wij focussen ons eerst op het starters gebied om hier de game mechanics goed uit te kunnen werken.
              Hiernaast hebben wij ook professions waarbij de spelers bijvoorbeeld taken kunnen voltooien om zelf armor of wapens te kunnen maken.<br>
              <br>
              <span class="font-weight-bold">Mijn taken</span><br>
              Voor dit project ben ik in eerste instantie verantwoordelijk voor de multiplayers in de game. Zo heb ik de workflow al opgezet dat iedere speler zijn eigen wereld kan hosten en andere kunnen joinen.
              Hierbij houd ik mij ook bezig met het networken van de verschillende gameplay mechanics in de game.<br>
              Naast dit houdt ik mij bezig met het programmeren van nieuwe gameplay mechanics, het maken van shaders in shadergraph en heb ik recent mij gericht op de verlichting in de game.<br>
              Voor de rest van het team heb ik ook de code conventions opgezet en houdt ik mij bezig met het stroomlijnen van de workflow met Unity en GitHub.
            </p>
          <?php } else { ?>
            <p>
              During the minor Game Design & Development, I and a number of students decided to start their own game studio to make their own game as a hobby.
              The goal of this project was to gain experience and build a cool game. We want to prepare the game for a kickstarter, bearing in mind that it is difficult to make a successful game.
              The team now does it as a hobby, but if we earn money from it in the future, this is a nice bonus.<br>
              <br>
              <span class="font-weight-bold">The concept</span><br>
              The game is an MMO where we want to keep the combat very physical. So unlike many other MMOs, we want the players to be able to interact with the enemies in different ways and think tactically to win the fight.
              It is an open world game with different areas with different levels of enemies. We first focus on the starter area to be able to work out the game mechanics well here.
              In addition, we also have professions where the players can, for example, complete tasks to make armor or weapons themselves.<br>
              <br>
              <span class="font-weight-bold">My tasks</span><br>
              For this project I am primarily responsible for the multiplayers in the game. For example, I have already set up the workflow that every player can host their own world and join others.
              I am also involved in networking the various gameplay mechanics in the game.<br>
              In addition to this, I am involved in programming new gameplay mechanics, creating shaders in shadergraph and recently focused on the lighting in the game.<br>
              For the rest of the team, I've also set up code conventions and I'm working on streamlining the workflow with Unity and GitHub.
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
              <li><a href="https://www.youtube.com/channel/UCKFyEAjDzH8FVCi-5W89CSA" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_youtube.svg">Youtube</a></li>
              <li><a href="https://discord.gg/64tdSj5​" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_discord.svg">Discord</a></li>
              <li><a href="https://www.instagram.com/treplaconstudio/" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_instagram.svg">Instagram</a></li>
              <li><a href="https://twitter.com/TreplaconStudio" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/rovex.nl/content/logos/icon_twitter.svg">Twitter</a></li>
            </ul>
          </div>
        </div>

        <!-- Video -->
        <div class="background-blue">
          <div class="col-md-10 offset-md-1 justify-content-center">
            <div class="video-container">
              <iframe 
                title="Quest for redemption devlog 1"
                src="https://www.youtube.com/embed/op2wC4UTpI4?list=PLIfdGCb8ul1KKNYd4z_kk66IKSTcOq_wR" 
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
              <img src="/rovex.nl/content/projecten/misc/quest_for_redemption/quest_for_redemption_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/misc/quest_for_redemption/quest_for_redemption_2.jpg" class="d-block w-100">
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
              Hobby<br>
              C#<br>
              -<br>
              Unity<br>
              Steam Windows
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