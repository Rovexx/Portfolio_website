<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>Quest for Redemption</h1>
          <h3>MMO game in ontwikkeling</h3>
        </div>
      </div>
    </div>
    <div class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col mt-3 text-light">
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
          </div>
        </div>
        <!-- Links -->
        <div class="row justify-content-md-center text-light">
          <div class="col-sm">
            <p>
              Informatie over de game is op verschillende locaties te vinden:
            </p>
            <ul class="list-unstyled text-small">
              <li><a href="https://www.youtube.com/channel/UCKFyEAjDzH8FVCi-5W89CSA" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_youtube.svg">Youtube</a></li>
              <li><a href="https://discord.gg/64tdSj5​" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_discord.svg">Discord</a></li>
              <li><a href="https://www.instagram.com/treplaconstudio/" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_instagram.svg">Instagram</a></li>
              <li><a href="https://twitter.com/TreplaconStudio" rel="noopener noreferrer" target="_blank" class="text-light font-weight-bold"><img class="socialicons pr-2" src="/content/logos/icon_twitter.svg">Twitter</a></li>
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
              <img src="/content/projecten/misc/quest_for_redemption/quest_for_redemption_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/content/projecten/misc/quest_for_redemption/quest_for_redemption_2.jpg" class="d-block w-100">
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
              Hobby<br>
              C#<br>
              Bezig<br>
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