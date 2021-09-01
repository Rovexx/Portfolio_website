<?php include_once '../../includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once '../../includes/navbar.php';?>

    <div class="container my-5">
      <div class="row">
        <div class="col">
          <h1>RovexYZ 3D printer</h1>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            <h3>Mijn eigen ontworpen CoreXY 3D printer</h3>
          <?php } else { ?>
            <h3>My custom designed CoreXY 3D printer</h3>
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
              Ik ben gek op 3D printen en dit is uitgegroeit tot mijn favorite hobby. Maar met deze passie kwam ook een verlangen naar een printer waarmee ik al mijn projecten kon maken.<br>
              Ik heb in het verleden al 2 DIY kits in elkaar gezet, afgesteld en dit zijn echte werkpaarden geworden. Maar ik wilde een printer die ook super grote dingen zou kunnen printen met hoog detail en snel.
              En dit allemaal met een laag prijskaartje.<br>
              Er zat dus toen maar 1 ding op, ik ontwerp en bouw hem zelf.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              Ik heb enorm veel onderzoek gedaan naar de verschillende 3D printers die er zijn en wat voor soort mechanieken en onderdelen deze gebruiken. Vervolgens ben ik gaan kijken naar mijn eisen en welke onderdelen hier goed bij pasten.<br>
              Ik heb vervolgens een eisen lijst opgesteld voor mijn printer:<br>
              - Hij moet een groot print oppervlakte hebben.<br>
              - Hij moet een hoge print resolutie hebben.<br>
              - hij moet stabiel zijn en snel kunnen printen.<br>
              - Hij moet een groot scherm hebben waarmee ik hem kan bedienen.<br>
              - Hij moet een groot verwarmd print bed hebben.<br>
              <br>
              Met deze eisen ben ik hardware gaan zoeken die aan de eisen kan voldoen en ben ik de printer eerst volledig in CAD gaan ontwerpen.<br>
              Ik heb gekozen voor een CoreXY design om snel mee te kunnen printen en vnawege het stabiele frame.
              Ik heb in Fusion 360 mijn complete printer gemaakt zodat ik een complete onderdelen lijst krijg en gelijk kon testen of alle onderdelen sterk genoeg waren. 
              En vanwege de beweging mogelijkheden in Fusion 360 had ik ook de mogelijkheid om alle mechanica te testen in software voordat ik het daadwerkelijk ging bouwen.<br>
              <br>
              <span class="font-weight-bold">Het proces</span><br>
              Ik heb de volledige printer met alle onderdelen in Fusion 360 gemaakt. Ik heb toen een BOM (bill of materials) lijst gemaakt zodat ik kon gaan uitzoeken waar ik alles ging bestellen.
              Ik heb voor 80% van de onderdelen Aliexpress gekozen omdat mijn doel was om deze printer zo goedkoop mogelijk te maken.<br>
              <br>
              Nadat alles besteld was en ik een hilarisch grote stapen aan china pakketjes had kon het bouw proces beginnen.
              Omdat ik de volledige machine al in CAD had ontworpen was dit gedeelte vrij simpel en er waren maar een paar kleine dingetjes die niet goed paste en kleine aanpassingen vereisten.<br>
              Na de firmware goed ingesteld te hebben, wat heel snel ging vanwege de gemakkelijke RepRap firmware configurator, was het tijd voor de 1e test van de onderdelen.
              Alles werkte! en dus de 1e testprint kon gestart worden. En ook deze print ging fantastisch!<br>
              <br>
              Een super geslaagd project dus. Ik heb enorm veel geleerd van 3D printer mechanica, CAD ontwerp, electra en nog veel meer.<br>
              En dit alles voor de super betaalbare prijs van 1100 Euro.
            </p>
            <h3>Features</h3>
            <p>
              Meerdere beveiligingen ingebouwd tegen kortsluiten, thermal runaway, etc.<br>
              CoreXY design voor stabiel snel printen tot wel 600mm/s<br>
              Groot print oppervlakte van 550x350x600mm<br>
              Duet 2 Wifi met 7.0 inch touchscreen<br>
              E3D V6 met Titan aero extruder<br>
              220V 1000W verwarmd bed (20s opwarmen voor 70*C)
            </p>
          <?php } else { ?>
            <p>
              I love 3D printing and this has become my favorite hobby. But with this passion also came a desire for a printer with which I could make all my projects.<br>
              I have already assembled and adjusted 2 DIY kits in the past and these have become real workhorses. But I wanted a printer that could also print super large things with high detail and fast.
              And all this with a low price tag.<br>
              So there was only 1 thing to do then, I design and build it myself.<br>
              <br>
              <span class="font-weight-bold">Concept</span><br>
              I have done a lot of research into the different 3D printers out there and what kind of mechanisms and parts they use. Then I started looking at my requirements and which parts suited them well.<br>
              I then drew up a list of requirements for my printer:<br>
              - It must have a large print area.<br>
              - It must have a high print resolution.<br>
              - it must be stable and be able to print quickly.<br>
              - It must have a big screen that I can control it.<br>
              - He must have a large heated print bed.<br>
              <br>
              With these requirements I started looking for hardware that could meet the requirements and I first started designing the printer completely in CAD.<br>
              I chose a CoreXY design to be able to print quickly and because of the stable frame.
              I made my complete printer in Fusion 360 so that I get a complete parts list and could immediately test whether all parts were strong enough.
              And because of the motion capabilities in Fusion 360, I also had the opportunity to test all the mechanics in software before actually building it.<br>
              <br>
              <span class="font-weight-bold">The process</span><br>
              I made the complete printer with all parts in Fusion 360. I then made a BOM (bill of materials) list so that I could find out where I was going to order everything.
              I chose Aliexpress for 80% of the parts because my goal was to make this printer as cheap as possible.<br>
              <br>
              After everything was ordered and I had a hilariously large amount of china packages, the building process could begin.
              Since I had already designed the entire machine in CAD, this part was quite simple and there were just a few minor things that didn't fit well and required minor adjustments.<br>
              After setting up the firmware correctly, which went very quickly because of the easy RepRap firmware configurator, it was time for the 1st test of the components.
              Everything worked! and so the 1st test print could be started. And this print also went fantastic!<br>
              <br>
              So a very successful project. I learned a lot from 3D printer mechanics, CAD design, electrical and much more.<br>
              And all this for the super affordable price of 1100 Euro.
            </p>
            <h3>Features</h3>
            <p>
              Multiple protections built in against short circuit, thermal runaway, etc.<br>
              CoreXY design for stable fast printing up to 600mm/s<br>
              Large print area of ​​550x350x600mm<br>
              Duet 2 Wifi with 7.0 inch touchscreen<br>
              E3D V6 with Titan aero extruder<br>
              220V 1000W heated bed (20s heat up for 70*C)
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
            <li data-target="#carouselIndicators" data-slide-to="3"></li>
            <li data-target="#carouselIndicators" data-slide-to="4"></li>
            <li data-target="#carouselIndicators" data-slide-to="5"></li>
            <li data-target="#carouselIndicators" data-slide-to="6"></li>
            <li data-target="#carouselIndicators" data-slide-to="7"></li>
            <li data-target="#carouselIndicators" data-slide-to="8"></li>
            <li data-target="#carouselIndicators" data-slide-to="9"></li>
            <li data-target="#carouselIndicators" data-slide-to="10"></li>
            <li data-target="#carouselIndicators" data-slide-to="11"></li>
            <li data-target="#carouselIndicators" data-slide-to="12"></li>
            <li data-target="#carouselIndicators" data-slide-to="13"></li>
            <li data-target="#carouselIndicators" data-slide-to="14"></li>
            <li data-target="#carouselIndicators" data-slide-to="15"></li>
            <li data-target="#carouselIndicators" data-slide-to="16"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_4.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_5.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_6.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_7.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_8.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_9.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_10.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_11.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_12.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_13.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_14.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_15.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_16.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/rovexyz_17.png" class="d-block w-100">
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
              -<br>
              400 <?= $lang['hours']; ?><br>
              Fusion 360<br>
              Duet
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