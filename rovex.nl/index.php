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
          <img src="/rovex.nl/content/extra/Portret.jpg" class="img-fluid rounded" alt="Portrait">
        </div>
      </div>
    </div>

    <!-- Over mij -->
    <div class="bg-blue">
      <div class="container">
        <div class="row text-light">
          <div class="col-12 mt-3">
            <h1 class="font-weight-bold text-uppercase"><?= $lang['aboutMe']; ?></h1>
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
          <h1 class="txt-blue-darker font-weight-bold text-uppercase"><?= $lang['education']; ?></h1>
          <h2 class="txt-blue"><?= $lang['whatILearned']; ?></h2>
          <p>
            <span class="font-weight-bold">2017 - 2021</span><br>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              <span class="font-weight-bold">Hogeschool Rotterdam - Rotterdam Wijnhaven</span><br>
              <span class="font-italic">Creative Media and Game Technologies (CMGT)</span><br>
              • Propedeuse<br>
              • Bachelor of Science (Voltijd)<br>
              • Minor Game Design & Development<br>
            <?php } else { ?>
              <span class="font-weight-bold">Rotterdam University of Applied Sciences - Rotterdam Wijnhaven</span><br>
              <span class="font-italic">Creative Media and Game Technologies (CMGT)</span><br>
              • Propaedeutics<br>
              • Bachelor of Science (Fulltime)<br>
              • Minor Game Design & Development<br>
            <?php } ?>
          </p>
          <p>
            <span class="font-weight-bold">2012 - 2017</span><br>
            <span class="font-weight-bold">Fortes Lyceum - Gorinchem Wijdschildlaan</span><br>
            <span class="font-italic">Natuur en Gezondheid (NG)</span><br>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              • HAVO<br>
              • Technasium certificaat
            <?php } else { ?>
              • HAVO (Senior general secondary education)<br>
              • Technasium certificate
            <?php } ?>
          </p>
        </div>
        <!-- Ervaring -->
        <div class="col-md mt-3">
          <h1 class="txt-blue-darker font-weight-bold text-uppercase"><?= $lang['experience']; ?></h1>
          <h2 class="txt-blue"><?= $lang['whereIWorked']; ?></h2>
          <p>
            <span class="font-weight-bold">Feb. - Jun. | 2021</span><br>
            <a href="https://ultimaker.com/"><span style="color: #196ef0;" class="font-weight-bold">Ultimaker</span></a><br>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              <span class="font-italic">Stage programmeur</span><br>
              • Programmeren frontend en backend Phillips Hue<br>
            <?php } else { ?>
              <span class="font-italic">Internship programmer</span><br>
              • Programming front and backend for Phillips Hue<br>
            <?php } ?>
          </p>
          <p>
            <span class="font-weight-bold">Nov. 2013 - Feb. 2021</span><br>
            <a href="https://www.verhuisboxen.nl/"><span style="color: #343a40;" class="font-weight-bold">Verhuisboxen</span></a><br>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              <span class="font-italic">Verkoopmedewerker, Magazijnmedewerker</span><br>
              • Verkopen van verhuisdozen en materialen<br>
              • Voorraden aanvullen in het magazijn<br>
              • Meedenken aan optimalisatie van het werk<br>
            <?php } else { ?>
              <span class="font-italic">Sales assistent , Warehouse worker</span><br>
              • Selling of moving boxes and materials<br>
              • Replenishing warehouse stock<br>
              • Contribute to work optimisation<br>
            <?php } ?>
          </p>
          <p>
            <span class="font-weight-bold">Sept. - Dec. | 2019</span><br>
            <a href="https://www.q42.nl/werk/philips-hue"><span style="color: #84bc2d;" class="font-weight-bold">Q42</span></a><br>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              <span class="font-italic">Stage programmeur</span><br>
              • Programmeren frontend en backend Phillips Hue<br>
            <?php } else { ?>
              <span class="font-italic">Internship programmer</span><br>
              • Programming front and backend for Phillips Hue<br>
            <?php } ?>
          </p>
          <p>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              <span class="font-weight-bold">11 dagen/jaar | 2015, 2016, 2018</span><br>
              <a href="https://speelin.nl/"><span style="color: #852585;" class="font-weight-bold">Speelin</span></a><br>
              <span class="font-italic">Vrijwilliger huttenbouw</span><br>
              • Op en afbouwen Speel-In evenement<br>
              •	Toezicht houden op en helpen van kinderen bij het huttenbouwen<br>
            <?php } else { ?>
              <span class="font-weight-bold">11 days/jear | 2015, 2016, 2018</span><br>
              <a href="https://speelin.nl/"><span style="color: #852585;" class="font-weight-bold">Speelin</span></a><br>
              <span class="font-italic">Volunteer hut building</span><br>
              •	Setting up and cleaning up Speel-In event<br>
              •	Supervise and assist children in hut building<br>
            <?php } ?>
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
            <h2 class="text-light text-uppercase"><?= $lang['recentProjects']; ?>
              <span class="txt-blue-darkest">|</span>
              <a href="./projects.php?lang=<?= $_SESSION['lang'];?>" class="txt-grey text-uppercase"><?= $lang['more']; ?>
                <i class="material-icons">arrow_forward_ios</i>
              </a>
            </h2>
          </div>
        </div>
        <div class="row justify-content-center m-5">
          <!-- project 1 -->
          <div class="col-md-5 col-xl m-1 mb-3 bg-white text-center shadow infobox">
            <h2 class="my-2">School</h2>
            <img src="/rovex.nl/content/projecten/school/live_inc/header.png" class="img-fluid rounded" alt="Live Inc.">
            <p>Live Inc.</p>
            <a type="button" class="btn btn-outline-primary btn-lg btn-block mb-3 text-dark text-uppercase" href="./projects.php#school?lang=<?= $_SESSION['lang'];?>"><?= $lang['more']; ?>
              <i class="material-icons align-middle">more_horiz</i>
            </a>
          </div>
          <!-- project 2 -->
          <div class="col-md-5 col-xl m-1 mb-3 bg-white text-center shadow infobox">
            <h2 class="my-2">Hobby</h2>
            <img src="/rovex.nl/content/projecten/misc/kart_auto/header.png" class="img-fluid rounded" alt="ClassroomVR">
            <?php if ($_SESSION['lang'] == "nl") { ?>
              <p>Kart auto</p>
            <?php } else { ?>
              <p>Go Kart</p>
            <?php } ?>
            <a type="button" class="btn btn-outline-primary btn-lg btn-block mb-3 text-dark text-uppercase" href="./projects.php#misc?lang=<?= $_SESSION['lang'];?>"><?= $lang['more']; ?>
              <i class="material-icons align-middle">more_horiz</i>
            </a>
          </div>
          <!-- project 3 -->
          <div class="col-md-5 col-xl m-1 mb-3 bg-white text-center shadow infobox">
            <h2 class="my-2"><?= $lang['electronics']; ?></h2>
            <img src="/rovex.nl/content/projecten/hardware/racing_dash/header.png" class="img-fluid rounded" alt="ClassroomVR">
            <p>Simpit dashboard</p>
            <a type="button" class="btn btn-outline-primary btn-lg btn-block mb-3 text-dark text-uppercase" href="./projects.php#hardware?lang=<?= $_SESSION['lang'];?>"><?= $lang['more']; ?>
              <i class="material-icons align-middle">more_horiz</i>
            </a>
          </div>
          <!-- project 4 -->
          <div class="col-md-5 col-xl m-1 mb-3 bg-white text-center shadow infobox">
            <h2 class="my-2"><?= $lang['3DPrinting']; ?></h2>
            <img src="/rovex.nl/content/projecten/3d_printer/rovexyz/header.png" class="img-fluid rounded" alt="ClassroomVR">
            <p>3D printer</p>
            <a type="button" class="btn btn-outline-primary btn-lg btn-block mb-3 text-dark text-uppercase" href="./projects.php#3D_print?lang=<?= $_SESSION['lang'];?>"><?= $lang['more']; ?>
              <i class="material-icons align-middle">more_horiz</i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Ervaring -->
    <div class="container">
      <h1 class="txt-blue text-uppercase"><?= $lang['skills']; ?></h1>
      <p class="txt-blue-dark">
        <?php if ($_SESSION['lang'] == "nl") { ?>
          Ik heb met verschillende dingen ervaring. Hieronder een overzichtje van verschillende vaardigheden en wat ik er mee gedaan heb.
        <?php } else { ?>
          I have experience with a lot of different programming languages, tools and other stuff. Below you will find a list with a general overview of what I did.
        <?php } ?>
      </p>
      <!-- Programmeer talen -->
      <div class="row">
        <p>
          <span class="font-weight-bold txt-blue"><?= $lang['programmingLanguages']; ?></span><br>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            Tijdens het programmeren probeer ik altijd nieuwe technieken te leren en probeer ik aan veiligheid te denken.<br>
            Hoewel ik met veel talen ervaring heb wil dit niet zeggen dat ik ook graag met deze talen bezig ben. 
            Vanuit mijn opleiding is er veel gewerkt met bijvoorbeeld websites waarbij talen als HTML, CSS en PHP gebruikt werden. 
            Hier heb ik dus veel projecten mee gedaan maar hier had ik niet veel plezier in. Ik wil geen webdeveloper worden.
            Met talen als C++, C en C# heb ik bijvoorbeeld voor mijzelf heel veel projecten mee gedaan omdat ik dit fijn vind om te doen.
          <?php } else { ?>
            While programming, I always try to learn new techniques and try to think about security.<br>
            Although I have experience with many languages, this does not mean that I also enjoy working with these languages.
            During my education I worked a lot with, for example, websites where languages ​​such as HTML, CSS and PHP were used.
            So I did a lot of projects with this, but I didn't enjoy it much. I don't want to be a web developer.
            For example, I have done many projects for myself with languages ​​such as C++, C and C# because I enjoy doing this.
          <?php } ?>
        </p>
        <table class="table table-sm">
          <thead>
            <tr>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              <th scope="col">Taal</th>
              <th scope="col">Kennisniveau</th>
              <th scope="col">Aantal projecten</th>
              <th scope="col">Motivatie</th>
            <?php } else { ?>
              <th scope="col">Language</th>
              <th scope="col">Knowlage</th>
              <th scope="col">Projects</th>
              <th scope="col">Motivation</th>
            <?php } ?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">C#</th>
              <td><?= $lang['comfortable']; ?></td>
              <td>+/- 6</td>
              <td>School | <?= $lang['ownInterest']; ?> | <?= $lang['professional']; ?></td>
            </tr>
            <tr>
              <th scope="row">C/C++</th>
              <td><?= $lang['comfortable']; ?></td>
              <td>20 +</td>
              <td>School | <?= $lang['ownInterest']; ?></td>
            </tr>
            <tr>
              <th scope="row">Typescript</th>
              <td><?= $lang['average']; ?></td>
              <td>+/- 6</td>
              <td>School</td>
            </tr>
            <tr>
              <th scope="row">Javascript</th>
              <td><?= $lang['average']; ?></td>
              <td>+/- 8</td>
              <td>School | <?= $lang['ownInterest']; ?> | <?= $lang['professional']; ?></td>
            </tr>
            <tr>
              <th scope="row">PHP</th>
              <td><?= $lang['average']; ?></td>
              <td>+/- 5</td>
              <td>School | <?= $lang['ownInterest']; ?> | <?= $lang['professional']; ?></td>
            </tr>
            <tr>
              <th scope="row">SQL</th>
              <td><?= $lang['average']; ?></td>
              <td>+/- 5</td>
              <td>School | <?= $lang['ownInterest']; ?> | <?= $lang['professional']; ?></td>
            </tr>
            <tr>
              <th scope="row">HTML</th>
              <td><?= $lang['average']; ?></td>
              <td>+/- 8</td>
              <td>School | <?= $lang['ownInterest']; ?> | <?= $lang['professional']; ?></td>
            </tr>
            <tr>
              <th scope="row">CSS</th>
              <td><?= $lang['basic']; ?></td>
              <td>+/- 8</td>
              <td>School | <?= $lang['professional']; ?></td>
            </tr>
            <tr>
              <th scope="row">Python</th>
              <td><?= $lang['basic']; ?></td>
              <td>4</td>
              <td>School | <?= $lang['professional']; ?></td>
            </tr>
            <tr>
              <th scope="row">Java</th>
              <td><?= $lang['basic']; ?></td>
              <td>1</td>
              <td>School</td>
            </tr>
          </tbody>
        </table>          
      </div>
      <!-- Databases -->
      <div class="row">
        <p>
          <span class="font-weight-bold txt-blue">Databases</span><br>
          <?php if ($_SESSION['lang'] == "nl") { ?>
            Bij verschillende projecten heb ik met de volgende databases gewerkt.
          <?php } else { ?>        
            On several projects I have worked with the following databases.
          <?php } ?>
        </p>
        <table class="table table-sm">
          <thead>
            <tr>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              <th scope="col">Type</th>
              <th scope="col">Kennisniveau</th>
              <th scope="col">Aantal projecten</th>
              <th scope="col">Motivatie</th>
            <?php } else { ?>
              <th scope="col">Type</th>
              <th scope="col">Knowlage</th>
              <th scope="col">Projects</th>
              <th scope="col">Motivation</th>
            <?php } ?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">MySQL</th>
              <td><?= $lang['comfortable']; ?></td>
              <td>+/- 5</td>
              <td>School</td>
            </tr>
            <tr>
              <th scope="row">MongoDB</th>
              <td><?= $lang['basic']; ?></td>
              <td>1</td>
              <td>School</td>
            </tr>
            <tr>
              <th scope="row">Google Big Query</th>
              <td><?= $lang['basic']; ?></td>
              <td>1</td>
              <td>School (Stage)</td>
            </tr>
            <tr>
              <th scope="row">Datadog</th>
              <td><?= $lang['comfortable']; ?></td>
              <td>1</td>
              <td>School (Stage)</td>
            </tr>
          </tbody>
        </table>          
      </div>
      <!-- Platformen -->
      <div class="row">
        <p>
          <span class="font-weight-bold txt-blue"><?= $lang['platforms']; ?></span><br>
          <?php if ($_SESSION['lang'] == "nl") { ?>
              Ik heb voor verschillende platformen ontwikkeld.
            <?php } else { ?>
              I have developed applications for the following platforms.
            <?php } ?>
        </p>
        <table class="table table-sm">
          <thead>
            <tr>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              <th scope="col">Platform</th>
              <th scope="col">Kennisniveau</th>
              <th scope="col">Aantal projecten</th>
              <th scope="col">Motivatie</th>
            <?php } else { ?>
              <th scope="col">Platform</th>
              <th scope="col">Knowlage</th>
              <th scope="col">Projects</th>
              <th scope="col">Motivation</th>
            <?php } ?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Arduino / ESP32</th>
              <td><?= $lang['comfortable']; ?></td>
              <td>20 +</td>
              <td>School | <?= $lang['ownInterest']; ?></td>
            </tr>
            <tr>
              <th scope="row">Windows</th>
              <td><?= $lang['comfortable']; ?></td>
              <td>6</td>
              <td>School | <?= $lang['ownInterest']; ?> | <?= $lang['professional']; ?></td>
            </tr>
            <tr>
              <th scope="row">Raspberry Pi</th>
              <td><?= $lang['average']; ?></td>
              <td>2</td>
              <td>School | <?= $lang['ownInterest']; ?> | <?= $lang['professional']; ?></td>
            </tr>
            <tr>
              <th scope="row">Ubuntu server</th>
              <td><?= $lang['basic']; ?></td>
              <td>1</td>
              <td>School</td>
            </tr>
            <tr>
              <th scope="row">Android</th>
              <td><?= $lang['basic']; ?></td>
              <td>1</td>
              <td>School</td>
            </tr>
          </tbody>
        </table>          
      </div>
      <!-- 3D modeling -->
      <div class="row">
        <p>
          <span class="font-weight-bold txt-blue">3D modeling</span><br>
          <?php if ($_SESSION['lang'] == "nl") { ?>
              Ik heb verschillende 3D modeling programmas gebruikt. Zo doe ik veel CAD design voor 3D print projecten.
            <?php } else { ?>
              I have used several 3D modeling programs. I mostly do CAD design for 3D printed objects.
            <?php } ?>
        </p>
        <table class="table table-sm">
          <thead>
            <tr>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              <th scope="col">Programma</th>
              <th scope="col">Kennisniveau</th>
              <th scope="col">Aantal projecten</th>
              <th scope="col">Motivatie</th>
            <?php } else { ?>
              <th scope="col">Program</th>
              <th scope="col">Knowlage</th>
              <th scope="col">Projects</th>
              <th scope="col">Motivation</th>
            <?php } ?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Autodesk Fusion 360</th>
              <td><?= $lang['comfortable']; ?></td>
              <td>20 +</td>
              <td>School | <?= $lang['ownInterest']; ?></td>
            </tr>
            <tr>
              <th scope="row">Google Sketchup</th>
              <td><?= $lang['comfortable']; ?></td>
              <td>10 +</td>
              <td><?= $lang['ownInterest']; ?></td>
            </tr>
            <tr>
              <th scope="row">Blender</th>
              <td><?= $lang['basic']; ?></td>
              <td>2</td>
              <td>School | <?= $lang['ownInterest']; ?></td>
            </tr>
          </tbody>
        </table>          
      </div>
      <!-- Skills -->
      <div class="row">
        <p>
          <span class="font-weight-bold txt-blue">Skills</span><br>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              En dan als laatste nog een paar skills die ik bevat.<br>
              <span class="font-weight-bold">Talen</span><br>
              Engels | Nederlands<br>
              <span class="font-weight-bold">Machinebeheer</span><br>
              Auto | Heftruck | Reachtruck | 3D printer<br>
              <span class="font-weight-bold">Grafisch ontwerp</span><br>
              Adobe Photoshop | Adobe Illustrator | Adobe XD<br>
            <?php } else { ?>
              Some miscellaneous skills i have.<br>
              <span class="font-weight-bold">Languages</span><br>
              English | Dutch<br>
              <span class="font-weight-bold">Machines</span><br>
              Car | Forklift | Reachtruck | 3D printer<br>
              <span class="font-weight-bold">Graphical design</span><br>
              Adobe Photoshop | Adobe Illustrator | Adobe XD<br>
            <?php } ?>
        </p>
      </div>
    </div>

    <!-- Interesses -->
    <div class="bg-blue">
      <div class="container">
        <div class="row mx-5">
          <div class="col mt-3">
            <h1 class="font-weight-bold text-light text-uppercase"><?= $lang['interests']; ?></h1>
            <h2 class="txt-grey"><?= $lang['outsideWork']; ?></h2>
          </div>
        </div>
        <div class="row mx-5">
          <div class="col">
            <p>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              CAD ontwerp<br>
              3D printer<br>
              Gamen<br>
              Computers samenstellen & bouwen
            <?php } else { ?>
              CAD design<br>
              3D printer<br>
              Gaming<br>
              Building custom gaming computers
            <?php } ?>
            </p>
          </div>
          <div class="col text-right">
            <p>
            <?php if ($_SESSION['lang'] == "nl") { ?>
              Arduino<br>
              Technische hulp<br>
              Video editen<br>
              Muziek maken<br>
            <?php } else { ?>
              Arduino<br>
              General technical support<br>
              Video editing<br>
              Making music<br>
            <?php } ?>
            </p>
          </div>
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
    <script>
      $(document).ready(function () {
        $('#nav_home').addClass('active');
        $('#nav_projects').removeClass('active');
        $('#nav_contact').removeClass('active');
      });
    </script>
  </body>
</html>