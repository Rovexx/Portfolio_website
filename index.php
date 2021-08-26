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

    <!-- Over mij -->
    <div class="bg-blue">
      <div class="container">
        <div class="row text-light">
          <div class="col-12 mt-3">
            <h1 class="font-weight-bold"><?= $lang['aboutMe']; ?></h1>
          </div>
          <div class="col-md">
            <h5 class="font-weight-bold"><?= $lang['background']; ?></h5>
            <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
              Vanaf jongs af aan ben ik al bezig met electronica en dingen doen met mijn handen.
              Mijn eerste herinnering is al dat ik als peuter met een schroevendraaier in het stopcontact zat om langs de kinderbeveiliging te komen.
              Deze ontdeugende actie is misschien de start geweest voor mijn nieuwschierigheid om te experimenteren met hard- en software.
              Op de basisschool was ik al bekend als technische dienst en op de middelbare school heb ik tijdens Technasium al veel gave projecten kunnen maken voor bedrijven.
              Dit is uitgegroeid tot een passie voor dingen ontwerpen en maken inclusief games.
              <?php } else { ?>
              From an early age I have been tinkering with electronics and doing things with my hands.
              My first memory is that as a toddler I used a screwdriver in a wall socket to get past the child lock.
              This naughty move may have started my curiosity to experiment with hardware and software.
              At primary school I was already known as the resitend technical service and in secondary school I was already able to make many cool projects for companies during Technasium.
              This has grown into a passion for designing and making things including games.
              <?php } ?>
            </p>
          </div>
          <div class="col-md">
            <h5 class="font-weight-bold"><?= $lang['myPassions']; ?></h5>
            <p>
              <?php if ($_SESSION['lang'] == "nl") { ?>
              Mijn wil om met mijn handen bezig te zijn is uitgegroeid tot een passie voor veel dingen.
              Zo ben ik veel bezig met Arduinos, sensoren en actuatoren om gave projecten te maken.
              De afgelopen jaren heb ik ook een passie voor 3D printen gekregen. Dit is begonnen met een 3D printer kit in elkaar zetten en upgraden.
              Na 2 van deze DIY kits te hebben gehad besloot ik om mijn eigen 3D printer te ontwerpen en te bouwen!
              Mijn doel is om te leren door te experimenteren met hardware en software door gave projecten te maken.

              Hiernaast ben ik ook een pc enthusiast die computers samenstelt en bouwt voor mijzelf en vrienden.
              Natuurlijk hou ik ook van (VR-)gamen en de laatste tijd ben ik in de wereld van (VR-)games maken gedoken,
              waarbij ik zowel een android game als een multiplayer pc game heb uitgegeven tijdens mijn Minor Game Design & Development.
              Nu blijf ik mijn vaardigheden als gameprogrammeur ontwikkelen door verschillende games te maken, zowel als hobbyproject als freelancer.
              <?php } else { ?>
              My will to work with my hands has grown into a passion for many things.
              I spend a lot of time with Arduinos, sensors and actuators to make cool projects.
              In recent years I have also developed a passion for 3D printing. This started with assembling and upgrading a 3D printer kit.
              After having had 2 of these DIY kits I decided to design and build my own 3D printer!
              My goal is to learn by experimenting with hardware and software by creating cool projects.

              In addition, I am also a PC enthusiast who assembles and builds computers for myself and friends.
              Of course I also like (VR) gaming and lately I've been diving into the world of making (VR) games,
              where I published both an android game and a multiplayer pc game during my Minor Game Design & Development.
              Now I continue to develop my skills as a game programmer by making various games, both as hobby projects as well as a freelancer.
              <?php } ?>
              </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Educatie -->
    <div class="container">
      <div class="row">
        <!-- Educatie -->
        <div class="col-md mt-3">
          <h1 class="txt-blue-darker font-weight-bold">EDUCATIE</h1>
          <h2 class="txt-blue">Wat ik geleerd heb</h2>
          <p>
            <span class="font-weight-bold">2017 - 2021</span><br>
            Hogeschool Rotterdam - Rotterdam Wijnhaven<br>
            Creative Media and Game Technologies (CMGT)| Bachelor of Science
          </p>
          <p>
            <span class="font-weight-bold">2012 - 2017</span><br>
            Fortes Lyceum - Gorinchem Wijdschildlaan<br>
            HAVO | Natuur en Gezondheid
          </p>
          <p>
            <span class="font-weight-bold">2012 - 2016</span><br>
            Fortes Lyceum - Gorinchem Wijdschildlaan<br>
            Technasium | Onderzoek & Ontwerpen
          </p>
        </div>
        <!-- Ervaring -->
        <div class="col-md mt-3">
          <h1 class="txt-blue-darker font-weight-bold">ERVARING</h1>
          <h2 class="txt-blue">Waar ik gewerkt heb</h2>
          <p>
            <span class="font-weight-bold">Nov. 2013 - Feb. 2021</span><br>
            Verhuisboxen BV. | Logistiek medewerker
          </p>
          <p>
            <span class="font-weight-bold">Sept. - Dec. | 2019</span><br>
            <a href="https://www.q42.nl/werk/philips-hue"><span style="color: #84bc2d;" class="font-weight-bold">Q42</span></a> | Stagair medewerker (Philips Hue)
          </p>
          <p>
            <span class="font-weight-bold">11 dagen/jaar | 2015, 2016, 2018</span><br>
            Speelin | Vrijwilliger huttenbouw
          </p>
        </div>
      </div>
    </div>
    
    <!-- Portfolio -->
    <div class="bg-blue">
      <div class="container-flex">
        <div class="row justify-content-center">
          <div class="text-center">
            <h1 class="txt-name">PORTFOLIO</h1>
            <h2 class="text-light">RECENTE PROJECTEN
              <span class="txt-blue-darkest">|</span>
              <a href="./projects.php" class="text-muted">MEER
                <i class="material-icons">arrow_forward_ios</i>
              </a>
            </h2>
          </div>
        </div>
        <div class="row justify-content-center m-5">
          <!-- project 1 -->
          <div class="col-md-5 col-xl m-1 mb-3 bg-white text-center shadow infobox">
            <h2 class="my-2">School</h2>
            <img src="/content/projecten/school/live_inc/header.png" class="img-fluid rounded" alt="Live Inc.">
            <p>Live Inc.</p>
            <a type="button" class="btn btn-outline-primary btn-lg btn-block mb-3 text-dark" href="./projects.php#school">MEER
              <i class="material-icons align-middle">more_horiz</i>
            </a>
          </div>
          <!-- project 2 -->
          <div class="col-md-5 col-xl m-1 mb-3 bg-white text-center shadow infobox">
            <h2 class="my-2">Hobby</h2>
            <img src="/content/projecten/misc/kart_auto/header.png" class="img-fluid rounded" alt="ClassroomVR">
            <p>Kart auto</p>
            <a type="button" class="btn btn-outline-primary btn-lg btn-block mb-3 text-dark" href="./projects.php#misc">MEER
              <i class="material-icons align-middle">more_horiz</i>
            </a>
          </div>
          <!-- project 3 -->
          <div class="col-md-5 col-xl m-1 mb-3 bg-white text-center shadow infobox">
            <h2 class="my-2">Electronica</h2>
            <img src="/content/projecten/hardware/racing_dash/header.png" class="img-fluid rounded" alt="ClassroomVR">
            <p>Simpit dashboard</p>
            <a type="button" class="btn btn-outline-primary btn-lg btn-block mb-3 text-dark" href="./projects.php#hardware">MEER
              <i class="material-icons align-middle">more_horiz</i>
            </a>
          </div>
          <!-- project 4 -->
          <div class="col-md-5 col-xl m-1 mb-3 bg-white text-center shadow infobox">
            <h2 class="my-2">3D printen</h2>
            <img src="/content/projecten/3d_printer/rovexyz/header.png" class="img-fluid rounded" alt="ClassroomVR">
            <p>Eigen 3D printer</p>
            <a type="button" class="btn btn-outline-primary btn-lg btn-block mb-3 text-dark" href="./projects.php#3D_print">MEER
              <i class="material-icons align-middle">more_horiz</i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Ervaring -->
    <div class="container">
      <h1 class="txt-blue">VAARDIGHEDEN EN COMPETENTIES</h1>
      <p class="txt-blue-dark">Ik heb met verschillende dingen ervaring. Hieronder een overzichtje van verschillende vaardigheden en wat ik er mee gedaan heb.</p>
      <!-- Programmeer talen -->
      <div class="row">
        <p>
          <span class="font-weight-bold txt-blue">Programmeertalen</span><br>
          Tijdens het programmeren probeer ik altijd nieuwe technieken te leren en probeer ik aan veiligheid te denken
        </p>
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">Taal</th>
              <th scope="col">Kennisniveau</th>
              <th scope="col">Aantal projecten</th>
              <th scope="col">Motivatie</th>
              <th scope="col">Programmeer plezier</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Java</th>
              <td>Basis</td>
              <td>1</td>
              <td>School</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">PHP</th>
              <td>Gemiddeld</td>
              <td>+/- 5</td>
              <td>School | Eigen interesse | Professioneel</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">SQL</th>
              <td>Gemiddeld</td>
              <td>+/- 5</td>
              <td>School | Eigen interesse | Professioneel</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">HTML</th>
              <td>Gemiddeld</td>
              <td>+/- 8</td>
              <td>School | Eigen interesse | Professioneel</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">CSS</th>
              <td>Basis</td>
              <td>+/- 8</td>
              <td>School | Professioneel</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Python</th>
              <td>Basis</td>
              <td>2</td>
              <td>School</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">C | C++ | C#</th>
              <td>Comfortabel</td>
              <td>20 +</td>
              <td>School | Eigen interesse</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Typescript</th>
              <td>Gemiddeld</td>
              <td>+/- 6</td>
              <td>School</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Javascript</th>
              <td>Gemiddeld</td>
              <td>+/- 8</td>
              <td>School | Eigen interesse | Professioneel</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>          
      </div>
      <!-- Databases -->
      <div class="row">
        <p>
          <span class="font-weight-bold txt-blue">Databases</span><br>
          Bij verschillende projecten heb ik met databases gewerkt.
        </p>
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">Type</th>
              <th scope="col">Kennisniveau</th>
              <th scope="col">Aantal projecten</th>
              <th scope="col">Motivatie</th>
              <th scope="col">Programmeer plezier</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">MySQL</th>
              <td>Comfortabel</td>
              <td>+/- 5</td>
              <td>School</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">MongoDB</th>
              <td>Basis</td>
              <td>1</td>
              <td>School</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Google Big Query</th>
              <td>Basis</td>
              <td>1</td>
              <td>School (Stage)</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Datadog</th>
              <td>Comfortabel</td>
              <td>1</td>
              <td>School (Stage)</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>          
      </div>
      <!-- Platformen -->
      <div class="row">
        <p>
          <span class="font-weight-bold txt-blue">Platformen</span><br>
          Ik heb voor verschillende platformen ontwikkeld.
        </p>
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">Platform</th>
              <th scope="col">Kennisniveau</th>
              <th scope="col">Aantal projecten</th>
              <th scope="col">Motivatie</th>
              <th scope="col">Programmeer plezier</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Ubuntu server</th>
              <td>Basis</td>
              <td>1</td>
              <td>School</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Arduino</th>
              <td>Comfortabel</td>
              <td>20 +</td>
              <td>School | Eigen interesse</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Raspberry Pi</th>
              <td>Gemiddeld</td>
              <td>2</td>
              <td>School | Eigen interesse | Professioneel</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Android</th>
              <td>Basis</td>
              <td>1</td>
              <td>School</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>          
      </div>
      <!-- 3D modeling -->
      <div class="row">
        <p>
          <span class="font-weight-bold txt-blue">3D modeling</span><br>
          Ik heb verschillende 3D modeling programmas gebruikt. Zo doe ik veel CAD design voor 3D print projecten.
        </p>
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">Programma</th>
              <th scope="col">Kennisniveau</th>
              <th scope="col">Aantal projecten</th>
              <th scope="col">Motivatie</th>
              <th scope="col">modelleer plezier</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Autodesk Fusion 360</th>
              <td>Comfortabel</td>
              <td>20 +</td>
              <td>Eigen interesse</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Google Sketchup</th>
              <td>Comfortabel</td>
              <td>10 +</td>
              <td>Eigen interesse</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Blender</th>
              <td>Basis</td>
              <td>2</td>
              <td>School | Eigen interesse</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-blue" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>          
      </div>
      <!-- Skills -->
      <div class="row">
        <p>
          <span class="font-weight-bold txt-blue">Skills</span><br>
          En dan als laatste nog een paar skills die ik bevat.<br>
          <span class="font-weight-bold">Talen</span><br>
          Engels | Nederlands<br>
          <span class="font-weight-bold">Machinebeheer</span><br>
          Auto | Heftruck | Reachtruck | 3D printer<br>
          <span class="font-weight-bold">Grafisch ontwerp</span><br>
          Adobe Photoshop | Adobe Illustrator | Adobe XD<br>
        </p>
      </div>
    </div>

    <!-- Interesses -->
    <div class="bg-blue">
      <div class="container">
        <div class="row mx-5">
          <div class="col mt-3">
            <h1 class="font-weight-bold text-light">INTERESSES</h1>
            <h2 class="text-muted">Buiten werk</h2>
          </div>
        </div>
        <div class="row mx-5">
          <div class="col">
            <p>
              CAD ontwerp<br>
              3D printer<br>
              Gamen<br>
              Computers samenstellen & bouwen
            </p>
          </div>
          <div class="col text-right">
            <p>
              Arduino<br>
              Technische hulp<br>
              Video editen<br>
              Muziek maken<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact -->
    <div class="container">
      <div class="row mx-5 mt-3">
        <div class="col">
          <h1 class="font-weight-bold">CONTACT</h1>
        </div>
      </div>
      <div class="row mx-5">
        <div class="col">
          <h2>Ik hoor graag van je</h2>
          <a href="https://www.facebook.com/roel.versteeg" rel="noopener noreferrer" target="_blank"><img class="socialicons pr-1" src="/content/logos/icon_facebook.svg"></a>
          <a href="https://www.youtube.com/user/roel0099" rel="noopener noreferrer" target="_blank"><img class="socialicons pr-1" src="/content/logos/icon_youtube.svg"></a>
          <a href="https://www.instagram.com/roelversteeg/" rel="noopener noreferrer" target="_blank"><img class="socialicons pr-1" src="/content/logos/icon_instagram.svg"></a>
          <a href="https://twitter.com/Roel_Versteeg" rel="noopener noreferrer" target="_blank"><img class="socialicons pr-1" src="/content/logos/icon_twitter.svg"></a>
          <a href="https://www.linkedin.com/in/roel-v-a66773124/" rel="noopener noreferrer" target="_blank"><img class="socialicons pr-1" src="/content/logos/icon_linkedin.svg"></a>
          <a href="https://github.com/Rovexx" rel="noopener noreferrer" target="_blank"><img class="socialicons pr-1" src="/content/logos/icon_github.svg"></a>
        </div>
        <div class="col text-center mb-3">
          <a type="button" class="btn btn-outline-primary btn-lg btn-block mb-3 text-dark" href="/content/bestanden/CV_Roel_Versteeg.pdf" download>DOWNLOAD CV</a>
          <a href="mailto:roel.versteeg@hotmail.com" class="txt-blue">roel.versteeg@hotmail.com</a>
        </div>
      </div>
    </div>
    <div class="bg-dark">
      <br>
      <!-- Include footer -->
      <?php include_once 'includes/footer.html';?>
    </div>
    <!-- Include scripts -->
    <?php include_once 'includes/scripts.html';?>
    <script>
      $(document).ready(function () {
        $('#nav_home').addClass('active');
        $('#nav_projects').removeClass('active');
        $('#nav_contact').removeClass('active');
      });
    </script>
  </body>
</html>