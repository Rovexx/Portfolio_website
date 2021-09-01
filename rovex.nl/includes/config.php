<?php
  session_start();

  // error_reporting(E_ERROR | E_PARSE);
  if (!isset($_SESSION['lang']))
  {
    $_SESSION['lang'] = "en";
  } else if (!empty($_GET['lang'] && isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']))
  {
    if ($_GET['lang'] == "en")
    {
      $_SESSION['lang'] = "en";
    } else
    {
      $_SESSION['lang'] = "nl";
    }
  }
  require_once $_SERVER['DOCUMENT_ROOT']."/rovex.nl/lang/" . $_SESSION['lang'] . ".php";
?>