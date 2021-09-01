<?php include_once 'includes/head.php';?>
  <body>
    <!-- Include navbar -->
    <?php include_once 'includes/navbar.php';?>

    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="font-weight-bold mt-3"><?= $lang['myProjects']; ?></h1>
          <h3>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            Een overzicht van projecten die ik heb gedaan of waar ik aan bezig ben.
          <?php } else { ?>
            An overview of various projects that I have completed or am working on.
          <?php } ?>
          </h3>
        </div>
      </div>
      <!-- School -->
      <div class="row" id="school" name="school">
        <div class="col-12">
          <h4 class="font-weight-bold my-3 txt-blue text-right"><?= $lang['schoolProjects']; ?></h4>
          <div class="spacer-tiny bg-blue mb-3"></div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/live_inc.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/live_inc/header.png" class="img-fluid" alt="Live inc">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Live inc.</h5>
              <p>3D pc game</p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/bob_the_robber.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/bob_the_robber/header.jpg" class="img-fluid" alt="Bob the robber">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Bob the Robber</h5>
              <p>2D mobile game</p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/city_overflow.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/city_overflow/city_overflow_1.png" class="img-fluid" alt="Live inc">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>City Overflow</h5>
              <p>3D pc game tech demo</p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/classroomVR.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/school/classroomVR/header.jpg" class="img-fluid" alt="ClassroomVR">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>ClassroomVR</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                VR applicatie voor digitaal lesgeven
              <?php } else { ?>
                VR application for digital learning
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/deltec.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/deltec/header.png" class="img-fluid" alt="Deltec robot">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Deltec telepresence robot</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Telepresence robot voor langdurig zieke studenten
              <?php } else { ?>
                Telepresence robot for long-term sick students
              <?php } ?>
              </p>
              <p></p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/quicklease.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/leaseplan_quicklease_fleet/header.jpg" class="img-fluid" alt="Leaseplan Quicklease Fleet">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Leaseplan Quickles Fleet</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                AI gestuurd optimalisatie systeem voor fiets-leasen
              <?php } else { ?>
                AI driven optimisation system for bike leasing
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/super_bespaar_app.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/super_bespaar_app/header.jpg" class="img-fluid" alt="Super bespaar app">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Super bespaar app</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Bespaar het milieu door bewust te kopen
              <?php } else { ?>    
                Save the environment by buying consciously
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/markthal.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/cmgt_markthal/header.jpg" class="img-fluid" alt="CMGT Markthal">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>CMGT Markthal</h5>
              <p>Collectieve intelligentie in Minecraft</p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/katvis_evolutie.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/katvis_evolutie/header.jpg" class="img-fluid" alt="Katvis Evolutie">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Katvis Evolutie</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Leer over evolutie theorie doormiddel van een spelletje
              <?php } else { ?>
                Learn about evolution theory through a game
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/dakpark.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/dakpark/header.jpg" class="img-fluid" alt="Interactive Installation Darkpark">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Interactive Installation Darkpark</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Interactieve installatie op het Darkpark in Rotterdam
              <?php } else { ?>
                Interactive installation at the Darkpark in Rotterdam
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/reserveringssysteem.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/reserveringssysteem/header.jpg" class="img-fluid" alt="Reserveringssysteem">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Reserveringssysteem</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Website met reserverings en rooster systeem voor muziekles
              <?php } else { ?>
                Website with reservation and schedule system for music lessons
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/kies_kleurig.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/kies_kleurig/header.jpg" class="img-fluid" alt="Kies Kleurig">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Kies Kleurig</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Spelletje voor kleuters
              <?php } else { ?>
                Game for toddlers
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/suggist.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/suggist/header.jpg" class="img-fluid" alt="Suggist">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Suggist</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Suggesteer menu items voor bij jouw biertje
              <?php } else { ?>
                Suggest menu items for your beer
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/school/useless_machine.php?lang=<?= $_SESSION['lang'];?>">
            <img src="./content/projecten/school/useless_machine/header.png" class="img-fluid" alt="Useless machine">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Useless machine</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Een nutteloze machine
              <?php } else { ?>
                A useless machine
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
      </div>

      <!-- Hardware -->
      <div class="row" id="hardware" name="hardware">
        <div class="col-12">
          <h4 class="font-weight-bold my-3 txt-blue text-right"><?= $lang['hardwareProjects']; ?></h4>
          <div class="spacer-tiny bg-blue mb-3"></div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/hardware/smart_instrument.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/hardware/smart_instrument/header.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Smart instrument</h5>
              <p>Ultrasonic synthesiser</p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/hardware/control_panel.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/hardware/control_panel/header.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Star Citizen Control Panel V1</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Knoppen paneel voor het spel Star Citizen
              <?php } else { ?>
                Button panel for the game Star Citizen
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/hardware/racing_dash.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/hardware/racing_dash/header.png" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Racing dashboard</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Hardware display voor in-game racing informatie
              <?php } else { ?>
                Hardware display for in-game racing information
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
      </div>

      <!-- 3D printen -->
      <div class="row" id="3D_print" name="3D_print">
        <div class="col-12">
          <h4 class="font-weight-bold my-3 txt-blue text-right"><?= $lang['3DPrintProjects']; ?></h4>
          <div class="spacer-tiny bg-blue mb-3"></div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/3d_printing/rovexyz.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/3d_printer/rovexyz/header.png" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>RovexYZ 3D printer</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Mijn eigen ontworpen CoreXY 3D printer
              <?php } else { ?>
                My custom designed CoreXY 3D printer
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/3d_printing/nas.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/3d_printer/nas/header.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>DIY NAS</h5>
              <p>Raspberry Pi Open Source NAS</p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/3d_printing/890_jump.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/3d_printer/890_jump/890_jump (3).jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Star Citizen 890 Jump</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                3D geprint ruimteschip uit het spel Star Citizen
              <?php } else { ?>
                3D printed spaceship from the game Star Citizen
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/3d_printing/ace_of_spades.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/3d_printer/ace_of_spades/header.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Destiny Ace of Spades</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                3D geprinte model uit het spel Destiny
              <?php } else { ?>
                3D printed model from the game Destiny
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/3d_printing/nx01_warp_core.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/3d_printer/nx01_warp_core/header.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Star Trek Enterprise NX-01 warp core</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Warp core van de Enterprise NX-01
              <?php } else { ?>
                Warp core from the starship Enterprise NX-01
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/3d_printing/ncc_1701_d_warp_core.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/3d_printer/ncc_1701_d_warp_core/header.png" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Star Trek Enterprise NCC 1701D Warp core</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Warp core van de Enterprise NCC 1701D
              <?php } else { ?>
                Warp core from the Starship Enterprise NCC 1701D
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
      </div>

      <!-- Stage -->
      <div class="row" id="intership" name="internship">
        <div class="col-12">
          <h4 class="font-weight-bold my-3 txt-blue text-right"><?= $lang['internshipProjects']; ?></h4>
          <div class="spacer-tiny bg-blue mb-3"></div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/internship/inspector_gadget.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/internship/inspector_gadget/insepctor_gadget_2.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Inspector Gadget</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                API generated debugger interface voor Philips Hue
              <?php } else { ?>
                API generated debugger interface for Philips Hue
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/internship/hueigi_party.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/internship/huegi_party/header.png" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Hueigi Party</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Simon Zegt spelletje voor Philips Hue lampen
              <?php } else { ?>
                Simon Says game for Philups Hue lights
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/internship/qerst.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/internship/qerst_game/header.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Qerst game</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                IOT water fontein spelletje
              <?php } else { ?>
                IOT water fountain game
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/internship/is_it_glass.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/internship/is_it_glass/header.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Is It Glass?</h5>
              <p>Simone Gierts W00tCamp project</p>
            </div>
          </a>
        </div>
      </div>

      <!-- Misc -->
      <div class="row" id="misc" name="misc">
        <div class="col-12">
          <h4 class="font-weight-bold my-3 txt-blue text-right"><?= $lang['otherProjects']; ?></h4>
          <div class="spacer-tiny bg-blue mb-3"></div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/misc/quest_for_redemption.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/misc/quest_for_redemption/quest_for_redemption_1.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Quest for Redemption</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                MMO game in ontwikkeling
              <?php } else { ?>
                MMO game in development
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/misc/lingehaven.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/misc/lingehaven/header.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Lingehaven Teller</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Boten teller bij de Lingehaven Gorinchem
              <?php } else { ?>
                Boat counter for the Lingehaven in Gorinchem
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/misc/dansstudio.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/misc/dansstudio_jolynda/header.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Dansstudio Jolynda website</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                De website van Dansstudio Jolynda
              <?php } else { ?>
                The website for Dansstudio Jolynda
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/misc/gemotoriseerde_fiets.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/misc/gemotoriseerde_fiets/header.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Gemotoriseerde fiets</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                DIY electromotor op een fiets monteren
              <?php } else { ?>
                DIY electromotor on a bicycle
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/misc/gemotoriseerde_kart.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/misc/kart_auto/header.png" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Go kart</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                DIY electromotor op een zelfgemaakt go kart
              <?php } else { ?>
                DIY electromotor on a homemade go kart
              <?php } ?>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 p-0 infobox">
          <a href="./projects/misc/erasmus_campus.php?lang=<?= $_SESSION['lang'];?>" class="infobox">
            <img src="./content/projecten/misc/eur_campus/erasmus_campus_2.jpg" class="img-fluid" alt="Project">
            <div class="font-weight-bold text-left text-dark mx-1 mt-1">
              <h5>Erasmus campus project</h5>
              <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
                Volledige Erasmus campus nagemaakt in Minecraft
              <?php } else { ?>
                Full Erasmus campus build to scale in Minecraft
              <?php } ?>
              </p>
            </div>
          </a>
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
  </body>
  <script>
      $(document).ready(function () {
        $('#nav_home').removeClass('active');
        $('#nav_projects').addClass('active');
        $('#nav_contact').removeClass('active');
      });
    </script>
</html>