<?php
  session_start();
  if(!$_SESSION['username']) {
    header('location: http://localhost/mobile-data-terminal/login');
  }
?>

<!doctype html>
<html lang="en">
<head>
  <?php include ('../includes/head.php');?>
</head>

<body>

  <!-- <?php 
  //   $username = $_POST['user'];
  //   $password = $_POST['pass'];

  //   if($username != 'theoneuer' || $password != '123456') { 
  //     header('Location: http://localhost/mobile-data-terminal/login');
  //     die();
  //   }
  // ?>

  Welcome <?php echo $_POST['user']; ?><br>
  Your pass is <?php echo $_POST['pass']; ?><br> -->

  <p><a href="./includes/logout.php">LOGOUT</a></p>

  <p style="font-size: 20px" class="cw">MOBILE DATA TERMINAL v0.0.1 ALPHA</p>

</body>
</html>