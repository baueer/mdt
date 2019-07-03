<?php
  session_start();
  $_SESSION['dashAuth'] = 1;
  $_SESSION['error'] = 0;

  if(!$_SESSION['username']) {
    $_SESSION['dashAuth'] = 0;
    header('location: http://localhost/mobile-data-terminal/login');
  }
?>

<!doctype html>
<html lang="en">
<head>
  <?php include ('../includes/head.php');?>
</head>

<body>

  <?php include ('../includes/headerDash.php'); ?>
  <?php include ('../includes/buttonsDash.php'); ?>

  <?php include ('../includes/dashboard/createCall.php'); ?>
  <?php include ('../includes/dashboard/activeCall.php'); ?>
  <?php include ('../includes/dashboard/writeReport.php') ?>

  <?php 
    if($_SESSION['activeCall'] > 0) echo "<script> document.getElementById('create-call-container').style.display = 'none'; document.getElementById('active-call-container').style.display = 'block';</script>";
  ?>

  <?php include ('../includes/error.php');?>
  <?php include ('../includes/footerDash.php'); ?>
  <script src="./js/scripts.js"></script>

</body>
</html>