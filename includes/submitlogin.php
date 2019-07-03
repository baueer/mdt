<?php

session_start();

$admUser = 'theoneuer';
$admPass = '1234';

$loggedUser = $_POST['user'];

if($admUser == $_POST['user'] && $admPass == $_POST['pass']) {
    session_start();
    $_SESSION['username'] = 1;
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['activeCall'] = 0;
    header('location: http://localhost/mobile-data-terminal/dashboard');
} else {
    $_SESSION['error'] = 1; 
    header('location: http://localhost/mobile-data-terminal/login');
}