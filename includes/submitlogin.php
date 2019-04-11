<?php

session_start();

$admUser = 'theoneuer';
$admPass = '1234';

$formUser = $_POST['user'];
$formPass = $_POST['pass'];

if($admUser == $formUser && $admPass == $formPass) {
    session_start();
    $_SESSION['username'] = true;
    header('location: http://localhost/mobile-data-terminal/dashboard');
} else {
    $_SESSION['REDIR'] = true; 
    header('location: http://localhost/mobile-data-terminal/login');
}