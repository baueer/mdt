<meta charset="utf-8">

<meta name="description" content="LV Police Department Mobile Data Terminal">
<meta name="author" content="LV Police Department">

<link rel="stylesheet" href="./css/main.css">

<?php
    switch($_SERVER['REQUEST_URI']) {
        case '/mobile-data-terminal/login': $title = 'Log-in'; break;
        case '/mobile-data-terminal/dashboard': $title = 'Dashboard'; break;
        default: $title = 'N/A';
    }
    $title = $title.' | MDT LVPD';
?>
<title><?php echo $title?></title>