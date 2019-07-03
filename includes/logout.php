<?php

session_start();
$_SESSION['error'] = 0;
$_SESSION['activeCall'] = 0;
unset($_SESSION['username']);

header('location: http://localhost/mobile-data-terminal/login');
