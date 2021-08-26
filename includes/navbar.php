<nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php?lang=<?= $_SESSION['lang'];?>">
    <img src="/content/logos/Rovex_Logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    Roel Versteeg
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <div class="navbar-nav">      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php if ($_SESSION['lang'] == "en") { ?>
            <span class="flag-icon flag-icon-us"></span> English</a>
          <?php } else { ?>
            <span class="flag-icon flag-icon-nl"></span> Nederlands</a>
          <?php } ?>
        <div class="dropdown-menu" aria-labelledby="dropdown">
          <?php if ($_SESSION['lang'] == "en") { ?>
            <a class="dropdown-item" href="?lang=nl"><span class="flag-icon flag-icon-nl"> </span>  Nederlands</a>
          <?php } else { ?>
            <a class="dropdown-item" href="?lang=en"><span class="flag-icon flag-icon-en"> </span>  English</a>
          <?php } ?>
        </div>
      </li>
      
      <a class="nav-item nav-link" href="index.php" id="nav_home">Home</a>
      <a class="nav-item nav-link" href="projects.php" id="nav_projects"><?= $lang['projects']; ?></a>
      <a class="nav-item nav-link" href="contact.php" id="nav_contact">Contact</a>
    </div>
  </div>
</nav>
<div class="spacer-tiny bg-blue"></div>