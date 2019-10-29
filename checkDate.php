<?php
  session_start();
  if (isset($_POST['submit'])) {
    if (!isset($datefield_startdate) || !isset($datefield_startdate)) {
      $error = "Please enter choose a startdate and enddate";
      exit();
    }
    else ($datefield_startdate >= $datefield_enddate)) {
      $error = "Please enter valid startdate and enddate";
      exit();
    }
  }
?>
