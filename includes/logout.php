<?php

session_start();
$_SESION['REDIR'] = false;
unset($_SESSION['username']);

header('location: http://localhost/mobile-data-terminal/login');
