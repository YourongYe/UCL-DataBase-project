<?php
  session_start();
  if (isset($_POST['submit'])) {
    if (isset($datefield_startdate) || isset($datefield_startdate) || $datefield_startdate >= $datefield_enddate) {
      $error = "Please enter valid startdate and enddate";
      header("Location: index.php?error=" . urlencode($error));
      exit();
    }
?>
