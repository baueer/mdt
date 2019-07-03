<?php

session_start();

$c_id = $_SESSION['activeCall'];
$c_sus = $_SESSION['c_sus'];
$c_wrritenRep = $_SESSION['writtenReport'];
$c_endDate = date('Y-m-d G:i:s');

$sql_stmt = "UPDATE calls
            SET end_time = '$c_endDate', active = '0', wrritenRep = '$c_writtenRep'
            WHERE id = '$c_id'";
$sql_stmt2 = "UPDATE persons SET rep_history = CONCAT(rep_history, '$c_id', ',') WHERE name = '$c_sus'";
$sql_stmt3 = "UPDATE persons SET active_call_id = 0 WHERE name = '$c_sus'";

include_once '../db/db.php';
$conn->query($sql_stmt);
$conn->query($sql_stmt2);
$conn->query($sql_stmt3);

$_SESSION['activeCall'] = 0;
header('location: http://localhost/mobile-data-terminal/dashboard');